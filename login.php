<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; 
                position: absolute;
                top: 40%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%)}
    </style>
</head>
<body >
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color:#7A66EE" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php" style="color:#7A66EE">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>