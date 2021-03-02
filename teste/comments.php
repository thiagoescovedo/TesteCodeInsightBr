<?php
    // including SausageHTTP
    require 'SausageHTTP.php';

    $client = new SausageHTTP\SausageHTTP\SausageHTTP();
    $client->setRequest([
        'URL' => 'https://jsonplaceholder.typicode.com/comments',
        'METHOD' => 'GET',
        'OPTIONS' => [
    
        ], 
        'HEADER'=> [],
    ]);

    // Decoding response from JSON to array
    $result = json_decode($client->response, 1);  
     
    echo "<a href=posts.php> <p style=text-align:right><button>Voltar</button></p></a>";
     
    foreach ($result as $key => $value) {
        echo "<b>Name: " . $value['name'] . '</b> <br></b> <br>';
        echo "<b>Body: " . $value['body'] . '</b> <br></b> <br>';   
        echo "<b>PostID: " . $value['postId'] . '</b> <br></b> <br>';   
        echo "<b>ID: " . $value['id'] . '</b> <br></b> <br>';   
        echo "<b>Email: " . $value['email'] . '</b> <br></b> <br>';   
        echo "<hr>"; 
    }
     

?>