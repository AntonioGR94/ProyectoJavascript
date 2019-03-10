<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\BrandAjaxFormRequest;


class BrandController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::with(['user'])
                    ->latest()
                    ->paginate(10);

        return view('public.brands.index')->withBrands($brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.brands.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        Brand::create([
            'user_id' => $request->user()->id,
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'url'  => request('url'),
            'createDate' => request('createDate')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brandSlug)
    {
        $brand = Brand::where('slug', $brandSlug)->firstOrFail();
        return view('public.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('public.brands.edit', compact('brand'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $brand->update([
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'url'   => request('url'),
            'createDate' => request('createDate')
        ]);

        return redirect('/brands/'.$brand->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect('/');
    }

    public function crearBrandAjax(BrandAjaxFormRequest $request){
        $brand = Brand::create([
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'url'   => request('url'),
            'createDate' => request('createDate')
        ]);
        return view('public.brands.create', ['book' => $book]);      }

    public function editarBrandAjax($idBrand,Request $request)
    {
        $brand = Brand::where('id', $idBrand)->firstOrFail();
        $brand->update([
            'name' => request('name'),
            'slug' => str_slug(request('title'), "-"),
            'url' => request('url'),
            'createDate' => request('createDate')
        ]);

        return 1;

    }
    
}
