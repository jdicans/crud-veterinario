<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\Consultation;
use App\Models\Professional;
use Illuminate\Http\Request;

/**
 * Class ConsultationController
 * @package App\Http\Controllers
 */
class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::paginate();

        return view('consultation.index', compact('consultations'))
            ->with('i', (request()->input('page', 1) - 1) * $consultations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citation= Citation::pluck('query_type','id');
        $professional= Professional::pluck('name','id','speciality');
        $consultation = new Consultation();
        return view('consultation.create', compact('consultation','citation','professional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consultation::$rules);

        $consultation = Consultation::create($request->all());

        return redirect()->route('consultations.index')
            ->with('success', 'Consultation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultation = Consultation::find($id);

        return view('consultation.show', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultation = Consultation::find($id);

        return view('consultation.edit', compact('consultation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consultation $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        request()->validate(Consultation::$rules);

        $consultation->update($request->all());

        return redirect()->route('consultations.index')
            ->with('success', 'Consultation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultation = Consultation::find($id)->delete();

        return redirect()->route('consultations.index')
            ->with('success', 'Consultation deleted successfully');
    }
}
