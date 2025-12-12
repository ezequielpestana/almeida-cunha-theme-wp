window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
        })
    }

    // Espaçamento header
    const header = document.querySelector('header')
    const spacing = document.getElementById('spacing')

    const setHeaderSpacing = () =>{
        if(header && page){
            const headerHeight = header.offsetHeight;
            spacing.style.paddingTop = headerHeight + 'px'
         }
        }

    

    setHeaderSpacing()

    window.addEventListener('resize', setHeaderSpacing)
    
    // Cookie Banner
    function getCookie(name) {
        return document.cookie
            .split('; ')
            .find(row => row.startsWith(name + '='))
            ?.split('=')[1];
    }

    if (!getCookie('site_cookie_consent')) {
        const path = window.location.pathname;
        const isEnglish = path === '/en' || path.startsWith('/en/');

        const messages = {
            pt : {
                text : 'Utilizamos cookies para melhorar a experiência do usuário',
                link : 'Saiba Mais',
                button : 'Aceitar',
            },
            en : {
                text : 'We use cookies to improve your experience',
                link : 'Learn more',
                button : 'Accept',
            }
        };

        const lang = isEnglish ? messages.en : messages.pt;
        const banner = document.getElementById('cookie-banner');
        const cookieText = document.getElementById('cookie-text');
        const cookieLink = document.getElementById('cookie-link');
        const acceptButton = document.getElementById('accept-cookies');

        if (banner && cookieText && cookieLink && acceptButton) {
            cookieText.textContent = lang.text;
            cookieLink.textContent = lang.link;
            acceptButton.textContent = lang.button;
            banner.classList.remove('hidden');
        }
    }

    // Event listener para aceitar cookies
    const acceptBtn = document.getElementById('accept-cookies');
    if (acceptBtn) {
        acceptBtn.addEventListener('click', function () {
            document.cookie = "site_cookie_consent=accepted; path=/; max-age=" + (60 * 60 * 24 * 180);
            const banner = document.getElementById('cookie-banner');
            if (banner) {
                banner.classList.add('hidden');
            }
        });
    }
})


