function playAudio() {
    const wordSelect = document.getElementById("wordSelect");
    const selectedWord = wordSelect.value;
    const audioPlayer = document.getElementById("audioPlayer");

    // Enlaces de audio
    const audioLinks = {
        buenasnoches: "https://servitechperu.npsupport.digital/sk/audio%20portugues/2.mp3?_t=1718105226",
        adios: "https://servitechperu.npsupport.digital/sk/audio%20portugues/3.mp3?_t=1718105226",
        hastaluego: "https://servitechperu.npsupport.digital/sk/audio%20portugues/4.mp3?_t=1718105226"
            // Agregue más enlaces de audio aquí según sea necesario
    };

    // Crea un elemento de audio y configura su fuente
    const audioSrc = audioLinks[selectedWord];
    const audioElement = document.createElement("audio");
    audioElement.src = audioSrc;
    audioElement.controls = true; // Muestra los controles de reproducción
    audioElement.autoplay = true; // Reproduce automáticamente el audio

    // Deshabilita la opción de descargar el audio
    audioElement.setAttribute("controlsList", "nodownload");

    // Limpia el contenido previo del reproductor de audio y agrega el nuevo elemento de audio
    audioPlayer.innerHTML = "";
    audioPlayer.appendChild(audioElement);
}