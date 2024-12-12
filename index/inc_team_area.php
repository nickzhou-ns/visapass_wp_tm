<div id="inc_team_area_app"></div>

<script>
  createApp({
    template: `
      <section page="inc_team_area" class="team-area grey-soft-bg pt-110 pb-80">
        <div class="container">
          <div 
            class="row justify-content-center wow fadeInUp" 
            data-wow-delay="0.3s" 
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"
          >
            <div class="col-xxl-10">
              <div class="section_title_wrapper text-center mb-50">
                <span class="subtitle"> Authorized Agents </span>
                <h2 class="section-title">
                  Our Agents Who are <br> Dedicatedly Working With Us
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div 
              v-for="item in teamAreaData" 
              :key="item.id" 
              class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" 
              :data-wow-delay="item.delay" 
              :style="{ visibility: 'visible', animationDelay: item.delay, animationName: 'fadeInUp' }"
            >
              <div class="team text-center mb-30">
                <div class="team__thumb team__thumb-2 mb-25">
                  <img :src="'<?=get_my_global_variable()?>'+item.img" alt="">
                  <div class="team__thumb-info">
                    <div class="team-social">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                  </div>
                </div>
                <div class="team__text">
                  <h3 class="team__text-title">
                    <a :href="item.url">{{ item.title }}</a>
                  </h3>
                  <span>{{ item.text }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        teamAreaData: [
          {
            id: "1",
            delay: "0.3s",
            img: "assets/img/team/t-1.jpg",
            title: "Marida Tohaman",
            text: "CEO, Visapass",
            url: "team_details.php",
          },
          {
            id: "2",
            delay: "0.5s",
            img: "assets/img/team/t-2.jpg",
            title: "Daniel Hasmass",
            text: "Sr. Consultant",
            url: "team_details.php",
          },
          {
            id: "3",
            delay: "0.7s",
            img: "assets/img/team/t-3.jpg",
            title: "Narayan Kamora",
            text: "Senior Lawyer",
            url: "team_details.php",
          },
          {
            id: "4",
            delay: "0.9s",
            img: "assets/img/team/t-4.jpg",
            title: "Marida Tohaman",
            text: "Manager",
            url: "team_details.php",
          },
        ],
      };
    },
  }).mount("#inc_team_area_app");
</script>
