<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form</title>

    <style>
        .form-div {
            width: 600px;
            margin: 0 auto;
            padding: 50px;
            margin-top: 100px;
        }

        .form-control.form-control:focus {
            box-shadow: none;

        }
    </style>
</head>

<body>


    <div class="container">
        <div class="wrap shadow form-div">
            <h5 style="margin-bottom:20px">Register Now</h5>
           

                <!-- post method -->

            <form method="POST" action="insert.php">

            <!-- Request method kono method declear kora na thakle -->
            <!-- <form method="" action="insert.php"> -->

        <!-- Name -->
                <div class="form-group">
                    <label for="formGroupNameInput">Name</label>
                    <input type="text" name="Username" class="form-control" id="formGroupNameInput" placeholder="Name">
                </div>
        <!-- Email -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
        <!-- Phone Number -->
                <div class="form-group">
                    <label for="exampleInputPhone">Phone Number</label>
                    <input type="tel" name="PhoneNumber" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp"
                        placeholder="Phone No">
                </div>
        <!-- Password -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>



                <div class="form-check">
                    <input type="checkbox" name="register" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>