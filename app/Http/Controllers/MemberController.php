<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controller\Controller;
// use App\User;

class MemberController extends Controller
{
    public function index()
    {   
        $data['title'] = "แสดงรายการสมาชิกทั้งหมด";
        $data['subtitle'] = "สามารถเพิ่ม/ลบ/แก้ไช ข้อมูลสมาชิกได้";
        $data['counter'] = "100";
        // $data['counter'] = "100";
        
        return view('member.index',$data);
    }

    public function add()
    {
        return view('member.add');
    }
}
