document.addEventListener('DOMContentLoaded', function() {
  function passiveListeners() {
    $.event.special.touchstart = {
      setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: true });
      }
    }
    $.event.special.touchmove = {
      setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: true });
      }
    }
    $.event.special.wheel = {
      setup: function( _, ns, handle ) {
        this.addEventListener("wheel", handle, { passive: true });
      }
    }
    $.event.special.mousewheel = {
      setup: function( _, ns, handle ) {
        this.addEventListener("mousewheel", handle, { passive: true });
      }
    }
  }

  passiveListeners();

  $('.category-list li').on('click', function(e) {
   
    const category = this.id
    $('.category-list li').removeClass('active')
    $(this).addClass('active')

    changeImages('.images-list li', category)
  })

  function changeImages(parent, category) {
    $(parent).each(function() {
      if(category === 'all') {
        $(this).css({ display: 'block' })
        $(this).addClass('active')
      } else if($(this).attr('category') !== category) {
        $(this).css({ display: 'none' })
        $(this).removeClass('active')
      } else {
        $(this).css({ display: 'block' })
        $(this).addClass('active')
      }
    })
  }
})
