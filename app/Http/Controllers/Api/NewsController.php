<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Api;
use App\Http\Helper\NewsHelper;
use App\Exceptions\CategoryNotFoundException;

class NewsController extends Controller
{
    public function index(): object
    {
        $data = Api::getData();
        $news = NewsHelper::getNews($data);
        return $news;
    }

    public function getCategories(): object
    {
        $data = Api::getData();
        $categories = NewsHelper::getCategory($data);
        return $categories;
    }

    public function getNewsCategories(string $category): object
    {
        $data = Api::getData();
        $news = NewsHelper::newsByCategory($data, $category);

        return $news;
    }
}
