<?php
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['cp']) AND !empty($_POST['ville']) AND !empty($_POST['formule']) AND !empty($_POST['surface'])
    AND !empty($_POST['wc']) AND !empty($_POST['sdb']) AND !empty($_POST['bed']) AND !empty($_POST['linge']) AND !empty($_POST['recontact']) AND !empty($_POST['phone'])){
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $formule = $_POST['formule'];
        $surface = $_POST['surface'];
        $wc = $_POST['wc'];
        $sdb = $_POST['sdb'];
        $bed = $_POST['bed'];
        $linge = $_POST['linge'];
        $recontact = $_POST['recontact'];
        $phone = $_POST['phone'];
        $commentaire = $_POST['comment'];

        $email_from = 'contact.welchome29@gmail.com';

        $email_subject = "Nouvelle Demande de Devis";

        $email_body = "Nom : $name\n\n",
                        "Mail : $mail\n\n",
                        "Code Postal : $cp\n\n",
                        "Ville : $ville\n\n",
                        "Formule : $formule\n\n",
                        "Surface : $surface\n\n",
                        "Nombre de WC : $wc\n\n",
                        "Nombre de SDB : $sdb\n\n",
                        "Lits : $bed\n\n",
                        "Linge : $linge\n\n",
                        "Quand recontacter : $recontact\n\n",
                        "Téléphone : $phone\n\n",
                        "Commentaire : $commentaire\n\n";
    
        $to = "contact.welchome29@gmail.com";

        $headers = "De : $email_from \r\n";

        mail($to, $email_subject, $email_body, $headers);

        header("Location: devis.html");
    }
?>