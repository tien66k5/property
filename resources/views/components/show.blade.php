@extends('property::layouts.master')
@section('content')

<div class="hlg:max-w-[936px] 2xl:max-w-[1140px] block m-auto lg:flex gap-10 mt-4">
    <section class="lg:w-[65%]">
        <!-- Phần Swiper - Hình ảnh mẫu -->
        <section class="hidden md:block w-full max-h-[600px]" id="images">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper bat-dong-san-swipe">
                <div class="swiper-wrapper mb-2">
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0">
                        <img src="./../assets/imgs/bds1.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds2.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds3.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds4.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds5.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds6.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds7.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds8.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds9.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds10.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                    <div class="swiper-slide cursor-pointer w-full px-4 lg:p-0 ">
                        <img src="./../assets/imgs/bds11.jpg" class="w-full h-[460px] object-cover rounded-lg" />
                    </div>
                </div>
                <div class="swiper-button-next bg-white max-w-[31px] max-h-[31px] text-black rounded"></div>
                <div class="swiper-button-prev bg-white max-w-[31px] max-h-[31px] text-black rounded"></div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper px-4 w-full lg:px-0">
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds1.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds2.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds3.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds4.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds5.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds6.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds7.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds8.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds9.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds10.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="./../assets/imgs/bds11.jpg" class="rounded min-w-full h-[80px] object-cover" />
                    </div>
                </div>
            </div>
        </section>


        <!-- Phần carousel - Hình ảnh mẫu Responsive mobile-->
        <section id="carouselMobile" class="md:hidden">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds4.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds5.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds6.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds7.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds8.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds9.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-200 ease-in-out" data-carousel-item>
                        <img src="./../assets/imgs/bds10.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>

                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>

        <!-- Phần Chỉ mục -->
        <section class="text-neutral-400 text-sm md:text-base mx-8 lg:mx-0 mt-6 mb-2" id="index">
            Cho thuê / Hồ Chí Minh / Quận 9 /
            <span class="text-black">Căn hộ chung cư tại Vinhomes Grand Park</span>
        </section>


        <!-- Phần tên của dự án bds -->
        <section id="bdsName" class="mx-8 lg:mx-0">
            <h1 class="font-bold text-lg md:text-2xl">Giỏ hàng 3000 căn hộ Grand Park - Có Web chọn căn theo nhu cầu
                - Đầy đủ
                loại
                Giá từ 4tr/tháng</h1>
            <span class="text-sm">Dự án Vinhomes Grand Park, Phường Long Thạnh Mỹ, Quận 9, Hồ Chí Minh</span>
        </section>


        <!-- Phần giá/thông tin của dự án bds -->
        <section id="bdsValue" class="pt-6 mt-4 border-t border-t-neutral-200 mx-8 lg:mx-0">
            <div class="flex items-center gap-5 md:gap-16">
                <div class="flex flex-col">
                    <span class="text-neutral-400 text-sm md:text-base">Mức giá</span>
                    <span class="md:text-lg font-bold">5,5 triệu/tháng</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-neutral-400 text-sm md:text-base">Diện tích</span>
                    <span class="md:text-lg font-bold">70 m²</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-neutral-400 text-sm md:text-base">Phòng ngủ</span>
                    <span class="md:text-lg font-bold">2 PN</span>
                </div>


                <div class="sm:flex items-center ml-auto gap-4 hidden">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>
                    </a>


                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </a>

                </div>
            </div>

            <!-- Phần biến động giá của bds -->
            <!-- Biến động giá giảm -->

            <div class="border border-red-400 flex items-center p-2 gap-2 rounded mt-4">
                <div class="bg-red-200 flex items-center p-1 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-red-500 size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />

                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                    </svg>
                    <spa class="text-red-500 font-bold text-sm">6.7%</spa>
                </div>
                <div class="sm:flex sm:items-center sm:justify-between sm:w-full text-sm">
                    <span class="text-sm">Giá tại dự án này đã tăng trong 1 năm qua.</span>
                    <a href="#" class="ml-auto text-sm text-green-300 font-bold text-teal-700 flex items-center">
                        Xem lịch sử giá
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div>

            </div>

            <!-- Biến động giá tăng/Tạm thời tắt -->

            <!-- <div class="border border-green-400 flex items-center p-2 gap-2 rounded mt-4">
                    <div class="bg-green-100 flex items-center p-1 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                        </svg>
                        <spa class="text-green-600 font-bold text-sm">6.7%</spa>
                    </div>
                    <span class="text-sm">Giá tại dự án này đã tăng trong 1 năm qua.</span>
                    <a href="#" class="ml-auto text-sm text-green-300 font-bold text-teal-700 flex items-center">
                        Xem lịch sử giá
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div> -->


            <!-- Phần thông mô tả tin bds -->
            <section id="bdsInform" class="my-10">
                <h1 class="font-bold text-lg">Thông tin mô tả</h1>
                <article class="text-sm">
                    <p>Bạn có thể tự chọn căn phù hợp theo nhu cầu và ngân sách ngay trên web giỏ hàng riêng của
                        công ty, với hơn 3.000 căn hộ đang cho thuê tại Vinhomes Grand Park, Quận 9.</p>
                    <br>
                    <p>Nhắn Zalo em 0826 022 *** để nhận link chọn căn (miễn phí).</p>
                    <br>
                    <p>Các loại căn hộ đang cho thuê giá tham khảo:</p>

                    <p>Studio:<br>
                        Căn trống: Từ 4 triệu/tháng.<br>
                        Có bếp rèm: Từ 4.5 triệu/tháng.<br>
                        Full nội thất: Từ 5,5 – 6,5 triệu/tháng.</p>

                    <br>
                    <p>1PN / 1PN+:<br>
                        Căn trống: Từ 5 triệu/tháng.<br>
                        Có bếp rèm: Từ 5,5 – 6 triệu/tháng.<br>
                        Full nội thất: Từ 6,5 – 7,5 triệu/tháng.</p>

                    <br>
                    <p>2PN / 2PN 2WC:<br>
                        Căn trống: Từ 5,5 triệu/tháng.<br>
                        Có bếp rèm: Từ 6 – 6,5 triệu/tháng.<br>
                        Full nội thất: Từ 7 – 8 triệu/tháng.</p>

                    <br>
                    <p>3PN:<br>
                        Căn trống: Từ 7,5 triệu/tháng.<br>
                        Có bếp rèm: Từ 8 – 9 triệu/tháng.<br>
                        Full nội thất: Từ 9 – 12 triệu/tháng.</p>

                    <br>
                    <p>Giá tùy view, nội thất, tầng & thời điểm liên hệ để nhận căn đẹp giá tốt hôm nay!</p>

                    <br>

                    <p>Lý do nên sống tại Vinhomes Grand Park:<br>
                        - Công viên trung tâm 36ha, hồ bơi, gym, BBQ miễn phí.<br>
                        - Trung tâm thương mại Vincom, Vinmec, trường quốc tế ngay trong khu.<br>
                        - Khu compound an ninh 24/7, sảnh đón như khách sạn.<br>
                        - Cộng đồng cư dân văn minh, tiện ích tất cả trong một.</p>
                    <br>
                    <p>Zalo tư vấn 24/7: 0826 022 ***<br>
                        Văn phòng Nhất Thanh Land – Tòa Angelica, Lumiere Boulevard, Vinhomes Grand Park, Quận 9.
                    </p>
                </article>

            </section>

            <!-- Phần đặc điểm bất động sản -->
            <section id="features w-full" class="mb-10">
                <h1 class="text-lg font-bold mb-6">Đặc điểm bất động sản</h1>
                <div class="sm:grid sm:grid-cols-2">
                    <!--  Item đầu có border ở trên -->
                    <div
                        class="flex items-center w-1/3 sm:border-b w-full p-2.5 sm:border-b-neutral-200 border-t border-t-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-4 mr-2">
                            <path
                                d="M288 32c-17.7 0-32 14.3-32 32l-32 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 0 49.1c-18.8-10.9-40.7-17.1-64-17.1c-70.7 0-128 57.3-128 128s57.3 128 128 128c24.5 0 47.4-6.9 66.8-18.8c5 11.1 16.2 18.8 29.2 18.8c17.7 0 32-14.3 32-32l0-96 0-160c17.7 0 32-14.3 32-32s-14.3-32-32-32c0-17.7-14.3-32-32-32zM128 288a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM32 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l320 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 448z" />
                        </svg>

                        <span class="font-semibold w-1/2 text-sm">Mức giá</span>
                        <span class="text-sm">5,5 triệu/tháng</span>
                    </div>
                    <div
                        class="flex items-center w-1/3 border-b w-full p-2.5 border-b-neutral-200 border-t border-t-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4 mr-2">
                            <path
                                d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3L32 256c-17.7 0-32 14.3-32 32s14.3 32 32 32l448 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 256 96 77.3zM32 352l0 16c0 28.4 12.4 54 32 71.6L64 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-16 256 0 0 16c0 17.7 14.3 32 32 32s32-14.3 32-32l0-40.4c19.6-17.6 32-43.1 32-71.6l0-16L32 352z" />
                        </svg>

                        <span class="font-semibold w-1/2 text-sm">Số phòng tắm, vệ sinh</span>
                        <span class="text-sm">
                            2 phòng</span>
                    </div>
                    <div class="flex items-center w-1/3 border-b w-full p-2.5 border-b-neutral-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-4 mr-2">
                            <path
                                d="M200 32L56 32C42.7 32 32 42.7 32 56l0 144c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l40-40 79 79-79 79L73 295c-6.9-6.9-17.2-8.9-26.2-5.2S32 302.3 32 312l0 144c0 13.3 10.7 24 24 24l144 0c9.7 0 18.5-5.8 22.2-14.8s1.7-19.3-5.2-26.2l-40-40 79-79 79 79-40 40c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8l144 0c13.3 0 24-10.7 24-24l0-144c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2l-40 40-79-79 79-79 40 40c6.9 6.9 17.2 8.9 26.2 5.2s14.8-12.5 14.8-22.2l0-144c0-13.3-10.7-24-24-24L312 32c-9.7 0-18.5 5.8-22.2 14.8s-1.7 19.3 5.2 26.2l40 40-79 79-79-79 40-40c6.9-6.9 8.9-17.2 5.2-26.2S209.7 32 200 32z" />
                        </svg>

                        <span class="font-semibold w-1/2 text-sm">Diện tích</span>
                        <span class="text-sm">70 m²</span>
                    </div>
                    <div class="flex items-center w-1/3 border-b w-full p-2.5 border-b-neutral-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-4 mr-2">
                            <path
                                d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                        </svg>

                        <span class="font-semibold w-1/2 text-sm">Tiện ích</span>
                        <span class="text-sm">Camera, Bảo vệ, PCCC</span>
                    </div>
                    <div class="flex items-center w-1/3 border-b w-full p-2.5 border-b-neutral-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="size-4 mr-2">
                            <path
                                d="M32 32c17.7 0 32 14.3 32 32l0 256 224 0 0-160c0-17.7 14.3-32 32-32l224 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-32-224 0-32 0L64 416l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32L0 64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                        </svg>

                        <span class="font-semibold w-1/2 text-sm">Số phòng ngủ</span>
                        <span class="text-sm">
                            2 phòng</span>
                    </div>
                    <div class="flex items-center w-1/3 border-b w-full p-2.5 border-b-neutral-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="size-4 mr-2">
                            <path
                                d="M64 160C64 89.3 121.3 32 192 32l256 0c70.7 0 128 57.3 128 128l0 33.6c-36.5 7.4-64 39.7-64 78.4l0 48-384 0 0-48c0-38.7-27.5-71-64-78.4L64 160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48l0 176c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32L96 448c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32L0 272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3l0 48 0 32 32 0 384 0 32 0 0-32 0-48z" />
                        </svg>

                        <span class="font-semibold w-1/2 font-sm">Nội thất</span>
                        <span class="font-sm">Trống</span>
                    </div>
                </div>
            </section>


            <!-- Phần thông tin phụ của dự án -->
            <section id="subInform">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-lg font-bold h">Thông tin dự án</h1>
                    <a href="javascript:void(0)"
                        class="text-sm text-red-600  flex items-center font-semibold hidden sm:flex">
                        Xem 105 tin đăng cho thuê
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center gap-2 p-4 border border-neutral-300 rounded-lg">
                    <a href="#">
                        <img src="./../assets/imgs/subInform.png" alt="" class="max-w-[76px] max-h-[76px]">

                    </a>
                    <div class="">
                        <span class="font-bold text-sm">Vinhomes Grand Park</span>
                        <div class="">
                            <span class="text-neutral-500 text-sm">Đang mở bán</span>
                            <span class="text-neutral-500 text-sm">11 - 12,7 triệu/tháng</span>
                            <span class="text-neutral-500 text-sm">
                                71</span>
                        </div>
                        <span class="text-neutral-500 text-sm flex items-center">

                            Tập đoàn Vingroup
                        </span>
                    </div>
                </div>
                <a href="javascript:void(0)"
                    class="text-sm text-red-600  flex items-center font-semibold sm:hidden justify-center pt-3">
                    Xem 105 tin đăng cho thuê
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </section>

            <!-- Phần bản đồ BDS -->
            <section id="bdsMap" class="mb-6 mt-10">
                <h1 class="text-lg font-bold">Xem trên bản đồ</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4204947425224!2d105.7556471116419!3d9.982081490081226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2sFPT%20Polytechnic%20College!5e0!3m2!1sen!2s!4v1750233998542!5m2!1sen!2s"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-[165px] md:h-[400px]"></iframe>
            </section>

            <!-- Phần môi giới Responsive  Mobile -> tablet  -->

            <section id="agencyMobile" style="background: linear-gradient(90.62deg, #009194 0%, #004142 100%);"
                class="rounded-lg pt-4 pb-px lg:hidden">
                <div class="flex items-center px-4 gap-3 relative">
                    <div class="min-w-[80px] max-w-[80px]"></div>
                    <h1 class="w-full pr-4 text-white font-semibold w-full">Môi giới chuyên nghiệp</h1>
                </div>
                <div class="bg-white mr-1 ml-1 mb-1 mt-2 rounded">
                    <div class="relative flex items-center px-4 pb-4">
                        <a href="#" class="mr-3 relative z-10">
                            <img src="https://i.redd.it/8n14e28ef25c1.png" alt=""
                                class="max-w-[80px] max-h-[80px] rounded-full -mt-6" />
                        </a>
                        <span class="font-semibold w-full">Nguyễn Văn Thanh Nhã</span>
                    </div>
                    <div class="flex items-center">
                        <div
                            class="w-1/2 flex flex-col items-center px-4 py-3 text-center relative after:absolute after:top-1/2 after:right-0 after:translate-y-[-50%] after:h-6 after:w-px after:bg-gray-300">
                            <span class="text-xs w-[65%] leading-4">Tham gia GoldenBeeLTD</span>
                            <span class="text-lg font-bold">2 năm</span>
                        </div>

                        <div class="w-1/2 flex flex-col items-center px-4 py-3 text-center">
                            <span class="text-xs w-[65%] leading-4">Tin đăng đang có</span>
                            <span class="text-lg font-bold">24</span>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="flex items-center gap-3 bg-yellow-50 rounded p-3 my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                class="size-6 text-yellow-500" fill="currentColor">
                                <path
                                    d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                            </svg>
                            <p class="text-sm"><span class="font-semibold">Có 4 tin </span> căn hộ chung cư cùng dự
                                án
                                Vinhomes Grand Park</p>
                        </div>
                        <a href="#" class="font-semibold flex items-center justify-center text-sm">
                            Xem trang cá nhân
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-3 ml-2">
                                <path
                                    d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col items-center p-4 gap-2">
                        <a href="javascript:void(0)"
                            class="cursor-pointer w-full flex justify-center items-center p-3 border rounded-lg border-neutral-300">
                            <span class="font-semibold flex items-center text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                    viewBox="0 0 48 48">
                                    <path fill="#2962ff"
                                        d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z">
                                    </path>
                                    <path fill="#eee"
                                        d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z">
                                    </path>
                                    <path fill="#2962ff"
                                        d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z">
                                    </path>
                                    <path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z">
                                    </path>
                                    <path fill="#2962ff"
                                        d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z">
                                    </path>
                                    <path fill="#2962ff"
                                        d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z">
                                    </path>
                                </svg>
                                Chat qua Zalo
                            </span>
                        </a>
                        <a href="javascript:void(0)"
                            class="cursor-pointer bg-cyan-600 rounded-lg w-full flex justify-center items-center p-3">
                            <span class="text-sm font-semibold text-white flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="size-5 text-white mr-2" fill="currentColor">
                                    <path
                                        d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                                </svg>
                                0826 022 *** · Hiện số</span>
                        </a>
                    </div>
                </div>

            </section>
        </section>

        <!-- Phần quảng cáo tính năng xem lịch sử giá -->
        <section id="valueHistoryAds">

        </section>


        <!-- Phần ngày đăng -->
        <section id="postDate"
            class="grid grid-cols-2 border-t border-b py-4 mt-4 mb-10 border-neutral-300 sm:flex items-center gap-16 mx-8 lg:mx-0">
            <div class="flex flex-col">
                <span class="text-neutral-400 text-sm sm:text-base">Ngày đăng</span>
                <span class="font-semibold text-sm sm:text-base">17/06/2025</span>
            </div>
            <div class="flex flex-col">
                <span class="text-neutral-400 text-sm sm:text-base">Ngày hết hạn</span>
                <span class="font-semibold text-sm sm:text-base">24/06/2025</span>
            </div>
            <div class="flex flex-col">
                <span class="text-neutral-400 text-sm sm:text-base">Loại tin</span>
                <span class="font-semibold text-sm sm:text-base">Tin VIP Kim Cương</span>
            </div>
            <div class="flex flex-col">
                <span class="text-neutral-400 text-sm sm:text-base">Mã tin</span>
                <span class="font-semibold text-sm sm:text-base">42876822</span>
            </div>
        </section>
    </section>


    <!-- Sidebar -->
    <section class="max-w-full hidden lg:block">


        <!-- Phần môi giới -->
        <section id="agency" style="background: linear-gradient(90.62deg, #009194 0%, #004142 100%);"
            class="rounded-lg pt-4 sticky top-0 pb-px">
            <h1 class="w-full text-right pr-4 text-white font-semibold">Môi giới chuyên nghiệp</h1>
            <div class="bg-white mr-1 ml-1 mb-1 mt-2 rounded">
                <div class="relative flex items-center px-4 pb-4">
                    <a href="#" class="mr-3 relative z-10">
                        <img src="https://i.redd.it/8n14e28ef25c1.png" alt=""
                            class="max-w-[80px] max-h-[80px] rounded-full -mt-6" />
                    </a>
                    <span class="font-semibold w-full text-right">Nguyễn Văn Thanh Nhã</span>
                </div>
                <div class="flex items-center">
                    <div
                        class="w-1/2 flex flex-col items-center px-4 py-3 text-center relative after:absolute after:top-1/2 after:right-0 after:translate-y-[-50%] after:h-6 after:w-px after:bg-gray-300">
                        <span class="text-xs w-[65%] leading-4">Tham gia GoldenBeeLTD</span>
                        <span class="text-lg font-bold">2 năm</span>
                    </div>

                    <div class="w-1/2 flex flex-col items-center px-4 py-3 text-center">
                        <span class="text-xs w-[65%] leading-4">Tin đăng đang có</span>
                        <span class="text-lg font-bold">24</span>
                    </div>
                </div>
                <div class="px-4">
                    <div class="flex items-center gap-3 bg-yellow-50 rounded p-3 my-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-6 text-yellow-500"
                            fill="currentColor">
                            <path
                                d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                        </svg>
                        <p class="text-sm"><span class="font-semibold">Có 4 tin </span> căn hộ chung cư cùng dự án
                            Vinhomes Grand Park</p>
                    </div>
                    <a href="#" class="font-semibold flex items-center justify-center text-sm">
                        Xem trang cá nhân
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-3 ml-2">
                            <path
                                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col items-center p-4 gap-2">
                    <a href="javascript:void(0)"
                        class="cursor-pointer w-full flex justify-center items-center p-3 border rounded-lg border-neutral-300">
                        <span class="font-semibold flex items-center text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0 0 48 48">
                                <path fill="#2962ff"
                                    d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z">
                                </path>
                                <path fill="#eee"
                                    d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z">
                                </path>
                                <path fill="#2962ff"
                                    d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z">
                                </path>
                                <path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z"></path>
                                <path fill="#2962ff"
                                    d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z">
                                </path>
                                <path fill="#2962ff"
                                    d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z">
                                </path>
                            </svg>
                            Chat qua Zalo
                        </span>
                    </a>
                    <a href="javascript:void(0)"
                        class="cursor-pointer bg-cyan-600 rounded-lg w-full flex justify-center items-center p-3">
                        <span class="text-sm font-semibold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="size-5 text-white mr-2" fill="currentColor">
                                <path
                                    d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                            </svg>
                            0826 022 *** · Hiện số</span>
                    </a>
                </div>
            </div>

        </section>

        <!-- Cảnh báo đặt cọc -->
        <section id="warning" class="my-4 p-4 border border-neutral-200 rounded-lg">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-12 text-red-500 mr-2"
                    fill="currentColor">
                    <path
                        d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480L40 480c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                </svg>

                <div>
                    <p class="text-xs text-justify">Không nên đặt cọc, giao dịch trước khi xem nhà và xác minh thông
                        tin của người cho thuê.</p>
                    <a href="#" class="text-xs font-semibold flex items-center">
                        Tìm hiểu thêm
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-2 ml-2">
                            <path
                                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                </div>

            </div>
        </section>
        <!-- Gợi ý Các mục danh khác liên quan -->
        <section id="suggestPost" class="bg-neutral-100 p-4 rounded-lg text-sm mb-4">
            <h1 class="font-semibold mb-4">Cho thuê căn hộ chung cư theo dự án tại Quận 9</h1>
            <div id="suggestList" class="flex flex-col gap-3 mb-3">
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Vinhomes Grand Park (63)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Masteri Centre Point (62)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Chung cư MT Eastmark City
                    (61)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Safira Khang Điền (40)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Beverly - Vinhomes Grand
                    Park (38)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Lumiere Boulevard (30)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Beverly Solari - Vinhomes
                    Grand Park (23)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Origami - Vinhomes Grand
                    Park (19)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Topaz Home 2 (17)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Rainbow - Vinhomes Grand
                    Park (14)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Căn hộ Ricca Quận 9 (12)</a>
            </div>

            <a id="showMore" href="javascript:void(0)" class="text-red-500 ">Xem thêm</a>
            <a id="showLess" href="javascript:void(0)" class="text-red-500 hidden ">Thu gọn</a>

        </section>


        <!-- Gợi ý các danh mục bds -->
        <section id="suggestBds" class="bg-neutral-100 p-4 rounded-lg text-sm mb-4">
            <h1 class="font-semibold mb-4">Bất động sản nổi bật</h1>
            <div id="suggestListBds" class="flex flex-col gap-3 mb-3">
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Vinhomes Grand Park (63)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Masteri Centre Point (62)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Chung cư MT Eastmark City
                    (61)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Safira Khang Điền (40)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Beverly - Vinhomes Grand
                    Park (38)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Lumiere Boulevard (30)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Beverly Solari - Vinhomes
                    Grand Park (23)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Origami - Vinhomes Grand
                    Park (19)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Topaz Home 2 (17)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">The Rainbow - Vinhomes Grand
                    Park (14)</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Căn hộ Ricca Quận 9 (12)</a>
            </div>

            <a id="showMoreBds" href="javascript:void(0)" class="text-red-500 ">Xem thêm</a>
            <a id="showLessBds" href="javascript:void(0)" class="text-red-500 hidden">Thu gọn</a>

        </section>

        <!-- Mục Hỗ trợ tiện ích -->
        <section id="suggestFeature" class="bg-neutral-100 p-4 rounded-lg text-sm">
            <h1 class="font-semibold mb-4">Hỗ trợ tiện ích</h1>
            <div id="suggestListFeature" class="flex flex-col gap-3 mb-3">
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Tư vấn phong thủy</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Dự tính chi phí làm nhà</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Tính lãi suất</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Quy trình xây nhà</a>
                <a href="javascript:void(0)" class="text-sm hover:text-neutral-500">Xem tuổi làm nhà</a>

            </div>

            <a id="showMoreFeatures" href="javascript:void(0)" class="text-red-500 ">Xem thêm</a>
            <a id="showLessFeatures" href="javascript:void(0)" class="text-red-500 hidden">Thu gọn</a>

        </section>
    </section>


    <!-- Thanh nút bấm/ thông tin liên hệ cho người dùng mobile -->
    <section id="contactMobile"
        class="lg:hidden w-full fixed bottom-0 left-0 h-[80px] p-4 flex justify-center items-center gap-4 bg-white shadow-[-4px_-4px_10px_rgba(0,0,0,0.2)] z-50">
        <a href="#" class="">
            <img src="https://i.redd.it/8n14e28ef25c1.png" alt="" class="w-[44px] h-[44x] rounded-full" />
        </a>
        <a href="javascript:void(0)" class="border border-neutral-200 flex items-center gap-2 px-3 h-full rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <path fill="#2962ff"
                    d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10	c4.722,0,8.883-2.348,11.417-5.931V36H15z">
                </path>
                <path fill="#eee"
                    d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19	c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022c0.043,0.835-0.129,2.365-1.634,3.742	c-0.162,0.148-0.059,0.419,0.16,0.428c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083	C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z">
                </path>
                <path fill="#2962ff"
                    d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75s3.75,1.683,3.75,3.75	S38.817,27,36.75,27z M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25S37.99,21,36.75,21z">
                </path>
                <path fill="#2962ff" d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z"></path>
                <path fill="#2962ff"
                    d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769c-2.067,0-3.75,1.683-3.75,3.75	S22.683,27,24.75,27c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z M24.75,25.5	c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21S27,22.01,27,23.25S25.99,25.5,24.75,25.5z">
                </path>
                <path fill="#2962ff"
                    d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5	c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z">
                </path>
            </svg>
            <span>Zalo</span>
        </a>
        <a href="javascript:void(0)"
            class="cursor-pointer bg-cyan-600 rounded-lg w-3/4 flex justify-center items-center p-3">
            <span class="text-xs sm:text-sm font-semibold text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5 text-white mr-2"
                    fill="currentColor">
                    <path
                        d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                </svg>
                0826 022 ***</span>
        </a>
    </section>
