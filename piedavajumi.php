<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100&family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <header class="header"> 
            <?php
                include "php/show_header.php";
            ?>
        
            <?php
                include "php/show_login.php";
            ?>
        </header>

        <br><br><br><br><br>

        <article>
            <div>
                <h1>Piedāvājumu apraksts!</h1>
                <div id="cards_view">
                    <table>
                        <tr>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/1.png" alt="Nav Foto!">
                                    <p class="card_text">Pilsētas svētki</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/2.jpg" alt="Nav Foto!">
                                    <p class="card_text">Pieaugušo dzimšanas diena</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/3.jpg" alt="Nav Foto!">
                                    <p class="card_text">Bērna dzimšanas diena</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/4.png" alt="Nav Foto!">
                                    <p class="card_text">Korporatīvi</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                        </tr>                                                                               
                        <tr>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/5.png" alt="Nav Foto!">
                                    <p class="card_text">Kāzas</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/6.png" alt="Nav Foto!">
                                    <p class="card_text">Pasākumi bērniem</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/7.jpg" alt="Nav Foto!">
                                    <p class="card_text">Skolu pasākumi</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/8.jpg" alt="Nav Foto!">
                                    <p class="card_text">Jubilejas</p>
                                    <button class="btn2">Lasīt vairāk</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
        <br>
        <footer>
            <div id="end_box">
                <div id="end_text">
                    <p class="end_t"><b>Autors: Artis Dairis Kroičs</b></p>
                    <p class="end_t"><b>Tālrunis: +37129120520</b></p>
                    <p class="end_t"><b>E-pasts: partypals@gmail.com</b></p>
                </div>
                <div id="icon_div">
                    <img src="css/img/header/instagram.png" class="ico2" alt="Instagram">
                    <img src="css/img/header/facebook.png" class="ico2" alt="Facebook">
                </div>
            </div>
        </footer>
        
    </div>

    <script src="scripts/sign_in.js"></script>
</body>
</html>