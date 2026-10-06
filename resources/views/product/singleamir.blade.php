
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
</head>
<body class = "relative">
<header class = "w-full bg-[#0B304A] max-lg:h-[95px]">
    <div class="max-w-[1800px] min-w-[325px] mx-auto flex flex-col max-lg:px-3 ">
        <div class="w-full flex items-center gap-30 max-lg:pb-2 max-xl:gap-5  max-lg:justify-between">
            <div class="w-[35%] flex items-center text-white gap-20  max-xl:w-[30%] max-xl:gap-8 max-lg:w-[5%]">
                <div class="flex items-center gap-4  text-nowrap max-lg:justify-between relative">
                    <div class="w-[16px] h-[16px] bg-[#E5A728] rounded-full absolute top-0 left-6 flex items-center justify-center">
                        <span>0</span>
                    </div>
                    <svg class = "size-10 fill-white max-lg:size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    <span class = "max-lg:hidden">سبد خرید</span>
                </div>
                <div class="w-[370px] h-[45px] bg-white rounded-[10px] flex max-lg:hidden">
                    <input class = "w-[85%]  outline-none text-black text-right " type="text" name="" id="" placeholder = "...جستو جوی محصول و برند">
                    <div class="w-[15%] flex items-center justify-center ">
                        <svg class = "size-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 208A176 176 0 1 0 32 208a176 176 0 1 0 352 0zM343.3 366C307 397.2 259.7 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 51.7-18.8 99-50 135.3L507.3 484.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L343.3 366z"></svg>
                    </div>
                </div>
            </div>
            <svg class = "size-8 fill-white lg:hidden"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 88C0 74.7 10.7 64 24 64H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24C10.7 112 0 101.3 0 88zM0 248c0-13.3 10.7-24 24-24H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zM448 408c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H424c13.3 0 24 10.7 24 24z"/></svg>
            <div class="w-[70%] flex items-center justify-around gap-10 max-2xl:gap-5 max-2xl:w-[80%] text-white  text-[18px]  parent_font max-lg:hidden">
                <a class = " text-center fonts" href="">تماس باما</a>
                <a class = " text-center fonts" href="">درباره ما</a>
                <a class = " text-center fonts" href="">محصولات خدمات</a>
                <a class = " text-center fonts" href="">صفحه اصلی</a>
            </div>
            <div class="w-[25%] flex items-center justify-end gap-4 max-lg:hidden lg:mb-3">
                <div class="flex flex-col gap-2 items-end text-white">
                    <span class = "text-[35px] font-bold text-nowrap">ترازو درختی</span>
                    <span class = "text-[14px] text-nowrap">دقت در اندازه گیری و اعتبار در کسب و کار</span>
                </div>
                <div class="w-[80px] ">

                    <img src="img/file_00000000527881f4835e03acef97b338.png" class = "w-[80px]" alt="">
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
<section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3 max-lg:mt-0">
    <div class="w-full flex justify-end gap-3 text-[20px] max-lg:my-5 items-center">
        <span>صفحه اصلی</span>
        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z"/></svg>
        <span>محصولات</span>
        <svg class = "size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z"/></svg>
        <span>ترازوی فروشگاهی</span>
    </div>
    <div class="w-full flex gap-10 max-lg:flex-col">
        <div class="w-[50%] flex  gap-5 max-lg:flex-col max-lg:w-full">
            <div class="w-full h-full rounded-[15px] overflow-hidden bg-[url('img/file_00000000151c82439a17a7e2cf35e05d.png')] bg-center bg-cover flex flex-col items-start justify-between p-6 max-lg:h-[300px]">
                <div class="w-[100px] h-[40px] flex items-center justify-center bg-[#FBC830] text-[#0E2E48] rounded-[10px] text-[18px]">
                    پر فروش
                </div>
                <div class="w-[150px] flex gap-4 ">
                    <div class="w-[35px] h-[35px] rounded-full bg-[#091E2F] flex items-center justify-center border-1 border-white">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z"/></svg>
                    </div>
                    <div class="w-[35px] h-[35px] rounded-full bg-[#091E2F] flex items-center justify-center border-1 border-white">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-[13%] flex items-center justify-start gap-4 flex-col max-lg:flex-row max-lg:w-full max-lg:justify-between max-lg:gap-2 max-lg:overflow-x-auto rounded-[15px]">
                <img class = "w-full max-lg:min-w-[25%] rounded-[10px] h-[90px]" src="img/file_0000000053cc8210b89a11d9f1be5829.png" alt="">
                <img class = "w-full max-lg:min-w-[25%] rounded-[10px] h-[90px]" src="img/scale_mobile_768x432-1.png" alt="">
                <img class = "w-full max-lg:min-w-[25%] rounded-[10px] h-[90px]" src="img/InShot_20260925_130018534.png" alt="">
                <img class = "w-full max-lg:min-w-[25%] rounded-[10px] h-[90px]" src="img/InShot_20260925_125540709.png" alt="">
            </div>
        </div>
        <div class="w-[50%] flex flex-col gap-3 items-end max-lg:w-full">
            <div class="w-full flex flex-col items-end gap-2 mt-2 text-[#0E2E48] ">
                <span class = "text-[30px]">CAS</span>
                <span class = "text-[40px] max-lg:text-[25px]">ترازوی فروشگاهی CAS مدل ER JR</span>
                <div class="w-full flex gap-3 justify-end text-[20px] items-center text-gray-400">
                    <span>(123 نفر)</span>
                    <div class="flex">
                        <svg class = "size-6 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg class = "size-6 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg class = "size-6 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg class = "size-6 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg class = "size-6 fill-[#F8D048]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                    </div>
                    <span class = "text-[#0E2E48]">4.8</span>
                </div>
            </div>
            <div class="w-[90%]  text-right mt-3 text-[22px] leading-10 text-gray-400 max-lg:w-full ">
                <p>ترازوی فروشگاهی CAS مدل ER JR دقت بالا عملکرد پایدار انتخاب ایده ال برای فروشگاها سوپر مارکت ها و مراکز عرضه مواد غذایی است این ترازو با متنوع نیازهای روزمره کسب و کاره شما رابا بهترین شکل برطرف میکند</p>
            </div>
            <div class="w-full flex flex-col gap-3 items-end  mt-3">
                <div class="flex gap-3 items-center text-[19px]">
                    <span class = "text-gray-500">دقت 2 گرم تا 30 کیلوگرم</span>
                    <div class="w-[25px] h-[25px] rounded-full bg-green-500 flex items-center justify-center">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"/></svg>
                    </div>
                </div>
                <div class="flex gap-3 items-center text-[19px]">
                    <span class = "text-gray-500">دارای نمیشگر دوطرفه</span>
                    <div class="w-[25px] h-[25px] rounded-full bg-green-500 flex items-center justify-center">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"/></svg>
                    </div>
                </div>
                <div class="flex gap-3 items-center text-[19px]">
                    <span class = "text-gray-500">قابلیت اتصال له صندوق فروشگاه</span>
                    <div class="w-[25px] h-[25px] rounded-full bg-green-500 flex items-center justify-center">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"/></svg>
                    </div>
                </div>
                <div class="flex gap-3 items-center text-[19px]">
                    <span class = "text-gray-500">دارای باطری داخلی قابل شارژ</span>
                    <div class="w-[25px] h-[25px] rounded-full bg-green-500 flex items-center justify-center">
                        <svg class = "size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-center justify-end gap-6 ">
                <span class = "text-[35px] text-[#0E2E48] max-lg:text-[20px]"> تومان 12.500.00</span>
                <del class = "text-[27px] text-gray-400 max-lg:text-[17px]">تومان 14.800.000</del>
                <div class="w-[110px] h-[30px] flex items-center justify-center border gap-1 text-[20px] border-purple-300 rounded-[20px] bg-purple-200 text-purple-800 max-lg:w-[90px] max-lg:h-[30px] max-lg:text-[15px] max-lg:my-3">
                    <span>تخفیف</span>
                    <span>16%</span>
                </div>
            </div>
            <div class="w-full flex gap-6  justify-end  max-lg:flex-col">
                <div class="flex w-full max-w-[210px] h-16 overflow-hidden rounded-[10px] border border-gray-200 bg-white max-lg:hidden">
                    <button class="w-1/3 flex items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95">-</button>
                    <div class="w-1/3 flex items-center justify-center border-x border-gray-100 text-[20px] text-gray-700 bg-slate-50 border-r border-r-gray-200 border-l border-l-gray-200">1</div>
                    <button class="w-1/3 flex items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95">+</button>
                </div>
                <div class="w-[380px] h-16 flex items-center justify-center bg-[#FBC830] text-[#091E2F] rounded-[10px] text-[22px] gap-2 max-lg:w-full max-lg:order-first">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
                <div class="w-16 h-16 flex items-center justify-center border-1 border-gray-200 bg-slate-50 rounded-[10px] max-lg:hidden">
                    <svg class = "size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                </div>
                <div class="w-full flex justify-end lg:hidden gap-3">
                    <div class="w-20 h-16 flex items-center justify-center border-1 border-gray-200 bg-slate-50 rounded-[10px]">
                        <svg class = "size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                    </div>
                    <div class="flex w-full max-w-[310px] h-16 overflow-hidden rounded-[10px] border border-gray-200 bg-white">
                        <button class="w-1/3 flex items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95">-</button>
                        <div class="w-1/3 flex items-center justify-center border-x border-gray-100 text-[20px] text-gray-700 bg-slate-50 border-r border-r-gray-200 border-l border-l-gray-200">1</div>
                        <button class="w-1/3 flex items-center justify-center text-[40px] text-gray-600 transition hover:bg-gray-50 active:scale-95">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3">
    <div class="w-full flex bg-slate-100  items-center p-5 gap-7 rounded-[10px] border-1 border-gray-200 shadow-sm max-lg:grid max-lg:grid-cols-2 max-lg:gap-3 max-lg:p-3 ">
        <div class="w-[25%] max-lg:w-full max-lg:flex-col flex justify-end items-center gap-4 ">
            <div class="flex flex-col gap-1 items-end justify-center  max-lg:order-1">
                <span class = "text-[#091E2F] text-[20px] text-nowrap max-lg:text-[17px]">تضمین اصالت کالا</span>
                <span class = "text-gray-400 text-nowrap max-lg:text-[15px]">همراه با گارانتی معتبر</span>
            </div>
            <xml version="1.0" encoding="utf-8">
                <svg class = "size-11 fill-[#091E2F]" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>award</title>
                    <path d="M28.641 26.578l-3.799-6.364c1.805-2.055 2.907-4.767 2.907-7.736 0-6.489-5.26-11.749-11.749-11.749s-11.749 5.26-11.749 11.749c0 2.943 1.082 5.633 2.87 7.695l-0.012-0.015-3.832 6.422c-0.111 0.183-0.176 0.404-0.176 0.64 0 0.691 0.56 1.251 1.251 1.251 0.071 0 0.14-0.006 0.207-0.017l-0.007 0.001 2.602-0.426 0.947 2.426c0.175 0.44 0.581 0.753 1.065 0.791l0.004 0c0.032 0.002 0.063 0.004 0.095 0.004 0.46-0 0.863-0.249 1.080-0.619l0.003-0.006 3.775-6.54c0.562 0.1 1.212 0.16 1.875 0.165l0.004 0c0.64-0.005 1.263-0.060 1.87-0.162l-0.069 0.010 3.769 6.526c0.22 0.376 0.622 0.625 1.082 0.625h0c0.031 0 0.063-0.002 0.094-0.004 0.488-0.037 0.896-0.35 1.067-0.783l0.003-0.008 0.947-2.426 2.602 0.426c0.060 0.010 0.129 0.016 0.2 0.016 0.691 0 1.251-0.56 1.251-1.251 0-0.236-0.065-0.457-0.179-0.645l0.003 0.006zM9.48 27.123l-0.369-0.945c-0.193-0.469-0.647-0.793-1.177-0.793-0.067 0-0.132 0.005-0.196 0.015l0.007-0.001-0.947 0.156 2.181-3.655c0.765 0.581 1.638 1.084 2.572 1.47l0.078 0.029zM6.75 12.5c0-5.109 4.141-9.25 9.25-9.25s9.25 4.141 9.25 9.25c0 5.109-4.141 9.25-9.25 9.25v0c-5.106-0.006-9.244-4.144-9.25-9.249v-0.001zM24.168 25.396c-0.060-0.010-0.129-0.016-0.199-0.016-0.527 0-0.978 0.326-1.163 0.787l-0.003 0.008-0.369 0.945-2.135-3.697c1.016-0.408 1.894-0.905 2.693-1.502l-0.031 0.022 2.155 3.609zM16 4.75c-4.28 0-7.75 3.47-7.75 7.75s3.47 7.75 7.75 7.75c4.28 0 7.75-3.47 7.75-7.75v0c-0.005-4.278-3.472-7.745-7.75-7.75h-0zM16 17.75c-2.899 0-5.25-2.351-5.25-5.25s2.351-5.25 5.25-5.25c2.899 0 5.25 2.351 5.25 5.25v0c-0.004 2.898-2.352 5.246-5.25 5.25h-0zM18.666 10.651h-1.129l-0.349-1.072c-0.208-0.459-0.662-0.772-1.188-0.772s-0.981 0.313-1.185 0.764l-0.003 0.008-0.349 1.072h-1.128c-0 0-0 0-0 0-0.69 0-1.25 0.559-1.25 1.25 0 0.414 0.201 0.781 0.512 1.009l0.004 0.002 0.912 0.664-0.349 1.071c-0.039 0.116-0.061 0.249-0.061 0.387 0 0.69 0.56 1.25 1.25 1.25 0.276 0 0.531-0.089 0.738-0.241l-0.004 0.002 0.913-0.663 0.913 0.663c0.203 0.149 0.458 0.238 0.734 0.238 0.69 0 1.25-0.56 1.25-1.25 0-0.138-0.022-0.271-0.064-0.396l0.003 0.009-0.348-1.071 0.912-0.663c0.314-0.23 0.516-0.597 0.516-1.012 0-0.69-0.56-1.25-1.25-1.25-0 0-0 0-0 0h0z"></path>
                </svg>
        </div>
        <div class="w-[1px] h-[70px] bg-gray-300 max-lg:hidden"></div>
        <div class="w-[25%] max-lg:w-full max-lg:flex-col flex justify-end items-center gap-4">
            <div class="flex flex-col gap-1 items-end justify-center">
                <span class = "text-[#091E2F] text-[20px] text-nowrap max-lg:text-[17px]">پشتیبانی تخصصی</span>
                <span class = "text-gray-400 text-nowrap max-lg:text-[15px]">پاسخگویی در تمام ساعات</span>
            </div>
            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
            <svg class = "size-11 fill-[#091E2F] max-lg:order-first" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                <g id="SVGRepo_iconCarrier"> <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z"/></g>
            </svg>
        </div>
        <div class="w-[1px] h-[70px] bg-gray-300 max-lg:hidden"></div>
        <div class="w-[25%] max-lg:w-full max-lg:flex-col flex justify-end items-center gap-4 ">
            <div class="flex flex-col gap-1 items-end justify-center">
                <span class = "text-[#091E2F] text-[20px] text-nowrap max-lg:text-[17px]">ارسال سریع</span>
                <span  class = "text-gray-400 text-nowrap max-lg:text-[15px]">به سراسر کشور</span>
            </div>
            <svg class = "size-11 fill-[#091E2F] max-lg:order-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>
        </div>
        <div class="w-[1px] h-[70px] bg-gray-300 max-lg:hidden"></div>
        <div class="w-[25%] max-lg:w-full max-lg:flex-col flex justify-end items-center gap-4 ">
            <div class="flex flex-col gap-1  items-end justify-center">
                <span class = "text-[#091E2F] text-[20px] text-nowrap max-lg:text-[17px]">7روز ضمانت بازگشت</span>
                <span class = "text-gray-400 text-nowrap max-lg:text-[15px]">در صورت وجود مشکل</span>
            </div>
            <svg class = "fill-[#091E2F] size-11 max-lg:order-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M243.5 37.3c8-3.4 17-3.4 25 0l176.7 75c11.3 4.8 18.9 15.5 18.8 27.6c-.5 94-39.4 259.8-195.5 334.5c-7.9 3.8-17.2 3.8-25.1 0C87.3 399.6 48.5 233.8 48 139.8c-.1-12.1 7.5-22.8 18.8-27.6l176.7-75zM281 7.8c-16-6.8-34-6.8-50 0L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L281 7.8zm82.3 195.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L224 297.4l-52.7-52.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l64 64c6.2 6.2 16.4 6.2 22.6 0l128-128z"/></svg>
        </div>
    </div>
