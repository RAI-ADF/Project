package com.example.finley.eventorganizerapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

/**
 * Created by Finley on 12/8/2015.
 */
public class SignUp extends Activity{

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.head_signup);
    }

    public void back(View view){
        Intent newActivity = new Intent(SignUp.this, Login.class);
        startActivity(newActivity);
        finish();
    }

}
