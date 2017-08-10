    <!DOCTYPE HTML>
    <html>
      <head>
        <title>Esempio</title>
        <meta charset="utf-8">
        <style type="text/css">
          .pulsante{
            color: #000;
            border: 1px solid #CCC;
            background-color: #EFEFEF;
            font: 100%/2 "Lucida Sans","Lucida Grande","Lucida Sans Unicode",Arial,Helvetica,sans-serif;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            padding: 12px;
            
            /* transizione morbida */
            transition: .3s ease
          }
          .pulsante:hover{
            border-color: #F90;
            color: #F80;
            
            /* effetto glow (bagliore) */ 
            text-shadow: 0 0 4px #FFF;
            box-shadow: 0 0 3px #FA3, inset 0 0 4px 1px #FFF;
          }
        </style>
      </head>
      <body>
        <p>Benvenuto <b>{$username}</b>!</p>
        <a class="pulsante" href="index.php?controller=logout">Logout</a>
      </body>
    </html>

     

