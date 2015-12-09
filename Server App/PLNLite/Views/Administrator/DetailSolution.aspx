<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="DetailSolution.aspx.cs" Inherits="PLNLite.Views.Administrator.DetailSolution" %>

<%@ Import Namespace="PLNLite.Data.DataAccess" %>
<%@ Import Namespace="PLNLite.Frameworks.Validation" %>
<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Frameworks.Format" %>
<%@ Import Namespace="PLNLite.Presentation.Components" %>
<%@ Import Namespace="PLNLite.Frameworks.Converter" %>
<%@ Import Namespace="PLNLite.Entity.Dictionary" %>
<%@ Import Namespace="PLNLite.Business.Components" %>
<%@ Import Namespace="System.Data" %>

<!DOCTYPE html>
<script runat="server">
    protected void Page_Load(object sender, EventArgs e)
    {
        //SessionCreator();
        if (Session["username"] == null && Session["password"] == null) Response.Redirect("../../Views/Application/PageSignIn.aspx");

        if (!IsPostBack)
        {
            CreateTestDetail();
            SetDDLProblem();
            if (Request.QueryString["action"] != null)
            {
                string _idsol = CryptographEngine.Decrypt(Request.QueryString["idsol"], true);

                if (Request.QueryString["action"] == "1")
                {
                    btnAdd1.Text = "Save <i class='fa fa-floppy-o'></i>";
                    btnCancel.Visible = true;
                    object[] data = CatalogSolution.GetSolutionByID(_idsol);
                    ddlProblem.SelectedValue = data[4].ToString();
                    txtSolution.Text = data[3].ToString();
                }
                else if (Request.QueryString["action"] == "2")
                {
                    DelimitData(_idsol);
                }
                else if (Request.QueryString["action"] == "3")
                {
                    DeleteData(_idsol);
                }
            }
        }
    }

    protected void SessionCreator()
    {
        Session["username"] = "NDI15";
        Session["name"] = "Nendi Junaedi";
        Session["password"] = "ndi.id15";
        Session["email"] = "nendi.juned@plnlite.co.id";
        Session["jobcd"] = "STAF";
    }

    protected void SetDDLProblem()
    {
        DataTable data = CatalogProblem.GetKomplain();

        ddlProblem.Items.Clear();
        for (int i = 0; i < data.Rows.Count; i++)
        {
            ddlProblem.Items.Add(new ListItem(data.Rows[i]["NMKOM"].ToString(), data.Rows[i]["IDKOM"].ToString()));
        }
    }
    
    protected void CreateTestDetail()
    {
        txtDate1.Text = DateTimeConverter.GetDateFormat(DateTime.Now.ToString("MM/dd/yyyy"));
        txtDate1.Enabled = false;
        txtDate1.CssClass = "form-control form-control-inline input-medium update";
        txtOperator1.Text = Session["name"].ToString();
        txtOperator1.Enabled = false;
        txtOperator1.CssClass = "form-control form-control-inline input-medium update";
    }
    
    //Add
    protected void btnAdd_Click(object sender, EventArgs e)
    {
        if (Request.QueryString["actio"] != null)
        {
            if (Request.QueryString["actio"] == "1")
            {
                UpdateData(CryptographEngine.Decrypt(Request.QueryString["idsol"], true));
            }
        }
        else
        {
            CatalogSolution.InsertSolution(DateTimeFormat.GetBegda(), DateTimeFormat.GetEndda(), txtSolution.Text, ddlProblem.SelectedItem.Text, DateTime.Now.ToString(), Session["username"].ToString());
        }
        Response.Redirect("DetailProblem.aspx");
    }
    
    //Update
    protected void UpdateData(string IDSOL)
    {
        CatalogSolution.UpdateSolution(DateTimeFormat.GetBegda(), DateTimeFormat.GetEndda(), IDSOL, txtSolution.Text, ddlProblem.SelectedItem.Text, DateTime.Now.ToString(), Session["username"].ToString());
    }

    //Delimit
    protected void DelimitData(string IDSOL)
    {
        CatalogSolution.DelimitSolution(IDSOL, Session["username"].ToString());
    }

    //Delete
    protected void DeleteData(string IDSOL)
    {
        CatalogSolution.DeleteSolution(IDSOL);
    }
    
    
    
    //View
    protected string GetAction(string IDSOL)
    {
        StringBuilder element = new StringBuilder();

        //Preview Detail
        element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='DetailProblem.aspx?action=1&idsol=" + CryptographEngine.Encrypt(IDSOL, true) + "'>U</a></span> ");
        element.Append("<span class='label label-default' style='color:white'><a style='color:white' href='DetailProblem.aspx?action=2&idsol=" + CryptographEngine.Encrypt(IDSOL, true) + "'>D</a></span> ");
        element.Append("<span class='label label-danger' style='color:white'><a style='color:white' href='DetailProblem.aspx?action=3&idsol=" + CryptographEngine.Encrypt(IDSOL, true) + "'>X</a></span> ");
        
        return element.ToString();
    }

    protected String GenerateSolusi()
    {
        StringBuilder _tableelement = new StringBuilder();

        DataTable table = CatalogSolution.GetSolution();

        for (int i = 0; i < table.Rows.Count; i++)
        {
            string _action = GetAction(table.Rows[i]["IDSOL"].ToString());
            _tableelement.Append("<tr class=''>");
            _tableelement.Append("<td>" + table.Rows[i]["NMSOL"].ToString() + "</td>");
            _tableelement.Append("<td align='center'>" + _action + "</td>");
            _tableelement.Append("</tr>");
        }

        return _tableelement.ToString();
    }
    
