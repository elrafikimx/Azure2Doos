<?php
    
    // Using MongoDB\Driver\Manager

    $bulk = new MongoDB\Driver\BulkWrite;

    $doc1 = ([

    'name' => 'Sol',

    'age' => 69,


    ]);

    $doc2 = ([

    'name' => 'Nico',

    'age' => 13,

    ]);

    $bulk->insert($doc1);

    $bulk->insert($doc2);

    $manager = new MongoDB\Driver\Manager(
        'mongodb+srv://elrafikimx:nicolas7@cluster0.rkv1y.mongodb.net/mydatabase?retryWrites=true&w=majority');

    $result = $manager->executeBulkWrite('mydatabase.mycollection', $bulk);

    echo "Mutiple Documents inserted successfully!";
    
?>
