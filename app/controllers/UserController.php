<?php

class UserController extends \BaseController
{
    /**
     * CSRF protection
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', ['only' => ['login', 'create']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) {
            
            return View::make('_layouts.default.partials.home');
        }
        return View::make('_layouts.default.guest_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function selectModel()
    {
        
        return View::make('create.model_list');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $validator = Validator::make(Input::all(), User::$rulesSignUp);
        if ($validator->fails()) {
            return Redirect::to('/')->withInput(Input::except('password', 'password_confirmation'))->withErrors($validator);
        } else {
            $data = Input::all();
            $user = new User;
            $user->fname = $data['fname'];
            $user->lname = $data['lname'];
            $user->email = $data['email'];
            $user->phone_number = $data['phone_number'];
            $user->password = Hash::make($data['password']);
            $user->remember_token = $data['_token'];
            $user->save();

            Flash::success('Your account has been successfully created!');
            return Redirect::back();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function login()
    {
        $validator = Validator::make(Input::all(), User::$rulesLogIn);
        if ($validator->fails()) {
            return Redirect::to('/')->withInput(Input::except('password'))->withErrors($validator);
        } else {
            $data = Input::all(); //only username and password
            //username
            if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password']))) {
                return Redirect::to('/');
            } else {
                Flash::warning('Wrong username/password.');
                return Redirect::back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        Flash::success('You have been logged out.');
        return Redirect::to('/');
    }

}
