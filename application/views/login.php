
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>OJAS 2017 | BIT - DURG</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="http://materializecss.com/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="http://materializecss.com/templates/starter-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        body
{
	background: #f5f5f5;
}

h5
{
	font-weight: 400;
}

.container
{
	margin-top: 140px;
	margin-bottom: 80px;
	width: 450px;
	height: auto;
}

.tabs .indicator
{
	background-color: #e0f2f1;
	height: 60px;
	opacity: 0.3;
}

.form-container
{
	padding: 40px;
	padding-top: 10px;
}

.confirmation-tabs-btn
{
	position: absolute;
}
        
        .circle {
    position: absolute;
    top: 65px;
    left: 45%;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    font-size: 40px;
    color: #fff;
    line-height: 150px;
    text-align: center;
    background: #20c4cb;
}
/*
        @media only screen and (max-width: 500px) {
    .circle {
    position: absolute;
    top: 65px;
    left: 600px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    font-size: 40px;
    color: #fff;
    line-height: 150px;
    text-align: center;
    background: #20c4cb;
}
*/
    </style>
    </head>
<body>
    <div class="container white z-depth-2">
        <div id="login" class="col s12">
            <form class="col s12" action="" method="post">
                <div class="form-container">
                    <a href="<?php echo base_url(""); ?>"><div class="circle">OJAS</div></a>
                    <div class="form-contents"  style="margin:70px 0px 25px 0px;">
                        <div class="red-text darken-4 messages"><?php if(isset($errorMessage)){ echo $errorMessage; } ?></div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">Email</label>
                                <div class="red-text darken-4 messages"><?php  echo form_error('email'); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                                <div class="red-text darken-4 messages"><?php  echo form_error('password'); ?></div>
                            </div>
                        </div>
                        <br>
                        <center>
                            <button class="btn waves-effect waves-light" style="background-color:#20c4cb;" type="submit" name="action">Login</button>
                            <br>
                            <br>
                            Don't have an account?<a href="<?php echo base_url("register");?>"> <br>Register Now</a>
                        </center>
                     </div>
                </div>
            </form>
        </div>
    </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://materializecss.com/bin/materialize.js"></script>
  <script src="http://materializecss.com/templates/starter-template/js/init.js"></script>

  </body>
</html>