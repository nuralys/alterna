<header>
	<div class="h_top">
		<div class="cr">
			<ul>
				<li <?php if(Configure::read('Config.language')=='en'){echo "class='active'";} ?>><a href="/en">EN</a></li>
				<li <?php if(Configure::read('Config.language')=='ru'){echo "class='active'";} ?>><a href="/">RU</a></li>						
				<li <?php if(Configure::read('Config.language')=='kz'){echo "class='active'";} ?>><a href="/kz">KZ</a></li>
			</ul>
		</div>
	</div>
	<div class="h_mid cr">
		<a class="logo" href="/<?=$lang?>">ALTERNA<span>.GLOBAL</span></a>
		<div class="right_con tel">
			<a href="tel:+7717278 38 02"><b>+7 (7172) 78 38 02</b></a>
			<a href="mailto:info@alterna.global">info@alterna.global</a>
		</div>
		<div class="right_con loc">
			<b>ул. Керей Жанибек 1/1</b>
			г. Астана, 00001
		</div>				
	</div>
	<div class="h_bot">
		<div class="cr">
			<nav class="m_menu">  
				<ul class="menu">
					<li class="active">
						<a href="/<?=$lang?>">О нас</a>     
					</li>
					<li class="under_li">
						<span>Услуги</span>
						<ul class="under_ul">
						<?php foreach($services as $item): ?>
							<li><a href="/<?=$lang?>service/view/<?=$item['Service']['id']?>"><?=$item['Service']['title']?></a></li>
						<?php endforeach ?>
						</ul>     
					</li>
					<li>
						<a href="/<?=$lang?>articles">Полезная информация</a>     
					</li>
					<li>
						<a href="/<?=$lang?>investors">Инвесторам </a>     
					</li>
					<li>
						<a href="/<?=$lang?>page/entrepreneur">Владельцам проекта </a>     
					</li>
					<li>
						<a href="/<?=$lang?>page/contacts"> Контакты </a>     
					</li>
				</ul>
				<div class="mob_start"></div>
				<div class="mob_close"></div>
			</nav>
			<select class="m_lang">
				<option>Kz</option>
				<option>Ru</option>
				<option>En</option>
			</select>
			<div class="search_area">
			<button type='button' class="search">				
			</button>
			<div class="s_part">					
					<form action="search" method="get">
						<input type="search" class="s_input" name="q" placeholder="<?=__('Поиск')?>...">
						<input class="s_submit" type="submit" value="Найти"/>
					</form>				
			</div>
			</div>					
			<div class="clearfix"></div>
		</div>
	</div>
</header>