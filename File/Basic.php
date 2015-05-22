<?php

#Establishing the Connnection to the host and database with proper Credentials

$Connection = new mysqli("localhost", "root", "", "mysqli");
if ($Connection->connect_errno) 
{
    echo "Connection Failed".$Connection->connect_error;
    exit();
}

#Declaring Create Statement

$CreateTable = "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";

#Executing the Create Statement Query;

$Connection->query($CreateTable);

#Constructing Insert Query

$InsertQuery = "INSERT INTO users VALUES (1, 'sulthan', 'password', 'sa@sysaxiom.com', 'Chennai')";

#Executing Insert Query

$Connection->query($InsertQuery);

#Constructing Update Query

$UpdateQuery = "UPDATE users SET city = 'Chennai, India' WHERE id = 1";

#Executing Update Query

$Connection->query($UpdateQuery);

#Constructing Select Query

$CountingQuery = "SELECT * FROM users";

#Executing Select Query

$ExecutingCountingQuery = $Connection->query($CountingQuery);

#Counting the Number of coloums in the Select Query

$Count = $ExecutingCountingQuery->num_rows;

#Constructing Delete Statement for one id 

$DeleteQuery = "DELETE FROM users WHERE id = 7";

#Executing Delete Statement

$Connection->query($DeleteQuery);

#Constructing Delete Statement for one condition

$DeleteConditionQuery = "DELETE FROM users WHERE id > 5";

$Connection->query($DeleteConditionQuery);

#Constructing Delete all Query

$DeleteAllQuery = "DELETE FROM users";

#Executing Delete all Query

$Connection->query($DeleteAllQuery);

#Constructing Drop Query

$DropQuery = "DROP TABLE IF EXISTS users";

#Executing Drop Query

$Connection->query($DropQuery);

#Closing the Connection

$Connection->close();
