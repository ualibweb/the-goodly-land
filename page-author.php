<?php
/**
 * The author page template.
 */

function translateQuotes($string) {
  return strtr(strtr(strtr($string, '\x92', "'"), '\x93', '"'), '\x94', '"');
}

function printBookListItem($row) {
  echo '<li>';
  echo $row['BookAuthor'];

  if ($additionalAuthor = $row['BookAuthorAdditional']) {
    echo ', and ' . $additionalAuthor;
  }

  echo '. <span class="italic">' . $row['BookTitle'] . '</span>.';

  if ($illustrator = $row['BookIllistrator']) {
    echo ' Illus. ' . $illustrator . '.';
  }

  if ($editor = $row['BookEditor']) {
    echo ' Ed. ' . $editor . '.';
  }

  echo ' ' . $row['BookPublisherLocation'] . ': ' . $row['BookPublisher'] . ', ' . $row['BookPublisherYear'] . '.';

  if ($edition = $row['BookEdition']) {
    echo ' ' . $row['BookEdition'] . '.';
  }

  if ($link = $row['BookLink']) {
    echo ' An online version of <a class="italic" href="' . $link . '" target="_blank">' . $row['BookLinkTitle'] . '</a> is available from <a class="italic" href="' . $row['BookLinkAdditional'] . '" target="_blank">' . $row['BookLinkTitleAdditional'] . '</a>.';
  }

  if ($row['BookAudience'] == 'juvenile') {
    echo ' <span class="bold">For younger readers.</span>';
  }

  echo '</li>';
}

function printReferenceArticleListItem($row) {
  echo '<li>';

  if ($author = $row['ArticleAuthor']) {
    echo $author . '. ';
  }

  echo '"' . $row['ArticleTitle'] . '".';
  echo ' <span class="italic">' . $row['ArticlePeriodicalName'] . '</span>';

  if ($periodicalVolNum = $row['ArticlePeriodicalVolNum']) {
    echo ' ' . $periodicalVolNum;
  }

  if ($periodicalDayMonth = $row['ArticlePeriodicalDayMonth']) {
    echo ' ' . $periodicalDayMonth;
  }

  echo '.';

  if ($periodicalYear = $row['ArticlePeriodicalYear']) {
    if ($row['ArticlePeriodicalType'] == 'journal') {
      echo ' (' . $periodicalYear . ')';
    } else {
      echo ' ' . $periodicalYear;
    }
  }

  if ($periodicalPages = $row['ArticlePeriodicalPages']) {
    echo ': ' . $periodicalPages;
  }

  echo '.';
  echo '</li>';
}

function printReferenceBookChapterListItem($row) {
  echo '<li>';

  if ($author = $row['ChapBookAuthor']) {
    echo $author . '. ';
  }

  echo '"' . $row['ChapterTitle'] . '";';
  echo ' <span class="italic">' . $row['ChapBookTitle'] . '</span>.';

  if ($editor = $row['ChapBookEditor']) {
    echo ' Ed. ' . $editor . '.';
  }

  if ($volume = $row['ChapBookVolume']) {
    echo ' Vol. ' . $volume . '.';
  }

  echo ' ' . $row['ChapBookPublisherLocation'] . ':';
  echo ' ' . $row['ChapBookPublisher'] . ',';
  echo ' ' . $row['ChapBookPublisherYear'] . '.';
  echo ' ' . $row['ChapBookPageNumbers'] . '.';

  if ($row['ChapBookAudience'] == 'juvenile') {
    echo ' <span class="bold">For younger readers.</span>';
  }

  echo '</li>';
}

function printPrefaceListItem($row) {
  echo '<li>';

  if ($author = $row['PrefaceAuthor']) {
    echo $author . '. ';
  }

  echo $row['PrefaceTitle'] . '.';
  echo ' <span class="italic">' . $row['PrefaceBookTitle'] . '</span>';

  if ($bookAuthor = $row['PrefaceBookAuthor']) {
    echo ' by ' . $bookAuthor;
  }

  echo '.';

  if ($editor = $row['PrefaceBookEditor']) {
    echo ' ' . 'Ed. ' . $editor . '.';
  }

  echo ' ' . $row['PrefaceBookPublisherLocation'] . ':';
  echo ' ' . $row['PrefaceBookPublisher'] . ',';
  echo ' ' . $row['PrefaceBookPublisherYear'] . '.';
  echo ' ' . $row['PrefaceBookPageNumbers'] . '.';

  if ($row['PrefaceBookAudience'] == 'juvenile') {
    echo ' <span class="bold">For younger readers.</span>';
  }

  echo '</li>';
}

