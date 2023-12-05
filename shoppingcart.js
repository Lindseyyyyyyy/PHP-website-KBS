document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsList = document.getElementById('cart-items');
    const checkoutButton = document.getElementById('checkout-btn');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const product = this.closest('.product');
            const productId = product.getAttribute('data-product-id');
            const productName = product.querySelector('h2').innerText;

            // Voeg het product toe aan de winkelwagen
            const cartItem = document.createElement('li');
            cartItem.innerText = productName;
            cartItemsList.appendChild(cartItem);
        });
    });

    checkoutButton.addEventListener('click', function () {
        // Voeg hier de logica toe voor het afrekenen, bijvoorbeeld door naar een afrekenpagina te gaan
        alert('Bedankt voor uw aankoop!');
        cartItemsList.innerHTML = ''; // Leeg de winkelwagen na het afrekenen
    });
});
