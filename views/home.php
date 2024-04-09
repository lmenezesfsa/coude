<h3 class="light">Adicionar Link</h3>
<form method="POST" action='?link=Home/cadastrarLink/'>
    <div class="row">
        <div class="col mb-3">
            <label for="alias" class="form-label">Alias</label>
            <input type="text" class="form-control" id="alias" name="alias">
        </div>
        <div class="col mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Link</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($this->dados as $registro):?>
        <tr>
            <td><?= $registro['nome']?></td>
            <td><?= $registro['link']?></td>
            <td>
              <button type="button" class="btn btn-outline-danger" onclick="confirmarDeletar('<?= $registro['id']?>')">Deletar</button>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
  </table>
  <script>
      function confirmarDeletar(id) {
        var confirmacao = confirm("Você tem certeza que deseja Excluir?");
        if (confirmacao) {
            window.location.href = "?link=Home/deletarLink/&id="+id;
        }
    }
  </script>