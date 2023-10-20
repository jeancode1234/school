<?php
session_start();

require_once(".././db_connexion/connexion.php");
$action = $_REQUEST["action"] ?? '';

$matricule = $_POST['matricule'] ?? '';
$email = $_POST['email'] ??'';
$name = $_POST['nom'] ??'';
$prenom = $_POST['prenom'] ??'';
$adresse = $_POST['adresse'] ??'';
$password_confirmation = $_POST['confirm_password'] ??'';
$password = $_POST['password'] ?? '';

if ($action == 'login') {
$req = $bdd->prepare("SELECT * FROM user WHERE matricule=? AND password=?");
$req->execute(array(
    $matricule,
    md5($password),
));
$users = $req->fetchAll();

if ($users) {
   
    foreach($users as $user) {
       $user_id = $user['id_user'];
       $user_email = $user['email'];
       $user_name = $user['nom'];
       $role_as =$user['type'];
    }

    $_SESSION['auth']=true;
    $_SESSION['auth_role']=$role_as;//1 pour l'admin et 0 pour le user
    $_SESSION['auth_user'] =[
       'user_id'=>$user_id,
       'user_name'=>$user_name,
       'user_email'=>$user_email,
    ];
    if ( $_SESSION['auth_role']== 1) {
        $_SESSION["message"] = "Bienvenue au tableau de bord cher"." ".$_SESSION['auth_user']['user_name'];
        header("Location: dashboard.php");
        exit(0);
      }else  {
        $_SESSION["message"] = "Bienvenue sur notre plateform";
        header("Location: index.php");
        exit(0);
      }
}
}if ($action == "register") {

    $req = $bdd->prepare("SELECT nom FROM user WHERE nom=:nom");
    $req->execute(array(
        'nom'=>$name,
    ));
   
    $user =  $req->fetchAll();
    if ($user) {
        $_SESSION['message'] ="cet utilisateur existe deja";
    }else {
        if ($password == $password_confirmation) {
            $insert = $bdd->prepare("INSERT INTO user(nom,prenom,adresse,email,password) VALUES(?,?,?,?,?)");
            $insert->execute(array (
                $name,
                $prenom,
                $adresse,
                $email,
                $password,
            ));
            $insert->closeCursor();
            header('Location: ../index.php');
        }
    }

}