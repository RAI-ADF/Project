package com.telkomuniversity.plnlite;

/**
 * Created by PC Mulmed #1 on 09/12/2015.
 */
import android.app.Application;

public class Global extends Application {

    //public static String HOST_SERVER = "http://10.10.212.39:88/KID/";
    //public static String HOST_URL = "http://10.10.212.39:88/KID/Services/";

    public static String HOST_SERVER = "http://e-office.inov8demo.com/KID/";
    public static String HOST_URL = "http://e-office.inov8demo.com/KID/Services/";

    public static String SOAP_ACTION = "http://tempuri.org/";
    public static String NAMESPACE = "http://tempuri.org/";

    public static String URL_SERVER = "http://10.10.212.39/kid_service/";

    public static int userid=0;
    public static String name="";
    public static String email="";

    //public String[] monthName = {"January","February","March","April","May","June","July","August","September","October","November","December"};

    public void ClearData(){
        Global.userid = 0;
        Global.name = "";
        Global.email = "";
    }

    public void setUserid(int userid){
        Global.userid = userid;
    }

    public void setNameUser(String name){
        Global.name = name;
    }

    public void setEmail(String email){
        Global.email = email;
    }

    public static int getUserId(){
        return Global.userid;
    }

    public static String getNameUser(){
        return Global.name;
    }

    public static String getEmailUser(){
        return Global.email;
    }

    public static String getHostServer(){
        return HOST_SERVER;
    }

    public static String getHostUrl(){
        return HOST_URL;
    }

    public static String getSoapAction(){
        return SOAP_ACTION;
    }

    public static String getNamespace(){
        return NAMESPACE;
    }

}
