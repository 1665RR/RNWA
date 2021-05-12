<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormKlijentApp.aspx.cs" Inherits="conv.WebFormKlijentApp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            Konverzija valuta</div>
        <asp:Button ID="ToEur" runat="server" OnClick="ToEur_Click" Text="ToEur" Width="72px" />

        <asp:Button ID="ToBam" runat="server" OnClick="ToBam_Click" Text="To Bam" Width="75px" />
    </form>
</body>
</html>
