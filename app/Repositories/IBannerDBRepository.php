<?php


namespace App\Repositories;


interface IBannerDBRepository
{
    public function getVisible(): array;

}