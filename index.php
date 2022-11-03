<?php    
    echo <<< END
    <!DOCTYPE html>
    <html lang="ru">
    <head>
      <!-- подключение основных плюшек и шрифтов style.css -->
      <meta content='width=device-width, initial-scale=1' name='viewport'/>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="effects.css">
      <link rel="icon" type="image/png" href="./images/DemosceneBig.png">
      <link rel="apple-touch-icon" type="image/png" href="./images/DemosceneBig.png">
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
      
      <title>Demoscene</title>
    </head>
    
    <body>
      <a class='information' href='https://demoscene.herokuapp.com/information.html'>i</a>
      <a class="link" style="top: 16px;" href='https://demoscene.herokuapp.com/information.html'><u>i</u></a>
      <a class="link" style="top: 38px; font-size: 16px" onclick="toTop()"><u>&lt;</u></a>
      <a class="link" style="top: 64px; font-size: 16px" onclick="toBottom()"><u>&gt;</u></a>
      <div class='comments' id='0'>
    END;
