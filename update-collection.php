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

// update collection 
$collection->update(array("title" => "MongoDB Title"),
                array('$set' =>array("title" => "MonggoDB Tutorial Topx")));
            echo "Document update successfully<br>";
// now display the update document
$cursor = $collection->find();

// iterasi cursor to display title of document
foreach ($cursor as $document) {
    echo $document["title"]."<br>";
    echo $document["description"]."<br>";
    echo $document["like"]."<br>";
}