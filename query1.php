<!DOCTYPE html>

<?php
    require_once '../main.php';

        $one = $_POST['textput'];
        $two = $_POST['textput2'];
    $res1 = $db->query('select t.tname from train t,schedule s where t.tno=s.tno and s.tfrom='$one' and s.tto='$two' ');

    $result = $res1->fetchAll(PDO::FETCH_ASSOC);


 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query1</title>

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
                foreach ($result as $train) {
                    echo '<tr><td>'.$train['time'].'</td>';
            
                }
             ?>
        </table>
    </body>
</html>
