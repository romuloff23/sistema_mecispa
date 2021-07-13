<?php namespace App\Home; 

    class Home {
        private $logo;
        private $titulo;
        private $texto1;
        private $texto2;
        private $html;

        public function __construct(){
            $this->html = file_get_contents('App/View/home.html');
            $this->logo = "_src/logo.png";
            $this->titulo = "MECIS";
            $this->texto1 = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
            $this->texto2 = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
            
        }

        public function load(){
            $head = '';
            $cabecalho = '';
            $menu = '';
            $carroceu = '';
            try{
                $head = file_get_contents('App/View/partes/head.html');
                $head = str_replace('{Titulo}',$this->titulo,$head);
                $cabecalho = file_get_contents('App/View/partes/cabecalho.html');
                $cabecalho = str_replace('{logo}',$this->logo,$cabecalho);
                $menu = file_get_contents('App/View/partes/menu.html');
                $carroceu = file_get_contents('App/View/partes/carroceu.html');
            }catch (\Exception $e) {
                print $e->getMessage();
            }
            $this->html = str_replace('{head}',$head,$this->html);
            $this->html = str_replace('{cabecalho}',$cabecalho,$this->html);
            $this->html = str_replace('{menu}',$menu,$this->html);
            $this->html = str_replace('{carroceu}',$carroceu,$this->html);
            $this->html = str_replace('{Titulo}',$this->titulo,$this->html);
            $this->html = str_replace('{texto1}', $this->texto1,$this->html);
            $this->html = str_replace('{texto2}', $this->texto2,$this->html);
        }

        public function show(){
            $this->load();
            print $this->html;
        }

    }

?>