<html>
<title>count number of visits </title>
<h3> Write PHP program that keeps track of how many times a visitor has loaded the page </h3>
<body>
<?php
          $countvisit = 1;
           if(isset($_COOKIE['countvisit']))
           {
                  $countvisit= $_COOKIE['countvisit'];
                  $countvisit ++;
          }
          setcookie('countvisit',$countvisit);
          echo "You have visited the page " .$countvisit. " times ";
?>
</body>
</html>