<?php
	session_start();
	error_reporting(0);
		$user = array('user' => 'afnenda',
					  'pass' => 'afnenda');
			if (isset($_POST['submit'])) {
				if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']) {
					$_SESSION['username'] = $_POST['username'];
					echo "Anda Berhasil Login $_POST[username]!!!"; echo "<br>";
					echo "<a href = 'proses.php'>Klik disini</a>";
				}
				else{
					display_login_form();
					echo "Error!!!";
				}
			}
			else{
				display_login_form();
			}

	function display_login_form(){ ?>
		<form action = '<?php echo $_SERVER['PHP_SELF']; ?>' method = 'POST';">
			<label for='username'>Username</label>
			<input type="text" name="uname" id="username">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<input type="submit" name="submit" value="Login">
		</form>
	<?php }
?>
