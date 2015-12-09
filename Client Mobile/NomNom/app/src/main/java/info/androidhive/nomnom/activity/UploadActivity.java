package info.androidhive.nomnom.activity;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.graphics.Bitmap;
import android.net.Uri;
import android.os.AsyncTask;
import android.os.Bundle;
import android.provider.MediaStore;
import android.util.Base64;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.Toast;

import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.util.HashMap;

import info.androidhive.nomnom.R;
import info.androidhive.nomnom.app.AppConfig;
import info.androidhive.nomnom.helper.RequestHandler;
import info.androidhive.nomnom.helper.SQLiteHandler;
import info.androidhive.nomnom.helper.SessionManager;

/**
 * Created by user on 12/8/15.
 */
public class UploadActivity extends Activity{

    private static final String TAG = RegisterActivity.class.getSimpleName();
    public static final String UPLOAD_URL = AppConfig.URL_UPLOAD;
    public static final String UPLOAD_KEY = "image";
    public static final String UPLOAD_CAP = "caption";
    private int PICK_IMAGE_REQUEST = 1;

    private ImageButton nomButton;
    private Button btnUpload;
    private EditText inputCaption;
    private ImageView img;
    private Bitmap bitmap;
    private Uri filePath;
    private ProgressDialog pDialog;
    private SessionManager session;
    private SQLiteHandler db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_upload);

        inputCaption = (EditText) findViewById(R.id.caption);
        nomButton = (ImageButton) findViewById(R.id.nomButton);
        btnUpload = (Button) findViewById(R.id.btnUpload);
        img = (ImageView) findViewById(R.id.img);

        btnUpload.setOnClickListener(new View.OnClickListener() {

            public void onClick(View view) {
                Intent intent = new Intent();
                intent.setType("image/*");
                intent.setAction(Intent.ACTION_GET_CONTENT);
                startActivityForResult(Intent.createChooser(intent, "Select Picture"), PICK_IMAGE_REQUEST);
            }

        });

        nomButton.setOnClickListener(new View.OnClickListener() {

            public void onClick(View view) {
                String caption = inputCaption.getText().toString().trim();
                uploadImage(caption);

                Intent intent = new Intent(
                        UploadActivity.this,
                        MainActivity.class);
                startActivity(intent);
                finish();
            }

        });
    }

    public String getStringImage(Bitmap bmp){
        ByteArrayOutputStream baos = new ByteArrayOutputStream();
        bmp.compress(Bitmap.CompressFormat.JPEG, 40, baos);
        byte[] imageBytes = baos.toByteArray();
        String encodedImage = Base64.encodeToString(imageBytes, Base64.DEFAULT);
        return encodedImage;
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if (requestCode == PICK_IMAGE_REQUEST && resultCode == RESULT_OK && data != null && data.getData() != null) {

            filePath = data.getData();
            try {
                bitmap = MediaStore.Images.Media.getBitmap(getContentResolver(), filePath);
                img.setImageBitmap(bitmap);
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    }

    private void uploadImage(final String caption) {
        class UploadImage extends AsyncTask<Bitmap, Void, String> {

            ProgressDialog loading;
            RequestHandler rh = new RequestHandler();

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(UploadActivity.this, "Uploading Image", "Please wait...", true, true);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(getApplicationContext(), s, Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Bitmap... params) {
                Bitmap bitmap = params[0];
                String uploadImage = getStringImage(bitmap);

                HashMap<String, String> data = new HashMap<>();
                data.put(UPLOAD_KEY, uploadImage);
                data.put(UPLOAD_CAP, caption);

                String result = rh.sendPostRequest(UPLOAD_URL, data);

                return result;
            }
        }

        UploadImage ui = new UploadImage();
        ui.execute(bitmap);
    }
}
