let target = Math.floor(Math.random() * 100);
let result = document.getElementById("result");
let count = 0;

document.getElementById("btnGuess").addEventListener("click", () => {
    let userGuess = document.getElementById("iptGuess").value;
    if (userGuess < target){
        result.innerText = "Bigger";
    } else if (userGuess > target){
        result.innerText = "Smaller";
    } else if (userGuess == target){
        result.innerText = "YAY";
        result.style.backgroundColor="green";
    }
    count++;
    document.getElementById("tries").innerText = `Tries : ${count}`;
})