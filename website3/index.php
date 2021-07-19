<?php
//check for submit
    if(filter_has_var(INPUT_POST,'submit')){
        // echo 'data uploaded';
        //get form data
        $name=htmlspecialchars( $_POST['name']);
        $email= htmlspecialchars($_POST['email']);
        $message=htmlspecialchars($_POST['message']);

        if(!empty($email) && !empty($name) && !empty($message)){
            //passed
            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                //failed
                $msg="Invalid Email Address";
                $msgclass="alert-danger";
            }else{
                //passed
                $toemail='shahnaik73@gmail.com';
                $subject='Contact Request From'.$name;
                $body='<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                        
                        //email headers
                        $headers="MIME-Version:1.0"."\r\n";
                        $headers.="Content-Type:text/html;charset=UTF-8"."\r\n";
                        //additoinal headers
                        $headers.="From".$name."<".$email.">"."\r\n";
                        if(mail($toemail,$subject,$body,$headers)){
                            //email sent
                            $msg="your email has been sent";
                            $msgclass="alert-sucess";
                        }else{
                            $msg='Mail not sent';
                            $msgclass="alert-danger";
                        }
            }
        }else{
            //failed
            $msg='please enter all the fields';
            $msgclass="alert-danger";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg!=''):?>
            <div class="alert <?php echo $msgclass?>"><?php echo $msg?></div>
        <?php endif;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
            <label>Name</label>            
            <input type="text" name="name" id="" class="form-control" value="<?php echo isset($_POST['name']) ? $name :' '?>">
            </div>
            <div class="form-group">
            <label>Email</label>            
            <input type="text" name="email" id="" class="form-control" value="<?php echo isset($_POST['email']) ? $email:' '?>">
            </div>
            <div class="form-group">
            <label>Message</label> <br>           
                <textarea name="message" class="form-control" id="" cols="30" rows="10">
                    <?php echo isset($_POST['message'])? $message:''?>
                </textarea>
            </div><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>