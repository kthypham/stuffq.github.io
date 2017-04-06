<!DOCTYPE HTML>
<html>
	<head>
		<title>Kathy Pham</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" href="css/portfolio.jquery.min.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#about">Portfolio</a></li>
							<li><a href="#works">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</section>

			<div id="wrapper">

					<section id="home" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Hello, I'm Kathy Pham.</h1>
							<p>I'm multipurpose, like bobby pins and vodka.
						<br>
								I write: copy, strategy, creatively. I also edit, design, and research.</p>
							<ul class="actions">
								<li><a href="#works" class="button scrolly">Let's get to know each other</a></li>
							</ul>
						</div>
					</section>
					<section id="about" class="wrapper style2 fade-up">
						<section>


							<ul class="thumbs">
			            <li><a href="#thumb1" class="thumbnail" style="background-image: url('images/pic03.jpg')">
			                <div class="description">
												NoD Magazine
												<br><span>Art Direction</span>
											</div></a>
			            </li>
									<li><a href="#thumb2" class="thumbnail" style="background-image: url('images/pic03.jpg')">
			                <div class="description">
												PowerOFF
												<br><span>Integrated Campaign</span>
											</div></a>
			            </li>
									<li><a href="#thumb3" class="thumbnail" style="background-image: url('images/pic03.jpg')">
			                <div class="description">
												Institutional <br> Sustainability <br> Report
												<br><span>Copywriting</span>
											</div></a>
			            </li>
									<li><a href="#thumb4" class="thumbnail" style="background-image: url('images/pic03.jpg')">
			                <div class="description">
												Fiction
											<br><span>Published work and editorships</span></div></a>
			            </li>
								</ul>


						</section>

					</section>

					<section id="works" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>I am analytical, cat loving, curious, hungry.</h2>
							<div class="features">
								<section>
									<center><img class="face" src="images/kpslc.png" alt="KP">
										<br>
										<ul class="actions">
											<li><a href="#" class="button">CV/RESUME</a></li>
										</ul></center>
								</section>
								<section>
									<h3>I didn't know what I wanted to do,
										so I tried to do it all.</h3>
									<ul>
									<li>I study English and also everything else at the University of Calgary.</li>
									<li>I like working behind the scenes, connecting dots, making meaning, asking why.</li>
									<li>I learned graphic and web design to be cool on the internet.</li>
									<li>Celebrity gossip is gospel and I won't hear a word against it.</li>
									<li>I think the Oxford comma is overrated.</li>
									<li>My favourite movies according to script, cinematography, and direction: <i>An Education</i>, <i>The Neon Demon</i>, <i>In The Mood For Love.</i></li>
								</section>
							</div>
						</div>
					</section>

					<section id="contact" class="wrapper style1 fade-up">
						<div class="inner">
							<div id="map"></div>
							<h2>Say hello.</h2>
							<p>Let's chat. I'm reasonably knowledgable on robots (fictional), literary theory, The Atlantic's last article, and cats.</p>
							<div class="split style1">
								<section>
									<form method="post" action="https://formspree.io/mail@kathypham.com">
										<div class="field half first">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="5"></textarea>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Home base</h3>
											<span>Calgary, Alberta, Canada</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">mail@kathypham.com</a>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
                                                <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Kathy Pham. All rights reserved.</li>
					</ul>
				</div>
			</footer>

			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/portfolio.jquery.min.js"></script>
			<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js"></script>

			<script async defer
			  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK0BJcJRFrXm_hj-Z2V0b17alWhs6n1YQ&callback=initMap">
			</script>

			<script>
			function initMap() {
			        var me = {lat: 51.046502, lng: -114.079200};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 14,
			          center: me,
								disableDefaultUI: true,
								scrollwheel: false,
								navigationControl: false,
								mapTypeControl: false,
								scaleControl: false,
								styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
			        });

			        var marker = new google.maps.Marker({
			          position: me,
								icon: 'images/marker2.png',
			          map: map
			        });
			      }
			</script>

			<script>
					$(document).ready(function() {
							$('.thumbs').portfolio({
									cols: 2,
									transition: 'slideDown'
							});
					});
			</script>

	</body>
</html>
