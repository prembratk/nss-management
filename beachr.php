<?php
include("config.php");
session_start();
?>
<DOCTYPE html>
<html>
<head>
  <title>BEACH REGISTREES</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>


    <body>

      <div class="w3-top">
        <div class="w3-row w3-large w3-black">
          <div class="w3-col s3">
            <a href="index.html" class="w3-button w3-block">Home</a>
          </div>
             <div class="w3-col s3">
            <a href="contactus.html" class="w3-button w3-block">Contact us</a>
          </div>
          <div class="w3-col s3">
         <a href="welcomea.php" class="w3-button w3-block"> Your Profile</a>
         </div>


          </div>
        </div>


      <br><br>
    
</body>
</html>
    
<?php
$sql=" SELECT * FROM maths_marks WHERE id BETWEEN 01 and 99" ;
 echo "<h2>CAMPUS CLEANUP REGISTREES:</h2><br><br>";

$result = $db->query($sql);
if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc())
   {

    if ($row['beach']=='Yes')
    {  echo "<table><tr>";
        echo "<th> ID</th>";
        echo "<th> Name</th>";
  echo "</tr>";

        echo "<tr>";
        echo "<td>".$row["id"];
        echo "</td>";
        echo "<td>".$row["name"];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
  }}
?>
