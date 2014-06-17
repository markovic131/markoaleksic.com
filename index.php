<?php
    function to_rand_ascii($chr){
        switch (mt_rand(1, 3)) {
        case 1:
            return "&#" . ord($chr) . ";";
            break;
        case 2:
            return "&#000" . ord($chr) . ";";
            break;
        default:
            return "&#x" . dechex(ord($chr)) . ";";
        }
    }
    function mungemail($str_email, $str_display = null, $bln_link = true){

        $str_mailto = '';
        $str_encoded_email = '';

        for ($i = 0; $i < strlen($str_email); $i++) {
            $str_encoded_email .= to_rand_ascii(substr($str_email, $i));
        }
        if (strlen(trim($str_display)) > 0) {
            $str_display = $str_display;
        } else {
            $str_display = $str_encoded_email;
        }
        for ($i = 0; $i < strlen('mailto:'); $i++) {
            $str_mailto .= to_rand_ascii(substr('mailto:', $i, 1));
        }
        return '<a href="mailto:'.$str_display.'">'.$str_display.'</a>';
    }
 ?>
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
        <link rel="stylesheet" href="/stylesheets/swag.css">
    </head>
    <body>
        <div class="container">
            <section id="mainContent">
                <!-- <div id="logo">
                    <img src="http://lorempixel.com/200/200/" alt="Marko Z. Aleksić Logo">
                </div> -->
                <h1>Marko Z. Aleksić</h1>
                <p class="lead">
                    Web Developer at <a href="http://seavus.com" target="_blank">Seavus</a> &middot; Co-Founder of <a href="http://onivo.mk" target="_blank">Onivo</a>.
                </p>
                <p>
                    I firmly <strong>believe</strong>; enterprise software meticulous crafted to perfection, can simplify &amp; improve business processes and create competitive advantage.
                    <!-- I kick ass and chew bubble gum. -->
                </p>
                <hr>
                <p id="eml">
                    Via <?=mungemail('iam@markoaleksic.com')?> or
                </p>
                <p>
                    <a href="http://www.linkedin.com/in/aleksicmarko" target="_blank">LinkedIn</a> &middot;
                    <a href="https://twitter.com/MarkoAleksic131" target="_blank">Twitter</a> &middot;
                    <a href="https://github.com/psybaron" target="_blank">GitHub</a><!--  &middot;
                    <a href="http://stackoverflow.com/users/641048/marko-aleksi%C4%87" target="_blank">Stack Overflow</a> -->
                </p>
            </section>
            <footer>
                <p>
                    &copy; <?=date('Y')?> Marko Z. Aleksić. All Rights Reserved.
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