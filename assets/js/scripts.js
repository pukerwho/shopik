//Animation
function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('shop-show');
    }
  });
}

let options = {
  threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.shop-animate');

for (let elm of elements) {
  observer.observe(elm);
}

//Mobile Menu
let mobileMenuBtn = document.querySelector('.header_mobile_menu');
let mobileMenuCover = document.querySelector('.header_mobile_cover');
mobileMenuBtn.addEventListener('click', function(){
  mobileMenuBtn.classList.toggle('open');
  mobileMenuCover.classList.toggle('open');
});

//Click Order
let bgModal = document.querySelector('.modal_bg');
let modalsClickId = document.querySelectorAll('.modal_click_js');

for (modalClickId of modalsClickId) {
  if (modalClickId) {
    modalClickId.addEventListener('click', function(){
      modalThisId = this.dataset.modalId;
      console.log(modalThisId);
      let modal = document.querySelector(".modal[data-modal-id='" + modalThisId + "'");
        modal.classList.add('open');
        bgModal.classList.add('open');
    });
  }
}

//Close Order modal 
let modalCloseBtns = document.querySelectorAll('.mobile .modal .close_btn', '.tablet .modal .close_btn');
let allModals = document.querySelectorAll('.modal');
document.addEventListener('click', function(e){
  if(e.target.classList.value === 'modal_bg open') {
    bgModal.classList.remove('open');
    for (allModal of allModals) {
      allModal.classList.remove('open');  
    }
  }
});

if (modalCloseBtns) {
  for (modalCloseBtn of modalCloseBtns) {
    modalCloseBtn.addEventListener('click', function(){
      bgModal.classList.remove('open');
      for (allModal of allModals) {
        allModal.classList.remove('open');  
      }
    });
  }
}
