<div>
    <!-- Hero Slider -->
    <section class="relative h-65 bg-gradient-to-r  from-red-500 to-red-600 overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0">
            <!-- Decorative elements -->
            <div class="absolute top-20 left-20 w-32 h-32 bg-red-400 opacity-20 rounded-full"></div>
            <div class="absolute bottom-40 right-40 w-24 h-24 bg-red-700 opacity-30 rounded-full"></div>
            <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-red-300 opacity-15 rounded-full"></div>

            <!-- Phone mockup on the right -->
            <div class="absolute right-8 top-1/2 transform -translate-y-1/2 hidden lg:block">
                <div class="relative">
                    <!-- Phone frame -->
                    <div class="w-64 h-96 bg-black rounded-3xl p-2 shadow-2xl">
                        <div class="w-full h-full bg-white rounded-2xl overflow-hidden">
                            <!-- Phone screen content -->
                            <div class="p-4 space-y-3">
                                <div class="h-4 bg-gray-200 rounded"></div>
                                <div class="h-32 bg-gray-100 rounded"></div>
                                <div class="h-4 bg-gray-200 rounded w-3/4"></div>
                                <div class="h-4 bg-gray-200 rounded w-1/2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- FREE badge -->
                    <div
                        class="absolute -top-4 -right-4 bg-white text-red-500 px-3 py-1 rounded-full font-bold text-sm shadow-lg">
                        FREE
                    </div>

                    <!-- Download badge -->
                    <div
                        class="absolute -bottom-4 -left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm shadow-lg">
                        Tải app
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation arrows -->
        <button
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-all duration-300 z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full transition-all duration-300 z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Main content -->
        <div class="relative z-10 container mx-auto px-4 pt-20">
            <!-- Search form -->
            <div class="max-w-5xl mx-auto">
                <!-- Search tabs -->
                <div class="flex">
                    <button
                        class="tab-button active bg-gray-700 text-white px-6 py-3 rounded-tl-lg font-medium transition-all duration-300 border-r border-gray-600"
                        data-tab="ban">
                        Nhà đất bán
                    </button>
                    <button
                        class="tab-button bg-gray-500 text-white px-6 py-3 font-medium hover:bg-gray-600 transition-all duration-300 border-r border-gray-600"
                        data-tab="thue">
                        Nhà đất cho thuê
                    </button>
                    <button
                        class="tab-button bg-gray-500 text-white px-6 py-3 rounded-tr-lg font-medium hover:bg-gray-600 transition-all duration-300"
                        data-tab="duan">
                        Dự án
                    </button>
                </div>

                <!-- Search form content -->
                <div class="bg-white rounded-b-lg rounded-tr-lg shadow-lg p-6">
                    <!-- Location and main search -->
                    <div class="flex gap-0 mb-4">
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <div
                                    class="flex items-center bg-gray-100 border border-gray-300 rounded-l-lg px-4 py-3">
                                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <select
                                        class="appearance-none bg-transparent border-none outline-none pr-6 text-gray-700 font-medium">
                                        <option>Cần Thơ</option>
                                        <option>Hồ Chí Minh</option>
                                        <option>Hà Nội</option>
                                        <option>Đà Nẵng</option>
                                    </select>
                                    <svg class="w-4 h-4 text-gray-400 absolute right-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow relative">
                            <input type="text"
                                placeholder="Nhập tối đa 5 địa điểm, dự án. Ví dụ: Quận Hoàn Kiếm, Quận Đống Đa"
                                class="w-full px-4 py-3 border-t border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-700">
                            <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <button
                            class="bg-red-500 hover:bg-red-600 text-white px-8 py-3 rounded-r-lg font-medium transition-colors duration-300">
                            Tìm kiếm
                        </button>
                    </div>

                    <!-- Filter options -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="relative">
                            <select
                                class="appearance-none w-full bg-gray-600 text-white border border-gray-500 rounded-lg px-4 py-3 pr-8 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <option>Loại nhà đất</option>
                                <option>Căn hộ chung cư</option>
                                <option>Nhà riêng</option>
                                <option>Biệt thự</option>
                                <option>Đất nền</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <select
                                class="appearance-none w-full bg-gray-600 text-white border border-gray-500 rounded-lg px-4 py-3 pr-8 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <option>Mức giá</option>
                                <option>Dưới 1 tỷ</option>
                                <option>1 - 3 tỷ</option>
                                <option>3 - 5 tỷ</option>
                                <option>Trên 5 tỷ</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <select
                                class="appearance-none w-full bg-gray-600 text-white border border-gray-500 rounded-lg px-4 py-3 pr-8 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <option>Diện tích</option>
                                <option>Dưới 30m²</option>
                                <option>30 - 50m²</option>
                                <option>50 - 80m²</option>
                                <option>Trên 80m²</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main heading -->
            <div class="max-w-2xl mx-auto text-center mt-16">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Xác thực tin nào<br>
                    <span class="text-yellow-300">Đây liền tin đó</span>
                </h1>
            </div>

            <!-- Slide indicators -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="w-3 h-3 bg-white rounded-full opacity-100"></button>
                <button class="w-3 h-3 bg-white rounded-full opacity-50"></button>
                <button class="w-3 h-3 bg-white rounded-full opacity-50"></button>
                <button class="w-3 h-3 bg-white rounded-full opacity-50"></button>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Side - News Content -->
                <div class="lg:w-2/3">
                    <!-- News Tabs -->
                    <div class="flex border-b border-gray-200 mb-6">
                        <button
                            class="news-tab active px-6 py-3 text-gray-800 font-semibold border-b-2 border-red-500 hover:text-red-500 transition-colors duration-300"
                            data-tab="noi-bat">
                            Tin nổi bật
                        </button>
                        <button
                            class="news-tab px-6 py-3 text-gray-600 font-medium hover:text-red-500 transition-colors duration-300"
                            data-tab="tin-tuc">
                            Tin tức
                        </button>
                        <button
                            class="news-tab px-6 py-3 text-gray-600 font-medium hover:text-red-500 transition-colors duration-300"
                            data-tab="bds-tphcm">
                            BDS TPHCM
                        </button>
                        <button
                            class="news-tab px-6 py-3 text-gray-600 font-medium hover:text-red-500 transition-colors duration-300"
                            data-tab="bds-hanoi">
                            BDS Hà Nội
                        </button>
                        <div class="flex-grow"></div>
                        <a href="#"
                            class="px-6 py-3 text-red-500 font-medium hover:text-red-600 transition-colors duration-300">
                            Xem thêm →
                        </a>
                    </div>

                    <!-- News Content Containers -->
                    <!-- Tin nổi bật content -->
                    <div id="content-noi-bat" class="news-content">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Main Featured Article -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <div class="bg-red-500 p-6 text-white">
                                    <div class="flex items-center mb-4">
                                        <div
                                            class="w-16 h-16 bg-white rounded-full flex items-center justify-center mr-4">
                                            <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-sm opacity-90">Sự ghi nhận của người dùng</div>
                                            <div class="text-sm opacity-90">là thuộc do thành công, cũng</div>
                                            <div class="text-sm opacity-90">là động lực mạnh mẽ nhất để</div>
                                            <div class="text-sm opacity-90">Batdongsan.com.vn không</div>
                                            <div class="text-sm opacity-90">ngừng cải tiến.</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-300 mb-2">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="text-sm font-medium">Bach Duong</div>
                                    <div class="text-xs opacity-90">Tổng Giám đốc batdongsan.com.vn</div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-red-500 mr-2" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                            </svg>
                                            <span class="text-sm font-medium">Batdongsan</span>
                                        </div>
                                        <div class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            Nền tảng công nghệ bất động sản số 1
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News List -->
                            <div class="space-y-6">
                                <div class="bg-white rounded-lg shadow-md p-6">
                                    <h3
                                        class="text-lg font-semibold text-gray-800 mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                        Batdongsan.com.vn – Hành Trình Khẳng Định Vị Thế Nền Tảng Proptech Số 1 Việt Nam
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                        1 ngày trước
                                    </p>
                                </div>

                                <div class="space-y-4">
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Vay Ngân Hàng Agribank 200 Triệu Lãi Suất Bao Nhiêu?
                                    </a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Nhà Trọ Hà Nội Tăng Giá Nhe, Chờ Đợi Sự Bật Tăng Thời Gian Tới
                                    </a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Batdongsan.com.vn – Hành Trình Khẳng Định Vị Thế Nền Tảng Proptech Số 1 Việt Nam
                                    </a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Sắp Nhập Tịnh, Thị Trường Xuất Hiện Những Vùng Đất Tiềm Năng
                                    </a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Tổng Hợp Dự Án Chung Cư TPHCM Mở Bán Quý 3/2025: Dồi Dào Nguồn Cung Hậu Sáp Nhập
                                    </a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                        Giá Chung Cư Hà Nội Trên Thị Trường Thứ Cấp Đang Tăng Trở Lại
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tin tức content -->
                    <div id="content-tin-tuc" class="news-content hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Featured Article with Image -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://via.placeholder.com/400x200/1f2937/ffffff?text=Kinh+Nghiem+Lam+Ho+So"
                                    alt="Kinh Nghiệm Làm Hồ Sơ" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3
                                        class="text-lg font-semibold text-gray-800 mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                        Kinh Nghiệm Làm Hồ Sơ Mua Nhà Ở Xã Hội Nhanh Gọn, Đúng Chuẩn
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                        6 ngày trước
                                    </p>
                                </div>
                            </div>

                            <!-- Featured Article with Image -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://via.placeholder.com/400x200/1f2937/ffffff?text=Dieu+Kien+Vay+Tien"
                                    alt="Điều Kiện Vay Tiền" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3
                                        class="text-lg font-semibold text-gray-800 mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                        Điều Kiện Và Quy Trình Vay Tiền Bằng Sổ Đỏ Agribank
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-2">
                                        <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                        7 ngày trước
                                    </p>
                                </div>
                            </div>

                            <!-- News List -->
                            <div class="md:col-span-2 space-y-4">
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Thị Trường Bất Động Sản Quý 3/2025: Tín Hiệu Tích Cực Từ Các Dự Án Mới
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Giá Nhà Đất Tại Các Tỉnh Miền Trung Có Xu Hướng Tăng Nhẹ
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Cẩm Nang Đầu Tư Bất Động Sản Cho Người Mới Bắt Đầu
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Những Lưu Ý Quan Trọng Khi Mua Nhà Lần Đầu
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Xu Hướng Thiết Kế Nội Thất Nhà Ở Hiện Đại 2025
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- BDS TPHCM content -->
                    <div id="content-bds-tphcm" class="news-content hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3
                                    class="text-lg font-semibold text-gray-800 mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Thị Trường Căn Hộ TPHCM Quý 3/2025: Nguồn Cung Dồi Dào
                                </h3>
                                <p class="text-gray-600 text-sm mb-2">
                                    <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                    2 ngày trước
                                </p>
                            </div>

                            <div class="space-y-4">
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Giá Nhà Đất Quận 1 TPHCM Tăng 15% Trong 6 Tháng
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Dự Án Chung Cư Cao Cấp Tại Quận 7 Sắp Mở Bán
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Khu Đông TPHCM - Điểm Nóng Đầu Tư Bất Động Sản
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Phân Tích Tiềm Năng Phát Triển Khu Vực Thủ Đức
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Top 10 Dự Án Nhà Ở Xã Hội Tại TPHCM 2025
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- BDS Hà Nội content -->
                    <div id="content-bds-hanoi" class="news-content hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3
                                    class="text-lg font-semibold text-gray-800 mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Thị Trường Bất Động Sản Hà Nội: Tín Hiệu Phục Hồi Mạnh
                                </h3>
                                <p class="text-gray-600 text-sm mb-2">
                                    <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                                    1 ngày trước
                                </p>
                            </div>

                            <div class="space-y-4">
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Giá Chung Cư Hà Nội Tăng Trở Lại Sau Thời Gian Trầm Lắng
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Khu Vực Cầu Giấy - Điểm Sáng Của Thị Trường BDS Hà Nội
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Dự Án Khu Đô Thị Mới Tại Hà Nội Được Chờ Đợi Nhất
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Phân Tích Xu Hướng Đầu Tư Nhà Phố Tại Hà Nội
                                </a>
                                <a href="#"
                                    class="block text-gray-700 hover:text-red-500 transition-colors duration-300">
                                    Top Khu Vực Có Tiềm Năng Tăng Giá Tại Hà Nội
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Banners -->
                <div class="lg:w-1/3 space-y-6">
                    <!-- PropertyGuru Banner -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg overflow-hidden shadow-lg">
                        <div class="p-6 text-white">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-yellow-400 font-bold text-lg">KOHLER</div>
                                <div class="text-yellow-400 text-sm">PARTNER</div>
                            </div>
                            <div class="mb-6">
                                <div class="text-yellow-400 text-3xl font-bold mb-2">PropertyGuru</div>
                                <div class="text-yellow-400 text-sm">Vietnam</div>
                                <div class="text-yellow-400 text-sm">Property Awards</div>
                            </div>
                            <div class="text-white text-sm mb-4">
                                11 năm tôn vinh chủ đầu tư xuất sắc ngành bất động sản
                            </div>
                            <button
                                class="bg-yellow-400 text-gray-800 px-6 py-2 rounded-full font-medium hover:bg-yellow-500 transition-colors duration-300">
                                ĐĂNG KÝ TẠI ĐÂY
                            </button>
                        </div>
                    </div>

                    <!-- Expert Coaching Banner -->
                    <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-lg overflow-hidden shadow-lg">
                        <div class="p-6 text-white">
                            <div class="text-sm font-medium mb-2">EXPERT COACHING</div>
                            <h3 class="text-xl font-bold mb-4">
                                Điểm Nóng BDS Cần Thơ<br>
                                Xu Hướng Thị Trường<br>
                                Và Giải Pháp Bán Hàng<br>
                                Đột Phá
                            </h3>
                            <div class="text-sm mb-4">
                                <div class="flex items-center mb-1">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    08:30 - 11:30 | 11/07/2025
                                </div>
                                <div class="text-xs opacity-90">
                                    Sảnh Orchid Ballroom B, Tầng 5 - Sheraton Cần Thơ<br>
                                    29 Đường 30 Tháng 4, Phường Xuân Khánh,<br>
                                    Quận Ninh Kiều, TP Cần Thơ
                                </div>
                            </div>
                            <button
                                class="bg-white text-red-500 px-6 py-2 rounded-full font-medium hover:bg-gray-100 transition-colors duration-300">
                                Đăng ký ngay!
                            </button>
                        </div>
                        <div class="absolute bottom-0 right-0 opacity-20">
                            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Listings Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Bất động sản dành cho bạn</h2>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-red-500 hover:text-red-600 font-medium">Tin nhà đất bán mới nhất</a>
                    <span class="text-gray-400">|</span>
                    <a href="#" class="text-red-500 hover:text-red-600 font-medium">Tin nhà đất cho thuê mới nhất</a>
                </div>
            </div>

            <!-- Property Grid - First Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Property Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/3b82f6/ffffff?text=Empire+City" alt="Property"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            NĂM FULL GIỜ HÀNG CHO THUÊ EMPIRE CITY 1PN-2PN-3PN-4P...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">30 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">94 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 2, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/10b981/ffffff?text=Metropole+Apartment"
                            alt="Property" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            CHUYỂN CHO THUÊ CĂN HỘ 1-2-3-4PN & DUPLEX METROPOLE...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">30 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">86 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 2, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/8b5cf6/ffffff?text=Vinhomes+Apartment"
                            alt="Property" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            QUÝ CĂN HỘ CHÍNH CHỦ CHO THUÊ GIÁ RẺ NHẤT VINHOMES...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">5 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">43 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Gia Lâm, Hà Nội
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Happy+Valley" alt="Property"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            CHO THUÊ CĂN HỘ CAO CẤP TẠI HAPPY VALLEY, PHÚ MỸ HƯNG,...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">36 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">112 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 7, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Grid - Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Property Card 5 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/ef4444/ffffff?text=Sunshine+Green" alt="Property"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            CƯ DÂN SUNSHINE GREEN ICONIC CHO THUÊ STU: 6 TRIỆU...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">9 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">80 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Long Biên, Hà Nội
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 6 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/06b6d4/ffffff?text=The+Opera" alt="Property"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                        <div class="absolute top-3 right-3 bg-green-500 text-white p-1 rounded-full">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            BAN QUẢN LÝ THE OPERA CẬP NHẬT GIÁ THUÊ MỚI NHẤT (Đ...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">35 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">70 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 2, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 7 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/84cc16/ffffff?text=Vinhomes+Grand+Park"
                            alt="Property" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            CHUYỂN CHO THUÊ CĂN HỘ VINHOMES GRAND PARK QUẬ...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">4,5 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">47 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 9, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                </svg>


                            </button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 8 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x200/6366f1/ffffff?text=Empire+City+View"
                            alt="Property" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                            VIP
                        </div>
                        <div
                            class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div class="p-4">
                        <h3
                            class="font-semibold text-gray-800 text-sm mb-2 line-clamp-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                            GIÁ RẺ 100% - ĐÚNG NỘI DUNG CĂN HỘ EMPIRE CITY...
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-red-500 font-bold">26 triệu/tháng</span>
                            <span class="text-gray-600 text-sm">98 m²</span>
                        </div>
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Quận 2, Hồ Chí Minh
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-xs">Đăng hôm nay</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center">
                <button
                    class="border border-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-50 transition-colors duration-300 flex items-center mx-auto">
                    <span class="mr-2">Mở rộng</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Dự án bất động sản nổi bật</h2>
                <a href="#" class="text-red-500 hover:text-red-600 font-medium flex items-center">
                    Xem thêm
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Project Navigation -->
            <div class="flex items-center justify-between mb-8">
                <button id="prevBtn"
                    class="p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="nextBtn"
                    class="p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Projects Carousel Container -->
            <div class="relative overflow-hidden">
                <!-- Projects Grid -->
                <div id="projectsSlider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Project Card 1 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/3b82f6/ffffff?text=Phu+Dong+Sky+Garden"
                                    alt="Phú Đông Sky Garden" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    16
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs font-medium">
                                        Đã bàn giao
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Phú Đông Sky Garden
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    6.015 m²
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Dĩ An, Bình Dương
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Capital+Square"
                                    alt="Capital Square" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    5
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-medium">
                                        Đang mở bán
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Capital Square
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    6,14 ha
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Sơn Trà, Đà Nẵng
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/10b981/ffffff?text=Imperia+Sola+Park"
                                    alt="Imperia Sola Park" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    6
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-medium">
                                        Đang mở bán
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Imperia Sola Park
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    2,1 ha
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    </svg>
                                    Nam Từ Liêm, Hà Nội
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 4 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/8b5cf6/ffffff?text=Chung+cu+Elysian"
                                    alt="Chung cư Elysian" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    9
                                </div>
                                <div class="absolute top-3 right-3 bg-red-500 text-white p-1 rounded-full">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                    </svg>

                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-medium">
                                        Đang mở bán
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Chung cư Elysian
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    2,8 ha
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Quận 9, Hồ Chí Minh
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 5 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/ef4444/ffffff?text=Masteri+Thao+Dien"
                                    alt="Masteri Thảo Điền" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    12
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-medium">
                                        Đang mở bán
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Masteri Thảo Điền
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    3,2 ha
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Quận 2, Hồ Chí Minh
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 6 -->
                    <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x200/06b6d4/ffffff?text=Landmark+81"
                                    alt="Landmark 81" class="w-full h-48 object-cover">
                                <div
                                    class="absolute bottom-3 right-3 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    18
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs font-medium">
                                        Sắp mở bán
                                    </span>
                                </div>
                                <h3
                                    class="font-semibold text-gray-800 text-lg mb-2 hover:text-red-500 cursor-pointer transition-colors duration-300">
                                    Landmark 81
                                </h3>
                                <div class="text-gray-600 text-sm mb-2">
                                    1,8 ha
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Bình Thạnh, Hồ Chí Minh
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties by Location Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Bất động sản theo địa điểm</h2>

                <!-- Location Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <!-- Ho Chi Minh City - Large Card -->
                    <div
                        class="md:col-span-2 md:row-span-2 relative rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                        <img src="https://via.placeholder.com/600x400/1e40af/ffffff?text=Ho+Chi+Minh+City"
                            alt="TP. Hồ Chí Minh" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-2xl font-bold mb-2">TP. Hồ Chí Minh</h3>
                            <p class="text-lg">67.926 tin đăng</p>
                        </div>
                    </div>

                    <!-- Hanoi -->
                    <div
                        class="relative rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                        <img src="https://via.placeholder.com/300x200/3b82f6/ffffff?text=Hanoi" alt="Hà Nội"
                            class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-bold mb-1">Hà Nội</h3>
                            <p class="text-sm">58.903 tin đăng</p>
                        </div>
                    </div>

                    <!-- Da Nang -->
                    <div
                        class="relative rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                        <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Da+Nang" alt="Đà Nẵng"
                            class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-bold mb-1">Đà Nẵng</h3>
                            <p class="text-sm">10.572 tin đăng</p>
                        </div>
                    </div>

                    <!-- Binh Duong -->
                    <div
                        class="relative rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                        <img src="https://via.placeholder.com/300x200/10b981/ffffff?text=Binh+Duong" alt="Bình Dương"
                            class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-bold mb-1">Bình Dương</h3>
                            <p class="text-sm">8.898 tin đăng</p>
                        </div>
                    </div>

                    <!-- Dong Nai -->
                    <div
                        class="relative rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                        <img src="https://via.placeholder.com/300x200/8b5cf6/ffffff?text=Dong+Nai" alt="Đồng Nai"
                            class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-bold mb-1">Đồng Nai</h3>
                            <p class="text-sm">3.931 tin đăng</p>
                        </div>
                    </div>
                </div>

                <!-- Popular Projects List -->
                <div class="flex flex-wrap gap-2 text-sm">
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Vinhomes
                        Central Park</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Vinhomes
                        Grand Park</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Vinhomes
                        Smart City</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Vinhomes
                        Ocean Park</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Vùng
                        Tàu Pearl</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Bcons
                        Green View</span>
                    <span
                        class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-gray-200 cursor-pointer transition-colors duration-300">Grandeur
                        Palace</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Companies Section -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Doanh nghiệp tiêu biểu</h2>

                <!-- Companies Carousel -->
                <div class="relative">
                    <!-- Navigation buttons -->
                    <button id="companiesPrevBtn"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="companiesNextBtn"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Companies Container -->
                    <div class="overflow-hidden mx-12">
                        <div id="companiesSlider" class="flex transition-transform duration-500 ease-in-out">
                            <!-- Company Logo 1 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=DUC+HUNG+LAND"
                                        alt="Duc Hung Land"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 2 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=KIM+OANH+GROUP"
                                        alt="Kim Oanh Group"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 3 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=SEA+HOLDINGS"
                                        alt="Sea Holdings"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 4 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=T+REALTY"
                                        alt="T Realty"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 5 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=GREEN+HOUSE"
                                        alt="Green House"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 6 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=VINHOMES"
                                        alt="Vinhomes"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 7 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=CAPITALAND"
                                        alt="CapitaLand"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Company Logo 8 -->
                            <div class="flex-shrink-0 w-1/6 px-4 py-6 flex items-center justify-center">
                                <div
                                    class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow duration-300 w-full h-20 flex items-center justify-center">
                                    <img src="https://via.placeholder.com/120x60/e5e7eb/6b7280?text=NOVALAND"
                                        alt="Novaland"
                                        class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Press & Media Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Báo chí nói về Batdongsan.com.vn</h2>
                <p class="text-gray-600 text-right">Triệu lựa chọn nhà, một kênh tìm kiếm</p>
            </div>
            <!-- Carousel -->
            <div class="relative">
                <!-- Navigation buttons -->
                <button id="pressPrevBtn"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="pressNextBtn"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-md hover:shadow-lg transition-shadow duration-300 disabled:opacity-50">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <!-- Articles Container -->
                <div class="overflow-hidden mx-12">
                    <div id="pressSlider" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Article 1 -->
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/22c55e/ffffff?text=Article+1"
                                    alt="Mua bán nhà đất ở tỉnh: 4 lưu ý quan trọng" class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-red-500 font-bold text-xl">T1</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Mua bán nhà đất ở tỉnh: 4
                                            lưu ý quan trọng</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Article 2 -->
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/3b82f6/ffffff?text=Article+2"
                                    alt="Bất chấp nhu cầu sụt giảm, giá nhà đất vẫn..."
                                    class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-blue-500 font-bold text-xl">TN</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Bất chấp nhu cầu sụt
                                            giảm, giá nhà đất vẫn...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Article 3 -->
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Article+3"
                                    alt="Lời giải cho bài toán mua bất động sản ở tỉnh"
                                    class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-green-600 font-bold text-xl">D</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Lời giải cho bài toán mua
                                            bất động sản ở tỉnh</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Article+3"
                                    alt="Lời giải cho bài toán mua bất động sản ở tỉnh"
                                    class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-green-600 font-bold text-xl">D</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Lời giải cho bài toán mua
                                            bất động sản ở tỉnh</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Article+3"
                                    alt="Lời giải cho bài toán mua bất động sản ở tỉnh"
                                    class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-green-600 font-bold text-xl">D</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Lời giải cho bài toán mua
                                            bất động sản ở tỉnh</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/f59e0b/ffffff?text=Article+3"
                                    alt="Lời giải cho bài toán mua bất động sản ở tỉnh"
                                    class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-green-600 font-bold text-xl">D</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Lời giải cho bài toán mua
                                            bất động sản ở tỉnh</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Article 4 -->
                        <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/4 px-3">
                            <div
                                class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                                <img src="https://via.placeholder.com/300x200/ef4444/ffffff?text=Article+4"
                                    alt="Công ty mẹ Batdongsan.com.vn..." class="w-full h-48 object-cover">
                                <div class="flex items-center p-4">
                                    <span
                                        class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-3 border text-red-500 font-bold text-xl">C</span>
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-800 mb-1">Công ty mẹ
                                            Batdongsan.com.vn...</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <!-- Bất động sản bán -->
                <div>
                    <img src="https://staticfile.batdongsan.com.vn/images/box-link-footer/ForSale.svg" alt="Bất động sản bán"
                        class="mx-auto mb-6 h-24">
                    <h3 class="font-bold text-lg mb-3">Bất động sản bán</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Bạn có thể tìm thấy ngôi nhà mơ ước hoặc cơ hội đầu tư hấp dẫn thông qua lượng tin rao lớn, uy
                        tín về các loại hình <span class="text-red-500">bất động sản bán</span> tại Việt Nam, bao gồm
                        bán nhà riêng, <span class="text-red-500">bán nhà mặt tiền</span>, bán căn hộ chung cư, bán biệt
                        thự, bán đất, <span class="text-red-500">bán shophouse</span> và các loại hình BĐS khác.
                    </p>
                </div>
                <!-- Bất động sản cho thuê -->
                <div>
                    <img src="https://staticfile.batdongsan.com.vn/images/box-link-footer/ForRent.svg" alt="Bất động sản cho thuê"
                        class="mx-auto mb-6 h-24">
                    <h3 class="font-bold text-lg mb-3">Bất động sản cho thuê</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Cập nhật thường xuyên và đầy đủ các loại hình <span class="text-red-500">bất động sản cho
                            thuê</span> như: thuê phòng trọ, nhà riêng, <span class="text-red-500">thuê biệt thự</span>,
                        văn phòng, kho xưởng hay <span class="text-red-500">thuê mặt bằng</span> kinh doanh giúp bạn
                        nhanh chóng tìm được bất động sản ưng ý.
                    </p>
                </div>
                <!-- Đánh giá dự án -->
                <div>
                    <img src="https://staticfile.batdongsan.com.vn/images/box-link-footer/Projects.svg" alt="Đánh giá dự án"
                        class="mx-auto mb-6 h-24">
                    <h3 class="font-bold text-lg mb-3">Đánh giá dự án</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Các <span class="text-red-500">video đánh giá</span> tổng quan dự án cung cấp góc nhìn khách
                        quan của các chuyên gia về những dự án nổi bật tại Việt Nam, giúp bạn đưa ra quyết định đúng đắn
                        cho nơi an cư lý tưởng hoặc cơ hội đầu tư sinh lời.
                    </p>
                </div>
                <!-- Wiki BĐS -->
                <div>
                    <img src="https://staticfile.batdongsan.com.vn/images/box-link-footer/Wiki.svg" alt="Wiki BĐS"
                        class="mx-auto mb-6 h-24">
                    <h3 class="font-bold text-lg mb-3">Wiki BĐS</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Ngoài cập nhật những biến động thị trường, chúng tôi còn cung cấp kiến thức, kinh nghiệm về mua
                        bán, cho thuê, đầu tư, <span class="text-red-500">vay mua nhà</span>, <span
                            class="text-red-500">phong thủy</span>, thiết kế nhà, mọi thông tin cần thiết để dẫn lối
                        người tìm nhà tìm thấy căn nhà mơ ước.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc các section HTML ở đây -->

    <script>
        // Press & Media carousel functionality
        let currentPressSlide = 0;
        const pressSlider = document.getElementById('pressSlider');
        const pressPrevBtn = document.getElementById('pressPrevBtn');
        const pressNextBtn = document.getElementById('pressNextBtn');
        const pressCards = document.querySelectorAll('#pressSlider .flex-shrink-0');
        const totalPress = pressCards.length;

        function getPressVisibleCards() {
            if (window.innerWidth >= 1024) return 4;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }

        function updatePressSlider() {
            const visibleCards = getPressVisibleCards();
            const maxSlide = Math.max(0, totalPress - visibleCards);
            currentPressSlide = Math.min(currentPressSlide, maxSlide);
            const cardWidth = 100 / visibleCards;
            const translateX = -(currentPressSlide * cardWidth);
            pressSlider.style.transform = `translateX(${translateX}%)`;
            pressPrevBtn.disabled = currentPressSlide === 0;
            pressNextBtn.disabled = currentPressSlide >= maxSlide;
        }

        function nextPress() {
            const visibleCards = getPressVisibleCards();
            const maxSlide = Math.max(0, totalPress - visibleCards);
            if (currentPressSlide < maxSlide) {
                currentPressSlide++;
                updatePressSlider();
            }
        }

        function prevPress() {
            if (currentPressSlide > 0) {
                currentPressSlide--;
                updatePressSlider();
            }
        }
        pressNextBtn.addEventListener('click', nextPress);
        pressPrevBtn.addEventListener('click', prevPress);
        window.addEventListener('resize', updatePressSlider);
        updatePressSlider();
        // Auto-advance slides (optional)
        let currentSlide = 0;
        const indicators = document.querySelectorAll('.absolute.bottom-8 button');

        function nextSlide() {
            indicators[currentSlide].classList.remove('opacity-100');
            indicators[currentSlide].classList.add('opacity-50');

            currentSlide = (currentSlide + 1) % indicators.length;

            indicators[currentSlide].classList.remove('opacity-50');
            indicators[currentSlide].classList.add('opacity-100');
        }
        setInterval(nextSlide, 5000);

        // Projects carousel functionality
        let currentProjectSlide = 0;
        const projectsSlider = document.getElementById('projectsSlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const projectCards = document.querySelectorAll('#projectsSlider .flex-shrink-0');
        const totalProjects = projectCards.length;

        function getVisibleCards() {
            if (window.innerWidth >= 1024) return 4;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }

        function updateProjectSlider() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalProjects - visibleCards);
            currentProjectSlide = Math.min(currentProjectSlide, maxSlide);
            const cardWidth = 100 / visibleCards;
            const translateX = -(currentProjectSlide * cardWidth);
            projectsSlider.style.transform = `translateX(${translateX}%)`;
            prevBtn.disabled = currentProjectSlide === 0;
            nextBtn.disabled = currentProjectSlide >= maxSlide;
        }

        function nextProject() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalProjects - visibleCards);
            if (currentProjectSlide < maxSlide) {
                currentProjectSlide++;
                updateProjectSlider();
            }
        }

        function prevProject() {
            if (currentProjectSlide > 0) {
                currentProjectSlide--;
                updateProjectSlider();
            }
        }
        nextBtn.addEventListener('click', nextProject);
        prevBtn.addEventListener('click', prevProject);
        window.addEventListener('resize', updateProjectSlider);
        updateProjectSlider();

        // News tab switching functionality
        document.querySelectorAll('.news-tab').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.news-tab').forEach(btn => {
                    btn.classList.remove('active', 'border-red-500', 'text-gray-800', 'font-semibold');
                    btn.classList.add('text-gray-600', 'font-medium');
                });
                this.classList.add('active', 'border-red-500', 'text-gray-800', 'font-semibold');
                this.classList.remove('text-gray-600', 'font-medium');
                document.querySelectorAll('.news-content').forEach(content => {
                    content.classList.add('hidden');
                });
                const tab = this.getAttribute('data-tab');
                const targetContent = document.getElementById('content-' + tab);
                if (targetContent) {
                    targetContent.classList.remove('hidden');
                }
            });
        });

        // Featured Companies carousel functionality
        let currentCompanySlide = 0;
        const companiesSlider = document.getElementById('companiesSlider');
        const companiesPrevBtn = document.getElementById('companiesPrevBtn');
        const companiesNextBtn = document.getElementById('companiesNextBtn');
        const companyCards = document.querySelectorAll('#companiesSlider .flex-shrink-0');
        const totalCompanies = companyCards.length;

        function updateCompaniesSlider() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCompanies - visibleCards);
            currentCompanySlide = Math.min(currentCompanySlide, maxSlide);
            const cardWidth = 100 / visibleCards;
            const translateX = -(currentCompanySlide * cardWidth);
            companiesSlider.style.transform = `translateX(${translateX}%)`;
            companiesPrevBtn.disabled = currentCompanySlide === 0;
            companiesNextBtn.disabled = currentCompanySlide >= maxSlide;
        }

        function nextCompany() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCompanies - visibleCards);
            if (currentCompanySlide < maxSlide) {
                currentCompanySlide++;
                updateCompaniesSlider();
            }
        }

        function prevCompany() {
            if (currentCompanySlide > 0) {
                currentCompanySlide--;
                updateCompaniesSlider();
            }
        }
        companiesNextBtn.addEventListener('click', nextCompany);
        companiesPrevBtn.addEventListener('click', prevCompany);
        window.addEventListener('resize', updateCompaniesSlider);
        updateCompaniesSlider();
    </script>
</div>