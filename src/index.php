<?php

require_once("../config/db.php");

if ($_POST) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST["content"])) {


// MA REQUETE
        $requete = 'INSERT INTO category SET firstname=:firstname,lastname=:lastname, email=:email,phone=:phone,content=:content';


// Informe PDO que c'est une requete préparée
        $statement = $pdo->prepare($requete);

// Changement de variables PDO pour intégration form
        $statement->bindValue(":firstname", $_POST["firstname"], PDO::PARAM_STR);
        $statement->bindValue(":lastname", $_POST["lastname"], PDO::PARAM_STR);
        $statement->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $statement->bindValue(":phone", $_POST["phone"], PDO::PARAM_INT);
        $statement->bindValue(":content", $_POST["content"], PDO::PARAM_STR);


        $statement->execute();

        header("location: infos.php");
        exit();
    }
}


?>



<?php include('head.php');
?>


<body>

<?php
// Connection avec ma BDD et initialisation de l'objet $pdo
require_once("../config/db.php");


include('nav.php');

include('bio2.php');

include('aPropos.php');

include('experiences.php');

include('interets.php');

include('contact.php');

include('footer.php');

?>

<script src="../js/nameBanniere.js"></script>


</body>

</html>