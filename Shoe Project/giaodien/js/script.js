// -----------------menu category------------------
const itemsSlidebar = document.querySelectorAll('.category-left-li')
itemsSlidebar.forEach(function(menu, index){
    menu.addEventListener("click", function()
    {
        menu.classList.toggle("block")
    })
})