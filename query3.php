<!DOCTYPE html>

<?php
    require_once '../main.php';

    $res3 = $db->query("select s.ModelNo,r.CustomerReview,r.ProReview,r.PopularOpinion
                         from reviews r,smartphone s,manufacturer m
                           where s.ModelNo=r.ModelNo
                           and s.CompanyName=m.CompanyName
                           and s.CompanyName='Xiaomi'"
                        );

   $result = $res3->fetchAll(PDO::FETCH_ASSOC);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query3</title>

        <link rel="stylesheet" href="../styles/normalize.css">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Model Number
                </td>
                <td>
                    Customer Review
                </td>
                <td>
                    Professional Review
                </td>
                <td>
                    Popular Opinion
                </td>
            </tr>
            <?php
                foreach ($result as $review) {
                    echo '<tr><td>'.$review['ModelNo'].'</td>';
                    echo '<td>'.$review['CustomerReview'].'</td>';
                    echo '<td>'.$review['ProReview'].'</td>';
                    echo '<td>'.$review['PopularOpinion'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
