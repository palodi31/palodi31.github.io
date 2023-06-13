AOS.init();
let gadgets=document.querySelectorAll('.gadgets li');
        let active="Images/RTX.jpg";

        gadgets.forEach((e)=>{
            e.addEventListener("mouseenter", (event)=>{
                gadgets.forEach((e)=>{
                    e.classList.remove("active");
                })
                event.target.classList.add("active");
            })
        })