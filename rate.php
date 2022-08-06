<?php 
/* mandarin bot
made by: ahmed adhiyyu mohamed hassan
email: adhiyyuahmed@gmail.com
*/	
	$bad = false;
	if ($_GET['txt'] == null) {
		$bad = true;
	}
	if ($bad == false) {
		include("database.php");
		if ($_GET['rate'] == "good") {
			$sql = 'INSERT INTO good (texts, id) VALUES (:texts, :id)';
			$statement = $pdo->prepare($sql);					
			$statement->execute([
				':texts' => $_GET['txt'],
				':id' => rand(1,999999999)
			]);	
		} elseif ($_GET['rate'] == "bad") {
			$sql = 'INSERT INTO bad (texts, id) VALUES (:texts, :id)';
			$statement = $pdo->prepare($sql);					
			$statement->execute([
				':texts' => $_GET['txt'],
				':id' => rand(1,999999999)
			]);	
		}
	
	}
	header("Location: http://localhost/ma/index.php");
    exit();