var image2=document.getElementById("image2");
var value_X=document.getElementById("value_X");
var value_Y=document.getElementById("value_Y");

image2.addEventListener("click",function(e){
    value_X.value=e.screenX;
    value_Y.value=e.screenY;
    console.log(e.screenX);
    console.log(e.screenY);
})