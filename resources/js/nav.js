const menu_2=document.querySelector('.menu-2');
const container=document.querySelector('.myContainer');
const main=document.querySelector('.main');
// console.log(main);
menu_2.addEventListener('click',(e)=>{
    container.classList.toggle('active');
    // console.log(container.classList.contains('active'));
})   
main.addEventListener('click',()=>{
    if (container.classList.contains('active')) {
        console.log('ciao');
        container.classList.toggle('active');
    }
})