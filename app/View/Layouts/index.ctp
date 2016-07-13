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
		<?php echo $this->element('header'); ?>
		<div class="single-item">
			<div class="sl_part sl1"></div>
			<div class="sl_part sl1"></div>
		</div>
		<div class="cr">
			<div class="under_slider">
				<div class="left_sl">
					<h4>Инвестиционная платформа для предпринимателей, инвесторов и профессионалов</h4>
					<p>Инвестируйте в выдающиеся стартапы,<br> 
					находите инвестиции и кредиты для своего бизнеса,<br> 
					вовлекайте в свои идеи лучших профессионалов<br></p>
					<a href="/<?=$lang?>investors">Инвестору</a>
					<a href="/<?=$lang?>page/entrepreneur">Предпринимателю</a>
				</div>	
			</div>
		</div>
		<div class="cr">
			<ul class="rows">
				<li class="row_des">
					<img src="/img/r1.jpg">
					<span>Lorem Ipsum issimply dummy text</span>
					<p>Contrary to popular belief, 
					Lorem Ipsum is not simply 
					random text. It has roots in 
					a piece of classical Latin 
					literature from 45 BC, </p>
				</li>
				<li class="row_des">
					<img src="/img/r1.jpg">
					<span>Lorem Ipsum issimply dummy text</span>
					<p>Contrary to popular belief, 
					Lorem Ipsum is not simply 
					random text. It has roots in 
					a piece of classical Latin 
					literature from 45 BC, </p>
				</li>
				<li class="row_des">
					<img src="/img/r1.jpg">
					<span>Lorem Ipsum issimply dummy text</span>
					<p>Contrary to popular belief, 
					Lorem Ipsum is not simply 
					random text. It has roots in 
					a piece of classical Latin 
					literature from 45 BC, </p>
				</li>
				<li class="row_des">
					<img src="/img/r1.jpg">
					<span>Lorem Ipsum issimply dummy text</span>
					<p>Contrary to popular belief, 
					Lorem Ipsum is not simply 
					random text. It has roots in 
					a piece of classical Latin 
					literature from 45 BC, </p>
				</li>
			</ul>
		</div>
		<div class="about">
			<div class="setka"></div>
			<div class="cr">
				<span class="c_heading">О компании</span>
				<div class="right_about">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, </p>
					<a href="about.html">Подробнее</a>
				</div>
				<div class="tab">
					<ul class="b_part">
							<button class="active">Наши проекты</button>
							<button>По услугам</button>
					</ul>
					<div class="about_tabs">
						<div class="tab1">
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
							<ul class="stats">
								<li>
									<b>15</b>
									<span>Готовых проектов</span>
								</li>
								<li>
									<b>7</b>
									<span>Разработано проектов</span>
								</li>
								<li>
									<b>150</b>
									<span>млн.тенге инвестиции</span>
								</li>
							</ul>
						</div>
						<div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, </p>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<div class="partners">
			<div class="cr">
				<span class="c_heading">Наши партнеры</span>
				<div class="p_ul responsive">
				<?php foreach($partners as $item): ?>
					<div>
					<?php if(!empty($item['Partner']['link'])): ?>
						<a href="<?=$item['Partner']['link']?>">
					<?php endif ?>
						<img src="/img/partner/thumbs/<?=$item['Partner']['img']?>" alt="<?=$item['Partner']['title']?>" />
					<?php if(!empty($item['Partner']['link'])): ?>
						</a>
					<?php endif ?>
					</div>
				<?php endforeach ?>
				</div>
			</div>
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