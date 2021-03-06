<?php

namespace App\Http\Controllers\System;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('system.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = Portfolio::orderBy('id', 'DESC')->first();
        $portfolio = Portfolio::create($request->all());
        
        // Store in AWS S3
        if($archivo = $request->file('logo')){

            $md5Name = md5_file($archivo->getRealPath());
            $guessExtension = $archivo->guessExtension();
            $path = $archivo->storeAs('blog', $md5Name.'.'.$guessExtension  ,'s3');

            $url = 'https://partner-grammer.s3.us-east-1.amazonaws.com/';

            $portfolio->fill(['logo' => asset($url.$path)])->save();
        }

        if($archivo = $request->file('image')){

            $md5Name = md5_file($archivo->getRealPath());
            $guessExtension = $archivo->guessExtension();
            $path = $archivo->storeAs('blog', $md5Name.'.'.$guessExtension  ,'s3');

            $url = 'https://partner-grammer.s3.us-east-1.amazonaws.com/';

            $portfolio->fill(['image' => asset($url.$path)])->save();
        }

        if(is_null($last)){
            $portfolio->control = 0;
        }else{
            if(!$last->control){
                $portfolio->control = 1;
            }else{
                $portfolio->control = 0;
            }
        }

        $portfolio->save();

        return redirect()->route('portfolios.edit', $portfolio->id)
            ->with('info', 'Portafolio creado con exito');

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
        $portfolio = Portfolio::find($id);

        return view('system.portfolios.edit', compact('portfolio'));
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
        $portfolio = Portfolio::find($id);

        $portfolio->fill($request->all())->save();

        // Store in AWS S3
        if($archivo = $request->file('logo')){

            $md5Name = md5_file($archivo->getRealPath());
            $guessExtension = $archivo->guessExtension();
            $path = $archivo->storeAs('blog', $md5Name.'.'.$guessExtension  ,'s3');

            $url = 'https://partner-grammer.s3.us-east-1.amazonaws.com/';

            $portfolio->fill(['logo' => asset($url.$path)])->save();
        }

        if($archivo = $request->file('image')){

            $md5Name = md5_file($archivo->getRealPath());
            $guessExtension = $archivo->guessExtension();
            $path = $archivo->storeAs('blog', $md5Name.'.'.$guessExtension  ,'s3');

            $url = 'https://partner-grammer.s3.us-east-1.amazonaws.com/';

            $portfolio->fill(['image' => asset($url.$path)])->save();
        }

        return redirect()->route('portfolios.edit', $portfolio->id)
            ->with('info', 'Portafolio creado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return back();
    }

    public function showMainProject($id)
    {
        $portfolio = Portfolio::find($id);
        return $portfolio;
    }

    public function getProjects()
    {
        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(3);
        return $portfolios;
    }

    public function getProjectsAll()
    {
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        return $portfolios;
    }
}
