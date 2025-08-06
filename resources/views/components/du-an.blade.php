@extends('property::layouts.master')
@section('content')
<div>
    <!-- Phần banner -->
    <section id="banner">
        <div id="banner-carousel" class="relative w-full lg:h-auto h-[680px]" data-carousel="slide">
            <div class="relative h-56 overflow-hidden lg:rounded-lg h-full lg:h-96">
                <div class="hidden duration-300 ease-in-out" data-carousel-item>
                    <img src="https://file4.batdongsan.com.vn/2025/06/09/20250609162917-f1fb_wm.jpg"
                        class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                    </div>
                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                        <div class="w-full max-w-[1140px] mx-auto pb-12">
                            <div class="flex flex-col gap-2">
                                <div class="banner-badge">
                                    <span class="text-purple-700 text-sm bg-purple-100 px-3 py-[6px] rounded">Đã bàn
                                        giao</span>
                                </div>
                                <h1 class="text-3xl text-white font-semibold">Phú Đông Sky Garden</h1>
                                <span class="text-white">Đường An Bình, Phường An Bình, Dĩ An, Bình Dương</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden duration-300 ease-in-out" data-carousel-item>
                    <img src="https://file4.batdongsan.com.vn/2025/06/09/20250609153402-b60c_wm.jpg"
                        class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                    </div>
                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                        <div class="w-full max-w-[1140px] mx-auto pb-12">
                            <div class="flex flex-col gap-2">
                                <div class="banner-badge">
                                    <span class="text-green-600 bg-green-100 text-sm  px-3 py-[6px] rounded">Đang mở
                                        bán</span>
                                </div>
                                <h1 class="text-3xl text-white font-semibold">Peninsula Đà Nẵng</h1>
                                <span class="text-white">Đường Lê Văn Duyệt, Phường Nại Hiên Đông, Quận Sơn Trà, Đà
                                    Nẵng</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden duration-300 ease-in-out" data-carousel-item>
                    <img src="https://file4.batdongsan.com.vn/2025/05/06/20250506140858-40f4_wm.jpg"
                        class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                    </div>
                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                        <div class="w-full max-w-[1140px] mx-auto pb-12">
                            <div class="flex flex-col gap-2">
                                <div class="banner-badge">
                                    <span
                                        class="text-neutral-400 bg-neutral-100 text-sm  px-3 py-[6px] rounded">Đang
                                        cập nhật</span>
                                </div>
                                <h1 class="text-3xl text-white font-semibold">Peninsula Đà Nẵng</h1>
                                <span class="text-white">Đường Lê Văn Duyệt, Phường Nại Hiên Đông, Quận Sơn Trà, Đà
                                    Nẵng</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <button type="button"
                class="hidden lg:block absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded bg-white  group-focus:ring-4">
                    <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="hidden lg:block absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded bg-white ">
                    <svg class="w-4 h-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only text-black">Next</span>
                </span>
            </button>
        </div>
    </section>


    <!-- Phần nội dung -->
    <section id="content" class="max-w-[1140px] w-full m-auto md:px-4 md:pt-4 md:pb-6 lg:p-auto">

        <!-- Khung tìm kiếm -->
        <div id="searchBox" class="my-8 max-w-[1140px] w-full border border-neutral-300 rounded flex items-center">
        </div>

        <!-- Danh sách -->
        <div id="list" class="lg:flex lg:gap-8">
            <div id="projectList" class="lg:w-[750px]">
                <div class="px-4 lg:px-auto">
                    <a href="#" class="text-sm mb-2"><span class="text-neutral-500">Dự án / </span>Dự án BĐS Toàn
                        Quốc</a>
                    <h1 class="text-2xl font-semibold">Dự án toàn quốc</h1>
                    <div class="project-filter flex justify-between mt-3 mb-4">
                        <span class="text-sm">Hiện đang có 5.715 dự án</span>
                        <form class="w-[138px]">
                            <select id="projectFilter"
                                class="pl-4 py-[5px] pr-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full">
                                <option value="newest" selected>Mới nhất</option>
                                <option value="latestUpdate">Mới cập nhật</option>
                                <option value="highest">Giá cao nhất</option>
                                <option value="lowest">Giá thấp nhất</option>
                            </select>
                        </form>
                    </div>
                </div>


                <!-- Thẻ sản phẩm -->
                <div id="projectCard" class="flex flex-col gap-2">
                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class=" text-xs font-semibold px-2 py-1 rounded w-fit text-neutral-400 bg-neutral-100">Đang
                                cập nhật</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>



                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded w-fit">Đang
                                mở bán</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>



                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded w-fit">Đang
                                mở bán</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>


                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="text-purple-700 bg-purple-100 text-xs font-semibold px-2 py-1 rounded w-fit">Đã
                                bàn giao</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>


                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded w-fit">Đang
                                mở bán</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>



                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded w-fit">Đang
                                mở bán</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>

                    <a href="#" class="lg:flex bg-white rounded shadow p-4 lg:max-w-4xl mt-4 ">
                        <div
                            class="lg:flex lg:flex-col lg:gap-0.5 lg:w-1/2 lg:w-[240px] lg:h-[248px] w-full h-[500px] relative">

                            <!-- main image -->
                            <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091505-26e8_wm.jpg"
                                class="rounded w-full lg:h-[160px] object-cover flex-1 h-full" />


                            <!-- sub below.. -->
                            <div class="hidden lg:flex gap-0.5">
                                <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091502-5026_wm.jpg"
                                    class="rounded w-1/2 h-[60px] object-cover" />
                                <div class="relative w-1/2 h-[60px]">
                                    <img src="https://file4.batdongsan.com.vn/crop/240x180/2025/06/23/20250623091459-b462_wm.jpg"
                                        class="rounded w-full h-full object-cover" />
                                    <span
                                        class="absolute bottom-1 right-1 bg-black/60 text-white text-xs px-2 py-0.5 rounded">+10</span>
                                </div>
                            </div>
                        </div>

                        <div class="pl-4 flex flex-col mt-4 lg:w-1/2 flex-1 gap-2 w-full">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded w-fit">Đang
                                mở bán</span>
                            <h2 class="text-lg font-bold">MK Central City</h2>
                            <div class="flex items-center gap-2">
                                <p class="text-sm font-semibold">7,07 ha</p>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">
                                    186
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>

                                </span>
                                <span class>-</span>
                                <span class="text-sm font-semibold flex items-center gap-1">2
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>

                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-1">Đường Trần Phú, Phường Phủ Hà, Thành phố
                                Phan Rang -
                                Tháp Chàm, Ninh Thuận</p>
                            <p class="text-sm text-gray-500 line-clamp-2">M
                                MK Central City là dự án Khu đô thị mới Phủ Hà do Công ty Cổ phần Đầu tư Xây dựng MK
                                làm chủ đầu tư, tọa lạc ngay mặt tiền đường Trần Phú, Phường Phủ Hà, thành phố Phan
                                Rang - Tháp Chàm. Dự án gồm khu Nhà ở xã hội với 2 tòa tháp cao 16 tầng và khu nhà ở
                                thương mại với 155 lô đất nền và 65 căn liền kề.
                            </p>
                        </div>
                    </a>


                    <!-- Phân trang -->

                    <div class="flex items-center justify-center">
                        <nav aria-label="" class="mt-8">
                            <ul class="inline-flex -space-x-px text-sm">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">Trang
                                        trước</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">Tiếp
                                        theo</a>
                                </li>
                            </ul>
                        </nav>

                    </div>


                </div>
            </div>
            <aside id="rightContent" class="lg:flex-1 lg:w-[calc(100%-780px)] lg:mt-11  ">
                <div class="flex items-center justify-between">
                    <h1 class="font-semibold text-lg">Đánh giá dự án</h1>
                    <a href="#" class="text-amber-600 text-sm">Xem tất cả</a>
                </div>


                <div class="news-carousel mt-4 mb-6 hidden lg:block">
                    <div id="newsCarousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg ">
                            <!-- Item 1 -->
                            <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                <a href="#" class="relative block min-h-full overflow-x-hidden">
                                    <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                        class="block w-full" alt="...">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                                    </div>
                                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                                        <div class="w-full mx-auto pb-6 px-4">
                                            <div class="flex flex-col gap-2">

                                                <h1 class="text-white font-semibold line-clamp-2">
                                                    Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                                </h1>
                                                <span class="text-sm text-white">1 năm trước</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                <a href="#" class="relative block min-h-full overflow-x-hidden">
                                    <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                        class="block w-full" alt="...">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                                    </div>
                                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                                        <div class="w-full mx-auto pb-6 px-4">
                                            <div class="flex flex-col gap-2">

                                                <h1 class="text-white font-semibold line-clamp-2">
                                                    Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                                </h1>
                                                <span class="text-sm text-white">1 năm trước</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-300 ease-in-out" data-carousel-item>
                                <a href="#" class="relative block min-h-full overflow-x-hidden">
                                    <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                        class="block w-full" alt="...">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                                    </div>
                                    <div class="absolute inset-0 z-20 flex items-end mdpx-4 lg:px-auto">
                                        <div class="w-full mx-auto pb-6 px-4">
                                            <div class="flex flex-col gap-2">

                                                <h1 class="text-white font-semibold line-clamp-2">
                                                    Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                                </h1>
                                                <span class="text-sm text-white">1 năm trước</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex bottom-5 right-5 space-x-2 rtl:space-x-reverse">
                            <button type="button"
                                class="w-1.5 h-1.5 rounded-full bg-white/40 hover:bg-white aria-[current=true]:bg-white"
                                aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button"
                                class="w-1.5 h-1.5 rounded-full bg-white/40 hover:bg-white aria-[current=true]:bg-white"
                                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button"
                                class="w-1.5 h-1.5 rounded-full bg-white/40 hover:bg-white aria-[current=true]:bg-white"
                                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded bg-white  group-focus:ring-4">
                                <svg class="w-2 h-2 rtl:rotate-180" aria-hidden="true"
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
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded bg-white ">
                                <svg class="w-2 h-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only text-black">Next</span>
                            </span>
                        </button>
                    </div>

                </div>


                <!-- Responsive -->
                <div class="flex lg:hidden gap-4 overflow-x-hidden ">
                    <div class="item">
                        <a href="#" class="relative block overflow-x-hidden  h-[167px] rounded">
                            <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                class="block h-full w-full" alt="...">
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                            </div>
                            <div class="absolute inset-0 z-20 flex items-end md:px-4 overflow-y-hidden">
                                <div class="w-full mx-auto pb-6 ">
                                    <div class="flex flex-col gap-2">

                                        <h1 class="text-white font-semibold line-clamp-1">
                                            Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                        </h1>
                                        <span class="text-sm text-white">1 năm trước</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="item">
                        <a href="#" class="relative block overflow-x-hidden  h-[167px] rounded">
                            <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                class="block h-full w-full" alt="...">
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                            </div>
                            <div class="absolute inset-0 z-20 flex items-end md:px-4 overflow-y-hidden">
                                <div class="w-full mx-auto pb-6 ">
                                    <div class="flex flex-col gap-2">

                                        <h1 class="text-white font-semibold line-clamp-1">
                                            Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                        </h1>
                                        <span class="text-sm text-white">1 năm trước</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="item ">
                        <a href="#" class="relative block overflow-x-hidden  h-[167px] rounded">
                            <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                class="block w-full h-full" alt="...">
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                            </div>
                            <div class="absolute inset-0 z-20 flex items-end md:px-4 overflow-y-hidden">
                                <div class="w-full mx-auto pb-6 ">
                                    <div class="flex flex-col gap-2">

                                        <h1 class="text-white font-semibold line-clamp-1">
                                            Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                        </h1>
                                        <span class="text-sm text-white">1 năm trước</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="item ">
                        <a href="#" class="relative block overflow-x-hidden  h-[167px] rounded">
                            <img src="https://file4.batdongsan.com.vn/crop/360x240/2023/01/05/wxbwknn6/20230105161242-8c4e.jpg"
                                class="block w-full h-full" alt="...">
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-black/40 to-black/80 z-10">
                            </div>
                            <div class="absolute inset-0 z-20 flex items-end md:px-4 overflow-y-hidden">
                                <div class="w-full mx-auto pb-6 ">
                                    <div class="flex flex-col gap-2">

                                        <h1 class="text-white font-semibold line-clamp-1">
                                            Thực Tế Công Trường 3 Dự Án Căn Hộ Mới Nhất Tại Thủ Đức Năm 2023
                                        </h1>
                                        <span class="text-sm text-white">1 năm trước</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>




                <div class="flex items-center justify-between">
                    <h1 class="font-semibold text-lg mb-4 mt-6 lg:m-auto">Tin tức</h1>
                    <a href="#" class="text-amber-600 text-sm">Xem tất cả</a>
                </div>
                <a class="news" href="#">
                    <div class="card-news flex text-justify py-4 border-b border-b-neutral-100">
                        <img src="https://img.iproperty.com.my/angel/118x84-crop/wp-content/uploads/sites/7/2025/06/top-10-ngan-hang-cho-vay-lai-suat-thap-nhat.jpg"
                            class="rounded object-cover w-[120px] h-[90px]" alt="">
                        <div class="pl-4">
                            <p class="line-clamp-3 font-semibold text-sm">
                                Top 10 Ngân Hàng Cho Vay Lãi Suất Thấp Nhất Hiện Nay: Lựa Chọn Vay Trả Góp Dễ Dàng
                                Và Tiết Kiệm
                            </p>
                            <span class="text-neutral-400 text-xs">Hôm nay</span>
                        </div>
                    </div>
                </a>


                <a class="news" href="#">
                    <div class="card-news flex text-justify py-4 border-b border-b-neutral-100">
                        <img src="https://img.iproperty.com.my/angel/118x84-crop/wp-content/uploads/sites/7/2025/06/top-10-ngan-hang-cho-vay-lai-suat-thap-nhat.jpg"
                            class="rounded object-cover w-[120px] h-[90px]" alt="">
                        <div class="pl-4">
                            <p class="line-clamp-3 font-semibold text-sm">
                                Top 10 Ngân Hàng Cho Vay Lãi Suất Thấp Nhất Hiện Nay: Lựa Chọn Vay Trả Góp Dễ Dàng
                                Và Tiết Kiệm
                            </p>
                            <span class="text-neutral-400 text-xs">Hôm nay</span>
                        </div>
                    </div>
                </a>


                <a class="news" href="#">
                    <div class="card-news flex text-justify py-4 border-b border-b-neutral-100">
                        <img src="https://img.iproperty.com.my/angel/118x84-crop/wp-content/uploads/sites/7/2025/06/top-10-ngan-hang-cho-vay-lai-suat-thap-nhat.jpg"
                            class="rounded object-cover w-[120px] h-[90px]" alt="">
                        <div class="pl-4">
                            <p class="line-clamp-3 font-semibold text-sm">
                                Top 10 Ngân Hàng Cho Vay Lãi Suất Thấp Nhất Hiện Nay: Lựa Chọn Vay Trả Góp Dễ Dàng
                                Và Tiết Kiệm
                            </p>
                            <span class="text-neutral-400 text-xs">Hôm nay</span>
                        </div>
                    </div>
                </a>


                <a class="news" href="#">
                    <div class="card-news flex text-justify py-4 border-b border-b-neutral-100">
                        <img src="https://img.iproperty.com.my/angel/118x84-crop/wp-content/uploads/sites/7/2025/06/top-10-ngan-hang-cho-vay-lai-suat-thap-nhat.jpg"
                            class="rounded object-cover w-[120px] h-[90px]" alt="">
                        <div class="pl-4">
                            <p class="line-clamp-3 font-semibold text-sm">
                                Top 10 Ngân Hàng Cho Vay Lãi Suất Thấp Nhất Hiện Nay: Lựa Chọn Vay Trả Góp Dễ Dàng
                                Và Tiết Kiệm
                            </p>
                            <span class="text-neutral-400 text-xs">Hôm nay</span>
                        </div>
                    </div>
                </a>
            </aside>
        </div>
    </section>
</div>
@endsection