<?php
/**
 * The front page.
 */

get_header();

// Get the GET vars.
$getMonth = $_GET['otd-month'];
$getDay = $_GET['otd-day'];

$useGetVars = false;

/* Validate the GET vars. The calls to ctype_digit check if the GET
vars (which are strings) contain only digits. */
if (ctype_digit($getMonth) && ctype_digit($getDay)) {
  $getMonth = (int)$getMonth;
  $getDay = (int)$getDay;

  if (($getMonth >= 1) && ($getMonth <= 12) && ($getDay >= 1) && ($getDay <= 31)) {
    $useGetVars = true;
  }
}

/* Check if valid GET vars were given. If so, use them. Otherwise, use
the current date. */
if ($useGetVars) {
  $month = $getMonth;
  $day = $getDay;
} else {
  $month = date('n');
  $day = date('j');
}

// Connect to the database.
include 'config.php';
$mysqli = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);

/* Check if the connection was successful. If not, create and store an
error message. Otherwise, query the database. */
if ($mysqli->connect_errno) {
  $dbError = 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
} else {
  // Query the database.
  $res = $mysqli->query("SELECT Description FROM EventHistory WHERE EventMonth = '" . $month . "' AND EventDay = '" . $day . "'");

  /* If there was an error querying the database, create and store an
  error message. */
  if (!$res) {
    $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $myslqi->error;
  }
}
?>

<div id="on-this-day">
  <h2>On This Day in Alabama Literary History</h2>
  <form method="get">
    <label for="month">Month:</label>
    <select name="otd-month" id="month">
      <?php
      $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

      // Create an <option> for each month of the year.
      for ($i = 1; $i <= 12; ++$i) {
        echo '<option ' . ($i == $month ? 'selected ' : '') . '" value="' . $i . '">' . $months[$i - 1] . '</option>';
      }
      ?>
    </select>
    <label for="day">Day:</label>
    <select name="otd-day" id="day">
      <?php
      // Create an <option> for each day of the month.
      for ($i = 1; $i <= 31; ++$i) {
        echo '<option ' . ($i == $day ? 'selected ' : '') . 'value="' . $i . '">' . $i . '</option>';
      }
      ?>
    </select>
    <input type="submit" value="Submit" />
  </form>
  <?php
  if ($dbError) {
    echo '<p>' . $dbError . '</p>';
  } elseif ($res->num_rows > 0) {
    echo '<ul>';

    while ($row = $res->fetch_assoc()) {
      echo '<li>' . str_replace('http://media.cla.auburn.edu/goodlyland/author.cfm', '/author', $row['Description']) . '</li>';
    }

    echo '</ul>';
  } else {
    echo "<p>There aren't any events for this day.</p>";
  }
  ?>
</div> <!-- #on-this-day -->

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
endif;

get_footer();
?>
