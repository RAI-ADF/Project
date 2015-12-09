using System;
using System.Data;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using PLNLite.Frameworks.Validation;
using PLNLite.Data.DataAccess;

namespace PLNLite.Business.Components
{
    public class HelpDesk
    {
        public static string CreateTicket(string IDKOM)
        {
            string SEQUE = "";// Normalization.FilterNumberOfDigit((CatalogHelpDesk.GetTotalComplaintByProblem(IDKOM) + 1).ToString(), 4);
            //IDKOM = Normalization.FilterNumberOfDigit(IDKOM, 2);
            return (IDKOM + DateTime.Now.ToString("yyyy") + DateTime.Now.ToString("MM") + SEQUE);
        }

        //public static string GetOperatorNIK(string CLSID)
        //{
        //    DataTable data = CatalogHelpDesk.GetOperatorByProblem(CLSID);
        //    string NIK = "";
        //    for (int i = 0; i < data.Rows.Count; i++)
        //    {
        //        NIK = data.Rows[i]["PERNR"].ToString();
        //    }
        //    return NIK;
        //}

        //public static string GetOperatorName(string CLSID)
        //{
        //    DataTable data = CatalogHelpDesk.GetOperatorByProblem(CLSID);
        //    string NAME = "";
        //    for (int i = 0; i < data.Rows.Count; i++)
        //    {
        //        NAME = data.Rows[i]["CNAME"].ToString();
        //    }
        //    return NAME;
        //}
    }
}