console.log("Hello");
let base = prompt("Quel livret veux-tu");
console.log("this : " + base);
document.write(`<h2>all your base are belong to us : ${base}</h2>`);

for (let i = 1; i < 10; i++) {
    document.write(`<h3> ${i} * ${base} = ${base * i}</h3>`);
}

let content = document.getElementById("divContent");

content.style.backgroundColor = 'red';
content.innerHTML = `<h2> wow</h2>`;

let lsdToggle = false;
let color = 'red';

function lsd() {
    if (lsdToggle) {
        switch (color) {
            case "red":
                color = 'blue';
                break;
            case "blue":
                color = "green";
                break;
            case "green":
                color = "yellow";
                break;
            case "yellow":
                color = "purple";
                break;
            case "purple":
                color = "red";
                break;
            default:
                color = 'red';
        }
        content.style.backgroundColor = color;
    }
}

document.getElementById("lsdButton").addEventListener("click", () => {
    lsdToggle = !lsdToggle;
})

setInterval(lsd,50);

document.addEventListener("keypress",(e)=>{
    console.log(e);
})