// script.js
let words = ["C__o", "G__o", "H__la", "M__ndo"];
let correctWords = ["Cão", "Gato", "Hola", "Mundo"];
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
