using PLNLite.Data.DataAgent;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Web;
using System.Web.Configuration;

namespace PLNLite.Data.DataAccess
{
    public class CatalogManager : DatabaseFactory
    {
        public static string GetDate()
        {
            return DateTime.Now.ToString(WebConfigurationManager.AppSettings["DateTimeFormat"].ToString());
        }

        public static string DelimitByMinute()
        {
            return DateTime.Now.AddMinutes(-1).ToString(WebConfigurationManager.AppSettings["DateTimeFormat"].ToString());
        }

        public static string DelimitByDay()
        {
            return DateTime.Now.AddMinutes(-1).ToString(WebConfigurationManager.AppSettings["DateTimeFormat"].ToString());
        }

        public static string GetMaxDate()
        {
            return DateTime.MaxValue.ToString(WebConfigurationManager.AppSettings["DateTimeFormat"].ToString());
        }

        public static string GetIncludeQuery(List<string> parameter)
        {
            StringBuilder _param = new StringBuilder();

            for (int i = 0; i < parameter.Count; i++)
            {
                if (i == (parameter.Count - 1))
                {
                    _param.Append("'" + parameter[i].ToString() + "'");
                }
                else
                {
                    _param.Append("'" + parameter[i].ToString() + "',");
                }
            }

            return _param.ToString();
        }
    }

    public class CatalogProblem : CatalogManager
    {
        public static void InsertKomplain(string BEGDA, string ENDDA, string NMKOM, string CHGDT, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" INSERT INTO plnlite.KOMPLAIN ");    
            query.Append(" (BEGDA                       ");
            query.Append(" ,ENDDA                       ");
            query.Append(" ,NMKOM                       ");
            query.Append(" ,CHGDT                       ");
            query.Append(" ,USRDT)                      ");
            query.Append(" VALUES                       ");
            query.Append(" ('" + BEGDA + "'             ");
            query.Append(" ,'" + ENDDA + "'             ");
            query.Append(" ,'" + NMKOM + "'             ");
            query.Append(" ,'" + CHGDT + "'             ");
            query.Append(" ,'" + USRDT + "')            ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateKomplain(string BEGDA, string ENDDA, string IDKOM, string NMKOM, string CHGDT, string USRDT)
        {
            DelimitKomplain(IDKOM, USRDT);
            InsertKomplain(BEGDA, ENDDA, NMKOM, CHGDT, USRDT);
        }

        public static void DelimitKomplain(string IDKOM, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" UPDATE plnlite.KOMPLAIN                ");
            query.Append(" SET ENDDA = '" + DelimitByMinute() + "', ");
            query.Append(" CHGDT = '" + GetDate() + "',             ");
            query.Append(" USRDT = '" + USRDT + "'                  ");
            query.Append(" WHERE IDKOM = '" + IDKOM + "' AND        ");
            query.Append(" BEGDA <= GETDATE() AND                   ");
            query.Append(" ENDDA >= GETDATE()                       ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void DeleteKomplain(string IDKOM)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" DELETE FROM plnlite.KOMPLAIN   ");
            query.Append(" WHERE IDKOM = '" + IDKOM + "' AND");
            query.Append(" BEGDA <= GETDATE() AND           ");
            query.Append(" ENDDA >= GETDATE()               ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetKomplainByID(string IDKOM)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,NMKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.KOMPLAIN       ");
            query.Append(" WHERE IDKOM = '" + IDKOM + "'");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");
            
            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] data = null;
                while (reader.Read())
                {
                    data = new object[] { reader[0], reader[1], reader[2], reader[3], reader[4],
                                          reader[5]};
                }
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetKomplainByIDTable(string IDKOM)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,NMKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.KOMPLAIN       ");
            query.Append(" WHERE IDKOM = '" + IDKOM + "");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Komplain";
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static int GetTotalComplaintByProblem(string PRBID)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                            ");
            query.Append(" COUNT(*)                          ");
            query.Append(" FROM helpdesk.COMPLAINT           ");
            query.Append(" WHERE                             ");
            query.Append(" BEGDA <= GETDATE() AND            ");
            query.Append(" ENDDA >= GETDATE() AND            ");
            query.Append(" PRBID = '" + PRBID + "'           ");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                int data = 0;
                while (reader.Read())
                {
                    data = Convert.ToInt32(reader[0]);
                }
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetKomplain()
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,NMKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.KOMPLAIN       ");
            query.Append(" WHERE BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Komplain";
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static string GetMaxIdkom()
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();
            string values = "";
            query.Append(" select max (IDKOM) from plnlite.KOMPLAIN where BEGDA <= GETDATE() AND ENDDA >= GETDATE() ");


            try
            {
                conn.Open();

                SqlCommand cmd = GetCommand(conn, query.ToString());
                SqlDataReader reader = GetDataReader(cmd);
                while (reader.Read())
                {
                    values = reader[0].ToString();
                }
                return values;
            }
            finally
            {
                conn.Close();
            }
        }
    }

