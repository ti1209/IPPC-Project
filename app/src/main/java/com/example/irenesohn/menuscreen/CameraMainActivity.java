package com.example.irenesohn.menuscreen;


import android.os.*;
import android.widget.*;
import android.view.View;
import android.content.Intent;
import android.provider.MediaStore;
import android.support.v7.app.*;
import android.graphics.*;



public class CameraMainActivity extends AppCompatActivity{


    ImageView ivPicture;

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_camera);


        ImageButton btnTakePicture = (ImageButton) findViewById(R.id.btnTakePicture);
        ImageView ivPicture = (ImageView) findViewById(R.id.ivPicture);

        btnTakePicture.setOnClickListener(new View.OnClickListener()

        {
            public void onClick(View view) {
                Intent intent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
                startActivityForResult(intent, 0);
            }
        });
    }

    protected void onActivityResult(int requestCode, int resultCode, Intent data){
        super.onActivityResult(requestCode, resultCode, data);
        Bitmap bitmap = (Bitmap)data.getExtras().get("data");
        ivPicture.setImageBitmap(bitmap);
    }
}



