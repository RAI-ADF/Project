package com.milarian.milarian;

import android.content.Intent;
import android.content.IntentFilter;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.ImageButton;
import android.widget.TextView;

public class CompanyProfile extends AppCompatActivity {
    int index;
    ImageButton compLogo;
    TextView compName, compDesc, desc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_company_profile);
        Intent mIntent = getIntent();
        index = mIntent.getIntExtra("index",0);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        compLogo = (ImageButton)findViewById(R.id.compLogo);
        compName = (TextView)findViewById(R.id.companyName);
        compDesc = (TextView)findViewById(R.id.companyDesc);
        desc = (TextView)findViewById(R.id.desc);
        if(index==1){
            compLogo.setImageResource(R.mipmap.ic_logo_ladouchevita);
            compName.setText("Ladouchevita");
            desc.setText("Ladouchevita adalah perusahaan yang berdiri tahun 2010 dan bergerak di industri pakaian.");
        }
        if(index==2){
            compLogo.setImageResource(R.mipmap.ic_logo_bokp);
            compName.setText("BOKP");
            desc.setText("BOKP adalah sebuah wirausaha kecil yang bergerak di bidang perfotokopian");
        }if(index==3){
            compLogo.setImageResource(R.mipmap.ic_logo_chiyo);
            compName.setText("Chiyo Dessert");
            desc.setText("Chiyo Dessert adalah sebuah usaha dalam bidang dessert yang sering mengisi stand-stand di event yang cukup besar");
        }
    }

}
