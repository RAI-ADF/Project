using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Web;
using System.Text;
using PLNLite.Data.DataAccess;
using PLNLite.Frameworks.Converter;
using PLNLite.Workflow;

namespace PLNLite.Data.DataAccess
{
    public class ComplaintReport
    {
        //public static DataSet GetDataForComplaint(string BEGIN, string END, string Status, string CLSID, string RVPOS, string RVWNM, string RVWPN)
        //{
        //    DataSet dataset = new DataSet();
        //    DataTable _complaint = new DataTable();
        //    if (Status == "0")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateRangeClassification(BEGIN, END, CLSID);
        //    }
        //    else if (Status == "1")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "1", CLSID);
        //    }
        //    else if (Status == "2")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "3", CLSID);
        //    }
        //    else if (Status == "3")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "4", CLSID);
        //    }
        //    else if (Status == "4")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "5", CLSID);
        //    }
        //    else if (Status == "5")
        //    {
        //        _complaint = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusUnsolvedClassification(BEGIN, END, CLSID);
        //    }

        //    dataset.Tables.Add("Header");
        //    dataset.Tables.Add("Complaint");
        //    dataset.Tables.Add("Footer");

        //    dataset.Tables["Header"].Columns.Add("PYEAR", typeof(string));
        //    dataset.Tables["Header"].Columns.Add("PTYPE", typeof(string));

        //    dataset.Tables["Header"].Rows.Add(new object[] { DateTime.Now.ToString("yyyy"), "tahun" });

        //    dataset.Tables["Complaint"].Columns.Add("FLWST", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("TIKET", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("BEGDA", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("USRNM", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("ORGNM", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("PRBNM", typeof(string));
        //    dataset.Tables["Complaint"].Columns.Add("ATTCH", typeof(string));

        //    for (int i = 0; i < _complaint.Rows.Count; i++)
        //    {
        //        string _status = (_complaint.Rows[i]["FLWST"].ToString() != "" ? WorkflowProductionPlanning.GetStateStatusName(_complaint.Rows[i]["FLWST"].ToString()) : "");
        //        dataset.Tables["Complaint"].Rows.Add(new object[] { _status, _complaint.Rows[i]["TIKET"], _complaint.Rows[i]["BEGDA"].ToString() != "" ? DateTimeConverter.GetDateFormat(_complaint.Rows[i]["BEGDA"].ToString()) : "", _complaint.Rows[i]["USRNM"], _complaint.Rows[i]["ORGNM"], _complaint.Rows[i]["PRBNM"], _complaint.Rows[i]["ATTCH"] });
        //    }

        //    dataset.Tables["Footer"].Columns.Add("PRTDT", typeof(string));
        //    dataset.Tables["Footer"].Columns.Add("RVPOS", typeof(string));
        //    dataset.Tables["Footer"].Columns.Add("RVWNM", typeof(string));
        //    dataset.Tables["Footer"].Columns.Add("RVWPN", typeof(string));
        //    dataset.Tables["Footer"].Rows.Add(new object[] { DateTimeConverter.GetDateFormat(DateTime.Today.ToString()), RVPOS, RVWNM, RVWPN });

        //    return dataset;
        //}
    }
}