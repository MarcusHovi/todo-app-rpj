<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Marek Hovancak">
    <meta name="description" content="To do list">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Alata|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= asset( '/css/style.css' ) ?>">
    <link rel="icon" href="<?= asset( '/img/logo-classic.svg' ) ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Todo App</title>
</head>
<body>
<main>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center h-16">
                    <div class="flex items-center w-full">
                        <div class="flex-shrink-0 basis-[8%]">
                            <a href="<?= BASE_URL ?>" target="_self">
                                <img class="h-12 w-12" src="<?= asset( '/img/logo-classic.svg' ) ?>"
                                     alt="Logo">
                            </a>
                        </div>
                        <div class="hidden md:block basis-[8%]">
                            <div class="flex items-baseline space-x-4">
                                <div id="sign_out"
                                     class="text-gray-200 hover:bg-red-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                    Sign out
                                </div>

                            </div>

                        </div>
                        <div class="basis-[84%]">
                            <div class="hidden md:block">
                                <div class="flex flex-row-reverse items-center px-5">
                                    <svg class="ml-6" width="36" height="36" viewBox="0 0 150 150" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M108.506 34.6154C108.506 52.8915 93.5491 67.7308 75.0699 67.7308C56.5907 67.7308 41.634 52.8915 41.634 34.6154C41.634 16.3393 56.5907 1.5 75.0699 1.5C93.5491 1.5 108.506 16.3393 108.506 34.6154Z"
                                                  fill="white" fill-opacity="0.5" stroke="white" stroke-width="6"/>
                                            <mask id="path-4-inside-1" fill="white">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M3.29903 116.026C-1.56047 110.056 -2.3872 101.752 1.32675 95.01C5.1309 88.1039 9.8839 81.794 15.4101 76.2558C21.4701 70.1827 30.6748 69.4715 38.9247 71.8266C50.2371 75.0559 62.1822 76.785 74.5312 76.785C86.8803 76.785 98.8254 75.0559 110.138 71.8266C118.388 69.4715 127.592 70.1827 133.652 76.2558C139.271 81.8864 144.09 88.3148 147.925 95.3563C151.607 102.116 150.741 110.415 145.854 116.362C128.974 136.9 103.374 150 74.7139 150C45.898 150 20.1751 136.757 3.29903 116.026Z"/>
                                            </mask>
                                            <path fill-rule="evenodd" clip-rule="evenodd" stroke="white"
                                                  stroke-width="4"
                                                  d="M3.29903 116.026C-1.56047 110.056 -2.3872 101.752 1.32675 95.01C5.1309 88.1039 9.8839 81.794 15.4101 76.2558C21.4701 70.1827 30.6748 69.4715 38.9247 71.8266C50.2371 75.0559 62.1822 76.785 74.5312 76.785C86.8803 76.785 98.8254 75.0559 110.138 71.8266C118.388 69.4715 127.592 70.1827 133.652 76.2558C139.271 81.8864 144.09 88.3148 147.925 95.3563C151.607 102.116 150.741 110.415 145.854 116.362C128.974 136.9 103.374 150 74.7139 150C45.898 150 20.1751 136.757 3.29903 116.026Z"
                                                  fill="white" fill-opacity="0.5"/>
                                            <path d="M147.925 95.3563L145.291 96.7913L147.925 95.3563ZM145.854 116.362L143.536 114.457L145.854 116.362ZM110.138 71.8266L109.314 68.9418L110.138 71.8266ZM133.652 76.2558L131.529 78.3748L133.652 76.2558ZM1.32675 95.01L-1.30097 93.5626L1.32675 95.01ZM13.2865 74.1368C7.56324 79.8724 2.64002 86.4081 -1.30097 93.5626L3.95446 96.4575C7.62178 89.7998 12.2046 83.7155 17.5337 78.3748L13.2865 74.1368ZM74.5312 73.785C62.4635 73.785 50.7954 72.0955 39.7482 68.9418L38.1012 74.7114C49.6787 78.0164 61.9009 79.785 74.5312 79.785V73.785ZM109.314 68.9418C98.2671 72.0954 86.599 73.785 74.5312 73.785V79.785C87.1615 79.785 99.3838 78.0164 110.961 74.7113L109.314 68.9418ZM150.56 93.9213C146.587 86.6264 141.595 79.9681 135.776 74.1368L131.529 78.3748C136.947 83.8047 141.593 90.0031 145.291 96.7913L150.56 93.9213ZM143.536 114.457C127.202 134.332 102.439 147 74.7139 147V153C104.309 153 130.746 139.469 148.172 118.266L143.536 114.457ZM74.7139 147C46.8384 147 21.9564 134.194 5.62564 114.132L0.972429 117.92C18.3937 139.321 44.9575 153 74.7139 153V147ZM145.291 96.7913C148.376 102.455 147.663 109.435 143.536 114.457L148.172 118.266C153.819 111.395 154.839 101.777 150.56 93.9213L145.291 96.7913ZM110.961 74.7113C118.638 72.52 126.534 73.3693 131.529 78.3748L135.776 74.1368C128.651 66.996 118.138 66.423 109.314 68.9418L110.961 74.7113ZM-1.30097 93.5626C-5.61721 101.398 -4.64281 111.021 0.972429 117.92L5.62564 114.132C1.52188 109.09 0.842803 102.106 3.95446 96.4575L-1.30097 93.5626ZM17.5337 78.3748C22.5284 73.3694 30.4248 72.52 38.1012 74.7114L39.7482 68.9418C30.9248 66.4231 20.4118 66.996 13.2865 74.1368L17.5337 78.3748Z"
                                                  fill="white" stroke="white" stroke-width="4"
                                                  mask="url(#path-4-inside-1)"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="150" height="150" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="ml-3 text-right">
                                        <div class="text-base font-medium leading-none text-white mb-1"><?= $_SESSION[ "name" ] ?></div>
                                        <div class="text-sm font-medium leading-none text-gray-200"><?= $_SESSION[ "email" ] ?></div>
                                        <input type="hidden" name="id_user" value="<?= $_SESSION[ "ID" ] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            Mobile-->
            <div class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <div>
                        <div id="sign_out"
                             class="mt-6 text-gray-400 hover:bg-red-600 hover:text-white px-3 py-2  rounded-md text-sm font-medium">
                            Sign out
                        </div>
                    </div>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white mb-1"><?= $_SESSION[ "name" ] ?></div>
                            <div class="text-sm font-medium leading-none text-gray-200"><?= $_SESSION[ "email" ] ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
