const positionImg = document.querySelectorAll(".slider-container img")
const imgContainer = document.querySelector(".slider-container")
const dotItem = document.querySelectorAll(".dot")
let imgNum = positionImg.length
let index = 0;

// console.log(positionImg)
positionImg.forEach(function(image, index){
   
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
        slider(index)
    })
})

function imgSlide()
{
    index++;
    console.log(index)
    if(index >= imgNum) {index = 0}
    slider(index)
}

function slider(){
    imgContainer.style.left = "-" + index*100 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide,5000)