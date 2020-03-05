const myCanvas = document.querySelector('canvas');
// myCanvas.width = window.innerWidth;
// myCanvas.height = window.innerHeight;
console.log(myCanvas);

const ctx = myCanvas.getContext('2d');

// ctx.fillRect(400, 100, 200, 200);

let divideImg = new Image();
divideImg.src = "1.png";
divideImg.onload = function(){
  ctx.drawImage(divideImg, 200, 150);
}


