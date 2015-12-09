<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="HelpDesk.aspx.cs" Inherits="PLNLite.Views.HelpDesk.HelpDesk" %>

<%@ Import Namespace="PLNLite.Data.DataAccess" %>
<%@ Import Namespace="PLNLite.Frameworks.Validation" %>
<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Frameworks.Format" %>
<%@ Import Namespace="PLNLite.Presentation.Components" %>
<%@ Import Namespace="PLNLite.Frameworks.Converter" %>
<%@ Import Namespace="PLNLite.Entity.Dictionary" %>
<%@ Import Namespace="PLNLite.Business.Components" %>
<%@ Import Namespace="System.Data" %>
<%@ Import Namespace="System.IO" %>
 
<!DOCTYPE html>
<script runat="server">

    protected void Page_Load(object sender, EventArgs e)
    {
        //SessionCreator();
        //if (Session["username"] == null && Session["password"] == null) Response.Redirect("../../Views/Application/PageSignIn.aspx");
        if (!IsPostBack)
        {
            SetDDLMasalah();
            if (this.txtNIK.Text != "")
            {
                SetUserInformation(this.txtNIK.Text);
            }
        }
    }

    protected void txtNIK_TextChanged(object sender, EventArgs e)
    {
        SetUserInformation(this.txtNIK.Text);
    }
    
    protected void SetUserInformation(string NIK)
    {
        object[] data = UserCatalog.GetUserData(NIK);

        if (data.IsNullOrEmpty())
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Check your NIK number!');", true);
        }
        else
        {
            this.txtNIK.Text = data[0].ToString();
            this.txtName.Text = data[1].ToString();
            this.txtUnit.Text = data[3].ToString();
            //this.txtExt.Text = "";
            this.txtEmail.Text = data[7].ToString();
            Session["orgcd"] = data[8].ToString();
        }
        //ddlClassification.Focus();
    }

    protected void SetDDLMasalah()
    {
        DataTable data = CatalogProblem.GetKomplain();

        ddlProblem.Items.Clear();
        for (int i = 0; i < data.Rows.Count; i++)
        {
            ddlProblem.Items.Add(new ListItem(data.Rows[i]["NMKOM"].ToString(), data.Rows[i]["IDKOM"].ToString()));
        }
    }

    protected void SetTicketNumber(string TICKET)
    {
        Session["ticket"] = CryptographEngine.Encrypt(Filtering.RemoveSpecialCharacter(TICKET), true); ;
    }
    
    protected void InsertComplaint()
    {
        //string TICKET = HelpDesk.CreateTicket(ddlSubProblem.SelectedValue);
        //SetTicketNumber(TICKET);
        //CatalogHelpDesk.InsertComplaint(DateTimeFormat.GetBegda(), DateTimeFormat.GetEndda(), TICKET, ddlSubProblem.SelectedValue, ddlSubProblem.SelectedItem.Text, ddlPlant.SelectedValue, ddlPlant.SelectedItem.ToString(), txtDescription.Text, txtNIK.Text, txtName.Text, Session["orgcd"].ToString(), txtUnit.Text, HelpDesk.GetOperatorNIK(ddlProblem.SelectedValue), HelpDesk.GetOperatorName(ddlProblem.SelectedValue), "", "", "", "", "", "", FileManager.RenameFile(TICKET, fileUpload.FileName), txtNIK.Text, "0");
    }

    protected void btnSubmit_Click(object sender, EventArgs e)
    {
            InsertComplaint();
            Response.Redirect("Information.aspx");
    }
    
</script>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Customer Care</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Biofarma">
<meta name="author" content="Biofarma">

<!-- Standard Favicon--> 
<link rel="shortcut icon" href="../../Scripts/CustomerCare/images/favicon/favicon.ico">

<!-- Standard iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="57x57" href="../../Scripts/CustomerCare/images/touchicons/apple-touch-icon-57-precomposed" />
<!-- Retina iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="114x114" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-114-precomposed" />
<!-- Standard iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="72x72" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-72-precomposed" />
<!-- Retina iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="144x144" href="../../Scripts/CustomerCare/assets/touchicons/apple-touch-icon-144-precomposed" />

<!-- Bootstrap CSS Files -->
<link href="../../Scripts/CustomerCare/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/bootstrap/css/bootstrap-theme.css" rel="stylesheet">

<%-- UPLOAD FILE --%>
<link rel="stylesheet" type="text/css" href="../../Scripts/UserPanel/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link href="../../Scripts/UserPanel/css/bootstrap-reset.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../Scripts/UserPanel/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link href='../../Scripts/UserPanel/assets/font-awesome-4.1.0/css/font-awesome.min.css' rel='stylesheet' />

