<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?ver=<?php echo time()?>">
    <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
    <meta http-equiv="X-RU-Compatible" content="ie=edge">
    <title>Chat</title>

</head>
<body>



    <div id="messages"></div>
    <form action="">
        <input type="text" id="message" autocomplete="off" autofocus placeholder="Type text">
        <input type="submit" value="Send">
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="main.js?ver=<?php echo time()?>"></script>
</body>
</html>