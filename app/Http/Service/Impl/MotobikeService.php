<?php


namespace App\Http\Service\Impl;


use App\Http\Repository\Eloquent\MotobikeRepositoryEloquent;
use App\Motobike;

class MotobikeService implements MotobikeServiceInterface
{
    protected $motobikeRepository;

    public function __construct(MotobikeRepositoryEloquent $repositoryEloquent)
    {
        $this->motobikeRepository = $repositoryEloquent;
    }

    public function getAll()
    {
        return $this->motobikeRepository->getAll();
    }

    public function store($request)
    {
        $motobike = new Motobike();
        $motobike->name = $request->name;
        $motobike->price = $request->price;
        $this->motobikeRepository->store($motobike);
    }

    public function findById($id)
    {
        return $this->motobikeRepository->findById($id);
    }

    public function edit($request)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        $motobike = $this->motobikeRepository->findById($id);
        $this->motobikeRepository->delete($motobike);
    }

    public function update($request)
    {
        $id = request('id');
        $motobike = $this->motobikeRepository->findById($id);
        $motobike->name = request('name');
        $motobike->price = request('price');
        $this->motobikeRepository->update($motobike);

    }
}
