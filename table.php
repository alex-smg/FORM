<?php
    /**
     * Created by PhpStorm.
     * User: alexandresmagghe
     * Date: 14/02/2019
     * Time: 14:57
     */




    include 'inc/db.php';

    //Create our SQL query.
    $sql = "SELECT * FROM reservation";

    //Prepare our SQL query.
    $statement = $pdo->prepare($sql);

    //Executre our SQL query.
    $statement->execute();

    //Fetch all of the rows from our MySQL table.

    include "inc/header.php";
?>



<button type="button" class="btn btn-primary" onclick="href.location='test.php'">EXPORT</button>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php

            while ($data = $statement->fetch()) {
        echo '<tr>';
        echo '<th scope="row">'.$data['id_film'].'</th>';
        echo '<td>'.$data['titre'].'</td>';
        echo '<td>'.$data['duree_minutes'].'</td>';
        echo '</tr>';

       /* $id = $data['id_film'];
        $titre = $data['titre'];
        $duree = $data['duree_minutes'];

        echo $id;*/
    }
    ?>

    </tr>

    </tbody>
</table>


<?php include "inc/footer.php"; ?>

