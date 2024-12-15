<?php 
    include 'handleSubmit.php';
    // session_start();
    


    // print_r($_SESSION['person']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = 'POST' class="formCheckBox">
            <?php
                foreach ($_SESSION['person'] as $key => $value) {
                    $name = $value['name'];
                    $checker = ($value['checked']) ? 'checked' : '';
                    echo "<input type='checkbox' name='chk[$key]' id='chk_$key' class='chkbx' onclick='submitForm($key)' $checker>";
                    echo "<label for='chk_$key'>$name</label>";
                }
            ?>
            
        </form>
    </div>

    <script>

        function submitForm(key) {
            let form = document.querySelector('.formCheckBox');
            let checkbox = document.getElementById(`chk_${key}`);
            checkbox.addEventListener('change', () => {
                    form.submit();
            });
        }

    </script>
</body>
</html>