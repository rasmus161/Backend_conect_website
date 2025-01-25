/* Site-wide JS */
document.addEventListener('DOMContentLoaded', () => {



    // Base URL for the website
    const baseUrl = 'https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/'

    // meny links 
    const mainMenu = [
        { name: "ads", link: "assets/pages/ads.php" },
        { name: "info", link: "./index.php" },
        { name: "login", link: "assets/pages/signup.php" },

    ];

    // create the main menu 
    function generateMenu() {
        const currentPath = window.location.pathname;
        const nav = document.querySelector('.main-nav-ulv2');

        //check if the user is logged in

        fetch(baseUrl + 'assets/pages_content/initial.php')
            .then(Response => Response.json)
            .then(data => {
                if (data.loggedIn) {
                    // Replace login link with profile link
                    mainMenu.forEach(link => {
                        if (link.name === "signup") {
                            link.name = "login";
                            link.link = "assets/pages/login.php"
                        }
                    })
                }
            })


        mainMenu.forEach(link => {
            // Always use the base URL for constructing the links
            let href = baseUrl + link.link.replace('./', '');
            let isActive = '';

            // Check if the current link is active
            const normalizedLink = link.link.replace('./', '');
            if (currentPath.includes(normalizedLink)) {
                isActive = 'active';
            }

            // Create the list item and anchor elements as a string
            const listItem = `<li><a href="${href}" class="${isActive}">${link.name}</a></li>`;

            // Insert the list item into the nav container
            nav.innerHTML += listItem;
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