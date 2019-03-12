<!DOCTYPE html>
<html>
<head>
	<title>Judul</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	*{
		margin: 0;
	}
</style>
</head>
<body>
<div class="col-md-12" style="background-color: red; height: 50px; margin-bottom: 20px;">
	
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_list_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id_video = $_GET['id_video'];
$sql = "SELECT * FROM youtube_list_db WHERE id_video = $id_video";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>

<div class="col-md-12" style="background-color: #ecf0f1; height: 200px; padding: 5px;">
	<div class="col-md-4" style="height:180px; background-color:grey">
		<img src="<?php echo $row['thumbnail_video'] ?>" style="height: 170px; width: 100%">
	</div>
	<div class="col-md-7" style="height:180px; background-color:white">
			<div class="col-md-12" style="margin:2px;">
				<h4><?php echo $row['title_video']; ?></h4>
				<p><?php echo $row['desc_video'] ?></p>
			</div>

	</div>
</div>

<?php
 }
} else {
    echo "0 results";
}

$conn->close();
?> 


</body>
</html>
