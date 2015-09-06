<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DespesaItem;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rows = \App\Despesa::sortable()->paginate(10);

        return view('despesa.index')->with(compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categorias = \App\Categoria::lists('nome', 'id');
        
        return view('despesa.create')->with(compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $despesa = \App\Despesa::create($request::all());

        $tipoValor = $request::Input('tipoValor');
        $dataCarbon = \Carbon\Carbon::createFromFormat('d/m/Y', $despesa->data);
        
        // cria as parcelas da despesa
        for ($parcela = 1; $parcela <= $despesa->parcelas; $parcela++) {
            $despesaItem = new DespesaItem();
            $despesaItem->despesa_id = $despesa->id;
            $despesaItem->parcela = $parcela;
            $despesaItem->data = $dataCarbon->addMonths($parcela);
            if($tipoValor == 'total')
                $despesaItem->valor = ($despesa->valor / $despesa->parcelas);
            else
                $despesaItem->valor = $despesa->valor;

            $despesa->items()->save($despesaItem);
        }

        return redirect()->route('despesa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $row = \App\Despesa::find($id);

        return view('despesa.show')->with(compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        \App\Despesa::destroy($id);

        return redirect()->route('despesa.index');
    }
}
