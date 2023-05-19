<?php

namespace models;

class Autores extends Model {
    
    protected $table = "autores";
    #nao esqueça da ID
    protected $fields = ["id","nome","dataNascimento","email"];
    
}