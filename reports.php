<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 

$query = "select * from jogadores INNER JOIN reporte on jogadores.cod_jogador = reporte.codJogador";
$query_reports = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());

?>

<div class="row m-0">
        <div class="col-2 sidebar">
            
            <?php include_once('includes/sidebar.php'); ?>

        </div>
        <div class="col-10 p-0">
            <?php include_once('includes/sidetop.php'); ?>
            
            <main class="page-contato block-main ">
                
                <h4>Forms recebidos:</h4>

                <table>
                    <thead>
                        <tr>
                            <th class='border-table'>report</th>
                            <th class='border-table'>id usuário</th>
                            <th class='border-table'>assunto</th>
                            <th class='border-table'>Corpo</th>
                            <th class='border-table'>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php 
                                    
                            while($exibe = mysqli_fetch_assoc($query_reports)){ ?>

                            
                                <tr>
                                    <td class='border-table'><?php echo $exibe['cod_reporte']; ?></td>
                                    <td class='border-table'><?php echo $exibe['cod_jogador']; ?></td>
                                    <td class='border-table'><?php echo $exibe['reportAssunto']; ?></td>
                                    <td class='border-table'><?php echo $exibe['reportDescricao']; ?></td>
                                    <td class='border-table'><?php echo $exibe['data_publicacao']; ?></td>

                                </tr> 

                            <?php } ?>

                            
                    </tbody>

                </table>
            
            </main>

        </div>
    </div>

