package com.telkomuniversity.plnlite.Model;

/**
 * Created by PC Mulmed #1 on 09/12/2015.
 */

import java.util.HashMap;
import android.app.Activity;
import android.content.Context;
import android.provider.Settings;

import com.telkomuniversity.plnlite.Global;
import com.telkomuniversity.plnlite.Libraries.DatabaseHandler;

import org.ksoap2.SoapEnvelope;
import org.ksoap2.serialization.PropertyInfo;
import org.ksoap2.serialization.SoapObject;
import org.ksoap2.serialization.SoapPrimitive;
import org.ksoap2.serialization.SoapSerializationEnvelope;
import org.ksoap2.transport.HttpTransportSE;

import java.net.Proxy;
import java.util.ArrayList;

public class User {

    private int UserId =0;
    private String Email = "";
    private String Name = "";
    private String NoRekening;
    private String AvatarUrl = "";
    private String Address= "";
    private String ImgUsrFileName= "";
    private String ImgUsrFilePath= "";
    transient String Password;


    private transient String service_name = "UsersService.asmx";

    public User(){}

    public User(String email, String pass){
        this.Password = pass;
        this.Email = email;
    }

    public User(int UserId,String Email,String Name,String NoRekening,String AvatarUrl,
                      String Address,String ImgUsrFileName,String ImgUsrFilePath){

        this.UserId = UserId;
        this.Email = Email;
        this.Name = Name;
        this.NoRekening = NoRekening;
        this.AvatarUrl = AvatarUrl;
        this.Address = Address;
        this.ImgUsrFileName = ImgUsrFileName;
        this.ImgUsrFilePath = ImgUsrFilePath;
    }

    public int getUserId(){
        return this.UserId;
    }
    public String getEmail(){
        return this.Email;
    }
    public String getNameUser(){
        return this.Name;
    }
    public String getImgUsrFileName(){
        return this.ImgUsrFileName;
    }
    public String getImgUsrFilePath(){
        return this.ImgUsrFilePath;
    }
    public String getAvatarUrl(){
        return this.AvatarUrl;
    }
    public String getAlamat(){
        return this.Address;
    }
    public String getNoRekening(){
        return this.NoRekening;
    }

    public String GetUserById(int userid) {

        String resTxt = null;
        String webMethName = "getUsersById";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);
        request.addProperty("userid", userid);
        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();

            androidHttpTransport.reset();

        } catch (Exception e) {
            //Print error
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;

    }

    public String CheckDataUser(Activity a) {

        String resTxt = null;
        String webMethName = "validateLogin";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);
        request.addProperty("email", this.Email);
        request.addProperty("password", this.Password);
        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();
            androidHttpTransport.reset();
        } catch (Exception e) {
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;

    }

    public int GetUsersCntListByNotId(String searching) {

        int resTxt = 0;
        String webMethName = "getUsersCntListByNotId";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);

        request.addProperty("userid", Global.getUserId());
        request.addProperty("searching",searching);
        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = Integer.parseInt(response.toString());
        } catch (Exception e) {
            e.printStackTrace();
            String res =e.toString();
            resTxt = 0;
        }
        return resTxt;

    }

    public String GetUsersListByNotId(int start, int limit, String searching) {
        String resTxt = null;
        String webMethName = "getUsersListByNotId";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);

        request.addProperty("userid",Global.getUserId());
        request.addProperty("start", start);
        request.addProperty("limit", limit);
        request.addProperty("searching", searching);
        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();

        } catch (Exception e) {
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;

    }

    public String InsertUser(String name ,String email, String norek, String alamat, String password) {

        String resTxt = null;
        String webMethName = "insertUser";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);;
        request.addProperty("Name",name);
        request.addProperty("Email", email);
        request.addProperty("NoRekening", norek);
        request.addProperty("Adress", alamat);
        request.addProperty("Password", password);

        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();

        } catch (Exception e) {
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;

    }

    public String UpdateProfile(int userid,String email,String name,String norek ,String avatarUrl,
                                String alamat,String imgUsrFilename,String imgUsrFilePath) {

        String resTxt = null;
        String webMethName = "updateProfile";
        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);
        request.addProperty("UserId",userid);
        request.addProperty("Name",name);
        request.addProperty("Address", alamat);
        request.addProperty("Email", email);
        request.addProperty("NomorRekening", norek);
        request.addProperty("AvatarUrl", avatarUrl);
        request.addProperty("ImgUsrFilename", imgUsrFilename);
        request.addProperty("ImgUsrFilePath", imgUsrFilePath);

        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();

        } catch (Exception e) {
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;
    }


    public static boolean isUserLoggedIn(Context context){
        DatabaseHandler db = new DatabaseHandler(context);
        int count = db.getRowCount();
        if(count > 0){
            // user logged in
            return true;
        }
        return false;
    }

    public static HashMap<String, String> getUserLocal(Context context){
        DatabaseHandler db = new DatabaseHandler(context);

        return db.getUserDetails();
    }

    public void addUserToLocal(Context context,int userid,String email,String name,String norek ,String avatarUrl,
                               String alamat,String imgUsrFilename,String imgUsrFilePath){

        DatabaseHandler db = new DatabaseHandler(context);
        db.addUser(userid, email, name, norek, alamat, avatarUrl, imgUsrFilename,
                imgUsrFilePath);
    }

    public void updateUserToLocal(Context context,int userid,String email,String name,String norek ,String avatarUrl,
                                  String alamat,String imgUsrFilename,String imgUsrFilePath){

        DatabaseHandler db = new DatabaseHandler(context);
        db.updateUser(userid, email, name, norek, alamat, avatarUrl, imgUsrFilename,
                imgUsrFilePath);
    }

    public void updateProfileToLocal(Context context,int userid,String email,String name,String norek ,String avatarUrl,
                                     String alamat,String imgUsrFilename,String imgUsrFilePath){

        DatabaseHandler db = new DatabaseHandler(context);
        db.updateProfile(userid, email, name, norek, alamat, avatarUrl, imgUsrFilename,
                imgUsrFilePath);
    }

    public boolean logoutUser(Context context){
        DatabaseHandler db = new DatabaseHandler(context);
        db.resetTablesUsers();
        return true;
    }

    public String uploadPhotoProfile(byte[] f,String fileName){

        String resTxt = null;
        String webMethName = "uploadPhotoProfile";

        SoapObject request = new SoapObject(Global.getNamespace(), webMethName);

        request.addProperty("f",f);
        request.addProperty("fileName",fileName);
        SoapSerializationEnvelope envelope = new SoapSerializationEnvelope(SoapEnvelope.VER11);
        envelope.dotNet = true;
        envelope.setOutputSoapObject(request);
        String url =Global.getHostUrl() + service_name;
        HttpTransportSE androidHttpTransport = new HttpTransportSE(url);
        androidHttpTransport.debug = true;
        androidHttpTransport.setXmlVersionTag("<!--?xml version=\"1.0\" encoding= \"UTF-8\" ?-->");

        try {
            androidHttpTransport.call(Global.getSoapAction()+webMethName, envelope);
            SoapPrimitive response = (SoapPrimitive) envelope.getResponse();
            resTxt = response.toString();

        } catch (Exception e) {
            e.printStackTrace();
            resTxt = "Error";
        }
        return resTxt;

    }


}
