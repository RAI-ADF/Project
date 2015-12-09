<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="ReportForm.aspx.cs" Inherits="PLNLite.Views.Administrator.ReportForm" %>

<%@ Import Namespace="PLNLite.Data.DataAccess" %>
<%@ Import Namespace="PLNLite.Frameworks.Validation" %>
<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Presentation.Components" %>
<%@ Import Namespace="PLNLite.Frameworks.Converter" %>
<%@ Import Namespace="PLNLite.Entity.Dictionary" %>
<%@ Import Namespace="PLNLite.Business.Activities" %>
<%@ Import Namespace="System.Data" %>
<%@ Import Namespace="PLNLite.Workflow" %>

<!DOCTYPE html>
<script runat="server">
    protected void Page_Load(object sender, EventArgs e)
    {
        //SessionCreator();
        if (Session["username"] == null && Session["password"] == null) Response.Redirect("../../Views/Application/PageSignIn.aspx");
        
        if (!IsPostBack)
        {
            GenerateStatus();
            SetClasification();
            SetStatus(txtBegda.Text, txtEndda.Text, ddlStatus.SelectedValue, ddlClasssification.SelectedValue);
        }
    }

    protected void SessionCreator()
    {
        Session["username"] = "K495";
        Session["name"] = "Allan Prakosa";
        Session["password"] = "BIOFARMA";
        Session["posid"] = "372";
        Session["email"] = "allan.prakosa@biofarma.co.id";
        Session["coctr"] = "64100";
        Session["jobcd"] = "STAF";
    }

    protected void SetClasification()
    {
        DataTable data = CatalogHelpDesk.GetClassifications();

        ddlClasssification.Items.Clear();
        for (int i = 0; i < data.Rows.Count; i++)
        {
            ddlClasssification.Items.Add(new ListItem(data.Rows[i]["CLSNM"].ToString(), data.Rows[i]["RECID"].ToString()));
        }
    }
    
    protected void SetStatus(string BEGIN, string END, string CLSTS, string CLSID)
    {
        if (ddlStatus.SelectedIndex == 0)
        {
            Session["BEGIN"] = BEGIN;
            Session["END"] = END;
            Session["CLSID"] = CLSID;
            Session["status"] = "0";
        }
        else
        {
            Session["BEGIN"] = BEGIN;
            Session["END"] = END;
            Session["CLSID"] = CLSID;
            Session["status"] = CLSTS;
        }
    }

    protected void GenerateStatus()
    {
        ddlStatus.Items.Clear();
        ddlStatus.Items.Add(new ListItem("All", "0"));
        ddlStatus.Items.Add(new ListItem("Pending", "1"));
        ddlStatus.Items.Add(new ListItem("Validate", "2"));
        ddlStatus.Items.Add(new ListItem("Approved", "3"));
        ddlStatus.Items.Add(new ListItem("Solved", "4"));
        ddlStatus.Items.Add(new ListItem("Unsolved", "5"));
    }
    
    protected void ddlStatus_SelectedIndexChanged(object sender, EventArgs e)
    {
        SetStatus(txtBegda.Text, txtEndda.Text, ddlStatus.SelectedValue, ddlClasssification.SelectedValue);
    }

    protected void txt_textChanged(object sender, EventArgs e)
    {
        SetStatus(txtBegda.Text, txtEndda.Text, ddlStatus.SelectedValue, ddlClasssification.SelectedValue);
    }
    
    protected String GenerateHelpDeskRequest(string BEGIN, string END, string Status, string CLSID)
    {
        DataTable table = new DataTable();
        if (Status == "0")
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateRangeClassification(BEGIN, END, CLSID);
        }
        else if (Status == "1")
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "1", CLSID);
        }
        else if (Status == "2") 
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "3", CLSID);
        }
        else if (Status == "3")
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "4", CLSID);
        }
        else if (Status == "4")
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusClassification(BEGIN, END, "5", CLSID);
        }
        else if (Status == "5")
        {
            table = HelpDeskWorkflow.GetWorkFlowComplaintByDateStatusUnsolvedClassification(BEGIN, END, CLSID);
        }
        StringBuilder _tableelement = new StringBuilder();
        
        for (int i = 0; i < table.Rows.Count; i++)
        {
            string _status = (table.Rows[i]["FLWST"].ToString() != "" ? WorkflowProductionPlanning.GetStateStatus(table.Rows[i]["FLWST"].ToString()) : "");
            _tableelement.Append("<tr class=''>");
            _tableelement.Append("<td>" + _status + "</td>");
            _tableelement.Append("<td>" + table.Rows[i]["TIKET"].ToString() + "</td>");
            _tableelement.Append("<td>" + (table.Rows[i]["BEGDA"].ToString() != "" ? DateTimeConverter.GetDateFormat(table.Rows[i]["BEGDA"].ToString()) : "") + "</td>");
            _tableelement.Append("<td>" + table.Rows[i]["USRNM"].ToString() + "</td>");
            _tableelement.Append("<td>" + table.Rows[i]["ORGNM"].ToString() + "</td>");
            _tableelement.Append("<td>" + table.Rows[i]["PRBNM"].ToString() + "</td>");
            _tableelement.Append("<td>" + table.Rows[i]["ATTCH"].ToString() + "</td>");
        }

        return _tableelement.ToString();
    }
