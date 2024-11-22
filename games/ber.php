<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete a Palavra</title>
    <style>
        .game-container {
            text-align: center;
            margin-top: 50px;
        }
        #word-container {
            font-size: 24px;
            margin-bottom: 20px;
        }
        #message, #score, #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="game-container">
        <h1>Complete a Palavra</h1>
        <div id="word-container"></div>
        <input type="text" id="guess-input" placeholder="Digite a letra" maxlength="1">
        <button onclick="checkLetter()">Verificar</button>
        <p id="message"></p>
        <p id="score">Pontos: <span id="points">0</span></p>
        <button onclick="resetGame()">Reiniciar Jogo</button>
        <p id="result"></p> <!-- Agregado para mostrar los resultados -->
    </div>

    <script>
        const words = ["G_to", "Ca_a", "No_e", "Da_o", "Ra_o"];
        const correctWords = ["Gato", "Casa", "Nome", "Dado", "Rato"];
        let currentWordIndex = 0;
        let displayedWord = words[currentWordIndex];
        let points = 0;
        let correctGuesses = 0; // Contador de palabras correctas
        let incorrectGuesses = 0; // Contador de palabras incorrectas

        document.addEventListener("DOMContentLoaded", () => {
            displayWord();
        });

        function displayWord() {
            const wordContainer = document.getElementById("word-container");
            wordContainer.textContent = displayedWord;
        }

        function checkLetter() {
            const input = document.getElementById("guess-input");
            const guess = input.value.toLowerCase();
            const correctWord = correctWords[currentWordIndex].toLowerCase();

            if (guess && correctWord.includes(guess)) {
                displayedWord = correctWord;
                points++;
                correctGuesses++; // Incrementar el contador de palabras correctas
                document.getElementById("points").textContent = points;
                document.getElementById("message").textContent = "Boa tentativa!";
            } else {
                incorrectGuesses++; // Incrementar el contador de palabras incorrectas
                document.getElementById("message").textContent = "Tente novamente!";
            }

            input.value = "";

            if (displayedWord === correctWord) {
                document.getElementById("message").textContent = "Parabéns! Você completou a palavra!";
                if (currentWordIndex === words.length - 1) {
                    showResult(); // Mostrar los resultados finales si se completaron todas las palabras
                } else {
                    currentWordIndex++; // Pasar a la siguiente palabra
                    displayedWord = words[currentWordIndex];
                    displayWord();
                }
            }
        }

        function resetGame() {
            currentWordIndex = 0;
            displayedWord = words[currentWordIndex];
            points = 0;
            correctGuesses = 0;
            incorrectGuesses = 0; // Restablecer contadores de palabras correctas e incorrectas
            document.getElementById("points").textContent = points;
            document.getElementById("message").textContent = ""; // Limpiar mensaje
            document.getElementById("result").textContent = ""; // Limpiar resultados
            displayWord();
        }

        function showResult() {
            document.getElementById("result").textContent = `Pontos: ${points}, Palavras corretas: ${correctGuesses}, Palavras incorretas: ${incorrectGuesses}`;
        }
    </script>
</body>
</html>