function printSiteListItem($row) {
  echo '<li>';

  if ($author = $row['SiteEssayAuthor']) {
    echo $author . '. ';
  }

  if ($essayTitle = $row['SiteEssayTitle']) {
    echo '"' . $essayTitle . '". ';
  }

  if ($siteTitle = $row['SiteTitle']) {
    echo '<span class="italic">' . $siteTitle . '</span>. ';
  }

  if (($publishYear = $row['SitePublishYear']) > 0) {
    echo $publishYear . '. ';
  }

  if ($publisher = $row['SitePublisher']) {
    echo $publisher . '. ';
  }

  echo '<a href="' . $row['SiteURL'] . '" target="_blank">' . $row['SiteURL'] . '</a>.';
  echo '</li>';
}

// Get the GET var.
$authorID = $_GET['AuthorID'];

/* Validate the GET var. The call to ctype_digit checks if the GET
var (which is a string) contains only digits. */
if (ctype_digit($authorID)) {
  $authorID = (int)$authorID;
} else {
  header('Location: ' . home_url('/author-list/'));
}

// Connect to the database.
include 'config.php';
$mysqli = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);

/* Check if the connection was successful. If not, create and store an
error message. Otherwise, query the database for the author. */
if ($mysqli->connect_errno) {
  $dbError = 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
} else {
  // Query the database.
  $res = $mysqli->query("SELECT * FROM Authors WHERE AuthorID = '" . $authorID . "'");

  /* Check if the query was successful. If not, create and store an
  error message. Otherwise, check if a row was returned by the query. */
  if (!$res) {
    $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $myslqi->error;
  } else {
    $authorRow = $res->fetch_assoc();

    /* Check if a row was returned by the query. If not, redirect the
    user to the Author List page. Otherwise, continue querying the
    database. */
    if (!$authorRow) {
      header('Location: ' . home_url('/author-list/'));
    } else {
      $res = $mysqli->query("SELECT * FROM Books WHERE AuthorID = '" . $authorID . "' AND BookType = 'selected' ORDER BY BookPublisherYear");

      if (!$res) {
        $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
      } else {
        $selectedWorksRows = $res->fetch_all(MYSQLI_ASSOC);

        $res = $mysqli->query("SELECT * FROM Books WHERE AuthorID = '" . $authorID . "' AND BookType = 'reference' ORDER BY BookAuthor");

        if (!$res) {
          $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
        } else {
          $referenceBooksRows = $res->fetch_all(MYSQLI_ASSOC);

          $res = $mysqli->query("SELECT * FROM Articles WHERE AuthorID = '" . $authorID . "' ORDER BY ArticleAuthor");

          if (!$res) {
            $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
          } else {
            $referenceArticlesRows = $res->fetch_all(MYSQLI_ASSOC);

            $res = $mysqli->query("SELECT * FROM Chapters WHERE AuthorID = '" . $authorID . "' ORDER BY ChapBookAuthor");

            if (!$res) {
              $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
            } else {
              $referenceBookChaptersRows = $res-> fetch_all(MYSQLI_ASSOC);

              $res = $mysqli->query("SELECT * FROM Prefaces WHERE AuthorID = '" . $authorID . "' ORDER BY PrefaceAuthor");

              if (!$res) {
                $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
              } else {
                $prefacesRows = $res-> fetch_all(MYSQLI_ASSOC);

                $res = $mysqli->query("SELECT * FROM Sites WHERE AuthorID = '" . $authorID . "' ORDER BY SiteEssayAuthor");

                if (!$res) {
                  $dbError = 'Query failed: (' . $mysqli->errno . ') ' . $mysqli->error;
                } else {
                  $sitesRows = $res-> fetch_all(MYSQLI_ASSOC);
                }
              }
            }
          }
        }
      }
    }
  }
}

get_header();

