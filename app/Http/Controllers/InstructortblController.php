<?php

namespace App\Http\Controllers;

use App\Models\Instructortbl;
use App\Models\Programatbl;
use App\Models\Solicitudcomitetbl;
use Illuminate\Http\Request;
use Illuminate\validation\rule;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;

/**
 * Class InstructortblController
 * @package App\Http\Controllers
 */
class InstructortblController extends Controller
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
        $instructortbls = Instructortbl::paginate(4);

        return view('instructortbl.index', compact('instructortbls'))
            ->with('i', (request()->input('page', 1) - 1) * $instructortbls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructortbl = new Instructortbl();
        $programatbl = Programatbl::pluck('nombre_pro','id');
        return view('instructortbl.create', compact('instructortbl', 'programatbl'));
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
            'documento_in' =>['required', 'unique:instructortbl,documento_in'],
		    'nombre_in' => 'required',
		    'email_in' => 'required',
		    'programa_id' => 'required',
        ]);
        request()->validate(Instructortbl::$rules);

        instructortbl::create($valida);

        return redirect()->route('instructortbl.index')
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
        $instructortbl = Instructortbl::find($id);

        return view('instructortbl.show', compact('instructortbl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructortbl = Instructortbl::find($id);
        $programatbl = Programatbl::pluck('nombre_pro','id');
        return view('instructortbl.edit', compact('instructortbl', 'programatbl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Instructortbl $instructortbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructortbl $instructortbl)
    {
        request()->validate(Instructortbl::$rules);

        $instructortbl->update($request->all());

        return redirect()->route('instructortbl.index')
            ->with('success', 'Instructor editado con Éxito!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $instructortbl = Instructortbl::find($id)->delete();

        return redirect()->route('instructortbl.index')
            ->with('eliminar', 'ok');
    }
}
