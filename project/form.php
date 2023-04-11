<?php
            $student = $_POST["student"];
            $password = $_POST["password"];
            $sex = $_POST["sex"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $phone = $_POST["phone"];

    if(!empty($student) || !empty($password) ||  !empty($sex) || !empty($email) || !empty($subject) || !empty($phone) ){
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "estudiantes";

            $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error()){
              die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $SELECT =  "SELECT phone from usuario where phone = ? limit 1 ";
                $INSERT = "INSERT INTO  usuario (student, password, sex, email, subject, phone)values(?,?,?,?,?,?)";

                $stmt = $conn->prepare($SELECT);
                $stmt ->bind_param("i", $phone);
                $stmt ->execute();
                $stmt ->bind_result($phone);
                $stmt ->store_result();
                $rnum = $stmt->num_rows;
                    if($rnum == 0){
                        $stmt ->close();
                        $stmt = $conn->prepare($INSERT);
                        $stmt ->bind_param( "sssssi", $student, $password, $sex, $email, $subject, $phone);
                        $stmt ->execute();
                        echo "Successful Operation";
                    }
                    else{
                        echo "Number not Validated";
                    }
                    $stmt->close();
                    $conn->close();
                }
    }
     else{
     echo "Every data are correct";
     die();
    }
?>
