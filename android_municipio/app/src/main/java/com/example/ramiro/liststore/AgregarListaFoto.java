package com.example.ramiro.liststore;

import android.content.Intent;
import android.database.Cursor;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.text.format.DateFormat;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.sql.SQLException;

public class AgregarListaFoto extends AppCompatActivity implements View.OnClickListener{
    EditText plac,veloc;
    Button btnAgregar, btregresar;
    SQLControlador dbconeccion;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_agregar_lista_foto);
 //       Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
//        setSupportActionBar(toolbar);

        plac = (EditText) findViewById(R.id.placa);
        veloc = (EditText) findViewById(R.id.velocidad);

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
        switch (v.getId()) {
            case R.id.btnAgregarId:

                String placa = plac.getText().toString();
                int velocidad = Integer.parseInt(veloc.getText().toString());
                String cedula;
                String valor = null;
                String fecha;
                int valida=0;

                Cursor cursor = dbconeccion.buscar_cedula_de_placa(placa);
                if(cursor.getCount()==0){
                    System.out.println("ERRORRRRRRRRRRRRRRRRRRR  " );
                    Toast.makeText(AgregarListaFoto.this, "La placa ingresada no pertenece a ningun usuario", Toast.LENGTH_SHORT).show();
                }else{
                    if (velocidad >=61 && velocidad<=75){
                        valida=1 ;
                        valor=String.valueOf(109.8);}
                    else if (velocidad >=76 && velocidad<=180){
                        valida=1 ;
                        valor=String.valueOf(367);}
                    else{
                        valida=0;
                        Toast.makeText(AgregarListaFoto.this, "No se encuentra en los rangos de fotomulta", Toast.LENGTH_SHORT).show();}
                    if(valida==1){
                        cedula=cursor.getString(0);
                        fecha = (DateFormat.format("dd-MM-yyyy hh:mm:ss", new java.util.Date()).toString());
                       // System.out.println("EL VALOR A PAGAR ES!!!!!!!!!!!!!!!! "+valor);
                        //System.out.println("CEDULA!!!!!!!!!!!!!!!!!!!!!  " +cedula);
                        //System.out.println("FECHA!!!!!!!!!!!!!!!!!! "+fecha);
                        //inserta en la base de datos de la app
                        dbconeccion.insertar_fotomulta(cedula, String.valueOf(velocidad), valor, fecha);
                        Intent ingresar = new Intent(this, AgregarListaFoto.class);
                        startActivity(ingresar);
                    }
                }
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