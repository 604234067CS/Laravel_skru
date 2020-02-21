<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $data['title'] = "แสดงรายการสมาชิกทั้งหมด";
        $data['subtitle'] = "สามารถเพิ่ม/ลบ/แก้ไข ข้อมูลสมาชิกได้";
        $data['counter'] = 100;

        return view('member.index', $data);
    }

    public function add(){
        return view('member.add');
    }
}
