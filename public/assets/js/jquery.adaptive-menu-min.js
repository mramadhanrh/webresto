!function(e){e.fn.adaptiveMenu=function(a){var i=e.extend({query:768,append:"body"},a||{});return this.each(function(){function a(){return window.innerWidth||document.body.clientWidth}function n(){return a()<i.query?!0:void 0}function s(){n()&&!o.hasClass("adaptive-menu")?o.hasClass("adaptive-menu--is-visible")?(o.toggleClass("adaptive-menu--is-visible"),o.toggleClass("adaptive-menu"),t.toggleClass("adaptive-menu__open--is-hidden")):(o.addClass("adaptive-menu"),t.toggleClass("adaptive-menu__open--is-hidden")):!n()&&o.hasClass("adaptive-menu")&&(o.removeClass("adaptive-menu"),t.addClass("adaptive-menu__open--is-hidden"),d.addClass("adaptive-menu__close--is-hidden"),l.removeClass("adaptive-menu__bg--is-visible"))}e(this).before('<a href="#" id="open_menu" class="adaptive-menu__open adaptive-menu__open--is-hidden"><span><b>open</b></span></a>'),e(this).prepend('<a href="#" id="close_menu" class="adaptive-menu__close adaptive-menu__close--is-hidden"><span>close</span></a>'),e(i.append).append('<div id="adaptive_bg" class="adaptive-menu__bg"></div>');var t=e("#open_menu"),d=e("#close_menu"),l=e("#adaptive_bg"),o=e(this);e(window).on("click",function(e){return"open_menu"==e.target.getAttribute("id")?(t.toggleClass("adaptive-menu__open--is-hidden"),o.toggleClass("adaptive-menu--is-visible"),d.toggleClass("adaptive-menu__close--is-hidden"),l.toggleClass("adaptive-menu__bg--is-visible"),!1):"close_menu"==e.target.getAttribute("id")||"adaptive_bg"==e.target.getAttribute("id")?(o.toggleClass("adaptive-menu--is-visible"),d.toggleClass("adaptive-menu__close--is-hidden"),t.toggleClass("adaptive-menu__open--is-hidden"),l.toggleClass("adaptive-menu__bg--is-visible"),!1):void 0}),s(),e(window).resize(function(){s()})})}}(jQuery);