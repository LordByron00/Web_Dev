<?php 
    include "login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>admin login</title>
    <style>
        body {
            background-color: darkcyan;
        }

        .container {
            margin-top: 150px;
            background-color: black;

        }

        input {
            max-width: 300px;
            min-width: 300px;
        }
        .errorDiv {
            color: red;
            padding: 25px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="text" name="username" class="form-control" placeholder="enter user"><br />
                <input type="text" name="password" class="form-control" placeholder="enter password"><br />
                <input type="submit" name="submitbtn" value="Login" class="btn btn-success"></input>
                <div class="errorDiv"><?php echo $error ?></div>
            </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>