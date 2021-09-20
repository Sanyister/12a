var valtozo1;
let a1="a";
window.localStorage.setItem("Datum","2021.09.20");
function mehet(){
    return 0;
}
class osztaly{
    valtozo1;
    constructor(szoveg){
        this.valtozo1=szoveg;
    }
    kiir(){
        a1="b";
        return valtozo1;
    }
}
var ez=new osztaly("adat");
ez.kiir();
/*
var az=class osztaly{
    valtozo1;
    constructor(szoveg){
        this.valtozo1=szoveg;
    }
    kiir(){
        return valtozo1;
    }
}*/