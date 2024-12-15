<!DOCTYPE html>
<html>
<body>

    <h1>REVIEWING PHP</h1>

    <?php
    $txt = "W3Schools.com";
    echo "I love $txt!<br>";
    echo pi() . "<br>";
    echo PHP_INT_MAX;
    echo PHP_FLOAT_MAX . "<br>";
    $x = 1.9e411;
    echo is_infinite($x) . "<br>";
    echo is_null(NULL) . "<br>";
    $a = acos(2131231);
    echo is_nan($a);
    echo rand() . "<br>";
    echo rand(0, 100) . "<br>";
    //Constants
    define("Fullname", "Lelouch V. Britannia");
    echo Fullname . "<br>";
    define("School", [
        "University of Mindanao", 
        "University of Philippines Mindanao", 
        "USEP",
    ]);
    echo print_r(School) . "<br>"; 
    echo var_dump(School). "<br>";
    echo "Expoentation: 10 ^ 10 = " . 10 ** 10 . "<br>";    
    $number1 = 6;
    echo ++$number1 . "<br>";
    echo $status = (empty($user)? "Anonymous" : "Logged in");
    $user = "Luciferous";
    echo "<br>";    
    echo $status = (empty($user)? "Anonymous" : $user . " logged in.<br>");
    date_default_timezone_set("Asia/Manila");
    echo date("h:i:s A") . "<br>";
    $time = date("H");
    //Logical operators
    if ($time < 12) {
        echo "Good morning!!<br>";
    } elseif($time >= 12 && $time <= 17) {
        echo "Good afternoon!<br>";
    } elseif($time > 17) {
        echo "Good evening!<br>";
    } else {
        echo "Goodnight!<br>";
    }
    echo "//Switch<br>";
    $color = "red";
    switch ($color) {
        case 'red':
            echo "Your favorite color is red.";
            break;
        case 'blue':
            echo "Your favorite color is blue.";
        default:
            echo "You have no favorite color.";
            break;
    }
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo $value . "<br>";
    }
    function printName($name, $surname) {
        echo "My name is $name $surname";
    }
    printName("Justine", "Bayron");
    function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      
      setHeight(350);
      setHeight(); // will use the default value of 50
    //Pass by reffrence
    function multiply(&$value) {
        $value *= 10;
    }

    $multiplicand = 5;
    multiply($multiplicand);
    echo $multiplicand . "<br>"; #returns 50 instead of 5 because of pass by reference by & in parameter. The changes in argument will affect the original variable
    $array = array("Car", "Mobile", "AI", "Computer", "VRHeadset");
    for ($x=0; $x < count($array); $x++) {
        echo $array[$x] . ". ";
    }
    //Associative array or hashmap in java
    $hashArray = array("name"=>"Lelouch", "surname"=>"Britannia", "status"=>"99th Emperor of Britannia");
    echo $hashArray["name"] . " " . $hashArray["surname"] . " " . $hashArray["status"] . "<br>";
    foreach ($hashArray as $key => $value) {
        echo "Key: " . $key . " value: " . $value . "<br>"; 
    }
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
          
    for ($row = 0; $row < count($cars); $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < count($cars[$row]); $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
    }

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL'];

    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
          echo "POST: Name is empty";
        } else {
          echo "POST: " . $name . "<br>";
        }
    } 

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $getName = $_GET['name'];
        $getSurname = $_GET['surname'];
        if (empty($getName) && empty($getSurname)) {
            echo "Name and Surname is empty!";
        } else {
            echo "GET: " . $getName . " " . $getSurname . "<br>";
        }
    }
    
    
    
    $mkt = mktime(20, 59,59, 12, 31, 2023);
    echo "Created date is: " . date("Y-m-d h:i:sA", $mkt);


    $myFile = fopen("PHP.txt", "w") or die("Unable to open file.");
    $text = "Justine Bayron\n";
    fwrite($myFile, $text);
    $text = "Lelouch Vi Britania\n";
    fwrite($myFile, $text);
    fclose($myFile);

    

    ?>

</body>
</html>