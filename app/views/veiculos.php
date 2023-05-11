<?php include 'layout-top.php' ?>



<form method='POST' action='<?=route('veiculos/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    placa
    <input type="text" class="form-control" name="placa" value="<?=_v($data,"placa")?>" >
</label>

<label class='col-md-2'>
    modelo
    <input type="text" class="form-control" name="modelo" value="<?=_v($data,"modelo")?>" >
</label>

<label class='col-md-2'>
    cor
    <input type="text" class="form-control" name="cor" value="<?=_v($data,"cor")?>" >
</label>

<label class='col-md-2'>
    ano
    <input type="text" class="form-control" name="ano" value="<?=_v($data,"ano")?>" >
</label>

<label class='col-md-2'>
    Ativado
    <input type="hidden" name="ativado" value="0">
    <input type="checkbox" class="form-check-input" name="ativado" value="1" <?=_v($data,"ativado") == 1 ? 'checked' : '' ?> >
</label>

<label class='col-md-6'>
    Tipo
    <select name="tipo" class="form-control">
        <?php
        foreach($tipos as $k=>$tipo){
            _v($data,"tipo") == 1 ? $selected='selected' : $selected='';
            print "<option value='$k' $selected>$tipo</option>";
        }
        ?>
    </select>
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("veiculos")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("veiculos
            /index/{$item['id']}")?>'>Editar</a>
            </td>
            <td><?=$item['nome']?></td>
            <td><?=$item['dataNascimento']?></td>
            <td>
                <a href='<?=route("veiculos
            /deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>