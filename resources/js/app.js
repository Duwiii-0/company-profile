import './bootstrap';

import  '../images/gojek.png';
import  '../images/google.png';
import  '../images/meta.png';
import  '../images/playstation.png';
import  '../images/roblox.png';

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