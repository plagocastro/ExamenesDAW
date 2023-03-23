const rollDice = () => {
    const randomNumber = Math.floor(Math.random() * 6) + 1;
    const result = Math.floor(Math.random() * 6) + 1;
    const delay = Math.floor(Math.random() * 6) + 10;
    return new Promise(resolve => setTimeout(() => resolve({ randomNumber, result }), delay * 1000));
};

const handleSuccess = ({ randomNumber, result }) => {
    const resultadoTextarea = document.getElementById('resultado');
    resultadoTextarea.value = `Número aleatorio: ${randomNumber}\nResultado del lanzamiento de los dados: ${result}`;
};

rollDice()
    .then(handleSuccess);