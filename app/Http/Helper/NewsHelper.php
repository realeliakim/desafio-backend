<?php

namespace App\Http\Helper;

use App\Exceptions\CategoryNotFoundException;

class NewsHelper
{
    public static function getNews(object $data): object
    {
        $qnty = 0;
        $news = [];

        foreach($data as $item){
            $title = (string)$item->title;
            array_push($news, $title);
            $qnty++;
        }

        return response()->json([
            'quantidade'=> $qnty,
            'noticias'  => $news
        ]);
    }

    public static function getCategory(object $data): object
    {
        $categories = [];
        foreach($data as $item){
            array_push($categories, (string)$item->category);
        }

        return response()->json([
            'categorias' => $categories
        ]);
    }

    public static function newsByCategory(object $data, string $category): object
    {
        $news = [];
        $qnty = 0;
        foreach($data as $item){
            if((string)$item->category === $category){
                array_push($news, (string)$item->title);
                $qnty++;
            }
        }

        if(count($news) === 0){
            throw new CategoryNotFoundException($category);
        }

        return response()->json([
            'categoria' => $category,
            'quantidade'=> $qnty,
            'noticias'  => $news,
        ]);
    }
}
