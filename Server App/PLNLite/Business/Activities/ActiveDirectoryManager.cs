using PLNLite.Data.DataAccess;
using PLNLite.Entity.Dictionary;
using PLNLite.Service.Services;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.DirectoryServices.AccountManagement;
using System.Linq;
using System.Web;

namespace PLNLite.Business.Activities
{
    public class ActiveDirectoryManager : AccessActiveDirectory
    {
        public static string GetUserEmailByNIK(string PERNR)
        {
            bool _isFound = false;
            string _email = null;

            foreach (UserPrincipal result in GetPrincipalSearcher().FindAll())
            {
                if (result.Enabled == true && result.EmailAddress != "" && result.EmailAddress != null && result.Description == PERNR && result.DisplayName != "" && result.DisplayName != null)
                {
                    _email = result.EmailAddress;
                    _isFound = true;
                    break;
                }
            }

            if (_isFound)
            {
                return _email;
            }
            else
            {
                return null;
            }
        }
    }
}