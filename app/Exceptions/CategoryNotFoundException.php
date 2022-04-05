<?php

namespace App\Exceptions;

use Exception;

class CategoryNotFoundException extends Exception
{
    public function __construct(string $category)
    {
        $message = 'Nenhuma notícia encontrada para categoria: '.$category;
        parent::__construct($message);
    }
}
