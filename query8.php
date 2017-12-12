<!DOCTYPE html>

<?php
    require_once '../main.php';

    if(!empty($_POST['front'])) {
        $front = $_POST['front'];
    }
    if(!empty($_POST['back'])) {
        $back = $_POST['back'];
    }

    intval($front);
    intval($back);

    $res8 = $db->query("SELECT s.ModelNo, s.ModelName, s.CompanyName, s.Price
                         FROM smartphone s,
                              techspecs t
                         WHERE s.ModelNo = t.ModelNo
                           AND t.FrontCamera = $front
                           AND t.BackCamera = $back"
                        );

    $result = $res8->fetchAll(PDO::FETCH_ASSOC);
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
                    Model Number
                </td>
                <td>
                    Model Name
                </td>
                <td>
                    Comapny
                </td>
                <td>
                    Price
                </td>
            </tr>
            <?php
                foreach ($result as $phone) {
                    echo '<tr><td>'.$phone['ModelNo'].'</td>';
                    echo '<td>'.$phone['ModelName'].'</td>';
                    echo '<td>'.$phone['CompanyName'].'</td>';
                    echo '<td>'.$phone['Price'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
