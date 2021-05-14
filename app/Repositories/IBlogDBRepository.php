<?php


namespace App\Repositories;


interface IBlogDBRepository
{
    public function getPosts(): array;

}