<div id="inc_Ab_fact_area_about_app"></div>

<script>
  createApp({
    template: `
      <div 
        page="inc_Ab_fact_area_about" 
        class="abfact-area pt-80 pb-170" 
        style="background-image: url(<?= get_my_global_variable() ?>assets/img/ab-fact/abfact.jpg);"
      >
        <div class="container">
          <div class="row mb-20">
            <div 
              v-for="fact in factAreaData" 
              :key="fact.id" 
              class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30"
            >
              <div class="fact fact-2 abfact-items text-center">
                <h1 class="counter-count" v-html="fact.title"></h1>
                <span>{{ fact.text }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    `,
    data() {
      return {
        factAreaData: [
          { id: "1", title: '<span class="counter">25</span>k+', text: "Happy Clients & Students" },
          { id: "2", title: '<span class="counter">80</span>+', text: "Countries Affiliation" },
          { id: "3", title: "360", text: "Top University Partner" },
          { id: "4", title: '<span class="counter">23</span>k+', text: "Visa & Immigration" },
        ],
      };
    },
  }).mount("#inc_Ab_fact_area_about_app");
</script>
