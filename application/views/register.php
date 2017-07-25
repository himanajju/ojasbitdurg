
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

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




/*Overrides*/
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #20c4cb;
    box-shadow: 0 1px 0 0 #20c4cb;
}
    </style>
    </head>
<body>
    <div class="container white z-depth-2">
	<div id="register" class="col s12">
		<form class="col s12" action="" method="post">
			<div class="form-container">
               <a href="<?php echo base_url(""); ?>"><div class="circle">OJAS</div></a>
                    
                <div class="form-contents"  style="margin:70px 0px 0px 0px;">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="admission_no" type="text" name="admission_no" value="<?php echo set_value('admission_no'); ?>" class="validate">
                            <label for="admission_no">Admission no</label>
                            <div class="red-text darken-4 messages"><?php if(isset($errAdmission)){ echo $errAdmission; } ?></div>
                            <div class="red-text darken-4 messages"><?php echo form_error('admission_no'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" value="<?php echo set_value('email'); ?>" class="validate">
                            <label for="email">Email</label>
                            <div class="red-text darken-4 messages"><?php echo form_error('email'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="contact_no" type="tel" name="contact_no" value="<?php echo set_value('contact_no'); ?>" class="validate">
                            <label for="contact_no">Contact No</label>
                            <div class="red-text darken-4 messages"><?php echo form_error('contact_no'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                            <div class="red-text darken-4 messages"><?php echo form_error('password'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="confirm_password" name="confirm_password" type="password" class="validate">
                            <label for="confirm_password">Password Confirmation</label>
                            <div class="red-text darken-4 messages"><?php echo form_error('confirm_password'); ?></div>
                        </div>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light" style="background-color:#20c4cb;" type="submit" name="action">Sign Up</button>
                        <br>
                        <br>
                        Already have an account?<a href="<?php echo base_url("login");?>"> <br>Login Now</a>
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