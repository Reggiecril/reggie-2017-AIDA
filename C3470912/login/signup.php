        <?php
        
                include "init.php";
                include './login/signupform.php';
                if (isset($_POST['submit'])){
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $password2=$_POST['password2'];
                $age=$_POST['age'];
                
                if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['age'])) {
                   if(!ctype_alpha($firstname) && !ctype_alpha($lastname)){
                        $_SESSION['namemessage'] = "Name must be alphabetic characters only";
                        }else{
                                 if (!filter_var($email,FILTER_VALIDATE_EMAIL)){

                                         $_SESSION['email2message'] = 'Please enter a valid email address';
                                }else{
                                        if(!count($password <= 5)){
                                              $_SESSION['password2message'] = ' Password format must be more than 5';
                                        }else{
                        if ($password == $password2) {
                        $encrypt_password = md5($password);
                        $query="INSERT INTO users (firstname,lastname,email,password,age) VALUES('$firstname','$lastname','$email','$encrypt_password','$age')";
                        mysqli_query($connection, $query);
                        $_SESSION['email'] = $email;
                        header("Location: index.php?content=persondetail");
                        }else{
                        $_SESSION['passwordmessage'] = " passwords do not match";
                   } 
                }  
                  }     
                }
        
                }else{
                        $_SESSION['empty'] = "can not be empty";
                }
               
                }
?>