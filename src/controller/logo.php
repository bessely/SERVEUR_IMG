<?php
/** Page    : Traitement des oktoboard et accèes
    @Version   : API.TRAVELBOAT.FORM API 1.0.0
    @Author   : YAO BESSELY SUNDAY JUNIOR : +2250709116844 besselymail@gmail.com
    @Codez en pensant que celui qui maintiendra votre code est un psychopathe qui connaît votre adresse.
 */


/**
 *Appel les fonctions adequoites selon le traitement demandé par le Users
 */
match (strtoupper(extractUri()['service'])) {
    'GETLOGO' => downLoadDoc(),
    default=> reject("Le Endpoint [ ".extractUri()['service']." ] est introuvable dans les services de oktoboard'"),
};

function  downLoadDoc(){
    $LOGONAME = controlParams(getRequest(page_encour()), "LOGONAME" , "string" , [3 , 255 ], true );
    // var_dump($LOGONAME);
    // exit();
        $file       = "public/img/".$LOGONAME;
        http_response_code(200);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename=" . $LOGONAME);
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        if (file_exists($file)) {
                readfile($file);
                exit();
        }
        readfile("public/img/APP_LOGO.png");
        exit();
}