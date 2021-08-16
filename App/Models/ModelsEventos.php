<?php 
    namespace App\ModelsEventos;

    use App\ClassEventos\ClassEventos;

    Class ModelsEventos{
        

        /**
        *   Class de Eventos, para exibir e criar novos eventos 
        *   esta classe contem toda a configuração nescessaria 
        *   para a realização do evento, desde os patrocinadores
        *   até o local do evento.
        *
        *
        *   @author Rômulo F. Farias <romuloff23@gmail.com>
        *   @access private
        *
        */

        private static $tabela = 'eventos';

        

        public static function selectAll(){
            $connPdo = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $sql = 'SELECT * FROM '.self::$tabela;
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0 ){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }else{
                throw new \Exception("Sem usuario no banco");
            }
        }

    }
?>