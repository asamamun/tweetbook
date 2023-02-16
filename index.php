<?php
require __DIR__ . '/vendor/autoload.php';
use App\classes\Database;
use App\classes\Session;
use Carbon\Carbon;
define('PAGE_SIZE', 10);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.79.0">
	<title>TweetBooks: Home</title>
	<style>
		a.page.active {
			background-color: #1adbfe !important;
			color: #fff;
		}

		.display {
			display: none !important;
		}
	</style>

	<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/"> -->



	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Favicons -->
	<!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png"> -->
	<link rel="manifest" href="manifest.json">
	<!-- <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico"> -->
	<meta name="theme-color" content="#7952b3">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="assets/css/starter-template.css" rel="stylesheet">
</head>

<body>

	<!-- navbar start -->
	<?php require "partials/navbar.php"; ?>
	<!-- navbar end -->

	<section class="topbar-content">
		<!-- --------------- Start Main Page Heading (Top Bar) --------------- -->
		<div class="container">
			<div class="col-12 text-center mx-auto pt-5">
				<h3 class="text-white">Tours & Travels</h3>
				<h1 class="font-weight-bold mb-3">Amazing Place On Earth</h1>
				<a href="#" class="btn btn-sky d-inline-block rounded-pill px-4">Explore</a>
			</div>
		</div>
	</section><!-- x ------------------------- End Main Page Heading (Top Bar) ----------------- x -->


	<section class="carousel slide" id="carousel" data-ride="carousel" data-bs-interval="5000" data-bs-ride="carousel">
		<!-- Start Carousel (Slider) Post -->
		<div class="container">

			<div class="carousel-inner">
				<!-- -------------------- Start Carousel Inner -------------------------- -->

				<div class="carousel-item active">
					<!-- ---------------- Start Carousel First Item -------------------- -->
					<div class="row">

						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<!-- Start Carousel First Item Card Number 1 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/photography-2.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">The Different Types of Camera Lenses&hellip;</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel First Item Card Number 1 ----------------x -->

						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-md-block">
							<!-- Start Carousel First Item Card Number 2 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/food-2.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">42 Foods You Need To Eat In Your Lifetime!</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel First Item Card Number 2 ----------------x -->

						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-xl-block">
							<!-- Start Carousel First Item Card Number 3 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/photography-3.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">10 Ways to Respect a Photographer</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<!-- ------ Post Add Info ------ -->
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel First Item Card Number 3 ----------------x -->

					</div>
				</div>
				<!--x------------------------------ End Carousel First Item ------------------------x-->

				<div class="carousel-item">
					<!-- ---------------- Start Carousel Second Item -------------------- -->
					<div class="row">

						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<!-- Start Carousel Second Item Card Number 1 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/photography-4.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">Wildlife photography with the Canon&hellip;</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel Second Item Card Number 1 ----------------x -->

						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-md-block">
							<!-- Start Carousel Second Item Card Number 2 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/food-2.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">42 Foods You Need To Eat In Your Lifetime!</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel Second Item Card Number 2 ----------------x -->

						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-xl-block">
							<!-- Start Carousel Second Item Card Number 3 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/lifestyle-2.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">45 Tips to Live a Healthier Life</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel Second Item Card Number 3 ----------------x -->

					</div>
				</div>
				<!--x------------------------------ End Carousel Second Item ------------------------x-->

				<div class="carousel-item">
					<!-- ---------------- Start Carousel Third Item -------------------- -->
					<div class="row">

						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<!-- Start Carousel Third Item Card Number 1 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/tech-1.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">10 useful tech tips you'll use over&hellip;</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel Third Item Card Number 1 ----------------x -->

					
						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-md-block">
							<!-- Start Carousel Third Item Card Number 2 -->
							<article>
								<img class="w-100 img-fluid" src="assets/img/photography-4.jpg" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">Wildlife photography with the Canon&hellip;</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x ------------- End Carousel Third Item Card Number 2 ----------------x -->

						<div class="col-12 col-md-6 col-lg-6 col-xl-4 d-none d-xl-block">
							<!-- Start Carousel Third Item Card Number 3 -->
							

							<article>
								<img class="w-100 img-fluid" src="assets/img/illustration-2.png" alt="">
								<h4 class="font-weight-bold my-2 mt-3 ml-2">6 Tips For Outstanding Illustrations</h4>

								<div class="post-info col-7 col-md-9 col-lg-8 col-xl-9 pl-1 px-0 py-2 mb-1 ml-2">
									<span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin&nbsp;</span>
									<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
									<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
								</div>

								<p class="ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
								<footer><a class="btn btn-sky ml-2 mb-2" href="#">Read More&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></footer>
							</article>
						</div><!-- x -------- End Carousel Third Item Card Number 3 ------- x -->

					</div>
				</div><!-- x ----------------- End Carousel Third Item --------------- x -->


			</div><!-- x ----------------- End Carousel Inner ---------------------- x -->

			<div class="carousel-button my-3">
				<!-- Start Carousel Previous/Next Controls Button -->

				<div class="row justify-content-center">
					<div class="col-3 col-md-4 col-lg-5 pr-0 text-end">
						<a href="#carousel" role="button" data-slide="prev">
							<!-- Carousel Prev Controls Button -->
							<span class="fas fa-arrow-alt-circle-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>

					<div class="col-6 col-md-4 col-lg-2">
						<ol class="carousel-indicators">
							<!-- Start Carousel Indicators -->
							<li data-target="#carousel" data-slide-to="0" class="active">1</li>
							<li data-target="#carousel" data-slide-to="1">2</li>
							<li data-target="#carousel" data-slide-to="2">3</li>
						</ol><!-- End Carousel Indicators -->
					</div>

					<div class="col-3 col-md-4 col-lg-5 pl-0 text-start">
						<a href="#carousel" role="button" data-slide="next">
							<!-- Carousel Next Controls Button -->
							<span class="fas fa-arrow-alt-circle-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div><!-- x ---------- End Carousel Previous/Next Controls Button ---------- x -->
		</div><!-- x ------------- END Carouser Container DIV --------- x -->
	</section><!-- x ---- End Carousel (Slider) Post --- x -->




	<section class="main-content mb-5">
		<!-- -------- Start Blog Post/Main Post Content Section -------- -->
		<div class="container">

			<div class="row">
				<!-- ------------- Start Blog Post/Main Post Row ----------- -->

				<div class="col-lg-8">
					<!-- --------------- Main Post (Left Content/Article Post) ------------------ -->

					<h2 class="font-weight-bold text-gray mb-3">All Post</h2><!-- Heading -->

					<!-- All Public Tweets start -->

					<?php
					$conn = new Database();
					$defaultpage = 1;
					if (isset($_GET['page'])) {
						$defaultpage = $_GET['page'];
					}
					$recordStart = ($defaultpage - 1) * PAGE_SIZE;
					$pagi = "SELECT COUNT(*) AS total FROM tweets WHERE privacy='1' and deleted is NULL ";
					$allpagei = $conn->db->query($pagi);
					$allpageiCount = $allpagei->fetch_assoc();
					// echo $allpageiCount['total'];
					$totalPage = ceil($allpageiCount['total'] / PAGE_SIZE);

					$q = "SELECT * FROM `tweets` WHERE privacy = '1' and deleted is NULL order by created desc LIMIT " . $recordStart . "," . PAGE_SIZE . "";
					// echo $q;
					// $q = "select * from tweets";
					$allTweet = $conn->db->query($q);
					$html = '<article class="post">';
					if ($allTweet->num_rows > 0) {
						while ($tableRow = $allTweet->fetch_assoc()) {
							$html .= '<div class="post-img">
	  <img class="w-100 img-fluid" src="assets/tweetimage/' . $tableRow['image'] . '" alt="">
  </div>
  <div class="post-info py-2 py-md-3 mb-3 px-auto col-md-8 col-lg-9 col-xl-7 mx-auto text-center">
	  <span><i class="fas fa-user"></i>&nbsp;' . $tableRow['uid'] . '&nbsp;</span>
	  <span><i class="fas fa-calendar-alt"></i> ' .Carbon::parse($tableRow['created'])->diffForHumans(). '</span>
	  <span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
  </div>
  <div class="post-content"><!-- (Main Article) Post Details -->
	  <h2 class="font-weight-bold"><a href="tweet.php?tid='.$tableRow['id'].'"">' . $tableRow['title'] . '</a></h2>
	  <p>' . mb_substr($tableRow['details'], 0, 200) . '</p>
  </div>
  <footer><a class="btn rounded-pill btn-sky mb-3" href="tweet.php?tid='.$tableRow['id'].'">Read More <i class="fas fa-arrow-right"></i></a></footer>
';
						}
						$html .= ' </article>';
						echo $html;
					}
					?>
					<!-- All Public Tweets End -->

					<div class="pages text-center mt-4 mt-lg-0">
						<!-- ---------- Article Pages Number ------- -->
						<a class="icon fas fa-chevron-left <?php echo ($defaultpage <= 1) ? "display" : "" ?>" href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . $defaultpage - 1 ?>"></a>

						<?php
						for ($i = 1; $i <= $totalPage; $i++) {
							if (abs($defaultpage - $i) < 3) {


								if ($defaultpage == $i) {
									echo '<a class="page active" href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';
								} else {
									echo '<a class="page" href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';
								}
							}
						}
						?>

						<!-- <a class="page" href="#">1</a>
						<a class="page" href="#">2</a>
						<a class="page" href="#">3</a> -->


						<a class="icon fas fa-chevron-right <?php echo ($defaultpage == $totalPage) ? "display" : "" ?>" href="<?php
																																echo $_SERVER['PHP_SELF'] . '?page=' . $defaultpage + 1 ?>"></a>
					</div>



				</div><!-- x ---------- End Main Post (Left Content/Article Post) ---------- x -->

				<div class="col-lg-4 d-none d-lg-block">
					<!-- Start Right Content (Sidebar Post) -->

					<aside class="sidebar">
					<h2>Hello <?php echo Session::getSessionData("username"); ?></h2>
						<!-- Categorys start -->
						<div class="category-list">
							<!-- ---------- Sidebar Category List ---------- -->
							<h2 class="font-weight-bold text-gray mb-3">Category</h2>

							<?php require "partials/catwisetweet.php"; ?>

						</div>
						<!-- Categorys  End -->
						<div class="popular-post my-5">
							<!-- ------------- Sidebar Popular Post ----------- -->
							<h2 class="font-weight-bold text-gray my-3">Popular Post</h2>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/shopping-1.jpg" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">What is Tax Free Shopping? </a></h5>
							</article>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/software-2.png" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;889 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">Custom Software v/s Utility Software!</a></h5>
							</article>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/illustration-1.jpg" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">10 top illustration trends for 2021</a></h5>
							</article>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/photography-1.jpg" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">10 Ways to Respect a Photographer </a></h5>
							</article>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/web-design-1.png" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">Web Design Trends You’ll Notice In 2021</a></h5>
							</article>

							<article class="my-5">
								<!-- ------------------ Sidebar Article ----------------- -->
								<figure>
									<img src="assets/img/lifestyle-1.jpg" alt="" class="w-100" />
									<figcaption>
										<span><i class="fas fa-calendar-alt"></i>&nbsp; January 09, 2021&nbsp;</span>
										<span><i class="fas fa-comments"></i>&nbsp;399 comments</span>
									</figcaption>
								</figure>
								<h5><a href="#">The vital pillars for a healthy lifestyle</a></h5>
							</article>

						</div><!-- x ------------ End Sidebar Popular Post (Sidebar Article) -------------- x -->

						<div class="popular-tags">
							<!-- ---- Start Sidebar Popular Tag Section ----- -->
							<h2 class="font-weight-bold text-gray mb-3">Popular Tags</h2>
							<a href="">illustration</a>
							<a href="">Lifestyle</a>
							<a href="">Photography</a>
							<a href="">Travel</a>
							<a href="">Design</a>
							<a href="">Web Development</a>
							<a href="">Love</a>
							<a href="">Movie</a>
							<a href="">Shopping</a>
						</div><!-- ---------- End Sidebar Popular Tag Section ------------ -->

					</aside>

				</div><!-- x ---------------- Start Right Content (Sidebar Post) ------------------ x -->

			</div><!-- x --------------- End Blog Post/Main Post Row ----------------- x -->

		</div><!-- x --- End Main Post Section Container DIV ----- x -->
	</section><!-- x ------------------- End Blog Post/Main Post Content Section -------------------- x -->
	<!-- footer start -->
	<?php require "partials/footer.php"; ?>
	<!-- footer end -->



	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/ef16f745ed.js" crossorigin="anonymous"></script>



</body>

</html>