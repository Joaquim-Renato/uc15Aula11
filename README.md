# Introdução ao PHP 


Deve ser hospedado em:
- Disco local (C:)
- Pasta **xampp**
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
Exemplo: 
``````php
 <?php
    $color = "red";
    echo "my car is " . $color . "<br>";
    echo "my house is " . $COLOR . "<br>";
    echo "my boat is " . $coLOR . "<br>"
    ?> 
``````
---

# Atividade PHP

## Descrição
Este exemplo em PHP cria um formulário para seleção de opções de lazer e processa a entrada do usuário, exibindo o número de opções selecionadas.

### HTML - Formulário

- `<form>`: Inicia um formulário HTML.
- `method="post"`: Define o método de envio do formulário como POST, enviando os dados ao servidor de forma oculta na URL.
- `action="array.php"`: Define o arquivo "array.php" como o destino onde os dados do formulário serão processados.
- `<fieldset>`: Agrupa elementos dentro do formulário para organizar visualmente as seções.
- `<legend>Formulário de Cadastro</legend>`: Exibe o título "Formulário de Cadastro" como a legenda do campo.
- `<br>`: Insere uma quebra de linha após o título.
- `<input type="checkbox">`: Cria uma caixa de seleção para as opções de lazer.
  - `name="lazer[]"`: Define o nome "lazer[]" como um array no PHP, permitindo que várias opções sejam enviadas.
  - `value="..."`: Define o valor específico enviado ao servidor se a opção for selecionada (por exemplo: "Natação", "Ciclismo").
- O texto após cada `<input>` descreve a opção para o usuário, e `<br>` insere uma quebra de linha entre cada opção.

### PHP - Processamento do Formulário

```php
<?php
if (isset($_POST['lazer'])) {
    $oplazer = $_POST['lazer']; // Armazena o array de opções selecionadas
    $cont = count($oplazer); // Conta o número de opções selecionadas

    echo "<left><p><h2> $cont Opções de Lazer </h2></p></left>"; // Exibe o número de opções selecionadas

    foreach ($oplazer as $o_lazer) {
        echo "<left><p> <h3> $o_lazer </h3> </strong> </p></left>"; // Exibe cada opção de lazer selecionada
    }
} else {
    echo " <br> <center> <h3> Nenhuma opção de lazer escolhida!! </h3> </center>"; // Mensagem se nenhuma opção for selecionada
}
?>
```
## Estrutura do Código PHP

- `<?php`: Inicia o bloco de código PHP.
- `if (isset($_POST['lazer']))`: Verifica se a variável `$_POST['lazer']` está definida, o que indica que o formulário foi enviado e ao menos uma opção de lazer foi selecionada.
- `$oplazer = $_POST['lazer'];`: Armazena o array de opções de lazer selecionadas na variável `$oplazer`.
- `$cont = count($oplazer);`: Conta o número de opções selecionadas e armazena esse valor na variável `$cont`.
- `echo "<left><p><h2> $cont Opções de Lazer </h2></p></left>";`: Exibe o número total de opções de lazer selecionadas em um título (`<h2>`).
- `foreach ($oplazer as $o_lazer) { }`: Inicia um loop para percorrer cada opção selecionada, armazenando cada uma temporariamente na variável `$o_lazer`.
  - `echo "<left><p> <h3> $o_lazer </h3> </strong> </p></left>";`: Exibe o nome de cada opção de lazer selecionada em um título menor (`<h3>`).
- `else`: Caso o formulário tenha sido enviado sem nenhuma opção de lazer selecionada, exibe uma mensagem centralizada para informar o usuário.
- `?>`: Finaliza o bloco de código PHP.

## Observação

