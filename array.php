
<?php
if (isset($_POST['lazer'])){

    $oplazer = $_POST['lazer'];
        $cont = count($oplazer);
        
        echo "<left><p><h2> $cont Opções de Lazer </h2></p></left>";
        foreach ($oplazer as $o_lazer) {
            echo "<left><p><h3> $o_lazer </h3> </strong></p></left>";
        }
    
}else {

    echo "<br> <center> <h3> Nenhuma opção de lazer escolhida!! </h3> </center>";
}
?>
<div style="text-align: center;"> <a href="index.html">Voltar</a></div>