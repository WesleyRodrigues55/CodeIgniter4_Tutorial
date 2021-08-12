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

        protected $useTimestamps = true;
        protected $useSoftDeletes = true;

        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';

        // metódos que vai trazer os dados(recupera)
        public function getNews($id = null){

            // se o $id for null ele trás todos os registros
            if($id === null) {
                // trás todos os campos mesmo deletados
                // $this->withDeleted();
                // retorna todos os registro do banco de dados
                return $this->findAll();
            } 

            return $this->asArray()->where(['id' => $id])->first();
        }
    }
?>