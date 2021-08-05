<?php 
    namespace App\ClassPatrocinadores;

    class ClassPatrocinadores{
        /**
        *   Class que define os patrocinadores, sendo esse uma organização
        *   ou empresa, ou uma pessoa fisica (se for possivel).
        *   esta classe se relaciona com o tipo de patrocinio que esta
        *   estancia ira oferecer
        *   
        *
        *   @author Rômulo F. Farias <romuloff23@gmail.com>
        *   @access private
        *
        *   
        *   @property private $id - referice ao id no banco de dados
        *   @property private $nome - nome fantanzia da empresa ou organização
        *   @property private $responsalve - representante da empresa responsalve por se comunicar com o mecis
        *   @property private $endereco - endereço sede da empresa
        *   @property private $telefone - telefone para contato
        *   @property private $email - email para contato
        *
        *
        */
        private $id;
        private $nome;
        private $responsalve;
        private $endereco;
        private $telefone;
        private $email;


        /**
         * Get class de patrocinadores os atributos de
         */ 
        public function getNome(){
            return $this->nome;
        }

        /**
         * Set class de patrocinadores os atributos de
         *
         * @return  self
         */ 
        public function setNome($nome){
            $this->nome = $nome;
            return $this;
        }

        /**
         * Get the value of responsalve
         */ 
        public function getResponsalve(){
            return $this->responsalve;
        }

        /**
         * Set the value of responsalve
         *
         * @return  self
         */ 
        public function setResponsalve($responsalve){
            $this->responsalve = $responsalve;
            return $this;
        }

        /**
         * Get the value of endereco
         */ 
        public function getEndereco(){
            return $this->endereco;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco){
            $this->endereco = $endereco;
            return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone(){
            return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone){
            $this->telefone = $telefone;
            return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail(){
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email){
            $this->email = $email;
            return $this;
        }

        /**
         * Get class de patrocinadores os atributos de
         */ 
        public function getId(){
                return $this->id;
        }

        /**
         * Set class de patrocinadores os atributos de
         *
         * @return  self
         */ 
        public function setId($id){
                $this->id = $id;

                return $this;
        }
    }
    

?>