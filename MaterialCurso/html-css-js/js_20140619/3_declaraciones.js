/*
if(condicion){
}else if(condicion){
}else{
}
*/

if(true){
console.log("Es true");
}

if(!false)
    console.log("Pos sigue siendo true");

var z = (true == !false) ? "Si son iguales" : "No son iguales";

(true) ? u = "Si" : u = "No"; 

var hola_mundo;

/*
for(inicio; condicion; aumento){
}
*/
for(var i = 0; i <= 10; i++){}

for(var num in [1,2,3])
    console.log(num);
throw "Toma tu error";

try{
    throw "Toma tu error";
}catch(error){
    console.log(error);
}
