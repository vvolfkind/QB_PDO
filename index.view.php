<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<ul>
<?php 

    echo $movies[0]->title;
//var_dump($movies);?>
<?php for ($i=0; $i < count($movies) ; $i++): ?>

    <li><?php $movies[$i]->title; ?></li>
    
<?php endfor; ?>
</ul>
</body>
</html>