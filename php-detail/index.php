<?php
  print "Hello, World! I am running on host " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
  echo "<br/><br/>";
  print "This app was built with php " . PHP_VERSION . "\n";
  echo "<br/><br/>";
  print "The value of the variable MY_STRING is " .getenv('MY_STRING')  . "\n";
  echo "<br/><br/>";
  print "The value of the variable MY_PASSWORD is " .getenv('MY_PASSWORD') . "\n";
  echo "<br/><br/>";

  if (file_exists('/detailsecret/id_rsa')) {
    echo "/detailsecret/id_rsa contains: ";
    echo "<br/><br/>";
    echo nl2br(file_get_contents( "/detailsecret/id_rsa" ));
   } else {
    echo "Nothing was found at /detailsecret/id_rsa.";
    }

  echo "<br/><br/>";
 

  if (file_exists('/detailfilemount/id_rsa.pub')) {
    echo "/detailfilemount/id_rsa.pub contains: ";
    echo "<br/><br/>";
    echo nl2br(file_get_contents( "/detailfilemount/id_rsa.pub" ));
   } else {
    echo "Nothing was found at /detailfilemount/id_rsa.pub";
    }
?>
