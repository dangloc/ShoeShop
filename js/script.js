// -----------------menu category------------------
const itemsSlidebar = document.querySelectorAll('.category-left-li')
itemsSlidebar.forEach(function(menu, index){
    menu.addEventListener("click", function()
    {
        menu.classList.toggle("block")
    })
})

// ---------------------product--------------------------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")

smallImg.forEach(function(item, x){
    item.addEventListener("click", function(){
        bigImg.src = item.src
    })
})

const bq = document.querySelector(".bq")
const des = document.querySelector(".des")
if(bq)
{
    bq.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-des").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-bq").style.display = "block"
    })
}

if(des)
{
    des.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-des").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-bq").style.display = "none"
    })
}

const buttoN = document.querySelector(".product-content-right-bottom-top")

if(buttoN)
{
    buttoN.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}