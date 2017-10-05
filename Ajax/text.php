<?php
	$conn=mysqli_connect("localhost","root","root","test");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Chua ket noi database").mysqli_error($conn);
	}

	$sql="SELECT * FROM member";
	$query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0){
		echo '<table border="1" cellspacing="0" cellpadding="10">';
		    echo '<tr>';
		       echo '<td>';
		           echo 'Username';
		       echo '</td>';
		       echo '<td>';
		            echo 'Email';
		       echo '</td>';
		    echo '<tr>';
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
         
	        echo '<tr>';
	            echo '<td>';
	                echo $row['username'];
	            echo '</td>';
	            echo '<td>';
	                echo $row['email'];
	            echo '</td>';
	        echo '<tr>';
	    }
	    echo '</table>';
	}

?>