package com.milarian.milarian;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.ActionBarActivity;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;

import com.ikimuhendis.ldrawer.ActionBarDrawerToggle;
import com.ikimuhendis.ldrawer.DrawerArrowDrawable;

import org.json.JSONArray;
import org.json.JSONObject;
import org.w3c.dom.Text;

import java.util.ArrayList;
import java.util.HashMap;

public class MainActivity extends ActionBarActivity {
    private static final String TAG_COMPANIES = "companies";
    private static final String TAG_ID = "_id";
    private static final String TAG_NAME = "name";
    private static final String TAG_INDUSTRY = "industry";
    int viewIndex=0;
    Button apply;
    ImageButton companyLogo;
    TextView companyName, companyIndustry, companyDesc;
    //private Toolbar toolbar ;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);

        viewIndex = 1;
        apply = (Button)findViewById(R.id.apply);
        companyLogo = (ImageButton)findViewById(R.id.companyLogo);
        companyName = (TextView)findViewById(R.id.CompanyName);
        companyIndustry = (TextView)findViewById(R.id.CompanyIndustry);

        companyLogo.setImageResource(R.mipmap.ic_logo_ladouchevita);
        companyName.setText("Ladouchevita");
        companyIndustry.setText("Clothing");
        //toolbar = (Toolbar) findViewById(R.id.tool_bar);
        //setSupportActionBar(toolbar);
        };

    public void apply_button(View view){
        Intent compActivity = new Intent(MainActivity.this, CompanyProfile.class);
        compActivity.putExtra("index",viewIndex);
        startActivity(compActivity);
    }

    public void swipeLeft(View view){
        if(viewIndex==3){
            companyLogo.setImageResource(R.mipmap.ic_logo_bokp);
            companyName.setText("BOKP");
            companyIndustry.setText("Office");
            viewIndex--;
        }else if(viewIndex==2){
            companyLogo.setImageResource(R.mipmap.ic_logo_ladouchevita);
            companyName.setText("Ladouchevita");
            companyIndustry.setText("Clothing");
            viewIndex--;
        }else{

        }
    }
    public void swipeRight(View view){
        if(viewIndex==1){
            companyLogo.setImageResource(R.mipmap.ic_logo_bokp);
            companyName.setText("BOKP");
            companyIndustry.setText("Office");
            viewIndex++;
        }else if(viewIndex==2){
            companyLogo.setImageResource(R.mipmap.ic_logo_chiyo);
            companyName.setText("Chiyo Dessert");
            companyIndustry.setText("Food & Marketing");
            viewIndex++;
        }else{

        }
    }

    private ArrayList<HashMap<String, String>> ParseJSON(String json){
        if(json != null){
            try{
                ArrayList<HashMap<String, String>> companyList = new ArrayList<HashMap<String, String>>();
                JSONObject jsonobj = new JSONObject(json);

                JSONArray companies = jsonobj.getJSONArray()
            }
        }
    }

    public void menu_button(View view){
        Intent settingActivity = new Intent(MainActivity.this, Setting.class);
        startActivity(settingActivity);
    }
    public void accept_button(View view){

    }
    public void profile_button(View view){
        Intent profActivity = new Intent(MainActivity.this, Profile.class);
        startActivity(profActivity);
    }

}
