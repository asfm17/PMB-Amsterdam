<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyAdminController extends Controller
{
    public function index()
    {
        return view('admin.vacancies.index', [
            'vacancies' => Vacancy::orderByDesc('id')->get()
        ]);
    }

    public function create()
    {
        return view('admin.vacancies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        Vacancy::create($data);

        return redirect('/admin/vacancies')->with('success', 'Vacature aangemaakt.');
    }

    public function edit(Vacancy $vacancy)
    {
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    public function update(Request $request, Vacancy $vacancy)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        $vacancy->update($data);

        return redirect('/admin/vacancies')->with('success', 'Vacature bijgewerkt.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect('/admin/vacancies')->with('success', 'Vacature verwijderd.');
    }
}
