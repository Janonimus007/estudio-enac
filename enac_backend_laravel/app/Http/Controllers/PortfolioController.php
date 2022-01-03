<?php

namespace App\Http\Controllers;
// use DB;
use App\Models\Proyect;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $portfolio=DB::table('proyects')->get(); una forma de llamar a la base de datos
        // $portfolio = Proyect::orderBy('created_at','DESC')->get(); para llamar a la tabla y mostrar los datos de manera descendente
        // $portfolio = Proyect::orderBy('created_at','DESC')->paginate(); //me permite mostrar x elementos por paginas
        return view('portfolio',['portfolio' =>$proyect = Proyect::orderBy('created_at','DESC')->paginate()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esta es una forma de crear los datos en la tabla
        // $title = request('title');
        // $description = request('description');
        // Proyect::create([
        //     'title'=>$title,
        //     'description'=>$description,

        // ]);

        //otra forma de validar los datos y luego enviarlos
        $fields = request()->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        Proyect::create($fields);
        return redirect()->route('portfolio')->with('status','felicitaciones, el proyecto fue creado con exito');//redirige una vez creado un proyecto :D

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
        $proyect = Proyect::findOrFail($id);
        return view('show',[
            'proyect' => $proyect
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Proyect $proyect)
    {
        //
        $fields = request()->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
       $proyect->update( $fields);
       return redirect()->route('portfolio.show',$proyect)->with('status','felicitaciones, el proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
        //
        $proyect->delete();
       return redirect()->route('portfolio')->with('status','felicitaciones, el proyecto fue eliminado con exito');

    }
    public function create()
    {
        //
        return view('create');
    }
    public function edit(Proyect $proyect)
    {
        //
        return view('edit',[
            'proyect'=>$proyect
        ]);
    }
}
