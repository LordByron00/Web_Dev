<?php
include "dbconnect.php";
$EmpID="";
$fname="";
$mname="";
$lname="";
$D_id="";
$rankcode="";
$messAlert="";

if(isset($_POST["saverec"])){
  $EmpID = $_POST["EmpID"];
  $fname = $_POST["fname"];
  $mname = $_POST["mname"];
  $lname = $_POST["lname"];
  $D_id = $_POST["D_id"];
  $rankcode = $_POST["rankcode"];

  $sql = "INSERT INTO employee (mpID, fName, mName, lName, deptID, rcode)
  VALUES ('$EmpID', '$fname', '$mname','$lname','$D_id','$rankcode')";

  if ($conn->query($sql) === TRUE) {
    $messAlert= "<script>alert('Record Successfully Created...')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }      
}

$conn->close();

?>
