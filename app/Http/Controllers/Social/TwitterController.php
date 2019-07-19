<?php

namespace App\Http\Controllers\Social;

use App\Twitter\Social;
use App\Twitter\Twitter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwitterController extends Controller
{

    protected $twitter;

    public function __construct(Social $twitter)
    {
        $this->twitter = $twitter;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $social = app()->makeWith(Social::class, ['apiKey' => 'make with']);
        // $social = resolve(Social::class);
        return $this->twitter->getApiKey() . '<br>' . $this->twitter->additional;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function edit(Twitter $twitter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twitter $twitter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twitter $twitter)
    {
        //
    }
}
