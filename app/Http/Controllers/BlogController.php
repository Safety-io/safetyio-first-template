<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\Blog;
use Illuminate\Http\Request;
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
        return view('pages.blog', ['blogs' => $blogs]);

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
    public function show(Blog $blog): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $blog = Blog::find($blog->id);
        return view('pages.readBlog', ['blog' => $blog]);
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

}
