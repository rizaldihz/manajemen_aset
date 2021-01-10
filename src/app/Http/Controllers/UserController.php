<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Datatables;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function user_manajemen_view()
    {
        return view('user.manajemen');
    }
    public function user_populate()
    {
        $data = $this->userService->getAll();
            return Datatables::of($data)
                    ->removeColumn('id')
                    ->removeColumn('password')
                    ->editColumn('tipe', function($row) {
                        if(!$row->tipe) return '<span class="badge badge-success ">Admin</span>';
                        else return '<span class="badge badge-primary ">Biasa</span>';
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a class="text-info mr-2" href="javascript:toggleModalDetail(\''.$row->id.'\')"><i class="nav-icon i-Monitor-5 font-weight-bold "></i></a>
                        <a class="text-success mr-2 " href="javascript:showEdit(\''.$row->id.'\')" onClick><i class="nav-icon i-Pen-2 font-weight-bold "></i></a>
                        <a class="text-danger mr-2 " href="javascript:showDelete(\''.$row->id.'\')"><i class="nav-icon i-Close-Window font-weight-bold "></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'tipe'])
                    ->make(true);
    }
    public function user_import(Request $request)
    {
        $this->userService->importRequest($request);
        return redirect('user');
    }
    public function user_create(Request $request)
    {
        $this->userService->saveData($request);
        return redirect('user');
    }
}
