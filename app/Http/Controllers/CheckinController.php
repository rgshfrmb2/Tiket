<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class CheckinController extends Controller
{
    public function index()
    {
        $check = Tiket::all();
        return view ('checkin.index', compact('check'));
    }

    public function agree(Request $request, $id)
    {
        $check = Tiket::find($id);

        $check->update([
            'status' => 'Sudah Check In',
            // 'catatan' => $request->catatan,
        ]);

        return redirect()->back();
    }

    public function filter(Request $request)
    {

        $check = Laporan::where('id_tiket',$request->name)->get();       
        $check->when($request->name, function ($query) use ($request) {
            return $query->where('id_tiket', 'like', '%'.$request->id_tiket.'%');
        });
        $id = Tiket::all();
        $idd = $request->name;
        return view('laporan.index', compact('check', 'id', 'idd', ));
    }

}
