<?php require_once ('core/init.php'); ?>

<?php
// Create Topic Object
$topic = new Topic;

// Get Template & Assing vars
$template = new Template('templates/frontpage.php');

// Assign Vars
$template->topics = $topic->getAllTopics();

// Display template
echo $template;