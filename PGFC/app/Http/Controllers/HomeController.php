<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('pages.home');
    }
    public function blog(Request $request)
    {
        //
        return view('pages.blog');
    }
    public function blog_single(Request $request)
    {
        //
        return view('pages.blog-single');
    }
    public function competition(Request $request)
    {
        //
        return view('pages.competition');
    }
    public function contact(Request $request)
    {
        //
        return view('pages.contact');
    }
    public function gallery(Request $request)
    {
        //
        return view('pages.gallery');
    }
    public function klasmen(Request $request)
    {
        //
        return view('pages.klasmen');
    }
    public function pgfc(Request $request)
    {
        //
        return view('pages.pgfc');
    }  
    public function result(Request $request)
    {
        //
        return view('pages.result');
    }
    public function result_single(Request $request)
    {
        //
        return view('pages.result-single');
    }
    public function team(Request $request)
    {
        //
        return view('pages.team');
    }
    public function team_single(Request $request)
    {
        //
        return view('pages.team-single');
    }

    // public function error(Request $request)
    // {
    //     //
    //     return view('pages.404');
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
