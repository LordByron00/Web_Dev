<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Container">
        <div class="dept">
            <h1 class="deptHeader">DEPARTMENT</h1>
        </div>
        <div class="div_Form">
            <form action="" class="deptForm">
                <div class="liCon">
                    <div class="labels">
                        <label for="d_ID">Department ID: </label>
                        <label for="d_No">Department no. </label>
                        <label for="d_Loc">Location: </label>
                    </div>
                    <div class="inputs">
                        <input type="number" name="d_ID" id="d_ID">
                        <input type="number" name="d_No" id="d_No">
                        <input type="text" name="d_Loc" id="d_Loc">
                    </div>
                </div>
                <div class="buttons">
                    <div class="SSdiv">
                        <input type="submit" value="Save">
                        <input type="submit" value="Search">
                    </div>
                    <input type="submit" value="Close">
                </div>
            </form>
        </div>
    </div>
</body>
</html>