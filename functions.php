<?php 

/*------------EXECUTION FUNCTIONS START HERE --------------------
---------------------------------------------------------------*/
// Returns multiple row results Two dimensional array
function result_exe_multiple($sql){
	require("database.php");

	try {
		$results = $db->query($sql);
	} catch(Exception $e){
		echo "Data could not be retrieved.";
		echo $e;
		exit;
	}

	$results = $results->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}
function status($avail){
	require ("database.php");
	if($avail) 
		return 'Available';
	else 
		return 'Reserved';

}
function availability($args,$date){
	require ("database.php");
	 $Availability=[ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
	 $counter=0;
	 if($date){
	 $queries=[
	 		 "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 09:00:00' AND end >=   '10:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 10:00:00' AND end >=   '11:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 11:00:00' AND end >=   '11:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 12:00:00' AND end >=   '13:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 13:00:00' AND end >=   '14:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 14:00:00' AND end >=   '15:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 15:00:00' AND end >=   '16:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 16:00:00' AND end >=   '7:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 17:00:00' AND end >=   '18:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 18:00:00' AND end >=   '19:00:00'",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = :thedate AND begin <= ' 19:00:00' AND end >=   '20:00:00'"];
	    }
	    else {
	    	$queries=[
	 		 "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 09:00:00' AND end >=   '10:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 10:00:00' AND end >=   '11:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 11:00:00' AND end >=   '11:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 12:00:00' AND end >=   '13:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 13:00:00' AND end >=   '14:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 14:00:00' AND end >=   '15:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 15:00:00' AND end >=   '16:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 16:00:00' AND end >=   '7:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 17:00:00' AND end >=   '18:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 18:00:00' AND end >=   '19:00:00')",
	        "SELECT * FROM Reservation WHERE room like :roomname AND date = CURDATE() AND (begin <= ' 19:00:00' AND end >=   '20:00:00')"];
	    	
	    }
	        foreach ($queries as $sql) {
	        $res= $db->prepare($sql);
	        $res->execute($args);
	        $result = $res->fetch(PDO::FETCH_ASSOC);
	        if($result){
	        	$Availability[$counter]=0;	
	        }
	        $counter++;
	    	}
	    	return $Availability;
}

//Returns 1 row result of SQL Statements
function result_exe($sql){
	require("database.php");

	try {
		$result = $db->query($sql);
	} catch(Exception $e){
		echo "Data could not be retrieved.";
		echo $e;
		exit;
	}

	$result = $result->fetch(PDO::FETCH_ASSOC);
	return $result;
}

// Executes Update, Delete or Insert SQL Statements
function execute($sql){
	require("database.php");

	try {
		$results = $db->query($sql);
	} catch(Exception $e){
		echo "Data could not be retrieved.";
		echo $e;
		exit;
	}
}

// Get all functions for tables
// Get Competitions
function get_all_comps(){
	$sql = 'SELECT * FROM comp ORDER BY type DESC, cu_name DESC';
	$result = result_exe_multiple($sql);
	return $result;
}

// Get Teams
function get_all_teams(){
	$sql = 'SELECT * FROM team ORDER BY worth DESC';
	$result = result_exe_multiple($sql);
	return $result;	
}

// Get Players
function get_all_players(){
	$sql = 'SELECT * FROM player ORDER BY p_id DESC';
	$result = result_exe_multiple($sql);
	return $result;	
}

// Function to get the player data through ID
function get_player($id){
	$sql = 'SELECT * FROM player WHERE p_id = '.$id;
	$result = result_exe($sql);
	return $result;	
}

// Function to get the player data through ID
function get_manager($id){
	$sql = 'SELECT * FROM manager WHERE m_id = '.$id;
	$result = result_exe($sql);
	return $result;	
}

// Function to get the team data through t_name
function get_team($t_name){
	$sql = 'SELECT * FROM team WHERE t_name = "'.$t_name.'"';
	$result = result_exe($sql);
	return $result;	
}

function get_team_manager($t_name){
	$sql = 'SELECT * FROM manager WHERE t_name = "'.$t_name.'"';
	$result = result_exe($sql);
	return $result;
}


//---------------- COUNT FUNCTIONS -----------------------------------

// Get count of all the players in the team
function get_player_count($team){
	$sql = 'SELECT count(p_id) as p_count FROM player WHERE t_name = "'.$team.'"';
	$result = result_exe($sql);
	return $result;
}

// Get average of all the players in a team
function get_avg_age_team($team){
	$sql = 'SELECT AVG(age) as avg_age FROM player_age WHERE t_name = "'.$team.'"';
	$result = result_exe($sql);
	$result = round($result['avg_age'], 1);
	return $result;
}

// Get age of player through id
function get_player_age($id){
	$sql = 'SELECT age FROM player_age WHERE p_id = '.$id;
	$result = result_exe($sql);
	$result = round($result['age']);
	return $result;
}

// Function to return a string of currency
function get_worth_string($worth){
	if($worth < 1){
		$worth = $worth * 1000;
		$worth = '$'.$worth.' million';
	}
	else
	{
		$worth = '$'.$worth.' billion';
	}

	return $worth;
}

// Function to return a string of currency
function get_worth_string_player($worth){
	$worth = $worth/1000000;
	$worth = $worth*1.35;
	$worth = '$'.$worth.' million';
	return $worth;
}

function show_property($location, $priceTo, $priceFrom){
    $priceTo = (int) $priceTo;
    $priceFrom = (int) $priceFrom;
    $sql = 'SELECT * FROM sale_property WHERE area LIKE "'.$location.'" or salePrice BETWEEN '.$priceFrom.' AND '.$priceTo;
    $result = result_exe_multiple($sql);
    return $result;
}
function show_property_rent($location, $priceTo, $priceFrom){
    $priceTo = (int) $priceTo;
    $priceFrom = (int) $priceFrom;
    $sql = 'SELECT * FROM rent_property WHERE area LIKE "'.$location.'" or MonthlyRent BETWEEN '.$priceFrom.' AND '.$priceTo;
    $result = result_exe_multiple($sql);
    return $result;
}
function show_user($email, $password, $isAdmin){
    
    $sql = 'SELECT * FROM user WHERE Email LIKE "'.$email.'" AND Password Like "'.$password.'" AND  IsAdmin = '.$isAdmin;
    $result = result_exe($sql);
    return $result;
}



?>

