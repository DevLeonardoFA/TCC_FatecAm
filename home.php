<?php 

    //conteúdo da página home
    include('backend/connection.php');
    include('backend/verificacao_logado.php');
    include('includes/header.php'); 
    include('includes/sidebar.php');


    //definindo numero de itens visiveis na tela
    $itens_por_pagina = 1;

    //pega pagina atual
    $pagina = intval($_GET['pagina']);

    //puxa resultados do banco
    $sql_code = "select nome from usuario where categoria = 1 LIMIT $pagina,$itens_por_pagina";
    $execute = $connection->query($sql_code) or die($connection->error);
    $resultado = $execute->fetch_assoc();
    $num = $execute->num_rows;

    //quantidade total de itens no banco
    $num_total = $connection->query("select nome from usuario where categoria = 1")->num_rows;

    //definir numero de paginas
    $num_paginas = $num_total/$itens_por_pagina;
?>  

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="procurar">
                    <h1>Buscar Atleta</h1>
                    <form action="pesquisar.php" method="POST" class="form_pesquisar">
                        <input type="text" name="nome" placeholder="Nome">
                        <div>
                            <select name="uf" id="uf" disabled data-target="#cidade">
                                <option value="">Estados</option>
                            </select>
                        </div>

                        <div>
                            <select name="cidade" id="cidade" disabled>
                                <option value="">Cidade</option>
                            </select>
                        </div>
                        <input type="text" name="idade" placeholder="Idade">
                        <input type="text" name="posicao" placeholder="Posição">
                        <button type="submit">Procurar</button>
                    </form>
                </div>
            </div>
            <div class="col-10">
                <?php if ($num > 0) {?>

                <div class="row">

                    <?php do { ?>
                        <div class="col-3">
                            <div class="area_video">
                                <div class="video">
                                    <?php echo $_SESSION['video'];?>
                                </div>
                                <div class="jogador_info">
                                <h4><?= $resultado['nome']; ?></h4>
                                <h4><?php // $resultado['cidade']; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php } while($resultado = $execute->fetch_assoc()); ?>
                </div>        

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="home.php?pagina=0" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                            <?php for($i=0;$i<$num_paginas;$i++){   
                                $estilo = "";
                                if ($pagina == $i) {$estilo = "class=\"active\"";}
                            ?>
                                <li <?= $estilo; ?> class="page-item"><a class="page-link" href="home.php?pagina=<?= $i; ?>"><?= $i+1; ?></a></li>
                            <?php } ?>
                            <li class="page-item">
                            <a class="page-link" href="home.php?pagina=<?= $num_paginas-1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <?php }?>
            </div>
        </div>
    </div>


<?php include('includes/footer.php'); ?>