</script>

<html lang="en">
<head>
    <% Response.Write(BasicScripts.GetMetaScript()); %>

    <title>Report Customer Care</title>

    <% Response.Write(StyleScripts.GetCoreStyle()); %>
    <% Response.Write(StyleScripts.GetFormStyle()); %>
    <% Response.Write(StyleScripts.GetCustomStyle()); %>
</head>

<body>

    <section id="container">

        <!--header start-->
        <%Response.Write(SideBarMenu.TopMenuElement(Session["name"].ToString())); %>
        <!--header end-->

        <!--left side bar start-->
        <%Response.Write(SideBarMenu.LeftSidebarMenuElementAutoGenerated(Session["username"].ToString())); %>
        <!--left side bar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <form runat="server">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Customer Care | Report Form
                              <span class="tools pull-right">
                                  <a class="fa fa-times" href="javascript:;"></a>
                              </span>
                            </header>
                                <div class="panel-body">
                                    <div class="form-horizontal " runat="server">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Date</label>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <asp:TextBox ID="txtBegda" value="" size="16" class="form-control form-control-inline input-medium default-date-picker" runat="server" OnTextChanged="txt_textChanged"></asp:TextBox>
                                            </div>
                                            <label class="col-sm-1 control-label">To</label>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <asp:TextBox ID="txtEndda" value="" size="16" class="form-control form-control-inline input-medium default-date-picker" runat="server" OnTextChanged="txt_textChanged"></asp:TextBox>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Classification</label>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <asp:DropDownList ID="ddlClasssification" runat="server" class="form-control  m-bot15" OnSelectedIndexChanged="ddlStatus_SelectedIndexChanged"></asp:DropDownList>
                                            </div>
                                            <label class="col-sm-1 control-label">Status</label>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <asp:DropDownList ID="ddlStatus" runat="server" class="form-control m-bot15" OnSelectedIndexChanged="ddlStatus_SelectedIndexChanged"></asp:DropDownList>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-lg-4 col-md-4">
                                                <asp:LinkButton ID="btnView" runat="server" AutoPostBack="true" class="btn btn-round btn-green" Text="View" > </asp:LinkButton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                        </section>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                          <span class="tools pull-right">
                              <a class="fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                            </header>
                                <div class="panel-body">
                                    <h6>Annotation :</h6><p>
                                    <span class='label label-warning'>D</span> &nbsp; to "View Detail". &nbsp;&nbsp;&nbsp;
                                    <span class='label label-primary'>P</span> &nbsp; to "Add/Edit PIC". &nbsp;&nbsp;
                                    <br />
                                    <br />
                                    <span class='label label-default'>?</span> &nbsp; status "Pending". &nbsp;&nbsp;
                                    <span class='label label-warning'><i class="fa fa-gear"></i></span> &nbsp; status "In Progress". &nbsp;&nbsp;
                                    <span class='label label-danger'><i class="fa fa-gear"></i></span> &nbsp; status "In Progress (Correction)". &nbsp;&nbsp;
                                    <span class='label label-default'><i class="fa fa-gear"></i></span> &nbsp; status "In Progress (Wait for Validate)". &nbsp;&nbsp;
                                    <br />
                                    <br />
                                    <span class='label label-primary'>V</span> &nbsp; status "Validated". &nbsp;&nbsp;
                                    <span class='label label-success'>A</span> &nbsp; status "Approved". &nbsp;&nbsp;
                                    <span class='label label-info'>C</span> &nbsp; status "Closed". &nbsp;&nbsp;
                                    </p>
                                    <br />
                                    <div class="adv-table">
                                        <div class="clearfix">
                                            <div class="btn-group pull-right">
                                                <button class="btn btn-green dropdown-toggle" data-toggle="dropdown">
                                                    Tools <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="PagePrintReportComplaint.aspx"><i class="fa fa-print"></i> Print Document</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br />
                                        <table class="table table-striped table-hover table-bordered" id="dynamic-table">
                                            <thead>
                                                <tr>
                                                    <th></th> 
                                                    <th>Ticket</th>       
                                                    <th>Date</th>
                                                    <th>User</th>
                                                    <th>Unit</th>
                                                    <th>Problem</th>
                                                    <th>Attachment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <%  if (Session["status"] != null && Session["BEGIN"] != null && Session["END"] != null && Session["CLSID"] != null)
                                                        Response.Write(GenerateHelpDeskRequest(Session["BEGIN"].ToString(), Session["END"].ToString(), Session["status"].ToString(), Session["CLSID"].ToString()));
                                                    else Response.Write(GenerateHelpDeskRequest("","","","")); %>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
                </form>

                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <!--right sidebar start-->
        <!--right sidebar end-->
    </section>

    <!-- Placed js at the end of the document so the pages load faster -->
    <% Response.Write(JS.GetCoreScript()); %>
    <% Response.Write(JS.GetCustomFormScript()); %>
    <% Response.Write(JS.GetInitialisationScript()); %>
</body>
</html>
