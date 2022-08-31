<?php
 $totalWeb = 36;
 $totalConnect = 45;
 $activeConnect = 41;
 $inactiveConnect = 4;
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="./js/chart.js"></script>
</head>
<body class="row">
<nav class="col p-0 sideNav row">
        <header class="align-self-start text-center pt-5">
            <img src="./assets/bublefish_logo.png" class="logo-img img-fluid" alt="Logo van Bubblefish">
            <h1 class="fs-3 fw-bolder logo-text">Bubblefish Agency</h1>
        </header>
        <div class="align-self-center btn-group-vertical w-100 mt-0 pb-5 pe-0" role="group" aria-label="Navigatie van de webpaginas">
            <a class="w-100 btn-hover py-3" href="#">
                <img class="img-fluid icon-btn" src="./assets/dashboard-icon_2021-06-13/dashboard-icon.png" alt="Koppeling icoon" srcset="./assets/dashboard-icon_2021-06-13/dashboard-icon.png 1x, ./assets/dashboard-icon_2021-06-13/dashboard-icon@2x.png 2x, ./assets/dashboard-icon_2021-06-13/dashboard-icon@3x.png 3x,">
                Dashboard
            </a>
            <a class="w-100 btn-hover py-3" href="#">
                <img class="img-fluid icon-btn" src="./assets/connect-icon_2021-06-13/connect-icon.png" alt="Koppeling icoon" srcset="./assets/connect-icon_2021-06-13/connect-icon.png 1x, ./assets/connect-icon_2021-06-13/connect-icon@2x.png 2x, ./assets/connect-icon_2021-06-13/connect-icon@3x.png 3x,">
                Koppelingen
            </a>
            <a class="w-100 btn-hover py-3" href="#">                
                <img class="img-fluid icon-btn" src="./assets/api-icon_2021-06-13/api-icon.png" alt="API icoon" srcset="./assets/api-icon_2021-06-13/api-icon.png 1x, ./assets/api-icon_2021-06-13/api-icon@2x.png 2x, ./assets/api-icon_2021-06-13/api-icon@3x.png 3x,">
                API's
            </a>
            <a class="w-100 btn-hover py-3" href="#">
                <img class="img-fluid icon-btn" src="./assets/customers-icon_2021-06-13/customers-icon.png" alt="klanten icoon" srcset="./assets/customers-icon_2021-06-13/customers-icon.png 1x, ./assets/customers-icon_2021-06-13/customers-icon@2x.png 2x, ./assets/customers-icon_2021-06-13/customers-icon@3x.png 3x,">
                Klanten
            </a>
        </div>
        <footer class="btn-group-vertical w-100 align-self-end pe-0 pb-4" role="group" aria-label="Instellingen en logout">
                <a class="w-100 btn-footer py-3" href="#">
                    <img class="img-fluid icon-btn" src="./assets/settings-icon_2021-06-13/settings-icon.png" alt="instellingen icoon" srcset="./assets/settings-icon_2021-06-13/settings-icon.png 1x, ./assets/settings-icon_2021-06-13/settings-icon@2x.png 2x, ./assets/settings-icon_2021-06-13/settings-icon@3x.png 3x,">
                    Instellingen
                </a>
                <a class="w-100 btn-footer py-3" href="#">
                    <img class="img-fluid icon-btn" src="./assets/logout-icon_2021-06-13/logout-icon.png" alt="klanten icoon" srcset="./assets/logout-icon_2021-06-13/logout-icon.png 1x, ./assets/logout-icon_2021-06-13/logout-icon@2x.png 2x, ./assets/logout-icon_2021-06-13/logout-icon@3x.png 3x,">
                    Uitloggen
                </a>
        </footer>
    </nav>
    <main class="col-10">
        <header class="navbar header-bar py-0">
            <a class="nav-item header-btn ms-4 py-2" href="#">+ Nieuwe koppeling</a>
            <div class="d-flex justify-content-end">
                <a class="nav-item notif-bell px-4 d-flex justify-content-center" id="notifToggler">
                    <img class="img-fluid icon-notif py-4" src="./assets/button-notifications_2021-06-13/button-notifications.png" alt="notificaties" srcset="./assets/button-notifications_2021-06-13/button-notifications.png 1x, ./assets/button-notifications_2021-06-13/button-notifications@2x.png 2x, ./assets/button-notifications_2021-06-13/button-notifications@3x.png 3x,">  
                </a>
                <a class="nav-item me-5 px-4 d-flex profile-anchor align-items-center" href="#">
                    <img class="img-fluid profile-pic rounded-circle me-3" src="./assets/profilepics/test.jpg" alt="Profiel foto">
                    <div class="nav-item me-3 text-nowrap">Myrthe van Eijk</div>
                    <img class="img-fluid arrow-btn" src="./assets/arrow_2021-06-13/arrow.png" alt="instellingen icoon" srcset="./assets/arrow_2021-06-13/arrow.png 1x, ./assets/arrow_2021-06-13/arrow@2x.png 2x, ./assets/arrow_2021-06-13/arrow@3x.png 3x,">
                </a>
            </div>
        </header>
        <div class="row justify-content-center mt-5">
            <div class="card col-md-auto px-0 mx-4 border border-0" style="width: 20rem;">
                <img src="./assets/image_2021-06-13/image.png" class="card-img-top banner-img" alt="banner afbeelding" srcset="./assets/image_2021-06-13/image.png 1x, ./assets/image_2021-06-13/image@2x.png 2x, ./assets/image_2021-06-13/image@3x.png 3x,">
                <div class="card-body row align-items-center justify-content-center pt-0">
                    <p class="card-text col-4 card-titletext display-5 text-center mb-0 fw-bolder"><?= $totalWeb ?></p>
                    <p class="card-text col align-self-center">Totaal aantal websites</p>
                </div>
            </div>
            <div class="card col-md-auto px-0 mx-4 border border-0" style="width: 20rem;">
                <img src="./assets/image_2021-06-13/image.png" class="card-img-top banner-img" alt="banner afbeelding" srcset="./assets/image_2021-06-13/image.png 1x, ./assets/image_2021-06-13/image@2x.png 2x, ./assets/image_2021-06-13/image@3x.png 3x,">
                <div class="card-body row align-items-center justify-content-center pt-0">
                    <p class="card-text col-4 card-titletext display-5 text-center mb-0 fw-bolder"><?= $totalConnect ?></p>
                    <p class="card-text col align-self-center">Totaal aantal koppelingen</p>
                </div>
            </div>
            <div class="card col-md-auto px-0 mx-4 border border-0" style="width: 20rem;">
                <img src="./assets/image_2021-06-13/image.png" class="card-img-top banner-img" alt="banner afbeelding" srcset="./assets/image_2021-06-13/image.png 1x, ./assets/image_2021-06-13/image@2x.png 2x, ./assets/image_2021-06-13/image@3x.png 3x,">
                <div class="card-body row align-items-center justify-content-center pt-0">
                    <p class="card-text col-4 card-titletext display-5 text-center mb-0 fw-bolder"><?= $activeConnect ?></p>
                    <p class="card-text col align-self-center">Actieve koppelingen</p>
                </div>
            </div>
            <div class="card col-md-auto px-0 mx-4 border border-0" style="width: 20rem;">
                <img src="./assets/image_2021-06-13/image.png" class="card-img-top banner-img" alt="banner afbeelding" srcset="./assets/image_2021-06-13/image.png 1x, ./assets/image_2021-06-13/image@2x.png 2x, ./assets/image_2021-06-13/image@3x.png 3x,">
                <div class="card-body row align-items-center justify-content-center pt-0">
                    <p class="card-text col-4 card-titletext display-5 text-center mb-0 fw-bolder"><?= $inactiveConnect ?></p>
                    <p class="card-text col align-self-center">Niet actieve koppelingen</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="card col-md-auto px-0 mx-2 border border-0" style="width: 45vw;">
                <div class="card-body chart-card justify-content-center">
                    <h5 class="card-title">Statistieken</h5>
                    <h6 class="card-subtitle text-muted">Informatie in een grafiek</h6>
                    <div id="curve_chart" class="line_chart"></div>
                </div>
            </div>

            <div class="card col-md-auto px-0 mx-2 border-0 d-flex justify-content-center" style="width: 28vw;">
                <div class="card-body row justify-content-center">
                    <h5 class="card-title">Laatste aanmeldingen</h5>
                    <h6 class="card-subtitle text-muted">Overzicht van de laatste aanmeldingen</h6>

                    <div class="border-0 row card-login align-content-center justify-content-center my-2" style="width: 90%;">
                        <div class="col-2 p-0 me-4">
                            <img class="img-fluid profile-image rounded-circle" src="./assets/profilepics/test.jpg" alt="profiel foto">
                        </div>
                        <div class="col-9 p-0 align-self-center">
                            <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                            <p class="mb-0 fw-bolder">Bas Tonje</p>
                            <p class="mb-0">Centrum van jeugd en gezin</p>
                        </div>
                    </div>
                    <div class="border-0 row card-login align-content-center justify-content-center my-2" style="width: 90%;">
                        <div class="col-2 p-0 me-4">
                            <img class="img-fluid profile-image rounded-circle" src="./assets/profilepics/test.jpg" alt="profiel foto">
                        </div>
                        <div class="col-9 p-0 align-self-center">
                            <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                            <p class="mb-0 fw-bolder">Bas Tonje</p>
                            <p class="mb-0">Centrum van jeugd en gezin</p>
                        </div>
                    </div>
                    <div class="border-0 row card-login align-content-center justify-content-center my-2" style="width: 90%;">
                        <div class="col-2 p-0 me-4">
                            <img class="img-fluid profile-image rounded-circle" src="./assets/profilepics/test.jpg" alt="profiel foto">
                        </div>
                        <div class="col-9 p-0 align-self-center">
                            <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                            <p class="mb-0 fw-bolder">Bas Tonje</p>
                            <p class="mb-0">Centrum van jeugd en gezin</p>
                        </div>
                    </div>
                    <div class="border-0 row card-login align-content-center justify-content-center my-2" style="width: 90%;">
                        <div class="col-2 p-0 me-4">
                            <img class="img-fluid profile-image rounded-circle" src="./assets/profilepics/test.jpg" alt="profiel foto">
                        </div>
                        <div class="col-9 p-0 align-self-center">
                            <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                            <p class="mb-0 fw-bolder">Bas Tonje</p>
                            <p class="mb-0">Centrum van jeugd en gezin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notif-screen" id="notifScreen">
        <h5>Meldingen</h5>
        <a>Sluiten</a>
        <div class="border-0  card-login align-content-center justify-content-center my-2" style="width: 90%;">
            <div class="p-0 align-self-center">
                <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                <p class="mb-0 fw-bolder">Bas Tonje</p>
                <p class="mb-0">Centrum van jeugd en gezin</p>
            </div>
        </div>
        <div class="border-0  card-login align-content-center justify-content-center my-2" style="width: 90%;">
            <div class="p-0 align-self-center">
                <p class="ps-3 mb-0 time-text fw-semibold">10 uur geleden</p>
                <p class="mb-0 fw-bolder">Bas Tonje</p>
                <p class="mb-0">Centrum van jeugd en gezin</p>
            </div>
        </div>
    </div>
    </main>
    <script src="./js/notifScreen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>