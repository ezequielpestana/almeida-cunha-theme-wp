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

    <footer id="colophon" class="flex bg-tertiary text-white @container" role="contentinfo">
            <div class="container w-full @md:flex">
                <?php do_action('tailpress_footer'); ?>
                <div class="@md:max-w-1/2">
                    <p class="font-bold text-center @md:text-left my-4">Almeida Cunha<br> <span class="font-normal text-sm">Advocacia e Consultoria</span></p>
                    <p class="font-ligh my-2"><span class="font-semibold">Endereço:</span> Rua Cabo Aylson Simões, 560 - Sala 607, Centro - 
                        Vila Velha / ES, cep: 29.100-320</p>
                    <p class="font-light my-2"><span class="font-semibold">Contato:</span> (27) 9 8811-4221 - (27) 3141-6460</p>
                </div>

                <div class=" text-sm pb-20  text-center py-4 w-full @md:max-w-1/2 @md:flex @md:justify-center @md:items-center">
                    &copy; <?php echo esc_html(date_i18n('Y')); ?> - <?php bloginfo('name'); ?>
                </div>
    </div>
    </footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
