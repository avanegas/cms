<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use App\Category;
use App\Image;
use App\Post;
use App\Tag;
use App\User;

class SearchPosts extends Component
{
    public function render()
    {
        return view('livewire.search-posts', [
          'posts'=>Post::with(['comments','user', 'category', 'tags', 'image'])->orderBy('id','desc')->paginate(8)
          ]);
    }
}
