package example.dmesenv1_2;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

public class MainActivity extends Activity {
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.mainmenu);
	       
	       	Button m = (Button)findViewById(R.id.buttonMenu);
	        m.setOnClickListener(new View.OnClickListener()
	        {
	        	
	            public void onClick(View v) {
	                // TODO Auto-generated method stub
	                Intent i = new Intent(MainActivity.this, MenuList.class);
	                startActivity(i);
	            }
	        });
	        
	        Button o = (Button)findViewById(R.id.buttonOrder);
	        o.setOnClickListener(new View.OnClickListener()
	        {
	        	
	            public void onClick(View v) {
	                // TODO Auto-generated method stub
	                Intent i = new Intent(MainActivity.this, OrderList.class);
	                startActivity(i);
	            }
	        });
	       
		}
}
