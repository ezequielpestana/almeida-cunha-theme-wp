<?php /* Template Name: Page Servicos */
    get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>
        
        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl"><?php the_field('titulo_hero_servicos')?></h1>
            <h2 class="text-sm font-bold mt-2">
                <?php the_field('subtitulo_hero_servicos')?>
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <?php the_field('descricao_banner_servicos') ?>
            </p>
        </div>
    </div>
</div>
<!-- Serviços -->
<div class="bg-quaternary w-full px-4 py-10">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Direito Civil -->
            <div class="bg-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-4">
                        <i class="fas fa-balance-scale text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-secondary text-2xl font-bold mb-4"><?php the_field('titulo_direito_civil'); ?></h3>
                    <p class="text-secondary text-sm mb-3">
                        <?php the_field('descricao_direito_civil_1'); ?>
                    </p>
                    <p class="text-secondary text-sm">
                        <?php the_field('descricao_direito_civil_2'); ?>
                    </p>
                </div>
            </div>

            <!-- Direito Ambiental -->
            <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full mb-4">
                        <i class="fas fa-leaf text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-primary text-2xl font-bold mb-4"><?php the_field('titulo_direito_ambiental') ?></h3>
                    <p class="text-primary text-sm mb-3">
                        <?php the_field('direito_ambiental_paragrafo_1') ?>
                    </p>
                    <p class="text-primary text-sm">
                        <?php the_field('direito_ambiental_2') ?>
                    </p>
                </div>
            </div>

            <!-- Direito de Família -->
            <div class="bg-primary md:bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary md:bg-primary rounded-full mb-4">
                        <i class="fas fa-home text-3xl text-primary md:text-secondary"></i>
                    </div>
                    <h3 class="text-secondary md:text-primary text-2xl font-bold mb-4"><?php the_field('titulo_direito_de_familia')?></h3>
                    <p class="text-secondary md:text-primary text-sm mb-3">
                        <?php the_field('direito_de_familia_paragrafo_1') ?>
                    </p>
                    <p class="text-secondary md:text-primary text-sm">
                        <?php the_field('direito_de_familia_paragrafo_2') ?>
                    </p>
                </div>
            </div>

            <!-- Comércio Internacional -->
            <div class="bg-secondary md:bg-primary rounded-lg border-2 border-primary shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary md:bg-secondary rounded-full mb-4">
                        <i class="fas fa-globe-americas text-3xl text-secondary md:text-primary"></i>
                    </div>
                    <h3 class="text-primary md:text-secondary text-2xl font-bold mb-4"><?php the_field('titulo_comercio_internacional') ?></h3>
                    <p class="text-primary md:text-secondary text-sm mb-3">
                        <?php the_field('comercio_internacional_paragrafo_1'); ?>
                    </p>
                    <p class="text-primary md:text-secondary text-sm">
                        <?php the_field('comercio_internacional_paragrafo_2') ?>
                    </p>
                </div>
            </div>

            <!-- Direito do Consumidor -->
            <div class="bg-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-4">
                        <i class="fas fa-shopping-cart text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-secondary text-2xl font-bold mb-4"><?php the_field('titulo_direito_do_consumidor') ?></h3>
                    <p class="text-secondary text-sm mb-3">
                        <?php the_field('direito_do_consumidor_paragrafo_1'); ?>
                    </p>
                    <p class="text-secondary text-sm">
                        <?php the_field('direito_do_consumidor_paragrafo_2'); ?>
                    </p>
                </div>
            </div>

            <!-- Direito do Trabalho -->
            <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full mb-4">
                        <i class="fas fa-briefcase text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-primary text-2xl font-bold mb-4"><?php the_field('titulo_direito_do_trabalho') ?></h3>
                    <p class="text-primary text-sm mb-3">
                       <?php the_field('direito_do_trabalho_paragrafo_1'); ?>
                    </p>
                    <p class="text-primary text-sm">
                        <?php the_field('direito_do_trabalho_paragrafo_2')?>
                    </p>
                </div>
            </div>

            <!-- Direito Previdenciário -->
             <div class="md:col-span-2 w-full flex justify-center">
                <div class="md:max-w-1/2 bg-primary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-4">
                            <i class="fas fa-user-shield text-3xl text-primary"></i>
                        </div>
                        <h3 class="text-secondary text-2xl font-bold mb-4"><?php the_field('titulo_direito_previdenciario'); ?></h3>
                        <p class="text-secondary text-sm mb-3">
                            <?php the_field('direito_previdenciario_paragrafo_1'); ?>
                        </p>
                        <p class="text-secondary text-sm">
                            <?php the_field('direito_previdenciario_paragrafo_2'); ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-primary w-full px-4 py-10">
    <div class="flex flex-col items-center max-w-3xl mx-auto">
        <div class="flex flex-col items-center">
            <h3 class="text-secondary text-center text-2xl font-bold mb-4"><?php the_field('titulo_chamada_para_acao'); ?></h3>
            <p class="text-secondary text-center text-sm mb-6 py-5 max-w-80">
                <?php the_field('texto_chamada_para_acao') ?>
            </p>
        </div>

        <div class="flex flex-col items-center">
            <div>
                <a style="text-decoration:none;" href="<?php echo get_permalink(get_page_by_path('contato')); ?>">
                <button class="flex items-center justify-center bg-secondary text-primary font-bold py-3 px-8 rounded-lg hover:bg-secondary hover:text-secondary transition-colors duration-300">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <span class="pl-1 underline decoration-solid"><?php the_field('botoes_fale_conosco') ?></span>
                </button>
                </a>
            </div>

            <div class="pt-4">
                <a style="text-decoration:none;" href="<?php echo get_permalink(get_page_by_path('contato')); ?>">
                <button class="flex items-center justify-center bg-secondary text-primary font-bold py-3 px-8 rounded-lg hover:bg-secondary hover:text-secondary transition-colors duration-300">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="pl-1 underline decoration-solid"><?php the_field('botoes_fale_conosco') ?></span>
                </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
