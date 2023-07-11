<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzie</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <header class="px-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-4">
                <!-- div vide pour le justify-content -->
            </div>
            <div class="col-4 d-flex align-items-center flex-column">
                <h1>Quizzie</h1>
                <h2>Est-ce que c'est bon pour vous ?</h2>
            </div>
            <?php if (isset($_SESSION['user'])) { ?>
                <form action="process/process_deconnexion.php" method="post" class="col-4 d-flex justify-content-end gap-4">
                    <label for="deconnexion" class="d-flex align-items-center">Bonjour <?php echo $_SESSION['user']['pseudo']; ?> !</label>
                    <button type="submit" class="btn btn-primary" id="deconnexion">Deconnexion</button>
                </form>
            <?php } else { ?>
                <div class="col-4">
                    <!-- div vide tant qu'il n'y a pas de connecté -->
                </div>
            <?php } ?>
        </div>
        <hr>
    </header>