<?php
include("userhead.php");
					
		
			$id = $_SESSION['user_id'];
			$vnumber=$_POST['v_number'];
			$desc=$_POST['description'];
			
			$sql="insert into lostvehicle(user_id,v_number,description) values('".$id."','".$vnumber."','".$desc."')";
			
			
			if (mysqli_query($con, $sql)) {
    header("location:ticket.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

		
						
					
			
		
?>
