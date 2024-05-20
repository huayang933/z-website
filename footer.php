	<!-- Footer Start -->
	<footer class="footer-one">
		<div class="container">
			<div class="footer-style-one">
				<div class="row">
					<!-- Footer Logo & Text -->
					<div class="col-6 offset-md-3 col-md-3 offset-lg-0 col-lg-2 order-2 order-lg-1">
						<div class="footer-one-link-group text-lg-start">
							<ul class="footer-one-link-list">
								<li class="footer-one-link-head">Zeta Capital Sdn Bhd</li>
								<li><a href="/" class="footer-one-link">Home</a></li>
								<li><a href="/services" class="footer-one-link">Services</a></li>
								<li><a href="/about" class="footer-one-link">About</a></li>
								<li><a href="/portfolio" class="footer-one-link">Portfolio</a></li>
								<li><a href="/contact" class="footer-one-link">Contact us</a></li>
							</ul>
						</div>
					</div>
					<!-- Footer Logo & Text -->
					<!-- Footer App Download Link -->
					<div class="col-lg-8 order-1 order-lg-2">
						<div class="footer-one-content-wrapper">
							<a class="footer-one-brand" href="home.html">
								<img src="assets/images/logo/logo-white.svg" alt="logo" />
							</a>
							<p class="footer-one-text">Intrinsicly matrix high standards in niches whereas
								intermandated niche markets. Objectively harness competitive resources.</p>

							<!-- Social Links -->
							<div class="footer-one-social-links-group">
								<a href="https://www.facebook.com/" target="_blank" class="footer-one-social-link">
									<i data-icon="facebook"></i>
								</a>
								<a href="https://www.instagram.com/" target="_blank" class="footer-one-social-link">
									<i data-icon="instagram"></i>
								</a>
								<a href="https://www.pinterest.com/" target="_blank" class="footer-one-social-link">
									<i data-icon="pinterest"></i>
								</a>
								<a href="https://twitter.com/" target="_blank" class="footer-one-social-link">
									<i data-icon="x"></i>
								</a>
							</div>


						</div>
					</div>
					<!-- Footer App Download Link -->
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<!-- Copyright Text -->
				<div class="footer-one-copyright">
					<label class="m-0">Copyright <strong>&COPY;</strong> 2024. All Rights Reserved.</label>
				</div>
				<!-- Copyright Text -->
			</div>
		</div>
	</footer>
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