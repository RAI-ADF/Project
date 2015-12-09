package com.milarian.milarian;

import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.EditText;

public class Signup extends AppCompatActivity {
    EditText firstName, lastName, newUsername, newPassword, newEmail;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_signup);
        //Toolbar toolbar = (Toolbar) findViewById(R.id.tool_bar);
        //setSupportActionBar(toolbar);
        firstName = (EditText)findViewById(R.id.firstName);
        lastName = (EditText)findViewById(R.id.lastName);
        newUsername = (EditText)findViewById(R.id.newUsername);
        newPassword = (EditText)findViewById(R.id.newPassword);
        newEmail = (EditText)findViewById(R.id.newEmail);

    }

}
