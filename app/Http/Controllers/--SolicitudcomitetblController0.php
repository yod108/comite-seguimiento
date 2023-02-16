<?php

namespace App\Http\Controllers;

use App\Models\Solicitudcomitetbl;

use Illuminate\Http\Request;
use App\Models\Instructortbl;
use App\Models\Aprendiztbl;

use RealRashid\SweetAlert\Facades\Alert;

/**
 * Class SolicitudcomitetblController
 * @package App\Http\Controllers
 */
class SolicitudcomitetblController extends Controller
{
     /**
     * Middleware para autenticación.
     */

    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudcomitetbls = Solicitudcomitetbl::paginate(4);

        $solicitudcomitetbl = new Solicitudcomitetbl();
        $aprendiztbl = Aprendiztbl::pluck('nombre_ap','id');
        $instructortbl = Instructortbl::pluck('nombre_in','id');

        return view('solicitudcomitetbl.index', compact('solicitudcomitetbls','instructortbl', 'aprendiztbl', 'solicitudcomitetbl'))
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
        
        $aprendiztbl = Aprendiztbl::pluck('nombre_ap','id');
        $instructortbl = Instructortbl::pluck('nombre_in','id');
        return view('solicitudcomitetbl.create', compact('solicitudcomitetbl','instructortbl', 'aprendiztbl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, ['documento_ap'=>'required']);

        $solicitudcomitetbl = new Solicitudcomitetbl();

        $solicitudcomitetbl = Solicitudcomitetbl::create($request->all());
        $aprendiztbl = Aprendiztbl::pluck('nombre_ap','id');
        $instructortbl = Instructortbl::pluck('nombre_in','id');

        return redirect()->route('solicitudcomitetbl.index')
            ->with('success', 'Solicitud creada con Éxito.');
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
        
        $aprendiztbl = Aprendiztbl::pluck('nombre_ap','id');
        $instructortbl = Instructortbl::pluck('nombre_in','id');
        return view('solicitudcomitetbl.edit', compact('solicitudcomitetbl','instructortbl', 'aprendiztbl'));
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
            ->with('success', 'Solicitud actualizada con Éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudcomitetbl = Solicitudcomitetbl::find($id)->delete();

        return redirect()->route('solicitudcomitetbl.index')
        ->with('eliminar', 'ok');
    }
}