</div>



<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 8,
        slidesPerView: 7.5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    const enableThumbnails = false;

    if (enableThumbnails) {
        const thumbsSwiper = new Swiper('.mySwiper', {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
    }
    var swiper2 = new Swiper(".bat-dong-san-swipe", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });


    //Script thu/mở các danh mục liên quan

    document.addEventListener('DOMContentLoaded', function() {
        const maxVisible = 9;

        function setupToggleList(listSelector, showMoreId, showLessId) {
            const items = document.querySelectorAll(listSelector + ' a');
            const showMoreBtn = document.getElementById(showMoreId);
            const showLessBtn = document.getElementById(showLessId);

            if (!items.length || !showMoreBtn || !showLessBtn) return;

            function collapse() {
                items.forEach((item, index) => {
                    item.style.display = index < maxVisible ? 'block' : 'none';
                });
                showMoreBtn.classList.remove('hidden');
                showLessBtn.classList.add('hidden');
            }

            function expand() {
                items.forEach(item => item.style.display = 'block');
                showMoreBtn.classList.add('hidden');
                showLessBtn.classList.remove('hidden');
            }

            collapse();
            showMoreBtn.addEventListener('click', expand);
            showLessBtn.addEventListener('click', collapse);
        }

        setupToggleList('#suggestList', 'showMore', 'showLess');
        setupToggleList('#suggestListBds', 'showMoreBds', 'showLessBds');
        setupToggleList('#suggestListFeature', 'showMoreFeatures', 'showLessFeatures');
    });
</script>
@endsection