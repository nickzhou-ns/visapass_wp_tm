<div id="inc_clients_section_app"></div>

<script>
  createApp({
    template: `
      <section page="inc_clients_section" class="clients-section style-two">
        <div class="auto-container"> 
          <!-- Sec Title -->
          <div class="sec-title centered">
            <h2>TRUSTED COMPANIES</h2>
            <div class="text">
              Nemo enim ipsam voluptatem quia voluptas sit asper aut odit aut fugit, 
              sed quia consequuntur magni doloreos <br> qui ratione voluptatem sequi nesciunt aorro ruisea
            </div>
          </div>
          <div class="inner-container">
            <div class="sponsors-outer"> 
              <!-- Sponsors Carousel -->
              <ul class="sponsors-carousel owl-carousel owl-theme">
                <li 
                  v-for="(client, index) in clients" 
                  :key="index" 
                  class="slide-item"
                >
                  <figure class="image-box">
                    <a href="#"><img :src="'<?=get_my_global_variable()?>'+client.img" :alt="'Client ' + (index + 1)"></a>
                  </figure>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    `,
    data() {
      return {
        clients: [
          { img: "assets/img/blog/blog2.jpg" },
          { img: "assets/img/blog/blog3.jpg" },
          { img: "assets/img/blog/blog4.jpg" },
          { img: "assets/img/blog/blog5.jpg" },
          { img: "assets/img/blog/blog2.jpg" },
          { img: "assets/img/blog/blog3.jpg" },
          { img: "assets/img/blog/blog4.jpg" },
          { img: "assets/img/blog/blog5.jpg" },
        ],
      };
    },
    mounted() {
      // Initialize Owl Carousel
      $(document).ready(function () {
        $(".sponsors-carousel").owlCarousel({
          loop: true,
          margin: 10,
          autoplay: true,
          responsive: {
            0: {
              items: 2,
            },
            600: {
              items: 3,
            },
            1000: {
              items: 4,
            },
          },
        });
      });
    },
  }).mount("#inc_clients_section_app");
</script>
