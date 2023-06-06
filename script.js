const spinnerWrapperE1 = document.querySelector('.spinner-wrapper');

setTimeout(() => {
    spinnerWrapperE1.style.opacity ='0';
    
    setTimeout(() => {
        spinnerWrapperE1.style.display = 'none'; 
     }, 0);

 }, 2000);