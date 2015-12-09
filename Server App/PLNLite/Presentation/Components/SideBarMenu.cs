using PLNLite.Presentation.Controllers;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Text;
using System.Web;
using System.Web.Configuration;

namespace PLNLite.Presentation.Components
{
    public class SideBarMenu
    {
        //scripts to manipulated data, also you cant use this class to have multi master page in one project.
        public static String TopMenuElementSetText(string username, string line1, string line2)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<header class='header fixed-top clearfix'>                                       ");
            sb.Append("<div class='brand'>                                                              ");
            sb.Append("<a href='../../Views/Administrator/Dashboard.aspx' class='logo'>                 ");
            sb.Append("<img src='../../Gallery/Contents/PLNLite-logo-small.png' alt='' ></img>                ");
            sb.Append("</a>                                                                             ");
            sb.Append("<div class='sidebar-toggle-box'>                                                 ");
            sb.Append("<div class='fa fa-bars'></div>                                                   ");
            sb.Append("</div>                                                                           ");
            sb.Append("</div>                                                                           ");
            sb.Append("<div class='nav notify-row' id='top_menu'>                                       ");
            sb.Append("<ul class='nav top-menu'>                                                        ");
            sb.Append("<!-- Information Start -->                                                       ");
            sb.Append("<li class=''>                                                                    ");
            sb.Append("<a href='#'>                                                                     ");
            sb.Append(line1 + "<br/>                                                                    ");
            sb.Append(line2);
            sb.Append("</a>                                                                             ");
            sb.Append("</li>                                                                            ");
            sb.Append("</lu>                                                                            ");
            sb.Append("</div>                                                                           ");
            sb.Append("<div class='top-nav clearfix'>                                                   ");
            sb.Append("<!--search & user info start-->                                                  ");
            sb.Append("<ul class='nav pull-right top-menu'>                                             ");
            sb.Append("<!-- user login dropdown start-->                                                ");
            sb.Append("<li class='dropdown'>                                                            ");
            sb.Append("<a data-toggle='dropdown' class='dropdown-toggle' href='#'>                                                                     ");
            sb.Append("<img alt='' src='../../Scripts/UserPanel/images/user.png'>                             ");
            sb.Append("<span class='username'>" + username + "</span>                                   ");
            sb.Append("<b class='caret'></b>                                                            ");
            sb.Append("</a>                                                                             ");
            sb.Append("<ul class='dropdown-menu extended logout'>                                       ");

            //if (WebConfigurationManager.AppSettings["Gateway"] == "local")
            {
                sb.Append("<li><a href='../../Views/Application/PageHome.aspx?logout=true'><i class='fa fa-key'></i> Log Out</a></li>");
            }

            sb.Append("</ul>                                                                            ");
            sb.Append("</li>                                                                            ");
            sb.Append("<!-- user login dropdown end -->                                                 ");
            sb.Append("</ul>                                                                            ");
            sb.Append("<!--search & user info end-->                                                    ");
            sb.Append("</div>                                                                           ");
            sb.Append("</header>                                                                        ");

            return sb.ToString();
        }

        public static String TopMenuElement(string username)
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<header class='header fixed-top clearfix'>                                       ");
            sb.Append("<div class='brand'>                                                              ");
            sb.Append("<a href='../Administrator/Dashboard.aspx' class='logo'>                          ");
            sb.Append("<img src='../../Gallery/Contents/PLNLite-logo-small.png' alt=''></img>                ");
            sb.Append("</a>                                                                             ");
            sb.Append("<div class='sidebar-toggle-box'>                                                 ");
            sb.Append("<div class='fa fa-bars'></div>                                                   ");
            sb.Append("</div>                                                                           ");
            sb.Append("</div>                                                                           ");
            sb.Append("<div class='top-nav clearfix'>                                                   ");
            sb.Append("<!--search & user info start-->                                                  ");
            sb.Append("<ul class='nav pull-right top-menu'>                                             ");
            sb.Append("<!-- user login dropdown start-->                                                ");
            sb.Append("<li class='dropdown'>                                                            ");
            sb.Append("<a data-toggle='dropdown' class='dropdown-toggle' href='#'>                      ");
            sb.Append("<img alt='' src='../../Scripts/UserPanel/images/user.png'>                       ");
            sb.Append("<span class='username'>" + username + "</span>                                   ");
            sb.Append("<b class='caret'></b>                                                            ");
            sb.Append("</a>                                                                             ");
            sb.Append("<ul class='dropdown-menu extended logout'>                                       ");

            //if (WebConfigurationManager.AppSettings["Gateway"] == "local")
            {
                sb.Append("<li><a href='../../Views/Application/PageHome.aspx?logout=true'><i class='fa fa-key'></i> Log Out</a></li>      ");
            }

