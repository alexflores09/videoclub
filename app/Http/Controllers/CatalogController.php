<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Krucas\Notification\Notification;

class CatalogController extends Controller {

    public function index(){
        $arrMovies = Movie::all();
        return view('catalog.index', array('arrMovies'=> $arrMovies));
    }

    public function show($id){
        $arrMovie = Movie::findOrFail($id);
        return view('catalog.show', array(
            'movie' => $arrMovie
        ));
    }

    public function create(){
        return view('catalog.create');
    }

    public function edit($id){
        $arrMovie = Movie::findOrFail($id);
        return view('catalog.edit',array(
            'arrMovie' => $arrMovie
        ));
    }

    public function delete($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/catalog');
    }

    public function save(Request $request){
        if($request->txtID > 0)
            $movie = Movie::find($request->txtID);
        else
            $movie = new Movie;

        $movie->title = $request->txtTitle;
        $movie->year = $request->txtYear;
        $movie->director = $request->txtDirector;
        $movie->poster = $request->txtPoster;
        $movie->synopsis = $request->txtSynopsis;
        if($request->txtID == 0)
            $movie->rented = false;

        $movie->save();

        if($request->txtID > 0)
            return back();
        else
            return redirect('catalog');
    }

    public function rented($id,$type){
        $movie = Movie::findOrFail($id);
        if($type == 'rented')
            $movie->rented = true;
        else
            $movie->rented = false;
        $movie->save();
        return back();
    }

    public function missingMethod(){
        return 'Error 404';
    }
}
