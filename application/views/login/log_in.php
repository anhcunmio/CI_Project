<!DOCTYPE html>
<html>
<head>
<title>Log In Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login_css/css.css">
<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.js"></script>
<script language="javascript" src="<?php echo base_url();?>/assets/login_js/js.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</script>
</head>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" method="post" class="form-signin" action="<?php echo site_url('Login_controller/validateform');?>">
                                    <fieldset>
                                        <label class="panel-login">
                                           
                                             <?php 
                                             if(isset($invalid)){
                                                 echo $invalid;
                                             }
                                             if(isset($message_display)){
                                                 echo $message_display;
                                             }
                                           
                                            ?>
                                        </label>
                                        	<?php echo form_error('email'); ?>
                                        <input class="form-control" placeholder="Email" name="email" type="text">
                                        <br>
                                        	<?php echo form_error('password'); ?>
                                        <input class="form-control" placeholder="Password" name="password" type="password">
                                        <br>
                                        
                                        <input class="btn btn-lg btn-success btn-block" type="submit"  value="Log in ">
                                        <br>
                                        <a href="<?php echo site_url('Registration_controller/Validate_reg') ?>">Don't have an account? Get free right now  :)   -------> </a>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>