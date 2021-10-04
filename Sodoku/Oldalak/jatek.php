<?php
$json = file_get_contents("../json/sudoku.json");
$obj = json_decode($json, true);
$random = rand(0, 10);
$feladatmegoldva = $obj["SolvedSudoku"][$random];
$feladat = $obj["RawSudoku"][$random];
echo '
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
table{
border-collapse: collapse;
}
table td ,table tr{
border: 1px solid black;
padding: 5px;
}
input{
border:0px solid black;
}
table tr:first-child{
    border-top: 3px solid black;
}
table td:nth-child(1){
    border-left: 3px solid black;
}
table td:nth-child(3n){
    border-right: 3px solid black;
}
table tr:nth-child(3n){
    border-bottom: 3px solid black;
}

</style>
    <table id="jatek">';
for ($i = 0; $i < count($feladat); $i++) {
    echo '<tr>';
    for ($j = 0; $j < count($feladat[0]); $j++) {
        if ($feladat[$i][$j] == 0) {
            echo '<td><input min="1" max="9" type="number" style="height: 30px;width: 50px"></td>';
        } else {
            echo '<td style="text-align: center">' . $feladat[$i][$j] . '</td>';
        }
    }
    echo '</tr>';
}

echo '</table>
 <button>Játék vége</button>
 <button onclick="megoldas()">Segitég</button>
 <script>
    function megoldas(){
        //location.reload();
        $("#jatek").empty();';

        $str = "";
        for ($i = 0; $i < count($feladatmegoldva); $i++) {
            $str .= '<tr>';
            for ($j = 0; $j < count($feladatmegoldva[0]); $j++) {
                $str .= '<td style=`text-align: center`>' . $feladatmegoldva[$i][$j] . '</td>';
            }
            $str .= '</tr>';
        }

        echo '
            $("#jatek").append("' . $str . '");
        }
        
</script>';

function megoldas()
{
    echo "<script>location.reload();</script>";
}

?>