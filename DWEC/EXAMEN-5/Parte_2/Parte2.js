//1-Devuelve un array con los mismos elementos de a pero multiplicados por 2.
const b = a.map((num) => num * 2);
console.log(b);

//2-Devuelve un array con los mismos elementos de a pero aplicandole la función f1. La función f1 le suma 4 al argumento de entrada. 
const f1 = (num) => num + 4;
const c = a.map(f1);
console.log(c);

//Devuelve un array con los valores menores de 20. 
const d = a.filter((num) => num < 20);
console.log(d);

//4-Devuelve la suma de todos los números del array pero añadiendole 100. Es decir, no empieza en cero.
const e = a.reduce((acc, num) => acc + num, 100);
console.log(e);