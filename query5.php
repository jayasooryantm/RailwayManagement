<!DOCTYPE html>

<?php
    require_once '../main.php';

    $res5 = $db->query("SELECT s.CompanyName
                         from smartphone s,manufacturer m,techspecs t
                         where s.ModelNo=t.ModelNo and
                         s.CompanyName=m.CompanyName and
                         t.CPUManufacturer='Qualcomm'
                         group by(s.CompanyName)
                         having count(s.ModelNo)>1"
                        );

    $result = $res5->fetchAll(PDO::FETCH_ASSOC);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query5</title>

        <link rel="stylesheet" href="../styles/normalize.css">
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Company
                </td>
            </tr>
            <?php
                foreach ($result as $company) {
                    echo '<tr><td>'.$company['CompanyName'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
