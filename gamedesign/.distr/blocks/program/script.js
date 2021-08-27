

let tabsItems=document.querySelectorAll('.program__name')
let programInfo=document.querySelectorAll('.program__info')
for (let i = 0; i < tabsItems.length; i++) {
    tabsItems[i].addEventListener('click',(e)=>{
        let infoList=tabsItems[i].nextElementSibling
        let arrow=tabsItems[i].children
        if(infoList.classList.contains('program__info--active')){
            infoList.classList.remove('program__info--active')
            arrow[0].classList.remove('program__close--active')
            
        }else{
            infoList.classList.add('program__info--active')
            arrow[0].classList.add('program__close--active')
        }
        
    })
}
let programNavItem=document.querySelectorAll('.program__nav-item')
let programItem=document.querySelectorAll('.program__item')
for (let i = 0; i < programNavItem.length; i++) {
    programNavItem[i].addEventListener('click',(e)=>{
        for (let k = 0; k < programNavItem.length; k++) {
            programNavItem[k].classList.remove('program__nav-item--active')
            programItem[k].style.display='none'
        }
        programNavItem[i].classList.add('program__nav-item--active')
        programItem[i].style.display='flex'
        
    })
    
}
window.addEventListener('resize',()=>{
    if(window.innerWidth<767){
        for(let i = 0;i<programNavItem.length;i++){
            
            programItem[i].style.display='none'
            programItem[0].style.display='flex'
        }
    }else{
        for(let i = 0;i<programNavItem.length;i++){
            programNavItem[0].classList.add('program__nav-item--active')
            programItem[i].style.display='flex'
            
        }
    }
})

