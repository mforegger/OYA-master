<?php

/*  Student Table CRUD */

	class Student {
		
		public function createStudent($student_number, $first_name, $middle_initial, $last_name, $birthday_month, $birthday_day, $birthday_year, $site_selection, $intervention_status) {
		
			include("account.php");
			
			$created = date("Y-m-d h:i:s", time());
			
			$q = "INSERT INTO students(student_number, first_name, middle_initial, last_name, birthday_month, birthday_day, birthday_year, site_selection, intervention_status, created) VALUES(:student_number, :first_name, :middle_initial, :last_name, :birthday_month, :birthday_day, :birthday_year, :site_selection, :intervention_status, :created)";
			
			$query = $link->prepare($q);
			$query->execute(array(
				":student_number" => $student_number,
				":first_name" => $first_name,
				":middle_initial" => $middle_initial,
				":last_name" => $last_name,
				":birthday_month" => $birthday_month,
				":birthday_day" => $birthday_day,
				":birthday_year" => $birthday_year,
				":site_selection" => $site_selection,
				":intervention_status" => $intervention_status,
				":created" => $created			
			));
			
			$results = $query->rowCount();
			if($results > 0) {
				return 1;	
			}
			else {
				return 0;	
			}
			
		
			
		}
		
		public function getAllStudents() {
			
			$include("account.php");
			
			$q = "SELECT * FROM students ORDER BY created DESC";
			$query = $link->prepare($q);
			$query->execute();
			$results = $query->fetchAll();
			
			if(count($results) > 0) {
				return json_encode($results);	
			}
			else {
				return 0;	
			}
		}
		
		public function getStudentByStudentId($student_id) {
		
			include("account.php");
			
			$q = "SELECT * FROM students WHERE student_id=:student_id";
			$query = $link->prepare($q);
			$query->execute(array(
				":student_id" => $student_id				
			));	
			
			$results = $query->fetchAll();
			
			if(count($results) > 0) {
				return json_encode($results);	
			}
			else {
				return 0;	
			}
		}
		
		public function getStudentById($id) {
			
			include('account.php');
			
			$q = "SELECT * FROM students WHERE id=:id";
			$query = $link->prepare($q);
			$query->execute(array(
				":id" => $id
			));
			$results = $query->fetchAll();
			
			if(count($results) > 0) {
				return json_encode($results);	
			}
			else {
				return 0;	
			}
		}
		
		public function updateStudentFirstName($id, $var) {
			
		}
		
		public function deleteStudent($id) {
			
			include("account.php");
			
			$q = "DELETE FROM students WHERE id=:id";
			$query = $link->prepare($q);
			$query->execute();
			
			$results = $query->rowCount();
			
			if($results > 0) {
				return 1;	
			}
			else {
				return 0;	
			}
		}
		
		
		
		
	}




?>