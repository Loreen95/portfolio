<?php

require 'database.php';

if (isset($_POST['submit'])) {
    if (trim($_POST['naam']) == "" && (trim($_POST['email']) == "" && (trim($_POST['onderwerp']) == "" && (trim($_POST['bericht']) == "")))) {
        echo '<div class="alert alert-danger" role="alert">Vul alle velden in!</div>';
    } elseif (trim($_POST['naam']) == "") {
        echo '<div class="alert alert-danger" role="alert">Vul je naam in</div>';
    } elseif (trim($_POST['email']) == "") {
        echo '<div class="alert alert-danger" role="alert">Vul je e-mail adres in</div>';
    } elseif (trim($_POST['onderwerp']) == "") {
        echo '<div class="alert alert-danger" role="alert">Vul een onderwerp in</div>';
    } elseif (trim($_POST['bericht']) == "") {
        echo '<div class="alert alert-danger" role="alert">Vul een bericht in</div>';
    } else {
        $naam = $conn->real_escape_string($_POST['naam']);
        $email = $conn->real_escape_string($_POST['email']);
        $onderwerp = $conn->real_escape_string($_POST['onderwerp']);
        $bericht = $conn->real_escape_string($_POST['bericht']);

        $sql = "INSERT INTO contact (`naam`, `email`, `onderwerp`, `bericht`)
        VALUES ('" . $naam . "', '" . $email . "', '" . $onderwerp . "', '" . $bericht . "')";

        if ($conn->query($sql) === TRUE) {
            header('Location:../content/index.php');
            echo '<div class="alert alert-success" role="alert">Het bericht is succesvol verstuurd.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Er is een probleem met het versturen van dit bericht.</div>';
        }
    }
}
