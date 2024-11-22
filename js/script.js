const questions = [
    { question: "¿Qué significa 'casa' en portugués?", options: ["Carro", "Casa", "Perro", "Libro"], answer: "Casa" },
    { question: "¿Cuál es el color 'azul' en portugués?", options: ["Vermelho", "Verde", "Azul", "Amarillo"], answer: "Azul" },
    { question: "¿Qué significa 'amor' en portugués?", options: ["Amigo", "Amor", "Agua", "Aire"], answer: "Amor" },
    { question: "¿Cuál es la fruta 'naranja' en portugués?", options: ["Maçã", "Banana", "Morango", "Laranja"], answer: "Laranja" },
    { question: "¿Qué significa 'hola' en portugués?", options: ["Olá", "Adeus", "Bom dia", "Boa noite"], answer: "Olá" },
    { question: "¿Cuál es la comida 'arroz' en portugués?", options: ["Arroz", "Feijão", "Carne", "Pão"], answer: "Arroz" },
    { question: "¿Qué significa 'gracias' en portugués?", options: ["Por favor", "Gracias", "Perdón", "Bien"], answer: "Gracias" },
    { question: "¿Cuál es el animal 'gato' en portugués?", options: ["Cachorro", "Gato", "Pássaro", "Peixe"], answer: "Gato" },
    { question: "¿Qué significa 'agua' en portugués?", options: ["Fogo", "Terra", "Ar", "Água"], answer: "Água" },
    { question: "¿Cuál es la ropa 'camisa' en portugués?", options: ["Camisa", "Calça", "Vestido", "Sapato"], answer: "Camisa" }
];

let currentQuestionIndex = 0;
let score = 0;

function showQuestion() {
    const questionElement = document.getElementById("question");
    const optionsElement = document.getElementById("options");
    const currentQuestion = questions[currentQuestionIndex];

    questionElement.textContent = currentQuestion.question;
    optionsElement.innerHTML = "";

    currentQuestion.options.forEach(option => {
        const optionElement = document.createElement("div");
        optionElement.classList.add("option");
        optionElement.textContent = option;
        optionElement.onclick = () => checkAnswer(option);
        optionsElement.appendChild(optionElement);
    });
}

function checkAnswer(selectedOption) {
    const currentQuestion = questions[currentQuestionIndex];
    const resultElement = document.getElementById("result");

    if (selectedOption === currentQuestion.answer) {
        score++;
        document.getElementById("scoreValue").textContent = score;
        resultElement.textContent = "¡Correcto!";
        resultElement.classList.remove("incorrect");
        resultElement.classList.add("correct");
        setTimeout(nextQuestion, 1000); // Avanza a la siguiente pregunta después de 1 segundo
    } else {
        resultElement.textContent = "Incorrecto. Inténtalo de nuevo.";
        resultElement.classList.remove("correct");
        resultElement.classList.add("incorrect");
    }
}

function nextQuestion() {
    const resultElement = document.getElementById("result");
    resultElement.textContent = "";

    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion();
    } else {
        const restartButton = document.createElement("button");
        restartButton.textContent = "Reiniciar";
        restartButton.onclick = () => {
            currentQuestionIndex = 0;
            score = 0;
            document.getElementById("scoreValue").textContent = score;
            showQuestion();
            restartButton.remove(); // Elimina el botón de reiniciar después de hacer clic en él
        };
        document.getElementById("container").appendChild(restartButton);
        restartButton.scrollIntoView(); // Desplaza la vista hacia abajo para mostrar el botón de reiniciar
    }
}

showQuestion();