<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaksi.daftarTransaksi', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $vehicles = Vehicle::all();
        return view('transaksi.peminjaman', compact('users', 'vehicles'));
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
                'userId' => ['required','exists:users', 'id'],
                'vehicleId' => ['required','exists:vehicles', 'id'],
                'startDate' => ['required', 'date'],
                'endDate' => ['required', 'date'],
            ],
            [
                'endDate.after' => 'Tanggal lahir harus diisi sesudah hari ini',
            ]
        );

        // $getValue = Transaction::whereBetween('date', [$request->startDate.' 00:00:00',$request->endDate.' 23:59:59'])->get();

        $getPrice = Vehicle::find($request->vehicleId);
        $getPriceValue = $getPrice->dailyPrice;

        dd($getPriceValue);

        // Transaction::create([
        //     'userId' => $request->userId,
        //     'vehicleId' => $request->vehicleId,
        //     'startDate' => $request->startDate,
        //     'endDate' => $request->endDate,
        //     'price' => $totalPrice,
        // ]);
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
