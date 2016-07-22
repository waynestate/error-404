<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>404 Page Not Found - Wayne State University</title>
        <meta name="keywords" content="Wayne State University, wayne.edu, Wayne, State, University, Detroit, Michigan, MI, 48202, urban, research, education, college" />
        <meta name="description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="language" content="en" />
        <meta name="author" content="Wayne State University" />
        <meta name="DC.title" content="Wayne State University" />
        <meta name="DC.publisher" content="Wayne State University" />
        <meta name="DC.description" content="Michigan's only urban public research university. With more than 400 degree programs and a location in the heart of Detroit's cultural center, Wayne State offers a distinctive educational experience to students from around the world." />
        <meta name="DC.format" content="text/html" />
        <link href="/_resources/css/404.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="row">
                <div class="xlarge-12 large-12 medium-12 small-12 columns">
                    <a href="http://wayne.edu/"><img alt="Wayne State University" src="/_resources/images/waynestate-wordmark.png" width="350" height="34"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content center-site">
                <div class="xlarge-offset-1 xlarge-5 large-6 medium-12 small-12 columns">
                    <h1>404</h1>
                    <h2>Oops! Looks like<br /> this page can't be found!</h2>
                    <p>If you’re still unable to locate the page you are<br /> looking for and need additional help, please email us<br /> at <a href="mailto:web@wayne.edu">web@wayne.edu</a> and we will try to assist you.</p>

                    <form action="https://wayne.edu/search" method="get">
                        <div class="row">
                            <div class="xlarge-12 columns">
                                <div class="row collapse">
                                    <div class="medium-10  small-10 columns">
                                        <input type="text" name="q" class="q" placeholder="Search">
                                    </div>
                                    <div class="medium-2 small-2 columns">
                                        <button type="submit" class="button postfix">Go</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="xlarge-6 large-6 medium-12 small-12 columns">
                    <img src="/_resources/images/404.png" title="Yeti in the woods" />
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
            ga('allWayneState.send', 'event', 'Error', '404', 'page: //{{ $request->server("HTTP_HOST") }}{{ $request->server("REQUEST_URI") }} ref: {{ $request->server("HTTP_REFERER") }}');
        </script>
    </body>
</html>
