
<?php   

require('includes/constants.php');
require('config/database.php');
require('includes/fonctions.php');

if (isset($_POST['register'])){
	if(not_empty(['name','pseudo','email','password','password_confirm'])){
		$errors = [];

		extract($_POST);

		if(mb_strlen($pseudo) <  4){
			$errors[] = "Pseudo trop court";
		}

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors[] = "Adresse email non valide";
		}

		if(mb_strlen($password) <  6){
			$errors[] = "mot de passe doit contenir au minimum 6 cacartères";
		}else {
			if ($password != $password_confirm){
				$errors[] = "les mots de passe sont différents";
			}

		}

		if(is_not_in_use('pseudo',$pseudo,'users')){
			$errors[] = "pseudo déjà utilisé";

		}

		if(is_not_in_use('email',$email,'users')){
			$errors[] = "Adresse déjà utilisée";

		}

		if(count($errors)==0){
		   //envoi un email d'activation
			$to = $email;
			$subject = WEBSITE_URL." - Activation du compte";
			$token = sha1($pseudo.$email.$password);



			ob_start();
			require('templates/activation.templ.php');
			$content = ob_get_clean();

			$headers = 'MIME-Version: 1.0'. "\r\n";
			$headers .= 'Content-type : text/html; charset=iso-8859-1'."\r\n";

			//mail($to, $subject, $content);

		   //informer l'utilisateur pour voir dans sa boite de reception

			//echo "mail d'activation envoyer";

		}

	} else{

	$errors = "Veuillez rermplire les champs!";
}

}

 include("views/register.view.php");

?>