

$('.grid').isotope({
    itemSelector: '.grid-item'
    
});

$('.button-group  button').click(function(){
    $('.button-group  button').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('.grid').isotope({
        filter:selector
    });
    return  false;
});






$('#banner-area .owl-carousel').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    items:1
  })
  
$('#top-sale .owl-carousel').owlCarousel({
  loop:true,
  margin:50,
  nav:true,
  dots:false,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
  
})
  
$('#new-phones .owl-carousel').owlCarousel({
  loop:true,
  margin:50,
  nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:1500,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
})

$('#blog .owl-carousel').owlCarousel({
  loop:true,
  margin:50,
  nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:1500,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    }
  }
})


let qtyUp = document.querySelectorAll(".qty-up");
let qtyDown = document.querySelectorAll(".qty-down");
// let proPrice = document.querySelectorAll(".product_price");
// let proPriceFixed = document.querySelectorAll(".product_price_fixed");


for(let i = 0; i < qtyUp.length; i++)
{
  qtyUp[i].addEventListener('click',function()
  {
    this.classList.add('increase');
    if(this.classList.contains('increase'))
    { 
      if(this.nextElementSibling.value >= 1 && this.nextElementSibling.value <= 9)
      {
         this.nextElementSibling.value++;
         let price = this.parentElement.parentElement.parentElement.nextElementSibling.firstElementChild.firstElementChild.nextElementSibling
         let priceFixed = this.parentElement.parentElement.parentElement.nextElementSibling.firstElementChild.lastElementChild;

         price.textContent = parseInt(price.textContent) + parseInt(priceFixed.textContent);
      }
    }
  })
}

for(let i = 0; i < qtyDown.length; i++)
{
  qtyDown[i].addEventListener('click',function()
  {
    this.classList.add('decrease');
    if(this.classList.contains('decrease'))
    { 
      if(this.previousElementSibling.value >= 2)
      {
         this.previousElementSibling.value--;
         let price = this.parentElement.parentElement.parentElement.nextElementSibling.firstElementChild.firstElementChild;
         let priceFixed = this.parentElement.parentElement.parentElement.nextElementSibling.firstElementChild.lastElementChild;
         
         price.textContent = parseInt(price.textContent) - parseInt(priceFixed.textContent);
      }
    }
  })
}


function getTotal()
{
  let sumTotal  = document.querySelectorAll('.product_price');
  let priceTotal = document.querySelector('.total-price');
  let total = 0;
  for(let i = 0; i<sumTotal.length; i++)
  {
    total += parseFloat(sumTotal[i].textContent)
  }
  priceTotal.value = total;
}
setInterval(getTotal,1000)

