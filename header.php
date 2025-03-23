<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="dark:bg-slate-900 bg-white" <?php body_class(); ?>>
    <header id="mainHeader" class="fixed inset-x-0 top-0 z-50 bg-transparent transition-all duration-500 ease-in-out py-7 translate-y-0">
        <nav class="container mx-auto flex items-center justify-between pt-[90px] lg:px-8">
            <!-- logo -->
            <div class="flex lg:flex-1">
                <a class="transition duration-500 cursor-pointer hover:scale-110"
                    href="<?php echo esc_url(home_url('/test')); ?>">
                    <img src="<?php echo wp_get_attachment_url(attachment_url_to_postid('http://localhost:10004/wp-content/uploads/2025/03/img-header.png')); ?>">
                </a>
            </div>

            <!-- Botón Hamburguesa solo visible en móviles -->
            <div class="lg:hidden">
                <button id="drawerToggle" class="text-indigo-900 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- nav lg size -->
            <div class="hidden lg:flex lg:justify-between lg:items-center">
                <a class="button-header bg-[#E4E0FF] hover:bg-indigo-200" href="<?php echo esc_url(home_url('/libros')); ?>">
                    <span>📚</span>
                </a>
                <button type="button" onclick="openContactModal()" class="button-header bg-[#E4E0FF] hover:bg-indigo-200">
                    Contáctanos
                </button>
                <button type="button" onclick="toggleTheme()" class="button-header bg-[#E4E0FF] hover:bg-indigo-200 text-xl">
                    🌙 / ☀️
                </button>
            </div>
        </nav>
    </header>


    <!-- Drawer lateral -->
    <div id="mobileDrawer" class="fixed top-0 right-0 z-50 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex items-center justify-between px-6 pb-4 pt-16 border-b">
            <span class="font-semibold text-lg">Menú</span>
            <button id="drawerClose" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flex flex-col gap-4 justify-center items-center px-6 py-4">
            <a class="button-header bg-[#E4E0FF] hover:bg-indigo-200 w-full" href="<?php echo esc_url(home_url('/libros')); ?>">
                <span>📚</span>
            </a>
            <button type="button" onclick="openContactModal()" class="button-header bg-[#E4E0FF] hover:bg-indigo-200 w-full text-left">
                Contáctanos
            </button>
            <button type="button" onclick="toggleTheme()" class="button-header bg-[#E4E0FF] hover:bg-indigo-200 w-full text-left text-xl">
                🌙 / ☀️
            </button>
        </div>
    </div>

    <!-- Overlay oscuro (opcional) -->
    <div id="drawerOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>