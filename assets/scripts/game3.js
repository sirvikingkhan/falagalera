const words = ["O_á", "Lu_", "P_i", "_ae", "_ol"];
const correctWords = ["Olá", "Lua", "Pai", "Mãe", "Sol"];
let currentWordIndex = 0;
let displayedWord = words[currentWordIndex];
let points = 0;
let correctGuesses = 0;
let incorrectGuesses = 0;

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
        correctGuesses++;
        document.getElementById("points").textContent = points;
        document.getElementById("message").textContent = "Boa tentativa!";
    } else {
        incorrectGuesses++;
        document.getElementById("message").textContent = "Tente novamente!";
    }

    input.value = "";

    if (displayedWord === correctWord) {
        document.getElementById("message").textContent = "Parabéns! Você! Acertou!";