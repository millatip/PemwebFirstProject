//document.getElementById(button_hitung).onclick = hitungABC();
document.getElementById("button_hitung").onclick = function () { alert("nilai a = ", document.getElementById("nilai_a").value ); };

var a = document.getElementById("nilai_a").value;
var b = document.getElementById("nilai_b").value;
var b = document.getElementById("nilai_c").value;

function hitungX1(){
    var x = ((-b) + Math.sqrt((b^2)-(4*a*c))) / (2*a);
    return x;
}

function hitungX2(){
    var x = ((-b) - Math.sqrt((b^2)-(4*a*c))) / (2*a);
    return x;
}

function hitungABC(){
    //document.write("Nilai X1 = ", hitungX1(), ", Nilai X2 = ", hitungX2());
}