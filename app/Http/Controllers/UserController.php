<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $rules = [
        'email' =>'required',
        'password'=>'required'
    ];
    private $message =[
        'email.required' => ['status'=>false,'message'=>'Por ingrese Usuario'],
        'password.required' => ['status'=>false,'message'=>'Por ingrese su Contraseña'],
       
    ];
    public function index(){return view('pages.module.dashboard');}
    public function login(){return view('pages.module.login');}
    public function enrolled(){return view('pages.module.enrolled');}
    public function low(){return view('pages.module.low');}
    public function numbered(){return view('pages.module.numbered');}
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
        $validate = Validator::make($request->all(),$this->rules,$this->message);
        if($validate->fails()) {
            $response = $validate->errors();
            return response()->json($response);
        }
        $credenciales = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return response()->json([
                'route'=>[[
                        'status' => true,
                        'route' => '/dashboard',
                        ]
                    ]
                ]);
        }
        return response()->json([
            'login'=>[[
                    'status' => false,
                    'message' => 'Usuario o contraseña incorrectos',
                    ]
                ]
        ]);
    }    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
