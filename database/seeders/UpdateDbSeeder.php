<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Page;
use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Page::truncate();
        Post::truncate();
        Category::truncate();
        $oldPages = DB::connection('mysql_2')->table('pages')->select('*')->get();

        foreach ($oldPages as $oldPage) {

            $category = Category::where('slug',$oldPage->tomlink)->first();

            if(!$category) {
                $category = new Category();
                $category->name = $oldPage->tomname;
                $category->image = 'categories/';
                $category->slug = $oldPage->tomlink;
                $category->save();
            }

            $subcategory = Category::where('slug', $oldPage->destlink)->first();
            if(!$subcategory) {
                 $subcategory = new Category();
                 $subcategory->parent_id = $category->id;
                 $subcategory->image = 'categories/';
                 $subcategory->name = $oldPage->destname;
                 $subcategory->slug = $oldPage->destlink;
                 $subcategory->save();

            }

            $page = new Page();
            $page->title = $oldPage->title;
            $page->meta_description = $oldPage->dscr;
            $page->slug = $oldPage->destlink;
            $page->image = 'pages/'.$oldPage->image;
            $page->mobile_image = 'pages/'. $oldPage->mobimage;
            $page->h1 = $oldPage->h1;
            $page->status = $oldPage->status == 'PUBLISHED' ? 1 : 0;
            $page->category_id = $subcategory->id;
            $page->main_link = $oldPage->boslink;
            $page->main_link_name = $oldPage->bosname;
            $page->top_text = $oldPage->tone;
            $page->h3 = $oldPage->h3;
            $page->middle_text = $oldPage->ttwo;
            $page->h3_2 = $oldPage->h32;
            $page->bottom_text = $oldPage->tthree;
            $page->distance = $oldPage->dest;

            $page->image_1 = 'pages/'.$oldPage->galimageone;
            $page->image_2 = 'pages/'.$oldPage->galimagetwo;
            $page->image_3 = 'pages/'.$oldPage->galimagethree;
            $page->image_4 = 'pages/'.$oldPage->galimagefour;

            $page->save();

        }

        $oldPosts = DB::connection('mysql_2')->table('posts')->select('*')->get();

        foreach ($oldPosts as $oldPost) {


            $post = new Post();
            $post->title = $oldPost->title;
            $post->slug = $oldPost->slug;
            $post->meta_description = $oldPost->dscr;
            $post->image = 'posts/'. $oldPost->image;
            $post->excerpt = $oldPost->excerpt;
            $post->body = $oldPost->body;
            $post->published = 1;
            $post->save();

        }



    }
}
