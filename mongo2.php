<?php
    //require 'vendor/autoload.php'; // include Composer's autoloader
    //$client = new MongoDB\Client('mongodb+srv://elrafikimx:nicolas7@cluster0.rkv1y.mongodb//.net/sample_airbnb?retryWrites=true&w=majority');
    //echo "Done 1!";
    // Connect to test database
    
    //$client = new mongodb();
    
    //print_r(get_loaded_extensions());
    
    //$db = $client->test;
    //$db = $m-&gt;$dbname;
    echo "Test 2 - MongoDB Client Library working...<BR>";
    //$client = new MongoDB\Client("mongodb://localhost:27017");
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    
    // Query Class
    $query = new MongoDB\Driver\Query([]);

    // Output of the executeQuery will be object of MongoDB\Driver\Cursor class
    $cursor = $manager->executeQuery('myshinynewdb.inventory', $query);

    // Convert cursor to Array and print result
    //print_r($cursor->toArray());
    
    $cursor2 = $cursor->toArray();
    
    echo json_encode($cursor2);
    
    echo "<br>Done 2!";
?>
