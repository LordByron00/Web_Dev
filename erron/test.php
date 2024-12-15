
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

        <?php
        session_start();
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = array();
        }
        $error_message = '';
        if (isset($_POST['submit']) && !empty($_POST['new-item'])) {
            $item = $_POST['new-item'];
            if (!in_array($item, array_column($_SESSION['list'], 'name'))) {
                $_SESSION['list'][] = array(
                    'name' => $item,
                    'checked' =>
                        false
                );
            } else {
                $error_message = "Oops! It seems that $item is already in your travel list. Please enter a different destination.";
            }
        } elseif (isset($_POST['submit']) && empty($_POST['new-item'])) {
            $error_message = "Please type in your next destination.";
        }
        if (isset($_POST['remove'])) {
            unset($_SESSION['list'][$_POST['remove']]);
        }
        if (empty($_SESSION['list'])) {
            echo '<p id="message">Adventure awaits, add something to your travel list!</p>';
        } else {
            echo '<p>&nbsp;</p>';
        }
        ?>

        <ul id="list">
     
            <?php
                foreach ($_SESSION['list'] as $index => $item) {
                    $checked = $item['checked'] ? 'checked' : '';
                    $name = isset($item['name']) ? $item['name'] : '';
                    echo "<li><form method='post' action=''> <input type='checkbox' name='checkbox[$index]' $checked> <span>";
                    if ($item['checked']) {
                        echo "<span style='text-decoration: linethrough;'>$name</span>";
                    } else {
                        echo "$name";
                    }
                    echo "</span> <button type='submit' name='remove' value='$index' style='border: none; background: none;'>✖</button></form></li>";
                }
                if (isset($_POST['checkbox'])) {
                    foreach ($_POST['checkbox'] as $index => $value) {
                        if (isset($_SESSION['list'][$index])) {
                            $_SESSION['list'][$index]['checked'] =
                                isset($_POST['checkbox'][$index]);
                        }
                    }
                }
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
    </script>
</body>
</html>