<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration Form</title>

    <style>
        .form-div{
           width:700px;
           padding: 20px 50px;
           margin: auto;
           margin-top:50px;

           
        }
        </style>
  </head>
  <body>
      <?php

/**
 * validation message function
 * two parameter $message  $alertType
 */
      function validate($message, $alertType="danger"){
                return "<div class=\"alert alert-{$alertType} alert-dismissible fade show\" role=\"alert\">
                {$message}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>";                
      }

    
      /**
       * Email validation
       * email valid or not
       */
      function validateEmail($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return true;
        } 
        else {
           return false;
        }       
      }

      /**
       *filter Edu mail
       *Institute edu mail
       */
      function filtereduMail($mail){
        $validEmails=['diu.edu.bd','brac.edu.bd','nsu.edu.bd'];
        $mail_arr = explode('@',$mail,2);

        if (in_array($mail_arr[1],$validEmails)) {
          return true;
        }
        else{
          return false;
      }
      }





        if (isset($_POST ["register-btn"])) {

            $name= $_POST ["name"];
            $email= $_POST ["email"];
            $phone= $_POST ["phone"];
            $password= $_POST ["password"];

            
            
            if (empty($name) || empty($email) || empty($phone) || empty($password)) {

              $validationMsg=validate('All field are required','success');
            }
            else if (validateEmail($email)==false) {
              $validationMsg=validate("Email is not valid","warning");
            }
            else if (filtereduMail($email)==false){
              $validationMsg=validate('Email is not edu mail','danger');
            }
            
            else {
              $validationMsg=validate("Registration successfull","primary");
            }
        }
       
       ?>


  <div class="container">
    <div class=" shadow form-div">
        
            <h3>Registration Form</h3>

            <?php
            if(isset($validationMsg)){
              echo $validationMsg;
            }
             ?>

            
            <form method="post" action="">
                <!-- Name -->
            <div class="form-group">
                    <label for="fieldOne" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="fieldOne">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="fieldTwo" class="form-label">Email Adress</label>
                    <input type="text" name="email" class="form-control" id="fieldTwo">
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label for="fieldThree" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" id="fieldThree">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="fieldFour" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="fieldFour">
                </div>

                <div class="form-group">
                    <input type="submit" name="register-btn" class="btn btn-primary" value="Register">
                </div>
               
            </form> 

        
    </div>
  </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