<!-- Custom Fonts Setup via Font-face CSS3 -->
<link href="../../Scripts/CustomerCare/fonts/fonts.css" rel="stylesheet">
<!-- CSS files for plugins -->
<%--<link href="../../Scripts/CustomerCare/stylesheets/pace.preloader.css" rel="stylesheet">--%>
<link href="../../Scripts/CustomerCare/stylesheets/parallax.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/owl.carousel.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/owl.theme.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/magnific-popup.css" rel="stylesheet" > 
<link href="../../Scripts/CustomerCare/stylesheets/foliohover.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/fancymenu.css"  rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/intro.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/standard-nav.css" rel="stylesheet">
<link href="../../Scripts/CustomerCare/stylesheets/single-post.css" rel="stylesheet">
<!-- Main Template Styles -->
<link href="../../Scripts/CustomerCare/stylesheets/main.css" rel="stylesheet">
<!-- Main Template Responsive Styles -->
<link href="../../Scripts/CustomerCare/stylesheets/main-responsive.css" rel="stylesheet">
<!-- Main Template Retina Optimizaton Rules -->
<link href="../../Scripts/CustomerCare/stylesheets/main-retina.css" rel="stylesheet">
<!-- LESS stylesheet for managing color presets -->
<link rel="stylesheet/less" type="text/css" href="../../Scripts/CustomerCare/less/color-green.less">
<!-- LESS JS engine-->
<script src="../../Scripts/CustomerCare/less/less-1.5.0.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/modernizr.custom.js"></script>

<%-- Datetime Picker --%>    
<%--<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-timepicker/compiled/timepicker.css' /> 
<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/jquery-tags-input/jquery.tagsinput.css' /> 
<link rel="stylesheet" type="text/css" href="../../Scripts/UserPanel/assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" type="text/css" href="../../Scripts/UserPanel/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-datepicker/css/datepicker.css' />  
<link href='../../Scripts/UserPanel/css/datetimepicker.css' rel='stylesheet'>
<link href='../../Scripts/UserPanel/css/bootstrap-reset.css' rel='stylesheet'>--%>

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../Scripts/CustomerCare/bootstrap/js/html5shiv.js"></script>
      <script src="../../Scripts/CustomerCare/bootstrap/js/respond.min.js"></script>
    <![endif]-->

</head>


<body>

<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a href="../Application/PageHome.aspx"><span>Home</span></a></li>
				</ul>
			</nav>
		</div>


<div class="static-side-navigation-wrap grey-bg hidden-lg">
				<p><button id="trigger-overlay" type="button"></button></p>
	<%--<ul class="navigation">
		<li data-slide="1" ></li>
		<li data-slide="2"></li>
		<li data-slide="3"></li>
		<li data-slide="4"></li>
	    <li data-slide="5"></li>
	    <li data-slide="6"></li>
	    <li data-slide="7"></li>
	    <li data-slide="8"></li>
	</ul>--%>
	<div class="vertical-logo">
		<a href="#"><%--<img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/vertical-logo.png"/>--%></a>
	</div>

</div>	

 <!-- standard-header -->
<header class="standard-header white-bg visible-lg">
            <div class="navbar container" role="navigation">

	            	<div class="row">
	            		
		              <div class="col-md-3 main-logo">
			                <%--<a class="brand dark" href="#"><img alt="presence" title="helpdesk" src="../../Scripts/CustomerCare/images/standard-logo.png"/></a>--%>
		              </div>

		              <div class="col-md-9 main-nav">
			                <form class="navbar-form pull-right">
			                  <a class="btn btn-presence btn-presence-dark presence-ease" href="../Application/PageHome.aspx">Home</a>
			                </form>
		              </div>
	            </div>

            	</div>
            	<!-- navbar:ends -->
 </header>
 <!-- standard-header:ends -->




	


<!--Mast-wrap : starts-->
<section class="mast-wrap overlay-close">
	


