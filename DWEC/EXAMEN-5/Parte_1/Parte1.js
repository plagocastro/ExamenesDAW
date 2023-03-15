const f1 = function(n, m) {
  return n + m;
};

const f2 = f1; 

console.log(f1(3, 4)); 
console.log(f2(8, 7)); 

const calculadora = (param1, param2, operacion) => operacion(param1, param2);

const suma = (n, m) => n + m;
const resta = (n, m) => n - m;
const multi = (n, m) => n * m;

console.log(calculadora(3, 4, suma)); 
console.log(calculadora(8, 7, resta)); 
console.log(calculadora(3, 4, multi)); 
