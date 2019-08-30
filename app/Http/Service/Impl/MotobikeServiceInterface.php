<?php


namespace App\Http\Service\Impl;


interface MotobikeServiceInterface
{
    public function getAll();
    public function store($request);
    public function edit($request);
    public function delete($id);
    public function update($request);
}
