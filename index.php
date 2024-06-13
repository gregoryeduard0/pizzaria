<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="shecurt icon" href="logo.png">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella pizzaria</title>
</head>

<body>

    <div class="back">
        <div class="menu">
            <div class="logo">
                <img src="logo.png" alt="logo da pizzaria">

            </div><!--fim da logo-->

            <h2>Bella Pizza</h2>

        </div><!--Fim do menu-->

        <div class="border"></div>

        <div class="desconto">
            <h2>10%</h2>
            <h3>Desconto</h3>
            <p>No site</p>
        </div><!--fim do desconto-->

        <div class="pedir">
            <h2>Pedir via site</h2>
            <h3>Pedir via Whatsapp</h3>
        </div><!--fim do pedir-->

        <div class="imagem">
            <img src="Story_pizzaria__3_-removebg-preview.png" alt="">
        </div><!--fim da imagem-->

    </div><!--fim do back-->



    <div class="cor"></div>



    <div class="tabela">

        <div class="cardapio">
            <h2>Cardápio</h2>
            <div class="linha"></div>
        </div><!--fim do cardapio-->

        <div class="img">
            <img src="Instagram post cardápio pizza moderno vermelho e amarelo (1).png" alt="">
        </div>
    </div><!--fim da tabela-->


    <div class="pedidos">
        <h2>Faça seu pedido aqui!</h2>
        <div class="linha"></div>
    </div><!--fim do pedidos-->

    <div class="registro">
        <h2>Registre-se</h2>

        <form action="#" method="post">

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="cell">Telefone:</label>
            <input type="text" name="cell" id="cell" required>
            <br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            <br>

            <label for="sabor">Sabor:</label>
            <select name="sabor" id="sabor">
                <option value="calabresa">Calabresa</option>
                <option value="mussarela">Mussarela</option>
                <option value="4 queijos">4 Queijos</option>
                <option value="chocolate">Chocolate</option>
                <option value="chocolate branco">Chocolate Branco</option>
            </select>
            <br>

            <label for="tamanho">Tamanho:</label>
           <select name="tamanho" id="tamanho">
            <option value="25 cm">25 cm pequena</option>
            <option value="35 cm">35 cm média</option>
            <option value="45 cm">45 cm grande</option>
           </select>
            <br>

            <label for="bebida">Bebida:</label>
            <select name="bebida" id="bebida">
                <option value="refri">Refri</option>
                <option value="suco">Suco</option>
                <option value="suco natural">Suco natural</option>
            </select>
            <br>

            <input type="submit" value="Fazer pedido">
        </form>
    </div>


    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pizzaria";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["name"];
        $telefone = $_POST["cell"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO cliente (nome, telefone, endereco) VALUES
        ('$nome', '$telefone', '$endereco')";

        if ($conn->query($sql) === TRUE) {
            echo "<p> Pedido realizado com sucesso! </p>";
        }else{
            echo "Erro" . $sql . "<br>" . $conn->error;
        }
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sabor = $_POST["sabor"];
        $tamanho = $_POST["tamanho"];
        $bebida = $_POST["bebida"];

        $sql2 = "INSERT INTO pizza (sabor, tamanho, bebida) VALUES
        ('$sabor', '$tamanho', '$bebida')";

       if ($conn->query($sql2) === TRUE) {
    echo "";
    }else{
        echo "Erro" . $sql2 . "<br>" . $conn->error;
    }
    
}  

    $conn->close();

    ?>

<button onclick="voltarAoTopo()" id="btnVoltarAoTopo" title="Voltar ao Topo">Voltar ao Topo</button>

<script>
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("btnVoltarAoTopo").style.display = "block";
    } else {
      document.getElementById("btnVoltarAoTopo").style.display = "none";
    }
  }

  function voltarAoTopo() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE e Opera
  }

  </script>

</body>

</html>