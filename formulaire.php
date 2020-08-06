<?php
$errors = [];

if(!array_key_exists('nom',$_POST) || $_POST['nom'] == ''){
  $errors['nom'] = "Vous n'avez pas renseigner votre nom";
}

if(!array_key_exists('nom',$_POST) || $_POST['prenom'] == ''){
  $errors['prenom'] = "Vous n'avez pas renseigner votre prénom";
}

if(!array_key_exists('entreprise',$_POST) || $_POST['entreprise'] == ''){
  $errors['entreprise'] = "Vous n'avez pas renseigner votre nom d'entreprise";
}

if(!array_key_exists('e-mail',$_POST) || $_POST['e-mail'] == ''){
  $errors['e-mail'] = "Vous n'avez pas renseigner votre e-mail";
}

if(!array_key_exists('tel',$_POST) || $_POST['tel'] == ''){
  $errors['tel'] = "Vous n'avez pas renseigner votre numéro de téléphone";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
  $errors['message'] = "Vous n'avez pas renseigner votre message";
}

if(!array_key_exists('antispam',$_POST) || $_POST['antispam'] != 4){
  $errors['antispam'] = "Veuillez répondre l'équation (antispam)";
}


session_start();

if(!empty($errors)){
  $_SESSION ['errors'] = $errors;
  $_SESSION ['inputs'] = $_POST;
  header("Location: index.php#alertDiv");
}
else{
  $_SESSION['sucess'] = 1;
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $entreprise = $_POST['entreprise'];
  $email = $_POST['e-mail'];
  $tel = $_POST['tel'];
  $message = $_POST['message'];
  $corps_message = "Détail:\n\n";
  $corps_message .= "Nom: ".$nom."\n";
  $corps_message .= "Prénom: ".$prenom."\n";
  $corps_message .= "Entreprise: ".$entreprise."\n";
  $corps_message .= "E-mail: ".$email."\n";
  $corps_message .= "Téléphone: ".$tel."\n";
  $corps_message .= "Message: ".$message;
  $headers = $email;
  mail('jan.aurelien35@gmail.com', 'Formulaire de Contact', $email_message, $headers);
  header("Location: index.php#alertDiv");
}
 ?>
