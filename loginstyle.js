var image=document.getElementById("image");
var x_=document.getElementById("X_value");
var y_=document.getElementById("Y_value");


image.addEventListener("click",function(e){
 
 var y=e.screenY;
 var x=e.screenX;

 x_.value=x;
 y_.value=y;
 console.log(e.screenY);
 console.log(e.screenX);
 if(450-30<e.screenX && 450+30>e.screenX){
   console.log(e.screenX);
   console.log("x is ok");
   if(365-30<e.screenY && 365+30>e.screenY){
    console.log(e.screenY);
   console.log("Y is ok");
   }
 }
})