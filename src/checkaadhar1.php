<?php 
		require("connect.php");
		
		
		if(isset($_POST['aadhar']))
{
 $name=$_POST['aadhar'];

 $checkdata=" SELECT id,aadhar_number FROM vehicle_add  WHERE aadhar_number='$name' ";
  $result = mysqli_query($conn, $checkdata);



// $query=mysql_query($checkdata);

 if(mysqli_num_rows($result)>0)
 {
  echo " <p style='color:red'>Aadhar Number Found  </p><br>";
  $name=$_POST['aadhar'];

  $q1 = "select id from vehicle_add where aadhar_number = '$name' ";
 $result1 = mysqli_query($conn, $q1);
 	
	 if(mysqli_num_rows($result1)>0)
  {
		while($row=mysqli_fetch_assoc($result1))
		{
		
		 			$r1= $row['id']; 
				     
	      }
		 }
	
  
 $query="SELECT rfid_tag_number,vehicle_number FROM allocate_rfid_tag  WHERE user_id = '$r1' ";

 
 $result2 = mysqli_query($conn, $query);
 ?>
<table width="200" height="50" border="1">
				<tr>
					<th>RFID Tag Number</th>
					<th>Vehicle Number</th>
				</tr>
  <?php
  if(mysqli_num_rows($result2)>0)
  {
  
		while($row=mysqli_fetch_assoc($result2))
		{
		?>

		
				<tr>
					<td><?php echo $row['rfid_tag_number']; ?> </td> 
					<td><?php echo $row['vehicle_number']; ?> </td> 
				</tr>
		</table>
<?php
	      }
		 }
		
  
 }
 else
 {
  echo "<p style='color:green'> Go On!</p>";
 }
 
}

?>