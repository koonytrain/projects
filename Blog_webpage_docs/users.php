<?php
//Create Session
session_start();
//header
$page_title = 'User Page';
include('./includes/header.html');

//If a user name is entered display login mesage
	if (isset($_SESSION['first_name'])) {
		echo "</br>You currently logged in as {$_SESSION['first_name']}. Welcome to our website!";
}
?>

<p>This is a special page that only true fans of the Milwaukee Brewers can see.</p>
<p>The page is still under construction so be patient as we work on adding some amazing features</p>
</br>
<p>To pass the time while you wait for the site to be updated please enjoy this 7th inning stretch song</p>
</br></br>
<h1>Roll Out the Barrel:</h1>
<div class="barrel">
<p>Roll out the barrel, we'll have a barrel of fun</p>
<p>Roll out the barrel, we've got the blues on the run</p>
<p>Zing boom tararrel, ring out a song of good cheer</p>
<p>Now's the time to roll the barrel, for the gang's all here!</p>
<p>LET's GO BREW CREW!!!</p>
</div>

<?php

//footer
include('./includes/footer.html');
?>