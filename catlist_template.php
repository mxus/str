<?php
    $servername = "localhost";
    $username = "mks";
    $password = "q";
    $dbname = "store";
    $create_db = "
    create table cameras
    (
        Name VARCHAR(30),
        SnipPict TEXT,
        VResolution TEXT,
        PhResolution TEXT,
        Battery TEXT,
        Matrix TEXT,
        Lens TEXT,
        Monopod BOOLEAN,
        Aquabox BOOLEAN,
        PRIMARY KEY(Name)
    );";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create db
    //if ($conn -> query($create_db) === TRUE) {
    //    echo "db created successfully";
    //} else {
    //    echo "db create error:" . $conn->error;
    //}

    // Fill in DB
    //$f = fopen("database.sql", 'r');
    //$sql_insert = fread($f, filesize("database.sql"));
    //fclose($f);
    //echo $sql_insert;
    //
    //if ($conn->query($sql_insert) === TRUE) {
    //    echo "sql processed";
    //} else {
    //    echo "Error sql: " . $conn->error;
    //}


    $lens_char = "FOV 170 f2.8";
    $result = $conn->query("select * from cameras;");
    echo $conn -> error;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Name = $row["Name"];
            $SnipPict =  $row["SnipPict"];
            $VResolution = $row["VResolution"];
            $PhResolution = $row["PhResolution"];
            $Battery = $row["Battery"];
            $Matrix = $row["Matrix"];
            $Lens = $row["Lens"];
            $Monopod = $row["Monopod"];
            $Aquabox = $row["Aquabox"];
            echo '<ul class="cameras-list">';
                include('snippet_template.html');
            echo '</ul>';
        }
    }
    


    $conn->close();

?>