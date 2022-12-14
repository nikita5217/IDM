const tabs = document.querySelectorAll('.reels-tab')
const ideas = document.querySelectorAll('.reels-ideas .ideas')
let tabArray = [];

for (var i = 0; i < tabs.length; i++){
  tabArray.push(tabs[i]);
  tabs[i].addEventListener('click', function(e){
      for (let r = 0; r < tabs.length; r++) {
        tabs[r].classList.remove('active')
      }
      for (let r = 0; r < ideas.length; r++) {
        ideas[r].classList.remove('active')
      }
      this.classList.add('active')
      ideas[tabArray.indexOf(this)].classList.add('active')
  });
}

window.onload = ()=>{
  const faq = document.querySelectorAll('.faq-cont .faqs .faq');

  var arrayElem = [];
  var opened = [];
  var b;
  function faqHeight(){
    if(window.innerWidth > 500){
        return '5.9vw';
    }else{
        return '25vw';
    }
}
  for (let i = 0; i < faq.length; i++) {
      faq[i].height = faq[i].clientHeight;
      faq[i].style.height = faqHeight();
      faq[i].classList.add('no-active')
  }
  
  for (var i = 0; i < faq.length; i++){
    arrayElem.push(faq[i]);
    faq[i].addEventListener('click', function(e){
     b = opened.find(element => element == arrayElem.indexOf(this));
       console.log(faq[arrayElem.indexOf(this)].height)
       
     if (b != undefined) {
          faq[arrayElem.indexOf(this)].style.height = faqHeight();
          faq[arrayElem.indexOf(this)].classList.add('no-active')
         opened.splice(opened.indexOf(b), 1)
     } else{
       opened.push(arrayElem.indexOf(this));
          faq[arrayElem.indexOf(this)].classList.remove('no-active')
          faq[arrayElem.indexOf(this)].style.height = faq[arrayElem.indexOf(this)].height + 'px';
     }
    });
  }
  
const selects = document.querySelectorAll('.select');
const selectedBlocks = document.querySelectorAll('.selected-block');
const selectedText = document.querySelectorAll('.selected-block p');
const options = document.querySelectorAll('.options');
let optionsArray = [];

if(selects.length > 0){
    function seletHeight(){
        if(window.innerWidth < 1920 && window.innerWidth > 1200){
            return '3.5vw';
        }else if(window.innerWidth > 1920){
            return '68px';
        }else if(window.innerWidth < 1200 && window.innerWidth > 800){
            return '4.2vw';
        }else if(window.innerWidth < 800 && window.innerWidth > 500){
            return '5.5vw';
        }else{
            return '13vw';
        }
    }
    for (let i = 0; i < selectedBlocks.length; i++) {
        selectedBlocks[i].cond = true;
    }
        for (let i = 0; i < options.length; i++) {
            options[i].height = options[i].clientHeight;
            options[i].style.height = seletHeight();
        }
    
    for (let i = 0; i < selects.length; i++) {
        let option = options[i].querySelectorAll('.option');
  
        selectedBlocks[i].addEventListener('click', ()=>{
            if(selectedBlocks[i].cond){
                options[i].style.height = options[i].height + 'px';
                selects[i].classList.add('active')
                background.style.display = 'block'
                background.style.zIndex = '8'
                selectedBlocks[i].cond = false;
            }else{
                options[i].style.height = seletHeight();
                background.style.display = 'none'
                background.style.zIndex = '50'
                selects[i].classList.remove('active')
                selectedBlocks[i].cond = true;
            }
            
        })
        for (let r = 0; r < option.length; r++) {
            optionsArray.push(option[r]);
            option[r].addEventListener('click', function(e){
                selectedText[i].innerText = option[r].innerText;
                selectedText[i].classList.add('active');
                options[i].style.height = seletHeight();
                background.style.zIndex = '50'
                background.style.display = 'none'
                selects[i].classList.remove('active')
                selectedBlocks[i].cond = true;
                for (let r = 0; r < ideas.length; r++) {
                  ideas[r].classList.remove('active')
                }
                ideas[optionsArray.indexOf(this)].classList.add('active')
            })
            
        }
        background.addEventListener('click', ()=>{
            options[i].style.height = seletHeight();
            background.style.display = 'none'
            background.style.zIndex = '50'
            selects[i].classList.remove('active')
            selectedBlocks[i].cond = true;
        })
        
    }
}
  
}


