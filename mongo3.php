<?php
    
    $client = new MongoDB\Driver\Manager(
        'mongodb+srv://elrafikimx:nicolas7@cluster0.rkv1y.mongodb.net/mydatabase?retryWrites=true&w=majority');

    //$db = $client->mydatabase;
    
    $filter = [];
    
    // Query Class
    //$query = new MongoDB\Driver\Query(array('age' => 205));
    $query = new MongoDB\Driver\Query($filter);

    // Output of the executeQuery will be object of MongoDB\Driver\Cursor class
    $cursor = $client->executeQuery('mydatabase.mycollection', $query);

    // Convert cursor to Array and print result
    //print_r($cursor->toArray());
    
    $cursor2 = $cursor->toArray();
    
    echo json_encode($cursor2);
    
?>
