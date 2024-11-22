<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de Pronúncia em Português</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            background-color: #fff; /* Fondo blanco */
            font-family: Arial, sans-serif;
            color: #333; /* Texto negro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #009688; /* Verde */
        }

        select {
            padding: 10px;
            font-size: 18px;
            border: 2px solid #009688; /* Verde */
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #009688; /* Verde */
            color: #fff; /* Texto blanco */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #00796b; /* Verde oscuro */
        }

        #audioPlayer {
            margin-top: 20px;
        }

        #links {
            margin-top: 20px;
        }

        #links a {
            display: inline-block;
            margin: 5px;
            padding: 5px 10px;
            background-color: #009688; /* Verde */
            color: #fff; /* Texto blanco */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #links a:hover {
            background-color: #00796b; /* Verde oscuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praticar Pronúncia em Português</h1>
        <div id="wordList">
            <select id="wordSelect">
                <option value="buenasnoches">Buenas Noches</option>
                <option value="adios">Adiós</option>
                <option value="hastaluego">Hasta Luego</option>
                <!-- Adicione más palabras aquí -->
            </select>
            <button onclick="playAudio()">Ouvir Pronúncia</button>
        </div>
        <div id="audioPlayer"></div>
    </div>
    <script src="pronunciacion/script.js"></script>
</body>
</html>
