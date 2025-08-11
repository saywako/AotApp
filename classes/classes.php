<?php
abstract class Classe {
    
    public $forca, $defesa, $esquiva, $velocidade, $inteligencia, $vida, $tipo, $classe, $img, $descricao, $altura;

    public function ataqueComum(){ echo('Ataque Comum (20) <br>'); }
    public function defender(){ echo('Defender (50) <br>'); }
    public function esquivar(){ echo('Esquivar (60) <br>'); }
    public function fugir(){ echo('Fugir (-10) <br>'); }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }
}

// Classe para altura dos Titãs
class AlturaTitan {
    public static $valores = [
        'Titã de Ataque' => 15,
        'Titã Carroça' => 4,
        'Titã Colossal' => 60,
        'Titã Blindado' => 15,
        'Titã Fêmea' => 14,
        'Titã Bestial' => 17,
        'Titã Mandíbula' => 5,
        'Titã Martelo de Guerra' => 15,
        'Titãs do Muro' => 50,
        'Titã Fundador' => 13
        'Titã Fundador do Eren' => 1300
        'Titã Puro' => 120
    ];
}

// Titã Carroça
class TitanCarroca extends Classe {
    public $forca = 70; 
    public $defesa = 75; 
    public $esquiva = 85;
    public $velocidade = 90;
    public $inteligencia = 70;
    public $vida = 80;
    public $tipo = 'Titã Carroça';
    public $img = 'titan_carroca';
    public $descricao = 'Extremamente rápido e com alta resistência, usado para transporte e suporte logístico.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Carroça'];
    }

    public function ataqueEspecial(){
        echo 'Investida Rápida (70) <br>';
        echo 'Suporte de Artilharia (60) <br>';
    }
}


// Titã de Ataque
class TitanAtaque extends Classe {
    public $forca = 90; 
    public $defesa = 70; 
    public $esquiva = 80;
    public $velocidade = 85;
    public $inteligencia = 75;
    public $vida = 80;
    public $tipo = 'Titã de Ataque';
    public $img = 'titan_ataque';
    public $descricao = 'Possui alta mobilidade e poder ofensivo, ideal para combates diretos.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã de Ataque'];
    }

    public function ataqueEspecial(){
        echo 'Sequência de Socos Devastadores (70) <br>';
        echo 'Investida Rasgadora (60) <br>';
    }
}

// Titã Colossal
class TitanColossal extends Classe {
    public $forca = 100; 
    public $defesa = 80; 
    public $esquiva = 30;
    public $velocidade = 20;
    public $inteligencia = 60;
    public $vida = 95;
    public $tipo = 'Titã Colossal';
    public $img = 'titan_colossal';
    public $descricao = 'Gigantesco e capaz de liberar vapor escaldante e explosões devastadoras.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Colossal'];
    }

    public function ataqueEspecial(){
        echo 'Explosão de Transformação (100) <br>';
        echo 'Liberação de Vapor Escaldante (80) <br>';
    }
}

// Titã Blindado
class TitanBlindado extends Classe {
    public $forca = 95; 
    public $defesa = 100; 
    public $esquiva = 50;
    public $velocidade = 60;
    public $inteligencia = 65;
    public $vida = 90;
    public $tipo = 'Titã Blindado';
    public $img = 'titan_blindado';
    public $descricao = 'Possui pele endurecida como armadura, quase impenetrável.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Blindado'];
    }

    public function ataqueEspecial(){
        echo 'Investida Blindada (85) <br>';
        echo 'Defesa Total (90) <br>';
    }
}

// Titã Fêmea
class TitanFemea extends Classe {
    public $forca = 85; 
    public $defesa = 70; 
    public $esquiva = 85;
    public $velocidade = 85;
    public $inteligencia = 80;
    public $vida = 80;
    public $tipo = 'Titã Fêmea';
    public $img = 'titan_femea';
    public $descricao = 'Ágil, versátil e capaz de endurecer partes do corpo.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Fêmea'];
    }

    public function ataqueEspecial(){
        echo 'Chute Giratório (70) <br>';
        echo 'Endurecimento Seletivo (65) <br>';
    }
}

