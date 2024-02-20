<?php 
    include "DB.php";
    $dept_ID = "";
    $dept_Name = "";
    $Loc = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["save_Rec"])) {
            if (!empty($_POST['d_ID']) && !empty($_POST['d_Name']) && !empty($_POST['d_Loc'])) {
                $dept_ID = $_POST['d_ID'];
                $dept_Name = $_POST['d_Name'];
                $Loc = $_POST['d_Loc'];

                $IDexist = "SELECT * FROM bayron WHERE dept_ID = $dept_ID";
                $IDquery = $conn->query($IDexist);

                if($IDquery->num_rows > 0) {
                    $messAlert= "<script>alert('ID already taken...')</script>";
                    echo $messAlert;
                } else {
                    $sql = "INSERT INTO bayron (dept_ID, dept_Name, dept_Loc)
                    VALUES ('$dept_ID', '$dept_Name', '$Loc')";
                    if ($conn->query($sql) === TRUE) {
                        $dept_ID = "";
                        $dept_Name = "";
                        $Loc = "";
                        $messAlert= "<script>alert('Record Successfully Created...')</script>";
                        echo $messAlert;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    } 
                }

     
            } else {
                echo "<script>alert('Fill all the blanks!')</script>";
            }
        } elseif(isset($_POST['search_Rec'])) {
            if (empty($_POST['d_ID'])) {
                echo "<script>alert('Input an ID!')</script>";
            } else {
                $dept_ID = $_POST['d_ID'];
                $sql = "SELECT * FROM bayron WHERE dept_ID = $dept_ID";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $dept_ID = $row['dept_ID'];
                        $dept_Name = $row['dept_Name'];
                        $Loc = $row['dept_Loc'];
                    }
                } else {
                    echo "<script>alert('ID is not found!')</script>";
                }
            }
        } elseif(isset($_POST['update_Rec'])) {
            if (!empty($_POST['d_ID']) && !empty($_POST['d_Name']) && !empty($_POST['d_Loc'])) {
                $dept_ID = $_POST['d_ID'];
                $dept_Name = $_POST['d_Name'];
                $Loc = $_POST['d_Loc'];

                $IDexist = "SELECT * FROM bayron WHERE dept_ID = $dept_ID";
                $IDquery = $conn->query($IDexist);
                if($IDquery->num_rows > 0) {
                    $sql = "UPDATE bayron SET dept_Name = '$dept_Name', dept_Loc = '$Loc' WHERE dept_ID = $dept_ID";
                    $result = $conn->query($sql);
                    if ($result) {
                        $dept_ID = "";
                        $dept_Name = "";
                        $Loc = "";
                        $messAlert= "<script>alert('Record Successfully Edited...')</script>";
                        echo $messAlert;
                    }
                } else {
                    $messAlert= "<script>alert('ID not found...')</script>";
                    echo $messAlert;
                }
                
            } else {
                echo "<script>alert('Fill in the blanks!')</script>";
            }
        } elseif(isset($_POST['del_Rec'])) {
            if (!empty($_POST['d_ID']) && !empty($_POST['d_Name']) && !empty($_POST['d_Loc'])) {
                $dept_ID = $_POST['d_ID'];
                $dept_Name = $_POST['d_Name'];
                $Loc = $_POST['d_Loc'];

                $IDexist = "SELECT * FROM bayron WHERE dept_ID = $dept_ID AND dept_Name = '$dept_Name' AND dept_Loc = '$Loc'";
                $IDquery = $conn->query($IDexist); 
                if ($IDquery->num_rows > 0) {
                    $sql = "DELETE FROM bayron WHERE dept_ID = '$dept_ID' AND dept_Name = '$dept_Name' AND dept_Loc = '$Loc'";
                    $result= $conn->query($sql);
                    if ($result) {
                        $dept_ID = "";
                        $dept_Name = "";
                        $Loc = "";
                        $messAlert= "<script>alert('Record Successfully deleted...')</script>";
                        echo $messAlert;
                    }
                } else {
                    $messAlert= "<script>alert('Record not found...')</script>";
                    echo $messAlert;
                }
            } else {
                echo "<script>alert('Fill in the blank!')</script>";
            }
        }
    } 


    $conn->close();

    // function clear() {
        
    // }

?>