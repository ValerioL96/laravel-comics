<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $links = [
        [
            "id" => 1,
            "name" => 'Characters',
            "active" => false,
        ],
        [
            "id" => 2,
            "name" => 'comics',
            "active" => true,
        ],
        [
            "id" => 3,
            "name" => 'movies',
            "active" => false,
        ],
        [
            "id" => 4,
            "name" => 'tv',
            "active" => false,
        ],
        [
            "id" => 5,
            "name" => 'games',
            "active" => false,
        ],
        [
            "id" => 6,
            "name" => 'collectibles',
            "active" => false,
        ],
        [
            "id" => 7,
            "name" => 'videos',
            "active" => false,
        ],
        [
            "id" => 8,
            "name" => 'fans',
            "active" => false,
        ],
        [
            "id" => 9,
            "name" => 'news',
            "active" => false,
        ],
        [
            "id" => 10,
            "name" => 'shop',
            "active" => false,
        ],
    ];
    $footerLinksFirstCol= [
        [
            "id" => 1,
            "name" => 'Characters',
        ],
        [
            "id" => 2,
            "name" => 'comics',
        ],
        [
            "id" => 3,
            "name" => 'movies',
        ],
        [
            "id" => 4,
            "name" => 'tv',
        ],
        [
            "id" => 5,
            "name" => 'games',
        ],
        [
            "id" => 6,
            "name" => 'collectibles',
        ],
        [
            "id" => 7,
            "name" => 'videos',
        ],
        [
            "id" => 8,
            "name" => 'fans',
        ],
        [
            "id" => 9,
            "name" => 'news',
        ],
    ];
    $footerLinksShop = [
        [
            "id" => 1,
            "name" => 'shop DC',
        ],
        [
            "id" => 2,
            "name" => 'shop DC collectibles',
        ],
    ];
    $footerLinksSecondCol = [
        [
            "id" => 1,
            "name" => 'Terms Of Use',
        ],
        [
            "id" => 2,
            "name" => 'Privacy policy (new)',
        ],
        [
            "id" => 3,
            "name" => 'Ad Choices',
        ],
        [
            "id" => 4,
            "name" => 'Advertiosing',
        ],
        [
            "id" => 5,
            "name" => 'Jobs',
        ],
        [
            "id" => 6,
            "name" => 'Subscriptions',
        ],
        [
            "id" => 7,
            "name" => 'Talent Workshops',
        ],
        [
            "id" => 8,
            "name" => 'CPS Certificates',
        ],
        [
            "id" => 9,
            "name" => 'Ratings',
        ],
        [
            "id" => 10,
            "name" => 'Shop help',
        ],
        [
            "id" => 11,
            "name" => 'Contact Us',
        ],
    ];
    $footerLinksThirdCol = [
        [
            "id" => 1,
            "name" => 'DC',
        ],
        [
            "id" => 2,
            "name" => 'Mag Magazine',
        ],
        [
            "id" => 3,
            "name" => 'DC Kids',
        ],
        [
            "id" => 4,
            "name" => 'DC Universe',
        ],
        [
            "id" => 5,
            "name" => 'DC Power Visa',
        ],
    ];

    return view('pages.home', compact("links", "footerLinksFirstCol", "footerLinksShop", "footerLinksSecondCol", "footerLinksThirdCol"));
});

