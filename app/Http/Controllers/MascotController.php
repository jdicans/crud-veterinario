<?php

namespace App\Http\Controllers;

use App\Models\Mascot;
use App\Models\Owner;
use Illuminate\Http\Request;

/**
 * Class MascotController
 * @package App\Http\Controllers
 */
class MascotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascots = Mascot::paginate();

        return view('mascot.index', compact('mascots'))
            ->with('i', (request()->input('page', 1) - 1) * $mascots->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner= Owner::pluck('name','id');
        $mascot = new Mascot();
        return view('mascot.create', compact('mascot','owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mascot::$rules);

        $mascot = Mascot::create($request->all());

        return redirect()->route('mascots.index')
            ->with('success', 'Mascot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascot = Mascot::find($id);

        return view('mascot.show', compact('mascot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascot = Mascot::find($id);

        return view('mascot.edit', compact('mascot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mascot $mascot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascot $mascot)
    {
        request()->validate(Mascot::$rules);

        $mascot->update($request->all());

        return redirect()->route('mascots.index')
            ->with('success', 'Mascot updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mascot = Mascot::find($id)->delete();

        return redirect()->route('mascots.index')
            ->with('success', 'Mascot deleted successfully');
    }
}
