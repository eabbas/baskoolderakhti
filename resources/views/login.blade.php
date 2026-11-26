<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  
</head>
<body>
    @extends('header')
    @section('content')
     <main class = "max-w-[2100px] min-w-[320px] bg-[url('{{asset('assets/img/file_00000000780c81f4bdf8e7d80669e56b.png')}}')] bg-cover bg-center bg-no-repeat mx-auto pb-5 pt-10">
            <section class = "max-w-[800px] min-w-[320px] mx-auto max-lg:px-3">
                <div class="w-full flex flex-col  items-center justify-between bg-white px-10 py-3 rounded-[15px] border-1 border-gray-300 shadow-md">
                    <svg class = "size-10 fill-[#FBC830]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M224 48a80 80 0 1 1 0 160 80 80 0 1 1 0-160zm0 208A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 96h91.4c65.7 0 120.1 48.7 129 112H49.3c8.9-63.3 63.3-112 129-112zm0-48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zM504 312c0 13.3 10.7 24 24 24s24-10.7 24-24V248h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H552V136c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H440c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/></svg>
                    <div class="w-full flex flex-col gap-3 items-center mb-5">
                        <h2 class = "text-[30px] font-bold text-[#0E2E48]">ایجاد حساب کابری</h2>
                        <span class = "text-[17px] text-gray-600 max-lg:text-[15px] max-lg:text-center max-lg:leading-8">لطفا شماره موبایل و رمز خود را وارد کنید</span>
                    </div>
                    <div class="w-full">
                    <form class = "w-full flex flex-col gap-5" id='form' method = "POST" action="{{route('user.login')}}">
                    @csrf
                    <div class="w-full flex  gap-2 bg-white border-1 border-gray-200 items-center rounded-[15px]">
                        <div class="w-1/14 pr-5 max-md:w-2/14">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        </div>
                        <input class = "w-13/14 h-15 outline-none max-md:w-12/14 bg-white" name = "phoneNumber" id = "phoneNumber" placeholder = "شماره موبایل" type="text">
                    </div>
                    <div class="w-full hidden gap-3 flex" id = "code">
                         <div class="w-8/12 pr-5 flex gap-3 items-center border-1 border-gray-200 rounded-[15px]">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 48c44.2 0 80 35.8 80 80v64H144V128c0-44.2 35.8-80 80-80zM96 128v64H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H352V128C352 57.3 294.7 0 224 0S96 57.3 96 128zM64 240H384c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V256c0-8.8 7.2-16 16-16zm184 80c0-13.3-10.7-24-24-24s-24 10.7-24 24v64c0 13.3 10.7 24 24 24s24-10.7 24-24V320z"/></svg>
                            <input class = "w-13/14 h-15 outline-none  bg-white" name = "code" id = "" placeholder = "کد عبور" type="password">
                        </div>
                        <div id="counter" onclick = "sendcode('signin' , this)" class = "w-4/12 h-15 bg-[#0E2E48] text-white rounded-[15px] flex items-center justify-center cursor-pointer">دریافت کد</div>
                    </div>
                    <div class="w-full flex  gap-2 justify-between border-1 border-gray-200 items-center rounded-[15px]" id = "pass">
                        <div class="w-8/12 pr-5 flex gap-3 items-center ">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 48c44.2 0 80 35.8 80 80v64H144V128c0-44.2 35.8-80 80-80zM96 128v64H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H352V128C352 57.3 294.7 0 224 0S96 57.3 96 128zM64 240H384c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V256c0-8.8 7.2-16 16-16zm184 80c0-13.3-10.7-24-24-24s-24 10.7-24 24v64c0 13.3 10.7 24 24 24s24-10.7 24-24V320z"/></svg>
                            <input class = "w-13/14 h-15 outline-none bg-white" name = "password" id = "password" placeholder = "رمز ورود" type="password">
                        </div>
                        <div class="w-1/14 flex justify-center relative" onclick = "pass()">
                               <div class="w-8 h-[1px] bg-black absolute top-[11px] -translate-x-1/2 left-1/2 -rotate-14 " id = "line"></div>
                            <svg class = "size-6 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M118 373c-39.8-38.3-67.9-83.7-83.2-117c15.3-33.3 43.4-78.6 83.2-117c44.6-42.9 101.5-75 170-75s125.4 32.1 170 75c39.8 38.3 67.9 83.7 83.2 117c-15.3 33.3-43.4 78.6-83.2 117c-44.6 42.9-101.5 75-170 75s-125.4-32.1-170-75zM288 480c158.4 0 258-149.3 288-224C546 181.3 446.4 32 288 32S30 181.3 0 256c30 74.7 129.6 224 288 224zM192 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                        </div>
                    </div>

                    
                   <div class="w-full text-blue-500 max-md:text-[14px]">
                    <span id = "passing1" class = "cursor-pointer" onclick = "login_stat(this)">ورود با رمز یک بار مصرف</span>
                    <span class = "hidden cursor-pointer" id = "passing2" onclick = "login_stat(this)">ورود با رمز عبور</span>
                   </div>
                    <button class = "w-full bg-[#FBC830] flex items-center justify-center rounded-[40px] h-13 text-[#0E2E48] text-[18px] gap-4 font-bold cursor-pointer">
                        <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M272 49.7V464H112l0-371.2L272 49.7zM320 464V42.4C320 19 301 0 277.6 0c-3.7 0-7.4 .5-11 1.5L99.5 46.4C78.6 52.1 64 71.1 64 92.8V464H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64 96h16H272h48V464zM224 288c13.2 0 24-14.4 24-32s-10.8-32-24-32s-24 14.4-24 32s10.7 32 24 32zM352 112H456c4.4 0 8 3.6 8 8V488c0 13.3 10.7 24 24 24h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H512V120c0-30.9-25.1-56-56-56H352v48z"/></svg>
                        <span>ورود</span>
                    </button>
                    </form>
                    <div class="w-full flex gap-4 h-20 bg-slate-100 rounded-[15px] items-center justify-center mt-5">
                        <span class = "text-gray-500 text-[18px] max-md:text-[14px]" > حساب کاربری ندارید؟</span>
                        <a class = "flex gap-2 items-center text-blue-500 max-md:text-[14px]" href="{{url('signup')}}">
                            <span>ثبت نام کنید</span>
                            <svg class = "size-5 fill-blue-500 max-md:size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            </section>
    </main>

    <footer class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#061F35] flex flex-col items-center gap-8 max-lg:px-3 max-lg:gap-4">
        <div class="w-[94.5%] flex mx-auto text-white pt-5 max-lg:flex-col max-lg:items-end">

         <div class="w-[25%] flex flex-col  justify-start  gap-5  max-lg:w-full max-lg:justify-center max-lg:items-center ">
                <div class="flex gap-3 items-center max-lg:flex-col">
                    <div class="flex flex-col gap-2  max-lg:items-center">
                        <span class = "text-[25px]">ترازوی درختی</span>
                        <p class = "text-gray-400 text-[18px]">دقت و اندازه گیری در کسب و کارتان</p>
                    </div>
                    <svg class = "size-10 fill-white order-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M384 64c0 29.8-20.4 54.9-48 62V480H528c8.8 0 16 7.2 16 16s-7.2 16-16 16H320 112c-8.8 0-16-7.2-16-16s7.2-16 16-16H304V126c-27.6-7.1-48-32.2-48-62H112c-8.8 0-16-7.2-16-16s7.2-16 16-16H264.6C275.6 12.9 296.3 0 320 0s44.4 12.9 55.4 32H512c8.8 0 16 7.2 16 16s-7.2 16-16 16H384zm56.7 298.3C457.8 375.1 482.9 384 512 384s54.2-8.9 71.3-21.7C600.4 349.5 608 334.2 608 320H416v-1.6l0 .1V320c0 14.2 7.6 29.5 24.7 42.3zm71.3-215L426.3 288H597.7L512 147.3zM384 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96s-128-43-128-96zM32 320c0 14.2 7.6 29.5 24.7 42.3C73.8 375.1 98.9 384 128 384s54.2-8.9 71.3-21.7C216.4 349.5 224 334.2 224 320H32v-1.6l0 .1V320zm10.3-32H213.7L128 147.3 42.3 288zM128 416C57.3 416 0 373 0 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96zM320 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></svg>
                </div>
                <div class="flex gap-4  ">
                    <div class="w-[50px] h-[50px] rounded-full flex items-center justify-center border max-lg:w-[45px] max-lg:h-[45px]">
                        <svg class = "size-8 fill-white max-lg:size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>
                    </div>
                    <div class="w-[50px] h-[50px] rounded-full flex items-center justify-center border max-lg:w-[45px] max-lg:h-[45px]">
                        <svg class = "size-8 fill-white max-lg:size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </div>
                    <div class="w-[50px] h-[50px] rounded-full flex items-center justify-center max-lg:w-[45px] max-lg:h-[45px] ">
                        <svg class = "size-13 fill-white max-lg:size-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </div>
                </div>
            </div>    
            <div class="w-[25%] flex flex-col  max-lg:w-full max-lg:gap-1 max-lg:order-2 ">
                <span class = "text-[25px] text-white mb-1 max-lg:hidden">دسترسی سریع</span>
                <div class="flex gap-3 text-[25px]  items-center lg:hidden">
                    <div class="grid grid-cols-2 gap-[1px]">
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                    </div>
                    <span>دسترسی سریع</span>
                </div>
                <a href = "{{route('firstpage')}}" class = "text-gray-400 text-[20px]">صفحه اصلی</a>
                <a href = "#" class = "text-gray-400 text-[20px]">محصولات</a>
                <a href = "#" class = "text-gray-400 text-[20px]">درباره ما</a>
                <a href = "#" class = "text-gray-400 text-[20px]">تماس باما</a>
            </div>
            <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1  max-lg:order-2">
                <div class="flex items-center lg:hidden text-[25px] gap-3 ">
                    <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0c17 0 33.6 1.7 49.8 4.8c7.9 1.5 21.8 6.1 29.4 20.1c2 3.7 3.6 7.6 4.6 11.8l9.3 38.5C350.5 81 360.3 86.7 366 85l38-11.2c4-1.2 8.1-1.8 12.2-1.9c16.1-.5 27 9.4 32.3 15.4c22.1 25.1 39.1 54.6 49.9 86.3c2.6 7.6 5.6 21.8-2.7 35.4c-2.2 3.6-4.9 7-8 10L459 246.3c-4.2 4-4.2 15.5 0 19.5l28.7 27.3c3.1 3 5.8 6.4 8 10c8.2 13.6 5.2 27.8 2.7 35.4c-10.8 31.7-27.8 61.1-49.9 86.3c-5.3 6-16.3 15.9-32.3 15.4c-4.1-.1-8.2-.8-12.2-1.9L366 427c-5.7-1.7-15.5 4-16.9 9.8l-9.3 38.5c-1 4.2-2.6 8.2-4.6 11.8c-7.7 14-21.6 18.5-29.4 20.1C289.6 510.3 273 512 256 512s-33.6-1.7-49.8-4.8c-7.9-1.5-21.8-6.1-29.4-20.1c-2-3.7-3.6-7.6-4.6-11.8l-9.3-38.5c-1.4-5.8-11.2-11.5-16.9-9.8l-38 11.2c-4 1.2-8.1 1.8-12.2 1.9c-16.1 .5-27-9.4-32.3-15.4c-22-25.1-39.1-54.6-49.9-86.3c-2.6-7.6-5.6-21.8 2.7-35.4c2.2-3.6 4.9-7 8-10L53 265.7c4.2-4 4.2-15.5 0-19.5L24.2 218.9c-3.1-3-5.8-6.4-8-10C8 195.3 11 181.1 13.6 173.6c10.8-31.7 27.8-61.1 49.9-86.3c5.3-6 16.3-15.9 32.3-15.4c4.1 .1 8.2 .8 12.2 1.9L146 85c5.7 1.7 15.5-4 16.9-9.8l9.3-38.5c1-4.2 2.6-8.2 4.6-11.8c7.7-14 21.6-18.5 29.4-20.1C222.4 1.7 239 0 256 0zM218.1 51.4l-8.5 35.1c-7.8 32.3-45.3 53.9-77.2 44.6L97.9 120.9c-16.5 19.3-29.5 41.7-38 65.7l26.2 24.9c24 22.8 24 66.2 0 89L59.9 325.4c8.5 24 21.5 46.4 38 65.7l34.6-10.2c31.8-9.4 69.4 12.3 77.2 44.6l8.5 35.1c24.6 4.5 51.3 4.5 75.9 0l8.5-35.1c7.8-32.3 45.3-53.9 77.2-44.6l34.6 10.2c16.5-19.3 29.5-41.7 38-65.7l-26.2-24.9c-24-22.8-24-66.2 0-89l26.2-24.9c-8.5-24-21.5-46.4-38-65.7l-34.6 10.2c-31.8 9.4-69.4-12.3-77.2-44.6l-8.5-35.1c-24.6-4.5-51.3-4.5-75.9 0zM208 256a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 96a96 96 0 1 1 0-192 96 96 0 1 1 0 192z"/></svg>
                    <span>خدمات مشتریان</span>
                </div>
                <span class = "text-[25px] text-white mb-1 max-lg:hidden">خدمات مشتریان</span>
                <a href = "#" class = "text-gray-400 text-[20px]">پرسش های متداول</a>
                <a href = "#" class = "text-gray-400 text-[20px]">شرایط بازگشت کالا</a>
                <a href = "#" class = "text-gray-400 text-[20px]">پیگیری سفارشات</a>
                <a href = "#" class = "text-gray-400 text-[20px]">محوه ارسال</a>
            </div>
            
            
            <div class="w-full h-[0.5px] bg-white my-5 lg:hidden order-1"></div>
           <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1 ">
                <div class="w-full h-[0.5px] bg-white my-5 lg:hidden"></div>
                <div class="w-full flex justify-between items-center max-lg:flex-row-reverse max-lg:justify-end max-lg:gap-3 text-[20px]">
                    <span>عضویت در خبرنامه</span>
                    <svg class = "size-10 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                </div>
                <div class="w-full text-[18px]">
                    <p class = "text-right mb-2">با عضویت در خبرنامه با جدیدترین محصولات با خیر بشین</p>
                </div>
                <form action="#" method = "post">
                    <div class="w-full flex bg-white rounded-[20px] overflow-hidden ">
                        <input class = "w-[90%] h-[45px]" type="text" placeholder = "ایمیل خود را وارد کنید">
                        <div class="w-[50px] bg-[#D99A16]  rounded-full flex items-center justify-center max-lg:m-1  max-lg:h-[40px]">
                            <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="w-[95%] h-[0.5px] bg-white"></div>
         <div class="w-[95%] flex items-end justify-between pb-5 text-white  max-lg:flex-col max-lg:items-center max-lg:gap-2 ">
            <div class="flex w-[62%] justify-between  max-lg:w-full">
                <div class="flex gap-2 max-lg:text-[18px] items-center  max-lg:justify-end  text-[20px] max-lg max-lg:text-center max-lg:leading-8">
                    <svg class = "size-5 fill-white max-lg:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                    <span>طراحی و توسعه وب سایت،اندیشه گران طراحان دیجیتال فائوس</span>
                </div>
                <div class="flex flex-col gap-2 max-lg:hidden">
                    <span>کلیه خقوق این سایت متعلق به باسکول درختی میباشد</span>
                    <span>طراحی وب سایت و مشاوره کسب و کار انلاین</span>
                </div>
            </div>
           
            <div class="flex gap-2 ">
                <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
                <span class = "text-[20px] max-lg:text-[18px]">09145718265</span>
            </div>
        </div>
        </div>
    </footer>
