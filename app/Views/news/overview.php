<script>
    function confirma(){
        if (!confirm("Deseja excluir?")){
            return false;
        }
        return true;
    }
</script>

<h2>Arquivo de notícias</h2>

<a href="/news/create" class="btn btn-success">Nova noticia</a>

<table class="table">
    <tr>
        <th>Título</th>
        <td>Ação</td>
    </tr>
    <?php if (!empty($news) && is_array($news)) : ?>
        <?php foreach($news as $news_item) :?>
            <tr>
                <td><a href="<?php echo "/news/view/" . $news_item['id'] ?>"><?php echo $news_item['title'] ?></a></td>
                <td>
                    <a href="/news/edit/<?php echo $news_item['id'] ?>" class="btn btn-primary mx-1">Editar</a>
                    <a href="/news/delete/<?php echo $news_item['id'] ?>" class="btn btn-danger mx-1" onclick="return confirma();">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="2">Nenhum notícias encontrada</td>
            </tr>
        <?php endif; ?>
</table>