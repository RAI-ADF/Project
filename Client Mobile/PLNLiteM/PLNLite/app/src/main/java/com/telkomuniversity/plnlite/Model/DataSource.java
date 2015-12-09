package com.telkomuniversity.plnlite.Model;

/**
 * Created by PC Mulmed #1 on 09/12/2015.
 */

import java.util.ArrayList;
import java.util.List;
;

public class DataSource
{
    //Singleton pattern
    private static DataSource datasource = null;

    private List<String> data = null;

    private static final int SIZE = 74;

    public static DataSource getInstance()
    {
        if (datasource == null)
        {
            datasource = new DataSource();
        }
        return datasource;
    }

    private DataSource()
    {
        data = new ArrayList<String>(SIZE);
        for (int i =1 ; i <= SIZE; i++)
        {
            data.add("row " + i);
        }
    }

    public int getSize()
    {
        return SIZE;
    }

    /**
     * Returns the elements in a <b>NEW</b> list.
     */
    public List<String> getData(int offset, int limit)
    {


        List<String> newList = new ArrayList<String>(limit);
        int end = offset + limit;
        if (end > data.size())
        {
            end = data.size();
        }
        newList.addAll(data.subList(offset, end));
        return newList;
    }

}
