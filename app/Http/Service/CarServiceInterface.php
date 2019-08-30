<?php


namespace App\Http\Service;


interface CarServiceInterface
{
public function getAll();
public function store($request);
public function edit($request);
public function delete($id);
}
