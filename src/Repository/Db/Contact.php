<?php

namespace App\Domain\Repository;

use App\Infrastructure\Repository;

class Contact implements Repository {
    public function getName() {
        return 'Contact Repository from db';
    }
}