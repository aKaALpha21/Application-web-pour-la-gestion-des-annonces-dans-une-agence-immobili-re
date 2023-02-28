<?php
// connect with db 
require 'config.php';

////
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
/// check email and phone if something wrong ////
if(isset($_POST["submit"])){
  $name = $_POST["Name"];
  $lastname = $_POST["LastName"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmation = $_POST["confirmation"];
  $phone =$_POST["phone"];
  $duplicate = mysqli_query($conn, "SELECT * FROM `client` WHERE `email` = '$email'");
  $row= mysqli_fetch_array($duplicate);


  if($email == $row['email'] OR ($phone == "") OR ($password == "")){
    echo
      "<script> alert('email already exist OR number,password is empty '); </script>";  
  }
 
  else{
    if($password == $confirmation){
        $query = "INSERT INTO client (first_name, last_name, email , `password`, phone ) VALUES('$name','$lastname','$email' , '$password' , '$phone')";
        mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }

  }

//   if($phone == ""){
//     error_reporting(E_WARNING);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- css ----->
    <link href="signup.css" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sign Up</title>
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="Name"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="LastName"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Last Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" name="email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="confirmation" id="form3Example4cdg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="tel" maxlength="10" pattern="[0]{1}[5-7]{1}[0-9]{8}" id="form3Example3cg" name="phone"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Number</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="login.php" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                            name="submit">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account?<a
                                            href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>

</html>