<script>

      function pass(){
         let password = document.getElementById('password')
         let line = document.getElementById('line')
         console.log(password.type)
         if (password.type == "text") {
            password.type = "password"
        }else{
            password.type = "text"
         }
         line.classList.toggle('hidden')
      }

      function bar_menu(){
        let menu = document.getElementById('menu')
        let document_black = document.getElementById('document_black')
        console.log(document_black)
        menu.classList.toggle('translate-x-150')
        document_black.classList.toggle('invisible')
        document_black.classList.toggle('opacity-0')
    }
    
    function login_stat(el){
        let pass1 = document.getElementById('passing1')
        let pass2 = document.getElementById('passing2')
        let pass = document.getElementById('pass')
        let code = document.getElementById('code')
        pass1.classList.toggle('hidden')
        pass2.classList.toggle('hidden')
        pass.classList.toggle('hidden')
        code.classList.toggle('hidden')
    }

    function sendcode(state , el){
        let innner
        let counter=document.getElementById('counter');
        let phoneNumber=document.getElementById('phoneNumber')
        innner = el.innerHTML
        el.innerHTML = `<div class="w-5 h-5 border-2 border-white border-t-blue-500 rounded-full animate-spin"></div>`
        el.removeAttribute('onclick')
        phoneNumber = phoneNumber.value
        if(phoneNumber!=""){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url:"{{route('user.send_code_login')}}",
                type:"post",
                dataType:"json",
                data:{
                    'phoneNumber':phoneNumber,
                    'state':state,

                },
                success:function(data){
                    if(data){
                        alert('کد ارسال شد');
                        counterLoginButton(phoneNumber);
                    }else{ 
                    el.setAttribute('onclick' ,"sendcode('signin' , this)")    
                    el.innerHTML = innner
                    alert("شما از قبل ثبت نام نکرده اید");
                }
            },
            error:function(){
                alert("'کد ارسال نشد بعدا امتحان کنید'");
            }
        })
    }else{
            el.innerHTML = innner
            el.setAttribute('onclick' ,"sendcode('signin' , this)")
            alert('شماره تلفن خود را وارد کنید');

        }
    }
    

    function counterLoginButton(phoneNumber) {
        counter.classList.add('cursor-no-drop')
        counter.classList.remove('cursor-pointer')
        counter.classList.remove('hover:bg-[#0E2E48]')
        counter.classList.add('hover:bg-[#0E2E48]/50')
        counter.classList.remove('bg-[#0E2E48]')
        counter.classList.add('bg-[#0E2E48]/50')
        counter.setAttribute('disabled', true)
        counter.removeAttribute('onclick')
        counter.setAttribute('dir', 'ltr')
        let count = 120
        let result = setInterval(() => {
            let minute = Math.floor(count / 60)
            let seconds = count % 60
            count -= 1
            if (count < 0) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{ route('user.removeActivationCode') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'phoneNumber': phoneNumber
                    },
                    success: function(data) {
                        console.log(data)
                        counter.classList.remove('cursor-no-drop')
                        counter.classList.add('bg-[#0E2E48]')
                        counter.classList.remove('bg-[#0E2E48]/50')
                        counter.classList.add('cursor-pointer')
                        counter.classList.add('hover:bg-[#041420]')
                        counter.classList.remove('hover:bg-[#d52b4a]/50')
                        counter.removeAttribute('disabled')
                        counter.setAttribute('onclick','sendcode("login" , this)')
                        counter.removeAttribute('dir')
                        counter.innerText = "ارسال مجدد"
                    },
                    error: function() {
                        showMessage('open')
                        element.innerHTML = `
                            <span>❌</span>
                            <span class="text-shadw-lg">خطا در دریافت اطلاعات!</span>
                        `
                        message.children[0].appendChild(element)
                        setTimeout(() => {
                            showMessage('close')
                        }, 2500)
                    }
                })
                clearInterval(result)
            }
            counter.innerText = minute.toString().padStart(2, "0") + " : " + seconds.toString().padStart(2,
                "0");
        }, 1000)
    }
   
    function addlocalProducts(){
        let form =document.getElementById('form');
        let jsonProArray = JSON.parse(localStorage.getItem('products'));

        console.log(jsonProArray);

        let productsString = JSON.stringify(jsonProArray);

        let inputlogin = document.createElement('input');
        let inputsignup = document.createElement('input');
        inputlogin.setAttribute('name', 'products[]');
        inputlogin.setAttribute('type', 'hidden');
        inputlogin.setAttribute('value', productsString); 
        inputsignup.setAttribute('name', 'products');
        inputsignup.setAttribute('type', 'hidden');
        inputsignup.setAttribute('value', productsString); 

        form.children[0].appendChild(inputlogin); 
    }
    addlocalProducts();

</script>

@endsection