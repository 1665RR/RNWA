using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace conv
{
    public partial class WebFormKlijentApp : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        public class UsersRecord
    {
      
            public UsersRecord() { }
            public int id { get; set; }}
            public string name { get; set; }
            public string role { get; set; }
    }
    }
}