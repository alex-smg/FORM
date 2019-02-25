<?php $bdd = new PDO("mysql:host=127.0.0.1;dbname=quizz_sg;charset=utf8", "root", "");
if(isset($_POST['submit'])){


if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['Q1']) AND isset($_POST['Q2']) AND isset($_POST['Q3']) AND isset($_POST['Q4']) AND isset($_POST['Q5']) AND isset($_POST['Q6']) AND isset($_POST['Q7']) AND isset($_POST['Q8']) AND isset($_POST['Q9']) AND isset($_POST['Q10']) AND isset($_POST['Q12']) AND isset($_POST['Q13']))
{
$requete = $bdd->prepare("INSERT INTO quizz (nom, prenom, email, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$requete->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['Q1'], $_POST['Q2'], $_POST['Q3'], $_POST['Q4'], $_POST['Q5'], $_POST['Q6'], $_POST['Q7'], $_POST['Q8'], $_POST['Q9'], $_POST['Q10'], $_POST['Q11'], $_POST['Q12'], $_POST['Q13']));
}else
    {
    echo 'Veuillez remplir l\'ensemble des champs';
}

}
