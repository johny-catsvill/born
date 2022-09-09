<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getSingle($destlink)
    {

        $page = Page::where('status',  1)
            ->whereHas('categoryId',  function ($query) use($destlink) {
                $query->where('slug', $destlink);
            })->firstOrFail();

        return view('single')->with(compact('page'));
    }

    public function sitemap()
    {
        $pages = Page::orderBy('updated_at', 'desc')
            ->where('status', 'PUBLISHED')
            ->get();

        $posts = Post::
        orderBy('updated_at', 'desc')
            ->get();
        return view('sitemap', compact('posts','pages'))
            ->header('Content-Type', 'text/xml');
    }

    public function prices() {
        return view('prices');
    }

    public function contactUs(Request $request) {

        if($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'email'     => 'required|email',
                'phone'     => 'required',
                'body'      => 'required',
                'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
            ]);

            $data = array(
                'name' => $request->name,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'body'      => $request->body
            );

            \Mail::send('emails.notification', $data, function($message) use ($data){
                $message->from($data['email']);
                $message->to('info@goborntomove.com');
                $message->subject('Contact Request');
            });

            return redirect()->route('contact-us');
        }

        return view('contact-us');
    }

    public function faq() {
        return view('faq');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function getQuote() {
        return view('bookamove');
    }

    public function privacyPolicy() {
        return view('privacy-policy');
    }

    public function scholarship() {
        return view('scholarship');
    }

    public function newHampshireMoving() {

        $pagesconcord = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->where('name', 'LIKE', '%Concord%')
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'New Hampshire');
                    });
            })
            ->where('status', 1)
            ->get();

        $pagesmanchester = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->where('name', 'LIKE', '%Manchester%')
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'New Hampshire');
                    });
            })
            ->where('status', 1)
            ->get();

        $pagesnashua = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->where('name', 'LIKE', '%Nashua%')
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'New Hampshire');
                    });
            })
            ->where('status', 1)
            ->get();

        $pagesnh = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->where('name', 'LIKE', '%New Hampshire%')
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'New Hampshire');
                    });
            })
            ->where('status', 1)
            ->get();

        $posts = Post::latest()->paginate(3);

        return view('locations.newhampshire')
            ->with(compact('pagesconcord', 'pagesmanchester', 'pagesnashua', 'pagesnh', 'posts'));

    }

    public function connecticutMoving() {
        $pages = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->whereHas('parentId', function ($query) {
                    $query->where('name', 'Connecticut');
                });
            })
            ->where('status', '=', 1)
            ->get();

        return view('locations.connecticut')->with(compact('pages'));
    }

    public function localMoving() {
        $pages = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query->where('name', '!=', 'Cambridge')
                    ->whereHas('parentId', function ($query) {
                    $query->where('name', 'Local Moving');
                });
            })
            ->whereNull('main_link_name')
            ->where('status', 1)
            ->get();

        return view('localmoving')->with(compact('pages'));
    }

    public function interstateMoving() {
        $pages = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'Interstate');
                    });
            })
            ->where('status', 1)
            ->get();

        return view('interstate')->with(compact('pages'));
    }

    public function rhodeIslandMoving() {
        $pages = Page::latest()
            ->whereHas('categoryId', function ($query) {
                $query
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'Rhode Island');
                    });
            })
            ->where('status', 1)->get();
        return view('locations.rhodeisland')->with(compact('pages'));
    }

    public function bostonMovers() {
        $pages = Page::latest()
            ->where('main_link_name', 'Boston Movers')
            ->where('status', 1)
            ->get();
        return view('bostonmovers')->with(compact('pages'));
    }

    public function somervilleMoving() {
        $pages = Page::
            whereHas('categoryId', function ($query) {
                $query
                    ->whereHas('parentId', function ($query) {
                        $query->where('name', 'Local Moving');
                    });
            })
            ->where('status', 1)
            ->get()->sortByDesc('categoryId.name');

        return view('localmoving/somervillemoving')->with(compact('pages'));
    }
}
