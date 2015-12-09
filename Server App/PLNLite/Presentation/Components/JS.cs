using System;
using System.Collections.Generic;
using System.Data;
using System.Text;

namespace PLNLite.Presentation.Components
{
    public class JS
    {

        private static String SetSimpleCoreScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/lib/jquery.js'></script>                         ");
            sb.Append("<script src='../../Scripts/UserPanel/bs3/js/bootstrap.min.js'></script>                                                               ");
            return sb.ToString();
        }

        public static String GetSimpleCoreScript()
        {
            return SetSimpleCoreScript();
        }
        private static String SetCoreScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/lib/jquery.js'></script>                         ");
            sb.Append("<script src='../../Scripts/UserPanel/js/lib/jquery-1.8.3.min.js'></script>                                                            ");
            sb.Append("<script src='../../Scripts/UserPanel/bs3/js/bootstrap.min.js'></script>                                                               ");
            sb.Append("<script class='include' type='text/javascript' src='../../Scripts/UserPanel/js/accordion-menu/jquery.dcjqaccordion.2.7.js'></script>  ");
            sb.Append("<script src='../../Scripts/UserPanel/js/lib/jquery-ui-1.9.2.custom.min.js'></script>");
            sb.Append("<script src='../../Scripts/UserPanel/js/scrollTo/jquery.scrollTo.min.js'></script>                                                    ");
            sb.Append("<script src='../../Scripts/UserPanel/js/nicescroll/jquery.nicescroll.js' type='text/javascript'></script>							   ");
            return sb.ToString();
        }

        public static String GetCoreScript()
        {
            return SetCoreScript();
        }

        private static String SetDynamicTableScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!--dynamic table-->																			                                       ");
            sb.Append("<script type='text/javascript' language='javascript' src='../../Scripts/UserPanel/assets/advanced-datatable/media/js/jquery.dataTables.js'></script>   ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/data-tables/DT_bootstrap.js'></script>                                              ");
            sb.Append("<!--dynamic table initialization -->                                                                                                             ");
            sb.Append("<script src='../../Scripts/UserPanel/js/dynamic_table/dynamic_table_init.js'></script>                                                                 ");
            return sb.ToString();
        }

        public static String GetDynamicTableScript()
        {
            return SetDynamicTableScript();
        }

        private static String SetInitialisationScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/scripts.js'></script>");
            return sb.ToString();
        }

        public static String GetInitialisationScript()
        {
            return SetInitialisationScript();
        }

        private static String SetCustomFormScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/assets/bootstrap-switch-master/build/js/bootstrap-switch.js'></script>                            ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/fuelux/js/spinner.min.js'></script>                                 ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-fileupload/bootstrap-fileupload.js'></script>             ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js'></script>                   ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js'></script>               ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-datepicker/js/bootstrap-datepicker.js'></script>          ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js'></script>  ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-daterangepicker/moment.min.js'></script>                  ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-daterangepicker/daterangepicker.js'></script>             ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js'></script>        ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-timepicker/js/bootstrap-timepicker.js'></script>          ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/jquery-multi-select/js/jquery.multi-select.js'></script>            ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/jquery-multi-select/js/jquery.quicksearch.js'></script>             ");
            //sb.Append("<script src='../../Scripts/UserPanel/js/toggle-button/toggle-init.js'></script>                                                        ");
            sb.Append("<script src='../../Scripts/UserPanel/js/advanced-form/advanced-form.js'></script>                                                      ");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/bootstrap-inputmask/bootstrap-inputmask.min.js'></script>           ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/jquery-tags-input/jquery.tagsinput.js'></script>											");
            return sb.ToString();
        }

        public static String GetCustomFormScript()
        {
            return SetCustomFormScript();
        }

        private static String SetPieChartScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!--Easy Pie Chart-->                                                                    ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/easypiechart/jquery.easypiechart.js'></script>     ");
            return sb.ToString();
        }

        public static String GetPieChartScript()
        {
            return SetSparklineChartScript();
        }

        private static String SetSparklineChartScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!--Sparkline Chart-->                                                                   ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/sparkline/jquery.sparkline.js'></script>           ");
            return sb.ToString();
        }

        public static String GetSparklineChartScript()
        {
            return SetSparklineChartScript();
        }

        private static String SetFlotChartScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<!--jQuery Flot Chart-->                                                                 ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/flot-chart/jquery.flot.js'></script>               ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/flot-chart/jquery.flot.tooltip.min.js'></script>   ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/flot-chart/jquery.flot.resize.js'></script>        ");
            sb.Append("<script src='../../Scripts/UserPanel/assets/flot-chart/jquery.flot.pie.resize.js'></script>	");
            return sb.ToString();
        }

        public static String GetFlotChartScript()
        {
            return SetFlotChartScript();
        }

        private static String SetGritterScript()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/gritter/gritter.js' type='text/javascript'></script>   ");
            return sb.ToString();
        }

        public static String GetGritterScript()
        {
            return SetGritterScript();
        }

        private static String SetCustomTreeViewScripts()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/lib/jquery.js'></script>");
            sb.Append("<script src='../../Scripts/UserPanel/bs3/js/bootstrap.min.js'></script>");
            sb.Append("<script class='include' type='text/javascript' src='../../Scripts/UserPanel/js/accordion-menu/jquery.dcjqaccordion.2.7.js'></script>");
            sb.Append("<script src='../../Scripts/UserPanel/js/scrollTo/jquery.scrollTo.min.js'></script>");
            sb.Append("<script src='../../Scripts/UserPanel/js/nicescroll/jquery.nicescroll.js' type='text/javascript'></script>");
            return sb.ToString();
        }

        public static String GetCustomTreeViewScript()
        {
            return SetCustomTreeViewScripts();
        }

        private static String SetTreeViewScripts()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/assets/fuelux/js/tree.min.js'</script>   ");
            return sb.ToString();
        }

        public static String GetTreeViewScript()
        {
            return SetTreeViewScripts();
        }

        private static String SetTreeViewInitScripts()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/js/tree/tree.js'></script>");
            sb.Append("<script> jQuery(document).ready(function() { TreeView.init(); }); </script>");
            return sb.ToString();
        }

        public static String GetTreeViewInitScript()
        {
            return SetTreeViewInitScripts();
        }

        private static String SetMediaScripts()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/jplayer/js/jquery.jplayer.min.js'></script>");
            sb.Append("<script type='text/javascript' src='../../Scripts/UserPanel/assets/jplayer/jplayer.init.js'></script>");
            return sb.ToString();
        }

        public static String GetMediaScript()
        {
            return SetMediaScripts();
        }

        private static String SetCalendarScripts()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("<script src='../../Scripts/UserPanel/assets/fullcalendar/fullcalendar/fullcalendar.min.js'></script>");
            return sb.ToString();
        }

        public static String GetCalendarScript()
        {
            return SetCalendarScripts();
        }

    }
    public class InitJavascript
    {
        public static String InitializeCalendar(DataTable data)
        {
            StringBuilder script = new StringBuilder();
            script.Append(" var Script = function () {                                          ");
            script.Append(" $('#external-events div.external-event').each(function() {          ");
            script.Append(" var eventObject = {                                                 ");
            script.Append(" title: $.trim($(this).text())                                       ");
            script.Append(" };                                                                  ");
            script.Append(" $(this).data('eventObject', eventObject);                           ");
            script.Append(" $(this).draggable({                                                 ");
            script.Append(" zIndex: 999,                                                        ");
            script.Append(" revert: true,                                                       ");
            script.Append(" revertDuration: 0                                                   ");
            script.Append(" });                                                                 ");
            script.Append(" });                                                                 ");
            //variable initialization
            script.Append(" var date = new Date();                                              ");
            script.Append(" var d = date.getDate();                                             ");
            script.Append(" var m = date.getMonth();                                            ");
            script.Append(" var y = date.getFullYear();                                         ");

            script.Append(" $('#calendar').fullCalendar({                                       ");
            script.Append(" header: {                                                           ");
            script.Append(" left: 'prev,next today',                                            ");
            script.Append(" center: 'title',                                                    ");
            script.Append(" right: 'month,basicWeek,basicDay'                                   ");
            script.Append(" },                                                                  ");
            script.Append(" editable: true,                                                     ");
            script.Append(" droppable: true,                                                    ");
            script.Append(" drop: function(date, allDay) {                                      ");
            script.Append(" var originalEventObject = $(this).data('eventObject');              ");
            script.Append(" var copiedEventObject = $.extend({}, originalEventObject);          ");
            script.Append(" copiedEventObject.start = date;                                     ");
            script.Append(" copiedEventObject.allDay = allDay;                                  ");
            script.Append(" $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);");
            script.Append(" if ($('#drop-remove').is(':checked')) {                             ");
            script.Append(" $(this).remove();                                                   ");
            script.Append(" }                                                                   ");
            script.Append(" },                                                                  ");

            //data serialize
            script.Append(" events: [                                                           ");
            script.Append(" {                                                                   ");
            script.Append(" title: '1 Event(s)',                                                  ");
            script.Append(" start: new Date(y, 1, 1),                                           ");
            script.Append(" button: '../../Views/Community/PageCommunity.aspx'                        ");
            script.Append(" },                                                                  ");
            script.Append(" {                                                                   ");
            script.Append(" title: '1 Event(s)',                                 ");
            script.Append(" start: new Date(y, 1, 11),                                         ");
            //script.Append(" end: new Date(y, m, d-2),                                           ");
            script.Append(" url: '../../Views/Community/PageCommunity.aspx'                        ");
            script.Append(" },                                                                  ");
            script.Append(" {                                                                   ");
            script.Append(" title: '2 Event(s)',                                                  ");
            script.Append(" start: new Date(y, 1, 27),                                          ");
            //script.Append(" end: new Date(y, m, 29),                                            ");
            script.Append(" url: '../../Views/Community/PageCommunity.aspx'                     ");
            script.Append(" }                                                                   ");
            script.Append(" ]                                                                   ");
            script.Append(" });                                                                 ");
            script.Append(" }();                                                                ");

            return script.ToString();
        }

        public static String InitializeMorrisBar(DataTable data)
        {
            StringBuilder _element = new StringBuilder();

            _element.Append(" Morris.Bar({                                  ");
            _element.Append(" element: 'graph-bar',                         ");
            _element.Append(" data: [                                       ");
            _element.Append(" {x: '2015 T1', y: 3, z: 2, a: 50},             ");
            _element.Append(" {x: '2015 T2', y: 2, z: 5, a: 10},          ");
            _element.Append(" {x: '2015 T3', y: 1, z: 2, a: 15},             ");
            _element.Append(" {x: '2015 T4', y: 2, z: 4, a: 9}              ");
            _element.Append(" ],                                            ");
            _element.Append(" xkey: 'x',                                    ");
            _element.Append(" ykeys: ['y', 'z', 'a'],                       ");
            _element.Append(" labels: ['Unsolved', 'In-Process', 'Solved'], ");
            _element.Append(" barColors:['#F26565','#38A4FC','#60E08A']     ");
            _element.Append(" });                                           ");

            return _element.ToString();
        }

        public static String InitializeMorrisLine(DataTable data)
        {
            StringBuilder _element = new StringBuilder();

            _element.Append(" var day_data = [                  ");
            _element.Append(" {'elapsed': 'I', 'value': 34},    ");
            _element.Append(" {'elapsed': 'II', 'value': 24},   ");
            _element.Append(" {'elapsed': 'III', 'value': 3},   ");
            _element.Append(" {'elapsed': 'IV', 'value': 12},   ");
            _element.Append(" {'elapsed': 'V', 'value': 13},    ");
            _element.Append(" {'elapsed': 'VI', 'value': 22},   ");
            _element.Append(" {'elapsed': 'VII', 'value': 5},   ");
            _element.Append(" {'elapsed': 'VIII', 'value': 26}, ");
            _element.Append(" {'elapsed': 'IX', 'value': 12},   ");
            _element.Append(" {'elapsed': 'X', 'value': 19}     ");
            _element.Append(" ];                                ");

            _element.Append(" Morris.Line({             ");
            _element.Append(" element: 'graph-line',    ");
            _element.Append(" data: day_data,           ");
            _element.Append(" xkey: 'elapsed',          ");
            _element.Append(" ykeys: ['value'],         ");
            _element.Append(" labels: ['value'],        ");
            _element.Append(" lineColors:['#1FB5AD'],   ");
            _element.Append(" parseTime: false          ");
            _element.Append(" });                       ");

            return _element.ToString();
        }

        public static String InitializeMorrisAreaLine(DataTable data)
        {
            StringBuilder _element = new StringBuilder();

            _element.Append(" Morris.Area({                     ");
            _element.Append(" element: 'graph-area-line',       ");
            _element.Append(" behaveLikeLine: false,            ");
            _element.Append(" data: [                           ");
            _element.Append(" {x: '2011 Q1', y: 3, z: 3},       ");
            _element.Append(" {x: '2011 Q2', y: 2, z: 1},       ");
            _element.Append(" {x: '2011 Q3', y: 2, z: 4},       ");
            _element.Append(" {x: '2011 Q4', y: 3, z: 3},       ");
            _element.Append(" {x: '2011 Q5', y: 3, z: 4}        ");
            _element.Append(" ],                                ");
            _element.Append(" xkey: 'x',                        ");
            _element.Append(" ykeys: ['y', 'z'],                ");
            _element.Append(" labels: ['Y', 'Z'],               ");
            _element.Append(" lineColors:['#E67A77','#79D1CF'], ");
            _element.Append(" });                               ");

            return _element.ToString();
        }

        public static String InitializeMorrisDonut(DataTable data)
        {
            StringBuilder _element = new StringBuilder();

            _element.Append(" Morris.Donut({                                                           ");
            _element.Append(" element: 'graph-donut',                                                  ");
            _element.Append(" data: [                                                                  ");
            _element.Append(" {value: 70, label: 'foo', formatted: 'at least 70%' },                   ");
            _element.Append(" {value: 15, label: 'bar', formatted: 'approx. 15%' },                    ");
            _element.Append(" {value: 10, label: 'baz', formatted: 'approx. 10%' },                    ");
            _element.Append(" {value: 5, label: 'A really really long label', formatted: 'at most 5%' }");
            _element.Append(" ],                                                                       ");
            _element.Append(" backgroundColor: '#fff',                                                 ");
            _element.Append(" labelColor: '#1fb5ac',                                                   ");
            _element.Append(" colors: [                                                                ");
            _element.Append(" '#E67A77','#D9DD81','#79D1CF','#95D7BB'                                  ");
            _element.Append(" ],                                                                       ");
            _element.Append(" formatter: function (x, data) { return data.formatted; }                 ");
            _element.Append(" });                                                                      ");

            return _element.ToString();
        }

        public static String InitializeMorrisArea(DataTable data)
        {
            StringBuilder _element = new StringBuilder();

            _element.Append(" Morris.Area({                                                  ");
            _element.Append(" element: 'graph-area',                                         ");
            _element.Append(" behaveLikeLine: true,                                          ");
            _element.Append(" gridEnabled: false,                                            ");
            _element.Append(" gridLineColor: '#dddddd',                                      ");
            _element.Append(" axes: true,                                                    ");
            _element.Append(" fillOpacity:.7,                                                ");
            _element.Append(" data: [                                                        ");
            _element.Append(" {period: '2010 Q1', iphone: 10, ipad: 10, itouch: 10},         ");
            _element.Append(" {period: '2010 Q2', iphone: 1778, ipad: 7294, itouch: 18441},  ");
            _element.Append(" {period: '2010 Q3', iphone: 4912, ipad: 12969, itouch: 3501},  ");
            _element.Append(" {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},   ");
            _element.Append(" {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},   ");
            _element.Append(" {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},   ");
            _element.Append(" {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},   ");
            _element.Append(" {period: '2011 Q4', iphone: 25073, ipad: 5967, itouch: 5175},  ");
            _element.Append(" {period: '2012 Q1', iphone: 10687, ipad: 34460, itouch: 22028},");
            _element.Append(" {period: '2012 Q2', iphone: 1000, ipad: 5713, itouch: 1791},   ");
            _element.Append(" ],                                                             ");
            _element.Append(" lineColors:['#E67A77','#D9DD81','#79D1CF'],                    ");
            _element.Append(" xkey: 'period',                                                ");
            _element.Append(" ykeys: ['iphone', 'ipad', 'itouch'],                           ");
            _element.Append(" labels: ['iPhone', 'iPad', 'iPod Touch'],                      ");
            _element.Append(" pointSize: 0,                                                  ");
            _element.Append(" lineWidth: 0,                                                  ");
            _element.Append(" hideHover: 'auto'                                              ");
            _element.Append(" });                                                            ");

            return _element.ToString();
        }
    }
}