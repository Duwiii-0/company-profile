import './bootstrap';


// Import all images at once
const images = import.meta.glob('../images/*.{png,jpg,jpeg,gif,svg}', { 
    eager: true 
});

const testiContainer = [...document.querySelectorAll('.testi-container')];

const nextBtn = [...document.querySelectorAll('.nxt-btn')];

const preBtn = [...document.querySelectorAll('.pre-btn')];

testiContainer.forEach((item, i) =>{
    let containerDimension = item.getBoundingClientRect();
    let containerWidth = containerDimension.width;

    nextBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})