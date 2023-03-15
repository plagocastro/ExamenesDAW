// Función para generar un número aleatorio entre 1 y 6 (inclusives)
const lanzarDado = () => Math.floor(Math.random() * 6) + 1;

// Lanzar los dos dados
const dado1 = lanzarDado();
const dado2 = lanzarDado();

console.log(`Dado 1: ${dado1}`);
console.log(`Dado 2: ${dado2}`);

// Calcular el número ganador
const ganador = Math.min(dado1, dado2);

console.log(`El ganador es el número ${ganador}`);