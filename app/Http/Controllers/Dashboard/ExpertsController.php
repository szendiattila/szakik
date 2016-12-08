<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpertRequest;
use App\Models\Expert;

class ExpertsController extends Controller
{
    public function index()
    {
        $experts = Expert::paginate();

        return view('dashboard.expert.index', compact('experts'));
    }

    public function create()
    {
        return view('dashboard.expert.create');
    }

    public function store(ExpertRequest $request)
    {
        Expert::create($request->all());

        return redirect('dashboard/expert');
    }

    public function edit(Expert $expert)
    {
        return view('dashboard.expert.edit', compact('expert'));
    }

    public function update(Expert $expert, ExpertRequest $request)
    {
        $expert->update($request->all());

        return redirect('dashboard/expert');
    }

    public function destroy(Expert $expert)
    {
        $expert->delete();

        return redirect('dashboard/expert');
    }
}
