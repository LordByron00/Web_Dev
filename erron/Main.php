<?php 
    include "handleSubmit.php";
    include "handlecheckbox.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Travel List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
</head>
    <div class="box">
    <section>    
    <h1>Travel List</h1>

        <ul id="list">
     
            <?php
                include "list.php";
            ?>
           
        </ul>

        <form method="post" action="" onsubmit="return validateForm()">
            <div class = "inputs">    
                <input type="text" name="new-item" id="new-item" placeholder="Country name">
                <button type="submit" name="submit" class="addBtn">Add</button>
                <?php if (!empty($error_message)): ?>
                    <p class="error-message">
                        <?php echo $error_message; ?>
                    </p>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            var newItem = document.getElementById('new-item').value;
            if (newItem.trim() === '') {
                alert("Please type in your next destination.");
                return false;
            }
            return true;
        }


        function checkBoxSubmitForm(event, index) {
            event.preventDefault();
            let form = document.getElementById(`checkboxForm_${index}`);
            console.log('working');
            form.submit();
        }

    </script>

</body>
</html>