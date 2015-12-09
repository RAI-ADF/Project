using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace PLNLite.Frameworks.Configuration
{
    //these ones are class to swith user otority based on user role
    //dont forget to declare key on web config
    public class MenuControl
    {
        private bool insert;
        public bool InsertMenu 
        { 
            set{ insert = value; }
            get{ return insert; } 
        }
        private bool update;
        public bool UpdateMenu
        {
            set { update = value; }
            get { return update; } 
        }
        private bool delete;
        public bool DeleteMenu
        {
            set { delete = value; }
            get { return delete; }
        }
        private bool view;
        public bool ViewMenu
        {
            set { view = value; }
            get { return view; }
        }
        private bool print;
        public bool PrintMenu
        {
            set { print = value; }
            get { return print; }
        }
        private bool export;
        public bool ExportMenu
        {
            set { export = value; }
            get { return export; }
        }

        public string binary;
        
        public MenuControl() 
        { 
            setMenuConfig(RoleMenu());
            binary = getBinaryRole();
        }

        public void setMenuConfig(List<Boolean> menu)
        {
            insert = menu[0];
            update = menu[1];
            delete = menu[2];
            view = menu[3];
            print = menu[4];
            export = menu[5];
        }

        protected List<Boolean> RoleMenu()
        {
            List<Boolean> lstConfig = new List<Boolean>();
            for (int i = 0; i < getBinaryRole().Length; i++)
            {
                lstConfig.Add(menuConfiguration(i));
            }
            return lstConfig;
        }

        protected Boolean menuConfiguration(int index)
        {
            switch (index)
            {
                case 0 :
                    {
                        if (getBitValidation(0))
                        {
                            //insert enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                        
                    }
                case 1:
                    {
                        if (getBitValidation(1))
                        {
                            //update enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                case 2:
                    {
                        if (getBitValidation(2))
                        {
                            //delete enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                case 3:
                    {
                        if (getBitValidation(3))
                        {
                            //view enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                case 4:
                    {
                        if (getBitValidation(4))
                        {
                            //cetak enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                case 5:
                    {
                        if (getBitValidation(5))
                        {
                            //export enable
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                default: { return false; }
            }
        }

        protected bool getBitValidation(int index)
        {
            if (getBinaryRole()[index] == '1') return true;
            else return false;
        }
        
        protected String getBinaryRole()
        {
            return BinaryConverter.Converter.DecimalToBinary(System.Web.Configuration.WebConfigurationManager.AppSettings["UserRole"].ToString());
        }

    }

    public class BinaryConverter
    {
        protected class BinnaryToDecimal
        {
            public int bin;
            public string stringProg;
            public int dec;

            public BinnaryToDecimal(string number) { bin = int.Parse(number); }

            protected void countDer(int der)
            {
                int hasIn = 1;

                for (int i = 1; i < der; i++)
                {
                    hasIn = hasIn * 2;
                }
                dec += hasIn;
            }

            public void Converter()
            {
                stringProg = bin.ToString();
                int deriv = stringProg.Length;

                foreach (char value in stringProg)
                {
                    if (value == '1')
                    {
                        countDer(deriv);
                    }
                    deriv--;
                }
            }

        }

        protected class DecimalToBinnary
        {
            public int dec;
            public char[] chargeValue = new char[6];
            public string bin;
            public int n;

            public DecimalToBinnary(string number) { this.dec = int.Parse(number); }

            public void Converter()
            {
                int value = dec;
                int index = 0;
                string result = "";

                while (index != 6)
                {
                    if (value > 1)
                    {
                        result = char.Parse((value % 2).ToString()) + result;
                    }
                    else if (value == 1 || value == 0)
                    {
                        result = char.Parse((value).ToString()) + result;
                    }
                    else
                    {
                        result = '0' + result;
                    }

                    if (value <= 0) value--;
                    else value = value / 2;
                    index++;
                }
                bin = result;
            }

        }

        public class Converter
        {
            public static String BinaryToDecimal(string number)
            {
                BinnaryToDecimal num = new BinnaryToDecimal(number);
                num.Converter();
                return num.dec.ToString();
            }

            public static String DecimalToBinary(string number)
            {
                DecimalToBinnary num = new DecimalToBinnary(number);
                num.Converter();
                return num.bin.ToString();
            }
        }
    }
}