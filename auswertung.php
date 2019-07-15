<!DOCTYPE html>
<html>
    <head>
        <title>Umfrage Auswertung</title>
        <!--<link rel="stylesheet" type="text/css" href="auswertung.css">-->
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    </head>
    </head>
    <body>
    <!--css file klappt iwie nicht. sau dumm-->
    <style>
        *, *::before, *::after
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        body{

            margin-bottom: 400px;
        }

        th, td {
            padding: 15px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        h4{
            margin-top:10px;
        }

        .midHeader{
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .divider{
            min-height: 20px;
        }
    </style>
    <?php


            //Einloggen

            $servername = "localhost";
            $username = "root";
            $password = "seppi2512";
            $dbname = "surveyesel";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM answers";
            $result = $conn->query($sql);

            /*===================
            <Variablen erstellen>
            ===================*/

            //Geschlechter
            $m = 0;     $w = 0;     $d = 0;    

            //Klasse
            $fünfK = 0;     $sechsK = 0;    $siebenK = 0;
            $achtK = 0;     $neunK = 0;     $zehnK = 0;
            $elfK = 0;      $zwölfK = 0;    $dreizehnK = 0;

                //Männlich
                $MfünfK = 0;     $MsechsK = 0;    $MsiebenK = 0;
                $MachtK = 0;     $MneunK = 0;     $MzehnK = 0;
                $MelfK = 0;      $MzwölfK = 0;    $MdreizehnK = 0;

                //Weiblich
                $WfünfK = 0;     $WsechsK = 0;    $WsiebenK = 0;
                $WachtK = 0;     $WneunK = 0;     $WzehnK = 0;
                $WelfK = 0;      $WzwölfK = 0;    $WdreizehnK = 0;

                //Divers
                $DfünfK = 0;     $DsechsK = 0;    $DsiebenK = 0;
                $DachtK = 0;     $DneunK = 0;     $DzehnK = 0;
                $DelfK = 0;      $DzwölfK = 0;    $DdreizehnK = 0;

            //Zugang
            $Ja = 0;    $Fam = 0;   $No = 0;

                //Zugang | Klassen
                $Ja5 = 0;    $Fam5 = 0;   $No5 = 0;
                $Ja6 = 0;    $Fam6 = 0;   $No6 = 0;
                $Ja7 = 0;    $Fam7 = 0;   $No7 = 0;
                $Ja8 = 0;    $Fam8 = 0;   $No8 = 0;
                $Ja9 = 0;    $Fam9 = 0;   $No9 = 0;
                $Ja10 = 0;   $Fam10 = 0;  $No10 = 0;
                $Ja11 = 0;   $Fam11 = 0;  $No11 = 0;
                $Ja12 = 0;   $Fam12 = 0;  $No12 = 0;
                $Ja13 = 0;   $Fam13 = 0;  $No13 = 0;

            //Marke

            $Apple = 0;     $Blackberry = 0;    $Google = 0;    $HTC = 0;
            $LG = 0;        $Samsung = 0;       $Sony = 0;      $OnePlus = 0;
            $Motorola = 0;  $Huawei = 0;        $Nokia = 0;     $Xiaomi = 0;

            //Zeit pro Tag

            $less30 = 0;    $dreißig60 = 0;     $sechzig120 = 0;
            $einszwanzig180 = 0;                $einsachtzig240 = 0;
            $more240 = 0;

                //Männlich
                $less30M = 0;     $dreißig60M = 0;    $sechzig120M = 0;
                $einszwanzig180M = 0;     $einsachtzig240M = 0;     $more240M = 0;

                //Weiblich
                $less30W = 0;     $dreißig60W = 0;    $sechzig120W = 0;
                $einszwanzig180W = 0;     $einsachtzig240W = 0;     $more240W = 0;

                //Divers
                $less30D = 0;     $dreißig60D = 0;    $sechzig120D = 0;
                $einszwanzig180D = 0;     $einsachtzig240D = 0;     $more240D = 0;

                //Klassen

                //5
                $less305 = 0;    $dreißig605 = 0;     $sechzig1205 = 0;
                $einszwanzig1805 = 0;                $einsachtzig2405 = 0;
                $more2405 = 0;
                //6
                $less306 = 0;    $dreißig606 = 0;     $sechzig1206 = 0;
                $einszwanzig1806 = 0;                $einsachtzig2406 = 0;
                $more2406 = 0;
                //7
                $less307 = 0;    $dreißig607 = 0;     $sechzig1207 = 0;
                $einszwanzig1807 = 0;                $einsachtzig2407 = 0;
                $more2407 = 0;
                //8
                $less308 = 0;    $dreißig608 = 0;     $sechzig1208 = 0;
                $einszwanzig1808 = 0;                $einsachtzig2408 = 0;
                $more2408 = 0;
                //9
                $less309 = 0;    $dreißig609 = 0;     $sechzig1209 = 0;
                $einszwanzig1809 = 0;                $einsachtzig2409 = 0;
                $more2409 = 0;
                //10
                $less3010 = 0;    $dreißig6010 = 0;     $sechzig12010 = 0;
                $einszwanzig18010 = 0;                $einsachtzig24010 = 0;
                $more24010 = 0;
                //11
                $less3011 = 0;    $dreißig6011 = 0;     $sechzig12011 = 0;
                $einszwanzig18011 = 0;                $einsachtzig24011 = 0;
                $more24011 = 0;
                //12
                $less3012 = 0;    $dreißig6012 = 0;     $sechzig12012 = 0;
                $einszwanzig18012 = 0;                $einsachtzig24012 = 0;
                $more24012 = 0;
                //13
                $less3013 = 0;    $dreißig6013 = 0;     $sechzig12013 = 0;
                $einszwanzig18013 = 0;                $einsachtzig24013 = 0;
                $more24013 = 0;


            //WICHTIG
            //Die ganzen Variablen für nie manchmal und häufig noch rein
            //hatte nur grad keinen bock drauf
            //WICHTIG

            //WoSchule
            $SchuleNie = 0;     $SchuleManchmal = 0;    $SchuleOft = 0;

                //5
                $SchuleNie5 = 0;     $SchuleManchmal5 = 0;    $SchuleOft5 = 0;

                //6
                $SchuleNie6 = 0;     $SchuleManchmal6 = 0;    $SchuleOft6 = 0;

                //7
                $SchuleNie7 = 0;     $SchuleManchmal7 = 0;    $SchuleOft7 = 0;

                //8
                $SchuleNie8 = 0;     $SchuleManchmal8 = 0;    $SchuleOft8 = 0;

                //9
                $SchuleNie9 = 0;     $SchuleManchmal9 = 0;    $SchuleOft9 = 0;

                //10
                $SchuleNie10 = 0;     $SchuleManchmal10 = 0;    $SchuleOft10 = 0;

                //11
                $SchuleNie11 = 0;     $SchuleManchmal11 = 0;    $SchuleOft11 = 0;

                //12
                $SchuleNie12 = 0;     $SchuleManchmal12 = 0;    $SchuleOft12 = 0;

                //13
                $SchuleNie13 = 0;     $SchuleManchmal13 = 0;    $SchuleOft13 = 0;

            //WoZuhause
            $ZuhauseNie = 0;    $ZuhauseManchmal = 0;       $ZuhauseOft = 0;

                //5
                $ZuhauseNie5 = 0;     $ZuhauseManchmal5 = 0;    $ZuhauseOft5 = 0;

                //6
                $ZuhauseNie6 = 0;     $ZuhauseManchmal6 = 0;    $ZuhauseOft6 = 0;

                //7
                $ZuhauseNie7 = 0;     $ZuhauseManchmal7 = 0;    $ZuhauseOft7 = 0;

                //8
                $ZuhauseNie8 = 0;     $ZuhauseManchmal8 = 0;    $ZuhauseOft8 = 0;

                //9
                $ZuhauseNie9 = 0;     $ZuhauseManchmal9 = 0;    $ZuhauseOft9 = 0;

                //10
                $ZuhauseNie10 = 0;     $ZuhauseManchmal10 = 0;    $ZuhauseOft10 = 0;

                //11
                $ZuhauseNie11 = 0;     $ZuhauseManchmal11 = 0;    $ZuhauseOft11 = 0;

                //12
                $ZuhauseNie12 = 0;     $ZuhauseManchmal12 = 0;    $ZuhauseOft12 = 0;

                //13
                $ZuhauseNie13 = 0;     $ZuhauseManchmal13 = 0;    $ZuhauseOft13 = 0;


            //WoUnterwegs
            $WegsNie = 0;       $WegsManchmal = 0;      $WegsOft = 0;

                //5
                $WegsNie5 = 0;     $WegsManchmal5 = 0;    $WegsOft5 = 0;

                //6
                $WegsNie6 = 0;     $WegsManchmal6 = 0;    $WegsOft6 = 0;

                //7
                $WegsNie7 = 0;     $WegsManchmal7 = 0;    $WegsOft7 = 0;

                //8
                $WegsNie8 = 0;     $WegsManchmal8 = 0;    $WegsOft8 = 0;

                //9
                $WegsNie9 = 0;     $WegsManchmal9 = 0;    $WegsOft9 = 0;

                //10
                $WegsNie10 = 0;     $WegsManchmal10 = 0;    $WegsOft10 = 0;

                //11
                $WegsNie11 = 0;     $WegsManchmal11 = 0;    $WegsOft11 = 0;

                //12
                $WegsNie12 = 0;     $WegsManchmal12 = 0;    $WegsOft12 = 0;

                //13
                $WegsNie13 = 0;     $WegsManchmal13 = 0;    $WegsOft13 = 0;

                       
            //WoSport
            $SportNie = 0;      $SportManchmal = 0;     $SportOft = 0;

                //5
                $SportNie5 = 0;     $SportManchmal5 = 0;    $SportOft5 = 0;

                //6
                $SportNie6 = 0;     $SportManchmal6 = 0;    $SportOft6 = 0;

                //7
                $SportNie7 = 0;     $SportManchmal7 = 0;    $SportOft7 = 0;

                //8
                $SportNie8 = 0;     $SportManchmal8 = 0;    $SportOft8 = 0;

                //9
                $SportNie9 = 0;     $SportManchmal9 = 0;    $SportOft9 = 0;

                //10
                $SportNie10 = 0;     $SportManchmal10 = 0;    $SportOft10 = 0;

                //11
                $SportNie11 = 0;     $SportManchmal11 = 0;    $SportOft11 = 0;

                //12
                $SportNie12 = 0;     $SportManchmal12 = 0;    $SportOft12 = 0;

                //13
                $SportNie13 = 0;     $SportManchmal13 = 0;    $SportOft13 = 0;


            //WozuChat
            $ChatNie = 0;       $ChatManchmal = 0;      $ChatOft = 0;
                
                //5
                $ChatNie5 = 0;     $ChatManchmal5 = 0;    $ChatOft5 = 0;

                //6
                $ChatNie6 = 0;     $ChatManchmal6 = 0;    $ChatOft6 = 0;

                //7
                $ChatNie7 = 0;     $ChatManchmal7 = 0;    $ChatOft7 = 0;

                //8
                $ChatNie8 = 0;     $ChatManchmal8 = 0;    $ChatOft8 = 0;

                //9
                $ChatNie9 = 0;     $ChatManchmal9 = 0;    $ChatOft9 = 0;

                //10
                $ChatNie10 = 0;     $ChatManchmal10 = 0;    $ChatOft10 = 0;

                //11
                $ChatNie11 = 0;     $ChatManchmal11 = 0;    $ChatOft11 = 0;

                //12
                $ChatNie12 = 0;     $ChatManchmal12 = 0;    $ChatOft12 = 0;

                //13
                $ChatNie13 = 0;     $ChatManchmal13 = 0;    $ChatOft13 = 0;

            //WozuMail
            $MailNie = 0;       $MailManchmal = 0;      $MailOft = 0;

                //5
                $MailNie5 = 0;     $MailManchmal5 = 0;    $MailOft5 = 0;

                //6
                $MailNie6 = 0;     $MailManchmal6 = 0;    $MailOft6 = 0;

                //7
                $MailNie7 = 0;     $MailManchmal7 = 0;    $MailOft7 = 0;

                //8
                $MailNie8 = 0;     $MailManchmal8 = 0;    $MailOft8 = 0;

                //9
                $MailNie9 = 0;     $MailManchmal9 = 0;    $MailOft9 = 0;

                //10
                $MailNie10 = 0;     $MailManchmal10 = 0;    $MailOft10 = 0;

                //11
                $MailNie11 = 0;     $MailManchmal11 = 0;    $MailOft11 = 0;

                //12
                $MailNie12 = 0;     $MailManchmal12 = 0;    $MailOft12 = 0;

                //13
                $MailNie13 = 0;     $MailManchmal13 = 0;    $MailOft13 = 0;
            

            //WozuTelfonieren
            $CallNie = 0;       $CallManchmal = 0;      $CallOft = 0;

                //5
                $CallNie5 = 0;     $CallManchmal5 = 0;    $CallOft5 = 0;

                //6
                $CallNie6 = 0;     $CallManchmal6 = 0;    $CallOft6 = 0;

                //7
                $CallNie7 = 0;     $CallManchmal7 = 0;    $CallOft7 = 0;

                //8
                $CallNie8 = 0;     $CallManchmal8 = 0;    $CallOft8 = 0;

                //9
                $CallNie9 = 0;     $CallManchmal9 = 0;    $CallOft9 = 0;

                //10
                $CallNie10 = 0;     $CallManchmal10 = 0;    $CallOft10 = 0;

                //11
                $CallNie11 = 0;     $CallManchmal11 = 0;    $CallOft11 = 0;

                //12
                $CallNie12 = 0;     $CallManchmal12 = 0;    $CallOft12 = 0;

                //13
                $CallNie13 = 0;     $CallManchmal13 = 0;    $CallOft13 = 0;

            //wozuSmedia
            $SMediaNie = 0;     $SMediaManchmal = 0;    $SMediaOft = 0;

                //5
                $SMediaNie5 = 0;     $SMediaManchmal5 = 0;    $SMediaOft5 = 0;

                //6
                $SMediaNie6 = 0;     $SMediaManchmal6 = 0;    $SMediaOft6 = 0;

                //7
                $SMediaNie7 = 0;     $SMediaManchmal7 = 0;    $SMediaOft7 = 0;

                //8
                $SMediaNie8 = 0;     $SMediaManchmal8 = 0;    $SMediaOft8 = 0;

                //9
                $SMediaNie9 = 0;     $SMediaManchmal9 = 0;    $SMediaOft9 = 0;

                //10
                $SMediaNie10 = 0;     $SMediaManchmal10 = 0;    $SMediaOft10 = 0;

                //11
                $SMediaNie11 = 0;     $SMediaManchmal11 = 0;    $SMediaOft11 = 0;

                //12
                $SMediaNie12 = 0;     $SMediaManchmal12 = 0;    $SMediaOft12 = 0;

                //13
                $SMediaNie13 = 0;     $SMediaManchmal13 = 0;    $SMediaOft13 = 0;


            //WozuNachschlagwerk
            $NSWnie = 0;    $NSWmanchmal = 0;       $NSWoft = 0;

                //5
                $NSWnie5 = 0;     $NSWmanchmal5 = 0;    $NSWoft5 = 0;

                //6
                $NSWnie6 = 0;     $NSWmanchmal6 = 0;    $NSWoft6 = 0;

                //7
                $NSWnie7 = 0;     $NSWmanchmal7 = 0;    $NSWoft7 = 0;

                //8
                $NSWnie8 = 0;     $NSWmanchmal8 = 0;    $NSWoft8 = 0;

                //9
                $NSWnie9 = 0;     $NSWmanchmal9 = 0;    $NSWoft9 = 0;

                //10
                $NSWnie10 = 0;     $NSWmanchmal10 = 0;    $NSWoft10 = 0;

                //11
                $NSWnie11 = 0;     $NSWmanchmal11 = 0;    $NSWoft11 = 0;

                //12
                $NSWnie12 = 0;     $NSWmanchmal12 = 0;    $NSWoft12 = 0;

                //13
                $NSWnie13 = 0;     $NSWmanchmal13 = 0;    $NSWoft13 = 0;

            
            //WozuSurfen
            $SurfenNie = 0;     $SurfenManchmal = 0;        $SurfenOft = 0;

                //5
                $SurfenNie5 = 0;     $SurfenManchmal5 = 0;    $SurfenOft5 = 0;

                //6
                $SurfenNie6 = 0;     $SurfenManchmal6 = 0;    $SurfenOft6 = 0;

                //7
                $SurfenNie7 = 0;     $SurfenManchmal7 = 0;    $SurfenOft7 = 0;

                //8
                $SurfenNie8 = 0;     $SurfenManchmal8 = 0;    $SurfenOft8 = 0;

                //9
                $SurfenNie9 = 0;     $SurfenManchmal9 = 0;    $SurfenOft9 = 0;

                //10
                $SurfenNie10 = 0;     $SurfenManchmal10 = 0;    $SurfenOft10 = 0;

                //11
                $SurfenNie11 = 0;     $SurfenManchmal11 = 0;    $SurfenOft11 = 0;

                //12
                $SurfenNie12 = 0;     $SurfenManchmal12 = 0;    $SurfenOft12 = 0;

                //13
                $SurfenNie13 = 0;     $SurfenManchmal13 = 0;    $SurfenOft13 = 0;

            
            //WozuNavi
            $NaviNie = 0;       $NaviManchmal = 0;      $NaviOft = 0;

                //5
                $NaviNie5 = 0;     $NaviManchmal5 = 0;    $NaviOft5 = 0;

                //6
                $NaviNie6 = 0;     $NaviManchmal6 = 0;    $NaviOft6 = 0;

                //7
                $NaviNie7 = 0;     $NaviManchmal7 = 0;    $NaviOft7 = 0;

                //8
                $NaviNie8 = 0;     $NaviManchmal8 = 0;    $NaviOft8 = 0;

                //9
                $NaviNie9 = 0;     $NaviManchmal9 = 0;    $NaviOft9 = 0;

                //10
                $NaviNie10 = 0;     $NaviManchmal10 = 0;    $NaviOft10 = 0;

                //11
                $NaviNie11 = 0;     $NaviManchmal11 = 0;    $NaviOft11 = 0;

                //12
                $NaviNie12 = 0;     $NaviManchmal12 = 0;    $NaviOft12 = 0;

                //13
                $NaviNie13 = 0;     $NaviManchmal13 = 0;    $NaviOft13 = 0;

            
            //WozuTermineUndAufgaben
            $TaskNie = 0;       $TaskManchmal = 0;      $TaskOft = 0;

                //5
                $TaskNie5 = 0;     $TaskManchmal5 = 0;    $TaskOft5 = 0;

                //6
                $TaskNie6 = 0;     $TaskManchmal6 = 0;    $TaskOft6 = 0;

                //7
                $TaskNie7 = 0;     $TaskManchmal7 = 0;    $TaskOft7 = 0;

                //8
                $TaskNie8 = 0;     $TaskManchmal8 = 0;    $TaskOft8 = 0;

                //9
                $TaskNie9 = 0;     $TaskManchmal9 = 0;    $TaskOft9 = 0;

                //10
                $TaskNie10 = 0;     $TaskManchmal10 = 0;    $TaskOft10 = 0;

                //11
                $TaskNie11 = 0;     $TaskManchmal11 = 0;    $TaskOft11 = 0;

                //12
                $TaskNie12 = 0;     $TaskManchmal12 = 0;    $TaskOft12 = 0;

                //13
                $TaskNie13 = 0;     $TaskManchmal13 = 0;    $TaskOft13 = 0;


            //WozuDatenspeicher
            $DatenNie = 0;      $DatenManchmal = 0;     $DatenOft = 0;

                //5
                $DatenNie5 = 0;     $DatenManchmal5 = 0;    $DatenOft5 = 0;

                //6
                $DatenNie6 = 0;     $DatenManchmal6 = 0;    $DatenOft6 = 0;

                //7
                $DatenNie7 = 0;     $DatenManchmal7 = 0;    $DatenOft7 = 0;

                //8
                $DatenNie8 = 0;     $DatenManchmal8 = 0;    $DatenOft8 = 0;

                //9
                $DatenNie9 = 0;     $DatenManchmal9 = 0;    $DatenOft9 = 0;

                //10
                $DatenNie10 = 0;     $DatenManchmal10 = 0;    $DatenOft10 = 0;

                //11
                $DatenNie11 = 0;     $DatenManchmal11 = 0;    $DatenOft11 = 0;

                //12
                $DatenNie12 = 0;     $DatenManchmal12 = 0;    $DatenOft12 = 0;

                //13
                $DatenNie13 = 0;     $DatenManchmal13 = 0;    $DatenOft13 = 0;

        
            //Gaming
            $GamesNie = 0;      $GamesManchmal = 0;     $GamesOft = 0;

                //5
                $GamesNie5 = 0;     $GamesManchmal5 = 0;    $GamesOft5 = 0;

                //6
                $GamesNie6 = 0;     $GamesManchmal6 = 0;    $GamesOft6 = 0;

                //7
                $GamesNie7 = 0;     $GamesManchmal7 = 0;    $GamesOft7 = 0;

                //8
                $GamesNie8 = 0;     $GamesManchmal8 = 0;    $GamesOft8 = 0;

                //9
                $GamesNie9 = 0;     $GamesManchmal9 = 0;    $GamesOft9 = 0;

                //10
                $GamesNie10 = 0;     $GamesManchmal10 = 0;    $GamesOft10 = 0;

                //11
                $GamesNie11 = 0;     $GamesManchmal11 = 0;    $GamesOft11 = 0;

                //12
                $GamesNie12 = 0;     $GamesManchmal12 = 0;    $GamesOft12 = 0;

                //13
                $GamesNie13 = 0;     $GamesManchmal13 = 0;    $GamesOft13 = 0;


            //WozuVideo
            $VideoNie = 0;      $VideoManchmal = 0;     $VideoOft = 0;  

                //5
                $VideoNie5 = 0;     $VideoManchmal5 = 0;    $VideoOft5 = 0;

                //6
                $VideoNie6 = 0;     $VideoManchmal6 = 0;    $VideoOft6 = 0;

                //7
                $VideoNie7 = 0;     $VideoManchmal7 = 0;    $VideoOft7 = 0;

                //8
                $VideoNie8 = 0;     $VideoManchmal8 = 0;    $VideoOft8 = 0;

                //9
                $VideoNie9 = 0;     $VideoManchmal9 = 0;    $VideoOft9 = 0;

                //10
                $VideoNie10 = 0;     $VideoManchmal10 = 0;    $VideoOft10 = 0;

                //11
                $VideoNie11 = 0;     $VideoManchmal11 = 0;    $VideoOft11 = 0;

                //12
                $VideoNie12 = 0;     $VideoManchmal12 = 0;    $VideoOft12 = 0;

                //13
                $VideoNie13 = 0;     $VideoManchmal13 = 0;    $VideoOft13 = 0;


            //WozuMusik
            $MusikNie = 0;      $MusikManchmal = 0;     $MusikOft = 0;

                //5
                $MusikNie5 = 0;     $MusikManchmal5 = 0;    $MusikOft5 = 0;

                //6
                $MusikNie6 = 0;     $MusikManchmal6 = 0;    $MusikOft6 = 0;

                //7
                $MusikNie7 = 0;     $MusikManchmal7 = 0;    $MusikOft7 = 0;

                //8
                $MusikNie8 = 0;     $MusikManchmal8 = 0;    $MusikOft8 = 0;

                //9
                $MusikNie9 = 0;     $MusikManchmal9 = 0;    $MusikOft9 = 0;

                //10
                $MusikNie10 = 0;     $MusikManchmal10 = 0;    $MusikOft10 = 0;

                //11
                $MusikNie11 = 0;     $MusikManchmal11 = 0;    $MusikOft11 = 0;

                //12
                $MusikNie12 = 0;     $MusikManchmal12 = 0;    $MusikOft12 = 0;

                //13
                $MusikNie13 = 0;     $MusikManchmal13 = 0;    $MusikOft13 = 0;

            
            //WozuLesen
            $LesenNie = 0;      $LesenManchmal = 0;     $LesenOft = 0;

                //5
                $LesenNie5 = 0;     $LesenManchmal5 = 0;    $LesenOft5 = 0;

                //6
                $LesenNie6 = 0;     $LesenManchmal6 = 0;    $LesenOft6 = 0;

                //7
                $LesenNie7 = 0;     $LesenManchmal7 = 0;    $LesenOft7 = 0;

                //8
                $LesenNie8 = 0;     $LesenManchmal8 = 0;    $LesenOft8 = 0;

                //9
                $LesenNie9 = 0;     $LesenManchmal9 = 0;    $LesenOft9 = 0;

                //10
                $LesenNie10 = 0;     $LesenManchmal10 = 0;    $LesenOft10 = 0;

                //11
                $LesenNie11 = 0;     $LesenManchmal11 = 0;    $LesenOft11 = 0;

                //12
                $LesenNie12 = 0;     $LesenManchmal12 = 0;    $LesenOft12 = 0;

                //13
                $LesenNie13 = 0;     $LesenManchmal13 = 0;    $LesenOft13 = 0;

                //dasssssssssssssssssssssssssssssssssssssssssssssssssssssss
                //jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
            //Aktivität

            $keineNutzung = 0;      $nurSchauen = 0;    $posteGelegentlich = 0;     $posteOft = 0;

                //Männlich
                $keineNutzungM = 0;      $nurSchauenM = 0;    $posteGelegentlichM = 0;     $posteOftM = 0;

                //Weiblich
                $keineNutzungW = 0;      $nurSchauenW = 0;    $posteGelegentlichW = 0;     $posteOftW = 0;

                //Divers
                $keineNutzungD = 0;      $nurSchauenD = 0;    $posteGelegentlichD = 0;     $posteOftD = 0;



            //nickname
            $Nickname = 0;      $vorOderNach = 0;       $vorUndNach = 0;        $mehrere = 0;

                //5
                $Nickname5 = 0;      $vorOderNach5 = 0;       $vorUndNach5 = 0;        $mehrere5 = 0;

                //6
                $Nickname6 = 0;      $vorOderNach6 = 0;       $vorUndNach6 = 0;        $mehrere6 = 0;

                //7
                $Nickname7 = 0;      $vorOderNach7 = 0;       $vorUndNach7 = 0;        $mehrere7 = 0;

                //8
                $Nickname8 = 0;      $vorOderNach8 = 0;       $vorUndNach8 = 0;        $mehrere8 = 0;

                //9
                $Nickname9 = 0;      $vorOderNach9 = 0;       $vorUndNach9 = 0;        $mehrere9 = 0;

                //10
                $Nickname10 = 0;      $vorOderNach10 = 0;       $vorUndNach10 = 0;        $mehrere10 = 0;

                //11
                $Nickname11 = 0;      $vorOderNach11 = 0;       $vorUndNach11 = 0;        $mehrere11 = 0;

                //12
                $Nickname12 = 0;      $vorOderNach12 = 0;       $vorUndNach12 = 0;        $mehrere12 = 0;

                //13
                $Nickname13 = 0;      $vorOderNach13 = 0;       $vorUndNach13 = 0;        $mehrere13 = 0;



            //Sucht
            $SJa = 0;    $Nein = 0;

                //5
                $SJa5 = 0;    $Nein5 = 0;

                //6
                $SJa6 = 0;    $Nein6 = 0;

                //7
                $SJa7 = 0;    $Nein7 = 0;

                //8
                $SJa8 = 0;    $Nein8 = 0;

                //9
                $SJa9 = 0;    $Nein9 = 0;

                //10
                $SJa10 = 0;    $Nein10 = 0;

                //11
                $SJa11 = 0;    $Nein11 = 0;

                //12
                $SJa12 = 0;    $Nein12 = 0;

                //13
                $SJa13 = 0;    $Nein13 = 0;


            //Soziale Netzwerke
            $Amazon = 0;        $SNApple = 0;     $Facebook = 0;

                $Amazon5 = 0;       $SNApple5 = 0;    $Facebook5 = 0;

                $Amazon6 = 0;       $SNApple6 = 0;    $Facebook6 = 0;

                $Amazon7 = 0;       $SNApple7 = 0;    $Facebook7 = 0;

                $Amazon8 = 0;       $SNApple8 = 0;    $Facebook8 = 0;

                $Amazon9 = 0;       $SNApple9 = 0;    $Facebook9 = 0;

                $Amazon10 = 0;       $SNApple10 = 0;    $Facebook10 = 0;

                $Amazon11 = 0;       $SNApple11 = 0;    $Facebook11 = 0;

                $Amazon12 = 0;       $SNApple12 = 0;    $Facebook12 = 0;

                $Amazon13 = 0;       $SNApple13 = 0;    $Facebook13 = 0;


            $Geocaching = 0;        $Google = 0;     $Instagram = 0;

                $Geocaching5 = 0;       $Google5 = 0;    $Instagram5 = 0;

                $Geocaching6 = 0;       $Google6 = 0;    $Instagram6 = 0;

                $Geocaching7 = 0;       $Google7 = 0;    $Instagram7 = 0;

                $Geocaching8 = 0;       $Google8 = 0;    $Instagram8 = 0;

                $Geocaching9 = 0;       $Google9 = 0;    $Instagram9 = 0;

                $Geocaching10 = 0;       $Google10 = 0;    $Instagram10 = 0;

                $Geocaching11 = 0;       $Google11 = 0;    $Instagram11 = 0;

                $Geocaching12 = 0;       $Google12 = 0;    $Instagram12 = 0;

                $Geocaching13 = 0;       $Google13 = 0;    $Instagram13 = 0;

            
            $Microsoft = 0;        $Skype = 0;     $Twitter = 0;

                $Microsoft5 = 0;       $Skype5 = 0;    $Twitter5 = 0;

                $Microsoft6 = 0;       $Skype6 = 0;    $Twitter6 = 0;

                $Microsoft7 = 0;       $Skype7 = 0;    $Twitter7 = 0;

                $Microsoft8 = 0;       $Skype8 = 0;    $Twitter8 = 0;

                $Microsoft9 = 0;       $Skype9 = 0;    $Twitter9 = 0;

                $Microsoft10 = 0;       $Skype10 = 0;    $Twitter10 = 0;

                $Microsoft11 = 0;       $Skype11 = 0;    $Twitter11 = 0;

                $Microsoft12 = 0;       $Skype12 = 0;    $Twitter12 = 0;

                $Microsoft13 = 0;       $Skype13 = 0;    $Twitter13 = 0;

            
            $WhatsApp = 0;        $YouTube = 0;     $Telegram = 0;

                $WhatsApp5 = 0;       $YouTube5 = 0;    $Telegram5 = 0;

                $WhatsApp6 = 0;       $YouTube6 = 0;    $Telegram6 = 0;

                $WhatsApp7 = 0;       $YouTube7 = 0;    $Telegram7 = 0;

                $WhatsApp8 = 0;       $YouTube8 = 0;    $Telegram8 = 0;

                $WhatsApp9 = 0;       $YouTube9 = 0;    $Telegram9 = 0;

                $WhatsApp10 = 0;       $YouTube10 = 0;    $Telegram10 = 0;

                $WhatsApp11 = 0;       $YouTube11 = 0;    $Telegram11 = 0;

                $WhatsApp12 = 0;       $YouTube12 = 0;    $Telegram12 = 0;

                $WhatsApp13 = 0;       $YouTube13 = 0;    $Telegram13 = 0;

                
            $Netflix = 0;        $Spotify = 0;     $Snapchat = 0;

                $Netflix5 = 0;       $Spotify5 = 0;    $Snapchat5 = 0;

                $Netflix6 = 0;       $Spotify6 = 0;    $Snapchat6 = 0;

                $Netflix7 = 0;       $Spotify7 = 0;    $Snapchat7 = 0;

                $Netflix8 = 0;       $Spotify8 = 0;    $Snapchat8 = 0;

                $Netflix9 = 0;       $Spotify9 = 0;    $Snapchat9 = 0;

                $Netflix10 = 0;       $Spotify10 = 0;    $Snapchat10 = 0;

                $Netflix11 = 0;       $Spotify11 = 0;    $Snapchat11 = 0;

                $Netflix12 = 0;       $Spotify12 = 0;    $Snapchat12 = 0;

                $Netflix13 = 0;       $Spotify13 = 0;    $Snapchat13 = 0;


            $TikTok = 0;        $Discord = 0;     $Steam = 0;

                $TikTok5 = 0;       $Discord5 = 0;    $Steam5 = 0;

                $TikTok6 = 0;       $Discord6 = 0;    $Steam6 = 0;

                $TikTok7 = 0;       $Discord7 = 0;    $Steam7 = 0;

                $TikTok8 = 0;       $Discord8 = 0;    $Steam8 = 0;

                $TikTok9 = 0;       $Discord9 = 0;    $Steam9 = 0;

                $TikTok10 = 0;       $Discord10 = 0;    $Steam10 = 0;

                $TikTok11 = 0;       $Discord11 = 0;    $Steam11 = 0;

                $TikTok12 = 0;       $Discord12 = 0;    $Steam12 = 0;

                $TikTok13 = 0;       $Discord13 = 0;    $Steam13 = 0;


            $Pinterest = 0;        $Reddit = 0;     $Threema = 0;

                $Pinterest5 = 0;       $Reddit5 = 0;    $Threema5 = 0;

                $Pinterest6 = 0;       $Reddit6 = 0;    $Threema6 = 0;

                $Pinterest7 = 0;       $Reddit7 = 0;    $Threema7 = 0;

                $Pinterest8 = 0;       $Reddit8 = 0;    $Threema8 = 0;

                $Pinterest9 = 0;       $Reddit9 = 0;    $Threema9 = 0;

                $Pinterest10 = 0;       $Reddit10 = 0;    $Threema10 = 0;

                $Pinterest11 = 0;       $Reddit11 = 0;    $Threema11 = 0;

                $Pinterest12 = 0;       $Reddit12 = 0;    $Threema12 = 0;

                $Pinterest13 = 0;       $Reddit13 = 0;    $Threema13 = 0;


            $Viber = 0;        $Ebay = 0;     

                $Viber5 = 0;       $Ebay5 = 0;   

                $Viber6 = 0;       $Ebay6 = 0;    

                $Viber7 = 0;       $Ebay7 = 0;    

                $Viber8 = 0;       $Ebay8 = 0;    

                $Viber9 = 0;       $Ebay9 = 0;    

                $Viber10 = 0;       $Ebay10 = 0;    

                $Viber11 = 0;       $Ebay11 = 0;    

                $Viber12 = 0;       $Ebay12 = 0;    

                $Viber13 = 0;       $Ebay13 = 0;    

            
            /*===================
            </Variablen erstellen>
            ===================*/

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    switch($row["Gender"]){
                        case "m":
                            $m++;
                            break;
                        case "f":
                            $f++;
                            break;
                        case "d":
                            $d++;
                            break;
                    }
                    


                    switch($row["Klasse"]){
                        case "5":
                            $fünfK++;
                            if($row["Gender"] == "m"){$MfünfK++;}
                            if($row["Gender"] == "f"){$WsechsK++;}
                            if($row["Gender"] == "d"){$DfünfK++;}
                            break;
                        case "6":
                            $sechsK++;
                            if($row["Gender"] == "m"){$MsechsK++;}
                            if($row["Gender"] == "f"){$WsechsK++;}
                            if($row["Gender"] == "d"){$DsechsK++;}
                            break;
                        case "7":
                            $siebenK++;
                            if($row["Gender"] == "m"){$MsiebenK++;}
                            if($row["Gender"] == "f"){$WsiebenK++;}
                            if($row["Gender"] == "d"){$DsiebenK++;}
                            break;
                        case "8":
                            $achtK++;
                            if($row["Gender"] == "m"){$MachtK++;}
                            if($row["Gender"] == "f"){$WachtK++;}
                            if($row["Gender"] == "d"){$DachtK++;}
                            break;
                        case "9":
                            $neunK++;
                            if($row["Gender"] == "m"){$MneunK++;}
                            if($row["Gender"] == "f"){$WneunK++;}
                            if($row["Gender"] == "d"){$DneunK++;}
                            break;
                        case "10":
                            $zehnK++;
                            if($row["Gender"] == "m"){$MzehnK++;}
                            if($row["Gender"] == "f"){$WzehnK++;}
                            if($row["Gender"] == "d"){$DzehnK++;}
                            break;
                        case "11":
                            $elfK++;
                            if($row["Gender"] == "m"){$MelfK++;}
                            if($row["Gender"] == "f"){$WelfK++;}
                            if($row["Gender"] == "d"){$DelfK++;}
                            break;
                        case "12":
                            $zwölfK++;
                            if($row["Gender"] == "m"){$MzwölfK++;}
                            if($row["Gender"] == "f"){$WzwölfK++;}
                            if($row["Gender"] == "d"){$DzwölfK++;}
                            break;
                        case "13":
                            $dreizehnK++;
                            if($row["Gender"] == "m"){$MdreizehnK++;}
                            if($row["Gender"] == "f"){$WdreizehnK++;}
                            if($row["Gender"] == "d"){$DdreizehnK++;}
                            break;
                    }



                    switch($row["Zugang"]){
                        case "Ja":
                            $Ja++;
                            switch($row["Klasse"]){
                                case "5":
                                    $Ja5++;
                                    break;
                                case "6":
                                    $Ja6++;
                                    break;
                                case "7":
                                    $Ja7++;
                                    break;
                                case "8":
                                    $Ja8++;
                                    break;
                                case "9":
                                    $Ja9++;
                                    break;
                                case "10":
                                    $Ja10++;
                                    break;
                                case "11":
                                    $Ja11++;
                                    break;
                                case "12":
                                    $Ja12++;
                                    break;
                                case "13":
                                    $Ja13++;
                                    break;
                            }
                            break;
                        case "Familie":
                            $Fam++;
                            switch($row["Klasse"]){
                                case "5":
                                    $Fam5++;
                                    break;
                                case "6":
                                    $Fam6++;
                                    break;
                                case "7":
                                    $Fam7++;
                                    break;
                                case "8":
                                    $Fam8++;
                                    break;
                                case "9":
                                    $Fam9++;
                                    break;
                                case "10":
                                    $Fam10++;
                                    break;
                                case "11":
                                    $Fam11++;
                                    break;
                                case "12":
                                    $Fam12++;
                                    break;
                                case "13":
                                    $Fam13++;
                                    break;
                            }
                            break;
                        case "Nein":
                            $No++;
                            switch($row["Klasse"]){
                                case "5":
                                    $No5++;
                                    break;
                                case "6":
                                    $No6++;
                                    break;
                                case "7":
                                    $No7++;
                                    break;
                                case "8":
                                    $No8++;
                                    break;
                                case "9":
                                    $No9++;
                                    break;
                                case "10":
                                    $No10++;
                                    break;
                                case "11":
                                    $No11++;
                                    break;
                                case "12":
                                    $No12++;
                                    break;
                                case "13":
                                    $No13++;
                                    break;
                            }
                            break;
                    }



                    switch($row["Marke"]){
                        case "Apple":
                            $Apple++;
                            break;
                        case "Blackberry":
                            $Blackberry++;
                            break;
                        case "Google":
                            $Google++;
                            break;
                        case "HTC":
                            $HTC++;
                            break;
                        case "LG":
                            $LG++;
                            break;
                        case "Samsung":
                            $Samsung++;
                            break;
                        case "Sony":
                            $Sony++;
                            break;
                        case "OnePlus":
                            $OnePlus++;
                            break;
                        case "Motorola":
                            $Motorola++;
                            break;
                        case "Huawei":
                            $Huawei++;
                            break;
                        case "Nokia":
                            $Nokia++;
                            break;
                        case "Xiaomi":
                            $Xiaomi++;
                            break;    
                            
                    }
                
                
                switch($row["Zeit"]){
                    case "less30":
                        $less30++;
                        switch($row["Gender"]){
                            case "m":
                                $less30M++;
                                break;
                            case "f":
                                $less30W++;
                                break;
                            case "d";
                                $less30D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $less305++;
                                break;
                            case "6":
                                $less306++;
                                break;
                            case "7":
                                $less307++;
                                break;
                            case "8":
                                $less308++;
                                break;
                            case "9":
                                $less309++;
                                break;
                            case "10":
                                $less3010++;
                                break;
                            case "11":
                                $less3011++;
                                break;
                            case "12":
                                $less3012++;
                                break;
                            case "13":
                                $less3013++;
                                break;
                        }
                        break;
                    case "30-60":
                        $dreißig60++;
                        switch($row["Gender"]){
                            case "m":
                                $dreißig60M++;
                                break;
                            case "f":
                                $dreißig60W++;
                                break;
                            case "d";
                                $dreißig60D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $dreißig605++;
                                break;
                            case "6":
                                $dreißig606++;
                                break;
                            case "7":
                                $dreißig607++;
                                break;
                            case "8":
                                $dreißig608++;
                                break;
                            case "9":
                                $dreißig609++;
                                break;
                            case "10":
                                $dreißig6010++;
                                break;
                            case "11":
                                $dreißig6011++;
                                break;
                            case "12":
                                $dreißig6012++;
                                break;
                            case "13":
                                $dreißig6013++;
                                break;
                        }
                        break;
                    case "60-120":
                        $sechzig120++;
                        switch($row["Gender"]){
                            case "m":
                                $sechzig120M++;
                                break;
                            case "f":
                                $sechzig120W++;
                                break;
                            case "d";
                                $sechzig120D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $sechzig1205++;
                                break;
                            case "6":
                                $sechzig1206++;
                                break;
                            case "7":
                                $sechzig1207++;
                                break;
                            case "8":
                                $sechzig1208++;
                                break;
                            case "9":
                                $sechzig1209++;
                                break;
                            case "10":
                                $sechzig12010++;
                                break;
                            case "11":
                                $sechzig12011++;
                                break;
                            case "12":
                                $sechzig12012++;
                                break;
                            case "13":
                                $sechzig12013++;
                                break;
                        }
                        break;
                    case "120-180":
                        $einszwanzig180++;
                        switch($row["Gender"]){
                            case "m":
                                $einszwanzig180M++;
                                break;
                            case "f":
                                $einszwanzig180W++;
                                break;
                            case "d";
                                $einszwanzig180D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $einszwanzig1805++;
                                break;
                            case "6":
                                $einszwanzig1806++;
                                break;
                            case "7":
                                $einszwanzig1807++;
                                break;
                            case "8":
                                $einszwanzig1808++;
                                break;
                            case "9":
                                $einszwanzig1809++;
                                break;
                            case "10":
                                $einszwanzig18010++;
                                break;
                            case "11":
                                $einszwanzig18011++;
                                break;
                            case "12":
                                $einszwanzig18012++;
                                break;
                            case "13":
                                $einszwanzig18013++;
                                break;
                        }
                        break;
                    case "180-240":
                        $einsachtzig240++;
                        switch($row["Gender"]){
                            case "m":
                                $einsachtzig240M++;
                                break;
                            case "f":
                                $einsachtzig240W++;
                                break;
                            case "d";
                                $einsachtzig240D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $einsachtzig2405++;
                                break;
                            case "6":
                                $einsachtzig2406++;
                                break;
                            case "7":
                                $einsachtzig2407++;
                                break;
                            case "8":
                                $einsachtzig2408++;
                                break;
                            case "9":
                                $einsachtzig2409++;
                                break;
                            case "10":
                                $einsachtzig24010++;
                                break;
                            case "11":
                                $einsachtzig24011++;
                                break;
                            case "12":
                                $einsachtzig24012++;
                                break;
                            case "13":
                                $einsachtzig24013++;
                                break;
                        }
                        break;
                    case "more240":
                        $more240++;
                        switch($row["Gender"]){
                            case "m":
                                $more240M++;
                                break;
                            case "f":
                                $more240W++;
                                break;
                            case "d";
                                $more240D++;
                                break;
                        }
                        switch($row["Klasse"]){
                            case "5":
                                $more2405++;
                                break;
                            case "6":
                                $more2406++;
                                break;
                            case "7":
                                $more2407++;
                                break;
                            case "8":
                                $more2408++;
                                break;
                            case "9":
                                $more2409++;
                                break;
                            case "10":
                                $more24010++;
                                break;
                            case "11":
                                $more24011++;
                                break;
                            case "12":
                                $more24012++;
                                break;
                            case "13":
                                $more24013++;
                                break;
                        }
                        break;
                        
                }


                switch($row["activity"]){
                    case "kein":
                        $keineNutzung++;
                        switch($row["Gender"]){
                            case "m":
                                $keineNutzungM++;
                                break;
                            case "f":  
                                $keineNutzungW++;
                                break;
                            case "d":
                                $keineNutzungD++;
                                break;
                        }
                        break;
                    case "nurSchauen":
                        $nurSchauen++;
                        switch($row["Gender"]){
                            case "m":
                                $nurSchauenM++;
                                break;
                            case "f":  
                                $nurSchauenW++;
                                break;
                            case "d":
                                $nurSchauenD++;
                                break;
                        }
                        break;
                    case "posteAbUndZu":
                        $posteGelegentlich++;
                        switch($row["Gender"]){
                            case "m":
                                $posteGelegentlichM++;
                                break;
                            case "f":  
                                $posteGelegentlichW++;
                                break;
                            case "d":
                                $posteGelegentlichD++;
                                break;
                        }
                        break;
                    case "posteHäufig":
                        $posteOft++;
                        switch($row["Gender"]){
                            case "m":
                                $posteOftM++;
                                break;
                            case "f":  
                                $posteOftW++;
                                break;
                            case "d":
                                $posteOftD++;
                                break;
                        }
                        break;
                }


                switch($row["nickname"]){
                    case "nickname":
                        $Nickname++;
                        switch($row["Klasse"]){
                            case "5":
                                $Nickname5++;
                                break;
                            case "6":
                                $Nickname6++;
                                break;
                            case "7":
                                $Nickname7++;
                                break;
                            case "8":
                                $Nickname8++;
                                break;
                            case "9":
                                $Nickname9++;
                                break;
                            case "10":
                                $Nickname10++;
                                break;
                            case "11":
                                $Nickname11++;
                                break;
                            case "12":
                                $Nickname12++;
                                break;
                            case "13":
                                $Nickname13++;
                                break;
                        }
                        break;
                    case "nurVorOderNach":
                        $vorOderNach++;
                        switch($row["Klasse"]){
                            case "5":
                                $vorOderNach5++;
                                break;
                            case "6":
                                $vorOderNach6++;
                                break;
                            case "7":
                                $vorOderNach7++;
                                break;
                            case "8":
                                $vorOderNach8++;
                                break;
                            case "9":
                                $vorOderNach9++;
                                break;
                            case "10":
                                $vorOderNach10++;
                                break;
                            case "11":
                                $vorOderNach11++;
                                break;
                            case "12":
                                $vorOderNach12++;
                                break;
                            case "13":
                                $vorOderNach13++;
                                break;
                        }
                        break;
                    case "VorUndNach":
                        $vorUndNach++;
                        switch($row["Klasse"]){
                            case "5":
                                $vorUndNach5++;
                                break;
                            case "6":
                                $vorUndNach6++;
                                break;
                            case "7":
                                $vorUndNach7++;
                                break;
                            case "8":
                                $vorUndNach8++;
                                break;
                            case "9":
                                $vorUndNach9++;
                                break;
                            case "10":
                                $vorUndNach10++;
                                break;
                            case "11":
                                $vorUndNach11++;
                                break;
                            case "12":
                                $vorUndNach12++;
                                break;
                            case "13":
                                $vorUndNach13++;
                                break;
                        }
                        break;
                    case "Verschiedene":
                        $mehrere++;
                        switch($row["Klasse"]){
                            case "5":
                                $mehrere5++;
                                break;
                            case "6":
                                $mehrere6++;
                                break;
                            case "7":
                                $mehrere7++;
                                break;
                            case "8":
                                $mehrere8++;
                                break;
                            case "9":
                                $mehrere9++;
                                break;
                            case "10":
                                $mehrere10++;
                                break;
                            case "11":
                                $mehrere11++;
                                break;
                            case "12":
                                $mehrere12++;
                                break;
                            case "13":
                                $mehrere13++;
                                break;
                        }

                }

                switch($row["sucht"]){
                    case "Ja":
                        $SJa++;
                        switch($row["Klasse"]){
                            case "5":
                                $SJa5++;
                                break;
                            case "6":
                                $SJa6++;
                                break;
                            case "7":
                                $SJa7++;
                                break;
                            case "8":
                                $SJa8++;
                                break;
                            case "9":
                                $SJa9++;
                                break;
                            case "10":
                                $SJa10++;
                                break;
                            case "11":
                                $SJa11++;
                                break;
                            case "12":
                                $SJa12++;
                                break;
                            case "13":
                                $SJa13++;
                                break;
                        }
                        break;
                    case "Nein":
                    $Nein++;
                    switch($row["Klasse"]){
                        case "5":
                            $Nein5++;
                            break;
                        case "6":
                            $Nein6++;
                            break;
                        case "7":
                            $Nein7++;
                            break;
                        case "8":
                            $Nein8++;
                            break;
                        case "9":
                            $Nein9++;
                            break;
                        case "10":
                            $Nein10++;
                            break;
                        case "11":
                            $Nein11++;
                            break;
                        case "12":
                            $Nein12++;
                            break;
                        case "13":
                            $Nein13++;
                            break;
                        }
                        break;
                }

                switch($row["WoSchule"]){
                    case "nie":
                        $SchuleNie++;
                        switch($row["Klasse"]){
                            case "5":
                                $SchuleNie5++;
                                break;
                            case "6":
                                $SchuleNie6++;
                                break;
                            case "7":
                                $SchuleNie7++;
                                break;
                            case "8":
                                $SchuleNie8++;
                                break;
                            case "9":
                                $SchuleNie9++;
                                break;
                            case "10":
                                $SchuleNie10++;
                                break;
                            case "11":
                                $SchuleNie11++;
                                break;
                            case "12":
                                $SchuleNie12++;
                                break;
                            case "13":
                                $SchuleNie13++;
                                break;
                            }
                        break;
                    case "manchmal":
                        $SchuleManchmal++;
                        switch($row["Klasse"]){
                            case "5":
                                $SchuleManchmal5++;
                                break;
                            case "6":
                                $SchuleManchmal6++;
                                break;
                            case "7":
                                $SchuleManchmal7++;
                                break;
                            case "8":
                                $SchuleManchmal8++;
                                break;
                            case "9":
                                $SchuleManchmal9++;
                                break;
                            case "10":
                                $SchuleManchmal10++;
                                break;
                            case "11":
                                $SchuleManchmal11++;
                                break;
                            case "12":
                                $SchuleManchmal12++;
                                break;
                            case "13":
                                $SchuleManchmal13++;
                                break;
                            }
                        break;
                    case "oft":
                        $SchuleOft++;
                        switch($row["Klasse"]){
                            case "5":
                                $SchuleOft5++;
                                break;
                            case "6":
                                $SchuleOft6++;
                                break;
                            case "7":
                                $SchuleOft7++;
                                break;
                            case "8":
                                $SchuleOft8++;
                                break;
                            case "9":
                                $SchuleOft9++;
                                break;
                            case "10":
                                $SchuleOft10++;
                                break;
                            case "11":
                                $SchuleOft11++;
                                break;
                            case "12":
                                $SchuleOft12++;
                                break;
                            case "13":
                                $SchuleOft13++;
                                break;
                                }
                            break;
                        }

                    switch($row["WoSport"]){
                        case "nie":
                            $SportNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SportNie5++;
                                    break;
                                case "6":
                                    $SportNie6++;
                                    break;
                                case "7":
                                    $SportNie7++;
                                    break;
                                case "8":
                                    $SportNie8++;
                                    break;
                                case "9":
                                    $SportNie9++;
                                    break;
                                case "10":
                                    $SportNie10++;
                                    break;
                                case "11":
                                    $SportNie11++;
                                    break;
                                case "12":
                                    $SportNie12++;
                                    break;
                                case "13":
                                    $SportNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $SportManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SportManchmal5++;
                                    break;
                                case "6":
                                    $SportManchmal6++;
                                    break;
                                case "7":
                                    $SportManchmal7++;
                                    break;
                                case "8":
                                    $SportManchmal8++;
                                    break;
                                case "9":
                                    $SportManchmal9++;
                                    break;
                                case "10":
                                    $SportManchmal10++;
                                    break;
                                case "11":
                                    $SportManchmal11++;
                                    break;
                                case "12":
                                    $SportManchmal12++;
                                    break;
                                case "13":
                                    $SportManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $SportOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SportOft5++;
                                    break;
                                case "6":
                                    $SportOft6++;
                                    break;
                                case "7":
                                    $SportOft7++;
                                    break;
                                case "8":
                                    $SportOft8++;
                                    break;
                                case "9":
                                    $SportOft9++;
                                    break;
                                case "10":
                                    $SportOft10++;
                                    break;
                                case "11":
                                    $SportOft11++;
                                    break;
                                case "12":
                                    $SportOft12++;
                                    break;
                                case "13":
                                    $SportOft13++;
                                    break;
                                    }
                                break;
                            }

                            switch($row["WoUnterwegs"]){
                                case "nie":
                                    $WegsNie++;
                                    switch($row["Klasse"]){
                                        case "5":
                                            $WegsNie5++;
                                            break;
                                        case "6":
                                            $WegsNie6++;
                                            break;
                                        case "7":
                                            $WegsNie7++;
                                            break;
                                        case "8":
                                            $WegsNie8++;
                                            break;
                                        case "9":
                                            $WegsNie9++;
                                            break;
                                        case "10":
                                            $WegsNie10++;
                                            break;
                                        case "11":
                                            $WegsNie11++;
                                            break;
                                        case "12":
                                            $WegsNie12++;
                                            break;
                                        case "13":
                                            $WegsNie13++;
                                            break;
                                        }
                                    break;
                                case "manchmal":
                                    $WegsManchmal++;
                                    switch($row["Klasse"]){
                                        case "5":
                                            $WegsManchmal5++;
                                            break;
                                        case "6":
                                            $WegsManchmal6++;
                                            break;
                                        case "7":
                                            $WegsManchmal7++;
                                            break;
                                        case "8":
                                            $WegsManchmal8++;
                                            break;
                                        case "9":
                                            $WegsManchmal9++;
                                            break;
                                        case "10":
                                            $WegsManchmal10++;
                                            break;
                                        case "11":
                                            $WegsManchmal11++;
                                            break;
                                        case "12":
                                            $WegsManchmal12++;
                                            break;
                                        case "13":
                                            $WegsManchmal13++;
                                            break;
                                        }
                                    break;
                                case "oft":
                                    $WegsOft++;
                                    switch($row["Klasse"]){
                                        case "5":
                                            $WegsOft5++;
                                            break;
                                        case "6":
                                            $WegsOft6++;
                                            break;
                                        case "7":
                                            $WegsOft7++;
                                            break;
                                        case "8":
                                            $WegsOft8++;
                                            break;
                                        case "9":
                                            $WegsOft9++;
                                            break;
                                        case "10":
                                            $WegsOft10++;
                                            break;
                                        case "11":
                                            $WegsOft11++;
                                            break;
                                        case "12":
                                            $WegsOft12++;
                                            break;
                                        case "13":
                                            $WegsOft13++;
                                            break;
                                            }
                                        break;
                                    }
                                    switch($row["WoZuhause"]){
                                        case "nie":
                                            $ZuhauseNie++;
                                            switch($row["Klasse"]){
                                                case "5":
                                                    $ZuhauseNie5++;
                                                    break;
                                                case "6":
                                                    $ZuhauseNie6++;
                                                    break;
                                                case "7":
                                                    $ZuhauseNie7++;
                                                    break;
                                                case "8":
                                                    $ZuhauseNie8++;
                                                    break;
                                                case "9":
                                                    $ZuhauseNie9++;
                                                    break;
                                                case "10":
                                                    $ZuhauseNie10++;
                                                    break;
                                                case "11":
                                                    $ZuhauseNie11++;
                                                    break;
                                                case "12":
                                                    $ZuhauseNie12++;
                                                    break;
                                                case "13":
                                                    $ZuhauseNie13++;
                                                    break;
                                                }
                                            break;
                                        case "manchmal":
                                            $ZuhauseManchmal++;
                                            switch($row["Klasse"]){
                                                case "5":
                                                    $ZuhauseManchmal5++;
                                                    break;
                                                case "6":
                                                    $ZuhauseManchmal6++;
                                                    break;
                                                case "7":
                                                    $ZuhauseManchmal7++;
                                                    break;
                                                case "8":
                                                    $ZuhauseManchmal8++;
                                                    break;
                                                case "9":
                                                    $ZuhauseManchmal9++;
                                                    break;
                                                case "10":
                                                    $ZuhauseManchmal10++;
                                                    break;
                                                case "11":
                                                    $ZuhauseManchmal11++;
                                                    break;
                                                case "12":
                                                    $ZuhauseManchmal12++;
                                                    break;
                                                case "13":
                                                    $ZuhauseManchmal13++;
                                                    break;
                                                }
                                            break;
                                        case "oft":
                                            $ZuhauseOft++;
                                            switch($row["Klasse"]){
                                                case "5":
                                                    $ZuhauseOft5++;
                                                    break;
                                                case "6":
                                                    $ZuhauseOft6++;
                                                    break;
                                                case "7":
                                                    $ZuhauseOft7++;
                                                    break;
                                                case "8":
                                                    $ZuhauseOft8++;
                                                    break;
                                                case "9":
                                                    $ZuhauseOft9++;
                                                    break;
                                                case "10":
                                                    $ZuhauseOft10++;
                                                    break;
                                                case "11":
                                                    $ZuhauseOft11++;
                                                    break;
                                                case "12":
                                                    $ZuhauseOft12++;
                                                    break;
                                                case "13":
                                                    $ZuhauseOft13++;
                                                    break;
                                                    }
                                                break;
                                            }

                                            switch($row["WozuChat"]){
                                                case "nie":
                                                    $ChatNie++;
                                                    switch($row["Klasse"]){
                                                        case "5":
                                                            $ChatNie5++;
                                                            break;
                                                        case "6":
                                                            $ChatNie6++;
                                                            break;
                                                        case "7":
                                                            $ChatNie7++;
                                                            break;
                                                        case "8":
                                                            $ChatNie8++;
                                                            break;
                                                        case "9":
                                                            $ChatNie9++;
                                                            break;
                                                        case "10":
                                                            $ChatNie10++;
                                                            break;
                                                        case "11":
                                                            $ChatNie11++;
                                                            break;
                                                        case "12":
                                                            $ChatNie12++;
                                                            break;
                                                        case "13":
                                                            $ChatNie13++;
                                                            break;
                                                        }
                                                    break;
                                                case "manchmal":
                                                    $ChatManchmal++;
                                                    switch($row["Klasse"]){
                                                        case "5":
                                                            $ChatManchmal5++;
                                                            break;
                                                        case "6":
                                                            $ChatManchmal6++;
                                                            break;
                                                        case "7":
                                                            $ChatManchmal7++;
                                                            break;
                                                        case "8":
                                                            $ChatManchmal8++;
                                                            break;
                                                        case "9":
                                                            $ChatManchmal9++;
                                                            break;
                                                        case "10":
                                                            $ChatManchmal10++;
                                                            break;
                                                        case "11":
                                                            $ChatManchmal11++;
                                                            break;
                                                        case "12":
                                                            $ChatManchmal12++;
                                                            break;
                                                        case "13":
                                                            $ChatManchmal13++;
                                                            break;
                                                        }
                                                    break;
                                                case "oft":
                                                    $ChatOft++;
                                                    switch($row["Klasse"]){
                                                        case "5":
                                                            $ChatOft5++;
                                                            break;
                                                        case "6":
                                                            $ChatOft6++;
                                                            break;
                                                        case "7":
                                                            $ChatOft7++;
                                                            break;
                                                        case "8":
                                                            $ChatOft8++;
                                                            break;
                                                        case "9":
                                                            $ChatOft9++;
                                                            break;
                                                        case "10":
                                                            $ChatOft10++;
                                                            break;
                                                        case "11":
                                                            $ChatOft11++;
                                                            break;
                                                        case "12":
                                                            $ChatOft12++;
                                                            break;
                                                        case "13":
                                                            $ChatOft13++;
                                                            break;
                                                            }
                                                        break;
                                                    }

                                                    switch($row["WozuMail"]){
                                                        case "nie":
                                                            $MailNie++;
                                                            switch($row["Klasse"]){
                                                                case "5":
                                                                    $MailNie5++;
                                                                    break;
                                                                case "6":
                                                                    $MailNie6++;
                                                                    break;
                                                                case "7":
                                                                    $MailNie7++;
                                                                    break;
                                                                case "8":
                                                                    $MailNie8++;
                                                                    break;
                                                                case "9":
                                                                    $MailNie9++;
                                                                    break;
                                                                case "10":
                                                                    $MailNie10++;
                                                                    break;
                                                                case "11":
                                                                    $MailNie11++;
                                                                    break;
                                                                case "12":
                                                                    $MailNie12++;
                                                                    break;
                                                                case "13":
                                                                    $MailNie13++;
                                                                    break;
                                                                }
                                                            break;
                                                        case "manchmal":
                                                            $MailManchmal++;
                                                            switch($row["Klasse"]){
                                                                case "5":
                                                                    $MailManchmal5++;
                                                                    break;
                                                                case "6":
                                                                    $MailManchmal6++;
                                                                    break;
                                                                case "7":
                                                                    $MailManchmal7++;
                                                                    break;
                                                                case "8":
                                                                    $MailManchmal8++;
                                                                    break;
                                                                case "9":
                                                                    $MailManchmal9++;
                                                                    break;
                                                                case "10":
                                                                    $MailManchmal10++;
                                                                    break;
                                                                case "11":
                                                                    $MailManchmal11++;
                                                                    break;
                                                                case "12":
                                                                    $MailManchmal12++;
                                                                    break;
                                                                case "13":
                                                                    $MailManchmal13++;
                                                                    break;
                                                                }
                                                            break;
                                                        case "oft":
                                                            $MailOft++;
                                                            switch($row["Klasse"]){
                                                                case "5":
                                                                    $MailOft5++;
                                                                    break;
                                                                case "6":
                                                                    $MailOft6++;
                                                                    break;
                                                                case "7":
                                                                    $MailOft7++;
                                                                    break;
                                                                case "8":
                                                                    $MailOft8++;
                                                                    break;
                                                                case "9":
                                                                    $MailOft9++;
                                                                    break;
                                                                case "10":
                                                                    $MailOft10++;
                                                                    break;
                                                                case "11":
                                                                    $MailOft11++;
                                                                    break;
                                                                case "12":
                                                                    $MailOft12++;
                                                                    break;
                                                                case "13":
                                                                    $MailOft13++;
                                                                    break;
                                                                    }
                                                                break;
                                                            }
                                                            switch($row["WozuPhone"]){
                                                                case "nie":
                                                                    $CallNie++;
                                                                    switch($row["Klasse"]){
                                                                        case "5":
                                                                            $CallNie5++;
                                                                            break;
                                                                        case "6":
                                                                            $CallNie6++;
                                                                            break;
                                                                        case "7":
                                                                            $CallNie7++;
                                                                            break;
                                                                        case "8":
                                                                            $CallNie8++;
                                                                            break;
                                                                        case "9":
                                                                            $CallNie9++;
                                                                            break;
                                                                        case "10":
                                                                            $CallNie10++;
                                                                            break;
                                                                        case "11":
                                                                            $CallNie11++;
                                                                            break;
                                                                        case "12":
                                                                            $CallNie12++;
                                                                            break;
                                                                        case "13":
                                                                            $CallNie13++;
                                                                            break;
                                                                        }
                                                                    break;
                                                                case "manchmal":
                                                                    $CallManchmal++;
                                                                    switch($row["Klasse"]){
                                                                        case "5":
                                                                            $CallManchmal5++;
                                                                            break;
                                                                        case "6":
                                                                            $CallManchmal6++;
                                                                            break;
                                                                        case "7":
                                                                            $CallManchmal7++;
                                                                            break;
                                                                        case "8":
                                                                            $CallManchmal8++;
                                                                            break;
                                                                        case "9":
                                                                            $CallManchmal9++;
                                                                            break;
                                                                        case "10":
                                                                            $CallManchmal10++;
                                                                            break;
                                                                        case "11":
                                                                            $CallManchmal11++;
                                                                            break;
                                                                        case "12":
                                                                            $CallManchmal12++;
                                                                            break;
                                                                        case "13":
                                                                            $CallManchmal13++;
                                                                            break;
                                                                        }
                                                                    break;
                                                                case "oft":
                                                                    $CallOft++;
                                                                    switch($row["Klasse"]){
                                                                        case "5":
                                                                            $CallOft5++;
                                                                            break;
                                                                        case "6":
                                                                            $CallOft6++;
                                                                            break;
                                                                        case "7":
                                                                            $CallOft7++;
                                                                            break;
                                                                        case "8":
                                                                            $CallOft8++;
                                                                            break;
                                                                        case "9":
                                                                            $CallOft9++;
                                                                            break;
                                                                        case "10":
                                                                            $CallOft10++;
                                                                            break;
                                                                        case "11":
                                                                            $CallOft11++;
                                                                            break;
                                                                        case "12":
                                                                            $CallOft12++;
                                                                            break;
                                                                        case "13":
                                                                            $CallOft13++;
                                                                            break;
                                                                            }
                                                                        break;
                                                                    }
                                        switch($row["WozuSNetwork"]){
                                            case "nie":
                                                $SMediaNie++;
                                                switch($row["Klasse"]){
                                                    case "5":
                                                        $SMediaNie5++;
                                                        break;
                                                    case "6":
                                                        $SMediaNie6++;
                                                        break;
                                                    case "7":
                                                        $SMediaNie7++;
                                                        break;
                                                    case "8":
                                                        $SMediaNie8++;
                                                        break;
                                                    case "9":
                                                        $SMediaNie9++;
                                                        break;
                                                    case "10":
                                                        $SMediaNie10++;
                                                        break;
                                                    case "11":
                                                        $SMediaNie11++;
                                                        break;
                                                    case "12":
                                                        $SMediaNie12++;
                                                        break;
                                                    case "13":
                                                        $SMediaNie13++;
                                                        break;
                                                    }
                                                break;
                                            case "manchmal":
                                                $SMediaManchmal++;
                                                switch($row["Klasse"]){
                                                    case "5":
                                                        $SMediaManchmal5++;
                                                        break;
                                                    case "6":
                                                        $SMediaManchmal6++;
                                                        break;
                                                    case "7":
                                                        $SMediaManchmal7++;
                                                        break;
                                                    case "8":
                                                        $SMediaManchmal8++;
                                                        break;
                                                    case "9":
                                                        $SMediaManchmal9++;
                                                        break;
                                                    case "10":
                                                        $SMediaManchmal10++;
                                                        break;
                                                    case "11":
                                                        $SMediaManchmal11++;
                                                        break;
                                                    case "12":
                                                        $SMediaManchmal12++;
                                                        break;
                                                    case "13":
                                                        $SMediaManchmal13++;
                                                        break;
                                                    }
                                                break;
                                            case "oft":
                                                $SMediaOft++;
                                                switch($row["Klasse"]){
                                                    case "5":
                                                        $SMediaOft5++;
                                                        break;
                                                    case "6":
                                                        $SMediaOft6++;
                                                        break;
                                                    case "7":
                                                        $SMediaOft7++;
                                                        break;
                                                    case "8":
                                                        $SMediaOft8++;
                                                        break;
                                                    case "9":
                                                        $SMediaOft9++;
                                                        break;
                                                    case "10":
                                                        $SMediaOft10++;
                                                        break;
                                                    case "11":
                                                        $SMediaOft11++;
                                                        break;
                                                    case "12":
                                                        $SMediaOft12++;
                                                        break;
                                                    case "13":
                                                        $SMediaOft13++;
                                                        break;
                                                        }
                                                    break;
                                                }

                    switch($row["WozuNachschlag"]){
                        case "nie":
                            $NSWnie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NSWnie5++;
                                    break;
                                case "6":
                                    $NSWnie6++;
                                    break;
                                case "7":
                                    $NSWnie7++;
                                    break;
                                case "8":
                                    $NSWnie8++;
                                    break;
                                case "9":
                                    $NSWnie9++;
                                    break;
                                case "10":
                                    $NSWnie10++;
                                    break;
                                case "11":
                                    $NSWnie11++;
                                    break;
                                case "12":
                                    $NSWnie12++;
                                    break;
                                case "13":
                                    $NSWnie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $NSWmanchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NSWmanchmal5++;
                                    break;
                                case "6":
                                    $NSWmanchmal6++;
                                    break;
                                case "7":
                                    $NSWmanchmal7++;
                                    break;
                                case "8":
                                    $NSWmanchmal8++;
                                    break;
                                case "9":
                                    $NSWmanchmal9++;
                                    break;
                                case "10":
                                    $NSWmanchmal10++;
                                    break;
                                case "11":
                                    $NSWmanchmal11++;
                                    break;
                                case "12":
                                    $NSWmanchmal12++;
                                    break;
                                case "13":
                                    $NSWmanchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $NSWoft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NSWoft5++;
                                    break;
                                case "6":
                                    $NSWoft6++;
                                    break;
                                case "7":
                                    $NSWoft7++;
                                    break;
                                case "8":
                                    $NSWoft8++;
                                    break;
                                case "9":
                                    $NSWoft9++;
                                    break;
                                case "10":
                                    $NSWoft10++;
                                    break;
                                case "11":
                                    $NSWoft11++;
                                    break;
                                case "12":
                                    $NSWoft12++;
                                    break;
                                case "13":
                                    $NSWoft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuSurfen"]){
                        case "nie":
                            $SurfenNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SurfenNie5++;
                                    break;
                                case "6":
                                    $SurfenNie6++;
                                    break;
                                case "7":
                                    $SurfenNie7++;
                                    break;
                                case "8":
                                    $SurfenNie8++;
                                    break;
                                case "9":
                                    $SurfenNie9++;
                                    break;
                                case "10":
                                    $SurfenNie10++;
                                    break;
                                case "11":
                                    $SurfenNie11++;
                                    break;
                                case "12":
                                    $SurfenNie12++;
                                    break;
                                case "13":
                                    $SurfenNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $SurfenManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SurfenManchmal5++;
                                    break;
                                case "6":
                                    $SurfenManchmal6++;
                                    break;
                                case "7":
                                    $SurfenManchmal7++;
                                    break;
                                case "8":
                                    $SurfenManchmal8++;
                                    break;
                                case "9":
                                    $SurfenManchmal9++;
                                    break;
                                case "10":
                                    $SurfenManchmal10++;
                                    break;
                                case "11":
                                    $SurfenManchmal11++;
                                    break;
                                case "12":
                                    $SurfenManchmal12++;
                                    break;
                                case "13":
                                    $SurfenManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $SurfenOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $SurfenOft5++;
                                    break;
                                case "6":
                                    $SurfenOft6++;
                                    break;
                                case "7":
                                    $SurfenOft7++;
                                    break;
                                case "8":
                                    $SurfenOft8++;
                                    break;
                                case "9":
                                    $SurfenOft9++;
                                    break;
                                case "10":
                                    $SurfenOft10++;
                                    break;
                                case "11":
                                    $SurfenOft11++;
                                    break;
                                case "12":
                                    $SurfenOft12++;
                                    break;
                                case "13":
                                    $SurfenOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuNavi"]){
                        case "nie":
                            $NaviNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NaviNie5++;
                                    break;
                                case "6":
                                    $NaviNie6++;
                                    break;
                                case "7":
                                    $NaviNie7++;
                                    break;
                                case "8":
                                    $NaviNie8++;
                                    break;
                                case "9":
                                    $NaviNie9++;
                                    break;
                                case "10":
                                    $NaviNie10++;
                                    break;
                                case "11":
                                    $NaviNie11++;
                                    break;
                                case "12":
                                    $NaviNie12++;
                                    break;
                                case "13":
                                    $NaviNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $NaviManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NaviManchmal5++;
                                    break;
                                case "6":
                                    $NaviManchmal6++;
                                    break;
                                case "7":
                                    $NaviManchmal7++;
                                    break;
                                case "8":
                                    $NaviManchmal8++;
                                    break;
                                case "9":
                                    $NaviManchmal9++;
                                    break;
                                case "10":
                                    $NaviManchmal10++;
                                    break;
                                case "11":
                                    $NaviManchmal11++;
                                    break;
                                case "12":
                                    $NaviManchmal12++;
                                    break;
                                case "13":
                                    $NaviManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $NaviOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $NaviOft5++;
                                    break;
                                case "6":
                                    $NaviOft6++;
                                    break;
                                case "7":
                                    $NaviOft7++;
                                    break;
                                case "8":
                                    $NaviOft8++;
                                    break;
                                case "9":
                                    $NaviOft9++;
                                    break;
                                case "10":
                                    $NaviOft10++;
                                    break;
                                case "11":
                                    $NaviOft11++;
                                    break;
                                case "12":
                                    $NaviOft12++;
                                    break;
                                case "13":
                                    $NaviOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuTermin"]){
                        case "nie":
                            $TaskNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $TaskNie5++;
                                    break;
                                case "6":
                                    $TaskNie6++;
                                    break;
                                case "7":
                                    $TaskNie7++;
                                    break;
                                case "8":
                                    $TaskNie8++;
                                    break;
                                case "9":
                                    $TaskNie9++;
                                    break;
                                case "10":
                                    $TaskNie10++;
                                    break;
                                case "11":
                                    $TaskNie11++;
                                    break;
                                case "12":
                                    $TaskNie12++;
                                    break;
                                case "13":
                                    $TaskNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $TaskManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $TaskManchmal5++;
                                    break;
                                case "6":
                                    $TaskManchmal6++;
                                    break;
                                case "7":
                                    $TaskManchmal7++;
                                    break;
                                case "8":
                                    $TaskManchmal8++;
                                    break;
                                case "9":
                                    $TaskManchmal9++;
                                    break;
                                case "10":
                                    $TaskManchmal10++;
                                    break;
                                case "11":
                                    $TaskManchmal11++;
                                    break;
                                case "12":
                                    $TaskManchmal12++;
                                    break;
                                case "13":
                                    $TaskManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $TaskOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $TaskOft5++;
                                    break;
                                case "6":
                                    $TaskOft6++;
                                    break;
                                case "7":
                                    $TaskOft7++;
                                    break;
                                case "8":
                                    $TaskOft8++;
                                    break;
                                case "9":
                                    $TaskOft9++;
                                    break;
                                case "10":
                                    $TaskOft10++;
                                    break;
                                case "11":
                                    $TaskOft11++;
                                    break;
                                case "12":
                                    $TaskOft12++;
                                    break;
                                case "13":
                                    $TaskOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuDaten"]){
                        case "nie":
                            $DatenNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $DatenNie5++;
                                    break;
                                case "6":
                                    $DatenNie6++;
                                    break;
                                case "7":
                                    $DatenNie7++;
                                    break;
                                case "8":
                                    $DatenNie8++;
                                    break;
                                case "9":
                                    $DatenNie9++;
                                    break;
                                case "10":
                                    $DatenNie10++;
                                    break;
                                case "11":
                                    $DatenNie11++;
                                    break;
                                case "12":
                                    $DatenNie12++;
                                    break;
                                case "13":
                                    $DatenNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $DatenManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $DatenManchmal5++;
                                    break;
                                case "6":
                                    $DatenManchmal6++;
                                    break;
                                case "7":
                                    $DatenManchmal7++;
                                    break;
                                case "8":
                                    $DatenManchmal8++;
                                    break;
                                case "9":
                                    $DatenManchmal9++;
                                    break;
                                case "10":
                                    $DatenManchmal10++;
                                    break;
                                case "11":
                                    $DatenManchmal11++;
                                    break;
                                case "12":
                                    $DatenManchmal12++;
                                    break;
                                case "13":
                                    $DatenManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $DatenOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $DatenOft5++;
                                    break;
                                case "6":
                                    $DatenOft6++;
                                    break;
                                case "7":
                                    $DatenOft7++;
                                    break;
                                case "8":
                                    $DatenOft8++;
                                    break;
                                case "9":
                                    $DatenOft9++;
                                    break;
                                case "10":
                                    $DatenOft10++;
                                    break;
                                case "11":
                                    $DatenOft11++;
                                    break;
                                case "12":
                                    $DatenOft12++;
                                    break;
                                case "13":
                                    $DatenOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuGame"]){
                        case "nie":
                            $GamesNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $GamesNie5++;
                                    break;
                                case "6":
                                    $GamesNie6++;
                                    break;
                                case "7":
                                    $GamesNie7++;
                                    break;
                                case "8":
                                    $GamesNie8++;
                                    break;
                                case "9":
                                    $GamesNie9++;
                                    break;
                                case "10":
                                    $GamesNie10++;
                                    break;
                                case "11":
                                    $GamesNie11++;
                                    break;
                                case "12":
                                    $GamesNie12++;
                                    break;
                                case "13":
                                    $GamesNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $GamesManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $GamesManchmal5++;
                                    break;
                                case "6":
                                    $GamesManchmal6++;
                                    break;
                                case "7":
                                    $GamesManchmal7++;
                                    break;
                                case "8":
                                    $GamesManchmal8++;
                                    break;
                                case "9":
                                    $GamesManchmal9++;
                                    break;
                                case "10":
                                    $GamesManchmal10++;
                                    break;
                                case "11":
                                    $GamesManchmal11++;
                                    break;
                                case "12":
                                    $GamesManchmal12++;
                                    break;
                                case "13":
                                    $GamesManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $GamesOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $GamesOft5++;
                                    break;
                                case "6":
                                    $GamesOft6++;
                                    break;
                                case "7":
                                    $GamesOft7++;
                                    break;
                                case "8":
                                    $GamesOft8++;
                                    break;
                                case "9":
                                    $GamesOft9++;
                                    break;
                                case "10":
                                    $GamesOft10++;
                                    break;
                                case "11":
                                    $GamesOft11++;
                                    break;
                                case "12":
                                    $GamesOft12++;
                                    break;
                                case "13":
                                    $GamesOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuVideo"]){
                        case "nie":
                            $VideoNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $VideoNie5++;
                                    break;
                                case "6":
                                    $VideoNie6++;
                                    break;
                                case "7":
                                    $VideoNie7++;
                                    break;
                                case "8":
                                    $VideoNie8++;
                                    break;
                                case "9":
                                    $VideoNie9++;
                                    break;
                                case "10":
                                    $VideoNie10++;
                                    break;
                                case "11":
                                    $VideoNie11++;
                                    break;
                                case "12":
                                    $VideoNie12++;
                                    break;
                                case "13":
                                    $VideoNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $VideoManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $VideoManchmal5++;
                                    break;
                                case "6":
                                    $VideoManchmal6++;
                                    break;
                                case "7":
                                    $VideoManchmal7++;
                                    break;
                                case "8":
                                    $VideoManchmal8++;
                                    break;
                                case "9":
                                    $VideoManchmal9++;
                                    break;
                                case "10":
                                    $VideoManchmal10++;
                                    break;
                                case "11":
                                    $VideoManchmal11++;
                                    break;
                                case "12":
                                    $VideoManchmal12++;
                                    break;
                                case "13":
                                    $VideoManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $VideoOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $VideoOft5++;
                                    break;
                                case "6":
                                    $VideoOft6++;
                                    break;
                                case "7":
                                    $VideoOft7++;
                                    break;
                                case "8":
                                    $VideoOft8++;
                                    break;
                                case "9":
                                    $VideoOft9++;
                                    break;
                                case "10":
                                    $VideoOft10++;
                                    break;
                                case "11":
                                    $VideoOft11++;
                                    break;
                                case "12":
                                    $VideoOft12++;
                                    break;
                                case "13":
                                    $VideoOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuMusik"]){
                        case "nie":
                            $MusikNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $MusikNie5++;
                                    break;
                                case "6":
                                    $MusikNie6++;
                                    break;
                                case "7":
                                    $MusikNie7++;
                                    break;
                                case "8":
                                    $MusikNie8++;
                                    break;
                                case "9":
                                    $MusikNie9++;
                                    break;
                                case "10":
                                    $MusikNie10++;
                                    break;
                                case "11":
                                    $MusikNie11++;
                                    break;
                                case "12":
                                    $MusikNie12++;
                                    break;
                                case "13":
                                    $MusikNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $MusikManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $MusikManchmal5++;
                                    break;
                                case "6":
                                    $MusikManchmal6++;
                                    break;
                                case "7":
                                    $MusikManchmal7++;
                                    break;
                                case "8":
                                    $MusikManchmal8++;
                                    break;
                                case "9":
                                    $MusikManchmal9++;
                                    break;
                                case "10":
                                    $MusikManchmal10++;
                                    break;
                                case "11":
                                    $MusikManchmal11++;
                                    break;
                                case "12":
                                    $MusikManchmal12++;
                                    break;
                                case "13":
                                    $MusikManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $MusikOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $MusikOft5++;
                                    break;
                                case "6":
                                    $MusikOft6++;
                                    break;
                                case "7":
                                    $MusikOft7++;
                                    break;
                                case "8":
                                    $MusikOft8++;
                                    break;
                                case "9":
                                    $MusikOft9++;
                                    break;
                                case "10":
                                    $MusikOft10++;
                                    break;
                                case "11":
                                    $MusikOft11++;
                                    break;
                                case "12":
                                    $MusikOft12++;
                                    break;
                                case "13":
                                    $MusikOft13++;
                                    break;
                                    }
                                break;
                            }

                    switch($row["WozuLesen"]){
                        case "nie":
                            $LesenNie++;
                            switch($row["Klasse"]){
                                case "5":
                                    $LesenNie5++;
                                    break;
                                case "6":
                                    $LesenNie6++;
                                    break;
                                case "7":
                                    $LesenNie7++;
                                    break;
                                case "8":
                                    $LesenNie8++;
                                    break;
                                case "9":
                                    $LesenNie9++;
                                    break;
                                case "10":
                                    $LesenNie10++;
                                    break;
                                case "11":
                                    $LesenNie11++;
                                    break;
                                case "12":
                                    $LesenNie12++;
                                    break;
                                case "13":
                                    $LesenNie13++;
                                    break;
                                }
                            break;
                        case "manchmal":
                            $LesenManchmal++;
                            switch($row["Klasse"]){
                                case "5":
                                    $LesenManchmal5++;
                                    break;
                                case "6":
                                    $LesenManchmal6++;
                                    break;
                                case "7":
                                    $LesenManchmal7++;
                                    break;
                                case "8":
                                    $LesenManchmal8++;
                                    break;
                                case "9":
                                    $LesenManchmal9++;
                                    break;
                                case "10":
                                    $LesenManchmal10++;
                                    break;
                                case "11":
                                    $LesenManchmal11++;
                                    break;
                                case "12":
                                    $LesenManchmal12++;
                                    break;
                                case "13":
                                    $LesenManchmal13++;
                                    break;
                                }
                            break;
                        case "oft":
                            $LesenOft++;
                            switch($row["Klasse"]){
                                case "5":
                                    $LesenOft5++;
                                    break;
                                case "6":
                                    $LesenOft6++;
                                    break;
                                case "7":
                                    $LesenOft7++;
                                    break;
                                case "8":
                                    $LesenOft8++;
                                    break;
                                case "9":
                                    $LesenOft9++;
                                    break;
                                case "10":
                                    $LesenOft10++;
                                    break;
                                case "11":
                                    $LesenOft11++;
                                    break;
                                case "12":
                                    $LesenOft12++;
                                    break;
                                case "13":
                                    $LesenOft13++;
                                    break;
                                    }
                                break;
                            }

            }

            /*===================
            <Gesamte Variablen>
            ===================*/

            //alle teilnehmer
            $alle = $m + $w + $d;



            /*===================
            </Gesamte Variablen>
            ===================*/
            
            } else {
                echo "0 Eintr&#228;ge";
            }

            $sql = "SELECT * FROM snetworks";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    switch($row["Amazon"]){
                        case "1":
                        $Amazon++;
                        switch($row["Klasse"]){
                            case "5":
                                $Amazon5++;
                                break;
                            case "6":
                                $Amazon6++;
                                break;
                            case "7":
                                $Amazon7++;
                                break;
                            case "8":
                                $Amazon8++;
                                break;
                            case "9":
                                $Amazon9++;
                                break;
                            case "10":
                                $Amazon10++;
                                break;
                            case "11":
                                $Amazon11++;
                                break;
                            case "12":
                                $Amazon12++;
                                break;
                            case "13":
                                $Amazon13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Apple"]){
                        case "1":
                        $SNApple++;
                        switch($row["Klasse"]){
                            case "5":
                                $SNApple5++;
                                break;
                            case "6":
                                $SNApple6++;
                                break;
                            case "7":
                                $SNApple7++;
                                break;
                            case "8":
                                $SNApple8++;
                                break;
                            case "9":
                                $SNApple9++;
                                break;
                            case "10":
                                $SNApple10++;
                                break;
                            case "11":
                                $SNApple11++;
                                break;
                            case "12":
                                $SNApple12++;
                                break;
                            case "13":
                                $SNApple13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Facebook"]){
                        case "1":
                        $Facebook++;
                        switch($row["Klasse"]){
                            case "5":
                                $Facebook5++;
                                break;
                            case "6":
                                $Facebook6++;
                                break;
                            case "7":
                                $Facebook7++;
                                break;
                            case "8":
                                $Facebook8++;
                                break;
                            case "9":
                                $Facebook9++;
                                break;
                            case "10":
                                $Facebook10++;
                                break;
                            case "11":
                                $Facebook11++;
                                break;
                            case "12":
                                $Facebook12++;
                                break;
                            case "13":
                                $Facebook13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Geocaching"]){
                        case "1":
                        $Geocaching++;
                        switch($row["Klasse"]){
                            case "5":
                                $Geocaching5++;
                                break;
                            case "6":
                                $Geocaching6++;
                                break;
                            case "7":
                                $Geocaching7++;
                                break;
                            case "8":
                                $Geocaching8++;
                                break;
                            case "9":
                                $Geocaching9++;
                                break;
                            case "10":
                                $Geocaching10++;
                                break;
                            case "11":
                                $Geocaching11++;
                                break;
                            case "12":
                                $Geocaching12++;
                                break;
                            case "13":
                                $Geocaching13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Google"]){
                        case "1":
                        $Google++;
                        switch($row["Klasse"]){
                            case "5":
                                $Google5++;
                                break;
                            case "6":
                                $Google6++;
                                break;
                            case "7":
                                $Google7++;
                                break;
                            case "8":
                                $Google8++;
                                break;
                            case "9":
                                $Google9++;
                                break;
                            case "10":
                                $Google10++;
                                break;
                            case "11":
                                $Google11++;
                                break;
                            case "12":
                                $Google12++;
                                break;
                            case "13":
                                $Google13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Instagram"]){
                        case "1":
                        $Instagram++;
                        switch($row["Klasse"]){
                            case "5":
                                $Instagram5++;
                                break;
                            case "6":
                                $Instagram6++;
                                break;
                            case "7":
                                $Instagram7++;
                                break;
                            case "8":
                                $Instagram8++;
                                break;
                            case "9":
                                $Instagram9++;
                                break;
                            case "10":
                                $Instagram10++;
                                break;
                            case "11":
                                $Instagram11++;
                                break;
                            case "12":
                                $Instagram12++;
                                break;
                            case "13":
                                $Instagram13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Microsoft"]){
                        case "1":
                        $Microsoft++;
                        switch($row["Klasse"]){
                            case "5":
                                $Microsoft5++;
                                break;
                            case "6":
                                $Microsoft6++;
                                break;
                            case "7":
                                $Microsoft7++;
                                break;
                            case "8":
                                $Microsoft8++;
                                break;
                            case "9":
                                $Microsoft9++;
                                break;
                            case "10":
                                $Microsoft10++;
                                break;
                            case "11":
                                $Microsoft11++;
                                break;
                            case "12":
                                $Microsoft12++;
                                break;
                            case "13":
                                $Microsoft13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Skype"]){
                        case "1":
                        $Skype++;
                        switch($row["Klasse"]){
                            case "5":
                                $Skype5++;
                                break;
                            case "6":
                                $Skype6++;
                                break;
                            case "7":
                                $Skype7++;
                                break;
                            case "8":
                                $Skype8++;
                                break;
                            case "9":
                                $Skype9++;
                                break;
                            case "10":
                                $Skype10++;
                                break;
                            case "11":
                                $Skype11++;
                                break;
                            case "12":
                                $Skype12++;
                                break;
                            case "13":
                                $Skype13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Twitter"]){
                        case "1":
                        $Twitter++;
                        switch($row["Klasse"]){
                            case "5":
                                $Twitter5++;
                                break;
                            case "6":
                                $Twitter6++;
                                break;
                            case "7":
                                $Twitter7++;
                                break;
                            case "8":
                                $Twitter8++;
                                break;
                            case "9":
                                $Twitter9++;
                                break;
                            case "10":
                                $Twitter10++;
                                break;
                            case "11":
                                $Twitter11++;
                                break;
                            case "12":
                                $Twitter12++;
                                break;
                            case "13":
                                $Twitter13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Whatsapp"]){
                        case "1":
                        $WhatsApp++;
                        switch($row["Klasse"]){
                            case "5":
                                $WhatsApp5++;
                                break;
                            case "6":
                                $WhatsApp6++;
                                break;
                            case "7":
                                $WhatsApp7++;
                                break;
                            case "8":
                                $WhatsApp8++;
                                break;
                            case "9":
                                $WhatsApp9++;
                                break;
                            case "10":
                                $WhatsApp10++;
                                break;
                            case "11":
                                $WhatsApp11++;
                                break;
                            case "12":
                                $WhatsApp12++;
                                break;
                            case "13":
                                $WhatsApp13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Youtube"]){
                        case "1":
                        $YouTube++;
                        switch($row["Klasse"]){
                            case "5":
                                $YouTube5++;
                                break;
                            case "6":
                                $YouTube6++;
                                break;
                            case "7":
                                $YouTube7++;
                                break;
                            case "8":
                                $YouTube8++;
                                break;
                            case "9":
                                $YouTube9++;
                                break;
                            case "10":
                                $YouTube10++;
                                break;
                            case "11":
                                $YouTube11++;
                                break;
                            case "12":
                                $YouTube12++;
                                break;
                            case "13":
                                $YouTube13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Telegram"]){
                        case "1":
                        $Telegram++;
                        switch($row["Klasse"]){
                            case "5":
                                $Telegram5++;
                                break;
                            case "6":
                                $Telegram6++;
                                break;
                            case "7":
                                $Telegram7++;
                                break;
                            case "8":
                                $Telegram8++;
                                break;
                            case "9":
                                $Telegram9++;
                                break;
                            case "10":
                                $Telegram10++;
                                break;
                            case "11":
                                $Telegram11++;
                                break;
                            case "12":
                                $Telegram12++;
                                break;
                            case "13":
                                $Telegram13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Netflix"]){
                        case "1":
                        $Netflix++;
                        switch($row["Klasse"]){
                            case "5":
                                $Netflix5++;
                                break;
                            case "6":
                                $Netflix6++;
                                break;
                            case "7":
                                $Netflix7++;
                                break;
                            case "8":
                                $Netflix8++;
                                break;
                            case "9":
                                $Netflix9++;
                                break;
                            case "10":
                                $Netflix10++;
                                break;
                            case "11":
                                $Netflix11++;
                                break;
                            case "12":
                                $Netflix12++;
                                break;
                            case "13":
                                $Netflix13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Spotify"]){
                        case "1":
                        $Spotify++;
                        switch($row["Klasse"]){
                            case "5":
                                $Spotify5++;
                                break;
                            case "6":
                                $Spotify6++;
                                break;
                            case "7":
                                $Spotify7++;
                                break;
                            case "8":
                                $Spotify8++;
                                break;
                            case "9":
                                $Spotify9++;
                                break;
                            case "10":
                                $Spotify10++;
                                break;
                            case "11":
                                $Spotify11++;
                                break;
                            case "12":
                                $Spotify12++;
                                break;
                            case "13":
                                $Spotify13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Snapchat"]){
                        case "1":
                        $Snapchat++;
                        switch($row["Klasse"]){
                            case "5":
                                $Snapchat5++;
                                break;
                            case "6":
                                $Snapchat6++;
                                break;
                            case "7":
                                $Snapchat7++;
                                break;
                            case "8":
                                $Snapchat8++;
                                break;
                            case "9":
                                $Snapchat9++;
                                break;
                            case "10":
                                $Snapchat10++;
                                break;
                            case "11":
                                $Snapchat11++;
                                break;
                            case "12":
                                $Snapchat12++;
                                break;
                            case "13":
                                $Snapchat13++;
                                break;
                            }
                        break;
                    }

                    switch($row["TikTok"]){
                        case "1":
                        $TikTok++;
                        switch($row["Klasse"]){
                            case "5":
                                $TikTok5++;
                                break;
                            case "6":
                                $TikTok6++;
                                break;
                            case "7":
                                $TikTok7++;
                                break;
                            case "8":
                                $TikTok8++;
                                break;
                            case "9":
                                $TikTok9++;
                                break;
                            case "10":
                                $TikTok10++;
                                break;
                            case "11":
                                $TikTok11++;
                                break;
                            case "12":
                                $TikTok12++;
                                break;
                            case "13":
                                $TikTok13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Discord"]){
                        case "1":
                        $Discord++;
                        switch($row["Klasse"]){
                            case "5":
                                $Discord5++;
                                break;
                            case "6":
                                $Discord6++;
                                break;
                            case "7":
                                $Discord7++;
                                break;
                            case "8":
                                $Discord8++;
                                break;
                            case "9":
                                $Discord9++;
                                break;
                            case "10":
                                $Discord10++;
                                break;
                            case "11":
                                $Discord11++;
                                break;
                            case "12":
                                $Discord12++;
                                break;
                            case "13":
                                $Discord13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Steam"]){
                        case "1":
                        $Steam++;
                        switch($row["Klasse"]){
                            case "5":
                                $Steam5++;
                                break;
                            case "6":
                                $Steam6++;
                                break;
                            case "7":
                                $Steam7++;
                                break;
                            case "8":
                                $Steam8++;
                                break;
                            case "9":
                                $Steam9++;
                                break;
                            case "10":
                                $Steam10++;
                                break;
                            case "11":
                                $Steam11++;
                                break;
                            case "12":
                                $Steam12++;
                                break;
                            case "13":
                                $Steam13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Pinterest"]){
                        case "1":
                        $Pinterest++;
                        switch($row["Klasse"]){
                            case "5":
                                $Pinterest5++;
                                break;
                            case "6":
                                $Pinterest6++;
                                break;
                            case "7":
                                $Pinterest7++;
                                break;
                            case "8":
                                $Pinterest8++;
                                break;
                            case "9":
                                $Pinterest9++;
                                break;
                            case "10":
                                $Pinterest10++;
                                break;
                            case "11":
                                $Pinterest11++;
                                break;
                            case "12":
                                $Pinterest12++;
                                break;
                            case "13":
                                $Pinterest13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Reddit"]){
                        case "1":
                        $Reddit++;
                        switch($row["Klasse"]){
                            case "5":
                                $Reddit5++;
                                break;
                            case "6":
                                $Reddit6++;
                                break;
                            case "7":
                                $Reddit7++;
                                break;
                            case "8":
                                $Reddit8++;
                                break;
                            case "9":
                                $Reddit9++;
                                break;
                            case "10":
                                $Reddit10++;
                                break;
                            case "11":
                                $Reddit11++;
                                break;
                            case "12":
                                $Reddit12++;
                                break;
                            case "13":
                                $Reddit13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Threema"]){
                        case "1":
                        $Threema++;
                        switch($row["Klasse"]){
                            case "5":
                                $Threema5++;
                                break;
                            case "6":
                                $Threema6++;
                                break;
                            case "7":
                                $Threema7++;
                                break;
                            case "8":
                                $Threema8++;
                                break;
                            case "9":
                                $Threema9++;
                                break;
                            case "10":
                                $Threema10++;
                                break;
                            case "11":
                                $Threema11++;
                                break;
                            case "12":
                                $Threema12++;
                                break;
                            case "13":
                                $Threema13++;
                                break;
                            }
                        break;
                    }

                    switch($row["Viber"]){
                        case "1":
                        $Viber++;
                        switch($row["Klasse"]){
                            case "5":
                                $Viber5++;
                                break;
                            case "6":
                                $Viber6++;
                                break;
                            case "7":
                                $Viber7++;
                                break;
                            case "8":
                                $Viber8++;
                                break;
                            case "9":
                                $Viber9++;
                                break;
                            case "10":
                                $Viber10++;
                                break;
                            case "11":
                                $Viber11++;
                                break;
                            case "12":
                                $Viber12++;
                                break;
                            case "13":
                                $Viber13++;
                                break;
                            }
                        break;
                    }

                    switch($row["eBay"]){
                        case "1":
                        $Ebay++;
                        switch($row["Klasse"]){
                            case "5":
                                $Ebay5++;
                                break;
                            case "6":
                                $Ebay6++;
                                break;
                            case "7":
                                $Ebay7++;
                                break;
                            case "8":
                                $Ebay8++;
                                break;
                            case "9":
                                $Ebay9++;
                                break;
                            case "10":
                                $Ebay10++;
                                break;
                            case "11":
                                $Ebay11++;
                                break;
                            case "12":
                                $Ebay12++;
                                break;
                            case "13":
                                $Ebay13++;
                                break;
                            }
                        break;
                    }

                } 
            } else {
                    echo "0 Eintr&#228;ge";
                }
    

            ?>
        <header>
            <h1 class="main-header">Auswertung der Umfrage</h1>
            <nav><a href="alledaten.php">Alle Eintr&#228;ge</a></nav>
        </header>
        <!--Wie Viele-->
        <h3 class="midHeader">Wie viele haben mitgemacht?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Männlich: </td>
                <td><?php echo $m; ?></td>
                <td><?php echo $MfünfK; ?></td> 
                <td><?php echo $MsechsK; ?></td>
                <td><?php echo $MsiebenK; ?></td>
                <td><?php echo $MachtK; ?></td>
                <td><?php echo $MneunK; ?></td>
                <td><?php echo $MzehnK; ?></td>
                <td><?php echo $MelfK; ?></td>
                <td><?php echo $MzwölfK; ?></td>
                <td><?php echo $MdreizehnK; ?></td>
            </tr>
            <tr>
                <td>Weiblich: </td>
                <td><?php echo $w; ?></td>
                <td><?php echo $WfünfK; ?></td> 
                <td><?php echo $WsechsK; ?></td>
                <td><?php echo $WsiebenK; ?></td>
                <td><?php echo $WachtK; ?></td>
                <td><?php echo $WneunK; ?></td>
                <td><?php echo $WzehnK; ?></td>
                <td><?php echo $WelfK; ?></td>
                <td><?php echo $WzwölfK; ?></td>
                <td><?php echo $WdreizehnK; ?></td>
            </tr>
            <tr>
                <td>Divers: </td>
                <td><?php echo $d; ?></td>
                <td><?php echo $DfünfK; ?></td> 
                <td><?php echo $DsechsK; ?></td>
                <td><?php echo $DsiebenK; ?></td>
                <td><?php echo $DachtK; ?></td>
                <td><?php echo $DneunK; ?></td>
                <td><?php echo $DzehnK; ?></td>
                <td><?php echo $DelfK; ?></td>
                <td><?php echo $DzwölfK; ?></td>
                <td><?php echo $DdreizehnK; ?></td>
            </tr>
            <tr>
                <td>Insgesamt: </td>
                <td><?php echo $alle; ?></td>
                <td><?php echo $fünfK; ?></td> 
                <td><?php echo $sechsK; ?></td>
                <td><?php echo $siebenK; ?></td>
                <td><?php echo $achtK; ?></td>
                <td><?php echo $neunK; ?></td>
                <td><?php echo $zehnK; ?></td>
                <td><?php echo $elfK; ?></td>
                <td><?php echo $zwölfK; ?></td>
                <td><?php echo $dreizehnK; ?></td>
            </tr>
        </table>

        <h3 class="midHeader">Haben die Teilnehmer Zugang zu einem Smartphone?</h3>
        
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Ja: </td>
                <td><?php echo $Ja; ?></td>
                <td><?php echo $Ja5; ?></td> 
                <td><?php echo $Ja6; ?></td>
                <td><?php echo $Ja7; ?></td>
                <td><?php echo $Ja8; ?></td>
                <td><?php echo $Ja9; ?></td>
                <td><?php echo $Ja10; ?></td>
                <td><?php echo $Ja11; ?></td>
                <td><?php echo $Ja12; ?></td>
                <td><?php echo $Ja13; ?></td>
            </tr>
            <tr>
                <td>Geteilt: </td>
                <td><?php echo $Fam; ?></td>
                <td><?php echo $Fam5; ?></td> 
                <td><?php echo $Fam6; ?></td>
                <td><?php echo $Fam7; ?></td>
                <td><?php echo $Fam8; ?></td>
                <td><?php echo $Fam9; ?></td>
                <td><?php echo $Fam10; ?></td>
                <td><?php echo $Fam11; ?></td>
                <td><?php echo $Fam12; ?></td>
                <td><?php echo $Fam13; ?></td>
            </tr>
            <tr>
                <td>Nein: </td>
                <td><?php echo $No; ?></td>
                <td><?php echo $No5; ?></td> 
                <td><?php echo $No6; ?></td>
                <td><?php echo $No7; ?></td>
                <td><?php echo $No8; ?></td>
                <td><?php echo $No9; ?></td>
                <td><?php echo $No10; ?></td>
                <td><?php echo $No11; ?></td>
                <td><?php echo $No12; ?></td>
                <td><?php echo $No13; ?></td>
            </tr>
        </table>

        <h3 class="midHeader">Welche Handymarken werden von den Teilnehmern benutzt?</h3>
        <p>Apple: <?php echo $Apple;?></p>
        <p>Blackberry: <?php echo $Blackberry;?></p>
        <p>Google: <?php echo $Google;?></p>
        <p>HTC: <?php echo $HTC;?></p>
        <p>LG: <?php echo $LG;?></p>
        <p>Samsung: <?php echo $Samsung;?></p>
        <p>Sony: <?php echo $Sony;?></p>
        <p>OnePlus: <?php echo $OnePlus;?></p>
        <p>Motorola: <?php echo $Motorola;?></p>
        <p>Huawei: <?php echo $Huawei;?></p>
        <p>Nokia: <?php echo $Nokia;?></p>
        <p>Xiaomi: <?php echo $Xiaomi;?></p>


            <h3 class="midHeader">Wie lange sind die Teilnehmer täglich am Handy?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>< 30min: </td>
                <td><?php echo $less30;  ?></td>
                <td><?php echo $less305; ?></td> 
                <td><?php echo $less306; ?></td>
                <td><?php echo $less307; ?></td>
                <td><?php echo $less308; ?></td>
                <td><?php echo $less309; ?></td>
                <td><?php echo $less3010; ?></td>
                <td><?php echo $less3011; ?></td>
                <td><?php echo $less3012; ?></td>
                <td><?php echo $less3013; ?></td>
            </tr>
            <tr>
                <td>30-60min: </td>
                <td><?php echo $dreißig60; ?></td>
                <td><?php echo $dreißig605; ?></td> 
                <td><?php echo $dreißig606; ?></td>
                <td><?php echo $dreißig607; ?></td>
                <td><?php echo $dreißig608; ?></td>
                <td><?php echo $dreißig609; ?></td>
                <td><?php echo $dreißig6010; ?></td>
                <td><?php echo $dreißig6011; ?></td>
                <td><?php echo $dreißig6012; ?></td>
                <td><?php echo $dreißig6013; ?></td>
            </tr>
            <tr>
                <td>1 - 2h: </td>
                <td><?php echo $sechzig120; ?></td>
                <td><?php echo $sechzig1205; ?></td> 
                <td><?php echo $sechzig1206; ?></td>
                <td><?php echo $sechzig1207; ?></td>
                <td><?php echo $sechzig1208; ?></td>
                <td><?php echo $sechzig1209; ?></td>
                <td><?php echo $sechzig12010; ?></td>
                <td><?php echo $sechzig12011; ?></td>
                <td><?php echo $sechzig12012; ?></td>
                <td><?php echo $sechzig12013; ?></td>
            </tr>
            <tr>
                <td>2 - 3h: </td>
                <td><?php echo $einszwanzig180; ?></td>
                <td><?php echo $einszwanzig1805; ?></td> 
                <td><?php echo $einszwanzig1806; ?></td>
                <td><?php echo $einszwanzig1807; ?></td>
                <td><?php echo $einszwanzig1808; ?></td>
                <td><?php echo $einszwanzig1809; ?></td>
                <td><?php echo $einszwanzig18010; ?></td>
                <td><?php echo $einszwanzig18011; ?></td>
                <td><?php echo $einszwanzig18012; ?></td>
                <td><?php echo $einszwanzig18013; ?></td>
            </tr>
            <tr>
                <td>3 - 4h: </td>
                <td><?php echo $einsachtzig240; ?></td>
                <td><?php echo $einsachtzig2405; ?></td> 
                <td><?php echo $einsachtzig2406; ?></td>
                <td><?php echo $einsachtzig2407; ?></td>
                <td><?php echo $einsachtzig2408; ?></td>
                <td><?php echo $einsachtzig2409; ?></td>
                <td><?php echo $einsachtzig24010; ?></td>
                <td><?php echo $einsachtzig24011; ?></td>
                <td><?php echo $einsachtzig24012; ?></td>
                <td><?php echo $einsachtzig24013; ?></td>
            </tr>
            <tr>
                <td>&gt; 4h: </td>
                <td><?php echo $more240; ?></td>
                <td><?php echo $more2405; ?></td> 
                <td><?php echo $more2406; ?></td>
                <td><?php echo $more2407; ?></td>
                <td><?php echo $more2408; ?></td>
                <td><?php echo $more2409; ?></td>
                <td><?php echo $more24010; ?></td>
                <td><?php echo $more24011; ?></td>
                <td><?php echo $more24012; ?></td>
                <td><?php echo $more24013; ?></td>
            </tr>
        </table>
        <div class="divider"></div>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>Männlich</th>
                <th>Weiblich</th> 
                <th>Divers</th>
            </tr>
            <tr>
                <td>< 30min: </td>
                <td><?php echo $less30; ?></td>
                <td><?php echo $less30M; ?></td> 
                <td><?php echo $less30W; ?></td>
                <td><?php echo $less30D; ?></td>
            </tr>
            <tr>
                <td>30-60min: </td>
                <td><?php echo $dreißig60; ?></td>
                <td><?php echo $dreißig60M; ?></td> 
                <td><?php echo $dreißig60W; ?></td>
                <td><?php echo $dreißig60D; ?></td>
            </tr>
            <tr>
                <td>1 - 2h: </td>
                <td><?php echo $sechzig120; ?></td>
                <td><?php echo $sechzig120M; ?></td> 
                <td><?php echo $sechzig120W; ?></td>
                <td><?php echo $sechzig120D; ?></td>
            </tr>
            <tr>
                <td>2 - 3h: </td>
                <td><?php echo $einszwanzig180; ?></td>
                <td><?php echo $einszwanzig180M; ?></td> 
                <td><?php echo $einszwanzig180W; ?></td>
                <td><?php echo $einszwanzig180D; ?></td>
            </tr>
            <tr>
                <td>3 - 4h: </td>
                <td><?php echo $einsachtzig240; ?></td>
                <td><?php echo $einsachtzig240M; ?></td> 
                <td><?php echo $einsachtzig240W; ?></td>
                <td><?php echo $einsachtzig240D; ?></td>
            </tr>
            <tr>
                <td>&gt; 4h: </td>
                <td><?php echo $more240; ?></td>
                <td><?php echo $more240M; ?></td> 
                <td><?php echo $more240W; ?></td>
                <td><?php echo $more240D; ?></td>
            </tr>
        </table>
        <!--Hier muss eigentlich noch table für Wo und Wozu 
            hatte aber halt keinen bock drauf grad          -->
        <h3 class="midHeader">Wie aktiv sind die Teilnehmer in Sozialen Netzwerken?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>Männlich</th>
                <th>Weiblich</th> 
                <th>Divers</th>
            </tr>
            <tr>
                <td>Nutze keine: </td>
                <td><?php echo $keineNutzung; ?></td>
                <td><?php echo $keineNutzungM; ?></td> 
                <td><?php echo $keineNutzungW; ?></td>
                <td><?php echo $keineNutzungD; ?></td>
            </tr>
            <tr>
                <td>Nur schauen: </td>
                <td><?php echo $nurSchauen; ?></td>
                <td><?php echo $nurSchauenM; ?></td> 
                <td><?php echo $nurSchauenW; ?></td>
                <td><?php echo $nurSchauenD; ?></td>
            </tr>
            <tr>
                <td>Poste ab und zu: </td>
                <td><?php echo $posteGelegentlich; ?></td>
                <td><?php echo $posteGelegentlichM; ?></td> 
                <td><?php echo $posteGelegentlichW; ?></td>
                <td><?php echo $posteGelegentlichD; ?></td>
            </tr>
            <tr>
                <td>Poste häufig: </td>
                <td><?php echo $posteOft; ?></td>
                <td><?php echo $posteOftM; ?></td> 
                <td><?php echo $posteOftW; ?></td>
                <td><?php echo $posteOftD; ?></td>
            </tr>
        </table>

        <h3 class="midHeader">Kann man anhand des Profils den echten namen entnehmen?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nickname: </td>
                <td><?php echo $Nickname; ?></td>
                <td><?php echo $Nickname5; ?></td> 
                <td><?php echo $Nickname6; ?></td>
                <td><?php echo $Nickname7; ?></td>
                <td><?php echo $Nickname8; ?></td>
                <td><?php echo $Nickname9; ?></td>
                <td><?php echo $Nickname10; ?></td>
                <td><?php echo $Nickname11; ?></td>
                <td><?php echo $Nickname12; ?></td>
                <td><?php echo $Nickname13; ?></td>
            </tr>
            <tr>
                <td>Vor- oder Nachname: </td>
                <td><?php echo $vorOderNach; ?></td>
                <td><?php echo $vorOderNach5; ?></td> 
                <td><?php echo $vorOderNach6; ?></td>
                <td><?php echo $vorOderNach7; ?></td>
                <td><?php echo $vorOderNach8; ?></td>
                <td><?php echo $vorOderNach9; ?></td>
                <td><?php echo $vorOderNach10; ?></td>
                <td><?php echo $vorOderNach11; ?></td>
                <td><?php echo $vorOderNach12; ?></td>
                <td><?php echo $vorOderNach13; ?></td>
            </tr>
            <tr>
                <td>Vor- und Nachname: </td>
                <td><?php echo $vorUndNach; ?></td>
                <td><?php echo $vorUndNach5; ?></td> 
                <td><?php echo $vorUndNach6; ?></td>
                <td><?php echo $vorUndNach7; ?></td>
                <td><?php echo $vorUndNach8; ?></td>
                <td><?php echo $vorUndNach9; ?></td>
                <td><?php echo $vorUndNach10; ?></td>
                <td><?php echo $vorUndNach11; ?></td>
                <td><?php echo $vorUndNach12; ?></td>
                <td><?php echo $vorUndNach13; ?></td>
            </tr>
            <tr>
                <td>Verschiedene Profile: </td>
                <td><?php echo $mehrere; ?></td>
                <td><?php echo $mehrere5; ?></td> 
                <td><?php echo $mehrere6; ?></td>
                <td><?php echo $mehrere7; ?></td>
                <td><?php echo $mehrere8; ?></td>
                <td><?php echo $mehrere9; ?></td>
                <td><?php echo $mehrere10; ?></td>
                <td><?php echo $mehrere11; ?></td>
                <td><?php echo $mehrere12; ?></td>
                <td><?php echo $mehrere13; ?></td>
            </tr>
        </table>
        <h3 class="midHeader">Zeigen die befragten Anzeichen von einer Sucht?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Ja: </td>
                <td><?php echo $SJa; ?></td>
                <td><?php echo $SJa5; ?></td> 
                <td><?php echo $SJa6; ?></td>
                <td><?php echo $SJa7; ?></td>
                <td><?php echo $SJa8; ?></td>
                <td><?php echo $SJa9; ?></td>
                <td><?php echo $SJa10; ?></td>
                <td><?php echo $SJa11; ?></td>
                <td><?php echo $SJa12; ?></td>
                <td><?php echo $SJa13; ?></td>
            </tr>
            <tr>
                <td>Nein: </td>
                <td><?php echo $Nein; ?></td>
                <td><?php echo $Nein5; ?></td> 
                <td><?php echo $Nein6; ?></td>
                <td><?php echo $Nein7; ?></td>
                <td><?php echo $Nein8; ?></td>
                <td><?php echo $Nein9; ?></td>
                <td><?php echo $Nein10; ?></td>
                <td><?php echo $Nein11; ?></td>
                <td><?php echo $Nein12; ?></td>
                <td><?php echo $Nein13; ?></td>
            </tr>
        </table>

        <h3 class="midHeader">Wo benutzen die Teilnehmer ihre Smartphones?</h3>
        <h4>In der Schule</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $SchuleNie; ?></td>
                <td><?php echo $SchuleNie5; ?></td> 
                <td><?php echo $SchuleNie6; ?></td>
                <td><?php echo $SchuleNie7; ?></td>
                <td><?php echo $SchuleNie8; ?></td>
                <td><?php echo $SchuleNie9; ?></td>
                <td><?php echo $SchuleNie10; ?></td>
                <td><?php echo $SchuleNie11; ?></td>
                <td><?php echo $SchuleNie12; ?></td>
                <td><?php echo $SchuleNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $SchuleManchmal; ?></td>
                <td><?php echo $SchuleManchmal5; ?></td> 
                <td><?php echo $SchuleManchmal6; ?></td>
                <td><?php echo $SchuleManchmal7; ?></td>
                <td><?php echo $SchuleManchmal8; ?></td>
                <td><?php echo $SchuleManchmal9; ?></td>
                <td><?php echo $SchuleManchmal10; ?></td>
                <td><?php echo $SchuleManchmal11; ?></td>
                <td><?php echo $SchuleManchmal12; ?></td>
                <td><?php echo $SchuleManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $SchuleOft; ?></td>
                <td><?php echo $SchuleOft5; ?></td> 
                <td><?php echo $SchuleOft6; ?></td>
                <td><?php echo $SchuleOft7; ?></td>
                <td><?php echo $SchuleOft8; ?></td>
                <td><?php echo $SchuleOft9; ?></td>
                <td><?php echo $SchuleOft10; ?></td>
                <td><?php echo $SchuleOft11; ?></td>
                <td><?php echo $SchuleOft12; ?></td>
                <td><?php echo $SchuleOft13; ?></td>
            </tr>
        </table>
        <h4>Zuhause</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $ZuhauseNie; ?></td>
                <td><?php echo $ZuhauseNie5; ?></td> 
                <td><?php echo $ZuhauseNie6; ?></td>
                <td><?php echo $ZuhauseNie7; ?></td>
                <td><?php echo $ZuhauseNie8; ?></td>
                <td><?php echo $ZuhauseNie9; ?></td>
                <td><?php echo $ZuhauseNie10; ?></td>
                <td><?php echo $ZuhauseNie11; ?></td>
                <td><?php echo $ZuhauseNie12; ?></td>
                <td><?php echo $ZuhauseNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $ZuhauseManchmal; ?></td>
                <td><?php echo $ZuhauseManchmal5; ?></td> 
                <td><?php echo $ZuhauseManchmal6; ?></td>
                <td><?php echo $ZuhauseManchmal7; ?></td>
                <td><?php echo $ZuhauseManchmal8; ?></td>
                <td><?php echo $ZuhauseManchmal9; ?></td>
                <td><?php echo $ZuhauseManchmal10; ?></td>
                <td><?php echo $ZuhauseManchmal11; ?></td>
                <td><?php echo $ZuhauseManchmal12; ?></td>
                <td><?php echo $ZuhauseManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $ZuhauseOft; ?></td>
                <td><?php echo $ZuhauseOft5; ?></td> 
                <td><?php echo $ZuhauseOft6; ?></td>
                <td><?php echo $ZuhauseOft7; ?></td>
                <td><?php echo $ZuhauseOft8; ?></td>
                <td><?php echo $ZuhauseOft9; ?></td>
                <td><?php echo $ZuhauseOft10; ?></td>
                <td><?php echo $ZuhauseOft11; ?></td>
                <td><?php echo $ZuhauseOft12; ?></td>
                <td><?php echo $ZuhauseOft13; ?></td>
            </tr>
        </table>
        <h4>Unterwegs</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $WegsNie; ?></td>
                <td><?php echo $WegsNie5; ?></td> 
                <td><?php echo $WegsNie6; ?></td>
                <td><?php echo $WegsNie7; ?></td>
                <td><?php echo $WegsNie8; ?></td>
                <td><?php echo $WegsNie9; ?></td>
                <td><?php echo $WegsNie10; ?></td>
                <td><?php echo $WegsNie11; ?></td>
                <td><?php echo $WegsNie12; ?></td>
                <td><?php echo $WegsNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $WegsManchmal; ?></td>
                <td><?php echo $WegsManchmal5; ?></td> 
                <td><?php echo $WegsManchmal6; ?></td>
                <td><?php echo $WegsManchmal7; ?></td>
                <td><?php echo $WegsManchmal8; ?></td>
                <td><?php echo $WegsManchmal9; ?></td>
                <td><?php echo $WegsManchmal10; ?></td>
                <td><?php echo $WegsManchmal11; ?></td>
                <td><?php echo $WegsManchmal12; ?></td>
                <td><?php echo $WegsManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $WegsOft; ?></td>
                <td><?php echo $WegsOft5; ?></td> 
                <td><?php echo $WegsOft6; ?></td>
                <td><?php echo $WegsOft7; ?></td>
                <td><?php echo $WegsOft8; ?></td>
                <td><?php echo $WegsOft9; ?></td>
                <td><?php echo $WegsOft10; ?></td>
                <td><?php echo $WegsOft11; ?></td>
                <td><?php echo $WegsOft12; ?></td>
                <td><?php echo $WegsOft13; ?></td>
            </tr>
        </table>
        <h4>Beim Sport</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $SportNie; ?></td>
                <td><?php echo $SportNie5; ?></td> 
                <td><?php echo $SportNie6; ?></td>
                <td><?php echo $SportNie7; ?></td>
                <td><?php echo $SportNie8; ?></td>
                <td><?php echo $SportNie9; ?></td>
                <td><?php echo $SportNie10; ?></td>
                <td><?php echo $SportNie11; ?></td>
                <td><?php echo $SportNie12; ?></td>
                <td><?php echo $SportNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $SportManchmal; ?></td>
                <td><?php echo $SportManchmal5; ?></td> 
                <td><?php echo $SportManchmal6; ?></td>
                <td><?php echo $SportManchmal7; ?></td>
                <td><?php echo $SportManchmal8; ?></td>
                <td><?php echo $SportManchmal9; ?></td>
                <td><?php echo $SportManchmal10; ?></td>
                <td><?php echo $SportManchmal11; ?></td>
                <td><?php echo $SportManchmal12; ?></td>
                <td><?php echo $SportManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $SportOft; ?></td>
                <td><?php echo $SportOft5; ?></td> 
                <td><?php echo $SportOft6; ?></td>
                <td><?php echo $SportOft7; ?></td>
                <td><?php echo $SportOft8; ?></td>
                <td><?php echo $SportOft9; ?></td>
                <td><?php echo $SportOft10; ?></td>
                <td><?php echo $SportOft11; ?></td>
                <td><?php echo $SportOft12; ?></td>
                <td><?php echo $SportOft13; ?></td>
            </tr>
        </table>

        <h3 class="midHeader">Wozu nutzen die Teilnehmer ihre Smartphones?</h3>

        <h4>Chat</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $ChatNie; ?></td>
                <td><?php echo $ChatNie5; ?></td> 
                <td><?php echo $ChatNie6; ?></td>
                <td><?php echo $ChatNie7; ?></td>
                <td><?php echo $ChatNie8; ?></td>
                <td><?php echo $ChatNie9; ?></td>
                <td><?php echo $ChatNie10; ?></td>
                <td><?php echo $ChatNie11; ?></td>
                <td><?php echo $ChatNie12; ?></td>
                <td><?php echo $ChatNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $ChatManchmal; ?></td>
                <td><?php echo $ChatManchmal5; ?></td> 
                <td><?php echo $ChatManchmal6; ?></td>
                <td><?php echo $ChatManchmal7; ?></td>
                <td><?php echo $ChatManchmal8; ?></td>
                <td><?php echo $ChatManchmal9; ?></td>
                <td><?php echo $ChatManchmal10; ?></td>
                <td><?php echo $ChatManchmal11; ?></td>
                <td><?php echo $ChatManchmal12; ?></td>
                <td><?php echo $ChatManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $ChatOft; ?></td>
                <td><?php echo $ChatOft5; ?></td> 
                <td><?php echo $ChatOft6; ?></td>
                <td><?php echo $ChatOft7; ?></td>
                <td><?php echo $ChatOft8; ?></td>
                <td><?php echo $ChatOft9; ?></td>
                <td><?php echo $ChatOft10; ?></td>
                <td><?php echo $ChatOft11; ?></td>
                <td><?php echo $ChatOft12; ?></td>
                <td><?php echo $ChatOft13; ?></td>
            </tr>
        </table>

        <h4>E-Mail</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $MailNie; ?></td>
                <td><?php echo $MailNie5; ?></td> 
                <td><?php echo $MailNie6; ?></td>
                <td><?php echo $MailNie7; ?></td>
                <td><?php echo $MailNie8; ?></td>
                <td><?php echo $MailNie9; ?></td>
                <td><?php echo $MailNie10; ?></td>
                <td><?php echo $MailNie11; ?></td>
                <td><?php echo $MailNie12; ?></td>
                <td><?php echo $MailNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $MailManchmal; ?></td>
                <td><?php echo $MailManchmal5; ?></td> 
                <td><?php echo $MailManchmal6; ?></td>
                <td><?php echo $MailManchmal7; ?></td>
                <td><?php echo $MailManchmal8; ?></td>
                <td><?php echo $MailManchmal9; ?></td>
                <td><?php echo $MailManchmal10; ?></td>
                <td><?php echo $MailManchmal11; ?></td>
                <td><?php echo $MailManchmal12; ?></td>
                <td><?php echo $MailManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $MailOft; ?></td>
                <td><?php echo $MailOft5; ?></td> 
                <td><?php echo $MailOft6; ?></td>
                <td><?php echo $MailOft7; ?></td>
                <td><?php echo $MailOft8; ?></td>
                <td><?php echo $MailOft9; ?></td>
                <td><?php echo $MailOft10; ?></td>
                <td><?php echo $MailOft11; ?></td>
                <td><?php echo $MailOft12; ?></td>
                <td><?php echo $MailOft13; ?></td>
            </tr>
        </table>

        <h4>Telefonieren</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $CallNie; ?></td>
                <td><?php echo $CallNie5; ?></td> 
                <td><?php echo $CallNie6; ?></td>
                <td><?php echo $CallNie7; ?></td>
                <td><?php echo $CallNie8; ?></td>
                <td><?php echo $CallNie9; ?></td>
                <td><?php echo $CallNie10; ?></td>
                <td><?php echo $CallNie11; ?></td>
                <td><?php echo $CallNie12; ?></td>
                <td><?php echo $CallNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $CallManchmal; ?></td>
                <td><?php echo $CallManchmal5; ?></td> 
                <td><?php echo $CallManchmal6; ?></td>
                <td><?php echo $CallManchmal7; ?></td>
                <td><?php echo $CallManchmal8; ?></td>
                <td><?php echo $CallManchmal9; ?></td>
                <td><?php echo $CallManchmal10; ?></td>
                <td><?php echo $CallManchmal11; ?></td>
                <td><?php echo $CallManchmal12; ?></td>
                <td><?php echo $CallManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $CallOft; ?></td>
                <td><?php echo $CallOft5; ?></td> 
                <td><?php echo $CallOft6; ?></td>
                <td><?php echo $CallOft7; ?></td>
                <td><?php echo $CallOft8; ?></td>
                <td><?php echo $CallOft9; ?></td>
                <td><?php echo $CallOft10; ?></td>
                <td><?php echo $CallOft11; ?></td>
                <td><?php echo $CallOft12; ?></td>
                <td><?php echo $CallOft13; ?></td>
            </tr>
        </table>

        <h4>Social Media</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $SMediaNie; ?></td>
                <td><?php echo $SMediaNie5; ?></td> 
                <td><?php echo $SMediaNie6; ?></td>
                <td><?php echo $SMediaNie7; ?></td>
                <td><?php echo $SMediaNie8; ?></td>
                <td><?php echo $SMediaNie9; ?></td>
                <td><?php echo $SMediaNie10; ?></td>
                <td><?php echo $SMediaNie11; ?></td>
                <td><?php echo $SMediaNie12; ?></td>
                <td><?php echo $SMediaNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $SMediaManchmal; ?></td>
                <td><?php echo $SMediaManchmal5; ?></td> 
                <td><?php echo $SMediaManchmal6; ?></td>
                <td><?php echo $SMediaManchmal7; ?></td>
                <td><?php echo $SMediaManchmal8; ?></td>
                <td><?php echo $SMediaManchmal9; ?></td>
                <td><?php echo $SMediaManchmal10; ?></td>
                <td><?php echo $SMediaManchmal11; ?></td>
                <td><?php echo $SMediaManchmal12; ?></td>
                <td><?php echo $SMediaManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $SMediaOft; ?></td>
                <td><?php echo $SMediaOft5; ?></td> 
                <td><?php echo $SMediaOft6; ?></td>
                <td><?php echo $SMediaOft7; ?></td>
                <td><?php echo $SMediaOft8; ?></td>
                <td><?php echo $SMediaOft9; ?></td>
                <td><?php echo $SMediaOft10; ?></td>
                <td><?php echo $SMediaOft11; ?></td>
                <td><?php echo $SMediaOft12; ?></td>
                <td><?php echo $SMediaOft13; ?></td>
            </tr>
        </table>

        <h4>Nachschlagewerk</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $NSWnie; ?></td>
                <td><?php echo $NSWnie5; ?></td> 
                <td><?php echo $NSWnie6; ?></td>
                <td><?php echo $NSWnie7; ?></td>
                <td><?php echo $NSWnie8; ?></td>
                <td><?php echo $NSWnie9; ?></td>
                <td><?php echo $NSWnie10; ?></td>
                <td><?php echo $NSWnie11; ?></td>
                <td><?php echo $NSWnie12; ?></td>
                <td><?php echo $NSWnie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $NSWmanchmal; ?></td>
                <td><?php echo $NSWmanchmal5; ?></td> 
                <td><?php echo $NSWmanchmal6; ?></td>
                <td><?php echo $NSWmanchmal7; ?></td>
                <td><?php echo $NSWmanchmal8; ?></td>
                <td><?php echo $NSWmanchmal9; ?></td>
                <td><?php echo $NSWmanchmal10; ?></td>
                <td><?php echo $NSWmanchmal11; ?></td>
                <td><?php echo $NSWmanchmal12; ?></td>
                <td><?php echo $NSWmanchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $NSWoft; ?></td>
                <td><?php echo $NSWoft5; ?></td> 
                <td><?php echo $NSWoft6; ?></td>
                <td><?php echo $NSWoft7; ?></td>
                <td><?php echo $NSWoft8; ?></td>
                <td><?php echo $NSWoft9; ?></td>
                <td><?php echo $NSWoft10; ?></td>
                <td><?php echo $NSWoft11; ?></td>
                <td><?php echo $NSWoft12; ?></td>
                <td><?php echo $NSWoft13; ?></td>
            </tr>
        </table>

        <h4>Surfen im Internet</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $SurfenNie; ?></td>
                <td><?php echo $SurfenNie5; ?></td> 
                <td><?php echo $SurfenNie6; ?></td>
                <td><?php echo $SurfenNie7; ?></td>
                <td><?php echo $SurfenNie8; ?></td>
                <td><?php echo $SurfenNie9; ?></td>
                <td><?php echo $SurfenNie10; ?></td>
                <td><?php echo $SurfenNie11; ?></td>
                <td><?php echo $SurfenNie12; ?></td>
                <td><?php echo $SurfenNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $SurfenManchmal; ?></td>
                <td><?php echo $SurfenManchmal5; ?></td> 
                <td><?php echo $SurfenManchmal6; ?></td>
                <td><?php echo $SurfenManchmal7; ?></td>
                <td><?php echo $SurfenManchmal8; ?></td>
                <td><?php echo $SurfenManchmal9; ?></td>
                <td><?php echo $SurfenManchmal10; ?></td>
                <td><?php echo $SurfenManchmal11; ?></td>
                <td><?php echo $SurfenManchmal12; ?></td>
                <td><?php echo $SurfenManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $SurfenOft; ?></td>
                <td><?php echo $SurfenOft5; ?></td> 
                <td><?php echo $SurfenOft6; ?></td>
                <td><?php echo $SurfenOft7; ?></td>
                <td><?php echo $SurfenOft8; ?></td>
                <td><?php echo $SurfenOft9; ?></td>
                <td><?php echo $SurfenOft10; ?></td>
                <td><?php echo $SurfenOft11; ?></td>
                <td><?php echo $SurfenOft12; ?></td>
                <td><?php echo $SurfenOft13; ?></td>
            </tr>
        </table>

        <h4>Navigation</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $NaviNie; ?></td>
                <td><?php echo $NaviNie5; ?></td> 
                <td><?php echo $NaviNie6; ?></td>
                <td><?php echo $NaviNie7; ?></td>
                <td><?php echo $NaviNie8; ?></td>
                <td><?php echo $NaviNie9; ?></td>
                <td><?php echo $NaviNie10; ?></td>
                <td><?php echo $NaviNie11; ?></td>
                <td><?php echo $NaviNie12; ?></td>
                <td><?php echo $NaviNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $NaviManchmal; ?></td>
                <td><?php echo $NaviManchmal5; ?></td> 
                <td><?php echo $NaviManchmal6; ?></td>
                <td><?php echo $NaviManchmal7; ?></td>
                <td><?php echo $NaviManchmal8; ?></td>
                <td><?php echo $NaviManchmal9; ?></td>
                <td><?php echo $NaviManchmal10; ?></td>
                <td><?php echo $NaviManchmal11; ?></td>
                <td><?php echo $NaviManchmal12; ?></td>
                <td><?php echo $NaviManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $NaviOft; ?></td>
                <td><?php echo $NaviOft5; ?></td> 
                <td><?php echo $NaviOft6; ?></td>
                <td><?php echo $NaviOft7; ?></td>
                <td><?php echo $NaviOft8; ?></td>
                <td><?php echo $NaviOft9; ?></td>
                <td><?php echo $NaviOft10; ?></td>
                <td><?php echo $NaviOft11; ?></td>
                <td><?php echo $NaviOft12; ?></td>
                <td><?php echo $NaviOft13; ?></td>
            </tr>
        </table>

        <h4>Termine und Aufgaben</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $TaskNie; ?></td>
                <td><?php echo $TaskNie5; ?></td> 
                <td><?php echo $TaskNie6; ?></td>
                <td><?php echo $TaskNie7; ?></td>
                <td><?php echo $TaskNie8; ?></td>
                <td><?php echo $TaskNie9; ?></td>
                <td><?php echo $TaskNie10; ?></td>
                <td><?php echo $TaskNie11; ?></td>
                <td><?php echo $TaskNie12; ?></td>
                <td><?php echo $TaskNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $TaskManchmal; ?></td>
                <td><?php echo $TaskManchmal5; ?></td> 
                <td><?php echo $TaskManchmal6; ?></td>
                <td><?php echo $TaskManchmal7; ?></td>
                <td><?php echo $TaskManchmal8; ?></td>
                <td><?php echo $TaskManchmal9; ?></td>
                <td><?php echo $TaskManchmal10; ?></td>
                <td><?php echo $TaskManchmal11; ?></td>
                <td><?php echo $TaskManchmal12; ?></td>
                <td><?php echo $TaskManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $TaskOft; ?></td>
                <td><?php echo $TaskOft5; ?></td> 
                <td><?php echo $TaskOft6; ?></td>
                <td><?php echo $TaskOft7; ?></td>
                <td><?php echo $TaskOft8; ?></td>
                <td><?php echo $TaskOft9; ?></td>
                <td><?php echo $TaskOft10; ?></td>
                <td><?php echo $TaskOft11; ?></td>
                <td><?php echo $TaskOft12; ?></td>
                <td><?php echo $TaskOft13; ?></td>
            </tr>
        </table>

        <h4>Datenspeicher</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $DatenNie; ?></td>
                <td><?php echo $DatenNie5; ?></td> 
                <td><?php echo $DatenNie6; ?></td>
                <td><?php echo $DatenNie7; ?></td>
                <td><?php echo $DatenNie8; ?></td>
                <td><?php echo $DatenNie9; ?></td>
                <td><?php echo $DatenNie10; ?></td>
                <td><?php echo $DatenNie11; ?></td>
                <td><?php echo $DatenNie12; ?></td>
                <td><?php echo $DatenNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $DatenManchmal; ?></td>
                <td><?php echo $DatenManchmal5; ?></td> 
                <td><?php echo $DatenManchmal6; ?></td>
                <td><?php echo $DatenManchmal7; ?></td>
                <td><?php echo $DatenManchmal8; ?></td>
                <td><?php echo $DatenManchmal9; ?></td>
                <td><?php echo $DatenManchmal10; ?></td>
                <td><?php echo $DatenManchmal11; ?></td>
                <td><?php echo $DatenManchmal12; ?></td>
                <td><?php echo $DatenManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $DatenOft; ?></td>
                <td><?php echo $DatenOft5; ?></td> 
                <td><?php echo $DatenOft6; ?></td>
                <td><?php echo $DatenOft7; ?></td>
                <td><?php echo $DatenOft8; ?></td>
                <td><?php echo $DatenOft9; ?></td>
                <td><?php echo $DatenOft10; ?></td>
                <td><?php echo $DatenOft11; ?></td>
                <td><?php echo $DatenOft12; ?></td>
                <td><?php echo $DatenOft13; ?></td>
            </tr>
        </table>

        <h4>Spiele</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $GamesNie; ?></td>
                <td><?php echo $GamesNie5; ?></td> 
                <td><?php echo $GamesNie6; ?></td>
                <td><?php echo $GamesNie7; ?></td>
                <td><?php echo $GamesNie8; ?></td>
                <td><?php echo $GamesNie9; ?></td>
                <td><?php echo $GamesNie10; ?></td>
                <td><?php echo $GamesNie11; ?></td>
                <td><?php echo $GamesNie12; ?></td>
                <td><?php echo $GamesNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $GamesManchmal; ?></td>
                <td><?php echo $GamesManchmal5; ?></td> 
                <td><?php echo $GamesManchmal6; ?></td>
                <td><?php echo $GamesManchmal7; ?></td>
                <td><?php echo $GamesManchmal8; ?></td>
                <td><?php echo $GamesManchmal9; ?></td>
                <td><?php echo $GamesManchmal10; ?></td>
                <td><?php echo $GamesManchmal11; ?></td>
                <td><?php echo $GamesManchmal12; ?></td>
                <td><?php echo $GamesManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $GamesOft; ?></td>
                <td><?php echo $GamesOft5; ?></td> 
                <td><?php echo $GamesOft6; ?></td>
                <td><?php echo $GamesOft7; ?></td>
                <td><?php echo $GamesOft8; ?></td>
                <td><?php echo $GamesOft9; ?></td>
                <td><?php echo $GamesOft10; ?></td>
                <td><?php echo $GamesOft11; ?></td>
                <td><?php echo $GamesOft12; ?></td>
                <td><?php echo $GamesOft13; ?></td>
            </tr>
        </table>

        <h4>Videostreaming</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $VideoNie; ?></td>
                <td><?php echo $VideoNie5; ?></td> 
                <td><?php echo $VideoNie6; ?></td>
                <td><?php echo $VideoNie7; ?></td>
                <td><?php echo $VideoNie8; ?></td>
                <td><?php echo $VideoNie9; ?></td>
                <td><?php echo $VideoNie10; ?></td>
                <td><?php echo $VideoNie11; ?></td>
                <td><?php echo $VideoNie12; ?></td>
                <td><?php echo $VideoNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $VideoManchmal; ?></td>
                <td><?php echo $VideoManchmal5; ?></td> 
                <td><?php echo $VideoManchmal6; ?></td>
                <td><?php echo $VideoManchmal7; ?></td>
                <td><?php echo $VideoManchmal8; ?></td>
                <td><?php echo $VideoManchmal9; ?></td>
                <td><?php echo $VideoManchmal10; ?></td>
                <td><?php echo $VideoManchmal11; ?></td>
                <td><?php echo $VideoManchmal12; ?></td>
                <td><?php echo $VideoManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $VideoOft; ?></td>
                <td><?php echo $VideoOft5; ?></td> 
                <td><?php echo $VideoOft6; ?></td>
                <td><?php echo $VideoOft7; ?></td>
                <td><?php echo $VideoOft8; ?></td>
                <td><?php echo $VideoOft9; ?></td>
                <td><?php echo $VideoOft10; ?></td>
                <td><?php echo $VideoOft11; ?></td>
                <td><?php echo $VideoOft12; ?></td>
                <td><?php echo $VideoOft13; ?></td>
            </tr>
        </table>

        <h4>Musik hören</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $MusikNie; ?></td>
                <td><?php echo $MusikNie5; ?></td> 
                <td><?php echo $MusikNie6; ?></td>
                <td><?php echo $MusikNie7; ?></td>
                <td><?php echo $MusikNie8; ?></td>
                <td><?php echo $MusikNie9; ?></td>
                <td><?php echo $MusikNie10; ?></td>
                <td><?php echo $MusikNie11; ?></td>
                <td><?php echo $MusikNie12; ?></td>
                <td><?php echo $MusikNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $MusikManchmal; ?></td>
                <td><?php echo $MusikManchmal5; ?></td> 
                <td><?php echo $MusikManchmal6; ?></td>
                <td><?php echo $MusikManchmal7; ?></td>
                <td><?php echo $MusikManchmal8; ?></td>
                <td><?php echo $MusikManchmal9; ?></td>
                <td><?php echo $MusikManchmal10; ?></td>
                <td><?php echo $MusikManchmal11; ?></td>
                <td><?php echo $MusikManchmal12; ?></td>
                <td><?php echo $MusikManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $MusikOft; ?></td>
                <td><?php echo $MusikOft5; ?></td> 
                <td><?php echo $MusikOft6; ?></td>
                <td><?php echo $MusikOft7; ?></td>
                <td><?php echo $MusikOft8; ?></td>
                <td><?php echo $MusikOft9; ?></td>
                <td><?php echo $MusikOft10; ?></td>
                <td><?php echo $MusikOft11; ?></td>
                <td><?php echo $MusikOft12; ?></td>
                <td><?php echo $MusikOft13; ?></td>
            </tr>
        </table>

        <h4>Lesen</h4>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Nie: </td>
                <td><?php echo $LesenNie; ?></td>
                <td><?php echo $LesenNie5; ?></td> 
                <td><?php echo $LesenNie6; ?></td>
                <td><?php echo $LesenNie7; ?></td>
                <td><?php echo $LesenNie8; ?></td>
                <td><?php echo $LesenNie9; ?></td>
                <td><?php echo $LesenNie10; ?></td>
                <td><?php echo $LesenNie11; ?></td>
                <td><?php echo $LesenNie12; ?></td>
                <td><?php echo $LesenNie13; ?></td>
            </tr>

            <tr>
                <td>Manchmal: </td>
                <td><?php echo $LesenManchmal; ?></td>
                <td><?php echo $LesenManchmal5; ?></td> 
                <td><?php echo $LesenManchmal6; ?></td>
                <td><?php echo $LesenManchmal7; ?></td>
                <td><?php echo $LesenManchmal8; ?></td>
                <td><?php echo $LesenManchmal9; ?></td>
                <td><?php echo $LesenManchmal10; ?></td>
                <td><?php echo $LesenManchmal11; ?></td>
                <td><?php echo $LesenManchmal12; ?></td>
                <td><?php echo $LesenManchmal13; ?></td>
            </tr>
            <tr>
                <td>Häufig: </td>
                <td><?php echo $LesenOft; ?></td>
                <td><?php echo $LesenOft5; ?></td> 
                <td><?php echo $LesenOft6; ?></td>
                <td><?php echo $LesenOft7; ?></td>
                <td><?php echo $LesenOft8; ?></td>
                <td><?php echo $LesenOft9; ?></td>
                <td><?php echo $LesenOft10; ?></td>
                <td><?php echo $LesenOft11; ?></td>
                <td><?php echo $LesenOft12; ?></td>
                <td><?php echo $LesenOft13; ?></td>
            </tr>
        </table>

        <h3>In welchen der folgenden Dienste sind die Teilnehmer registriert?</h3>
        <table>
            <tr>
                <th></th>
                <th>Insgesamt</th>
                <th>5.</th>
                <th>6.</th> 
                <th>7.</th>
                <th>8.</th>
                <th>9.</th>
                <th>10.</th>
                <th>11.</th>
                <th>12.</th>
                <th>13.</th>
            </tr>
            <tr>
                <td>Amazon: </td>
                <td><?php echo $Amazon; ?></td>
                <td><?php echo $Amazon5; ?></td> 
                <td><?php echo $Amazon6; ?></td>
                <td><?php echo $Amazon7; ?></td>
                <td><?php echo $Amazon8; ?></td>
                <td><?php echo $Amazon9; ?></td>
                <td><?php echo $Amazon10; ?></td>
                <td><?php echo $Amazon11; ?></td>
                <td><?php echo $Amazon12; ?></td>
                <td><?php echo $Amazon13; ?></td>
            </tr>
            <tr>
                <td>Apple: </td>
                <td><?php echo $SNApple; ?></td>
                <td><?php echo $SNApple5; ?></td> 
                <td><?php echo $SNApple6; ?></td>
                <td><?php echo $SNApple7; ?></td>
                <td><?php echo $SNApple8; ?></td>
                <td><?php echo $SNApple9; ?></td>
                <td><?php echo $SNApple10; ?></td>
                <td><?php echo $SNApple11; ?></td>
                <td><?php echo $SNApple12; ?></td>
                <td><?php echo $SNApple13; ?></td>
            </tr>
            <tr>
                <td>Facebook: </td>
                <td><?php echo $Facebook; ?></td>
                <td><?php echo $Facebook5; ?></td> 
                <td><?php echo $Facebook6; ?></td>
                <td><?php echo $Facebook7; ?></td>
                <td><?php echo $Facebook8; ?></td>
                <td><?php echo $Facebook9; ?></td>
                <td><?php echo $Facebook10; ?></td>
                <td><?php echo $Facebook11; ?></td>
                <td><?php echo $Facebook12; ?></td>
                <td><?php echo $Facebook13; ?></td>
            </tr>
            <tr>
                <td>Geocaching: </td>
                <td><?php echo $Geocaching; ?></td>
                <td><?php echo $Geocaching5; ?></td> 
                <td><?php echo $Geocaching6; ?></td>
                <td><?php echo $Geocaching7; ?></td>
                <td><?php echo $Geocaching8; ?></td>
                <td><?php echo $Geocaching9; ?></td>
                <td><?php echo $Geocaching10; ?></td>
                <td><?php echo $Geocaching11; ?></td>
                <td><?php echo $Geocaching12; ?></td>
                <td><?php echo $Geocaching13; ?></td>
            </tr>
            <tr>
                <td>Google: </td>
                <td><?php echo $Google; ?></td>
                <td><?php echo $Google5; ?></td> 
                <td><?php echo $Google6; ?></td>
                <td><?php echo $Google7; ?></td>
                <td><?php echo $Google8; ?></td>
                <td><?php echo $Google9; ?></td>
                <td><?php echo $Google10; ?></td>
                <td><?php echo $Google11; ?></td>
                <td><?php echo $Google12; ?></td>
                <td><?php echo $Google13; ?></td>
            </tr>
            <tr>
                <td>Instagram: </td>
                <td><?php echo $Instagram; ?></td>
                <td><?php echo $Instagram5; ?></td> 
                <td><?php echo $Instagram6; ?></td>
                <td><?php echo $Instagram7; ?></td>
                <td><?php echo $Instagram8; ?></td>
                <td><?php echo $Instagram9; ?></td>
                <td><?php echo $Instagram10; ?></td>
                <td><?php echo $Instagram11; ?></td>
                <td><?php echo $Instagram12; ?></td>
                <td><?php echo $Instagram13; ?></td>
            </tr>
            <tr>
                <td>Microsoft: </td>
                <td><?php echo $Microsoft; ?></td>
                <td><?php echo $Microsoft5; ?></td> 
                <td><?php echo $Microsoft6; ?></td>
                <td><?php echo $Microsoft7; ?></td>
                <td><?php echo $Microsoft8; ?></td>
                <td><?php echo $Microsoft9; ?></td>
                <td><?php echo $Microsoft10; ?></td>
                <td><?php echo $Microsoft11; ?></td>
                <td><?php echo $Microsoft12; ?></td>
                <td><?php echo $Microsoft13; ?></td>
            </tr>
            <tr>
                <td>Skype: </td>
                <td><?php echo $Skype; ?></td>
                <td><?php echo $Skype5; ?></td> 
                <td><?php echo $Skype6; ?></td>
                <td><?php echo $Skype7; ?></td>
                <td><?php echo $Skype8; ?></td>
                <td><?php echo $Skype9; ?></td>
                <td><?php echo $Skype10; ?></td>
                <td><?php echo $Skype11; ?></td>
                <td><?php echo $Skype12; ?></td>
                <td><?php echo $Skype13; ?></td>
            </tr>
            <tr>
                <td>Twitter: </td>
                <td><?php echo $Twitter; ?></td>
                <td><?php echo $Twitter5; ?></td> 
                <td><?php echo $Twitter6; ?></td>
                <td><?php echo $Twitter7; ?></td>
                <td><?php echo $Twitter8; ?></td>
                <td><?php echo $Twitter9; ?></td>
                <td><?php echo $Twitter10; ?></td>
                <td><?php echo $Twitter11; ?></td>
                <td><?php echo $Twitter12; ?></td>
                <td><?php echo $Twitter13; ?></td>
            </tr>
            <tr>
                <td>Whatsapp: </td>
                <td><?php echo $WhatsApp; ?></td>
                <td><?php echo $WhatsApp5; ?></td> 
                <td><?php echo $WhatsApp6; ?></td>
                <td><?php echo $WhatsApp7; ?></td>
                <td><?php echo $WhatsApp8; ?></td>
                <td><?php echo $WhatsApp9; ?></td>
                <td><?php echo $WhatsApp10; ?></td>
                <td><?php echo $WhatsApp11; ?></td>
                <td><?php echo $WhatsApp12; ?></td>
                <td><?php echo $WhatsApp13; ?></td>
            </tr>
            <tr>
                <td>Youtube: </td>
                <td><?php echo $YouTube; ?></td>
                <td><?php echo $YouTube5; ?></td> 
                <td><?php echo $YouTube6; ?></td>
                <td><?php echo $YouTube7; ?></td>
                <td><?php echo $YouTube8; ?></td>
                <td><?php echo $YouTube9; ?></td>
                <td><?php echo $YouTube10; ?></td>
                <td><?php echo $YouTube11; ?></td>
                <td><?php echo $YouTube12; ?></td>
                <td><?php echo $YouTube13; ?></td>
            </tr>
            <tr>
                <td>Telegram: </td>
                <td><?php echo $Telegram; ?></td>
                <td><?php echo $Telegram5; ?></td> 
                <td><?php echo $Telegram6; ?></td>
                <td><?php echo $Telegram7; ?></td>
                <td><?php echo $Telegram8; ?></td>
                <td><?php echo $Telegram9; ?></td>
                <td><?php echo $Telegram10; ?></td>
                <td><?php echo $Telegram11; ?></td>
                <td><?php echo $Telegram12; ?></td>
                <td><?php echo $Telegram13; ?></td>
            </tr>
            <tr>
                <td>Netflix: </td>
                <td><?php echo $Netflix; ?></td>
                <td><?php echo $Netflix5; ?></td> 
                <td><?php echo $Netflix6; ?></td>
                <td><?php echo $Netflix7; ?></td>
                <td><?php echo $Netflix8; ?></td>
                <td><?php echo $Netflix9; ?></td>
                <td><?php echo $Netflix10; ?></td>
                <td><?php echo $Netflix11; ?></td>
                <td><?php echo $Netflix12; ?></td>
                <td><?php echo $Netflix13; ?></td>
            </tr>
            <tr>
                <td>Spotify: </td>
                <td><?php echo $Spotify; ?></td>
                <td><?php echo $Spotify5; ?></td> 
                <td><?php echo $Spotify6; ?></td>
                <td><?php echo $Spotify7; ?></td>
                <td><?php echo $Spotify8; ?></td>
                <td><?php echo $Spotify9; ?></td>
                <td><?php echo $Spotify10; ?></td>
                <td><?php echo $Spotify11; ?></td>
                <td><?php echo $Spotify12; ?></td>
                <td><?php echo $Spotify13; ?></td>
            </tr>
            <tr>
                <td>Snapchat: </td>
                <td><?php echo $Snapchat; ?></td>
                <td><?php echo $Snapchat5; ?></td> 
                <td><?php echo $Snapchat6; ?></td>
                <td><?php echo $Snapchat7; ?></td>
                <td><?php echo $Snapchat8; ?></td>
                <td><?php echo $Snapchat9; ?></td>
                <td><?php echo $Snapchat10; ?></td>
                <td><?php echo $Snapchat11; ?></td>
                <td><?php echo $Snapchat12; ?></td>
                <td><?php echo $Snapchat13; ?></td>
            </tr>
            <tr>
                <td>TikTok: </td>
                <td><?php echo $TikTok; ?></td>
                <td><?php echo $TikTok5; ?></td> 
                <td><?php echo $TikTok6; ?></td>
                <td><?php echo $TikTok7; ?></td>
                <td><?php echo $TikTok8; ?></td>
                <td><?php echo $TikTok9; ?></td>
                <td><?php echo $TikTok10; ?></td>
                <td><?php echo $TikTok11; ?></td>
                <td><?php echo $TikTok12; ?></td>
                <td><?php echo $TikTok13; ?></td>
            </tr>
            <tr>
                <td>Discord: </td>
                <td><?php echo $Discord; ?></td>
                <td><?php echo $Discord5; ?></td> 
                <td><?php echo $Discord6; ?></td>
                <td><?php echo $Discord7; ?></td>
                <td><?php echo $Discord8; ?></td>
                <td><?php echo $Discord9; ?></td>
                <td><?php echo $Discord10; ?></td>
                <td><?php echo $Discord11; ?></td>
                <td><?php echo $Discord12; ?></td>
                <td><?php echo $Discord13; ?></td>
            </tr>
            <tr>
                <td>Steam: </td>
                <td><?php echo $Steam; ?></td>
                <td><?php echo $Steam5; ?></td> 
                <td><?php echo $Steam6; ?></td>
                <td><?php echo $Steam7; ?></td>
                <td><?php echo $Steam8; ?></td>
                <td><?php echo $Steam9; ?></td>
                <td><?php echo $Steam10; ?></td>
                <td><?php echo $Steam11; ?></td>
                <td><?php echo $Steam12; ?></td>
                <td><?php echo $Steam13; ?></td>
            </tr>
            <tr>
                <td>Pinterest: </td>
                <td><?php echo $Pinterest; ?></td>
                <td><?php echo $Pinterest5; ?></td> 
                <td><?php echo $Pinterest6; ?></td>
                <td><?php echo $Pinterest7; ?></td>
                <td><?php echo $Pinterest8; ?></td>
                <td><?php echo $Pinterest9; ?></td>
                <td><?php echo $Pinterest10; ?></td>
                <td><?php echo $Pinterest11; ?></td>
                <td><?php echo $Pinterest12; ?></td>
                <td><?php echo $Pinterest13; ?></td>
            </tr>
            <tr>
                <td>Reddit: </td>
                <td><?php echo $Reddit; ?></td>
                <td><?php echo $Reddit5; ?></td> 
                <td><?php echo $Reddit6; ?></td>
                <td><?php echo $Reddit7; ?></td>
                <td><?php echo $Reddit8; ?></td>
                <td><?php echo $Reddit9; ?></td>
                <td><?php echo $Reddit10; ?></td>
                <td><?php echo $Reddit11; ?></td>
                <td><?php echo $Reddit12; ?></td>
                <td><?php echo $Reddit13; ?></td>
            </tr>
            <tr>
                <td>Threema: </td>
                <td><?php echo $Threema; ?></td>
                <td><?php echo $Threema5; ?></td> 
                <td><?php echo $Threema6; ?></td>
                <td><?php echo $Threema7; ?></td>
                <td><?php echo $Threema8; ?></td>
                <td><?php echo $Threema9; ?></td>
                <td><?php echo $Threema10; ?></td>
                <td><?php echo $Threema11; ?></td>
                <td><?php echo $Threema12; ?></td>
                <td><?php echo $Threema13; ?></td>
            </tr>
            <tr>
                <td>Viber: </td>
                <td><?php echo $Viber; ?></td>
                <td><?php echo $Viber5; ?></td> 
                <td><?php echo $Viber6; ?></td>
                <td><?php echo $Viber7; ?></td>
                <td><?php echo $Viber8; ?></td>
                <td><?php echo $Viber9; ?></td>
                <td><?php echo $Viber10; ?></td>
                <td><?php echo $Viber11; ?></td>
                <td><?php echo $Viber12; ?></td>
                <td><?php echo $Viber13; ?></td>
            </tr>
            <tr>
                <td>eBay: </td>
                <td><?php echo $Ebay; ?></td>
                <td><?php echo $Ebay5; ?></td> 
                <td><?php echo $Ebay6; ?></td>
                <td><?php echo $Ebay7; ?></td>
                <td><?php echo $Ebay8; ?></td>
                <td><?php echo $Ebay9; ?></td>
                <td><?php echo $Ebay10; ?></td>
                <td><?php echo $Ebay11; ?></td>
                <td><?php echo $Ebay12; ?></td>
                <td><?php echo $Ebay13; ?></td>
            </tr>
        </table>
        <?php
        $conn->close();
        ?>
    </body>
</html>