// Titã Bestial
class TitanBestial extends Classe {
    public $forca = 90; 
    public $defesa = 75; 
    public $esquiva = 60;
    public $velocidade = 65;
    public $inteligencia = 85;
    public $vida = 85;
    public $tipo = 'Titã Bestial';
    public $img = 'titan_bestial';
    public $descricao = 'Conhecido por sua força física e lançamentos de precisão com pedras.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Bestial'];
    }

    public function ataqueEspecial(){
        echo 'Arremesso de Pedra Mortal (80) <br>';
        echo 'Rugido de Comando (70) <br>';
    }
}

// Titã Mandíbula
class TitanMandibula extends Classe {
    public $forca = 80; 
    public $defesa = 60; 
    public $esquiva = 95;
    public $velocidade = 95;
    public $inteligencia = 70;
    public $vida = 75;
    public $tipo = 'Titã Mandíbula';
    public $img = 'titan_mandibula';
    public $descricao = 'Extremamente rápido e com mandíbulas capazes de destruir quase tudo.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Mandíbula'];
    }

    public function ataqueEspecial(){
        echo 'Mordida Destruidora (85) <br>';
        echo 'Corte Acelerado (75) <br>';
    }
}

// Titã Martelo de Guerra
class TitanMartelo extends Classe {
    public $forca = 95; 
    public $defesa = 85; 
    public $esquiva = 70;
    public $velocidade = 70;
    public $inteligencia = 90;
    public $vida = 85;
    public $tipo = 'Titã Martelo de Guerra';
    public $img = 'titan_martelo';
    public $descricao = 'Capaz de criar armas e estruturas endurecidas com seu poder.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Martelo de Guerra'];
    }

    public function ataqueEspecial(){
        echo 'Martelo Endurecido (90) <br>';
        echo 'Lança Cristalina (80) <br>';
    }
}

// Titãs do Muro
class TitansDoMuro extends Classe {
    public $forca = 85; 
    public $defesa = 80; 
    public $esquiva = 20;
    public $velocidade = 15;
    public $inteligencia = 10;
    public $vida = 90;
    public $tipo = 'Titãs do Muro';
    public $img = 'titans_do_muro';
    public $descricao = 'Colossais inativos que formam as paredes de Paradis.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titãs do Muro'];
    }

    public function ataqueEspecial(){
        echo 'Pressão Massiva (80) <br>';
    }
}

// Titã Fundador (normal)
class TitanFundador extends Classe {
    public $forca = 95; 
    public $defesa = 90; 
    public $esquiva = 75;
    public $velocidade = 75;
    public $inteligencia = 100;
    public $vida = 95;
    public $img = 'titan_fundador';
    public $descricao = 'Capaz de controlar memórias e comandar Eldianos, mas sem o poder absoluto do Eren.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Fundador'];
    }

    public function ataqueEspecial(){
        echo 'Controle Mental (90) <br>';
        echo 'Alteração de Memórias (85)';
    }
}

// Titã Fundador do Eren (mais forte de todos)
class TitanFundadorEren extends Classe {
    public $forca = 200; 
    public $defesa = 200; 
    public $esquiva = 85;
    public $velocidade = 85;
    public $inteligencia = 500;
    public $vida = 100;
    public $img = 'titan_fundador_eren';
    public $descricao = 'Forma final de Eren, com poder absoluto sobre Eldianos e todos os Titãs, capaz de iniciar o Rumbling.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Fundador do Eren'];
    }

    public function ataqueEspecial(){
        echo 'Rumbling Total (700) <br>';
        echo 'Controle Absoluto (900) <br>';
        echo 'Aniquilação Mundial (1000)';
    }
}

// Titã Puro (pai da Historia)
class TitanPuro extends Classe {
    public $forca = 100; 
    public $defesa = 90; 
    public $esquiva = 20;
    public $velocidade = 15;
    public $inteligencia = 5;
    public $vida = 95;
    public $tipo = 'Titã Puro';
    public $img = 'titan_puro';
    public $descricao = 'Enorme e deforme, extremamente lento, mas com força bruta esmagadora e grande resistência.';
    public $altura;

    public function __construct(){
        $this->altura = AlturaTitan::$valores['Titã Puro'];
    }

    public function ataqueEspecial(){
        echo 'Esmagamento Brutal (100) <br>';
        echo 'Arrastão Devastador (200) <br>';
    }
}

?>
