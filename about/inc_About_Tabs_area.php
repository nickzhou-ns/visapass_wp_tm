<div id="inc_About_Tabs_app"></div>

<script>
  createApp({
    template: `
      <div page="inc_About_Tabs_area" class="ab-tabs pb-70">
        <div class="abtb-hr1"><span></span></div>
        <div class="abtb-pth"><img src="<?= get_my_global_variable() ?>assets/img/about/pth.png" alt=""></div>
        <div class="container">
          <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
              <div class="price-tab pb-130 abtab-top">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                  <li v-for="tab in tabs" :key="tab.id" class="nav-item" role="presentation">
                    <button 
                      class="nav-link" 
                      :class="tab.radius_active" 
                      :id="tab.id" 
                      data-bs-toggle="pill" 
                      :data-bs-target="'#' + tab.target" 
                      type="button" 
                      role="tab" 
                      :aria-controls="tab.target" 
                      :aria-selected="tab.selected">
                      {{ tab.title }}
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <div 
              v-for="content in tabsContent" 
              :key="content.id" 
              class="tab-pane fade" 
              :class="content.radius_active" 
              :id="content.id" 
              role="tabpanel" 
              :aria-labelledby="content.target"
            >
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" v-for="(section, index) in content.sections" :key="index">
                  <div class="abtb-content" :class="section.content_text">
                    <div class="abtbs-round"><span></span></div>
                    <div class="abtb-mbr"><span></span></div>
                    <span>{{ section.title_sm }}</span>
                    <h4 class="abtb-title">{{ section.title }}</h4>
                    <p>{{ section.text }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    `,
    data() {
      return {
        tabs: [
          { id: "pills-home-tab", radius_active: "nav-radius active", target: "pills-home", title: "1990 - 1995", selected: "true" },
          { id: "pills-profile-tab", radius_active: "", target: "pills-profile", title: "1996 - 2000", selected: "false" },
          { id: "pills-contact-tab1", radius_active: "", target: "pills-contact", title: "2001 - 2005", selected: "false" },
          { id: "pills-contact-tab2", radius_active: "", target: "pills-contact", title: "2006 - 2010", selected: "false" },
          { id: "pills-contact-tab", radius_active: "navr-radius", target: "pills-contact", title: "2011 - 2020", selected: "false" },
        ],
        tabsContent: [
          {
            id: "pills-home",
            radius_active: "show active",
            target: "pills-home-tab",
            sections: [
              { content_text: "text-right", title_sm: "22 jan 1995", title: "Started Journey in New York", text: "Bring to the table win-win survival strategies to ensure proactive domination." },
              { content_text: "", title_sm: "25 Aug 1994", title: "First Trophy Winner in World", text: "Bring to the table win-win survival strategies to ensure proactive domination." },
            ],
          },
          {
            id: "pills-profile",
            radius_active: "",
            target: "pills-profile-tab",
            sections: [
              { content_text: "text-right", title_sm: "22 jan 1995", title: "Started Journey in New York", text: "Bring to the table win-win survival strategies to ensure proactive domination." },
              { content_text: "", title_sm: "25 Aug 1994", title: "First Trophy Winner in World", text: "Bring to the table win-win survival strategies to ensure proactive domination." },
            ],
          },
        ],
      };
    },
  }).mount("#inc_About_Tabs_app");
</script>
