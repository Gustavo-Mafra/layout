function showDiv(id, classe, btn, botao){
    document.getElementsByClassName(classe).style.display = 'none';
    document.getElementById(id).style.display = 'block';
    document.getElementsByClassName(btn).style.border = '0px';
    document.getElementById(botao).style.border = '2px solid #734223';
}