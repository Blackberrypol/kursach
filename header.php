<?php
	session_start();
	include_once(__DIR__.'/Env.php');
    use DevCoder\DotEnv;
    if (!getenv("DEPLOYMENT")){

    (new DotEnv(__DIR__ . '/.env'))->load();
}
?>


<div id="header">
	<h1>Всё о CSS</h1>


<div id="header1">
	<h4>
		<a href="<?php echo getenv('SITE_ADRESS') ?>">Главная страница</a>
	</h4>
</div>
	<div id="auth_block">

		<?php
			if(!isset($_COOKIE["jwt"]) or !$_COOKIE["jwt"]){
		?>
				<div id="link_register">
					<a href="<?php echo getenv('SITE_ADRESS') ?>/form_register.php">Регистрация</a>
				</div>

				<div id="link_auth">
					<a href="<?php echo getenv('SITE_ADRESS') ?>/form_auth.php">Авторизация</a>
				</div>
		<?php
			}else{
		?>
				<div id="link_logout">
					<a href="<?php echo getenv('SITE_ADRESS') ?>logout.php">Выход</a>
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