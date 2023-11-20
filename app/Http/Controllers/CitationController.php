<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\Mascot;
use App\Models\Owner;
use Illuminate\Http\Request;

/**
 * Class CitationController
 * @package App\Http\Controllers
 */
class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citations = Citation::paginate();

        return view('citation.index', compact('citations'))
            ->with('i', (request()->input('page', 1) - 1) * $citations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner= Owner::pluck('name','id','number','CC');
        $mascot=Mascot::pluck('name','id','tapy_animal');
        $citation = new Citation();
        return view('citation.create', compact('citation','owner','mascot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Citation::$rules);

        $citation = Citation::create($request->all());

        return redirect()->route('citations.index')
            ->with('success', 'Citation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citation = Citation::find($id);

        return view('citation.show', compact('citation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citation = Citation::find($id);

        return view('citation.edit', compact('citation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Citation $citation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citation $citation)
    {
        request()->validate(Citation::$rules);

        $citation->update($request->all());

        return redirect()->route('citations.index')
            ->with('success', 'Citation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $citation = Citation::find($id)->delete();

        return redirect()->route('citations.index')
            ->with('success', 'Citation deleted successfully');
    }
}
