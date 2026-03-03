<section id="contato" class="contact-section">
    <div class="container">
        <h2 class="section-title">Fale <span>Conosco</span></h2>
        
        <div class="contact-wrapper">
            <div class="contact-info-panel">
                <h3>Precisa de ajuda com o INSS?</h3>
                <p>Nossa equipe está pronta para analisar o seu caso e garantir os seus direitos. Entre em contato agora mesmo.</p>
                
                <div class="info-items">
                    <div class="info-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <strong>WhatsApp</strong>
                            <a href="https://wa.me/5511967755050" target="_blank">(11) 96775-5050</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fab fa-instagram"></i>
                        <div>
                            <strong>Instagram</strong>
                            <a href="https://instagram.com/adv.carolinarpm" target="_blank">@adv.carolinarpm</a>
                        </div>
                    </div>
                    
                    <div class="info-item" style="align-items: flex-start;">
                        <i class="fas fa-map-marker-alt" style="margin-top: 5px;"></i>
                        <div>
                            <strong>Endereço</strong>
                            <p style="margin-bottom: 0; font-size: 1.05rem; line-height: 1.5; font-weight: 500;">
                                Av. dos Autonomistas, 2435<br>
                                Conjunto 203 A<br>
                                Edifício Mondial - Complexo Ibis Hotel<br>
                                Estacionamento no local<br>
                                Centro - Osasco<br>
                                CEP - 06090-020
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-panel">
                <form id="whatsappForm" class="form" onsubmit="sendWhatsApp(event)">
                    <div class="form-group">
                        <input type="text" id="wnome" placeholder="Seu Nome Completo" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="telefone" placeholder="Seu WhatsApp" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <textarea id="wmensagem" placeholder="Conte brevemente sobre o seu caso..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('telefone').addEventListener('input', function (e) {
    let x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    if (!x[2]) {
        e.target.value = x[1];
    } else {
        e.target.value = '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    }
});

function sendWhatsApp(event) {
    event.preventDefault();
    
    var nome = document.getElementById('wnome').value;
    var wtelefone = document.getElementById('telefone').value;
    var wmensagem = document.getElementById('wmensagem').value;
    
    var whatsAppUrl = "https://wa.me/5511967755050?text=" 
        + encodeURIComponent("Olá, meu nome é " + nome + ". \n\n" 
        + "Meu Telefone: " + wtelefone + "\n\n"
        + "Minha dúvida/problema: " + wmensagem);
        
    window.open(whatsAppUrl, '_blank');
}
</script>
