// BURGER MENU
let burger =document.querySelector('.burger'),
    burgerMenu =document.querySelector('.burger-menu'),
    burgerMenuLink =document.querySelector('.burger-menu__link'),
    burgerMenuClose =document.querySelector('.burger-menu__close');

burger.addEventListener('click',()=>burgerMenu.classList.toggle('burger-menu--active'));
burgerMenuClose.addEventListener('click',()=>burgerMenu.classList.remove('burger-menu--active'));
burgerMenu.addEventListener('click',(e)=>{
    if(e.target.classList.contains('burger-menu__link')) {
        burgerMenu.classList.remove('burger-menu--active');
    } 
})
console.log('burger');