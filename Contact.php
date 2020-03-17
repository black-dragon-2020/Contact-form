<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        require 'mail/phpmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        
        $mail->Username='*****';//your email
        $mail->Password='*******';//your password
        
        $mail->setFrom($_POST['email'],$_POST['Nom'].' '.$_POST['Prenom']);
        $mail->addAddress('abdelkodoussbelhaimer@gmail.com');
        $mail->AddReplyTo($_POST['email']);
        
        $mail->isHTML(true);
        $mail->Subject='From Your Website';
        $mail->Body='<h1 align=centre> From : '.$_POST['Nom'].' '.$_POST['Prenom'].'</h1>'
        .'<h3>Telephone : '.$_POST['Tel'].'</h3>'
        .'<p>'.$_POST['message'].'</p>';
        if(isset($_POST['submit']))
        {
        if(!$mail->send())
        {
            echo 'Message could not be sent!';
        }
        else
        {
            echo 'Message has been sent congratulation';
            
        } 
    }
    }       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css"> 
    <link rel="stylesheet" href="./css/all.css" media="all">
    <link rel="stylesheet" href="./css/Style.css">
    <title>Document</title>
</head>
<body>
    
    <div class='container'>  
        <h1 class='text-center'>Contactez-nous</h1> 
       
        <div class="alert alert-success custom-alert" role="alert">La form est correct</div>
        <div class="alert alert-danger custom-alertr" role="alert">La form est incorrect !</div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <input class="form-control nom" type="text" name='Nom' placeholder='Nom'>
            <input class="form-control prenom" type="text" name='Prenom' placeholder='Prenom'>
            <input class="form-control" type="text" name='Address' placeholder='Address'>
            <input class="form-control" type="text" name='Tel' placeholder='Tel'>
            <input class="form-control" type="email" name='email' placeholder='Email'>
            <textarea name="message" class='form-control'  rows="10" palceholder='écris nous un message'></textarea>
            <button name='submit' class='btn btn-success btn-block' type="submit" value='envoyer le message'>envoyer le message</button>
        </form>
    </div>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/Jquery.min.js"></script>
    <script src="./js/Script.js"></script>
</body>
</html>