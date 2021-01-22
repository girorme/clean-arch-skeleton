<?php

declare(strict_types=1);

namespace App\Domain\UseCase;

use App\Domain\Repository\Contact as ContactRepository;
use RuntimeException;
use Throwable;

class AddContactInteractor
{
    public function addContact() {
        $repo = new ContactRepository();
    }
}
