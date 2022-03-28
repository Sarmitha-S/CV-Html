<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
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
$sql = "SELECT * FROM resume ORDER BY detail DESC LIMIT 1";
$result = $conn->query($sql);
?>
<table class="center", style="background-color:#FFA8B5; width:500px">
<tr>
<th>Sno</th>
  <th>First Name</th>
  <th>Last Nname</th>
  <th>DOB</th>
  <th>Phone Number/th>      
  <th>Email ID</th>      
  <th>Language</th>    
  <th>Programming Language</th>    
  <th>SSLC Name</th>
  <th>SSLC Year</th>    
  <th>SSLC Mark</th>
  <th>HSC Name</th>   
  <th>HSC Year</th>  
  <th>HSC Mark</th>    
  <th>clg_name</th>   
  <th>Department</th>  
  <th>CGPA Sem 1</th>   
  <th>CGPA_Sem 2</th>  
  <th>CGPA Sem 3</th>     
  <th>Achivement</th>  
  <th>Interest</th>      
</tr>
<?php
// Display data on web page
while($row = mysqli_fetch_array($result)) {
    echo "<br>";
      ?>    
      <tr>
      <td><?php echo $row["sno"]; ?></td>
      <td><?php echo $row["first_name"];?></td>
      <td><?php echo $row["Last_name"];?></td>
      <td><?php echo $row["DOB"];?></td>
      <td><?php echo $row["Phn_num"];?></td>
      <td><?php echo $row["email_id"];?></td>
      <td><?php echo $row["language"]; ?></td>
      <td><?php echo $row["prog_lang"]; ?></td>
      <td><?php echo $row["sslc_name"]; ?></td>
      <td><?php echo $row["sslc_year"]; ?></td>
      <td><?php echo $row["sslc_mark"]; ?></td>
      <td><?php echo $row["hsc_name"]; ?></td>
      <td><?php echo $row["hsc_year"]; ?></td>
      <td><?php echo $row["hsc_mark"]; ?></td>
      <td><?php echo $row["clg_name"]; ?></td>
      <td><?php echo $row["dept"]; ?></td>
      <td><?php echo $row["cgpa_sem1"]; ?></td>
      <td><?php echo $row["cgpa_sem2"]; ?></td>
      <td><?php echo $row["cgpa_sem3"]; ?></td>
      <td><?php echo $row["achivement"]; ?></td>
      <td><?php echo $row["interest"]; ?></td>
    </tr>   
    <button class='btn' style = " background:rgb(203, 157, 224)"><a href='cv.php'><- Go Back</a></button>
    
     <?php 
    }
    ?>
</table>
<?php
$conn->close();

?>
</body>
</html>