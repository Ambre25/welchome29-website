<?php
    if(isset($_POST["submit"])) {
        if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['object']) AND isset($_POST['message'])) {
            if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['object']) AND !empty($_POST['message'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $object = htmlspecialchars($_POST['object']);
                $message = htmlspecialchars($_POST['message']);

                echo "Votre mail a bien été envoyé";
            }
        }
    }

?>