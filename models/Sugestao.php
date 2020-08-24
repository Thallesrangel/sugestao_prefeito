<?php

class Sugestao extends model 
{   
    public function getAll($offset, $limit)
    {
  
        $array = [];
        $sql = "SELECT a.*, b.* FROM tbsugestao a
            INNER JOIN tbbairro b ON(a.id_bairro = b.id_bairro) LIMIT ".$offset.", ".$limit."";
        $sql = $this->db->query($sql);
      
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
        
    }

    // Retonra a quantidade total de registros para paginar
    public function getTotal() 
    {
        $sql = "SELECT count(*) as c FROM tbsugestao";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();

        return $sql['c'];
    }


    public function quantidadePorBairro()
    {

        $array = [];
        $sql = "SELECT b.* ,count(b.id_bairro) as numero_bairro FROM tbsugestao a
            LEFT JOIN tbbairro b ON(a.id_bairro = b.id_bairro)
        group by a.id_bairro";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function add($nome, $email, $telefone, $idade, $idBairro, $tema, $sugestao)
    {
        $sql = "INSERT INTO tbsugestao (nome, email, telefone, idade, id_bairro, tema, sugestao) 
        VALUES(:nome, :email, :telefone, :idade, :id_bairro, :tema, :sugestao)";

        $sql = $this->db->prepare($sql);

        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':id_bairro', $idBairro);
        $sql->bindValue(':tema', $tema);
        $sql->bindValue(':sugestao', $sugestao);
        
        if ($sql->execute()) {  
            $count = $sql->rowCount();
            echo $count . ' rows updated!';
            //return true;
        } else {
            //return false;
            print_r($sql->errorInfo());
        }
    }

    public function delete($idSugestao)
    {
        $sql = "DELETE FROM tbsugestao WHERE id_sugestao = :id_sugestao";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_sugestao', $idSugestao, PDO::PARAM_INT);
        
        if ($sql->execute()) {
            return true;
        } else {
            return false;
        }
    }
} 