</script>

<html lang="en">
<head>
    <% Response.Write(BasicScripts.GetMetaScript()); %>

    <title>Solution</title>

    <% Response.Write(StyleScripts.GetCoreStyle()); %>
    <% Response.Write(StyleScripts.GetCustomStyle()); %>
    <% Response.Write(StyleScripts.GetTableStyle()); %>
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
                                Customer Care | Form Solution
                              <span class="tools pull-right">
                                  <a class="fa fa-times" href="javascript:;"></a>
                              </span>
                            </header>
                                <div class="panel-body">
                                    <div class="form-horizontal " runat="server">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tanggal</label>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <asp:TextBox ID="txtDate1" runat="server" class="form-control  m-bot15"></asp:TextBox>
                                            </div>
                                            <label class="col-sm-1 control-label">Operator</label>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <asp:TextBox ID="txtOperator1" runat="server" class="form-control m-bot15"></asp:TextBox>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Problem</label>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <asp:DropDownList ID="ddlProblem" runat="server" class="form-control  m-bot15"></asp:DropDownList>
                                            </div>
                                            <label class="col-sm-1 control-label">Solution</label>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <asp:TextBox ID="txtSolution" runat="server" class="form-control m-bot15" Rows="5"></asp:TextBox>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-lg-4 col-md-4">
                                                <asp:LinkButton class="btn btn-round btn-green" Visible="true" ID="btnAdd1" runat="server" Text="Add  <i class='fa fa-plus'></i>" OnClick="btnAdd_Click" />
                                                <asp:LinkButton class="btn btn-round btn-danger" Visible="false" ID="btnCancel" runat="server" Text="Cancel <i class='fa fa-times'></i>" href="../../Views/Administrator/DetailProblem.aspx" />
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
                                Customer Care | Problem
                          <span class="tools pull-right">
                              <a class="fa fa-chevron-down" href="javascript:;"></a>
                          </span>
                            </header>
                                <div class="panel-body">
                                    <h6>Annotation :</h6><p>
                                    <span class='label label-warning'>U</span> &nbsp; to "Update". &nbsp;&nbsp;
                                    <span class='label label-default'>D</span> &nbsp; to "Delimit". &nbsp;&nbsp;
                                    <span class='label label-danger'>X</span> &nbsp; to "Delete". &nbsp;&nbsp;
                                    </p>
                                    <br />
                                    <div class="adv-table">
                                        <div class="clearfix">
                                            <div class="btn-group">
                                                <%--<asp:DropDownList runat="server" ID="ddlGroup" AutoPostBack="true" class="form-control input-sm m-bot15"></asp:DropDownList>--%>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <button class="btn btn-green dropdown-toggle" data-toggle="dropdown">
                                                    Tools <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#"><i class="fa fa-print"></i> Print Document</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover table-bordered" id="dynamic-table">
                                            <thead>
                                                <tr>
                                                    <th>Classification</th>       
                                                    <th>Problem</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <%  Response.Write(GenerateSolusi()); %>
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
    <% Response.Write(JS.GetDynamicTableScript()); %>
    <% Response.Write(JS.GetInitialisationScript()); %>
</body>
</html>


