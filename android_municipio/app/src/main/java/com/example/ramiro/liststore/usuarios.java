package com.example.ramiro.liststore;

import android.content.Intent;
import android.database.Cursor;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.SimpleCursorAdapter;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.SQLException;

public class usuarios extends AppCompatActivity implements View.OnClickListener {
    Button btnregresar, btnBuscar;
    ListView lista;
    SQLControlador dbconeccion;
    TextView tv_miemID, tv_miemNombre, tv_miemTele, tv_miemCorr, tv_miemCedu,tv_miemPlac;
    EditText crite;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_usuarios);
        //Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
      //  setSupportActionBar(toolbar);

        dbconeccion = new SQLControlador(this);
        try {
            dbconeccion.abrirBaseDeDatos();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        lista = (ListView) findViewById(R.id.listViewListas);

        btnregresar=(Button) findViewById(R.id.regresar);
        btnBuscar=(Button) findViewById(R.id.bus);
        crite=(EditText) findViewById(R.id.buscar);

        recogerExtras();

        btnregresar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent regresar = new Intent(usuarios.this, MainActivity.class);
                startActivity(regresar);
            }
        });

        btnBuscar.setOnClickListener((View.OnClickListener) this);
        // Tomar los datos desde la base de datos para poner en el curso y después en el adapter
        String criterio = crite.getText().toString();

        Cursor cursor;
        if (criterio.equals("") || criterio.equals(null))
        {
            cursor = dbconeccion.leerDatos(); //PARA SACAR TODOS LOS DATOS
        }else{
            cursor = dbconeccion.buscar_usuario(crite.getText().toString()); //PARA SACAR DATOS DE BUSQUEDA
        }

        String[] from = new String[] {
                DBhelper.LISTA_ID,
                DBhelper.LISTA_NOMBRES,
                DBhelper.LISTA_TELEFONO,
                DBhelper.LISTA_CORREO,
                DBhelper.LISTA_CEDULA,
                DBhelper.LISTA_PLACA
        };
        int[] to = new int[] {
                R.id.lista_id,
                R.id.lista_nombres,
                R.id.lista_telefono,
                R.id.lista_correo,
                R.id.lista_cedula,
                R.id.lista_placa
        };

        SimpleCursorAdapter adapter = new SimpleCursorAdapter(
                usuarios.this, R.layout.activity_formatofila, cursor, from, to);

        adapter.notifyDataSetChanged();
        lista.setAdapter(adapter);

        // acción cuando hacemos click en item para poder modificarlo o eliminarlo
        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView parent, View view, int position, long id) {

                tv_miemID = (TextView) view.findViewById(R.id.lista_id);
                tv_miemNombre = (TextView) view.findViewById(R.id.lista_nombres);
                tv_miemTele = (TextView) view.findViewById(R.id.lista_telefono);
                tv_miemCorr = (TextView) view.findViewById(R.id.lista_correo);
                tv_miemCedu = (TextView) view.findViewById(R.id.lista_cedula);
                tv_miemPlac=(TextView) view.findViewById(R.id.lista_placa);

                String aux_miembroId = tv_miemID.getText().toString();
                String aux_miembroNombre = tv_miemNombre.getText().toString();
                String aux_miembroTele = tv_miemTele.getText().toString();
                String aux_miembroCorr = tv_miemCorr.getText().toString();
                String aux_miembroPlac = tv_miemPlac.getText().toString();
                String aux_miembroCedu="";


                try {
                    aux_miembroCedu = tv_miemCedu.getText().toString();
                }catch (Exception e){
                    Toast.makeText(getApplicationContext(), "No hay datos de cedula", Toast.LENGTH_SHORT).show();
                };

                Intent modify_intent = new Intent(getApplicationContext(), ModificarLista.class);
                modify_intent.putExtra("miembroId", aux_miembroId);
                modify_intent.putExtra("miembroNombre", aux_miembroNombre);
                modify_intent.putExtra("miembroTelefono", aux_miembroTele);
                modify_intent.putExtra("miembroCorreo", aux_miembroCorr);
                modify_intent.putExtra("miembroCedula", aux_miembroCedu);
                modify_intent.putExtra("miembroPlac", aux_miembroPlac);
                startActivity(modify_intent);
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.bus:
                String criterio = crite.getText().toString();
                System.out.println("CRITERIO "+criterio);
                Intent main = new Intent(this, usuarios.class);
                if (criterio.equals("") || criterio.equals(null))
                    main.putExtra("texto", "");
                else
                    main.putExtra("texto", criterio);
                startActivity(main);
                break;
            default:
                break;
        }
    }

    public void recogerExtras() {
        //Aquí recogemos y tratamos los parámetros
        //Bundle extras= getIntent().getExtras();

        if((getIntent().hasExtra("texto"))){
            Bundle extras= getIntent().getExtras();
            String s= extras.getString("texto");
            crite.setText(s);
        }else{
            System.out.println("ERROR!!!!!!!!!!!!!!!!!!!!!!!");
        }
    }
}