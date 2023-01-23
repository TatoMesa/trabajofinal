<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PreDec;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        date_default_timezone_set("America/Argentina/Buenos_Aires"); 
        $noticias = Noticia::orderBy('Categorias','asc')->get();
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
        date_default_timezone_set("America/Argentina/Buenos_Aires"); 
        $noticia = request()->except('_token');
        $noticia['created_at']=now();      
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
    public function show($id)
    {
        // Visualizar cada noticia por separado
        $noticia = Noticia::findOrFail($id);
        return view('noticia.show', compact('noticia'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Funcion para editar cada noticia
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
        date_default_timezone_set("America/Argentina/Buenos_Aires"); 
        $nuevaNoticia = Request()->except(['_token','_method']);
        $nuevaNoticia['created_at']=now();
        if($request->hasFile('Foto')){
            $noticia = Noticia::findOrFail($id);
            Storage::delete('public/'. $noticia->Foto);
            $nuevaNoticia['Foto'] = $request->file('Foto')->store('uploads','public');
        }
        Noticia::where('id', '=', $id)->update($nuevaNoticia);
        $noticia = Noticia::findOrFail($id);
        return redirect ('noticia')->with('mensaje','Noticia Editada Satisfactoriamente.');

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
        $noticia = Noticia::findOrFail($id);
        Storage::delete('public/'. $noticia->Foto);
        Noticia::destroy($id);
        return redirect ('noticia')->with('mensaje','Noticia Borrada Satisfactoriamente.');
    }
}
