<?php
    if(isset($_POST['login'])) {
        include 'connection.php';

        $userId = $_POST['id'];
        $pwd = $_POST['password'];

        $sql = "SELECT * FROM account WHERE id_user = '$userId' AND passWd = '$pwd'; ";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            $row = mysqli_fetch_assoc($result);
            //echo $row['allow'];

            if($row['allow']){
                //echo 'allowed';
                $sql = "SELECT * FROM student WHERE cne = '$userId';";
                $result = mysqli_query($connection, $sql);
                if(!$result){
                    die("QUERY ERROR".mysqli_error());
                }

                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    $row = mysqli_fetch_assoc($result);
                    include 'student-profile.php';
                }
                
            
            }else{
                echo 'denied';
            }
        }else{
            echo 'you\'re not a member yet , add your membership now'; 
        }
    }
