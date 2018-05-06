package com.example.ramiro.liststore;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

import java.sql.SQLException;

/**
 * Created by ramiro on 15/12/15.
 */
public class SQLControlador {
    private DBhelper dbhelper;
    private Context ourcontext;
    private SQLiteDatabase database;

    public SQLControlador(Context c) {
        ourcontext = c;
    }

    public SQLControlador abrirBaseDeDatos() throws SQLException {
        dbhelper = new DBhelper(ourcontext);
        database = dbhelper.getWritableDatabase();
        return this;
    }

    public void cerrar() {
        dbhelper.close();
    }

    public void insertarDatos(String name,String cell,String corr, String cedul,String pla) {
        ContentValues cv = new ContentValues();
        cv.put(DBhelper.LISTA_NOMBRES, name);
        cv.put(DBhelper.LISTA_TELEFONO, cell);
        cv.put(DBhelper.LISTA_CORREO, corr);
        cv.put(DBhelper.LISTA_CEDULA, cedul);
        cv.put(DBhelper.LISTA_PLACA, pla);
        database.insert(DBhelper.TABLE_LISTA, null, cv);
    }

    public void insertar_fotomulta(String cedula,String velocidad,String valor, String fecha) {
        ContentValues cv = new ContentValues();
        cv.put(DBhelper.LISTA_CEDULA2, cedula);
        cv.put(DBhelper.LISTA_VELOCIDAD, velocidad);
        cv.put(DBhelper.LISTA_VALOR, valor);
        cv.put(DBhelper.LISTA_FECHA, fecha);
        database.insert(DBhelper.TABLE_LISTA2, null, cv);
    }

    public Cursor leerDatos() {
        String[] todasLasColumnas = new String[] {
                DBhelper.LISTA_ID,
                DBhelper.LISTA_NOMBRES,
                DBhelper.LISTA_TELEFONO,
                DBhelper.LISTA_CORREO,
                DBhelper.LISTA_CEDULA,
                DBhelper.LISTA_PLACA
        };
        Cursor c = database.query(DBhelper.TABLE_LISTA, todasLasColumnas, null,
                null, null, null, null, null);
        if (c != null) {
            c.moveToFirst();
        }
        return c;
    }

    public Cursor leerFotomultas() {
        String[] todasLasColumnas = new String[] {
                DBhelper.LISTA_ID2,
                DBhelper.LISTA_CEDULA2,
                DBhelper.LISTA_VELOCIDAD,
                DBhelper.LISTA_VALOR,
                DBhelper.LISTA_FECHA
        };
        Cursor c = database.query(DBhelper.TABLE_LISTA2, todasLasColumnas, null,
                null, null, null, null, null);
        if (c != null) {
            c.moveToFirst();
        }
        return c;
    }

    public Cursor buscar_usuario(String criterio) {
        String[] todasLasColumnas = new String[] {
                DBhelper.LISTA_ID,
                DBhelper.LISTA_NOMBRES,
                DBhelper.LISTA_TELEFONO,
                DBhelper.LISTA_CORREO,
                DBhelper.LISTA_CEDULA,
                DBhelper.LISTA_PLACA
        };
        Cursor c = database.query(DBhelper.TABLE_LISTA, todasLasColumnas, DBhelper.LISTA_CEDULA + "=?",
                new String[] { String.valueOf(criterio) }, null, null, null, null);
        if (c != null) {
            c.moveToFirst();
        }
        return c;
    }

    public Cursor buscar_fotomulta(String criterio) {
        String[] todasLasColumnas = new String[] {
                DBhelper.LISTA_ID2,
                DBhelper.LISTA_CEDULA2,
                DBhelper.LISTA_VELOCIDAD,
                DBhelper.LISTA_VALOR,
                DBhelper.LISTA_FECHA
        };
        Cursor c = database.query(DBhelper.TABLE_LISTA2, todasLasColumnas, DBhelper.LISTA_CEDULA2 + "=?",
                new String[] { String.valueOf(criterio) }, null, null, null, null);
        if (c != null) {
            c.moveToFirst();
        }
        return c;
    }

    public Cursor buscar_cedula_de_placa(String criterio) {
        String[] todasLasColumnas = new String[] {
                DBhelper.LISTA_CEDULA,
                DBhelper.LISTA_PLACA
        };
        Cursor c = database.query(DBhelper.TABLE_LISTA, todasLasColumnas, DBhelper.LISTA_PLACA + "=?",
                new String[] { String.valueOf(criterio) }, null, null, null, null);
        if (c != null) {
            c.moveToFirst();
        }
        return c;
    }

    public int actualizarDatos(long memberID, String membername, String membercell, String membercorr, String membercedu, String memberpla) {
        ContentValues cvActualizar = new ContentValues();
        cvActualizar.put(DBhelper.LISTA_NOMBRES, membername);
        cvActualizar.put(DBhelper.LISTA_TELEFONO, membercell);
        cvActualizar.put(DBhelper.LISTA_CORREO, membercorr);
        cvActualizar.put(DBhelper.LISTA_CEDULA, membercedu);
        cvActualizar.put(DBhelper.LISTA_PLACA, memberpla);
        int i = database.update(DBhelper.TABLE_LISTA, cvActualizar,
                DBhelper.LISTA_ID + " = " + memberID, null);
        return i;
    }

    public int actualizar_Fotomulta(long memberID, String cedula,String velocidad,String valor, String fecha) {
        ContentValues cvActualizar = new ContentValues();
        cvActualizar.put(DBhelper.LISTA_CEDULA2, cedula);
        cvActualizar.put(DBhelper.LISTA_VELOCIDAD, velocidad);
        cvActualizar.put(DBhelper.LISTA_VALOR, valor);
        cvActualizar.put(DBhelper.LISTA_FECHA, fecha);
        int i = database.update(DBhelper.TABLE_LISTA2, cvActualizar,
                DBhelper.LISTA_ID2 + " = " + memberID, null);
        return i;
    }

    public void deleteData(long memberID) {
        database.delete(DBhelper.TABLE_LISTA, DBhelper.LISTA_ID + "="
                + memberID, null);
    }

    public void eliminar_Fotomulta(long memberID) {
        database.delete(DBhelper.TABLE_LISTA2, DBhelper.LISTA_ID2 + "="
                + memberID, null);
    }
}