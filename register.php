<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SIGN UP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body{ font: 14px sans-serif; }
    .wrapper{ width: 600px; padding: 20px;
      position: absolute;
      top: 40%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%)}
  </style>
</head>
<body>
<div class="wrapper">
  <h2>Sign up</h2>
  <p>Please fill in your information to create an account.</p>
  <form>
    <div class="form-group">
      <label><input type="text" placeholder="Your username"/></label>
    </div>
    <div class="form-group">
      <label><input type="text" placeholder="Your email"/></label>
    </div>
    <div class="form-group">
      <label><input type="password" placeholder="password" /></label>
    </div>
    <div class="form-group">
      <label><input type="password" placeholder="Please confirm your password" /></label>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" style="background-color:#7A66EE" value="Sign up"/>
    </div>
    <p>Already a member? <a href="login.php" style="color:#7A66EE">Go and log in now</a>.</p>
  </form>
</div>
</body>
</html>
