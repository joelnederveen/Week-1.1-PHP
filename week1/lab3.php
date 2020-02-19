<?php
    define("leeftijd", 16);
    define("garage", true);
    define("kleur", "blauw");


    if (leeftijd < 18) {
        if (garage == false) {
            echo "Bij jou staat jouw mountainbike in de kleur " . kleur . " gewoon voor de deur!";
        }
        else {
            echo "Jij stalt jouw vespa scooter in de kleur" . kleur . "netjes in je eigen garage.";
        }
    }
    else {
        if (garage == false) {
            echo "Jij hebt een Skoda Octavia in de kleur" . kleur . "op de oprit staan.";
        }
        else {
            echo  "Wat goed dat jij die Ferarri in de kleur " . kleur . "in je garage opslaat!";

        }
    }






?>