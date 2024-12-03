document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
  
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  });

  
            //mobile menu
            const hamburger = document.querySelector('#hamburger');
            const menu = document.querySelector('#menu');
            const hLink = document.querySelector('#hLink');
            const faSolid = document.querySelector(".fa-solid");

            hamburger.addEventListener("click", () => {
                menu.classList.toggle('hidden');
                faSolid.classList.toggle('fa-xmark');
            })

            hLink.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    faSolid.classList.toggle('fa-xmark');
                })
            })

        //images
        
  