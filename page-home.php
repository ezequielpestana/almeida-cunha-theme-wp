<?php /* Template Name: Página Inicio */
    get_header();
?>

<!-- whatsapp -->

<div class="fixed inset-x-0 bottom-4 pointer-events-none">
    <div class="relative max-w-6xl mx-auto m-2">
        <a href="https://wa.me/5527988114221" class="absolute right-4 bottom-0 text-white bg-green-500 rounded-4xl pointer-events-auto cursor-pointer">
            <i class="fab fa-whatsapp text-5xl p-4 "></i>
        </a>
    </div>
</div>

<!-- hero -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">

  
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">

        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>

        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl"><?php the_field('inicio_hero_titulo')?></h1>
            <h2 class="text-sm font-bold mt-2">
                <?php the_field('inicio_hero_subtitulo')?>
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <?php the_field('inicio_hero_descricao')?>
        </div>
    </div>

</div>

<!-- imagens -->
<div class="flex justify-center bg-primary w-full px-4 pb-10">
    <div class="flex flex-col items-center ">

        <div class="flex flex-col max-w-[544px] items-center my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class=" md:max-w-1/2  md:order-2 md:p-6 md2:border-r-2 border-white">       
                <p class="p-2 py-6 text-secondary "><?php the_field('inicio_sessao1_texto')?></p>
            </div>
            <div class="md:max-w-1/2  md:order-1  rounded-md p-2 bg-secondary">
                <img class="rounded-xl " src="<?php echo get_template_directory_uri(); ?>/resources/images/01.png" alt="Praia de itapuã vila velha es">
            </div>
        </div>

        <div class="flex flex-col max-w-[544px] items-center my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class=" md:max-w-1/2 md:p-6 md2:border-l-2 border-white"> 
                <p class="p-2 py-6 text-secondary md:text-right"><?php the_field('inicio_sessao2_texto')?></p>
            </div>  
            <div class="md:max-w-1/2 rounded-md p-2 bg-secondary"> 
                <img class="rounded-xl" src="<?php echo get_template_directory_uri(); ?>/resources/images/02.png" alt="Vista da Terceira Ponte e do Morro do Moreno a partir do Convento da Penha, Vila Velha ES">
            </div>
        </div>

    </div>
</div>

<?php get_footer();?>