            sb.Append("</ul>                                                                            ");
            sb.Append("</li>                                                                            ");
            sb.Append("<!-- user login dropdown end -->                                                 ");
            sb.Append("</ul>                                                                            ");
            sb.Append("<!--search & user info end-->                                                    ");
            sb.Append("</div>                                                                           ");
            sb.Append("</header>                                                                        ");

            return sb.ToString();
        }

        public static String LeftSidebarMenuElementAutoGenerated(string USRNM)
        {
            StringBuilder sb = new StringBuilder();
            List<object[]> menuparent = new List<object[]>();
            List<object[]> menuchild = new List<object[]>();

            if (WebConfigurationManager.AppSettings["UserMenu"].ToString() == "")
            {
                //begin all
                sb.Append("<aside>                                                  ");
                sb.Append("<div id='sidebar' class='nav-collapse'>                  ");
                sb.Append("<!-- sidebar menu start-->                               ");
                sb.Append("<ul class='sidebar-menu' id='nav-accordion'>             ");
                //dashboard
                sb.Append("<li>                                                     ");
                sb.Append("<a href='../../Views/Administrator/Dashboard.aspx'>      ");
                sb.Append("<i class='fa fa-dashboard'></i>                          ");
                sb.Append("<span>Dashboard</span>                                   ");
                sb.Append("</a>                                                     ");
                sb.Append("</li>                                                    ");
                //end dashboard menu

                //sb.Append(MenuStructureGenerator.GenerateMenu(USRNM));

                //sub menu trial
                sb.Append("<li class='sub-menu'>                                    ");
                sb.Append("<a href='javascript:;'><i class='fa fa-tasks'></i>       ");
                sb.Append("<span> Customer Care Reference</span>                    ");
                sb.Append("</a>                                                     ");
                sb.Append("<ul class='sub'>                                         ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/DetailProblem.aspx'><i class='fa fa-exclamation-triangle'></i><span> Problem </span></a>");
                sb.Append("</li>                                                    ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/DetailSolution.aspx'><i class='fa fa-exchange'></i><span> Solution </span></a>");
                sb.Append("</li>                                                    ");
                sb.Append("</ul>                                                    ");
                sb.Append("</li>                                                    ");

                sb.Append("<li class='sub-menu'>                                    ");
                sb.Append("<a href='javascript:;'><i class='fa fa-comment'></i>");
                sb.Append("<span> Customer Care </span>");
                sb.Append("</a>                                                     ");
                sb.Append("<ul class='sub'>                                         ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/HelpDeskRequest.aspx'><i class='fa fa-sign-in'></i><span> Problem From User </span></a>");
                sb.Append("</li>   ");
                sb.Append("</ul>   ");
                sb.Append("</li>   ");

                sb.Append("<li class='sub-menu'>                                    ");
                sb.Append("<a href='javascript:;'><i class='fa fa-file-text-o'></i>");
                sb.Append("<span> Customer Care Report </span>");
                sb.Append("</a>                                                     ");
                sb.Append("<ul class='sub'>                                         ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/ReportForm.aspx'><i class='fa fa-file-text-o'></i><span> Report </span></a>");
                sb.Append("</li>   ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/Statistics.aspx'><i class='fa fa-bar-chart-o'></i><span> Statistics </span></a>");
                sb.Append("</li>   ");
                sb.Append("</ul>   ");
                sb.Append("</li>   ");

                sb.Append("<li class='sub-menu'>                                    ");
                sb.Append("<a href='javascript:;'><i class='fa fa-bell'></i>");
                sb.Append("<span> Notification </span>");
                sb.Append("</a>                                                     ");
                sb.Append("<ul class='sub'>                                         ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/SettingEmail.aspx'><i class=''>@</i><span> Email Setting </span></a>");
                sb.Append("</li>   ");
                sb.Append("<li class='sub-menu'><a href='../../Views/Administrator/SettingSMS.aspx'><i class='fa fa-envelope'></i><span> SMS Setting </span></a>");
                sb.Append("</li>   ");
                sb.Append("</ul>   ");
                sb.Append("</li>   ");
                sb.Append("</ul>                                                    ");
                sb.Append("</li>                                                    ");
                //end sub menu trial

                sb.Append("</ul>                                                    ");
                sb.Append("<!-- sidebar menu end-->                                 ");
                sb.Append("</div>                                                   ");
                sb.Append("</aside>                                                 ");

                WebConfigurationManager.AppSettings["UserMenu"] = sb.ToString();
            }
            else
            {
                sb.Append(WebConfigurationManager.AppSettings["UserMenu"].ToString());
            }
            return sb.ToString();
        }
    }
}