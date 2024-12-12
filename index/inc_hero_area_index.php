<!-- inc_hero_area_index.html -->
<div id="inc_hero_area_index_app"></div>

<script>


  createApp({
    template: `
      <section page="inc_hero_area_index" class="slider-area fix">
        <div class="slider-active swiper-container">
          <div class="swiper-wrapper">
            <div 
              v-for="item in heroAreaData" 
              :key="item.id" 
              class="single-slider slider-height d-flex align-items-center swiper-slide" 
              data-swiper-autoplay="5000"
            >
              <div class="slide-bg" :style="{ backgroundImage: 'url(<?=get_my_global_variable()?>' + item.img + ')' }"></div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="aslider z-index">
                      <span 
                        class="slider-top-text" 
                        data-animation="fadeInUp" 
                        data-delay=".5s"
                      >
                        {{ item.title_sm }}
                      </span>
                      <h2 
                        class="aslider--title mb-25" 
                        data-animation="fadeInUp" 
                        data-delay=".7s"
                        v-html="item.title"
                      ></h2>
                      <p 
                        class="aslider--subtitle mb-40" 
                        data-animation="fadeInUp" 
                        data-delay=".9s"
                      >
                        {{ item.text }}
                      </p>
                      <div 
                        class="aslider--btn" 
                        data-animation="fadeInUp" 
                        data-delay=".9s"
                      >
                        <a 
                          :href="item.url" 
                          class="theme-btn blacks-hover"
                        >
                          {{ item.more }}
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev slide-prev">
            <i class="far fa-long-arrow-left"></i>
          </div>
          <div class="swiper-button-next slide-next">
            <i class="far fa-long-arrow-right"></i>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        heroAreaData: [
          {
            id: "inc_hero_area_1",
            title_sm: "Effective Visa Solution",
            title: "Visa & Immigration <br> Consultation",
            text: "Our professionalism, honesty, sincerity & dedication to client service <br> has helped our clients to fulfill their wishes",
            img: "assets/img/hero/slider-bg-1.jpg",
            url: "contact.php",
            more: "Book Now",
          },
          {
            id: "inc_hero_area_2",
            title_sm: "Effective Visa Solution",
            title: "Visa & Immigration <br> Consultation",
            text: "Our professionalism, honesty, sincerity & dedication to client service <br> has helped our clients to fulfill their wishes",
            img: "assets/img/hero/slider-bg-1.jpg",
            url: "contact.php",
            more: "Book Now",
          },
        ],
      };
    },
  }).mount("#inc_hero_area_index_app");
</script>
