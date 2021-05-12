<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormKlijentApp.aspx.cs" Inherits="conv.WebFormKlijentApp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
<?php 
			
		$options = [
				'cache_wsdl'     => WSDL_CACHE_NONE,
				'trace'          => 1,
				'stream_context' => stream_context_create(
					[
						'ssl' => [
							'verify_peer'       => false,
							'verify_peer_name'  => false,
							'allow_self_signed' => true
						]
					]
				)
			];
		
			
			if (isset($_POST['search'])) {
				$search = $_POST['search'];
			}else{
				$search='';
			}
				$soapclient =new SoapClient('https://localhost:44345/WebService1.asmx?WSDL',$options);
				$params=array('search'=>$search);
				
				try{
				
				$response =$soapclient->GetBuildingRecords($params)->GetBuildingRecordsResult;
			
				$array = json_decode(json_encode($response), true);
			
			
				if(count($array)!=0){
				
			
					 echo "<table class=table>
			<thead>
             
			<th >
             ID
             </th>
			 <th >
				Name
             </th>
             <th >
            Role
             </th>
			 </thead>";
				if(count($array['UsersRecord']) == count($array['UsersRecord'], COUNT_RECURSIVE)){
					echo "
				 <tbody>
				<tr>
                <td data-label='ID'>
				{$array['UsersRecord']['id']}
                </td>
                <td data-label='Name'>
				{$array['UsersRecord']['name']} 
                </td>
				<td data-label='Role'>
                 {$array['UsersRecord']['levels']} 
                </td>
				</tr>
				 </tbody>";
				}else{
	for($i=0;$i<count($array['UsersRecord']);$i++) {
		 
				echo "
				 <tbody>
				<tr>
                <td data-label='ID'>
				{$array['UsersRecord'][$i]['id']}
                </td>
                <td data-label='Name'>
				{$array['UsersRecord'][$i]['name']} 
                </td>
				<td data-label='Role'>
                 {$array['UsersRecord'][$i]['levels']} 
                </td>
				</tr>
				 </tbody>";
			
			
			

				}
				}
		 echo "</table>";
				
				}
				else{
					echo "Nema traženih podataka!";
				}}catch(Exception $e){
					echo $e->getMessage();
				}	

			
				
		
?>
		
    </form>
</body>
</html>
