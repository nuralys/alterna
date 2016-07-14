<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout ?></title>
		<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
		<?php if(isset($meta['keywords'])): ?>
			<meta name="keywords" content="<?=$meta['keywords']?>">
		<?php endif; ?>
		<?php if(isset($meta['description'])): ?>
			<meta name="description" content="<?=$meta['description']?>">
		<?php endif; ?>
		<link href="/css/normalize.css" rel="stylesheet" type="text/css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
	</head>
	<body>
		<div class="page_wrapper">
		<?php echo $this->element('header'); ?>
		<div class="cr">
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="page_buffer"></div>
		</div>	
		<?php echo $this->element('footer'); ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="/js/slick.min.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>		
		<script type="text/javascript">
		    $(document).ready(function(){
		      $('.single-item').slick(
		      {
		      	dots: false,
		      	autoplay: true,
		      	arrows: false,
		      	speed: 900
		      }
		      	);

		    });
		    $('.responsive').slick({
			  slidesToShow: 8,
			  infinite: false,
			  responsive: [
				    {
				      breakpoint: 990,
				      settings: {
				         infinite: false,
						  speed: 300,
						  slidesToScroll: 2,
						  slidesToShow: 5				
				      }
				  },
				  {
				      breakpoint: 550,
				      settings: {
				        
						  slidesToScroll: 1,
						  slidesToShow: 3				
				      }
				  },
				  {
				      breakpoint: 450,
				      settings: {
				        
						  slidesToScroll: 1,
						  slidesToShow: 2				
				      }
				  },
				    ]
			});
		 </script>
	</body>
</html>