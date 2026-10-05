<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/stylehome.css')}}">
</head>
<body class = "relative">
    <header class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#0B304A] ">
        <div class="max-w-[1800px] min-w-[325px] mx-auto flex flex-col p-3 ">
            <div class="flex items-center gap-7 max-xl:gap-2  max-lg:hidden max-lg:gap-2">
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
            <div class="w-full flex items-center gap-30 max-lg:pb-2 max-xl:gap-5  max-lg:justify-between">

                <div class="w-[35%] flex items-center  gap-20  max-xl:w-[30%] max-xl:gap-8 max-lg:w-[5%]">
                    @if($user)
                        <div class='relative'>
                            <div class="flex h-full items-center cursor-pointer" onclick="showCart()">
                                <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                            </div>
                            <div id='cart' class='absolute hidden border-3 rounded-xl w-120 h-110 -right-130 bg-white z-100'>
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
                                    <div id="cart_counter" class='absolute -top-3 -left-3 bg-green-800 px-2 py-1 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                                @endif
                        </div>
                    @else
                        <div onclick="showLoginForm()" class="flex h-full items-center cursor-pointer">
                            <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"> <circle cx="9" cy="21" r="1" /> <circle cx="20" cy="21" r="1" /> <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" /> </svg>
                        </div>
                    @endif
                    @if(Auth::check())
                        <a href="{{route('user.profile')}}">
                            <div class='px-4 py-3 bg-[#EBECEE] shadow-md rounded-xl duration-500 transition-all hover:shadow-[#099975] text-black'>{{Auth::user()->name}}  خوش آمدید</div>
                        </a>
                    @else
                        <a href="{{route('user.loginPage')}}">
                            <svg class='w-5 fill-white'  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </a>
                    @endif
                    <div class="lg:block hidden w-[370px] h-[45px] bg-white rounded-[10px] transition_fast"id="search">
                        <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto mt-3 bg-[#f0f0f1] rounded-lg text-black">
                            @csrf
                            <button class="cursor-pointer w-1/10 md:w-10 h-10  flex justify-center items-center">
                                <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                            </button>
                            <input type="text" name="title" class="w-full h-full outline-none text-(--title)" placeholder="کالای خود را جستوجو کن">
                        </form>
                        <!--  -->
                    <!--⏬ یدونه دیو بسته نزاشتی پارتیشن ها به هم میخوره منم نزاشتم که  قاطی نشه -->
                        <!--  -->
                    <!-- <div class="w-[370px] h-[45px] bg-white rounded-[10px] flex max-lg:hidden">
                        <input class = "w-[85%]  outline-none text-black text-right " type="text" name="" id="" placeholder = "...جستو جوی محصول و برند">
                        <div class="w-[15%] flex items-center justify-center ">
                            <svg class = "size-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 208A176 176 0 1 0 32 208a176 176 0 1 0 352 0zM343.3 366C307 397.2 259.7 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 51.7-18.8 99-50 135.3L507.3 484.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L343.3 366z"></svg>
                    </div> -->
                </div>
            </div>
          
            <svg class = "size-8 fill-white lg:hidden"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/></svg>
            <div class="w-[70%] flex items-center justify-around gap-10 max-2xl:gap-5 max-2xl:w-[80%] text-white  text-[18px] font-bold   parent_font max-lg:hidden">
                <a class = " text-center fonts" href="">تماس باما</a>
                <a class = " text-center fonts" href="">درباره ما</a>
                <a class = " text-center fonts" href="">محصولات خدمات</a>
                <a class = " text-center fonts" href="">صفحه اصلی</a>
            </div>
            <div class="w-[25%] flex items-center justify-end gap-4 max-lg:hidden ">
                <div class="flex flex-col gap-2 items-end text-white">
                    <span class = "text-[35px] font-bold text-nowrap">ترازو درختی</span>
                    <span class = "text-[14px] text-nowrap">دقت در اندازه گیری و اعتبار در کسب و کار</span>
                </div>
                <div class="w-[80px] ">

                    <img src="{{asset('assets/img/file_00000000527881f4835e03acef97b338.png')}}" class = "w-[80px]" alt="">
                </div>
            </div>
           
        </div>
        <div class="w-full h-[45px] bg-white rounded-[10px] transition_fast lg:hidden"id="search">
            <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto mt-3 bg-[#f0f0f1] rounded-lg text-black">
                @csrf
                <button class="cursor-pointer w-1/10 md:w-10 h-10  flex justify-center items-center">
                    <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                </button>
                <input type="text" name="title" class="w-full h-full outline-none text-(--title)" placeholder="کالای خود را جستوجو کن">
            </form>
        </div>
    </div>
    <!-- bg-[#061F35] -->
    <div class="max-w-[21000px] min-w-[325px] relative">
        <div class="w-1/2 left-0 top-0 h-full absolute leaner z-10 max-lg:w-full max-lg:h-[530px]"></div>
        <div class="w-1/2 right-0 top-0 h-full absolute leaner-left z-10 max-lg:hidden"></div>
        <div class="w-full flex relative max-lg:flex-col">
            <div class="w-[30%] max-xl:w-[40%] flex flex-col  items-start text-white z-20  justify-center pl-18 p-5 max-lg:p-0 max-lg:pt-5 max-lg:items-center max-lg:w-full">
                <p class = "text-[#D99A16] text-[25px] max-2xl:text-[20px] max-lg:text-[20px]">
                    فروش انواع ترازوهای
                    <span class = "text-white">دیجیتال و مکانیکی</span>
                </p>
                <span class = "font-bold text-[60px] max-2xl:text-[40px] max-lg:text-[46px] ">دقت در وزن کشی</span>
                <span class = "font-bold text-[#D99A16] text-[60px]  ">سرمایه شماست</span>
                <p class = "text-[20px] w-[400px] flex items-center justify-center text-start leading-8   max-lg:w-full max-lg:text-center max-lg:px-3">تامین و فروش انواع ترازوهای فروشگاهیم,پزشکی و ازمایشگاهی با بهترین کیفیت و قیمت مناسب</p>
                <a class = "w-[220px] h-[50px] bg-[#D99A16] mt-1 rounded-[30px] flex items-center justify-center gap-5 text-black text-[20px] max-lg:mt-3" href="">
                    <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></svg>
                    <span>مشاهده محصولات</span>
                </a>
               
            </div>
            <div class="w-[60%] max-lg:h-[200px] max-lg:w-full">
                <img class = "w-full h-full" src="{{asset('assets/img/scale.png')}}" alt="">
            </div>
            <div class="w-[17%] h-[300px] rounded-l-[40px] text-white top-15 z-10 bg-[#0B304A]/20 flex flex-col p-8 items-center absolute gap-3 right-0 max-2xl:w-[20%] max-2xl:top-5 max-xl:w-[25%]  max-lg:hidden">
                <div class="w-full flex  items-end justify-end gap-6  max-2xl:justify-center max-2xl:items-center">
                    <div class="flex flex-col  items-end ">
                        <span class = "font-bold text-[23px]">کیفیت تضمینی</span>
                        <span class = "text-gray-400 text-[14px]">با ضمانت و اصالت بالا</span>
                    </div>
                    <div class="w-[50px] h-[50px] border rounded-full border-slate-600 flex items-center justify-center  p-2 max-2xl:justify-center max-2xl:items-center">
                        <svg class = "fill-[#D99A16] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                    </div>
                </div>
                <div class="w-[140px] h-[1px] bg-slate-800"></div>
                <div class="w-full flex  items-end justify-end gap-6 max-2xl:justify-center max-2xl:items-center">
                    <div class="flex flex-col items-end">
                        <span class = "font-bold text-[23px]">کیفیت تضمینی</span>
                        <span class = "text-gray-400 text-[14px]">با ضمانت و اصالت بالا</span>
                    </div>
                    <div class="w-[50px] h-[50px] border rounded-full flex items-center justify-center border-slate-600 ">
                        <svg class = "fill-[#D99A16] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                    </div>
                </div>
                
                <div class="w-[140px] h-[1px] bg-slate-800"></div>
                <div class="w-full flex  items-end justify-end gap-6 max-2xl:justify-center max-2xl:items-center">
                    <div class="flex flex-col items-end">
                        <span class = "font-bold text-[23px]">کیفیت تضمینی</span>
                        <span class = "text-gray-400 text-[14px]">با ضمانت و اصالت بالا</span>
                    </div>
                    <div class="w-[50px] h-[50px] border rounded-full flex items-center justify-center border-slate-600">
                        <svg class = "fill-[#D99A16] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                    </div>
                </div>
        </div>
        <div class="w-full absolute h-37 flex justify-center items-center lg:hidden -bottom-34 bg-[#0B304A] rounded-[15px] border-1 shadow-sm shadow-[#0B304A] border-gray-400 gap-1">
            <div class="w-[35%] flex flex-col gap-2 items-center justify-center   h-[140px]">
                <svg class = "fill-[#D99A16] size-8 mt-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                <div class="w-full flex flex-col gap-3 items-center justify-center text-white">
                    <span class = "text-nowrap text-[18px]">کیفیت تضمینی</span>
                    <span class = "text-[15px] text-nowrap text-gray-400">با ضمانت اصالت کالا</span>
                </div>
            </div>
            <div class="h-[90%] w-[1px] bg-gray-700"></div>
            <div class="w-[35%] flex flex-col gap-2 items-center justify-center   h-[140px]">
                <svg class = "fill-[#D99A16] size-8 mt-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                <div class="w-full flex flex-col gap-3 items-center justify-center text-white">
                    <span class = "text-nowrap text-[18px]">ارسال سریع</span>
                    <span class = "text-[15px] text-nowrap text-gray-400">به سراسر کشور</span>
                </div>
            </div>
            <div class="h-[90%] w-[1px] bg-gray-700"></div>
            <div class="w-[35%] flex flex-col gap-2 items-center justify-center   h-[140px]">
                <svg class = "fill-[#D99A16] size-8 mt-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                <div class="w-full flex flex-col gap-3 items-center justify-center text-white">
                    <span class = "text-nowrap text-[18px]">پشتیبانی تخصصی</span>
                    <span class = "text-[15px] text-nowrap text-gray-400">پپاسخگویی 24 ساعته</span>
                </div>
            </div>
        </div>
    </div>
    </header>

  <main class = "max-w-[21000px] min-w-[325px] my-10 max-lg:mt-40">
     <section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 px-3"> 
            <div class="w-full mx-auto flex flex-col items-center">
                <div class="w-[300px] flex flex-col items-center  ">
                    <div class="w-full flex gap-2 items-center justify-center ">
                        <div class="w-[50px] h-[3px] bg-[#F8C028]"></div>
                        <span class = "text-[25px] text-[#0B304A] text-nowrap">کاربرد های ترازو درختی</span>
                        <div class="w-[50px] h-[3px] bg-[#F8C028]"></div>
                    </div>
                    <div class="w-full flex flex-col gap-1 items-center ">
                        <span class = "text-[30px] text-[#0B304A]">مناسب برای همه صنایع</span>
                        <span class = "text-gray-400 text-center">ترازوهای ما در انواع کسب و کارها و صنایع مختلف کارایی و دقت بالا دارند</span>
                    </div>
                </div>
                <div class="w-full grid grid-cols-3 gap-8 mt-5 max-lg:grid-cols-1">
                    <div class="w-full h-[250px] rounded-[20px] max-lg:h-[190px] bg-[url('{{asset('assets/img/2.png')}}')] bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero rounded-[15px] p-3 max-lg:p-1 items-center justify-center ">
                            <div class="w-[20%] bg-black/20 flex items-center  justify-center">

                                <xml version="1.0" encoding="iso-8859-1">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg class = "size-15 fill-white max-lg:size-10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 442.548 442.548"
	 xml:space="preserve">
     <g>
	<path d="M415.264,168.488L382.837,48.455c-0.996-3.667-2.532-7.13-4.381-10.391c2.745-3.927,4.381-8.685,4.381-13.839
    C382.837,10.843,371.985,0,358.612,0H81.106c-13.38,0-24.219,10.848-24.219,24.225c0,6.695,2.708,12.752,7.107,17.141
		c-1.806,3.198-3.299,6.604-4.272,10.197L27.299,171.596c-4.389,16.251,1.987,29.967,14.479,33.234v237.717h361.037V200.933
		C413.891,196.735,419.39,183.796,415.264,168.488z M311.258,68.569l27.398,101.416c0.421,1.579,1.051,3.092,1.652,4.61
		c-12.236,20.033-30.014,28.733-49.385,23.915c-17.005-4.219-28.87-17.269-29.127-26.525V73.243c0-1.598-0.241-3.139-0.477-4.673
		H311.258z M103.908,173.098l28.234-104.529h47.541c-0.241,1.535-0.476,3.075-0.476,4.673V173.84l-0.061-0.03
		c-11.304,21.382-28.776,30.925-47.913,26.17c-15.863-3.934-26.922-16.183-26.922-24.706h-1.193
		C103.371,174.54,103.705,173.845,103.908,173.098z M300.752,417.874H105.97v-77.91h34.955c3.35-7.561,10.891-12.849,19.699-12.849
		c8.794,0,16.345,5.288,19.689,12.849h71.141c1-10.977,10.128-19.601,21.367-19.601c11.229,0,20.361,8.624,21.356,19.601h6.578
		v77.91H300.752z M146.076,311.915c0-8.384,6.807-15.188,15.195-15.188s15.189,6.805,15.189,15.188c0,8.396-6.801,15.2-15.189,15.2
		S146.076,320.311,146.076,311.915z M258.272,305.163c0-8.384,6.802-15.191,15.189-15.191c8.39,0,15.192,6.808,15.192,15.191
		c0,8.393-6.803,15.2-15.192,15.2C265.074,320.363,258.272,313.556,258.272,305.163z M384.119,423.85h-23.893V266.213H85.977V423.85
		h-25.5V205.851l5.489,0.106c12.99,0.263,26.539-9.498,33.877-23.064c4.192,10.142,15.936,19.68,29.899,23.145
		c2.726,0.675,6.534,1.337,11,1.337c11.003,0,25.98-4.047,38.511-21.787c0.236,16.906,14.052,24.52,31.12,24.52h20.256
		c14.72,0,26.972-10.235,30.244-23.953c6.029,8.292,16.558,15.436,28.558,18.408c2.917,0.727,7.004,1.434,11.781,1.434
		c12.088,0,28.635-4.578,42.273-24.818c7.483,12.832,20.562,21.91,33.108,21.665l7.526-0.146V423.85z"/>
    </g>
</svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px] text-nowrap">فروشگاهای سوپرمارکت ها</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">ترازوهای فروشگاهی</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] max-lg:h-[190px] rounded-[20px] bg-[url('{{asset('assets/img/6.jpg')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero max-lg:justify-center rounded-[15px] p-3 max-lg:p-1">
                            <div class="w-[20%] flex items-center justify-center">
<xml version="1.0" encoding="utf-8">

<svg class = "size-15 fill-white max-lg:size-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="800px" height="800px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path d="M4,18v2h4v-2H4 M4,14v2h10v-2H4 M10,18v2h4v-2H10 M16,14v2h4v-2H16 M16,18v2h4v-2H16 M2,22V8l5,4V8l5,4V8l5,4l1-10h3l1,10
	v10H2z"/>
<rect fill="none" width="24" height="24"/>
</svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px]">کارخانه های تولیدی ها</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">ترازو های صنعتی و دقیق</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] max-lg:h-[190px] rounded-[20px] bg-[url('{{asset('assets/img/5.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero max-lg:justify-center rounded-[15px] p-3 max-lg:p-1">
                            <div class="w-[20%] flex items-center justify-center">

                               <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

<svg class = "size-15 fill-white max-lg:size-10" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#ffff" stroke="#0000"> <g id="SVGRepo_bgCarrier" stroke-width="0"/> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/> <g id="SVGRepo_iconCarrier"> <title>ionicons-v5-p</title> <path d="M57.49,47.74,425.92,416.17a37.28,37.28,0,0,1,0,52.72h0a37.29,37.29,0,0,1-52.72,0l-90-91.55A32,32,0,0,1,274,354.91v-5.53a32,32,0,0,0-9.52-22.78l-11.62-10.73a32,32,0,0,0-29.8-7.44h0A48.53,48.53,0,0,1,176.5,295.8L91.07,210.36C40.39,159.68,21.74,83.15,57.49,47.74Z" style="fill:white;stroke:#0000;stroke-linejoin:round;stroke-width:32px"/> <path d="M400,32l-77.25,77.25A64,64,0,0,0,304,154.51v14.86a16,16,0,0,1-4.69,11.32L288,192" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <path d="M320,224l11.31-11.31A16,16,0,0,1,342.63,208h14.86a64,64,0,0,0,45.26-18.75L480,112" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <line x1="440" y1="72" x2="360" y2="152" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <path d="M200,368,100.28,468.28a40,40,0,0,1-56.56,0h0a40,40,0,0,1,0-56.56L128,328" style="fill:white;stroke:#0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> </g> </svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px]">صنایع غذایی و رستوران ها</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">ترازوهای اشپزخانه و صنعتی</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] max-lg:h-[190px] rounded-[20px] bg-[url('{{asset('assets/img/1.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero max-lg:justify-center rounded-[15px] p-3 max-lg:p-1">
                            <div class="w-[20%] flex items-center justify-center">

                              <xml version="1.0" encoding="utf-8">
<svg class = "size-15 fill-white max-lg:size-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M21 7.5L17 9.5M12 12L3 7.5M12 12V21.5M12 12C12 12 14.7426 10.6287 16.5 9.75C16.6953 9.65237 17 9.5 17 9.5M17 9.5V13M17 9.5L7.5 4.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px]">انبار ها و مراکز توزیع</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">ترازوهای بالت و باسکول</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] max-lg:h-[190px] rounded-[20px] bg-[url('{{asset('assets/img/3.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero max-lg:justify-center rounded-[15px] p-3 max-lg:p-1">
                            <div class="w-[20%] flex items-center justify-center">

                              <xml version="1.0" encoding="utf-8">

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg class = "size-15 fill-white max-lg:size-10" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
	<path  d="M34.929,7.629c-0.205-0.513-0.787-0.763-1.297-0.557c-0.513,0.203-0.764,0.784-0.562,1.297
		c0.019,0.047,1.84,4.804-0.032,11.356c0,0-0.001,0.007-0.001,0.011c-1.215,1.103-2.459,2.271-3.744,3.557
		c-1.357,1.357-2.591,2.671-3.745,3.948c0.998-9.183-0.498-16.128-0.571-16.458c-0.12-0.539-0.654-0.876-1.193-0.76
		c-0.539,0.12-0.879,0.654-0.76,1.193c0.019,0.086,1.823,8.469,0.13,18.763c-2.26,2.695-4.05,5.14-5.464,7.261
		c0.709-7.9-0.644-14.145-0.713-14.457c-0.12-0.539-0.65-0.886-1.193-0.759c-0.539,0.119-0.879,0.653-0.76,1.192
		c0.02,0.087,1.885,8.75,0.048,18.297c-1.383,2.488-1.953,3.988-2.01,4.141c-0.19,0.518,0.074,1.092,0.592,1.283
		C13.768,46.979,13.885,47,14,47c0.406,0,0.788-0.25,0.938-0.653c0.013-0.034,0.5-1.302,1.684-3.468
		c10.438-2.726,19.995,0.051,20.092,0.079C36.809,42.986,36.905,43,37,43c0.431,0,0.828-0.28,0.958-0.714
		c0.158-0.528-0.142-1.085-0.671-1.244C36.897,40.924,28.2,38.391,18,40.506c1.416-2.316,3.406-5.218,6.108-8.52
		c0.052-0.006,0.104-0.008,0.154-0.021c10.595-2.889,21.367-0.029,21.475,0C45.825,31.988,45.913,32,46,32
		c0.44,0,0.844-0.292,0.965-0.737c0.145-0.533-0.169-1.082-0.702-1.228c-0.425-0.116-9.801-2.598-20.012-0.576
		c1.341-1.524,2.814-3.109,4.456-4.752c1.41-1.41,2.777-2.693,4.103-3.88c6.452-1.649,12.852,0.116,12.916,0.135
		C47.817,20.987,47.909,21,48,21c0.436,0,0.836-0.287,0.961-0.727c0.151-0.53-0.155-1.083-0.687-1.235
		c-0.239-0.067-4.9-1.367-10.473-0.779c8.531-7.021,14.472-9.294,14.545-9.321c0.518-0.191,0.782-0.767,0.591-1.284
		c-0.191-0.519-0.766-0.779-1.283-0.592c-0.326,0.12-6.805,2.58-16.068,10.431C36.527,11.735,35.004,7.816,34.929,7.629z"/>
	<path  d="M60.893,1.549c-0.136-0.269-0.386-0.462-0.679-0.525c-2.98-0.652-6.97-0.982-11.856-0.982
		c-4.922,0-10.564,0.353-15.481,0.967C17.641,2.912,7,13.601,7,27v18.678L3.103,60.225c-0.428,1.598,0.523,3.244,2.122,3.674
		c1.598,0.426,3.245-0.525,3.673-2.121L11.25,53H31c14.337,0,26-11.663,26-26c0-6.663,0-15.788,3.914-24.594
		C61.036,2.132,61.028,1.816,60.893,1.549z M6.966,61.26c-0.143,0.532-0.691,0.849-1.224,0.707
		c-0.534-0.145-0.851-0.691-0.708-1.225l2.552-9.686c0.405,0.672,0.998,1.212,1.712,1.55L6.966,61.26z M55,27
		c0,13.233-10.767,24-24,24H11c-1.104,0-2-0.896-2-2v-1V27C9,14.641,18.92,4.769,33.124,2.992
		c4.839-0.604,10.391-0.951,15.233-0.951c4.048,0,7.553,0.242,10.238,0.705C55,11.565,55,20.443,55,27z"/>
</g>
</svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px]">کشاورزی و دامداری</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">ترازوهای محصولا ت کشاورزی</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] max-lg:h-[190px] rounded-[20px] bg-[url('{{asset('assets/img/8.jpg')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[130px] max-lg:h-[85px] flex  down_hero max-lg:justify-center rounded-[15px] p-3 max-lg:p-1">
                            <div class="w-[20%] flex items-center justify-center">
<xml version="1.0" encoding="iso-8859-1">
<svg class = "size-15 fill-white max-lg:size-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<circle cx="139.636" cy="384" r="11.636"/>
	</g>
</g>
<g>
	<g>
		<circle cx="407.273" cy="384" r="11.636"/>
	</g>
</g>
<g>
	<g>
		<path d="M498.036,262.982l-34.909-25.6l-33.745-101.236c-1.164-4.655-5.818-8.145-10.473-8.145H314.182
			c-6.982,0-11.636,4.655-11.636,11.636v232.727H196.655c-5.818-26.764-29.091-46.545-57.018-46.545
			c-27.927,0-51.2,19.782-57.018,46.545H34.909c-6.982,0-11.636-4.655-11.636-11.636v-256c0-6.982,4.655-11.636,11.636-11.636
			h267.636c0,6.982,4.655,11.636,11.636,11.636s11.636-4.655,11.636-11.636V81.455c0-6.982-4.655-11.636-11.636-11.636H34.909
			C15.127,69.818,0,84.945,0,104.727v256c0,19.782,15.127,34.909,34.909,34.909h47.709c5.818,26.764,29.091,46.545,57.018,46.545
			c27.927,0,51.2-19.782,57.018-46.545h117.527c6.982,0,11.636-4.655,11.636-11.636V151.273h84.945l26.764,81.455h-23.273
			l3.491-6.982c2.327-5.818,0-12.8-4.655-15.127c-5.818-2.327-12.8,0-15.127,4.655l-9.309,17.455h-27.927
			c-6.982,0-11.636,4.655-11.636,11.636S353.745,256,360.727,256h89.6l33.745,25.6c3.491,2.327,4.655,5.818,4.655,9.309v69.818
			c0,6.982-4.655,11.636-11.636,11.636h-12.8c-5.818-26.764-29.091-46.545-57.018-46.545c-32.582,0-58.182,25.6-58.182,58.182
			c0,32.582,25.6,58.182,58.182,58.182c27.927,0,51.2-19.782,57.018-46.545h12.8c19.782,0,34.909-15.127,34.909-34.909v-69.818
			C512,280.436,507.345,269.964,498.036,262.982z M139.636,418.909c-19.782,0-34.909-15.127-34.909-34.909
			c0-19.782,15.127-34.909,34.909-34.909c19.782,0,34.909,15.127,34.909,34.909C174.545,403.782,159.418,418.909,139.636,418.909z
			 M407.273,418.909c-19.782,0-34.909-15.127-34.909-34.909c0-19.782,15.127-34.909,34.909-34.909
			c19.782,0,34.909,15.127,34.909,34.909C442.182,403.782,427.055,418.909,407.273,418.909z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.636,279.273H58.182c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h209.455
			c6.982,0,11.636-4.655,11.636-11.636S274.618,279.273,267.636,279.273z"/>
	</g>
</g>
</svg>
</div>
                    <div class="w-[60%] flex flex-col gap-2 text-white max-lg:justify-center">
                        <span class = "text-[28px] max-lg:text-[18px]">حمل و نقل و لجستیک</span>
                        <span class = "text-[24px] max-lg:text-[15px] text-gray-400">باسکول و ترازوهای جاده ای</span>
                    </div>
                        <div class="w-[20%]  flex items-center justify-center">
                            <a href = "#" class="w-[50px] h-[50px] bg-[#D99A16] max-lg:w-[40px] max-lg:h-[40px] rounded-full flex items-center justify-center mt-5">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            </a>
                        </div>
                        </div>
                    </div>
                   
                </div>
            </div>
       </section> 
             <section  class = "max-w-[1800px] min-w-[325px] mx-auto justify-center mt-10 p-3">
                <div class="w-full relative flex -z-20 bg-[url('{{asset('assets/img/file_00000000e7948243afb2f2c8987fa0cb.png')}}')]  p-6 overflow-hidden rounded-[15px] px-20 bg-center bg-cover max-lg:p-5 max-lg:flex-col max-lg:gap-5">
                    <div class="absolute w-[10px] h-[200px] bg-[#F8C028] left-0 rotate-30 -top-10"></div>
                    <div class="absolute w-[10px] h-[200px] bg-[#F8C028] right-3 rotate-30 -bottom-10 -z-10"></div>
                    <div class="w-[30%] flex flex-col  gap-3 items-start  max-lg:w-full max-lg:items-center">
                        <div class="flex flex-col gap-3 max-lg:items-center">
                            <div class="w-[160px] h-[50px] text-[25px] flex items-center justify-center bg-[#F8C028] rounded-[25px] max-lg:w-[200px] max-lg:text-[30px] text-white">
                                <span>معرفی ما</span>
                            </div>
                            <div class="flex flex-col">
                                <span class = "text-[70px] text-nowrap text-center text-[#F8C028] max-lg:text-[50px]">ویدیو معرفی</span>
                                <span class = "text-[70px] text-nowrap text-center text-[#002030] max-lg:text-[50px]">ترازوی حرفه ای</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 max-lg:items-center">
                            <span class = "  text-left text-[25px] text-gray-400 max-lg:text-[20px] max-lg:text-center">در این ویدیو با مجموع انواع ترازو خدمات و توانمندی های ما بیشتر اشنا شوید</span>
                            <div class="w-[250px] h-[55px] text-[25px] flex items-center justify-center bg-[#F8C028] rounded-[25px] gap-3  text-white ">
                                <span>تماشای ویدیو</span>
                                <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-[60%]  rounded-[15px] max-lg:w-full">
                        <video src="{{asset('assets/video/VID_20260928_124814_328.mp4')}}" controls class="w-full max-h-108 rounded-[15px]"></video>
                    </div>
                    <div class="w-[30%] flex flex-col  items-end gap-8 justify-center max-lg:hidden">
                        <div class="w-[80%]  flex items-start justify-end  gap-7">
                            <div class="flex flex-col items-end">
                                <span class = "text-[30px] text-[#F8C028]">پشتیبانی واقعی</span>
                                <span class = "text-gray-600 text-[25px]">پاسخگویی سریع و دقیق</span>
                            </div>
                            <div class="flex w-[80px] h-[80px] rounded-full border border-[#F8C028] items-center justify-center">
                                 <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-13 fill-[#F8C028] " viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" fill="#F8C028"/> </g>
                                
                            </svg>
                            </div>
                        </div>
                        <div class="w-[80%] h-[1px] bg-slate-600"></div>

                        <div class="w-[80%]  flex items-start justify-end  gap-7">
                            <div class="flex flex-col items-end">
                                <span class = "text-[30px] text-[#F8C028]">پشتیبانی واقعی</span>
                                <span class = "text-gray-600 text-[25px]">پاسخگویی سریع و دقیق</span>
                            </div>
                            <div class="flex w-[80px] h-[80px] rounded-full border border-[#F8C028] items-center justify-center">
                                <svg class = "size-13 fill-[#F8C028] " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M288.8 81.7c3.5-12.8 16.7-20.3 29.5-16.8s20.3 16.7 16.8 29.5l-4.5 16.4c-5.5 20.2-13.9 39.3-24.7 56.9c-3.1 4.9-3.2 11.1-.4 16.2s8.2 8.2 14 8.2H448c17.7 0 32 14.3 32 32c0 11.3-5.9 21.3-14.8 27c-7.2 4.6-9.5 13.9-5.3 21.3c2.6 4.6 4.1 10 4.1 15.7c0 12.4-7 23.1-17.3 28.5c-4.2 2.2-7.3 6.1-8.3 10.8s.1 9.5 3 13.2c4.2 5.4 6.7 12.2 6.7 19.5c0 14.2-9.2 26.3-22.1 30.4c-7.8 2.5-12.4 10.6-10.7 18.6c.5 2.2 .7 4.5 .7 6.9c0 17.7-14.3 32-32 32H294.5c-15.8 0-31.2-4.7-44.4-13.4l-38.5-25.7c-9-6-16.6-13.7-22.4-22.6c-4.9-7.4-14.8-9.4-22.2-4.6s-9.4 14.8-4.6 22.2c8.1 12.3 18.7 23.1 31.4 31.6l38.5 25.7c18.4 12.3 40 18.8 62.1 18.8H384c35.3 0 64-28.7 64-64l0-.6c19.1-11.1 32-31.7 32-55.4c0-8.7-1.8-17.1-4.9-24.7C487.9 323.6 496 306.8 496 288c0-6.5-1-12.8-2.8-18.7C504.8 257.7 512 241.7 512 224c0-35.3-28.7-64-64-64H346.4c6.2-13.1 11.3-26.7 15.1-40.9l4.5-16.4c8.1-29.8-9.5-60.6-39.3-68.8s-60.6 9.5-68.8 39.3l-4.5 16.4c-8.9 32.6-29.6 60.8-58.2 79l-3.1 2c-11.8 7.5-21.7 17.1-29.5 28.2c-5.1 7.2-3.3 17.2 4 22.3s17.2 3.3 22.3-4c5.4-7.7 12.2-14.4 20.4-19.5l3.1-2c35.3-22.4 60.9-57.2 71.9-97.5l4.5-16.4zM32 224H96V448H32V224zM0 224V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/></svg>
                            </div>
                        </div>
                        <div class="w-[80%] h-[1px] bg-slate-600"></div>
                        <div class="w-[80%]  flex items-start justify-end  gap-7">
                            <div class="flex flex-col items-end">
                                <span class = "text-[30px] text-[#F8C028]">پشتیبانی واقعی</span>
                                <span class = "text-gray-600 text-[25px]">پاسخگویی سریع و دقیق</span>
                            </div>
                            <div class="flex w-[80px] h-[80px] rounded-full border border-[#F8C028] items-center justify-center">
                      <xml version="1.0" encoding="utf-8">
                                <svg class = "size-13 fill-[#F8C028] " viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <title>award</title>
                                    <path d="M28.641 26.578l-3.799-6.364c1.805-2.055 2.907-4.767 2.907-7.736 0-6.489-5.26-11.749-11.749-11.749s-11.749 5.26-11.749 11.749c0 2.943 1.082 5.633 2.87 7.695l-0.012-0.015-3.832 6.422c-0.111 0.183-0.176 0.404-0.176 0.64 0 0.691 0.56 1.251 1.251 1.251 0.071 0 0.14-0.006 0.207-0.017l-0.007 0.001 2.602-0.426 0.947 2.426c0.175 0.44 0.581 0.753 1.065 0.791l0.004 0c0.032 0.002 0.063 0.004 0.095 0.004 0.46-0 0.863-0.249 1.080-0.619l0.003-0.006 3.775-6.54c0.562 0.1 1.212 0.16 1.875 0.165l0.004 0c0.64-0.005 1.263-0.060 1.87-0.162l-0.069 0.010 3.769 6.526c0.22 0.376 0.622 0.625 1.082 0.625h0c0.031 0 0.063-0.002 0.094-0.004 0.488-0.037 0.896-0.35 1.067-0.783l0.003-0.008 0.947-2.426 2.602 0.426c0.060 0.010 0.129 0.016 0.2 0.016 0.691 0 1.251-0.56 1.251-1.251 0-0.236-0.065-0.457-0.179-0.645l0.003 0.006zM9.48 27.123l-0.369-0.945c-0.193-0.469-0.647-0.793-1.177-0.793-0.067 0-0.132 0.005-0.196 0.015l0.007-0.001-0.947 0.156 2.181-3.655c0.765 0.581 1.638 1.084 2.572 1.47l0.078 0.029zM6.75 12.5c0-5.109 4.141-9.25 9.25-9.25s9.25 4.141 9.25 9.25c0 5.109-4.141 9.25-9.25 9.25v0c-5.106-0.006-9.244-4.144-9.25-9.249v-0.001zM24.168 25.396c-0.060-0.010-0.129-0.016-0.199-0.016-0.527 0-0.978 0.326-1.163 0.787l-0.003 0.008-0.369 0.945-2.135-3.697c1.016-0.408 1.894-0.905 2.693-1.502l-0.031 0.022 2.155 3.609zM16 4.75c-4.28 0-7.75 3.47-7.75 7.75s3.47 7.75 7.75 7.75c4.28 0 7.75-3.47 7.75-7.75v0c-0.005-4.278-3.472-7.745-7.75-7.75h-0zM16 17.75c-2.899 0-5.25-2.351-5.25-5.25s2.351-5.25 5.25-5.25c2.899 0 5.25 2.351 5.25 5.25v0c-0.004 2.898-2.352 5.246-5.25 5.25h-0zM18.666 10.651h-1.129l-0.349-1.072c-0.208-0.459-0.662-0.772-1.188-0.772s-0.981 0.313-1.185 0.764l-0.003 0.008-0.349 1.072h-1.128c-0 0-0 0-0 0-0.69 0-1.25 0.559-1.25 1.25 0 0.414 0.201 0.781 0.512 1.009l0.004 0.002 0.912 0.664-0.349 1.071c-0.039 0.116-0.061 0.249-0.061 0.387 0 0.69 0.56 1.25 1.25 1.25 0.276 0 0.531-0.089 0.738-0.241l-0.004 0.002 0.913-0.663 0.913 0.663c0.203 0.149 0.458 0.238 0.734 0.238 0.69 0 1.25-0.56 1.25-1.25 0-0.138-0.022-0.271-0.064-0.396l0.003 0.009-0.348-1.071 0.912-0.663c0.314-0.23 0.516-0.597 0.516-1.012 0-0.69-0.56-1.25-1.25-1.25-0 0-0 0-0 0h0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>

     
         <section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3">
            <div class="w-full flex flex-col items-center">
                <div class="w-full flex items-center justify-center gap-2">
                    <div class="w-[50px] h-[3px] bg-[#F8C028]"></div>
                    <span class = "text-[20px] max-lg:text-[17px]">چرا ترازوی درختی را انتخاب کنید؟</span>
                    <div class="w-[50px] h-[3px] bg-[#F8C028]"></div>
                </div>
                <div class="w-[400px] flex flex-col gap-2 items-center ">
                    <span class = "text-[40px] max-lg:text-[30px]">کیفیت,<span class = "text-[#F8D048]">دقت</span>,اطمینان</span>
                    <p class = "text-gray-500 text-[15px] text-center max-lg:w-[300px] mb-3">ما در ترازوی درختی با تکیه بر تجربه تکنولوژی روز و پشتیبان واقعی به شما کمک میکنیم تا با اطمینان دقیق ترین اندازی گیری هارا داشته باشید</p>
                </div>
                <div class="w-full flex gap-4 max-lg:grid max-lg:grid-cols-2">
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center">
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-10 max-lg:size-8" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#F8D048">
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" fill="#F8D048"/> </g>
                                
                            </svg>
                        </div>
                        <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                        <div class="w-full text-center mb-8 max-lg:mb-2">
                            <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                        </div>
                    </div>
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center">
                            <svg class = "fill-[#F8D048] size-10 max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M243.5 37.3c8-3.4 17-3.4 25 0l176.7 75c11.3 4.8 18.9 15.5 18.8 27.6c-.5 94-39.4 259.8-195.5 334.5c-7.9 3.8-17.2 3.8-25.1 0C87.3 399.6 48.5 233.8 48 139.8c-.1-12.1 7.5-22.8 18.8-27.6l176.7-75zM281 7.8c-16-6.8-34-6.8-50 0L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L281 7.8zm82.3 195.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z"/></svg>
                        </div>
                        <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                        <div class="w-full text-center mb-8 max-lg:mb-2">
                            <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                        </div>
                    </div>
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center">
                            <xml version="1.0" encoding="utf-8">
                                <svg class = "size-10 max-lg:size-8 fill-[#F8D048]" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <title>award</title>
                                    <path d="M28.641 26.578l-3.799-6.364c1.805-2.055 2.907-4.767 2.907-7.736 0-6.489-5.26-11.749-11.749-11.749s-11.749 5.26-11.749 11.749c0 2.943 1.082 5.633 2.87 7.695l-0.012-0.015-3.832 6.422c-0.111 0.183-0.176 0.404-0.176 0.64 0 0.691 0.56 1.251 1.251 1.251 0.071 0 0.14-0.006 0.207-0.017l-0.007 0.001 2.602-0.426 0.947 2.426c0.175 0.44 0.581 0.753 1.065 0.791l0.004 0c0.032 0.002 0.063 0.004 0.095 0.004 0.46-0 0.863-0.249 1.080-0.619l0.003-0.006 3.775-6.54c0.562 0.1 1.212 0.16 1.875 0.165l0.004 0c0.64-0.005 1.263-0.060 1.87-0.162l-0.069 0.010 3.769 6.526c0.22 0.376 0.622 0.625 1.082 0.625h0c0.031 0 0.063-0.002 0.094-0.004 0.488-0.037 0.896-0.35 1.067-0.783l0.003-0.008 0.947-2.426 2.602 0.426c0.060 0.010 0.129 0.016 0.2 0.016 0.691 0 1.251-0.56 1.251-1.251 0-0.236-0.065-0.457-0.179-0.645l0.003 0.006zM9.48 27.123l-0.369-0.945c-0.193-0.469-0.647-0.793-1.177-0.793-0.067 0-0.132 0.005-0.196 0.015l0.007-0.001-0.947 0.156 2.181-3.655c0.765 0.581 1.638 1.084 2.572 1.47l0.078 0.029zM6.75 12.5c0-5.109 4.141-9.25 9.25-9.25s9.25 4.141 9.25 9.25c0 5.109-4.141 9.25-9.25 9.25v0c-5.106-0.006-9.244-4.144-9.25-9.249v-0.001zM24.168 25.396c-0.060-0.010-0.129-0.016-0.199-0.016-0.527 0-0.978 0.326-1.163 0.787l-0.003 0.008-0.369 0.945-2.135-3.697c1.016-0.408 1.894-0.905 2.693-1.502l-0.031 0.022 2.155 3.609zM16 4.75c-4.28 0-7.75 3.47-7.75 7.75s3.47 7.75 7.75 7.75c4.28 0 7.75-3.47 7.75-7.75v0c-0.005-4.278-3.472-7.745-7.75-7.75h-0zM16 17.75c-2.899 0-5.25-2.351-5.25-5.25s2.351-5.25 5.25-5.25c2.899 0 5.25 2.351 5.25 5.25v0c-0.004 2.898-2.352 5.246-5.25 5.25h-0zM18.666 10.651h-1.129l-0.349-1.072c-0.208-0.459-0.662-0.772-1.188-0.772s-0.981 0.313-1.185 0.764l-0.003 0.008-0.349 1.072h-1.128c-0 0-0 0-0 0-0.69 0-1.25 0.559-1.25 1.25 0 0.414 0.201 0.781 0.512 1.009l0.004 0.002 0.912 0.664-0.349 1.071c-0.039 0.116-0.061 0.249-0.061 0.387 0 0.69 0.56 1.25 1.25 1.25 0.276 0 0.531-0.089 0.738-0.241l-0.004 0.002 0.913-0.663 0.913 0.663c0.203 0.149 0.458 0.238 0.734 0.238 0.69 0 1.25-0.56 1.25-1.25 0-0.138-0.022-0.271-0.064-0.396l0.003 0.009-0.348-1.071 0.912-0.663c0.314-0.23 0.516-0.597 0.516-1.012 0-0.69-0.56-1.25-1.25-1.25-0 0-0 0-0 0h0z"></path>
                                </svg>
                            </div>
                            <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                            <div class="w-full text-center mb-8 max-lg:mb-2">
                                <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                            </div>
                    </div>
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center">
                            <svg class = "size-10 max-lg:size-8 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>
                        </div>
                        <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                        <div class="w-full text-center mb-8 max-lg:mb-2">
                            <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                        </div>
                    </div>
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center">
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-10 max-lg:size-8" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="800px" height="800px" fill="#F8D048">
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#F8D048;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <line class="st0" x1="16" y1="16" x2="22" y2="10"/> <polygon class="st0" points="30,6 26,6 26,2 22,6 22,10 26,10 "/> <circle class="st0" cx="16" cy="16" r="6"/> <path class="st0" d="M27,9c1.3,2,2,4.4,2,7c0,7.2-5.8,13-13,13S3,23.2,3,16S8.8,3,16,3c2.6,0,5,0.7,7,2"/> </g>
                                
                            </svg>
                        </div>
                        <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                        <div class="w-full text-center mb-8 max-lg:mb-2">
                            <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                        </div>
                    </div>
                    <div class="w-[20%] max-lg:w-full flex flex-col gap-6 max-lg:gap-2 bg-white border-1 border-slate-100 shadow-sm p-5 items-center rounded-[15px] px-13 max-lg:p-4">
                        <div class="w-[70px] h-[70px] max-lg:w-[57px] max-lg:h-[57px] rounded-full bg-[#001020] flex items-center justify-center z-10">
                            <xml version="1.0" encoding="utf-8">
                                <svg class = "fill-[#F8D048] size-10 max-lg:size-8" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.835 9.233l-4.371-8.358c-0.255-0.487-0.915-0.886-1.464-0.886h-10.060c-0.011-0.001-0.022-0.003-0.033-0.004-0.009 0-0.018 0.003-0.027 0.004h-9.88c-0.55 0-1.211 0.398-1.47 0.883l-4.359 8.197c-0.259 0.486-0.207 1.248 0.113 1.696l15.001 20.911c0.161 0.224 0.375 0.338 0.588 0.338 0.212 0 0.424-0.11 0.587-0.331l15.247-20.758c0.325-0.444 0.383-1.204 0.128-1.691zM29.449 8.988h-5.358l2.146-6.144zM17.979 1.99h6.436l-1.997 5.716zM20.882 8.988h-9.301l4.396-6.316zM9.809 8.034l-2.006-6.044h6.213zM21.273 10.988l-5.376 15.392-5.108-15.392h10.484zM13.654 25.971l-10.748-14.983h5.776zM23.392 10.988h5.787l-11.030 15.018zM5.89 2.575l2.128 6.413h-5.539z"></path>
                                </svg>
                            </div>
                            <span class = "text-[30px] max-lg:text-[25px] text-[#002030]">دقت بالا</span>
                            <div class="w-full text-center mb-8 max-lg:mb-2">
                                <span class = "text-gray-400 text-[22px] max-lg:text-[17px]">مناسب برای تمامی کسب و صنایع</span>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        


 
<section class="max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3">

    <div class="w-full relative mt-10 overflow-hidden flex h-[400px] rounded-[15px] max-lg:hidden">
        <div class=" flex flex-col items-start w-[520px] bg-[#002030] gap-3 rounded-[10px] p-12 justify-center ">
                <div class="w-full flex flex-col  text-white">
                    <a href = "" class="w-[180px] text-[18px] h-[35px] flex items-center justify-center rounded-[30px] bg-[#F8C028] text-[#002030]">محصولات پرطرفدار</a>   
                    <span class = "text-[40px]">ترازوهای فروشگاهی و صنعتی</span>
                </div>
                <div class="w-[300px]">
                    <p class = "text-gray-300 text-[23px]">از ترازوهای فروشگاهی تا مدل های صنعتی همه انچه کسب و کارشما لازم است در یکجکا فراهم شده است</p>
                    <a class = "w-[230px] h-[65px] bg-[#F8C028] mt-5 rounded-[30px] flex items-center justify-center gap-5  text-[20px] text-[#002030]" href="">
                        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                <span>مشاهده محصولات</span>
            </a>
        </div>
                <div class="w-[30%] -skew-x-25 ml-20 absolute left-0 h-full top-0 rounded-[10px] bg-[#002030]  -z-10"></div>
            </div>
            <div class="w-[75%] rounded-[15px]  -z-30  bg-[url('{{asset('assets/img/file_00000000151c82439a17a7e2cf35e05d.png')}}')] bg-center bg-cover"></div>
            <div class="w-[120px] h-[300px] bg-[#F8C028] -skew-x-25 absolute  bottom-0 -right-20"></div>
        </div>
        
        <div class="w-full mx-auto flex items-center justify-between my-5  max-lg:flex-col max-lg:gap-3 max-lg:my-0 max-lg:mb-5 ">
            <a href = "" class="flex gap-3 items-center max-lg:order-1">
                <svg class = "size-5 fill-[#0B304A]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                <span>مشاهده همه</span>
            </a href = "">
            <div class=" flex gap-3 t  justify-center items-center text-[30px] max-lg:text-[22px] max-lg:w-full">
                <div class="w-[80px] h-1 rounded-[2px] bg-[#D99A16] max-lg:w-[20%]"></div>
                <span>محصولات پر فروش</span>
                <div class="w-[20%] h-1 rounded-[2px] bg-[#D99A16] lg:hidden"></div>
            </div>
        </div>
        <div class="w-full lg:hidden flex flex-col relative mb-30 overflow-hidden rounded-[15px]">
            <div class="w-full h-[400px] rounded-[15px]  -z-30  bg-[url('{{asset('assets/img/scale_mobile_768x432-1.png')}}')] bg-center bg-cover max-lg:"></div>
            <div class="w-[100px] h-[120px] bg-[#F8C028] -skew-x-35 absolute z-20 bottom-0 -right-22"></div>
            <div class="w-[90px] h-[130px] bg-[#F8C028]  absolute -skew-x-35 top-60 -right-20"></div>
            <div class="w-full h-[8px] bg-[#F8C028] absolute -skew-y-6 top-92"></div>
            <div class="w-full h-1/2  absolute bg-[#0B304A] -bottom-10 -skew-y-6"></div>
            <div class="w-full flex flex-col items-center justify-center pb-10  text-white gap-3 ">
                <div class="w-[175px] h-[37px] bg-[#F8C028] flex items-center justify-center z-10 gap-2 rounded-[20px] text-black">
                    <svg class = " size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M250.2 19.4l5.8-2.2 5.8 2.2L469.3 99.9l9.6 3.7 .6 10.3c2.8 47.8-4.7 121.5-36 193.6C412 379.9 356.2 451.2 262.4 491.8l-6.4 2.7-6.4-2.7C155.8 451.2 100 379.9 68.5 307.5c-31.3-72.1-38.8-145.8-36-193.6l.6-10.3 9.6-3.7L250.2 19.4zM495.5 113l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM357.7 197.7l5.7-5.7L352 180.7l-5.7 5.7L224 308.7l-58.3-58.3-5.7-5.7L148.7 256l5.7 5.7 64 64 5.7 5.7 5.7-5.7 128-128z"/></svg>
                    <span>تضمین کیفیت و دقت</span>
                </div>
                <span class = "text-[30px] z-10">ترازوهای دیجیتال صنعتی</span>
                <div class="w-full flex flex-col gap-2 items-center z-10">
                    <span class = "text-gray-400">دقت بالا , عمر طولانی و عملکرد مطمئن</span>
                    <span class = "text-gray-400">برای کسب و کار های صنعتی و تجاری</span>
                </div>
                <a href = "#" class="w-[200px] h-[45px] rounded-[20px] bg-[#F8C028] flex gap-3 items-center justify-center z-10 text-[17px] text-black">
                    مشاهده محصولات
                    <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                </a>
            </div>
        </div>
 
    </section> 
         



        <section class="max-w-[1800px] min-w-[325px] mx-auto -mt-20">
            <div class="w-full  bg-slate-50 border-1 border-slate-100 shadow-sm p-2 rounded-[15px]">
                <div class="w-full flex justify-between items-center max-lg:flex-col  max-lg:justify-center">
                    <span class = "ml-7 max-lg:ml-0 max-lg:hidden">با محصولات اصل و دارای گارانتی</span>
                    <div class="flex flex-col  items-end  max-lg:w-full max-lg:items-center max-lg:justify-center max-lg:gap-2">
                        <div class="w-[120px] h-[30px] flex justify-center items-center rounded-[40px] text-purple-400 bg-purple-200 mr-5 max-lg:mr-0 ">
                            <span class>بنردهای معتبر</span>
                        </div>
                        <span class = "text-right text-[35px]">برترین برندهای جهانی</span>
                        <span class = "ml-7 max-lg:ml-0 mb-3 lg:hidden">با محصولات اصل و دارای گارانتی</span>
                    </div>
                </div>                
                <div class="w-full flex items-center justify-center  rounded-[15px]">
                    <div class="w-[2%] flex items-center justify-center">    
                        <svg class = "size-6 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z"></svg>
                    </div>
                    <div class="w-full flex gap-4  items-center justify-start bg-white  shadow-sm rounded-[5px] overflow-x-auto">
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="min-w-[13%] max-lg:min-w-[50%]">
                            <img src="{{asset('assets/img/file_00000000224c81f49baa03feb3433e5e-removebg-preview.png')}}" alt="">
                        </div>
                    </div>   
                    <div class="w-[2%] flex items-center justify-center">
                        <svg class = "size-6 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z"/></svg>
                    </div>

                </div>                
            </div>
        </section> 

         <section  class="max-w-[1800px] min-w-[325px] mx-auto mt-10 px-3">
                <div class="w-full flex  border-1 border-slate-200 rounded-[15px] max-lg:flex-col max-lg:items-center">
                    <div class="w-[60%] grid grid-cols-3 gap-4 p-6 max-lg:grid-cols-1 max-lg:w-full max-lg:order-1 max-lg:p-3">
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/2.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

    <xml version="1.0" encoding="iso-8859-1">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg class = "size-7 fill-white" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        viewBox="0 0 442.548 442.548"
	 xml:space="preserve">
     <g>
         <path d="M415.264,168.488L382.837,48.455c-0.996-3.667-2.532-7.13-4.381-10.391c2.745-3.927,4.381-8.685,4.381-13.839
         C382.837,10.843,371.985,0,358.612,0H81.106c-13.38,0-24.219,10.848-24.219,24.225c0,6.695,2.708,12.752,7.107,17.141
         c-1.806,3.198-3.299,6.604-4.272,10.197L27.299,171.596c-4.389,16.251,1.987,29.967,14.479,33.234v237.717h361.037V200.933
		C413.891,196.735,419.39,183.796,415.264,168.488z M311.258,68.569l27.398,101.416c0.421,1.579,1.051,3.092,1.652,4.61
		c-12.236,20.033-30.014,28.733-49.385,23.915c-17.005-4.219-28.87-17.269-29.127-26.525V73.243c0-1.598-0.241-3.139-0.477-4.673
		H311.258z M103.908,173.098l28.234-104.529h47.541c-0.241,1.535-0.476,3.075-0.476,4.673V173.84l-0.061-0.03
		c-11.304,21.382-28.776,30.925-47.913,26.17c-15.863-3.934-26.922-16.183-26.922-24.706h-1.193
		C103.371,174.54,103.705,173.845,103.908,173.098z M300.752,417.874H105.97v-77.91h34.955c3.35-7.561,10.891-12.849,19.699-12.849
		c8.794,0,16.345,5.288,19.689,12.849h71.141c1-10.977,10.128-19.601,21.367-19.601c11.229,0,20.361,8.624,21.356,19.601h6.578
		v77.91H300.752z M146.076,311.915c0-8.384,6.807-15.188,15.195-15.188s15.189,6.805,15.189,15.188c0,8.396-6.801,15.2-15.189,15.2
		S146.076,320.311,146.076,311.915z M258.272,305.163c0-8.384,6.802-15.191,15.189-15.191c8.39,0,15.192,6.808,15.192,15.191
		c0,8.393-6.803,15.2-15.192,15.2C265.074,320.363,258.272,313.556,258.272,305.163z M384.119,423.85h-23.893V266.213H85.977V423.85
		h-25.5V205.851l5.489,0.106c12.99,0.263,26.539-9.498,33.877-23.064c4.192,10.142,15.936,19.68,29.899,23.145
		c2.726,0.675,6.534,1.337,11,1.337c11.003,0,25.98-4.047,38.511-21.787c0.236,16.906,14.052,24.52,31.12,24.52h20.256
		c14.72,0,26.972-10.235,30.244-23.953c6.029,8.292,16.558,15.436,28.558,18.408c2.917,0.727,7.004,1.434,11.781,1.434
		c12.088,0,28.635-4.578,42.273-24.818c7.483,12.832,20.562,21.91,33.108,21.665l7.526-0.146V423.85z"/>
    </g>
</svg>
</div>
        
        <span class = "text-white text-[18px] ">فروشگاها و سوپر مارکت ها</span>

</div>
                    </div>
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/5.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

         <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

<svg class = "size-7" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#ffff" stroke="#0000"> <g id="SVGRepo_bgCarrier" stroke-width="0"/> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/> <g id="SVGRepo_iconCarrier"> <title>ionicons-v5-p</title> <path d="M57.49,47.74,425.92,416.17a37.28,37.28,0,0,1,0,52.72h0a37.29,37.29,0,0,1-52.72,0l-90-91.55A32,32,0,0,1,274,354.91v-5.53a32,32,0,0,0-9.52-22.78l-11.62-10.73a32,32,0,0,0-29.8-7.44h0A48.53,48.53,0,0,1,176.5,295.8L91.07,210.36C40.39,159.68,21.74,83.15,57.49,47.74Z" style="fill:white;stroke:#0000;stroke-linejoin:round;stroke-width:32px"/> <path d="M400,32l-77.25,77.25A64,64,0,0,0,304,154.51v14.86a16,16,0,0,1-4.69,11.32L288,192" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <path d="M320,224l11.31-11.31A16,16,0,0,1,342.63,208h14.86a64,64,0,0,0,45.26-18.75L480,112" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <line x1="440" y1="72" x2="360" y2="152" style="fill:white;stroke:white;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> <path d="M200,368,100.28,468.28a40,40,0,0,1-56.56,0h0a40,40,0,0,1,0-56.56L128,328" style="fill:white;stroke:#0000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/> </g> </svg>
</div>
        
        <span class = "text-white text-[18px] ">صنایع غذایی و پروتیینی</span>

</div>
                    </div>
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/1.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

    <xml version="1.0" encoding="utf-8">
<svg class = "size-7 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M21 7.5L17 9.5M12 12L3 7.5M12 12V21.5M12 12C12 12 14.7426 10.6287 16.5 9.75C16.6953 9.65237 17 9.5 17 9.5M17 9.5V13M17 9.5L7.5 4.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>
</div>
        
        <span class = "text-white text-[18px] ">انبارها و مراکز توضیع</span>

</div>
                    </div>
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/3.png')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

    <xml version="1.0" encoding="utf-8">

<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
<svg class = "size-7 fill-white" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
	<path  d="M34.929,7.629c-0.205-0.513-0.787-0.763-1.297-0.557c-0.513,0.203-0.764,0.784-0.562,1.297
		c0.019,0.047,1.84,4.804-0.032,11.356c0,0-0.001,0.007-0.001,0.011c-1.215,1.103-2.459,2.271-3.744,3.557
		c-1.357,1.357-2.591,2.671-3.745,3.948c0.998-9.183-0.498-16.128-0.571-16.458c-0.12-0.539-0.654-0.876-1.193-0.76
		c-0.539,0.12-0.879,0.654-0.76,1.193c0.019,0.086,1.823,8.469,0.13,18.763c-2.26,2.695-4.05,5.14-5.464,7.261
		c0.709-7.9-0.644-14.145-0.713-14.457c-0.12-0.539-0.65-0.886-1.193-0.759c-0.539,0.119-0.879,0.653-0.76,1.192
		c0.02,0.087,1.885,8.75,0.048,18.297c-1.383,2.488-1.953,3.988-2.01,4.141c-0.19,0.518,0.074,1.092,0.592,1.283
		C13.768,46.979,13.885,47,14,47c0.406,0,0.788-0.25,0.938-0.653c0.013-0.034,0.5-1.302,1.684-3.468
		c10.438-2.726,19.995,0.051,20.092,0.079C36.809,42.986,36.905,43,37,43c0.431,0,0.828-0.28,0.958-0.714
		c0.158-0.528-0.142-1.085-0.671-1.244C36.897,40.924,28.2,38.391,18,40.506c1.416-2.316,3.406-5.218,6.108-8.52
		c0.052-0.006,0.104-0.008,0.154-0.021c10.595-2.889,21.367-0.029,21.475,0C45.825,31.988,45.913,32,46,32
		c0.44,0,0.844-0.292,0.965-0.737c0.145-0.533-0.169-1.082-0.702-1.228c-0.425-0.116-9.801-2.598-20.012-0.576
		c1.341-1.524,2.814-3.109,4.456-4.752c1.41-1.41,2.777-2.693,4.103-3.88c6.452-1.649,12.852,0.116,12.916,0.135
		C47.817,20.987,47.909,21,48,21c0.436,0,0.836-0.287,0.961-0.727c0.151-0.53-0.155-1.083-0.687-1.235
		c-0.239-0.067-4.9-1.367-10.473-0.779c8.531-7.021,14.472-9.294,14.545-9.321c0.518-0.191,0.782-0.767,0.591-1.284
		c-0.191-0.519-0.766-0.779-1.283-0.592c-0.326,0.12-6.805,2.58-16.068,10.431C36.527,11.735,35.004,7.816,34.929,7.629z"/>
	<path  d="M60.893,1.549c-0.136-0.269-0.386-0.462-0.679-0.525c-2.98-0.652-6.97-0.982-11.856-0.982
		c-4.922,0-10.564,0.353-15.481,0.967C17.641,2.912,7,13.601,7,27v18.678L3.103,60.225c-0.428,1.598,0.523,3.244,2.122,3.674
		c1.598,0.426,3.245-0.525,3.673-2.121L11.25,53H31c14.337,0,26-11.663,26-26c0-6.663,0-15.788,3.914-24.594
		C61.036,2.132,61.028,1.816,60.893,1.549z M6.966,61.26c-0.143,0.532-0.691,0.849-1.224,0.707
		c-0.534-0.145-0.851-0.691-0.708-1.225l2.552-9.686c0.405,0.672,0.998,1.212,1.712,1.55L6.966,61.26z M55,27
		c0,13.233-10.767,24-24,24H11c-1.104,0-2-0.896-2-2v-1V27C9,14.641,18.92,4.769,33.124,2.992
		c4.839-0.604,10.391-0.951,15.233-0.951c4.048,0,7.553,0.242,10.238,0.705C55,11.565,55,20.443,55,27z"/>
</g>
</svg>
</div>
        
        <span class = "text-white text-[18px] ">کشاورزی و دامداری</span>

</div>
                    </div>
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/8.jpg')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

   <xml version="1.0" encoding="iso-8859-1">
<svg class = "size-7 fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<circle cx="139.636" cy="384" r="11.636"/>
	</g>
</g>
<g>
	<g>
		<circle cx="407.273" cy="384" r="11.636"/>
	</g>
</g>
<g>
	<g>
		<path d="M498.036,262.982l-34.909-25.6l-33.745-101.236c-1.164-4.655-5.818-8.145-10.473-8.145H314.182
			c-6.982,0-11.636,4.655-11.636,11.636v232.727H196.655c-5.818-26.764-29.091-46.545-57.018-46.545
			c-27.927,0-51.2,19.782-57.018,46.545H34.909c-6.982,0-11.636-4.655-11.636-11.636v-256c0-6.982,4.655-11.636,11.636-11.636
			h267.636c0,6.982,4.655,11.636,11.636,11.636s11.636-4.655,11.636-11.636V81.455c0-6.982-4.655-11.636-11.636-11.636H34.909
			C15.127,69.818,0,84.945,0,104.727v256c0,19.782,15.127,34.909,34.909,34.909h47.709c5.818,26.764,29.091,46.545,57.018,46.545
			c27.927,0,51.2-19.782,57.018-46.545h117.527c6.982,0,11.636-4.655,11.636-11.636V151.273h84.945l26.764,81.455h-23.273
			l3.491-6.982c2.327-5.818,0-12.8-4.655-15.127c-5.818-2.327-12.8,0-15.127,4.655l-9.309,17.455h-27.927
			c-6.982,0-11.636,4.655-11.636,11.636S353.745,256,360.727,256h89.6l33.745,25.6c3.491,2.327,4.655,5.818,4.655,9.309v69.818
			c0,6.982-4.655,11.636-11.636,11.636h-12.8c-5.818-26.764-29.091-46.545-57.018-46.545c-32.582,0-58.182,25.6-58.182,58.182
			c0,32.582,25.6,58.182,58.182,58.182c27.927,0,51.2-19.782,57.018-46.545h12.8c19.782,0,34.909-15.127,34.909-34.909v-69.818
			C512,280.436,507.345,269.964,498.036,262.982z M139.636,418.909c-19.782,0-34.909-15.127-34.909-34.909
			c0-19.782,15.127-34.909,34.909-34.909c19.782,0,34.909,15.127,34.909,34.909C174.545,403.782,159.418,418.909,139.636,418.909z
			 M407.273,418.909c-19.782,0-34.909-15.127-34.909-34.909c0-19.782,15.127-34.909,34.909-34.909
			c19.782,0,34.909,15.127,34.909,34.909C442.182,403.782,427.055,418.909,407.273,418.909z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.636,279.273H58.182c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h209.455
			c6.982,0,11.636-4.655,11.636-11.636S274.618,279.273,267.636,279.273z"/>
	</g>
</g>
</svg>
</div>
        
        <span class = "text-white text-[18px] ">حمل و نقل لجستیک</span>

</div>
                    </div>
                                            <div class="w-full h-[135px]  rounded-[20px] bg-[url('{{asset('assets/img/6.jpg')}}')]  bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden">
                        <div class="w-full h-[110px] flex  down_hero1 rounded-[15px] gap-3 items-end text-nowrap px-3 max-lg:justify-between pb-5">
<div class="w-[50px] h-[50px] rounded-full bg-black/40 flex items-center justify-center ml-">

   <xml version="1.0" encoding="utf-8">

<svg class = "size-7 fill-white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="800px" height="800px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path d="M4,18v2h4v-2H4 M4,14v2h10v-2H4 M10,18v2h4v-2H10 M16,14v2h4v-2H16 M16,18v2h4v-2H16 M2,22V8l5,4V8l5,4V8l5,4l1-10h3l1,10
	v10H2z"/>
<rect fill="none" width="24" height="24"/>
</svg>
</div>
        
        <span class = "text-white text-[18px] ">کارخانه و صنایع</span>

</div>
                    </div>
                    </div>
                    <div class="w-[40%] flex flex-col p-3 items-end justify-center gap-5  max-lg:w-full max-lg:items-center">
                        <div class="w-[160px] h-[40px] bg-purple-200 text-purple-500 text-[20px] rounded-[20px] flex items-center justify-center mr-5 max-lg:mr-0">
                            <span>کاربرد های ترازو</span>
                        </div>
                        <div class="w-full flex flex-col gap-2 items-end max-lg:items-center">
                            <span class = "text-[#0B304A] text-[50px] max-lg:text-[30px]">مناسب برای همه صنایع</span>
                            <span class = "text-gray-400 text-[25px] text-center max-lg:text-[20px]">ترازوی مناسب راهکاری برای رشد کسب و کارها</span>
                        </div>
                        <a href = "#" class="w-[220px] h-[50px] mr-5 bg-purple-600 flex items-center justify-center gap-4 text-white rounded-[25px] text-[20px] max-lg:hidden">
                            <svg class = "size-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                            <span>مشاهده همه صنایع</span>
                        </a>
                    </div>
                    <a href = "#" class="w-[220px] h-[50px]  bg-purple-600 flex items-center justify-center gap-4 text-white rounded-[25px] text-[20px] lg:hidden order-2 mb-4">
                               <svg class = "size-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                               <span>مشاهده همه صنایع</span>
                           </a>
                </div>
        </section> 
    </main>
      <footer class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#061F35] flex flex-col items-center gap-8 max-lg:px-3 max-lg:gap-4">
        <div class="w-[95%] flex mx-auto text-white pt-5 max-lg:flex-col max-lg:items-end">
            <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1">
                <div class="w-full h-[0.5px] bg-white my-5 lg:hidden"></div>
                <div class="w-full flex justify-between items-center max-lg:flex-row-reverse max-lg:justify-start max-lg:gap-3">
                    <svg class = "size-10 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                    <span>عضویت در خبرنامه</span>
                </div>
                <div class="w-full">
                    <p class = "text-right mb-2">با عضویت در خبرنامه با جدیدترین محصولات با خیر بشین</p>
                </div>
                <form action="#" method = "post">
                    <div class="w-full flex bg-white rounded-[20px] overflow-hidden">
                        <div class="w-[50px] bg-[#D99A16]  rounded-full flex items-center justify-center max-lg:m-1  max-lg:h-[40px]">
                            <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/></svg>
                        </div>
                        <input class = "w-[90%] h-[45px]" type="text" placeholder = "ایمیل خود را وارد کنید">
                    </div>
                </div>
                
                <div class="w-full h-[0.5px] bg-white my-5 lg:hidden"></div>
            </form>
            <div class="w-[25%] flex flex-col  items-end max-lg:w-full max-lg:gap-1">
                <span class = "text-[25px] text-white mb-1 max-lg:hidden">دسترسی سریع</span>
                <div class="flex gap-3 text-[25px]  items-center lg:hidden">
                    <span>دسترسی سریع</span>
                    <div class="grid grid-cols-2 gap-[1px]">
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                        <div class="w-[9px] h-[9px] rounded-[2px] border-2"></div>
                    </div>
                </div>
                <span class = "text-gray-400 text-[17px]">صفحه اصلی</span>
                <span class = "text-gray-400 text-[17px]">محصولات</span>
                <span class = "text-gray-400 text-[17px]">درباره ما</span>
                <span class = "text-gray-400 text-[17px]">تماس باما</span>
            </div>
            <div class="w-[25%] flex flex-col items-end max-lg:w-full max-lg:gap-1">
                <div class="flex items-center lg:hidden text-[25px] gap-3">
                    <span>خدمات مشتریان</span>
                    <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0c17 0 33.6 1.7 49.8 4.8c7.9 1.5 21.8 6.1 29.4 20.1c2 3.7 3.6 7.6 4.6 11.8l9.3 38.5C350.5 81 360.3 86.7 366 85l38-11.2c4-1.2 8.1-1.8 12.2-1.9c16.1-.5 27 9.4 32.3 15.4c22.1 25.1 39.1 54.6 49.9 86.3c2.6 7.6 5.6 21.8-2.7 35.4c-2.2 3.6-4.9 7-8 10L459 246.3c-4.2 4-4.2 15.5 0 19.5l28.7 27.3c3.1 3 5.8 6.4 8 10c8.2 13.6 5.2 27.8 2.7 35.4c-10.8 31.7-27.8 61.1-49.9 86.3c-5.3 6-16.3 15.9-32.3 15.4c-4.1-.1-8.2-.8-12.2-1.9L366 427c-5.7-1.7-15.5 4-16.9 9.8l-9.3 38.5c-1 4.2-2.6 8.2-4.6 11.8c-7.7 14-21.6 18.5-29.4 20.1C289.6 510.3 273 512 256 512s-33.6-1.7-49.8-4.8c-7.9-1.5-21.8-6.1-29.4-20.1c-2-3.7-3.6-7.6-4.6-11.8l-9.3-38.5c-1.4-5.8-11.2-11.5-16.9-9.8l-38 11.2c-4 1.2-8.1 1.8-12.2 1.9c-16.1 .5-27-9.4-32.3-15.4c-22-25.1-39.1-54.6-49.9-86.3c-2.6-7.6-5.6-21.8 2.7-35.4c2.2-3.6 4.9-7 8-10L53 265.7c4.2-4 4.2-15.5 0-19.5L24.2 218.9c-3.1-3-5.8-6.4-8-10C8 195.3 11 181.1 13.6 173.6c10.8-31.7 27.8-61.1 49.9-86.3c5.3-6 16.3-15.9 32.3-15.4c4.1 .1 8.2 .8 12.2 1.9L146 85c5.7 1.7 15.5-4 16.9-9.8l9.3-38.5c1-4.2 2.6-8.2 4.6-11.8c7.7-14 21.6-18.5 29.4-20.1C222.4 1.7 239 0 256 0zM218.1 51.4l-8.5 35.1c-7.8 32.3-45.3 53.9-77.2 44.6L97.9 120.9c-16.5 19.3-29.5 41.7-38 65.7l26.2 24.9c24 22.8 24 66.2 0 89L59.9 325.4c8.5 24 21.5 46.4 38 65.7l34.6-10.2c31.8-9.4 69.4 12.3 77.2 44.6l8.5 35.1c24.6 4.5 51.3 4.5 75.9 0l8.5-35.1c7.8-32.3 45.3-53.9 77.2-44.6l34.6 10.2c16.5-19.3 29.5-41.7 38-65.7l-26.2-24.9c-24-22.8-24-66.2 0-89l26.2-24.9c-8.5-24-21.5-46.4-38-65.7l-34.6 10.2c-31.8 9.4-69.4-12.3-77.2-44.6l-8.5-35.1c-24.6-4.5-51.3-4.5-75.9 0zM208 256a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 96a96 96 0 1 1 0-192 96 96 0 1 1 0 192z"/></svg>
                </div>
                <span class = "text-[25px] text-white mb-1 max-lg:hidden">خدمات مشتریان</span>
                <span class = "text-gray-400">پرسش های متداول</span>
                <span class = "text-gray-400">شرایط بازگشت کالا</span>
                <span class = "text-gray-400">پیگیری سفارشات</span>
                <span class = "text-gray-400">محوه ارسال</span>
            </div>
            <div class="w-[25%] flex flex-col  justify-start items-end gap-5 max-lg:order-first max-lg:w-full max-lg:justify-center max-lg:items-center ">
                <div class="flex gap-3 items-center max-lg:flex-col">
                    <div class="flex flex-col gap-2 items-end max-lg:items-center">
                        <span class = "text-[25px]">ترازوی درختی</span>
                        <p class = "text-gray-400">دقت و اندازه گیری در کسب و کارتان</p>
                    </div>
                    <svg class = "size-10 fill-white order-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M384 64c0 29.8-20.4 54.9-48 62V480H528c8.8 0 16 7.2 16 16s-7.2 16-16 16H320 112c-8.8 0-16-7.2-16-16s7.2-16 16-16H304V126c-27.6-7.1-48-32.2-48-62H112c-8.8 0-16-7.2-16-16s7.2-16 16-16H264.6C275.6 12.9 296.3 0 320 0s44.4 12.9 55.4 32H512c8.8 0 16 7.2 16 16s-7.2 16-16 16H384zm56.7 298.3C457.8 375.1 482.9 384 512 384s54.2-8.9 71.3-21.7C600.4 349.5 608 334.2 608 320H416v-1.6l0 .1V320c0 14.2 7.6 29.5 24.7 42.3zm71.3-215L426.3 288H597.7L512 147.3zM384 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96s-128-43-128-96zM32 320c0 14.2 7.6 29.5 24.7 42.3C73.8 375.1 98.9 384 128 384s54.2-8.9 71.3-21.7C216.4 349.5 224 334.2 224 320H32v-1.6l0 .1V320zm10.3-32H213.7L128 147.3 42.3 288zM128 416C57.3 416 0 373 0 320v-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6V320c0 53-57.3 96-128 96zM320 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></svg>
                </div>
                <div class="flex gap-4 justify-center items-center">
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
        </div>
        <div class="w-[95%] h-[0.5px] bg-white"></div>
        <div class="w-[95%] flex items-end justify-between pb-5 text-white  max-lg:flex-col max-lg:items-center max-lg:gap-2">
            <div class="flex flex-col gap-2 max-lg:hidden">
                <span>کلیه خقوق این سایت متعلق به باسکول دزختی میباشد</span>
                <span>طراحی وب سایت و مشاوره کسب و کار انلاین</span>
            </div>
            <div class="flex gap-2">
                <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
                <span class = "text-[20px] max-lg:text-[15px]">0914 779 4595</span>
            </div>
            <div class="flex gap-2 max-lg:text-[14px]   max-lg:justify-end max-lg:text-nowrap">
                <span>طراحی و توصعه توسط تیم ترازوی درختی</span>
                <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
            </div>
        </div>
    </footer>
    <script>

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

</body>
</html>             