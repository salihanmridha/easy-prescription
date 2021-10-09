<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="PMS is a prescription management system to help doctors and diagnostics center to manage their customers in organized and digital way.">
  <meta name="keywords" content="prescription management system, diagnostic center, doctors, prescription, management" />
  <title>PMS - {{ $title ?? 'Prescription management system' }}</title>

  <!-- ========== Css Files ========== -->
  <link href="{{ asset('assets/css/root.css') }}" rel="stylesheet">
  </head>
  <body style="background-color: #F5F5F5;">

    <div class="login-form">
      <form action="">
        <div class="top">
          <h1>Register</h1>
          <h4>Join to our organization now!</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="email" class="form-control" placeholder="Email">
            <i class="fa fa-email"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block">REGISTER NOW</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-sign-in"></i> Login</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>
