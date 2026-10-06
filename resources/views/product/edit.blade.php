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

    /* ===== هدر ===== */
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

    .derakhti-form-header .sub-text {
        color: #9A9CAE;
        font-size: 14px;
        margin-top: 4px;
        margin-right: 48px;
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
        border-color: var(--metronic-primary-light);
    }
    .derakhti-input:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
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
        cursor: pointer;
    }
    .derakhti-select:hover {
        border-color: var(--metronic-primary-light);
    }
    .derakhti-select:focus {
        border-color: var(--metronic-primary);
        box-shadow: 0 0 0 4px rgba(27, 132, 255, 0.08);
        background: var(--metronic-bg-form);
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
        font-size: 16px;
        font-weight: 700;
        padding: 10px 16px;
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-dark));
        border-radius: 12px 12px 0 0;
        color: #fff;
        text-align: center;
        margin: -16px -20px 16px;
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.15);
    }

    .derakhti-attr-item {
        position: relative;
        display: inline-flex;
        align-items: center;
        background: var(--metronic-bg-form);
        border-radius: 10px;
        border: 1.5px solid var(--metronic-border);
        padding: 4px 12px 4px 4px;
        animation: slideIn 0.3s ease;
        gap: 4px;
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
        font-weight: 600;
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

    /* ===== دکمه‌ها ===== */
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

    .derakhti-btn-danger {
        background: var(--metronic-danger);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .derakhti-btn-danger:hover {
        transform: scale(1.15);
        background: #b91c1c;
    }

    /* ===== پکیج ===== */
    .derakhti-package-box {
        position: relative;
        background: #F5F5F5;
        border: 2px solid var(--metronic-success);
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
        border-bottom: 2px solid var(--metronic-success);
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

    .derakhti-tag-main {
        background: var(--metronic-success);
        color: #fff;
        font-weight: 700;
        border-radius: 9999px;
        padding: 2px 10px;
        font-size: 9px;
        position: absolute;
        top: 4px;
        left: 4px;
    }
    .derakhti-tag-gallery {
        background: var(--metronic-primary);
        color: #fff;
        font-weight: 700;
        border-radius: 9999px;
        padding: 2px 10px;
        font-size: 9px;
        position: absolute;
        top: 4px;
        left: 4px;
    }

    .derakhti-media-container {
        display: flex;
        gap: 12px;
        padding: 12px;
        overflow-x: auto;
        background: #F5F5F5;
        border-radius: 12px;
        border: 2px dashed var(--metronic-border);
        min-height: 120px;
        align-items: center;
    }
    .derakhti-media-container img {
        min-width: 100px;
        max-width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        border: 3px solid var(--metronic-bg-form);
        box-shadow: 0 4px 12px rgba(27, 132, 255, 0.08);
    }
    .derakhti-media-item {
        position: relative;
        flex-shrink: 0;
    }

    .derakhti-category-badge {
        background: rgba(27, 132, 255, 0.10);
        color: #1e293b;
        font-weight: 700;
        padding: 10px 24px;
        border-radius: 12px;
        display: inline-block;
        border: 1px solid var(--metronic-primary);
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

    /* ===== اسکرول ===== */
    .derakhti-media-container::-webkit-scrollbar {
        height: 6px;
    }
    .derakhti-media-container::-webkit-scrollbar-track {
        background: #F5F5F5;
        border-radius: 10px;
    }
    .derakhti-media-container::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--metronic-primary), var(--metronic-primary-light));
        border-radius: 10px;
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
            <div class="derakhti-grid grid grid-cols-2 gap-6">

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