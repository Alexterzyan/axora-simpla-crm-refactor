<?php


namespace App\Repositories;


interface IProductDBRepository
{
    public function getProducts(string $filter) :array;

}