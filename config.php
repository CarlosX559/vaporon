<?php
class Informacao {
    private $pdo;
    
    public function __construct()
    {
         
        $this->pdo = new PDO("mysql:dbname=questionario;host=localhost", "root", "" );
         
    }
    public function adicionar($nome,$email,$perfil) {
    

        $sql = "INSERT INTO informacoes (nome, email, perfil) VALUES (:nome, :email, :perfil)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':perfil', $perfil);
        $sql->execute();

        return true;

}


}
