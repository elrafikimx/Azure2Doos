<?php
    
    // Using MongoDB\Driver\Manager

    $bulk = new MongoDB\Driver\BulkWrite;

    $doc = [

    'name' => 'Nico',

    'age' => 13,

    ];

    $bulk->insert($doc);

    //$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $manager = new MongoDB\Driver\Manager(
        'mongodb+srv://elrafikimx:nicolas7@cluster0.rkv1y.mongodb.net/mydatabase?retryWrites=true&w=majority');

    $result = $manager->executeBulkWrite('mydatabase.mycollection', $bulk);
    
    echo "Document inserted successfully!";
    
?>
