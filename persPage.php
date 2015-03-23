<?php
/*
Template Name: Per's costum page ...
*/
    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>

<h2> Per's costum page ... </h2>

<!-- in general you'd separate the layout from the content -->

<p>
 There's nothing you can do that can't be done.<br>
Nothing you can sing that can't be sung.<br>
Nothing you can say, but you can learn<br>
How to play the game <br>
It's easy.
<p>
<p>
 But then ... you cannot edit thix via the WP editor. And thax a proxbvm! Nox?
<p>
<!-- so it's better to get the content via the database -->

<div id="persContent">
<?php
// the loop
	while ( have_posts() ) : the_post();
		the_title('<h3>','</h3>');
		the_content();
	endwhile;
?>
</div>

