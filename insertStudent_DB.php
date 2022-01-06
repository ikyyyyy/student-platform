<?php
    if( isset($_POST['signup']) && !empty($_FILES['picture'])) {

        include 'connection.php';

        $cne = $_POST['cne'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];
        $fileSize = $_FILES['picture']['size'];
        $fileError = $_FILES['picture']['error'];
        $fileType = $_FILES['picture']['type'];

        $fileExtension = explode('.', $fileName);
        $fileActualExtension = strtolower(end($fileExtension));
        $allowedExtensions = array('jpeg', 'jfif', 'png', 'jpg', 'pdf');
        if(in_array($fileActualExtension, $allowedExtensions)) {
            if($fileError === 0){

                if($fileSize < 100000){

                    $fileNewName = uniqid('', true) . "." . $fileActualExtension;
                    $fileDestination = 'uploads/' . $fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    //insertion to db

                    $sql = "INSERT INTO student VALUES ('', '$cne', '$lastName', '$firstName', '$email', '$pwd', '$fileNewName');";
                    $result = mysqli_query($connection, $sql);

                    if(! $result){
                        die("INSERTION TO DB FAILED: ".mysqli_error());
                    }else{
                        //echo 'insertion to DB done successfuly!';
                        include 'insertion_account.php';
                        header('location: newMember.html');
                    }

                }else{
                    echo 'your file size is too big !';
                }

            }else{
                echo 'there was an error uploading your file !';
            }

        }else{
            echo 'files of this type can\'t be uploaded!';
        }

    }
