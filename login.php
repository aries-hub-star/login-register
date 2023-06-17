<?php

    require_once 'conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['login'])){
        $sql = $conn->prepare("SELECT * from `tbl_user` where `username` = '$username' and `password` = '$password'");
        $sql->execute();

        if($fetch = $sql->fetch()){
            if($username == $fetch['username'] and $password == $fetch['password']){
                echo '
                <script>
                    alert("Login Successful")
                    window.location.replace("../defaultpage.php")
                </script>
                ';
        }
        else{
            echo '
            <script>
                alert("Invalid Username and Password")
                window.location.replace("../login.php")
            </script>
            ';
            }
        }
        else {
            echo '
                <script>
                    alert("Invalid Username and Password")
                    window.location.replace("../login.php")
                </script>
                ';
        }
    }
    ?>