<?php

namespace App\Http\Controllers;

use App\Models\Aprendiztbl;
use App\Models\Programatbl;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
/*
 * Class AprendiztblController
 * @package App\Http\Controllers
 */

class AprendiztblController extends Controller
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
        $aprendiztbls = Aprendiztbl::paginate(4);

        return view('aprendiztbl.index', compact('aprendiztbls'))
            ->with('i', (request()->input('page', 1) - 1) * $aprendiztbls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendiztbl = new Aprendiztbl();
        $programatbl = Programatbl::pluck('nombre_pro','id');
        return view('aprendiztbl.create', compact('aprendiztbl','programatbl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valida = $request->validate([
            'documento_ap' =>['required', 'unique:aprendiztbl,documento_ap'],
            'nombre_ap' => ['required'],
            'email_ap' => ['required'],
            'programa_id' => ['required'],
        ]);
        
        request()->validate(Aprendiztbl::$rules);

        aprendiztbl::create($valida);
        return redirect()->route('aprendiztbl.index')
        // ->with('success', 'Aprendiz creado con Éxito.');
        // Alert::success('crear', 'ok');
        ->with('crear', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprendiztbl = Aprendiztbl::find($id);

        return view('aprendiztbl.show', compact('aprendiztbl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprendiztbl = Aprendiztbl::find($id);
        $programatbl = Programatbl::pluck('nombre_pro','id');
        return view('aprendiztbl.edit', compact('aprendiztbl','programatbl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aprendiztbl $aprendiztbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendiztbl $aprendiztbl)
    {
        request()->validate(Aprendiztbl::$rules);

        $aprendiztbl->update($request->all());

        return redirect()->route('aprendiztbl.index')
            ->with('success', 'Datos almacenados correctamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aprendiztbl = Aprendiztbl::find($id)->delete();

        return redirect()->route('aprendiztbl.index')
            ->with('eliminar', 'ok');
    }
}
