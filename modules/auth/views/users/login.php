<?php if (isset($message)): ?>
    <div class="error" style="color: red;">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div id="site">
	<div id="main">
		<div id="logo"></div>
			<div id="login">
				<div id="contlogin">
					<form action="" method="post" id="formlogin">
					    <input type="text" id="username" name="username" value="&nbsp;Username"  onfocus="if (this.value == '&nbsp;Username') {this.value = '';}" onblur="if (this.value == '') {this.value = '&nbsp;Username';}" />   <br />
					    <input type="password" id="password" name="password" value="&nbsp;********" onfocus="if (this.value == '&nbsp;********') {this.value = '';}" onblur="if (this.value == '') {this.value = '&nbsp;********';}"  />   <br />
					    <a href="<?php echo url::base(); ?>users/recuperare">Am uitat parola</a><br />
					    <input type="submit" id="loginbutton" name="submit" value="Login"   />
					</form>
					<form action="<?php echo url::base(); ?>users/inregistrare" method="post">
						<input type="submit" id="signupbutton" name="submit" value="Cont nou"   />
					</form>
				</div> <!--END contlogin-->
			</div> <!--END login-->
			<span id="power">Creat de</span>
		<div id="poweredby"></div>
	</div> <!--END main -->
</div> <!--END site -->