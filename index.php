!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Yu-Gi-Oh</title>

</head>
<body>

<?php require "blocks/header.php"?>

<div class="container mt-5">
<h3>Персонажи</h3>
</div>
    <div class="d-flex flex-wrap">
<?php

for($i=0; $i<=5; $i++):
    $p="Тёмный Юги, Кацуя Дзёноути, Сэто Кайба, Андзу Мадзаки, Хирото Хонда, Юги Муто";
    $pieces= explode(",", $p);

?>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><?php echo $pieces[$i] . "<br>\r\n" ?></h4>

          </div>
          <div class="card-body">
              <img src="img/<?php  echo ($i+1) ?>.jpg" class="img-thumbnail">

            <ul class="list-unstyled mt-3 mb-4">
              <li>Возраст:15</li>
              <li>Школа: Старшая школа Домино</li>
              <li>Игрок в дуэльных монстров</li>
              <li>Сериал: Yu-Gi-Oh, Yu-Gi-Oh:Duel Monsters</li>
            </ul>
              <a href ='char.php' class='w-100 btn btn-lg btn-outline-primary'>Подробнее</a>;

          </div>
        </div>
      </div>
<?php endfor; ?>
        </div>
<?php require "blocks/footer.php"?>
</body>

</html>