<?php


if(!empty($_POST['pseudo'])){

    require_once('../utils/db_connection.php');

    // on vérifie si l'utilisateur existe
    $query = 'SELECT * FROM users WHERE pseudo = :pseudo';
    $request = $db->prepare($query);
    $request->execute([
        ':pseudo' => $_POST['pseudo'],
    ]);
    $user = $request->fetch();

    session_start();

    // si l'utilisateur n'existe pas on le crée
    if($user === false){
        $query = 'INSERT INTO users(pseudo) VALUES (:pseudo)';
        $request = $db->prepare($query);
        $request->execute([
            ':pseudo' => $_POST['pseudo'],
        ]);

        // puis on le met en session pour le garder connecté
        $_SESSION['user']['user_id'] = $db->lastInsertId();
        $_SESSION['user']['pseudo'] = $_POST['pseudo'];
    } else {
        // si l'utilisateur existe on le met en session directement
        $_SESSION['user']['user_id'] = $user['user_id'];
        $_SESSION['user']['pseudo'] = $user['pseudo'];
    }

    header('Location: ../index.php');

}





?>