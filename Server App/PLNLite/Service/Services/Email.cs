using PLNLite.Data.DataAccess;
using System;
using System.Configuration;
using System.Net;
using System.Net.Mail;
using System.Text;
using System.Web.Configuration;

namespace PLNLite.Service.Services
{
    public class AccessEmail
    {
        protected static void SendMail(MailMessage mailMsg)
        {
            SmtpClient client = new SmtpClient(WebConfigurationManager.AppSettings["BiofarmaMailServerSMTP"], Convert.ToInt16(WebConfigurationManager.AppSettings["BiofarmaMailServerPort"]));
            client.DeliveryMethod = SmtpDeliveryMethod.Network;
            client.UseDefaultCredentials = true;
            client.EnableSsl = false;
            client.Credentials = new NetworkCredential(WebConfigurationManager.AppSettings["MailModeratorUsername"], WebConfigurationManager.AppSettings["MailModeratorPassword"]);

            try
            {
                client.Send(mailMsg);
            }
            finally
            {
                client.Dispose();
            }
        }
    }
}