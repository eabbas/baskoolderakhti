@extends('dashboard')

@section('title','ایجاد نقش')
@section('content')

<style>
    /* ===== پالت اختصاصی ===== */
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
    .vafadar-form-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        margin: 0 auto;
        position: relative;
    }
    .vafadar-form-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .vafadar-form-card:hover { box-shadow: var(--shadow-md); }

    /* ===== هدر فرم ===== */
    .vafadar-form-header {
        background: var(--navy);
        padding: 24px 32px;
        position: relative;
        overflow: hidden;
    }
    .vafadar-form-header::after {
        content: '';
        position: absolute;
        top: -40px; left: -40px;
        width: 160px; height: 160px;
        background: radial-gradient(circle, var(--gold-glow) 0%, transparent 70%);
        pointer-events: none;
    }
    .vafadar-form-header h1 {
        color: var(--white);
        font-size: 18px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 14px;
        position: relative;
        z-index: 1;
        margin: 0;
    }
    .vafadar-form-header .header-icon {
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
    .vafadar-form-header .sub-text {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
        margin-top: 4px;
        margin-right: 60px;
    }

    /* ===== فیلدها ===== */
    .vafadar-label {
        color: var(--navy);
        font-size: 13px;
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
        padding-right: 4px;
    }
    .vafadar-label::after {
        content: '';
        display: inline-block;
        width: 5px; height: 5px;
        background: var(--gold);
        border-radius: 50%;
        margin-right: 6px;
        vertical-align: middle;
        opacity: 0.8;
    }

    .vafadar-input {
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
    .vafadar-input::placeholder {
        color: var(--text-placeholder);
        font-size: 13px;
    }
    .vafadar-input:hover {
        background: var(--white);
        border-color: var(--navy-line);
    }
    .vafadar-input:focus {
        background: var(--white);
        border-color: var(--gold);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.15);
    }

    /* ===== بخش دسترسی‌ها ===== */
    .vafadar-permisions-box {
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        padding: 8px 4px;
        max-height: 160px;
        overflow-y: auto;
        transition: all 0.3s ease;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .vafadar-permisions-box:hover { border-color: var(--navy-line); }
    .vafadar-permisions-box:focus-within {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    .vafadar-permisions-box::-webkit-scrollbar { width: 6px; }
    .vafadar-permisions-box::-webkit-scrollbar-track { background: transparent; }
    .vafadar-permisions-box::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .vafadar-permisions-box::-webkit-scrollbar-thumb:hover {
        background: var(--gold-deep);
    }

    .vafadar-permision-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 12px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s ease;
        margin: 1px 0;
    }
    .vafadar-permision-item:hover {
        background: rgba(251, 200, 48, 0.10);
        transform: translateX(4px);
    }
    .vafadar-permision-item label,
    .vafadar-permision-item span {
        color: var(--navy);
        font-size: 13px;
        cursor: pointer;
        user-select: none;
        transition: color 0.2s ease;
    }
    .vafadar-permision-item:hover label,
    .vafadar-permision-item:hover span {
        color: var(--gold-deep);
    }

    .vafadar-checkbox {
        width: 18px; height: 18px;
        accent-color: var(--gold-deep);
        cursor: pointer;
        border-radius: 5px;
        transition: transform 0.2s ease;
        flex-shrink: 0;
    }
    .vafadar-checkbox:hover { transform: scale(1.1); }

    /* ===== دکمه ثبت ===== */
    .vafadar-btn {
        width: 100%;
        padding: 15px 24px;
        background: var(--gold);
        border: none;
        border-radius: var(--radius-md);
        color: var(--navy);
        font-size: 15px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 6px 20px rgba(251, 200, 48, 0.35);
        position: relative;
        overflow: hidden;
    }
    .vafadar-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .vafadar-btn:hover::before { left: 100%; }
    .vafadar-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }
    .vafadar-btn:active { transform: translateY(0) scale(0.98); }

    .vafadar-btn svg {
        width: 18px; height: 18px;
        fill: var(--navy);
        transition: transform 0.3s ease;
    }
    .vafadar-btn:hover svg { transform: translateX(4px); }

    /* ===== بخش‌های فرم ===== */
    .vafadar-form-section { padding: 20px 28px; }
    .vafadar-form-section:last-of-type { border-bottom: none; }

    .vafadar-section-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }
    .vafadar-section-title svg {
        width: 18px; height: 18px;
        fill: var(--gold-deep);
    }
    .vafadar-section-title span {
        color: var(--navy);
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .vafadar-section-title .line {
        flex: 1;
        height: 1px;
        background: var(--navy-line);
    }

    /* ===== فوتر ===== */
    .vafadar-form-footer {
        padding: 16px 28px;
        background: var(--bg-soft);
        border-top: 1px solid var(--navy-line);
        text-align: center;
    }
    .vafadar-form-footer span {
        color: var(--text-muted);
        font-size: 12px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .vafadar-form-header { padding: 20px; }
        .vafadar-form-header h1 { font-size: 16px; }
        .vafadar-form-header .sub-text { margin-right: 0; }
        .vafadar-form-section { padding: 16px 20px; }
        .vafadar-form-footer { padding: 12px 20px; }
        .vafadar-input { padding: 10px 14px; font-size: 13px; }
        .vafadar-permision-item { padding: 6px 10px; }
        .vafadar-permision-item span { font-size: 12px; }
        .vafadar-btn { padding: 13px 20px; font-size: 14px; }
    }

    /* ===== انیمیشن ===== */
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(15px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .animate-in {
        animation: fadeSlideUp 0.4s ease forwards;
        opacity: 0;
    }
    .animate-in:nth-child(1) { animation-delay: 0.05s; }
    .animate-in:nth-child(2) { animation-delay: 0.1s; }
    .animate-in:nth-child(3) { animation-delay: 0.15s; }
    .animate-in:nth-child(4) { animation-delay: 0.2s; }
    .animate-in:nth-child(5) { animation-delay: 0.25s; }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="w-full vafadar-form-card">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h1>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </span>
                ایجاد نقش جدید
            </h1>
            <p class="sub-text">نقش کاربری را با دسترسی‌های مشخص تعریف کنید</p>
        </div>

        <!-- ===== فرم ===== -->
        <form action="{{route('role.store')}}" method="post">
            @csrf

            <!-- ===== بخش اطلاعات نقش ===== -->
            <div class="vafadar-form-section animate-in">
                <div class="vafadar-section-title">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    <span>اطلاعات نقش</span>
                    <div class="line"></div>
                </div>

                <div class="space-y-4 grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div>
                        <label class="vafadar-label"> عنوان فارسی</label>
                        <input type="text" name="fa_title" placeholder="مثلاً مدیر_سیستم" class="vafadar-input">
                    </div>
                    <div>
                        <label class="vafadar-label"> عنوان انگلیسی</label>
                        <input type="text" name="ea_title" placeholder="مثلاً admin" class="vafadar-input">
                    </div>
                </div>
            </div>

            <!-- ===== بخش دسترسی‌ها ===== -->
            <div class="vafadar-form-section animate-in">
                <div class="vafadar-section-title">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                    </svg>
                    <span>دسترسی‌های نقش</span>
                    <div class="line"></div>
                </div>

                <div class="vafadar-permisions-box">
                    @foreach($permisions as $permision)
                    <label class="vafadar-permision-item">
                        <span>{{$permision->fa_title}}</span>
                        <input type="checkbox" name="permisions[]" value="{{$permision->id}}" class="vafadar-checkbox">
                    </label>
                    @endforeach            
                </div>
                <p class="text-xs text-[#9A9CAE] mt-2 pr-1">* برای انتخاب چند دسترسی، گزینه‌های مورد نظر را علامت بزنید</p>
            </div>

            <!-- ===== دکمه ثبت ===== -->
            <div class="vafadar-form-section animate-in">
                <button type="submit" class="vafadar-btn">
                    <span>ایجاد نقش</span>
                    <svg viewBox="0 0 24 24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </button>
            </div>

        </form>

        <!-- ===== فوتر ===== -->
        <div class="vafadar-form-footer">
            <span>© ۱۴۰۳ · تمام حقوق محفوظ است</span>
        </div>

    </div>
</div>

@endsection