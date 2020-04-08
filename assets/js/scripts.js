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
