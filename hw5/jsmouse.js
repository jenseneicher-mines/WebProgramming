
//Found online here -- https://code.sololearn.com/WY26okhx0P7u/#js
//draw a smiling face
function smile()
{
    var canvas = document.getElementById("mycanvas")
    if (canvas.getContext)
    {
        var ctx = canvas.getContext('2d');

        ctx.fillStyle = "#ffee02";

        ctx.beginPath();
        ctx.arc(75,75,50,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fill();

        ctx.strokeStyle="#2a2a34";

        //mouth
        ctx.moveTo(110,75);
        ctx.beginPath();
        ctx.arc(75,75,35,0.15*Math.PI,0.85*Math.PI,false);
        ctx.stroke();

        //eyes
        ctx.moveTo(65,65);
        ctx.beginPath();
        ctx.arc(60,65,5,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fillStyle = "#14d0f1";
        ctx.fill();

        ctx.moveTo(95,65);
        ctx.beginPath();
        ctx.arc(90,65,5,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fillStyle = "#14d0f1";
        ctx.fill();
    }
}

// draw a frowning face
function frown() {
    var canvas = document.getElementById("mycanvas")
    if (canvas.getContext)
    {
        var ctx = canvas.getContext('2d');

        ctx.fillStyle = "#ffee02";

        //head
        ctx.beginPath();
        ctx.arc(75,75,50,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fill();

        ctx.strokeStyle="#2a2a34";

        //mouth
        ctx.moveTo(110,75);
        ctx.beginPath();
        ctx.arc(75,100,20,0.15*Math.PI,0.85*Math.PI,true);
        ctx.stroke();

        //eyes
        ctx.moveTo(65,65);
        ctx.beginPath();
        ctx.arc(60,65,5,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fillStyle = "#14d0f1";
        ctx.fill();

        ctx.moveTo(95,65);
        ctx.beginPath();
        ctx.arc(90,65,5,0,Math.PI*2,true);
        ctx.closePath();
        ctx.fillStyle = "#14d0f1";
        ctx.fill();
    }
}

//if button is clicked we must re draw but with different face
function face() {
    var elem = document.getElementById("mybutton");
    if (elem.value=="Make Me Frown") {
        elem.value = "Make Me Smile";
        frown();
    }
    else if (elem.value == "Make Me Smile") {
        elem.value = "Make Me Frown";
        smile();
    }
}

//if mouse is clicked inside face we must re draw and switch face
function change(e) {
    if(Math.sqrt((e.clientX-83)*(e.clientX-83) + (e.clientY-83)*(e.clientY-83)) <= 50){
        face()
    }
}

//mouse event listener
document.addEventListener("click", change);