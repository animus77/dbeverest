<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sells;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        
        return view('admin.user', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $paid = Sells::where('user_id', $id)
            ->where('producto', 'pago')
            ->sum('impPagado');
        
        $debt = Sells::where('user_id', $id)
            ->sum('impDebe');
        
        $clientDebt = $debt - $paid;

        $balances = Sells::where('user_id', $id)
            ->orderBy('fecha', 'asc')
            ->get();

        $coins = Sells::where('user_id', $id)
            ->sum('cantidad');
        
        $users = User::find($id);

        return view('admin.balance', compact('balances', 'users', 'clientDebt','paid', 'coins'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.edit', compact('user', 'roles'));
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
        $request->validate([
            'id' => ['required', 'numeric'],
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->update($request->all());
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')
            ->with('info', 'usuario guardado con exito');
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
