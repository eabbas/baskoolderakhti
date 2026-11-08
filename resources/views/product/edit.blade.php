@extends('dashboard')
@section('title','edit product')
@section('content')

<style>
    :root {
        --gold: #FBC830;
        --navy: #0E2E48;
        --white: #FFFFFF;

        --gold-soft: #FDD968;
        --gold-deep: #E0A800;
        --gold-glow: rgba(251, 200, 48, 0.25);

        --navy-line: rgba(14, 46, 72, 0.08);

        --text-primary: #0E2E48;
        --text-muted: #5A6B7B;
        --text-placeholder: #9AA5B1;

        --bg-page: #FFFFFF;
        --bg-soft: #F7F8FA;

        --shadow-sm: 0 2px 8px rgba(14, 46, 72, 0.06);
        --shadow-md: 0 8px 24px rgba(14, 46, 72, 0.10);
        --shadow-gold: 0 8px 24px rgba(251, 200, 48, 0.30);

        --radius-sm: 10px;
        --radius-md: 14px;
        --radius-lg: 20px;
    }

    /* ===== کارت اصلی ===== */
    .derakhti-form-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }
    .derakhti-form-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .derakhti-form-card:hover { box-shadow: var(--shadow-md); }

    /* ===== هدر ===== */
    .derakhti-form-header {
        background: var(--navy);
        padding: 24px 32px;
        position: relative;
        overflow: hidden;
    }
    .derakhti-form-header::after {
        content: '';
        position: absolute;
        top: -40px; left: -40px;
        width: 160px; height: 160px;
        background: radial-gradient(circle, var(--gold-glow) 0%, transparent 70%);
        pointer-events: none;
    }
    .derakhti-form-header h2 {
        color: var(--white);
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 14px;
        position: relative;
        z-index: 1;
        margin: 0;
    }
    .derakhti-form-header .header-icon {
        width: 46px; height: 46px;
        background: var(--gold);
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--navy);
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
        flex-shrink: 0;
    }
    .derakhti-form-header .sub-text {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
        margin-top: 4px;
        margin-right: 60px;
    }

    /* ===== بدنه ===== */
    .derakhti-form-body {
        padding: 28px 32px 32px;
        background: var(--bg-page);
    }

    /* ===== فیلدها ===== */
    .derakhti-label {
        color: var(--navy);
        font-size: 13px;
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
        padding-right: 4px;
    }
    .derakhti-label::after {
        content: '';
        display: inline-block;
        width: 5px; height: 5px;
        background: var(--gold);
        border-radius: 50%;
        margin-right: 6px;
        vertical-align: middle;
        opacity: 0.8;
    }

    .derakhti-input {
        width: 100%;
        padding: 12px 16px;
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        transition: all 0.25s ease;
        outline: none;
    }
    .derakhti-input::placeholder {
        color: var(--text-placeholder);
        font-size: 13px;
    }
    .derakhti-input:hover {
        background: var(--white);
        border-color: var(--navy-line);
    }
    .derakhti-input:focus {
        background: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    .derakhti-input[type="file"] {
        padding: 9px 14px;
        cursor: pointer;
    }
    .derakhti-input[type="file"]::file-selector-button {
        background: var(--navy);
        color: var(--white);
        border: none;
        padding: 6px 14px;
        border-radius: 8px;
        margin-left: 10px;
        cursor: pointer;
        font-size: 12px;
        font-weight: 600;
        transition: background 0.25s ease;
    }
    .derakhti-input[type="file"]::file-selector-button:hover {
        background: var(--gold-deep);
        color: var(--navy);
    }

    .derakhti-select {
        width: 100%;
        padding: 12px 16px;
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        transition: all 0.25s ease;
        outline: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%235A6B7B' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: left 14px center;
        padding-left: 36px;
        cursor: pointer;
    }
    .derakhti-select:hover {
        background-color: var(--white);
        border-color: var(--navy-line);
    }
    .derakhti-select:focus {
        background-color: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    /* ===== خطا ===== */
    .derakhti-error {
        color: #DC2626;
        font-size: 12px;
        font-weight: 500;
        margin-top: 6px;
        display: block;
        padding-right: 4px;
    }

    /* ===== توگل ===== */
    .derakhti-toggle {
        width: 52px; height: 30px;
        padding: 2px;
        border-radius: 50px;
        background: var(--bg-soft);
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        border: 1px solid var(--navy-line);
        cursor: pointer;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.04);
    }
    .derakhti-toggle.active {
        background: var(--gold);
        border-color: var(--gold);
    }
    .derakhti-toggle-dot {
        width: 24px; height: 24px;
        border-radius: 50%;
        background: var(--white);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
    .derakhti-toggle.active .derakhti-toggle-dot {
        transform: translateX(-22px);
        background: var(--navy);
    }
    .derakhti-toggle-label {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .derakhti-toggle-label span {
        color: var(--text-muted);
        font-size: 12px;
        font-weight: 500;
    }

    /* ===== بخش ویژگی‌ها ===== */
    .derakhti-attributes-section {
        background: var(--bg-soft);
        border-radius: var(--radius-md);
        padding: 16px 20px;
        border: 1px solid var(--navy-line);
    }
    .derakhti-attributes-title {
        color: var(--white);
        font-size: 15px;
        font-weight: 700;
        padding: 12px;
        background: var(--navy);
        border-radius: var(--radius-sm) var(--radius-sm) 0 0;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(14, 46, 72, 0.15);
        position: relative;
        overflow: hidden;
    }
    .derakhti-attributes-title::after {
        content: '';
        position: absolute;
        top: -30px; left: -30px;
        width: 100px; height: 100px;
        background: radial-gradient(circle, var(--gold-glow) 0%, transparent 70%);
        pointer-events: none;
    }

    /* آیتم ویژگی (نمایشی) */
    .derakhti-attr-item {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        background: var(--white);
        border: 1.5px solid var(--navy-line);
        border-radius: var(--radius-sm);
        animation: slideIn 0.3s ease;
        transition: all 0.25s ease;
    }
    .derakhti-attr-item:hover {
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.10);
    }
    .derakhti-attr-item input {
        padding: 4px 8px;
        background: transparent;
        border: none;
        color: var(--navy);
        font-size: 13px;
        outline: none;
        width: 100px;
        font-weight: 600;
    }
    .derakhti-attr-item .remove {
        width: 24px; height: 24px;
        border-radius: 50%;
        background: #FEE2E2;
        color: #DC2626;
        font-size: 11px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    .derakhti-attr-item .remove:hover {
        background: #DC2626;
        color: var(--white);
        transform: rotate(90deg);
    }

    /* آیتم ویژگی (داینامیک JS) */
    #attributes_list > div {
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 12px;
        background: var(--white);
        border: 1.5px solid var(--navy-line);
        border-radius: var(--radius-sm);
        animation: slideIn 0.3s ease;
        width: 100%;
    }
    #attributes_list > div:focus-within {
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    #attributes_list > div .remove,
    .packageAttributesList > div .remove {
        position: static !important;
        width: 28px !important;
        height: 28px !important;
        border-radius: 50%;
        background: #FEE2E2 !important;
        color: #DC2626 !important;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
        padding: 0 !important;
    }
    #attributes_list > div .remove:hover,
    .packageAttributesList > div .remove:hover {
        background: #DC2626 !important;
        color: var(--white) !important;
        transform: rotate(90deg);
    }

    .packageAttributesList > div {
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 12px;
        background: var(--white);
        border: 1.5px solid var(--navy-line);
        border-radius: var(--radius-sm);
        animation: slideIn 0.3s ease;
        width: 100%;
    }
    .packageAttributesList > div:focus-within {
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-10px) scale(0.96); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* ===== دکمه‌ها ===== */
    .derakhti-btn {
        padding: 14px 32px;
        background: var(--gold);
        border: none;
        border-radius: var(--radius-md);
        color: var(--navy);
        font-size: 15px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
        position: relative;
        overflow: hidden;
    }
    .derakhti-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .derakhti-btn:hover::before { left: 100%; }
    .derakhti-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }
    .derakhti-btn:active {
        transform: translateY(0) scale(0.98);
    }

    .derakhti-btn-success {
        padding: 12px 20px;
        background: var(--gold);
        border: 2px dashed var(--gold-deep);
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .derakhti-btn-success:hover {
        background: var(--gold-deep);
        border-style: solid;
        transform: translateY(-2px);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-btn-warning {
        padding: 12px 20px;
        background: transparent;
        border: 2px dashed rgba(14, 46, 72, 0.20);
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .derakhti-btn-warning:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        border-style: solid;
        transform: translateY(-2px);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-btn-danger {
        background: #DC2626;
        color: var(--white);
        border: none;
        border-radius: 50%;
        width: 28px; height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(220, 38, 38, 0.25);
    }
    .derakhti-btn-danger:hover {
        transform: scale(1.15);
        background: #B91C1C;
        box-shadow: 0 4px 16px rgba(220, 38, 38, 0.40);
    }

    /* ===== پکیج ===== */
    .derakhti-package-box {
        position: relative;
        background: var(--bg-soft);
        border: 2px solid var(--gold);
        border-radius: var(--radius-md);
        padding: 20px;
        margin-bottom: 16px;
        animation: slideIn 0.3s ease;
        box-shadow: 0 4px 16px rgba(251, 200, 48, 0.10);
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
        color: var(--navy);
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--gold);
    }
    .derakhti-package-box .package-remove {
        position: absolute;
        top: -12px;
        right: -12px;
        width: 36px; height: 36px;
        border-radius: 50%;
        background: #FEE2E2;
        border: 2px solid #FCA5A5;
        color: #DC2626;
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .derakhti-package-box .package-remove:hover {
        background: #DC2626;
        color: var(--white);
        transform: rotate(90deg) scale(1.1);
        border-color: #DC2626;
    }

    /* تگ اصلی / گالری */
    .derakhti-tag-main,
    .derakhti-tag-gallery {
        font-weight: 700;
        border-radius: 9999px;
        padding: 2px 10px;
        font-size: 9px;
        position: absolute;
        top: 4px;
        left: 4px;
        color: var(--navy);
        box-shadow: 0 2px 6px rgba(14, 46, 72, 0.15);
    }
    .derakhti-tag-main {
        background: var(--gold);
    }
    .derakhti-tag-gallery {
        background: var(--gold-soft);
    }

    /* ===== مدیا ===== */
    .derakhti-media-container {
        display: flex;
        gap: 12px;
        padding: 12px;
        overflow-x: auto;
        background: var(--bg-soft);
        border-radius: var(--radius-sm);
        border: 2px dashed var(--navy-line);
        min-height: 120px;
        align-items: center;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .derakhti-media-container img {
        min-width: 100px;
        max-width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        border: 3px solid var(--white);
        box-shadow: 0 4px 12px rgba(14, 46, 72, 0.08);
    }
    .derakhti-media-item {
        position: relative;
        flex-shrink: 0;
    }
    .derakhti-media-container::-webkit-scrollbar { height: 6px; }
    .derakhti-media-container::-webkit-scrollbar-track { background: transparent; }
    .derakhti-media-container::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .derakhti-media-container::-webkit-scrollbar-thumb:hover {
        background: var(--gold-deep);
    }

    /* بج دسته‌بندی */
    .derakhti-category-badge {
        background: rgba(251, 200, 48, 0.15);
        color: var(--navy);
        font-weight: 700;
        padding: 10px 24px;
        border-radius: var(--radius-sm);
        display: inline-block;
        border: 1px solid var(--gold);
    }

    /* چک‌باکس */
    .derakhti-checkbox {
        width: 18px; height: 18px;
        accent-color: var(--gold-deep);
        cursor: pointer;
        border-radius: 5px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .derakhti-form-body { padding: 22px 20px 26px; }
        .derakhti-form-header { padding: 20px; }
        .derakhti-form-header h2 { font-size: 18px; }
        .derakhti-form-header .sub-text { margin-right: 0; }
        .derakhti-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .derakhti-package-box .package-grid { grid-template-columns: 1fr; }
        .derakhti-btn {
            padding: 12px 24px;
            font-size: 14px;
            width: 100%;
            justify-content: center;
        }
    }
    @media (max-width: 480px) {
        .derakhti-form-body { padding: 16px 14px 20px; }
        .derakhti-form-header { padding: 16px; }
        .derakhti-form-header h2 { font-size: 16px; }
        .derakhti-form-header .header-icon { width: 38px; height: 38px; }
        .derakhti-input, .derakhti-select { padding: 10px 12px; font-size: 13px; }
        .derakhti-btn-warning { padding: 10px 16px; font-size: 13px; }
        .derakhti-btn-success { padding: 10px 16px; font-size: 13px; }
    }
</style>

<?php
$count = 1;
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
                ویرایش محصول
            </h2>
            <p class="sub-text">اطلاعات محصول را ویرایش کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('product.update',['product'=>$product['id']])}}" method="POST" id='form' class="derakhti-form-body" enctype='multipart/form-data'>
            @csrf

            <!-- ===== گرید فیلدها ===== -->
            <div class="derakhti-grid md:grid md:grid-cols-2 flex flex-col  gap-6">

                <!-- عنوان -->
                <div>
                    <label class="derakhti-label"> عنوان</label>
                    <input type="text" placeholder="عنوان محصول" value="{{$product->title}}" required name='title' class="derakhti-input">
                    <span class="derakhti-error">@error('title') {{$message}} @enderror</span>
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
                    <input type="text" placeholder="توضیحات محصول" value="{{$product->description}}"    name='description' class="derakhti-input">
                    <span class="derakhti-error">@error('description') {{$message}} @enderror</span>
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="derakhti-label"> خلاصه</label>
                    <input type="text" placeholder="خلاصه محصول" value="{{$product->summary}}" name='summary' class="derakhti-input">
                </div>
                <!-- دسته بندی -->
                 <div>
                    <label class="derakhti-label"> دسته بندی</label>
                     <select name="category" id="category_select_element" class="derakhti-select" onchange="categoryAttributes(this, true)">
                         @foreach($categories as $category)
                            @if(count($product->categories)>0)
                                <option value="{{$category->id}}" {{$product->categories[0]->id == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
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
                        @foreach($brands as $id => $title)
                            <option value="{{$id}}" {{$product->brand_id == $id ? 'selected' : ''}}>{{$title}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="derakhti-label"> اسلاگ</label>
                    <input type="text" placeholder="اسلاگ محصول" value="{{$product->slug}}" name='slug' class="derakhti-input">
                </div>

                <!-- تخفیف -->
                <div>
                    <label class="derakhti-label"> تخفیف</label>
                    <input type="number" placeholder="مقدار تخفیف" value="{{$product->discunt}}" name='discunt' class="derakhti-input">
                </div>

                <!-- قیمت -->
                <div>
                    <label class="derakhti-label"> قیمت</label>
                    <input type="number" placeholder="قیمت محصول" value="{{$product->price}}"    name='price' class="derakhti-input">
                    <span class="derakhti-error">@error('price') {{$message}} @enderror</span>
                </div>

                <!-- موجودی -->
                <div>
                    <label class="derakhti-label"> موجودی</label>
                    <input type="number" placeholder="تعداد موجودی" value="{{$product->stock}}"    name='stock' class="derakhti-input">
                    <span class="derakhti-error">@error('stock') {{$message}} @enderror</span>
                </div>

                <!-- ===== توگل‌ها ===== -->
                <div class="derakhti-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">

                    <div class="derakhti-toggle-label">
                        <span> نمایش در خانه</span>
                        <div class="derakhti-toggle {{$product->show_in_home == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='show_in_home' value="{{$product->show_in_home}}" class="absolute invisible">
                    </div>

                    <div class="derakhti-toggle-label">
                        <span> محصول ویژه</span>
                        <div class="derakhti-toggle {{$product->featured == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='featured' value="{{$product->featured}}" class="absolute invisible">
                    </div>

                    <div class="derakhti-toggle-label">
                        <span> فعال</span>
                        <div class="derakhti-toggle {{$product->is_active == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name='is_active' value="{{$product->is_active}}" class="absolute invisible">
                    </div>

                </div>

            </div>

            <!-- ===== تصاویر محصول ===== -->
            @if(count($product['medias']) > 0)
                <div class="mt-4">
                    <h3 class="derakhti-label" style="font-size:15px;color:#1e293b;"> تصاویر موجود</h3>
                    <div class="derakhti-media-container">
                        @foreach($product['medias'] as $media)
                            <div class="derakhti-media-item">
                                <img src="{{asset('storage/product_medias/'.$media->path)}}" alt="">
                                <span class="{{$media->is_main == 1 ? 'derakhti-tag-main' : 'derakhti-tag-gallery'}}">
                                    {{$media->is_main == 1 ? 'اصلی' : 'گالری'}}
                                </span>
                                <div onclick="getDeletedProductMedias(this, {{$media->id}})" class="derakhti-btn-danger" style="position:absolute;top:-6px;right:-6px;width:24px;height:24px;font-size:10px;">✕</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- ===== دسته‌بندی ===== -->
            <div class="mt-4">
                <h3 class="derakhti-label" style="font-size:15px;color:#1e293b;"> دسته‌بندی</h3>
                <span class="derakhti-category-badge">{{$product->categories[0]->title ?? 'بدون دسته‌بندی'}}</span>
            </div>

            <!-- ===== ویژگی‌های محصول ===== -->
            @if(count($product['attributes']) > 0)
                <div class="mt-4">
                    <h3 class="derakhti-label" style="font-size:15px;color:#1e293b;"> ویژگی‌های محصول</h3>
                    <div class="flex gap-3 flex-wrap p-2">
                        @foreach($product['attributes'] as $attribute)
                            <div class="derakhti-attr-item">
                                <span style="font-weight:700;color:#1e293b;padding-right:4px;">{{$attribute->title}}:</span>
                                <input type="text" value="{{$attribute->pivot->value}}" readonly style="width:80px;font-weight:600;color:#64748b;">
                                <div onclick="getDeletedProductAttributes(this, {{$attribute->pivot->id}})" class="remove" style="width:22px;height:22px;font-size:9px;">✕</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- ===== بخش ویژگی‌ها (افزودن جدید) ===== -->
            <div class="derakhti-attributes-section mt-4">
                <div class="derakhti-attributes-title"> افزودن ویژگی جدید</div>

                <div class="flex flex-wrap gap-2 mt-3" id="attributes_list"></div>
                <div class="derakhti-btn-success w-full mt-3" id="attribute_conformation_button" onclick="attribute_conformation(this)">
                    ➕ افزودن ویژگی
                </div>

            </div>

            <!-- ===== پکیج‌های موجود ===== -->
            @if(count($product['packages']) > 0)
                <div class="mt-4">
                    <h3 class="derakhti-label" style="font-size:15px;color:#1e293b;"> پکیج‌های موجود</h3>

                    @foreach($product['packages'] as $package)
                        <div class="derakhti-package-box" id="package-{{$package->id}}">
                            <div class="package-title"> پک {{$product->title}}</div>
                            <div class="package-grid">

                                <div class="full">
                                    <label class="derakhti-label"> تصویر اصلی</label>
                                    <input type="file" name='createdPackages[{{$package->id}}][is_main]' class="derakhti-input" style="padding: 8px 12px;">
                                </div>
                                <div class="full">
                                    <label class="derakhti-label"> گالری</label>
                                    <input type="file" name='createdPackages[{{$package->id}}][gallery][]' multiple class="derakhti-input" style="padding: 8px 12px;">
                                </div>
                                <div>
                                    <label class="derakhti-label"> توضیحات</label>
                                    <input type="text"    name="createdPackages[{{$package->id}}][description]" value="{{$package->description}}" class="derakhti-input" placeholder="توضیحات">
                                </div>
                                <div>
                                    <label class="derakhti-label"> خلاصه</label>
                                    <input type="text" name="createdPackages[{{$package->id}}][summary]" value="{{$package->summary}}" class="derakhti-input" placeholder="خلاصه">
                                </div>
                                <div>
                                    <label class="derakhti-label"> موجودی</label>
                                    <input type="number"    name="createdPackages[{{$package->id}}][stock]" value="{{$package->stock}}" class="derakhti-input" placeholder="موجودی">
                                </div>
                                <div>
                                    <label class="derakhti-label"> قیمت</label>
                                    <input type="number"    name="createdPackages[{{$package->id}}][price]" value="{{$package->price}}" class="derakhti-input" placeholder="قیمت">
                                </div>
                                <div>
                                    <label class="derakhti-label"> تخفیف</label>
                                    <input type="number" name="createdPackages[{{$package->id}}][discunt]" value="{{$package->discunt}}" class="derakhti-input" placeholder="تخفیف">
                                </div>

                                <!-- توگل‌های پکیج -->
                                <div class="flex items-center gap-6 flex-wrap">
                                    <div class="derakhti-toggle-label">
                                        <span> فعال</span>
                                        <div class="derakhti-toggle {{$package->is_active == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                                            <div class="derakhti-toggle-dot"></div>
                                        </div>
                                        <input type="number" name="createdPackages[{{$package->id}}][is_active]" value="{{$package->is_active}}" class="absolute invisible">
                                    </div>
                                    <div class="derakhti-toggle-label">
                                        <span> ویژه</span>
                                        <div class="derakhti-toggle {{$package->featured == 1 ? 'active' : ''}}" onclick="toggleState(this)">
                                            <div class="derakhti-toggle-dot"></div>
                                        </div>
                                        <input type="number" name="createdPackages[{{$package->id}}][featured]" value="{{$package->featured}}" class="absolute invisible">
                                    </div>
                                </div>

                                <!-- تصاویر پکیج -->
                                @if(count($package['medias']) > 0)
                                    <div class="full">
                                        <label class="derakhti-label"> تصاویر پک</label>
                                        <div class="derakhti-media-container" style="min-height:100px;">
                                            @foreach($package['medias'] as $media)
                                                <div class="derakhti-media-item">
                                                    <img src="{{asset('storage/package_medias/'.$media->path)}}" alt="" style="min-width:90px;max-width:90px;height:90px;">
                                                    <span class="{{$media->is_main == 1 ? 'derakhti-tag-main' : 'derakhti-tag-gallery'}}">
                                                        {{$media->is_main == 1 ? 'اصلی' : 'گالری'}}
                                                    </span>
                                                    <div onclick="getDeletedPackageMedias(this, {{$media->id}})" class="derakhti-btn-danger" style="position:absolute;top:-6px;right:-6px;width:24px;height:24px;font-size:10px;">✕</div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- ویژگی‌های پکیج -->
                                @if(count($package['attributes']) > 0)
                                    <div class="full">
                                        <label class="derakhti-label"> ویژگی‌های پک</label>
                                        <div class="flex gap-3 flex-wrap">
                                            @foreach($package['attributes'] as $attribute)
                                                <div class="derakhti-attr-item">
                                                    <span style="font-weight:700;color:#1e293b;padding-right:4px;">{{$attribute->title}}:</span>
                                                    <input type="text" value="{{$attribute->pivot->value}}" readonly style="width:80px;font-weight:600;color:#64748b;">
                                                    <div onclick="getDeletedPackageAttributes(this, {{$attribute->pivot->id}})" class="remove" style="width:22px;height:22px;font-size:9px;">✕</div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- افزودن ویژگی به پکیج -->
                                <div class="full">
                                    <label class="derakhti-label"> افزودن ویژگی به پک</label>
                                    <div class="packageAttributesList flex flex-wrap gap-2 mt-2"></div>
                                    <div id="{{$package->id}}" class="derakhti-btn-warning w-full mt-2" onclick="createOldPackageAttributeFunction(this, false)">➕ افزودن ویژگی</div>
                                </div>

                            </div>
                            <div onclick="deleteCreatedPackage(this, {{$package->id}})" class="package-remove">✕</div>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- ===== ایجاد پکیج جدید ===== -->
            <div class="mt-4">
                <div id="PackageForm" class="flex flex-col gap-4"></div>
                <div class="derakhti-btn-warning w-full justify-center mt-3" onclick="createPackageForm(this,false)">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    ایجاد پکیج جدید
                </div>
            </div>

            <!-- ===== دکمه ثبت ===== -->
            <div class="flex justify-end mt-6 pt-6 border-t" style="border-color:var(--metronic-border);">
                <button type="submit" class="derakhti-btn">
                    <span> ذخیره تغییرات</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </button>
            </div>

        </form>

    </div>
</div>

<script>
    let form = document.getElementById('form');

    // ===== TOGGLE =====
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

    // ===== DELETE MEDIA =====
    function getDeletedProductMedias(el, media_id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedProductMedias[]');
        input.setAttribute('value', media_id);
        form.append(input);
        el.closest('.derakhti-media-item').remove();
    }

    function getDeletedPackageMedias(el, media_id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedPackageMedias[]');
        input.setAttribute('value', media_id);
        form.append(input);
        el.closest('.derakhti-media-item').remove();
    }

    // ===== DELETE ATTRIBUTES =====
    function getDeletedProductAttributes(el, att_id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedProductAttributes[]');
        input.setAttribute('value', att_id);
        form.append(input);
        el.closest('.derakhti-attr-item').remove();
    }

    function getDeletedPackageAttributes(el, att_id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedPackageAttributes[]');
        input.setAttribute('value', att_id);
        form.append(input);
        el.closest('.derakhti-attr-item').remove();
    }

    // ===== DELETE PACKAGE =====
    function deleteCreatedPackage(el, package_id) {
        if (!confirm('آیا از حذف این پک مطمئن هستید؟')) return;
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deleteCreatedPackage[]');
        input.setAttribute('value', package_id);
        form.append(input);
        el.closest('.derakhti-package-box').remove();
    }

    // ===== DELETE ATTRIBUTE TAG =====
    function deleteAttribute(el) {
        el.parentElement.remove();
    }

    // ===== CATEGORY ATTRIBUTES =====
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
                    let newPackage_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            newPackage_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = newPackage_options;
                        }
                    } else {
                        let innerHTML = `<option value="0">وجود ندارد</option>`;
                        element.innerHTML = innerHTML;
                    }
                });
                document.querySelectorAll('.createdPackages_attributes_select_element').forEach(element => {
                    let oldPackage_options = '';
                    if (Object.keys(data).length > 0) {
                        for (const [key, value] of Object.entries(data)) {
                            oldPackage_options += `<option value="${key}">${value}</option>`;
                        }
                        if(element.value==0){
                            element.innerHTML = oldPackage_options;
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

    // ===== ATTRIBUTE CONFIRMATION =====
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

    // ===== SET PACKAGE ATTRIBUTE =====
    function setPackageAttribute(attributes) {
        let packageAttributes = document.querySelectorAll('.attribute_select_element');
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

    function createOldPackageAttributeFunction(el){
        console.log(el.id)
        let xmark = document.createElement('div');
        let div= document.createElement('div');
        let input= document.createElement('input');
        let select= document.createElement('select');
        div.classList=`relative w-full p-2 border-1 rounded-xl flex gap-2`;
        input.setAttribute('type', 'text');
        input.setAttribute('required', true);
        input.setAttribute('name', 'createdPackages['+el.id+'][attribute_value][]');
        input.classList = 'derakhti-input package_attributes_inputs max-w-9/12 min-w-9/12';
        select.setAttribute('name', 'createdPackages['+el.id+'][attribute_id][]');
        select.classList = 'derakhti-select createdPackages_attributes_select_element max-w-3/12 min-w-3/12';
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

    function createNewPackageAttributeFunction(el){
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


    // ===== CREATE PACKAGE =====
    let PackageForm = document.getElementById('PackageForm');

    function createPackageForm(el) {
        let randomNumber = Math.random().toString(36).substring(2, 10);
        let div = document.createElement('div');
        div.className = 'derakhti-package-box';

        div.innerHTML = `
            <div class="package-title"> پکیج جدید</div>
            <div class="package-grid">
                <div class="full">
                    <label class="derakhti-label"> تصویر اصلی</label>
                    <input type="file" name="packages[${randomNumber}][is_main]" class="derakhti-input" style="padding: 8px 12px;">
                </div>
                <div class="full">
                    <label class="derakhti-label"> گالری</label>
                    <input type="file" name="packages[${randomNumber}][gallery][]" multiple class="derakhti-input" style="padding: 8px 12px;">
                </div>
                <div>
                    <label class="derakhti-label"> توضیحات</label>
                    <input type="text"    name="packages[${randomNumber}][description]" class="derakhti-input" placeholder="توضیحات پکیج">
                </div>
                <div>
                    <label class="derakhti-label"> خلاصه</label>
                    <input type="text" name="packages[${randomNumber}][summary]" class="derakhti-input" placeholder="خلاصه پکیج">
                </div>
                <div>
                    <label class="derakhti-label"> موجودی</label>
                    <input type="number"    name="packages[${randomNumber}][stock]" class="derakhti-input" placeholder="تعداد موجودی">
                </div>
                <div>
                    <label class="derakhti-label"> قیمت</label>
                    <input type="number"    name="packages[${randomNumber}][price]" class="derakhti-input" placeholder="قیمت پکیج">
                </div>
                <div>
                    <label class="derakhti-label"> تخفیف</label>
                    <input type="number" name="packages[${randomNumber}][discunt]" class="derakhti-input" placeholder="تخفیف پکیج">
                </div>
                <div class="flex items-center gap-6 flex-wrap">
                    <div class="derakhti-toggle-label">
                        <span> فعال</span>
                        <div class="derakhti-toggle" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name="packages[${randomNumber}][is_active]" value="0" class="absolute invisible">
                    </div>
                    <div class="derakhti-toggle-label">
                        <span> ویژه</span>
                        <div class="derakhti-toggle" onclick="toggleState(this)">
                            <div class="derakhti-toggle-dot"></div>
                        </div>
                        <input type="number" name="packages[${randomNumber}][featured]" value="0" class="absolute invisible">
                    </div>
                </div>
                <div class="full">
                    <label class="derakhti-label"> ویژگی‌های پکیج</label>

                    <div class="packageAttributesList flex flex-wrap gap-2 mt-2"></div>
                    <div id=${randomNumber} class="createPackageAttribute derakhti-btn-warning w-full mt-2" onclick="createNewPackageAttributeFunction(this, true)">➕ افزودن ویژگی</div>
                </div>
            </div>
            <div onclick="deletePackage(this)" class="package-remove">✕</div>
        `;

        PackageForm.appendChild(div);

        let catSelect = document.getElementById('category_select_element');
        if (catSelect) {
            categoryAttributes(catSelect, false);
        }
    }

    function deletePackage(el) {
        if (!confirm('آیا از حذف این پک جدید مطمئن هستید؟')) return;
        el.closest('.derakhti-package-box').remove();
    }
    
</script>

@endsection