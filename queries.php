<!DOCTYPE html>

<?php
    ini_set('display_errors', 'On');

    require_once '../main.php';
 ?>

<html>
    <head>
        <meta charset="utf-8">

        <title>Smart Phone Database- Companies</title>

        <link rel="stylesheet" href="../styles/normalize.css">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <header class="main-nav">
            <a href="../index.php" class="home-btn">Home</a>
            <ul class="site-nav">
                <li>Jump To:</li>
                <li><a href="../userquery.php">User Queries</a></li>
                <li><a href="queries.php">Queries</a></li>
            </ul>
        </header>
        <div class="main-banner">
            <h1>Queries</h1>
            <p>
                Check out the queries
            </p>
            <p>
                That are standard
            </p>
        </div>
        <div class="primary-content">
            <form class="q1" action="queries.php" method="post">
                <p class="ps">
                    Show All Smartphones in the range of 20-40k
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query1.php"><br>

                <p class="ps">
                    All phones with expandable storage
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query2.php"><br>

                <p class="ps">
                     Show reviews for all Xiaomi Phones
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query3.php"><br>

                <p class="ps">
                      Display company name and the number of phones they <br>manufacture that fit the customer requirements:<br>
                      Specs: Runs on Marshmallow(6.0) or higher Android OS,<br>
                      in the range of 40-60k, having internal memory>=32GB,<br>
                      FrontCamera:>= 5MP ,BackCamera:>=10MP,<br>
                      Battery Capacity>2000mAh,RAM>=2GB..!!<br>
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query4.php"><br>

                <p class="ps">
                       Display all companies that manufacture more than 1 phone <br>
                       that runs on chipsets manufactured by Qualcom <br>
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query5.php"><br>

                <p class="ps">
                        NEW YEAR is coming up and apple introduces a 5% <br>
                        discount on all its products: write query that display <br>
                        the prices before and after the discount and another query <br>
                        that introduces the discount into the database <br>
                </p>
                <input type="submit" name="execute" value="Execute" formaction="../modules/query6.php"><br>
            </form>
        </div>
    </body>
</html>
