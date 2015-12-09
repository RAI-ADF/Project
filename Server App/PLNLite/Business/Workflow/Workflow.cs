using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using PLNLite.Data.DataAccess;
using PLNLite.Service.Services;
using PLNLite.Frameworks.Security;
using System.Text;
using System.Data;

namespace PLNLite.Workflow
{
    public class WorkflowManager
    {
        public static object[] GetDocumentReviewer(string JOBCD)
        {
            switch (JOBCD)
            {
                case "STAF":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "STAFMUDA":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "PELAKSANA":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "JRRESEARCH":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "PMT":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "AHLIMUDA":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "KASI":
                    {
                        return new object[] { "KABAG", "KADIV" };
                    }
                case "KABAG":
                    {
                        return new object[] { "", "KADIV" };
                    }
                case "KADIV":
                    {
                        return new object[] { "", "DIREKTUR" };
                    }
                case "DIREKTUR":
                    {
                        return new object[] { "", "DIREKTUR" };
                    }
                default:
                    {
                        return new object[] { "", "" };
                    }
            }
        }
        //public static object[] GetPemeriksa(string POSID, string JOBCD, int SEQNO)
        //{
        //    object[] value = GetDocumentReviewer(JOBCD);
        //   // return OrganizationalDataCatalog.GetChiefByPositionAndJobCode(POSID, value[SEQNO].ToString());
        //}

    }
    public class WorkflowProductionPlanning : WorkflowManager
    {
        public static void InitializeDocumentWorkflow(string DOCID, string POSID, string JOBCD, string PERNR)
        {
            //BatchWorkflowCatalog.InsertWorkflow(DOCID, "1", "1", GetPemeriksa(POSID, JOBCD, 0)[3].ToString(), GetPemeriksa(POSID, JOBCD, 0)[0].ToString(), "Please Review", "", PERNR);
            //BatchWorkflowCatalog.InsertWorkflow(DOCID, "2", "1", GetPemeriksa(POSID, JOBCD, 1)[3].ToString(), GetPemeriksa(POSID, JOBCD, 1)[0].ToString(), "Please Approve", "", PERNR);
        }

