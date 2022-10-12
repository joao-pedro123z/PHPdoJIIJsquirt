<form action="delethihi.php" method="post">
    <p> O que você deseja excluir ? <input type="text" name="deletar"></p>
    <?php
    $deletarshutz = $_POST['deletar'];
    if(is_dir($deletarshutz)){
        $novinhahee = scandir($deletarshutz);
        array_shift($novinhahee);
        array_shift($novinhahee);
        foreach($novinhahee as $novona){
            unlink("$deletarshutz/$novona");
        }
        rmdir($deletarshutz);
    }
    ?>
    <button type="submit"> Excluir </button>
</form>