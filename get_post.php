<?php 
    if(isset($_REQUEST['name']))
    {
    //     // echo $_GET['Name'];
    //     // print_r($_GET);
        $name=htmlentities($_REQUEST['name']);
        echo $name."<br>";
    //     // $email=htmlentities($_REQUEST['Email']);
    //     // echo $email."<br>";               
    }
    // echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post</title>
</head>
<body>
    <form action="get_post.php" method="GET">
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name">
        </div>
        <div>  
            <label for="Email">Email</label>
            <input type="text" name="Email">
        </div>
        <input type="submit" value="Submit">
    </form>
        <ul>
            <li>
                <a href="get_post.php?name=brad">Brad</a>                
            </li>
            <li>
                <a href="get_post.php?name=steve">Steve</a>                
            </li>
        </ul>
        <h1><?php echo "{$name}'s profile";?></h1>
</body>
</html>