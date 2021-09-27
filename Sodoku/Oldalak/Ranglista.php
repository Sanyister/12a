<?php
include "Gateway.php";
$rows=sql("Select * from ranglista");

echo '<head>
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<table id="ranglistaTable">
        <thead>
        <th>Név</th>
        <th>Pontszám</th>
        <th>Dátum</th>
        </thead>
        <tbody>';
    for ($i=0;$i<count($rows);$i++){
        echo '<tr>
                <td>'.$rows[$i][0].'</td>
                <td>'.$rows[$i][1].'</td>
                <td>'.$rows[$i][2].'</td>
                </tr>';
    }
echo '</tbody>
        <tfoot></tfoot>
        </table>
        <script>
            $("#ranglistaTable").DataTable();
    </script>';

?>

