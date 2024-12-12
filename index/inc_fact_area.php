<div id="inc_fact_area_app"></div>

<script>
  createApp({
    template: `
      <section 
        page="inc_fact_area" 
        class="fact-area pb-90 wow fadeInUp" 
        data-wow-delay="0.3s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"
      >
        <div class="container">
          <div class="row">
            <div 
              v-for="item in factAreaData" 
              :key="item.id" 
              class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30"
            >
              <div class="fact text-center">
                <h1 class="counter-count" v-html="item.title"></h1>
                <span>{{ item.text }}</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        factAreaData: [
          {
            id: "1",
            title: '<span class="counter">25</span>k+',
            text: "Happy Clients & Students",
          },
          {
            id: "2",
            title: '<span class="counter">80</span>+',
            text: "Countries Affiliation",
          },
          {
            id: "3",
            title: "360",
            text: "Top University Partner",
          },
          {
            id: "4",
            title: '<span class="counter">23</span>k+',
            text: "Visa & Immigration",
          },
        ],
      };
    },
  }).mount("#inc_fact_area_app");
</script>
