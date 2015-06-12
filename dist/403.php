<?php
    // Local flag
    $local = (strpos($_SERVER['HTTP_HOST'], '.dev') !== false) ? true : false;

    // Set the full path for the includes, if we are not on local. This way the virtual host your on can include the assests properly.
    $full_path = ($local == true) ? '' : '//assets.wayne.edu/errors/403/v2/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>403 Forbidden - Wayne State University</title>
        <meta name="keywords" content="Wayne State University, wayne.edu, Wayne, State, University, Detroit, Michigan, MI, 48202, urban, research, education, college" />
        <meta name="description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="language" content="en" />
        <meta name="author" content="Wayne State University" />
        <meta name="DC.title" content="Wayne State University" />
        <meta name="DC.publisher" content="Wayne State University" />
        <meta name="DC.description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="DC.format" content="text/html" />
        <link href="<?php echo $full_path; ?>main.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="row">
                <div class="large-12 medium-12 small-12 columns">
                    <a href="http://wayne.edu/"><img alt="Wayne State University" src="//assets.wayne.edu/headers/main/foundation/v5/waynestate-wordmark.png" width="350" height="34"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content center-site">
                <div class="large-offset-1 large-5 medium-6 small-12 columns">
                    <h1>403</h1>
                    <h2>The page you are looking<br />for cannot be accessed.</h2>

                    <p>It may have been removed, had its name changed, or is only
                    visible from on campus.</p>

                    <p>If you are still unable to locate the desired page and need
                    additional help, please email us at <a href="mailto:web@wayne.edu">web@wayne</a> and we will
                    try to assist you.</p>
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <img src="<?php echo $full_path; ?>forbidden.png" title="Forbidden" />
                </div>
            </div>
        </div>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-35684592-1', 'wayne.edu', {'name': 'allWayneState'});
            ga('allWayneState.send', 'pageview');
            ga('allWayneState.send', 'event', 'Error', '403', 'page: //<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?> ref: <?php echo $_SERVER['HTTP_REFERER']; ?>');
        </script>
    </body>
</html>