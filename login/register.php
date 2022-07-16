<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlugUpp Signup Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>

    <div class="main">

        <section class="signup">
           
            <div class="container">
                <div class="signup-content">
				    <form action="../actions/registerproc.php" method="POST" class="login-email">
                        <h2 class="form-title">Create account</h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="fullname" id="fullname" placeholder="fullname" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" required placeholder="Your Email"/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" required id="password" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                            title="Must contain at least one number and one uppercase  and lowercase letter, and at least 6 or more characters">
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="form-group">
                        <input type="text" class="form-input" placeholder="Enter country" name="country" id="country" required>      
                        </div>

                        <div class="form-group">
                        <input type="text" class="form-input" placeholder="Enter city" name="city" id="city" required>                       
                         </div>

                        <div class="form-group">
                        <input type="number" class="form-input" placeholder="Enter contact number" name="contact" id="contact" required>              
                        </div>

                        <div class="form-group">
                            <input type="submit" id="register" name = "register" class="form-submit" value="Sign up">
                        </div>

                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>