let carts = document.querySelectorAll('.addcart');

let products = [
    {
        name: "Iphone 12 Pro",
        tag: "iphone12",
        price: 999,
        inCart: 0
    },
	{
        name: "Iphone 12 Pro",
        tag: "iphone12",
        price: 999,
        inCart: 0
    },
    {
        name: "2021 Ipad Pro 11 inch",
        tag: "ipad",
        price: 799,
        inCart: 0
    },
    {
        name: "MXWV2 - iMac 2020 27 inch 5K - (i7-3.8GHz/ 512GB/ RP 5500 XT 8GB) - NEW",
        tag: "imac",
        price: 2466,
        inCart: 0
    },
    {
        name: "Men leather bag",
        tag: "bag",
        price: 60,
        inCart: 0
    }
];

for(let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', ()=>{
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent  = productNumbers + 1;
    } else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent  = 1;
    }

    setItem(product);
    
}

function setItem(product){
    let cartItems = localStorage.getItem('productsInCart')
    cartItems = JSON.parse(cartItems);
    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else{
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product){
    let cartCost = localStorage.getItem('totalCost');
    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else{
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    if(cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <span>X</span>
                <img src="./images/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">${item.price}</div>
            <div class="quantity">
                <span>-</span>
                <span>${item.inCart}</span>
                <span>+</span>
            </div>
            <div class="total">
                ${item.inCart * item.price},00
            </div>
            `;
        });
        
        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">
                    Basket Total
                </h4>
                <h4 class="basketTotal">
                    $${cartCost},00
                </h4>
        `;
    }
}

function order(){
    window.localStorage.clear();
}

function checkdiscount(){
    var check1 = localStorage.getItem('discount');
    if(check1 != 0){
        alert('Only one discount code can be use for one order!')
        return;
    }
    let total = localStorage.getItem('totalCost');
    total = parseInt(total);
    var code = document.getElementById('discount').value;
    if(code == 'COSC2430-HD'){
        localStorage.setItem('totalCost', (total * 80 / 100));
        alert('20% discount');
    } 
    else if(code == 'COSC2430-DI'){
        localStorage.setItem('totalCost', (total * 90 / 100));
        alert('10% discount');
    } 
    else {
        alert('Error');
    }
    var codevalue = localStorage.getItem('discount');
    if(codevalue == 0){
        localStorage.setItem('discount', 1);
    }
    else if(codevalue != 0){
        localStorage.setItem('discount', codevalue);
    }
    document.getElementsByClassName('coupons').disabled = true;
    displayCart();
}

function checkifalreadydiscount(){
    var check = localStorage.getItem('discount');
    if(check == null){
        localStorage.setItem("discount", 0);
        return;
    } else {
        return;
    }
}

onLoadCartNumbers();
checkifalreadydiscount();
displayCart();