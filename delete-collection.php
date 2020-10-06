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

// now remove the document
$collection->remove(array("title"=>"MongoDB Title"));
echo "Documents deleted successfully<br>";

// now display the available documents
$cursor = $collection->find();

// iterate cursor to display title of documents
echo "Updated document<br><br>";

// iterasi cursor to display title of document
foreach ($cursor as $document) {
    echo $document["title"]."<br>";
    echo $document["description"]."<br>";
    echo $document["like"]."<br>";
}

/**
 * https://stackoverflow.com/questions/17809975/how-to-remove-a-document-referenced-by-an-id-in-mongodb-from-php
 * 
 * Done with stuck delete
 */