<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="board">
<?php for($i = 0; $i < 8; $i++) : ?>
    
    <div class="row">
        <?php for($j = 0; $j < 4; $j++) : ?>
            <?php if($i % 2 === 0) : ?>
                
        <div class="white"></div>
        <div class="black"></div>
        <?php else : ?>
            <?php if($i === 3 && $j === 0) : ?>
                    <div class="black"></div>
            <div class="white"><img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="king"></div>
            <?php elseif ($i === 7 && $j === 2) : ?>
                 <div class="black"></div>
            <div class="white"><img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png" alt="king"></div>
                
            <?php else : ?>
            <div class="black"></div>
            <div class="white"></div>
            <?php endif; ?>
            <?php endif; ?>
<?php endfor; ?>
    </div>
<?php endfor; ?>
</div>
    
</body>
</html>