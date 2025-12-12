<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</div> <!-- page com PT do header -->
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<!-- Permissão Cookies Pt e BR !-->

<footer id="colophon" class="max-w-full overflow-none flex bg-tertiary text-secondary @container md:pb-5" role="contentinfo">
    <div class="container max-w-7xl @md:flex">
        <?php do_action('tailpress_footer'); ?>
        <div class="mx-auto flex flex-col items-start lg:grid sm:grid-cols-2 lg:justify-center @sm:max-w-1/2">

            <div class="flex justify-center w-full lg:col-span-2 lg:m-4">
                <p class="font-bold text-center @md:text-left my-4">Almeida Cunha<br> <span class="font-normal text-sm">Advocacia e Consultoria</span></p>
            </div>

            <?php //endereço 
            ?>

            <div class="flex flex-col w-full items-start">
                <?php //icone 
                ?>
                <div class="flex items-center ">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <span class="font-semibold pl-2">Endereço / Address</span>
                </div>

                <?php //texto 
                ?>
                <div class="w-full pl-2">
                    <p class="font-ligh my-2">Rua Cabo Aylson Simões, 560 - Sala 607, Centro -Vila Velha / ES, cep: 29.100-320</p>
                </div>
            </div>

            <div class="flex flex-col w-full items-start">
                <?php //icone 
                ?>
                <div class="flex items-center">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="font-semibold pl-2">E-mail</span>
                </div>

                <?php //texto 
                ?>
                <div class="w-full pl-2">
                    <p class="font-ligh my-2">victor@almeidacunha.com</p>
                </div>
            </div>

            <div class="flex flex-col w-1/2 items-start">
                <?php //icone 
                ?>
                <div class="flex items-center ">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="font-semibold pl-2">Contato / Contact</span>
                </div>
                <div class="w-full pl-2">
                    <p class="font-light my-2">(27) 9 8811-4221 <br> (27) 3141-6460</p>
                </div>
            </div>

            <div class="flex flex-col w-full items-start">
                <?php //icone 
                ?>
                <div class="flex items-center ">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <span class="font-semibold pl-2">Empresa / Company</span>
                </div>

                <?php //texto 
                ?>
                <div class="w-full pl-2 my-2">
                    <p>Nome / Name: Almeida Cunha</p>
                    <p>CNPJ: 26.951.544/0001-22</p>
                </div>
            </div>

        </div>

        <div class=" text-sm pb-20  text-center py-4 w-full @md:max-w-1/2 flex flex-col justify-center items-center">
            &copy; <?php echo esc_html(date_i18n('Y')); ?> - <?php bloginfo('name'); ?>
            <p class="mt-4"><a href="<?php get_site_url() . '/politica-de-privacidade'?>">Política de Privacidade / Privacy Policy<a></p>
        </div>
    </div>
</footer>
<div id="cookie-banner" class="hidden fixed bottom-0 left-0 right-0 w-full p-4 z-[9999] shadow-lg bg-primary">
    <div class="container max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-secondary m-0 text-sm md:text-base" id="cookie-text"></p>
        <div class="flex gap-3 items-center flex-wrap">
            <a href="<?php echo get_site_url() . '/politica-de-privacidade'; ?>" id="cookie-link" class="text-white text-sm underline hover:opacity-80 transition-opacity" style="color: #ffffff !important;"></a>
            <button id="accept-cookies" class="text-primary bg-secondary px-6 py-2 rounded border-0 cursor-pointer hover:opacity-90 transition-opacity font-semibold">
            </button>
        </div>
    </div>
</div>

</div>

<?php wp_footer(); ?>
</body>

</html>