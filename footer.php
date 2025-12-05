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
                    <span class="font-semibold pl-2">Endereço</span>
                </div>

                <?php //texto 
                ?>
                <div class="w-full pl-2">
                    <p class="font-ligh my-2">Rua Cabo Aylson Simões, 560 - Sala 607, Centro -Vila Velha / ES, cep: 29.100-320</p>
                </div>
            </div>

            <div class="flex flex-col w-full items-start lg:pl-8">
                <?php //icone 
                ?>
                <div class="flex items-center">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="font-semibold pl-2">Email</span>
                </div>

                <?php //texto 
                ?>
                <div class="w-full pl-2">
                    <p class="font-ligh my-2">victor@almeidacunha.com</p>
                </div>
            </div>

            <div class="flex flex-col w-1/2 items-start lg:pt-4">
                <?php //icone 
                ?>
                <div class="flex items-center ">
                    <div class="flex justify-center items-center w-8 h-8 rounded-full bg-primary"></i>
                        <i class="fas fa-phone"></i>
                    </div>
                    <span class="font-semibold pl-2">Contato</span>
                </div>
                <div class="w-full pl-2">
                    <p class="font-light my-2">(27) 9 8811-4221 <br> (27) 3141-6460</p>
                </div>
            </div>




        </div>

        <div class="text-sm pb-20  text-center py-4 w-full @md:max-w-1/2 flex justify-center items-center">
            &copy; <?php echo esc_html(date_i18n('Y')); ?> - <?php bloginfo('name'); ?>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>