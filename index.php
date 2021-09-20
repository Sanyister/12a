<?php
$_SESSION["Datum"]="2022-09-20";
//echo $_SESSION["Datum"];
$array=[[]];
for ($i=0;$i<100;$i++){
    for ($j=0;$j<10;$j++){
        $array[$i][$j]=$i+$j;
    }
}

echo "<pre>";
//var_dump($array);
echo "</pre>";
?>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1 id="ide"></h1>
<script src="js.js"></script>
<input type="text" id="text">
<p id="itt"></p>
<button onclick="mehetlogin()">Login</button>
<script>
    $.ajax({
        url: "n2.json",
        method:"POST",
        body:{szoveg:"1"},
        success: function(adat){
        }
    });
    function mehetlogin(){
    $.ajax({
        url: "api.php",
        method:"POST",
        body:{loginn:"a"},
        success: function(adat){
            console.log(adat);
            //$("#itt").html(adat)
        }
    });
    }
</script>
</html>