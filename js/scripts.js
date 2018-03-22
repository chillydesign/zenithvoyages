$(function() { 
	$(".img_gallery").justifiedGallery({
		 rowHeight : 150,
		 margins: 4,
		 lastRow : 'justify'
	}).on('jg.complete', function () {
		$('a.gallery').featherlightGallery({
			previousIcon: '<',
			nextIcon: '>'
		});

	});

	var $nav = $('#nav');

			/// CONTACT ME AGENTS SLIDER
		$('.agent_section').hide();
		$('.agent_section:eq(0)').show();
		$agent_links = $('.agent_link');
		$agent_links.first().addClass('selected');

		$agent_links.on('click', function(e){
			$this = $(this);
			$id =  $this.data('id')
			$('.agent_section').hide();
			$('#' + $id).show();
			$agent_links.removeClass('selected');
			$this.addClass('selected');
			$('aside, #main_article').matchHeight();
		

		});



$('.block h4').matchHeight();

$('.iframe_link').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		
		var $placetoslide = $('#placetoslide');
	
		loadIframe($this);

		 $("html, body").animate({ scrollTop: ( $placetoslide.offset().top  -100 )  }, 2000);

	});

		
	function loadIframe($element) {
		var $this = $element;
		var $url = $this.data('url');
		var $message = $this.data('message');
		var $piframe = $('#page_iframe');
		var $message_to_show = $('#message_to_show');
		$message_to_show.html('');

		if (typeof $url != 'undefined') {
			$piframe.attr({'src' :  $url  });
			setTimeout(function(){
				$piframe.css({'height': 700  });
			}, 1000);
			

			
		} else if (typeof $message != 'undefined') {
			var $piframe = $('#page_iframe').css({'height' : 0});
			$message_to_show.html($message);
		}

	}

	$firstiframelink = $('.offre_iframe .iframe_link').first();
	loadIframe( $firstiframelink );


		function iframeresize(){
			var $iframeheight = $('.iframecontained').height();
			$('.iframecontainer').css({'height' : $iframeheight});
		}
		iframeresize();
$('.iframe_links a').matchHeight();

	


	$('#show_nav_button').on('click', function(){
		$nav.find('ul').toggle();
	});


	$('li', $nav).on('mouseover', function(){
		$this = $(this);
		$this.find('ul').addClass('ul_child_show');
	}).on('mouseout', function(){
		$this.find('ul').removeClass('ul_child_show');
	});


	var map_container = $('#agencymap');
        map_container.css({
            width : '100%',
            height : 500
        })
	var agencymap = new google.maps.Map(map_container.get(0), {
      // center: {lat: latitude , lng: longitude  },
      zoom: 14,
      scrollwheel: false
    });

	var marker, i;
	var locations = [[46.422640, 6.261532, 'Zénith Voyages Gland'], [46.382646, 6.238381, 'Zénith Voyages Nyon']]
	var bounds = new google.maps.LatLngBounds();
	var infowindow = new google.maps.InfoWindow({content: '...'});
	for (i = 0; i < locations.length; i++) {  
		var location = locations[i];
		var latlng = new google.maps.LatLng(location[0], location[1]),
		marker = new google.maps.Marker({
			position: latlng,
			map: agencymap,
			title: location[2]
		});
		marker.addListener('click', function() {
            infowindow.setContent(  this.title);
            infowindow.open(agencymap, this);
        });
		bounds.extend(latlng);
	}

	agencymap.fitBounds(bounds);




});




	

