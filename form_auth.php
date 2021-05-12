<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница авторизации</title>
    <link rel="stylesheet"type="text/css"href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function (){
        "use strict"

            $("input[name=email]").blur(function (){

             if ($(this).val()!=''){

                 var email_pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;

                 if(!email_pattern.test($(this).val())){
                     $('#error_email_message').text('Неправильный формат');
                     $('input[type=submit]').attr('disabled', true);
                 }else{

                     $('#error_email_message').empty();
                     $('input[type=submit]').attr('disabled', false);
                 }
             }
             else {
                 $('error_email_message').text('Введите Email!');
                 $('input[type=submit]').attr('disabled', true);
             }
            });
            $("input[name=password]").blur(function(){

                if($(this).val().length < 6){

                    $('#error_password_message').text('Минимальная длина пароля 6 символов!');
                    $('input[type=submit]').attr('disabled', true);

                }else{

                    $('#error_password_message').empty();
                    $('input[type=submit]').attr('disabled', false);
                }

            });
        });
    </script>
</head>
<body>

<?php
    require_once("header.php");
?>
<div class="block_for_messages">
    <?php
    if(isset($_SESSION["server_message"])){

        echo $_SESSION["server_message"];

        unset($_SESSION["server_message"]);
    }
    ?>
</div>

<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации,
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
<div class="t1_c">
        <div class="container_form">
            <h2>Форма авторизации</h2>
<form action="auth.php" method="POST" name="form_auth" >

				<table>

					<tr>
						<td>
							Email:
						</td>
						<td>
							<input type="email" name="email" minlength="2" maxlength="100" required /><br />
							<span id="error_email_message" class="message_error"></span>
						</td>
					</tr>

					<tr>
						<td>Пароль: </td>
						<td>
							<input type="password" name="password" minlength="6" maxlength="100" required placeholder="Минимум 6 символов" /><br />
							<span id="error_password_message" class="message_error"></span>
						</td>
					</tr>

					<tr>
						<td>Введите капчу: </td>
						<td>
							<p>
								<img src="captcha.php" alt="капча" /> <br />
								<input type="text" name="captcha" required />
							</p>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<input type="submit" name="btn_submit_auth" value="Войти">
						</td>
					</tr>

				</table>

			</form>

		</div>

	<?php
		}else{
	?>
			<div id="authorized">
				<h2>Вы уже авторизованы</h2>
			</div>

	<?php
     }
    ?>

</div>
<?php
    require_once("footer.php");
?>



</body>
</html>
