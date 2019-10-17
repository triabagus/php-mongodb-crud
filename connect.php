<?php
// Include Composer autoloader
require 'vendor/autoload.php';

// connect to mongodb
$client = new MongoClient("mongodb://127.0.0.1:27017");
echo "Connection to database successfully<br>";

// select a database
$database = $client->nameDatabase;
echo "Database nameDatabase Selected<br>";

// create collection
$collection = $database->createCollection("nameDatabase");
echo "Created collection successfully";

?>