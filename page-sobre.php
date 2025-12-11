<?php /* Template Name: Page Sobre */
get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>

        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl">Quem Somos</h1>
            <h2 class="text-sm font-bold mt-2">
                Advocacia técnica, estratégica e próxima do cliente desde 2016.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <span class="font-bold">Excelência jurídica</span>, visão prática e comprometimento com
                <span class="font-bold">resultados concretos</span> para pessoas e empresas.
            </p>
        </div>
    </div>
</div>



<!-- Bloco 1: História do Escritório -->
<div class="w-full flex justify-center bg-primary">
    <div class="flex flex-col md:flex-row md:items-center max-w-5xl">

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4">Sobre o Escritório</h2>

        <div class="md:max-w-1/2 md:flex md:flex-row order-2 md:p-6">
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold">Escritório</h3>
                <p class="px-4 pt-6 text-secondary">
                    Fundado em <span class="font-semibold">2016</span>, o <span class="font-semibold">Almeida Cunha Advocacia & Consultoria</span> nasceu com o propósito de oferecer uma advocacia técnica, estratégica e próxima do cliente, unindo excelência jurídica, visão prática e comprometimento com resultados concretos.
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                    Com sede em <span class="font-semibold">Vila Velha/ES</span>, o escritório atua de forma sólida em demandas regionais, nacionais e internacionais, prestando assessoria jurídica tanto no âmbito consultivo quanto contencioso, sempre com foco na segurança jurídica, na prevenção de conflitos e na construção de soluções eficazes.
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

        <h2 class="md:hidden text-secondary text-2xl font-bold p-4">Sócio fundador</h2>

        <div class="md:max-w-1/2 md:flex md:flex-row md:order-1 md:p-6">
            <div class="hidden self-stretch my-4 md:block w-4 bg-secondary"></div>
            <div classs="flex flex-col">
                <h3 class="p-2 pl-4 hidden md:block text-secondary text-2xl font-bold">Sócio fundador</h3>
                <p class="px-4 pt-6 text-secondary">
                   O escritório é conduzido pelo advogado <span class="font-semibold">Victor de Almeida Domingues Cunha</span>, sócio fundador, com sólida formação acadêmica e ampla experiência prática.
                </p>
                <p class="px-4 pt-6 pb-8 text-secondary">
                   Possui estudos acadêmicos pela <span class="font-semibold">Fundação Getúlio Vargas (FGV)</span> na área do Direito do Trabalho e especialização em Direito Processual pela <span class="font-semibold">Pontifícia Universidade Católica de Minas Gerais (PUC Minas)</span>
                <br><br>Também realizou intercâmbio acadêmico na Universidad de Castilla-La Mancha, na Espanha, ampliando sua formação jurídica com uma visão internacional do Direito..
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

        <!-- Bloco 3: Formação Internacional -->
        <div class="my-2 md:max-w-md">
            <p class="px-4 py-6 text-secondary text-center">
                Ao longo de sua trajetória profissional, o sócio fundador construiu sua experiência também em relevantes bancas de advocacia, onde atuou em demandas de elevada complexidade, com forte viés estratégico e contato direto com operações jurídicas estruturadas, o que contribuiu de forma decisiva para o amadurecimento técnico e a visão corporativa do escritório.
            </p>
        </div>

        <!-- Bloco 4: Atuação e Valores -->
        <div class="my-2 md:max-w-md">
            <p class="p-2 py-6 text-secondary text-center">
                Com forte atuação no <span class="font-semibold">Direito Empresarial, Cível, Trabalhista</span> e na advocacia consultiva estratégica, o escritório desenvolve seu trabalho há muitos anos pautado pela técnica, ética, transparência e atendimento personalizado, tratando cada demanda de forma individualizada e estratégica.
            </p>
            <p class="p-2 py-6 text-secondary text-center font-semibold">
                Mais do que solucionar conflitos, nosso compromisso é proteger histórias, patrimônio, relações e projetos de vida, oferecendo ao cliente clareza, segurança e confiança em cada etapa da jornada jurídica.
            </p>
        </div>

    </div>
</div>

<div class="hidden"><!-- fechamento fictício para manter estrutura -->

</div>
</div>

<?php get_footer(); ?>