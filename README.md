# PHP 


Deve ser hospedado em:
- Disco local (C:)
- Dir **xampp**
- Pasta **htdocs**
---

Um script PHP pode ser colocado em qualquer lugar do documento.

## Sintaxe 

Um script PHP começa <?php e termina com  ?>:
``````php
<?php
// PHP code
?>
``````
Arquivos PHP possuem extensão ".php"
``````php
<?php
$txt = "PHP";
echo "I love $txt";
?>
``````
Para executar devo abrir o navegador digitar o seguinte endereço na barra de buscas
"http://localhost:84/nomeDaMinhaPasta"

## Criando (Declarando) Variáveis PHP 
No PHP, uma variavel começa com o sinal **$**, seguido do nome da variavel 
Exemplo abaixo: 
``````php
<?php
$txt = "INHAIM!!";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
?>
``````
- O nome de uma variavel não pode começar com um número
- Os nomes das variaveis diferenciam maiúsculas de minusculas (**$age** e **$AGE** são duas variáveis diferentes)