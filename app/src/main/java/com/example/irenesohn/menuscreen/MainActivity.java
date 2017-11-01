package com.example.irenesohn.menuscreen;

import android.support.v7.app.*;
import android.os.*;
import android.view.View.*;
import android.widget.*;
import android.view.*;
import android.content.*;


public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ImageButton btn1 = (ImageButton)findViewById(R.id.map_button);
        btn1.setOnClickListener(new OnClickListener() {
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), MapsActivity.class);
                startActivity(intent);
            }
        });



        ImageButton btn2 = (ImageButton)findViewById(R.id.carmera_button);
        btn2.setOnClickListener(new OnClickListener(){
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), CameraMainActivity.class);
                startActivity(intent);
            }
        });

        ImageButton btn3 = (ImageButton)findViewById(R.id.info_button);
     /*   btn3.setOnClickListener(new OnClickListener(){
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), InfoActivity.class);
                startActivity(intent);
            });*/

        ImageButton btn4 = (ImageButton)findViewById(R.id.memo_button);
        }
    }


