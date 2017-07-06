	$(document).ready(function() {
		//FancyBox
		$(".fancybox").attr('rel', 'gallery').fancybox({
			/*
			openEffect: 'none',
			closeEffect: 'none',
			nextEffect: 'none',
			prevEffect: 'none',
			padding: 0,
			margin: [30,70,30,70]
			*/
			afterLoad: function(){
				this.title= '<a href="'+this.href+'">Download</a>'+this.title;
			},
			helpers: {
				media: {},
				title: {
					type: 'inside',
					position: 'top',
					padding: 0
				}
			}
		});
		$('.fancybox').fancybox({
			openEffect  : 'none',
		    closeEffect : 'none',
		    iframe : {
		        preload: false
		    }
		});
	});
