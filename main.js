/* Site-wide JS */
document.addEventListener('DOMContentLoaded', () => {



    // Base URL for the website
    const baseUrl = 'https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/'



    // Check user status
    const isLoggedIn = document.cookie.includes('user='); // Check if the user cookie is set
    const hasSignedUp = document.cookie.includes('signedUp='); // Check if the signedUp cookie is set


    // meny links 

    const mainMenu = [
        { name: "ads", link: "assets/pages/ads.php" },
        { name: "info", link: "./index.php" },
        { name: isLoggedIn ? "profile" : hasSignedUp ? "login" : "signup", link: isLoggedIn ? "assets/pages/profile.php" : hasSignedUp ? "assets/pages/login.php" : "assets/pages/signup.php" },
    ];


    // Add logout link if logged in
    if (isLoggedIn) {
        mainMenu.push({ name: "logout", link: "/assets/pages_content/logout.php" })
    }

    // Create the main menu
    function generateMenu() {
        const currentPath = window.location.pathname;
        const nav = document.querySelector('.main-nav-ulv2');

        mainMenu.forEach(link => {
            // Always use the base URL for constructing the links
            let href = baseUrl + link.link.replace('./', '');
            let isActive = '';

            // Check if the current link is active
            const normalizedLink = link.link.replace('./', '');
            if (currentPath.includes(normalizedLink)) {
                isActive = 'active';
            }

            // Create the menu item
            const menuItem = document.createElement('li');
            menuItem.className = isActive;
            const menuLink = document.createElement('a');
            menuLink.href = link.link === "#" ? "#" : href;
            menuLink.textContent = link.name;
            if (link.onClick) {
                menuLink.addEventListener('click', link.onClick);
            }
            menuItem.appendChild(menuLink);
            nav.appendChild(menuItem);
        });
    }


    generateMenu();


    // hamburger menu  

    function hamburgerMenu() {

        const hamburger = document.querySelector('.hamburger');
        const menu = document.querySelector('.menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('show');

        });
    }

    hamburgerMenu();

    // hover effect for nav with js
    document.querySelectorAll('.main-nav-ulv2 li a').forEach(function (link) {
        if (!link.classList.contains('active')) {
            link.addEventListener('mouseover', function () {
                link.style.backgroundColor = 'var(--primary-color)';
                link.style.borderRadius = '5px';
                link.style.padding = '5px';

            });

            link.addEventListener('mouseout', function () {
                link.style.backgroundColor = '';

            });
        }
    });








});