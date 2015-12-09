using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using PLNLite.Data.DataAccess;
using System.Configuration;
using System.DirectoryServices.AccountManagement;
using PLNLite.Entity;
using System.Web;

namespace PLNLite.Service.Services
{
    public class AccessActiveDirectory
    {
        protected static PrincipalContext GetPrincipalContext()
        {
            return new PrincipalContext(ContextType.Domain, ConfigurationManager.AppSettings["ActiveDirectoryDomain"], ConfigurationManager.AppSettings["MailModerator"], ConfigurationManager.AppSettings["MailModeratorPassword"]);
        }

        protected static UserPrincipal GetUserPrincipal()
        {
            return new UserPrincipal(GetPrincipalContext());
        }

        protected static PrincipalSearcher GetPrincipalSearcher()
        {
            return new PrincipalSearcher(GetUserPrincipal());
        }
    }
}