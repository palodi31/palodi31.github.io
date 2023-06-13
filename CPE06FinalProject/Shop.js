AOS.init(); 
function addToCart(productName, productImage, productPrice) {
    alert("Prodcut added!");
    var cartItemsContainer = document.getElementById("cart-items");
  
    var cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");
  
    var itemImage = document.createElement("img");
    itemImage.classList.add("cart-item-image");
    itemImage.src = productImage;
    itemImage.alt = "Product Image";
  
    var itemInfo = document.createElement("div");
    itemInfo.classList.add("cart-item-info");
  
    var itemName = document.createElement("div");
    itemName.classList.add("cart-item-name");
    itemName.innerText = productName;
  
    var itemPrice = document.createElement("div");
    itemPrice.classList.add("cart-item-price");
    itemPrice.innerText = "$" + productPrice;
  
    itemInfo.appendChild(itemName);
    itemInfo.appendChild(itemPrice);
  
    cartItem.appendChild(itemImage);
    cartItem.appendChild(itemInfo);
  
    cartItemsContainer.appendChild(cartItem);
  }
  
