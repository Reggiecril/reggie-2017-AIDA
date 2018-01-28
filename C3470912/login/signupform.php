
	<form method="post" action="" class="signup-form" id="signup-form" novalidate="novalidate">
	<h1>Signup</h1>
	<div class="login-fields">
			<div class="control-group">
				<span style="color: red"	><?php 
				if (isset($_SESSION['namemessage'])){
						echo $_SESSION['namemessage'];
						}else{
							echo' *';
						}				
				?></span><input name="firstname" id="firstname" class="group" value="" placeholder="Firstname" class="required" type="text">
			</div>
			<span style="color: red"	><?php 
				if (isset($_SESSION['namemessage'])){
						echo $_SESSION['namemessage'];
						}else{
							echo'* ';
						}			
				?></span>
			<div class="control-group">
				<input name="lastname" id="Lastname" class="group" value="" placeholder="Lastname" class="required" type="text">
				</div>
				<span style="color: red"	><?php 
				if (isset($_SESSION['email2message'])){
						echo $_SESSION['email2message'];
						}	else{
							echo' *';
						}			
				?></span>
			<div class="control-group">
				<input name="email" id="email" class="group" value="" placeholder="E-mail" class="required" type="email">
			</div>

			<div class="control-group">
			<span style="color: red"	><?php 
				if (isset($_SESSION['password2message'])){
						echo $_SESSION['password2message'];
						}	else{
							echo' *';
						}			
				?></span>
				<input name="password" id="password" class="group" placeholder="Password" class="required" type="password">
			</div><span style="color: red"	><?php 
				if (isset($_SESSION['passwordmessage'])){
						echo $_SESSION['passwordmessage'];
						}else{
							echo'* ';
						}				
				?></span>
			<div class="control-group">
				<input name="password2" id="password2" class="group" placeholder="Confirm Password" class="required" type="password">
			</div>

			<div class="control-group" >
				    <select class="group" name="age">
           			<option VALUES="21-30">21-30</option>
            		<option VALUES="0-10">0-10</option>
            		<option VALUES="11-20">11-20</option>
            		<option VALUES="21-30">21-30</option>
            		<option VALUES="31-40">31-40</option>
            		<option VALUES="41-50">41-50</option>
            		<option VALUES="51-60">51-60</option>
            		<option VALUES="61-70">61-70</option>
            		<option VALUES="71-80">71-80</option>
        			</select>
			</div>				
			<div id="item" class="item">
				<input name="checkbox" id="checkbox" checked="checked" class="checkbox" autocomplete="off" type="checkbox">
				<label for="checkbox">I am agree</label>
				<a target="_blank" href="item.html">Whisky Items.</a>
			</div><span style="color: red"	><?php 
				if (isset($_SESSION['empty'])){
						echo $_SESSION['empty'];
						}else{
							echo'* ';
						}				
				?></span>
				<input class="submit"  value="Sign Up Your Account" name="submit" type="submit"/>
	</div>
	</form>
