<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Admin Login">
    <meta name="description" content="">
    <title>admin_login</title>
    <link rel="stylesheet" href="{{css_path('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{css_path('admin_login.css','admin')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{js_path('jquery.js')}}" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{js_path('nicepage.js')}}" "="" defer=""></script>

  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-4aca">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Admin Login</h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-981a">
      <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <div class="u-form u-form-1">
          <form action="{{url("/admin/login")}}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" redirect="true">

            @csrf
            <div class="u-form-group u-form-group-1">
              <label for="text-f2af" class="u-label">Username</label>
              <input type="text" placeholder="Enter Your Username Here" id="text-f2af" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white u-input-1" required="required" autofocus="autofocus" value="admin">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-728a" class="u-label">Password</label>
              <input type="password" placeholder="Please Enter Your Password" id="text-728a" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white u-input-2" required="required" value="admin">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-78e2" class="u-label">Secret Key</label>
              <input type="password" placeholder="Enter secret key" id="text-78e2" name="secret_key" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white u-input-3" required="required" value="admin@123">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>


