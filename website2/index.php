<?php include_once 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server super globlas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
            <?php if($Server): ?>
                <ul class="list-group">    
                        <?php foreach($Server as $key=>$value):?>
                        <li class="list-group-item">
                            <strong><?php echo $key; ?> : </strong>
                            <?php echo $value; ?>
                        </li>
                        <?php endforeach;?>                    
                </ul>
            <?php endif; ?>
    </div>
    <div class="container">
        <h1>Client & File Info</h1>
        <?php if($Client): ?>
            <ul class="list-group">
                <?php foreach($Client as $key => $value):?>
                    <li class="list-group-item">
                        <strong><?php echo $key;?> : </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>   
        <?php endif; ?>
    </div>
</body>
</html>