<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{

    public function __construct(){

	$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = Profile::find(1);
        return view('profiles.index',compact('profile'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Profile $profile)
    {
        //
        return view('profiles.create',compact('profile'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $data = $this->validatedForm();

		$imagePath = request('image')->store('uploads','public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(500,500);
    	$image->save();
    	auth()->user()->profile()->create([

    	
		'fullname' => $data['fullname'],
		'position' => $data['position'],
		'education' => $data['education'],
		'location' => $data['location'],
        'skills' => $data['skills'],
        'notes' => $data['notes'],
    	'image' => $imagePath,

        ]);
        
        return redirect('/profile');
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

    private function validatedForm(){

        return request()->validate([
        'fullname' => 'required',
		'position' => 'required',
		'education' => 'required',
		'location' => 'required',
        'skills' => 'required',
        'notes' => 'required',
        'image' => 'required',
            ]);
    
    }
}
