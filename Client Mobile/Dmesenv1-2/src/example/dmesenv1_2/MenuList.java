package example.dmesenv1_2;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.AdapterView.OnItemClickListener;

public class MenuList extends MainActivity {
	
	@Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.menu);
        
        Intent i = this.getIntent();
        
        GridView gridView = (GridView) findViewById(R.id.grid_view);
        
        // Instance of ImageAdapter Class
        gridView.setAdapter(new ImageAdapter(this));
 
        /**
         * On Click event for Single Gridview Item
         * */
        gridView.setOnItemClickListener(new OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View v,
                    int position, long id) {
 
                // Sending image id to FullScreenActivity
                Intent i = new Intent(getApplicationContext(), FullImageActivity.class);
                // passing array index
                i.putExtra("id", position);
                startActivity(i);
            }
        });

	}
        public void onClick(View v) {
   		 //  finish();
   	   }
   }