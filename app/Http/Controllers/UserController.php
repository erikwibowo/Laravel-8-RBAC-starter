<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = User::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div class="btn-group btn-group-sm"><button type="button" class="btn btn-primary" title="'.Lang::get('table.edit').' data">'.Lang::get('table.edit').'</button><button type="button" class="btn btn-danger" title="'.Lang::get('table.delete').' data">'.Lang::get('table.delete').'</button></div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $x['title']     = Lang::get('title.user.title');
        $x['data']      = User::get();
        return view('user.user', $x);
    }
}
