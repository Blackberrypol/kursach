<?php
	session_start();
?>

<div id="header">
	<h1>Всё о CSS</h1>


<div id="header1">
	<h4>
		<a href="/">Главная страница</a>
	</h4>
</div>
	<div id="auth_block">

		<?php
			if(!isset($_COOKIE["jwt"]) or !$_COOKIE["jwt"]){
		?>
				<div id="link_register">
					<a href="/form_register.php">Регистрация</a>
				</div>

				<div id="link_auth">
					<a href="/form_auth.php">Авторизация</a>
				</div>
		<?php
			}else{
		?>
				<div id="link_logout">
					<a href="/logout.php">Выход</a>
				</div>

				<div>
					Привет, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?> !
				</div>
		<?php
			}
		?>


		<!-- <div class="clear"></div> -->
	</div>
</div>