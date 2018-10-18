package id.nawawi.sosialchatlayout;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import id.nawawi.sosialchatlayout.fragment.CallsFragment;
import id.nawawi.sosialchatlayout.fragment.ChatsFragment;
import id.nawawi.sosialchatlayout.fragment.StatusFragment;

public class MainActivity extends AppCompatActivity {

    Button btn_chats, btn_status, btn_calls;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn_chats = (Button) findViewById(R.id.btn_chat);
        btn_status = (Button) findViewById(R.id.btn_status);
        btn_calls = (Button) findViewById(R.id.btn_call);

        btn_chats.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getSupportFragmentManager().beginTransaction().add(R.id.main_fragment, new ChatsFragment()).commit();
            }
        });

        btn_status.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getSupportFragmentManager().beginTransaction().add(R.id.main_fragment, new StatusFragment()).commit();
            }
        });

        btn_calls.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getSupportFragmentManager().beginTransaction().add(R.id.main_fragment, new CallsFragment()).commit();
            }
        });
    }
}
