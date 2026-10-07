<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>فروشگاه | جستجوی محصولات</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/filters.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
</head>

<body class="m-0 bg-gray-200 ">
<header class = "w-full bg-[#0B304A]  max-lg:h-30">
    <div class="max-w-[1800px] min-w-[325px] mx-auto flex flex-col max-lg:px-3 py-4">
        <div class="w-full flex items-center gap-30 max-lg:pb-2 max-xl:gap-5  max-lg:justify-between">
           

   <div class="w-[25%] flex items-center justify-end gap-4 max-lg:hidden lg:mb-3">
       <div class="w-[80px] ">
           <img src="{{asset('assets/img/file_00000000527881f4835e03acef97b338.png')}}" class = "w-[80px]" alt="">
       </div>
                <div class="flex flex-col gap-2 items-start text-white">
                    <span class = "text-[35px] font-bold text-nowrap">ترازو درختی</span>
                    <span class = "text-[14px] text-nowrap">دقت در اندازه گیری و اعتبار در کسب و کار</span>
                </div>
            </div>
            <svg class = "size-8 fill-white lg:hidden"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/></svg>
            <div class="w-[70%] flex items-center justify-around gap-10 max-2xl:gap-5 max-2xl:w-[80%] text-white  text-[18px]  parent_font max-lg:hidden">
                <a class = " text-center fonts" href="">تماس باما</a>
                <a class = " text-center fonts" href="">درباره ما</a>
                <a class = " text-center fonts" href="">محصولات خدمات</a>
                <a class = " text-center fonts" href="">صفحه اصلی</a>
            </div>
             <div class="w-[35%] flex items-center text-white gap-20  max-xl:w-[30%] max-xl:gap-8 max-lg:w-[5%] ">
                 <div class="w-[370px] h-[45px] bg-white rounded-[10px] flex max-lg:hidden">
                     <input class = "w-[85%]  outline-none text-black text-right " type="text" name="" id="" placeholder = "...جستو جوی محصول و برند">
                     <div class="w-[15%] flex items-center justify-center ">
                         <svg class = "size-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 208A176 176 0 1 0 32 208a176 176 0 1 0 352 0zM343.3 366C307 397.2 259.7 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 51.7-18.8 99-50 135.3L507.3 484.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L343.3 366z"></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-4  text-nowrap max-lg:justify-between relative ">
                        <span class = "max-lg:hidden">سبد خرید</span>
                        <div class="w-[16px] h-[16px] bg-[#E5A728] rounded-full absolute top-0 left-6 flex items-center justify-center">
                            <span>0</span>
                        </div>
                        <svg class = "size-10 fill-white max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    </div>
            </div>
         
        </div>
        <div class="w-full h-[45px] bg-white rounded-[20px] flex lg:hidden">
            <input class = "w-[85%]  outline-none text-black text-right " type="text" name="" id="" placeholder = "...جستو جوی محصول و برند">
            <div class="w-[15%] flex items-center justify-center ">
                <svg class = "size-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 208A176 176 0 1 0 32 208a176 176 0 1 0 352 0zM343.3 366C307 397.2 259.7 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 51.7-18.8 99-50 135.3L507.3 484.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L343.3 366z"></svg>
            </div>
        </div>
    </div>
