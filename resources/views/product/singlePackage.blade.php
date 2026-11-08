@extends('dashboard')
@section('title','packageSingle')
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
    .derakhti-profile-card {
        background: var(--white);
        border: 1px solid var(--navy-line);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-sm);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
        max-width: 1200px;
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

    /* ===== هدر ===== */
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

    /* ===== دکمه بازگشت ===== */
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

    /* ===== بدنه ===== */
    .derakhti-profile-body {
        padding: 32px;
        background: var(--bg-page);
    }

    /* ===== اطلاعات ===== */
    .derakhti-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 12px;
        margin-bottom: 24px;
    }
    .derakhti-info-item {
        background: var(--bg-soft);
        border: 1.5px solid transparent;
        border-radius: var(--radius-md);
        padding: 14px 18px;
        transition: all 0.3s ease;
    }
    .derakhti-info-item:hover {
        border-color: var(--gold);
        background: var(--white);
        box-shadow: var(--shadow-sm);
    }
    .derakhti-info-item .label {
        color: var(--text-muted);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
        margin-bottom: 4px;
    }
    .derakhti-info-item .value {
        color: var(--navy);
        font-size: 15px;
        font-weight: 600;
        padding-right: 2px;
    }
    .derakhti-info-item .value .badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .derakhti-info-item .value .badge.active,
    .derakhti-info-item .value .badge.featured,
    .derakhti-info-item .value .badge.show-home {
        background: var(--gold);
        color: var(--navy);
        border: 1px solid var(--gold);
        box-shadow: 0 2px 8px rgba(251, 200, 48, 0.30);
    }
    .derakhti-info-item .value .badge.inactive {
        background: var(--bg-soft);
        color: var(--text-muted);
        border: 1px solid var(--navy-line);
    }

    /* ===== بخش‌ها ===== */
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
        width: 4px; height: 20px;
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

    /* ===== ویژگی‌ها ===== */
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
        color: var(--text-muted);
        font-size: 13px;
        font-weight: 500;
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

    /* ===== تصاویر ===== */
    .derakhti-media-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 16px;
    }
    .derakhti-media-item {
        position: relative;
        border-radius: var(--radius-md);
        overflow: hidden;
        border: 2px solid var(--navy-line);
        transition: all 0.3s ease;
        aspect-ratio: 1;
    }
    .derakhti-media-item:hover {
        border-color: var(--gold);
        transform: scale(1.03);
        box-shadow: var(--shadow-gold);
    }
    .derakhti-media-item img {
        width: 100%; height: 100%;
        object-fit: cover;
    }
    .derakhti-media-badge {
        position: absolute;
        top: 8px; right: 8px;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 700;
        color: var(--navy);
        box-shadow: 0 2px 6px rgba(14, 46, 72, 0.20);
    }
    .derakhti-media-badge.main {
        background: var(--gold);
    }
    .derakhti-media-badge.gallery {
        background: var(--gold-soft);
    }

    /* ===== دکمه‌ها ===== */
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

    /* ===== پکیج‌ها ===== */
    .derakhti-package-card {
        background: var(--bg-soft);
        border: 1.5px solid var(--navy-line);
        border-radius: var(--radius-md);
        padding: 16px 20px;
        transition: all 0.3s ease;
        margin-bottom: 12px;
    }
    .derakhti-package-card:hover {
        border-color: var(--gold);
        box-shadow: var(--shadow-sm);
    }
    .derakhti-package-card .package-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 12px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--navy-line);
    }
    .derakhti-package-card .package-title {
        color: var(--navy);
        font-size: 16px;
        font-weight: 700;
    }
    .derakhti-package-card .package-badge {
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
    }
    .derakhti-package-card .package-badge.active,
    .derakhti-package-card .package-badge.featured {
        background: var(--gold);
        color: var(--navy);
        border: 1px solid var(--gold);
        box-shadow: 0 2px 6px rgba(251, 200, 48, 0.25);
    }
    .derakhti-package-card .package-badge.inactive {
        background: var(--bg-soft);
        color: var(--text-muted);
        border: 1px solid var(--navy-line);
    }
    .derakhti-package-card .package-info {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 10px;
    }
    .derakhti-package-card .package-info-item .label {
        color: var(--text-muted);
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        display: block;
        margin-bottom: 2px;
    }
    .derakhti-package-card .package-info-item .value {
        color: var(--navy);
        font-size: 14px;
        font-weight: 600;
    }
    .derakhti-package-card .package-actions {
        display: flex;
        gap: 8px;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid var(--navy-line);
        flex-wrap: wrap;
    }
    .derakhti-package-card .package-actions .action-btn {
        padding: 6px 16px;
        border-radius: var(--radius-sm);
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        cursor: pointer;
    }
    .derakhti-package-card .package-actions .action-btn:hover {
        transform: translateY(-2px);
    }
    .derakhti-package-card .package-actions .action-btn.view {
        background: var(--white);
        color: var(--navy);
        border-color: var(--navy-line);
    }
    .derakhti-package-card .package-actions .action-btn.view:hover {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
    }
    .derakhti-package-card .package-actions .action-btn.edit {
        background: var(--gold);
        color: var(--navy);
        border-color: var(--gold);
    }
    .derakhti-package-card .package-actions .action-btn.edit:hover {
        background: var(--gold-deep);
        border-color: var(--gold-deep);
        box-shadow: var(--shadow-gold);
    }
    .derakhti-package-card .package-actions .action-btn.delete {
        background: #FEE2E2;
        color: #DC2626;
        border-color: #FCA5A5;
    }
    .derakhti-package-card .package-actions .action-btn.delete:hover {
        background: #DC2626;
        color: var(--white);
        border-color: #DC2626;
    }

    /* ===== ریسپانسیو ===== */
    @media (max-width: 768px) {
        .derakhti-profile-header { padding: 20px; }
        .derakhti-profile-header h2 { font-size: 18px; }
        .derakhti-profile-body { padding: 22px 20px 26px; }
        .derakhti-info-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
        .derakhti-media-grid {
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }
        .derakhti-package-card .package-info {
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }
        .derakhti-action-btn-lg { padding: 10px 20px; font-size: 13px; }
        .derakhti-back-btn { padding: 8px 16px; font-size: 13px; }
    }
    @media (max-width: 480px) {
        .derakhti-profile-header { padding: 16px; }
        .derakhti-profile-header h2 { font-size: 16px; }
        .derakhti-profile-header .header-icon { width: 40px; height: 40px; font-size: 18px; }
        .derakhti-profile-body { padding: 16px 14px 20px; }
        .derakhti-info-grid { grid-template-columns: 1fr 1fr; }
        .derakhti-info-item { padding: 10px 14px; }
        .derakhti-info-item .value { font-size: 13px; }
        .derakhti-media-grid {
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        }
        .derakhti-attr-item { padding: 6px 12px; font-size: 12px; }
        .derakhti-package-card { padding: 12px 14px; }
        .derakhti-package-card .package-info { grid-template-columns: 1fr 1fr; }
        .derakhti-action-buttons { flex-direction: column; }
        .derakhti-action-btn-lg { width: 100%; justify-content: center; }
    }
