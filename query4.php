<!DOCTYPE html>

<?php
    require_once '../main.php';

    $res4 = $db->query(" SELECT s.CompanyName,count(s.ModelNo)
                          from smartphone s,manufacturer m, techspecs t
                            where s.ModelNo=t.ModelNo and
                            m.CompanyName=s.CompanyName and
                            s.Price between 40000 and 60000 and
                            t.Battery>=2000 and t.OS='Android' and t.Version>=6.0 and
                            t.InternalStorage>= 32 and t.FrontCamera>=5 and t.RAM>2 and
                            t.BackCamera>=10 group by s.CompanyName"
                        );

    $result = $res4->fetchAll(PDO::FETCH_ASSOC);
 ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Query4</title>

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
                    Number of phones
                </td>
            </tr>
            <?php
                foreach ($result as $company) {
                    echo '<tr><td>'.$company['CompanyName'].'</td>';
                    echo '<td>'.$company['count(s.ModelNo)'].'</td></tr>';
                }
             ?>
        </table>
    </body>
</html>
