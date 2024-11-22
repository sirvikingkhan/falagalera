<?php 

require '../logic/database.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>expressions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript" src="../assets/js/listarEstudiantes.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
 

  <!-- Favicons -->
  <link href="../assets/img/Suadance sin fondo negro.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/listadoStyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="fotos/regresar.png" width="150">
      </a>
      
      
    </header>

  <!-- Categories Section -->

  
    <div class="container">

      <div class="section-title">
    
   
      </div>

     <div class="container">
  
    
   
 
<head>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #0056b3;
        }
        .container {
            padding: 20px;
        }
        .section-title {
            font-size: 26px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .section-content {
            margin-bottom: 20px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .audio-player {
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 15px;
            
            color: white;
      
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: #0056b3;
        }
        .card-text ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .audio-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .audio-controls button {
            border: none;
            background: none;
            color: #007bff;
            cursor: pointer;
        }
        .audio-controls button:hover {
            text-decoration: underline;
        }
        .highlight {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .highlight h4 {
            margin: 0;
        }
         /* Estilos para el botón */
         .btn-play {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-play:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="header" style="background-color: #007bff; color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 40px;">
    <p style="margin: 0; font-size: 3em; font-weight: bold; line-height: 1.2;">Lista de compras </p>
    <p style="margin: 10px 0 0; font-size: 1.5em; font-weight: 300;"></p>
</div>


<div class="container">
<div class="app-container" style="max-width: 600px; margin: auto; padding: 20px; font-family: 'Arial', sans-serif; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h2 class="section-title" style="color: #2196F3; text-align: center; margin-bottom: 20px; font-size: 24px;">🥗 **Produtos Frescos**</h2>

    <div class="categories" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
        <div class="category" style="flex: 1 1 45%; margin-bottom: 15px; padding: 15px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #f9f9f9;">
            <h3 style="color: #2196F3; margin-bottom: 10px; font-size: 20px;">🌾 **Grãos e Massas**</h3>
            <ul style="list-style-type: none; padding: 0; margin: 0;">
                <li style="margin: 5px 0;">🍚 **Arroz**</li>
                <li style="margin: 5px 0;">🍝 **Massa**</li>
                <li style="margin: 5px 0;">🥖 **Pão**</li>
                <li style="margin: 5px 0;">🌽 **Milho**</li>
                <li style="margin: 5px 0;">🥔 **Batata**</li>
            </ul>
        </div>

        <div class="category" style="flex: 1 1 45%; margin-bottom: 15px; padding: 15px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #f9f9f9;">
            <h3 style="color: #2196F3; margin-bottom: 10px; font-size: 20px;">🍗 **Proteínas**</h3>
            <ul style="list-style-type: none; padding: 0; margin: 0;">
                <li style="margin: 5px 0;">🍗 **Frango**</li>
                <li style="margin: 5px 0;">🥩 **Carne de vaca**</li>
                <li style="margin: 5px 0;">🐟 **Peixe**</li>
                <li style="margin: 5px 0;">🍳 **Ovos**</li>
                <li style="margin: 5px 0;">🥓 **Bacon**</li>
            </ul>
        </div>

        <div class="category" style="flex: 1 1 45%; margin-bottom: 15px; padding: 15px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #f9f9f9;">
            <h3 style="color: #2196F3; margin-bottom: 10px; font-size: 20px;">🥛 **Laticínios**</h3>
            <ul style="list-style-type: none; padding: 0; margin: 0;">
                <li style="margin: 5px 0;">🥛 **Leite**</li>
                <li style="margin: 5px 0;">🧀 **Queijo**</li>
                <li style="margin: 5px 0;">🍦 **Sorvete**</li>
                <li style="margin: 5px 0;">🍶 **Iogurte**</li>
                <li style="margin: 5px 0;">🧈 **Manteiga**</li>
            </ul>
        </div>

        <div class="category" style="flex: 1 1 45%; margin-bottom: 15px; padding: 15px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #f9f9f9;">
            <h3 style="color: #2196F3; margin-bottom: 10px; font-size: 20px;">🥤 **Bebidas**</h3>
            <ul style="list-style-type: none; padding: 0; margin: 0;">
                <li style="margin: 5px 0;">☕ **Café**</li>
                <li style="margin: 5px 0;">🥤 **Refrigerante**</li>
                <li style="margin: 5px 0;">🍵 **Chá**</li>
                <li style="margin: 5px 0;">🍹 **Suco**</li>
                <li style="margin: 5px 0;">🍺 **Cerveja**</li>
            </ul>
        </div>
    </div>

    <p class="section-footer" style="text-align: center; color: #2196F3; margin-top: 20px; font-size: 16px;">
        🥦 **Explore a variedade de produtos frescos que você pode incluir em sua dieta diária. Aproveite a frescura!**
    </p>
</div>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #0056b3;
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            font-size: 20px;
            margin-top: 15px;
        }

        .dialogue {
            margin-bottom: 15px;
            padding: 10px;
            border-left: 4px solid #0056b3;
            background-color: #e9f0f7;
            border-radius: 8px;
        }

        .list-container {
            margin-top: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .list-item {
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #0056b3;
            border-radius: 4px;
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        .list-item:hover {
            background-color: #e1e7ff;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vamos Praticar Escutando Esses Diálogos no Supermercado</h1>

        <h2>Diálogo 1: No Supermercado</h2>
        <div class="dialogue">
            <strong>Cliente:</strong> “Olá! Onde fica a sessão das carnes defumadas?”<br>
            <strong>Vendedor:</strong> “A sessão dos defumados fica no corredor 3, à direita dos queijos artesanais.”<br>
            <strong>Cliente:</strong> “Ótimo, obrigado!”
        </div>

        <h2>Diálogo 2: Escolhendo Produtos</h2>
        <div class="dialogue">
            <strong>Cliente:</strong> “Estou procurando uma cesta para fazer compras.”<br>
            <strong>Vendedor:</strong> “Temos cestas de plástico e também carrinho de compras. Qual você prefere?”<br>
            <strong>Cliente:</strong> “Acho que vou levar o carrinho de compras, obrigado.”
        </div>

        <h2>Diálogo 3: Perguntando Preços</h2>
        <div class="dialogue">
            <strong>Cliente:</strong> “Quanto custa este produto?”<br>
            <strong>Vendedor:</strong> “Este produto está em promoção. Custa R$ 10.”<br>
            <strong>Cliente:</strong> “Excelente! Vou levar.”
        </div>

        <h2>Diálogo 4: Formas de Pagamento</h2>
        <div class="dialogue">
            <strong>Cliente:</strong> “Qual é a forma de pagamento?”<br>
            <strong>Vendedor:</strong> “Aceitamos dinheiro, cartão de crédito e débito.”<br>
            <strong>Cliente:</strong> “Vou pagar com cartão de crédito.”
        </div>

        <h2>Diálogo 5: Despedindo-se</h2>
        <div class="dialogue">
            <strong>Cliente:</strong> “Obrigado pela ajuda! Até mais!”<br>
            <strong>Vendedor:</strong> “Volte sempre!”
        </div>

        <div class="list-container">
            <h2>Agora é sua vez! Faça sua Lista de Compras</h2>
            <div class="list-item">1. Leite</div>
            <div class="list-item">2. Pão</div>
            <div class="list-item">3. Queijo</div>
            <div class="list-item">4. Frutas</div>
            <div class="list-item">5. Legumes</div>
        </div>
    </div>
</body>

<!-- 



         

        <div class="card ">
         
          
                <p class="highlight">
                <div class="container">
    



   
    </div>
    
    <p class="section-footer" style="margin-top: 20px; text-align: center; color: #4CAF50;">
        👫 **Aprenda e respeite as diferenças culturais!** A compreensão das normas sociais é fundamental para uma boa convivência.
    </p>
</div>

        <div class="translation-table">
            <table>
                <thead>
                    <tr>
                        <th>Português</th>
                        <th>Español</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td onclick="toggleTranslation('amanha')">Até amanhã!</td>
                        <td id="amanha" class="translation" style="display: none;">¡Hasta mañana!</td>
                    </tr>
                    <tr>
                        <td onclick="toggleTranslation('logo')">Até logo!</td>
                        <td id="logo" class="translation" style="display: none;">¡Hasta luego!</td>
                    </tr>
                    <tr>
                        <td onclick="toggleTranslation('mais')">Até mais (tarde)! / (até mais) T+</td>
                        <td id="mais" class="translation" style="display: none;">¡Hasta pronto!</td>
                    </tr>
                    <tr>
                        <td onclick="toggleTranslation('fim')">Bom fim de semana!</td>
                        <td id="fim" class="translation" style="display: none;">¡Bonito final de semana!</td>
                    </tr>
                    <tr>
                        <td onclick="toggleTranslation('tchau')">Tchau</td>
                        <td id="tchau" class="translation" style="display: none;">Tchau</td>
                    </tr>
                    <tr>
                        <td onclick="toggleTranslation('ja')">Até já (daqui a pouco) / já já.</td>
                        <td id="ja" class="translation" style="display: none;">Hasta pronto</td>
                    </tr>
                </tbody>
            </table>
        </div>
<div class="app-container" style="max-width: 600px; margin: auto; padding: 20px; font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    <h2 class="farewell-title" style="color: #2196F3; text-align: center;">👋 **Cómo Utilizar "Adiós" en Portugués**</h2>
    
    <div class="farewell-section" style="background-color: #ffffff; border-radius: 8px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <p style="color: #666; line-height: 1.6;">
            Para decir "Adiós" en portugués, se utiliza la palabra **"ADEUS"**. Sin embargo, es importante tener en cuenta que su uso es menos frecuente en situaciones cotidianas.
        </p>
        <p style="color: #666; line-height: 1.6;">
            La razón de esto es que "ADEUS" es una despedida que implica que las personas no volverán a verse nunca más. En contextos más informales o cotidianos, es común usar otras expresiones para despedirse, como:
        </p>
        <ul style="color: #666; line-height: 1.6;">
            <li>👋 **Tchau**: Usado en situaciones informales y muy común entre amigos.</li>
            <li>🌟 **Até logo**: Significa "hasta luego", usado cuando se espera volver a ver a la persona.</li>
            <li>💬 **Até mais**: Similar a "hasta luego", se usa en un contexto más relajado.</li>
        </ul>
    </div>
    
    <p class="section-footer" style="margin-top: 20px; text-align: center; color: #2196F3;">
        💬 **Aprender a despedirse correctamente es importante en la comunicación. ¡Practica y mejora tu portugués!**
    </p>
    

    <button class="btn-reproducir" style="background-color: #008C45; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
    Reproducir
</button>

</div>
 
    </div>
</div>

<!-- Estilos adicionais -->
<style>
    .container {
        padding: 20px;
    }
    .card {
        background: #f4f4f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section-title {
        font-size: 1.6em;
        margin-bottom: 15px;
        color: #333;
    }
    .section-description {
        font-size: 1.1em;
        margin-bottom: 10px;
        color: #666;
    }
    .cultural-tip-title {
        font-size: 1.3em;
        margin-top: 20px;
        color: #444;
    }
    .cultural-tip {
        font-size: 1em;
        margin-bottom: 10px;
        color: #555;
    }
    .cultural-list {
        list-style-type: disc;
        margin-left: 20px;
        color: #555;
    }
    .translation-table {
        margin-top: 20px;
        border-collapse: collapse;
        width: 100%;
    }
    .translation-table table {
        width: 100%;
        border-collapse: collapse;
    }
    .translation-table th, .translation-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .translation-table th {
        background-color: #f2f2f2;
        color: #333;
    }
    .translation-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .translation {
        display: none;
        color: #007bff;
        font-style: italic;
    }
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #0056b3;
        }

        h1 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 22px;
            margin-top: 20px;
            color: #333;
        }

        .section {
            margin: 15px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .courtesy {
            background-color:  #01579b;
            border-left: 4px solid #0277bd;
        }

        .verbs {
            background-color: #e8f5e9;
            border-left: 4px solid #388e3c;
        }

        .pronouns {
            background-color: #4CAF50 ;
            border-left: 4px solid #fb8c00;
        }

        .objects {
            background-color: #E91E63 ;
            border-left: 4px solid #d81b60;
        }

        .folklore {
            background-color: #9C27B0;
            border-left: 4px solid #8e24aa;
        }

        .articles {
            background-color: #FFEB3B;
            border-left: 4px solid #fbc02d;
        }

        .clothes {
            background-color:  #01579b;
            border-left: 4px solid #039be5;
        }

        p {
            margin: 10px 0;
            color: #fff;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
        }
    </style>
</style>

<!-- JavaScript para alternar traducciones -->
<script>
    function toggleTranslation(id) {
        var element = document.getElementById(id);
        if (element.style.display === "none") {
            element.style.display = "inline";
        } else {
            element.style.display = "none";
        }
    }
</script>


</body>
                    
                </p>
            
                 
                </div>
              
            </div>
            <div class="container">
        <h1>Aprendendo Português</h1>

        <div class="section courtesy">
            <h2>Expressões de Cortesia</h2>
            <p><strong>Português:</strong> Perdão | <strong>Español:</strong> Perdón</p>
            <p><strong>Português:</strong> Por favor… | <strong>Español:</strong> Por favor…</p>
            <p><strong>Português:</strong> Com licença! | <strong>Español:</strong> ¡Com permiso!</p>
            <p><strong>Português:</strong> Desculpe! | <strong>Español:</strong> Disculpa</p>
            <p><strong>Português:</strong> Posso… (falar com você)? | <strong>Español:</strong> ¿Puedo…(hablar contigo)?</p>
            <p><strong>Português:</strong> Muito obrigada(o) | <strong>Español:</strong> Muchas gracias</p>
            <p><strong>Exemplos:</strong></p>
            <p>I. Por favor, poderia me passar esse livro?</p>
            <p>II. Obrigada a todos vocês pelo apoio.</p>
        </div>

        <div class="section verbs">
            <h2>Introdução aos Verbos</h2>
            <p>◾️ <strong>Ser, Estar, Ter e Haver</strong> ◾️</p>
            <p>Os quatro principais VERBOS AUXILIARES da LÍNGUA PORTUGUESA são eles: <strong>ser</strong>, <strong>estar</strong>, <strong>ter</strong> e <strong>haver</strong>.</p>
            <p>Cada um deles contribui para a riqueza e versatilidade da nossa língua!</p>
            <p>Vamos explorar cada um deles:</p>
            <p><strong>1- Verbo “Ser”:</strong> <br>Auxiliar: Ela foi à escola. <br>Verbo de ligação: Ele é inteligente.</p>
            <p><strong>2- Verbo “Estar”:</strong> <br>Auxiliar: Eles estavam estudando. <br>Verbo de ligação: Eu estou cansado.</p>
            <p><strong>3- Verbo “Ter”:</strong> <br>Auxiliar para formar tempos compostos. Exemplo: Maria tinha lido o livro.</p>
            <p><strong>4- Verbo “Haver”:</strong> <br>Auxiliar em tempos compostos e na voz passiva. Exemplo: Não havendo prestado atenção, ele foi reprovado.</p>
        </div>

        <div class="section pronouns">
            <h2>Pronomes Pessoais</h2>
            <p>Nesta unidade vamos aprender sobre os pronomes pessoais como “eu”, “tu”, “ele/ela”, “nós”, “vós” e “eles/elas”. Veja vídeos e textos para entender como usá-los. Complete as atividades para praticar.</p>
        </div>

        <div class="section objects">
            <h2>Objetos do Cotidiano</h2>
            <p>Vamos conhecer objetos do cotidiano como “tesoura”, “panela” e “caneta”. Assista aos vídeos e leia os textos para aprender seus nomes e usos. Complete as atividades para praticar.</p>
        </div>

        <div class="section folklore">
            <h2>Folclore Brasileiro</h2>
            <p>Descobrindo lendas como “Saci-Pererê” e “O Curupira”. Lendo os textos para entender essas tradições. Complete as atividades para praticar.</p>
        </div>

        <div class="section articles">
            <h2>Artigos Definidos e Indefinidos</h2>
            <p>Aprenda a usar “o”, “a”, “um” e “uma”. Assista aos vídeos e leia os textos para entender seu uso. Complete as atividades para praticar.</p>
        </div>

        <div class="section clothes">
            <h2>Vocabulário das Roupas e Acessórios</h2>
            <p>Aprenda sobre roupas e acessórios como “camisa”, “calça” e “bolsa”. Veja vídeos e textos para aprender seus nomes e usos. Complete as atividades para praticar.</p>
        </div>
    </div>

        <div class="card">
           
          
            
                 
                      <br>
                      <div style="text-align: center;">
    <img src="fotos/flg2.jpg" alt="Imagem de cumprimento" style="width: 500px; height: auto;" />
</div>
   
            </div>
        </div>
    </div>

    <div class="footer">
      
    <p>&copy; 2024 Aprende Portugués. Todos os direitos reservados.
    <a href="expressions3.php">
        <img src="fotos/siguiente.png" width="150" alt="Ir para próximo">
    </a>
</p>

        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function updatePlaybackRate(audioId) {
            const audio = document.getElementById(audioId);
            const rateControl = document.getElementById('playback-rate-' + audioId);
            audio.playbackRate = rateControl.value;
        }

        // Example function to update time left (replace with actual functionality if needed)
        function updateTimeLeft(audioId, timeLeftId) {
            const audio = document.getElementById(audioId);
            const timeLeft = document.getElementById(timeLeftId);
            audio.ontimeupdate = () => {
                let secondsLeft = Math.ceil(audio.duration - audio.currentTime);
                let minutes = Math.floor(secondsLeft / 60);
                let seconds = secondsLeft % 60;
                timeLeft.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            };
        }

        updateTimeLeft('audio-intro', 'time-left-intro');
        updateTimeLeft('audio-saudacoes', 'time-left-saudacoes');
    </script>
</body>
</html>

 





              <?php
            
            //$num="uwu";
            //echo '<script>alert("HOLLLAA'.$num.'");</script>';
           
             // require 'listarEstudiantes.js';
             // $num->listar();
              
             // echo '<script> alert("HOLLLAA'.$num.'");</script>';
          
              //$sql="SELECT * from students WHERE categoria=funny";
              //$sql="SELECT * from students WHERE categoria=junior";
              //$sql="SELECT * from students WHERE categoria=prejuvenil";
              //$sql="SELECT * from students WHERE categoria=juvenilB";
              //$sql="SELECT * from students WHERE categoria=juvenilM";
              //$sql="SELECT * from students WHERE categoria=juvenilA";
              //$sql="SELECT * from students WHERE categoria=golden";
              $sql="SELECT * from students WHERE categoria='juvenilM'";
              $stm = $conn->query($sql);

              foreach($stm as $mostrar){
                $var=$mostrar['Id'];
                
              ?> 
                <tr>
                
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><img src="<?php echo $mostrar['foto'] ?>" width="50px"></a></td>
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><?php echo $mostrar['Nombre'] ?></a></td>
                <td><a href="infoStudent.php?estudiante=<?php echo $var; ?>"><?php echo $mostrar['Apellidos'] ?></a></td>
                <td>

                  <?php 
                  $datenew = DateTime::createFromFormat("Y-m-d", $mostrar['fecha_fin']);
                  $hoy = new DateTime();
                  if($datenew>$hoy){
                    echo 'Activo';
                  }
                  else{
                    echo 'Inactivo';
                  }
                  
                  ?>

                </td>
                
                </tr>
                <?php 
	              }
	              ?>
            </tbody>
        </table>
     </div>

      

      

    </div>
  

  
 <!-- List Section -->

 <section id="list" class="list">
    <div class="container">

      <div class="section-title">
        <h2>Lista de Estudiantes</h2>
  
      </div>

     

      
    </div>
  </section><!-- End List Section -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>