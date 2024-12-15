console.log("container2");
let arr = [1, 2, 3];
for (x=0; x<arr.length; x++) {
    console.log(arr[x]);
}
// var p = document.createElement("p");
// var node = document.createTextNode("Some new text");
// p.appendchild(node);
// var div = document.getElementById("father");
// div.appendChild(p);

var pos = 0;
function move() {
    if (pos>=400) {
        clearInterval();
    } else {
        pos += 1;
        var bxmva = document.getElementById("box");
        bxmva.style.left = pos + "px";
    }

}
setInterval(move, 10)

function change() {
    var ctxt = document.getElementById("onchange");
    ctxt.value = ctxt.value.toUpperCase();
}

// function click() {
//     alert("sadasdasd");
//     console.log("asfasfas");
// }

// var btn = document.getElementById("btn");
// btn.addEventListener("click", button_alert);

// function button_alert() {
//     console.log("sadasd");
//     alert("wtfasdasdasdsa");
//     btn.removeEventListener("click", button_alert);
// }

var slider_images = [
    "SlideImages/Lelouch.jpg",
    "SlideImages/Lelouch2.jpg",
    "SlideImages/Lelouch3.jpg",
    "SlideImages/Lelouch4.jpg",
    "SlideImages/Lelouch5.jpg",
];

console.log(slider_images.length)

var num = 0;

function next() {
    var slider = document.getElementById("slider");
    num++;

    // if (num>=slider_images.length) {
    //     num = 0;
    // }
    slider.src = slider_images[num];
}

function prev() {
    var slider = document.getElementById("slider");
    num--;
    if (num<=0) {
        num = slider_images.length-1;
    }
    slider.src = slider_images[num];
}

let x = {a: 1, b: 2, c: 3};

for (let v in x) {
    console.log(v);
}