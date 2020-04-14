<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        [
            'headers' => 'News 1',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa 
                             justo sit amet risus. Etiam porta sem 
                             malesuada magna mollis euismod. Donec sed odio dui. ',
            'button' => 'View details >>'
        ],
        [
            'headers' => 'News 2',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa 
                             justo sit amet risus. Etiam porta sem 
                             malesuada magna mollis euismod. Donec sed odio dui. ',
            'button' => 'View details >>'
        ],
        [
            'headers' => 'News 3',
            'content' => 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa 
                             justo sit amet risus. Etiam porta sem 
                             malesuada magna mollis euismod. Donec sed odio dui. ',
            'button' => 'View details >>'
        ],
    ];

    public function index()
    {
        $news = $this->news;
        return view('news.index',compact('news'));
    }


}
