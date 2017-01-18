<?php

require_once 'app/init.php';

if(isset($_GET['as'], $_GET['item'])) {
	$as = $_GET['as'];
	$item = $_GET['item'];
	
	switch($as) {
		case 'finish':
			$finishQuery = $db->prepare("
				UPDATE items
				SET done = 1
				WHERE id = :item
				AND user = :user
			");
			
			$finishQuery->execute([
				'item' = $item
				'user' = $_SESSION['user_id']
			]);
			
		break;
		
	}
}

header('Location: index.php');