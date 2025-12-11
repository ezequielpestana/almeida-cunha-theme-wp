<?php /* Template Name: Page About */
get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>

        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl">About Us</h1>
            <h2 class="text-sm font-bold mt-2">
                Technical, strategic, and client-focused law practice since 2016.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <span class="font-bold">Legal excellence</span>, practical vision and commitment to
                <span class="font-bold">concrete results</span> for individuals and companies.
            </p>
        </div>
    </div>
</div>



<!-- Bloco 1: História do Escritório -->
<div class="w-full flex justify-center bg-primary">
    <div class="flex flex-col md:flex-row md:items-center max-w-5xl">

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4">About the Firm</h2>

        <div class="md:max-w-1/2 md:flex md:flex-row order-2 md:p-6">
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold">Law Firm</h3>
                <p class="px-4 pt-6 text-secondary">
                    Founded in <span class="font-semibold">2016</span>, <span class="font-semibold">Almeida Cunha Law & Consulting</span> was established with the purpose of offering technical, strategic, and client-focused legal services, combining legal excellence, practical vision, and commitment to concrete results.
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                    Headquartered in <span class="font-semibold">Vila Velha/ES</span>, the firm operates solidly on regional, national, and international demands, providing legal advice in both advisory and litigation matters, always focusing on legal certainty, conflict prevention, and the construction of effective solutions.
                </p>
            </div>
            <div class="hidden self-stretch my-4 md:block w-4 bg-secondary"></div>
        </div>

        <!-- Espaço reservado para foto do escritório -->
        <div class="w-full flex justify-center">
        <div class="order-1 rounded-md p-2 bg-secondary m-2">
            <div class="bg-light/50 aspect-[2/1] max-w-90 flex items-center justify-center text-secondary">
                <img 
                class="rounded-sm"
                src="<?php echo get_template_directory_uri(); ?>/resources/images/quem-somos/01.png"></img>
            </div>
        </div>
        </div>

    </div>
</div>

<!-- Bloco 2: Sócio fundador -->
<div class="w-full flex justify-center bg-tertiary">
    <div class="flex flex-col md:flex-row md:items-center max-w-5xl pt-6">

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4">Founding Partner</h2>

        <div class="md:max-w-1/2 md:flex md:flex-row md:order-1 md:p-6">
            <div class="hidden self-stretch my-4 md:block w-4 bg-secondary"></div>
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold">Founding Partner</h3>
                <p class="px-4 pt-6 text-secondary">
                   The firm is led by attorney <span class="font-semibold">Victor de Almeida Domingues Cunha</span>, founding partner, with solid academic background and extensive practical experience.
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                   He holds academic studies from <span class="font-semibold">Fundação Getúlio Vargas (FGV)</span> in Labor Law and specialization in Procedural Law from <span class="font-semibold">Pontifícia Universidade Católica de Minas Gerais (PUC Minas)</span>
                <br><br>He also participated in an academic exchange at Universidad de Castilla-La Mancha, Spain, expanding his legal background with an international perspective on Law.
                </p>
            </div>
        </div>

        <!-- Espaço reservado para foto do escritório -->
        <div class="w-full flex justify-center md:order-2 pb-10">
        <div class="rounded-md p-2 bg-secondary m-2">
            <div class="bg-light/50 aspect-[2/1] max-w-90 flex items-center justify-center text-secondary">
                <img 
                class="rounded-sm"
                src="<?php echo get_template_directory_uri(); ?>/resources/images/quem-somos/01.png"></img>
            </div>
        </div>
        </div>

    </div>
</div>


<!-- Bloco 3 e 4: Formação e Valores -->
<div class="bg-primary w-full px-4 py-10">
    <div class="flex flex-col md:flex-row md:justify-center md:items-center md:gap-8 max-w-5xl mx-auto">

        <!-- Block 3: Professional Experience -->
        <div class="my-2 md:max-w-md">
            <p class="px-4 py-6 text-secondary text-center">
                Throughout his professional career, the founding partner also built his experience at prominent law firms, where he worked on highly complex demands with a strong strategic focus and direct contact with structured legal operations, which decisively contributed to the technical maturity and corporate vision of the firm.
            </p>
        </div>

        <!-- Block 4: Practice Areas and Values -->
        <div class="my-2 md:max-w-md">
            <p class="p-2 py-6 text-secondary text-center">
                With a strong focus on <span class="font-semibold">Corporate, Civil, Labor Law</span> and strategic advisory practice, the firm has developed its work for many years guided by technique, ethics, transparency and personalized service, treating each demand in an individualized and strategic way.
            </p>
            <p class="p-2 py-6 text-secondary text-center font-semibold">
                More than resolving conflicts, our commitment is to protect stories, assets, relationships and life projects, offering clients clarity, security and confidence at every step of their legal journey.
            </p>
        </div>

    </div>
</div>

<div class="hidden"><!-- fictitious closing to maintain structure -->

</div>
</div>

<?php get_footer(); ?>