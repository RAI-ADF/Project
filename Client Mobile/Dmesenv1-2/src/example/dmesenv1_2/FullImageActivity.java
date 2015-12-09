package example.dmesenv1_2;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;

public class FullImageActivity extends Activity {
	int position = 0;
	String[] s;
	String[] h;
	
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.full_image);
        
        s = new String[]{"Sayur Asem", "Ayam Goreng", "Bakso", "Sayur Kangkung",
        		"Mie Goreng", "Mie Rebus", "Nasi Goreng", "Pempek", "Sayur Sop",
        		"Soto", "Cendol", "Air Kelapa", "Kopi", "Teh"};
 
        h = new String[]{"Rp. 15.000", "Rp. 20.000", "Rp. 18.000", "Rp. 15.000",
        		"Rp. 10.000", "Rp. 10.000", "Rp. 11.000", "Rp. 10.000", "Rp. 15.000",
        		"Rp. 10.000", "Rp. 8.000", "Rp. 8.000", "Rp. 5.000", "Rp. 5.000"};
        
        // get intent data
        Intent i = getIntent();
 
        // Selected image id
        position = i.getExtras().getInt("id");
        ImageAdapter imageAdapter = new ImageAdapter(this);
 
        ImageView imageView = (ImageView) findViewById(R.id.full_image_view);
        imageView.setImageResource(imageAdapter.mThumbIds[position]);
        
        //
        Button order = (Button)findViewById(R.id.order);
        order.setOnClickListener(new View.OnClickListener()
        {
        	
            public void onClick(View v) {
                // TODO Auto-generated method stub
                Intent i = new Intent(FullImageActivity.this, OrderList.class);
//                i.putExtra("id_gbr", position);
                i.putExtra("nama", s[position]);
                i.putExtra("harga", h[position]);
                startActivity(i);
            }
        });//
    }
 
}