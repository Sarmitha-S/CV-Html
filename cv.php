<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
	<title>Document</title>
</head>
<body>
	
<?php

// Servername
$servername = "localhost";

// Username
$username = "root";

// Empty password
$password = "";

// Database name
$dbname = "resume";

// Create connection by passing these
// connection parameters
$conn = new mysqli($servername,
	$username, $password, $dbname);

// SQL query to find total count
// of college_data table
$sql = "SELECT * FROM trip ORDER BY dt DESC LIMIT 1";
$result = $conn->query($sql);

// Display data on web page
while($row = mysqli_fetch_array($result)) {
?>	
	<div id="header"><button class='btn' style="height:40px;margin-top:0px;margin-left:0px;border-radius: 0px; background: rgb(203, 157, 224);border: 0px;"><a href='welcome.php'><- Go back</a></button></div>
    <div class="left"></div>
	<div class="stuff">
		<br><br>
  <h1>Resume</h1>
  <h2><?php echo $row["name"];?></h2>
  <hr />
  <br>
  <br>
  <p class="head">About:</p>
  <br>
  <p class="head">Date of birth:</p>
  <ul>
	  <?php echo $row["DOB"];?>
	</ul>
  <br>
  <p class="head">PHONE NUMBER:</p>
  <ul>
	  <?php echo $row["Phn_num"];?>
	</ul>
	<br>
	<p class="head">Email:</p>
	<ul>
		<?php echo $row["email_id"];?>
  </ul>
  <br>
  <p class="head">LANGUAGE:</p>
  <ul>
  <?php echo $row["language"];?>
</ul>
<br>
<p class="head"> Programming Language:</p>
  <ul>
  <?php echo $row["prog_lang"];?>
</ul>
<br>
<p class="head">SSLC School Name:</p>
  <ul>
  <?php echo $row["sslc_name"];?>
</ul>
<br>
<p class="head">SSLC Year:</p>
  <ul>
  <?php echo $row["sslc_year"];?>
</ul>
<br>
<p class="head">SSLC Mark:</p>
  <ul>
  <?php echo $row["sslc_mark"];?>
</ul>
<br>
<p class="head">HSC School Name:</p>
  <ul>
  <?php echo $row["hsc_name"];?>
</ul>
<br>
<p class="head">HSC Year:</p>
  <ul>
  <?php echo $row["hsc_year"];?>
</ul>
<br>
<p class="head">HSC Mark:</p>
  <ul>
  <?php echo $row["hsc_mark"];?>
</ul>
<br>
<p class="head">College Name</p>
<ul>
<?php echo $row["clg_name"];?>
</ul>
<br>
<p class="head">Department Name</p>
<ul>
<?php echo $row["dept"];?>
</ul>
<br>
<p class="head">CGPA Sem 1</p>
<ul>
<?php echo $row["cgpa_sem1"];?>
</ul>
<br>
<p class="head">CGPA Sem 2</p>
<ul>
<?php echo $row["cgpa_sem2"];?>
</ul>
<br>
<p class="head">CGPA Sem 3</p>
<ul>
<?php echo $row["cgpa_sem3"];?>
</ul>
<br>
<p class="head">NPTEL Score</p>
<ul>
<?php echo $row["nptel_score"];?>
</ul>
<br>
<p class="head">Achivements</p>
<ul>
<?php echo $row["achivement"];?>
</ul>
<br>
</div>
<div class="right"></div>
<div id="footer">
	<h2 id="name"><?php echo $row["name"];?></h2>
	<button class='btn' style="height:50px;margin-left:0px;border-radius: 0px; background: rgb(203, 157, 224);border: 0px;"><a href='cv2.php'>Table format -></a></button>
</div>
  <?php	
}
?>

<?php
$conn->close();

?>

</body>
</html>