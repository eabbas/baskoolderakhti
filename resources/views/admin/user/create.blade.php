@extends('dashboard')

@section('title','پروفایل')
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
    .vafadar-user-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        padding: 0;
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
    }
    .vafadar-user-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--gold) 0%, var(--gold-deep) 100%);
        z-index: 1;
    }
    .vafadar-user-card:hover { box-shadow: var(--shadow-md); }

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
    .vafadar-form-header h2 {
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
    .vafadar-form-header p {
        color: rgba(255, 255, 255, 0.6) !important;
        font-size: 14px;
        margin-top: 4px;
        margin-right: 60px;
    }

    /* ===== بدنه فرم (بین هدر و فوتر) ===== */
    .vafadar-user-card > form {
        padding: 28px 32px 0;
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

    /* ===== چک‌باکس‌ها ===== */
    .vafadar-checkbox-wrap {
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-sm);
        padding: 6px 4px;
        max-height: 130px;
        overflow-y: auto;
        transition: all 0.3s ease;
        scrollbar-width: thin;
        scrollbar-color: var(--gold) transparent;
    }
    .vafadar-checkbox-wrap:hover {
        border-color: var(--navy-line);
    }
    .vafadar-checkbox-wrap:focus-within {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(251, 200, 48, 0.12);
    }
    .vafadar-checkbox-wrap::-webkit-scrollbar { width: 6px; }
    .vafadar-checkbox-wrap::-webkit-scrollbar-track { background: transparent; }
    .vafadar-checkbox-wrap::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 10px;
    }
    .vafadar-checkbox-wrap::-webkit-scrollbar-thumb:hover {
        background: var(--gold-deep);
    }

    .vafadar-checkbox-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 14px;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    .vafadar-checkbox-item:hover {
        background: rgba(251, 200, 48, 0.10);
    }
    .vafadar-checkbox-item span {
        color: var(--navy);
        font-size: 13px;
    }

    .vafadar-checkbox {
        width: 18px; height: 18px;
        accent-color: var(--gold-deep);
        cursor: pointer;
        border-radius: 5px;
        flex-shrink: 0;
        transition: transform 0.2s ease;
    }
    .vafadar-checkbox:hover {
        transform: scale(1.1);
    }

    /* ===== دکمه ثبت ===== */
    .vafadar-submit-btn {
        width: 100%;
        padding: 15px;
        background: var(--gold);
        border: none;
        border-radius: var(--radius-md);
        color: var(--navy);
        font-size: 16px;
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
        letter-spacing: -0.2px;
    }
    .vafadar-submit-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }
    .vafadar-submit-btn:hover::before { left: 100%; }
    .vafadar-submit-btn:hover {
        background: var(--gold-deep);
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(251, 200, 48, 0.45);
    }
    .vafadar-submit-btn:active {
        transform: translateY(0) scale(0.98);
    }
    .vafadar-submit-btn svg {
        fill: var(--navy) !important;
    }

    /* ===== بخش عنوان نقش‌ها ===== */
    .vafadar-role-title {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }
    .vafadar-role-title span {
        color: var(--navy);
        font-size: 13px;
        font-weight: 600;
        padding-right: 4px;
    }
    .vafadar-role-title span::after {
        content: '';
        display: inline-block;
        width: 5px; height: 5px;
        background: var(--gold);
        border-radius: 50%;
        margin-right: 6px;
        vertical-align: middle;
        opacity: 0.8;
    }
    .vafadar-role-title .line {
        flex: 1;
        height: 1px;
        background: var(--navy-line);
    }

    /* ===== فوتر ===== */
    .vafadar-footer {
        text-align: center;
        padding: 20px 32px 24px;
        color: var(--text-muted);
        font-size: 12px;
        border-top: 1px solid var(--navy-line);
        margin-top: 24px;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 640px) {
        .vafadar-form-header { padding: 20px; }
        .vafadar-form-header h2 { font-size: 18px; }
        .vafadar-form-header p { margin-right: 0; }
        .vafadar-user-card > form { padding: 22px 20px 0; }
        .vafadar-footer { padding: 16px 20px 20px; }
        .vafadar-input { padding: 10px 14px; font-size: 13px; }
        .vafadar-checkbox-item { padding: 6px 10px; }
        .vafadar-checkbox-item span { font-size: 12px; }
        .vafadar-submit-btn { padding: 13px; font-size: 14px; }
    }
    @media (max-width: 480px) {
        .vafadar-form-header { padding: 16px; }
        .vafadar-form-header h2 { font-size: 16px; }
        .vafadar-form-header .header-icon { width: 38px; height: 38px; }
        .vafadar-user-card > form { padding: 16px 14px 0; }
        .vafadar-footer { padding: 14px 14px 16px; }
        .vafadar-input { padding: 9px 12px; font-size: 12px; }
        .vafadar-checkbox { width: 16px; height: 16px; }
        .vafadar-checkbox-item { padding: 5px 8px; }
        .vafadar-checkbox-item span { font-size: 11px; }
        .vafadar-submit-btn { padding: 12px; font-size: 14px; }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="vafadar-user-card w-full">

        <!-- ===== هدر ===== -->
        <div class="vafadar-form-header">
            <h2>
                <span class="header-icon">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                        <circle cx="9" cy="13" r="2"/>
                        <circle cx="15" cy="13" r="2"/>
                        <path d="M9 13h6"/>
                    </svg>
                </span>
                ایجاد کاربر جدید
            </h2>
            <p class="text-sm text-[#9A9CAE] mt-1 mr-12">اطلاعات کاربر را وارد کنید</p>
        </div>
        <!-- ===== فرم ===== -->
        <form action="{{route('user.createUser')}}" method="post" class='grid grid-cols-1 sm:grid-cols-2 gap-2'>
            @csrf

            <!-- نام -->
            <div class="mb-4">
                <label class="vafadar-label"> نام</label>
                <input type="text" name="name" placeholder="نام خود را وارد کنید" class="vafadar-input" required>
            </div>

            <!-- نام خانوادگی -->
            <div class="mb-4">
                <label class="vafadar-label"> نام خانوادگی</label>
                <input type="text" name="family" placeholder="نام خانوادگی خود را وارد کنید" class="vafadar-input">
            </div>

            <!-- شماره موبایل -->
            <div class="mb-4">
                <label class="vafadar-label"> شماره موبایل</label>
                <input type="tel" name="phoneNumber" placeholder="مثلاً 09123456789" class="vafadar-input" required>
            </div>

            <!-- ایمیل -->
            <div class="mb-4">
                <label class="vafadar-label"> ایمیل</label>
                <input type="text" name="email" placeholder="example@gmail.com" class="vafadar-input">
            </div>

            <!-- رمز عبور -->
            <div class="mb-4">
                <label class="vafadar-label"> رمز عبور</label>
                <input type="password" name="password" placeholder="رمز عبور را وارد کنید" class="vafadar-input" required>
            </div>

            <!-- نقش‌ها -->
            <div class="mb-4">
                <div class="vafadar-role-title">
                    <span> نقش‌های کاربر</span>
                    <div class="line"></div>
                </div>
                <div class="vafadar-checkbox-wrap">
                    @foreach($roles as $role)
                    <label class="vafadar-checkbox-item">
                        <span>{{$role->fa_title}}</span>
                        <input type="checkbox" name="roles[]" value="{{$role->id}}" class="vafadar-checkbox">
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- دکمه ثبت -->
            <button type="submit" class="vafadar-submit-btn sm:col-span-2">
                <span>ثبت نام کاربر</span>
                <svg class="w-[18px] h-[18px] fill-white" viewBox="0 0 24 24">
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                </svg>
            </button>

        </form>

        <!-- ===== فوتر ===== -->
        <div class="vafadar-footer">
            <span>© ۱۴۰۳ · تمام حقوق محفوظ است</span>
        </div>

    </div>
</div>

@endsection