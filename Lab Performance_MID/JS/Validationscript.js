const unitPrice =1000;

const quantityInput =document.getElementById("quantity");
const totalPriceIntput =document.getElementById("totalPrice");

function calculateTotal(){
    let quantity = parseInt(quantityInput.value) || 0;
    if(quantity < 0){
        alert("Quantity cannot be negative ");
        quantity = 0;
        quantityInput.value =0;

    }
    let total= unitPrice * quantity *30;
    totalPriceIntput.value = total;
    if(total > 1000){
        alert("Conagratulation! You are eligible for a gift coupon");

    }

}
quantityInput.addEventListener("input", calculateTotal);