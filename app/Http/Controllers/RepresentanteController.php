<?php

namespace App\Http\Controllers;

use App\Models\Representante;
use Illuminate\Http\Request;

/**
 * Class RepresentanteController
 * @package App\Http\Controllers
 */
class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representantes = Representante::paginate();

        return view('representante.index', compact('representantes'))
            ->with('i', (request()->input('page', 1) - 1) * $representantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $representante = new Representante();
        return view('representante.create', compact('representante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Representante::$rules);

        $representante = Representante::create($request->all());

        return redirect()->route('representantes.index')
            ->with('success', 'Representante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $representante = Representante::find($id);

        return view('representante.show', compact('representante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $representante = Representante::find($id);

        return view('representante.edit', compact('representante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Representante $representante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Representante $representante)
    {
        request()->validate(Representante::$rules);

        $representante->update($request->all());

        return redirect()->route('representantes.index')
            ->with('success', 'Representante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $representante = Representante::find($id)->delete();

        return redirect()->route('representantes.index')
            ->with('success', 'Representante deleted successfully');
    }
}
