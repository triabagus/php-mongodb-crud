<?php
// Include Composer autoloader
require 'vendor/autoload.php';

// connect to mongodb
$client = new MongoClient("mongodb://127.0.0.1:27017");
echo "Connection to database successfully<br>";

// select a database
$database = $client->nameDatabase;
echo "Database nameDatabase Selected<br>";

// select a collection
$collection = $database->nameDatabase;
echo "Collection selected<br>";

// create document
$document = array(
    "title"         => "MongoDB Title",
    "description"   => "database",
    "like"          => 100
);

$collection->insert($document);
echo "Document inserted successfully";