<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Prepad\PyroTestTask\Class\SiteMapGenerator;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function test()
    {
        $array = [
            [
                'loc' => '231http://localhost/test',
                'lastmod' => '2023-03-10',
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ],
        ];
        $sitemap = new SiteMapGenerator($array,'json','/var/www/html/sitemap/sitemap.json');
    }
}
