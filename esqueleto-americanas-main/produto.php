<?php
    include "header.php";
    include "config.php";

    $id = $_GET ["id"];//esse id vem url produto.php?id=2
    //print_r($id);exit;
    $sql = "select * from produto where id= $id";
    $consulta = $pdo-> prepare($sql);
    $consulta->execute();
    
    $produtos = $consulta->fetch(PDO::FETCH_ASSOC);
    
    ?>
    

    
<main>
   
        <div class="grid-2">
    <div class="coluna">
        <img src="imagens/<?=$produtos[$id]["imagem"]?>" alt="<?=$produtos[$id]["nome"]?>"> 
    </div>
    <div class="coluna">
        <h2><?=$produto[$id]["nome"]?></h2>
        <p>R$ <?=$produtos[$id]["valor"]?></p>
    </div>
</main>

<?php
    include "footer.php"
?>


    