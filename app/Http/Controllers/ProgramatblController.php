<?php

namespace App\Http\Controllers;
use App\Models\Aprendiztbl;
use App\Models\Programatbl;
use Illuminate\Http\Request;

/**
 * Class ProgramatblController
 * @package App\Http\Controllers
 */
class ProgramatblController extends Controller
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
        $programatbls = Programatbl::paginate(4);

        return view('programatbl.index', compact('programatbls'))
            ->with('i', (request()->input('page', 1) - 1) * $programatbls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programatbl = new Programatbl();
        return view('programatbl.create', compact('programatbl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programatbl::$rules);

        $programatbl = Programatbl::create($request->all());

        return redirect()->route('programatbl.index')
            ->with ('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programatbl = Programatbl::find($id);

        return view('programatbl.show', compact('programatbl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programatbl = Programatbl::find($id);

        return view('programatbl.edit', compact('programatbl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programatbl $programatbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programatbl $programatbl)
    {
        request()->validate(Programatbl::$rules);

        $programatbl->update($request->all());

        return redirect()->route('programatbl.index')
            ->with('success', 'Programa actualizado con Éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programatbl = Programatbl::find($id)->delete();

        return redirect()->route('programatbl.index')
            ->with('eliminar', 'ok');
    }
}