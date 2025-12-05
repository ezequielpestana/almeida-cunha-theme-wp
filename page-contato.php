<?php /* Template Name: Page Contato */
get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>
        
        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl">Entre em Contato</h1>
            <h2 class="text-sm font-bold mt-2">
                Estamos prontos para atender você com excelência e dedicação.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                Envie sua mensagem e nossa equipe entrará em contato para oferecer a <span class="font-bold">melhor solução jurídica</span> para o seu caso.
            </p>
        </div>
    </div>
</div>

<!-- Conteúdo Principal: Formulário e Informações -->
<div class="bg-quaternary w-full px-4 py-10">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Formulário de Contato -->
            <div class="bg-primary rounded-lg shadow-lg p-8">
                <h3 class="text-secondary text-2xl font-bold mb-6">Formulário de Contato</h3>
                
                <form id="contact-form" class="space-y-4">
                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-secondary text-sm font-semibold mb-2">
                            Nome Completo <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            required
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors"
                            placeholder="Seu nome completo"
                        >
                    </div>

                    <!-- E-mail -->
                    <div>
                        <label for="email" class="block text-secondary text-sm font-semibold mb-2">
                            E-mail <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors"
                            placeholder="seu@email.com"
                        >
                    </div>

                    <!-- Telefone / WhatsApp -->
                    <div>
                        <label for="telefone" class="block text-secondary text-sm font-semibold mb-2">
                            Telefone / WhatsApp <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="telefone" 
                            name="telefone" 
                            required
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors"
                            placeholder="(27) 9 8811-4221"
                        >
                    </div>

                    <!-- Assunto -->
                    <div>
                        <label for="assunto" class="block text-secondary text-sm font-semibold mb-2">
                            Assunto <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="assunto" 
                            name="assunto" 
                            required
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors"
                        >
                            <option value="">Selecione um assunto</option>
                            <option value="direito-civil">Direito Civil</option>
                            <option value="direito-ambiental">Direito Ambiental</option>
                            <option value="direito-familia">Direito de Família</option>
                            <option value="comercio-internacional">Comércio Internacional</option>
                            <option value="direito-consumidor">Direito do Consumidor</option>
                            <option value="direito-trabalho">Direito do Trabalho</option>
                            <option value="direito-previdenciario">Direito Previdenciário</option>
                            <option value="consultoria">Consultoria Jurídica</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <!-- Mensagem -->
                    <div>
                        <label for="mensagem" class="block text-secondary text-sm font-semibold mb-2">
                            Descreva seu caso <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="mensagem" 
                            name="mensagem" 
                            required
                            rows="5"
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors resize-none"
                            placeholder="Conte-nos um pouco sobre o seu caso ou dúvida..."
                        ></textarea>
                    </div>

                    <!-- Checkbox LGPD -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="privacidade" 
                            name="privacidade" 
                            required
                            class="mt-1 mr-3 h-4 w-4 rounded border-secondary/20 text-secondary focus:ring-secondary"
                        >
                        <label for="privacidade" class="text-secondary text-xs">
                            Concordo com a <a href="#" class="font-semibold underline hover:text-secondary/80">Política de Privacidade</a> 
                            e autorizo o tratamento dos meus dados pessoais conforme a Lei Geral de Proteção de Dados (LGPD). <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <!-- Botão de Envio -->
                    <button 
                        type="submit"
                        class="w-full bg-secondary text-primary font-bold py-4 px-8 rounded-lg hover:bg-secondary/90 transition-colors duration-300 flex items-center justify-center"
                    >
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Enviar Mensagem
                    </button>
                </form>
            </div>

            <!-- Informações de Contato e Mapa -->
            <div class="space-y-6">
                
                <!-- Informações de Contato -->
                <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg p-8">
                    <h3 class="text-primary text-2xl font-bold mb-6">Informações de Contato</h3>
                    
                    <div class="space-y-4">
                        <!-- Endereço -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-10 h-10 bg-primary rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-primary font-semibold mb-1">Endereço</h4>
                                <p class="text-primary text-sm">
                                    Rua Cabo Aylson Simões, 560 - Sala 607<br>
                                    Centro - Vila Velha / ES<br>
                                    CEP: 29.100-320
                                </p>
                            </div>
                        </div>

                        <!-- Telefone -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-10 h-10 bg-primary rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-phone text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-primary font-semibold mb-1">Telefone</h4>
                                <p class="text-primary text-sm">
                                    (27) 3141-6460<br>
                                    (27) 9 8811-4221 <span class="text-xs">(WhatsApp)</span>
                                </p>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-10 h-10 bg-primary rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-primary font-semibold mb-1">E-mail</h4>
                                <p class="text-primary text-sm">
                                    contato@almeidacunha.adv.br
                                </p>
                            </div>
                        </div>

                        <!-- Horário de Atendimento -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-10 h-10 bg-primary rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-primary font-semibold mb-1">Horário de Atendimento</h4>
                                <p class="text-primary text-sm">
                                    Segunda a Sexta: 09:00 às 18:00<br>
                                    Sábado e Domingo: Fechado<br>
                                    <span class="text-xs italic">Atendimento mediante agendamento</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp CTA -->
                    <div class="mt-6 pt-6 border-t-2 border-primary/20">
                        <a href="https://wa.me/5527988114221" target="_blank" class="flex items-center justify-center bg-green-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp text-2xl mr-2"></i>
                            <span>Fale conosco pelo WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Mapa -->
                <div class="bg-primary rounded-lg shadow-lg p-4">
                    <h3 class="text-secondary text-xl font-bold mb-4">Localização</h3>
                    <div class="w-full h-80 bg-secondary/10 rounded-lg flex items-center justify-center">
                        <!-- Placeholder para o Google Maps Embed -->
                        <div id="map-container" class="w-full h-full rounded-lg overflow-hidden">
                            <p class="text-secondary text-center p-4">
                                <i class="fas fa-map-marked-alt text-4xl mb-2"></i><br>
                                <span class="text-sm">Cole aqui o código embed do Google Maps</span>
                            </p>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Script para validação do formulário (básico) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validação básica
        const nome = document.getElementById('nome').value.trim();
        const email = document.getElementById('email').value.trim();
        const telefone = document.getElementById('telefone').value.trim();
        const assunto = document.getElementById('assunto').value;
        const mensagem = document.getElementById('mensagem').value.trim();
        const privacidade = document.getElementById('privacidade').checked;
        
        if (!nome || !email || !telefone || !assunto || !mensagem || !privacidade) {
            alert('Por favor, preencha todos os campos obrigatórios e aceite a Política de Privacidade.');
            return;
        }
        
        // Aqui você pode adicionar a integração com um plugin de formulário
        // como Contact Form 7, WPForms, Gravity Forms, etc.
        
        alert('Formulário enviado com sucesso! Em breve entraremos em contato.');
        form.reset();
    });
    
    // Máscara para telefone (opcional - pode melhorar com uma biblioteca)
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        
        if (value.length <= 11) {
            if (value.length <= 10) {
                value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
            } else {
                value = value.replace(/(\d{2})(\d{1})(\d{4})(\d{4})/, '($1) $2 $3-$4');
            }
            e.target.value = value;
        }
    });
});
</script>

<?php get_footer(); ?>