    public class CatalogSolution : CatalogManager
    {
        public static void InsertSolution(string BEGDA, string ENDDA, string NMSOL, string IDKOM, string CHGDT, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" INSERT INTO plnlite.SOLUSI ");
            query.Append(" (BEGDA                       ");
            query.Append(" ,ENDDA                       ");
            query.Append(" ,NMSOL                       ");
            query.Append(" ,IDKOM                       ");
            query.Append(" ,CHGDT                       ");
            query.Append(" ,USRDT)                      ");
            query.Append(" VALUES                       ");
            query.Append(" ('" + BEGDA + "'             ");
            query.Append(" ,'" + ENDDA + "'             ");
            query.Append(" ,'" + NMSOL + "'             ");
            query.Append(" ,'" + IDKOM + "'             ");
            query.Append(" ,'" + CHGDT + "'             ");
            query.Append(" ,'" + USRDT + "')            ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateSolution(string BEGDA, string ENDDA, string IDSOL, string NMSOL, string IDKOM, string CHGDT, string USRDT)
        {
            DelimitSolution(IDSOL, USRDT);
            InsertSolution(BEGDA, ENDDA, NMSOL, IDKOM, CHGDT, USRDT);
        }

        public static void DelimitSolution(string IDSOL, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" UPDATE plnlite.SOLUSI                ");
            query.Append(" SET ENDDA = '" + DelimitByMinute() + "', ");
            query.Append(" CHGDT = '" + GetDate() + "',             ");
            query.Append(" USRDT = '" + USRDT + "'                  ");
            query.Append(" WHERE IDSOL = '" + IDSOL + "' AND        ");
            query.Append(" BEGDA <= GETDATE() AND                   ");
            query.Append(" ENDDA >= GETDATE()                       ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void DeleteSolution(string IDSOL)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" DELETE FROM plnlite.SOLUSI   ");
            query.Append(" WHERE IDKOM = '" + IDSOL + "' AND");
            query.Append(" BEGDA <= GETDATE() AND           ");
            query.Append(" ENDDA >= GETDATE()               ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetSolutionByID(string IDSOL)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDSOL                      ");
            query.Append(" ,NMSOL                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.SOLUSI         ");
            query.Append(" WHERE IDSOL = '" + IDSOL + "'");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] data = null;
                while (reader.Read())
                {
                    data = new object[] { reader[0], reader[1], reader[2], reader[3], reader[4],
                                          reader[5], reader[6]};
                }
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetSolutionByIDKomplain(string IDKOM)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDSOL                      ");
            query.Append(" ,NMSOL                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.SOLUSI         ");
            query.Append(" WHERE IDKOM = '" + IDKOM + "'");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] data = null;
                while (reader.Read())
                {
                    data = new object[] { reader[0], reader[1], reader[2], reader[3], reader[4],
                                          reader[5], reader[6]};
                }
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetKomplainByIDTable(string IDSOL)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDSOL                      ");
            query.Append(" ,NMSOL                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.SOLUSI         ");
            query.Append(" WHERE IDSOL = '" + IDSOL + "'");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Komplain";
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetSolution()
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                      ");
            query.Append("  BEGDA                      ");
            query.Append(" ,ENDDA                      ");
            query.Append(" ,IDSOL                      ");
            query.Append(" ,NMSOL                      ");
            query.Append(" ,IDKOM                      ");
            query.Append(" ,CHGDT                      ");
            query.Append(" ,USRDT                      ");
            query.Append(" FROM plnlite.SOLUSI         ");
            query.Append(" WHERE BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");
            
            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Komplain";
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static string GetMaxIdsol()
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();
            string values = "";
            query.Append(" select max (IDSOL) from plnlite.SOLUSI where BEGDA <= GETDATE() AND ENDDA >= GETDATE() ");


