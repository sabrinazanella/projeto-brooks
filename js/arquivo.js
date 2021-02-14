
    function id(el){
      return document.getElementById(el);
    }
    window.onload = function(){
      id('mais').onclick = function(){
        id('hamb').value = parseInt( id('hamb').value )+1;
          
        id('total').value = 30*id('hamb').value;
      }
      id('menos').onclick = function(){
        if( id('hamb').value>0 )
        id('hamb').value = parseInt(id('hamb').value )-1;
          
        id('total').value = 30*id('hamb').value;
      }
    }            

  
  