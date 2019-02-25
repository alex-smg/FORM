document.getElementById("form").addEventListener("submit", function (e){

    var erreur;
    var inputs = this.getElementsByTagName("input");

    for(var i = 0; i < inputs.length; i++){

        if(!inputs[i].value){

            inputs[i].classList.add('border-red');
            erreur = "<b>Veuillez renseigner tous les champs</b>";
        }
    }



    if (erreur){

        e.preventDefault();
        document.getElementById("erreur").classList.add('erreur-red');
        document.getElementById("erreur").innerHTML = erreur;
        return false;

    }else{
        alert('formulaire envoyé !')
    }

} )