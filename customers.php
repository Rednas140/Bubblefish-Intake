<?php
session_start();

$customers = $_SESSION["customers"];
$notifications = $_SESSION["notifications"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubblefish Agency API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/335ebd1dff.js" crossorigin="anonymous"></script>
</head>
<body class="row">
    <nav class="col p-0 sideNav row">
        <header class="align-self-start text-center pt-5">
            <img src="./assets/bublefish_logo.png" class="logo-img img-fluid" alt="Logo van Bubblefish">
            <h1 class="fs-3 fw-bolder logo-text">Bubblefish Agency</h1>
        </header>
        <div class="align-self-center btn-group-vertical w-100 mt-0 pb-5 pe-0" role="group" aria-label="Navigatie van de webpaginas">
            <a class="w-100 btn-hover py-3" href="./index.php" aria-label="link naar de dashboard">
                <i class="fa-solid fa-chart-simple fa-xl menu-icon"></i>
                Dashboard
            </a>
            <a class="w-100 btn-hover py-3" href="./connections.php" aria-label="link naar de koppelingen">
                <i class="fa-solid fa-plug fa-xl menu-icon"></i>
                Koppelingen
            </a>
            <a class="w-100 btn-hover py-3" href="./apis.php" aria-label="link naar de api's">                
                <i class="fa-solid fa-network-wired fa-lg menu-icon"></i>                
                API's
            </a>
            <a class="w-100 btn-hover py-3 active-btn" href="./customers.php" aria-label="link naar de klanten">
                <i class="fa-solid fa-user fa-xl menu-icon active-btn"></i>                
                Klanten
            </a>
        </div>
        <footer class="btn-group-vertical w-100 align-self-end pe-0 pb-4" role="group" aria-label="Instellingen en logout">
                <a class="w-100 btn-footer py-3" href="./settings.php">
                    <img class="img-fluid icon-btn" src="./assets/settings-icon_2021-06-13/settings-icon.png" alt="instellingen icoon" srcset="./assets/settings-icon_2021-06-13/settings-icon.png 1x, ./assets/settings-icon_2021-06-13/settings-icon@2x.png 2x, ./assets/settings-icon_2021-06-13/settings-icon@3x.png 3x,">
                    Instellingen
                </a>
                <a class="w-100 btn-footer py-3" href="./index.php">
                    <img class="img-fluid icon-btn" src="./assets/logout-icon_2021-06-13/logout-icon.png" alt="klanten icoon" srcset="./assets/logout-icon_2021-06-13/logout-icon.png 1x, ./assets/logout-icon_2021-06-13/logout-icon@2x.png 2x, ./assets/logout-icon_2021-06-13/logout-icon@3x.png 3x,">
                    Uitloggen
                </a>
        </footer>
    </nav>
    <main class="col-10">
        <header class="navbar header-bar py-0">
            <a class="nav-item header-btn ms-4 py-2" href="#" aria-label="het maken van een nieuwe koppelingen">+ Nieuwe koppeling</a>
            <div class="d-flex justify-content-end">
                <a class="notif-bell px-4 d-flex justify-content-center" tabindex="0" id="notifToggler" aria-label="Openen van het meldingen scherm">
                    <img class="img-fluid icon-notif py-4" src="./assets/button-notifications_2021-06-13/button-notifications.png" alt="notificaties" srcset="./assets/button-notifications_2021-06-13/button-notifications.png 1x, ./assets/button-notifications_2021-06-13/button-notifications@2x.png 2x, ./assets/button-notifications_2021-06-13/button-notifications@3x.png 3x,">  
                </a>
                <a class="nav-item me-5 px-4 d-flex profile-anchor align-items-center" href="#" aria-label="Openen van het profiel scherm">
                    <img class="img-fluid profile-pic rounded-circle me-3" src="./assets/profilepics/test.jpg" alt="Profiel foto">
                    <div class="nav-item me-3 text-nowrap">Myrthe van Eijk</div>
                    <img class="img-fluid arrow-btn" src="./assets/arrow_2021-06-13/arrow.png" alt="instellingen icoon" srcset="./assets/arrow_2021-06-13/arrow.png 1x, ./assets/arrow_2021-06-13/arrow@2x.png 2x, ./assets/arrow_2021-06-13/arrow@3x.png 3x,">
                </a>
            </div>
        </header>
        <div class="card col-6 px-0 mx-2 border-0 mt-2 card-profiles">
                <div class="row p-3 justify-content-center align-items-start">
                    <h5 class="card-title">Laatste aanmeldingen</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Overzicht van de laatste aanmeldingen</h6>
                    <?php foreach($customers as $key=>$value): ?>
                    <div class="border-0 row card-login align-content-center justify-content-center my-2 py-2">
                        <div class="col-2 p-0 me-4 align-self-center">
                            <img class="img-fluid profile-image rounded-circle" src="./assets/profilepics/test.jpg" alt="profiel foto">
                        </div>
                        <div class="col-9 p-0 align-self-center">
                            <p class="ps-3 mb-0 time-text fw-semibold"><?= $value["lastVisit"] ?></p>
                            <p class="mt-1 mb-0 fw-bolder"><?= $value["name"] ?></p>
                            <p class="mb-0"><?= $value["company"]?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
        </div>
        <aside class="notif-screen p-3 align-items-center row" id="notifScreen">
            <div class="row col">
                <h5 class="col-10 mb-0">Meldingen</h5>
                <a class="col-2 align-self-center text-end red-link" id="closeScreen">Sluiten</a>
            </div>
            <?php foreach($notifications as $i=>$value): ?>
            <div class="border-0 ps-4 py-3 card-login my-2 mx-auto" id="notification<?=$i?>">
                <div class="p-0">
                    <div class="row">
                        <p class="ps-3 mb-0 time-text fw-semibold col-6"><?= $value['timePlaced']?></p>
                        <i class="fa-solid fa-xmark text-end col-6 notif-close" data-id="notification<?=$i?>" id="notifClose"></i>
                    </div>
                    <p class="mb-0 mt-1 fw-bolder"><?= $value['title']?></p>
                    <p class="mb-0 text-muted"><?= $value['content']?></p>
                    <a class="mb-0 red-link">Bekijken</a>
                </div>
            </div>
            <?php endforeach; ?>
        </aside>
    </main>
    <script src="./js/notifScreen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>