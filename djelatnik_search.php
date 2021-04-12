<style>
<?php include 'stil.css'; ?>
</style>

<?php
// get the q parameter from URL
$s = $_REQUEST["s"];
$hint = "";

// lookup all hints from array if $q is different from "" 
if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);
    /*
	foreach($a as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
	
	*/
	

/**********************************************************/
$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "cms") or die("Doslo je do problema prilikom odabira baze...");
$sql="SELECT * FROM company where company_name LIKE '%$s%'";
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Doslo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2); 
if ($n > 0){
	echo "<div class='wrapper'>
	<table width='60%' border='1' class='table'>
			  <tr class='row head'>
			   <th width='5%' class='cell'>ID</th>
			   <th width='25%' class='cell'>Naziv</th>
			   <th width='20%' class='cell'>Adresa</th>
			   <th width='10%' class='cell'>Telefon</th>
			   <th width='15%' class='cell'>email</th>
			   <th width='15%' class='cell'>Web Stranica</th>
			   <th width='20%' class='cell'>Opis djelatnosti</th>
			  </tr>";
	while ($myrow=mysqli_fetch_row($result2)){
			echo "<td  width='5%' class='cell'>" . $myrow[0]."</td>";
			echo "<td  width='25%' class='cell'>" . $myrow[1]. "</td>";
			echo "<td  width='20%' class='cell'>" . $myrow[2]. "</td>";
			echo "<td  width='10%' class='cell'>" . $myrow[3]. "</td>";
			echo "<td  width='15%' class='cell'>" . $myrow[5]. "</td>";
			echo "<td  width='15%' class='cell'>" . $myrow[6]. "</td>";
			echo "<td  width='20%' class='cell'>" . $myrow[7]. "</td>";
			echo "</tr> ";
			
			//echo $myrow[0].",".$myrow[1].",".$myrow[2];
			$hint ="1";

		}
	}
else {
//echo "No patern rows returned<br>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	
}

// Output "no suggestion" if no hint was found or output correct values 
if($hint == ""){
	 echo "no suggestion";
} 

?>