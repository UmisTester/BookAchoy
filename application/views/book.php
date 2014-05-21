<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/05/14
 * Time: 22:12
 */
?>

<html>
    <head>
        <title><?php echo $book["name"]; ?> / <?php echo $book["author"]; ?></title>
        <link rel="stylesheet" media="screen" href="@routes.Assets.at("stylesheets/main.css")">
        <link rel="shortcut icon" type="image/png" href="@routes.Assets.at("images/favicon.png")">

        <script src="@routes.Assets.at("javascripts/jquery-1.9.0.min.js")" type="text/javascript"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="http://books.google.co.il/books?id=<?php echo $book["id"]; ?>" target="_blank">
                        <img src="http://bks5.books.google.com/books?id=<?php echo $book["google_id"]; ?>&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-9">
                    <H1><?php echo $book["name"]; ?> <small><?php echo $book["author"]; ?></small></H1>
                    <BR><BR>
                    <H3>Review 1 <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></H3>
There was a time in my life when I couldn’t get enough of reading Dostoevsky. Maybe because his books made me think so deeply about being human and how we choose to live our lives. I began with Crime and Punishment, probably the work he is best known for.

                        What I remember is being fascinated by Dostoevsky’s brilliant understanding of human nature. I remember thinking what a deep study this book was; an incredible examination of a man who commits murder and how he is “punished” for it.
                    <BR><BR>
                    <H3>Review 2 <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></H3>
There was a time in my life when I couldn’t get enough of reading Dostoevsky. Maybe because his books made me think so deeply about being human and how we choose to live our lives. I began with Crime and Punishment, probably the work he is best known for.



                    <script>
                        // Construct URL along with required ISBNs
                        var isbns = ["0596000278", "00-no-isbn", "ISBN0765304368", "0439554934"];
                        // Note: server name should be replaced with prod server.
                        var api_url ="http://books.google.com/books?jscmd=viewapi&bibkeys=" +
                            isbns.join(",");

                        // Talk to the server synchronously and get _GBSBookInfo object
                        document.write(unescape("%3Cscript src=" + api_url +
                            " type='text/javascript'%3E%3C/script%3E"));

                    </script>

                </div>

            </div>
        </div>

    </body>

<Script>
    function getBook(book) {
        alert(book);
    }
</Script>
</html>