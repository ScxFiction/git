<?php require_once ('core/init.php'); ?>

<?php
// Get Template & Assing vars
$template = new Template('templates/frontpage.php');

// Assign Vars
$template->heading = 'This is the template heading.';

// Display template
echo $template;