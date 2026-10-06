@extends('dashboard')
@section('title','edit product')
@section('content')

<style>
    /* ===== پالت رنگی مترونیک ===== */
    :root {
        --metronic-primary: #1B84FF;
        --metronic-primary-dark: #0a6fd6;
        --metronic-primary-light: #4a9fff;
        --metronic-sidebar: #0D0E12;
        --metronic-bg-content: #FCFCFC;
        --metronic-bg-form: #FFFFFF;
        --metronic-shadow-form: #F5F5F5;
        --metronic-border: #DBDFE9;
        --metronic-text: #9A9CAE;
        --metronic-text-hover: #1B84FF;
        --metronic-success: #059669;
        --metronic-danger: #dc2626;
        --metronic-warning: #d97706;
        
        --shadow-sm: 0 2px 8px rgba(27, 132, 255, 0.06);
        --shadow-md: 0 4px 20px rgba(27, 132, 255, 0.10);
        --shadow-lg: 0 8px 40px rgba(27, 132, 255, 0.14);
    }

    /* ===== کارت اصلی ===== */
    .derakhti-form-card {
        background: var(--metronic-bg-form);
        border: 1px solid var(--metronic-border);
        border-radius: 24px;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        overflow: hidden;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
    }
    .derakhti-form-card:hover {
        box-shadow: var(--shadow-md);
    }

    /* ===== هدر فرم ===== */
    .derakhti-form-header {
        background: linear-gradient(135deg, #F5F5F5, #DBDFE9);
        border-bottom: 2px solid var(--metronic-border);
        padding: 18px 28px;
        border-radius: 24px 24px 0 0;
    }

    .derakhti-form-header h2 {
        color: #1e293b;
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .derakhti-form-header .header-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.25);
    }

    /* ===== بدنه ===== */
    .derakhti-form-body {
        padding: 24px 28px 28px;
    }

    /* ===== فیلدها ===== */
    .derakhti-label {
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
        display: block;
        margin-bottom: 4px;
        padding-right: 4px;
        transition: all 0.3s ease;
    }

    .derakhti-input {
        width: 100%;
        padding: 12px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
    }
    .derakhti-input::placeholder {
        color: #9A9CAE;
        font-size: 13px;
    }
    .derakhti-input:hover {
        border-color: #4a9fff;
    }
    .derakhti-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: #ffffff;
    }

    .derakhti-select {
        width: 100%;
        padding: 12px 16px;
        background: #F5F5F5;
        border: 1.5px solid var(--metronic-border);
        border-radius: 12px;
        color: #1e293b;
        font-size: 14px;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%239A9CAE' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 12px center;
    }
    .derakhti-select:hover {
        border-color: #4a9fff;
    }
    .derakhti-select:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background-color: #ffffff;
    }

    /* ===== خطا ===== */
    .derakhti-error {
        color: var(--metronic-danger);
        font-size: 13px;
        font-weight: 700;
        margin-top: 3px;
        display: block;
        padding-right: 4px;
    }

    /* ===== توگل ===== */
    .derakhti-toggle {
        width: 52px;
        height: 30px;
        padding: 2px;
        border-radius: 50px;
        background: #F5F5F5;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        border: 1px solid var(--metronic-border);
        cursor: pointer;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.04);
    }
    .derakhti-toggle.active {
        background: var(--metronic-primary);
        border-color: var(--metronic-primary);
    }

    .derakhti-toggle-dot {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #ffffff;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .derakhti-toggle.active .derakhti-toggle-dot {
        transform: translateX(-22px);
    }

    .derakhti-toggle-label {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .derakhti-toggle-label span {
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
    }

    /* ===== بخش ویژگی‌ها ===== */
    .derakhti-attributes-section {
        background: #F5F5F5;
        border-radius: 16px;
        padding: 16px 20px;
        border: 1px solid var(--metronic-border);
    }

    .derakhti-attributes-title {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }

    .derakhti-attr-item {
        position: relative;
        display: inline-flex;
        align-items: center;
        background: #ffffff;
        border-radius: 10px;
        border: 1.5px solid var(--metronic-border);
        padding: 4px 12px 4px 4px;
        animation: slideIn 0.3s ease;
        box-shadow: 0 2px 8px rgba(27, 132, 255, 0.04);
    }
    .derakhti-attr-item input {
        padding: 6px 10px;
        background: transparent;
        border: none;
        color: #1e293b;
        font-size: 13px;
        outline: none;
        width: 100px;
    }
    .derakhti-attr-item .remove {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fee2e2;
        color: var(--metronic-danger);
        font-size: 12px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    .derakhti-attr-item .remove:hover {
        background: var(--metronic-danger);
        color: #fff;
        transform: rotate(90deg);
    }

    /* ===== دکمه ===== */
    .derakhti-btn {
        padding: 12px 28px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 16px rgba(27, 132, 255, 0.15);
    }
    .derakhti-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(27, 132, 255, 0.25);
    }
    .derakhti-btn:active {
        transform: translateY(0) scale(0.97);
    }

    .derakhti-btn-success {
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--metronic-success), #34d399);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        box-shadow: 0 4px 16px rgba(5, 150, 105, 0.15);
    }
    .derakhti-btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(5, 150, 105, 0.25);
    }

    .derakhti-btn-warning {
        padding: 10px 20px;
        background: linear-gradient(135deg, var(--metronic-warning), #f59e0b);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 4px 16px rgba(217, 119, 6, 0.15);
    }
    .derakhti-btn-warning:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(217, 119, 6, 0.25);
    }

    /* ===== پکیج ===== */
    .derakhti-package-box {
        position: relative;
        background: #F5F5F5;
        border: 2px solid #059669;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 16px;
        animation: slideIn 0.3s ease;
        box-shadow: 0 4px 16px rgba(5, 150, 105, 0.08);
    }

    .derakhti-package-box .package-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
    .derakhti-package-box .package-grid .full {
        grid-column: 1 / -1;
    }

    .derakhti-package-box .package-title {
        color: #1e293b;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 2px solid #059669;
    }

    .derakhti-package-box .package-remove {
        position: absolute;
        top: -12px;
        right: -12px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #fee2e2;
        border: 2px solid #fca5a5;
        color: var(--metronic-danger);
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .derakhti-package-box .package-remove:hover {
        background: var(--metronic-danger);
        color: #fff;
        transform: rotate(90deg) scale(1.1);
        border-color: var(--metronic-danger);
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .derakhti-form-body {
            padding: 16px 18px 20px;
        }
        .derakhti-form-header {
            padding: 14px 18px;
        }
        .derakhti-form-header h2 {
            font-size: 17px;
        }
        .derakhti-grid {
            grid-template-columns: 1fr !important;
            gap: 16px !important;
        }
        .derakhti-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .derakhti-package-box .package-grid {
            grid-template-columns: 1fr;
        }
        .derakhti-btn {
            padding: 10px 20px;
            font-size: 13px;
            width: 100%;
            justify-content: center;
        }
        .derakhti-attributes-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 480px) {
        .derakhti-form-body {
            padding: 12px 14px 16px;
        }
        .derakhti-form-header {
            padding: 12px 14px;
        }
        .derakhti-form-header h2 {
            font-size: 14px;
        }
        .derakhti-input,
        .derakhti-select {
            padding: 8px 12px;
            font-size: 12px;
        }
        .derakhti-attr-item input {
            width: 70px;
            font-size: 12px;
        }
        .derakhti-btn-warning {
            padding: 8px 14px;
            font-size: 12px;
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* ===== چک‌باکس ===== */
    .derakhti-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--metronic-primary);
        cursor: pointer;
    }
</style>

<?php
$count=0
?>
<div class="w-full flex justify-center py-6 px-4">
    <div class="derakhti-form-card">

        <!-- ===== هدر ===== -->
        <div class="derakhti-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                        <circle cx="9" cy="13" r="2"/>
                        <circle cx="15" cy="13" r="2"/>
                        <path d="M9 13h6"/>
                    </svg>
                </span>
                ایجاد محصول جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات محصول را وارد کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('product.store')}}" method="POST" id='form' class="derakhti-form-body" enctype='multipart/form-data'>
            @csrf
            
            <!-- ===== گرید فیلدها ===== -->
            <div class="derakhti-grid grid grid-cols-2 gap-6">

                <!-- عنوان -->
                <div>
                    <label class="derakhti-label"> عنوان</label>
                    <input type="text" placeholder="عنوان محصول" required name='title' class="derakhti-input">
                    @error('title') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- تصویر اصلی -->
                <div>
                    <label class="derakhti-label"> تصویر اصلی</label>
                    <input type="file" name='is_main' class="derakhti-input" style="padding: 8px 12px;">
                </div>

                <!-- گالری -->
                <div>
                    <label class="derakhti-label"> گالری</label>
                    <input type="file" name='gallery[]' multiple class="derakhti-input" style="padding: 8px 12px;">
                </div>

                <!-- توضیحات -->
                <div>
                    <label class="derakhti-label"> توضیحات</label>
                    <input type="text" placeholder="توضیحات محصول"    name='description' class="derakhti-input">
                    @error('description') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="derakhti-label"> خلاصه</label>
                    <input type="text" placeholder="خلاصه محصول" name='summary' class="derakhti-input">
                </div>
                <div>
                    <label class="derakhti-label"> دسته بندی</label>
                    <select name="category" id="category_select_element" class="derakhti-select" onchange="categoryAttributes(this, true)">
                        @foreach($categories as $category)
                            @if($count==0)
                                <option selected value="{{$category->id}}">{{$category->title}}</option>
                                <?php $count++ ; ?>
                            @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <!-- برند -->
                <div>
                    <label class="derakhti-label"> برند</label>
                    <select name="brand_id" class="derakhti-select">
                        @foreach($brands as $brand)
                            @if($brand->is_active==1)
                                <option value="{{$brand->id}}">{{$brand->title}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="derakhti-label"> اسلاگ</label>
                    <input type="text" placeholder="اسلاگ محصول" name='slug' class="derakhti-input">
                </div>

                <!-- تخفیف -->
                <div>
                    <label class="derakhti-label"> تخفیف</label>
                    <input type="number" placeholder="مقدار تخفیف" name='discunt' class="derakhti-input">
                </div>

                <!-- قیمت -->
                <div>
                    <label class="derakhti-label"> قیمت</label>
                    <input type="number" placeholder="قیمت محصول"    name='price' class="derakhti-input">
                    @error('price') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- موجودی -->
                <div>
                    <label class="derakhti-label"> موجودی</label>
                    <input type="number" placeholder="تعداد موجودی"    name='stock' class="derakhti-input">
                    @error('stock') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- ===== توگل‌ها ===== -->
                <div class="derakhti-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">

                    <div class="derakhti-toggle-label">
                        <span> نمایش در خانه</span>
                        <div class="derakhti-toggle" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='show_in_home' value="0" class="absolute invisible">
                    </div>

                    <div class="derakhti-toggle-label">
                        <span> محصول ویژه</span>
                        <div class="derakhti-toggle" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='featured' value="0" class="absolute invisible">
                    </div>

                    <div class="derakhti-toggle-label">
                        <span> فعال</span>
                        <div class="derakhti-toggle" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='is_active' value="0" class="absolute invisible">
                    </div>

                </div>

            </div>

            <!-- ===== بخش ویژگی‌ها ===== -->
            <div class="derakhti-attributes-section mt-6">
                <div class="derakhti-attributes-title"> ویژگی‌های محصول</div>
                
                <div class="flex flex-wrap gap-2 mt-3" id="attributes_list"></div>
                
                <div class="derakhti-btn-success w-full mt-3" id="attribute_conformation_button" onclick="attribute_conformation(this)">
                    ➕ افزودن ویژگی
                </div>

            </div>

            <!-- ===== پکیج‌ها ===== -->
            <div class="mt-6">
                <div id="PackageForm" class="flex flex-col gap-4"></div>
                <div class="createPackageFormButton derakhti-btn-warning w-full justify-center mt-3" onclick="createPackageForm(this,false)">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    ایجاد پکیج جدید
                </div>
            </div>

            <!-- ===== دکمه ثبت ===== -->
            <div class="flex justify-end mt-6 pt-6 border-t border-[#DBDFE9]">
                <button type="submit" class="derakhti-btn">
                    <span>ثبت محصول</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>
            </div>

        </form>

    </div>
</div>

<script>
    function toggleState(el) {
        let input = el.parentElement.querySelector('input[type="number"]');
        
        if (el.classList.contains('active')) {
            el.classList.remove('active');
            if (input) input.value = 0;
        } else {
            el.classList.add('active');
            if (input) input.value = 1;
        }
    }

    function deleteAttributes(el) {
        el.parentElement.remove();
    }

    function deleteCreatedAttributes(el, id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedattributes[]');
        input.setAttribute('value', id);
        el.parentElement.remove();
        form.append(input);
    }
    
    let attribute_input = document.getElementById('attribute_input');
    let attributes_list = document.getElementById('attributes_list');

    function categoryAttributes(el, state) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $.ajax({
            url: "{{url('/product/category/attributes')}}/" + el.value,
            type: "get",
            dataType: "json",
            success: function(data) {
                if (state == true) {
                    document.querySelectorAll('.packageAttributesList').forEach(element => {
                        element.innerHTML = '';
                    });
                }
                document.querySelectorAll('.attributes_select_element').forEach(element => {
                    if (state == true) {
                        attributes_list.innerHTML = '';
                    }
                    let options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
                document.querySelectorAll('.package_attributes_select_element').forEach(element => {
                    let package_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            package_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = package_options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
            },
            error: function() {
                alert('خطا در دریافت ویژگی‌ها');
            }
        });
    }

    function attribute_conformation(el) {
        let xmark = document.createElement('div');
        let div= document.createElement('div');
        let input= document.createElement('input');
        let select= document.createElement('select');
        div.classList=`relative w-full p-2 border-1 rounded-xl flex gap-2`;
        input.setAttribute('type', 'text');
        input.setAttribute('required', true);
        input.setAttribute('name', 'attributes_value[]');
        input.classList = 'derakhti-input attributes_inputs max-w-9/12 min-w-9/12';
        select.setAttribute('name', 'attributes_id[]');
        select.classList = 'derakhti-select attributes_select_element max-w-3/12 min-w-3/12 ';
        select.innerHTML=
        `
            <option value='0'></option>
        `;
        xmark.classList = 'absolute remove top-0 -right-5 bg-red-300 hover:bg-red-500 p-1 rounded-full cursor-pointer';
        xmark.innerHTML = '✕';
        xmark.setAttribute('onclick', 'deleteAttribute(this)');
        div.append(select);
        div.append(input);
        div.append(xmark);
        attributes_list.append(div)
        categoryAttributes(document.getElementById('category_select_element') , false);
        console.log(select.value)
    }

    function deleteAttribute(el) {
        el.parentElement.remove();
    }

    let createdPackagesList = document.getElementById('createdPackagesList');
    let PackageForm = document.getElementById('PackageForm');

    function createPackageForm(el) {
        let cat_id = document.querySelector('.createPackageFormButton').id;
        let randomNumber = Math.random();
        let div = document.createElement('div');
        div.classList = 'derakhti-package-box';
        div.innerHTML = `
            <div class='package-title'> پکیج محصول</div>
            <div class='package-grid'>
                <div class='full'>
                    <label class='derakhti-label'> تصویر اصلی</label>
                    <input type="file" name='packages[${randomNumber}][is_main]' class="derakhti-input" style="padding: 8px 12px;">
                </div>
                <div class='full'>
                    <label class='derakhti-label'> گالری</label>
                    <input type="file" name='packages[${randomNumber}][gallery][]' multiple class="derakhti-input" style="padding: 8px 12px;">
                </div>
                <div>
                    <label class='derakhti-label'> توضیحات</label>
                    <input type="text"    name="packages[${randomNumber}][description]" class="derakhti-input" placeholder="توضیحات پکیج">
                </div>
                <div>
                    <label class='derakhti-label'> خلاصه</label>
                    <input type="text" name="packages[${randomNumber}][summary]" class="derakhti-input" placeholder="خلاصه پکیج">
                </div>
                <div>
                    <label class='derakhti-label'> موجودی</label>
                    <input type="number"    name="packages[${randomNumber}][stock]" class="derakhti-input" placeholder="تعداد موجودی">
                </div>
                <div>
                    <label class='derakhti-label'> قیمت</label>
                    <input type="number"    name="packages[${randomNumber}][price]" class="derakhti-input" placeholder="قیمت پکیج">
                </div>
                <div>
                    <label class='derakhti-label'> تخفیف</label>
                    <input type="number" name="packages[${randomNumber}][discunt]" class="derakhti-input" placeholder="تخفیف پکیج">
                </div>
                <div class='flex items-center gap-6'>
                    <label class="derakhti-toggle-label">
                        <span> ویژه</span>
                        <input type="checkbox" name="packages[${randomNumber}]['featured']" value="1" class="derakhti-checkbox">
                    </label>
                    <label class="derakhti-toggle-label">
                        <span> فعال</span>
                        <input type="checkbox" name="packages[${randomNumber}]['is_active']" value="1" class="derakhti-checkbox">
                    </label>
                </div>
                <div class='full'>
                    <label class='derakhti-label'> ویژگی‌های پکیج</label>
                    <div class='packageAttributesList flex flex-wrap gap-2 mt-2'></div>
                    <div id=${randomNumber} class="createPackageAttribute derakhti-btn-success w-full mt-2" onclick="createPackageAttributeFunction(this)">➕ افزودن ویژگی</div>
                </div>
            </div>
            <div onclick='deletePackage(this)' class="package-remove">✕</div>
        `;

        PackageForm.appendChild(div);
        categoryAttributes(document.getElementById('category_select_element'));
    }

    function deletePackage(el) {
        el.parentElement.remove();
    }

    function setPackageAttribute(attributes) {
        let packageAttributesList = document.querySelectorAll('.packageAttributesList');

        packageAttributes.forEach(element => {
            element.innerHTML = '';
            let options = '';
            if (typeof attributes == 'object') {
                for (const [key, value] of Object.entries(attributes)) {
                    options += `<option value="${key}">${value}</option>`;
                }
                element.innerHTML = options;
            } else {
                element.innerHTML = attributes;
            }
        });

    }

    function createPackageAttributeFunction(el){
        console.log(el.id)
        let xmark = document.createElement('div');
        let div= document.createElement('div');
        let input= document.createElement('input');
        let select= document.createElement('select');
        div.classList=`relative w-full p-2 border-1 rounded-xl flex gap-2`;
        input.setAttribute('type', 'text');
        input.setAttribute('required', true);
        input.setAttribute('name', 'packages['+el.id+'][attribute_value][]');
        input.classList = 'derakhti-input package_attributes_inputs max-w-9/12 min-w-9/12';
        select.setAttribute('name', 'packages['+el.id+'][attribute_id][]');
        select.classList = 'derakhti-select package_attributes_select_element max-w-3/12 min-w-3/12';
        select.innerHTML=
        `
            <option value='0'></option>
        `;
        xmark.classList = ' absolute remove top-0 -right-5 bg-red-300 hover:bg-red-500 p-1 rounded-full cursor-pointer';
        xmark.innerHTML = '✕';
        xmark.setAttribute('onclick', 'deleteAttribute(this)');
        div.append(select);
        div.append(input);
        div.append(xmark);
        el.parentElement.children[1].append(div)
        categoryAttributes(document.getElementById('category_select_element') , false);
        console.log(select.value)

    }

</script>

@endsection