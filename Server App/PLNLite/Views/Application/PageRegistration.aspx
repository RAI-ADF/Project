<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="PageRegistration.aspx.cs" Inherits="PLNLite.Views.Application.PageRegistration" %>

<%@ Import Namespace="PLNLite.Data.DataAccess" %>
<%@ Import Namespace="PLNLite.Frameworks.Validation" %>
<%@ Import Namespace="PLNLite.Frameworks.Security" %>
<%@ Import Namespace="PLNLite.Presentation.Components" %>
<%@ Import Namespace="PLNLite.Frameworks.Converter" %>
<%@ Import Namespace="System.Data" %>

<!DOCTYPE html>
<script runat="server">
        
</script>
<html lang="en">
<head>
     <% Response.Write(BasicScripts.GetMetaScript()); %>

    <title>Bio Community Portal</title>

    <!--Core CSS -->
    <% Response.Write(StyleScripts.GetCoreStyle()); %>
    <% Response.Write(StyleScripts.GetCustomStyle()); %>

</head>

<body class="full-width" <%--style="background-size:100%;background-image:url('../../Images/9th.png')"--%>>
    <section id="container" class="">
        <!--header start-->
        <% Response.Write(HorizontalMenu.TopMenuElement()); %>
        <!--header end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->

                <div class="row">
                    <div class="col-md-12">
                        <section class="panel">
                            <div class="panel-body profile-information">
                                <div class="col-md-3">
                                    <div class="profile-pic text-center">
                                        <img src="../../Scripts/UserPanel/images/bioinf.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="profile-desk">
                                        <h1>Online Registration</h1>
                                        <span class="text-muted">Community & Member Registration</span>
                                        <br />
                                        <p align="justify">
                                            Media registrasi online untuk komunitas dan anggota dengan mengisi salah satu form di bawah ini atau dapat juga dengan mendownload formulir dengan mengakses menu download di samping.
                                        </p>
                                        <%--<a href="#" class="btn btn-primary">View Profile</a>--%>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="profile-statistics">
                                        <br />
                                        <p style="font-size:x-large;font-weight:bold;color:#0FDBC5">Download</p>
                                        <h4><a href="#" class="btn btn-blue"><i class="fa fa-download"></i></a> Form Community</h4>
                                        <h4><a href="#" class="btn btn-blue"><i class="fa fa-download"></i></a> Form Member</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue">
                                <ul class="navio nav-tabs nav-justified ">
                                    <li class="active">
                                        <a data-toggle="tab" href="#community"> Community
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#member"> Member
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content tasi-tab">
                                    <div id="community" class="tab-pane active">
                                        <div class="position-center">
                                            <div class="prf-contacts sttng">
                                                <h2>Personal Information</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Full Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Your Name" id="c-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Lives In</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="City" id="lives-in" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Country" id="country" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Avatar</label>
                                                    <div class="col-lg-6">
                                                        <input type="file" id="exampleInputFile" class="file-pos">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="prf-contacts sttng">
                                                <h2>social networks</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Facebook</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="fb-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Twitter</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="twitter" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Google plus</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="g-plus" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Flicr</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="flicr" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Youtube</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="youtube" class="form-control">
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="prf-contacts sttng">
                                                <h2>Contact</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Address</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="addr2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Phone</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Cell</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="cell" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Skype</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="skype" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                        <button class="btn btn-default" type="button">Cancel</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                    <div id="member" class="tab-pane ">
                                        <div class="position-center">
                                            <div class="prf-contacts sttng">
                                                <h2>Personal Information</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Full Name</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Your Name" id="c-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Lives In</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="City" id="lives-in" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Country</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Country" id="country" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Avatar</label>
                                                    <div class="col-lg-6">
                                                        <input type="file" id="exampleInputFile" class="file-pos">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="prf-contacts sttng">
                                                <h2>social networks</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Facebook</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="fb-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Twitter</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="twitter" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Google plus</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="g-plus" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Flicr</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="flicr" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Youtube</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="youtube" class="form-control">
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="prf-contacts sttng">
                                                <h2>Contact</h2>
                                            </div>
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Address</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="addr2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Phone</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Cell</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="cell" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Skype</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder=" " id="skype" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                        <button class="btn btn-default" type="button">Cancel</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                    <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer class="footer-section">
            <div class="text-center">
                2015 &copy; Bio Farma Community Portal
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <% Response.Write(JS.GetSimpleCoreScript()); %>
    <% Response.Write(JS.GetCustomFormScript()); %>
    <% Response.Write(JS.GetInitialisationScript()); %>
    <script type="text/javascript">
        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });
    </script>
</body>
</html>