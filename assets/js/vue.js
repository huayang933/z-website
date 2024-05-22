// Create Vue instance
new Vue({
  el: '#app',
  data: {
    portfolio: [],
    reviews: [],
    formData: {
      name: '3123',
      email: '321@32231',
      contact: '313',
      message: '312'
    },
    status: 'onSubmit'
  },
  // 开始执行代码前，第一个执行就是 mounted
  created() {

  },
  mounted() {
    const sheetId = '1u1ve2RTeU1hLxJh7uHdp4J318L64rUzvq2QoRLGKiT8';
    const getData = async (sheetId, tabName) => {
      try {
        const { data } = await axios.get(
          `https://docs.google.com/spreadsheets/d/${sheetId}/gviz/tq?tqx=out:json&sheet=${tabName}&headers=1`
        )
        return JSON.parse(data.substring(47).slice(0, -2))
      } catch (error) {
        throw error
      }
    }
    const sheetTransformer = (cols, rows) => {
      const response = []

      for (const x of rows) {
        const data = {}

        for (let y = 0; y < x.c.length; y++) {
          const key = cols[y].label
          const value = x.c[y]?.f ?? x.c[y]?.v

          if (key != '') {
            data[key] = value
          }
        }

        response.push(data)
      }

      return response
    }

    getData(sheetId, "portfolio").then((data) => {
      this.portfolio = sheetTransformer(data.table.cols, data.table.rows);

      setTimeout(() => {
        if (document.querySelector(".screenshort-carousel")) {
          $(".screenshort-carousel").owlCarousel({
            loop: true,
            margin: 30,
            navContainer: ".screenshort-nav",
            navText: [
              '<i class="fal fa-long-arrow-alt-left"></i>',
              '<i class="fal fa-long-arrow-alt-right"></i>',
            ],
            dots: false,
            nav: true,
            responsive: {
              0: {
                items: 3,
                margin: 15,
              },
              414: {
                items: 3,
                margin: 15,
              },
              576: {
                items: 3,
                margin: 15,
              },
              768: {
                items: 3,
                margin: 40,
              },
              992: {
                items: 5,
              },
              1200: {
                items: 5,
              },
              1920: {
                items: 5,
              },
            },
          });
        }
        if (document.querySelector("[data-fancybox]")) {
          Fancybox.bind("[data-fancybox]", {
            // Your custom options
          });
        }
      }, 1000);

    }).catch((error) => {
      console.error("An error occurred:", error);
    });

    getData(sheetId, "reviews").then((data) => {
      this.reviews = sheetTransformer(data.table.cols, data.table.rows);

      setTimeout(() => {
        if (document.getElementById("testimonial")) {
          $("#testimonial").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            nav: true,
            rewind: false,
            navContainer: ".slider-nav",
            navText: [
              '<i class="fal fa-long-arrow-alt-left"></i>',
              '<i class="fal fa-long-arrow-alt-right"></i>',
            ],
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
              },
              600: {
                items: 1,
              },
              1000: {
                items: 1,
              },
            },
          });
        }
      }, 1000);

    }).catch((error) => {
      console.error("An error occurred:", error);
    });
  },
  methods: {
    googleImageConvertToImage(link) {
      return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w500";
    },
    submitForm() {
      const bookingData = {
        name: this.formData.name,
        email: this.formData.email,
        contact: this.formData.contact,
        message: this.formData.message,
      };

      this.status = 'submiting';
      console.log('Booking Data:', bookingData);
      const fetchCode = 'AKfycbxCwAQfp4HEWJ0oxmmr2C2VrDqEPP2QDolTkpbR7YiyCKtabYR-fODKZR6zJJU8fRE';
      setTimeout(() => {
        this.status = 'successful';
      }, 2000);
      this.fetchPostByType("sendEmail", fetchCode, bookingData);
    },
    fetchPostByType(type, url, data) {
      // data type
      const dataType = {};
      for (const key in data) {
        dataType[key] = typeof data[key];
      }
      const postData = { type, data, dataType };

      let fetchPromise = fetch(
        `https://script.google.com/macros/s/${url}/exec`,
        {
          method: "POST",
          mode: "no-cors",
          cache: "no-cache",
          headers: {
            "Content-Type": "application/json",
          },
          redirect: "follow",
          body: JSON.stringify(postData),
        }
      );
      return fetchPromise;
    }
  },
  computed: {
    filteredCustomers() {
      return this.customers.filter(customer => {
        const id = customer.id.toLowerCase();
        const name = customer.name.toLowerCase();
        const contactA = customer.contactA.toString().toLowerCase();
        const searchTerm = this.filterCustomer.toLowerCase();

        return (id.includes(searchTerm) || name.includes(searchTerm) || contactA.includes(searchTerm));
      });
    },
  },
});