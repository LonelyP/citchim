/* Aura version: 1.8.5 */


jQuery(function($){



	//region Tabs

	if($.fn.tab){



		var $nav = $('.pi-tabs-navigation a');



		$nav.click(function (e) {

			$(this).tab('show');

			e.preventDefault();

		});



		$('.pi-tabs-vertical').each(function(){

			var $parent = $(this),

				$nav = $parent.find('.pi-tabs-navigation'),

				$content = $parent.find('.pi-tabs-content'),

				navHeight = $nav.height();

			$content.css({

				minHeight: Math.abs(navHeight) + 1

			});

		});



		$('a.pi-tab-link').click(function(){

			if($.fn.scrollTo){

				var hash = $(this).get(0).hash,

					$el = $(hash);

				if(typeof $el != "undefined" && $el.length){

					$el = $el.eq(0);

					$.scrollTo($el.parent());

				}

			}

		});

    function checkActivatedTab(){

      var hash = window.location.hash,

        $tabToShow = $('ul.pi-tabs-navigation a[href="' + hash + '"]');



      if(typeof $el != "undefined" && $el.length){

        hash && $tabToShow.tab('show');

      }

    }

		if($nav.length){

			$(window).on('hashchange', function(){

				checkActivatedTab();

			});



			checkActivatedTab();

		}

	}

	//endregion



});