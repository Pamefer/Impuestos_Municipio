package com.example.ramiro.liststore;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class AgregarLista extends Activity implements View.OnClickListener {
    EditText nom,tel, cor,ced,pla;
    Button btnAgregar, btregresar;
    SQLControlador dbconeccion;
    public String formatteDate;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_agregar_lista);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        //setSupportActionBar(toolbar);

        nom = (EditText) findViewById(R.id.nombres);
        tel = (EditText) findViewById(R.id.telefono);
        cor = (EditText) findViewById(R.id.correo);
        ced = (EditText) findViewById(R.id.cedula);
        pla = (EditText) findViewById(R.id.placa);

        btnAgregar = (Button) findViewById(R.id.btnAgregarId);
        btregresar = (Button) findViewById(R.id.btnregresar);

        dbconeccion = new SQLControlador(this);
        try {
            dbconeccion.abrirBaseDeDatos();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        btnAgregar.setOnClickListener(this);
        btregresar.setOnClickListener(this);
    }

    public void onClick(View v) {
        // TODO Auto-generated method stub
        switch (v.getId()) {
            case R.id.btnAgregarId:
                String name = nom.getText().toString();
                String cel = tel.getText().toString();
                String corr = cor.getText().toString();
                String cedul = ced.getText().toString();
                String plac = pla.getText().toString();

                //inserta en la base de datos de la app
                dbconeccion.insertarDatos(name,cel,corr, cedul,plac);
                Intent main = new Intent(this, AgregarLista.class);
                startActivity(main);
                break;
            case R.id.btnregresar:
                Intent main1 = new Intent(this, MainActivity.class);
                startActivity(main1);
                break;

            default:
                break;
        }
    }
}
