<?php


namespace App\Http\Repository\Contracts;


interface RepositoryInterface
{
    public function getAll();
    public function store($obj);
    public function edit($obj);
    public function delete($obj);
}
