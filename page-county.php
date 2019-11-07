<?php
/**
 * The county page template.
 */

 // Connect to the database.
 include 'config.php';
 $mysqli = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);

 // Get the GET var.
 $countyName = $_GET['CountyName'];

 // Validate and sanitize the GET var.
 if (isset($countyName) && !empty($countyName)) {
   $countyName = $mysqli->real_escape_string(strip_tags(trim($countyName)));
 } else {
   header('Location: ' . home_url('/county-list/'));
 }

 /* Check if the connection was successful. If not, create and store an
 error message. Otherwise, query the database. */
 if ($mysqli->connect_errno) {
   $dbError = 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
 } else {
   // Query the database.
   $res = $mysqli->query("SELECT AuthorTitle, AuthorID, AuthorFirst, AuthorLast FROM Authors WHERE CONCAT(';', AuthorCounties, ';') COLLATE latin1_general_cs LIKE '%;" . $countyName . ";%' ORDER BY AuthorLast, AuthorFirst");

   /* If there was an error querying the database, create and store an
   error message. */
   if (!$res) {
     $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $myslqi->error;
   }
 }

get_header();

if ($dbError) {
  echo '<p>' . $otdError . '</p>';
} else {
  echo '<h2>Authors with ' . $countyName . ' County Connections</h2>';

  if ($res->num_rows > 0) {
    echo "<p>Make a selection by choosing an author's name.</p>";
    echo '<ul>';

    while ($row = $res->fetch_assoc()) {
      echo '<li><a href="author?AuthorID=' . $row['AuthorID'] . '">' . $row['AuthorTitle'] . '</a></li>';
    }

    echo '</ul>';
  } else {
    echo '<p>There are no authors in our system associated with ' . $countyName . ' County yet.</p>';
  }
}

get_footer();
?>
