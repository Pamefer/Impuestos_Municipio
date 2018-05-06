package com.example.ramiro.liststore;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

class DBhelper extends SQLiteOpenHelper {

    // Información de la tabla usuarios
    public static final String TABLE_LISTA = "usuarios";
    public static final String LISTA_ID = "_id";
    public static final String LISTA_NOMBRES = "nombres";
    public static final String LISTA_TELEFONO = "telefono";
    public static final String LISTA_CORREO = "correo";
    public static final String LISTA_CEDULA = "cedula";
    public static final String LISTA_PLACA = "placa";

    // Información de la tabla fotomultas
    public static final String TABLE_LISTA2 = "fotomultas";
    public static final String LISTA_ID2 = "_id";
    public static final String LISTA_CEDULA2 = "cedula";
    public static final String LISTA_VELOCIDAD = "velocidad";
    public static final String LISTA_VALOR = "valor";
    public static final String LISTA_FECHA = "fecha";

    // información del a base de datos
    static final String DB_NAME = "web_municipio";
    static final int DB_VERSION = 1;

    // Creacion de tabla usuarios
    private static final String CREATE_TABLE = "create table "
            + TABLE_LISTA + "(" + LISTA_ID
            + " INTEGER PRIMARY KEY AUTOINCREMENT, "
            + LISTA_NOMBRES + " TEXT NOT NULL ,"
            + LISTA_TELEFONO + " TEXT NOT NULL ,"
            + LISTA_CORREO + " TEXT NOT NULL ,"
            + LISTA_CEDULA + " TEXT NOT NULL ,"
            + LISTA_PLACA + " TEXT NOT NULL);";

    // Creacion de tabla fotomultas
    private static final String CREATE_TABLE2 = "create table "
            + TABLE_LISTA2 + "(" + LISTA_ID2
            + " INTEGER PRIMARY KEY AUTOINCREMENT, "
            + LISTA_CEDULA2 + " TEXT NOT NULL ,"
            + LISTA_VELOCIDAD + " TEXT NOT NULL ,"
            + LISTA_VALOR + " TEXT NOT NULL ,"
            + LISTA_FECHA + " TEXT NOT NULL);";

    public DBhelper(Context context) {
        super(context, DB_NAME, null,DB_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL(CREATE_TABLE);
        db.execSQL(CREATE_TABLE2);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        // TODO Auto-generated method stub
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_LISTA);
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_LISTA2);
        onCreate(db);
    }
}