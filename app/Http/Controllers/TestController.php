<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\AdminUser;
use Session;

class TestController extends Controller
{
  public function index()
  {
    return view("auth/login");
  }
  public function about()
  {
    return view("about");
  }
  function login(Request $req)
  {
    return view("auth.login");
  }
  function signup(Request $req)
  {
    return view("auth.signup");
  }
  function signupPost(Request $req)
  {
    $forms = $req->validate([
      "email" => "required|unique:users,email|email",
      "fname" => "required|min:3|max:50|alpha",
      "lname" => "required|min:3|max:50|alpha",
      "password" => "required|min:7",
      "cpassword" => "required|same:password",
      "country" => "required",
      "gender" => 'required'
    ]);

    $email = $req->post("email");
    $password = $req->post("password");
    $fname = $req->post("fname");
    $lname = $req->post("lname");
    $gender = $req->post("gender");
    $country = $req->post("country");

    $user = new AdminUser();
    $user->email = $email;
    $user->password = $password;
    $user->fname = $fname;
    $user->lname = $lname;
    $user->gender = $gender;
    $user->country = $country;

    $user->save();
    return redirect("/login");
  }

  function loginPost(Request $req)
  {
    $email = $req->post("email");
    $password = $req->post("password");

    $req->validate([
      "email" => "required|email",
      "password" => "required",
    ]);

    $user = AdminUser::where("email", '=', $email)->where("password", '=', $password)->select("id", "fname","lname", "email")->first();
    if (empty($user)) {
      $req->session()->flash("error", "Invalid Credentials");
      return redirect("/login");
    } else {
      $req->session()->put("user", $user);
      return redirect('/home');
    }
  }
  function home(Request $req)
  {
    echo "<pre>";
    print_r($req->session()->get("user"));
    // return view("home");
  }
}