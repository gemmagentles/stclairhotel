<!-- Use this component as a hero for the news page instead of re using the hero component. This is because the news page pulls in all posts and replaces the hero content with the last post. Prevent this by using this unique hero and adding the news page id to the values -->
<div class="hero__wrapper hero__news">
    <div class="hero__container">
        <div class="hero__content">
            <h1 class="hero__content--heading"><?php the_field( 'news_hero_heading', 285 ); ?></h1>
            <p class="hero__content--paragraph"><?php the_field( 'news_hero_paragraph', 285 ); ?></p>
        </div>
    </div>  
</div>