</section>
<section class = "max-w-[1800px] min-w-[325px] mx-auto mt-10 max-lg:px-3 ">
    <div class="w-full bg-white shadow-sm border-1 border-gray-200 flex gap-5 p-8  rounded-[10px] max-lg:flex-col max-lg:border-none max-lg:shadow-none max-lg:p-0">
        <div class="w-[40%] flex flex-col gap-10 max-lg:w-full">
            <div class="w-full flex items-cenetr justify-end text-[#0E2E48] text-[23px] max-lg:hidden">
                <span>چرا ترازوی CAS?</span>
            </div>
            <div class="w-full flex flex-col text-right text-[20px] text-gray-500 bg-slate-100 border-1 border-gray-100 shadow-sm shadow-gray-300 rounded-[15px] p-5 gap-5 max-lg:py-5 max-lg:px-3 max-lg:text-center max-lg:bg-white">
                <div class="w-full flex flex-col items-center justify-center gap-2 lg:hidden">
                    <div class="w-full flex items-cenetr justify-center text-[#0E2E48] text-[23px]">
                        <span>چرا ترازوی CAS?</span>
                    </div>
                    <div class="w-[100px] h-1 bg-[#F2CE56] rounded-[10px]"></div>
                </div>
                <p>برند CAS یکی از معتبر ترین تولید کنندگان تجهیزات توزین در جهان است که کیفیت بالا دقت بی نظیر و عمر طولانی محصولاتش انتخاب اول بسیاری از کسب و کارها در سراسر دنیا است</p>
                <div class="w-full flex flex-col gap-5">
                    <div class="w-full gap-7 flex items-center justify-end ">
                        <div class="flex flex-col gap-1">
                            <span class = "text-[#0E2E48] text-[19px]">کیفیت ساخت بالا</span>
                            <span class = "text-[16px]">با استاندارد های جهانی</span>
                        </div>
                        <div class="w-[50px] h-[50px] bg-[#FBC830] flex items-center justify-center rounded-full">
                            <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M371.1 13.1c-1-5.3-4.6-9.8-9.6-11.9s-10.7-1.5-15.2 1.6L256 65.1 165.7 2.8c-4.5-3.1-10.2-3.7-15.2-1.6s-8.6 6.6-9.6 11.9L121 121 13.1 140.8c-5.3 1-9.8 4.6-11.9 9.6s-1.5 10.7 1.6 15.2L65.1 256 2.8 346.3c-3.1 4.5-3.7 10.2-1.6 15.2s6.6 8.6 11.9 9.6L121 391l19.8 107.9c1 5.3 4.6 9.8 9.6 11.9s10.7 1.5 15.2-1.6L256 446.9l90.3 62.3c4.5 3.1 10.2 3.7 15.2 1.6s8.6-6.6 9.6-11.9L391 391l107.9-19.8c5.3-1 9.8-4.6 11.9-9.6s1.5-10.7-1.6-15.2L446.9 256l62.3-90.3c3.1-4.5 3.7-10.2 1.6-15.2s-6.6-8.6-11.9-9.6L391 121 371.1 13.1zM265.1 97.7l79.1-54.5 17.4 94.5c1.2 6.5 6.3 11.6 12.8 12.8l94.5 17.4-54.5 79.1c-3.8 5.5-3.8 12.7 0 18.2l54.5 79.1-94.5 17.4c-6.5 1.2-11.6 6.3-12.8 12.8l-17.4 94.5-79.1-54.5c-5.5-3.8-12.7-3.8-18.2 0l-79.1 54.5-17.4-94.5c-1.2-6.5-6.3-11.6-12.8-12.8L43.2 344.1l54.5-79.1c3.8-5.5 3.8-12.7 0-18.2L43.2 167.8l94.5-17.4c6.5-1.2 11.6-6.3 12.8-12.8l17.4-94.5 79.1 54.5c5.5 3.8 12.7 3.8 18.2 0zM256 384a128 128 0 1 0 0-256 128 128 0 1 0 0 256zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0z"/></svg>
                        </div>
                    </div>
                    <div class="w-full gap-7 flex items-center justify-end ">
                        <div class="flex flex-col gap-1">
                            <span class = "text-[#0E2E48] text-[19px]">طراحی و مدرن مقاومت</span>
                            <span class = "text-[16px]">مناسب برای محیط های کاری</span>
                        </div>
                        <div class="w-[50px] h-[50px] bg-[#FBC830] flex items-center justify-center rounded-full">
                            <xml version="1.0" encoding="utf-8">
                                <svg class = "size-8  fill-[#0E2E48]" version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 32 32" xml:space="preserve">
                                    <style type="text/css">
                                        bentblocks_een{fill:#0B1719;}
                                    </style>
                                    <path class="bentblocks_een" d="M12,18.209c-1.354,0.196-3.01,0.559-3.657,1.206c-1.172,1.172-1.172,3.071,0,4.243
                                    c1.172,1.172,3.071,1.172,4.243,0c0.647-0.647,1.01-2.302,1.206-3.657h4.417c0.196,1.354,0.559,3.01,1.206,3.657
                                    c1.172,1.172,3.071,1.172,4.243,0c1.172-1.172,1.172-3.071,0-4.243c-0.647-0.647-2.302-1.01-3.657-1.206v-4.417
                                    c1.354-0.196,3.01-0.559,3.657-1.206c1.172-1.172,1.172-3.071,0-4.243c-1.171-1.172-3.071-1.172-4.243,0
                                    c-0.647,0.647-1.01,2.302-1.206,3.657h-4.417c-0.196-1.354-0.559-3.01-1.206-3.657c-1.172-1.172-3.071-1.172-4.243,0
                                    c-1.172,1.172-1.172,3.071,0,4.243c0.647,0.647,2.302,1.01,3.657,1.206V18.209z M11.149,22.265
                                    c-0.388,0.366-1.006,0.363-1.391-0.022c-0.382-0.382-0.39-1-0.022-1.392c0.28-0.195,1.048-0.408,1.987-0.575
                                    C11.554,21.214,11.341,21.988,11.149,22.265z M22.265,20.851c0.368,0.391,0.36,1.009-0.022,1.391
                                    c-0.385,0.385-1.003,0.388-1.391,0.022c-0.195-0.28-0.408-1.048-0.575-1.987C21.214,20.446,21.988,20.659,22.265,20.851z
                                     M20.851,9.735c0.387-0.364,1.005-0.365,1.391,0.022c0.382,0.382,0.39,1,0.022,1.392c-0.28,0.195-1.048,0.408-1.986,0.575
                                    C20.446,10.786,20.659,10.012,20.851,9.735z M9.735,11.149c-0.368-0.391-0.36-1.009,0.022-1.391
                                    c0.388-0.388,1.006-0.385,1.392-0.022c0.195,0.28,0.408,1.048,0.575,1.987C10.786,11.554,10.012,11.341,9.735,11.149z M18,14v4h-4
                                    v-4H18z M26,4H6C4.9,4,4,4.9,4,6v20c0,1.1,0.9,2,2,2h20c1.1,0,2-0.9,2-2V6C28,4.9,27.1,4,26,4z M26,26H6V6h20V26z"/>
                                    </svg>
                        </div>
                    </div>
                    <div class="w-full flex items-start justify-between -mb-3 max-lg:flex-col  max-lg:items-end">
                        <div class=" flex items-center justify-start text-[50px] text-[#0E2E48] max-lg:order-1  max-lg:self-center max-lg:mt-4">
                            <span>CAS</span>
                        </div>
                        <div class="w-[70%] gap-7 flex items-start justify-end  max-lg:w-full">
                            <div class="flex flex-col gap-1 ">
                                <span class = "text-[#0E2E48] text-[19px]">ددقت و رسرعت بالا</span>
                                <span class = "text-[16px]">در اندازه گیری و وزن</span>
                            </div>
                            <div class="w-[50px] h-[50px] bg-[#FBC830] flex items-center justify-center rounded-full">
                                <svg class = "size-7 fill-[#0E2E48]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-between items-center *:text-gray-500 lg:hidden border border-gray-200 shadow-sm bg-white order-first text-[15px] gap-4 p-3 rounded-[10px]">
            <span>مشاهده فنی</span>
            <span>توضیحات محصول</span>
            <span>نظرات کاربران</span>
        </div>
        <div class="w-[60%] flex flex-col gap-4 max-lg:w-full max-lg:order-first">
            <div class="w-full flex justify-end items-center gap-17 pr-4 text-[20px] text-gray-500 max-lg:hidden">
                <span>مشاهده فنی</span>
                <span>توضیحات محصول</span>
                <span>نظرات کاربران</span>
            </div>
            <div class="w-full h-[1px] bg-slate-200 mb-4 max-lg:hidden"></div>
            <div class="w-full flex flex-col gap-3 border-1 border-gray-200 bg-slate-50 p-5 rounded-[10px] max-lg:px-4 max-lg:bg-white">
                <div class="w-full flex -mt-3">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start max-lg:mt-2">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">30کیلو گرم</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end ">
                        <span class = "text-[#0E2E48] text-[22px]  max-lg:text-[17px] mt-3">ظزفیت توزین</span>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="w-full flex">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">2 گرم</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end ">
                        <span class = "text-[#0E2E48] text-[22px] max-lg:pr-0 max-lg:text-[17px] ">دقت</span>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="w-full flex">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">LCD دوطرفه</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end ">
                        <span class = "text-[#0E2E48] text-[22px] max-lg:pr-0 max-lg:text-[17px] ">نوع مایشگر</span>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="w-full flex">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">25 * 35 سانتی متر</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end ">
                        <span class = "text-[#0E2E48] text-[22px] max-lg:pr-0 max-lg:text-[17px] ">ابعاد سینی</span>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="w-full flex">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">برق شهرب و باطری داخلی</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end ">
                        <span class = "text-[#0E2E48] text-[22px] max-lg:pr-0 max-lg:text-[17px] ">منبع تغذیه</span>
                    </div>
                </div>
                <div class="w-full h-[1px] bg-gray-200"></div>
                <div class="w-full flex">
                    <div class="w-[70%] max-lg:w-[50%] flex items-center justify-end max-lg:justify-start">
                        <span class = "text-[18px] max-lg:text-[15px] text-gray-500">CAS</span>
                    </div>
                    <div class="w-[30%] max-lg:w-[50%] flex items-center justify-end max-lg:mb-2">
                        <span class = "text-[#0E2E48] text-[22px]  max-lg:text-[17px]">برند</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class = "max-w-[1800px] min-w-[325px] mx-auto  flex items-center justify-end gap-2 my-10">
    <div class="w-[70px] h-1 bg-[#F2CE56]"></div>
    <span class="text-[25px] text-[#0E2E48]">محصولات مشابه</span>
</div>
<section class = "max-w-[1800px] min-w-[325px] mx-auto relative max-lg:px-3">
    <div class="w-full flex justify-between items-center ">
        <div class="w-[50px] h-[50px] max-lg:w-[10%] flex items-center justify-center bg-white border-1 border-gray-200 shadow-sm rounded-full absolute -left-7 max-lg:left-0">
            <svg class = "size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z"/></svg>
        </div>
        <div class = "max-w-[1800px] min-w-[325px] flex gap-4 mx-auto justify-center overflow-x-auto">
            <div class="min-w-[19%] max-lg:min-w-full flex flex-col p-7 bg-white border-1 border-gray-200 shadow-sm rounded-[10px] gap-5">
                <div class="w-full">
                    <img class = "w-full h-[250px]" src="img/file_0000000053cc8210b89a11d9f1be5829-removebg-preview.png" alt="">
                </div>
                <div class="w-full flex flex-col items-end text-[20px] gap-8 text-[#0E2E48]">
                    <span>ترازوی فروشگاهی CAS مدل ER</span>
                    <span>تومان 11.500.000</span>
                </div>
                <div class="w-full h-[40px] flex items-center justify-center bg-[#FBC830] rounded-[20px] gap-3 text-[20px] text-[#0E2E48]">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
            </div>
            <div class="min-w-[19%] max-lg:min-w-full flex flex-col p-7 bg-white border-1 border-gray-200 shadow-sm rounded-[10px] gap-5">
                <div class="w-full">
                    <img class = "w-full h-[250px]" src="img/file_0000000053cc8210b89a11d9f1be5829-removebg-preview.png" alt="">
                </div>
                <div class="w-full flex flex-col items-end text-[20px] gap-8 text-[#0E2E48]">
                    <span>ترازوی فروشگاهی CAS مدل ER</span>
                    <span>تومان 11.500.000</span>
                </div>
                <div class="w-full h-[40px] flex items-center justify-center bg-[#FBC830] rounded-[20px] gap-3 text-[20px] text-[#0E2E48]">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
            </div>
            <div class="min-w-[19%] max-lg:min-w-full flex flex-col p-7 bg-white border-1 border-gray-200 shadow-sm rounded-[10px] gap-5">
                <div class="w-full">
                    <img  class = "w-full h-[250px]" src="img/file_0000000053cc8210b89a11d9f1be5829-removebg-preview.png" alt="">
                </div>
                <div class="w-full flex flex-col items-end text-[20px] gap-8 text-[#0E2E48]">
                    <span>ترازوی فروشگاهی CAS مدل ER</span>
                    <span>تومان 11.500.000</span>
                </div>
                <div class="w-full h-[40px] flex items-center justify-center bg-[#FBC830] rounded-[20px] gap-3 text-[20px] text-[#0E2E48]">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
            </div>
            <div class="min-w-[19%] max-lg:min-w-full flex flex-col p-7 bg-white border-1 border-gray-200 shadow-sm rounded-[10px] gap-5">
                <div class="w-full">
                    <img  class = "w-full h-[250px]" src="img/file_0000000053cc8210b89a11d9f1be5829-removebg-preview.png" alt="">
                </div>
                <div class="w-full flex flex-col items-end text-[20px] gap-8 text-[#0E2E48]">
                    <span>ترازوی فروشگاهی CAS مدل ER</span>
                    <span>تومان 11.500.000</span>
                </div>
                <div class="w-full h-[40px] flex items-center justify-center bg-[#FBC830] rounded-[20px] gap-3 text-[20px] text-[#0E2E48]">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
            </div>
            <div class="min-w-[19%] max-lg:min-w-full flex flex-col p-7 bg-white border-1 border-gray-200 shadow-sm rounded-[10px] gap-5">
                <div class="w-full">
                    <img   class = "w-full h-[250px]" src="img/file_0000000053cc8210b89a11d9f1be5829-removebg-preview.png" alt="">
                </div>
                <div class="w-full flex flex-col items-end text-[20px] gap-8 text-[#0E2E48]">
                    <span>ترازوی فروشگاهی CAS مدل ER</span>
                    <span>تومان 11.500.000</span>
                </div>
                <div class="w-full h-[40px] flex items-center justify-center bg-[#FBC830] rounded-[20px] gap-3 text-[20px] text-[#0E2E48]">
                    <span>افزودن به سبد خرید</span>
                    <svg class = "size-7 fill-[#091E2F]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </div>
            </div>
        </div>
        <div class="w-[50px] h-[50px] max-lg:w-[10%] flex items-center justify-center bg-white border-1 border-gray-200 shadow-sm rounded-full absolute -right-7 max-lg:right-0">
            <svg class = "size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z"/></svg>
        </div>
</section>
<footer class = "max-w-[2100px] min-w-[325px] mx-auto bg-[#061F35] flex flex-col items-center gap-8 max-lg:px-3 max-lg:gap-4 mt-10">
    <div class="w-[95.5%] flex mx-auto text-white pt-5 max-lg:flex-col max-lg:items-end ">
        <div class="w-[25%] flex flex-col max-lg:w-full max-lg:gap-1 ">
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
    <div class="w-[95.5%] h-[0.5px] bg-white"></div>
    <div class="w-[95.5%] flex items-end justify-between pb-5 text-white  max-lg:flex-col max-lg:items-center max-lg:gap-2">
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
</body>
</html>