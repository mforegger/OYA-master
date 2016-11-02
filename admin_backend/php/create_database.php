<?php

	include("account.php");
	
	$q = "CREATE TABLE IF NOT EXIST student(
			id INT NOT NULL AUTO_INCREMENT,
			student_number VARCHAR(255) NOT NULL,
			first_name VARCHAR(255) NOT NULL,
			middle_initial VARCHAR(255),
			last_name VARCHAR(255) NOT NULL,
			birthday_month INT,
			birthday_day INT,
			birthday_year INT,
			site_selection VARCHAR(255),
			intervention_status VARCHAR(255),
			last_updated DATETIME,
			created DATETIME
	
	)";

	$query = $link->prepare($q);
	$query->execute();
	
	$q = "CREATE TABLE IF NOT EXISTS session(
			id INT NOT NULL AUTO_INCREMENT,
			student_number VARCHAR(255) NOT NULL,
			start_time DATETIME,
			end_time DATETIME,
			last_module VARCHAR(255),
			last_activity VARCHAR(255),
			partial_video_time TIME,
			created DATETIME
	
	)";

	$query = $link->prepare($q);
	$query->execute();
	
	$q = "CREATE TABLE IF NOT EXISTS facility(
			id INT NOT NULL AUTO_INCREMENT,
			facility_number INT NOT NULL,
			facility_name VARCHAR(255),
			created DATETIME

	)";

	$query = $link->prepare($q);
	$query->execute();
	
	$q = "CREATE TABLE IF NOT EXISTS administrator(
			id INT NOT NULL AUTO_INCREMENT,
			admin_id VARCHAR(255),
			admin_name VARCHAR(255),
			password VARCHAR(255),
			token VARCHAR(255),
			security_level INT,
			last_updated DATETIME,
			created DATETIME
	)";

?>