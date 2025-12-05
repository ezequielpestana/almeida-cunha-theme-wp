<?php /* Template Name: Page Contact */
get_header();
?>

<!-- Hero Section -->
<div class="flex flex-col py-2 pr-2 @md:flex-row">
    <div class="flex text-primary p-2 w-full @xs:p-6 @md:py-6">
        <div class="hidden w-1/2 border-l-8 border-primary @md:pl-4 @4xl:block"></div>
        
        <div class="py-2 px-2 @4xl:w-1/2">
            <h1 class="font-bold text-3xl">Get in Touch</h1>
            <h2 class="text-sm font-bold mt-2">
                We are ready to serve you with excellence and dedication.
            </h2>
        </div>
    </div>

    <div class="flex w-full justify-center 2xl:justify-start 2xl:text-left bg-primary text-secondary p-2 text-center">
        <div class="flex items-center max-w-sm">
            <p class="text-sm p-6">
                Send us your message and our team will contact you to offer the <span class="font-bold">best legal solution</span> for your case.
            </p>
        </div>
    </div>
</div>

<!-- Conteúdo Principal: Formulário e Informações -->
<div class="bg-quaternary w-full px-4 py-10">
    <div class="max-w-2xl mx-auto">
        <div class="grid grid-cols-1 gap-8">

            <!-- Formulário de Contato -->
            <div class="bg-primary text-secondary rounded-lg shadow-lg p-8">
                <h3 class="text-secondary text-2xl font-bold mb-6">Contact Form</h3>
                
                <form id="contact-form text-secondary" class="space-y-4">
                    <!-- Nome -->
                    <div>
                        <label for="nome" class="block text-secondary text-sm font-semibold mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            required
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors"
                            placeholder="Your full name"
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
                            placeholder="(99) 9 9999-9999"
                        >
                    </div>

                    <!-- Mensagem -->
                    <div>
                        <label for="mensagem" class="block text-secondary text-sm font-semibold mb-2">
                            Describe your case <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="mensagem" 
                            name="mensagem" 
                            required
                            rows="5"
                            class="w-full px-4 py-3 rounded-lg border-2 border-secondary/20 focus:border-secondary focus:outline-none transition-colors resize-none"
                            placeholder="Tell us a little about your case or question..."
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
                            I agree with the <a href="#" class="font-semibold underline hover:text-secondary/80">Privacy Policy</a> 
                            and authorize the processing of my personal data in accordance with the General Data Protection Law (LGPD). <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <!-- Botão de Envio -->
                    <button 
                        type="submit"
                        class="w-full bg-secondary text-primary font-bold py-4 px-8 rounded-lg hover:bg-secondary/90 transition-colors duration-300 flex items-center justify-center"
                    >
                        <i class="fa-solid fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Informações de Contato e Mapa -->
            <div class="space-y-6">
                
                <!-- Informações de Contato -->
                <div class="bg-secondary border-2 border-primary rounded-lg shadow-lg p-8">
                        <!-- Horário de Atendimento -->
                        <div class="flex items-start">
                            <div class="flex items-center justify-center w-10 h-10 bg-primary rounded-full mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="text-primary font-semibold mb-1">Business Hours</h4>
                                <p class="text-primary text-sm">
                                    Monday to Friday: 09:00 AM to 06:00 PM<br>
                                    Saturday and Sunday: Closed<br>
                                    <span class="text-xs italic">Service by appointment</span>
                                </p>
                            </div>
                        </div>
                

                    <!-- WhatsApp CTA -->
                    <div class="mt-6 pt-6 border-t-2">
                        <a style="text-decoration: none;" href="https://wa.me/5527988114221" target="_blank" class="flex items-center justify-center bg-green-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp text-2xl mr-2"></i>
                            <span class="underline">Contact us via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Mapa -->
                <div class="bg-primary rounded-lg shadow-lg p-4">
                    <h3 class="text-secondary text-xl font-bold mb-4">Location</h3>
                    <div class="w-full h-80 bg-secondary/10 rounded-lg flex items-center justify-center">
                        <!-- Placeholder para o Google Maps Embed -->
                        <div id="map-container" class="w-full h-full rounded-lg overflow-hidden">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.1208141062607!2d-40.299345014235065!3d-20.336627102468228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb8163bf0028855%3A0x627974a206b74732!2sCondom%C3%ADnio%20do%20Edif%C3%ADcio%20Ant%C3%B4nio%20Saliba!5e0!3m2!1spt-BR!2sbr!4v1764953464268!5m2!1spt-BR!2sbr" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            alert('Please fill in all required fields and accept the Privacy Policy.');
            return;
        }
        
        // Here you can add integration with a form plugin
        // such as Contact Form 7, WPForms, Gravity Forms, etc.
        
        alert('Form submitted successfully! We will contact you soon.');
        form.reset();
    });
    
    // Phone mask (optional - can be improved with a library)
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
