<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = [
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-1.svg',
                'avatar_header' => 'Rio Wanderlust',
                'avatar_desc' => 'Simple and comfortable design, boosts confidence for casual.'
            ],
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-2.svg',
                'avatar_header' => 'Somat Moon',
                'avatar_desc' => 'Neutral colors that are chic and easy to mix and match.'
            ],
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-3.svg',
                'avatar_header' => 'Diana Maverick',
                'avatar_desc' => 'Stylish and comfortable, perfect for daily activities.'
            ],
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-4.svg',
                'avatar_header' => 'Rendi Nomad',
                'avatar_desc' => 'Simple, affordable, but high quality.'
            ],
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-5.svg',
                'avatar_header' => 'Sarah Heights',
                'avatar_desc' => 'Timeless design and eco-friendly, no need to buy new clothes often.'
            ],
            [
                'avatar_link' => 'img/Avatar/Avatar-Card-6.svg',
                'avatar_header' => 'Robert Skylar',
                'avatar_desc' => 'Minimalist yet fashionable, suitable for various occasions.'
            ],
        ];

        return view('pages.home', compact('avatars'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        return view('pages.blog');
    }
}