<!-- page-section : starts -->
<section class="single-single-post-section page-section white-bg">
	<section class="inner-section">


		<section class="container ">
		
			<!-- container : starts -->
	<div id="item_content">
	
	

	
	<div class="row">
            <div class="single-post-area-inner text-center">
                <h5><span class="color">Customer Care<strong></strong></span></h5>
                <h5><span class="color"><strong>Problem Report</strong></span></h5>
                <h6><span class="color">Informasi personal</span></h6><br />
                <div class="row">
                    <form class="form-horizontal" runat="server">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kode Meteran </label>
                            <div class="col-md-4">
                                <asp:TextBox ID="txtNIK" runat="server" class="intro-mask-color" BackColor="WhiteSmoke" OnTextChanged="txtNIK_TextChanged" AutoPostBack="true"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama </label>
                            <div class="col-md-4">
                                <asp:TextBox ID="txtName" ReadOnly="true" runat="server" value="" class="intro-mask-color" BackColor="WhiteSmoke"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat </label>
                            <div class="col-md-4">
                                <asp:TextBox ID="txtUnit" ReadOnly="true" Enabled="true" runat="server" TextMode="MultiLine" Rows="2" value="" class="intro-mask-color" BackColor="WhiteSmoke"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                                <asp:TextBox ID="txtEmail" ReadOnly="true" Enabled="true" runat="server" class="intro-mask-color" placeholder="" BackColor="WhiteSmoke"></asp:TextBox>
                            </div>
                        </div>

                        <h6><span class="color">Silakan isi data masalah pada form di bawah ini</span></h6><br />
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Masalah<font color="red">*</font> </label>
                            <div class="col-md-4">
                                <asp:DropDownList ID="ddlProblem" runat="server" class="form-control dropdown-toggle" BackColor="WhiteSmoke"></asp:DropDownList>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-1 control-label"> </label>
                            <div class="col-md-10">
                                <label class="control-label">Deskripsikan masalah Anda</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"> </label>
                            <div class="col-md-8">
                                <asp:TextBox ID="txtDescription" runat="server" class="" placeholder="" BackColor="WhiteSmoke" TextMode="MultiLine" Rows="2" ></asp:TextBox>
                            </div>
                        </div>

                        <h6><span class="color">Please make sure you entry the valid information</span></h6>
                        <p align="center">
                        <div class="single-post-proceed">
                            <asp:LinkButton ID="btnSubmit" runat="server" class="btn btn-presence btn-presence-dark" Text="Okay, Submit" OnClick="btnSubmit_Click"></asp:LinkButton> 
                            <a class="btn btn-presence btn-presence-dark" href="../Application/PageHome.aspx">No, Cancel</a></div>
                        </p>
                    </form>
                </div>
            </div>
	</div>


	</div>

		</section>
		<!-- container : ends -->
			
	</section>
	<!-- inner-section : ends -->
		
	
</section>
<!-- page-section : ends -->




<footer id="foot" class="mastfoot">

	<section class="inner-section foot-top">
		
		<section class="container">

			<div class="row">
				<article class="col-md-8 credentials-wrap">
					<ul class="credentials text-left">
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/mail.png"/><span class="credential-text">helpdesk@bbiofarma.co.id</span></a></li>
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/phone.png"/><span class="credential-text">37406 / 37407</span></a></li>
					</ul>
				</article>
				<article class="col-md-4 credentials-wrap">
					<ul class="credentials text-right">
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/locate.png"/><span class="credential-text">Jalan Pasteur No. 28 Bandung 40161</span></a></li>
					</ul> 
				</article>
			</div>
		</section>


	</section>



	<section class="inner-section foot-bottom">
		
		<section class="container">

			<div class="row">
				<article class="col-md-6 social-wrap">
					<ul class="social text-left">
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/facebook.png"/></a></li>
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/twitter.png"/></a></li>
						<li><a href="#"><img title="helpdesk" alt="presence" src="../../Scripts/CustomerCare/images/social/google.png"/></a></li>
					</ul>
				</article>
				<article class="col-md-6 credits-wrap text-right">
					<p>Made by IT Team of Biofarma</p>
					<p>Copyright &copy; 2015 Biofarma. All rights reserved.</p>
				</article>
			</div>

		</section>


	</section>
	
	

</footer>


</section>
<!-- Mast-wrap:ends -->



<!-- Core JS Libraries -->
<script src="../../Scripts/CustomerCare/bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../../Scripts/CustomerCare/bootstrap/js/bootstrap.js" ></script> 

<!-- JS Plugins -->
<%--<script src="../../Scripts/CustomerCare/javascripts/pace.min.js"></script>--%>
<script src="../../Scripts/CustomerCare/javascripts/retina.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/device.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/owl.carousel.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/waypoints.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.tweet.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/okvideo.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.mixitup.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/flexslider.js" ></script> 

<%-- Date Time Picker --%>
<%--<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src='../../Scripts/UserPanel/js/advanced-form/datetimepicker.js'></script>   --%>


<script src="../../Scripts/CustomerCare/javascripts/jquery.magnific-popup.js"></script> 
 <script src="../../Scripts/CustomerCare/javascripts/smooth-scroll.js"></script> 
<script src="../../Scripts/CustomerCare/javascripts/smooth-scroll-standard-nav.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/standard-nav-action.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/standard-nav.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/form-validation.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/classie.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/fancymenu-rollin.js"></script>

<%-- Upload JS --%>
<script type="text/javascript" src="../../Scripts/UserPanel/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

<!-- Parallax Plugins Setup -->
<script src="../../Scripts/CustomerCare/javascripts/jquery.stellar.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/jquery.parallax.min.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/parallax-one.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/parallax-two.js"></script>
<!-- <script src="../../Scripts/CustomerCare/javascripts/bgvideo-init.js" ></script>  -->
<script src="../../Scripts/CustomerCare/javascripts/carousel-init.js" ></script> 
<script src="../../Scripts/CustomerCare/javascripts/portfolio.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/intro.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/main.js"></script>

<%-- Upload --%>
<script src="../../Scripts/UserPanel/js/advanced-form/advanced-form.js"></script>

<!-- Scroll Animations Setup -->
<script src="../../Scripts/ParallaxForm/javascripts/wow.js"></script>
<script src="../../Scripts/ParallaxForm/javascripts/animations-init.js"></script>

</body>
</html>
