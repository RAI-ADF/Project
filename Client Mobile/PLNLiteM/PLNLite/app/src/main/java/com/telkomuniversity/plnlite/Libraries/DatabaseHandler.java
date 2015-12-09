package com.telkomuniversity.plnlite.Libraries;

/**
 * Created by PC Mulmed #1 on 09/12/2015.
 */

import java.util.ArrayList;
import java.util.HashMap;
import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;



public class DatabaseHandler extends SQLiteOpenHelper {

    private static final int DATABASE_VERSION = 1;

    private static final String DATABASE_NAME = "PLNLITE";

    private static final String TABLE_USER = "USERS";
    private static final String TABLE_SOLUSI = "SOLUSI";
    private static final String TABLE_KOMPLAIN = "KOMPLAIN";
    private static final String TABLE_ADUAN = "ADUAN";


    private static final String F_IDUSER = "IDUSER";
    private static final String F_NMUSER = "NMUSER";
    private static final String F_NOREK = "NOREK";
    private static final String F_EMAIL = "EMAIL";

    private static final String F_ADDRESS = "ADDRS";
    private static final String F_AVURL = "AVURL";
    private static final String F_IUFN = "IUFN";
    private static final String F_IUFP = "IUFP";

    private static final String F_IDSOL = "IDSOL";
    private static final String F_NMSOL = "NMSOL";

    private static final String F_IDKOM = "IDSOL";
    private static final String F_NMKOM = "NMSOL";

    private static final String F_TIKET = "TIKET";
    private static final String F_ISIAD = "ISIAD";
    private static final String F_STATS = "STATS";


    public DatabaseHandler(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }


