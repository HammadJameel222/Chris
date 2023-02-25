// zoom image
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
  console.log(zoom)
}


// 

// 
// zoom image


// click to change image
$(document).ready(function(){
  $(".thumbnail img").click(function(){
    var plaatje = $(this).attr("src");
    $("#grote_image").attr("src",plaatje);
     $(".zoom").css("background-image", "url(" + plaatje + ")");
  })
})

function myFunction(event) {
  document.body.style.backgroundColor = "#f3f3f3";
  document.body.style.backgroundImage = "url('img_tree.png')";
}


// click to change image

// slick slider
$('.testimonials-product').slick({
  dots: false,
  arrows:false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
// slick slider
// corss btn remove tr
$(".cross-btn i").click(function() {
  $(this).closest("tr").remove();
});
// corss btn remove tr


// top bar active
$(function () {
  var current = location.pathname.split('/').at(-1)
  console.log(current)
  $('.top-bar-items a').each(function () {
    let $this = $(this);
    let link = $this.attr('href').split('/').at(-1)
    if (link == current) {
      $this.addClass('active');
    }
  })
})
// top bar active


// cross
$('.cross-btn').on('click','.remove-item',function(){
  $(this).closest('.cart-cont').remove();// remove the closest li item row
});
// cross end

// tepform

//jQuery time
let formStep = 0
const formBtn = document.querySelectorAll(".form-btn")
const forms = document.querySelectorAll(".form")
const formSwitchers = document.querySelectorAll(".form-switcher")
formSwitchers.forEach(b => {
  b.addEventListener("click", formSwitch)
})


function formSwitch() {
  if (formStep < forms.length - 1) {
    formBtn.forEach(btn => {
      btn.classList.remove("active")
    })
    forms.forEach(form => {
      form.classList.remove("active")
    })
    formStep++
    formBtn[formStep].classList.add('active')
    forms[formStep].classList.add('active')
  }
}
  // tepform
  // counter
  var buttonPlus = $(".qty-btn-plus");
  var buttonMinus = $(".qty-btn-minus");

  var incrementPlus = buttonPlus.click(function () {
    var $n = $(this)
      .parent(".qty-container")
      .find(".input-qty");
    $n.val(Number($n.val()) + 1);
  });

  var incrementMinus = buttonMinus.click(function () {
    var $n = $(this)
      .parent(".qty-container")
      .find(".input-qty");
    var amount = Number($n.val());
    if (amount > 0) {
      $n.val(amount - 1);
    }
  });

  // counter
  // eye btn
  let shoePassBtn = document.querySelectorAll('.show-pass')
  shoePassBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault()
      e.target.classList.toggle('fa-eye')
      let parent = btn.closest('.input-area')
      let input = parent.querySelector('input')
      if (input.type == 'password') {
        input.type = 'text'
      } else {
        input.type = 'password'
      }
    })
  })
  // eye btn
  // search box 
  $('#show-search-box').click(function () {
    $("#hidden-search-box").toggle();
  });
  // search box end 


  // Menu Active
  $(function () {
    var current = location.pathname.split('/').at(-1)
    console.log(current)
    $('.primary-navlist a').each(function () {
      let $this = $(this);
      let link = $this.attr('href').split('/').at(-1)
      if (link == current) {
        $this.addClass('active');
      }
    })
  })

  // 

  // back t0 top
  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });




  (function () {

    function addSeparator(nStr) {
      nStr += '';
      var x = nStr.split('.');
      var x1 = x[0];
      var x2 = x.length > 1 ? '.' + x[1] : '';
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
      }
      return x1 + x2;
    }

    function rangeInputChangeEventHandler(e) {
      var rangeGroup = $(this).attr('name'),
        minBtn = $(this).parent().children('.min'),
        maxBtn = $(this).parent().children('.max'),
        range_min = $(this).parent().children('.range_min'),
        range_max = $(this).parent().children('.range_max'),
        minVal = parseInt($(minBtn).val()),
        maxVal = parseInt($(maxBtn).val()),
        origin = $(this).context.className;

      if (origin === 'min' && minVal > maxVal - 5) {
        $(minBtn).val(maxVal - 5);
      }
      var minVal = parseInt($(minBtn).val());
      $(range_min).html(addSeparator(minVal * 1000) + ' €');


      if (origin === 'max' && maxVal - 5 < minVal) {
        $(maxBtn).val(5 + minVal);
      }
      var maxVal = parseInt($(maxBtn).val());
      $(range_max).html(addSeparator(maxVal * 1000) + ' €');
    }

    $('input[type="range"]').on('input', rangeInputChangeEventHandler);
  })();
















  // range

  var lowerSlider = document.querySelector('#lower')
  var upperSlider = document.querySelector('#upper')
  if (lowerSlider, upperSlider) {
    var lowerVal = parseInt(lowerSlider.value)
    var upperVal = parseInt(upperSlider.value)
    upperSlider.oninput = function () {
      lowerVal = parseInt(lowerSlider.value);
      upperVal = parseInt(upperSlider.value);
      $('.upper-op').html(`${upperSlider.value}`)
      $('.lower-op').html(`${lowerSlider.value}`)
      if (upperVal < lowerVal + 4) {
        lowerSlider.value = upperVal - 4;

        if (lowerVal == lowerSlider.min) {
          upperSlider.value = 4;
        }
      }
    };
    lowerSlider.oninput = function () {
      lowerVal = parseInt(lowerSlider.value);
      upperVal = parseInt(upperSlider.value);
      $('.upper-op').html(`${upperSlider.value}`)
      $('.lower-op').html(`${lowerSlider.value}`)
      if (lowerVal > upperVal - 4) {
        upperSlider.value = lowerVal + 4;

        if (upperVal == upperSlider.max) {
          lowerSlider.value = parseInt(upperSlider.max) - 4;
        }
      }
    };
  }


  // price-range-2 end


  // menu
  const menuBtn = document.querySelectorAll('.menu-toggler')
  const nav = document.querySelector('.header-navs')
  menuBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault()
      nav.classList.toggle('active')
    })
  })
  // menu end

  // 
  // 
  $('.testimonials-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // 
  // 
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function (element, renderer) {
      return true;
    }
  };

  $('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
      'width': 170,
      'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
  });
  // 
  new WOW().init();
  AOS.init();
  $('.rooms').slick({
    centerMode: true,
    centerPadding: '25vw',
    slidesToShow: 1,
    prevArrow: '.room-prev',
    nextArrow: '.room-next',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  $('[data-targetit]').on('click', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).siblings('[class^="box-"]')
    $('.' + target).fadeIn();
    $(".product-list").slick("setPosition");
    $(".recommends-sec").slick("setPosition");
  });
  $('.menu-toggler').on('click', function (e) {
    $('.primary-nav').toggleClass('active');
  });

  const scrollTopBtn = document.querySelector(".scroll-btn");
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener("click", function () {
      let scrollValue = window.scrollY + window.innerHeight
      window.scrollTo(0, scrollValue)
    });
  }

  // Start upload preview image
  var basic = $("#main-cropper").croppie({
    viewport: { width: 200, height: 200, type: 'circle' },
    boundary: { width: 230, height: 230 },
    showZoomer: true,
    url: "http://lorempixel.com/500/400/",
    enableExif: true

  });

  function readFile(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $("#main-cropper").croppie("bind", {
          url: e.target.result
        });

      };

      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#edit-pf").on("change", function () {
    $('.cr-slider').addClass('image-range')
    $('.cr-slider').removeClass('cr-slider')
    $('.modal-btn').click()

    // $('.popup-wrap').addClass('active')
    readFile(this);
  });

  $("#showResult").click(function () {
    $('.popup-wrap').removeClass('active')
    $("#main-cropper")
      .croppie("result", {
        type: "canvas",
        size: "viewport",
        circle: true
      })
      .then(function (resp) {
        $("#result").attr("src", resp);
        // let va = document.getElementById('my-avator')
        // va.value = 'C:\fakepath\placeholder.jpg'
        // va.files[0] = resp
        // console.log(va.files)
      });
    $('.close-modal').click()
  });


  $('#daterange').daterangepicker();


  $(document).ready(function () {
    $('#myTable').DataTable();
  });




  $(".eye-btn").on("click", function () {
    let input = $(this).parents('.field-wrap').find('.field')
    if (input.attr('type') == 'password') {
      input.attr('type', 'text')
      $(this).find('i').removeClass('fa-eye')
      $(this).find('i').addClass('fa-eye-slash')
    } else {
      input.attr('type', 'password')
      $(this).find('i').addClass('fa-eye')
      $(this).find('i').removeClass('fa-eye-slash')
    }
  });
  $(".search-btn, .search-toggler-btn").on("click", function () {
    $(this).toggleClass('active')
    $(this).parents('.header-secondary-items').toggleClass('active')
  });


  $(function () {
    var current = location.pathname.split('/').at(-1)
    $('.nav-btn').each(function () {
      let $this = $(this);
      let link = $this.attr('href').split('/').at(-1)
      if (link == current) {
        $this.addClass('active');
      }
    })
  })


  $('#nav-icon1, .menu-closer').click(function () {
    $('#nav-icon1').toggleClass('open');
    $('.nav-area').toggleClass('active');
    $('.side-bar').toggleClass('active');
  });

  const footer = document.querySelector('footer');
  function callback(entries) {
    entries.forEach(ent => {
      if (ent.isIntersecting) {
        $('.scroll-btn').addClass('d-none')
      } else {
        $('.scroll-btn').removeClass('d-none')
      }
    })
  }
  let observer = new IntersectionObserver(callback);
  observer.observe(footer) 