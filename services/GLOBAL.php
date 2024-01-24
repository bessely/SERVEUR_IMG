<?php

        /**
                *description                       : MES CONSTANTES ET VARIABLES GLOBALES
        */
        // define("DB_INSTANCE", Database::getConnexion()); // une instance de connection a la base qui sera utiliser a chaque session
        define("VERSION", "1.0.0");
        define("LICENCE", "free");
        define("APPNAME", "SERVEUR IMG");
        /** NOTIFIY PAIEMENT URI*/
        define("NOTIFY_URL", "http://localhost/pay-notification.php");
        define("NOTIFY_URL_LOCAL", "http://localhost/travelboat.form");
        define("NOTIFY_URL_PRO","https://dev.clinik.ci/patient/pay-notification.php");
        define("RETURN_URL", "http://localhost/pay-notification.php");
        /** DEV DOMAINE URI */
        define("LOCALHOST", "http://localhost/travelboat.form");
        define("ACCUEIL", "http://localhost/travelboat.form");
        define("ACCUEIL_PRO", "http://localhost/travelboat.form");
        // /** PAIEMENT CONFIG FROM DATABASE*/
        define("SOCIETE", "SYNAPSE GROUPE");
        // /** SMTP CONFIG FROM DATABASE*/
        // /** TEMPLATE MAIL CONFIG FROM DATABASE*/
