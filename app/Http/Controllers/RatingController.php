<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Http\Requests\StoreRatingRequest;
use App\Http\Requests\UpdateRatingRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product): View
    {
        $ratings = $product->ratings->where('review', '!=' , null);
        $ratings->load('user');
        return view('user.screens.review.index',compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        // dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRatingRequest $request , Product $product): RedirectResponse
    {
        // // dd(request()->product());
        // dd($product);
        // dd($request->all());
        auth()->user()->ratings()->create([
            'product_id' => $product->id,
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRatingRequest $request, Rating $rating): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating): RedirectResponse
    {
        //
    }
}
