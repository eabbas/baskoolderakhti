@extends('dashboard')

@section('title','نمایش دسته‌بندی')
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

    .derakhti-profile-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        max-width: 900px;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }
    .derakhti-profile-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .derakhti-profile-card:hover { box-shadow: var(--shadow-md); }

    .derakhti-profile-header {
        background: var(--navy);
        padding: 24px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
        position: relative;
        overflow: hidden;
    }
    .derakhti-profile-header::after {
        content: '';
        position: absolute;
        top: -40px; left: -40px;
        width: 160px; height: 160px;
        background: radial-gradient(circle, var(--gold-glow) 0%, transparent 70%);
        pointer-events: none;
    }
    .derakhti-profile-header .title-section {
        display: flex;
        align-items: center;
        gap: 14px;
        position: relative;
        z-index: 1;
    }
    .derakhti-profile-header .header-icon {
        width: 48px; height: 48px;
        background: var(--gold);
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--navy);
        font-size: 22px;
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
        flex-shrink: 0;
    }
    .derakhti-profile-header h2 {
        color: var(--white);
        font-size: 22px;
        font-weight: 700;
        margin: 0;
    }
    .derakhti-profile-header .subtitle {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
        margin-top: 2px;
    }

    .derakhti-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        background: transparent;
        color: var(--gold);
        border: 1.5px solid var(--gold);
        border-radius: var(--radius-sm);
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }
    .derakhti-back-btn:hover {
        background: var(--gold);
        color: var(--navy);
        transform: translateX(-4px);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-profile-body {
        padding: 32px;
        background: var(--bg-page);
    }

    .derakhti-info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    .derakhti-info-item {
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-md);
        padding: 16px 20px;
        transition: all 0.3s ease;
    }
    .derakhti-info-item:hover {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: var(--shadow-sm);
    }
    .derakhti-info-item .label {
        display: flex;
        align-items: center;
        gap: 6px;
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
    }
    .derakhti-info-item .label svg { color: var(--gold-deep); }
    .derakhti-info-item .value {
        color: var(--navy);
        font-size: 16px;
        font-weight: 600;
        padding-right: 4px;
    }
    .derakhti-info-item .value .badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
    }
    .derakhti-info-item .value .badge.active,
    .derakhti-info-item .value .badge.show {
        background: var(--gold);
        color: var(--navy);
        box-shadow: 0 2px 8px rgba(251, 200, 48, 0.30);
    }
    .derakhti-info-item .value .badge.inactive,
    .derakhti-info-item .value .badge.hide {
        background: var(--bg-soft);
        color: var(--text-muted);
        border: 1px solid var(--navy-line);
    }

    .derakhti-action-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid var(--navy-line);
    }
    .derakhti-action-btn-lg {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 28px;
        border-radius: var(--radius-md);
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        border: none;
        cursor: pointer;
    }
    .derakhti-action-btn-lg:hover { transform: translateY(-2px); }
    .derakhti-action-btn-lg:active { transform: translateY(0) scale(0.97); }

    .derakhti-action-btn-lg.edit {
        background: var(--gold);
        color: var(--navy);
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
    }
    .derakhti-action-btn-lg.edit:hover {
        background: var(--gold-deep);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }
    .derakhti-action-btn-lg.delete {
        background: #FEE2E2;
        color: #DC2626;
        border: 1.5px solid #FCA5A5;
    }
    .derakhti-action-btn-lg.delete:hover {
        background: #DC2626;
        color: var(--white);
        border-color: #DC2626;
        box-shadow: 0 8px 24px rgba(220, 38, 38, 0.30);
    }
    .derakhti-action-btn-lg.back {
        background: transparent;
        color: var(--navy);
        border: 1.5px solid var(--navy-line);
    }
    .derakhti-action-btn-lg.back:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
        box-shadow: var(--shadow-gold);
    }

    .derakhti-image-section {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--navy-line);
    }
    .derakhti-profile-image {
        width: 120px; height: 120px;
        border-radius: var(--radius-md);
        overflow: hidden;
        border: 3px solid var(--navy-line);
        flex-shrink: 0;
        transition: all 0.3s ease;
        background: var(--bg-soft);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .derakhti-profile-image:hover {
        border-color: var(--gold);
        box-shadow: var(--shadow-gold);
    }
    .derakhti-profile-image img {
        width: 100%; height: 100%;
        object-fit: cover;
    }
    .derakhti-image-info h3 {
        color: var(--navy);
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }
    .derakhti-image-info p {
        color: var(--text-muted);
        font-size: 13px;
        margin: 4px 0 0;
    }

    .derakhti-section {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid var(--navy-line);
    }
    .derakhti-section-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
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
        font-size: 18px;
        font-weight: 700;
        margin: 0;
        letter-spacing: -0.2px;
    }
    .derakhti-section-title .line {
        flex: 1;
        height: 1px;
        background: var(--navy-line);
    }

    .derakhti-attr-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .derakhti-attr-item {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        padding: 8px 16px;
        transition: all 0.3s ease;
    }
    .derakhti-attr-item:hover {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    .derakhti-attr-item .key {
        color: var(--navy);
        font-size: 13px;
        font-weight: 600;
    }
    .derakhti-attr-item .divider {
        width: 1px;
        height: 20px;
        background: var(--navy-line);
    }
    .derakhti-attr-item .val {
        color: var(--navy);
        font-size: 14px;
        font-weight: 600;
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
    .derakhti-sub-table tr:hover td { background: rgba(251, 200, 48, 0.06); }
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
        background: var(--gold);
        color: var(--navy);
    }
    .derakhti-action-icon.success:hover {
        background: var(--gold-deep);
        color: var(--navy);
        box-shadow: var(--shadow-gold);
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
        color: var(--navy);
        font-size: 14px;
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

    @media (max-width: 768px) {
        .derakhti-profile-header { padding: 20px; }
        .derakhti-profile-header h2 { font-size: 18px; }
        .derakhti-profile-body { padding: 22px 20px 26px; }
        .derakhti-info-grid { grid-template-columns: 1fr; gap: 14px; }
        .derakhti-image-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .derakhti-profile-image { width: 100px; height: 100px; }
        .derakhti-action-buttons { flex-direction: column; }
        .derakhti-action-btn-lg { width: 100%; justify-content: center; }
        .derakhti-profile-header .header-icon { width: 40px; height: 40px; font-size: 18px; }
        .derakhti-sub-table { font-size: 12px; }
        .derakhti-sub-table th,
        .derakhti-sub-table td { padding: 6px 8px; }
    }

    @media (max-width: 480px) {
        .derakhti-profile-header { padding: 16px; }
        .derakhti-profile-header h2 { font-size: 16px; }
        .derakhti-profile-body { padding: 16px 14px 20px; }
        .derakhti-info-item { padding: 12px 16px; }
        .derakhti-info-item .value { font-size: 14px; }
        .derakhti-profile-image { width: 80px; height: 80px; }
        .derakhti-back-btn { padding: 8px 14px; font-size: 12px; }
        .derakhti-section { padding-top: 18px; margin-top: 18px; }
        .derakhti-section-title h3 { font-size: 16px; }
        .derakhti-categories-box { max-height: 150px; padding: 10px 12px; }
        .derakhti-sub-table { font-size: 10px; }
        .derakhti-sub-table th,
        .derakhti-sub-table td { padding: 4px 6px; }
        .derakhti-sub-table img { width: 30px; height: 30px; }
        .derakhti-action-btn-lg { padding: 10px 20px; font-size: 13px; }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="derakhti-profile-card">

        <!-- ===== هدر ===== -->
        <div class="derakhti-profile-header">
            <div class="title-section">
                <div class="header-icon">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 7h16M4 12h16M4 17h10"/>
                        <rect x="2" y="3" width="20" height="18" rx="2"/>
                    </svg>
                </div>
                <div>
                    <h2>نمایش دسته‌بندی</h2>
                    <div class="subtitle">مشاهده جزئیات دسته‌بندی {{$category->title}}</div>
                </div>
            </div>
            <a href="{{route('category.list')}}" class="derakhti-back-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                بازگشت به لیست
            </a>
        </div>

        <!-- ===== بدنه ===== -->
        <div class="derakhti-profile-body">

            <!-- ===== تصویر ===== -->
            <div class="derakhti-image-section">
                <div class="derakhti-profile-image">
                    @if($category->image_path != null)
                        <img src="{{asset('storage/category_medias/'.$category->image_path)}}" alt="{{$category->title}}">
                    @else
                        <img class='bg-center bg-cover' src="{{asset('assets/img/defaultPicture.png')}}" alt="{{$category->title}}">
                    @endif
                </div>
                <div class="derakhti-image-info">
                    <h3>{{$category->title}}</h3>
                    <p>شناسه: #{{$category->id}} · اسلاگ: {{$category->slug}}</p>
                </div>
            </div>

            <!-- ===== اطلاعات ===== -->
            <div class="derakhti-info-grid">

                <!-- عنوان -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        عنوان
                    </div>
                    <div class="value">{{$category->title}}</div>
                </div>

                <!-- اسلاگ -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                        </svg>
                        اسلاگ
                    </div>
                    <div class="value">{{$category->slug}}</div>
                </div>

                <!-- توضیحات -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        توضیحات
                    </div>
                    <div class="value">{{$category->description ?? '—'}}</div>
                </div>

                <!-- خلاصه -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7h16M4 12h16M4 17h10"/>
                            <rect x="2" y="3" width="20" height="18" rx="2"/>
                        </svg>
                        خلاصه
                    </div>
                    <div class="value">{{$category->summary ?? '—'}}</div>
                </div>

                <!-- نمایش در خانه -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2z"/>
                        </svg>
                        نمایش در خانه
                    </div>
                    <div class='flex gap-1'>
                        
                        @if($category->show_id_home==1)
                            <img class='w-5' src="{{asset('assets/img/icons8-tick-50.png')}}" alt="">
                            <span> فعال </span>
                        @else
                            <svg class='w-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H0V480H448V32zm-98.9 96L253.9 256l95.2 128H289.3L224 296.2 158.7 384H98.9l95.2-128L98.9 128h59.8L224 215.8 289.3 128h59.8z"/></svg>
                            <span> غیرفعال </span>
                        @endif
                    </div>
                </div>


                <!-- وضعیت -->
                <div class="derakhti-info-item">
                    <div class="label">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                        وضعیت
                    </div>
                    <div class='flex gap-1'>
                        
                        @if($category->is_active==1)
                            <img class='w-5' src="{{asset('assets/img/icons8-tick-50.png')}}" alt="">
                            <span> فعال </span>
                        @else
                            <svg class='w-4' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H0V480H448V32zm-98.9 96L253.9 256l95.2 128H289.3L224 296.2 158.7 384H98.9l95.2-128L98.9 128h59.8L224 215.8 289.3 128h59.8z"/></svg>
                            <span> غیرفعال </span>
                        @endif
                    </div>
                </div>
                @if($category->id!=1)
                    <!-- دسته‌بندی والد -->
                    <div class="mb-4">
                        <label class="derakhti-label"> دسته‌بندی والد</label>
                        <div class="derakhti-categories-box">
                            {{$category->title}}
                            {!! $subCategories !!}
                        </div>
                    </div>
                @endif

            </div>
                @if($category->id!=1)
                    <!-- ===== ویژگی‌ها ===== -->
                    <div class="derakhti-section">
                        <div class="derakhti-section-title">
                            <h3>⚙️ ویژگی‌ها</h3>
                            <div class="line"></div>
                        </div>
                        <div class="derakhti-attr-list">
                            @forelse($category['attributes'] as $attribute)
                                <div class="derakhti-attr-item">
                                    <span class="key">{{$attribute->title}}</span>
                                </div>
                            @empty
                                <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ ویژگی‌ای ثبت نشده است</span>
                            @endforelse
                        </div>
                    </div>
                @endif

   


            <!-- ===== دکمه‌های اکشن ===== -->
            <div class="derakhti-action-buttons">
                <a href="{{route('category.edit',['category'=>$category->id])}}" class="derakhti-action-btn-lg edit">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                    </svg>
                    ویرایش دسته‌بندی
                </a>
                @if($category->id!=1)
                <a href="{{route('category.delete',['category'=>$category->id])}}" class="derakhti-action-btn-lg delete" onclick="return confirm('آیا از حذف دسته‌بندی «{{$category->title}}» مطمئن هستید؟')">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 6h18"/>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                    حذف دسته‌بندی
                </a>
                @endif
                <a href="{{route('category.list')}}" class="derakhti-action-btn-lg back">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    بازگشت به لیست
                </a>
            </div>

        </div>

    </div>
</div>

@endsection