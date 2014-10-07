<?php

$defaultLanguage = 'en';
$language = $defaultLanguage;
if (strpos($_SERVER['HTTP_HOST'], '.com')) {
    $language = 'en';
} else if (strpos($_SERVER['HTTP_HOST'], '.at')) {
    $language = 'de';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Firestream - Where Peter Grassberger lives</title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Firestream</h1>
                <span>The place where <a href="http://petergrassberger.com">Peter Grassberger</a> lives, works and studies.</span>
            </header>

            <article>
                <h2>Address</h2>
                <address>
                    Peter Grassberger, BSc<br>
                    Feuerbachgasse 30A, Top 62<br>
                    8020 Graz, Austria
                </address>

                <h2>Map</h2>
                <iframe width='100%' height='300px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/petertheone.jn258n5b/attribution,zoompan.html?access_token=pk.eyJ1IjoicGV0ZXJ0aGVvbmUiLCJhIjoiLTZjMGpZWSJ9.8HdkX0H4G8UOLWvnuTnVag'></iframe>

                <h2>Foursquare</h2>
                Also on <a href="https://foursquare.com/v/firestream/5433ff51498e9f625c7425ea">Foursquare</a>.

                <h2>Tweet from #Graz, #Annenstraße or @PeterTheOne</h2>
                <a class="twitter-timeline" href="https://twitter.com/search?q=%23graz+OR+%23annenstra%C3%9Fe+OR+%40PeterTheOne" data-widget-id="519533122954596352">Tweets about "#graz OR #annenstraße OR @PeterTheOne"</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </article>

            <footer>
                <h2>Footer</h2>
                <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a> Peter Grassberger, <a href="http://petergrassberger.com/contact">imprint.</a>
            </footer>

            <!-- Piwik -->
            <script type="text/javascript">
                var _paq = _paq || [];
                _paq.push(["trackPageView"]);
                _paq.push(["enableLinkTracking"]);

                (function() {
                    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.petergrassberger.com/";
                    _paq.push(["setTrackerUrl", u+"piwik.php"]);
                    _paq.push(["setSiteId", "1"]);
                    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
                    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
                })();
            </script>
            <!-- End Piwik Code -->
        </div>
    </body>
</html>