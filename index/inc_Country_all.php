<div id="inc_Country_all_app"></div>

<script>
  createApp({
    template: `
      <section page="inc_Country_all" class="country-all">
        <div class="container">
          <div class="brand-active owl-carousel">
            <div 
              v-for="item in countryAllData" 
              :key="item.id" 
              class="country_item__wrapper"
            >
              <div class="country_item__wrapper__top">
                <div class="country_item__wrapper__top__img">
                  <img :src="'<?=get_my_global_variable()?>'+item.img" alt="">
                </div>
                <div class="country_item__wrapper__top__icon">
                  <a :href="item.url"><i class="fal fa-plus"></i></a>
                </div>
              </div>
              <div class="country_item__wrapper__bottom">
                <h4 class="country_item__wrapper__bottom__title">
                  <a :href="item.url">{{ item.title }}</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        countryAllData: [
          {
            id: "1",
            img: "assets/img/country-img/c-1.jpg",
            title: "New Zealand",
            url: "united_states.php",
          },
          {
            id: "2",
            img: "assets/img/country-img/c-2.jpg",
            title: "United States",
            url: "united_states.php",
          },
          {
            id: "3",
            img: "assets/img/country-img/c-3.jpg",
            title: "United Kingdom",
            url: "united_states.php",
          },
          {
            id: "4",
            img: "assets/img/country-img/c-1.jpg",
            title: "Switzerland",
            url: "united_states.php",
          },
          {
            id: "5",
            img: "assets/img/country-img/c-3.jpg",
            title: "United Kingdom",
            url: "united_states.php",
          },
        ],
      };
    },
    mounted() {
      // 初始化 Owl Carousel
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            1000: {
              items: 4,
            },
          },
        });
      });
    },
  }).mount("#inc_Country_all_app");
</script>
