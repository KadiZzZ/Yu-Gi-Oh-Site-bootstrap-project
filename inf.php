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
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-white">Персонажи</a></li>
                <li><a href="inf.php" class="nav-link px-2 text-secondary">Информация</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Карты</a></li>

            </ul>

        </div>
    </div>
</header>


<div class="container mt-5">

</div>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Yu-Gi-Oh</h1>
        <p class="lead fw-normal">Юги Муто — отчасти хрупкий молодой мальчик, который, оказывается, большой поклонник игр любого рода. Но когда он решает древнюю египетскую головоломку, Юги получает все силы тьмы. Теперь, столкнувшись с опасностью и несправедливостью, он превращает эту силу в гораздо более тёмную и опасную форму и приступает к сражению за справедливость и наказание..</p>
        <a class="btn btn-outline-secondary" href="#">Узнать больше</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block">
       <img src = "img/card.jpg">
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block">
        <img src= "img/card2.jpg">
    </div>
</div>

<div class="h-20 p-3 text-white bg-dark rounded-3">
    <h2>Югио</h2>
    <p>То, что нельзя увидеть, но можно почуствовать</p>
    <button class="btn btn-outline-light" type="button">В чём магия карт?</button>
</div>
<?php require "blocks/footer.php"?>
</body>

</html>