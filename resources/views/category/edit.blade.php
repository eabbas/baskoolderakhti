@extends('dashboard')
@section('title','edit category')
@section('content')

<style>
    :root {
        --gold: #FBC830;
        --navy: #0E2E48;
        --white: #FFFFFF;
        --gold-soft: #FDD968;
        --gold-deep: #E0A800;
        --gold-glow: rgba(251, 200, 48, 0.25);
        --navy-soft: #0A2540;
        --navy-line: rgba(0, 21, 37, 0.08);
        --text-primary: #0E2E48;
        --text-muted: #5A6B7B;
        --text-placeholder: #9AA5B1;
        --bg-page: #FFFFFF;
        --bg-soft: #F7F8FA;
        --shadow-sm: 0 2px 8px rgba(0, 21, 37, 0.06);
        --shadow-md: 0 8px 24px rgba(0, 21, 37, 0.10);
        --shadow-gold: 0 8px 24px rgba(251, 200, 48, 0.30);
        --radius-sm: 10px;
        --radius-md: 14px;
        --radius-lg: 20px;
    }

    .derakhti-form-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
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
    }
    .derakhti-form-card:hover { box-shadow: var(--shadow-md); }

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

    .derakhti-form-body {
        padding: 28px 32px 32px;
        background: var(--bg-page);
    }

    /* عنوان‌های h3 داخل فرم */
    .derakhti-form-body h3 {
        color: var(--navy);
        font-size: 15px;
        font-weight: 700;
        margin: 12px 0 16px;
        padding-right: 14px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--navy-line);
        position: relative;
    }
    .derakhti-form-body h3::before {
        content: '';
        position: absolute;
        right: 0;
        top: calc(50% - 5px);
        transform: translateY(-50%);
        width: 4px;
        height: 18px;
        background: linear-gradient(180deg, var(--gold), var(--gold-deep));
        border-radius: 4px;
    }

    .derakhti-section {
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 20px 24px;
        margin-bottom: 20px;
        border: 1px solid var(--navy-line);
        transition: all 0.3s ease;
        position: relative;
    }
    .derakhti-section:hover {
        border-color: var(--gold);
        box-shadow: var(--shadow-sm);
    }
    .derakhti-section-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 18px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--navy-line);
    }
    .derakhti-section-title::before {
        content: '';
        width: 4px; height: 18px;
        background: linear-gradient(180deg, var(--gold), var(--gold-deep));
        border-radius: 4px;
        flex-shrink: 0;
    }
    .derakhti-section-title h3 {
        color: var(--navy);
        font-size: 15px;
        font-weight: 700;
        margin: 0;
        padding: 0;
        border: none;
        letter-spacing: -0.2px;
    }
    .derakhti-section-title h3::before { display: none; }

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

    /* فایل‌ اینپوت */
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

    .derakhti-checkbox-group {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        background: var(--bg-soft);
        border-radius: var(--radius-sm);
        border: 1.5px solid transparent;
        transition: all 0.25s ease;
        cursor: pointer;
    }
    .derakhti-checkbox-group:hover {
        background: var(--white);
        border-color: var(--gold);
    }
    .derakhti-checkbox-group label {
        color: var(--navy);
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        margin: 0;
    }
    .derakhti-checkbox {
        width: 18px;
        height: 18px;
        accent-color: var(--gold-deep);
        cursor: pointer;
        border-radius: 5px;
        flex-shrink: 0;
    }

    .derakhti-error {
        color: #DC2626;
        font-size: 12px;
        margin-top: 6px;
        display: block;
        padding-right: 4px;
        font-weight: 500;
    }

    .derakhti-categories-box {
        width: 100%;
        max-height: 180px;
        overflow-y: auto;
        padding: 12px 16px;
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        transition: all 0.3s ease;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .derakhti-categories-box:hover { border-color: var(--navy-line); }
    .derakhti-categories-box:focus-within {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    .derakhti-categories-box::-webkit-scrollbar { width: 6px; }
    .derakhti-categories-box::-webkit-scrollbar-track { background: transparent; }
    .derakhti-categories-box::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .derakhti-categories-box::-webkit-scrollbar-thumb:hover { background: var(--gold-deep); }

    .derakhti-category-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 10px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .derakhti-category-item:hover { background: rgba(251, 200, 48, 0.10); }
    .derakhti-category-item label {
        color: var(--navy);
        font-size: 14px;
        cursor: pointer;
        margin: 0;
    }

    .derakhti-add-attr-btn {
        width: 100%;
        padding: 12px;
        background: transparent;
        border: 2px dashed rgba(0, 21, 37, 0.20);
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .derakhti-add-attr-btn:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        border-style: solid;
        transform: translateY(-2px);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-attr-item {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 14px 16px;
        width: 100%;
        background: var(--bg-soft);
        border-radius: var(--radius-sm);
        border: 1.5px solid var(--navy-line);
        animation: slideIn 0.3s ease;
    }
    .derakhti-attr-item:focus-within {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-10px) scale(0.96); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .derakhti-attr-item input {
        padding: 10px 14px;
        background: var(--white);
        border: 1.5px solid var(--navy-line);
        border-radius: 8px;
        color: var(--navy);
        font-size: 14px;
        outline: none;
        transition: all 0.25s ease;
        width: 100%;
    }
    .derakhti-attr-item input:focus {
        border-color: var(--gold);
        box-shadow: 0 0 0 3px rgba(251, 200, 48, 0.15);
    }
    .derakhti-attr-remove {
        position: absolute;
        top: -10px;
        right: -10px;
        left: auto;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: var(--white);
        border: 1.5px solid #FCA5A5;
        color: #DC2626;
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: var(--shadow-sm);
        z-index: 2;
    }
    .derakhti-attr-remove:hover {
        background: #DC2626;
        color: var(--white);
        transform: rotate(90deg) scale(1.1);
        border-color: #DC2626;
    }

    .derakhti-submit-btn {
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
        justify-content: center;
        gap: 10px;
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
        letter-spacing: -0.2px;
        position: relative;
        overflow: hidden;
    }
    .derakhti-submit-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .derakhti-submit-btn:hover::before { left: 100%; }
    .derakhti-submit-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }
    .derakhti-submit-btn:active { transform: translateY(0) scale(0.98); }

    .derakhti-form-footer {
        margin-top: 20px;
        text-align: center;
        font-size: 12px;
        color: var(--text-muted);
        padding-top: 16px;
        border-top: 1px solid var(--navy-line);
    }

    .derakhti-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    .derakhti-grid-2 .full { grid-column: 1 / -1; }

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

    .derakhti-image-box {
        width: 80px; height: 80px;
        border-radius: var(--radius-sm);
        overflow: hidden;
        border: 2px solid var(--navy-line);
        background: var(--bg-soft);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: all 0.3s ease;
    }
    .derakhti-image-box:hover {
        border-color: var(--gold);
        box-shadow: var(--shadow-sm);
    }
    .derakhti-image-box img {
        width: 100%; height: 100%;
        object-fit: cover;
    }

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
        box-shadow: 0 4px 12px rgba(0, 21, 37, 0.15);
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

    .derakhti-sub-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: var(--radius-sm);
        overflow: hidden;
    }
    .derakhti-sub-table th {
        background: var(--bg-soft);
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 12px;
        border: 1px solid var(--navy-line);
        text-align: center;
    }
    .derakhti-sub-table td {
        padding: 8px 12px;
        border: 1px solid var(--navy-line);
        text-align: center;
        font-size: 13px;
        color: var(--navy);
    }
    .derakhti-sub-table tr:hover td { background: var(--bg-soft); }
    .derakhti-sub-table img {
        width: 40px; height: 40px;
        object-fit: cover;
        border-radius: 8px;
    }

    .derakhti-action-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        z-index: 2;
    }
    .derakhti-action-icon:hover { transform: scale(1.05); }
    .derakhti-action-icon.danger {
        background: #FEE2E2;
        color: #DC2626;
        border: 1.5px solid #FCA5A5;
    }
    .derakhti-action-icon.danger:hover {
        background: #DC2626;
        color: var(--white);
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.25);
        border-color: #DC2626;
    }
    .derakhti-action-icon.success {
        background: #D1FAE5;
        color: #059669;
        border: 1.5px solid #6EE7B7;
    }
    .derakhti-action-icon.success:hover {
        background: #059669;
        color: var(--white);
        box-shadow: 0 4px 12px rgba(5, 150, 105, 0.25);
        border-color: #059669;
    }

    .derakhti-add-sub-btn {
        padding: 12px 24px;
        background: transparent;
        border: 2px dashed rgba(0, 21, 37, 0.20);
        border-radius: var(--radius-sm);
        color: var(--navy);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .derakhti-add-sub-btn:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        border-style: solid;
        transform: translateY(-2px);
        box-shadow: var(--shadow-gold);
    }

    /* زیردسته داینامیک (کلاس‌های Tailwind در JS تولید می‌شن) */
    #subCategories > div {
        position: relative;
        background: var(--bg-soft) !important;
        border: 1.5px solid var(--navy-line) !important;
        border-radius: var(--radius-sm) !important;
        transition: all 0.25s ease;
        animation: slideIn 0.3s ease;
    }
    #subCategories > div:focus-within {
        border-color: var(--gold) !important;
        background: var(--white) !important;
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }

    @media (max-width: 768px) {
        .derakhti-grid-2 { grid-template-columns: 1fr; gap: 14px; }
        .derakhti-form-body { padding: 22px 20px 26px; }
        .derakhti-form-header { padding: 20px; }
        .derakhti-form-header .sub-text { margin-right: 0; }
        .derakhti-toggle-group {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 12px !important;
        }
        .derakhti-sub-table { font-size: 12px; }
        .derakhti-sub-table th,
        .derakhti-sub-table td { padding: 6px 8px; }
        .derakhti-submit-btn { padding: 13px 24px; font-size: 14px; }
    }

    @media (max-width: 480px) {
        .derakhti-form-body { padding: 16px 14px 20px; }
        .derakhti-form-header { padding: 16px; }
        .derakhti-form-header h2 { font-size: 16px; }
        .derakhti-form-header .header-icon { width: 38px; height: 38px; }
        .derakhti-section { padding: 14px 16px; }
        .derakhti-input { padding: 10px 12px; font-size: 13px; }
        .derakhti-submit-btn { padding: 13px 20px; font-size: 14px; }
        .derakhti-categories-box { max-height: 150px; padding: 10px 12px; }
        .derakhti-sub-table { font-size: 10px; }
        .derakhti-sub-table th,
        .derakhti-sub-table td { padding: 4px 6px; }
        .derakhti-sub-table img { width: 30px; height: 30px; }
        .derakhti-attributes-title { font-size: 13px; padding: 8px; }
    }
