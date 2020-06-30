<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png" type="logo" sizes="16x16">
    <title>Register</title>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="css/styleregister.css">

     <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container register-form pt-5">
            <div class="form">
                
               <form action="login/register.php" method="post">
                    <div class="form-content">
                        <p class="text-center pb-3">Pendeteksi Keramaian</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Your Name" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="" required pattern="\d*" maxlength="15" title="Input a number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" value="" pattern=".{8,}" required title="8 characters minimum">
                                    <span id='message'></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *" name="confirm_password" id="confirm_password" required>
                                    <span id='messageConfirm'></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <a href="login.php" class="btnSubmit text-center">Login</a> 
                        <button type="submit" class="btnSubmit text-center" name="submit" id="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $('#confirm_password').on('change', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#messageConfirm').html('Match').css('color', 'green');
            } else {
                $('#messageConfirm').html('Not Match').css('color', 'red');
                document.getElementById("submit").disabled = true;
            }
        });
    </script>
</body>
</html>


