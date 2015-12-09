package example.dmesenv1_2;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

public class Splash extends Activity{

	private boolean backbtnPress;
	private static final int splashDuration = 3000;
	private Handler myHandler;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		myHandler = new Handler();
		myHandler.postDelayed(new Runnable(){
			@Override
			public void run(){
				finish();
				
				if (!backbtnPress){
					Intent intent = new Intent(Splash.this,MainActivity.class);
					Splash.this.startActivity(intent);
				}
			}
		}, splashDuration);
	}
	
	@Override
	public void onBackPressed(){
		backbtnPress = true;
		super.onBackPressed();
	}
}
