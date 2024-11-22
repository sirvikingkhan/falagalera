<?php
$words = ["C_o", "G__o", "O_", "M_ndo"];
$correctWords = ["Cão", "Gato", "Oi", "Mundo"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Completar Palavras</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="game-container">
        <h1>Complete a Palavra</h1>
        <div id="word-container"></div>
        <input type="text" id="guess-input" placeholder="Digite a letra" maxlength="10">
        <button onclick="checkLetter()">Verificar</button>
        <p id="message"></p>
        <button onclick="resetGame()">Reiniciar Jogo</button>
    </div>
    <script>
        const words = <?php echo json_encode($words); ?>;
        const correctWords = <?php echo json_encode($correctWords); ?>;
        let currentWordIndex = 0;
        let currentWord = words[currentWordIndex];
        let displayedWord = currentWord.split("");

        document.addEventListener("DOMContentLoaded", () => {
            displayWord();
        });

        function displayWord() {
            const wordContainer = document.getElementById("word-container");
            wordContainer.innerHTML = displayedWord.join(" ");
        }

        function checkLetter() {
            const input = document.getElementById("guess-input");
            const guess = input.value.toUpperCase();
            const wordToGuess = correctWords[currentWordIndex].toUpperCase();

            if (guess && wordToGuess.includes(guess)) {
                for (let i = 0; i < wordToGuess.length; i++) {
                    if (wordToGuess[i] === guess) {
                        displayedWord[i] = guess;
                    }
                }
                displayWord();
                document.getElementById("message").innerText = "Boa tentativa!";
            } else {
                document.getElementById("message").innerText = "Tente novamente!";
            }

            input.value = "";

            if (displayedWord.join("") === wordToGuess) {
                document.getElementById("message").innerText = "Parabéns! Você completou a palavra!";
            }
        }

        function resetGame() {
            currentWordIndex = (currentWordIndex + 1) % words.length;
            currentWord = words[currentWordIndex];
            displayedWord = currentWord.split("");
            document.getElementById("message").innerText = "";
            displayWord();
        }
    </script>
</body>
</html>
