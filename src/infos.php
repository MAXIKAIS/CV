<link rel="stylesheet" href="../css/style.css">



<div class="messageform">
    <div class="msg">
        <img class="msg-img-top" src="../images/contact.jpg" alt="Card image cap">
        <div class="card-body">
            <p>

            </p>
        </div>
    </div>
</div>


<?php

include('../config/db.php');

    // Ma requete SQL
    $requete = "SELECT * FROM category";

    // Appel PDO + recuperation de données categories
    $categories = $pdo->query($requete)->fetchAll();
?>


<table>
    <thead>
        <tr>
            <th>#ID</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>CONTENT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(!empty($categories)) {
            foreach ($categories as $key => $value) {
                echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
                echo "<td>" . $value['firstname'] . "</td>";
                echo "<td>" . $value['lastname'] . "</td>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td>" . $value['phone'] . "</td>";
                echo "<td>" . $value['content'] . "</td>";
                echo "<tr>";
            }
        }else{
            echo "<tr>";
                echo "<td colspan='5'> Aucune categorie n'est disponible</td>";
            echo "</tr>";

        }

        ?>
    </tbody>
</table>
