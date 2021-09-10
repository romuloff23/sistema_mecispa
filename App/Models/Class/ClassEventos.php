<?php namespace App\ClassEventos;

    class ClassEventos{
        /**
        *   Class de Eventos. 
        *   esta classe contem toda a configuração nescessaria 
        *   para a realização do evento, desde os patrocinadores
        *   até o local do evento.
        *
        *
        *   @author Rômulo F. Farias <romuloff23@gmail.com>
        *   @access private
        *
        *
        *   @property private $nome - refereice ao nome do evento
        *   @property private $dataEvento - data em que ocorrera o evento
        *   @property private $dataInicialInscricao - data inical para as incrições
        *   @property private $dataFinalIncricao - data final para as inscrições
        *   @property private $descricao - texto que contem a descrição do evento
        *   @property private $descricaoResumida - texto pequno contendo o resumo que vai aparecer no card
        *   @property private $urlEvento - link falando sobre o evento e local de inscrição
        *   @property private $fotoEvento - foto do evento, logo ou foto mesmo, vai aparecer no card
        *   @property private $localEvento - local onde o evento ocorrerar mesmo que seja ONLINE se refere ao local sede do evento
        *   @property private $organizacao - pessoas do mecis responsavel por organizar o evento;
        *   @property private $patrocinadores - patrocinadores e parceiros que ajudaram no evento;
        *   @property private $id - id do evento no banco de dados
        *
        */

        private $nome;
        private $dataEvento;
        private $dataInicialInscricao;
        private $dataFinalIncricao;
        private $descricao;
        private $descricaoResumida;
        private $urlEvento;
        private $fotoEvento;
        private $localEvento;
        private $organizacao;
        private $patrocinadores;
        private $id;


        
         /**
          * Metodo para carregar dados na classe
          * @param array de dados;
         */

        public function loadingClass($dados){
            $this->id = $dados['id'];
            $this->nome = $dados['nome'];
            $this->dataEvento = ($dados['dataEvento']);
            $this->dataInicialInscricao = $dados['dataInscricao'];
            $this->dataFinalIncricao = $dados['dataFinInscricao'];
            $this->descricao =$dados['descricao'];
            $this->descricaoResumida = $dados['descricaoResumida'];
            $this->fotoEvento = $dados['imgEvento'];
            $this->urlEvento = $dados['urlEvento'];
            $this->localEvento = $dados['localEvento'];
            $this->organizacao = $dados['organizacao'];
            $this->patrocinadores = $dados['patrocinadores'];
        }

        /**
         * Get the value of patrocinadores
         */

        public function getPatrocinadores(){
            return $this->patrocinadores;
        }

        /**
         * Set the value of patrocinadores
         *
         */ 
        public function setPatrocinadores($patrocinadores){
            $this->patrocinadores = $patrocinadores;
        }

        /**
         * Get the value of organizacao
         */ 
        public function getOrganizacao(){
            return $this->organizacao;
        }

        /**
         * Set the value of organizacao
         *
         */ 
        public function setOrganizacao($organizacao){
            $this->organizacao = $organizacao;
        }

        /**
         * Get the value of localEvento
         */ 
        public function getLocalEvento(){
            return $this->localEvento;
        }

        /**
         * Set the value of localEvento
         *
         */ 
        public function setLocalEvento($localEvento){
            $this->localEvento = $localEvento;
        }

        /**
         * Get the value of fotoEvento
         */ 
        public function getFotoEvento(){
            return $this->fotoEvento;
        }

        /**
         * Set the value of fotoEvento
         *
         */ 
        public function setFotoEvento($fotoEvento){
            $this->fotoEvento = $fotoEvento;
        }

        /**
         * Get the value of urlEvento
         */ 
        public function getUrlEvento(){
            return $this->urlEvento;
        }

        /**
         * Set the value of urlEvento
         *
         */ 
        public function setUrlEvento($urlEvento){
            $this->urlEvento = $urlEvento;
        }

        /**
         * Get the value of descricaoResumida
         */ 
        public function getDescricaoResumida(){
            return $this->descricaoResumida;
        }

        /**
         * Set the value of descricaoResumida
         */ 
        public function setDescricaoResumida($descricaoResumida){
            $this->descricaoResumida = $descricaoResumida;
        }

        /**
         * Get the value of descricao
         */ 
        public function getDescricao(){
            return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         */ 
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        /**
         * Get the value of dataFinalIncricao
         */ 
        public function getDataFinalIncricao(){
            return $this->dataFinalIncricao;
        }

        /**
         * Set the value of dataFinalIncricao
         *
         */ 
        public function setDataFinalIncricao($dataFinalIncricao){
            $this->dataFinalIncricao = $dataFinalIncricao;
        }

        /**
         * Get the value of dataInicialInscricao
         */ 
        public function getDataInicialInscricao(){
            return $this->dataInicialInscricao;
        }

        /**
         * Set the value of dataInicialInscricao
         *
         */ 
        public function setDataInicialInscricao($dataInicialInscricao){
            $this->dataInicialInscricao = $dataInicialInscricao;
        }

        /**
         * Get the value of dataEvento
         */ 
        public function getDataEvento(){
            return $this->dataEvento;
        }

        /**
         * Set the value of dataEvento
         *
         */ 
        public function setDataEvento($dataEvento){
            $this->dataEvento = $dataEvento;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome(){
            return $this->nome;
        }

        /**
         * Set the value of nome
         *
         */ 
        public function setNome($nome){
            $this->nome = $nome;
        }

        /**
         * Get the value of id
         */ 
        public function getId(){
            return $this->id;
        }

        /**
         * Set the value of id
         *
         */ 
        public function setId($id){
            $this->id = $id;
        }
    }
?>