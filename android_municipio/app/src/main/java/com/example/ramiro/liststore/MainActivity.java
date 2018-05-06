package com.example.ramiro.liststore;

import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.SimpleCursorAdapter;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.SQLException;

public class MainActivity extends AppCompatActivity {
    Button btnAgregarMiembro, btnAgregarFoto, btnListarMiembro, btnListarFotomulta;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnAgregarMiembro=(Button) findViewById(R.id.agre_usu);
        btnAgregarFoto=(Button) findViewById(R.id.agre_foto);
        btnListarMiembro=(Button) findViewById(R.id.listar_usu);
        btnListarFotomulta=(Button) findViewById(R.id.listar_foto);

        btnAgregarMiembro.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent agregar_usu = new Intent(MainActivity.this, AgregarLista.class);
                startActivity(agregar_usu);
            }
        });
        btnAgregarFoto.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent nuevafoto = new Intent(MainActivity.this, AgregarListaFoto.class);
                startActivity(nuevafoto);
            }
        });

        btnListarMiembro.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent listar_usu = new Intent(MainActivity.this, usuarios.class);
                startActivity(listar_usu);
            }
        });

        btnListarFotomulta.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent listar_foto = new Intent(MainActivity.this, fotomulta.class);
                startActivity(listar_foto);
            }
        });
    }
}