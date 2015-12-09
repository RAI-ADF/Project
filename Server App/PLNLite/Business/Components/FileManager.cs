using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace PLNLite.Business.Components
{
    public class FileManager
    {
        public static string RenameFile(string name, string format)
        {
            return name + "." + format.Split('.')[1];
        }
    }
}