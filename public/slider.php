<?php

  $couples = [
    'Joe &amp; Jane',
    'Tarzan &amp; Jane',
    'Phillip &amp; Jane',
    'John &amp; Jane',
    'Patrick &amp; Barb',
  ];

  $couplesCopy = [
    'The Does were an amazing couple to work with and take photos of!',
    'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'Aspernatur ratione blanditiis vero quam distinctio reprehenderit.',
    'ad cum recusandae, cupiditate ullam facere corporis animi veniam.',
    'Animi eum quod necessitatibus explicabo eius.'
  ];

  $thumbnailArray = [
    'https://images.pexels.com/photos/192329/pexels-photo-192329.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
    'https://joelandamberphotography.com/wp-content/uploads/2017/06/Historic-Downtown-Charleston-SC-Engagement-Session-Joel-and-Amber-Photography-Charleston-Wedding-Photographer_4088.jpg',
    'http://elyroberts.com/wp-content/uploads/2017/03/01-5159-post/Winter-Engagement-Photos-Suttle-Lake-Lodge-Bend-Oregon-1005.jpg',
    'https://ideas.staticsfly.com/ideas/wp-content/plugins/Engagement_Photos/img/engagement-76.jpg',
    'https://wwcdn3.weddingwire.com/img_g/ww/t30_2-engagement-photos-chensley-photography.jpg'
  ];

?>

<section class="portfolio-section">
	<div class="portfolio-slider">
		<div class="portfolio-slider__left-cont">
			<p class="portfolio-slider__left-cont__title">
				Engagements
			</p>
			
			<div class="portfolio-slider__left-cont__name-cont">
				<p class="portfolio-slider__left-cont__name-cont__name">
          <?php foreach($couples as $key => $couple): ?>
            <span class="js-people-names<?= $key === 0 ? ' active' : null ?>"><?= $couple ?></span>
          <?php endforeach ?>
				</p>

				<div class="portfolio-slider__left-cont__name-cont__controls">
					<i class="portfolio-slider__left-cont__name-cont__controls__prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<i class="portfolio-slider__left-cont__name-cont__controls__next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>	
			</div>
			
			<div class="portfolio-slider__left-cont__grid js-grid">
				<div class="portfolio-slider__left-cont__grid__copy">
					<?php foreach($couplesCopy as $key => $copy): ?>
            <p class="js-grid-copy<?= $key === 0 ? ' active' : null ?>"><?= $copy ?></p>
          <?php endforeach ?>
				</div>

        <?php foreach($thumbnailArray as $key => $thumb): ?>
          <div class="portfolio-slider__left-cont__grid__person js-people<?= $key === 0 ? ' active' : null ?>">
            <img src="<?= $thumb ?>" alt="" />
          </div>
        <?php endforeach ?>
			</div>
		</div>
		
		<div class="portfolio-slider__image-slider-cont">
			<div class="portfolio-slider__image-slider-cont__slider js-image-slider active">
				<div class="portfolio-slider__image-slider-cont__slider__controls-cont">
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev js-prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
						<span class="js-current-image-num">1</span>
						/
						<span class="js-total-image-num">4</span>
					</p>
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__next js-next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>
				
				<img src="https://images.pexels.com/photos/192329/pexels-photo-192329.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="js-slide active" />
				<img src="http://placekitten.com/750/750" alt="" class="js-slide" />
				<img src="http://placekitten.com/750/740" alt="" class="js-slide" />
				<img src="http://placekitten.com/720/750" alt="" class="js-slide" />
			</div>
			
			<div class="portfolio-slider__image-slider-cont__slider js-image-slider">
				<div class="portfolio-slider__image-slider-cont__slider__controls-cont">
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev js-prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<p class="portfolio-slider__image-slider-cont__slider__controls-cont__index js-index">
						<span class="js-current-image-num">1</span>
						/
						<span class="js-total-image-num">3</span>
					</p>
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__next js-next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>
				
				<img src="https://joelandamberphotography.com/wp-content/uploads/2017/06/Historic-Downtown-Charleston-SC-Engagement-Session-Joel-and-Amber-Photography-Charleston-Wedding-Photographer_4088.jpg" alt="" class="js-slide active" />
				<img src="http://placekitten.com/751/751" alt="" class="js-slide" />
				<img src="http://placekitten.com/731/771" alt="" class="js-slide" />
				<img src="http://placekitten.com/791/721" alt="" class="js-slide" />
			</div>
			
			<div class="portfolio-slider__image-slider-cont__slider js-image-slider">
				<div class="portfolio-slider__image-slider-cont__slider__controls-cont">
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
						<span class="js-current-image-num">1</span>
						/
						<span class="js-total-image-num">3</span>
					</p>
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>
				
				<img src="http://elyroberts.com/wp-content/uploads/2017/03/01-5159-post/Winter-Engagement-Photos-Suttle-Lake-Lodge-Bend-Oregon-1005.jpg" alt="" class="js-slide active" />
				<img src="http://placekitten.com/752/752" alt="" class="js-slide" />
				<img src="http://placekitten.com/791/721" alt="" class="js-slide" />
			</div>
			
			<div class="portfolio-slider__image-slider-cont__slider js-image-slider">
				<div class="portfolio-slider__image-slider-cont__slider__controls-cont">
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
						<span class="js-current-image-num">1</span>
						/
						<span class="js-total-image-num">3</span>
					</p>
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>
				
				<img src="https://ideas.staticsfly.com/ideas/wp-content/plugins/Engagement_Photos/img/engagement-76.jpg" alt="" class="js-slide active" />
				<img src="http://placekitten.com/749/749" alt="" class="js-slide" />
				<img src="http://placekitten.com/732/771" alt="" class="js-slide" />
				<img src="http://placekitten.com/791/771" alt="" class="js-slide" />
			</div>
			
			<div class="portfolio-slider__image-slider-cont__slider js-image-slider">
				<div class="portfolio-slider__image-slider-cont__slider__controls-cont">
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__prev">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.09808e-05 4.47761L10.8333 0V10L-2.09808e-05 4.47761Z" fill="#444444"/>
						</svg>
					</i>
					<p class="portfolio-slider__image-slider-cont__slider__controls-cont__index">
						<span class="js-current-image-num">1</span>
						/
						<span class="js-total-image-num">3</span>
					</p>
					<i class="portfolio-slider__image-slider-cont__slider__controls-cont__next">
						<svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.8333 4.47761L-7.62939e-06 0V10L10.8333 4.47761Z" fill="#444444"/>
						</svg>
					</i>
				</div>
				
				<img src="https://wwcdn3.weddingwire.com/img_g/ww/t30_2-engagement-photos-chensley-photography.jpg" alt="" class="js-slide active" />
				<img src="http://placekitten.com/758/752" alt="" class="js-slide" />
				<img src="http://placekitten.com/631/771" alt="" class="js-slide" />
				<img src="http://placekitten.com/701/751" alt="" class="js-slide" />
				<img src="http://placekitten.com/631/771" alt="" class="js-slide" />
			</div>
		</div>
	</div>
</section>