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
        <input type="text" name="ano_nascimento" placeholder="Ano de Nascimento">
        <input type="text" name="posicao" placeholder="Posição">
        <button type="submit">Procurar</button>
    </form>
</div>