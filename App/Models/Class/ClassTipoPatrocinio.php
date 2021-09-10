<?php 
    namespace App\ClassTipoPatrocinio;


    class  ClassTipoPatrocinio{
            
        /**
        *   Class de Tipo de Patrocinio responsalve por
        *   definir qual é a forma de patrocinio, se é
        *   financeiro ou de serviço, e qual tipo de serviço seria.
        *   Classe se relaciona com a classe patrocinador. 
        *   então patrocinador tem um tipo de patrocinio.
        *
        *
        *   @author Rômulo F. Farias <romuloff23@gmail.com>
        *   @access private
        *   
        *
        *   @property private $id - referice ao id no banco de dados
        *   @property private $tipoPatrocinio - se é financeiro, serviço ou outros
        *   @property private $descricaoPatrocinio - descreve a forma como o patrocinio se dá
        *
        *
        */

        private $id;
        private $tipoPatrocinio;
        private $descricaoPatrocinio;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of tipoPatrocinio
         */ 
        public function getTipoPatrocinio()
        {
                return $this->tipoPatrocinio;
        }

        /**
         * Set the value of tipoPatrocinio
         *
         * @return  self
         */ 
        public function setTipoPatrocinio($tipoPatrocinio)
        {
                $this->tipoPatrocinio = $tipoPatrocinio;

                return $this;
        }

        /**
         * Get the value of descricaoPatrocinio
         */ 
        public function getDescricaoPatrocinio()
        {
                return $this->descricaoPatrocinio;
        }

        /**
         * Set the value of descricaoPatrocinio
         *
         * @return  self
         */ 
        public function setDescricaoPatrocinio($descricaoPatrocinio)
        {
                $this->descricaoPatrocinio = $descricaoPatrocinio;

                return $this;
        }
    }



?>