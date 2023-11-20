<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

/**
 * Class ProfessionalController
 * @package App\Http\Controllers
 */
class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionals = Professional::paginate();

        return view('professional.index', compact('professionals'))
            ->with('i', (request()->input('page', 1) - 1) * $professionals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professional = new Professional();
        return view('professional.create', compact('professional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Professional::$rules);

        $professional = Professional::create($request->all());

        return redirect()->route('professionals.index')
            ->with('success', 'Professional created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professional = Professional::find($id);

        return view('professional.show', compact('professional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professional = Professional::find($id);

        return view('professional.edit', compact('professional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Professional $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        request()->validate(Professional::$rules);

        $professional->update($request->all());

        return redirect()->route('professionals.index')
            ->with('success', 'Professional updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $professional = Professional::find($id)->delete();

        return redirect()->route('professionals.index')
            ->with('success', 'Professional deleted successfully');
    }
}
