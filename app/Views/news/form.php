<h2><?php echo isset($id) ? "Editando notícias" : "Nova notícia" ?></h2>
<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="/news/store" method="post">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo isset($title) ? $title : set_value('title') ?>">
    </div>
    <div class="form-group">
        <label for="body">Notícia</label>
        <textarea class="form-control" name="body" id="body" cols="30" rows="10"><?php echo isset($body) ? $body : set_value('body') ?></textarea>
    </div>

    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id') ?>">

    <div class="form-group">
        <input type="submit" values="Salvar" class="btn btn-primary my-5">
    </div>

</form>