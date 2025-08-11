document.querySelectorAll('.add-to-cart').forEach(function(button){
  button.addEventListener('click',function(){
    let product = {
      id:this.getAttribute('data-id'),
      name:this.getAttribute('data-name'),
      price:this.getAttribute('data-price'),
      image:this.getAttribute('data-image'),
    };

    let cart = JSON.parse(localStorage.getItem('cart'))||[];
    cart.push(product);
    localStorage.setItem('cart',JSON.stringify(cart));
    alert('product added to cart');
  });
});

