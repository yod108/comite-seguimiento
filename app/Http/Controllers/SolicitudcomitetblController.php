<?php

namespace App\Http\Controllers;

use App\Models\Solicitudcomitetbl;
use Illuminate\Http\Request;

/**
 * Class SolicitudcomitetblController
 * @package App\Http\Controllers
 */
class SolicitudcomitetblController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudcomitetbls = Solicitudcomitetbl::paginate(4);

        return view('solicitudcomitetbl.index', compact('solicitudcomitetbls'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudcomitetbls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudcomitetbl = new Solicitudcomitetbl();
        return view('solicitudcomitetbl.create', compact('solicitudcomitetbl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Solicitudcomitetbl::$rules);

        $solicitudcomitetbl = Solicitudcomitetbl::create($request->all());

        return redirect()->route('solicitudcomitetbls.index')
            ->with('success', 'Solicitudcomitetbl created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudcomitetbl = Solicitudcomitetbl::find($id);

        return view('solicitudcomitetbl.show', compact('solicitudcomitetbl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudcomitetbl = Solicitudcomitetbl::find($id);

        return view('solicitudcomitetbl.edit', compact('solicitudcomitetbl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solicitudcomitetbl $solicitudcomitetbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitudcomitetbl $solicitudcomitetbl)
    {
        request()->validate(Solicitudcomitetbl::$rules);

        $solicitudcomitetbl->update($request->all());

        return redirect()->route('solicitudcomitetbls.index')
            ->with('success', 'Solicitudcomitetbl updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudcomitetbl = Solicitudcomitetbl::find($id)->delete();

        return redirect()->route('solicitudcomitetbls.index')
            ->with('success', 'Solicitudcomitetbl deleted successfully');
    }
}
