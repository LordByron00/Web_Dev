<?php 
    $result = 0;
    if ($result == 1) {
        header("Location: Test.html");
        //exit();
    } else {
        echo "<script>alert('Wrong password'); window.location.href='index.html';</script>";
        exit(); // It's good practice to exit after a header("Location: ...") to ensure no further code is executed.
    }
?>