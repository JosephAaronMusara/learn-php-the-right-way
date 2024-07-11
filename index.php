<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $score = 775; ?>
    <?php if($score>=90 && $score<= 100): ?>
        <strong style="color: green;">A</strong>
    <?php elseif($score>=80 && $score< 90): ?>
        <strong style="color: aqua;">B</strong>
    <?php elseif($score>=70 && $score< 80): ?>
        <strong style="color: blue;">C</strong>
    <?php elseif($score>=0&& $score< 70): ?>
        <strong style="color: red;">F</strong>
    <?php else: ?>
        <strong style="color: darkred; background-color: cyan; font-weight: 900; ">Out of range. Score must be from zero to 100 </strong>
    <?php endif?>
</body>
</html>