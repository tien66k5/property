@extends('property::layouts.master')
@section('content')
<div class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header
        class="bg-white border-b shadow-sm px-4 py-3 mx-2 my-4 rounded-lg flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <!-- Thanh tìm kiếm và bộ lọc -->
        <div class="w-full">
            <!-- Thanh tìm kiếm -->
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-4 relative">
                <div class="flex flex-1 items-center bg-gray-100 rounded-lg px-3 py-2">
                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2" />
                    </svg>
                    <input type="text" placeholder="Quận Cầu Giấy"
                        class="bg-transparent outline-none flex-1 text-gray-700 text-base min-w-0" />
                    <!-- Nút tỉnh/thành -->
                    <div class="relative">
                        <button id="btnTinhThanh" type="button"
                            class="mx-2 text-gray-700 font-medium flex items-center gap-1 focus:outline-none">
                            <span id="selectedTinhThanh">Cần Thơ</span>
                            <svg class="inline w-4 h-4 ml-1 text-gray-400" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown tỉnh/thành -->
                        <div id="dropdownTinhThanh"
                            class="absolute right-0 top-10 z-50 w-[600px] max-w-[90vw] bg-white rounded-lg shadow-lg border p-6 hidden">
                            <!-- Thanh tìm kiếm tỉnh/thành -->
                           
                            <!-- Top tỉnh thành nổi bật -->
                            <div>
                                <div class="font-semibold mb-2">Top tỉnh thành nổi bật</div>
                                <div class="flex gap-3 mb-4">
                                    <button class="relative w-32 h-20 rounded-lg overflow-hidden group">
                                        <img src="https://staticfile.batdongsan.com.vn/images/newhome/hn.jpg"
                                            class="object-cover w-full h-full" />
                                        <span
                                            class="absolute bottom-2 left-2 text-white font-semibold text-base drop-shadow">Hà
                                            Nội</span>
                                    </button>
                                    <button class="relative w-32 h-20 rounded-lg overflow-hidden group">
                                        <img src="https://staticfile.batdongsan.com.vn/images/newhome/hcm.jpg"
                                            class="object-cover w-full h-full" />
                                        <span
                                            class="absolute bottom-2 left-2 text-white font-semibold text-base drop-shadow">Hồ
                                            Chí Minh</span>
                                    </button>
                                    <button class="relative w-32 h-20 rounded-lg overflow-hidden group">
                                        <img src="https://staticfile.batdongsan.com.vn/images/newhome/dn.jpg"
                                            class="object-cover w-full h-full" />
                                        <span
                                            class="absolute bottom-2 left-2 text-white font-semibold text-base drop-shadow">Đà
                                            Nẵng</span>
                                    </button>
                                    <button class="relative w-32 h-20 rounded-lg overflow-hidden group">
                                        <img src="https://staticfile.batdongsan.com.vn/images/newhome/bd.jpg"
                                            class="object-cover w-full h-full" />
                                        <span
                                            class="absolute bottom-2 left-2 text-white font-semibold text-base drop-shadow">Bình
                                            Dương</span>
                                    </button>
                                    <button class="relative w-32 h-20 rounded-lg overflow-hidden group">
                                        <img src="https://staticfile.batdongsan.com.vn/images/newhome/dn2.jpg"
                                            class="object-cover w-full h-full" />
                                        <span
                                            class="absolute bottom-2 left-2 text-white font-semibold text-base drop-shadow">Đồng
                                            Nai</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Danh sách tỉnh thành -->
                            <div>
                                <div class="font-semibold mb-2">Danh sách tỉnh thành</div>
                                <div class="grid grid-cols-4 gap-2 max-h-60 overflow-y-auto">
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('An Giang')">An Giang</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bà Rịa Vũng Tàu')">Bà Rịa Vũng Tàu</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bắc Giang')">Bắc Giang</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bắc Kạn')">Bắc Kạn</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bạc Liêu')">Bạc Liêu</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bắc Ninh')">Bắc Ninh</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bến Tre')">Bến Tre</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bình Định')">Bình Định</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bình Dương')">Bình Dương</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bình Phước')">Bình Phước</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Bình Thuận')">Bình Thuận</button>
                                    <button class="text-left px-2 py-1 rounded hover:bg-gray-100"
                                        onclick="selectTinhThanh('Cà Mau')">Cà Mau</button>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="bg-red-500 text-white px-4 py-2 rounded ml-2 font-semibold text-sm">Tìm kiếm</button>
                </div>
                <!-- ... -->
            </div>
            <!-- Bộ lọc -->
            <div class="flex flex-wrap items-center gap-2 mt-3">
                <button id="openFilterModal"
                    class="flex items-center border rounded px-3 py-1 text-gray-700 font-medium bg-white text-sm">
                    <svg class="w-5 h-5 mr-1 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                    Lọc
                </button>
                <select class="border rounded px-3 py-1 bg-white text-gray-700 text-sm">
                    <option>Loại nhà đất</option>
                </select>
                <select class="border rounded px-3 py-1 bg-white text-gray-700 text-sm">
                    <option>Mức giá</option>
                </select>
                <label class="flex items-center border rounded px-3 py-1 bg-white cursor-pointer text-sm">
                    <svg class="w-5 h-5 text-green-600 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Tin xác thực
                    <input type="checkbox" class="ml-2 accent-teal-500" />
                </label>
                <label class="flex items-center border rounded px-3 py-1 bg-white cursor-pointer text-sm">
                    <svg class="w-5 h-5 text-teal-500 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
                        <path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Môi giới chuyên nghiệp
                    <input type="checkbox" class="ml-2 accent-teal-500" />
                </label>
            </div>
        </div>
        <!-- ...existing code... -->
        <div id="filterModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] overflow-y-auto p-0 relative">
                <button id="closeFilterModal"
                    class="absolute top-3 right-4 text-gray-500 hover:text-red-500 text-2xl font-bold">&times;</button>
                <div class="p-6 pb-2">
                    <h2 class="text-xl font-semibold mb-4">Bộ lọc</h2>
                    <!-- Tabs -->
                    <div class="flex mb-4 border rounded-lg overflow-hidden">
                        <button class="flex-1 py-2 text-gray-500 bg-white">Tìm mua</button>
                        <button class="flex-1 py-2 text-white bg-gray-800 font-semibold">Tìm thuê</button>
                    </div>
                    <!-- Loại bất động sản -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-1">Loại bất động sản</div>
                        <button id="openLoaiNhaDatModal" class="text-red-600 text-sm font-medium">+ Thêm</button>
                    </div>
                    <!-- Modal con: Loại nhà đất -->

                    <!-- Khu vực & Dự án -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-1">Khu vực & Dự án</div>
                        <span class="inline-flex items-center bg-gray-100 rounded-full px-3 py-1 text-sm mr-2 mb-1">
                            Thành phố Cần Thơ
                            <button class="ml-2 text-gray-400 hover:text-red-500">&times;</button>
                        </span>
                        <button id="openKhuVucDuAnModal" class="text-red-600 text-sm font-medium">+ Thêm</button>
                    </div>
                    <!-- Mức giá -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-1">Mức giá</div>

                        <button id="openMucGiaModal"
                            class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Diện tích -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-1">Diện tích</div>

                        <button id="openDienTichModal"
                            class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Uy tín & Chất lượng -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Uy tín &amp; Chất lượng</div>
                        <div class="space-y-2">
                            <label class="flex items-center justify-between border rounded-lg px-3 py-2">
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Chỉ hiển thị Tin xác thực
                                </span>
                                <input type="checkbox" class="toggle accent-teal-500" />
                            </label>
                            <label class="flex items-center justify-between border rounded-lg px-3 py-2">
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Chỉ hiển thị tin đăng của Môi giới chuyên nghiệp
                                </span>
                                <input type="checkbox" class="toggle accent-teal-500" />
                            </label>
                        </div>
                    </div>
                    <!-- Số phòng ngủ -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Số phòng ngủ</div>
                        <div class="flex gap-2">
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">1</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">2</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">3</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">4</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">5+</button>
                        </div>
                    </div>
                    <!-- Hướng nhà -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Hướng nhà</div>
                        <div class="grid grid-cols-4 gap-2">
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Bắc</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Đông Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông Bắc</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Đông" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Đông Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Tây Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Tây" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-nha" value="Tây Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây Bắc</div>
                            </label>
                        </div>
                    </div>
                    <!-- Hướng ban công -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Hướng ban công</div>
                        <div class="grid grid-cols-4 gap-2">
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Bắc</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Đông Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông Bắc</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Đông" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Đông Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Đông Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Tây Nam" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây Nam</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Tây" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="huong-ban-cong" value="Tây Bắc" class="peer hidden">
                                <div
                                    class="px-3 py-2 rounded-lg bg-gray-100 text-center peer-checked:bg-teal-500 peer-checked:text-white transition">
                                    Tây Bắc</div>
                            </label>
                        </div>
                    </div>
                    <!-- Thời gian dự kiến vào ở, Mức giá điện/nước/internet -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Thời gian dự kiến vào ở</div>
                        <button id="openThoiGianVaoOModal"
                            class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Mức giá điện</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2v2m0 16v2m8-10h2M2 12H4m15.07-7.07l1.41 1.41M4.93 19.07l1.41-1.41M19.07 19.07l-1.41-1.41M4.93 4.93l-1.41 1.41" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Mức giá nước</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Mức giá internet</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left mb-2">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 110-16 8 8 0 010 16zm0-14a6 6 0 100 12 6 6 0 000-12z" />
                            </svg>
                            <span class="flex-1">Tất cả</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Tiện ích -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Tiện ích</div>
                        <div class="flex flex-wrap gap-2">
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">Có dịch vụ bảo vệ</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">Có camera</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">Có PCCC</button>
                        </div>
                    </div>
                    <!-- Tin có ảnh/video -->
                    <div class="mb-4">
                        <div class="text-sm font-semibold mb-2">Tin có ảnh/video</div>
                        <div class="flex flex-wrap gap-2">
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">Có video</button>
                            <button class="px-4 py-1 rounded-full bg-gray-100 font-medium">Có hình 3D và 360°</button>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <div class="flex gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Xem kết quả</button>
                </div>
            </div>
        </div>

        <div id="modalLoaiNhaDat"
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] overflow-y-auto relative">
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <button id="closeLoaiNhaDat" class="text-2xl text-gray-500">&larr;</button>
                    <span class="font-semibold text-lg">Loại nhà đất</span>
                    <button class="text-2xl text-gray-500"
                        onclick="document.getElementById('modalLoaiNhaDat').classList.add('hidden')">&times;</button>
                </div>
                <div class="p-6">
                    <!-- Danh sách loại nhà đất -->
                    <ul class="divide-y">
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏠</span> Tất cả nhà đất</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3 bg-gray-100">
                            <span class="flex items-center gap-2"><span>🏢</span> Căn hộ chung cư</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏬</span> Chung cư mini, căn hộ dịch
                                vụ</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏡</span> Nhà riêng</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏘️</span> Nhà biệt thự, liền
                                kề</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏙️</span> Nhà mặt phố</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🛏️</span> Nhà trọ, phòng trọ</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏪</span> Shophouse, nhà phố thương
                                mại</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏢</span> Văn phòng</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏬</span> Cửa hàng, ki ốt</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🏭</span> Kho, nhà xưởng, đất</span>
                            <input type="checkbox" />
                        </li>
                        <li class="flex items-center justify-between py-3">
                            <span class="flex items-center gap-2"><span>🌐</span> Bất động sản khác</span>
                            <input type="checkbox" />
                        </li>
                    </ul>
                </div>
                <div class="flex gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Áp
                        dụng</button>
                </div>
            </div>
        </div>
        <!-- ...existing code... -->

        <!-- Modal con: Thời gian dự kiến vào ở -->
        <div id="modalThoiGianVaoO"
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] h-[90vh] overflow-y-auto relative">
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <button id="closeThoiGianVaoOModal" class="text-2xl text-gray-500">&larr;</button>
                    <span class="font-semibold text-lg">Thời gian dự kiến vào ở</span>
                    <button class="text-2xl text-gray-500"
                        onclick="document.getElementById('modalThoiGianVaoO').classList.add('hidden')">&times;</button>
                </div>
                <div class="p-6 pb-[250px]">
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="thoi-gian-vao-o" checked class="accent-red-500" />
                                <span>Tất cả</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="thoi-gian-vao-o" class="accent-red-500" />
                                <span>Ở ngay</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="thoi-gian-vao-o" class="accent-red-500" />
                                <span>1 - 2 tuần</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="thoi-gian-vao-o" class="accent-red-500" />
                                <span>1 tháng</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="thoi-gian-vao-o" class="accent-red-500" />
                                <span>Thỏa thuận</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="flex  gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Áp dụng</button>
                </div>
            </div>
        </div>
        <!-- ...existing code... -->
        <!-- Modal con: Khu vực & Dự án -->
        <div id="modalKhuVucDuAn"
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] overflow-y-auto relative">
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <button id="closeKhuVucDuAn" class="text-2xl text-gray-500">&larr;</button>
                    <span class="font-semibold text-lg">Khu vực &amp; Dự án</span>
                    <button class="text-2xl text-gray-500"
                        onclick="document.getElementById('modalKhuVucDuAn').classList.add('hidden')">&times;</button>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <div class="text-sm font-semibold mb-1">Tỉnh/Thành phố</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left">
                            <span class="flex-1">Cần Thơ</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="text-sm font-semibold mb-1">Quận/Huyện</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left">
                            <span class="flex-1 text-gray-400">Chọn Quận/Huyện</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="text-sm font-semibold mb-1">Phường/Xã</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left bg-gray-100"
                            disabled>
                            <span class="flex-1 text-gray-400">Chọn Phường/Xã</span>
                            <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="text-sm font-semibold mb-1">Đường/Phố</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left bg-gray-100"
                            disabled>
                            <span class="flex-1 text-gray-400">Chọn Đường/Phố</span>
                            <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="text-sm font-semibold mb-1">Dự án</div>
                        <button class="w-full flex items-center border rounded-lg px-3 py-3 text-left bg-gray-100"
                            disabled>
                            <span class="flex-1 text-gray-400">Chọn Dự án</span>
                            <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Áp dụng</button>
                </div>
            </div>
        </div>
        <!-- ...existing code... -->

        <!-- Modal con: Mức giá -->
        <div id="modalMucGia" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] h-[90vh] overflow-y-auto relative">
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <button id="closeMucGiaModal" class="text-2xl text-gray-500">&larr;</button>
                    <span class="font-semibold text-lg">Mức giá</span>
                    <button class="text-2xl text-gray-500"
                        onclick="document.getElementById('modalMucGia').classList.add('hidden')">&times;</button>
                </div>
                <div class="p-6 space-y-4">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <div class="text-sm font-semibold mb-1">Giá thấp nhất</div>
                            <input type="text" placeholder="Từ"
                                class="w-full border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-teal-500" />
                        </div>
                        <div>
                            <div class="text-sm font-semibold mb-1">Giá thấp nhất</div>
                            <input type="text" placeholder="Đến"
                                class="w-full border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-teal-500" />
                        </div>
                    </div>
                    <!-- Thanh range giả lập -->
                    <div class="w-full flex items-center mb-4">
                        <div class="w-full h-2 bg-teal-500 rounded-full relative flex items-center">
                            <div
                                class="absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-teal-500 rounded-full shadow">
                            </div>
                            <div
                                class="absolute right-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-teal-500 rounded-full shadow">
                            </div>
                        </div>
                    </div>
                    <!-- Danh sách mức giá -->
                    <div>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" checked class="accent-red-500" />
                                    <span>Tất cả mức giá</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>Dưới 1 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>1 - 3 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>3 - 5 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>5 - 10 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>10 - 40 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>40 - 70 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>70 - 100 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="muc-gia" class="accent-red-500" />
                                    <span>Trên 100 triệu</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Áp dụng</button>
                </div>
            </div>
        </div>
        <!-- ...existing code... -->

        <!-- Modal con: Diện tích -->
        <div id="modalDienTich"
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-lg max-h-[90vh] h-[90vh] overflow-y-auto relative">
                <div class="flex items-center justify-between px-6 py-4 border-b">
                    <button id="closeDienTichModal" class="text-2xl text-gray-500">&larr;</button>
                    <span class="font-semibold text-lg">Diện tích</span>
                    <button class="text-2xl text-gray-500"
                        onclick="document.getElementById('modalDienTich').classList.add('hidden')">&times;</button>
                </div>
                <div class="p-6 space-y-4">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <div class="text-sm font-semibold mb-1">Diện tích nhỏ nhất</div>
                            <input type="text" placeholder="Từ"
                                class="w-full border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-teal-500" />
                        </div>
                        <div>
                            <div class="text-sm font-semibold mb-1">Diện tích nhỏ nhất</div>
                            <input type="text" placeholder="Đến"
                                class="w-full border rounded px-3 py-2 outline-none focus:ring-2 focus:ring-teal-500" />
                        </div>
                    </div>
                    <!-- Thanh range giả lập -->
                    <div class="w-full flex items-center mb-4">
                        <div class="w-full h-2 bg-teal-500 rounded-full relative flex items-center">
                            <div
                                class="absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-teal-500 rounded-full shadow">
                            </div>
                            <div
                                class="absolute right-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-teal-500 rounded-full shadow">
                            </div>
                        </div>
                    </div>
                    <!-- Danh sách diện tích -->
                    <div>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" checked class="accent-red-500" />
                                    <span>Tất cả diện tích</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>Dưới 30 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>30 - 50 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>50 - 80 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>80 - 100 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>100 - 150 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>150 - 200 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>200 - 250 m²</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-3">
                                    <input type="radio" name="dien-tich" class="accent-red-500" />
                                    <span>250 - 300 m²</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-3 border-t px-6 py-4 bg-white rounded-b-lg">
                    <button class="flex-1 border border-gray-300 rounded-lg py-2 font-semibold bg-white">Đặt
                        lại</button>
                    <button class="flex-[2] bg-red-500 text-white rounded-lg py-2 font-semibold">Áp dụng</button>
                </div>
            </div>
        </div>
        <!-- ...existing code... -->
    </header>

    <main class="container mx-auto flex flex-col-reverse gap-6 mt-4 px-2 md:flex-row-reverse md:gap-6 md:mt-6 md:px-4">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 space-y-6 md:block">
            <!-- Lọc theo khoảng giá -->
            <div class="bg-white rounded shadow p-4">
                <h2 class="font-semibold mb-2 text-base">Lọc theo khoảng giá</h2>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="hover:text-red-500">Thỏa thuận</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 1 triệu</a></li>
                </ul>
            </div>
            <!-- Lọc theo diện tích -->
            <div class="bg-white rounded shadow p-4">
                <h2 class="font-semibold mb-2 text-base">Lọc theo diện tích</h2>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                    <li><a href="#" class="hover:text-red-500">Dưới 30 m²</a></li>
                </ul>
            </div>
            <!-- Nhà đất cho thuê -->
            <div class="bg-white rounded shadow p-4">
                <h2 class="font-semibold mb-2 text-base">Nhà đất cho thuê</h2>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                    <li><a href="#" class="hover:text-red-500">Hồ Chí Minh (27.000)</a></li>
                </ul>
            </div>
            <!-- Bài viết liên quan -->
            <div class="bg-white rounded shadow p-4">
                <h2 class="font-semibold mb-2 text-base">Bài viết được quan tâm</h2>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                    <li><a href="#" class="hover:text-red-500">136 Tủ Thông Minh...</a></li>
                </ul>
            </div>
        </aside>

        <section class="flex-1 space-y-6">
            <nav class="text-sm text-gray-500 mb-2">
                <span>Cho thuê</span> / <span>Tất cả BĐS trên toàn quốc</span>
            </nav>

            <div class="mb-4">
                <h1 class="text-2xl font-bold">Cho thuê nhà đất trên toàn quốc</h1>
                <p class="text-gray-500 text-sm">Hiện có <span class="font-semibold">46.545</span> bất động sản.</p>
            </div>

            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between mb-4">
                <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded text-xs font-semibold w-fit">Nhận email tin
                    mới</span>
                <select class="border rounded px-2 py-1 text-sm w-full sm:w-auto">
                    <option>Mặc định</option>
                    <option>Mới nhất</option>
                    <option>Giá thấp đến cao</option>
                    <option>Giá cao đến thấp</option>
                </select>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded shadow p-4 mb-6">
                    <div class="relative flex flex-col gap-2 mb-3 sm:flex-row">
                        <div class="w-full sm:w-2/3 h-48 rounded overflow-hidden">
                            <img src="https://file4.batdongsan.com.vn/crop/562x284/2025/06/09/20250609171835-6cb3_wm.jpg"
                                alt="Ảnh chính" class="object-cover w-full h-full">
                            <span
                                class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">VIP
                                KIM CƯƠNG</span>
                        </div>
                        <div class="flex flex-row sm:flex-col gap-1 w-full sm:w-1/3">
                            <img src="https://file4.batdongsan.com.vn/crop/283x141/2025/06/09/20250609171946-df1a_wm.jpg"
                                class="rounded object-cover h-20 sm:h-1/2 w-1/2 sm:w-full" />
                            <img src="https://file4.batdongsan.com.vn/crop/140x140/2025/06/09/20250609171948-1c5e_wm.jpg"
                                class="rounded object-cover h-20 sm:h-1/2 w-1/2 sm:w-full" />
                            <div
                                class="relative flex-1 bg-gray-100 rounded flex items-center justify-center min-h-[80px]">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                                <span
                                    class="absolute bottom-1 right-2 bg-black bg-opacity-60 text-white text-xs px-2 py-0.5 rounded flex items-center gap-1">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M17 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                    </svg>
                                    3
                                </span>
                            </div>
                        </div>
                    </div>

                    <h2 class="font-bold text-lg mb-1 uppercase">Cho thuê lô đất mặt phố Dương Đình Nghệ với 10.000m2,
                        vị trí siêu vip MP Dương Đình Nghệ, Cầu Giấy</h2>
                    <div class="flex flex-wrap items-center gap-4 text-base font-semibold mb-1">
                        <span class="text-red-600">100 triệu/tháng</span>
                        <span class="text-gray-700">· 10.000 m²</span>
                        <span class="text-gray-700">· 1 <svg class="inline w-4 h-4 ml-1" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                            </svg></span>
                        <span class="text-gray-700">· Cầu Giấy, Hà Nội</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">
                        Cho thuê Lô đất mặt phố Dương Đình Nghệ với diện tích lên đến 10.000m², tọa lạc tại Vị trí siêu
                        Vip MP Dương Đình Nghệ, Yên Hòa, Cầu Giấy, Hà Nội. Đây là một lựa chọn lý tưởng cho các doanh
                        nghiệp cần...
                    </p>

                    <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between mt-2">
                        <div class="flex items-center gap-2">
                            <span
                                class="bg-gray-200 text-gray-700 rounded-full w-8 h-8 flex items-center justify-center font-bold">D</span>
                            <div>
                                <div class="font-semibold text-gray-800 leading-none">Hoàng Dũng</div>
                                <div class="text-xs text-gray-500">Đăng hôm nay</div>
                            </div>
                        </div>
                        <button
                            class="bg-teal-500 text-white px-5 py-2 rounded font-semibold flex items-center gap-2 w-full sm:w-auto justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 10v6a2 2 0 002 2h14a2 2 0 002-2v-6" />
                                <path d="M16 3.13a4 4 0 01.88 7.76" />
                                <path d="M8 3.13a4 4 0 00-.88 7.76" />
                            </svg>
                            0911 081 *** · Hiện số
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@endsection

