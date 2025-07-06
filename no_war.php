<style>
#popup {
  display: table;
  position: fixed; top: 0; left: 0;
  z-index: 100;
  height: 100%;
  width: 100%;
  background: rgba(240,240,240,.9);
  visibility: hidden;
  animation: animaciya 1s 1s forwards; /* 5s - это количество секунд по истечении которых появляется сообщение */ 
  cursor: pointer;
}
@keyframes animaciya {   
  from {visibility: hidden;}  
  to {visibility: visible;} 
}
#popup figure {
  display: table-cell;
  vertical-align: middle;
}
#popup div, #popup figcaption, #popup figure:before {
  max-width: 500px; /* максимальная ширина */
  max-height: 500px;
  margin: 0 auto;
  border-style: solid;
  border-image: linear-gradient(to right, #d7b168, #fdce40, #ff0368, #c91961, #e91a2e, #ea0011, #9b0010, #790e60, #33061a);
  border-image-slice: 1;
  text-align: center;
  background: #fff;
}
#popup figure:before { /* стиль кнопки "х" */ 
    content: "Esc для выхода";
  display: block;
  padding: 0 1%;
  border-width: 4px 4px 0 4px;
  border-radius: 5px 5px 0 0;
  text-align: right;
  color: black;
}
#popup div, #popup figcaption {
  padding: 1%;
  cursor: default;
}
#popup figcaption {
  position: relative;
  border-width: 0 4px 0 4px;
  font-size: 150%;
  text-transform: uppercase;
  color: rgb(100,100,100);
}
#popup figcaption:before {
  content: "\26a0 \20 \20";
  color: red;
  font-size: 150%;
  vertical-align: middle;
}
#popup div {
  border-width: 0 4px 4px 4px;
  border-radius: 0 0 5px 5px;
}
</style>
<div class="col-md-12 text-center">	  
<div id="popup">	    
  <figure>
          <figcaption>НЕТ ВОЙНЕ!</figcaption>
        <div>
                     <img src="./images/ukr.png" height="200" width="350">
            <br>
                   <strong>Мы против войны и их инициаторов!</strong><br><br>
      </div>
  </figure>
</div>
</div>
<script>
window.onkeyup = okno; // нажатие Esc, см. условие "e.keyCode==27" 
document.getElementById('popup').onclick = okno;

function okno(e) {
  if (e.target.nodeName != 'DIV' && e.target.nodeName != 'FIGCAPTION' && e.target.nodeName != 'IMG' && e.target.nodeName != 'FIGURE' && e.target.nodeName != 'BR' || !e.keyCode==27) { // через && перечисляются теги, клинкув на которые окно не будет закрыто; сюда же можно включить тег A или IFRAME 
    document.getElementById('popup').style.display='none';
  }
}
</script>