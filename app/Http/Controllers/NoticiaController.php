<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PreDec;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $noticias = Noticia::all(); 
        return view('noticia.index', compact('noticias'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noticia/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $noticia = request()->except('_token');
        if ($request->hasFile('Foto')){
            $noticia['Foto']=$request->file('Foto')->store('uploads','public');
        }
        noticia::insert($noticia);
        return redirect('noticia/create')->with('mensaje','Noticia creada satisfactoriamente.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $noticia = Noticia::findOrFail($id);
        return view('noticia.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $noticia = Request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $nuevaNoticia = Noticia::findOrFail($id);
            Storage::delete('public/'. $nuevaNoticia->Foto);
            $noticia['Foto'] = $request->file('Foto')->store('uploads','public');
        }
        Noticia::where('id', '=', $id)->update($noticia);
        $nuevaNoticia = Noticia::findOrFail($id);
        return view('noticia.edit', compact('nuevaNoticia'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Noticia::destroy($id);
        return redirect ('noticia');
    }
}
