<?php include 'ntd.php'; ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Thông tin thanh toán</title>
        <link rel="shortcut icon" href="<? echo $ntdicon; ?>">
        <link rel="icon" type="image/png" href="<? echo $ntdicon; ?>">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/sweetalert2.all.min.js"></script>
        <script>
            function copy(element) 
            {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();
                Swal.fire("Thông báo", "Copy thành công!", "success");
            }
        </script>
    </head>
    <main class="min-h-screen relative bg-gray-50 pb-10">
        <div class="h-60 w-full"><img src="<? echo $ntdbanner; ?>" alt="cover" class="w-full h-full object-cover object-center" /></div>
        <div class="container px-4">
            <div class="flex flex-wrap px-4">
                <div class="w-full lg:w-1/3">
                    <aside class="sticky top-0 bg-white md:mx-8 lg:mx-4 mb-8 p-6 shadow-md rounded-md -mt-40">
                        <div class="w-24 h-24 rounded-md overflow-hidden mx-auto mb-5"><img src="<? echo $ntdavt; ?>" alt="Đạt Coder" class="w-full" /></div>
                        <div class="text-center">
                            <h1 class="text-xl text-gray-800 font-bold mb-1">
                               <? echo $ten; ?>
                            </h1>
                            <p class="text-sm text-gray-400 mb-3">
                               <? echo $tieusu; ?>
                            </p>
                            <ul class="flex flex-wrap justify-center">
                                <li class="m-2">
                                    <a href="#0" class="w-8 h-8 bg-purple-100 rounded text-purple-800 flex items-center justify-center hover:text-white hover:bg-purple-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="m-2">
                                    <a href="#0" class="w-8 h-8 bg-purple-100 rounded text-purple-800 flex items-center justify-center hover:text-white hover:bg-purple-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="m-2">
                                    <a href="#0" class="w-8 h-8 bg-purple-100 rounded text-purple-800 flex items-center justify-center hover:text-white hover:bg-purple-600">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-start pt-4">
                            <h3 class="text-md mb-2 uppercase font-medium text-gray-800">Thông Tin</h3>
                            <p class="text-gray-400 text font-light leading-relaxed">
                         <? echo $tt; ?>
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="w-full lg:w-2/3">
                    <section class="py-8">
                        <div class="flex flex-wrap md:px-4">
                            <div class="w-full">
                                <div class="md:mx-4">
                                    <h2 class="text-2xl text-gray-800 font-medium mb-4">Thông tin thanh toán</h2>

                                    <div class="grid grid-cols-12 gap-3">
                                        <div class="bg-white card-case overflow-hidden shadow-md col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2 text-center"><img class="img-center" src="https://i.imgur.com/ujzh8bW.png" style="height: 55px; width: 55px;" /></div>
                                                <p class="text-gray-700 text-center">
                                                    <b>
                                                        MBBANK
                                                    </b>
                                                    <br />
                                                    <b>STK: </b><b id="wallet1"><? echo $tkmbbank; ?></b>
                                                    <br />
                                                    <b>TÊN: <? echo $tenmbbank; ?></b>
                                                    <br />
                                                    <button class="mt-3 bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded-full" onclick="copy('#wallet1');">Copy</button>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="bg-white card-case overflow-hidden shadow-md col-span-4 md:col-span-6 sm:col-span-6 col-span-12">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2 text-center"><img class="img-center" src="https://i.imgur.com/MJHYQae.jpg" style="height: 55px; width: 55px;" /></div>
                                                <p class="text-gray-700 text-center">
                                                    <b>
                                                        MOMO
                                                    </b>
                                                    <br />
                                                    <b>STK: </b><b id="wallet3"><? echo $tkmomo; ?></b>
                                                    <br />
                                                    <b>TÊN: <? echo $tenmomo; ?></b>
                                                    <br />
                                                    <button type="button" class="mt-3 bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded-full" onclick="copy('#wallet3');">Copy</button>
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <div class="py-4 md:mx-4">
                                    <h2 class="text-2xl text-gray-800 font-medium mb-4">Kỹ năng</h2>
                                    <div class="flex flex-wrap px-4 py-4 bg-white shadow-lg">
                                        <div class="w-full md:w-1/2">
                                            <div class="mb-4 md:mx-4">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h5 class="text-md text-gray-400 font-light">Css</h5>
                                                    <span class="text-md text-purple-600 font-bold">45%</span>
                                                </div>
                                                <div class="w-full bg-purple-200 relative h-2 rounded"><div class="absolute h-full left-0 top-0 bg-purple-600 rounded" style="width: 45%;"></div></div>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2">
                                            <div class="mb-4 md:mx-4">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h5 class="text-md text-gray-400 font-light">Bootstrap</h5>
                                                    <span class="text-md text-purple-600 font-bold">69%</span>
                                                </div>
                                                <div class="w-full bg-purple-200 relative h-2 rounded"><div class="absolute h-full left-0 top-0 bg-purple-600 rounded" style="width: 69%;"></div></div>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2">
                                            <div class="mb-4 md:mx-4">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h5 class="text-md text-gray-400 font-light">Php</h5>
                                                    <span class="text-md text-purple-600 font-bold">70%</span>
                                                </div>
                                                <div class="w-full bg-purple-200 relative h-2 rounded"><div class="absolute h-full left-0 top-0 bg-purple-600 rounded" style="width: 70%;"></div></div>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2">
                                            <div class="mb-4 md:mx-4">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h5 class="text-md text-gray-400 font-light">Độ Lười</h5>
                                                    <span class="text-md text-purple-600 font-bold">100%</span>
                                                </div>
                                                <div class="w-full bg-purple-200 relative h-2 rounded"><div class="absolute h-full left-0 top-0 bg-purple-600 rounded" style="width: 100%;"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer class="bg-white p-4 absolute bottom-0 left-0 w-full">
            <div class="container px-4">
                <p class="text-sm text-gray-400 text-center">&#174; Copyright <script>document.write(new Date().getFullYear())</script> <a class="text-purple-600" href="https://www.facebook.com/<?=$idfb;?>" rel="nofollow"> <?echo $tencopyright ?></a></p>
            </div>
        </footer>
    </main>

</html>
