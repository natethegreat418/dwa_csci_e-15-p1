<?php require('quotegen.php'); ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Project1 Home</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Custom styling -->
        <link rel="stylesheet" href="styles.css" type="text/css">

    </head>

    <body>
        <div class="container">
            <div class="row intro">
                <div class="col">
                    <h1>Nathan Marcus</h1>
                    <img id="chngimg" src="" alt="">
                </div>
            </div>
            <div class="row intro">
                <div class="col">
                    <h3>About Me</h3>
                    <p class='desc'>Above photo notwithstanding, I am a human who goes by Nate/Nathan. I work in e-commerce software product management for an international education company in Cambridge, MA. I like computer games, reading and learning new things.</p>
                    <blockquote>
                        <?php echo($quotes[$selqt]); ?>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                var rand = Math.floor(Math.random() * 2);
                window.console && console.log(rand);

                if (rand > 0)

                {
                    $("#chngimg").attr("src", 'https://i.pinimg.com/736x/e6/98/bc/e698bc2a2c851be5138472f4da775290--nyan-cat-pusheen-cat.jpg')
                    $("#chngimg").attr("alt", "pusheencat")

                } else {

                    $("#chngimg").attr("src", 'http://i0.kym-cdn.com/entries/icons/original/000/018/012/Screen_Shot_2015-05-12_at_3.31.31_PM.png')
                    $("#chngimg").attr("alt", "dogonfirememe")
                }



            })
        </script>
    </body>

    </html>