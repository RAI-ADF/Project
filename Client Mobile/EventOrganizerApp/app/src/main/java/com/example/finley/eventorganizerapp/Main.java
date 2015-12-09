package com.example.finley.eventorganizerapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.TabHost;
import android.widget.TabHost.TabSpec;
/**
 * Created by Finley on 12/8/2015.
 */
public class Main extends Activity {

    @Override
    protected void onCreate(Bundle bundle){
        super.onCreate(bundle);
        setContentView(R.layout.head_menu);
        setTab();
    }

    public void setTab(){
        TabHost tabHost = (TabHost)findViewById(R.id.tabHost);

        TabSpec tab1 = (TabSpec)tabHost.newTabSpec("tab1");
        TabSpec tab2 = (TabSpec)tabHost.newTabSpec("tab2");
        TabSpec tab3 = (TabSpec)tabHost.newTabSpec("tab3");
        TabSpec tab4 = (TabSpec)tabHost.newTabSpec("tab4");

        tab1.setIndicator("Home");
        tab1.setContent(new Intent(this, Home.class));

        tab2.setIndicator("Vendor");
        tab2.setContent(new Intent(this, Vendor.class));

        tab3.setIndicator("L O");
        tab3.setContent(new Intent(this, LO.class));

        tab4.setIndicator("Setting");
        tab4.setContent(new Intent(this, Setting.class));

        tabHost.addTab(tab1);
        tabHost.addTab(tab2);
        tabHost.addTab(tab3);
        tabHost.addTab(tab4);

        setContentView(tabHost);
    }

}
