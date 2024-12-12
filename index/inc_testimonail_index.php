<div id="inc_testimonail_app"></div>

<script>
  createApp({
    template: `
      <section page="inc_testimonail_index" class="testimonail-area grey-bg pt-110 pb-190">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-10">
              <div class="section_title_wrapper text-center mb-50">
                <span class="subtitle"> Testimonials </span>
                <h2 class="section-title">
                  What Clients Say About Us and <br> Our Services
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="textimonail-active owl-carousel">
              <div 
                v-for="(item, index) in testimonailData" 
                :key="index" 
                class="testimonail__wrapper"
              >
                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                  <div class="testimonail__wrapper__info__img">
                    <img :src="'<?=get_my_global_variable()?>'+item.img" alt="">
                  </div>
                  <div class="testimonail__wrapper__info__author">
                    <h4>{{ item.title }}</h4>
                    <span>{{ item.title_sm }}</span>
                  </div>
                  <div class="testimonail__wrapper__info__quotes">
                    <i class="flaticon-quote"></i>
                  </div>
                </div>
                <div class="testimonail__wrapper__content">
                  <p>{{ item.text }}</p>
                  <div class="testimonail__wrapper__content__reviews">
                    <ul>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li>(Switzerland Visa)</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        testimonailData: [
          {
            id: "1",
            title: "Karlosh Tremon",
            title_sm: "Student",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-1.png",
          },
          {
            id: "2",
            title: "Daniel Groveria",
            title_sm: "Business Man",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-2.png",
          },
          {
            id: "3",
            title: "Michel Midester",
            title_sm: "Traveller",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-3.png",
          },
          {
            id: "4",
            title: "Daniel Groveria",
            title_sm: "Student",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-1.png",
          },
          {
            id: "5",
            title: "Daniel Groveria",
            title_sm: "Business Man",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-2.png",
          },
          {
            id: "6",
            title: "Michel Midester",
            title_sm: "Traveller",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-3.png",
          },
          {
            id: "7",
            title: "Daniel Groveria",
            title_sm: "Student",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-1.png",
          },
          {
            id: "8",
            title: "Daniel Groveria",
            title_sm: "Business Man",
            text: "Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present their vaccination certificates",
            img: "assets/img/testimonial/ts-2.png",
          },
        ],
      };
    },
    mounted() {
      // Initialize Owl Carousel
      $(document).ready(function () {
        $(".textimonail-active").owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          autoplay: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            1000: {
              items: 3,
            },
          },
        });
      });
    },
  }).mount("#inc_testimonail_app");
</script>
