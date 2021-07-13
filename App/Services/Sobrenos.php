<?php namespace App\Sobrenos; 

    class Sobrenos{

        private $logo;
        private $titulo;
        private $html;

        public function __construct(){
            $this->html = file_get_contents('App/View/sobrenos.html');
            $this->logo = "_src/logo.png";
            $this->titulo = "MECIS";
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
        }
        public function show(){
            $this->load();
            print $this->html;
        }
    }
?>