<!DOCTYPE html>

<?php
    require_once '../main.php';

    $res2 = $db->query("SELECT s.CompanyName,s.ModelName,s.Price
                         from manufacturer m,smartphone s,techspecs t
                           where t.ModelNo=s.ModelNo
                           and s.CompanyName=m.CompanyName
                           and t.ExpandableStorage!='null'"
                        );

    $result = $res2->fetchAll(PDO::FETCH_ASSOC);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query2</title>

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
                foreach ($result as $phone) {
                    echo '<tr><td>'.$phone['CompanyName'].'</td>';
                    echo '<td>'.$phone['ModelName'].'</td>';
                    echo '<td>'.$phone['Price'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
