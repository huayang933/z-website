</div>
 <!-- Scroll to Top Start -->
 <a href="JavaScript:void(0)" class="toTop" onclick="toTopClick()">
        <i data-icon="arrowUp"></i>
    </a>

    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router@3.5.2/dist/vue-router.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
	// Create Vue instance
	new Vue({
		el: '#app',
		data: {
			portfolio: []
		},
		// 开始执行代码前，第一个执行就是 mounted
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
					
				}, 1000);

			}).catch((error) => {
				console.error("An error occurred:", error);
			});
		},
		methods: {
			googleImageConvertToImage(link) {
				return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w500";
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

</script>
    <!-- Jquery Javascript File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/smoothscroll.min.js"></script>
    <script src="assets/js/svg.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>