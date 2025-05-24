<?php

namespace App;

use App\Livre;

class ManuelScolaire extends Livre{
    public function consulter(): string{
        return "contient des exercices à la fin";
    }
}