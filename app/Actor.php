<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function getNombreCompleto()
    {
        $nombre = $this->first_name;
        $apellido = $this->last_name;

        return $nombre . " " . $apellido;
    }
}
