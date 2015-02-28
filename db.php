<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    function dbConnect($forceClear)
    {
        $dbFilename = 'usher.db';
        if($forceClear && file_exists($dbFilename)) {
            unlink($dbFilename);
        }
        $db = new SQLite3($dbFilename);
        return $db;
    }

    function initDB() {
        $db = dbConnect(true);
        $db->exec('CREATE TABLE people (
            person_id VARCHAR(30) NOT NULL PRIMARY KEY,
            first_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            email VARCHAR(255),
            phone_number VARCHAR(255),
            address VARCHAR(255),
            city VARCHAR(255),
            state VARCHAR(255),
            zip_code VARCHAR(30),
            gender VARCHAR(1),
            dob VARCHAR(255),
            is_interested_in_internship VARCHAR(1),
            language TEXT
        )');

        $db->exec('CREATE TABLE students (
            person_id VARCHAR(30) NOT NULL PRIMARY KEY,
            grade INT,
            interests TEXT,
            FOREIGN KEY (person_id) REFERENCES people(person_id)
        )');

        $db->exec('CREATE TABLE mentors (
            person_id VARCHAR(30) NOT NULL PRIMARY KEY,
            employer VARCHAR(255),
            job_title VARCHAR(255),
            industry TEXT,
            volunteer_area TEXT,
            expertise TEXT,
            when_available TEXT,
            why_want_to_volunteer TEXT,
            FOREIGN KEY (person_id) REFERENCES people(person_id)
        )');

        $ok = $db->exec("INSERT INTO people (person_id, first_name, last_name) VALUES ('hi','first','last');");
    }

    function getDB()
    {
        $db = dbConnect(false);
        $result = $db->query('SELECT * from people');
        $stringResult = "";
        while ($row = $result->fetchArray())
        {
            echo '['.$row['person_id'].','.$row['first_name'].','.$row['last_name'].']';
        }
    }

    if($_GET['action'] != NULL && $_GET['action'] == 'init')
    {
        initDB();
    }
    elseif($_GET['action'] && $_GET['action'] == 'view')
    {
        getDB();
    }
    else
    {
        echo "Please add a GET request for your action";
    }
?>