if ($dbError) {
  echo '<p>' . $dbError . '</p>';
} else {
  echo '<h2>' . $authorRow['AuthorTitle'] . ' (' . $authorRow['AuthorBirth'] . '&ndash;' . ($authorRow['AuthorDeath'] ?: 'present') . ')</h2>';

  if ($image = $authorRow['AuthorImage']) {
    echo '<img alt="' . $row['AuthorAlt'] . '" class="author-img" src="' . get_template_directory_uri() . '/images/' . $image . '.jpg" />';
  }

  // Other Names Used
  if ($otherNames = $authorRow['AuthorOtherNames']) {
    echo '<h3 class="author-h3">Other Names Used</h3>';
    echo $otherNames;
  }

  // Alabama Connections
  echo '<h3 class="author-h3">Alabama Connections</h3>';
  echo translateQuotes($authorRow['AuthorAlaConnect']);

  // Selected Works
  if ($selectedWorksRows) {
    echo '<h3 class="author-h3">Selected Works</h3>';
    echo '<ul>';

    foreach ($selectedWorksRows as $row) {
      printBookListItem($row);
    }

    echo '</ul>';
  }

  // Literary Awards
  if ($awards = $authorRow['AuthorAwards']) {
    echo '<h3 class="author-h3">Literary Awards</h3>';
    echo translateQuotes($awards);
  }

  // Biographical Information
  if ($biography = $authorRow['AuthorBiography']) {
    echo '<h3 class="author-h3">Biographical Information</h3>';
    echo translateQuotes($biography);
  }

  // Interests and Themes
  if ($interests = $authorRow['AuthorInterests']) {
    echo '<h3 class="author-h3">Interests and Themes</h3>';
    echo translateQuotes($interests);
  }

  // For More Information
  ?>
  <h3 class="author-h3">For More Information</h3>
  <p>Please check your local library for these materials. If items are not available locally, your librarian can help you borrow them through the InterLibrary Loan program. Your librarian can also help you find other information about this author.</p>
  <p>There may be more information available through the databases in the <a class="italic" href="http://www.avl.lib.al.us/" target="_blank">Alabama Virtual Library</a>. If you are an Alabama citizen, <span class="italic">AVL</span> can be used at your public library or school library media center. You can also get a username and password from your librarian to use <span class="italic">AVL</span> at home.</p>
  <?php

  // Reference Books
  if ($referenceBooksRows) {
    echo '<h3 class="author-h3">Reference Books</h3>';
    echo '<ul>';

    foreach ($referenceBooksRows as $row) {
      printBookListItem($row);
    }

    echo '</ul>';
  }

  // Reference Articles
  if ($referenceArticlesRows) {
    echo '<h3 class="author-h3">Reference Articles</h3>';
    echo '<ul>';

    foreach ($referenceArticlesRows as $row) {
      printReferenceArticleListItem($row);
    }

    echo '</ul>';
  }

  // Reference Book Chapters and Encyclopedia Entries
  if ($referenceBookChaptersRows) {
    echo '<h3 class="author-h3">Reference Book Chapters and Encyclopedia Entries</h3>';
    echo '<ul>';

    foreach ($referenceBookChaptersRows as $row) {
      printReferenceBookChapterListItem($row);
    }

    echo '</ul>';
  }

  // Reference Book Prefaces
  if ($prefacesRows) {
    echo '<h3 class="author-h3">Reference Book Prefaces</h3>';
    echo '<ul>';

    foreach ($prefacesRows as $row) {
      printPrefaceListItem($row);
    }

    echo '</ul>';
  }

  // Reference Web Sites
  if ($sitesRows) {
    echo '<h3 class="author-h3">Reference Web Sites</h3>';
    echo '<ul>';

    foreach ($sitesRows as $row) {
      printSiteListItem($row);
    }

    echo '</ul>';
  }

  // Location of Papers
  if ($paperLocations = $authorRow['AuthorPaperLocations'])
  echo '<h3 class="author-h3">Location of Papers</h3>';
  echo '<p>' . $paperLocations . '</p>';

  echo '<p class="italic">' . $authorRow['AuthorImageCredit'] . '</p>';
  echo '<p> Last updated on ' . date('M d, Y', strtotime($authorRow['AuthorLastUpdated'])) . '.</p>';
}

get_footer();
?>
