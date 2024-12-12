<div id="inc_featurs_area_index_app"></div>

<script>
  createApp({
    template: `
      <section page="inc_featurs_area_index" class="featurs-services pt-110 pb-90">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-10">
              <div 
                class="section_title_wrapper text-center mb-50 wow fadeInUp" 
                data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"
              > 
                <span class="subtitle"> Featured Services </span>
                <h2 class="section-title">
                  We Provide Visa & Immigration Service <br>
                  From Experienced Lawyers
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div 
              v-for="item in featursAreaData" 
              :key="item.id" 
              class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30 wow fadeInUp" 
              :data-wow-delay="item.delay" 
              :style="{ visibility: 'visible', animationDelay: item.delay, animationName: 'fadeInUp' }"
            >
              <div class="features">
                <div class="features__thumb">
                  <a :href="item.url"><img :src="'<?=get_my_global_variable()?>'+item.img" alt=""></a>
                </div>
                <div class="features__content">
                  <h3 class="features__content-title">
                    <a :href="item.url">{{ item.title }}</a>
                  </h3>
                  <p>{{ item.text }}</p>
                  <a :href="item.url">
                    {{ item.more }} <i class="fal fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        featursAreaData: [
          {
            id: "1",
            delay: "0.3s",
            img: "assets/img/featurs/featurs-1.jpg",
            title: "Business Visa",
            text: "We helped with other family based employment based and investment based Immigration.",
            url: "business_visa.php",
            more: "Read More",
          },
          {
            id: "2",
            delay: "0.5s",
            img: "assets/img/featurs/featurs-2.jpg",
            title: "Students Visa",
            text: "We helped with other family based employment based and investment based Immigration.",
            url: "business_visa.php",
            more: "Read More",
          },
          {
            id: "3",
            delay: "0.7s",
            img: "assets/img/featurs/featurs-3.jpg",
            title: "Work & Job Visa",
            text: "We helped with other family based employment based and investment based Immigration.",
            url: "business_visa.php",
            more: "Read More",
          },
          {
            id: "4",
            delay: "0.9s",
            img: "assets/img/featurs/featurs-4.jpg",
            title: "Tourist & Visitor Visa",
            text: "We helped with other family based employment based and investment based Immigration.",
            url: "business_visa.php",
            more: "Read More",
          },
        ],
      };
    },
  }).mount("#inc_featurs_area_index_app");
</script>
