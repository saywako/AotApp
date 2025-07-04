<?php
// Classe base para Personagem
class Personagem {
    protected $id;
    protected $nome;
    protected $imagem;
    protected $descricao;
    protected $atributos = [];
    
    public function __construct($id, $nome, $imagem, $descricao, $atributos) {
        $this->id = $id;
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->descricao = $descricao;
        $this->atributos = $atributos;
    }
    
    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getImagem() { return $this->imagem; }
    public function getDescricao() { return $this->descricao; }
    public function getAtributos() { return $this->atributos; }
    
    public function getAtributo($nome) {
        return $this->atributos[$nome] ?? null;
    }
    
    public function toArray() {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'imagem' => $this->imagem,
            'descricao' => $this->descricao,
            'atributos' => $this->atributos
        ];
    }
}

// Classe para gerenciar os personagens
class GerenciadorPersonagens {
    private $personagens = [];
    
    public function adicionarPersonagem(Personagem $personagem) {
        $this->personagens[$personagem->getId()] = $personagem;
    }
    
    public function getPersonagem($id) {
        return $this->personagens[$id] ?? null;
    }
    
    public function getAllPersonagens() {
        return $this->personagens;
    }
}

// Criando instâncias de personagens (normalmente viria de um banco de dados)
$gerenciador = new GerenciadorPersonagens();

$heroi = new Personagem(
    1,
    'Herói da Espada',
    'heroi.jpg',
    'Um valente guerreiro com anos de experiência em batalha, conhecido por sua espada lendária.',
    ['Força' => 90, 'Agilidade' => 70, 'Inteligência' => 60, 'Magia' => 20]
);

$mago = new Personagem(
    2,
    'Mago Arcano',
    'mago.jpg',
    'Um sábio mago com conhecimento em artes arcanas antigas e poderosos feitiços.',
    ['Força' => 30, 'Agilidade' => 50, 'Inteligência' => 95, 'Magia' => 90]
);

$gerenciador->adicionarPersonagem($heroi);
$gerenciador->adicionarPersonagem($mago);

// Quando receber uma requisição para detalhes do personagem (exemplo)
if (isset($_GET['personagem_id'])) {
    $personagem = $gerenciador->getPersonagem($_GET['personagem_id']);
    if ($personagem) {
        header('Content-Type: application/json');
        echo json_encode($personagem->toArray());
        exit;
    }
}
?>