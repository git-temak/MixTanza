<?php
    
    //store email entry in a variable
 	$email=$_POST['email'];
 	
    //start a database connection with credentials
 	$conn=new mysqli("localhost","elitefas_acc","Ve[yINGqw1NA","elitefas_emaildb");
 	
 	//insert stored email into database table
 	$cmd="INSERT into registrations value('$email');";

    //if entry is successful, output success message
 	if(mysqli_query($conn, $cmd))
 	{
 		readfile("./thankyou.html");
 		// echo "Successful :) You would be notified as soon as we kick off!";
 	}
 	//error message if failed
 	else
 	{
 		echo "Error :( Please check that your email is typed correctly and try again";
 	}

?>