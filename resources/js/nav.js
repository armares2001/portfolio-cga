const menu_2=document.querySelector('.menu-2');
const container=document.querySelector('.myContainer');
menu_2.addEventListener('click',()=>{
    container.classList.toggle('active');
    console.log('funziona');
})