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
echo "Collection selected<br><br>";

// find colection 
$cursor = $collection->find();

foreach($cursor as $document):
    echo $document["title"]."<br>";
    echo $document["description"]."<br>";
    echo $document["like"]."<br>";
endforeach;