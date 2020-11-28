
<main class="page-admin">
    <form action="./" method="get">
        
        <div class="campo col-1 pl-0 pr-1"><input type="number" placeholder="id"></div>
        <div class="campo col-2 px-1"><input type="text" placeholder="Digite o nome"></div>
        <div class="campo col-2 px-1">
            <select name="status" id="">
                <option value="">Selecionar Status</option>
                <option value="1">Ativo</option>
                <option value="0">Desativado</option>
            </select>
        </div>
        <button type="submit">Buscar <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 23" fill="none">
            <path d="M10.2055 0.00225067C4.93028 0.00225067 0.612549 4.28376 0.612549 9.53071C0.612549 14.7777 4.93028 19.0723 10.2055 19.0723C12.2338 19.0723 14.1117 18.4269 15.66 17.3539L20.8455 22.5012C21.5049 23.1675 22.5837 23.1675 23.2431 22.5012C23.9025 21.8453 23.9025 20.7828 23.2431 20.1269L18.0602 14.9665C19.1495 13.4161 19.7878 11.5482 19.7878 9.53071C19.7878 4.28376 15.4701 0.00225067 10.2055 0.00225067ZM10.2055 3.3603C13.6422 3.3603 16.4012 6.10445 16.4012 9.53071C16.4012 12.957 13.6422 15.7037 10.2055 15.7037C6.75813 15.7037 4.00185 12.9596 4.00185 9.53333C4.00185 6.10445 6.75813 3.3603 10.2055 3.3603Z" fill="white"></path>
            </svg></button>
        
        
        
    </form>

    <table>
        <thead>
            <tr>
                <th class='border-table'>id</th>
                <th class='border-table'>Nome Completo</th>
                <th class='border-table'>Posição</th>
                <th class='border-table'>Cidade</th>
                <th class='border-table'>UF</th>
                <th class='border-table'>Data de Nascimento</th>
                
                <th class='border-table'>Status</th>
            </tr>
        </thead>
        <tbody>
            
                <?php 
                        
                while($exibe = mysqli_fetch_assoc($query_envia)){ ?>

                
                     <tr>
                        <td class='border-table'><?php echo $exibe['cod_jogador']; ?></td>
                        <td class='border-table'><?php echo $exibe['nome_completo']; ?></td>
                        <td class='border-table'><?php echo $exibe['posicao']; ?></td>
                        <td class='border-table'><?php echo $exibe['cidade']; ?></td>
                        <td class='border-table'><?php echo $exibe['uf']; ?></td>
                        <td class='border-table'><?php echo date("d/m/Y", strtotime($exibe['data_nascimento'])); ?></td>

                        <?php if($exibe['status'] == 1){ 
                            
                            echo "<td class='border-table cor-verde'>Ativo</td>"; 
                            echo "<td ><a href='admin-usuario.php?usuario=".$exibe['cod_jogador']."'><img style='height:20px; width: 20px; margin-left: 20px' src='./assets/images/settings.png'></a></td>"; 
                            echo "<td><button class='btn-vermelho' data='".$exibe['cod_jogador']."'>Desativar</button></td>"; 


                        
                        } else{ 
                            
                            echo "<td class='border-table cor-red'>Desativado</td>"; 
                            echo "<td><a href='admin-usuario.php?usuario=".$exibe['cod_jogador']."'><img style='height:20px; width: 20px; margin-left: 20px' src='./assets/images/settings.png'></a></td>"; 
                            echo "<td><button class='btn-verde' data='".$exibe['cod_jogador']."'>Ativar</button></td>"; 
                        
                        } ?>  
                    </tr> 

                <?php } ?>

                
        </tbody>

    </table>

</main>