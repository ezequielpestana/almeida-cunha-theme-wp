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
    
})
