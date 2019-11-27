<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    include "view/".$data['page'].".php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>