<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\User;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->profile_status == 'NotCompleted'){
            return redirect('/user/completeprofile');
        } else{
            return view('ads.post');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Validation
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

//        Collection
        $title = $request->input('title');
        $description = $request->input('description');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $category = $request->input('category');

//        Todo: Image Upload

//        Inserting
        $default_imgs = ['/storage/img/agric1.jpg', '/storage/img/agric2.jpg', '/storage/img/agric3.jpg'];
        $ran = rand(0,2);

        $ad = new Ads();
        $ad->user_id = auth()->user()->id;
        $ad->title = $title;
        $ad->description = $description;
        $ad->quantity = $quantity;
        $ad->price = $price;
        $ad->category = $category;
        $ad->img_url = $default_imgs[$ran];
        $location = auth()->user()->country.",".auth()->user()->state.",".auth()->user()->town;
        $ad->location = $location;
        $ad->save();
        
        return redirect('/user/profile')->with('success', 'Ad Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->user()->profile_status == 'NotCompleted'){
            return redirect('/user/completeprofile');
        } else{
            $Ad = Ads::findorfail($id);
            $owner_id = $Ad->user_id;
            $owner = User::find($owner_id);
            return view('ads.view')->with(['Ad' => $Ad, 'owner' => $owner]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->profile_status == 'NotCompleted'){
            return redirect('/user/completeprofile');
        } else{

            $Ad = Ads::find($id);

            if(auth()->user()->id !== $Ad->user_id){
                return redirect('/user/profile')->with('error', 'Unauthorized Access');
            }
            return view('ads.edit')->with('Ad', $Ad);
        }
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
//        Validation
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

//        Collection
        $title = $request->input('title');
        $description = $request->input('description');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $category = $request->input('category');

//        Todo: Image Upload

//        Inserting
        $ad = Ads::find($id);
        $ad->user_id = auth()->user()->id;
        $ad->title = $title;
        $ad->description = $description;
        $ad->quantity = $quantity;
        $ad->price = $price;
        $ad->category = $category;
        $location = auth()->user()->country.",".auth()->user()->state.",".auth()->user()->town;
        $ad->location = $location;
        $ad->save();

        return redirect('/user/profile')->with('success', 'Ad Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ad = Ads::find($id);

        if(auth()->user()->id !== $Ad->user_id){
            return redirect('/user/profile')->with('error', 'Unauthorized Access');
        }

        $Ad->delete();

        return redirect('/user/profile')->with('success', 'Ad Deleted');

    }

    public function search(Request $request){
//        return $request->input('query');

    }

}
