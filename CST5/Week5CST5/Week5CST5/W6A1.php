<?php
include 'w6a2.php';
?>
<html>
    <head>
<style>
.error {color: #FF0000;}
</style>
</head>
   <body>
    <h1> Loan Sharks Inc. </h1>
      <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
         Share Capital: <input type = "text" name = "s_capital" value="<?php echo "$ps_capital"?>"> <span class="error">*<?php echo $capitalErr;?></span><br><br>
         Payment Terms:
         <input type="radio" value = "ThreeMos" name="payterms">3-Months
         <input type="radio" value = "SixMos" name="payterms">6-Months
         <input type = "submit" name="submit" value="Submit" />
         <span class="error">* <?php echo $payErr;?></span><br> <br>
        <table border="1">
           <?php
             echo"<tr>
                       <td> Loanable Amount: </td>
                       <td> $loanableA </td>
                  </tr>";
          echo"<tr>       
                       <td> Interest:</td>
                       <td>$p_interest</td>
            </tr>";
          ?>
        </table>
      </form>
   </body>
</html>
