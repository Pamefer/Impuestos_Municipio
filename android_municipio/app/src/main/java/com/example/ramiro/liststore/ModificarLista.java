package com.example.ramiro.liststore;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.view.View.OnClickListener;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import java.sql.SQLException;

public class ModificarLista extends AppCompatActivity implements OnClickListener{
    EditText et,e_nom, e_tel, e_cor, e_ced,e_pla;
    Button btnActualizar, btnEliminar;

    long member_id;
    SQLControlador dbcon;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_modificar_lista);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        dbcon = new SQLControlador(this);
        try {
            dbcon.abrirBaseDeDatos();
        } catch (SQLException e) {
            e.printStackTrace();
        }

        et = (EditText) findViewById(R.id.et_miembro_id);
        //e_nom = (EditText) findViewById(R.id.et_miembrofecha);
        e_tel = (EditText) findViewById(R.id.et_telefono);
        e_cor = (EditText) findViewById(R.id.et_correo);
        e_ced = (EditText) findViewById(R.id.et_cedula);
        e_pla = (EditText) findViewById(R.id.et_placa);
        btnActualizar = (Button) findViewById(R.id.btnActualizar);
        btnEliminar = (Button) findViewById(R.id.btnEliminar);

        Intent i = getIntent();
        String memberID = i.getStringExtra("miembroId");
        String memberName = i.getStringExtra("miembroNombre");
        String memberTelefono = i.getStringExtra("miembroTelefono");
        String memberCorreo = i.getStringExtra("miembroCorreo");
        String memberCedula = i.getStringExtra("miembroCedula");
        String memberPlaca = i.getStringExtra("miembroPlac");

        member_id = Long.parseLong(memberID);

        et.setText(memberName);
        e_tel.setText(memberTelefono);
        e_cor.setText(memberCorreo);
        e_ced.setText(memberCedula);
        e_pla.setText(memberPlaca);

        btnActualizar.setOnClickListener(this);
        btnEliminar.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        // TODO Auto-generated method stub
        switch (v.getId()) {
            case R.id.btnActualizar:
                String memName_upd = et.getText().toString();
                String memTele = e_tel.getText().toString();
                String memCorr = e_cor.getText().toString();
                String memCedu = e_ced.getText().toString();
                String memPlaca= e_pla.getText().toString();

                dbcon.actualizarDatos(member_id, memName_upd,memTele, memCorr, memCedu,memPlaca);
                this.returnHome();
                break;

            case R.id.btnEliminar:
                dbcon.deleteData(member_id);
                this.returnHome();
                break;
        }
    }

    public void returnHome() {
        Intent home_intent = new Intent(getApplicationContext(),
                MainActivity.class).setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);

        startActivity(home_intent);
    }

}