    @Override
    public void onCreate(SQLiteDatabase db) {

        String CREATE_USERS = "CREATE TABLE " + TABLE_USER + "("
                + F_IDUSER + " INTEGER PRIMARY KEY,"
                + F_NMUSER + " TEXT,"
                + F_NOREK + " TEXT,"
                + F_EMAIL + " TEXT UNIQUE,"
                + F_ADDRESS + " TEXT,"
                + F_AVURL + " TEXT,"
                + F_IUFN + " TEXT,"
                + F_IUFP + " TEXT" + ")";

        db.execSQL(CREATE_USERS);


        String CREATE_SOLUSI= "CREATE TABLE " + TABLE_SOLUSI + "("
                + F_IDSOL + " INTEGER PRIMARY KEY,"
                + F_NMSOL + " TEXT," + ")";

        db.execSQL(CREATE_SOLUSI);

        String CREATE_KOMPLAIN= "CREATE TABLE " + TABLE_KOMPLAIN + "("
                + F_IDKOM + " INTEGER PRIMARY KEY,"
                + F_NMKOM + " TEXT," + ")";

        db.execSQL(CREATE_KOMPLAIN);

        String CREATE_ADUAN= "CREATE TABLE " + TABLE_ADUAN + "("
                + F_TIKET + " TEXT,"
                + F_STATS + " TEST,"
                + F_ISIAD + " TEXT," + ")";

        db.execSQL(CREATE_ADUAN);



    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int i, int i2) {
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_USER);
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_SOLUSI);
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_KOMPLAIN);
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_ADUAN);
        onCreate(db);
    }


    public void addUser(int userid, String name,String norek,String email, String address,String avatarUrl,String imgUsrFilename,
                        String imgUsrFilePath) {
        SQLiteDatabase db = this.getWritableDatabase();
        HashMap<String,String> user = putDataUsers(userid, name, norek,email,address,avatarUrl,imgUsrFilename,imgUsrFilePath);

        ContentValues values = setUsers(user);
        db.insert(TABLE_USER, null, values);
        db.close();
    }

    public int updateUser(int userid, String name, String norek, String email, String address, String avatarUrl, String imgUsrFilename, String imgUsrFilePath) {
        SQLiteDatabase db = this.getWritableDatabase();
        HashMap<String,String> user = putDataUsers(userid, name, norek, email, address, avatarUrl, imgUsrFilename, imgUsrFilePath);
        ContentValues values = setUsers(user);
        return db.update(TABLE_USER, values, F_IDUSER + " = ?",
                new String[] { String.valueOf(userid) });
    }


    public int updateProfile(int userid, String name, String norek, String email, String address, String avatarUrl, String imgUsrFilename, String imgUsrFilePath) {
        SQLiteDatabase db = this.getWritableDatabase();
        HashMap<String,String> user = putDataProfiles(userid, name, norek, email, address, avatarUrl, imgUsrFilename, imgUsrFilePath);
        ContentValues values = setUsers(user);
        return db.update(TABLE_USER, values, F_IDUSER + " = ?",
                new String[] { String.valueOf(userid) });
    }


    public HashMap<String,String> putDataProfiles(int userid, String name, String norek, String email, String address, String avatarUrl, String imgUsrFilename, String imgUsrFilePath){
        HashMap<String,String> user = new HashMap<String,String>();
        user.put(F_IDUSER,Integer.toString(userid));
        user.put(F_NMUSER, name);
        user.put(F_NOREK, norek);
        user.put(F_EMAIL, email);
        user.put(F_ADDRESS, address);
        user.put(F_AVURL, avatarUrl);
        user.put(F_IUFN, imgUsrFilename);
        user.put(F_IUFP,imgUsrFilePath);

        return user;
    }

    public HashMap<String,String> putDataUsers(int userid, String name, String norek, String email, String address, String avatarUrl, String imgUsrFilename, String imgUsrFilePath
    ){
        HashMap<String,String> user = new HashMap<String,String>();
        user.put(F_IDUSER,Integer.toString(userid));
        user.put(F_NMUSER, name);
        user.put(F_NOREK, norek);
        user.put(F_EMAIL, email);
        user.put(F_ADDRESS, address);
        user.put(F_AVURL, avatarUrl);
        user.put(F_IUFN, imgUsrFilename);
        user.put(F_IUFP,imgUsrFilePath);

        return user;
    }

    public ContentValues setUsers(HashMap<String,String> user){
        ContentValues values = new ContentValues();

        values.put(F_IDUSER,user.get(F_IDUSER));
        values.put(F_NMUSER,user.get(F_NMUSER));
        values.put(F_NOREK, user.get(F_NOREK));
        values.put(F_EMAIL, user.get(F_EMAIL));
        values.put(F_ADDRESS, user.get(F_ADDRESS));
        values.put(F_AVURL,user.get(F_AVURL));
        values.put(F_IUFN,user.get(F_IUFN));
        values.put(F_IUFP,user.get(F_IUFP));

        return values;
    }

    public HashMap<String, String> getUserDetails(){
        HashMap<String,String> user = new HashMap<String,String>();
        String selectQuery = "SELECT  * FROM " + TABLE_USER;

        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.rawQuery(selectQuery, null);
        cursor.moveToFirst();
        if(cursor.getCount() > 0){
            int userid=Integer.parseInt(cursor.getString(0));
            String name=cursor.getString(1);
            String norek=cursor.getString(2);
            String email=cursor.getString(3);
            String address=cursor.getString(4);
            String avatarUrl=cursor.getString(5);
            String imgUsrFilename=cursor.getString(6);
            String imgUsrFilePath=cursor.getString(7);

            user = putDataUsers(userid, name, norek,email,address,avatarUrl,imgUsrFilename,imgUsrFilePath);
        }
        cursor.close();
        db.close();
        // return user
        return user;
    }
    public int getRowCount() {
        String countQuery = "SELECT  * FROM " + TABLE_USER;
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.rawQuery(countQuery, null);
        int rowCount = cursor.getCount();
        db.close();
        cursor.close();
        return rowCount;
    }

    public void resetTablesUsers(){
        SQLiteDatabase db = this.getWritableDatabase();
        db.delete(TABLE_USER, null, null);
        db.close();
    }




    public void addKomplain(int idkom, String nmkom) {

        SQLiteDatabase db = this.getWritableDatabase();

        HashMap<String,String> komplain = putDataKomplain(idkom, nmkom);
        ContentValues values = setKomplain(komplain);
        db.insert(TABLE_KOMPLAIN, null, values);
        db.close();
    }

    public ContentValues setKomplain(HashMap<String,String> komplain){
        ContentValues values = new ContentValues();

        values.put(F_IDKOM, komplain.get(F_IDKOM));
        values.put(F_NMKOM, komplain.get(F_NMKOM));
        return values;
    }
    public ArrayList<HashMap<String, String>> getListKomplain(){
        ArrayList<HashMap<String, String>> komplainlist = new ArrayList<HashMap<String, String>>();
        String selectQuery = "SELECT  * FROM " + TABLE_KOMPLAIN + " ORDER BY  " + F_IDKOM +" DESC ";

        SQLiteDatabase db = this.getWritableDatabase();
        Cursor cursor = db.rawQuery(selectQuery, null);
        if (cursor.moveToFirst()) {
            do {
                HashMap<String,String> komplain = new HashMap<String,String>();
                int idkom=Integer.parseInt(cursor.getString(1));
                String nmkom=cursor.getString(2);
                komplain = putDataKomplain(idkom, nmkom);
                komplainlist.add(komplain);
            } while (cursor.moveToNext());
        }

        cursor.close();
        db.close();
        // return user
        return komplainlist;
    }

    public HashMap<String,String> putDataKomplain(int idkom, String nmkom){
        HashMap<String,String> komplain = new HashMap<String,String>();
        komplain.put(F_IDKOM,Integer.toString(idkom));
        komplain.put(F_NMKOM, nmkom);
        return komplain;
    }
    public int getCntKomplain() {
        String countQuery = "SELECT  * FROM " + TABLE_KOMPLAIN;
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.rawQuery(countQuery, null);
        int rowCount = cursor.getCount();
        db.close();
        cursor.close();
        return rowCount;
    }
    public void resetTablesKomplain(){
        SQLiteDatabase db = this.getWritableDatabase();
        db.delete(TABLE_KOMPLAIN, null, null);
        db.close();
    }





}
