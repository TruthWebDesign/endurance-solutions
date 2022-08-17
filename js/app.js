(() => {
  // resources/js/app.js
  document.addEventListener("DOMContentLoaded", function () {
    function passiveListeners() {
      $.event.special.touchstart = {
        setup: function (_, ns, handle) {
          this.addEventListener("touchstart", handle, { passive: true });
        }
      };
      $.event.special.touchmove = {
        setup: function (_, ns, handle) {
          this.addEventListener("touchmove", handle, { passive: true });
        }
      };
      $.event.special.wheel = {
        setup: function (_, ns, handle) {
          this.addEventListener("wheel", handle, { passive: true });
        }
      };
      $.event.special.mousewheel = {
        setup: function (_, ns, handle) {
          this.addEventListener("mousewheel", handle, { passive: true });
        }
      };
    }
    passiveListeners();
    $(".category-list li").on("click", function (e) {
      const category = this.id;
      $(".category-list li").removeClass("active");
      $(this).addClass("active");
      changeImages(".images-list li", category);
    });
    function changeImages(parent, category) {
      $(parent).each(function () {
        if (category === "all") {
          $(this).css({ display: "block" });
          $(this).addClass("active");
        } else if ($(this).attr("category") !== category) {
          $(this).css({ display: "none" });
          $(this).removeClass("active");
        } else {
          $(this).css({ display: "block" });
          $(this).addClass("active");
        }
      });
    }
  });


  /* veni vidi codi */
  function scrollto(el, callback) {
    // var el = $(elem);
    let i = $(el.attr('data-scrollto'));


    console.log(i);

    $("html, body").stop().animate({
      scrollTop: i.attr('data-offsettop')
    }, 900, "swing", function () {

      if (typeof callback == "function") {
        // callback(el);
      }
    })
  }

  ; jQuery(document).ready(function ($) {
    $('a[href^="#"] , .scroll-to-child > a').click(function (event) {
      event.preventDefault();

      console.log('clicked');
      let t = $(this), to = t.attr('href'), th = to.split('#'), target = (th.length > 1 ? '#' + th[1] : t.attr('href'));
      $("html, body").stop().animate({
        scrollTop: ($(target).offset().top - 300)
      }, 500)
      // console.log(t);
      // console.log(to);
      // console.log(th);
      // console.log(target);
      // if ($(to).length) {
      //   if ($(to).attr('data-offsettop') == undefined) {
      //     $(to).attr('data-offsettop', $(target).offset().top - 300);

      //   }
      //   t.attr('data-scrollto', target);
      //   scrollto(t);
      // }
      return false;
    });

  });


})();
