<!DOCTYPE html>

<?php
    require_once '../main.php';

    $res6 = $db->query("Select s.ModelName,Price as old_price,0.95*Price as new_price
                          from smartphone s,manufacturer m
                            where s.CompanyName=m.CompanyName
                            and s.CompanyName='Apple'"
                        );

    $result = $res6->fetchAll(PDO::FETCH_ASSOC);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query6</title>

        <link rel="stylesheet" href="../styles/normalize.css">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Company
                </td>
                <td>
                    Model
                </td>
                <td>
                    Price
                </td>
            </tr>
            <?php
                foreach ($result as $price) {
                    echo '<tr><td>'.$price['ModelName'].'</td>';
                    echo '<td>'.$price['old_price'].'</td>';
                    echo '<td>'.$price['new_price'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
