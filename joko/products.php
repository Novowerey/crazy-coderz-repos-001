<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Food Production</title>
    <style>
     /*BBBBBBBBBBBBBBBOOOOOOOOOOOOOOOOODDDDDDDDDDDDDDDDDDYYYYYYYYYY*/
    * a {
        text-decoration: none;
        display: inline-block;
    }
    body {
        background-image: url("https://images.unsplash.com/photo-1586771107445-d3ca888129ff?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
        background-color: beige;
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
        margin: 0;
    }
    #mainBody {
        position: relative;
        height: auto;
        width: 100%;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.267);
        /*Top Right Bottom Left */
        color:rgb(255, 255, 255);
    }

    /*HHHHEEEEEEEEEEEEAAAAAAAAAAAAAAAADDDDDDDDDDDDEEEEEEEEEEEEERRRRRRRRRRR*/
    #nav {
        position:relative;
        display: flex;
        background-color: #184911;  
    }
    #menu {
        position: absolute;
        top:20%;
        text-align: center;
        right: 0;
        padding: 10px 10px 5px 5px;
        display: inline-flex;
    }
    /* liness in between ng menus */
    #menu a {   
        margin-right: 10px;
        border-right: 1px solid grey;
        font-family: 'Times New Roman';
        padding: 10px 10px 5px 5px;
        font-size: 25px;
        color:white;
        border-radius: 15px;
    }
    #menu a:hover {
        text-decoration: underline #fdde87c7;
    }
    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/

    /* Products Introduction style */
    .product-intro {
        position: relative;
        background-image: linear-gradient(rgba(0, 0, 0, 0.678), rgba(0, 0, 0, 0.856)), url("Pics/Products-Pics/bgs/productsbg.jpeg");
        padding: 5rem 0;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        text-align: center;
        position: relative;
        width: 100%;
        text-align: center;
        display:flex;
        justify-content: center;
        
    }

    /* Products Sections Style */
    .Friuts {
        display: flex;
        padding: 20px 0;
        justify-content: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.459),rgba(0, 0, 0, 0.459)),url("Pics/Products-Pics/bgs/friutsectionbg.png");
        background-position: center;
        background-size: cover;
        width: 100%;
        text-align: center;
    }
    .Vegetables {
        display: flex;
        padding: 20px 0;
        justify-content: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.459),rgba(0, 0, 0, 0.459)),url("Pics/Products-Pics/bgs/vegetablesbg.png");
        background-position: center;
        background-size: cover;
        width: 100%;
        text-align: center;
    }
    .Crops {
        display: flex;
        padding: 20px 0;
        justify-content: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.459),rgba(0, 0, 0, 0.459)),url("Pics/Products-Pics/bgs/cropsbg.png");
        background-position: center;
        background-size: cover;
        width: 100%;
        text-align: center;
    }
    .Seeds {
        display: flex;
        padding: 20px 0;
        justify-content: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.459),rgba(0, 0, 0, 0.459)),url("Pics/Products-Pics/bgs/seedsbg.png");
        background-position: center;
        background-size: cover;
        width: 100%;
        text-align: center;
    }
    .sections {
        text-align: center; 
        background-color: #000000bd; 
        position: relative;
    }

    /* Style the products container, and products itself */
    .products-container-list {
        margin-top: -20px;
        width: 100%;
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: center;
        background-color: #ffffffb7;
    }
    .product-container {
        text-align: center;
        position: relative;
        overflow: hidden;
        padding-bottom:50px;
        background-color: #ffffffe0;
        border-radius: 10%;
        margin: 20px;
        color: rgb(82, 46, 0);
        font-weight:bold;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .product-container p {
        padding: 0;
        margin: 20px 0 0 0;
    }
    .product-container .price {
        background-color: rgb(63, 36, 0); 
        position: relative; 
        color: aliceblue;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: lighter;
    }
    .product-container img {
        border-radius: 40%;
        width: 200px;
        height: 180px;
        transition: 1s;
        padding:10px 20px 0 20px;
        &:hover {transform: scale(1.05);}
    }
    
    .product-container button {
        margin-top: 5px;
        position: absolute;
        bottom: 0px;
        right: -100px;
        transition: right 0.3s ease, opacity 0.3s ease;
        border: none;
        padding:10px;
        color:white;
        cursor: pointer;
        background-color: #14ad00;
    }
    .product-container:hover button {
      bottom: 0;
      right: 80px;
      opacity: 1;
    }

   /*FOOOOOOOOOOOOOOOOOOOOOTTTTTTTTTTTTTTTTTTTTTEEEEEEEEEEEEEEEEEEEERRRRRRRRR*/

   #footer {
            position: relative;
            display: flex;
            background-color: #291601;
            height: auto;
            align-items: center;
            justify-content: center;
        }

        #findUs {
            list-style-type: none;
            text-decoration: none;
            display: inline-flex;
            column-gap: 20px;
            margin-left: -40px;
        }

        #findUs img {
            height: 30px;
            width: 30px;

            &:hover {
                mix-blend-mode: multiply;
                transition: .3s;
            }

        }
    
    /* Cart Style */
    .cart {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .form-container {
        background: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        width:auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .input-container {
        padding: 10px 5px;
    }
    .input-container input {
        width: 100%;
    }

    .close-btn {
      cursor: pointer;
      position: relative;
      float:right;
      background-color: rgb(94, 46, 8);
      padding:3px 5px;
      color: wheat;
      &:hover {
        background-color: rgb(151, 0, 0);
        color:White;
      }
    }
    
    #selectedItemsList {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    #selectedItemsList li {
        margin: 10px;
        text-align: center;
    }
    
    #selectedItemImage {
        width: 90px;
        height: 70px;
        border-radius: 20%;
    }
    .product-container button.disabled {
        pointer-events: none;
        background-color: #ccc; /* Change the color to your desired disabled state */
        color: #999; /* Change the color to your desired disabled state */
    }
