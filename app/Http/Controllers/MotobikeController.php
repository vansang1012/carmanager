<?php

namespace App\Http\Controllers;

use App\Http\Service\Impl\MotobikeService;
use App\Motobike;
use Illuminate\Http\Request;

class MotobikeController extends Controller
{
    protected $motobikeService;

    public function __construct(MotobikeService $motobikeService)
    {
        $this->motobikeService = $motobikeService;
    }

    public function index()
    {
        $motobikes = $this->motobikeService->getAll();
        return view('motobike.list', compact('motobikes'));
    }

    public function create()
    {
        return view('motobike.create');
    }

    public function store(Request $request)
    {
        $this->motobikeService->store($request);
        return redirect()->route('motobike.index');

    }

    public function edit($id)
    {
        $motobike = $this->motobikeService->findById($id);
        return view('motobike.edit', compact('motobike'));
    }

    public function update(Request $request)
    {
        $this->motobikeService->update($request);
        return redirect()->route('motobike.index');
    }

    public function destroy($id)
    {
        $this->motobikeService->delete($id);
        return redirect()->route('motobike.index');
    }

}
