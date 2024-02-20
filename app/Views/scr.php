<script>
    const hamburger = document.getElementById("hamburger");
    const detail_navbar = document.querySelector(".detail-navbar");
    const list_detail_item = document.querySelectorAll(".list-detail-item");
    const project_detail = document.querySelectorAll(".project-detail");
    const items = document.querySelectorAll(".item");
    let openNavbar = false;
    const setNavbar = () => {
        let x = openNavbar ? '180' : '0'
        let left = openNavbar ? '0' : '100';
        let overflow = openNavbar ? "hidden" : "auto"
        hamburger.style.transform = `rotate(${x}deg)`
        detail_navbar.style.left = `${left}%`;
        document.body.style.overflow = overflow
    }
    hamburger.onclick = () => {
        openNavbar = !openNavbar;
        setNavbar()
    }
    list_detail_item.forEach(elem => {
        elem.onclick = () => {
            openNavbar = !openNavbar;
            setNavbar()
        }
    });
    const navbar = document.querySelector(".navbar");
    var prevScroll = window.pageYOffset;
    window.onscroll = (e) => {
        // console.log(window.scrollY);
        var currentScroll = window.pageYOffset;
        if (currentScroll > prevScroll) {
            navbar.style.top = '-60px'
        } else {
            navbar.style.top = '0'
        }
        prevScroll = currentScroll
    }
    items.forEach((elem, idx) => {
        elem.onmouseenter = () => {
            // transform: scale(1.5);
            project_detail[idx].style.opacity = "1";
            elem.firstElementChild.style.transform = 'scale(1.2)'
        }
        elem.onmouseleave = () => {
            project_detail[idx].style.opacity = "0"
            elem.firstElementChild.style.transform = 'scale(1)'
        }
    })
</script>