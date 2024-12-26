var $=document;
    const menubergur=$.querySelector('.check');
    const list=$.querySelector('.list');
    var bool=true;
    menubergur.addEventListener("click" , () => {
        if(bool==true){
           
            list.style.top='0%';
            bool=false;
        }else{
            
            list.style.top='-14%';
            bool=true;
        }
    });