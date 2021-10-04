
function timer(){

}
function tablarajzol(){
    window.location.href="Oldalak/jatek.php";
    //window.open("Oldalak/jatek.php");
}
function tablafeltolt(){

}
function ellenorzes(){

}
function hibajelzes(){

}
function jatekvege(){

}
function getJson(){
    $.ajax({
        type: "GET",
        url: "https://gist.githubusercontent.com/morcefaster/a5a33ee4ea70d4da84f9a3d66c3892e0/raw/148962c76065261f3d98749da5f29c4c67074082/sudoku.json",
        data: "",
        dataType: "json",
        success: function (data){
            var random=Math.floor(Math.random()*10);
            console.log(random);
            var megoldas=data["SolvedSudoku"][random];
            var feladat=data["RawSudoku"][random];
            console.log(feladat);
            for (let i = 0; i < feladat.length; i++) {
                $("#jatek").append("<tr>");
                for (let j = 0; j < feladat[0].length; j++) {
                    if(feladat[i][j]==0){
                        //document.getElementById("jatek")
                        $("#jatek").append("<input style='width: 20px' type='number'>")
                    }else{
                        $("#jatek").append("<td>"+feladat[i][j]+"</td>")
                    }

                }
                $("#jatek").append("</tr>");
            }
        },
        error:function (data){
            console.log("a");
        }
    });
}
