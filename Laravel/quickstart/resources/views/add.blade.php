<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TASK</title>
</head>
<body>
    <h2>ADD TASK</h2>
    <form action="/add" method="POST">
        @csrf
        
        @if ($errors->any()) 
        <h2>Error</h2>
        @endif

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="action" name="action">Action:</label>
        <input type="text" name="action" id="action">
        <input type="submit" value="OK">
    </form> 

</body>
</html>