</header>
    <!-- <div class="h-[38px] bg-white border-b border-[#e4e4e7] flex items-center justify-center text-[#71717a] text-xs">
        ارسال رایگان برای سفارش‌های بالای ۱ میلیون تومان
    </div> -->

    

    <main class="max-w-[1280px] mx-auto my-4 md:my-6 px-3 md:px-5 text-[#001020]">
        <div class=" text-xs mb-[18px]">خانه / <b>جستجو</b></div>

         <div class="flex items-end justify-between gap-2.5 mb-[18px]">
            <div>
                <h1 id="title" class="m-0 text-[18px] md:text-[22px]">نتایج جستجو برای</h1>
                <div id="resultCount" class="text-[#001020] text-[13px]"></div>
            </div>
        </div> 

        <div class="grid grid-cols-1 md:grid-cols-[250px_1fr] gap-[18px]">
            <div class="fixed w-full h-dvh bg-black/50 z-99 top-0 right-0 md:hidden invisible opacity-0 transition-all duration-300" id="filterBg"></div>
            <aside class="invisible opacity-0 transition-all duration-300 md:visible md:opacity-100 fixed top-1/2 w-11/12 -translate-y-1/2 right-1/2 translate-x-1/2 md:translate-x-0 md:translate-y-0 z-999 md:z-0 md:static md:block bg-white border border-[#e4e4e7] rounded-xl h-[500px] overflow-y-auto md:h-max md:overflow-hidden text-[#001020]" id="filterSection">
                <div class="flex justify-between p-[18px] border-b border-[#e4e4e7] font-bold">
                    <span>فیلترها</span>
                    <button id="resetFilters" class="text-[#F8D048] border-0 bg-transparent text-xs cursor-pointer">حذف
                        فیلترها</button>
                </div>



                <section class='element flex flex-col items-center gap-2 p-[18px] border-b border-[#e4e4e7] rounded-xl bg-white shadow-sm hover:shadow-md transition-all mb-3 mt-4 mx-3'>
                    <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                        <div class='flex items-center gap-2 text-[#001020] text-base font-medium'>
                            <span class="text-[#001020]">دسته بندی ها</span>
                        </div>
                        <svg class='size-4 fill-black transition-all duration-400 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                        </svg>
                    </div>
                
                    <div class='w-full flex flex-col gap-4 text-end max-h-0 overflow-hidden transition-all duration-500 overflow-y-auto mr-4'>
                        @foreach($categories as $category)
                            @if($category->id!=1)
                                <div class='w-12/12 text-[#001020] flex text-base gap-2'>
                                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#52525b]">
                                    <input class="accent-[#F8D048] w-[17px] h-[17px] categories" type="checkbox" data-filter="{{ $category->id }}">{{ $category->title }}</label>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>

                <section class='element flex flex-col items-center gap-2 p-[18px] border-b border-[#e4e4e7] rounded-xl bg-white shadow-sm hover:shadow-md transition-all mb-3 mt-4 mx-3'>
                    <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                        <div class='flex items-center gap-2 text-[#001020] text-base font-medium'>
                            <span class="text-[#001020]"> بنر ها</span>
                        </div>
                        <svg class='size-4 fill-black transition-all duration-400 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                        </svg>
                    </div>
                
                    <div class='w-full flex flex-col gap-4 text-end max-h-0 overflow-hidden transition-all duration-500 overflow-y-auto mr-4'>
                        @foreach($brands as $brand)
                            <div class='w-12/12 text-[#001020] flex text-base gap-2'>
                                <label class="flex items-center gap-2 my-3 text-[13px] text-[#52525b]">
                                <input class="accent-[#F8D048] w-[17px] h-[17px] brands" type="checkbox" data-filter="{{ $brand->id }}">{{ $brand->title }}</label>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="p-[18px] border-b border-[#e4e4e7]">
                    <div class="font-semibold text-sm mb-[15px]">محدوده قیمت</div>
                    <div class="grid grid-cols-2 gap-2">
                        <input id="minPrice" type="number" placeholder="حداقل" value="0"
                            class="w-full border border-[#e4e4e7] rounded-lg p-[9px] outline-none text-[11px]">
                        <input id="maxPrice" type="number" placeholder="حداکثر" value=""
                            class="w-full border border-[#e4e4e7] rounded-lg p-[9px] outline-none text-[11px]">
                    </div>
                </section>

                {{-- <section class="p-[18px] border-b border-[#e4e4e7]">
                    <div class="font-semibold text-sm mb-[15px]">امتیاز کاربران</div>
                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#001020]"><input
                            class="accent-[#F8D048] w-[17px] h-[17px]" type="radio" name="rating" value="4"> ۴
                        به بالا ⭐</label>
                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#001020]"><input
                            class="accent-[#F8D048] w-[17px] h-[17px]" type="radio" name="rating" value="3"> ۳
                        به بالا ⭐</label>
                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#001020]"><input
                            class="accent-[#F8D048] w-[17px] h-[17px]" type="radio" name="rating" value="0"
                            checked> همه</label>
                </section> --}}

                <section class="p-[18px]">
                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#001020]">
                        <input id="hasDescount" class="accent-[#F8D048] w-[17px] h-[17px]" type="checkbox">
                        تخفیف خورده
                    </label>
                </section>
                <section class="p-[18px]">
                    <label class="flex items-center gap-2 my-3 text-[13px] text-[#001020]">
                        <input id="exists" class="accent-[#F8D048] w-[17px] h-[17px]" type="checkbox">
                        فقط کالاهای موجود
                    </label>
                </section>
            </aside>

            <section class="min-w-0">
                <div
                    class="bg-white border border-[#e4e4e7] rounded-xl p-3 md:px-[15px] flex flex-col md:flex-row md:items-center justify-between gap-3 mb-3.5">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-xs text-[#71717a]">مرتب‌سازی:</span>
                        {{-- <button
                            class="sort-btn text-xs border-0 bg-[#fff0f2] text-[#F8D048] font-bold px-2.5 py-2 rounded-[7px]"
                            data-sort="relevance">مرتبط‌ترین</button>
                        <button
                            class="sort-btn text-xs border-0 bg-transparent text-[#52525b] px-2.5 py-2 rounded-[7px]"
                            data-sort="popular">پربازدیدترین</button> --}}
                        <button
                            class="sort-btn text-xs border-0 bg-transparent text-[#F8D048] font-bold px-2.5 py-2 rounded-[7px] cursor-pointer"
                            data-sort-by="created_at" data-sort-type="desc">جدیدترین</button>
                        <button
                            class="sort-btn text-xs border-0 bg-transparent text-[#52525b] px-2.5 py-2 rounded-[7px] cursor-pointer"
                            data-sort-by="price" data-sort-type="asc">ارزان‌ترین</button>
                        <button
                            class="sort-btn text-xs border-0 bg-transparent text-[#52525b] px-2.5 py-2 rounded-[7px] cursor-pointer"
                            data-sort-by="price" data-sort-type="desc">گران‌ترین</button>
                    </div>
                    {{-- <button id="viewToggle"
                        class="border border-[#e4e4e7] bg-white rounded-[7px] w-9 h-[34px] self-end md:self-auto">▦</button> --}}
                </div>

                <div id="chips" class="block lg:hidden mb-3.5">
                    <button class="flex items-center gap-2 px-2 py-1 cursor-pointer rounded-full border border-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 416c0 8.8 7.2 16 16 16l65.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 432c8.8 0 16-7.2 16-16s-7.2-16-16-16l-257.6 0c-7.4-36.5-39.7-64-78.4-64s-71 27.5-78.4 64L16 400c-8.8 0-16 7.2-16 16zm112 0a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM304 256a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm48-80c-38.7 0-71 27.5-78.4 64L16 240c-8.8 0-16 7.2-16 16s7.2 16 16 16l257.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64l65.6 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-65.6 0c-7.4-36.5-39.7-64-78.4-64zM192 144a48 48 0 1 1 0-96 48 48 0 1 1 0 96zm78.4-64C263 43.5 230.7 16 192 16s-71 27.5-78.4 64L16 80C7.2 80 0 87.2 0 96s7.2 16 16 16l97.6 0c7.4 36.5 39.7 64 78.4 64s71-27.5 78.4-64L496 112c8.8 0 16-7.2 16-16s-7.2-16-16-16L270.4 80z"/></svg>
                        <span class="text-sm text-[#001020]">فیلتر </span>
                    </button>
                </div>

                <div id="products" class="grid grid-cols-2 min-[431px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 bg-white border border-[#e4e4e7] rounded-xl overflow-hidden p-3 gap-3 ">
                    @foreach ($products as $product)
                        <a href="{{ route('product.client_pro_single', [$product->id]) }}"
                            class="group relative min-w-0 bg-white p-[17px] border-l border border-[#e4e4e7] transition duration-200 hover:-translate-y-0.5 hover:shadow-[0_6px_22px_rgba(0,0,0,.08)] text-[#001020] rounded-xl">
                            @if ($product->percent)
                                <span class="absolute top-[25px] right-[25px] z-10 bg-[#F8D048] text-[#001020] rounded-[5px] text-[10px] px-[7px] py-1 in-fa">{{ $product->percent }} %</span>
                            @endif
                            <button 
                                class="absolute top-[22px] left-5 z-10 border-0 bg-white text-xl text-[#aaa]">♡</button>
                            <img src="{{ asset('storage/product_medias/'.$product->image) }}"
                                alt="{{ $product->title }}" loading="lazy"
                                class="w-full aspect-square object-contain rounded-lg bg-[#f8f8f8] block mb-3.5">
                            <h3 class="m-0 mb-2.5 text-[13px] leading-[1.9] h-[50px] overflow-hidden">{{ $product->title }}</h3>
                            <div class="flex justify-between items-center mb-2.5 text-[11px]">
                                <span>۴٫۹ ⭐</span><span class="text-[#f59e0b]">★★★★★</span>
                            </div>
                            @if ($product->discunt)
                                <div class="flex items-center justify-between gap-2">
                                    <strong class="text-[15px] in-fa">{{number_format($product->discunt)}}</strong>
                                    <span
                                        class="text-[10px] text-[#71717a]">تومان
                                    </span>
                                </div>
                                <div class="line-through text-[#a1a1aa] text-[10px] in-fa">{{number_format($product->price)}} تومان</div>                                
                            @else
                                <div class="flex items-center justify-between gap-2">
                                    <strong class="text-[15px] in-fa">{{number_format($product->price)}}</strong>
                                    <span
                                        class="text-[10px] text-[#71717a]">تومان
                                    </span>
                                </div>
                            @endif
                            @if ($product->stock > 0)
                                <div class="mt-2.5 text-[10px] text-[#16a34a]">● موجود در انبار</div>
                            @else
                                <div class="mt-2.5 text-[10px] text-[#a31616]">● ناموجود</div>
                            @endif
                        </a>
                    @endforeach
                </div>

                <div id="empty"
                    class="hidden bg-white border border-[#e4e4e7] rounded-xl text-center p-[70px_20px]">
                    <div class="text-[45px]">🔎</div>
                    <h2 class="text-lg">محصولی پیدا نشد</h2>
                    <p class="text-[13px] text-[#777]">عبارت جستجو یا فیلترها را تغییر دهید و دوباره امتحان کنید.</p>
                </div>

                <div id="pagination" class="flex justify-center gap-1.5 my-[22px] mb-10">
                    <button class="page w-[38px] h-[38px] border border-[#e4e4e7] bg-white rounded-lg">‹</button>
                    <button
                        class="page active w-[38px] h-[38px] border border-[#F8D048] bg-[#F8D048] text-[#001020] rounded-lg">۱</button>
                    <button class="page w-[38px] h-[38px] border border-[#e4e4e7] bg-white rounded-lg">۲</button>
                    <button class="page w-[38px] h-[38px] border border-[#e4e4e7] bg-white rounded-lg">۳</button>
                    <button class="page w-[38px] h-[38px] border border-[#e4e4e7] bg-white rounded-lg">۴</button>
                    <button class="page w-[38px] h-[38px] border border-[#e4e4e7] bg-white rounded-lg">›</button>
                </div>
            </section>
        </div>
    </main>
    <script>
        let imgPath = "{{ asset('storage/product_medias') }}/"


        let element = document.querySelectorAll('.element');
        element.forEach((el) => {
            el.children[0].addEventListener('click', () => {
                if (el.children[1].classList.contains('max-h-0')) {
                    el.children[1].classList.remove('max-h-0')
                    el.children[1].classList.add('h-[200px]')
                    el.children[0].children[1].classList.remove('rotate-0')
                    el.children[0].children[1].classList.add('rotate-180')
                } else {
                    el.children[1].classList.remove('h-[200px]')
                    el.children[1].classList.add('max-h-0')
                    el.children[0].children[1].classList.remove('rotate-180')
                    el.children[0].children[1].classList.add('rotate-0')
                }
            })
        })
        let route="{{route('product.getFilters')}}";
        
        let header="{{ csrf_token() }}";

        let url='product/client/product/';

    </script>
    <script src="{{ asset('assets/js/filterStore.js') }}"></script>
</body>

</html>
