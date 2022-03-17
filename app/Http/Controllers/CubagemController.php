<?php

namespace App\Http\Controllers;
use App\Models\Cubagem;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class CubagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cubagens = Cubagem::paginate(5);
        return view('cubagem.index',compact('cubagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cubagem.cubagem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        $cubagem = (float) $data['altura'] * $data['largura'] * $data['profundidade'] * $data['cubagem'];
        Cubagem::create(['valor' => $cubagem]);
        $cubagens = Cubagem::paginate(5);
        return redirect()->route('cubagem.index')->with('cubagens');
    }

    public function gerarPdf()
    {
        $cubagens = Cubagem::orderByDesc('created_at')->take(3)->get()->toArray();
        // view()->share('cubagem',$data);
        $pdf = PDF::loadView('cubagem.pdf', compact('cubagens'));
        return $pdf->download('cubagens-valores.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
