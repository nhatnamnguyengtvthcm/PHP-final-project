var productCardArr = [
  {
    title: "CGV SNACK COMBO",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 99000,
    image: "jungle.png"
  },
  {
    title: "MILO COMBO 2021",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 100000,
    image: "milo.png"
  },
  {
    title: "SHIN-CHAN COMBO",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 99000,
    image: "mycombo.png"
  },
  {
    title: "CGV COMBO",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 80000,
    image: "shin.png"
  },
  {
    title: "MY COMBO",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 99000,
    image: "cheese.png"
  },
  {
    title: "MY COMBO",
    description: "1 bắp Caramel lớn + 1 Milo hộp giấy + 1 nước ngọt **Phụ thu đổi sang vị bắp Phô mai** ***Nhận trong ngày xem phim***",
    price: 75000,
    image: "cheese.png"
  },
]
var productContainer = document.querySelector(".product-card");
for (productCard of productCardArr) {
  let productCarDiv = document.createElement("div");
  productCarDiv.className = "col-md-6 card-inner";
  productCarDiv.innerHTML = ` 
    <div class="image-combo">
      <img class="card-img-top" src="imageCombo/${productCard.image}" alt="">
      <div class="countItem">
      <div class="btnMinus"><i class="fas fa-minus-square itemIcon"></i></div>
      <div><input type="text" name="" value="0" class="countInput"></div>
      <div class="btnPlus"><i class="fas fa-plus-square itemIcon"></i></div>
      </div>
    </div>
    <div class="card-body">
      <div class="card-body-width">
      <h5 class = "getItemCombo">${productCard.title}</h5>
        <span>${productCard.description}</span>
         <h5 class = "getItemPrice">${productCard.price}</h5>
         <span>VND</span>
      </div>
    </div>`

  productContainer.appendChild(productCarDiv)

}


// count combo
document.querySelectorAll('.btnPlus').forEach(plus => {
  plus.addEventListener('click', (ev) => {
    plus.previousSibling.previousSibling.firstChild.value++;

  });
});

document.querySelectorAll('.btnMinus').forEach(minus => {
  minus.addEventListener('click', (ev) => {
    if (minus.nextSibling.nextSibling.firstChild.value > 0)
      minus.nextSibling.nextSibling.firstChild.value--;

  });
});
// close modal
var btnCloseModalx = document.querySelector(".modalx");
document.querySelector('.btnCloseCombo').addEventListener('click', function () {
  document.querySelector('.modalx').classList.add("closeModalxAnimation");
  setTimeout(function () {
    document.querySelector('.modalx').classList.add("closeModalx");
  }, 500)

})
document.querySelector('.btnOrderCancel').addEventListener('click', function () {
  document.querySelector('.modalx').classList.add("closeModalxAnimation");
  setTimeout(function () {
    document.querySelector('.modalx').classList.add("closeModalx");
  }, 500)

})
// Extra product button
var btnExtraCombo = document.querySelector('.btnExtraCombo');
var modalx = document.querySelector('.modalx');
btnExtraCombo.addEventListener('click', function () {
  document.querySelector('.modalx').classList.remove("closeModalxAnimation");
  document.querySelector('.modalx').classList.remove("closeModalx");
  modalx.classList.add("modalxChange");
});
// get detailCombo Extra and caculate total price
var btnOrderSave = document.querySelector(".btnOrderSave");
var countInput = document.querySelectorAll(".countInput");
var getValueCombo = document.querySelector(".getValueCombo");
var getItemPrice = document.querySelectorAll(".getItemPrice");
var getItemCombo = document.querySelectorAll(".getItemCombo");
var showSumTotalPrice = document.querySelector(".showSumTotalPrice");
var totalItemPrice = 0;
var totalItemValueLIndex = 0;
var sumTotalPrice = 0;
var ItemComboArr = [];
btnOrderSave.addEventListener('click',function(){
  
    countInput.forEach((nutValueCombo,index)=>{
   if(nutValueCombo.value >0){
    var detailCombo = nutValueCombo.value +" "+ getItemCombo[index].innerHTML;
    totalItemPrice = Number(getItemPrice[index].innerHTML);
    totalItemValueLIndex = Number(nutValueCombo.value);
    sumTotalPrice += Number(totalItemPrice*totalItemValueLIndex);
    
    ItemComboArr.push(detailCombo);
    
   }
  })
  getValueCombo.innerHTML = ItemComboArr.join(" - ");
  var pickingSeatLength = pickingSeat.length;
  var getSumTotalPrice = sumTotalPrice + Number(pickingSeatLength*100000)
  showSumTotalPrice.value = getSumTotalPrice;
 
})






