<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOffer;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $category = Category::get();
        $location = Location::get();
        return view('offers.create', compact('category', 'location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOffer $request) {
        $offer = Offer::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'location_id'=>$request->location_id,
            'author_id'=>Auth::user()->id
        ]);
        $offer->categories()->sync($request->category_id);
        $offer->locations()->sync($request->location_id);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
