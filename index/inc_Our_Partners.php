<div id="inc_Our_Partners_app"></div>

<script>
  createApp({
    template: `
      <section 
        page="inc_Our_Partners" 
        class="partners-area pt-120 pb-100" 
        style="background-image: url(assets/img/partners/partners-1.png);"
      >
        <div class="container">
          <div class="row">
            <!-- Left Column: Title and Description -->
            <div 
              class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" 
              data-wow-delay="0.3s" 
              style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"
            >
              <div class="section_title_wrapper partners-65 mb-30">
                <span class="subtitle"> Our Partners </span>
                <h2 class="section-title">
                  Our Partner Companies <br> And Institutions
                </h2>
                <p class="mt-30 mb-40">
                  We have helped students, business persons, tourists, clients with medical needs to acquire U.S. visas. 
                  Besides, we also help with other family and provide counseling services for immigration.
                </p>
                <a href="partners.html" class="theme-btn partner-btn">See All Partners</a>
              </div>
            </div>
            <!-- Right Column: Partner Logos -->
            <div 
              class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" 
              data-wow-delay="0.5s" 
              style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"
            >
              <div class="row g-0">
                <div 
                  v-for="(partner, index) in partnerData" 
                  :key="index" 
                  class="col-xxl-4 col-xl-4 col-lg-4 col-md-6"
                >
                  <div class="partner-img">
                    <a href="partners.html">
                      <img :src="'<?=get_my_global_variable()?>'+partner.img" alt="">
                    </a>
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
        partnerData: [
          { img: "assets/img/partners/pt-1.png" },
          { img: "assets/img/partners/pt-2.png" },
          { img: "assets/img/partners/pt-3.png" },
          { img: "assets/img/partners/pt-4.png" },
          { img: "assets/img/partners/pt-5.png" },
          { img: "assets/img/partners/pt-6.png" },
        ],
      };
    },
  }).mount("#inc_Our_Partners_app");
</script>
