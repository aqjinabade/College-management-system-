
<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'project');
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
      ?>
   </body>
</html>
