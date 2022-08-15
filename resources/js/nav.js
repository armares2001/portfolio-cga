const menu_2=document.querySelector('.menu-2');
const container=document.querySelector('.myContainer');
const main=document.querySelector('.main');
// console.log(main);
const overlay=document.querySelector('.overlay');
menu_2.addEventListener('click',(e)=>{
    container.classList.toggle('active');
    overlay.classList.toggle('active');
    main.classList.toggle('active');
})
main.addEventListener('click',()=>{
    if (container.classList.contains('active')) {
        container.classList.toggle('active');
        overlay.classList.toggle('active');
        main.classList.toggle('active');
    }
})

