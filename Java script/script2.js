

function menseki(hankei){
    return hankei*hankei*3.14;
}
//半径5cmの円
document.write(menseki(5)+'<br>');
//半径7cmの円
document.write(menseki(7)+'<br>');
//半径10cmの円
document.write(menseki(10)+'<br>'+'<br>');

function park(adult,child){
    return adult*500+child*200;
}
//Aグループ
document.write (park(2,4)+'<br>');
//Bループ
document.write(park(1,5)+'<br>');
//Cグループ
document.write(park(3,7)+'<br>');