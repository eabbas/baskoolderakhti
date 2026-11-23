
@extends('dashboard')

@section('title','لیست دسته‌بندی‌ها')
@section('content')
<div class="w-full p-5 md:p-7 bg-[#F8FAFC]" dir="rtl">

    <!-- عنوان صفحه -->
    <div class="flex flex-wrap items-center justify-between gap-4 mb-7">
        <div>
            <h2 class="text-xl font-bold text-[#002030]">
                ویرایش استوری
            </h2>
            <p class="text-sm text-gray-500 mt-2">
                مدیریت و ویرایش اطلاعات استوری
            </p>
        </div>

        <a href="#"
           class="bg-[#F8C028] hover:bg-[#e9b51c] text-[#002030]
                  px-5 py-3 rounded-xl text-sm font-bold transition">
            بازگشت به لیست
        </a>
    </div>

    <!-- فرم -->
    <div class="bg-white rounded-2xl border border-gray-200
                shadow-sm overflow-hidden">

        <div class="h-1.5 bg-[#F8C028]"></div>

        <form action = "{{route('main_store.update')}}" method = "post"  class="p-5 md:p-8" enctype='multipart/form-data'>
            @csrf
            <input type="hidden" name="id" value = "{{$main_store->id}}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- عنوان -->
                <div>
                    <label class="block text-sm font-bold text-[#002030] mb-2">
                        عنوان محتوا
                    </label>
                    <input value = "{{$main_store->title}}" name = "title" type="text"
                           placeholder="عنوان استوری را وارد کنید"
                           class="w-full h-12 px-4 rounded-xl border border-gray-200
                                  bg-gray-50 outline-none focus:border-[#F8C028]
                                  focus:bg-white transition text-sm">
                </div>

                <!-- لینک -->
             

                <!-- توضیحات -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-[#002030] mb-2">
                        کپشن
                    </label>
                    <textarea  name = "summry" rows="4"
                              placeholder="توضیحات استوری را وارد کنید..."
                              class="w-full p-4 rounded-xl border border-gray-200
                                     bg-gray-50 outline-none focus:border-[#F8C028]
                                     focus:bg-white transition text-sm resize-none">{{$main_store->summry}}</textarea>
                </div>

                <!-- فایل استوری -->
                <div>
                    <label class="block text-sm font-bold text-[#002030] mb-2">
                        تصویر یا ویدیو
                    </label>
                    <div class="border-2 border-dashed border-gray-300
                                rounded-xl p-5 text-center bg-gray-50
                                hover:border-[#F8C028] transition cursor-pointer">
                        <div class="text-3xl mb-2">📁</div>
                        <p class="text-sm text-gray-600">
                            فایل جدید را انتخاب کنید
                        </p>
                        <input name = "file" required type="file"
                               accept="mp4/*,jpg/*"
                               class="w-full mt-3 text-xs text-gray-500">
                    </div>
                </div>

                <!-- وضعیت -->
               

            </div>

            <!-- دکمه ها -->
            <div class="flex flex-wrap justify-end gap-3 mt-8 pt-6 border-t border-gray-100">
                <button type="button"
                        class="px-6 py-3 rounded-xl border border-gray-200
                               text-gray-600 hover:bg-gray-100 text-sm font-bold">
                    انصراف
                </button>

                <button type="submit"
                        class="px-7 py-3 rounded-xl bg-[#F8C028]
                               hover:bg-[#e9b51c] text-[#002030]
                               text-sm font-bold shadow-sm transition">
                    ذخیره تغییرات
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
