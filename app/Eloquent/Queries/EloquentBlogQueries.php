<?php


namespace App\Eloquent\Queries;


use App\Eloquent\Models\Blog;
use App\Repositories\IBlogDBRepository;

class EloquentBlogQueries implements IBlogDBRepository
{
    public function getPosts(): array
    {
        $posts = Blog::get();
        return $posts ? $posts->toArray() : [];
    }

}