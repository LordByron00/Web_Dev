<?php
include 'SaveEmp.php'
 ?>
<html>

<head></head>
<link rel="stylesheet" href="mystyle.css">
<body style="background-image: url('bg1.jpeg');">
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <nav>
        <div class="logo">Sharks Incorporated</div>
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="AddEmployee.php">Add Employee</a></li>

        </ul>
        </nav>

        <fieldset>
            <br><content for="EmpID">Employee ID</content>
            <input type="text" name="EmpID"><br><br>
            <content for="fname">First Name</content>
            <input type="text" name="fname"><br> 
            <content for="mname">Middle Name</content>
            <input type="text" name="mname"><br> 
            <content for="lname">Last Name</content>
            <input type="text" name="lname"><br>
            <content for="D_id">Department ID</content>
            <input type="text" name="D_id"><br>
            <content for="rankcode">Rank Code</content>
            <input type="text"name="rankcode"><br><br>
            
        
            <input type="submit" name="saverec" id="submit" value="Save Record"><br><br>
            <input type="submit" name="cls" id="submit" value="Clear Form"><br>

        </fieldset>
    </form>		
    																																																																																																		<?php
    echo $messAlert;
    ?>
</body>
</html>