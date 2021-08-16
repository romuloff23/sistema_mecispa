<?php namespace App\Eventos;

use App\ClassEventos\ClassEventos;
use App\ModelsEventos\ModelsEventos;

class Eventos{
        private $logo;
        private $titulo;
        private $html;
        private $cEvento;
        public function __construct(){
            $this->html = file_get_contents('App/View/eventos.html');
            $this->logo = "_src/logo.png";
            $this->titulo = "Eventos - MECIS";
            $this->cEvento = new ClassEventos();
        }

        public function load(){
            $head = '';
            $cabecalho = '';
            $menu = '';
            try{
                $head = file_get_contents('App/View/partes/head.html');
                $head = str_replace('{Titulo}',$this->titulo,$head);
                $cabecalho = file_get_contents('App/View/partes/cabecalho.html');
                $cabecalho = str_replace('{logo}',$this->logo,$cabecalho);
                $menu = file_get_contents('App/View/partes/menu.html');
            }catch (\Exception $e) {
                print $e->getMessage();
            }
            $this->html = str_replace('{head}',$head,$this->html);
            $this->html = str_replace('{cabecalho}',$cabecalho,$this->html);
            $this->html = str_replace('{menu}',$menu,$this->html);
            $this->html = str_replace('{Titulo}',$this->titulo,$this->html);
            $this->cards();
        }


        private function cards(){
            //pegar dados do banco
            $v = false;
            if($v==true){//se existe dados carrega

            }else{//se não tiver evento carregado 
                $this->html = str_replace('{card_eveto}','Sem Eventos no momento, por favor volte mais tarde :)',$this->html);
            }
        }

        public function show(){
            $this->load();
            $this->listarDados();
            print $this->html;
        }

        
        private function listarDados(){
            $a = new ModelsEventos();
            foreach( $a->selectAll() as $row ){
                $this->cEvento->setId($row['id']);
                echo$this->cEvento->getId();
                $this->cEvento->setNome($row['nome']);
                $this->cEvento->setDataEvento($row['dataEvento']);
                $this->cEvento->setDataInicialInscricao($row['dataInscricao']);
                $this->cEvento->setDataFinalIncricao($row['dataFinInscricao']);
                $this->cEvento->setDescricao($row['descricao']);
                $this->cEvento->setDescricaoResumida($row['descricaoResumida']);
                $this->cEvento->setUrlEvento($row['urlEvento']);
                $this->cEvento->setFotoEvento($row['imgEvento']);
                $this->cEvento->setLocalEvento($row['localEvento']);
                $this->cEvento->setOrganizacao($row['organizacao']);
                $this->cEvento->setPatrocinadores($row['patrocinadores']);
            }
                       
        }

        

    }

   

?>