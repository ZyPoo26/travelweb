document.addEventListener('DOMContentLoaded', () => {
    // Attach event listeners to all "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart-button').forEach(button => {
        button.addEventListener('click', function() {
            const product = this.dataset.product;
            const quantity = parseInt(this.dataset.quantity);
            const price = parseFloat(this.dataset.price);
            const image = this.dataset.image;

            addToCart(product, quantity, price, image);
        });
    });

    // Function to add a product to the cart
    function addToCart(product, quantity, price, image) {
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ product, quantity, price, image })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                updateCart(data.cart);
            }
        })
        .catch(error => console.error('Error:', error));
    }

    // Function to update the cart on the frontend
    function updateCart(cart) {
        const cartBody = document.getElementById('cart-body');
        cartBody.innerHTML = '';

        let subtotal = 0;
        cart.forEach(item => {
            const totalItemPrice = item.quantity * item.price;
            subtotal += totalItemPrice;

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td data-title="tour name">
                    <div class="tg-tourname">
                        <figure>
                            <a href="javascript:void(0);"><img src="${item.image}" alt="image destinations"></a>
                        </figure>
                        <div class="tg-populartourcontent">
                            <div class="tg-populartourtitle">
                                <h3><a href="javascript:void(0);">${item.product}</a></h3>
                            </div>
                            <span>${item.quantity} x $${item.price.toFixed(2)}</span>
                        </div>
                    </div>
                </td>
                <td data-title="quantity">
                    <input type="number" name="number" class="form-control" value="${item.quantity}">
                </td>
                <td data-title="price"><span>$${totalItemPrice.toFixed(2)}</span></td>
                <td data-title="action"><a href="#"><i class="icon-trash-can"></i></a></td>
            `;
            cartBody.appendChild(newRow);
        });

        const taxRate = 10; // Example fixed tax rate
        const taxDue = (subtotal * taxRate) / 100;
        const total = subtotal + taxDue;

        document.querySelector('.tg-widgetpersonprice .tg-personprice em').innerText = `$${subtotal.toFixed(2)}`;
        document.querySelector('.tg-widgetpersonprice li:nth-child(2) em').innerText = `$${subtotal.toFixed(2)}`;
        document.querySelector('.tg-widgetpersonprice li:nth-child(3) em').innerText = `$${taxRate}`;
        document.querySelector('.tg-widgetpersonprice li:nth-child(4) em').innerText = `$${taxDue.toFixed(2)}`;
        document.querySelector('.tg-widgetpersonprice .tg-totalprice em').innerText = `$${total.toFixed(2)}`;
    }
});
