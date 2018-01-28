
			<h1>Login</h1>
			
			<div class="login-panel">

			<form method="post" action="index.php?content=loginSubmit" class="login-form" id="login-form" novalidate="novalidate">
				
			<div class="login-fields">
			<div class="control-group">
				<input name="email" id="email" value="" placeholder="Your Username" class="required" type="email" ><span style="color: red"	><?php 
				if (isset($_SESSION['emailmessage'])){
						echo $_SESSION['emailmessage'];
						}			
				?></span>

			</div>

			<div class="control-group">
				<input name="password" id="password" placeholder="Password" class="required" type="password">
			</div>
			<input class="loginform-submit"  value="Login" name="submit" type="submit"/>
			</br>
			<a href="index.php?content=signup" class="signup"> Sign Up</a>
			</div><span style="color: red"	><?php 
				if (isset($_SESSION['message'])){
						echo $_SESSION['message'];
						}			
				?></span>
			</form>
			</div>
			