</style>
<?php
$count=1;
?>
<div class="w-full flex justify-center py-6 px-4">
    <div class="derakhti-form-card">

        <!-- ===== هدر ===== -->
        <div class="derakhti-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </span>
                ویرایش دسته‌بندی
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات دسته‌بندی را ویرایش کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('category.update',['category'=>$category->id])}}" method="POST" id='form' class="derakhti-form-body" enctype='multipart/form-data'>
            @csrf
            
            <!-- ===== گرید فیلدها ===== -->
             <h3> اطلاعات اصلی </h3>
            <div class="derakhti-grid grid grid-cols-2 gap-6 mr-4 mt-5">

                <!-- تصویر -->
                <div>
                    <label class="derakhti-label"> تصویر</label>
                    <input type="file" name='image_path' class="derakhti-input">
                </div>
                <div>
                    <label class="derakhti-label"> عنوان</label>
                    <input type="text" value="{{$category->title}}" placeholder="عنوان دسته‌بندی" name='title' class="derakhti-input">
                    @error('title') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- اسلاگ -->
                <div>
                    <label class="derakhti-label"> اسلاگ</label>
                    <input type="text" value="{{$category->slug}}" placeholder="اسلاگ دسته‌بندی" name='slug' class="derakhti-input">
                    @error('slug') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- توضیحات -->
                <div>
                    <label class="derakhti-label"> توضیحات</label>
                    <input type="text" value="{{$category->description}}" placeholder="توضیحات دسته‌بندی" name='description' class="derakhti-input">
                    @error('description') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>

                <!-- خلاصه -->
                <div>
                    <label class="derakhti-label"> خلاصه</label>
                    <input type="text" value="{{$category->summary}}" placeholder="خلاصه دسته‌بندی" name='summary' class="derakhti-input">
                    @error('summary') <span class="derakhti-error">{{$message}}</span> @enderror
                </div>
                @if($category->id!=1)
                    <!-- دسته بندی -->
                    <div class="mb-4">
                        <label class="derakhti-label"> دسته‌بندی والد</label>
                        <div class="derakhti-categories-box">
                            <div class="derakhti-category-item">
                                @if($category->parent_id==0)
                                    <input type="radio" name="parent_id" value="0" checked class="derakhti-checkbox" id="parent_0">
                                @else
                                    <input type="radio" name="parent_id" value="0" class="derakhti-checkbox" id="parent_0">
                                @endif
                                <label for="parent_0">والد</label>
                            </div>
                            {!! $categoriessss !!}
                        </div>
                    </div>
                @endif
                <!-- ===== توگل‌ها ===== -->
                <h3> تنظیمات نمایش </h3>
                <div class="derakhti-toggle-group col-span-2 flex gap-8 justify-start items-center flex-wrap">
                    <!-- نمایش در خانه -->
                    <div class="derakhti-toggle-label mr-4">
                        <span> نمایش در خانه</span>
                        @if($category->show_in_home==0)
                            <div class="derakhti-toggle" onclick="toggleState(this)">
                                <div class="derakhti-toggle-dot"></div>
                            </div>
                            <input type="number" name='show_in_home' value="0" class="absolute invisible">
                        @else
                            <div class="derakhti-toggle active" onclick="toggleState(this)">
                                <div class="derakhti-toggle-dot"></div>
                            </div>
                            <input type="number" name='show_in_home' value="1" class="absolute invisible">
                        @endif
                    </div>

                    <!-- فعال -->
                    <div class="derakhti-toggle-label">
                        <span> فعال</span>
                        @if($category->is_active==0)
                            <div class="derakhti-toggle" onclick="toggleState(this)">
                                <div class="derakhti-toggle-dot"></div>
                            </div>
                            <input type="number" name='is_active' value="0" class="absolute invisible">
                        @else
                            <div class="derakhti-toggle active" onclick="toggleState(this)">
                                <div class="derakhti-toggle-dot"></div>
                            </div>
                            <input type="number" name='is_active' value="1" class="absolute invisible">
                        @endif
                    </div>

                    <!-- تصویر -->
                    <div class="derakhti-image-box">
                        @if($category->image_path!=null)

                            <img src="{{asset('storage/category_medias/'.$category->image_path)}}" alt="{{$category->title}}">
                        @else
                            
                            <img class='bg-cover bg-center' src="{{asset('assets/img/defaultPicture.png')}}" alt="{{$category->title}}">
                        @endif
                    </div>

                </div>
            </div>
            @if($category->id!=1)
                <!-- ===== ویژگی‌ها ===== -->
                <div class="derakhti-attributes-section mt-6">
                    <div class="derakhti-attributes-title"> ویژگی‌ها</div>
                    <div id="createdAttributes" class="space-y-2">
                        @foreach($category['attributes'] as $attribute)
                        <div class="derakhti-attr-item">
                            <input type="text" name="editedAttributes[{{$attribute->id}}]" value="{{$attribute->title}}" placeholder="عنوان ویژگی">
                            <div onclick="deleteCreatedAttributes(this, {{$attribute->id}})" class="derakhti-attr-remove">✕</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-3 mt-3" id="attributes"></div>
                    <div onclick="Attributes(this)" class="derakhti-add-attr-btn mt-3">➕ افزودن ویژگی جدید</div>
                </div>


                <!-- ===== افزودن زیردسته ===== -->
                <div class="w-full h-px bg-[#DBDFE9] my-4"></div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-3" id='subCategories'></div>
                    <div class="w-full flex justify-center">
                        <button type="button" class="derakhti-add-sub-btn" onclick='setSubCategory(this)'>
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            افزودن زیردسته‌بندی
                        </button>
                    </div>
                </div>
            @endif

            <!-- ===== دکمه ثبت ===== -->
            <div class="flex justify-end mt-6 pt-6 border-t border-[#DBDFE9]">
                <button type="submit" class="derakhti-submit-btn">
                    <span>ذخیره تغییرات</span>
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

    function setSubCategory(el) {
        let randomNumber = Math.random();
        let div = document.createElement('div');
        div.className = `relative w-full p-3 shadow-md border border-[#DBDFE9] rounded-xl flex flex-col md:flex-row gap-3 items-center`;
        div.setAttribute("id", randomNumber);
        div.innerHTML = `
            <div class='derakhti-action-icon danger absolute -top-3 -right-3' onclick='deleteSubCategoryFunction(this)'>
                <svg class='w-4 h-4 fill-current' viewBox="0 0 384 512">
                    <path d="M378.4 71.4c8.5-10.1 7.2-25.3-2.9-33.8s-25.3-7.2-33.8 2.9L192 218.7 42.4 40.6C33.9 30.4 18.7 29.1 8.6 37.6S-2.9 61.3 5.6 71.4L160.7 256 5.6 440.6c-8.5 10.2-7.2 25.3 2.9 33.8s25.3 7.2 33.8-2.9L192 293.3 341.6 471.4c8.5 10.1 23.7 11.5 33.8 2.9s11.5-23.7 2.9-33.8L223.3 256l155-184.6z"/>
                </svg>
            </div>
            <input type='text' name='subCategories[${randomNumber}][title]' required placeholder="نام زیردسته" class='derakhti-input'>
            <input type='text' name='subCategories[${randomNumber}][description]' required placeholder="توضیحات" class='derakhti-input'>
            <input type='text' name='subCategories[${randomNumber}][summary]' required placeholder="خلاصه" class='derakhti-input'>
            <div class='flex gap-4 flex-wrap'>
                <div class='derakhti-toggle-label'>
                    <span class='text-[10px]'> نمایش</span>
                    <div class='derakhti-toggle' onclick='toggleState(this)'>
                        <div class='derakhti-toggle-dot'></div>
                    </div>
                    <input type='number' name='subCategories[${randomNumber}][show_in_home]' value='0' class='absolute invisible'>
                </div>
                <div class='derakhti-toggle-label'>
                    <span class='text-[10px]'> فعال</span>
                    <div class='derakhti-toggle' onclick='toggleState(this)'>
                        <div class='derakhti-toggle-dot'></div>
                    </div>
                    <input type='number' name='subCategories[${randomNumber}][is_active]' value='0' class='absolute invisible'>
                </div>
            </div>
        `;
        el.parentElement.previousElementSibling.appendChild(div);
    }

    function deleteSubCategoryFunction(el) {
        el.parentElement.remove();
    }

    function subcatdelete(el, id) {
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'deletedSubCategories[]');
        input.setAttribute('value', id);
        el.parentElement.parentElement.parentElement.remove();
        form.append(input);
    }

    let attributes_table = document.getElementById('attributes');
    let form = document.getElementById('form');

    function Attributes(el) {
        let div = document.createElement('div');
        let input = document.createElement('input');
        let Xmark = document.createElement('div');

        div.className = 'derakhti-attr-item';
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'attributes[]');
        input.setAttribute('placeholder', 'عنوان ویژگی جدید...');

        Xmark.className = 'derakhti-attr-remove';
        Xmark.innerHTML = '✕';
        Xmark.setAttribute('onclick', 'deleteAttributes(this)');

        div.appendChild(input);
        div.appendChild(Xmark);
        attributes_table.appendChild(div);
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
</script>

@endsection