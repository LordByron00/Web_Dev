<?php 
    include "handleSubmit.php";
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
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="deptForm">
                <div class="liCon">
                    <div class="labels">
                        <label for="d_ID">Department ID: </label>
                        <label for="d_No">Department name: </label>
                        <label for="d_Loc">Location: </label>
                    </div>
                    <div class="inputs">
                        <input type="number" name="d_ID" value="<?PHP echo $dept_ID ?>" id="d_ID">
                        <input type="text" name="d_Name" value="<?PHP echo $dept_Name ?>" id="d_No">
                        <input type="text" name="d_Loc" value="<?PHP echo $Loc ?>" id="d_Loc">
                    </div>
                </div>
                <div class="buttons">
                    <div class="SSdiv">
                        <input type="submit" name="save_Rec" value="Save">
                        <input type="submit" name="search_Rec" value="Search">
                        <input type="submit" name="update_Rec" value="Update">
                        <input type="submit" name="del_Rec" value="Delete">
                    </div>
                    <input type="submit" value="Close" class="close">
                </div>
            </form>
        </div>
    </div>
</body>
</html>