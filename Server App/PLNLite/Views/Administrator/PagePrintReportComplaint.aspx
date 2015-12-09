<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="PagePrintReportComplaint.aspx.cs" Inherits="PLNLite.Views.Administrator.PagePrintReportComplaint" %>

<%@ Register Assembly="DevExpress.XtraReports.v13.2.Web, Version=13.2.7.0, Culture=neutral, PublicKeyToken=b88d1754d700e49a" Namespace="DevExpress.XtraReports.Web" TagPrefix="dx" %>

<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Data.DataAccess" %>
<%@ Import Namespace="PLNLite.Views.Administrator.Report" %>
<%@ Import Namespace="System.Data" %>
<!DOCTYPE html>

<script runat="server">
    
    protected void Page_Load(object sender, EventArgs e)
    {
        //SessionCreator();
        if (Session["username"] == null && Session["password"] == null) Response.Redirect("../../Views/Application/PageSignIn.aspx");
        
        DataSet _datasource = new DataSet();

        _datasource = ComplaintReport.GetDataForComplaint(Session["BEGIN"].ToString(), Session["END"].ToString(), Session["status"].ToString(), Session["CLSID"].ToString(), Session["prorg"].ToString(), Session["name"].ToString(), Session["username"].ToString());

        ASPxDocumentViewerPM.Report = new HelpDeskReport();
        ASPxDocumentViewerPM.Report.DataSource = _datasource;
        ASPxDocumentViewerPM.Report.DataMember = "Complaint";
    }

</script>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head runat="server">
    <title>Report Tools Calibration</title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <dx:ASPxDocumentViewer ID="ASPxDocumentViewerPM" runat="server">
        </dx:ASPxDocumentViewer>
    </div>
    </form>
</body>
</html>

