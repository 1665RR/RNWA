using System;
using System.Collections.Generic;
using System.Web;
using System.Web.Services;
using MySql.Data.MySqlClient;
using System.Linq;
using MySql.Data;
using System.Data;




namespace conv
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {
        [System.Web.Services.WebMethod]
        public UserRecord[] GetBuildingRecords(string search)
        {

            List<UserRecord> buildingRecords = new List<UserRecord>();

            string connString = "SERVER=localhost" + ";" +
                "DATABASE=cms;" +
                "UID=root;" +
                "PASSWORD=;";

            using (MySqlConnection cnMySQL = new MySqlConnection(connString))
            {

                using (MySqlCommand cmdMySQL = cnMySQL.CreateCommand())
                {

                    cmdMySQL.CommandText = "select * from users where name like '" + search + "%'"; ;
                    cnMySQL.Open();

                    using (MySqlDataReader reader = cmdMySQL.ExecuteReader())
                    {

                        while (reader.Read())
                        {
                            buildingRecords.Add(new UserRecord() { id = reader.GetInt32(reader.GetOrdinal("id")), name = reader.GetString(reader.GetOrdinal("name")), role = reader.GetString(reader.GetOrdinal("role")) });
                        }

                    }
                }
                return UserRecord.ToArray();
            }



        }




    }


}

