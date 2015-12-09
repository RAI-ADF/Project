package com.milarian.milarian;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import com.loopj.android.http.*;

import com.milarian.milarian.util.ServiceHandler;

public class Login extends AppCompatActivity {
    EditText username, password;
    Button signIn, register;
    String username_txt, password_txt;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        username = (EditText)findViewById(R.id.username);
        password = (EditText)findViewById(R.id.password);
        signIn = (Button)findViewById(R.id.signIn);
        register = (Button)findViewById(R.id.register);
    }

    public void register_button(View view){
        Intent regActivity = new Intent(Login.this, Signup.class);
        startActivity(regActivity);
    };

    public void signIn_button(View view){
        username_txt = username.getText().toString();
        password_txt = password.getText().toString();
        if((username_txt.equals("dvgjoshua")) && (password_txt.equals("admin"))) {
            Intent profActivity = new Intent(Login.this, MainActivity.class);
            startActivity(profActivity);
            finish();
        } else {
            Log.d("Login", "Incorrect username or password. ");
        }
    };
}
