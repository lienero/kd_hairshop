@extends('layouts.main')
@section('content')
<br>
<div class="sliderAx h-auto">
  <div id="slider-1" class="container mx-auto">
    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
      style="background-image: url(/img/sliderbox1.jpg)">
      <div class="md:w-1/2">
        <p class="text-3xl font-bold">KD-hairshop</p>
        <p class="text-2xl mb-10 leading-none">あなたに合う最高のスタイルを...</p>
        <a href="/introduction"
          class="bg-gray-700 py-4 px-8 text-white font-bold uppercase text-xl rounded hover:bg-gray-200 hover:text-gray-700">詳しく</a>
      </div>
    </div>
  </div>
</div>
<!--appointment box-->
<div class="container mx-auto">
  <div class="grid grid-cols-2">
    <a href="/manager/appo_calender" class="">
      <div class="bg-gray-800 text-center text-2xl hover:bg-gray-200 hover:text-black font-bold">予約管理</div>
    </a>
    <a href="/manager/shift_calender">
      <div class="bg-gray-600 text-center text-2xl font-bold hover:bg-gray-200 hover:text-black font-bold">シフト管理</div>
    </a>
  </div>
</div>
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
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">
                                <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox ab">
                              </label></div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="text-sm leading-5 text-blue-900">09:00</div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">bomul1230</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">bomul1230@gmail.com</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">two-block</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">1500円</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Cancel</button>
                </td>
            </tr>        
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">
                                <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox ab">
                              </label></div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="text-sm leading-5 text-blue-900">09:00</div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">bomul1230</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">bomul1230@gmail.com</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">two-block</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">1500円</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Cancel</button>
                </td>
            </tr>
        </tbody>
      </table>  
  </div>
</div>  
<div class="container mx-auto kd_bg">
  <br>
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl ">
    <div class="md:flex fles-row">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:w-48" src="/img/magazine1.png">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding
          customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas
          you can use to find your first customers.</p>
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
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding
          customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas
          you can use to find your first customers.</p>
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
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding
          customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas
          you can use to find your first customers.</p>
      </div>
    </div>
  </div>
  <br>
</div>
@endsection