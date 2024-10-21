<?php
	$conn = mysqli_init();
	mysqli_ssl_set($conn,NULL,NULL, "cert.pem", NULL, NULL);
	mysqli_real_connect($conn, "essatdbcloud2024.mysql.database.azure.com", "mednasr", "Essat30083974..", "test", 3306, MYSQLI_CLIENT_SSL);
        if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
        } 
        


echo "<h1> Ceci est mon premier site web</h1>";

$result = $conn->query("select * from personne;");
foreach ($result as $row) {
    echo " id = " . $row['ID_Personne'] . "nom= ".$row['nom']."\n";
}


?>
