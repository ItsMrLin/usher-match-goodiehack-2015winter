<?php

    function initDB() {
        $dbFilename = 'usher.db';
        if (file_exists($dbFilename)) {
            unlink($dbFilename);
        }
        $db = new SQLite3($dbFilename);
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
            dob, VARCHAR(255),
            language TEXT
        )');

        $db->exec('CREATE TABLE students (
            person_id VARCHAR(30) NOT NULL PRIMARY KEY,
            FOREIGN KEY (person_id) REFERENCES people(person_id),
            grade INT,
            interests TEXT
        )');

        $db->exec('CREATE TABLE mentors (
            person_id VARCHAR(30) NOT NULL PRIMARY KEY,
            FOREIGN KEY (person_id) REFERENCES people(person_id),
            employer VARCHAR(255),
            job_title VARCHAR(255),
            industry TEXT,
            volunteer_area TEXT,
            expertise TEXT,
            why_want_to_volunteer TEXT
        )');
    }
    
    initDB();
?>