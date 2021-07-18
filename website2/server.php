<?php
    #create server array..
    #its an assosiative array.
    $Server=[
        #gets server name
        'Host Server Name'=>$_SERVER['SERVER_NAME'],
        #gets header name
        'Host Header'=>$_SERVER['HTTP_HOST'],
        #get the info of server software
        'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
        #get root doc
        'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
        #get info of current page.
        'Current page'=>$_SERVER['PHP_SELF'],
        #get absolute path.
        'Absolute path'=>$_SERVER['SCRIPT_FILENAME']

    ];
    // echo "---------Server Info---------";
    // echo "<br>";
    // foreach($Server as $key=>$value){
    //     echo $key.' : '.$value;
    //     echo "</br>";
    // }
    // echo "---------Client Info---------";
    // echo "<br>";
    #create client array..
    $Client=[
        #get client system info
        'Client System info'=>$_SERVER['HTTP_USER_AGENT'],
        #get client ip address
        'Client Ip'=>$_SERVER['REMOTE_ADDR'],
        #get port no..
        'Remote Port'=>$_SERVER['REMOTE_PORT']        
    ];
    // foreach($client as $key=>$value){
    //     echo $key." : ".$value;
    //     echo"</br>";
    // }

?>