<!DOCTYPE html>
<html>
    <head>
        <title>Umfrage</title>
        <link rel="stylesheet" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>
    <body>
    <?php
    if(isset($_POST["submit"])){
    ?>
                <?php

        //Einloggen

        $servername = "localhost";
        $username = "root";
        $password = "seppi2512";
        $dbname = "surveyesel";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        /*
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }*/
        //Fehlermeldungen aktivieren


        //Variablen kriegen

        $Klasse = "'" . htmlspecialchars($_POST["Klasse"]) . "'";
        $Gender = "'" . htmlspecialchars($_POST["gender"]) . "'";
        $SmartAccess = "'" . htmlspecialchars($_POST["Acc"]) . "'";
        $Marke = "'" . htmlspecialchars($_POST["Brand"]) . "'";
        $Zeit = "'" . htmlspecialchars($_POST["time"]) . "'";
        $WoSchule = "'" . htmlspecialchars($_POST["Schule"]) . "'";
        $WoHome = "'" . htmlspecialchars($_POST["Zuhause"]) . "'";
        $WoUnterwegs = "'" . htmlspecialchars($_POST["Unterwegs"]) . "'";
        $WoSport = "'" . htmlspecialchars($_POST["Sport"]) . "'";
        $WozuChat = "'" . htmlspecialchars($_POST["Chat"]) . "'";
        $WozuMail = "'" . htmlspecialchars($_POST["E-Mail"]) . "'";
        $WozuTele = "'" . htmlspecialchars($_POST["Telefon"]) . "'";
        $WozuSMedia = "'" . htmlspecialchars($_POST["SMedia"]) . "'";
        $WozuNachschlag = "'" . htmlspecialchars($_POST["Nachschlag"]) . "'";
        $WozuSurfen = "'" . htmlspecialchars($_POST["Surfen"]) . "'";
        $WozuNavi = "'" . htmlspecialchars($_POST["Navi"]) . "'";
        $WozuTermine = "'" . htmlspecialchars($_POST["Termine"]) . "'";
        $WozuDaten = "'" . htmlspecialchars($_POST["Daten"]) . "'";
        $WozuGames = "'" . htmlspecialchars($_POST["games"]) . "'";
        $WozuVideo = "'" . htmlspecialchars($_POST["video"]) . "'";
        $WozuMusic = "'" . htmlspecialchars($_POST["music"]) . "'";
        $WozuLesen = "'" . htmlspecialchars($_POST["lesen"]) . "'";
        $Activity = "'" . htmlspecialchars($_POST["activity"]) . "'";
        $Nickname = "'" . htmlspecialchars($_POST["name"]) . "'";
        $Sucht =  "'" .htmlspecialchars($_POST["sucht"]) . "'";
        

        //einfügen

        $sql = "INSERT INTO `answers` ";
            $sql .= "(`Klasse`, `Gender`, `Zugang`, `Marke`, `Zeit`, `WoSchule`,
            `WoSport`, `WoUnterwegs`, `WoZuhause`, `WozuChat`, `WozuMail`,
            `WozuPhone`, `WozuSNetwork`, `WozuNachschlag`, `WozuSurfen`,
            `WozuNavi`, `WozuTermin`, `WozuDaten`, `WozuGame`, `WozuVideo`,
            `WozuMusik`, `WozuLesen`, `activity`, `nickname`, `sucht`) VALUES (";
            $sql .= $Klasse.", ";
            $sql .= $Gender.", ";
            $sql .= $SmartAccess.", ";
            $sql .= $Marke.", ";
            $sql .= $Zeit.", ";
            $sql .= $WoSchule.", ";
            $sql .= $WoHome.", ";
            $sql .= $WoUnterwegs.", ";
            $sql .= $WoSport.", ";
            $sql .= $WozuChat.", ";
            $sql .= $WozuMail.", ";
            $sql .= $WozuTele.", ";
            $sql .= $WozuSMedia.", ";
            $sql .= $WozuNachschlag.", ";
            $sql .= $WozuSurfen.", ";
            $sql .= $WozuNavi.", ";
            $sql .= $WozuTermine.", ";
            $sql .= $WozuDaten.", ";
            $sql .= $WozuGames.", ";
            $sql .= $WozuVideo.", ";
            $sql .= $WozuMusic.", ";
            $sql .= $WozuLesen.", ";
            $sql .= $Activity.", ";
            $sql .= $Nickname.", ";
            $sql .= $Sucht.")";


            if ($conn->query($sql) === TRUE) {
                echo "Erfolgreich gesendet!";
            } 

        /*Für Checkboxes */

        $Networks = $_POST['SNetworks'];
        if(empty($Networks))
        {
            $sql = "INSERT INTO `snetworks` (`Klasse`) VALUES " . $Klasse . ")";
        }
        else
        {
            $N = count($Networks);
            $sql = "INSERT INTO `snetworks` (`Klasse`,";
            $VCount = 0;
            for($i=0; $i < $N; $i++)
            {

                switch ($Networks[$i]) {
                    case "Amazon":
                        if($i == ($N - 1)){$sql .= " `Amazon`";}else{$sql .= " `Amazon`,";}
                        $VCount++;
                        break;
                    case "Apple":
                        if($i == ($N - 1)){$sql .= " `Apple`";}else{$sql .= " `Apple`,";}
                        $VCount++;
                        break;
                    case "Facebook":
                        if($i == ($N - 1)){$sql .= " `Facebook`";}else{$sql .= " `Facebook`,";}
                        $VCount++;
                        break;
                    case "Geocaching":
                        if($i == ($N - 1)){$sql .= " `Geocaching`";}else{$sql .= " `Geocaching`,";}
                        $VCount++;
                        break;
                    case "Google":
                        if($i == ($N - 1)){$sql .= " `Google`";}else{$sql .= " `Google`,";}
                        $VCount++;
                        break;
                    case "Instagram":
                        if($i == ($N - 1)){$sql .= " `Instagram`";}else{$sql .= " `Instagram`,";}
                        $VCount++;
                        break;
                    case "Microsoft":
                        if($i == ($N - 1)){$sql .= " `Microsoft`";}else{$sql .= " `Microsoft`,";}
                        $VCount++;
                        break;
                    case "Skype":
                        if($i == ($N - 1)){$sql .= " `Skype`";}else{$sql .= " `Skype`,";}
                        $VCount++;
                        break;
                    case "Twitter":
                        if($i == ($N - 1)){$sql .= " `Twitter`";}else{$sql .= " `Twitter`,";}
                        $VCount++;
                        break;
                    case "Whatsapp":
                        if($i == ($N - 1)){$sql .= " `Whatsapp`";}else{$sql .= " `Whatsapp`,";}
                        $VCount++;
                        break;
                    case "YouTube":
                        if($i == ($N - 1)){$sql .= " `YouTube`";}else{$sql .= " `YouTube`,";}
                        $VCount++;
                        break;
                    case "Telegram":
                        if($i == ($N - 1)){$sql .= " `Telegram`";}else{$sql .= " `Telegram`,";}
                        $VCount++;
                        break;
                    case "Netflix":
                        if($i == ($N - 1)){$sql .= " `Netflix`";}else{$sql .= " `Netflix`,";}
                        $VCount++;
                        break;
                    case "Spotify":
                        if($i == ($N - 1)){$sql .= " `Spotify`";}else{$sql .= " `Spotify`,";}
                        $VCount++;
                        break;
                    case "Snapchat":
                        if($i == ($N - 1)){$sql .= " `Snapchat`";}else{$sql .= " `Snapchat`,";}
                        $VCount++;
                        break;
                    case "TikTok":
                        if($i == ($N - 1)){$sql .= " `TikTok`";}else{$sql .= " `TikTok`,";}
                        $VCount++;
                        break;
                    case "Discord":
                        if($i == ($N - 1)){$sql .= " `Discord`";}else{$sql .= " `Discord`,";}
                        $VCount++;
                        break;
                    case "Steam":
                        if($i == ($N - 1)){$sql .= " `Steam`";}else{$sql .= " `Steam`,";}
                        $VCount++;
                        break;
                    case "Pinterest":
                        if($i == ($N - 1)){$sql .= " `Pinterest`";}else{$sql .= " `Pinterest`,";}
                        $VCount++;
                        break;
                    case "Reddit":
                        if($i == ($N - 1)){$sql .= " `Reddit`";}else{$sql .= " `Reddit`,";}
                        $VCount++;
                        break;
                    case "Threema":
                        if($i == ($N - 1)){$sql .= " `Threema`";}else{$sql .= " `Threema`,";}
                        $VCount++;
                        break;
                    case "Viber":
                        if($i == ($N - 1)){$sql .= " `Viber`";}else{$sql .= " `Viber`,";}
                        $VCount++;
                        break;
                    case "eBay":
                        $sql .= " `eBay`";
                        $VCount++;
                        break;
                        
                }
                
            }

            $sql .= ") VALUES (" . $Klasse . ", ";;

            for($i=0; $i < $VCount; $i++)
            {
                if($i == ($VCount - 1))
                {
                    $sql .= "'1'";
                } else{
                    $sql .= "'1',";
                }
                
            }
            $sql .= ")";
        }

            
        if ($conn->query($sql) === TRUE) {
                echo "<br>Erfolgreich gesendet!";
            } 
        
        $conn->close();
    
    ?>
    <?php
    }else{
        ?>
<div class="top">
            <img src="img/logo.jpg" alt="" class="msLogo">
            <img src="img/Schullogo-(Kopf).png" class="elgLogo" alt="">
        </div>
        <div class="bottom">
                <div class="form">
                    <h1>Umfrage zur Mediennutzung am ELG Alzey</h1>
                    <small>Präsentiert durch die Medienscouts</small>
                    <hr>
                <form method="POST">

                    <div class="Klasse formq">
                        <label for="Klasse">Klasse:</label>
                        <select name="Klasse" id="Klasse">
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                        </select>
                    </div>

                    <div class="sex formq">
                        <label for="gender">Geschlecht:</label>
                        <select name="gender" id="gender">
                            <option value="m">Männlich</option>
                            <option value="f">Weiblich</option>
                            <option value="d">Divers</option>
                        </select>
                    </div>

                    <div class="SmartphoneAccess formq">
                        <h3>Hast du Zugang zu einem Smartphone?</h3>                        
                        <input type="radio" name="Acc" value="Ja" id="Acc" checked>
                        <label for="Ja">Ja, ich besitze ein eigenes Smartphone.</label> <br>
                        <input type="radio" name="Acc" value="Familie" id="Acc"> 
                        <label for="Familie">Ja, ich benutze das Smartphone meiner Eltern oder Geschwister.</label><br>
                        <input type="radio" name="Acc" value="Nein" id="Acc"> 
                        <label for="Nein">Nein, ich habe keinen Zugang zu einem Smartphone.</label><br>
                    </div>

                    <div class="Brand formq">
                        <h3>Von welcher Marke ist dein Smartphone?</h3>
                        <select name="Brand" id="Brand">
                            <option value="OnePlus">OnePlus</option>
                            <option value="Apple">Apple</option>
                            <option value="Samsung">Samsung</option>
                            <option value="Blackberry">Blackberry</option>
                            <option value="Google">Google</option>
                            <option value="HTC">HTC</option>
                            <option value="LG">LG</option>
                            <option value="Sony">Sony</option>
                            <option value="Motorola">Motorola</option>
                            <option value="Huawei">Huawei</option>
                            <option value="Nokia">Nokia</option>
                            <option value="Xiaomi">Xioami</option>
                            <option value="other">Andere</option>
                        </select>
                    </div>  

                    <div class="Time formq">
                        <h3>Wie viel Zeit verbringst du täglich an deinem Smartphone?</h3>
                        <select name="time" id="time">
                            <option value="less30">&#60;30min</option>
                            <option value="30-60">30min - 1h</option>
                            <option value="60-120">1h - 2h</option>
                            <option value="120-180">2h - 3h</option>
                            <option value="180-240">3h - 4h</option>
                            <option value="more240">> 4h</option>
                        </select>
                    </div>

                    <div class="wo formq">
                        <h3>Wo nutzt du dein Smartphone?</h3>
                        <label for="Schule">In der Schule:</label>
                        <select name="Schule" id="Schule">
                            <option value="nie">nie</option>
                            <option value="manchmal">manchmal</option>
                            <option value="oft">häufig</option>
                        </select>
                        <br><br>
                        <label for="Zuhause">Zuhause:</label>
                        <select name="Zuhause" id="Zuhause">
                            <option value="nie">nie</option>
                            <option value="manchmal">manchmal</option>
                            <option value="oft">häufig</option>
                        </select>
                        <br> <br>
                        <label for="Unterwegs">Unterwegs:</label>
                        <select name="Unterwegs" id="Unterwegs">
                            <option value="nie">nie</option>
                            <option value="manchmal">manchmal</option>
                            <option value="oft">häufig</option>
                        </select>
                        <br> <br>
                        <label for="Sport">Beim Sport:</label>
                        <select name="Sport" id="Sport">
                            <option value="nie">nie</option>
                            <option value="manchmal">manchmal</option>
                            <option value="oft">häufig</option>
                        </select>
                    </div>

                    <div class="wozu formq">
                            <h3>Wozu nutzt du dein Smartphone?</h3>
                            <h5>Kommunikation:</h5>
                            <br>
                            <label for="Chat">Chat:</label>
                            <select name="Chat" id="Chat">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br><br>
                            <label for="E-Mail">E-Mail:</label>
                            <select name="E-Mail" id="E-Mail">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <label for="Telefon">Telefonieren:</label>
                            <select name="Telefon" id="Telefon">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <label for="SMedia">Social Media:</label>
                            <select name="SMedia" id="SMedia">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <h5>Information:</h5>
                            <br>
                            <label for="Nachschlag">Nachschlagewerk:</label>
                            <select name="Nachschlag" id="Nachschlag">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br><br>
                            <label for="Surfen">Surfen im Internet:</label>
                            <select name="Surfen" id="Surfen">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <h5>Organisation:</h5>
                            <br>
                            <label for="Navi">Navigation:</label>
                            <select name="Navi" id="Navi">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br><br>
                            <label for="Termine">Termine und Aufgaben:</label>
                            <select name="Termine" id="Termine">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <label for="Daten">Datenspeicher:</label>
                            <select name="Daten" id="Daten">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <h5>Gaming:</h5>
                            <br>
                            <label for="games">Computerspiele:</label>
                            <select name="games" id="games">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br><br>
                            <h5>Multimedia:</h5>
                            <br>
                            <label for="video">Videostreaming:</label>
                            <select name="video" id="video">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br><br>
                            <label for="music">Musik hören:</label>
                            <select name="music" id="music">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                            <br> <br>
                            <label for="lesen">Lesen:</label>
                            <select name="lesen" id="lesen">
                                <option value="nie">nie</option>
                                <option value="manchmal">manchmal</option>
                                <option value="oft">häufig</option>
                            </select>
                    </div>

                    <div class="SNetworks formq">
                        <h3>Bei welchem der folgenden Dienste hast du einen Account?</h3>
                        <label for="Amazon">Amazon</label>
                        <input type="checkbox" value="Amazon" name="SNetworks[]">
                        <label for="Apple">Apple</label>
                        <input type="checkbox" value="Apple" name="SNetworks[]">
                        <label for="Facebook">Facebook</label>
                        <input type="checkbox" value="Facebook" name="SNetworks[]">
                        <label for="Geocaching">Geocaching</label>
                        <input type="checkbox" value="Geocaching" name="SNetworks[]">
                        <br> <br>
                        <label for="Google">Google</label>
                        <input type="checkbox" value="Google" name="SNetworks[]">
                        <label for="Instagram">Instagram</label>
                        <input type="checkbox" value="Instagram" name="SNetworks[]">
                        <label for="Microsoft">Microsoft</label>
                        <input type="checkbox" value="Microsoft" name="SNetworks[]">
                        <label for="Skype">Skype</label>
                        <input type="checkbox" value="Skype" name="SNetworks[]">
                        <br> <br>
                        <label for="Twitter">Twitter</label>
                        <input type="checkbox" value="Twitter" name="SNetworks[]">
                        <label for="Whatsapp">Whatsapp</label>
                        <input type="checkbox" value="Whatsapp" name="SNetworks[]">
                        <label for="YouTube">YouTube</label>
                        <input type="checkbox" value="YouTube" name="SNetworks[]">
                        <label for="Telegram">Telegram</label>
                        <input type="checkbox" value="Telegram" name="SNetworks[]">
                        <br> <br>
                        <label for="Netflix">Netflix</label>
                        <input type="checkbox" value="Netflix" name="SNetworks[]">
                        <label for="Spotify">Spotify</label>
                        <input type="checkbox" value="Spotify" name="SNetworks[]">
                        <label for="Snapchat">Snapchat</label>
                        <input type="checkbox" value="Snapchat" name="SNetworks[]">
                        <label for="TikTok">TikTok</label>
                        <input type="checkbox" value="TikTok" name="SNetworks[]">
                        <br> <br>
                        <label for="Discord">Discord</label>
                        <input type="checkbox" value="Discord" name="SNetworks[]">
                        <label for="Steam">Steam</label>
                        <input type="checkbox" value="Steam" name="SNetworks[]">
                        <label for="Pinterest">Pinterest</label>
                        <input type="checkbox" value="Pinterest" name="SNetworks[]">
                        <label for="Reddit">Reddit</label>
                        <input type="checkbox" value="Reddit" name="SNetworks[]">
                        <br> <br>
                        <label for="Threema">Threema</label>
                        <input type="checkbox" value="Threema" name="SNetworks[]">
                        <label for="Viber">Viber</label>
                        <input type="checkbox" value="Viber" name="SNetworks[]">
                        <label for="eBay">eBay</label>
                        <input type="checkbox" value="eBay" name="SNetworks[]">
                        <label for="Sonstige">Sonstige</label>
                        <input type="checkbox" value="Sonstige" name="SNetworks[]">
                        <br> <br>
                    </div>

                    <div class="aktivität formq">
                        <h3>Wie aktiv bist du in Sozialen Netzwerken?</h3>
                        <h5>Messenger wie Whatsapp sind ausgenommen</h5>                      
                        <input type="radio" name="activity" value="kein" checked>
                        <label for="kein">Ich nutze keine.</label> <br>
                        <input type="radio" name="activity" value="nurSchauen"> 
                        <label for="nurSchauen">Ich schaue nur, was andere posten.</label><br>
                        <input type="radio" name="activity" value="posteAbUndZu"> 
                        <label for="posteAbUndZu">Ich poste gelegentlich</label><br>
                        <input type="radio" name="activity" value="posteHäufig"> 
                        <label for="posteHäufig">Ich poste häufig</label><br>
                    </div>

                    <div class="profil formq">
                        <h3>Ist deinem Profil dein Name entnehmbar?</h3>
                        <input type="radio" name="name" value="nickname" checked> 
                        <label for="nickname">Ich nutze eine Nicknamen.</label> <br>
                        <input type="radio" name="name" value="nurVorOderNach"> 
                        <label for="nurVorOderNach">Nur Vorname oder Nachname.</label><br>
                        <input type="radio" name="name" value="VorUndNach"> 
                        <label for="VorUndNach">Vorname und Nachname.</label><br>
                        <input type="radio" name="name" value="Verschiedene"> 
                        <label for="Verschiedene">Ich nutze mehrere Profile</label><br>
                    </div>

                    <div class="sucht formq">
                        <label for="sucht">Fühlst du dich unwohl wenn du dein Smartphone nicht dabei hast?</label>
                        <select name="sucht" id="sucht">
                            <option value="Ja">Ja</option>
                            <option value="Nein">Nein</option>
                        </select>
                    </div>

                    <input type="submit" class="submit formq" name="submit">
                </form>
                
            </div>
        </div>
        <?php
    }
    ?>
    </body>
</html>