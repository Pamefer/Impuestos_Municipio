package com.example.ramiro.liststore;

import android.content.Intent;
import android.database.Cursor;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
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

public class fotomulta extends AppCompatActivity implements View.OnClickListener {
    Button btnregresar, btnBuscar;
    ListView lista;
    SQLControlador dbconeccion;

    TextView tv_miemID, tv_cedula, tv_velocidad, tv_valor, tv_fecha;
    EditText crite;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_fotomulta);
        //Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        //  setSupportActionBar(toolbar);

        dbconeccion = new SQLControlador(this);
        try {
            dbconeccion.abrirBaseDeDatos();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        lista = (ListView) findViewById(R.id.listViewListas2);

        btnregresar=(Button) findViewById(R.id.regresar2);
        btnBuscar=(Button) findViewById(R.id.busc);
        crite=(EditText) findViewById(R.id.buscar2);

        recogerExtras();

        btnregresar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent regresar = new Intent(fotomulta.this, MainActivity.class);
                startActivity(regresar);
            }
        });

        btnBuscar.setOnClickListener((View.OnClickListener) this);
        // Tomar los datos desde la base de datos para poner en el curso y después en el adapter
        String criterio = crite.getText().toString();

        Cursor cursor;
        if (criterio.equals("") || criterio.equals(null))
        {
            cursor = dbconeccion.leerFotomultas(); //PARA SACAR TODOS LOS DATOS
        }else{
            cursor = dbconeccion.buscar_fotomulta(crite.getText().toString()); //PARA SACAR DATOS DE BUSQUEDA
        }

        String[] from = new String[] {
                DBhelper.LISTA_ID2,
                DBhelper.LISTA_CEDULA2,
                DBhelper.LISTA_VELOCIDAD,
                DBhelper.LISTA_VALOR,
                DBhelper.LISTA_FECHA
        };
        int[] to = new int[] {
                R.id.lista_id_f,
                R.id.lista_cedula_f,
                R.id.lista_velocidad_f,
                R.id.lista_valor_f,
                R.id.lista_fecha_f
        };

        SimpleCursorAdapter adapter = new SimpleCursorAdapter(
                fotomulta.this, R.layout.activity_formato_fotomulta, cursor, from, to);

        adapter.notifyDataSetChanged();
        lista.setAdapter(adapter);
        /*
        // acción cuando hacemos click en item para poder modificarlo o eliminarlo
        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView parent, View view, int position, long id) {

                tv_miemID = (TextView) view.findViewById(R.id.lista_id_f);
                tv_cedula = (TextView) view.findViewById(R.id.lista_cedula_f);
                tv_velocidad = (TextView)view.findViewById(R.id.lista_velocidad_f);
                tv_valor =  (TextView)view.findViewById(R.id.lista_valor_f);
                tv_fecha =  (TextView)view.findViewById(R.id.lista_fecha_f);


                String aux_fotomultaId = tv_miemID.getText().toString();
                //String aux_miembroNombre = tv_miemNombre.getText().toString();
                String aux_cedula = tv_cedula.getText().toString();
                String aux_velocidad = tv_velocidad.getText().toString();
                String aux_valor = tv_valor.getText().toString();
                String aux_fecha=tv_fecha.getText().toString();


                Intent modify_intent = new Intent(getApplicationContext(), ModificarFotomulta.class);
                modify_intent.putExtra("fotomultaId", aux_fotomultaId);
                modify_intent.putExtra("fotomultaCedula", aux_cedula);
                modify_intent.putExtra("fotomultaVelocidad", aux_velocidad);
                modify_intent.putExtra("fotomultaValor", aux_valor);
                modify_intent.putExtra("fotomultaFecha", aux_fecha);
                startActivity(modify_intent);
            }
        });*/
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
            case R.id.busc:
                String criterio = crite.getText().toString();
                System.out.println("CRITERIO "+criterio);
                Intent main = new Intent(this, fotomulta.class);
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
