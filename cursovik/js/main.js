const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#nav-btn');
const navBtnImg = document.querySelector('#nav-btn-img');

navBtn.onclick = () => {
    if (nav.classList.toggle('open')) {
        navBtnImg.src = "./img/icons/nav-close.svg";
    } else {
        navBtnImg.src = './img/icons/nav-open.svg';
    }
}

AOS.init();


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1
    }

    if (n < 1) {
        slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("act", "");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className+=" act";
}



const elastic = document.querySelector('#elastic')

elastic.addEventListener('input', (ev) => {
    const value = ev.target.value.trim()
    const elasticItems = document.querySelectorAll('.card')
    const searchRegExp = new RegExp(value, 'gi')

    if (value === '') {
        elasticItems.forEach((el) => {
            el.classList.remove('hide')
        })
        return
    }

    elasticItems.forEach((el) => {
        const innerCard = el.querySelector('.card2')
        const elementText = innerCard.textContent
        const isContainsSearchRequest = searchRegExp.test(elementText)
        if (!isContainsSearchRequest) {
            el.classList.add('hide')
        } else {
            el.classList.remove('hide')
        }
    })
})