<html>
  <head>
    <title> Creating the MySQL Tables</title>
  <head>
  
  <body>
    <?php 
      $host = 'localhost:3036';
      $user = 'root';
      $pass = 'password';
      $conn = mysql_connect($host, $user, $pass);

      if (! $conn) {
        die('Could not connect: ' .mysql_error());
      }
      echo 'Connection is good!<br />';
      $sql = "CREATE TABLE tutorials_tbl( ".
      "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
      "tutorial_title VARCHAR(100) NOT NULL, ".
      "tutorial_author VARCHAR(40) NOT NULL, ".
      "submission_date DATE, ".
      "PRIMARY KEY ( tutorial_id )); ";
      mysql_select_db( 'TUTORIALS' );
      $retval = mysql_query( $sql, $conn );

      if(! $retval ) {
        die('Could not create table: ' . mysql_error());
      }
      echo "Table created successfully\n";
      mysql_close($conn);
?>
    </body>
</html>
