<!-- visa-area-component.html -->
<div id="inc_visa_area_index_app"></div>

<script>
  

  createApp({
    // Vue 组件的模板
    template: `
      <div class="visa-area theme-bg">
        <div class="container">
          <div class="row g-0">
            <div 
              v-for="item in visaAreaData" 
              :key="item.id" 
              class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
            >
              <div :class="['visa__items', item.cls_icon]">
                <div class="visa__items-single d-flex align-items-center">
                  <div class="visa__items-single-icon">
                    <i :class="item.icon"></i>
                  </div>
                  <h4 class="visa__items-single-title">
                    <a :href="item.url">{{ item.title }}</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    `,
    // Vue 组件的数据
    data() {
      return {
        visaAreaData: [
          {
            id: "inc_visa_area_index_1",
            cls_icon: "br-none",
            icon: "flaticon-passport",
            title: "Online Visa Application",
            url: "business_visa.php",
          },
          {
            id: "inc_visa_area_index_2",
            cls_icon: "",
            icon: "flaticon-customer",
            title: "Visa Information",
            url: "business_visa.php",
          },
          {
            id: "inc_visa_area_index_3",
            cls_icon: "",
            icon: "flaticon-passport",
            title: "Immigration Resources",
            url: "business_visa.php",
          },
          {
            id: "inc_visa_area_index_4",
            cls_icon: "",
            icon: "flaticon-passport-1",
            title: "Online Passport Application",
            url: "business_visa.php",
          },
        ],
      };
    },
  }).mount("#inc_visa_area_index_app");
</script>
