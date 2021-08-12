<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class NewsModels extends Model {

        // mostra qual tabela vai estar trabalhando
        protected $table = 'news';

        // localização de registros no db
        protected $primaryKey = 'id';

        // permitindo campos
        protected $allowedFields = ['title', 'slug', 'body'];

        // metódos que vai trazer os dados(recupera)
        public function getNews($id = null){

            // se o $id for null ele trás todos os registros
            if($id === null) {
                // retorna todos os registro do banco de dados
                return $this->findAll();
            } 

            return $this->asArray()->where(['id' => $id])->first();
        }

    }
?>