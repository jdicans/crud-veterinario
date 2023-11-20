<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Mascot;
use App\Models\Owner;
use App\Models\Professional;
use App\Models\Report;
use Illuminate\Http\Request;

/**
 * Class ReportController
 * @package App\Http\Controllers
 */
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::paginate();

        return view('report.index', compact('reports'))
            ->with('i', (request()->input('page', 1) - 1) * $reports->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner= Owner::pluck('name','id');
        $professional= Professional::pluck('name','id','speciality');
        $mascot=Mascot::pluck('name','id','tapy_animal');
        $consultation=Consultation::pluck('realization','id','treatment');
        $report = new Report();
        return view('report.create', compact('report','owner','professional','mascot','consultation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Report::$rules);

        $report = Report::create($request->all());

        return redirect()->route('reports.index')
            ->with('success', 'Report created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);

        return view('report.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);

        return view('report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Report $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        request()->validate(Report::$rules);

        $report->update($request->all());

        return redirect()->route('reports.index')
            ->with('success', 'Report updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $report = Report::find($id)->delete();

        return redirect()->route('reports.index')
            ->with('success', 'Report deleted successfully');
    }
}
