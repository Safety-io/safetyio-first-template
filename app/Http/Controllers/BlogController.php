<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View | Paginator
    {
        $blogs = Blog::all()->sortDesc();
        $blogs = Blog::paginate(10);
        $categories = Category::all();

        return view(
            'pages.blog',
            [
                'blogs' => $blogs,
                'categories' => $categories
            ]
        );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): \Illuminate\Contracts\View\View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $five_latest = DB::table('blogs')->latest()->limit(5)->get();
        $blog = DB::table('blogs')->find($id);

        return view(
            'pages.readBlog',
            [
                'blogs' => $blog,
                'latest' => $five_latest,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
    public function send_mail(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            // regex number
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'message' => 'required|min:10',
        ]);
        $data = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ];
        Mail::to('jeanluckawel45@gmail.com')->send(new contactMail($data));
        return back()->with('success', 'Nous vous répondrons dans les plus brefs délais.');
    }

    public function filterByCategory(string $name): \Illuminate\Contracts\View\View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $blogs = DB::table('blogs')
            ->where(
                'category_id',
                '=',
                DB::table('categories')
                    ->where('name', $name)
                    ->first()
                    ->id
            )->paginate()
        ;
        $categories = Category::all();

        return view(
            'pages.blog',
            [
                'blogs' => $blogs,
                'categories' => $categories,
                'selected_category' => $name
            ]
        );
    }

    public static function categoryHilightingColor(string $category): array
    {
        $background_color = '';
        $text_color = '';

        switch (ucfirst($category)) {
            case "Reseaux": {
                $background_color = "bg-green/[0.08]";
                $text_color = "text-green-500";
                break;
            }
            case "Programmation": {
                $background_color = "bg-blue/[0.08]";
                $text_color = "text-blue-500";
                break;
            }
            case "Autres": {
                $background_color = "bg-purple/[0.08]";
                $text_color = "text-purple-500";
                break;

            }
            case "Design": {
                $background_color = "bg-cyan/[0.08]";
                $text_color = "text-cyan-500";
                break;
            }
        }

        return array(
            'bg' => $background_color,
            'txt' => $text_color
        );
    }

}
