<?php

 require __DIR__ . '/vendor/autoload.php';
                    use \Firebase\JWT\JWT;

	session_start();

	require_once("dbconnect.php");

	if(isset($_POST["btn_submit_auth"])){

		if(isset($_POST["captcha"])){

			$captcha = trim($_POST["captcha"]);

			if($_SESSION["rand_captcha"] != $captcha){

				$message = "<p class='message_error'><strong>Ошибка!</strong> Вы ввели не правильную капчу </p>";
				redirect_to($message, 'form_auth.php');
			}

			//======= Обработка адреса электронной почты ============
			if(isset($_POST["email"])){

				$email = trim($_POST["email"]);

				if(!empty($email)){

					$email = htmlspecialchars($email, ENT_QUOTES);

					$reg_email = "/^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i";

					if(!preg_match($reg_email, $email)){

						$message = "<p class='message_error'><strong>Ошибка!</strong> Вы ввели адрес электронной почты в неправильном формате </p>";
						redirect_to($message, 'form_auth.php');
					}

				}else{

					$message = "<p class='message_error'><strong>Ошибка!</strong> Укажите адрес Вашей электронной почты</p>";
					redirect_to($message, 'form_auth.php');
				}

			}else{

				$message = "<p class='message_error'><strong>Ошибка!</strong> Отсутствует поле для ввода адреса электронной почты</p>";
				redirect_to($message, 'form_auth.php');
			}

			//======= Обработка пароля ============
			if(isset($_POST["password"])){

				$password = trim($_POST["password"]);

				if(!empty($password)){

					$password = htmlspecialchars($password, ENT_QUOTES);

					$password = md5($password."top_secret");
				}else{

					$message = "<p class='message_error'><strong>Ошибка!</strong> Укажите Ваш пароль</p>";
					redirect_to($message, 'form_auth.php');
				}

			}else{

				$message = "<p class='message_error'><strong>Ошибка!</strong> Отсутствует поле для ввода пароля</p>";
				redirect_to($message, 'form_auth.php');
			}

			$result_query_select = $mysqli->query("SELECT first_name, last_name FROM `users` WHERE email = '".$email."' AND password = '".$password."'");

			if(!$result_query_select){

				$message = "<p class='message_error'><strong>Ошибка!</strong> Ошибка запроса на выборке пользователя из базы данных. </p><p>Описание ошибки: $mysqli->error <br /> Код ошибки: $mysqli->errno </p>";
				redirect_to($message, 'form_auth.php');
			}else{

				if($result_query_select->num_rows == 1){

					while ( $info_user = $result_query_select->fetch_assoc() ) {

						$_SESSION['first_name'] = $info_user['first_name'];
						$_SESSION['last_name'] = $info_user['last_name'];
					}

                       $secretKey  = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';
                       $issuedAt   = new DateTimeImmutable();
                       $expire     = $issuedAt->modify('+6 days')->getTimestamp();      // Add 60 seconds

                       $data = [
                           'iat'  => $issuedAt->getTimestamp(),         // Issued at: time when the token was generated
                           'email'=> $email,                            // Issuer
                           'nbf'  => $issuedAt->getTimestamp(),         // Not before
                           'exp'  => $expire,                           // Expire
                       ];

                        $token =    JWT::encode(
                                        $data,
                                        $secretKey,
                                        'HS512'
                                    );

                    setcookie("jwt", $token, $expire);

					$result_query_select->close();

					redirect_to($message, '');
				}else{

					$message = "<p class='message_error'><strong>Ошибка!</strong> 
                     Вы ввели неправильный адрес электронной почты и/или пароль </p>";
					redirect_to($message, 'form_auth.php');
				}

			}

		}else{

			$message = "<p class='message_error'><strong>Ошибка!</strong> Отсутствует поле для ввода капчи </p>";
			redirect_to($message, 'form_auth.php');
		}

	}else{

		exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site.">главную страницу</a>.</p>");

	}

function redirect_to($message, $address_page)
{

    $_SESSION["server_message"] = $message;

    header("HTTP/1.1 301 Moved Permanently");
	header("location: ".getenv("SITE_ADRESS")."/".$address_page);
	die();

    exit();
}

?>