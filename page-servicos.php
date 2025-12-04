<?php /* Template Name: Page Servicos */
    get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>
        
        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl">Nossos Serviços</h1>
            <h2 class="text-sm font-bold mt-2">
                Soluções jurídicas completas, estratégicas e personalizadas.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                <span class="font-bold">Atuação técnica e estratégica</span> em diversas áreas do Direito, 
                sempre focada em <span class="font-bold">prevenção, segurança jurídica e resultados</span>.
            </p>
        </div>
    </div>
</div>

<!-- Serviços -->
<div class="bg-secondary w-full px-4 py-10">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Direito Civil -->
            <div class="bg-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-4">
                        <i class="fas fa-balance-scale text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-secondary text-2xl font-bold mb-4">Direito Civil</h3>
                    <p class="text-secondary text-sm mb-3">
                        Atuação ampla e estratégica nas relações civis, incluindo <span class="font-semibold">contratos, responsabilidade civil, obrigações, direitos reais, indenizações, cobranças, posse e propriedade</span>.
                    </p>
                    <p class="text-secondary text-sm">
                        O escritório atua tanto na prevenção de conflitos quanto na condução de demandas judiciais e extrajudiciais, sempre com foco na segurança jurídica e na proteção patrimonial do cliente.
                    </p>
                </div>
            </div>

            <!-- Direito Ambiental -->
            <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full mb-4">
                        <i class="fas fa-leaf text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-primary text-2xl font-bold mb-4">Direito Ambiental</h3>
                    <p class="text-secondary text-sm mb-3">
                        Assessoria jurídica completa em matérias ambientais, envolvendo <span class="font-semibold">licenciamento, regularização de empreendimentos, autos de infração, defesa em processos administrativos e judiciais</span>.
                    </p>
                    <p class="text-secondary text-sm">
                        Além de consultoria preventiva para empresas e proprietários rurais ou urbanos, garantindo conformidade legal e sustentabilidade das atividades.
                    </p>
                </div>
            </div>

            <!-- Direito de Família -->
            <div class="bg-primary md:bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary md:bg-primary rounded-full mb-4">
                        <i class="fas fa-home text-3xl text-primary md:text-secondary"></i>
                    </div>
                    <h3 class="text-secondary md:text-primary text-2xl font-bold mb-4">Direito de Família</h3>
                    <p class="text-secondary md:text-secondary text-sm mb-3">
                        Atuação técnica, sensível e estratégica em demandas de Direito de Família, incluindo <span class="font-semibold">divórcios, pensão alimentícia, guarda, regulamentação de convivência, partilha de bens, reconhecimento e dissolução de união estável</span>.
                    </p>
                    <p class="text-secondary md:text-secondary text-sm">
                        Bem como inventários judiciais e, com especialização, <span class="font-semibold">inventários extrajudiciais realizados em cartório</span>, proporcionando maior celeridade, economia e segurança jurídica às famílias. O escritório prioriza sempre soluções equilibradas, responsáveis e juridicamente seguras.
                    </p>
                </div>
            </div>

            <!-- Comércio Internacional -->
            <div class="bg-secondary md:bg-primary rounded-lg border-2 border-primary shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary md:bg-secondary rounded-full mb-4">
                        <i class="fas fa-globe-americas text-3xl text-secondary md:text-primary"></i>
                    </div>
                    <h3 class="text-primary md:text-secondary text-2xl font-bold mb-4">Comércio Internacional</h3>
                    <p class="text-primary md:text-secondary text-sm mb-3">
                        Assessoria jurídica estratégica em operações internacionais, envolvendo <span class="font-semibold">contratos internacionais, importação e exportação, compliance, estruturação de negócios transnacionais</span>.
                    </p>
                    <p class="text-primary md:text-secondary text-sm">
                        Análise de riscos jurídicos e suporte legal a empresas que atuam no mercado externo, com visão técnica e globalizada.
                    </p>
                </div>
            </div>

            <!-- Direito do Consumidor -->
            <div class="bg-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-4">
                        <i class="fas fa-shopping-cart text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-secondary text-2xl font-bold mb-4">Direito do Consumidor</h3>
                    <p class="text-secondary text-sm mb-3">
                        Atuação tanto na <span class="font-semibold">defesa de consumidores</span> quanto na <span class="font-semibold">assessoria preventiva e contenciosa de empresas</span>, em demandas relacionadas a relações de consumo, indenizações, práticas abusivas, responsabilidade por vício ou defeito de produtos e serviços.
                    </p>
                    <p class="text-secondary text-sm">
                        Atuação perante Procons e no Poder Judiciário.
                    </p>
                </div>
            </div>

            <!-- Direito do Trabalho -->
            <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-primary rounded-full mb-4">
                        <i class="fas fa-briefcase text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-primary text-2xl font-bold mb-4">Direito do Trabalho</h3>
                    <p class="text-secondary text-sm mb-3">
                        Atuação completa no âmbito trabalhista, tanto na <span class="font-semibold">defesa de empregadores quanto de trabalhadores</span>, abrangendo ações reclamatórias, acordos, defesas, recursos, consultoria preventiva, auditorias trabalhistas.
                    </p>
                    <p class="text-secondary text-sm">
                        Estruturação de rotinas internas com foco na redução de passivos e segurança jurídica.
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
                        <h3 class="text-secondary text-2xl font-bold mb-4">Direito Previdenciário</h3>
                        <p class="text-secondary text-sm mb-3">
                            Atuação em <span class="font-semibold">concessão, revisão e restabelecimento de benefícios previdenciários, aposentadorias, pensões, auxílios e benefícios por incapacidade</span>.
                        </p>
                        <p class="text-secondary text-sm">
                            Além de defesas administrativas e judiciais perante o INSS e a Justiça Federal, sempre com foco na efetivação dos direitos do segurado.
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
            <h3 class="text-secondary text-center text-2xl font-bold mb-4">Precisa de assessoria jurídica?</h3>
            <p class="text-secondary text-center text-sm mb-6 py-5 max-w-80">
                Entre em <span class="font-semibold">contato conosco</span> e descubra como podemos ajudar você ou sua empresa 
                com <span class="font-semibold">soluções jurídicas estratégicas e personalizadas!</span>
            </p>
        </div>

        <div class="flex flex-col items-center">
            <div>
                <a style="text-decoration:none;" href="<?php echo get_permalink(get_page_by_path('contato')); ?>">
                <button class="flex items-center justify-center bg-secondary text-primary font-bold py-3 px-8 rounded-lg hover:bg-secondary hover:text-secondary transition-colors duration-300">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <span class="pl-1 underline decoration-solid">Fale Conosco</span>
                </button>
                </a>
            </div>

            <div class="pt-4">
                <a style="text-decoration:none;" href="<?php echo get_permalink(get_page_by_path('contato')); ?>">
                <button class="flex items-center justify-center bg-secondary text-primary font-bold py-3 px-8 rounded-lg hover:bg-secondary hover:text-secondary transition-colors duration-300">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="pl-1 underline decoration-solid">Fale Conosco</span>
                </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
