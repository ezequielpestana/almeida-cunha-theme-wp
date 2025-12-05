<?php /* Template Name: Page Home */
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
            <h1 class="font-bold text-3xl">From conflict to solution...</h1>
            <h2 class="text-sm font-bold mt-2">
                Your law firm with bilingual practice.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <span class="font-bold">Legal services and consulting</span> with bilingual expertise, focused on strategy, risk prevention, 
                and tailored legal solutions for <span class="font-bold">people</span> and <span class="font-bold">companies</span>.</p>
        </div>
    </div>

</div>

<!-- imagens -->
<div class="bg-primary w-full px-4 pb-10">
    <div class="flex flex-col items-center max-w-1/0 ">

        <div class="my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class=" md:max-w-1/2  md:order-2 md:p-6 md2:border-r-2 border-white">       
                <p class="p-2 py-6 text-secondary "><span class="text-secondary text-lg font-semibold">Vila Velha/ES</span> It is our starting point and also the setting for the stories we help to protect.</p>
            </div>
            <div class=" md:max-w-1/2  md:order-1  rounded-md p-2 bg-secondary">
                <img class="rounded-xl " src="<?php echo get_template_directory_uri(); ?>/resources/images/01.jpg" alt="Praia de itapuã vila velha es">
            </div>
        </div>

        <div class="my-2 md:flex md:flex-row md:items-center md:max-w-3xl">
            <div class="md:max-w-1/2 md:p-6 md2:border-l-2 border-white"> 
                <p class="p-2 py-6 text-secondary md:text-right">We work diligently to meet regional, national, and international demands. <br><br>We approach each case with individual attention and a commitment to consistent results.</p>
            </div>  
            <div class="md:max-w-1/2 rounded-md p-2 bg-secondary"> 
                <img class="rounded-xl" src="<?php echo get_template_directory_uri(); ?>/resources/images/02.jpg" alt="Vista da Terceira Ponte e do Morro do Moreno a partir do Convento da Penha, Vila Velha ES">
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
