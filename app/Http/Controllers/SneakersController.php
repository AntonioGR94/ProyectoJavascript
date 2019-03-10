<?php

namespace App\Http\Controllers;

use App\Sneaker;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\SneakerRequest;

class SneakersController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sneakers = Sneaker::paginate(10);

        return view('public.sneakers.index')->withSneakers($sneakers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('public.sneakers.create')->withBrands($brands);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SneakerRequest $request)
    {
        Sneaker::create([
            'brand_id' => request('brand'),
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'description' => request('description'),
            'release' => request('release'),
            'price' => request('price'),
            'sport' => request('sport'),
            'colorway' => request('colorway'),
            'size' => request('size')

        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $sneaker = Sneaker::where('slug', $slug)->firstOrFail();

        return view('public.sneakers.show', ['sneaker' => $sneaker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Sneaker $sneaker)
    {
        $brands = Brand::all();

        return view('public.sneakers.edit', [
            'sneaker' => $sneaker,
            'brands' => $brands,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function update(SneakerRequest $request, Sneaker $sneaker)
    {
        $sneaker->update([
          'name' => request('name'),
          'slug' => str_slug(request('name'), "-"),
          'description' => request('description'),
          'release' => request('release'),
          'price' => request('price'),
          'sport' => request('sport'),
          'colorway' => request('colorway'),
          'size' => request('size')
        ]);

        return redirect('/sneakers/'.$sneaker->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sneaker  $sneaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sneaker $sneaker)
    {
        $sneaker->delete();

        return redirect('/');
    }


    public function obtenerSneakersPorAjax(Request $request)
    {
        $sneakers = Sneaker::where('name', 'like', "%".request('busqueda')."%")->get();
                
        return view('public.sneakers.buscarAjax.index')->withSneakers($sneakers);
        

    }
    public function paginate($numElementos)
    {
        //sleep(10);
        $sneakers = Sneaker::skip($numElementos)->take(10)->get();
        $view = "";
        if(count($sneakers)>0){
            $view =  view('public.sneakers.paginate')->withSneakers($sneakers);
        }    
        return $view;
    }

    public function readSneakerAjax($slugSneaker,Request $request)
    {
        $sneaker = Sneaker::where('slug', $slugSneaker)->firstOrFail();

        return view('public.sneakers.show', ['sneaker' => $sneaker]);

    }
}
