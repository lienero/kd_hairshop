@extends('layouts.main')
@extends('layouts.sliderbox')
@extends('layouts.nav_bar_manager')
@section('content')
@if(session('rank'))
<form action="/manager" method="POST">
  {{-- @csrf : CSRF(크로스-사이트 요청 위조 공격)으로부터 보호 --}}
  @csrf
<div class="container mx-auto">
  <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3">
      <table class="min-w-full">
        <p class="text-black text-2xl font-bold">本日の予約リスト</p>
          <thead>
              <tr>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                      <label class="flex items-center">
                          <input type="checkbox" class="form-checkbox check-all" name="all">
                          <span class="ml-2">Check-All</span>
                      </label>
                  </th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                      Time</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                      ID</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                      Mail-Address</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                      hair-Cut</th>
                  <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                      Designer</th>
                  <td class="px-6 py-4 whitespace-no-wrap text-right border-b-2 border-gray-300 text-sm leading-5">
                      <button type="submit" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">All-Cancel</button>
                  </td>
              </tr>
          </thead>
          <tbody class="bg-white">
            @foreach($appoints as $appoint)
            <?php list($st_date, $st_time) = explode(" ", $appoint->appoint_st); ?>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox ab" name="checked[]" value="{{$appoint->No}}">
                                </label>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="text-sm leading-5 text-blue-900">{{$st_time}}</div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                    {{$appoint->mem_id}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                    {{$appoint->mem_email}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                    {{$appoint->hair_style}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                    {{$designer_name[$appoint->designer]}}
                </td>
                <input type="hidden" name="date" value="{{$date}}">
                <input type="hidden" name="delNo" value="{{$appoint->No}}">
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                    <button type="submit" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Cancel</button>
                </td>
            </tr>
            @endforeach
            <tr>
              <td>
              </td>
              <td>
              </td>
              <td>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900  text-sm leading-5 text-right">
                  <a href="/manager?page={{ $startPage }}">◀◀</a>
                <span class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 text-sm leading-5">
                  <?php 
                  if($pageNum == 1) {
                    echo "◀</span>";
                  } else { 
                    echo '<a href="/manager?page='.($pageNum-1).'">◀</a></span>';
                  } 
                  if($pageNum == $totalPage) { 
                    echo '<span class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 text-sm leading-5">▶</span>';
                  } else { 
                    echo '<span class="px-6 py-4 whitespace-no-wrap border-b text-blue-900  text-sm leading-5"><a href ="/manager?page='.($pageNum+1).'">▶</a></span>';
                  } ?>
                  <a href = "/manager?page={{ $endPage }}">▶▶</a>
              </td>
            </tr>
        </tbody>
      </table>  
  </div>
</div>
</form>  
<div class="container mx-auto kd_bg">
  <br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl ">
      <div class="md:flex fles-row">
        <div class="md:flex-shrink-0">
          <img class="h-48 w-full object-cover md:w-48" src="/img/magazine1.png">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-base text-indigo-500 font-bold">MEN's FASHION</div>
          <a href="naver.com" class="block mt-1 text-sm leading-tight text-black hover:underline font-semibold">2021年３月号</a>
          <p class="mt-2 text-gray-500 font-semibold overflow-hidden">おしゃれ男子に向けた最新ファッションを中心に、流行を取り入れた最旬スタイルから人気ブランド＆新作アイテム、ハイセンスなコーディネートなど紹介しています。
        </div>
      </div>
    </div>
  
    <br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
      <div class="md:flex">
        <div class="md:flex-shrink-0">
          <img class="h-48 w-full object-cover md:w-48" src="/img/magazine2.png">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-base text-indigo-500 font-bold">FASHION AGE</div>
          <a href="naver.com" class="block mt-1 text-sm leading-tight text-black hover:underline font-semibold">2021年３月号</a>
          <p class="mt-2 text-gray-500 font-semibold overflow-hidden">「アラサーからはきれいな女らしさに乗り換える！」<br>
            シンプルだけれど女らしい、ベーシックだけれど更新感がある、そんなスタイルがある</p>
        </div>
      </div>
    </div>
  
    <br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
      <div class="md:flex">
        <div class="md:flex-shrink-0">
          <img class="h-48 w-full object-cover md:w-48" src="/img/magazine3.png">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-base text-indigo-500 font-bold">FASHION BEAUTY</div>
          <a href="naver.com" class="block mt-1 text-sm leading-tight text-black hover:underline font-semibold">2021年３月号</a>
          <p class="mt-2 text-gray-500 font-semibold overflow-hidden">「アラサーからはきれいな女らしさに乗り換える！」<br>
            シンプルだけれど女らしい、<br>ベーシックだけれど更新感がある</p>
        </div>
      </div>
    </div>
    <br>
  </div>
@else
관리자 권한 없음
@endif
@endsection