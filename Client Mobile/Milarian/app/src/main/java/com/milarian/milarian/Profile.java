package com.milarian.milarian;

import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.TextView;

public class Profile extends AppCompatActivity {
    TextView name, description, profileDesc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profile);
        name = (TextView)findViewById(R.id.name);
        description = (TextView)findViewById(R.id.description);
        profileDesc = (TextView)findViewById(R.id.profileDesc);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        name.setText("Josua Deston");
        description.setText("Mobile Developer");
        String isi = "Jenis Kelamin : Laki-laki\nTempat, Tanggal Lahir : Denpasar, 30 Maret 1995\nPendidikan : S1 Teknik Informatika Telkom University\nE-mail : dvgn.joshua@gmail.com\nTelepon/HP : 087824604560";
        profileDesc.setText(isi);
    }

}
