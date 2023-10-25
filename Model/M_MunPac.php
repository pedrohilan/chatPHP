<?php
include 'M_Conexao.php';

class M_MunPac{

    private  $mun_codigo;
    private  $mun_nome;
    private  $mun_senha;

    function __construct($mun_codigo, $mun_nome, $mun_senha) {
        $this->codigo = $mun_codigo;
        $this->nome = $mun_nome;
        $this->senha = $mun_senha;
    }

//-----------------------
    function getId() {
        return $this->codigo;
    }
    function setId($mun_id) {
        $this->id = $mun_codigo;
    }
//-----------------------
    function getNome() {
        return $this->nome;
    }
    function setNome($mun_nome) {
        $this->login = $mun_nome;
    }

    function buscar() {
        $sql = "Select * from chat1";       
        $Conexao = new conexao();
        $Conexao->conectar();       
        $this->result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $this->result;   
    }
    
    function inserirMsg($nome, $mensagem) {
        $sql = "INSERT INTO `chat1`( `nome`, `mensagem`) VALUES ('$nome', '$mensagem')";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
    }

    function excluir($doc_id) {
        $sql = "DELETE FROM `documentacao` WHERE `documentacao`.`doc_id` = $doc_id";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
    }

    function editarFinanciamento($uniaoValor, $estadoValor, $municipioValor, $outrosValor, $cnes){
        $sql = "UPDATE `financiamento` SET `fin_uniaoValor` = '$uniaoValor', `fin_estadoValor` = '$estadoValor', `fin_municipioValor` = '$municipioValor', `fin_outrosValor` = '$outrosValor' WHERE `financiamento`.`uni_cnes` = '$cnes';";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
    }

}
?>
