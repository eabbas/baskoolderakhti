<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/stylehome.css')}}">
</head>
<style>
    .transition_normal {
        transition: all 0.3s ease;
    }
</style>
<body class = "relative">
    <div class="w-full h-dvh top-0 fixed z-50 bg-black/50 invisible opacity-0 transition-all duration-300  " onclick = "bar_menu()" id = "document_black"></div>
    <div class="fixed w-70 h-[97%] bg-[#091E2F] z-50 p-3 text-white flex flex-col bottom-0 m-3 top-1 rounded-[15px] translate-x-150 transition-all duration-300 gap-5" id = "menu">
            <div class="w-full  flex items-center justify-between  ">
                <div class="flex items-center text-[22px] gap-3 text-nowrap  ">
                    <img class = "w-15" src="{{asset('assets/img/file_00000000527881f4835e03acef97b338.png')}}" alt="">
                    <span>ترازوی درختی</span>
                </div>
                <xml version="1.0" encoding="utf-8">
                    <svg  onclick = "bar_menu()" class = "size-7 fill-white" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"/></svg>
            </div>
            <div class="w-full flex flex-col overflow-y-auto gap-5 ">

                <a href = "{{route('firstpage')}}" class="w-full max-h-20 flex items-center gap-3  text-[20px]   ">
                    <svg class = "size-7 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z"/></svg>
                    <span>صفحه اصلی</span>
                </a>
                <div class="w-full bg-gray-700 h-[1px]"></div>

        <a href = "#" class="w-full flex items-center justify-between max-h-20 ">
            <div class="flex flex-row-reverse gap-3  text-[20px]">
                <span>محصولات</span>
                <xml version="1.0" encoding="utf-8">
                    <svg class = "size-8 fill-white" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M21 7.5L17 9.5M12 12L3 7.5M12 12V21.5M12 12C12 12 14.7426 10.6287 16.5 9.75C16.6953 9.65237 17 9.5 17 9.5M17 9.5V13M17 9.5L7.5 4.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
            </div>
            <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
        <div class="w-full bg-gray-600 min-h-[1px]"></div>
        <a href = "#" class="w-full flex items-center justify-between max-h-20 ">
            <div class="flex gap-3  text-[20px]">
                <svg class = "size-7 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M32 229.5V80c0-8.8 7.2-16 16-16H197.5c8.5 0 16.6 3.4 22.6 9.4l176 176c12.5 12.5 12.5 32.8 0 45.3L262.6 428.1c-12.5 12.5-32.8 12.5-45.3 0l-176-176L18.7 274.7l22.6-22.6c-6-6-9.4-14.1-9.4-22.6zm-32 0c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80V229.5zM112 168a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                <span>برندها</span>
            </div>   
            <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        </a>
        <div class="w-full bg-gray-600 min-h-[1px]"></div>
        <a href = "#" class="w-full flex items-center justify-between max-h-20">
            <div class="flex gap-3  text-[20px]">
                <svg class = "size-7 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M322.3 268c9.4 2.6 19.3 4 29.7 4c60.5 0 109.8-48 111.9-108l-25.3 25.3c-12 12-28.3 18.7-45.3 18.7H368c-35.3 0-64-28.7-64-64V118.6c0-17 6.7-33.3 18.7-45.3l0 0L348 48.1C288 50.1 240 99.5 240 160c0 10.3 1.4 20.3 4 29.7c4.6 16.6-.2 34.4-12.4 46.6L57.1 410.7c-5.9 5.8-9.1 13.8-9.1 22.1C48 450 62 464 79.2 464c8.3 0 16.2-3.3 22.1-9.1L275.7 280.4c12.2-12.2 30-16.9 46.6-12.4zM424.6 39.4l-67.9 67.9c-3 3-4.7 7.1-4.7 11.3V144c0 8.8 7.2 16 16 16h25.4c4.2 0 8.3-1.7 11.3-4.7l67.9-67.9c7.2-7.2 19.3-5.9 23.7 3.3c10.1 21 15.7 44.5 15.7 69.3c0 88.4-71.6 160-160 160c-14.7 0-28.9-2-42.3-5.7L135.2 488.8c-14.9 14.9-35 23.2-56 23.2C35.5 512 0 476.5 0 432.8c0-21 8.3-41.1 23.2-56L197.7 202.3C194 188.9 192 174.7 192 160C192 71.6 263.6 0 352 0c24.8 0 48.3 5.7 69.3 15.7c9.2 4.4 10.5 16.5 3.3 23.7zM88 408a16 16 0 1 1 0 32 16 16 0 1 1 0-32z"/></svg>
                <span>خدمات وپشتیبانی</span>
            </div>
        </a>
        <div class="w-full bg-gray-600 min-h-[1px]"></div>
        <a href = "#" class="w-full flex items-center justify-between max-h-20 ">
            <div class="flex flex-row-reverse gap-3  text-[20px]">
                <span>صنایع و کاربردی</span>
                <xml version="1.0" encoding="utf-8">
                    <svg class = "size-7 fill-white" viewBox="0 0 16 16" id="factory-16px" xmlns="http://www.w3.org/2000/svg">
                        <path id="Path_109" data-name="Path 109" d="M-6.5,16h-15a.5.5,0,0,1-.5-.5V.5a.5.5,0,0,1,.5-.5h4a.5.5,0,0,1,.5.5V8.691l5.276-2.638a.5.5,0,0,1,.487.022A.5.5,0,0,1-11,6.5V8.617l4.243-2.546a.5.5,0,0,1,.5-.006A.5.5,0,0,1-6,6.5v9A.5.5,0,0,1-6.5,16ZM-21,15H-7V7.383l-4.243,2.546a.5.5,0,0,1-.5.006A.5.5,0,0,1-12,9.5V7.309l-5.276,2.638a.5.5,0,0,1-.487-.022A.5.5,0,0,1-18,9.5V1h-3Z" transform="translate(22)"/>
                    </svg>
                </div>
            </a>
            <div class="w-full bg-gray-600 min-h-[1px]"></div>
            <a href = "{{route('about_as')}}" class="w-full flex items-center justify-between max-h-20 ">
                <div class="flex gap-3  text-[20px]">
                    <svg class = "size-7 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c-13.3 0-24 10.7-24 24V264c0 13.3 10.7 24 24 24s24-10.7 24-24V152c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                    <span>درباره ما</span>
                </div>
            </a>
                    <div class="w-full bg-gray-600 min-h-[1px]"></div>
            <a href = "{{route('document_phone')}}" class="w-full flex items-center justify-between max-h-20 ">
                <div class="flex gap-3  text-[20px]">
                    <svg class = "size-7 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg> 
                    <span>تماس با ما</span>
                </div>
            </a>
        </div>
    </div>

    <header class = "max-w-[2500px] min-w-[325px] mx-auto bg-[#0B304A] mt-30">
        <div class="w-full  translate-x-1/2 right-1/2 mx-auto bg-[#0E2E48] top-0 fixed  z-40">
        <div class="w-11/12  mx-auto flex flex-col  2xl:max-w-[2100px]">
            <div class="flex items-center gap-7 max-xl:gap-2  max-lg:hidden max-lg:gap-2  my-3">
                <div class="flex items-center text-white gap-3 font-bold">
                    <svg class = "size-6 fill-[#F5B83D]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"></svg>
                    <span>09027139373</span>
                </div>
                <span class = "text-[#2a4d66]">|</span>
                <div class="flex items-center text-white gap-3 font-bold">
                    <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M352 192c0-88.4-71.6-160-160-160S32 103.6 32 192c0 20.2 9.1 48.6 26.5 82.7c16.9 33.2 39.9 68.2 63.4 100.5c23.4 32.2 46.9 61 64.5 81.9c1.9 2.3 3.8 4.5 5.6 6.6c1.8-2.1 3.6-4.3 5.6-6.6c17.7-20.8 41.1-49.7 64.5-81.9c23.5-32.3 46.4-67.3 63.4-100.5C342.9 240.6 352 212.2 352 192zm32 0c0 88.8-120.7 237.9-170.7 295.9C200.2 503.1 192 512 192 512s-8.2-8.9-21.3-24.1C120.7 429.9 0 280.8 0 192C0 86 86 0 192 0S384 86 384 192zm-240 0a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 80a80 80 0 1 1 0-160 80 80 0 1 1 0 160z"/></svg>
                    <span>تهران و خیابان اصلی</span>
                </div>
            </div>
            <div class="w-full  flex items-center gap-2 max-lg:pb-2  max-lg:justify-between max-lg:py-4 ">
                <div class="w-3/12 flex items-center mb-3 gap-4 max-lg:hidden ">
                    <div class="w-[80px]">
                        <img src="{{asset('assets/img/file_00000000527881f4835e03acef97b338.png')}}" class = "w-[80px]" alt="">
                    </div>
                <div class="flex flex-col gap-2  text-white">
                    <span class = "text-[35px] font-bold text-nowrap">ترازو درختی</span>
                    <span class = "text-[14px] text-nowrap ">دقت در اندازه گیری و اعتبار در کسب و کار</span>
                </div>
            </div>
            <div class="w-4/12 flex items-center justify-around gap-5  max-2xl:w-[80%] text-white  text-[16px] font-bold   parent_font max-lg:hidden">
                <a class = " text-center fonts text-nowrap" href="{{route('document_phone')}}">تماس باما</a>
                <a class = " text-center fonts text-nowrap" href="{{route('about_as')}}">درباره ما</a>
                <a class = " text-center fonts text-nowrap" href="">محصولات خدمات</a>
                <a class = " text-center fonts text-nowrap" href="{{route('firstpage')}}">صفحه اصلی</a>
            </div>
            <svg  onclick = "bar_menu()" class = "size-6 fill-white lg:hidden"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/></svg>

            <div class="w-6/12 flex items-center  gap-5 justify-between max-xl:w-[30%] max-xl:gap-8   max-lg:w-[70%] max-lg:justify-end ">
                @if(Auth::check())
                    <!-- <svg class='section-icon size-8 fill-[#9CA3AF] cursor-pointer' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#059669">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                    </svg> -->
                <!-- <a href="{{route('user.profile')}}">
                    <div class='w-full px-4 py-1 bg-[#EBECEE] shadow-md rounded-xl duration-500 transition-all hover:shadow-[#099975] text-black text-center'>{{Auth::user()->name}}  خوش آمدید</div>
                </a> -->
                <div class="lg:block hidden w-full h-[45px] items-center rounded-[10px] bg-white transition_fast"id="search">
                        <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto h-full  rounded-lg text-black">
                            @csrf
                            <button class="cursor-pointer w-[13%] md:w-10 h-full  flex justify-center items-center ">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                            </button>
                            <input type="text" name="title" class="w-full h-full outline-none text-(--title) text-[13px]" placeholder="کالای خود را جستوجو کن">
                        </form>
                </div>
                @else
                <div class=" flex gap-8 items-center text-white text-[20px] text-nowrap ">
                    <div class=" flex items-center gap-3 text-[14px] font-bold">
                        <a class = "text-[15px]" href="{{url('login')}}">
                            ورود / ثبت نام
                        </a>   
                    </div>
                    <div class="lg:block hidden w-full h-[45px]  rounded-[10px] bg-white transition_fast"id="search">
                            <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto h-full  rounded-lg text-black">
                                @csrf
                                <button class="cursor-pointer w-[13%] md:w-10 h-10  flex justify-center items-center p-2">
                                    <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                                </button>
                                <input type="text" name="title" class="w-[87%] h-full outline-none text-(--title) text-[13px]" placeholder="کالای خود را جستوجو کن">
                            </form>
                    </div>
                    </div>
                    @endif
                    <div class='relative group'>
                        <a href="{{route('cart.userCartList')}}" class="flex h-full items-center cursor-pointer" >
                            <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                        </a>

                        <!-- <div class="w-full h-dvh bg-black/50 fixed top-0 right-0 z-3"></div> -->
                        <div id='cart' class='absolute z-4 rounded-xl w-[60vw] max-h-0 hidden lg:group-hover:max-h-[80vh] overflow-y-hidden top-5 left-0 bg-white lg:flex flex-col gap-4 group-hover:p-5 transition_normal '>
                            <div class=" w-full flex justify-between items-center">
                                <div class="flex justify-start items-center gap-3">
                                    <div>
                                    <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>

                                    </div>
                                    <div class="flex flex-col gap-2 justify-start items-start">
                                        <h3 class="text-xl font-bold">سبد خرید</h3>
                                        <p class="text-xs text-(--discription)"><span> 3 </span>محصول در سبد خرید شماست </p>

                                    </div>
                                </div>
                            
                            </div>
                            <?php
                            $count = 0;
                            $total_price = 0;
                            ?>
                            <div class='w-full flex flex-col gap-10 justify-center items-start'>
                                <div id='cart_list' class='w-full  flex flex-col gap-2 max-h-70 overflow-y-auto [&::-webkit-scrollbar]:w-1.5  [&::-webkit-scrollbar-thumb]:bg-(--primary_color)  [&::-webkit-scrollbar-thumb]:rounded-full'>
                                    @if(Auth::check() && count($user->carts))
                                        @foreach($user->carts as $cart)
                                            <?php
                                            $count++;
                                            if($cart->product->discunt!=null && $cart->product->discunt >0){
                                                $total_price += $cart->product->discunt * $cart->quantity;
                                            }else{
                                                $total_price += $cart->product->price * $cart->quantity;
                                            }
                                            ?>
                                            <div class='parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative'>
                                                <div class="flex gap-2 items-center">
                                                    <div class='xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center'>
                                                        @if(count($cart->product->medias)>0)
                                                        <img class='max-w-full max-h-full rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                                        @else
                                                        <div> 🖼 </div>
                                                        @endif
                                                    </div>
                                                    <div class="flex xl:gap-8 gap-6">

                                                        <div class="flex flex-col justify-center items-start">
                                                            <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate">{{$cart->product->title}}</h5>
                                                            <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">{{$cart->product->summary}}</p>
                                                        </div>
                                                        @if($cart->product->discunt==null || $cart->product->discunt<1)
                                                            <div class="flex justify-start items-center gap-2">
                                                                <div class="flex flex-col justify-start items-end gap-2">
                                                                    <div class="text-[#316361] flex justify-start items-center gap-1">
                                                                        <span class="max-xl:text-sm font-bold">{{$cart->product->price}}</span>
                                                                        <span>تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="flex justify-start items-center gap-2">
                                                                <div class="flex flex-col justify-start items-end gap-2">
                                                                    <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                                                        <span>{{$cart->product->price}}</span>
                                                                        <span>تومان</span>
                                                                    </del>
                                                                    <div class="text-[#316361] flex justify-start items-center gap-1">
                                                                        <span class="xl:text-lg font-bold">{{$cart->product->discunt}}</span>
                                                                        <span>تومان</span>
                                                                    </div>
                                                                </div>
                                                                <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">{{$cart->product->percent}}%</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <span class="min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)"></span>
                                                <div class='xl:gap-5 gap-3 flex justify-between'>


                                                    <div class=' flex justify-start gap-10 items-center'>
                                                        <div class='entries flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5'  data-id='{{$cart->id}}'>
                                                            <div onclick="updateCart(this,{{$cart->id}},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                                </svg>
                                                            </div>
                                                            <div class='text-center items-center flex justify-center cursor-pointer'>
                                                                <input type="number" class='w-10 font-bold outline-none text-center text-black flex max-xl:text-sm' readonly value="{{$cart->quantity}}">
                                                            </div>
                                                            @if($cart->quantity==1)
                                                            <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                                </svg>
                                                            </div>
                                                            @else
                                                            <div onclick="updateCart(this,{{$cart->id}},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                                </svg>
                                                            </div>
                                                            @endif
                                                            <div onclick="fullTrash(this,{{$cart->id}} , {{$cart->product->id}})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        @endforeach
                                    @endif
                                </div>
                                <!-- <div id="cart_buttons" class=' grid grid-cols-2 items-center text-center p-1 gap-2 '>
                                    <a href="{{route('cart.userCartList')}}" class='bg-green-200 p-2 rounded-sm cursor-pointer'> تکمیل سفارش </a>
                                    <div class='bg-red-200 p-2 rounded-sm '> <span> قیمت کل: </span><input type="number" value={{$total_price}} disabled class='w-24 text-black font-bold text-sm' id="total_price"></div>
                                </div> -->
                                <div class="w-full bg-[#FBC830] rounded-xl flex justify-between text-[#0B304A] px-4 py-3">
                                    <div class="flex xl:gap-20 gap-10 justify-start items-center">
                                        <a href="{{route('cart.userCartList')}}" class='bg-(--buttom) px-10 py-2 rounded-full cursor-pointer flex gap-5 justify-center items-center'>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-4 size-3.5 fill-[#0B304A]">
                                                    <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-4 size-3.5 fill-[#0B304A]">
                                                    <path d="M160 112v48H288V112c0-35.3-28.7-64-64-64s-64 28.7-64 64zm-48 48V112C112 50.1 162.1 0 224 0s112 50.1 112 112v48h64c26.5 0 48 21.5 48 48V416c0 53-43 96-96 96H96c-53 0-96-43-96-96V208c0-26.5 21.5-48 48-48h64zM48 416c0 26.5 21.5 48 48 48H352c26.5 0 48-21.5 48-48V208H48V416zm72-80c0-13.3 10.7-24 24-24h56V256c0-13.3 10.7-24 24-24s24 10.7 24 24v56h56c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v56c0 13.3-10.7 24-24 24s-24-10.7-24-24V360H144c-13.3 0-24-10.7-24-24z" />
                                                </svg>
                                            </div>
                                            <span class="font-bold  max-xl:text-sm ">
                                                    مشاهده سبد خرید
                                            </span>
                                        </a>
                                        <span class="min-w-[1px] w-[1px] max-w-[1px] min-h-full rounded-full bg-gray-300"></span>
                                    </div>
                                    <div class="flex flex-col gap-1 justify-center items-end">
                                        <p class="xl:text-xs text-[10px] text-[#4A6366]">مبلغ کل سبد خرید</p>
                                        <div class="text-(--buttom) flex justify-start items-center gap-1">
                                            <span class="xl:text-xl text-lg font-bold" id="total_price">
                                                {{$total_price}}
                                            </span>
                                            <span class="text-lg font-bold">تومان</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="cart_counter" class='absolute -top-3 -left-3 bg-[#F8C028] px-1.5 py-0.5 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                    </div>
                    
            </div>
        </div>
        <div class="w-full  bg-white rounded-[20px] transition_fast lg:hidden my-3"id="search">
            <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto   rounded-lg text-black items-center justify-center">
                @csrf
                <button class="cursor-pointer w-[13%]  md:w-10   flex justify-center items-center p-2">
                    <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                </button>
                <input type="text" name="title" class="w-[87%] h-[40px] outline-none text-(--title)" placeholder="کالای خود را جستوجو کن">
            </form>
        </div>
        

    </div>
        </div>
    <script>
        const currentRouteName = "{{ Route::currentRouteName() }}";
        console.log(currentRouteName);
        const PRODUCT_DATA = @json($product ?? null);
        console.log(PRODUCT_DATA);
        function bar_menu(){
            let menu = document.getElementById('menu')
            let document_black = document.getElementById('document_black')
            console.log(document_black)
            menu.classList.toggle('translate-x-150')
            document_black.classList.toggle('invisible')
            document_black.classList.toggle('opacity-0')
        }



        let entries='';
        let cart = document.getElementById('cart');
        let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let cart_buttons = document.getElementById('cart_buttons');
        let entry_cart_parent = document.getElementById('entry_cart_parent');
        let entry_cart_submit = document.getElementById('entry_cart_submit');
        let single_entry_parent = document.getElementById('single_entry_parent');
        let current_product='';
        let product_price='';
        let price='';
        let div_image='';
        let div_text_and_counter='';
        let parent_div='';
        let entry='';
        
        function showCart(){
            if(parseInt(cart_counter.innerHTML)!=0){
                cart.classList.remove('hidden');
                cart.classList.add('flex');
            }
        }

        let user_id="{{Auth::id()}}";

        let link="{{route('user.loginPage')}}";
        let check="{{Auth::check()}}";
        let products=[];
        let jsonPro=""
        let textProducts="";
        let jsonProArray="";
        let product_id='';
        let flag=true;
            
        if(currentRouteName === 'product.client_pro_single' && PRODUCT_DATA!=null){
            console.log('ber');
            product_id=PRODUCT_DATA.id;
            current_product_id=PRODUCT_DATA.id;
            current_product_title=PRODUCT_DATA.title;
            current_product_price=PRODUCT_DATA.price;
            current_product_discunt=PRODUCT_DATA.discunt;
            current_product_path=PRODUCT_DATA.is_main;
            current_product_summary=PRODUCT_DATA.summary;
            current_product_quantity="1";
        }
        let myProduct='';
        let count_noAuth=0;
        let total_price_noAuth=0;

        if(currentRouteName === 'product.client_pro_single' && PRODUCT_DATA!=null){
            function entry_cart(el) {
                    entry=document.getElementById('entry_cart_submit')
    
                    entry.innerHTML =
                    `
                        <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                    `
                    if(check){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            }
                        })
                        $.ajax({
                            url: "{{route('cart.store')}}",
                            type: "post",
                            dataType: "json",
                            data:{
                                'product_id':product_id,
                                'user_id':user_id,
                            },
                            success: function(data) {
                                cart_counter.innerHTML++
                                console.log(data.product.path);
                                entry.remove();
                                entry_cart_parent=document.getElementById('entry_cart_parent');
                                entry_cart_parent.innerHTML+=
    
                                    `
                                    <div id="single_entry_parent" class=' w-1/3 flex justify-between gap-10 items-center' >
                                        <div class='entries flex w-full h-15 overflow-hidden rounded-[10px] border border-gray-200 bg-white' data-id='${data.cart.id}'>
                                            <div onclick="updateCart(this,${data.cart.id},'plus')" class='w-1/3 flex cursor-pointer items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95'>
                                                <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                            </div>
                                            <div class='w-1/3 text-center items-center flex justify-center'>
                                                <input type="number" class='w-8 outline-none text-center items-center text-black select-none cursor-default' readonly value="${data.cart.quantity}">
                                            </div>
                                            <div onclick="trash(this,${data.cart.id},${data.product.id})" class='w-1/3 flex cursor-pointer items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95'>
                                                <svg class='size-5' class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                            </div>
                                
                                        </div>
                                    </div>
                                    `
    
                                div_image=document.createElement('div');
                                div_text=document.createElement('div');
                                parent_div=document.createElement('div');
                                sup_parent=document.createElement('div');
                                sup_parent2=document.createElement('div');
                                span=document.createElement('span');
                                div_counters=document.createElement('div');
                                parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                                sup_parent.classList=`flex gap-2 items-center`;
                                div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                                div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                                if(data.product.path!=null){
                                    div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${data.product.path}') }}" alt="">`;
                                }else{
                                    div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                                }
                                div_text.classList=`flex xl:gap-8 gap-6`;
                                let html1=
                                    `
                                    <div class="flex flex-col justify-center items-start">
                                        <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${data.product.title} </h5>
                                        <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${data.product.summary}</p>
                                    </div>
                                            
                                    `
                                if(data.product.discunt==null || data.product.discunt<1){
                                    html1+=
                                        `                            
                                        <div class="flex justify-start items-center gap-2">
                                            <div class="flex flex-col justify-start items-end gap-2">
                                                <div class="text-[#316361] flex justify-start items-center gap-1">
                                                    <span class="max-xl:text-sm font-bold">${data.product.price}</span>
                                                    <span>تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        `
                                }else{
                                    html1+=
                                        ` 
                                        <div class="flex justify-start items-center gap-2">
                                            <div class="flex flex-col justify-start items-end gap-2">
                                                <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                                    <span>${data.product.price}</span>
                                                    <span>تومان</span>
                                                </del>
                                                <div class="text-[#316361] flex justify-start items-center gap-1">
                                                    <span class="xl:text-lg font-bold">${data.product.discunt}</span>
                                                    <span>تومان</span>
                                                </div>
                                            </div>
                                            <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                                        </div>
                                        `
                                }
                                div_text.innerHTML=html1;
                                sup_parent.appendChild(div_image);
                                sup_parent.appendChild(div_text);
    
                                /////////////////////////////////////////////////////////////////
                                span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                                let html2='';
                                html2+=
                                `
                                        <div class='flex justify-start gap-10 items-center'>
                                            <div class='entries flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5' data-id='${data.cart.id}'>
                                                <div onclick="updateCart(this,${data.cart.id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                                    <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                                </div>
                                                <div class='text-center items-center flex justify-center cursor-pointer'>
                                                    <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${data.cart.quantity}">
                                                </div>
                                                `
                                                html2+=
                                                `
                                                    <div onclick="trash(this,${data.cart.id},${data.product.id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                        <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                                    </div>
                                                `
    
                                                html2+=`
                                                <div onclick="fullTrash(this,${data.cart.id},${data.product.id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'>
                                                    <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                                </div>
                                            </div>
                                        </div>
                                ` 
                                div_counters.innerHTML=html2
    
    
    
    
    
    
    
                                parent_div.appendChild(sup_parent)
                                parent_div.appendChild(span)
                                parent_div.appendChild(div_counters)
                                cart_list.appendChild(parent_div);
                                console.log(cart_list);
    
    
    
    
                                if(data.product.discunt!=null && data.product.discunt>0){
                                    product_price=parseInt(data.product.discunt)
                                }else{
                                    product_price=parseInt(data.product.price)
                                }
                                price=parseInt(total_price.innerHTML)
                                total_price.innerHTML= product_price + price;
    
    
                            },
                            error: function() {
                                console.log('☢')
                            }
                        })
                    }else{
                        // localStorage.removeItem('products');
                        // console.log(localStorage.getItem('products'));
                        // return
                        if(localStorage.getItem('products') == null){
                            jsonPro={id:current_product_id, title:current_product_title , price:current_product_price , discunt:current_product_discunt , path:current_product_path , quantity:current_product_quantity , summary:current_product_summary};
                            products.push(jsonPro);
                            textProducts=JSON.stringify(products)
                            localStorage.setItem('products',textProducts)
                        }else{
                            jsonProArray=JSON.parse(localStorage.getItem('products'));
                                myProduct= jsonProArray.find(function(pro){
                                if(pro.id ==current_product_id){
                                    flag=false
                                }
                            })
                            if(flag){
                                jsonPro={id:current_product_id, title:current_product_title , price:current_product_price , discunt:current_product_discunt , path:current_product_path , quantity:current_product_quantity , summary:current_product_summary};
                                jsonProArray.push(jsonPro);
                                textProducts=JSON.stringify(jsonProArray)
                                localStorage.setItem('products',textProducts)
                            }else{
                                alert('در سبد خرید شما وجود دارد');
                            }
                        }
                        console.log(localStorage.getItem('products'));
                        
    
                        if(flag){
    
    
                            cart_counter.innerHTML++
                            document.getElementById('entry_cart_submit').remove();
                            entry_cart_parent=document.getElementById('entry_cart_parent')
                            entry_cart_parent.innerHTML+=
                            `
                            <div id="single_entry_parent" class=' w-1/3 flex justify-between gap-10 items-center' >
                                <div class='entries flex w-full h-15 overflow-hidden rounded-[10px] border border-gray-200 bg-white 'data-id='${current_product_id}'>
                                    <div onclick="updateNoAuthCart(this,${current_product_id},'plus')" class='w-1/3 flex cursor-pointer items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95'>
                                        <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                    </div>
                                    <div class='w-1/3 text-center items-center flex justify-center'>
                                        <input type="number" class='w-8 outline-none text-center items-center text-black select-none cursor-default' readonly value="${current_product_quantity}">
                                    </div>
                                    <div onclick="NoAuthtrash(this,${current_product_id})" class='w-1/3 flex cursor-pointer items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95'>
                                        <svg class='size-5' class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                    </div>
                        
                                </div>
                            </div>
                            `
        
    
    
    
                            div_image=document.createElement('div');
                            div_text=document.createElement('div');
                            parent_div=document.createElement('div');
                            sup_parent=document.createElement('div');
                            sup_parent2=document.createElement('div');
                            span=document.createElement('span');
                            div_counters=document.createElement('div');
                            parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                            sup_parent.classList=`flex gap-2 items-center`;
                            div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                            div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                            if(current_product_path!=null){
                                div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${current_product_path}') }}" alt="">`;
                            }else{
                                div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                            }
                            div_text.classList=`flex xl:gap-8 gap-6`;
                            let html1=
                                `
                                <div class="flex flex-col justify-center items-start">
                                    <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${current_product_title} </h5>
                                    <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${current_product_summary}</p>
                                </div>
                                        
                                `
                            if(current_product_discunt==null || current_product_discunt<1){
                                html1+=
                                    `                            
                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex flex-col justify-start items-end gap-2">
                                            <div class="text-[#316361] flex justify-start items-center gap-1">
                                                <span class="max-xl:text-sm font-bold">${current_product_price}</span>
                                                <span>تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    `
                            }else{
                                html1+=
                                    ` 
                                    <div class="flex justify-start items-center gap-2">
                                        <div class="flex flex-col justify-start items-end gap-2">
                                            <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                                <span>${current_product_price}</span>
                                                <span>تومان</span>
                                            </del>
                                            <div class="text-[#316361] flex justify-start items-center gap-1">
                                                <span class="xl:text-lg font-bold">${current_product_discunt}</span>
                                                <span>تومان</span>
                                            </div>
                                        </div>
                                        <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                                    </div>
                                    `
                            }
                            div_text.innerHTML=html1;
                            sup_parent.appendChild(div_image);
                            sup_parent.appendChild(div_text);
    
                            /////////////////////////////////////////////////////////////////
                            span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                            let html2='';
                            html2+=
                            `
                                    <div class='flex justify-start gap-10 items-center'>
                                        <div class='entries flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5' data-id='${current_product_id}'>
                                            <div onclick="updateNoAuthCart(this,${current_product_id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                                <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                            </div>
                                            <div class='text-center items-center flex justify-center cursor-pointer'>
                                                <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${current_product_quantity}">
                                            </div>
                                            `
                                            if(current_product_quantity==1){
                                                html2+=
                                                `
                                                    <div onclick="NoAuthtrash(this,${current_product_id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                        <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                                    </div>
                                                `
                                            }else{
                                                html2+=
                                                `
                                                    <div onclick="updateNoAuthCart(this,${current_product_id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                        <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" /> </svg>
                                                    </div>
                                                `
                                            }
                                            html2+=`
                                            <div onclick="NoAuthFullTrash(this,${current_product_id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                            ` 
                            div_counters.innerHTML=html2
    
    
    
    
    
    
    
                            parent_div.appendChild(sup_parent)
                            parent_div.appendChild(span)
                            parent_div.appendChild(div_counters)
                            cart_list.appendChild(parent_div);
                            console.log(cart_list);
    
                            if(current_product_discunt==null || current_product_discunt<1){
                                product_price=parseInt(current_product_price)
                            }else{
                                product_price=parseInt(current_product_discunt)
                            }
                            price=parseInt(total_price.innerHTML)
                            total_price.innerHTML= product_price + price;
        
                            // parent_div.appendChild(div_image)
                            // div_text_and_counter.innerHTML=html;
                            // parent_div.appendChild(div_text_and_counter)
                            // cart_list.appendChild(parent_div);
                            // console.log(cart_list);
                        }
        
    
    
                    }
            }
        }

        function hiddenCart(el){
            cart.classList.add('hidden');
            cart.classList.remove('flex');

        }
        let quantity=0;
        function updateCart(el,id,state) {
            console.log('mmmmm')
            entries=document.querySelectorAll('.entries')
            quantity = el.parentElement.children[1].children[0].value;

            
            entries.forEach(entry => {
                cart_id=entry.getAttribute('data-id')
                console.log(entry);
                // console.log(id);
                if(cart_id==id){
                    entry.children[0].innerHTML =
                    `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
    
                    `;
                    entry.children[0].disabled = true;
                    entry.children[0].removeAttribute('onclick');
    
                    entry.children[2].innerHTML =
                    `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
    
                    `;
                    entry.children[2].disabled=true;
                    entry.children[2].removeAttribute('onclick');

                }
                
            });




            if(state=='plus'){
                quantity++;
            }else{
                quantity--;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{url('cart/update/cart')}}"+"/"+id,
                type: "post",
                dataType:"json",
                data:{
                    'quantity':quantity,
                },
                success: function(data) {
                    console.log('updated');
                    entries.forEach(entry => {
                        cart_id=entry.getAttribute('data-id')
                        if(cart_id==id){

                            entry.children[1].children[0].value = data.quantity
    
                            if(data.quantity==1){
                                
                                //  تغییر دادن  اس وی جی علامت پلاس  //
                                    
                                entry.children[0].removeAttribute('disabled');
                                entry.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                                entry.children[0].innerHTML=
                                `
                                    <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                `
                                ;
    
    
                                //  تغییر دادن  اس وی جی علامت سطل آشغال  //
    
                                entry.children[2].innerHTML =
                                `
                                <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                `
                                entry.children[2].setAttribute('onclick',`trash(this,${data.cartId},${data.product.id})`);
                                entry.children[2].disabled=false;
                            }
                            if(data.quantity>1){
    
                                //  تغییر دادن  اس وی جی علامت پلاس  //
    
                                entry.children[0].removeAttribute('disabled');
                                entry.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                                entry.children[0].innerHTML=
                                `
                                    <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                `
                                ;
                                //  تغییر دادن  اس وی جی علامت ماینس  //
    
                                entry.children[2].disabled=false;
                                entry.children[2].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
                                entry.children[2].innerHTML =
                                `
                                    <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" /> </svg>
                                `
                            }
                        }
                    });

                    if(data.product.discunt!=null && data.product.discunt>1){
                        product_price=parseInt(data.product.discunt)
                    }else{
                        product_price=parseInt(data.product.price)
                    }
                    if(state=='plus'){
                        total_price.innerHTML=parseInt(total_price.innerHTML)+product_price;
                    }else{
                        total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                    }
                },
                error: function() {
                    console.log('☢')
                }
            })

        }
        function fullTrash(el,cart_id,product_id) {
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    el.closest('.parent_cart').remove()
                    if(currentRouteName === 'product.client_pro_single' && PRODUCT_DATA!=null){
                        quantity = el.parentElement.children[1].children[0].value;
                        current_product=PRODUCT_DATA
                        current_product_id=PRODUCT_DATA.id
                        cart_counter.innerHTML--
                        if(current_product){
                            if(product_id==current_product_id){
                                single_entry_parent=document.getElementById('single_entry_parent')
                                single_entry_parent.remove()
                                entry_cart_parent=document.getElementById('entry_cart_parent')
                                entry_cart_parent.innerHTML+=
                                `<div id='entry_cart_submit' onclick='entry_cart(this)' class="cursor-pointer w-[380px] h-16 flex items-center justify-center bg-[#FBC830] text-[#091E2F] rounded-[10px] text-[22px] gap-2 max-lg:w-full max-lg:order-first max-lg:h-13">
                                    <span>افزودن به سبد خرید</span>
                                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                                </div>`
                            }
                        }
                    }
                    if(productData.discunt!=null && productData.discunt>1){
                        product_price=parseInt(productData.discunt)*quantity
                    }else{
                        product_price=parseInt(productData.price)*quantity
                    }
                    total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }
        function trash(el,id,product_id) {
            let trash_icon='';
            entries = document.querySelectorAll('#cart_list .entries');
            entries.forEach(entry => {
                trash_icon=entry.children[2].innerHTML;
                entry.children[2].innerHTML =
                `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                `
            });

            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                    entries.forEach(entry => {
                        cart_id=entry.getAttribute('data-id')
                        if(cart_id==id){
                            entry.closest('.parent_cart').remove()
                        }
                    });

                    if(currentRouteName === 'product.client_pro_single' && PRODUCT_DATA!=null){
                        current_product=PRODUCT_DATA
                        current_product_id=PRODUCT_DATA.id
                        cart_counter.innerHTML--
                        if(current_product){
                            if(product_id==current_product_id){
                                single_entry_parent=document.getElementById('single_entry_parent')
                                single_entry_parent.remove()
                                entry_cart_parent=document.getElementById('entry_cart_parent')
                                entry_cart_parent.innerHTML+=
                                `<div id='entry_cart_submit' onclick='entry_cart(this)' class="cursor-pointer w-[380px] h-16 flex items-center justify-center bg-[#FBC830] text-[#091E2F] rounded-[10px] text-[22px] gap-2 max-lg:w-full max-lg:order-first max-lg:h-13">
                                    <span>افزودن به سبد خرید</span>
                                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                                </div>`;
                            }
                        }

                    }
                    if(productData.discunt!=null || productData.discunt>1){
                        product_price=parseInt(productData.discunt)
                    }else{
                        product_price=parseInt(productData.price)
                    }
                    total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;
                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }


        let currentUpdateProduct='';
        function updateNoAuthCart(el,product_id,state){
            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
                } 
            })
            console.log(currentUpdateProduct);
            entries=document.querySelectorAll('.entries')
            quantity = el.parentElement.children[1].children[0].value;

                entries.forEach(entry => {
                    
                    entry.children[0].innerHTML =
                    `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
    
                    `;
                    entry.children[0].disabled = true;
                    entry.children[0].removeAttribute('onclick');
    
                    entry.children[2].innerHTML =
                    `
                    <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
    
                    `;
                    entry.children[2].disabled=true;
                    entry.children[2].removeAttribute('onclick');
                });

                if(state=='plus'){
                    quantity++;
                }else{
                    quantity--;
                }
                entries.forEach(entry => {
                    entry.children[1].children[0].value = quantity
                });

                if(quantity==1){
                    
                    //  تغییر دادن  اس وی جی علامت پلاس  //
                entries.forEach(entry => {
                    entry.children[0].removeAttribute('disabled');
                    entry.children[0].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                    entry.children[0].innerHTML=
                    `
                        <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                    `
                    ;
    
    
                    //  تغییر دادن  اس وی جی علامت سطل آشغال  //
    
                    entry.children[2].innerHTML =
                    `
                    <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                    `
                    entry.children[2].setAttribute('onclick',`NoAuthtrash(this,${currentUpdateProduct.id})`);
                    entry.children[2].disabled=false;
                });

                }
                if(quantity>1){

                    //  تغییر دادن  اس وی جی علامت پلاس  //

                    entries.forEach(entry => {

                        entry.children[0].removeAttribute('disabled');
                        entry.children[0].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'plus')`)
                        entry.children[0].innerHTML=
                        `
                            <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                        `
                        ;
                        //  تغییر دادن  اس وی جی علامت ماینس  //

                        entry.children[2].disabled=false;
                        entry.children[2].setAttribute('onclick',`updateNoAuthCart(this,${currentUpdateProduct.id},'minus')`)
                        entry.children[2].innerHTML =
                        `
                            <svg class='size-5' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" /> </svg>
                        `
                    });

                }
                if(currentUpdateProduct.discunt!=null && currentUpdateProduct.discunt>1){
                    product_price=parseInt(currentUpdateProduct.discunt)
                }else{
                    product_price=parseInt(currentUpdateProduct.price)
                }
                price=parseInt(total_price.innerHTML)
                // total_price.innerHTML=price+data.product.price
                // console.log(price+product_price)
                if(state=='plus'){
                    total_price.innerHTML=price+product_price;
                }else{
                    total_price.innerHTML=price-product_price;
                }
                jsonProArray.find(function(pro){
                    if(pro.id == product_id){
                        pro.quantity=quantity
                    } 
                })
                textProducts=JSON.stringify(jsonProArray)
                localStorage.removeItem('products')
                localStorage.setItem('products',textProducts)
            // }

        }
        function NoAuthFullTrash(el,product_id){

            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
                } 
            })
            el.closest('.parent_cart').remove()
            if(currentRouteName === 'product.client_pro_single' && PRODUCT_DATA!=null){
                current_product=PRODUCT_DATA
                current_product_id=PRODUCT_DATA.id
                cart_counter.innerHTML--
                if(current_product){
                    if(product_id==current_product_id){
                        single_entry_parent=document.getElementById('single_entry_parent')
                        single_entry_parent.remove()
                        entry_cart_parent=document.getElementById('entry_cart_parent')
                        entry_cart_parent.innerHTML+=
                        `<div id='entry_cart_submit' onclick='entry_cart(this)' class="cursor-pointer w-[380px] h-16 flex items-center justify-center bg-[#FBC830] text-[#091E2F] rounded-[10px] text-[22px] gap-2 max-lg:w-full max-lg:order-first max-lg:h-13">
                            <span>افزودن به سبد خرید</span>
                            <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                        </div>`
                    }
                }
            }
            if(currentUpdateProduct.discunt==null || currentUpdateProduct.discunt<1){
                product_price=parseInt(currentUpdateProduct.price)*currentUpdateProduct.quantity
            }else{
                product_price=parseInt(currentUpdateProduct.discunt)*currentUpdateProduct.quantity
            }

            total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;

            jsonProArray = jsonProArray.filter(function(pro) {
                if(pro.id != product_id){
                    return pro;
                }
            });

            textProducts=JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products',textProducts)

        }

        ////////////////////////////////////////////////
        function NoAuthtrash(el,product_id){
            let trash_icon='';
            // console.log(el.closest('.parent_cart'))
            trash_icon=el.parentElement.children[2].innerHTML;
            entries = document.querySelectorAll(' .entries');
            entries.forEach(entry => {
                id=entry.getAttribute('data-id');
                if(product_id == id){
                    entry.children[2].innerHTML =
                    `
                        <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                    ` 
                } 
            });

            jsonProArray=JSON.parse(localStorage.getItem('products'));
            jsonProArray.find(function(pro){
                if(pro.id == product_id){
                    currentUpdateProduct=pro
                }
            })
            entries = document.querySelectorAll('#cart_list .entries');
            entries.forEach(entry => {
                id=entry.getAttribute('data-id');
                if(product_id == id){
                    entry.closest('.parent_cart').remove()
                } 
            });
            if(currentRouteName === 'product.client_pro_single'){
                current_product=PRODUCT_DATA
                current_product_id=PRODUCT_DATA.id
                cart_counter.innerHTML--
                if(current_product){
                    if(product_id==current_product_id){
                        console.log('mkz');
                        single_entry_parent=document.getElementById('single_entry_parent')
                        single_entry_parent.remove()
                        entry_cart_parent=document.getElementById('entry_cart_parent')
                        entry_cart_parent.innerHTML+=
                        `<div id='entry_cart_submit' onclick='entry_cart(this)' class="cursor-pointer w-[380px] h-16 flex items-center justify-center bg-[#FBC830] text-[#091E2F] rounded-[10px] text-[22px] gap-2 max-lg:w-full max-lg:order-first max-lg:h-13">
                            <span>افزودن به سبد خرید</span>
                            <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                        </div>`;
                    }
                }

            }
            if(currentUpdateProduct.discunt==null || currentUpdateProduct.discunt<1){
                product_price=parseInt(currentUpdateProduct.price)
            }else{
                product_price=parseInt(currentUpdateProduct.discunt)
            }

            total_price.innerHTML=parseInt(total_price.innerHTML)-product_price;

            jsonProArray = jsonProArray.filter(function(pro) {
                if(pro.id != product_id){
                    return pro;
                }
            });

            textProducts=JSON.stringify(jsonProArray)
            localStorage.removeItem('products')
            localStorage.setItem('products',textProducts)

        }

        function addProducsToCart(){
            
            if(localStorage.getItem('products') != null){
                jsonProArray=JSON.parse(localStorage.getItem('products'));
                jsonProArray.forEach(pro => {
                    console.log(pro);


                    div_image=document.createElement('div');
                    div_text=document.createElement('div');
                    parent_div=document.createElement('div');
                    sup_parent=document.createElement('div');
                    sup_parent2=document.createElement('div');
                    span=document.createElement('span');
                    div_counters=document.createElement('div');
                    parent_div.classList=`parent_cart w-full flex justify-between  border-2 border-(--product) gap-4 bg-white rounded-xl xl:p-2 p-2 relative`;
                    sup_parent.classList=`flex gap-2 items-center`;
                    div_counters.classList=`xl:gap-5 gap-3 flex justify-between`
                    div_image.classList=`xl:min-w-22 xl:min-h-22 xl:w-22 xl:h-22 min-w-18 min-h-18 w-18 h-18 bg-(--product) rounded-xl flex justify-center items-center`;
                    if(pro.path!=null){
                        div_image.innerHTML = `<img class="max-w-full max-h-full rounded-xl" src="{{ asset('storage/product_medias/${pro.path}') }}" alt="">`;
                    }else{
                        div_image.innerHTML=`<div class="max-w-full max-h-full rounded-xl"> 🖼 </div>`
                    }
                    div_text.classList=`flex xl:gap-8 gap-6`;
                    let html1=
                        `
                        <div class="flex flex-col justify-center items-start">
                            <h5 class="xl:text-lg  font-bold text-(--title) xl:max-w-50 max-w-35 truncate"> ${pro.title} </h5>
                            <p class="xl:text-xs text-[10px] text-(--discription) xl:max-w-50 max-w-35 truncate">${pro.summary}</p>
                        </div>
                                
                        `
                    if(pro.discunt==null || pro.discunt<1){
                        html1+=
                            `                            
                            <div class="flex justify-start items-center gap-2">
                                <div class="flex flex-col justify-start items-end gap-2">
                                    <div class="text-[#316361] flex justify-start items-center gap-1">
                                        <span class="max-xl:text-sm font-bold">${pro.price}</span>
                                        <span>تومان</span>
                                    </div>
                                </div>
                            </div>
                            `
                    }else{
                        html1+=
                            ` 
                            <div class="flex justify-start items-center gap-2">
                                <div class="flex flex-col justify-start items-end gap-2">
                                    <del class="xl:text-xs text-[10px] text-(--discription) flex justify-start items-center gap-1">
                                        <span>${pro.price}</span>
                                        <span>تومان</span>
                                    </del>
                                    <div class="text-[#316361] flex justify-start items-center gap-1">
                                        <span class="xl:text-lg font-bold">${pro.discunt}</span>
                                        <span>تومان</span>
                                    </div>
                                </div>
                                <span class="xl:text-sm text-xs px-2 py-1 rounded-xl bg-red-200 text-red-900">20%</span>
                            </div>
                            `
                    }
                    div_text.innerHTML=html1;
                    sup_parent.appendChild(div_image);
                    sup_parent.appendChild(div_text);

                    /////////////////////////////////////////////////////////////////
                    span.classList=`min-w-[1px] w-[1px] max-w-[1px] min-h-9/12 rounded-full bg-(--product)`
                    let html2='';
                    html2+=
                    `
                            <div class='flex justify-start gap-10 items-center'>
                                <div class='entries flex xl:gap-5 gap-2 border-2 border-[#E5EBEB] rounded-full items-center text-center xl:px-4 px-3 xl:py-2 py-1.5' data-id='${pro.id}'>
                                    <div onclick="updateNoAuthCart(this,${pro.id},'plus')" class='xl:size-4 size-3  text-center items-center flex justify-center cursor-pointer'>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" /></svg>
                                    </div>
                                    <div class='text-center items-center flex justify-center cursor-pointer'>
                                        <input type="number" class='w-5 outline-none text-center items-center text-black' readonly value="${pro.quantity}">
                                    </div>
                                    `
                                    if(pro.quantity==1){
                                        html2+=
                                        `
                                            <div onclick="NoAuthtrash(this,${pro.id})" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                <svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" /> </svg>
                                            </div>
                                        `
                                    }else{
                                        html2+=
                                        `
                                            <div onclick="updateNoAuthCart(this,${pro.id},'minus')" class='xl:size-4 size-3 text-center items-center flex justify-center cursor-pointer'>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                </svg>
                                            </div>
                                        `
                                    }
                                    html2+=`
                                    <div onclick="NoAuthFullTrash(this,${pro.id})" class='absolute top-2 left-2 size-4 text-center items-center flex justify-center cursor-pointer'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    ` 
                    div_counters.innerHTML=html2







                    parent_div.appendChild(sup_parent)
                    parent_div.appendChild(span)
                    parent_div.appendChild(div_counters)
                    cart_list.appendChild(parent_div);
                    console.log(cart_list);


                    count_noAuth++;
                    if(pro.discunt==null || pro.discunt<1){
                        total_price_noAuth+=parseInt(pro.price) * pro.quantity;
                    }else{
                        total_price_noAuth+=parseInt(pro.discunt) * pro.quantity;

                    }
                    
                })
                total_price.innerHTML=parseInt(total_price.innerHTML)+total_price_noAuth;
                cart_counter.innerHTML=parseInt(cart_counter.innerHTML)+count_noAuth;
            }
        }

        addProducsToCart();














        
           function bar_menu(){
            let menu = document.getElementById('menu')
            let document_black = document.getElementById('document_black')
            console.log(document_black)
            menu.classList.toggle('translate-x-150')
            document_black.classList.toggle('invisible')
            document_black.classList.toggle('opacity-0')
        }
       
       
  
        const route = "{{ request()->path() }}";
        let cart = document.getElementById('cart');
        let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');
        let total_price = document.getElementById('total_price');
        let cart_buttons = document.getElementById('cart_buttons');

        function showCart(){
            if(cart_counter.innerHTML!=0){
                cart.classList.remove('hidden');
                cart.classList.add('flex');
            }
        }
        function hiddenCart(el){
            cart.classList.add('hidden');
            cart.classList.remove('flex');

        }




        let quantity=0;
        function updateCart(el,id,state) {
            console.log(el)
            quantity = el.parentElement.children[1].children[0].value;

            if (quantity < 30) {
                
                el.parentElement.children[0].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                // el.parentElement.children[0].setAttribute('disabled', true);
                el.parentElement.children[0].disabled = true;
                el.parentElement.children[0].removeAttribute('onclick');

                el.parentElement.children[2].innerHTML =
                `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

                `;
                el.parentElement.children[2].disabled=true;
                el.parentElement.children[2].removeAttribute('onclick');

                if(state=='plus'){
                    quantity++;
                }else{
                    quantity--;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                $.ajax({
                    url: "{{url('cart/update/cart')}}"+"/"+id,
                    type: "post",
                    dataType:"json",
                    data:{
                        'quantity':quantity,
                    },
                    success: function(data) {
                        el.parentElement.children[1].children[0].value = data.quantity
                        if(data.quantity==1){

                            //  تغییر دادن  اس وی جی علامت پلاس  //
                            
                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;


                            //  تغییر دادن  اس وی جی علامت سطل آشغال  //

                            el.parentElement.children[2].innerHTML =
                            `
                            <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                            `
                            el.parentElement.children[2].setAttribute('onclick',`trash(this,${data.cartId},${data.product.id})`);
                            el.parentElement.children[2].disabled=false;
                        }
                        if(data.quantity>1){

                            //  تغییر دادن  اس وی جی علامت پلاس  //

                            el.parentElement.children[0].removeAttribute('disabled');
                            el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')`)
                            el.parentElement.children[0].innerHTML=
                            `
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                            `
                            ;
                            //  تغییر دادن  اس وی جی علامت ماینس  //

                            el.parentElement.children[2].disabled=false;
                            el.parentElement.children[2].setAttribute('onclick',`updateCart(this,${data.cartId},'minus')`)
                            el.parentElement.children[2].innerHTML =
                            `
                                <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                            `
                        }
                        let product_price=parseInt(data.product.price)
                        let price=parseInt(total_price.value)
                        // total_price.value=price+data.product.price
                        // console.log(price+product_price)
                        if(state=='plus'){
                            total_price.value=price+product_price;
                        }else{
                            total_price.value=price-product_price;
                        }
                    },
                    error: function() {
                        console.log('☢')
                    }
                })
            }
        }
        function trash(el,cart_id,product_id) {
            let trash_icon='';
            console.log(el.closest('.parent_cart'))
            trash_icon=el.parentElement.children[2].innerHTML;
            el.parentElement.children[2].innerHTML =
            `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + cart_id,
                type: "get",
                dataType: "json",
                success: function(productData) {
                
                    cart_counter.innerHTML--
                    if(cart_counter.innerHTML==0){
                        hiddenCart();
                    }
                    el.parentElement.classList.remove('flex')
                    el.parentElement.classList.add('hidden')
                    el.closest('.parent_cart').remove()
                    product_price=parseInt(productData.price)
                    price=parseInt(total_price.value)
                    total_price.value=price-product_price;

                },
                error: function() {
                    console.log('☢')
                }
            })
                // console.log(entry)
            // el.parentElement.children[2].innerHTML =trash_icon
        }


    </script>
        @yield('content')




