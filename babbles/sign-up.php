<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<?php include_once('head.php') ?>

</head>
<body>
	<?php include_once('header.php') ?>
	<div class="container">
		<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
			    <div class="panel-heading">
			        <div class="panel-title">Sign Up</div>
			        <div style="float:right; font-size: 85%; position: relative; top:-10px">
			        	<a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
		        	</div>
			    </div>  

			    <div class="panel-body" >
			        <form id="signupform" class="form-horizontal" role="form">
			            
			            <div id="signupalert" style="display:none" class="alert alert-danger">
			                <p>Error:</p>
			                <span></span>
			            </div>
			                
			            <div class="form-group">
			                <label for="email" class="col-md-3 control-label">Email</label>
			                <div class="col-md-9">
			                    <input type="text" class="form-control" name="email" placeholder="Email Address">
			                </div>
			            </div>
			                
			            <div class="form-group">
			                <label for="firstname" class="col-md-3 control-label">First Name</label>
			                <div class="col-md-9">
			                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
			                </div>
			            </div>
			            <div class="form-group">
			                <label for="lastname" class="col-md-3 control-label">Last Name</label>
			                <div class="col-md-9">
			                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
			                </div>
			            </div>
			            <div class="form-group">
			                <label for="password" class="col-md-3 control-label">Password</label>
			                <div class="col-md-9">
			                    <input type="password" class="form-control" name="passwd" placeholder="Password">
			                </div>
			            </div>
			                
			            <div class="form-group">
			                <label for="icode" class="col-md-3 control-label">Invitation Code</label>
			                <div class="col-md-9">
			                    <input type="text" class="form-control" name="icode" placeholder="">
			                </div>
			            </div>

			            <div class="form-group">
			                <!-- Button -->                                        
			                <div class="col-md-offset-3 col-md-9">
			                    <button id="btn-signup" type="button" class="btn btn-info">
			                    	<i class="icon-hand-right"></i> &nbsp; Sign Up
		                    	</button>
			                    <!-- <span style="margin-left:8px;">or</span>   -->
			                </div>
			            </div>
			            
			           <!--  <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
			                
			                <div class="col-md-offset-3 col-md-9">
			                    <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
			                </div>                                           
			                    
			            </div> -->
			            
			        </form>

			    </div>
			</div>

		</div>

	</div>

	
	
	<?php include_once('footer.php') ?>
	
	
</body>
</html>
