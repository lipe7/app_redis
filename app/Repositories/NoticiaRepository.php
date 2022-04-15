<?php

namespace App\Repositories;

use App\Models\Noticia;

class NoticiaRepository
{
    public function index()
    {
        return Noticia::orderByDesc('created_at')
            ->limit(10)
            ->get();
    }
}
