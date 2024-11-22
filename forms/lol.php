<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        /* Estilos CSS para la interfaz de chat */
        .chat-container {
            width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        .chat-box {
            height: 200px;
            overflow-y: scroll;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box"></div>
        <input type="text" id="user-input" placeholder="Escribe un mensaje...">
        <button onclick="sendMessage()">Enviar</button>
    </div>

    <script>
        function sendMessage() {
            var userInput = document.getElementById("user-input").value;
            if (userInput !== "") {
                addMessage(userInput, "user");

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "process_message.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = xhr.responseText;
                        addMessage(response, "bot");
                    }
                };
                xhr.send("message=" + encodeURIComponent(userInput));
            }
            document.getElementById("user-input").value = "";
        }

        function addMessage(message, sender) {
            var chatBox = document.getElementById("chat-box");
            var newMessage = document.createElement("div");
            newMessage.className = "message " + sender;
            newMessage.innerText = message;
            chatBox.appendChild(newMessage);
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</body>
</html>
