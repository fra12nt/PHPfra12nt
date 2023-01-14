<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"> content="width-device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>

            <body style='background-color:red'>
            <a style="color: white">
    </div>

    <div class="about_me">

      <h1> <?php echo $p ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php
                echo '<img src="/img/php.jpg">';
                ?>
            </div>
            <div class="fullname">
                <p> Меня зовут
                <?php echo $name, ' ', $surname . '<br>';
                      echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                <?php echo $age; ?>
                лет </p>
                <p> Я научился создавать переменные </p>
                <p> Изучил простые операции с ними </p>
            </div>

        <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $a, ' ', $b, ' ', $c;
                ?> <br>


  </div>

  <div class="article">
    <p class="text">
        Спартак, Спартак Москва, <br>
        Это больше чем жизнь <br>
        Это наша судьба - Спартак... <br>
        Пусть Бог хранит тебя <br>
        В красно-белых сердцах всегда <br>
        И до конца... <br>
        В сиянье звезд твоих <br>
        Слава прежних побед, <br>
        Слава будущих битв, <br>
        Спартак... <br>
        Пусть Бог тебя хранит <br>
        Рядом наших рядов гранит <br>
        И победит Спартак. <br>
        Пусть Бог хранит тебя... <br>
    </p>
  <div>
</div>
     <?php include 'footer.inc.php' ?>
</div>

</body>
</html>