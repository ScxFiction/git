<?php
/*
* Get # of replies per topic
*/
function replyCount($topic_id){
	$db = new Database;
	$db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
	$db->bind(':topic_id', $topic_id); // PDO class :topic_id
	// Assign Rows
	$rows = $db->resultset();
	// Gey Count
	return $db->rowCount();
}
/*
* Get Categories
*/
function getCategories(){
	$db = new Database;
	$db->query('SELECT * FROM categories');

	// Assign Result Set
	$results = $db->resultset();

	return $results;
}