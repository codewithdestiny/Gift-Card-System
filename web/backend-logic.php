<?php
@session_start();
class InsertDb{



    public $error = '';

    public $success = '';

    public function sanitize($data){
        $data = htmlspecialchars_decode($data);
        $data = html_entity_decode($data);
        $data = trim($data);
        return $data;
    }
    

    public function registerUser(){


       $firstName =  $_POST['firstname'];
      $lastName = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password2 = $_POST['password2'];

    //   $connectDb= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

    $connectDb = new mysqli("localhost", "root", "", "cryptotrost");

        $sel = $connectDb->query("SELECT email FROM users WHERE email ='$email'");

        // //rememeber to place password, & repeat at the last
        if($password2 !== $password){
            $this->error = "Password do not match";
            
        }
        $row = $sel->fetch_assoc();
        if($row == null){
            $options = [
                'cost' => 12,
            ];

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

            $isAdmin = false;

            $isLoggedIn = false;

            $createUser = $connectDb->query(
                "INSERT INTO users(email, firstname, lastname, password, is_admin, is_logged_in) 
                VALUES('$email', '$firstName', '$lastName', '$hashedPassword', '$isAdmin', '$isLoggedIn')"
            );
            if($createUser){
                
                $this->success= "New account created, redirecting to login page";
                ?>
                <script>
                    setTimeout(() => {
                        window.location.href = "login.php";
                    }, 3000);
                </script>
                <?php
            }else{
                $this->error = "Failed to created new user".$this->conn->error;
            }
        }  
        else{
            
            $this->error = "Email already registered";
        }
        
        

    }

}

class SelectDb extends InsertDb{


    public function login(){

        $email = $this->sanitize($_POST['email']);

        $password = $this->sanitize($_POST['password']);

    //    $connectDb= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

    $connectDb = new mysqli("localhost", "root", "", "cryptotrost");



        $sel = $connectDb->query("SELECT * FROM users WHERE email='$email' ");

        $row = $sel->fetch_assoc();

        
        if($row == null){
            $this->error = "Incorrect email or password";
        }
        else{
            $comparedPassword = password_verify($password, $row['password']);

            if($row['email'] === $email && $comparedPassword){

                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
    
                $this->success = "Login successful...";
    
                ?>
                <script>
                    setTimeout(() => {
                        window.location.href = "index.php?msg=Welcome";
                    }, 3000);
                </script>
    
                <?php
    
            }else{
    
                $this->error = "Incorrect email or password";
    
            }

        }


        
    }
}


class UpdateDb extends SelectDb{

    

    public function submitReferral(){
        $connectDb= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

        $userId = $_SESSION['id'];

        $email = $this->sanitize($_POST['email']);


        if($_SESSION['email'] == $email){
            $this->error = "Invalid Referee, You can't refer yourself";
        }else{
            $updateSql = $connectDb->query("UPDATE users SET referred_by = '$email' WHERE id='$userId' ");
            if($updateSql){
                $this->success = "Referral was successfully recorded, crediting in minutes...";
            }else{
                $this->error = "Failed to get exact".$email. "try again!";
            }
        }

    }



    public function changeUserPassword(){

        $connectDb= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

        $userId = $_SESSION['id'];

        $password = $this->sanitize($_POST['password']);

        $oldPassword = $this->sanitize($_POST['oldpassword']);

        $password2 = $this->sanitize($_POST['password2']);

        if($password2 !== $password){
            $this->error = "Password do not match";
        }else{
            
            $sel = $connectDb->query("SELECT password FROM users WHERE id='$userId'");
    
            $row = $sel->fetch_assoc();
    
            // if($row['id'] == $_SESSION['id']){

                $options = [
                    'cost' => 12,
                ];
    
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $update = $connectDb->query("UPDATE users SET password ='$hashedPassword' WHERE id='$userId'");

                if($update){

                    $this->success = "Password was successfully changed";
                    ?>
                    <script>
                        setTimeout(() => {
                            window.location.href = "index.php";
                        }, 3000);
                    </script>
                    <?php
                }
    
            // }else{
            //     $this->error = "Current Password do not match";
            // }
        }







    }

}
?>