</style>
</head>
<body>
    <div id="mainBody">
        <!-- NAvigation bar -->
        <header id="header">
            <nav id="nav">
                <img style="padding-left: 2%; width: 70px; border-radius: 80px; padding-top: 1%; padding-bottom: 1%" src="Pics/Logo-Pics/logo.png"/>
                <h1 style=" padding: 20px 15px 5px 5px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>
                <div id="menu">
                    <a style="cursor: pointer;" onclick="openCartbyIcon()"><img src="Pics/Products-Pics/icons/cart.png" width="25px" height="20px"/></a>
                    <a href="homeAFP.html"><span>Home</span></a>
                    <a href="aboutAFP.html"><span>About</span></a>
                    <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="products.html"><span>Products</span></a>
                    <a href="servicesAFP.html"><span>Services<span></a>
                    <a id="loginLink" href="http://localhost/AFP/loginAFP.php">Log-in</a>
                </div>
            </nav>
        </header>
        <!-- Product MAin contents -->
        <main id="main">
            <div class="product-intro">
                <div style="width: 50%;">
                    <h1>Our Products</h1>
                    <strong style="font-size:large; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> Embrace the freshness, support local farmers, and embark on a journey of flavor and nutrition with our extensive range of farm-fresh products.</strong>
                </div>
            </div>
            <!-- Product section container -->
            <div class="section-container">
                <!-- Friut Products Section  -->
                <section class="Friuts" style="display: inline-block;">
                    <div class="sections">
                        <h1 style=" color: rgb(71, 238, 65);padding: 50px;">Friut Section</h1>
                    </div>
                    <div class="products-container-list">
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Apple</p>
                            <img src="Pics/Products-Pics/friuts/Apple.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>  
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Banana</p>
                            <img src="Pics/Products-Pics/friuts/Banana.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Grapes</p>
                            <img src="Pics/Products-Pics/friuts/Grapes.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>  
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Lemon</p>
                            <img src="Pics/Products-Pics/friuts/Lemon.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                    </div>
                </section>
                <!-- Vegetables Products Section  -->
                <section class="Vegetables" style="display: inline-block;">
                    <div class="sections">
                        <h1 style=" color: rgb(255, 72, 0); padding: 50px;">Vegetables Section</h1>
                    </div>
                    <div class="products-container-list" >
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Bellpepper</p>
                            <img src="Pics/Products-Pics/vegetables/Bellpepper.jpeg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>    
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Broccoli</p>
                            <img src="Pics/Products-Pics/vegetables/Broccoli.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Vegetables</p>
                            <img src="Pics/Products-Pics/vegetables/Cabbage.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>    
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Carrots</p>
                            <img src="Pics/Products-Pics/vegetables/Carrots.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                    </div>
                </section>
                <!-- Crops Products Section  -->
                <section class="Crops" style="display: inline-block;">
                    <div class="sections">
                        <h1 style=" color: rgb(105, 81, 0); padding: 50px;">Crops Section</h1>
                    </div>
                    <div class="products-container-list">
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Barley</p>
                            <img src="Pics/Products-Pics/crops/Barley.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Corn</p>
                            <img src="Pics/Products-Pics/crops/Corn.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div> 
                            <div class="price">Price: 100/kg</div>    
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Rice</p>
                            <img src="Pics/Products-Pics/crops/Rice.jpg"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div>
                            <div class="price">Price: 100/kg</div>     
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Wheat</p>
                            <img src="Pics/Products-Pics/crops/wheat.png"/>
                            <div><button type="submit" name="submit">Add to Cart</button></div> 
                            <div class="price">Price: 100/kg</div>    
                        </div>
                    </div>
                </section>
                <!-- Seeds Products Section  -->
                <section class="Seeds" style="display: inline-block;">
                    <div class="sections">
                        <h1 style=" color: rgb(105, 81, 0); padding: 50px;">Seeds Section</h1>
                    </div>
                    <div class="products-container-list">
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Grains</p>
                            <img src="Pics/Products-Pics/seeds/Grains.jpg"/>
                            <div><button type="button" name="submit">Add to Cart</button></div> 
                            <div class="price">Price: 100/kg</div>    
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Legumes</p>
                            <img src="Pics/Products-Pics/seeds/Legumes.jpg"/>
                            <div><button type="button" name="submit">Add to Cart</button></div> 
                            <div class="price">Price: 100/kg</div>    
                        </div>
                        <div class="product-container" onclick="openCart(this)">
                            <p class="products-name">Nuts</p>
                            <img src="Pics/Products-Pics/seeds/Nuts.jpeg"/>
                            <div><button type="button" name="submit">Add to Cart</button></div>  
                            <div class="price">Price: 100/kg</div>   
                        </div>
                    </div>
                </section>
            </div>
        </main>
        
        <footer id="footer">
            <h2 style="font-family: Lucida Console; color:rgb(255, 255, 255); position: absolute; left: 10px;">GROUP 10 <span style="color: rgb(10, 148, 10);"></h2>
            <h3 style="font-family: Lucida Console; position: absolute; right: 30px; bottom: 5px;">Contact Us: (63+)9123456789</h3>
            <ul id="findUs">
                <li><a href="#"><img src="Pics/Icon-pics/facebook.png"/></a></li>
                <li><a href="#"><img src="Pics/Icon-pics/instagram.png"/></a></li>
                <li><a href="#"><img src="Pics/Icon-pics/pinterest.png"/></a></li>
            </ul>
        </footer>
    </div>

    <!-- Cart Popup checkout -->
        <div id="mycart" class="cart">
            <div class="form-container">
            <form class="cart-form" action="http://localhost/AFP/dbconnect_products.php" method="post" style="max-width: 500px; max-height: 800px; width: 300px;">
               <span class="close-btn" onclick="closeCart()">&times;</span>
               <div class="cart-content" style="text-align: center;">
                    <h2>Customer Information</h2>
                    <div class="input-container">
                        <input type="text" id="customerName" name="customerName" placeholder="Name: " required/>
                    </div>
                    <div class="input-container">
                        <input type="text" id="customerAddress" name="customerAddress" placeholder="Address" required/>
                    </div>
                    <div class="input-container">
                        <input type="tel" id="Contact" name="contactnumber" placeholder="Contact Number: " pattern="[0-9]{11}" required/>
                    </div>
                    <button type="submit" name="Checkout">Checkout</button>
                </div>
                <div id="selectedItemImageContainer" style="text-align: center;">
                    <img id="selectedItemImage" >
                </div>
                <div id="selectedItemsSection" style="text-align: center;">
                    <h4>Selected Items:</h4>
                    <ul id="selectedItemsList"></ul>
                </div>
            </form>
            </div>
            
        </div>
       
    <script>
        // Declare Variables for Cart
        const CartPopup = document.getElementById('mycart');
        const selectedItemImage = document.getElementById('selectedItemImage');

        let cartItems = [];

        // Function when adding products to cart
        function openCart(item) {
            // Check if the button is disabled, return if true
            if (item.querySelector('.product-container button').classList.contains('disabled')) { return; }

            // Get product information
            const itemName = item.querySelector('.product-container p.products-name').textContent;
            const itemPrice = item.querySelector('.product-container .price').textContent;

            // Selected Item functionality, get product iamge and text, then put it to cart on selected products
            CartPopup.style.display = 'flex';
            selectedItemImage.src = item.querySelector('.product-container img').src;
            cartItems.push({
                name: itemName,
                price: itemPrice,
            });
          
            // Disable the button after clicking
            item.querySelector('.product-container button').classList.add('disabled');

            updateSelectedItemsSection();
        }

        // Function to add the product as a selected Item
        function updateSelectedItemsSection() {
            const selectedItemsSection = document.getElementById('selectedItemsSection');
            const selectedItemsList = document.getElementById('selectedItemsList');

            const hiddenInput = document.createElement("input");
            hiddenInput.type = "hidden";
            hiddenInput.name = "selectedItems";
            hiddenInput.value = JSON.stringify(cartItems);
            document.querySelector("form.cart-form").appendChild(hiddenInput);

            selectedItemsList.innerHTML = '';
            // Create the list of the added products also add remove button to remove the product
            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                const price = parseFloat(item.price.match(/\d+/)[0]); // Extract numeric part
                listItem.textContent = `${item.name} - ${price.toFixed(2)}`; // Display formatted price

                const removeButton = document.createElement('button');
                removeButton.type = "button";
                removeButton.name = "submit";
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', () => removeSelectedItem(item.name));
                listItem.appendChild(removeButton);

                selectedItemsList.appendChild(listItem);
            });
        }
        // Function to remove product to the selected products
        function removeSelectedItem(itemName) {
    const itemIndex = cartItems.findIndex(item => item.name === itemName);

    if (itemIndex !== -1) {
        // Remove the item from the cartItems array
        cartItems.splice(itemIndex, 1);

        // Update the selected items section
        updateSelectedItemsSection();

        // Find the corresponding product container and enable the button
        const productContainers = document.querySelectorAll('.product-container');
        productContainers.forEach(container => {
            const productName = container.querySelector('.products-name').textContent;
            if (productName === itemName) {
                container.querySelector('button').classList.remove('disabled');
            }
        });
    }
}


        // For opening through cart Icon
        function openCartbyIcon() {
            CartPopup.style.display = 'flex';
        }
        // For The close button 
        function closeCart() {
            CartPopup.style.display = 'none';
        }

    </script>
</body>
</html>