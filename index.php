<?php include_once('partials/header.php'); ?>

<main>
    <section class="container pt-5 d-flex justify-content-center">
        <?php if (!isset($_SESSION['user'])) { ?>
            <div class="card mt-5" style="width: 36rem;">
                <div class="card-body">
                    <form action="process/process_form_pseudo.php" method="post">
                        <div class="mb-3">
                            <p>Bienvenue sur Quizzie, veuillez choisir un <span class="fw-bolder">pseudo </span> !</p>
                            <!-- <label for="pseudo" class="form-label">Pseudo :</label> -->
                            <input type="text" class="form-control" name="pseudo" aria-describedby="emailHelp" placeholder="John Doe">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Choisir</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="card mt-5" style="width: 36rem;">
                <div class="card-body">
                    <form action="process/process_form_which_quiz.php" method="post">
                        <div class="mb-3">
                            <p>Veuillez choisir un <span class="fw-bolder">pseudo </span> !</p>
                            <label for="classique" class="form-label">Le mode Classique avec <span class="fw-bolder">toutes les questions</span></label>
                            <input type="submit" class="btn btn-primary" name="classique">
                        </div>
                    </form>
                </div>
            </div>

        <?php } ?>
    </section>
</main>


<?php include_once('partials/footer.php'); ?>