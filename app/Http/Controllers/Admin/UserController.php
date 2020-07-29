<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('index');
        return view('admin.users.manageUser')->with('users', User::all());
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if(Auth::user()->id == $id){
        //     return redirect()->route('admin.users.index')->with('warning', 'You are not allowed to edit yourself');
        // }

        $user = \App\User::find($id);
        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        // if(Auth::user()->id == $id){
        //     return redirect()->route('admin.users.index')->with('warning', 'You are not allowed to edit yourself');
        // }
        
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->roles);

        // dd($request->file('avatar'));

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }

        return redirect()->route('admin.users.index')->with('sukses', 'User has been updated');
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
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'You are not allowed to delete yourself');
        }

        // User::destroy($id);
        $user = User::find($id);

        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('admin.users.index')->with('sukses', 'User Has been deleted');
        }
        return redirect()->route('admin.users.index')->with('warning', 'This user cant be delete');
    }

    public function profile()
    {
        // echo 'gsgsgsg';
        return view('admin.users.profileAdmin')->with('user', Auth::user());
    }

    public function exportExcel()
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }

    public function exportPdf()
    {
        $user = \App\User::all();
        $pdf = PDF::loadView('export.userpdf', ['user' => $user])->setPaper('letter', 'landscape');
        return $pdf->download('user.pdf');
    }

}
