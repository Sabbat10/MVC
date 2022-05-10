<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vive le MVC !</title>
        <link rel="stylesheet" href="public/design/default.css" />
    </head>

    <body>

        <header>
            <span>MVC</span>
        </header>

        <section class="container">
        
            <h1>Avis</h1>
            <p>Voici la liste des avis :</p>

            <?php

               
                
                while($notis = $requete->fetch()) {
            
            ?>
                <p>
                    <b><?= $notis['note'].' /5 ' ?> </b>
                    <br>

                    <?= $notis['content'] ?> 
                    
                </p>
            <?php
                }
            ?>
            <a href="../cotroler/cotroler.php">Acceuil</a>

        </section>

    </body>
</html>