console.log("hi");

let result = [];

//console.log(result.join(''));
//console.log(eval(result.join('')));


function envoyer(valeur) {

    result.push(valeur);
    document.getElementById("result").textContent = result.join('');
    console.log(result);  
}

function raz() {
    result = [];
    document.getElementById("result").textContent = 0;
    console.log(result); 
}

function egale() {
    let egale = eval(result.join(''));
    result = [egale];
    document.getElementById("result").textContent = egale;
    console.log(egale);
}