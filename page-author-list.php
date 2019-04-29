<?php
/**
 * The Author List page.
 */

 // Connect to the database.
 include 'config.php';
 $mysqli = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);

 /* Check if the connection was successful. If not, create and store an
 error message. Otherwise, query the database. */
 if ($mysqli->connect_errno) {
   $dbError = 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
 } else {
   // Query the database.
   $res = $mysqli->query("SELECT AuthorTitle, AuthorID FROM Authors ORDER BY AuthorLast, AuthorFirst");

   /* If there was an error querying the database, create and store an
   error message. */
   if (!$res) {
     $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $myslqi->error;
   }
 }

get_header();

if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_title('<h2>', '</h2>');
    the_content();
  endwhile;
endif;

if ($dbError) {
  echo '<p>' . $otdError . '</p>';
} else {
  echo '<ul>';

  while ($row = $res->fetch_assoc()) {
    echo '<li><a href="/author?/AuthorID=' . $row['AuthorID'] . '">' . $row['AuthorTitle'] . '</a></li>';
  }

  echo '</ul>';
}

get_footer();
?>
