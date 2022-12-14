const arrows = document.querySelectorAll('.slider .arrow');
const tabsTitle = document.querySelectorAll('.tabs-head p');
const mainSlider = document.querySelectorAll('.tab');
const mainSliderCont = document.querySelectorAll('.slider');
const background = document.querySelector('.background-overlay');
const overlayClose = document.querySelectorAll('.overlay .close');
const overlayBtn = document.querySelectorAll('.overlay-btn');
const overlay = document.querySelectorAll('.overlay');
const overlayCookie = document.querySelector('.overlay-cookie');
const overlayCookieBtns = document.querySelectorAll('.overlay-cookie .main-btn');
let slideDotsCont;
let arrowCondition = true;
let slides;
let slideDots;
let curSlide = [];
let arrayElemSlider = [];
let arrayElemTabs = [];
let galleryTochStart;
let galleryTochEnd;
let backgroundCond = true;

const overlayBtn1 = document.querySelector('.overlay-btn-1');
const overlay1 = document.querySelector('.overlay-1');
const overlayBtn2 = document.querySelector('.overlay-btn-2');
const overlay2 = document.querySelector('.overlay-2');
const overlayBtn3 = document.querySelector('.overlay-btn-3');
const overlay3 = document.querySelector('.overlay-3');
const overlayBtnServise1 = document.querySelector('.overlay-servise-btn-1');
const overlayServise1 = document.querySelector('.overlay-servise-1');
const overlayBtnServise2 = document.querySelector('.overlay-servise-btn-2');
const overlayServise2 = document.querySelector('.overlay-servise-2');
const overlayBtnServise3 = document.querySelector('.overlay-servise-btn-3');
const overlayServise3 = document.querySelector('.overlay-servise-3');
const overlayBtnLang = document.querySelector('.langs');
const overlayLang = document.querySelector('.overlay-lang');
if(overlayBtn != undefined){
  if(overlayBtn1 != undefined){
    overlayBtn1.addEventListener('click', ()=>{
      overlay1.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
          overlay1.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  if(overlayBtn2 != undefined){
    overlayBtn2.addEventListener('click', ()=>{
      overlay2.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
          overlay2.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  if(overlayBtn3 != undefined){
    overlayBtn3.addEventListener('click', ()=>{
      overlay3.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
          overlay3.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  if(overlayBtnLang != undefined){
    overlayBtnLang.addEventListener('click', ()=>{
      overlayLang.style.display = 'flex';
      setTimeout(() => {
        overlayLang.classList.add('active');
      }, 100);
      
  })
  }
  document.body.addEventListener('click', e => {
    if(!e.path.includes(overlayLang) & overlayLang.classList.contains('active')){
      setTimeout(() => {
        overlayLang.classList.remove('active');
        setTimeout(() => {
          overlayLang.style.display = 'none';
        }, 400);
      }, 100);
    }
})
  if(overlayBtnServise1 != undefined){
    overlayBtnServise1.addEventListener('click', ()=>{
      overlayServise1.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
        overlayServise1.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  if(overlayBtnServise2 != undefined){
    overlayBtnServise2.addEventListener('click', ()=>{
      overlayServise2.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
        overlayServise2.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  if(overlayBtnServise3 != undefined){
    overlayBtnServise3.addEventListener('click', ()=>{
      overlayServise3.style.display = 'flex';
      background.style.display = 'block';
      setTimeout(() => {
        overlayServise3.classList.add('active');
          background.classList.add('active');
      }, 100);
      
  })
  }
  for (let r = 0; r < overlayClose.length; r++) {
    overlayClose[r].addEventListener('click', ()=>{
      for (let i = 0; i < overlay.length; i++) {
        overlay[i].classList.remove('active');
        background.classList.remove('active');
        setTimeout(() => {
          overlay[i].style.display = 'none';
          background.style.display = 'none';
      }, 400);
      }
  })
  }
  background.addEventListener('click', ()=>{
    if(backgroundCond){
      for (let i = 0; i < overlay.length; i++) {
        overlay[i].classList.remove('active');
        background.classList.remove('active');
        setTimeout(() => {
          overlay[i].style.display = 'none';
          background.style.display = 'none';
      }, 400);
      }
    }
  })
}

for (let i = 0; i < mainSlider.length; i++) {
  curSlide[i] = 0;
  arrayElemSlider[i] = [];
  multiSlide(i);
  slideUpdate(i);
}

for (let i = 0; i < tabsTitle.length; i++) {
  arrayElemTabs.push(tabsTitle[i]);
  tabsTitle[i].addEventListener('click', function(){
      for (let r = 0; r < mainSlider.length; r++) {
        mainSlider[r].classList.remove('active');
      }
      for (let r = 0; r < tabsTitle.length; r++) {
        tabsTitle[r].classList.remove('active');
      }
      mainSlider[arrayElemTabs.indexOf(this)].classList.add('active');
      this.classList.add('active');
  })
}



function multiSlide(s) {
  slides = mainSlider[s].querySelectorAll('.slide');
  slideDotsCont = mainSliderCont[s].querySelector('.dots');
  for (let i = 0; i < slides.length-2; i++) {
    slideDots = document.createElement('span');
    slideDotsCont.append(slideDots);
  }
  slideDots = mainSliderCont[s].querySelectorAll('.dots span');
  slides = mainSlider[s].querySelectorAll('.slide');

  arrows[s * 2 + 1].addEventListener('click', () => {
    slideDots = mainSliderCont[s].querySelectorAll('.dots span');
    if (arrowCondition) {
    if (curSlide[s] < slides.length-3){
        curSlide[s]++;
      slides = mainSlider[s].querySelectorAll('.slide');
        slideUpdate(s);
        for (let t = 0; t < slideDots.length; t++) {
            slideDots[t].classList.remove('active')
          }
        if (curSlide[s] < slideDots.length) {
            slideDots[curSlide[s]].classList.add('active')
          }
        arrowCondition = false;
      }
     
    }
  })

  arrows[s * 2].addEventListener('click', () => {
    slideDots = mainSliderCont[s].querySelectorAll('.dots span');
    if (arrowCondition) {

      if (curSlide[s] > 0){
        curSlide[s]--;
        slides = mainSlider[s].querySelectorAll('.slide');
        slideUpdate(s);
        for (let t = 0; t < slideDots.length; t++) {
            slideDots[t].classList.remove('active')
          }
        if (curSlide[s] >= 0) {
            slideDots[curSlide[s]].classList.add('active')
        }
          arrowCondition = false;
      }
    
    }
  })
  mainSlider[s].addEventListener('touchstart', function(event) {
    galleryTochStart = event.changedTouches[0].pageX;
}, false);

mainSlider[s].addEventListener('touchend', function(event) {
    galleryTochEnd = event.changedTouches[0].pageX;
    if (galleryTochStart-70 > galleryTochEnd) {
      slideDots = mainSliderCont[s].querySelectorAll('.dots span');
      if (arrowCondition) {
      if (curSlide[s] < slides.length-3){
          curSlide[s]++;
        slides = mainSlider[s].querySelectorAll('.slide');
          slideUpdate(s);
          for (let t = 0; t < slideDots.length; t++) {
              slideDots[t].classList.remove('active')
            }
          if (curSlide[s] < slideDots.length) {
              slideDots[curSlide[s]].classList.add('active')
            }
          arrowCondition = false;
        }
       
      }
           
    } else if(galleryTochStart < galleryTochEnd-70){
      slideDots = mainSliderCont[s].querySelectorAll('.dots span');
      if (arrowCondition) {
  
        if (curSlide[s] > 0){
          curSlide[s]--;
          slides = mainSlider[s].querySelectorAll('.slide');
          slideUpdate(s);
          for (let t = 0; t < slideDots.length; t++) {
              slideDots[t].classList.remove('active')
            }
          if (curSlide[s] >= 0) {
              slideDots[curSlide[s]].classList.add('active')
          }
            arrowCondition = false;
        }
      
      }
      
         
    }
})
 
  slideDots[0].classList.add('active');

  for (var i = 0; i < slideDots.length; i++) {
    arrayElemSlider[s].push(slideDots[i]);
    slideDots[i].addEventListener('click', function (e) {
      slideDots = mainSliderCont[s].querySelectorAll('.dots span');
      for (let t = 0; t < slideDots.length; t++) {
        slideDots[t].classList.remove('active')
      }
      this.classList.add('active')
      curSlide[s] = arrayElemSlider[s].indexOf(this);
      slideUpdate(s)
    });
  }
}


function slideUpdate(s) {
  slides = mainSlider[s].querySelectorAll('.slide');
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove('active');
  }
  slides[curSlide[s]].classList.add('active')
  if(window.innerWidth > 500){
    slides[0].style.marginLeft = 17-(23.3 * curSlide[s]) + 'vw';
  }else{
    slides[0].style.marginLeft = 19-(92.5 * curSlide[s]) + 'vw';
  }
  setTimeout(() => {
    arrowCondition = true;
  }, 300);
}


for (let e = 1; e < 2; e++) {
  let buttons = document.getElementsByClassName('scroll' + e);
  let block = document.getElementById('scrollMe' + e);
  let destination;
  for (let j = buttons.length - 1; j >= 0; j--) {
      buttons[j].addEventListener('click',()=>{
        
          if(window.innerWidth > 500){
            destination = block.offsetTop - window.innerHeight/4;
          }else{
            destination = block.offsetTop - (window.innerWidth/100)*20;
          }
           window.scroll({top: destination, left: 0, behavior: 'smooth'});
      }, false)
  }
}

