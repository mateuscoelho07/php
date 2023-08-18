<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

        <!-- Mateus Coelho Sola -->
</head>
<body>
     
    <!-- Exemplo de números -->
    <?php
        echo 8;
        echo "<br>";
        echo 4;
        echo "| Valores inteiros. <br>";
        echo 6 + 2;
        echo "| Soma de inteiros. <br>";
        echo -7;
        echo "| Numeros negativos. <br>";
        echo 4 - 8;
        echo "| Soma com negativo. <br>";
        
        $n = 8;
        echo $n;
        echo "| Alimentar variável e recuperar valor. <br>";

    ?>


    <!-- Verificação do exemplo números -->
    <?php

        if(is_int(4)) { // true
        echo "É um inteiro <br>";
        }
         if(is_int("Não é um inteiro")) { // false
        echo "É um inteiro 4 <br>";
        }

        $a = 5;

         if(is_int($a)) { // true
        echo "É um inteiro 3 <br>";
        }
    ?>

        <!-- Exemplos de textos -->

        <?php


        echo "Testando texto de aspas duplas <br>";
        echo 'Testando texto de aspas simples <br>';
        echo "<br><<p>Para exibir uma aspas, inicie a string com a outra.</p>";
        echo "Ele disse: 'Olá' <br>";
        echo 'Ele disse: "Olá" <br>';
    
        echo "<br><p>O valor é passado para a variável e depois recuperado na string.</p>";
        $idade = 10;

        echo "Ele tem $idade anos <br>";
        echo 'Ele tem $idade anos';
    ?>    

        <!-- Verificação exemplos de textos -->

        <?php

            $str = "SESI";
            $num = 105;

            if(is_string($str)) {
                echo"$str é uma string 1<br>";
            }
            if(is_string($num)) {
                echo"$num é uma string 2<br>";
            }
            if(is_string("asd")) {
                echo"É uma string 3<br>";
            }
        ?>
        
        <!-- Exemplos de booleano-->

              <?php

                    echo true;
                    echo "<br>";
                    echo false;

                    if(true) {
                    echo "É verdadeiro! <br>";
                    }

                    if(10>9) { //true
                    echo "É verdadeiro! <br>";
                    }

                    $podeEntrar = true;

                    if($podeEntrar) {
                    echo "O usuário pode entrar";
                    }
                ?>

            <!-- Verificação exemplos de booleano -->

            <?php
    
                $a = true;
                if(is_bool($a)) {
                    echo "É um booleano 1 <br>";
                }
                if(is_bool(5)) {
                    echo "É um booleano 2 <br>";
                }
                if(is_bool(false)) {
                    echo "É um booleano 3 <br>";
                }
                if(5.0 == false) {
                    echo "5 é considerado falso! <br>";
                }
            ?>
    
            <!-- Exemplos de array -->

            <?php
        echo "<p>Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses.</p>";
        $a = array (5, 6, 7, 8);

        // Mostrar no navegador o Array inteiro
        print_r($a);
        echo "<br>";

        // Mostra no navegador somente o valor da primeira posição na lista.   
        echo "<p>O Primeiro valor da lista é: $a[4]</p>";

        echo "<br><hr>Sintaxe CURTA: NÃO usa o nome e põe os valores entre colchetes";

        $arr = ["SESI", 105, true];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[5]);
        echo "<br><p>0 Segundo valor da lista é: $arr[5]<?p>";
    ?>



</body>
</html>