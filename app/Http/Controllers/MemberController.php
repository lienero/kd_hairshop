<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

// use App\Task를 하면 모델인 Task 클래스를 상속받는다.
use App\Member; // 테이블명 지정

class MemberController extends Controller
{
    public function member_register(request $request)
    {
        $mem_id = $request->input('id'); //댓글을 작성한 페이지로 돌아가기 위해 필요
        $mem_pw =  $request->input('password'); // 댓글작성인지 글작성인지 구분하기 위한 변수
        $mem_email = $request->input('email');

            
            $member= new Member;
            $member->mem_id = $mem_id;
            $member->mem_pw  = Hash::make($mem_pw);
            $member->mem_email = $mem_email;
            $member->save();

        return redirect("/login/login");
    }
    public function member_login(request $request){
        $mem_id = $request->input('id'); //댓글을 작성한 페이지로 돌아가기 위해 필요
        $mem_pw = $request->input('password'); // 댓글작성인지 글작성인지 구분하기 위한 변수
        $mem_password = Hash::make($mem_pw);
        $members = Member::where('mem_id',$mem_id)->get();
        $id="addin";
        $password="qkqhajdcjddlek";

        foreach($members as $member){
            $id = $member -> mem_id;
            $password = $member -> mem_pw;
        
        }

        if($mem_id != $id){  
            return "아이디가 맞지 않습니다.";
        }else{
            if (Hash::check($mem_pw, $password)) {
                // 비밀번호가 맞다면 
              echo $mem_password;
              $request->session()->put('member_id', $mem_id);
              return redirect("/");
            }else{
                
                return "비밀번호가 다릅니다.";
            }

        }
       
           
    }
}