            try
            {
                conn.Open();

                SqlCommand cmd = GetCommand(conn, query.ToString());
                SqlDataReader reader = GetDataReader(cmd);
                while (reader.Read())
                {
                    values = reader[0].ToString();
                }
                return values;
            }
            finally
            {
                conn.Close();
            }
        }
    }

    public class CatalogHelpDesk : CatalogManager
    {
        public static DataTable GetAduan()
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                                               ");
            query.Append(" AD.STATS, AD.TIKET, AD.BEGDA, CS.NMUSR,              ");
            query.Append(" CS.NOREK, KM.NMKOM, AD.ISIAD, AD.IDSOL,               ");
            query.Append(" AD.CHGDT, AD.USRDT                                   ");
            query.Append(" FROM                                                 ");
            query.Append(" plnlite.ADUAN AD,                                    ");
            query.Append(" plnlite.KOMPLAIN KM,                                 ");
            query.Append(" plnlite.CUSTOMER CS                                  ");
            query.Append(" WHERE                                                ");
            query.Append(" AD.IDKOM = KM.IDKOM AND AD.IDUSR = CS.IDUSR          ");
            query.Append(" AND AD.BEGDA <= GETDATE() AND AD.ENDDA >= GETDATE()  ");
            query.Append(" AND KM.BEGDA <= GETDATE() AND KM.ENDDA >= GETDATE()  ");
            query.Append(" AND CS.BEGDA <= GETDATE() AND CS.ENDDA >= GETDATE()  ");
            query.Append(" GROUP BY                                             ");
            query.Append(" AD.STATS, AD.TIKET, AD.BEGDA, CS.NMUSR, CS.NOREK,    ");
            query.Append(" KM.NMKOM, AD.ISIAD, AD.CHGDT, AD.USRDT, AD.IDSOL     ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ADUAN";
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetAduanByTiket(string TIKET)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                                               ");
            query.Append(" AD.STATS, AD.TIKET, AD.BEGDA, CS.NMUSR,              ");
            query.Append(" CS.NOREK, KM.NMKOM, AD.ISIAD, AD.IDSOL,               ");
            query.Append(" AD.CHGDT, AD.USRDT                                   ");
            query.Append(" FROM                                                 ");
            query.Append(" plnlite.ADUAN AD,                                    ");
            query.Append(" plnlite.KOMPLAIN KM,                                 ");
            query.Append(" plnlite.CUSTOMER CS                                  ");
            query.Append(" WHERE                                                ");
            query.Append(" AD.IDKOM = KM.IDKOM AND AD.IDUSR = CS.IDUSR          ");
            query.Append(" AND AD.BEGDA <= GETDATE() AND AD.ENDDA >= GETDATE()  ");
            query.Append(" AND KM.BEGDA <= GETDATE() AND KM.ENDDA >= GETDATE()  ");
            query.Append(" AND CS.BEGDA <= GETDATE() AND CS.ENDDA >= GETDATE()  ");
            query.Append(" AND AD.TIKET = '" + TIKET + "'                       ");
            query.Append(" GROUP BY                                             ");
            query.Append(" AD.STATS, AD.TIKET, AD.BEGDA, CS.NMUSR, CS.NOREK,    ");
            query.Append(" KM.NMKOM, AD.ISIAD, AD.CHGDT, AD.USRDT, AD.IDSOL     ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] data = null;
                while (reader.Read())
                {
                    data = new object[] { reader[0], reader[1], reader[2], reader[3], reader[4],
                                          reader[5], reader[6], reader[7], reader[8], reader[9]};
                }
                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static void InsertAduan(string BEGDA, string ENDDA, string TIKET, string IDUSR, string ISIAD, string IDKOM, string IDSOL, string STATS, string CHGDT, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" INSERT INTO plnlite.ADUAN ");
            query.Append(" (BEGDA                       ");
            query.Append(" ,ENDDA                       ");
            query.Append(" ,TIKET                       ");
            query.Append(" ,IDUSR                       ");
            query.Append(" ,ISIAD                       ");
            query.Append(" ,IDKOM                       ");
            query.Append(" ,IDSOL                       ");
            query.Append(" ,STATS                       ");
            query.Append(" ,CHGDT                       ");
            query.Append(" ,USRDT)                      ");
            query.Append(" VALUES                       ");
            query.Append(" ('" + BEGDA + "'             ");
            query.Append(" ,'" + ENDDA + "'             ");
            query.Append(" ,'" + TIKET + "'             ");
            query.Append(" ,'" + TIKET + "'             ");
            query.Append(" ,'" + ISIAD + "'             ");
            query.Append(" ,'" + IDKOM + "'             ");
            query.Append(" ,'" + IDSOL + "'             ");
            query.Append(" ,'" + STATS + "'             ");
            query.Append(" ,'" + CHGDT + "'             ");
            query.Append(" ,'" + USRDT + "')            ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void DelimitAduan(string TIKET, string USRDT)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" UPDATE plnlite.ADUAN                ");
            query.Append(" SET ENDDA = '" + DelimitByMinute() + "', ");
            query.Append(" CHGDT = '" + GetDate() + "',             ");
            query.Append(" USRDT = '" + USRDT + "'                  ");
            query.Append(" WHERE TIKET = '" + TIKET + "' AND        ");
            query.Append(" BEGDA <= GETDATE() AND                   ");
            query.Append(" ENDDA >= GETDATE()                       ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateAduan(string BEGDA, string ENDDA, string TIKET, string IDUSR, string ISIAD, string IDKOM, string IDSOL, string STATS, string CHGDT, string USRDT)
        {
            DelimitAduan(TIKET, USRDT);
            InsertAduan(BEGDA, ENDDA, TIKET, IDUSR, ISIAD, IDKOM,IDSOL,STATS,CHGDT,USRDT);
        }

        public static void DeleteAduan(string TIKET)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" DELETE FROM plnlite.ADUAN   ");
            query.Append(" WHERE TIKET = '" + TIKET + "' AND");
            query.Append(" BEGDA <= GETDATE() AND           ");
            query.Append(" ENDDA >= GETDATE()               ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

    }

    public class UserCatalog : CatalogManager
    {
        public static void InsertEmail(string PERNR, string EMAIL, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"INSERT INTO bioumum.USER_EMAIL (BEGDA, ENDDA, PERNR, EMAIL, CHGDT, USRDT)
                            VALUES ('" + GetDate() + "','" + GetMaxDate() + "','" + PERNR + "','" + EMAIL + "','" + GetDate() + "','" + USRDT + "');";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateEmail(string PERNR, string EMAIL, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"UPDATE bioumum.USER_EMAIL SET ENDDA = '" + DelimitByMinute() + "', CHGDT = '" + GetDate() + "', USRDT = '" + USRDT + "' WHEREPERNR = '" + PERNR + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE());";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
                InsertEmail(PERNR, EMAIL, USRDT);
            }
        }

        public static void EmptyLocalUserEmail()
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"TRUNCATE TABLE bioumum.USER_EMAIL";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static int ValidateLocalUserEmail(string EMAIL)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                  ");
            query.Append(" COUNT(*)                ");
            query.Append(" FROM bioumum.USER_EMAIL ");
            query.Append(" WHERE                   ");
            query.Append(" EMAIL = '" + EMAIL + "' ");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                int result = 0;
                SqlDataReader reader = GetDataReader(cmd);

                while (reader.Read())
                {
                    result = Convert.ToInt16(reader[0]);
                }

                return result;
            }
            finally
            {
                conn.Close();
            }
        }

        public static string GetUserEmailByPERNR(string PERNR)
        {
            SqlConnection conn = GetConnection();
            StringBuilder query = new StringBuilder();

            query.Append(" SELECT                  ");
            query.Append(" EMAIL                   ");
            query.Append(" FROM bioumum.USER_EMAIL ");
            query.Append(" WHERE                   ");
            query.Append(" PERNR = '" + PERNR + "' ");
            query.Append(" AND BEGDA <= GETDATE()  ");
            query.Append(" AND ENDDA >= GETDATE()  ");

            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                string result = null;
                SqlDataReader reader = GetDataReader(cmd);

                while (reader.Read())
                {
                    result = reader[0].ToString();
                }

                return result;
            }
            finally
            {
                conn.Close();
            }
        }

