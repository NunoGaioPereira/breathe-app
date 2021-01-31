const app = () => {

	// Document elements
	//const app_body = document.querySelector('.app');
    const logo = document.querySelector('.logo');

	// Apply cached theme on reload
    const theme_check = document.querySelector('.themeCheck');
    const body = document.body;
    const isDark = localStorage.getItem('isDark');

    if (isDark == 'true') { 
        body.classList.replace('light', 'dark');
        theme_check.checked = true;
        // bd.setAttribute("style", "--track-outline: #9298aa");
        logo.src = "./assets/logo_white.png";
    }
    theme_check.addEventListener('click', () => {
        if (theme_check.checked) {
            body.classList.replace('light', 'dark');
            localStorage.setItem('isDark', true);
            //bd.setAttribute("style", "--track-outline: #9298aa");
            logo.src = "./assets/logo_white.png";
        }
        else {
            body.classList.replace('dark', 'light');
            localStorage.setItem('isDark', false);
            //bd.setAttribute("style", "--track-outline: #f2f2f2");
            logo.src = "./assets/logo.png";
        }
    });
};


app();