        //add @param FLWST by Nendi
        //add exception Status by Nendi
        public static string GetStateAction(string RECID,string DOCID, int SEQNO, string FLWTY, string FLWST)
        {
            StringBuilder element = new StringBuilder();
            switch (FLWTY)
            {
                case "1":
                    {
                        if (SEQNO == 1)
                        {
                            if (FLWST == "1")
                            {
                                //pilih pic
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='HelpDeskDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>D</a></span> ");
                                element.Append("<span class='label label-primary' style='color:white'><a style='color:white' href='CustomerCarePIC.aspx?act=2&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>P</a></span> ");
                            }
                            else
                            {
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='HelpDeskDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>D</a></span> ");
                            }
                            
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;

                case "2":
                    {
                        if (SEQNO == 1)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 2)
                        {
                            if (FLWST == "2" || FLWST == "6")
                            {
                                //action
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>T</a></span> ");    
                            }
                            else
                            {
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                            }
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;

                case "3":
                    {
                        if (SEQNO == 1)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 2)
                        {
                            if (FLWST == "6")
                            {
                                //action
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>T</a></span> ");
                            }
                            else
                            {
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                            }
                        }
                        else if (SEQNO == 3)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 4)
                        {
                            element.Append("");
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;

                case "4":
                    {
                        if (SEQNO == 1)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 3)
                        {
                            if (FLWST == "7")
                            {
                                //valid
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressValidationDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='ProgressValidationDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>T</a></span> ");
                            }
                            else
                            {
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressValidationDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                            }
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;

                case "5":
                    {
                        if (SEQNO == 1)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 2)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 3)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 4)
                        {
                            if (FLWST == "3")
                            {
                                //approve
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressApprovalDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='ProgressApprovalDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>T</a></span> ");
                            }
                            else
                            {
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressApprovalDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                            }
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;

                case "6":
                    {
                        if (SEQNO == 1)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 2)
                        {
                            if (FLWST == "2" || FLWST == "6")
                            {
                                //unsolved
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                                element.Append("<span class='label label-warning' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=1&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>T</a></span> ");
                            }
                            else
                            {
                                element.Append("<span class='label label-info' style='color:white'><a style='color:white' href='ProgressExecutionDetail.aspx?act=view&RECID=" + CryptographEngine.Encrypt(RECID, true) + "&TIKET=" + CryptographEngine.Encrypt(DOCID, true) + "&FLWST=" + CryptographEngine.Encrypt(FLWST, true) + "'>V</a></span> ");
                            }
                        }
                        else if (SEQNO == 3)
                        {
                            element.Append("");
                        }
                        else if (SEQNO == 4)
                        {
                            element.Append("");
                        }
                        else
                        {
                            element.Append("");
                        }
                    }
                    break;
            }

            return element.ToString();
        }

        public static string GetStateStatus(string FLWST)
        {
            StringBuilder element = new StringBuilder();

            switch (FLWST)
            {
                case "1":
                    {
                        return "<span class='label label-default' style='color:white'>?</span> ";
                    }

                case "2":
                    {
                        return "<span class='label label-warning' style='color:white'><i class='fa fa-gear'></i></span>";
                    }

                case "3":
                    {
                        return "<span class='label label-primary' style='color:white'>V</span> ";
                    }

                case "4":
                    {
                        return "<span class='label label-success' style='color:white'>A</span> ";
                    }

                case "5":
                    {
                        return "<span class='label label-info' style='color:white'>C</span>";
                    }

                case "6":
                    {
                        return "<span class='label label-danger' style='color:white'><i class='fa fa-gear'></i></span>";
                    }
                case "7":
                    {
                        return "<span class='label label-inverse' style='color:white'><i class='fa fa-gear'></i></span>";
                    }
            }
            return element.ToString();
        }

        public static string GetStateStatusName(string FLWST)
        {
            StringBuilder element = new StringBuilder();

            switch (FLWST)
            {
                case "1":
                    {
                        return "Pending";
                    }

                case "2":
                    {
                        return "In Progress";
                    }

                case "3":
                    {
                        return "Validate";
                    }

                case "4":
                    {
                        return "Approved";
                    }

                case "5":
                    {
                        return "Closed";
                    }

                case "6":
                    {
                        return "In Progress (Correction)";
                    }
                case "7":
                    {
                        return "In Progress (Wait for Validate)";
                    }
            }
            return element.ToString();
        }

        public static string GetStateStatusNameInformation(string FLWST)
        {
            StringBuilder element = new StringBuilder();

            switch (FLWST)
            {
                case "1":
                    {
                        return "Is on Pending";
                    }

                case "2":
                    {
                        return "Waiting for Execution";
                    }

                case "3":
                    {
                        return "Waiting for Approved";
                    }

                case "4":
                    {
                        return "Waiting for Confirmation";
                    }

                case "5":
                    {
                        return "Has been Closed";
                    }

                case "6":
                    {
                        return "Correction by PIC";
                    }
                case "7":
                    {
                        return "Waiting for Validate";
                    }
            }
            return element.ToString();
        }

        public static string GetStatePriority(string FLWST)
        {
            StringBuilder element = new StringBuilder();

            switch (FLWST)
            {
                case "1":
                    {
                        return "<span class='label label-info' style='color:white'>LOW</span> ";
                    }

                case "2":
                    {
                        return "<span class='label label-warning' style='color:white'>MED</i></span>";
                    }

                case "3":
                    {
                        return "<span class='label label-danger' style='color:white'>HIGH</span>";
                    }
                default :
                    {
                        return "<span class='label label-default' style='color:white'>NOT SET</span>";
                    }
            }
            return element.ToString();
        }

        public static string GetPriorityComplaint(string PRIOR)
        {
            StringBuilder element = new StringBuilder();

            switch (PRIOR)
            {
                case "1":
                    {
                        return "Low";
                    }

                case "2":
                    {
                        return "Medium";
                    }

                case "3":
                    {
                        return "High";
                    }
            }
            return element.ToString();
        }
        public static void SendEmailDocumentNotification(int ETYPE, string sePERNR, string seCNAME, string rvPERNR, string rvCNAME, string flSTATUS, string COMMENT, string emPERNR)
        {
            //Email.SendEmail(ETYPE, "Perencanaan Produksi", sePERNR, seCNAME, rvPERNR, rvCNAME, flSTATUS, COMMENT, emPERNR);
        }

        //public static void SendEmailNewDocumentFlow(string DOCID, string POSID, string JOBCD, string PERNR, string CNAME)
        //{
        //    SendEmailDocumentNotification(1, PERNR, CNAME, "", "", "", "Please Review", GetPemeriksa(POSID, JOBCD, 0)[3].ToString());
        //    SendEmailDocumentNotification(1, PERNR, CNAME, "", "", "", "Please Review", GetPemeriksa(POSID, JOBCD, 1)[3].ToString());
        //}

        public static bool IsAllowedToPrint(string FLWTY)
        {
            if (FLWTY == "5")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}