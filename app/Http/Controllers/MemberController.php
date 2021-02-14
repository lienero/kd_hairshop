<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

// use App\Task를 하면 모델인 Task 클래스를 상속받는다.
use App\Member; // 테이블명 지정

class MemberController extends Controller
{
    // 회원가입 메소드
    public function member_register(request $request)
    {
        $mem_id = $request->input('id'); 
        $mem_pw =  $request->input('password'); 
        $mem_email = $request->input('email');

        $member= new Member;
        $member->mem_id = $mem_id;
        $member->mem_pw  = Hash::make($mem_pw);
        $member->mem_email = $mem_email;
        $member->save();

        Alert::success('会員登録完了', '会員登録が完了されました。');

        return redirect("/login/login");
    }

    // 로그인 메소드
    public function member_login(request $request){
        $mem_id = $request->input('id'); 
        $mem_pw = $request->input('password'); 
        $mem_password = Hash::make($mem_pw);
        $members = Member::where('mem_id',$mem_id)->get();
        $id=NULL;
        $password=NULL;
        $email=NULL;
        $rank=NULL;

        foreach($members as $member){
            $id = $member -> mem_id;
            $password = $member -> mem_pw;
            $email = $member -> mem_email;    
            $rank = $member -> rank;       
        }

        if($mem_id != $id){
            Alert::warning('ID間違', 'IDが間違っています。');  
            return redirect("/login/login");
        }else{
            if (Hash::check($mem_pw, $password)) {
                if($rank == "manager"){
                    $request->session()->put('member_id', $mem_id);
                    $request->session()->put('email', $email);
                    $request->session()->put('rank', $rank);
                    Alert::success('管理者ログイン完了', 'ログインが完了されました。');
                    return redirect("/manager");
                }else{
                    $request->session()->put('member_id', $mem_id);
                    $request->session()->put('email', $email);
                    Alert::success('ログイン完了', 'ログインが完了されました。');
                    return redirect("/");
                }
            }else{
                Alert::warning('パスワード間違', 'パスワードが間違っています。');
                return redirect("/login/login");  
            }
        }           
    }

    // 로그아웃 메소드
    public function logout(request $request)
    {
        $request->session()->forget('member_id');
        $request->session()->forget('email');
        if(session('rank')){
            $request->session()->forget('rank'); 
        }
        
        Alert::success('ログアウト完了', 'ログアウトが完了されました。');

        return redirect("/");
    }

    // 회원탈퇴 메소드
    public function delete_member(Request $request) 
    {
        if(session('member_id')){
            $mem_id = session('member_id');
            Member::where('mem_id',$mem_id)->delete();
            $request->session()->forget('member_id');
            $request->session()->forget('email');
            if(session('rank')){
                $request->session()->forget('rank'); 
            }
            Alert::success('会員退会', '会員退会が完了されました。');
            return redirect("/");
        } else {
            Alert::warning('会員退会失敗', '会員退会に失敗しました');
            return redirect("/mypage");
        }
   }
    
}
