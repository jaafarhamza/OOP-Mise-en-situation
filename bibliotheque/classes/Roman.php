<?php
namespace App;

use App\Livre;

class Roman extends Livre {
    public function consulter(): string{
        return "se consulte avec une couverture illustrée";
    }
}