        public static void InsertPassword(string PERNR, string PASSW, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"INSERT INTO bioumum.USER_PASSWORD (BEGDA, ENDDA, PERNR, PASSW, CHGDT, USRDT)
                            VALUES ('" + GetDate() + "','" + GetMaxDate() + "','" + PERNR + "','" + PASSW + "','" + GetDate() + "','" + USRDT + "');";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdatePassword(string PERNR, string PASSW, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"UPDATE bioumum.USER_PASSWORD SET ENDDA = '" + DelimitByMinute() + "', CHGDT = '" + GetDate() + "', USRDT = '" + USRDT + "' WHEREPERNR = '" + PERNR + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE());";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
                InsertPassword(PERNR, PASSW, USRDT);
            }
        }

        public static int GetPasswordActivePeriod(string PERNR)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"SELECT BEGDA, Convert(int,(GETDATE() - BEGDA))
                            FROM bioumum.USER_PASSWORD WHERE PERNR = '" + PERNR + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE();";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                reader.Read();
                return Convert.ToInt16(reader[1]);
            }
            finally
            {
                conn.Close();
            }
        }

        public static void InsertUserRole(string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"INSERT INTO bioumum.USER_OTORITY (BEGDA, ENDDA, PERNR, ROLID, CHGDT, USRDT)
                            VALUES ('" + GetDate() + "','" + GetMaxDate() + "','" + PERNR + "','" + ROLID + "','" + GetDate() + "','" + USRDT + "');";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateUserRole(string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"UPDATE bioumum.USER_OTORITY SET ENDDA = '" + DelimitByMinute() + "', CHGDT = '" + GetDate() + "', USRDT = '" + USRDT + "' WHERE PERNR = '" + PERNR + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE());";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
                InsertPassword(PERNR, ROLID, USRDT);
            }
        }

        public static DataTable GetUserRole()
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"SELECT DISTINCT ROLID, ROLNM
                            FROM bioumum.USER_ROLE ORDER BY ROLNM";
            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Role";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetUserApplicationAccount()
        {
            SqlConnection conn = GetConnection();

            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT UD.PERNR, UD.CNAME, US.COCNM, UE.EMAIL, UR.ROLNM             ");
            sqlCmd.Append(" FROM                                                                ");
            sqlCmd.Append(" bioumum.USER_ROLE UR, bioumum.USER_OTORITY UO,                      ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW UD, bioumum.USER_EMAIL UE                     ");
            sqlCmd.Append(" WHERE                                                               ");
            sqlCmd.Append(" UO.PERNR = UD.PERNR AND UD.PERNR = UE.PERNR AND UR.ROLID = UO.ROLID ");
            sqlCmd.Append(" AND UO.BEGDA <= GETDATE() AND UO.ENDDA >= GETDATE()                 ");
            sqlCmd.Append(" AND UR.BEGDA <= GETDATE() AND UR.ENDDA >= GETDATE()                 ");
            sqlCmd.Append(" AND UE.BEGDA <= GETDATE() AND UE.ENDDA >= GETDATE()                 ");
            sqlCmd.Append(" GROUP BY UD.PERNR, UD.CNAME, US.COCNM, UE.EMAIL, UR.ROLNM           ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "User";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static int ValidateNIKEmployee(string NIK)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"SELECT DISTINCT COUNT(*)
                            FROM bioumum.USER_DATA_NEW
                            WHERE PERNR = '" + NIK + "'";
            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                reader.Read();
                return Convert.ToInt16(reader[0]);
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetUserApplicationData(string PERNR)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT US.PERNR, US.CNAME, US.PRPOS, US.PRORG, US.GRPNM, US.SGRNM, US.PSGRP, UE.EMAIL, US.COCNM ");
            sqlCmd.Append(" FROM bioumum.USER_DATA_NEW US, bioumum.USER_EMAIL UE                                            ");
            sqlCmd.Append(" WHERE                                                                                           ");
            sqlCmd.Append(" AND UE.BEGDA <= GETDATE() AND UE.ENDDA >= GETDATE()                                             ");
            sqlCmd.Append(" AND US.BEGDA <= GETDATE() AND US.ENDDA >= GETDATE()                                             ");
            sqlCmd.Append(" AND US.PERNR = UE.PERNR AND US.PERNR = '" + PERNR + "'                                          ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] user = null;
                while (reader.Read())
                {
                    object[] values = { reader[0].ToString(), reader[1].ToString(), reader[2].ToString(), reader[3].ToString(), reader[4].ToString(), reader[5].ToString(), reader[6].ToString(), reader[7].ToString(), reader[8].ToString() };
                    user = values;
                }
                return user;
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetUserData(string NIK)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();
            
            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS, US.PRORG,             ");
            sqlCmd.Append(" US.GRPNM, US.SGRNM, US.PSGRP, EM.EMAIL, US.ORGCD    ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" bioumum.USER_EMAIL EM                               ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" EM.PERNR = US.PERNR AND                             ");
            sqlCmd.Append(" US.PERNR = '" + NIK + "'                            ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] user = null;
                while (reader.Read())
                {
                    object[] values = { reader[0].ToString(), reader[1].ToString(), reader[2].ToString(), reader[3].ToString(), reader[4].ToString(), reader[5].ToString(), reader[6].ToString(), reader[7].ToString(), reader[8].ToString() };
                    user = values;
                }
                return user;
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetActiveUser(string PERNR, string PASSW)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                                         ");
            sqlCmd.Append(" US.PERNR, PS.PASSW, EM.EMAIL, US.CNAME, US.COCTR, PS.PLOCK,    ");
            sqlCmd.Append(" DATEDIFF(DAY,PS.BEGDA,GETDATE()) AS PSPRD, US.PSTYP, US.POSID, ");
            sqlCmd.Append(" US.COCNM, US.PRORG                                             ");    
            sqlCmd.Append(" FROM                                                           ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                                      ");
            sqlCmd.Append(" bioumum.USER_EMAIL EM,                                         ");
            sqlCmd.Append(" bioumum.USER_PASSWORD PS                                       ");
            sqlCmd.Append(" WHERE                                                          ");
            sqlCmd.Append(" US.PERNR = EM.PERNR AND US.PERNR = PS.PERNR                    ");        
            sqlCmd.Append(" AND EM.BEGDA <= GETDATE() AND EM.ENDDA >= GETDATE()            ");              
            sqlCmd.Append(" AND PS.BEGDA <= GETDATE() AND PS.ENDDA >= GETDATE()            ");              
            sqlCmd.Append(" AND US.PERNR = '" + PERNR + "' AND PS.PASSW = '" + PASSW + "'  ");              

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] user = null;
                while (reader.Read())
                {
                    object[] values = { reader[0].ToString(), reader[1].ToString(), reader[2].ToString(), reader[3].ToString(), reader[4].ToString(), reader[5].ToString(), reader[6].ToString(), reader[7].ToString(), reader[8].ToString(), reader[9].ToString(), reader[10].ToString() };
                    user = values;
                }

                return user;
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetActiveUserFromCTI(string EMAIL)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                                                      ");
            sqlCmd.Append(" US.PERNR, PS.PASSW, EM.EMAIL, US.CNAME, US.COCTR, US.COCNM                  ");
            sqlCmd.Append(" FROM                                                                        ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US, bioumum.USER_EMAIL EM, bioumum.USER_PASSWORD PS   ");
            sqlCmd.Append(" WHERE                                                                       ");
            sqlCmd.Append(" US.PERNR = EM.PERNR AND US.PERNR = PS.PERNR AND EM.BEGDA <= GETDATE()       ");
            sqlCmd.Append(" AND EM.ENDDA >= GETDATE() AND EM.EMAIL = '" + EMAIL + "'                    ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] user = null;
                while (reader.Read())
                {
                    object[] values = { reader[0].ToString(), reader[1].ToString(), reader[2].ToString(), reader[3].ToString(), reader[4].ToString() };
                    user = values;
                }

                return user;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetAllActiveUser()
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                                                  ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS, US.PRORG, US.GRPNM, US.SGRNM, US.PSGRP    ");
            sqlCmd.Append(" FROM                                                                    ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US                                                ");
            sqlCmd.Append(" ORDER BY US.PERNR;                                                      ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        //USER OTORITY BCC
        public static void InsertUserOtority(string OBJID, string CLSID, string PRBID, string SUBID, string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
			StringBuilder query = new StringBuilder();
			
            query.Append(" INSERT INTO biocustomercare.USER_OTORITY                                         ");
            query.Append(" (BEGDA, ENDDA, OBJID, CLSID, PRBID, SUBID, PERNR, ROLID, CHGDT, USRDT)           ");
            query.Append(" VALUES                                                                           ");
            query.Append(" ('" + GetDate() + "', '" + GetMaxDate() + "', '" + OBJID + "', '" + CLSID + "'   ");
            query.Append(" ,'" + PRBID + "', '" + SUBID + "'                                                ");
            query.Append(" ,'" + PERNR + "', '" + ROLID +  "', '" + GetDate() +  "'                         ");
            query.Append(" ,'" + USRDT + "')                                                                ");
			
            SqlCommand cmd = GetCommand(conn, query.ToString());

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void UpdateUserOtority(string RECID, string OBJID, string CLSID, string PRBID, string SUBID, string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"UPDATE biocustomercare.USER_OTORITY SET ENDDA = '" + DelimitByMinute() + "', CHGDT = '" + GetDate() + "', USRDT = '" + USRDT + "' WHERE PERNR = '" + PERNR + "'  AND OBJID = '" + RECID + "' AND ROLID = '" + ROLID + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE()";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
                InsertUserOtority(OBJID, CLSID, PRBID, SUBID,PERNR, ROLID, USRDT);
            }
        }

        public static void DelimitUserOtority(string OBJID, string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"UPDATE biocustomercare.USER_OTORITY SET ENDDA = '" + DelimitByMinute() + "', CHGDT = '" + GetDate() + "', USRDT = '" + USRDT + "' WHERE PERNR = '" + PERNR + "' AND OBJID = '" + OBJID + "' AND ROLID = '" + ROLID + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE());";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static void DeleteUserOtority(string OBJID, string PERNR, string ROLID, string USRDT)
        {
            SqlConnection conn = GetConnection();
            string sqlCmd = @"DELETE biocustomercare.USER_OTORITY WHERE PERNR = '" + PERNR + "' AND OBJID = '" + OBJID + "' AND ROLID = '" + ROLID + "' AND BEGDA <= GETDATE() AND ENDDA >= GETDATE());";

            SqlCommand cmd = GetCommand(conn, sqlCmd);

            try
            {
                conn.Open();
                cmd.ExecuteNonQuery();
            }
            finally
            {
                conn.Close();
            }
        }

        public static object[] GetUserOtority(string PERNR)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                        ");
            sqlCmd.Append(" RECID, OBJID, CLSID, PRBID,                   ");
            sqlCmd.Append(" SUBID, PERNR, ROLID                           ");
            sqlCmd.Append(" FROM biocustomercare.USER_OTORITY             ");
            sqlCmd.Append(" WHERE PERNR = '" + PERNR + "'                 ");
            sqlCmd.Append(" AND BEGDA <= GETDATE() AND ENDDA >= GETDATE() ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                SqlDataReader reader = GetDataReader(cmd);
                object[] user = null;
                while (reader.Read())
                {
                    object[] values = { reader[0].ToString(), reader[1].ToString(), reader[2].ToString(), reader[3].ToString(), reader[4].ToString(), reader[5].ToString(), reader[6].ToString() };
                    user = values;
                }

                return user;
            }
            finally
            {
                conn.Close();
            }
        }
        
        public static DataTable GetAllDataUserOtority()
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, US.ORGCD                                  ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" bioumum.USER_EMAIL EM,                              ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");                       
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" ORDER BY ROLCL DESC                                 ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetDataUserOtorityByNIK(string NIK)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, EM.EMAIL, US.ORGCD                        ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" bioumum.USER_EMAIL EM,                              ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND US.PERNR = '" + NIK + "'                        ");
            sqlCmd.Append(" ORDER BY ROLCL DESC                                 ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetDataUserOtorityByClassification(string CLSID)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, US.ORGCD                                  ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND OC.CLSID = '" + CLSID + "'                      ");
            sqlCmd.Append(" ORDER BY ROLCL DESC                                 ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetDataUserOtorityByRole(string ROLID)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, US.ORGCD                                  ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND OC.ROLID = '" + ROLID + "'                      ");
            sqlCmd.Append(" ORDER BY ROLCL DESC                                 ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetDataUserOtorityByClassificationProblemAndRole(string CLSID, string PRBID, string ROLID)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, US.ORGCD                                  ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND OC.CLSID = '" + CLSID + "'                      ");
            sqlCmd.Append(" AND OC.PRBID = '" + PRBID + "'                      ");
            sqlCmd.Append(" AND OC.ROLID = '" + ROLID + "'                      ");
            sqlCmd.Append(" ORDER BY ROLCL DESC                                 ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }

        public static DataTable GetDataUserOtorityByClassificationProblemSubAndRole(string CLSID, string PRBID, List<string> SUBID, string ROLID)
        {
            string _subid = GetIncludeQuery(SUBID);

            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                              ");
            sqlCmd.Append(" RM.ROLPR, RM.ROLCL,                                 ");
            sqlCmd.Append(" US.PERNR, US.CNAME, US.PRPOS,                       ");
            sqlCmd.Append(" US.PRORG, US.ORGCD                                  ");
            sqlCmd.Append(" FROM                                                ");
            sqlCmd.Append(" bioumum.USER_DATA_NEW US,                           ");
            sqlCmd.Append(" biocustomercare.USER_OTORITY OC,                    ");
            sqlCmd.Append(" biocustomercare.ROLE_RELATION RM                    ");
            sqlCmd.Append(" WHERE                                               ");
            sqlCmd.Append(" RM.ROLCL = OC.ROLID                                 ");
            sqlCmd.Append(" AND OC.PERNR = US. PERNR                            ");
            sqlCmd.Append(" AND OC.BEGDA <= GETDATE() AND OC.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND RM.BEGDA <= GETDATE() AND RM.ENDDA >= GETDATE() ");
            sqlCmd.Append(" AND OC.CLSID = '" + CLSID + "'                      ");
            sqlCmd.Append(" AND OC.PRBID = '" + PRBID + "'                      ");
            sqlCmd.Append(" AND OC.ROLID = '" + ROLID + "'                      ");
            sqlCmd.Append(" AND OC.SUBID IN (" + SUBID + ")                     ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "ActiveUser";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }
    }

    public class ApplicationCatalog : CatalogManager
    {
        public static DataTable GetMenuApplicationByUserID(string MNPID, string PERNR)
        {
            SqlConnection conn = GetConnection();
            StringBuilder sqlCmd = new StringBuilder();

            sqlCmd.Append(" SELECT                                                              ");
            sqlCmd.Append(" UM.MENID, UM.MENAM, UM.MNURL, UM.MNICO                              ");
            sqlCmd.Append(" FROM                                                                ");
            sqlCmd.Append(" bioumum.USER_OTORITY UO, bioumum.USER_ROLE UR, bioumum.USER_MENU UM ");
            sqlCmd.Append(" WHERE                                                               ");
            sqlCmd.Append(" UO.ROLID = UR.ROLID AND UR.MENID = UM.MENID                         ");
            sqlCmd.Append(" AND UM.MNPID = '" + MNPID + "' AND UO.PERNR = '" + PERNR + "'       ");
            sqlCmd.Append(" ORDER BY UM.MNSEQ;                                                  ");

            SqlCommand cmd = GetCommand(conn, sqlCmd.ToString());

            try
            {
                conn.Open();
                DataTable data = new DataTable();
                SqlDataAdapter adapter = GetAdapter(cmd);
                adapter.Fill(data);
                data.TableName = "Menu";

                return data;
            }
            finally
            {
                conn.Close();
            }
        }
    }

}