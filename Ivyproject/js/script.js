const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})
//------------------------------product---------------------
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
    })
}
if(chitiet){
    chitiet.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
    })
}
const buTon = document.querySelector(".product-content-right-bottom-top")
if(buTon){
    buTon.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("active")
    })
}

const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,x){
    imgItem.addEventListener("click",function(){
        bigImg.src = imgItem.src
    })
})