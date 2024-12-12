<div id="inc_Contact_group_info_app"></div>

<script>
  createApp({
    template: `
      <div page="inc_Contact_group_info" class="contact-group-area pb-70 pt-145">
        <div class="container">
          <div class="row">
            <div 
              v-for="office in contactOffices" 
              :key="office.id" 
              class="col-xxl-4 col-xl-6 col-lg-6"
            >
              <div class="contact__gpinfo grey-soft2-bg mb-50">
                <div class="contact__gpinfo-icon text-center">
                  <i class="flaticon-pin"></i>
                </div>
                <div class="contact__gpinfo-content">
                  <h3 class="contact__gpinfo-content-title text-center mb-25">
                    {{ office.office }}
                  </h3>
                  <ul>
                    <li>
                      <a href="contact.php">
                        <span>Address</span>:
                        <p>{{ office.address }}</p>
                      </a>
                    </li>
                    <li>
                      <a :href="'mailto:' + office.email">
                        <span>Email</span>:
                        <p>{{ office.email }}</p>
                      </a>
                    </li>
                    <li>
                      <a :href="'tel:' + office.phone">
                        <span>Phone</span>:
                        <p>{{ office.phone }}</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span>Opening</span>:
                        <p>{{ office.opening }}</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    `,
    data() {
      return {
        contactOffices: [
          {
            id: "1",
            office: "NEW YORK OFFICE",
            address: "7005 Colorado Springs, NY",
            email: "info@example.com",
            phone: "+1 980 589 360",
            opening: "Sun - Thu : 10 AM - 10 PM",
          },
          {
            id: "2",
            office: "WASHINGTON OFFICE",
            address: "7841 Budapast, Harry, WT",
            email: "info@example.com",
            phone: "+2 980 589 360",
            opening: "Sun - Thu : 10 AM - 10 PM",
          },
          {
            id: "3",
            office: "CHICAGO OFFICE",
            address: "7005 Colorado Springs, NY",
            email: "info@example.com",
            phone: "+3 980 589 360",
            opening: "Sun - Thu : 10 AM - 10 PM",
          },
        ],
      };
    },
  }).mount("#inc_Contact_group_info_app");
</script>
