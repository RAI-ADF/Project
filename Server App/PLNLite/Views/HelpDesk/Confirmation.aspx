<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Confirmation.aspx.cs" Inherits="PLNLite.Views.HelpDesk.Confirmation" %>

<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Frameworks.Validation" %>
<%@ Import Namespace="PLNLite.Workflow" %>
<%@ Import Namespace="PLNLite.Data.DataAccess" %>

<!DOCTYPE html>
<script runat="server">
    protected void Page_Load(object sender, EventArgs e)
    {
        this.txtTicket.Focus();
        SessionCreator();
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

    protected void btnSUbmit_Click(object sender, EventArgs e)
    {
        Session["ticket"] = CryptographEngine.Encrypt(Filtering.RemoveSpecialCharacter(txtTicket.Text), true);
        if (ddlResult.SelectedValue == "1") //solved
        {
            UpdateDataSolved(txtTicket.Text);

            //send notifikasi Solved (FLWTY = 7) & status Closed (FLWST = 5)

        }
        else
            //unsolved
        {
            UpdateDataUnsolved(txtTicket.Text);

            //send notifikasi UnSolved (FLWTY = 6) & status Closed (FLWST = 2)   
        }
        Response.Redirect("FollowUp.aspx");
    }

    
    //update data solved
    protected void UpdateDataSolved(string TIKET)
    {
        object[] data = CatalogHelpDesk.GetAduanByTiket(TIKET);
        if (data.IsNullOrEmpty())
        {
            ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Check your ticket number!');", true);
        }
        else
        {
            //string maxrecid = CatalogHelpDesk.GetMaxRecidByTiket(TIKET);
            //CatalogHelpDesk.UpdateComplaint(DateTime.Now.ToString(), DateTime.MaxValue.ToString(), maxrecid, data[1].ToString(), data[6].ToString(), data[7].ToString(), data[8].ToString(), data[9].ToString(), data[10].ToString(), data[11].ToString(), data[12].ToString(), data[13].ToString(), data[14].ToString(), data[15].ToString(), data[16].ToString(), data[17].ToString(), data[18].ToString(), data[19].ToString(), data[20].ToString(), data[21].ToString(), data[22].ToString(), data[23].ToString(), data[11].ToString(), "");
        }
    }

    //update data Unsolved
    protected void UpdateDataUnsolved(string TIKET)
    {
        //object[] data = CatalogHelpDesk.GetComplaintByTicket(TIKET);
        //if (data.IsNullOrEmpty())
        //{
        //    ClientScript.RegisterStartupScript(this.GetType(), "myalert", "alert('Check your ticket number!');", true);
        //}
        //else
        //{
        //    string maxrecid = CatalogHelpDesk.GetMaxRecidByTiket(TIKET);
        //    CatalogHelpDesk.UpdateComplaint(DateTime.Now.ToString(), DateTime.MaxValue.ToString(), maxrecid, data[1].ToString(), data[6].ToString(), data[7].ToString(), data[8].ToString(), data[9].ToString(), data[10].ToString(), data[11].ToString(), data[12].ToString(), data[13].ToString(), data[14].ToString(), data[15].ToString(), data[16].ToString(), data[17].ToString(), data[18].ToString(), data[19].ToString(), data[20].ToString(), data[21].ToString(), data[22].ToString(), data[23].ToString(), data[11].ToString(), "");
        //}
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
                <h5><span class="color">Confirmation Form<strong></strong></span></h5>
                <h6><span class="color">Please submit by entry your <strong> Ticket Number</strong> and <strong>Result</strong></span></h6><br />
                <div class="row">
                    <form class="form-horizontal" runat="server">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ticket</label>
                            <div class="col-md-4">
                                <asp:TextBox ID="txtTicket" runat="server" class="intro-mask-color" placeholder="Ticket Number" BackColor="WhiteSmoke"></asp:TextBox>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Result<font color="red">*</font> </label>
                            <div class="col-md-4">
                                <asp:DropDownList ID="ddlResult" class="form-control dropdown-toggle"  runat="server" BackColor="WhiteSmoke">
                                    <asp:ListItem Value="1">Solved</asp:ListItem>
                                    <asp:ListItem Value="2">Unsolved</asp:ListItem>
                                </asp:DropDownList>
                            </div>
                        </div>

                        <h6><span class="color">Please Contact Ext. <strong>37406</strong> For Technical Support</span></h6>
                        <p align="center">
                        <div class="single-post-proceed">
                            <asp:LinkButton ID="btnSUbmit" runat="server" class="btn btn-presence btn-presence-dark" OnClick="btnSUbmit_Click" Text="Okay Submit"></asp:LinkButton>
                            <a class="btn btn-presence btn-presence-dark" href="../Application/PageHome.aspx">No, Go Back</a></div>
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

<script src="../../Scripts/CustomerCare/javascripts/jquery.magnific-popup.js"></script> 
<!-- <script src="../../Scripts/CustomerCare/javascripts/smooth-scroll.js"></script> -->
<script src="../../Scripts/CustomerCare/javascripts/smooth-scroll-standard-nav.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/standard-nav-action.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/standard-nav.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/form-validation.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/classie.js"></script>
<script src="../../Scripts/CustomerCare/javascripts/fancymenu-rollin.js"></script>
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

</body>
</html>
