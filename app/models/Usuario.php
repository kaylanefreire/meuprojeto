<?php

namespace models;

class Usuario extends Model {

    protected $table = "usuario";
    #nao esqueça da ID
    protected $fields = ["id","nome","dataNascimento","email"];
 
}