</style>

<div class="w-full flex justify-center py-6 px-4">
    <div class="derakhti-profile-card">

        <!-- ===== هدر ===== -->
        <div class="derakhti-profile-header">
            <div class="title-section">
                <div class="header-icon">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                        <circle cx="9" cy="13" r="2"/>
                        <circle cx="15" cy="13" r="2"/>
                        <path d="M9 13h6"/>
                    </svg>
                </div>
                <div>
                    <h2>نمایش پکیج</h2>
                    <div class="subtitle">مشاهده جزئیات پکیج {{$package->title}}</div>
                </div>
            </div>
            <a href="{{route('product.single',['product'=>$package->product->id])}}" class="derakhti-back-btn">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                بازگشت به محصول
            </a>
        </div>

        <!-- ===== بدنه ===== -->
        <div class="derakhti-profile-body">

            <!-- ===== اطلاعات اصلی ===== -->
            <div class="derakhti-info-grid">
                <div class="derakhti-info-item">
                    <span class="label"> شناسه</span>
                    <span class="value">#{{$package->id}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> عنوان</span>
                    <span class="value">{{$package['product']->title}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> قیمت</span>
                    <span class="value">{{$package->price}} تومان</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> تخفیف</span>
                    <span class="value">{{$package->discunt}}%</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> توضیحات</span>
                    <span class="value text-sm">{{$package->description}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> دسته‌بندی</span>
                    <span class="value">{{$package['product']->categories[0]->title ?? 'بدون دسته‌بندی'}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> خلاصه</span>
                    <span class="value text-sm">{{$package->summary}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> برند</span>
                    <span class="value">#{{$package['product']->brand_id}}</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> اسلاگ</span>
                    <span class="value text-sm">{{$package['product']->slug}}</span>
                </div>

                <div class="derakhti-info-item">
                    <span class="label"> موجودی</span>
                    <span class="value">{{$package->stock}} عدد</span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> وضعیت</span>
                    <span class="value">
                        <span class="badge {{$package->is_active ? 'active' : 'inactive'}}">
                            {{$package->is_active ? 'فعال' : 'غیرفعال'}}
                        </span>
                    </span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> نمایش در خانه</span>
                    <span class="value">
                        <span class="badge {{$package['product']->show_in_home ? 'show-home' : 'inactive'}}">
                            {{$package['product']->show_in_home ? '✅ نمایش داده می‌شود' : '❌ نمایش داده نمی‌شود'}}
                        </span>
                    </span>
                </div>
                <div class="derakhti-info-item">
                    <span class="label"> ویژه</span>
                    <span class="value">
                        <span class="badge {{$package->featured ? 'featured' : 'inactive'}}">
                            {{$package->featured ? '⭐ ویژه' : 'معمولی'}}
                        </span>
                    </span>
                </div>
            </div>

            <!-- ===== ویژگی‌ها ===== -->
            <div class="derakhti-section">
                <div class="derakhti-section-title">
                    <h3> ویژگی‌ها</h3>
                    <div class="line"></div>
                </div>
                <div class="derakhti-attr-list">
                    @forelse($package['attributes'] as $attribute)
                        <div class="derakhti-attr-item">
                            <span class="key">{{$attribute->title}}</span>
                            <span class="divider"></span>
                            <span class="val">{{$attribute->pivot->value}}</span>
                        </div>
                    @empty
                        <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ ویژگی‌ای ثبت نشده است</span>
                    @endforelse
                </div>
            </div>

            <!-- ===== تصاویر ===== -->
            <div class="derakhti-section">
                <div class="derakhti-section-title">
                    <h3> تصاویر</h3>
                    <div class="line"></div>
                </div>
                <div class="derakhti-media-grid">
                    @forelse($package['medias'] as $media)
                        <div class="derakhti-media-item">
                            <img src="{{asset('storage/package_medias/'.$media->path)}}" alt="{{$package->title}}">
                            <span class="derakhti-media-badge {{$media->is_main ? 'main' : 'gallery'}}">
                                {{$media->is_main ? 'اصلی' : 'گالری'}}
                            </span>
                        </div>
                    @empty
                        <span class="text-gray-400 dark:text-gray-500 text-sm">هیچ تصویری ثبت نشده است</span>
                    @endforelse
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    function showPackage(package_id) {
        console.log(package_id);
        // می‌توانید اینجا کد مورد نظر برای نمایش پکیج را اضافه کنید
        alert('نمایش پکیج با شناسه: ' + package_id);
    }
</script>

@endsection