<!DOCTYPE html>
<html  lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/stylehome.css')}}">
</head>
<body class = "bg-blue-50">
    <header class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#0B304A]">
        <div class="w-full bg-[#0E2E48] top-0 fixed z-40 left-1/2 -translate-x-1/2">
        <div class="max-w-[1800px] min-w-[325px] mx-auto flex flex-col max-lg:px-3">
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
            <div class="w-full flex items-center gap-20 max-lg:pb-2  max-lg:justify-between max-lg:py-4">
                <div class="w-[25%] flex items-center mb-3 gap-4 max-lg:hidden ">
                    <div class="w-[80px] ">
    
                        <img src="{{asset('assets/img/file_00000000527881f4835e03acef97b338.png')}}" class = "w-[80px]" alt="">
                    </div>
                <div class="flex flex-col gap-2  text-white">
                    <span class = "text-[35px] font-bold text-nowrap">ترازو درختی</span>
                    <span class = "text-[14px] text-nowrap">دقت در اندازه گیری و اعتبار در کسب و کار</span>
                </div>
            </div>
            <div class="w-[70%] flex items-center justify-around gap-10 max-2xl:gap-5 max-2xl:w-[80%] text-white  text-[18px] font-bold   parent_font max-lg:hidden">
                <a class = " text-center fonts" href="{{route('document_phone')}}">تماس باما</a>
                <a class = " text-center fonts" href="{{route('about_as')}}">درباره ما</a>
                <a class = " text-center fonts" href="">محصولات خدمات</a>
                <a class = " text-center fonts" href="">صفحه اصلی</a>
            </div>
            <svg  onclick = "bar_menu()" class = "size-8 fill-white lg:hidden"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/></svg>

            <div class="w-[35%] flex items-center  gap-10  max-xl:w-[30%] max-xl:gap-8   max-lg:w-[70%] max-lg:justify-end ">
                @if(Auth::check())
                <a href="{{route('user.profile')}}">
                    <div class='w-30 px-4 py-1 bg-[#EBECEE] shadow-md rounded-xl duration-500 transition-all hover:shadow-[#099975] text-black text-center'>{{Auth::user()->name}}  خوش آمدید</div>
                </a>
                <div class="lg:block hidden w-[370px] h-[45px]  rounded-[10px] bg-white transition_fast"id="search">
                        <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto h-full  rounded-lg text-black">
                            @csrf
                            <button class="cursor-pointer w-[13%] md:w-10 h-10  flex justify-center items-center p-2">
                                <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                            </button>
                            <input type="text" name="title" class="w-[87%] h-full outline-none text-(--title)" placeholder="کالای خود را جستوجو کن">
                        </form>
                </div>
                @else
                <div class=" flex gap-8 items-center text-white text-[20px] text-nowrap ">
                    <div class=" flex items-center gap-3">

                        <a href="{{route('user.loginPage')}}">
                            ورود
                        </a>
                        <div class="w-[2px] h-[22px] bg-white rotate-12"></div>
                        <a href="{{route('user.loginPage')}}">
                            ثبت نام
                        </a>   
                    </div>
                    <div class="lg:block hidden w-[370px] h-[45px]  rounded-[10px] bg-white transition_fast"id="search">
                            <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto h-full  rounded-lg text-black">
                                @csrf
                                <button class="cursor-pointer w-[13%] md:w-10 h-10  flex justify-center items-center p-2">
                                    <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                                </button>
                                <input type="text" name="title" class="w-[87%] h-full outline-none text-(--title)" placeholder="کالای خود را جستوجو کن">
                            </form>
                    </div>
                    </div>
                    @endif
                    @if($user)
                        <div class='relative'>
                            <div class="flex h-full items-center cursor-pointer " onclick="showCart()">
                                    <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                                </div>
                                <div id='cart' class='absolute hidden border-3 rounded-xl w-120 h-110 -right-130 bg-white '>
                                    @if(Auth::check())
                                        <div class='absolute -top-2 -right-2 bg-red-600 px-2 py-1 rounded-full cursor-pointer' onclick="hiddenCart(this)">x</div>
                                        <?php
                                            $count=0;
                                            $total_price=0;
                                        ?>
                                            <div class='w-full h-full'>
                                                <div id='cart_list' class='w-full h-95 overflow-y-auto flex flex-col gap-2 p-5'>
                                                    @foreach($user->carts as $cart)
                                                        <?php
                                                            $count++;
                                                            $total_price+=$cart->product->price * $cart->quantity;
                                                        ?>
                                                        <div class='parent_cart w-full flex justify-between border-2 gap-4'>
                                                            <div class='w-1/5 p-2'>
                                                                @if(count($cart->product->medias)>0)
                                                                    <img class='w-full h-20 rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                                                @else
                                                                    <div> 🖼 </div>
                                                                @endif
                                                            </div>
                                                            <div class='w-4/5 flex flex-col justify-evenly '>
                                                                <div class='text-xl text-center items-center'>
                                                                    <span> {{$cart->product->title}} </span>
                                                                </div>
                                                                <div class='flex justify-between px-4'>
                                                                    <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                                                        <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                                                        <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-10 font-bold outline-none text-center items-center text-black' readonly value="{{$cart->quantity}}"></div>
                                                                        @if($cart->quantity==1)
                                                                            <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                                                        @else
                                                                            <div onclick="updateCart(this,{{$cart->id}},'minus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>
                                                                        @endif
                                                                    </div>
                                                                    
                                                                    <div class='text-black text-xl'> {{$cart->product->price}} </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div id="cart_buttons" class=' grid grid-cols-2 items-center text-center p-1 gap-2 '>
                                                    <a href="{{route('cart.userCartList')}}" class='bg-green-200 p-2 rounded-sm cursor-pointer'> تکمیل سفارش </a>
                                                    <div class='bg-red-200 p-2 rounded-sm '> <span> قیمت کل: </span><input type="number" value={{$total_price}} disabled class='w-24 text-black font-bold text-sm' id="total_price"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cart_counter" class='absolute -top-3 -left-3 bg-[#FBC830] px-2 py-1 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                                    @endif
                            </div>
                        @else
                            <div onclick="showLoginForm()" class="flex h-full items-center cursor-pointer">
                                <svg class = "size-8 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                            </div>
                    @endif
                    
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
            
           
        </div>
    </div>
    <div class="max-w-[21000px] min-w-[320px] relative max-lg:mt-20 mt-35">
        <div class="w-full flex relative max-lg:flex-col justify-end">
            <div class="w-[100%] h-10 absolute bg-[#FBC830] bottom-3 z-30 lg:hidden left-1/2 -translate-x-1/2 -rotate-7 -skew-x-13 max-[380px]:-rotate-8"></div>
            <div class="w-[61%] max-lg:h-[120px] max-lg:w-full absolute right-0 !z-20 ">
            <div class="w-12 h-114 absolute bg-[#FBC830] left-42 z-25 -skew-x-30 max-lg:hidden"></div>
                <img class = "w-full h-[457px] relative z-10 max-lg:h-[380px]" src="{{asset('assets/img/file_00000000d6188243b80c993b60cf3bc7.png')}}" alt="">
            </div>
            <div class="w-[55%] h-[457px] flex flex-col items-end text-white relative z-30 justify-center gap-1 max-lg:gap-0 max-lg:p-0 max-lg:pb-5 max-lg:px-3 max-lg:items-center max-lg:w-full pl-15 clip-pathh2 bg-[#091E2F]">
             <span class = "text-[20px]">خانه / تماس باما</span>
             <span class = "text-[65px] font-bold">تماس با <span class = "text-[#F2CE56]">ما</span></span>
             <span class = "text-[40px] max-sm:text-[25px] text-nowrap">ما همیشه در کنار شما هستیم</span>
             <h2 class = "text-[25px] w-125  text-justify leading-12 text-gray-300 max-lg:w-full max-lg:text-[18px] max-lg:leading-10">در رصورت داشتن هرگونه سوال پیشنهاد با نیاز به مشاوره می توانید از طریق راه های ارتبازی زیر با ما در تماس باشید</h2>
             <a class = "w-[260px] h-[50px] bg-[#FBC830] mt-1 rounded-[30px] flex items-center justify-center gap-5 text-black text-[18px] max-lg:mt-3 max-sm:w-[200px] max-lg:text-[15px] max-lg:gap-2 max-lg:h-[45px] max-lg:self-end" href="{{route('single_amir')}}">
                 <span>بازگشت به صفحه اصلی</span>
                 <svg class = "size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                </a>
               
            </div>
        </div> 
       
    </div>
    </header>
    <main class = "max-w-[21000px] min-w-[325px]">
        <section class = "max-w-[1800px] min-w-[325px] mx-auto max-lg:px-3 mt-10 max-lg:mt-75">
            <div class="w-full flex gap-6 max-lg:flex-col">
                <div class="w-[25%] max-lg:w-full flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-[#FBC830]">
                        <svg class = "size-6 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg> 
                    </div>
                    <span class = "text-[25px] text-[#0E2E48]">ساعات کاری</span>
                    <div class="flex flex-col gap-1 items-center text-[17px] text-gray-500">
                        <span>شنبه تا پنجشنبه</span>
                        <span>8 صبح تا 5 عصر</span>
                    </div>
                    <div class="w-45 h-12 bg-blue-50 flex items-center gap-2 text-[15px] text-[#0E2E48] justify-center rounded-[10px]">
                        <svg class = "size-4 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                        <span>مشاهده زمان ها</span>
                    </div>
                </div>
                <div class="w-[25%] max-lg:w-full flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-[#FBC830]">
                        <svg class = "size-6 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    </div>
                    <span class = "text-[25px] text-[#0E2E48]">ایمیل</span>
                    <div class="flex flex-col gap-1 items-center text-[17px] text-gray-500 my-3">
                        <span>amir@gmail.com</span>
                    </div>
                    <div class="w-45 h-12 bg-blue-50 flex items-center gap-2 text-[15px] text-[#0E2E48] justify-center rounded-[10px]">
                        <svg class = "size-4 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        <span>ارسال ایمیل</span>
                    </div>
                </div>
                <div class="w-[25%] max-lg:w-full flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-[#FBC830]">
                        <svg class = "size-6 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
                    </div>
                    <span class = "text-[25px] text-[#0E2E48]">ساعات کاری</span>
                    <div class="flex flex-col gap-1 items-center text-[17px] text-gray-500">
                        <span>021-44448288</span>
                        <span>09122146589</span>
                    </div>
                    <div class="w-45 h-12 bg-blue-50 flex items-center gap-2 text-[15px] text-[#0E2E48] justify-center rounded-[10px]">
                        <svg class = "size-4 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        <span>تماس بگیرید</span>
                    </div>
                </div>
                <div class="w-[25%] max-lg:w-full flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-[#FBC830]">
                        <svg class = "size-6 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                    </div>
                    <span class = "text-[25px] text-[#0E2E48]">ساعات کاری</span>
                    <div class="flex flex-col gap-1 items-center text-[17px] text-gray-500">
                        <span>شنبه تا پنجشنبه</span>
                        <span>8 صبح تا 5 عصر</span>
                    </div>
                    <div class="w-45 h-12 bg-blue-50 flex items-center gap-2 text-[15px] text-[#0E2E48] justify-center rounded-[10px]">
                        <svg class = "size-4 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        <span>مشاهده نقشه</span>
                    </div>
                </div>
            </div>
        </section>
        <section class = "max-w-[1800px] min-w-[325px] mx-auto  mt-10 mb-30 max-lg:max-w-[2100px]">
            <div class="w-full flex bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-8 max-lg:p-3 gap-15 max-lg:flex-col max-lg:bg-inherit">
                <div class="w-[40%] max-lg:w-full flex flex-col bg-[#091E2F] rounded-[20px] p-10  gap-8 max-lg:p-5 overflow-hidden relative">
                    <div class="w-13 h-80 bg-[#FBC830] absolute skew-x-30 bottom-0 -left-10"></div>
                    <div class="w-13 h-80  absolute skew-x-30 bottom-0 left-3 leanerrr"></div>
                    <div class="w-10 h-1 bg-[#F2CE56]"></div>
                    <span class = "text-[#FBC830] text-[30px] font-bold">با <span class = "text-white">ما در ارتباط باشید</span></span>
                    <p class = "text-gray-300 text-[20px] leading-9 w-[85%]">ما به پیام های شما اسرع وقت شاسخ خواهیم داد و از اینکه وقت خود را برای ما میگذارید سپاسگزاریم</p>
                    <div class="w-full flex flex-col gap-10">
                        <div class="w-full flex gap-5">
                            <div class="w-30 h-25 max-lg:w-32 max-lg:h-20 rounded-full border-1 border-gray-300 flex items-center justify-center">
                                 <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-10 fill-[#F8C028] " viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" fill="#F8C028"/> </g>
                                
                            </svg>
                            </div>
                            <div class="w-full flex flex-col justify-center gap-2">
                                <h3 class = "text-[25px] text-gray-300">پشتیبانی سریع</h3>
                                <span class = "text-[18px] text-gray-400">پاسخ گویی در کوتاه ترین زمان</span>
                            </div>
                        </div>
                        <div class="w-full flex gap-5">
                            <div class="w-30 h-25 max-lg:w-32 max-lg:h-20 rounded-full border-1 border-gray-300 flex items-center justify-center">
                               <svg class = "size-11 fill-[#FBC830]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M243.5 37.3c8-3.4 17-3.4 25 0l176.7 75c11.3 4.8 18.9 15.5 18.8 27.6c-.5 94-39.4 259.8-195.5 334.5c-7.9 3.8-17.2 3.8-25.1 0C87.3 399.6 48.5 233.8 48 139.8c-.1-12.1 7.5-22.8 18.8-27.6l176.7-75zM281 7.8c-16-6.8-34-6.8-50 0L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L281 7.8zm82.3 195.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z"/></svg>
                            </div>
                            <div class="w-full flex flex-col justify-center gap-2">
                                <h3 class = "text-[25px] text-gray-300">شماوره تخصصی</h3>
                                <span class = "text-[18px] text-gray-400">راهنمایی قبا از خرید</span>
                            </div>
                        </div>
                        <div class="w-full flex gap-5">
                            <div class="w-30 h-25 max-lg:w-32 max-lg:h-20 rounded-full border-1 border-gray-300 flex items-center justify-center">
                              <svg class = "size-11 fill-[#FBC830]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M352 48c8.8 0 16 7.2 16 16V352c0 8.8-7.2 16-16 16H320 243.2c-16.6-28.7-47.6-48-83.2-48s-66.6 19.3-83.2 48H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H352zm32 368c0 53 43 96 96 96s96-43 96-96h40c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8V245.3c0-14.9-5.9-29.1-16.4-39.6l-93.3-93.3C487.8 101.9 473.6 96 458.7 96H416V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64c0 53 43 96 96 96s96-43 96-96h64 32 24 8zM557.7 239.6c.1 .1 .3 .3 .4 .4H416V144h42.7c2.1 0 4.2 .8 5.7 2.3l93.3 93.3zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>                                                  
                            </div>
                            <div class="w-full flex flex-col justify-center gap-2">
                                <h3 class = "text-[25px] text-gray-300 z-20">ارسال ی هسراسر کشور</h3>
                                <span class = "text-[18px] text-gray-400 z-20">با بهترین روش های حمل و نقل</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[60%] max-lg:w-full flex flex-col items-end gap-2 max-lg:order-first max-lg:bg-white max-lg:p-5 max-lg:rounded-[15px] max-lg:shadow-sm">
                    <div class="flex gap-3 items-center text-[20px]">
                        <span>ارسال پیام</span>
                        <div class="w-8 h-1 bg-[#FBC830]"></div>
                    </div>
                    <span class = "text-[#0E2E48] text-[45px] font-bold">فرم تماس با ما</span>
                    <span class = "text-[23px] text-gray-500 mb-3">لطفا اطلاعات خود را وارد کنید تا در سریعترین زمان ممکن با شما تماس بگیریم</span>
                    <div class="w-full flex flex-col gap-8">
                        <div class="w-full flex gap-5 max-lg:flex-col">
                            <div class="w-[50%] max-lg:w-full flex bg-white border-1 border-gray-300 rounded-[10px] ">
                                <div class="w-[25px] flex items-center justify-center m-2 mr-4 ">
                                    <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                                </div>
                                <input class = "w-[95%] outline-none text-[#0E2E48] h-15 text-[25px] focus:bg-blue-50  focus:border-gray-600 rounded-[10px] p-3 transition-all duration-300 placeholder-[#0E2E48]" type="text" name="" id="" placeholder = "نام و نام خانوادگی">
                            </div>
                            <div class="w-[50%] max-lg:w-full flex bg-white border-1 border-gray-300 rounded-[10px]">
                                <div class="w-[25px] flex items-center justify-center m-2 mr-4">
                                    <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                                </div>
                                <input class = "w-[95%] outline-none text-[#0E2E48] h-15 text-[25px] focus:bg-blue-50  focus:border-gray-600 rounded-[10px] p-3 transition-all duration-300 placeholder-[#0E2E48]" type="text" name="" id="" placeholder = "شماره موبایل">
                            </div>
                        </div>
                        <div class="w-full flex bg-white border-1 border-gray-300 rounded-[10px]">
                            <div class="w-[25px] flex items-center justify-center m-2 mr-4">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        </div>
                        <input class = "w-[98.5%] outline-none text-[#0E2E48] h-15 text-[25px] focus:bg-blue-50  focus:border-gray-600 rounded-[10px] p-3 transition-all duration-300 placeholder-[#0E2E48]" type="text" name="" id="" placeholder = "ایمیل (اختیاری)">
                        </div>
                        <div class="w-full flex justify-between items-center bg-white border-1 border-gray-300 rounded-[10px]">
                            <div class="w-[25px] flex items-center justify-center mr-4">
                                <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z"/></svg>
                            </div>
                                <div class="w-full flex flex-col gap-2 p-3">
                                    <span class = "font-bold">موضوع پیام</span>
                                    <select class = "w-full flex items-center justify-between cursor-pointer " name="" id="">
                                        <option value="">انتخاب کنید</option>
                                        <option value="">انتخاب کنید</option>
                                    </select>
                                </div>
                        </div>
                    <div class="w-full flex bg-white border-1 border-gray-300 rounded-[10px]">
                        <div class="w-full flex gap-2 pt-5">
                            <div class="w-[25px] flex tems-center justify-center mr-4">
                                <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M208 416c0-26.5-21.5-48-48-48H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H448c8.8 0 16 7.2 16 16V352c0 8.8-7.2 16-16 16H309.3c-10.4 0-20.5 3.4-28.8 9.6L208 432V416zm-.2 76.2l.2-.2 101.3-76H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h48 48v48 4 .3 6.4V496c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L202.7 496l5.1-3.8zM120 192c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm224 0c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H344zM120 272c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H392c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"/></svg>
                            </div>
                            <div class="w-[95%] flex flex-col gap-3">
                                <span class = "font-bold">پیام شما*</span>
                                <textarea name="" id="" cols = "110" rows = "5" placeholder = "متن پیام خود را بنویسید..."></textarea>
                            </div>
                        </div>
                    </div>
                    <a href = "" class="w-[250px] h-[60px] bg-[#FBC830] flex items-center justify-center rounded-[30px] self-end gap-3 font-bold max-lg:self-center">
                        <span>ارسال پیام</span>
                        <svg class = "size-5 fill-[#0E2E48]" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.4193 7.30899C41.4193 7.30899 45.3046 5.79399 44.9808 9.47328C44.8729 10.9883 43.9016 16.2908 43.1461 22.0262L40.5559 39.0159C40.5559 39.0159 40.3401 41.5048 38.3974 41.9377C36.4547 42.3705 33.5408 40.4227 33.0011 39.9898C32.5694 39.6652 24.9068 34.7955 22.2086 32.4148C21.4531 31.7655 20.5897 30.4669 22.3165 28.9519L33.6487 18.1305C34.9438 16.8319 36.2389 13.8019 30.8426 17.4812L15.7331 27.7616C15.7331 27.7616 14.0063 28.8437 10.7686 27.8698L3.75342 25.7055C3.75342 25.7055 1.16321 24.0823 5.58815 22.459C16.3807 17.3729 29.6555 12.1786 41.4193 7.30899Z" fill="#000000"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </section>
        <!-- <section class = "max-w-[1800px] min-w-[320px] mx-auto bg-white rounded-[10px] max-lg:px-3">
            <div class="w-full flex gap-10 p-8">
                <div class="w-3/7 flex flex-col relative items-end justify-between gap-10 p-8 py-12">
                    <img class = "absolute w-[60%] top-10 right-0 opacity-10" src="{{asset('assets/img/building1.png')}}" alt="">
                    <div class=" flex items-center gap-3">
                        <span class = "text-[28px] font-bold text-[#0E2E48]">موقعیت ما</span>
                        <div class="w-13 h-13 rounded-full flex items-center justify-center bg-[#FBC830] gap-3">
                            <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        </div>
                    </div>
                    <span class = "text-[20px] text-gray-800 z-10">تهران خیابان ولیعصر کوچه شهید رجایی پلاک 12</span>
                    <a href = "" class="w-48 h-15 border-1 border-gray-300 flex items-center justify-center gap-4 text-[19px] text-[#0E2E48] rounded-[30px] font-bold">
                        <svg class = "size-6 fill-[#0E2E48]" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.4193 7.30899C41.4193 7.30899 45.3046 5.79399 44.9808 9.47328C44.8729 10.9883 43.9016 16.2908 43.1461 22.0262L40.5559 39.0159C40.5559 39.0159 40.3401 41.5048 38.3974 41.9377C36.4547 42.3705 33.5408 40.4227 33.0011 39.9898C32.5694 39.6652 24.9068 34.7955 22.2086 32.4148C21.4531 31.7655 20.5897 30.4669 22.3165 28.9519L33.6487 18.1305C34.9438 16.8319 36.2389 13.8019 30.8426 17.4812L15.7331 27.7616C15.7331 27.7616 14.0063 28.8437 10.7686 27.8698L3.75342 25.7055C3.75342 25.7055 1.16321 24.0823 5.58815 22.459C16.3807 17.3729 29.6555 12.1786 41.4193 7.30899Z" fill="#000000"/>
                        </svg>
                        <span>مسیر یابی</span>
                    </a>
                </div>
                <div class="w-4/7 flex justify-between items-end p-6 bg-[url({{asset('assets/img/file_000000008f1481f49cbea54da4a09425.png')}})] bg-cover be-center rounded-[20px]">
                    <div class="w-50 h-15 flex items-center justify-center gap-3 bg-[#FBC830] rounded-[30px] font-bold">
                        <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        <span>مشاهده در نقشه</span>
                    </div>
                    <div class="w-14 h-25 border-1 border-gray-200 bg-white shadow-sm shadow-gray-500 flex flex-col items-center p-3 justify-between rounded-[10px]">
                        <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                        <div class="w-[90%] h-[1px] bg-gray-300"></div>
                        <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M248 72c0-13.3-10.7-24-24-24s-24 10.7-24 24V232H40c-13.3 0-24 10.7-24 24s10.7 24 24 24H200V440c0 13.3 10.7 24 24 24s24-10.7 24-24V280H408c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V72z"/></svg>
                    </div>
                </div>
            </div>
        </section> -->
    </main>
       <!-- <footer class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#061F35] flex flex-col items-center gap-8 max-lg:px-3 max-lg:gap-4 mt-10">
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
                    <div class="w-[50px] h-[50px] rounded-full flex items-center justify-center max-lg:w-[45px] max-lg:h-[45px]">
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
                <a href = "#" class = "text-gray-400 text-[20px]">صفحه اصلی</a>
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
    </footer> -->

</body>
</html>