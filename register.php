<?php
    require_once 'conn.php';

    if(isset($_POST['register'])){
        try{
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];

            if($password == $c_password){
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO `tbl_user` (`name`, `username`, `password`)
                VALUES ('$name', '$username', '$password')";
                $conn->exec($sql);
                echo '
                <script>
                    alert("Registration Successful");
                    window.location.replace("../login.php");
                </script>
                ';
            }
            else{
                echo '
            <script>
                alert("Password Mismatch");
                window.location.replace("../register.php");
            </script>
            ';
            }

        } catch(PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
    };
?>


