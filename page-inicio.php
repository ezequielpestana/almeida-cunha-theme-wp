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
            <h1 class="font-bold text-3xl">Do conflito à solução...</h1>
            <h2 class="text-sm font-bold mt-2">
                Seu escritório de advocacia com atuação bilingue.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-white p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <span class="font-bold">Advocacia e consultoria</span> com atuação bilíngue, focada em estratégia, prevenção de riscos e soluções 
                jurídicas sob medida para <span class="font-bold">pessoas</span> e <span class="font-bold">empresas</span>.</p>
        </div>
    </div>

</div>

<!-- imagens -->
<div class="bg-secondary w-full px-4 pb-10">
    <div class="flex flex-col items-center max-w-1/0 ">

        <div class="my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class=" md:max-w-1/2  md:order-2 md:p-6 md2:border-r-2 border-primary">       
                <p class="p-2 py-6 text-white "><span class="text-white text-lg font-semibold">Vila Velha/ES</span> é o nosso ponto de partida e também o cenário das histórias que ajudamos a proteger.</p>
            </div>
            <div class=" md:max-w-1/2  md:order-1  rounded-md p-2 bg-white">
                <img class="rounded-xl " src="<?php echo get_template_directory_uri(); ?>/resources/images/01.jpg" alt="Praia de itapuã vila velha es">
            </div>
        </div>

        <div class="my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class="md:max-w-1/2 md:p-6 md2:border-l-2 border-primary"> 
                <p class="p-2 py-6 text-white md:text-right">Atuamos com dedicação às demandas regionais, nacionais, e internacionais. <br><br>Acolhendo cada caso com atenção individual e compromisso com resultados consistentes.</p>
            </div>  
            <div class="md:max-w-1/2 rounded-md p-2 bg-white"> 
                <img class="rounded-xl" src="<?php echo get_template_directory_uri(); ?>/resources/images/02.jpg" alt="Vista da Terceira Ponte e do Morro do Moreno a partir do Convento da Penha, Vila Velha ES">
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
