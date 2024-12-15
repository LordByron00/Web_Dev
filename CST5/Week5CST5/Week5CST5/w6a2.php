<?php
$ps_capital=0;
$pl_amount=0;
$ppayterms="";
$p_interest=0;

$loanableA=0;
$p_rate=0;
$capitalErr="";
$payErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['submit'])) {
   
    if (empty($_POST["s_capital"])) {
        $capitalErr = "Amount is required";
      } 
    else {
        $ps_capital = test_input($_POST["s_capital"]);
      }
    if (empty($_POST["payterms"])) {
        $payErr = "Payment term is required";
      } 
    else {
        $ppayterms = test_input($_POST["payterms"]);
      }
    
    $loanableA = $ps_capital * 2;
   
    if ($ppayterms == "ThreeMos") {
      $p_rate = 0.03;
      $p_interest = $loanableA * $p_rate;
    }
   else if ($ppayterms == "SixMos") {
      $p_rate = 0.05;
      $p_interest = $loanableA * $p_rate;
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>