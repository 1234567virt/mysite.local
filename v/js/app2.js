function showFun(id) {
    this.id=id;
  
    var element=document.getElementById(this.id);
    var oformit=document.getElementById('oformit');
    if(element.style.display=='none'){
        element.style.MarginBottom='10px';
        oformit.innerHTML='Отменить';
        element.style.display='inline-block';
    }
    else{
        element.style.display='none';
        oformit.innerHTML='Оформить';
    }
}

