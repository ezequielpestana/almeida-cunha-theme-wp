<?php /* Template Name: Page Sobre */
get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>

        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl"><?php the_field('titulo_hero_sobre') ?></h1>
            <h2 class="text-sm font-bold mt-2">
                <?php the_field('subtitulo_hero_sobre'); ?>
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <?php the_field('descricao_banner_sobre'); ?>
            </p>
        </div>
    </div>
</div>



<!-- Bloco 1: História do Escritório -->
<div class="w-full flex justify-center bg-primary">
    <div class="flex flex-col md:flex-row md:items-center max-w-5xl">

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4"><?php the_field('titulo_sobre_escritorio') ?></h2>

        <div class="md:max-w-1/2 md:flex md:flex-row order-2 md:p-6">
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold"><?php the_field('titulo_sobre_escritorio') ?></h3>
                <p class="px-4 pt-6 text-secondary">
                    <?php the_field('sobre_escritorio_paragrafo_1') ?>
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                    <?php the_field('sobre_escritorio_paragrafo_2') ?>
                </p>
            </div>
            <div class="hidden self-stretch my-4 md:block w-4 bg-secondary"></div>
        </div>

        <!-- Espaço reservado para foto do escritório -->
        <div class="w-full flex justify-center">
        <div class="order-1 rounded-md p-2 bg-secondary m-2">
            <div class="bg-light/50 aspect-[2/1] max-w-90 flex items-center justify-center text-secondary">
                <!-- <img 
                class="rounded-sm"
                src="<?php echo get_template_directory_uri(); ?>/resources/images/quem-somos/01.png"></img> -->
            </div>
        </div>
        </div>

    </div>
</div>

<!-- Bloco 2: Sócio fundador -->
<div class="w-full flex justify-center bg-tertiary">
    <div class="flex flex-col md:flex-row md:items-center max-w-5xl pt-6">

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4"><?php the_field('titulo_socio_fundador') ?></h2>

        <div class="md:max-w-1/2 md:flex md:flex-row md:order-1 md:p-6">
            <div class="hidden self-stretch my-4 md:block w-4 bg-secondary"></div>
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold"><?php the_field('titulo_socio_fundador') ?></h3>
                <p class="px-4 pt-6 text-secondary">
                   <?php the_field('socio_fundador_paragrafo_1'); ?>
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                  <?php the_field('socio_fundador_paragrafo_2'); ?>
                </p>
            </div>
        </div>

        <!-- Espaço reservado para foto do sócio fundador -->
        <div class="w-full flex justify-center md:order-2 pb-10">
        <div class="rounded-md p-2 bg-secondary m-2">
            <div class="bg-light/50 aspect-[2/1] max-w-90 flex items-center justify-center text-secondary">
                <!-- <img 
                class="rounded-sm"
                src="<?php echo get_template_directory_uri(); ?>/resources/images/quem-somos/01.png"></img> -->
            </div>
        </div>
        </div>

    </div>
</div>


<!-- Bloco 3 e 4: Formação e Valores -->
<div class="bg-primary w-full px-4 py-10">
    <div class="flex flex-col md:flex-row md:justify-center md:items-center md:gap-8 max-w-5xl mx-auto">

        <!-- Bloco 3: Formação Internacional -->
        <div class="my-2 md:max-w-md">
            <p class="px-4 py-6 text-secondary text-center">
                <?php the_field('bloco_2_socio_fundador_paragrafo_1') ?>
            </p>
        </div>

        <!-- Bloco 4: Atuação e Valores -->
        <div class="my-2 md:max-w-md">
            <p class="p-2 py-6 text-secondary text-center">
                <?php the_field('bloco_2_socio_fundador_paragrafo_2') ?>
            </p>
            <p class="p-2 py-6 text-secondary text-center font-semibold">
                <?php the_field('bloco_2_socio_fundador_paragrafo_3') ?>
            </p>
        </div>

    </div>
</div>

<div class="hidden"><!-- fechamento fictício para manter estrutura -->

</div>
</div>

<?php get_footer(); ?>