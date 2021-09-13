<?php
$array=[[]];
for ($i=0;$i<100;$i++){
    for ($j=0;$j<10;$j++){
        $array[$i][$j]=$i+$j;
    }
}
echo "<pre>";
var_dump($array);
echo "</pre>";
?>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1 id="ide"></h1>

<script>
    $.ajax({
        url: "n2.json",
        method:"POST",
        body:{szoveg:"1"},
        success: function(adat){

        }
    });
</script>
</html>
