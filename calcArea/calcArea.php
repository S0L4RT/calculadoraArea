<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área</title>
</head>
<body>
    <form action="calcArea.php" method="POST">
        <label for="forma">Escolha a forma:</label>
        <select name="forma">
            <option value="retang">Retângulo</option>
            <option value="tri">Triângulo</option>
            <option value="circ">Círculo</option>
        </select name="from"><br>
        <label for="largura">Largura:</label>
        <input type="number" name="largura" required><br>
        <label for="altura">Altura:</label>
        <input type="number" name="altura" required><br>
        <label for="base">Base:</label>
        <input type="number" name="base" required><br>
        <label for="altTri">Altura do triângulo: </label>
        <input type="number" name="altTri" required><br>
        <label for="raio">Raio:</label>
        <input type="number" name="raio" required><br>
        <input type="submit" name="Calcular" required>
        <input type="reset" name="Limpar" required><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['base']) && isset($_POST['altTri']) && isset($_POST['raio'])){
                $largura = $_POST['largura'];
                $altura = $_POST['altura'];
                $base = $_POST['base'];
                $altTri = $_POST['altTri'];
                $raio = $_POST['raio'];
                $erro = empty($largura) || empty($altura) || empty($base) || empty($altTri) || empty($raio) ?
                "Todos os campos são obrigatórios" : ((!is_numeric($altura) || $altura <= 0 || $largura <= 0 || $base<= 0 || $altTri <= 0 || $raio <= 0) ?
                "Por favor, insira valores válidos" : "");
                if($erro){
                    echo $erro;
                } else {
                    $retangulo = $largura * $altura;
                    $triangulo = $altTri * $base;
                    $circulo = 3.14 * pow($raio, 2);

                }
            } else{
                echo "Formulário não enviado corretamente";
            }
        }
    ?>
</body>
</html>