<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('livro/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    Título
    <input type="text" class="form-control" name="titulo" value="<?=_v($data,"titulo")?>" >
</label>

<label class='col-md-2'>
    Gênero
    <input type="text" class="form-control" name="genero" value="<?=_v($data,"genero")?>" >
</label>

<label class='col-md-2'>
    Autor
    <input type="text" class="form-control" name="autor" value="<?=_v($data,"autor")?>" >
</label>

<label class='col-md-2'>
    Ano de Publicação
    <input type="text" class="form-control" name="anopublicacao" value="<?=_v($data,"anopublicacao")?>" >
</label>


<!-- <label class='col-md-6'>
    Tipo
    <select name="tipo" class="form-control">
        <?php
        /*foreach($tipos as $k=>$tipo){
            _v($data,"tipo") == 1 ? $selected='selected' : $selected='';
            print "<option value='$k' $selected>$tipo</option>";
        }*/
        ?>
    </select>
</label> -->

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("livro")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Titulo</th>
        <th>Gênero</th>
        <th>Autor</th>
        <th>Ano de Publicação</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("livro/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td><?=$item['titulo']?></td>
            <td><?=$item['genero']?></td>
            <td><?=$item['autor']?></td>
            <td><?=$item['anopublicacao']?></td>
            <td>
                <a href='<?=route("livro/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>