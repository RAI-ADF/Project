using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Web;

namespace PLNLite.Frameworks.Format
{
    public class DateTimeFormat
    {
        public static string GetBegda()
        {
            return DateTime.Now.ToString(ConfigurationManager.AppSettings["DateTimeFormat"]);
        }

        public static string GetEndda()
        {
            return DateTime.MaxValue.ToString(ConfigurationManager.AppSettings["DateTimeFormat"]);
        }
    }
}