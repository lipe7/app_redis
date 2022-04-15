<?php

namespace App\Services;

use App\Repositories\NoticiaRepository;

class NoticiaService
{
    protected NoticiaRepository $noticia_repository;

    public function __construct(NoticiaRepository $noticia_repository)
    {
        $this->noticia_repository = $noticia_repository;
    }

    public function index($request)
    {
        return $this->noticia_repository->index();
    }
}
