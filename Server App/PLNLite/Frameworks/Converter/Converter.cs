using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using PLNLite.Entity.Dictionary;

namespace PLNLite.Frameworks.Converter
{
    public class DateTimeConverter
    {
        //basically this class is same as other date format, but this one is in indonesian format
        //two way converter, make sure you use this engine correctly
        public static string GetDateTimeNow()
        {
            return GetDateFormat(DateTime.Today.ToString()) + " Pukul " + DateTime.Now.ToString("HH:mm:ss");
        }
        public static String GetMonthRomawiFormat(string date)
        {
            return NumToEnum<BulanRomawi>(Convert.ToInt16(GetMonth(date))).ToString();
        }

        public static String GetDay(string date)
        {
            return (Convert.ToDateTime(date).Day.ToString());
        }

        public static String GetMonth(string date)
        {
            return (Convert.ToDateTime(date).Month.ToString());
        }

        public static String GetYear(string date)
        {
            return (Convert.ToDateTime(date).Year.ToString());
        }

        public static String GetMonthFromEnum(string month)
        {
            switch (month.ToLower())
            {
                case "januari":
                    {
                        return "01";
                    }
                case "februari":
                    {
                        return "02";
                    }
                case "maret":
                    {
                        return "03";
                    }
                case "april":
                    {
                        return "04";
                    }
                case "mei":
                    {
                        return "05";
                    }
                case "juni":
                    {
                        return "06";
                    }
                case "juli":
                    {
                        return "07";
                    }
                case "agustus":
                    {
                        return "08";
                    }
                case "september":
                    {
                        return "09";
                    }
                case "oktober":
                    {
                        return "10";
                    }
                case "november":
                    {
                        return "11";
                    }
                case "desember":
                    {
                        return "12";
                    }
                default: { return "01"; }
            }
        }

        private static T1 NumToEnum<T1>(int number)
        {
            return (T1)Enum.ToObject(typeof(T1), number);
        }

        public static String GetDateFormatToNumber(string date)
        {
            return GetMonthFromEnum(date.Split(' ')[1].ToLower()) + "/" + date.Split(' ')[0] + "/" + date.Split(' ')[2];
        }

        public static String GetDateFormat(string date)
        {
            return GetDay(date) + " " + NumToEnum<Bulan>(Convert.ToInt16(GetMonth(date))) + " " + GetYear(date);
        }
    }
    public class CurrentcyConverter
    {
        public static String SetNominalToRupiahFormat(string cvalue)
        {
            string result = null;
            int counter = 0;
            bool flag = false;
            bool negatif = false;

            if (cvalue.Contains('-'))
            {
                cvalue = cvalue.Remove(0, 1);
                negatif = true;
            }

            foreach (char c in cvalue)
            {
                if (flag == false)
                {
                    if (counter < cvalue.Length % 3)
                    {
                        result += c;
                        counter++;
                    }
                    else
                    {
                        if (cvalue.Length % 3 != 0)
                        {
                            result += ".";
                        }
                        flag = true;
                        result += c;
                        counter = 1;
                    }
                }
                else
                {
                    if (counter < 3)
                    {
                        result += c;
                        counter++;
                    }
                    else
                    {

                        result += ".";
                        result += c;
                        counter = 1;
                    }
                }
            }

            if (negatif) return ("Rp -" + result + ",00");
            else return ("Rp " + result + ",00");

        }

    }

    public class NominalConverter
    {
        private static String[] huruf = { "", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas" };
        public static String BilanganToTerbilang(int satuan)
        {
            return angka(satuan) + " Rupiah.";
        }

        private static String angka(int satuan)
        {
            String result = null;

            if (satuan < 12)
                result += huruf[satuan];
            else if (satuan == 0)
                result += "Nol";
            else if (satuan < 20)
                result += angka(satuan - 10) + " Belas";
            else if (satuan < 100)
                result += angka(satuan / 10) + " Puluh " + angka(satuan % 10);
            else if (satuan < 200)
                result += "Seratus " + angka(satuan - 100);
            else if (satuan < 1000)
                result += angka(satuan / 100) + " Ratus " + angka(satuan % 100);
            else if (satuan < 2000)
                result += "Seribu " + angka(satuan - 1000);
            else if (satuan < 1000000)
                result += angka(satuan / 1000) + " Ribu " + angka(satuan % 1000);
            else if (satuan < 1000000000)
                result += angka(satuan / 1000000) + " Juta " + angka(satuan % 1000000);
            else if (satuan >= 1000000000)
                result = "Angka terlalu besar, harus kurang dari 1 milyar!";

            return result;
        }
    }
}