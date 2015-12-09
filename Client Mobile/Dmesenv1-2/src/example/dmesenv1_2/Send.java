package example.dmesenv1_2;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;

public class Send extends Activity {
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.send);	 
		
		Intent i = this.getIntent();
		
		}
}
