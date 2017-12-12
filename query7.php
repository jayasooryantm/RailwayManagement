<!DOCTYPE html>

<?php
    require_once '../main.php';

    if(!empty($_POST['cpu'])) {
        $cpu = $_POST['cpu'];
    }
    if(!empty($_POST['ram'])) {
        $ram = $_POST['ram'];
    }
    if(!empty($_POST['storage'])) {
        $storage = $_POST['storage'];
    }

    $ram1 = intval($ram);
    $storage1 = intval($storage);

    $res7 = $db->query("SELECT s.ModelNo, s.ModelName, s.CompanyName, s.Price
                         FROM smartphone s,
                              techspecs t
                         WHERE s.ModelNo = t.ModelNo 
                           AND t.CPUManufacturer = '$cpu'
                           AND t.RAM = $ram1
                           AND t.InternalStorage = $storage1"
                        );

    $result = $res7->fetchAll(PDO::FETCH_ASSOC);

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
                    Company
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
                    echo '<td>'.$phone['Price'].'</td>';
                }
             ?>
        </table>
    </body>
</html>
