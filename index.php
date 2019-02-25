<?php
    /**
     * Created by PhpStorm.
     * User: alexandresmagghe
     * Date: 14/02/2019
     * Time: 14:57
     */




include "inc/form.php";
include "inc/header.php";

            ?>


<header>
    <nav>
        <img src="img/logo-SG.png" alt="logo">
    </nav>
</header>

<form id="form" method="POST">
    
    <h1>Quizz</h1>

    <div class="form-group">
        <label>Nom</label>
        <input  type="text" class="form-control" id="InputNom" name="nom" placeholder="">
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input  type="text" class="form-control" id="InputPrenom" name="prenom" placeholder="">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="InputEmail" name="email">
    </div>

    <div class="form-group">
        <label>Resterez-vous dîner le 21 mars ?</label>
        <input  type="text" class="form-control" id="InputQuestion-1" name="Q1" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel est votre film préféré ?</label>
        <input  type="text" class="form-control" id="InputQuestion-2" name="Q2" placeholder="">
    </div>
    <div class="form-group">
        <label>Dans quel pays rêveriez-vous de vivre ?</label>
        <input  type="text" class="form-control" id="InputQuestion-3" name="Q3" placeholder="">
    </div>

    <div class="form-group">
        <label>Savez-vous jouer d’un instrument de musique ? Si oui, lequel ?</label>
        <input  type="text" class="form-control" id="InputQuestion-4" name="Q4" placeholder="">
    </div>
    <div class="form-group">
        <label>Est-ce que vous aimez faire la cuisine ?</label>
        <input  type="text" class="form-control" id="InputQuestion-5" name="Q5" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel super pouvoir aimeriez-vous avoir ?</label>
        <input  type="text" class="form-control" id="InputQuestion-6" name="Q6" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel personnage de film/série/théâtre/BD/etc. vous auriez voulu être ?</label>
        <input  type="text" class="form-control" id="InputQuestion-7" name="Q7" placeholder="">
    </div>
    <div class="form-group">
        <label>La chanson que vous écoutez/chantez sous la douche ?</label>
        <input  type="text" class="form-control" id="InputQuestion-8" name="Q8" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel est votre plat préféré?</label>
        <input  type="text" class="form-control" id="InputQuestion-9" name="Q9" placeholder="">
    </div>
    <div class="form-group">
        <label> Avez-vous un animal de compagnie? Lequel ?</label>
        <input  type="text" class="form-control" id="InputQuestion-10" name="Q10" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel voyage vous a le plus marqué ?</label>
        <input  type="text" class="form-control" id="InputQuestion-11" name="Q11" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel est votre chanteur préféré ?</label>
        <input  type="text" class="form-control" id="InputQuestion-12" name="Q12" placeholder="">
    </div>
    <div class="form-group">
        <label>Quel est votre sport préféré ?</label>
        <input  type="text" class="form-control" id="InputQuestion-13" name="Q13" placeholder="">
    </div>


    </div>

    <p id="erreur"></p>

    <button id="btn-submit" name="submit" type="submit" class="btn btn-primary">Valider</button>
</form>


<div id="modalSuccess" class="modal">
    <div class="modal-content">
        <div class="modal-header header-success">
            <span class="modal-header-title">Success!</span>
            <a href="#/" class="header-btn-close">&#215;</a>
        </div> <!-- .modal-header -->
    </div> <!-- .modal-content -->
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<?php include "inc/footer.php"; ?>
