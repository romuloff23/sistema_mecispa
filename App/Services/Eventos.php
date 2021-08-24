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
            $a = new ModelsEventos();
            $itensCard ="";
            try{//se existe dados carrega
                foreach( $a->selectAll() as $row ){
                    $this->cEvento->loadingClass($row);
                    $card = file_get_contents('App/View/partes/card_evento.html');
                    $card = str_replace('{url_foto}',$this->cEvento->getFotoEvento(), $card);
                    $card = str_replace('{TituloCard}',$this->cEvento->getNome(), $card);
                    $card = str_replace('{TextoCard}',$this->cEvento->getDescricaoResumida(), $card);
                    $card = str_replace('{LinkEvento}',$this->cEvento->getUrlEvento(), $card);
                    $itensCard .= $card;
                }
                $this->html = str_replace('{card_eveto}',$itensCard,$this->html);
            }catch (\Exception $e){//se não tiver evento carregado 
                $this->html = str_replace('{card_eveto}','Sem Eventos no momento, por favor volte mais tarde :)',$this->html);
            }
        }

        public function show(){
            $this->load();
           
            print $this->html;
        }

        
        private function carregarCard(){
           
            
                       
        }

        

    }

   

?>