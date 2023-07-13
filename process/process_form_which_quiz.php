<?php
require_once('../utils/db_connection.php');
session_start();


var_dump($_POST);

if(!empty($_POST['mode'])){
    if($_POST['mode'] === 'classique'){

        $query = 'SELECT * FROM `questions` ORDER BY RAND() LIMIT 10';
        $request = $db->prepare($query);
        $request->execute([]);
        $questions = $request->fetchAll();

        $_SESSION['quizz']['questions'] = $questions;
        $_SESSION['quizz']['mode'] = $_POST['mode'];

        header('Location: ../quiz.php');
    }
}


?>