# Carolina Macedo

Landing Page profissional e premium desenvolvida exclusivamente para a filial de advocacia previdenciária, priorizando performance, clean code e alta conversão através de contato direto.

## 🎨 Apresentação Visual
Todo o projeto foi estilizado com uma identidade visual moderna do formato **Dark Obsidian & Premium Gold**. A paleta central utiliza Ouro Champagne, contrastando rigidamente com recortes azuis escuros e um fundo perolado sutil, trazendo extrema seriedade e requinte visual compatíveis à área de Direito.

## 🚀 Tecnologias e Padrões Aplicados
- **Linguagem Backend:** PHP (Custom Router)
- **Design System:** HTML5 Semântico + CSS3 Grid Flex/Custom Properties
- **Padrão de Arquitetura:** Estrutura MVC Simples (Model-View-Controller adaptado para views)
- **Ícones e Tipografia:** FontAwesome Icons & Google Fonts (`Outfit`)
- **JavaScript embutido:** Funções dinâmicas de conversão (Máscaras de Telefone e envio inteligente via WhatsApp).

## 📁 Estrutura de Pastas (Clean Code)

O projeto foi organizado isolando a inicialização (`public`) dos códigos executáveis e de visão da aplicação matemática (`src`):

```text
SiteCarolinaADV/
├── public/                 # Diretório publicamente acessível para o servidor Root
│   ├── index.php           # Arquivo inicial e entrada das requisições
│   ├── .htaccess           # Rotas seguras e limpas do Apache
│   └── assets/             # Agrupamento estático
│       ├── css/            # Estilos (style.css)
│       ├── js/             # Scripts client-side (script.js)
│       └── images/         # Elementos midiáticos, fotos e logo brand
├── src/                    # Todo o Core PHP do projeto protegido
│   ├── bootstrap.php       # Core Loader
│   ├── Controllers/        # Lógicas das rotas e requisição (ex: HomeController)
│   └── Views/              # Renderização dos artefatos
│       ├── layouts/        # Esqueleto principal HTML (main.php)
│       ├── components/     # Fragmentos das partes do site (header, hero, benefits, contact, footer)
│       └── home.php        # Junction agregadora
└── README.md
```

## ⚡ Funcionalidades Embutidas
- **Formulário Dinâmico ao WhatsApp:** Ao cliente inserir seus dados, a Landing Page monta a string da query e joga o dispositivo dele (PC ou Mobile) direto na DM configurada da advogada no WhatsApp `(11) 96775-5050` contendo a mensagem já redigida.
- **Máscara RegEx Client-side:** Campo de telefone exige o padrão celular brasileiro, orientando a experiência do cliente através do auto-spacing instantâneo: `(XX) 9XXXX-XXXX`.
- **Roteamento Limpo (Clean URLs):** Extensões como `.php` e `/index` foram abolidas em favor de slugs dinâmicas utilizando `htaccess`.