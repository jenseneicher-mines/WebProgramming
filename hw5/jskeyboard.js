/*
    Jensen Eicher
    CSCI 445 SEC A
    Javascript basics
    9/27/20
*/

//create the canvas on load and move the image when arrow keys are pressed
window.onload = function() {
    var canvas = document.getElementById("mycanvas");
    canvas.width = 750;
    canvas.height = 500;
    var posX = 0;
    var posY = 0;
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("car");
    ctx.drawImage(img, posX, posY, 100, 50);

    document.addEventListener('keydown', function (e) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        switch(e.keyCode) {
            case 37:
                //move left
                if (posX > 0) {
                    posX = posX - 5;
                }
                move(posX,posY, ctx, img);
                break;
            case 38:
                //move up
                if (posY > 0) {
                    posY = posY - 5;
                }
                move(posX,posY, ctx, img);
                break;
            case 39:
                //move right
                if (posX < (canvas.width - 100)) {
                    posX = posX + 5;
                }
                console.log(canvas.width)
                console.log(posX)
                move(posX,posY, ctx, img);
                break;
            case 40:
                //move down
                if (posY < (canvas.height - 50)) {
                    posY = posY + 5;
                }
                console.log(canvas.height)
                console.log(posY)
                move(posX,posY, ctx, img);
                break;
        }
    });
};

//generic move function to draw image with passed in values
function move(posX,posY, ctx, img) {
    ctx.drawImage(img, posX, posY, 100, 50);
}