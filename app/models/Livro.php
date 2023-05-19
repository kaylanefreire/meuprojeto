<?php

namespace models;

class Livro extends Model {
    
    protected $table = "livro";
    #nao esqueça da ID
    protected $fields = ["id","titulo","genero","autor","anopublicacao"];
    
}

