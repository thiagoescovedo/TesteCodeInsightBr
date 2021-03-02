<?php
    // including SausageHTTP
    require 'SausageHTTP.php'; 
    
    $client = new SausageHTTP\SausageHTTP\SausageHTTP();
    $client->setRequest([
        'URL' => 'https://jsonplaceholder.typicode.com/posts',
        'METHOD' => 'GET',
        'OPTIONS' => [
    
        ], 
        'HEADER'=> [],
    ]);
    
    // Decoding response from JSON to array
    $result = json_decode($client->response, 1);   
     
    echo "<a href=posts.php> <p style=text-align:right><button>Voltar</button></p></a>";
    
    
    
    foreach ($result as $key => $value) {  

        echo "<b>Title: " . $value['title'] . '</b> <br></b> <br>';
        echo "<b>Body: " . $value['body'] . '</b> <br></b> <br>';  
        echo "<b>User: " . $value['userId'] . '</b> <br></b> <br>';   
        echo "<b>ID: " . $value['id'] . '</b> <br></b> <br>';  
        
        echo '<hr>';  
 }



?>