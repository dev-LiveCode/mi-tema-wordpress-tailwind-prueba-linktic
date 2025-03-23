<?php wp_footer(); ?>

    <?php get_template_part('template-parts/contact-modal'); ?>

    <footer class="relative py-5 bg-[#3F327A] h-[298px]">
        <div class="container mx-auto px-6 grid grid-cols-1 md:flex md:items-center md:justify-between h-full ">
            <div class="flex lg:flex-1 ">
                <a class="transition duration-500 cursor-pointer hover:scale-110"
                href="<?php echo esc_url(home_url('/test')); ?>"
                    >
                    <img src="<?php echo wp_get_attachment_url(attachment_url_to_postid('http://localhost:10004/wp-content/uploads/2025/03/Capa-2.png')); ?>"
                    >
                </a>
            </div>
            <div class="flex lg:flex-1 ">
                <a class="text-white hover:underline font-medium text-base" href="https://www.livecodespace.com" target="_blank">
                    Políticas de tratamiento y protección de datos
                </a>
            </div>

        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modal.js"></script>
</body>
</html>