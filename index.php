
<?php 
$conn=mysqli_connect("localhost","root","","noti");
if($conn){/*echo "Connected<br>";*/}
else die("could not connect".mysqli_error());
	
	date_default_timezone_set('Asia/Dhaka');
	$dat = date("d-m-y h:i:sa");
	echo "Time is : ".$dat;
	
?>

<!DOCTYPE html>
<html>

<head>
	
		<link rel="stylesheet" type="text/css" href="class1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>


<body>
		<!--class 1 -->
		<form action="" method="POST">
			<input type="text" name="announce"/><br/>

			<input type="radio" name="tsk" value="announcement"/>Announcement

			<input type="submit" name="submit" value="Submit"/>
		</form>

		<?php 
			
			if(isset($_POST['submit'])){
				$ann = $_POST['announce'];
				$tsk = $_POST['tsk'];
				
				echo "Ammounced.";
				
				$get_student="Select * from student";
				$get_id=mysqli_query($conn,$get_student);
				while($r=mysqli_fetch_array($get_id)) {
					$noti_query = "insert into notification (type,ann,date) values ('$tsk','$ann','$dat');";
					mysqli_query($conn,$noti_query) or die ("Error".mysqli_error($conn));
						}
			}
		?>
</body>
</html>