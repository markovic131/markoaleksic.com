<?php require __DIR__ . "/_lib/app.php"; ?>
<!doctype html>
<!--
 _____         _       _____ _     _       _
|     |___ ___| |_ ___|  _  | |___| |_ ___|_|___
| | | | .'|  _| '_| . |     | | -_| '_|_ -| |  _|
|_|_|_|__,|_| |_,_|___|__|__|_|___|_,_|___|_|___|

 -->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Marko Z. Aleksić</title>
        <meta name="description" content="Marko Z. Aleksić">
        <meta name="keywords" content="marko, aleksic, aleksić, personal, consulting, business, software, onivo, onivo.mk, invoicing, web-development">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="1f9f006cc7e6baeb01ce72bbb4406ca8">
        <link rel="stylesheet" href="/stylesheets/swag.css">
    </head>
    <body>
        <div class="container">
            <section id="mainContent">
                <h1>Marko Z. Aleksić</h1>
                <p class="lead">
                    Co-Founder at <a href="http://onivo.mk" target="_blank">Onivo</a>. Founder at <a href="http://carniadesign.com" target="_blank">Carnia Design</a><br>&amp;
                    Business Development Manager at <a href="http://fortis.mk" target="_blank">Fortis</a>
                </p>
                <p>
                    I firmly <strong>believe</strong>; enterprise software meticulous crafted to perfection,<br>can simplify &amp; improve business processes <br>and create competitive advantage.
                    <!-- I kick ass and chew bubble gum. -->
                </p>
                <hr>
                <p id="eml">
                    Via <?=mungemail('iam@markoaleksic.com')?> or
                </p>
                <p>
                    <a href="http://www.linkedin.com/in/aleksicmarko" target="_blank">LinkedIn</a> &middot;
                    <a href="https://twitter.com/MarkoAleksic131" target="_blank">Twitter</a> &middot;
                    <a href="https://github.com/psybaron" target="_blank">GitHub</a>
                </p>
            </section>
            <footer>
                <p>
                    &copy; <?=date('Y')?> Marko Z. Aleksić. All Rights Reserved.<br>
                    <?=time()?>
                </p>
            </footer>
        </div>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-43415136-1');ga('send','pageview');
        </script>
    </body>
</html>