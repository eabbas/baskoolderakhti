<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/stylehome.css')}}">
</head>
<body>
        <header class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#0B304A] mt-35">
        <div class="w-full bg-[#0E2E48] top-0 fixed z-40 left-0 -translate-x-0">
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
            <div class="w-full flex items-center gap-10 max-lg:pb-2  max-lg:justify-between max-lg:py-4 ">
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
    <!-- bg-[#061F35] -->
    <div class="max-w-[21000px] min-w-[325px] relative">
        <div class="w-2/3 left-0 top-0 h-full absolute leaner_about z-10 max-lg:w-full max-lg:h-[530px]"></div>
        <!-- <div class="w-1/2 right-0 top-0 h-full absolute leaner-left z-10 max-lg:hidden"></div> -->
        <div class="w-full flex relative max-lg:flex-col justify-end">
            <div class="w-full   max-lg:w-full ">
                <img class = "w-full max-lg:h-[210px]" src="{{asset('assets/img/file_00000000151c82439a17a7e2cf35e05d.png')}}" alt="">
            </div>
            <div class="w-[35%]  max-xl:w-[40%] flex flex-col  items-end text-white z-20  justify-center gap-3 max-lg:p-0 max-lg:pt-5 max-lg:items-center max-lg:w-full  pl-13 max-lg:order-first">
              <span class = "text-[60px] text-nowrap max-lg:text-[45px]">درباره <span class = "text-[#FBC830]">ترازوی درختی</span></span>
              <div class="flex flex-col items-end text-[30px] max-lg:text-[25px]">
                  <span>تخصص , کیفیت و دقت</span>
                  <div class="w-[40px] h-1 bg-[#FBC830]"></div>
                </div>
                <p class = "text-[20px] text-justify max-lg:text-[16px] max-lg:text-center">ما در ترازوی درختی با سال ها تجربه در زمینه فروش و خدمات ترازوهای صنعتی و ازمایشگاهی همواره مطمئن کسب و کار شما هستیم</p>
                <a class = "w-[220px] h-[50px] bg-[#D99A16] mt-1 rounded-[30px] flex items-center justify-center gap-5 text-black text-[25px] max-lg:mt-3 " href="{{route('single_amir')}}">
                    <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></svg>
                    <span>تماس باما</span>
                </a>
               
            </div>
          
        
    </div>
    </header>

    <main class = "max-w-[21000px] min-w-[325px] my-10 ">
        <section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3">
            <div class="w-full flex gap-10  justify-between max-lg:flex-col max-lg:gap-5">
                <div class="w-full flex flex-col items-center lg:hidden">
                    <div class="flex gap-2 items-center">
                        <div class="w-10 h-1 bg-[#FBC830] "></div>
                        <span class = "text-[#002030] text-[22px]">داستان ما</span>
                        <div class="w-10 h-1 bg-[#FBC830]"></div>
                    </div>
                    <span class = "text-[23px] text-[#002030] text-nowrap">از یک ایده,تا یک مجموعه معتبر</span>
                </div>
                <div class="w-full text-gray-500  text-justify text-[20px] leading-13 order-2 lg:hidden">
                    <p>ترازو درخشی با هدف تأمین نیازهای صنعت و کسب‌وکارهای مختلف در زمینه ترازوهای صنعتی، فروش، تعمیر و کالیبراسیون فعالیت خود را آغاز کرد. ما با تکیه بر دانش فنی، تجربه عملی و بهره‌گیری از تجهیزات مدرن، همواره در تلاشیم تا بهترین کیفیت و دقیق‌ترین خدمات را به مشتریان خود ارائه دهیم.
                اعتماد شما، سرمایه اصلی ماست و ما با تعهد و مسئولیت‌پذیری در کنار شما هستیم تا در هر مرحله از خرید تا پشتیبانی، بهترین تجربه را برایتان رقم بزنیم.</p>
                </div>
                <div class="w-50 h-10 bg-[#FBC830] flex items-center justify-center text-[#0E2E48] gap-3 text-[20px] rounded-[20px] order-last self-center lg:hidden">
                    <span>بیشتر بخوانید</span>
                    <svg class = "fill-[#0E2E48] size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                </div>
                <div class="w-[55%] flex flex-col gap-3 items-end max-lg:w-full max-lg:hidden">
                    <div class="w-full flex flex-col items-center ">
                        <div class="flex gap-2 items-center">
                            <span class = "text-[#002030] text-[22px]">داستان ما</span>
                            <div class="w-10 h-1 bg-[#FBC830]"></div>
                        </div>
                        <span class = "text-[48px] text-[#002030] max-lg:text-[30px]">از یک ایده,تا یک مجموعه معتبر</span>
                    </div>
                    <div class="w-full text-gray-500  text-justify text-[26px] leading-13 ">
                        <p>ترازو درخشی با هدف تأمین نیازهای صنعت و کسب‌وکارهای مختلف در زمینه ترازوهای صنعتی، فروش، تعمیر و کالیبراسیون فعالیت خود را آغاز کرد. ما با تکیه بر دانش فنی، تجربه عملی و بهره‌گیری از تجهیزات مدرن، همواره در تلاشیم تا بهترین کیفیت و دقیق‌ترین خدمات را به مشتریان خود ارائه دهیم.
اعتماد شما، سرمایه اصلی ماست و ما با تعهد و مسئولیت‌پذیری در کنار شما هستیم تا در هر مرحله از خرید تا پشتیبانی، بهترین تجربه را برایتان رقم بزنیم.</p>
                    </div>
                    <div class="w-50 h-10 bg-[#FBC830] flex items-center justify-center text-[#0E2E48] gap-3 text-[20px] rounded-[20px]">
                        <span>بیشتر بخوانید</span>
                        <svg class = "fill-[#0E2E48] size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                    </div>
                </div>
                <div class="w-[40%]  rounded-lg overflow-hidden relative max-lg:order-1 max-lg:w-full">
                    <div class="w-40 h-50 bg-[#FBC830] absolute -skew-x-20 bottom-0 -right-32"></div>
                    <div class="w-40 h-50 bg-[#FBC830] absolute -skew-x-20 -left-34"></div>
                    <img class = "w-full h-110 max-lg:h-80" src="{{asset('assets/img/file_0000000032ac81f499cdabd6758572c0.png')}}" alt="">                                                        
                </div>
            </div>
        </section>
        <section class = " max-w-[21000px] min-w-[325px] mx-auto mt-10 lg:p-3 bg-slate-100 py-9 max-lg:py-5 rounded-[8px]">
            <div class="max-w-[1800px] min-w-[325px]  flex gap-8 mx-auto max-lg:px-3 max-lg:flex-col">
                <div class="w-[25%] max-lg:w-full rounded-xl gap-3 p-4 bg-white border-1 border-gray-200 shadow-sm flex flex-col items-center justify-center">
                    <div class="w-17 h-17 flex items-center justify-center rounded-full leaner-box">
                        <svg class = "fill-[#091E2F] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192zM96 296c0-13.3 10.7-24 24-24H328c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24zm24 72H232c13.3 0 24 10.7 24 24s-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                    </div>
                    <span class = "text-[35px] text-[#0E2E48]">15+</span>
                    <span class = "text-[25px] mb-2 text-[#0E2E48]">سال تجربه</span>
                </div>
                <div class="w-[25%] max-lg:w-full rounded-xl gap-3 p-4 bg-white border-1 border-gray-200 shadow-sm flex flex-col items-center justify-center">
                    <div class="w-17 h-17 flex items-center justify-center rounded-full leaner-box">
                        <svg class = "fill-[#091E2F] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                    </div>
                    <span class = "text-[35px] text-[#0E2E48]">1000+</span>
                    <span class = "text-[25px] mb-2 text-[#0E2E48]">مشتری راضی</span>
                </div>
                <div class="w-[25%] max-lg:w-full rounded-xl gap-3 p-4 bg-white border-1 border-gray-200 shadow-sm flex flex-col items-center justify-center">
                    <div class="w-17 h-17 flex items-center justify-center rounded-full leaner-box">
                        <svg class = "fill-[#091E2F] size-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M240 48H416c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H240V48zm-48 0V464H128c-8.8 0-16-7.2-16-16V416h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V280h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V144h24c13.3 0 24-10.7 24-24s-10.7-24-24-24H112V64c0-8.8 7.2-16 16-16h64zM64 416v32c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H128C92.7 0 64 28.7 64 64V96H24C10.7 96 0 106.7 0 120s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v88H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64z"/></svg>
                    </div>
                    <span class = "text-[35px] text-[#0E2E48]">500+</span>
                    <span class = "text-[25px] mb-2 text-[#0E2E48]">پروژه انجام شده</span>
                </div>
                <div class="w-[25%] max-lg:w-full rounded-xl gap-3 p-4 bg-white border-1 border-gray-200 shadow-sm flex flex-col items-center justify-center">
                    <div class="w-17 h-17 flex items-center justify-center rounded-full leaner-box">
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-9" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#091E2F">
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" /> </g>
                                
                            </svg>
                    </div>
                    <span class = "text-[35px] text-[#0E2E48]">24/7</span>
                    <span class = "text-[25px] mb-2 text-[#0E2E48]">پشتیبانی مشتریان</span>
                </div>
            </div>
        </section>


        <section class="max-w-[1800px] min-w-[325px]  flex gap-8 mx-auto max-lg:px-3 mt-10">
            <div class="w-full flex flex-col gap-5">
                <div class="w-full flex flex-col items-center max-lg:gap-3 ">
                    <div class="flex gap-2 items-center justify-center text-[20px]">
                        <div class="w-10 h-[2px] bg-[#FBC830]"></div>
                        <span>مزایا ها</span>
                        <div class="w-10 h-[2px] bg-[#FBC830]"></div>
                    </div>
                        <span class = "text-[40px]">چرا تراروی درختی؟</span>
                        <span class = "w-150  text-center text-[20px] text-gray-500 max-lg:w-full">
                            باما ارائه خدمات و محصولات با کیفیت تلاش میکنیم تا بهترین تجربه را برای شما فراهم کنیم رضایت شما افتخار ماست
                        </span>
                </div>
                <div class="w-full flex gap-3 justify-between max-lg:flex-col">
                    <div class="w-[19%] max-lg:w-full flex flex-col gap-3 p-3 items-center  border-1 border-gray-200 shadow-sm max-lg:flex-row max-lg:h-50">
                <div class="w-19 h-19 rounded-full flex items-center justify-center bg-[#091E2F] max-lg:w-20 max-lg:h-17">
                    <xml version="1.0" encoding="utf-8">
                        <svg class = "size-10 fill-[#F8C028] max-lg:size-8" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>award</title>
                            <path d="M28.641 26.578l-3.799-6.364c1.805-2.055 2.907-4.767 2.907-7.736 0-6.489-5.26-11.749-11.749-11.749s-11.749 5.26-11.749 11.749c0 2.943 1.082 5.633 2.87 7.695l-0.012-0.015-3.832 6.422c-0.111 0.183-0.176 0.404-0.176 0.64 0 0.691 0.56 1.251 1.251 1.251 0.071 0 0.14-0.006 0.207-0.017l-0.007 0.001 2.602-0.426 0.947 2.426c0.175 0.44 0.581 0.753 1.065 0.791l0.004 0c0.032 0.002 0.063 0.004 0.095 0.004 0.46-0 0.863-0.249 1.080-0.619l0.003-0.006 3.775-6.54c0.562 0.1 1.212 0.16 1.875 0.165l0.004 0c0.64-0.005 1.263-0.060 1.87-0.162l-0.069 0.010 3.769 6.526c0.22 0.376 0.622 0.625 1.082 0.625h0c0.031 0 0.063-0.002 0.094-0.004 0.488-0.037 0.896-0.35 1.067-0.783l0.003-0.008 0.947-2.426 2.602 0.426c0.060 0.010 0.129 0.016 0.2 0.016 0.691 0 1.251-0.56 1.251-1.251 0-0.236-0.065-0.457-0.179-0.645l0.003 0.006zM9.48 27.123l-0.369-0.945c-0.193-0.469-0.647-0.793-1.177-0.793-0.067 0-0.132 0.005-0.196 0.015l0.007-0.001-0.947 0.156 2.181-3.655c0.765 0.581 1.638 1.084 2.572 1.47l0.078 0.029zM6.75 12.5c0-5.109 4.141-9.25 9.25-9.25s9.25 4.141 9.25 9.25c0 5.109-4.141 9.25-9.25 9.25v0c-5.106-0.006-9.244-4.144-9.25-9.249v-0.001zM24.168 25.396c-0.060-0.010-0.129-0.016-0.199-0.016-0.527 0-0.978 0.326-1.163 0.787l-0.003 0.008-0.369 0.945-2.135-3.697c1.016-0.408 1.894-0.905 2.693-1.502l-0.031 0.022 2.155 3.609zM16 4.75c-4.28 0-7.75 3.47-7.75 7.75s3.47 7.75 7.75 7.75c4.28 0 7.75-3.47 7.75-7.75v0c-0.005-4.278-3.472-7.745-7.75-7.75h-0zM16 17.75c-2.899 0-5.25-2.351-5.25-5.25s2.351-5.25 5.25-5.25c2.899 0 5.25 2.351 5.25 5.25v0c-0.004 2.898-2.352 5.246-5.25 5.25h-0zM18.666 10.651h-1.129l-0.349-1.072c-0.208-0.459-0.662-0.772-1.188-0.772s-0.981 0.313-1.185 0.764l-0.003 0.008-0.349 1.072h-1.128c-0 0-0 0-0 0-0.69 0-1.25 0.559-1.25 1.25 0 0.414 0.201 0.781 0.512 1.009l0.004 0.002 0.912 0.664-0.349 1.071c-0.039 0.116-0.061 0.249-0.061 0.387 0 0.69 0.56 1.25 1.25 1.25 0.276 0 0.531-0.089 0.738-0.241l-0.004 0.002 0.913-0.663 0.913 0.663c0.203 0.149 0.458 0.238 0.734 0.238 0.69 0 1.25-0.56 1.25-1.25 0-0.138-0.022-0.271-0.064-0.396l0.003 0.009-0.348-1.071 0.912-0.663c0.314-0.23 0.516-0.597 0.516-1.012 0-0.69-0.56-1.25-1.25-1.25-0 0-0 0-0 0h0z"></path>
                    </svg>
                </div>
                <div class="w-full flex flex-col items-center  max-lg:w-[90%] max-lg:items-start ">
                    <span class = "text-[32px] text-[#0E2E48] truncate max-w-full max-lg:text-[23px] max-lg:p-2">کیفیت بالا</span>
                    <span class = "w-50 text-center text-[25px] text-gray-500 mb-4 max-lg:w-full max-lg:text-[18px] max-lg:text-start max-lg:p-2">استفاده از بهترین برندها و قطعات اصلی برای کیفیت ماندگار</span>
                </div>
            </div>
            <div class="w-[19%] max-lg:w-full flex flex-col gap-3 p-3 items-center  border-1 border-gray-200 shadow-sm max-lg:flex-row max-lg:h-50">
                <div class="w-19 h-19 rounded-full flex items-center justify-center bg-[#091E2F] max-lg:w-20 max-lg:h-17">

                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    
                    <svg class = "size-11" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="800px" height="800px" fill="#F8D048">
                        
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        
                        <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#F8D048;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <line class="st0" x1="16" y1="16" x2="22" y2="10"/> <polygon class="st0" points="30,6 26,6 26,2 22,6 22,10 26,10 "/> <circle class="st0" cx="16" cy="16" r="6"/> <path class="st0" d="M27,9c1.3,2,2,4.4,2,7c0,7.2-5.8,13-13,13S3,23.2,3,16S8.8,3,16,3c2.6,0,5,0.7,7,2"/> </g>
                        
                    </svg>
                </div>
                <div class="w-full flex flex-col items-center  max-lg:w-[90%] max-lg:items-start ">
                    <span class = "text-[32px] text-[#0E2E48] truncate max-w-full max-lg:text-[23px] max-lg:p-2">دقت و کابیراسیون</span>
                    <span class = "w-50 text-center text-[25px] text-gray-500 mb-4 max-lg:w-full max-lg:text-[18px] max-lg:text-start max-lg:p-2">ارائه ترازوهای دقیق و کالبیره شده مطلق استانداردهای جهانی</span>
                </div>
            </div>
            <div class="w-[19%] max-lg:w-full flex flex-col gap-3 p-3 items-center  border-1 border-gray-200 shadow-sm max-lg:flex-row max-lg:h-50">
                <div class="w-19 h-19 rounded-full flex items-center justify-center bg-[#091E2F] max-lg:w-20 max-lg:h-17">
                    <svg  class = "size-10 fill-[#FBC830] max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M192 416c0-17.7-14.3-32-32-32H64c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H309.3c-6.9 0-13.7 2.2-19.2 6.4L192 464V416zM64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h64 32v32 48c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zm64 232a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm128 0a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm152-24a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/></svg>
                </div>
                <div class="w-full flex flex-col items-center  max-lg:w-[90%] max-lg:items-start ">
                    <span class = "text-[32px] text-[#0E2E48] truncate max-w-full max-lg:text-[23px] max-lg:p-2">مشاوره تخصصی</span>
                    <span class = "w-50 text-center text-[25px] text-gray-500 mb-4 max-lg:w-full max-lg:text-[18px] max-lg:text-start max-lg:p-2">راهنمایی حرفه ای برای انتخاب بهترین ترازو مناسب کسب و کار شما</span>
                </div>
            </div>
            <div class="w-[19%] max-lg:w-full flex flex-col gap-3 p-3 items-center  border-1 border-gray-200 shadow-sm max-lg:flex-row max-lg:h-50">
                <div class="w-19 h-19 rounded-full flex items-center justify-center bg-[#091E2F] max-lg:w-20 max-lg:h-17">
                    <svg  class = "size-10 fill-[#FBC830] max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48.5 114.9L256 34.3l207.5 80.5c2.7 45.6-4.5 116.8-34.7 186.3S345.4 438.4 256 477.1C166.6 438.4 113.4 370.7 83.2 301.2S45.8 160.5 48.5 114.9zm447-1.9l-1.2-20.5L475.1 85 267.6 4.5 256 0 244.4 4.5 36.9 85 17.8 92.5 16.6 113c-2.9 49.9 4.9 126.3 37.3 200.9c32.7 75.3 91 150 189.4 192.6L256 512l12.7-5.5c98.4-42.6 156.7-117.3 189.4-192.6c32.4-74.7 40.2-151 37.3-200.9zM363.3 203.3L374.6 192 352 169.4l-11.3 11.3L224 297.4l-52.7-52.7L160 233.4 137.4 256l11.3 11.3 64 64L224 342.6l11.3-11.3 128-128z"/></svg>
                </div>
                <div class="w-full flex flex-col items-center  max-lg:w-[90%] max-lg:items-start ">
                    <span class = "text-[32px] text-[#0E2E48] truncate max-w-full max-lg:text-[23px] max-lg:p-2">خدمات پس از فروش</span>
                    <span class = "w-50 text-center text-[25px] text-gray-500 mb-4 max-lg:w-full max-lg:text-[18px] max-lg:text-start max-lg:p-2">پشتیبانی سریع و قابل اعتماد پس از خرید</span>
                </div>
            </div>
            <div class="w-[19%] max-lg:w-full flex flex-col gap-3 p-3 items-center  border-1 border-gray-200 shadow-sm max-lg:flex-row max-lg:h-50">
                <div class="w-19 h-19 rounded-full flex items-center justify-center bg-[#091E2F] max-lg:w-20 max-lg:h-17">
                    <svg class = "size-10 fill-[#FBC830] max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M7 47L47 7c8.5-8.5 22-9.4 31.6-2.1l104 80c5.9 4.5 9.4 11.6 9.4 19v64 8 4.7L287.3 276c30.3-24.7 75-22.9 103.3 5.4l112 112c12.5 12.5 12.5 32.8 0 45.3l-64 64c-12.5 12.5-32.8 12.5-45.3 0l-112-112c-28.3-28.3-30-73-5.4-103.3L180.7 192H176h-8H104c-7.5 0-14.5-3.5-19-9.4L5 78.6C-2.4 69.1-1.5 55.6 7 47zM168 176h8v-8V104c0-2.5-1.2-4.8-3.1-6.3l-104-80c-3.2-2.4-7.7-2.2-10.5 .7l-40 40c-2.8 2.8-3.1 7.3-.7 10.5l80 104c1.5 2 3.9 3.1 6.3 3.1h64zM379.3 292.7c-23.9-23.9-62.7-23.9-86.6 0s-23.9 62.7 0 86.6l112 112c6.2 6.2 16.4 6.2 22.6 0l64-64c6.2-6.2 6.2-16.4 0-22.6l-112-112zM21.5 386.5L170.1 237.9l11.3 11.3L32.9 397.8C22.1 408.6 16 423.2 16 438.5C16 470.2 41.8 496 73.5 496c15.3 0 29.9-6.1 40.7-16.9L230.2 363.2c1.5 5.7 3.4 11.3 5.8 16.8L125.5 490.5C111.7 504.3 93 512 73.5 512C32.9 512 0 479.1 0 438.5c0-19.5 7.7-38.2 21.5-52zM496 160c0-17.2-3-33.6-8.5-48.9L416 182.6c-6 6-14.1 9.4-22.6 9.4H352c-17.7 0-32-14.3-32-32V118.6c0-8.5 3.4-16.6 9.4-22.6l71.5-71.5C385.6 19 369.2 16 352 16c-50.7 0-95.3 26.2-121 65.8l-12.7-9.8C246.9 28.6 296.1 0 352 0c20.1 0 39.4 3.7 57.1 10.5c10 3.8 11.8 16.5 4.3 24.1l-72.7 72.7c-3 3-4.7 7.1-4.7 11.3V160c0 8.8 7.2 16 16 16h41.4c4.2 0 8.3-1.7 11.3-4.7l72.7-72.7c7.6-7.6 20.3-5.7 24.1 4.3c6.8 17.7 10.5 37 10.5 57.1c0 53.8-26.5 101.3-67.2 130.3l-11.5-11.5C471.2 252.9 496 209.3 496 160zM80 416a16 16 0 1 1 0 32 16 16 0 1 1 0-32z"/></svg>
                </div>
                <div class="w-full flex flex-col items-center  max-lg:w-[90%] max-lg:items-start ">
                    <span class = "text-[32px] text-[#0E2E48] truncate max-w-full max-lg:text-[23px] max-lg:p-2">تعمیر و پشتیبانی</span>
                    <span class = "w-50 text-center text-[25px] text-gray-500 mb-4 max-lg:w-full max-lg:text-[18px] max-lg:text-start max-lg:p-2">تعمیرات تخصصی با تجهیزات مدرن و قطعات اصلی</span>
                </div>
            </div>
        </div>
    </div>
        </section>
        <section class = " max-w-[21000px] min-w-[325px] mx-auto mt-10 bg-slate-100 max-lg:pt-5">
            <div class="max-w-[1800px] min-w-[325px] mx-auto max-lg:p-3 flex max-lg:flex-col">
                <div class="w-[70%] flex flex-col gap-3 max-lg:w-full  max-lg:my-5">
                    <div class="flex gap-2 items-center text-[20px] max-lg:justify-center">
                        <div class="w-10 h-1 bg-[#FBC830] max-lg:hidden"></div>
                        <div class="w-10 h-1 bg-[#FBC830] lg:hidden"></div>
                        <span>مسیر تحول ما</span>
                        <div class="w-10 h-1 bg-[#FBC830] lg:hidden"></div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span class = "text-[50px] text-[#0E2E48] max-lg:text-[30px] max-lg:text-center">مسیر رشد ترازوی درختی</span>
                        <span class = "text-[30px] text-gray-500 max-lg:text-[20px] max-lg:text-center">از اغاز تا امروز همواره در کنار مشتریان خود بوده ایم</span>
                    </div>
                    <div class="w-full flex items-center relative gap-8 mr-15 mt-5 max-lg:hidden">
                        <div class="w-228 h-1 bg-[#FBC830] absolute top-8 right-15"></div>
                       <div class="flex flex-col h-60 w-[13%] gap-1 items-center  p-3 ">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M520.6 120.9l0 0c18.7 29.6 .3 66.6-29.2 70.6c-2.6 .3-5.2 .5-7.9 .5c-16.5 0-31.2-7.2-41.5-18.5c-6.1-6.7-14.7-10.5-23.7-10.5s-17.6 3.8-23.7 10.5c-10.2 11.2-24.8 18.4-41.4 18.4c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C254 184.8 239.3 192 222.7 192c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C123.6 184.8 109 192 92.4 192c-2.6 0-5.2-.2-7.9-.5c-29.3-4-47.7-41-29.1-70.6l0 0L111.6 32H464.4l56.2 88.9zM483.4 224c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-11.9c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-12c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.8 0 37.8-6.5 52.3-17.3c4.7-3.5 9-7.4 12.9-11.7c3.9 4.3 8.3 8.3 13 11.8c14.5 10.7 32.5 17.2 52.2 17.2zM80 256c-8.8 0-16 7.2-16 16v80 16 16 64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 368 352 272c0-8.8-7.2-16-16-16s-16 7.2-16 16v80H96V272c0-8.8-7.2-16-16-16zM96 384H480v64c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384z"/></svg>
                        </div>
                        <span class = "text-[#0E2E48] text-[27px]">1382</span>
                        <span class = "text-[#0E2E48] text-[21px] text-center">تاسیس مجموعه قطعات اصولی</span>
                       </div>
                       <div class="h-25 w-[1px] bg-gray-500"></div>
                       <div class="flex flex-col h-60 w-[13%] gap-1 items-center  p-3 ">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M371.1 13.1c-1-5.3-4.6-9.8-9.6-11.9s-10.7-1.5-15.2 1.6L256 65.1 165.7 2.8c-4.5-3.1-10.2-3.7-15.2-1.6s-8.6 6.6-9.6 11.9L121 121 13.1 140.8c-5.3 1-9.8 4.6-11.9 9.6s-1.5 10.7 1.6 15.2L65.1 256 2.8 346.3c-3.1 4.5-3.7 10.2-1.6 15.2s6.6 8.6 11.9 9.6L121 391l19.8 107.9c1 5.3 4.6 9.8 9.6 11.9s10.7 1.5 15.2-1.6L256 446.9l90.3 62.3c4.5 3.1 10.2 3.7 15.2 1.6s8.6-6.6 9.6-11.9L391 391l107.9-19.8c5.3-1 9.8-4.6 11.9-9.6s1.5-10.7-1.6-15.2L446.9 256l62.3-90.3c3.1-4.5 3.7-10.2 1.6-15.2s-6.6-8.6-11.9-9.6L391 121 371.1 13.1zM265.1 97.7l79.1-54.5 17.4 94.5c1.2 6.5 6.3 11.6 12.8 12.8l94.5 17.4-54.5 79.1c-3.8 5.5-3.8 12.7 0 18.2l54.5 79.1-94.5 17.4c-6.5 1.2-11.6 6.3-12.8 12.8l-17.4 94.5-79.1-54.5c-5.5-3.8-12.7-3.8-18.2 0l-79.1 54.5-17.4-94.5c-1.2-6.5-6.3-11.6-12.8-12.8L43.2 344.1l54.5-79.1c3.8-5.5 3.8-12.7 0-18.2L43.2 167.8l94.5-17.4c6.5-1.2 11.6-6.3 12.8-12.8l17.4-94.5 79.1 54.5c5.5 3.8 12.7 3.8 18.2 0zM256 384a128 128 0 1 0 0-256 128 128 0 1 0 0 256zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[27px]">1392</span>
                        <span class = "text-[#0E2E48] text-[21px] text-center">گسترش تنوع محصولات</span>
                       </div>
                       <div class="h-25 w-[1px] bg-gray-500"></div>
                       <div class="flex flex-col h-60 w-[13%] gap-1 items-center  p-3 ">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M371.1 13.1c-1-5.3-4.6-9.8-9.6-11.9s-10.7-1.5-15.2 1.6L256 65.1 165.7 2.8c-4.5-3.1-10.2-3.7-15.2-1.6s-8.6 6.6-9.6 11.9L121 121 13.1 140.8c-5.3 1-9.8 4.6-11.9 9.6s-1.5 10.7 1.6 15.2L65.1 256 2.8 346.3c-3.1 4.5-3.7 10.2-1.6 15.2s6.6 8.6 11.9 9.6L121 391l19.8 107.9c1 5.3 4.6 9.8 9.6 11.9s10.7 1.5 15.2-1.6L256 446.9l90.3 62.3c4.5 3.1 10.2 3.7 15.2 1.6s8.6-6.6 9.6-11.9L391 391l107.9-19.8c5.3-1 9.8-4.6 11.9-9.6s1.5-10.7-1.6-15.2L446.9 256l62.3-90.3c3.1-4.5 3.7-10.2 1.6-15.2s-6.6-8.6-11.9-9.6L391 121 371.1 13.1zM265.1 97.7l79.1-54.5 17.4 94.5c1.2 6.5 6.3 11.6 12.8 12.8l94.5 17.4-54.5 79.1c-3.8 5.5-3.8 12.7 0 18.2l54.5 79.1-94.5 17.4c-6.5 1.2-11.6 6.3-12.8 12.8l-17.4 94.5-79.1-54.5c-5.5-3.8-12.7-3.8-18.2 0l-79.1 54.5-17.4-94.5c-1.2-6.5-6.3-11.6-12.8-12.8L43.2 344.1l54.5-79.1c3.8-5.5 3.8-12.7 0-18.2L43.2 167.8l94.5-17.4c6.5-1.2 11.6-6.3 12.8-12.8l17.4-94.5 79.1 54.5c5.5 3.8 12.7 3.8 18.2 0zM256 384a128 128 0 1 0 0-256 128 128 0 1 0 0 256zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[27px]">1398</span>
                        <span class = "text-[#0E2E48] text-[21px] text-center">راه اندازی قطعات و تعمیر</span>
                       </div>
                       <div class="h-25 w-[1px] bg-gray-500"></div>
                       <div class="flex flex-col h-60 w-[13%] gap-1 items-center  p-3 ">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[27px]">1402</span>
                        <span class = "text-[#0E2E48] text-[21px] text-center">افزایش تعداد مشتری و همکار</span>
                       </div>
                       <div class="h-25 w-[1px] bg-gray-500"></div>
                       <div class="flex flex-col h-60 w-[13%] gap-1 items-center  p-3 ">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[27px]">امروز</span>
                        <span class = "text-[#0E2E48] text-[21px] text-center">ادامه مسیر با هدف رشد بیشتر</span>
                       </div>
                    </div>
                </div>
                    <div class="w-[35%] relative  flex  justify-end max-lg:order-first max-lg:w-full">
                    <div class="w-10 h-80 bg-[#FBC830] absolute -skew-x-25 right-10 top-1 rounded-[5px] max-lg:hidden"></div>
                        <div class="w-full h-full clip-pathh  rounded-[15px] relative overflow-hidden">
                            <div class="w-14 h-20 bg-[#FBC830] absolute -left-7 -top-7 rotate-35"></div>
                            <img class = "w-full h-full" src="{{asset('assets/img/file_0000000032ac81f499cdabd6758572c0.png')}}" alt="">
                            <div class="w-[12%] h-57 bg-[#FBC830] bottom-0 absolute  right-0 -skew-x-28"></div>
                    </div>
                </div>
                    <div class="w-full flex flex-col items-center relative lg:hidden gap-3">
                        <div class="w-full flex  justify-center gap-3 relative">
                            <div class="w-[80%] h-[1px] bg-[#FBC830] absolute top-5"></div>
                            <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                                <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                                    <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M520.6 120.9l0 0c18.7 29.6 .3 66.6-29.2 70.6c-2.6 .3-5.2 .5-7.9 .5c-16.5 0-31.2-7.2-41.5-18.5c-6.1-6.7-14.7-10.5-23.7-10.5s-17.6 3.8-23.7 10.5c-10.2 11.2-24.8 18.4-41.4 18.4c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C254 184.8 239.3 192 222.7 192c-16.5 0-31.3-7.2-41.4-18.4c-6.1-6.7-14.7-10.5-23.7-10.5s-17.7 3.8-23.7 10.5C123.6 184.8 109 192 92.4 192c-2.6 0-5.2-.2-7.9-.5c-29.3-4-47.7-41-29.1-70.6l0 0L111.6 32H464.4l56.2 88.9zM483.4 224c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-11.9c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.6 0 37.5-6.4 52-17c4.8-3.5 9.2-7.6 13.2-12c4 4.4 8.4 8.4 13.2 11.9c14.5 10.6 32.4 17 52 17c19.8 0 37.8-6.5 52.3-17.3c4.7-3.5 9-7.4 12.9-11.7c3.9 4.3 8.3 8.3 13 11.8c14.5 10.7 32.5 17.2 52.2 17.2zM80 256c-8.8 0-16 7.2-16 16v80 16 16 64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 368 352 272c0-8.8-7.2-16-16-16s-16 7.2-16 16v80H96V272c0-8.8-7.2-16-16-16zM96 384H480v64c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384z"/></svg>
                        </div>
                        <span class = "text-[#0E2E48] text-[24px]">1382</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center">تاسیس مجموعه قطعات اصولی</span>
                       </div>
                       <div class="h-18 w-[1px] bg-gray-300 mt-23"></div>
                       <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M371.1 13.1c-1-5.3-4.6-9.8-9.6-11.9s-10.7-1.5-15.2 1.6L256 65.1 165.7 2.8c-4.5-3.1-10.2-3.7-15.2-1.6s-8.6 6.6-9.6 11.9L121 121 13.1 140.8c-5.3 1-9.8 4.6-11.9 9.6s-1.5 10.7 1.6 15.2L65.1 256 2.8 346.3c-3.1 4.5-3.7 10.2-1.6 15.2s6.6 8.6 11.9 9.6L121 391l19.8 107.9c1 5.3 4.6 9.8 9.6 11.9s10.7 1.5 15.2-1.6L256 446.9l90.3 62.3c4.5 3.1 10.2 3.7 15.2 1.6s8.6-6.6 9.6-11.9L391 391l107.9-19.8c5.3-1 9.8-4.6 11.9-9.6s1.5-10.7-1.6-15.2L446.9 256l62.3-90.3c3.1-4.5 3.7-10.2 1.6-15.2s-6.6-8.6-11.9-9.6L391 121 371.1 13.1zM265.1 97.7l79.1-54.5 17.4 94.5c1.2 6.5 6.3 11.6 12.8 12.8l94.5 17.4-54.5 79.1c-3.8 5.5-3.8 12.7 0 18.2l54.5 79.1-94.5 17.4c-6.5 1.2-11.6 6.3-12.8 12.8l-17.4 94.5-79.1-54.5c-5.5-3.8-12.7-3.8-18.2 0l-79.1 54.5-17.4-94.5c-1.2-6.5-6.3-11.6-12.8-12.8L43.2 344.1l54.5-79.1c3.8-5.5 3.8-12.7 0-18.2L43.2 167.8l94.5-17.4c6.5-1.2 11.6-6.3 12.8-12.8l17.4-94.5 79.1 54.5c5.5 3.8 12.7 3.8 18.2 0zM256 384a128 128 0 1 0 0-256 128 128 0 1 0 0 256zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[24px]">1392</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center ">گسترش تنوع محصولات</span>
                       </div>
                       <div class="h-18 w-[1px] bg-gray-300 mt-23"></div>
                       <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M371.1 13.1c-1-5.3-4.6-9.8-9.6-11.9s-10.7-1.5-15.2 1.6L256 65.1 165.7 2.8c-4.5-3.1-10.2-3.7-15.2-1.6s-8.6 6.6-9.6 11.9L121 121 13.1 140.8c-5.3 1-9.8 4.6-11.9 9.6s-1.5 10.7 1.6 15.2L65.1 256 2.8 346.3c-3.1 4.5-3.7 10.2-1.6 15.2s6.6 8.6 11.9 9.6L121 391l19.8 107.9c1 5.3 4.6 9.8 9.6 11.9s10.7 1.5 15.2-1.6L256 446.9l90.3 62.3c4.5 3.1 10.2 3.7 15.2 1.6s8.6-6.6 9.6-11.9L391 391l107.9-19.8c5.3-1 9.8-4.6 11.9-9.6s1.5-10.7-1.6-15.2L446.9 256l62.3-90.3c3.1-4.5 3.7-10.2 1.6-15.2s-6.6-8.6-11.9-9.6L391 121 371.1 13.1zM265.1 97.7l79.1-54.5 17.4 94.5c1.2 6.5 6.3 11.6 12.8 12.8l94.5 17.4-54.5 79.1c-3.8 5.5-3.8 12.7 0 18.2l54.5 79.1-94.5 17.4c-6.5 1.2-11.6 6.3-12.8 12.8l-17.4 94.5-79.1-54.5c-5.5-3.8-12.7-3.8-18.2 0l-79.1 54.5-17.4-94.5c-1.2-6.5-6.3-11.6-12.8-12.8L43.2 344.1l54.5-79.1c3.8-5.5 3.8-12.7 0-18.2L43.2 167.8l94.5-17.4c6.5-1.2 11.6-6.3 12.8-12.8l17.4-94.5 79.1 54.5c5.5 3.8 12.7 3.8 18.2 0zM256 384a128 128 0 1 0 0-256 128 128 0 1 0 0 256zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[24px]">1398</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center ">راه اندازی قطعات و تعمیر</span>
                    </div>
                </div>

                       <div class="w-full flex justify-center gap-3 relative">
                            <div class="w-[80%] h-[1px] bg-[#FBC830] absolute top-5"></div>

                           <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                               <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                                   <svg class = "size-6 fill-[#091E2F] z-10"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>                                           
                                </div>
                        <span class = "text-[#0E2E48] text-[24px]">1402</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center ">افزایش تعداد مشتری و همکار</span>
                       </div>
                       <div class="h-18 w-[1px] bg-gray-300 mt-23"></div>
                           <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                               <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                                   <svg class = "size-6 fill-[#091E2F] z-10"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 128a96 96 0 1 0 -192 0 96 96 0 1 0 192 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM32 480H416c-1.2-79.7-66.2-144-146.3-144H178.3c-80 0-145 64.3-146.3 144zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>                                           
                                </div>
                        <span class = "text-[#0E2E48] text-[24px]">1402</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center ">افزایش تعداد مشتری و همکار</span>
                       </div>
                       <div class="h-18 w-[1px] bg-gray-300 mt-23"></div>
                       <div class="flex flex-col h-60  gap-1 items-center w-full max-lg:h-45">
                        <div class="w-11 h-11 bg-[#FBC830] rounded-full flex items-center justify-center">
                            <svg class = "size-6 fill-[#091E2F] z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>                                           
                        </div>
                        <span class = "text-[#0E2E48] text-[24px]">امروز</span>
                        <span class = "text-[#0E2E48] text-[14px] text-center ">ادامه مسیر با هدف رشد بیشتر</span>
                    </div>
                    </div>
                </div>
            </div>                                                         
            
            </div>
        </section>
        <section class = "max-w-[1800px] min-w-[325px] mx-auto max-lg:px-3 mt-10">
            <div class="w-full flex flex-col gap-3 ">
                <div class="w-full flex flex-col gap-2 items-center">
                    <div class="flex gap-3 items-center">
                        <div class="w-10 h-1 bg-[#FBC830]"></div>
                        <span class = "text-[20px] text-[#0E2E48]">خدمات ما</span>
                        <div class="w-10 h-1 bg-[#FBC830]"></div>
                    </div>
                    
                    <h3 class = "text-[40px] text-[#0E2E48] max-lg:text-[24px]">خدمات تخصصی ترازوی درختی</h3>
                    <span class = "text-[28px] text-gray-500 max-lg:text-[20px] max-lg:text-center">مادر تمام مراحل خرید و استفاده از ترازو خمراه شما هستیم</span>
                </div>
                <div class="w-full flex gap-5 max-lg:flex-col">
                    <div class="w-3/9 max-lg:w-full flex flex-col p-3 rounded-[10px] bg-white border-1 border-gray-200 shadow-sm gap-5 relative">
                        <a href = "" class="w-15 h-15 flex items-center justify-center leaner-box rounded-full absolute top-48 right-10">
                            <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </a>
                        <div class="w-full rounded-[10px] overflow-hidden ">
                            <img class = "w-full h-55" src="{{asset('assets/img/file_00000000b22081f4b29f589514c81a87.png')}}" alt="">
                        </div>
                        <div class="w-full flex flex-col gap-2 p-3">
                            <h2 class = "text-[#0E2E48] text-[35px] max-lg:text-[28px] font-bold">فروش ترازو</h2>
                            <span >انواع ترازوهای صنعتی،فروشگاهی،ازمایشکاهی و با بهترین قیمت</span>
                        </div>
                        <a class = " text-[#0E2E48] flex items-center gap-3 pr-3 text-[22px] max-lg:self-end" href="">
                                <span>مشاهده جزئیات</span>
                                <svg class = "fill-[#0E2E48] size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                            </a>
                    </div>
                    <div class="w-3/9 max-lg:w-full flex flex-col p-3 rounded-[10px] bg-white border-1 border-gray-200 shadow-sm gap-5 relative">
                        <a href = "" class="w-15 h-15 flex items-center justify-center leaner-box rounded-full absolute top-48 right-10">
                            <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </a>
                        <div class="w-full rounded-[10px] overflow-hidden ">
                            <img class = "w-full h-55" src="{{asset('assets/img/file_000000007efc81f4849eca10879d8b83.png')}}" alt="">
                        </div>
                        <div class="w-full flex flex-col gap-2 p-3">
                            <h2 class = "text-[#0E2E48] text-[35px] max-lg:text-[28px] font-bold">فروش ترازو</h2>
                            <span >انواع ترازوهای صنعتی،فروشگاهی،ازمایشکاهی و با بهترین قیمت</span>
                        </div>
                        <a class = " text-[#0E2E48] flex items-center gap-3 pr-3 text-[22px] max-lg:self-end" href="">
                                <span>مشاهده جزئیات</span>
                                <svg class = "fill-[#0E2E48] size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                            </a>
                    </div>
                    <div class="w-3/9 max-lg:w-full flex flex-col p-3 rounded-[10px] bg-white border-1 border-gray-200 shadow-sm gap-5 relative">
                        <a href = "" class="w-15 h-15 flex items-center justify-center leaner-box rounded-full absolute top-48 right-10">
                            <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </a>
                        <div class="w-full rounded-[10px] overflow-hidden ">
                            <img class = "w-full h-55" src="{{asset('assets/img/file_0000000081e48243a085d8cff601cd60.png')}}" alt="">
                        </div>
                        <div class="w-full flex flex-col gap-2 p-3">
                            <h2 class = "text-[#0E2E48] text-[35px] max-lg:text-[28px] font-bold">فروش ترازو</h2>
                            <span >انواع ترازوهای صنعتی،فروشگاهی،ازمایشکاهی و با بهترین قیمت</span>
                        </div>
                        <a class = " text-[#0E2E48] flex items-center gap-3 pr-3 text-[22px] max-lg:self-end" href="">
                                <span>مشاهده جزئیات</span>
                                <svg class = "fill-[#0E2E48] size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                            </a>
                        </div>
                </div>
            </div>
        </section>
        <section class = "max-w-[1800px] min-w-[325px] mx-auto max-lg:px-3 mt-10 max-lg:mb-50 ">
                <div class="w-full flex relative max-lg:flex-col">
                    <div class="w-[40%] max-lg:hidden"></div>
                    <div class="w-[50%] absolute right-0 max-lg:w-full max-lg:-bottom-35 imgg">
                        <img class = "w-full h-[212px] rounded-[10px]" src="{{asset('assets/img/file_00000000588881f48ceb936670889db4.png')}}" alt="">
                    </div>
                    <div class="w-15 h-[213px] bg-[#F2CE56] -skew-x-27 rounded-[7px] absolute right-185 max-lg:hidden"></div>
                    <div class="w-[60%] flex justify-end bg-[#0E2E48] p-5 py-6 rounded-[15px] clip-pathh1 max-lg:w-full relative max-lg:flex-col max-lg:pb-20 max-lg:pt-10 max-lg:justify-between max-lg:items-center max-lg:gap-3">
                    <div class="w-30 h-40 bg-[#FBC830] absolute z-20 -bottom-4 rotate-30 -right-18 lg:hidden"></div>
                        <div class="w-[70%] flex flex-col items-end text-white gap-2 max-lg:w-full">
                            <h2 class = "text-[40px] max-lg:text-[20px] max-lg:text-center">برای انتخاب <span class = "text-[#F2CE56] ">بهترین ترازو</span>با ما در ارتباط باشید</h2>
                            <span class = "text-[20px] text-gray-500 max-lg:text-center">مشاوره ما اماده پاسخگویی به سوالات ما هستند</span>
                            <div class="w-53 h-13 flex items-center justify-center gap-5 bg-[#FBC830] rounded-[30px] text-[#0E2E48] text-[20px] max-lg:self-center max-lg:w-48 max-lg:h-10 max-lg:text-[18px]">
                                <span>تماس باما</span>
                                <svg class = "fill-[#0E2E48] size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z"/></svg>
                            </div>
                        </div>
                        <div class="w-[20%] flex items-center justify-center max-lg:order-first max-lg:w-full ">
                            <div class="w-32 h-32 flex items-center justify-center rounded-full border-1 border-gray-400 max-lg:w-20 max-lg:h-20">
                                 <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            
                            <svg class = "size-14 fill-[#F8C028] max-lg:size-10" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                                
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                
                                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" fill="#F8C028"/> </g>
                                
                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
      <footer class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#061F35] flex flex-col items-center gap-8 max-lg:px-3 max-lg:gap-4">
        <div class="w-[94.5%] flex mx-auto text-white pt-5 max-lg:flex-col max-lg:items-end ">

         <div class="w-[25%] flex flex-col  justify-start  gap-5  max-lg:w-full max-lg:justify-center max-lg:items-center ">
                <div class="flex gap-3 items-center max-lg:flex-col">
                    <div class="flex flex-col gap-2  max-lg:items-center">
                        <span class = "text-[25px]">ترازوی درختی</span>
                        <p class = "text-gray-400">دقت و اندازه گیری در کسب و کارتان</p>
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
                <span class = "text-gray-400 text-[17px]">صفحه اصلی</span>
                <span class = "text-gray-400 text-[17px]">محصولات</span>
                <span class = "text-gray-400 text-[17px]">درباره ما</span>
                <span class = "text-gray-400 text-[17px]">تماس باما</span>
            </div>
            <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1  max-lg:order-2">
                <div class="flex items-center lg:hidden text-[25px] gap-3 ">
                    <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0c17 0 33.6 1.7 49.8 4.8c7.9 1.5 21.8 6.1 29.4 20.1c2 3.7 3.6 7.6 4.6 11.8l9.3 38.5C350.5 81 360.3 86.7 366 85l38-11.2c4-1.2 8.1-1.8 12.2-1.9c16.1-.5 27 9.4 32.3 15.4c22.1 25.1 39.1 54.6 49.9 86.3c2.6 7.6 5.6 21.8-2.7 35.4c-2.2 3.6-4.9 7-8 10L459 246.3c-4.2 4-4.2 15.5 0 19.5l28.7 27.3c3.1 3 5.8 6.4 8 10c8.2 13.6 5.2 27.8 2.7 35.4c-10.8 31.7-27.8 61.1-49.9 86.3c-5.3 6-16.3 15.9-32.3 15.4c-4.1-.1-8.2-.8-12.2-1.9L366 427c-5.7-1.7-15.5 4-16.9 9.8l-9.3 38.5c-1 4.2-2.6 8.2-4.6 11.8c-7.7 14-21.6 18.5-29.4 20.1C289.6 510.3 273 512 256 512s-33.6-1.7-49.8-4.8c-7.9-1.5-21.8-6.1-29.4-20.1c-2-3.7-3.6-7.6-4.6-11.8l-9.3-38.5c-1.4-5.8-11.2-11.5-16.9-9.8l-38 11.2c-4 1.2-8.1 1.8-12.2 1.9c-16.1 .5-27-9.4-32.3-15.4c-22-25.1-39.1-54.6-49.9-86.3c-2.6-7.6-5.6-21.8 2.7-35.4c2.2-3.6 4.9-7 8-10L53 265.7c4.2-4 4.2-15.5 0-19.5L24.2 218.9c-3.1-3-5.8-6.4-8-10C8 195.3 11 181.1 13.6 173.6c10.8-31.7 27.8-61.1 49.9-86.3c5.3-6 16.3-15.9 32.3-15.4c4.1 .1 8.2 .8 12.2 1.9L146 85c5.7 1.7 15.5-4 16.9-9.8l9.3-38.5c1-4.2 2.6-8.2 4.6-11.8c7.7-14 21.6-18.5 29.4-20.1C222.4 1.7 239 0 256 0zM218.1 51.4l-8.5 35.1c-7.8 32.3-45.3 53.9-77.2 44.6L97.9 120.9c-16.5 19.3-29.5 41.7-38 65.7l26.2 24.9c24 22.8 24 66.2 0 89L59.9 325.4c8.5 24 21.5 46.4 38 65.7l34.6-10.2c31.8-9.4 69.4 12.3 77.2 44.6l8.5 35.1c24.6 4.5 51.3 4.5 75.9 0l8.5-35.1c7.8-32.3 45.3-53.9 77.2-44.6l34.6 10.2c16.5-19.3 29.5-41.7 38-65.7l-26.2-24.9c-24-22.8-24-66.2 0-89l26.2-24.9c-8.5-24-21.5-46.4-38-65.7l-34.6 10.2c-31.8 9.4-69.4-12.3-77.2-44.6l-8.5-35.1c-24.6-4.5-51.3-4.5-75.9 0zM208 256a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 96a96 96 0 1 1 0-192 96 96 0 1 1 0 192z"/></svg>
                    <span>خدمات مشتریان</span>
                </div>
                <span class = "text-[25px] text-white mb-1 max-lg:hidden">خدمات مشتریان</span>
                <span class = "text-gray-400">پرسش های متداول</span>
                <span class = "text-gray-400">شرایط بازگشت کالا</span>
                <span class = "text-gray-400">پیگیری سفارشات</span>
                <span class = "text-gray-400">محوه ارسال</span>
            </div>
            
            
            <div class="w-full h-[0.5px] bg-white my-5 lg:hidden order-1"></div>
           <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1 ">
                <div class="w-full h-[0.5px] bg-white my-5 lg:hidden"></div>
                <div class="w-full flex justify-between items-center max-lg:flex-row-reverse max-lg:justify-end max-lg:gap-3 ">
                    <span>عضویت در خبرنامه</span>
                    <svg class = "size-10 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                </div>
                <div class="w-full">
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
            <div class="flex gap-2">
                <div class="flex gap-2 max-lg:text-[14px]   max-lg:justify-end max-lg:text-nowrap">
                    <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                    <span>طراحی و توصعه توسط تیم ترازوی درختی</span>
                </div>
            </div>
            <div class="flex gap-2">
                <span class = "text-[20px] max-lg:text-[15px]">0914 779 4595</span>
                <svg class = "size-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
            </div>
            <div class="flex flex-col gap-2 max-lg:hidden">
                <span>کلیه خقوق این سایت متعلق به باسکول دزختی میباشد</span>
                <span>طراحی وب سایت و مشاوره کسب و کار انلاین</span>
            </div>

            
        </div>
    </footer>
</body>
</html>

