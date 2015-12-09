package com.milarian.milarian.util;

/**
 * Created by notebook on 01/12/2015.
 */
public class Company {
    private String id;
    private String industry;
    private String address;
    private String telephone;

    public Company(String id, String industry, String address, String telephone){
        this.id = id;
        this.industry = industry;
        this.address = address;
        this.telephone = telephone;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getIndustry() {
        return industry;
    }

    public void setIndustry(String industry) {
        this.industry = industry;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }
}
