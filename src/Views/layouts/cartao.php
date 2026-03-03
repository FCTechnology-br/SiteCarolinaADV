<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carolina Macedo - Cartão de Visita Virtual</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-main: #ceb076; /* Ouro Champagne */
            --primary-navy: #172a44; /* Azul Noturno */
            --bg-page: #f4f5f7;     /* Fundo da tela claro e premium */
            --bg-card: #ffffff;     /* Cartão branco puro */
            --text-dark: #1e293b;    /* Cinza/Azul muito escuro para títulos */
            --text-light: #64748b;   /* Cinza suave para descrição */
            --font-main: 'Outfit', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-main);
        }

        body {
            background-color: var(--bg-page);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .digital-card-container {
            width: 100%;
            max-width: 450px;
            background: var(--bg-card);
            border-radius: 24px;
            padding: 40px 25px;
            box-shadow: 0 20px 50px rgba(23, 42, 68, 0.08); /* Sombra super orgânica azulada */
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(23, 42, 68, 0.05);
        }

        .cover-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 140px;
            background: linear-gradient(135deg, var(--primary-navy) 0%, #0d1a29 100%);
            z-index: 0;
        }

        .cover-bg::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--primary-main), transparent);
        }

        .profile-container {
            position: relative;
            z-index: 1;
            margin-top: 40px;
            margin-bottom: 25px;
        }

        .profile-pic {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid var(--bg-card);
            object-fit: cover;
            background-color: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .profile-info {
            position: relative;
            z-index: 1;
            margin-bottom: 35px;
        }

        .profile-name {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 5px;
        }

        .profile-role {
            font-size: 1rem;
            color: var(--text-light);
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .links-container {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .link-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            width: 100%;
            padding: 16px 20px;
            border-radius: 12px;
            background-color: transparent;
            border: 2px solid var(--primary-navy);
            color: var(--primary-navy);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .link-btn i {
            font-size: 1.4rem;
            position: absolute;
            left: 20px;
            color: var(--primary-main);
        }

        .link-btn:hover {
            background-color: var(--primary-navy);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(23, 42, 68, 0.15);
        }

        .link-btn:hover i {
            color: var(--primary-main);
        }

        .link-btn.solid {
            background-color: var(--primary-navy);
            color: #fff;
            border-color: var(--primary-navy);
        }
        
        .link-btn.solid i {
            color: var(--primary-main);
        }

        .link-btn.solid:hover {
            background-color: #0d1a29;
            box-shadow: 0 8px 20px rgba(23, 42, 68, 0.25);
        }

        .address-display {
            background: rgba(23, 42, 68, 0.03);
            border: 1px solid rgba(23, 42, 68, 0.1);
            border-radius: 12px;
            padding: 15px;
            margin-top: -5px;
            margin-bottom: 5px;
        }
        
        .address-display p {
            font-size: 0.95rem;
            color: var(--text-light);
            line-height: 1.5;
            font-weight: 400;
        }

        .address-display small {
            display: block;
            margin-top: 8px;
            color: var(--primary-main);
            font-weight: 600;
        }

        .footer-logo {
            margin-top: 40px;
            position: relative;
            z-index: 1;
            display: inline-block;
        }

        .footer-logo img {
            height: 70px;
            opacity: 1;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="digital-card-container">
        <div class="cover-bg"></div>
        
        <div class="profile-container">
            <img src="assets/images/hero-advogada.png" alt="Carolina Macedo" class="profile-pic">
        </div>

        <div class="profile-info">
            <h1 class="profile-name">Carolina Macedo</h1>
            <p class="profile-role">Advogada Previdenciarista</p>
        </div>

        <div class="links-container">
            <a href="https://wa.me/5511967755050" target="_blank" class="link-btn solid">
                <i class="fab fa-whatsapp"></i> Falar no WhatsApp
            </a>
            
            <a href="#" onclick="downloadVCF()" class="link-btn">
                <i class="fas fa-user-plus"></i> Salvar na Agenda
            </a>

            <a href="https://instagram.com/adv.carolinarpm" target="_blank" class="link-btn">
                <i class="fab fa-instagram"></i> Instagram
            </a>

            <a href="mailto:previdencia.carol@gmail.com" target="_blank" class="link-btn">
                <i class="far fa-envelope"></i> E-mail Corporativo
            </a>
            
            <a href="https://maps.google.com?q=Avenida+dos+Autonomistas,+2435+-+Centro+-+Osasco" target="_blank" class="link-btn">
                <i class="fas fa-map-marker-alt"></i> Como Chegar
            </a>
            
            <div class="address-display">
                <p>Av. dos Autonomistas, 2435 - Conj 203A<br>
                Ed. Mondial - Complexo Ibis Hotel<br>
                Centro - Osasco/SP | CEP: 06090-020<br>
                <small>Estacionamento no local</small></p>
            </div>

            <a href="/" class="link-btn">
                <i class="fas fa-globe"></i> Acessar Site Oficial
            </a>
        </div>

        <div class="footer-logo">
            <img src="assets/images/logo-transparent.png" alt="Logo Carolina Macedo">
        </div>

    </div>

    <script>
        function downloadVCF() {
            const vcard = `BEGIN:VCARD
VERSION:3.0
N:Macedo;Carolina;;;
FN:Carolina Macedo Advogada
ORG:Sociedade Individual de Advocacia;
TITLE:Advogada Previdenciarista
TEL;type=WORK;type=VOICE;type=pref:+55 11 96775-5050
EMAIL:previdencia.carol@gmail.com
URL:https://advcarolinamacedo.com.br/cartao
ADR;type=WORK:;;Av. dos Autonomistas, 2435, Conjunto 203 A;Osasco;SP;06090-020;Brasil
END:VCARD`;
            
            const blob = new Blob([vcard], { type: "text/vcard" });
            const url = URL.createObjectURL(blob);
            
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = 'carolina_macedo_contato.vcf';
            document.body.appendChild(a);
            a.click();
            
            window.URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>
