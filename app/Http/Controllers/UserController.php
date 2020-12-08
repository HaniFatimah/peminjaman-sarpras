<?php

namespace App\Http\Controllers;

use App\User;
use App\Jabatan;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        $auths = User::where('id', Auth::user()->id)->get();
        return view('user/index', compact('auths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'nullable',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $jabatans = Jabatan::all();
        return view('user/edit', compact('user', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Auth::user()->role_id == 3) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'nik' => 'required|max:16',
                'jabatan_id' => 'required',
                'avatar' => 'mimes:png,jpg,jpeg'
            ]);

            $file = $request->file('avatar');
            $tujuan_upload = 'image/upload/avatar';
            $file->move($tujuan_upload, $file->getClientOriginalName());

            User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'nik' => $request->nik,
                    'jabatan_id' => $request->jabatan_id,
                    'avatar' => $file->getClientOriginalName(),
                ]);
            return redirect('/user')->with('status', 'Your Profile Has Been Updated!');
        } else if (Auth::user()->role_id == 4) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'nipd' => 'required|max:11',
                'avatar' => 'mimes:png,jpg,jpeg'
            ]);

            $file = $request->file('avatar');
            $tujuan_upload = 'image/upload/avatar';
            $file->move($tujuan_upload, $file->getClientOriginalName());

            User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'nipd' => $request->nipd,
                    'avatar' => $file->getClientOriginalName(),
                ]);
            return redirect('/user')->with('status', 'Your Profile Has Been Updated!');
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'avatar' => 'mimes:png,jpg,jpeg'
            ]);

            $file = $request->file('avatar');
            $tujuan_upload = 'image/upload/avatar';
            $file->move($tujuan_upload, $file->getClientOriginalName());

            User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $file->getClientOriginalName(),
            ]);
            return redirect('/user')->with('status', 'Your Profile Has Been Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
