
<nav>
    <ul>
        <li><a href="auswertung.php">Auswertung</a></li>
    </ul>
</nav>

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

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Klasse: " . $row["Klasse"]. " - Geschlecht: " . $row["Gender"]. " - Zugang: " . $row["Zugang"]. 
                " - Handymarke: " . $row["Marke"]. " - Schule: " . $row["WoSchule"]. " - Sport: " . $row["WoSport"]. " - Unterwegs: " . $row["WoUnterwegs"].
                " - Zuhause: " . $row["WoZuhause"]. " - Chat: " . $row["WozuChat"]. " - E-mail: " . $row["WozuMail"]. " - Telefonieren: " . $row["WozuPhone"].
                " - Social Media: " . $row["WozuSNetwork"]. " - Nachschlagwerk: " . $row["WozuNachschlag"]. " - Surfen: " . $row["WozuSurfen"].
                " - Navigation: " . $row["WozuNavi"]. " - Termine: " . $row["WozuTermin"]. " - Datenspeicher: " . $row["WozuDaten"]. " - Gaming: " . $row["WozuGame"].
                " - Videostreaming: " . $row["WozuVideo"]. " - Musikstreaming: " . $row["WozuMusik"]. " - Lesen: " . $row["WozuLesen"]. " - Aktivität: " . $row["activity"].
                " - Nickname: " . $row["nickname"]. " - Suchtanzeichen: " . $row["sucht"].
                "<br><hr>";
            }
        } else {
            echo "0 results";
        }


        $conn->close();
?>