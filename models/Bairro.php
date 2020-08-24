<?php

class Bairro extends model 
{
    public function getBairros()
    {

        $array = [];
        $sql = "SELECT * FROM tbbairro";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
} 
