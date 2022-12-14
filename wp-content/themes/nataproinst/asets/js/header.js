const burger = document.querySelector('.burger');
const rightPart = document.querySelector('header .right-part');
let burgerCond = true;
burger.addEventListener('click', ()=>{
  if(burgerCond){
    burger.classList.add('active');
    rightPart.classList.add('active');
    burgerCond = false;
  }else{
    burgerCond = true;
    burger.classList.remove('active');
    rightPart.classList.remove('active');
  }
})