<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getAllUser() {
        // $user = DB::table('users')
        //     ->select (
        //         'id as id',
        //         'username as username',
        //         'email as email',
        //         'alamat as alamat',
        //     )
        //     ->orderBy('username', 'asc')
        //     ->get();

        //     return DataTables::of($user)
        //     ->addColumn('action', function($user) {
        //         '
        //         <div class="flex-row">
        //             <a
        //                 href="' . route('userView',  $user->id) .'
        //                 type="button"
        //                 class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        //                 Show
        //             </a>
        //             <button
        //                 class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 border border-red-400 rounded shadow">
        //                 Delete
        //             </button>
        //         </div>
        //         ';
        //     })
        //     ->make(true);

        //     return view('user.getAllUser');

        if (request()->ajax()) {
            $query = User::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
     b                <div class="flex-row">
                        <a
                            href="'.route('userView',  $item->id).'
                            type="button"
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mr-2 border border-gray-400 rounded shadow">
                            Show
                        </a>
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 border border-red-400 rounded shadow">
                            Delete
                        </button>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('user.getAllUser');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('user.daftarPengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => ['required', 'string', 'max:255'],
                'fullname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'alamat' => ['required', 'string', 'max:255'],
                'birthdate' => ['required', 'date'],
                'phoneNumber' => ['required', 'string', 'max:255'],
            ],
            [
                'username.required' => 'Username harus diisi',
                'username.unique' => 'Username telah digunakan',
                'birthdate.before' => 'Tanggal lahir harus sebelum hari ini',
            ]

        );

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber,
        ]);

        return view('user.daftarPengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.infoPengguna');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
