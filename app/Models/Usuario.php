<?php

namespace App\Models;
class Usuario
{
    public string $id;
    public string $nome;
    public int $idade;


    public function __construct(string $id, string $nome, int $idade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function retornaUsuario(): array
    {
        return array(
            'id' => $this->id,
            'nome' => $this->nome,
            'idade' => $this->idade
        );
    }
}