<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Completar Palavras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center; /* Centra el contenido horizontalmente */
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #000428, #004e92);
            margin: 0;
            padding: 0;
            color: white;
        }

        .game-container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 300px;
        }

        #word-container {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #guess-input {
            font-size: 18px;
            padding: 5px;
            border: 1px solid #004e92;
            border-radius: 5px;
            outline: none;
        }

        button {
            font-size: 18px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            background-color: #004e92;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #002f6c;
        }

        #message {
            font-size: 18px;
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
    </div>

    <script>
        const words = ["G__o", "M_ndo", "Olá", "Lua", "Pai", "Mae", "Sol"];
        const correctWords = ["Gato", "Mundo", "Olá", "Lua", "Pai", "Mãe", "Sol"];
        let currentWordIndex = 0;
        let displayedWord = words[currentWordIndex];
        let points = 0;

        document.addEventListener("DOMContentLoaded", () => {
            displayWord();
        });

        function displayWord() {
            const wordContainer = document.getElementById("word-container");
            wordContainer.textContent = displayedWord;
        }

        function checkLetter() {
            const input = document.getElementById("guess-input");
            const guess = input.value.toUpperCase();
            const correctWord = correctWords[currentWordIndex].toUpperCase();

            if (guess && correctWord.includes(guess)) {
                displayedWord = correctWord;
                points++;
                document.getElementById("points").textContent = points;
                document.getElementById("message").textContent = "Boa tentativa!";
            } else {
                document.getElementById("message").textContent = "Tente novamente!";
            }

            input.value = "";

            if (displayedWord === correctWord) {
                document.getElementById("message").textContent = "Parabéns! Você completou a palavra!";
            }
        }

        function resetGame() {
            currentWordIndex = (currentWordIndex + 1) % words.length;
            displayedWord = words[currentWordIndex];
            points = 0;
            document.getElementById("points").textContent = points;
            document.getElementById("message").textContent = "";
            displayWord();
        }
    </script>
</body>
</html>
