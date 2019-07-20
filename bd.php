<?php
 $dbloc = '95.213.237.40' ;
 $dbuser = $dbname = 'user3';
 $dbpass = 'pw';
 $dsn = $dsn = "mysql:host={$dbloc};dbname={$dbname}";
 return new PDO($dsn, $dbuser, $dbpass);
 ?>