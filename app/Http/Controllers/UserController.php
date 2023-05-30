<?php

namespace App\Http\Controllers;

use App\Models\HotImage;
use App\Models\Post;
use App\Models\Student;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $data = Post::all();
        $img = HotImage::all();
        return view('index', compact('data', 'img'));
    }
    public function show($id)
    {
        $no = decrypt($id);
        $data = Post::find($no);
        return view('showData', compact('data'));
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|min:8',
        ]);
        if ($request->password == $request->confirmPassword) {
            $new = new Student();
            $new->name = $request->name;
            $new->email = $request->email;
            $new->password = Hash::make($request->password);
            $new->save();
            return redirect()->back()->with('success', 'Successfully Add New Account');
        } else {
            return redirect()->back()->with('error', 'Password and Confirm Password is not Match');
        }

    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
        ],
            [
                'email.required' => 'Email is Required',
                'email.email' => 'Please Enter Valid Email',
                'password.required' => 'Password is Required',
                'password.min' => 'Password Minimum 8 Characters',
                'password.max' => 'Password Maximum 16 Characters',
            ]
        );

        $check = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($check)) {
            return redirect()->route('user.dashboard')->with('success', 'Welcome to home page');
        }
        if (Auth::guard('admin')->attempt($check)) {
            return redirect()->route('admin.dashboard')->with('success', 'Welcome to home page');
        } else {
            return redirect()->back()->with('error', 'email and password invalid');
        }
    }
    public function logout()
    {
        if (Auth::guard('student')->user()) {
            Auth::guard('student')->logout();
        }
        if (Auth::guard('admin')->user()) {
            Auth::guard('admin')->logout();
        }
        return redirect()->route('home-page');
    }
    public function user_dashboard()
    {
        $data = Post::all();
        $img = HotImage::all();
        return view('dashboard', compact('data', 'img'));
    }
    public function admin_dashboard()
    {
        $data = Post::all();
        $img = HotImage::all();
        return view('admin_dashboard', compact('data', 'img'));
    }
    public function post_page()
    {
        return view('post_page');
    }
    public function post_create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images', $imageName);

        $newImage = new Post();
        $newImage->title = $request->title;
        $newImage->time = $request->time;
        $newImage->description = $request->description;
        $newImage->image = $imageName;
        $newImage->save();
        return redirect()->route('home-page')->with('success', 'Image Uploaded successfully.');
    }
    public function delete_item($id)
    {
        DB::delete('delete from posts where id = ?', [$id]);
        return redirect()->back();
    }
    public function hot_image()
    {
        $hot_images = HotImage::all();
        return view('hotImage', compact('hot_images'));
    }
    public function hot_image_create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('hot_images', $imageName);

        $newImage = new HotImage();
        $newImage->title = $request->title;
        $newImage->image = $imageName;
        $newImage->save();
        return redirect()->route('home-page')->with('success', 'Image Uploaded successfully.');

    }
    public function delete_hot_image($id)
    {
        DB::delete('delete from hot_images where id = ?', [$id]);
        return redirect()->back();
    }

    public function search(Request $request)
    {
        // echo $request->search;
        $data=Post::where('title', 'like', '%'.$request->search.'%')->get();
        return view('searchResult', compact('data'));
    }
}
