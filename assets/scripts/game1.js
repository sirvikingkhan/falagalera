const words = ["Son_ar", "Can_ar", "Pin_ar", "Cho_ar", "Meni_a", "Gira_a"];
const correctWords = ["Sonhar", "Cantar", "Pintar", "Chorar", "Menina", "Girafa"];
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
        document.getElementById("message").textContent = "Parabéns! Você completou a palavra!";
        if (currentWordIndex === words.length - 1) {
            showResult();
        } else {
            currentWordIndex++;
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
    incorrectGuesses = 0;
    document.getElementById("points").textContent = points;
    document.getElementById("message").textContent = "";
    document.getElementById("result").textContent = "";
    displayWord();
}

function showResult() {
    document.getElementById("result").textContent = `Pontos: ${points}, Palavras corretas: ${correctGuesses}, Palavras incorretas: ${incorrectGuesses}`;
}