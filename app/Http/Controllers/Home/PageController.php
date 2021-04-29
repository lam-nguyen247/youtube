<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Services\PostService;
use App\Models\Post;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct(PostService $postService, ImageService $imageService)
    {
        $this->postService = $postService;
        $this->imageService = $imageService;
    }

    public function transChannel(){
        $page = Page::find(11);
        $postList = $this->postService->getPostList()->limit(5)->get();
        $seo = $page->seo;
        return view('home.page.detail', compact('page', 'seo', 'postList'));
    }
}