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
        <div class="max-w-[1800px] min-w-[325px] mx-auto flex flex-col max-lg:px-3">
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
            <div class="w-full flex items-center gap-20 max-lg:pb-2 max-lg:justify-between ">
                <div class="w-[25%] flex items-center justify-end gap-4 max-lg:hidden  lg:mb-3">
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
                <div class="w-[35%] flex items-center  gap-20  max-xl:w-[30%] max-xl:gap-8 max-lg:w-[5%]">
                    @if($user)
                        <div class='relative'>
                            <div class="flex h-full items-center cursor-pointer" onclick="showCart()">
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
                                    <div id="cart_counter" class='absolute -top-3 -left-3 bg-green-800 px-2 py-1 text-xs rounded-full cursor-pointer text-white'>{{$count}}</div>
                                @endif
                        </div>
                    @else
                        <div onclick="showLoginForm()" class="flex h-full items-center cursor-pointer">
                            <svg class = "size-8 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                        </div>
                    @endif
                    @if(Auth::check())
                        <a href="{{route('user.profile')}}">
                            <div class='px-4 py-3 bg-[#EBECEE] shadow-md rounded-xl duration-500 transition-all hover:shadow-[#099975] text-black'>{{Auth::user()->name}}  خوش آمدید</div>
                        </a>
                    @else
                    <div class="w-30 flex gap-3 items-center text-white text-[20px] text-nowrap">
                        <a href="{{route('user.loginPage')}}">
                            ورود
                        </a>
                        <div class="w-[2px] h-[22px] bg-white rotate-12"></div>
                        <a href="{{route('user.loginPage')}}">
                            ثبت نام
                        </a>   
                    </div>
                        <!-- <a href="{{route('user.loginPage')}}">
                            <svg class='w-5 fill-white'  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </a> -->
                    @endif
                    <div class="lg:block hidden w-[370px] h-[45px] bg-red-500 rounded-[10px] transition_fast"id="search">
                        <form action="{{route('product.searchProduct')}}" method="POST" class="flex gap-2 w-full mx-auto h-full bg-[#f0f0f1] rounded-lg text-black">
                            @csrf
                            <button class="cursor-pointer w-1/10 md:w-10 h-10  flex justify-center items-center">
                                <svg class="size-7 m-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
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
        <!-- <div class="w-1/2 right-0 top-0 h-full absolute leaner-left z-10 max-lg:hidden"></div> -->
        <div class="w-full flex relative max-lg:flex-col justify-end">
            <!-- <div class="w-[50%]"></div> -->
            <div class="w-[61%] max-lg:h-[200px] max-lg:w-full absolute right-0 !z-20">
            <div class="w-15 h-114 absolute bg-[#FBC830] left-42 z-25 -skew-x-30"></div>

                <img class = "w-full h-[457px] relative z-10" src="{{asset('assets/img/file_00000000d6188243b80c993b60cf3bc7.png')}}" alt="">
            </div>
            <div class="w-[55%] h-[457px] max-xl:w-[40%] flex flex-col items-end text-white !relative !z-20 justify-center gap-3 max-lg:p-0 max-lg:pt-5 max-lg:items-center max-lg:w-full  pl-15 max-lg:order-first clip-pathh2 bg-[#091E2F]">
             <span class = "text-[20px]">خانه / تماس باما</span>
             <span class = "text-[65px]">تماس با <span class = "text-[#F2CE56]">ما</span></span>
             <span class = "text-[40px]">ما همیشه در کنار شما هستیم</span>
             <h2 class = "text-[25px] w-125  text-justify leading-12 text-gray-300">در رصورت داشتن هرگونه سوال پیشنهاد با نیاز به مشاوره می توانید از طریق راه های ارتبازی زیر با ما در تماس باشید</h2>
             <a class = "w-[260px] h-[50px] bg-[#F2CE56] mt-1 rounded-[30px] flex items-center justify-center gap-5 text-black text-[23px] max-lg:mt-3 " href="{{route('single_amir')}}">
                 <span>بازگشت به صفحه اصلی</span>
                 <svg class = "size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                </a>
               
            </div>
            <!-- <div class="w-[17%] h-[300px] rounded-l-[40px] text-white top-15 z-10 bg-[#0B304A]/20 flex flex-col p-8 items-center absolute gap-3 right-0 max-2xl:w-[20%] max-2xl:top-5 max-xl:w-[25%]  max-lg:hidden">
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
                -->
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
    <main class = "max-w-[21000px] min-w-[325px]">
        <section class = "max-w-[1800px] min-w-[325px] mx-auto max-lg:px-3 mt-10">
            <div class="w-full flex gap-6">
                <div class="w-[25%] flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
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
                <div class="w-[25%] flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
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
                <div class="w-[25%] flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
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
                <div class="w-[25%] flex flex-col items-center justify-center bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-6 gap-3">
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
        <section class = "max-w-[1800px] min-w-[325px] mx-auto max-lg:px-3 mt-10 mb-30">
            <div class="w-full flex bg-white border-1 border-gray-100 shadow-sm rounded-[10px] p-8">
                <div class="w-[40%]"></div>
                <div class="w-[60%] flex flex-col items-end gap-4">
                    <div class="flex gap-3 items-center text-[20px]">
                        <span>ارسال پیام</span>
                        <div class="w-8 h-1 bg-[#FBC830]"></div>
                    </div>
                    <span class = "text-[#0E2E48] text-[45px] font-bold">فرم تماس با ما</span>
                    <span class = "text-[23px] text-gray-500 mb-3">لطفا اطلاعات خود را وارد کنید تا در سریعترین زمان ممکن با شما تماس بگیریم</span>
                    <div class="w-full flex gap-5 ">
                        <div class="w-2/4 flex items-center border-1 border-gray-200 p-5 rounded-[10px]">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                            <input type="text" class = "w-full outline-none pr-4 placeholder-[#0E2E48] font-bold" placeholder = "نام و نام خانوادگی">
                        </div>
                        <div class="w-2/4 flex items-center border-1 border-gray-200 p-5 rounded-[10px]">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M96 16C69.5 16 48 37.5 48 64V448c0 26.5 21.5 48 48 48H288c26.5 0 48-21.5 48-48V64c0-26.5-21.5-48-48-48H96zM32 64C32 28.7 60.7 0 96 0H288c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V64zM144 432h96c4.4 0 8 3.6 8 8s-3.6 8-8 8H144c-4.4 0-8-3.6-8-8s3.6-8 8-8z"/></svg>
                            <input type="text" class = "w-full outline-none pr-4 placeholder-[#0E2E48] font-bold" placeholder = "شماره تلفن*">
                        </div>
                        </div>
                         <div class="w-full flex items-center border-1 border-gray-200 p-5 rounded-[10px]">
                             <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                            <input type="text" class = "w-full outline-none pr-4 placeholder-[#0E2E48] " placeholder = "ایمیل(اختیاری)">
                         </div>
                        <div class="w-full flex items-center gap-4 p-5 border-1 border-gray-200 rounded-[10px]">
                            <svg class = "size-5 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M192 416c0-17.7-14.3-32-32-32H64c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H309.3c-6.9 0-13.7 2.2-19.2 6.4L192 464V416zM64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h64 32v32 48c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM80 224c-8.8 0-16 7.2-16 16s7.2 16 16 16H304c8.8 0 16-7.2 16-16s-7.2-16-16-16H80zm288 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H368zM80 288c-8.8 0-16 7.2-16 16s7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H80zm160 0c-8.8 0-16 7.2-16 16s7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H240z"/></svg>
                            <div class="w-full flex flex-col gap-2 ">
                                <span class = "font-bold">موضوع پیام</span>
                                <select class = "w-full h-full flex items-center justify-between outline-none cursor-pointer " name="" id="">
                                    <option value="">انتخاب کنید</option>
                                </select>
                            </div>
                        </div>   
                        <div class="w-full flex items-center">
                            
                        </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>