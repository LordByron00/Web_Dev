<?php
    foreach ($_SESSION['list'] as $index => $item) {
        $checked = $item['checked'] ? 'checked' : '';
        $name = isset($item['name']) ? $item['name'] : '';
        echo "<li><form method='POST' action='' id='checkboxForm_$index'>
        <input type='checkbox' name='checkbox[$index]' id='$index' 
        onclick='checkBoxSubmitForm(event, $index)' class='myCheckbox' $checked><span>";
        if ($item['checked']) {
            echo "<span style='text-decoration: linethrough;'>$name</span>";
        } else {
            echo "$name";
        }
        echo "</span></form><form method='POST' action=''><button type='submit' name='remove' value='$index' style='border: none; background: none;'>✖</button></form></li>";
    }
?>