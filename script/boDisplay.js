let togg1 = document.getElementById('togg1');
let togg2 = document.getElementById('togg2');
let togg3 = document.getElementById('togg3');
let togg4 = document.getElementById('togg4');
let togg5 = document.getElementById('togg5');
let staTog = document.getElementById('sta-tog');
let proTog = document.getElementById('pro-tog');
let forTog = document.getElementById('for-tog');
let expTog = document.getElementById('exp-tog');
let hobTog = document.getElementById('hob-tog');

togg1.addEventListener("click", () => {
    if (getComputedStyle(staTog).display != "none") {
        staTog.style.display = "none";
        togg1.innerHTML = "+";
    } else {
        staTog.style.display = "block";
        togg1.innerHTML="-";
    }
})

togg2.addEventListener("click", () => {
    if (getComputedStyle(proTog).display != "none") {
        proTog.style.display = "none";
        togg2.innerHTML = "+";
    } else {
        proTog.style.display = "block";
        togg2.innerHTML="-";
    }
})

togg3.addEventListener("click", () => {
    if (getComputedStyle(forTog).display != "none") {
        forTog.style.display = "none";
        togg3.innerHTML = "+";
    } else {
        forTog.style.display = "block";
        togg3.innerHTML="-";
    }
})
togg4.addEventListener("click", () => {
    if (getComputedStyle(expTog).display != "none") {
        expTog.style.display = "none";
        togg4.innerHTML = "+";
    } else {
        expTog.style.display = "block";
        togg4.innerHTML="-";
    }
})

togg5.addEventListener("click", () => {
    if (getComputedStyle(hobTog).display != "none") {
        hobTog.style.display = "none";
        togg5.innerHTML = "+";
    } else {
        hobTog.style.display = "block";
        togg5.innerHTML="-";
    }
})