<script>
    const openBtn = document.getElementById('openFilterModal');
    const closeBtn = document.getElementById('closeFilterModal');
    const modal = document.getElementById('filterModal');
    openBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
    // Đóng modal khi click ra ngoài
    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });

    const openLoaiNhaDatBtn = document.getElementById('openLoaiNhaDatModal');
    const modalLoaiNhaDat = document.getElementById('modalLoaiNhaDat');
    const closeLoaiNhaDatBtn = document.getElementById('closeLoaiNhaDat');
    openLoaiNhaDatBtn.addEventListener('click', () => modalLoaiNhaDat.classList.remove('hidden'));
    closeLoaiNhaDatBtn.addEventListener('click', () => modalLoaiNhaDat.classList.add('hidden'));
    // Đóng modal loại nhà đất khi click ra ngoài
    modalLoaiNhaDat.addEventListener('click', (e) => {
        if (e.target === modalLoaiNhaDat) modalLoaiNhaDat.classList.add('hidden');
    });

    // ...existing code...
    const openKhuVucDuAnBtn = document.getElementById('openKhuVucDuAnModal');
    const modalKhuVucDuAn = document.getElementById('modalKhuVucDuAn');
    const closeKhuVucDuAnBtn = document.getElementById('closeKhuVucDuAn');
    openKhuVucDuAnBtn.addEventListener('click', () => modalKhuVucDuAn.classList.remove('hidden'));
    closeKhuVucDuAnBtn.addEventListener('click', () => modalKhuVucDuAn.classList.add('hidden'));
    modalKhuVucDuAn.addEventListener('click', (e) => {
        if (e.target === modalKhuVucDuAn) modalKhuVucDuAn.classList.add('hidden');
    });

    // ...existing code...
    const openMucGiaBtn = document.getElementById('openMucGiaModal');
    const modalMucGia = document.getElementById('modalMucGia');
    const closeMucGiaBtn = document.getElementById('closeMucGiaModal');
    openMucGiaBtn.addEventListener('click', () => modalMucGia.classList.remove('hidden'));
    closeMucGiaBtn.addEventListener('click', () => modalMucGia.classList.add('hidden'));
    modalMucGia.addEventListener('click', (e) => {
        if (e.target === modalMucGia) modalMucGia.classList.add('hidden');
    });

    // ...existing code...
    const openDienTichBtn = document.getElementById('openDienTichModal');
    const modalDienTich = document.getElementById('modalDienTich');
    const closeDienTichBtn = document.getElementById('closeDienTichModal');
    openDienTichBtn.addEventListener('click', () => modalDienTich.classList.remove('hidden'));
    closeDienTichBtn.addEventListener('click', () => modalDienTich.classList.add('hidden'));
    modalDienTich.addEventListener('click', (e) => {
        if (e.target === modalDienTich) modalDienTich.classList.add('hidden');
    });

    // ...existing code...
    const openThoiGianVaoOBtn = document.getElementById('openThoiGianVaoOModal');
    const modalThoiGianVaoO = document.getElementById('modalThoiGianVaoO');
    const closeThoiGianVaoOBtn = document.getElementById('closeThoiGianVaoOModal');
    openThoiGianVaoOBtn.addEventListener('click', () => modalThoiGianVaoO.classList.remove('hidden'));
    closeThoiGianVaoOBtn.addEventListener('click', () => modalThoiGianVaoO.classList.add('hidden'));
    modalThoiGianVaoO.addEventListener('click', (e) => {
        if (e.target === modalThoiGianVaoO) modalThoiGianVaoO.classList.add('hidden');
    });

        const btnTinhThanh = document.getElementById('btnTinhThanh');
    const dropdownTinhThanh = document.getElementById('dropdownTinhThanh');
    const selectedTinhThanh = document.getElementById('selectedTinhThanh');

    btnTinhThanh.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownTinhThanh.classList.toggle('hidden');
    });

    // Đóng dropdown khi click ra ngoài
    document.addEventListener('click', (e) => {
        if (!dropdownTinhThanh.contains(e.target) && !btnTinhThanh.contains(e.target)) {
            dropdownTinhThanh.classList.add('hidden');
        }
    });

    // Hàm chọn tỉnh/thành
    function selectTinhThanh(name) {
        selectedTinhThanh.textContent = name;
        dropdownTinhThanh.classList.add('hidden');
    }
</script>