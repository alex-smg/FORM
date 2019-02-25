<?php


include "inc/header.php";

$con=mysqli_connect('localhost', 'root', '', 'reservation');

session_start();

        if(isset($_POST['login']))
        {
            if (empty($_POST['email']) || empty($_POST['password']))
            {
                echo '<p>Un des champs est vide</p>';
            }
            else
            {
                $query="SELECT * FROM user WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
                $result=mysqli_query($con,$query);

                if(mysqli_fetch_assoc($result))
                {
                   header("location:table.php");
                }else
                    {
                    echo '<p>incorrect</p>';
                }
            }
        }
        else
        {
            echo '<p>ça marche pas sa mere</p>';
        }


?>


<div class="flex-form" role="form">

    <form method="POST">

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Connexion</button>
    </form>

</div>

<?php include "inc/footer.php"; ?>
