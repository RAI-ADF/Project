using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Web;

namespace PLNLite.Presentation.Components
{
    public class StyleScripts
    {
        //dynamics references to design and express your art based on css script (plus bootstrap if any)
        private static String SetCoreStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Form Style -->");
            sb.Append("<link href='../../Scripts/UserPanel/bs3/css/bootstrap.min.css' rel='stylesheet'>");
            sb.Append("<link href='../../Scripts/UserPanel/css/bootstrap-reset.css' rel='stylesheet'>");
            sb.Append("<link href='../../Scripts/UserPanel/assets/font-awesome-4.1.0/css/font-awesome.min.css' rel='stylesheet' />");
            //optional / additional
            //sb.Append("<link href='../../Scripts/UserPanel/css/style.css' rel='stylesheet'>");
            //sb.Append("<link href='../../Scripts/UserPanel/css/style-responsive.css' rel='stylesheet' />");
            return sb.ToString();
        }

        public static String GetCoreStyle()
        {
            return SetCoreStyle();
        }

        private static String SetTableStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Dynamic Table Style -->");
            sb.Append("<link href='../../Scripts/UserPanel/assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />");
            sb.Append("<link href='../../Scripts/UserPanel/assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />");
            sb.Append("<link rel='stylesheet' href='../../Scripts/UserPanel/assets/data-tables/DT_bootstrap.css' />");
            return sb.ToString();
        }

        public static String GetTableStyle()
        {
            return SetTableStyle();
        }

        private static String SetFormStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Form Style -->");
            sb.Append("<link rel='stylesheet' href='../../Scripts/UserPanel/assets/bootstrap-switch-master/build/css/bootstrap3/bootstrap-switch.css' /> ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-fileupload/bootstrap-fileupload.css' />     ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />       ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-datepicker/css/datepicker.css' />           ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-timepicker/compiled/timepicker.css' />      ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-colorpicker/css/colorpicker.css' />         ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-daterangepicker/daterangepicker-bs3.css' /> ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/bootstrap-datetimepicker/css/datetimepicker.css' />   ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/jquery-multi-select/css/multi-select.css' />          ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/jquery-tags-input/jquery.tagsinput.css' />            ");
            return sb.ToString();
        }

        public static String GetFormStyle()
        {
            return SetFormStyle();
        }

        private static String SetGritterStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Gritter Style -->");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/gritter/css/jquery.gritter.css' />");
            return sb.ToString();
        }

        public static String GetGritterStyle()
        {
            return SetGritterStyle();
        }

        private static String SetCustomStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Custom styles for this template -->                                   ");
            sb.Append("<link href='../../Scripts/UserPanel/css/style.css' rel='stylesheet'>             ");
            sb.Append("<link href='../../Scripts/UserPanel/css/style-responsive.css' rel='stylesheet' />");
            return sb.ToString();
        }

        public static String GetCustomStyle()
        {
            return SetCustomStyle();
        }

        private static String SetTreeViewStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Tree View styles -->                                   ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/fuelux/css/tree-style.css' />");
            return sb.ToString();
        }

        public static String GetTreeViewStyle()
        {
            return SetTreeViewStyle();
        }

        private static String SetMediaStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Media Video Audio styles -->                                   ");
            sb.Append("<link rel='stylesheet' type='text/css' href='../../Scripts/UserPanel/assets/jplayer/skin/blue.monday/jplayer.blue.monday.css'/>");
            return sb.ToString();
        }

        public static String GetMediaStyle()
        {
            return SetMediaStyle();
        }

        private static String SetCalendarStyle()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!-- Calendar styles -->                                   ");
            sb.Append("<link href='../../Scripts/UserPanel/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css' rel='stylesheet' />");
            return sb.ToString();
        }

        public static String GetCalendarStyle()
        {
            return SetCalendarStyle();
        }

    }
}