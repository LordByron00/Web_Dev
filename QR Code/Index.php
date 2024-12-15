<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: darkslategrey;
        }
        .formDiv {
            padding: 125px;
            /* background-color: darkslategrey; */
        }
        form {
            text-align: center;
        }
        form label {
            color: white;
            font-size: 30px;
        }
        form textarea {
            font-size: 25px;
        }
        form input[type="submit"] {
            padding: 25px;
            color: white;
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="formDiv">
        <form action="generateQR.php" method="POST">
            <label for="text">Text: </label><br><br>
            <textarea name="text" id="text" cols="60" rows="10"></textarea><br><br>
            <!-- <input type="text" name="text" id="text"><br> -->
            <input type="submit" value="Generate">
        </form>
    </div>
</body>
</html>