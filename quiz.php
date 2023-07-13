<?php
include_once('partials/header.php');


if(isset($_SESSION['user'])){
    if(isset($_SESSION['quizz'])){
        if(count($_SESSION['quizz']['questions']) > 0){?>


            <main class="<?php echo $_SESSION['quizz']['mode'] ?>">
                <section class="container pt-5 d-flex justify-content-center">
                    <h3></h3>
                </section>
            </main>
            
            

        <?php } else {
            header('Location: resultat.php');
        }
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}


include_once('partials/footer.php');

?>