<?php include('header.php') ?>
	<?php include('nav-login.php') ?>
		<!-- course-detail start -->
		<section class="course-detail pink-bg">
			<div class="container">
				<form action="">
					<div class="row">
						<div class="col-12 col-xl-8" id="video_area">
							<div class="left">
								<div class="video-box">
									<video poster="images/course-vid.png" controls>
										<source src="video/movie.mp4" type="video/mp4"> </video>
										<div class="course-content-box">
											<button type="button" id="toggle_vid"><i class="fa fa-arrow-left"></i>Open Course Content</button>
										</div>
								</div>
								<nav class="course-detail-nav">
									<div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">overview</a> <a class="nav-link" id="nav-qanda-tab" data-toggle="tab" href="#nav-qanda" role="tab" aria-controls="nav-qanda" aria-selected="false">Q & A</a> <a class="nav-link" id="nav-classes-tab" data-toggle="tab" href="#nav-classes" role="tab" aria-controls="nav-classes" aria-selected="false">classes</a> <a class="nav-link" id="nav-assignments-tab" data-toggle="tab" href="#nav-assignments" role="tab" aria-controls="nav-assignments" aria-selected="false">assignments</a> <a class="nav-link" id="nav-quizzes-tab" data-toggle="tab" href="#nav-quizzes" role="tab" aria-controls="nav-quizzes" aria-selected="false">quizzes</a> <a class="nav-link" id="nav-exams-tab" data-toggle="tab" href="#nav-exams" role="tab" aria-controls="nav-exams" aria-selected="false">exams <span class="noti">1</span></a> <a class="nav-link" id="nav-result-tab" data-toggle="tab" href="#nav-result" role="tab" aria-controls="nav-result" aria-selected="false">result</a> </div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active course-overview" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
										<div class="row">
											<div class="col-12">
												<h4>About this Course:</h4>
												<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
												<h4>Features of Course:</h4>
												<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
												<ul>
													<li>
														<h5>Starting Date:</h5>
														<h6>mm/dd/yy</h6> </li>
													<li>
														<h5>Ending Date:</h5>
														<h6>mm/dd/yy</h6> </li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-pane fade qanda" id="nav-qanda" role="tabpanel" aria-labelledby="nav-qanda-tab">
										<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12">
												<div class="d-sm-flex justify-content-between question-bar">
													<h6>11 Questions in this Course</h6> <a href="learing-ask-question.php">Ask a New Question</a> </div>
												<ul>
													<li>
														<div class="media d-md-flex d-block"> <img src="images/qanda.png" class="img-fluid" alt="User Image">
															<div class="media-body">
																<h5>Copy csv into SQL Tables using Power automate</h5>
																<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
																<h6>Mark Carson <span>. 1 day ago</span></h6> </div>
															<div class="comment">
																<h4>1 <i class="fa fa-comments"></i></h4> </div>
														</div>
													</li>
													<li>
														<div class="media d-md-flex d-block"> <img src="images/qanda.png" class="img-fluid" alt="User Image">
															<div class="media-body">
																<h5>Copy csv into SQL Tables using Power automate</h5>
																<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
																<h6>Mark Carson <span>. 1 day ago</span></h6> </div>
															<div class="comment">
																<h4>1 <i class="fa fa-comments"></i></h4> </div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-pane fade classes" id="nav-classes" role="tabpanel" aria-labelledby="nav-classes-tab">
										<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12 table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>sr. No</th>
															<th>TITLE</th>
															<th>TEACHER NAME</th>
															<th>DATE</th>
															<th>TIMING</th>
															<th>STATUS</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>ABC</td>
															<td>Mark Carson</td>
															<td>mm/dd/yy</td>
															<td>Starting Time: 00:00 a.m.
																<br> Ending Time: 00:00 a.m.</td>
															<td><span class="green">Conducted</span></td>
															<td><a href="join-class.php">join class</a></td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC</td>
															<td>Mark Carson</td>
															<td>mm/dd/yy</td>
															<td>Starting Time: 00:00 a.m.
																<br> Ending Time: 00:00 a.m.</td>
															<td><span class="red">not Conducted</span></td>
															<td><a href="join-class.php">join class</a></td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC</td>
															<td>Mark Carson</td>
															<td>mm/dd/yy</td>
															<td>Starting Time: 00:00 a.m.
																<br> Ending Time: 00:00 a.m.</td>
															<td><span class="green">Conducted</span></td>
															<td><a href="join-class.php">join class</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade assignments" id="nav-assignments" role="tabpanel" aria-labelledby="nav-assignments-tab">
										<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12 table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>sr. No</th>
															<th>TITLE</th>
															<th>Assignment File</th>
															<th>Marks Obtained</th>
															<th>Total Marks</th>
															<th>Action</th>
															<th>Deadline</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download Assignment File</a></td>
															<td>-</td>
															<td>00</td>
															<td>
																<button class="pur-btn">Submit Assignment</button>
															</td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download Assignment File</a></td>
															<td>-</td>
															<td>00</td>
															<td><span class="pur-tag">Assignment Submitted</span></td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download Assignment File</a></td>
															<td>-</td>
															<td>00</td>
															<td><span class="red">Deadline Exceeded</span></td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download Assignment File</a></td>
															<td>-</td>
															<td>00</td>
															<td><a href="#" download class="pur-btn"><i class="far fa-file-pdf"></i>ABC File.pdf <i class="fa fa-times-circle"></i></a> <a href="#" class="submit" data-toggle="modal" data-target=".submit-assignment-modal">submit</a> </td>
															<td>mm/dd/yy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade quizzes" id="nav-quizzes" role="tabpanel" aria-labelledby="nav-quizzes-tab">
										<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12 table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>sr. No</th>
															<th>Lecture No</th>
															<th>Title</th>
															<th>Time</th>
															<th>Marks Obtained</th>
															<th>Total Marks</th>
															<th>STATUS</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>03</td>
															<td>Quiz 01</td>
															<td>30 mins</td>
															<td>-</td>
															<td>00</td>
															<td><span class="yellow">Pending</span></td>
															<td><a href="#" data-toggle="modal" data-target=".quiz-modal">start quiz</a></td>
														</tr>
														<tr>
															<td>01</td>
															<td>03</td>
															<td>Quiz 01</td>
															<td>30 mins</td>
															<td>-</td>
															<td>00</td>
															<td><span class="green">completed</span></td>
															<td><a href="#" data-toggle="modal" data-target=".quiz-modal">start quiz</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade exam" id="nav-exams" role="tabpanel" aria-labelledby="nav-exams-tab">
									<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12 table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>sr. No</th>
															<th>TITLE</th>
															<th>exam File</th>
															<th>Marks Obtained</th>
															<th>Total Marks</th>
															<th>Action</th>
															<th>Deadline</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download File</a></td>
															<td>-</td>
															<td>00</td>
															<td>
																<button class="pur-btn">Submit</button>
															</td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download File</a></td>
															<td>-</td>
															<td>00</td>
															<td><span class="pur-tag">submit</span></td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download File</a></td>
															<td>-</td>
															<td>00</td>
															<td><span class="red">Deadline Exceeded</span></td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download File</a></td>
															<td>-</td>
															<td>00</td>
															<td><a href="#" download class="pur-btn"><i class="far fa-file-pdf"></i>ABC File.pdf <i class="fa fa-times-circle"></i></a> <a href="#" class="submit" data-toggle="modal" data-target=".submit-assignment-modal">submit</a> </td>
															<td>mm/dd/yy</td>
														</tr>
														<tr>
															<td>01</td>
															<td>ABC Assignment</td>
															<td><a href="#" class="pur-btn" download>Download File</a></td>
															<td>-</td>
															<td>00</td>
															<td><p class="dw-text">ABC File Submitted</p>
																<a href="#" download class="dw-file"><i class="fa fa-download"></i>download</a> </td>
															<td>mm/dd/yy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

									</div>
									<div class="tab-pane fade result" id="nav-result" role="tabpanel" aria-labelledby="nav-result-tab">
									<div class="row">
											<div class="col-12 offset-md-6 col-md-6">
												<input type="text" class="form-control" placeholder="search...">
												<button type="button" class="search-btn"><i class="fa fa-search"></i></button>
											</div>
											<div class="col-12 table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>sr. No</th>
															<th>full name</th>
															<th>assignment</th>
															<th>Quizzes</th>
															<th>exam</th>
															<th>Marks Achieved</th>
															<th>Total Marks</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>01</td>
															<td>Max Andrew</td>
															<td>00</td>
															<td>00</td>
															<td>00</td>
															<td>00</td>
															<td>00</td>
															<td><span class="green">pass</span></td>
														</tr>
														 
													</tbody>
												</table>
											</div>
										</div> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-4" id="toggle_sidebar">
							<div class="right">
								<h2>Course Content</h2>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
								<div class="course-detail-box">
									<div class="media align-items-center"> <i class="fa fa-check"></i>
										<div class="media-body">
											<h3>1. Introduction</h3>
											<p><i class="fa fa-play-circle"></i>2 min</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			</form>
		</section>
		<!-- quiz-modal start -->
		<div class="modal fade quiz-modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content quiz-area">
					<h4>Quiz 01</h4>
					<form action="">
						<div class="time">
							<h3>Time: <span>30 Mins</span></h3></div>
							<form>
						<ul>
							<li>
								<p>Q1: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p> 
									<fieldset id="question_1">
										<label class="quid-radio">Option A
											<input type="radio" value="value1" name="question_1"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option B
											<input type="radio" value="value2" name="question_1"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option C
											<input type="radio" value="value2" name="question_1"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option D
											<input type="radio" value="value2" name="question_1"> <span class="checkmark"></span> </label>
									</fieldset>
								</li> 
							<li>
								<p>Q2: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p> 
									<fieldset id="question_2">
										<label class="quid-radio">Option A
											<input type="radio" value="value1" name="question_2"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option B
											<input type="radio" value="value2" name="question_2"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option C
											<input type="radio" value="value2" name="question_2"> <span class="checkmark"></span> </label>
										<label class="quid-radio">Option D
											<input type="radio" value="value2" name="question_2"> <span class="checkmark"></span> </label>
									</fieldset>
								</li> 
							</ul>
							<div class="pagination-main">
									<ul class="pagination">
										<li class="paginate_button page-item previous"> <a href="#" class="page-link">Previous</a> </li>
										<li class="paginate_button page-item active"> <a href="#" class="page-link">1</a> </li>
										<li class="paginate_button page-item"> <a href="#" class="page-link">2</a> </li>
										<li class="paginate_button page-item"> <a href="#" class="page-link">3</a> </li>
										<li class="paginate_button page-item"> <a href="#" class="page-link">4</a> </li>
										<li class="paginate_button page-item"> <a href="#" class="page-link">5</a> </li>
										<li class="paginate_button page-item next" i=""> <a href="#" class="page-link">Next</a> </li>
									</ul>
									</div>
									<button type="button" class="yel-btn"  data-dismiss="modal" aria-label="Close">Submit</button>
						</form>
					</form>
				</div>
			</div>
		</div>
		<!-- quiz-modal end -->
		<!-- submit-assignment-modal start -->
		<div class="modal fade submit-assignment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
						<p class="p-lg bold mb-1 mt-4">Are you sure you want to submit ABC File for Assignment XYZ?</p>
						<div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
					</div>
				</div>
			</div>
		</div>
		<!-- submit-assignment-modal end -->
		<!-- course-detail end -->
		<section class="signup-newsletter signup-newsletter-2">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 col-xl-5 text-center text-lg-left pb-3 pb-sm-3 pb-lg-0">
						<h4 class="pink-text lh-1">Sign Up For Newsletters</h4>
						<h5 class="p-lg yellow-text lh-1">Sign Up For Newsletter Today</h5> </div>
					<div class="col-12 col-lg-6 col-xl-7 d-flex align-items-center">
						<div class="newsletter-form w-100">
							<form action="" class="d-block d-sm-flex justify-content-center text-center text-lg-left">
								<input type="email" class="form-control" placeholder="Enter your email address">
								<button type="sumit" class="btn-default">Subscribe!</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="modal fade sharePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="grey-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-0 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 lh-1 grey-text">@Sammy96</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="position-relative mt-2"> <img src="images/share-post.png" alt="" class="img-fluid w-100">
							<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade shareVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="grey-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-0 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 lh-1 grey-text">@Sammy96</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="position-relative mt-2"> <img src="images/video.png" alt="" class="img-fluid w-100">
							<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade sharePostMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="row">
							<div class="col-md-6 pr-0">
								<div class="position-relative mr-1 mt-2"> <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-post w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-md-6 pl-0">
								<div class="position-relative mt-2"> <img src="images/multiple-post-2.png" alt="" class="img-fluid multiple-post w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade shareMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="row">
							<div class="col-md-6 pr-0">
								<div class="position-relative mr-1 mt-2"> <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-bg w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-md-6 pl-0">
								<div class="position-relative mt-2"> <img src="images/multiple-bg.png" alt="" class="img-fluid multiple-bg w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-md-4 pr-0">
								<div class="position-relative mr-1 mt-2"> <img src="images/multiple-1.png" alt="" class="img-fluid multiple-sm w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-md-4 px-0">
								<div class="position-relative mr-1 mt-2"> <img src="images/multiple-2.png" alt="" class="img-fluid multiple-sm w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-md-4 pl-0">
								<div class="position-relative mr-1 mt-2"> <img src="images/multiple-3.png" alt="" class="img-fluid multiple-sm w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade shareStack" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="row">
							<div class="col-12">
								<div class="position-relative mr-1 mt-2"> <img src="images/stack-1.png" alt="" class="img-fluid stack-bg w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-12">
								<div class="position-relative mt-2"> <img src="images/stack-2.png" alt="" class="img-fluid stack-bg w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
							<div class="col-12">
								<div class="position-relative mr-1 mt-2"> <img src="images/stack-1.png" alt="" class="img-fluid stack-bg w-100">
									<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
								</div>
							</div>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade editMultiple" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<p class="p-xs mt-2">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
						<div class="position-relative">
							<div class="row">
								<div class="col-md-6 pr-0">
									<div class="multiple-overlay mr-1 mt-1"> <img src="images/multiple-post-1.png" alt="" class="img-fluid multiple-bg w-100">
										<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
									</div>
								</div>
								<div class="col-md-6 pl-0">
									<div class="multiple-overlay mt-1"> <img src="images/multiple-bg.png" alt="" class="img-fluid multiple-bg w-100">
										<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
									</div>
								</div>
								<div class="col-md-4 pr-0">
									<div class="multiple-overlay mr-1 mt-1"> <img src="images/multiple-1.png" alt="" class="img-fluid multiple-sm w-100">
										<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
									</div>
								</div>
								<div class="col-md-4 px-0">
									<div class="multiple-overlay mr-1 mt-1"> <img src="images/multiple-2.png" alt="" class="img-fluid multiple-sm w-100">
										<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
									</div>
								</div>
								<div class="col-md-4 px-0">
									<div class="multiple-overlay mr-1 mt-1"> <img src="images/multiple-3.png" alt="" class="img-fluid multiple-sm w-100">
										<button class="btn times-btn p-0"><i class="fas fa-times-circle"></i></button>
									</div>
								</div>
							</div>
							<button class="grey-tag-edit border-0 p-0">Edit All</button>
						</div>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade createPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<textarea name="" class="border-0" id="" placeholder="What's on your mind, Sammy?" cols="30" rows="10"></textarea>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade createPostText" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<textarea name="" class="border-0" id="" cols="30" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</textarea>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade editPostText" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold">Create Post</h6>
						<hr>
						<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Sammy Aiden</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text" data-toggle="modal" data-target=".postAudience" data-dismiss="modal" aria-label="Close"><img src="images/globe.png" alt="" class="img-fluid mr-1">Public</p>
							</div>
						</div>
						<textarea name="" class="border-0" id="" cols="30" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</textarea>
						<hr>
						<div class="d-sm-flex align-items-center mt-3 justify-content-between">
							<div class="d-sm-flex align-items-center">
								<p class="grey-text mb-0">Add To Your Post</p>
								<div class="grey-pill ml-sm-3 mt-sm-0 mt-3"> <a href="#_"><i class="fas fa-image mr-1"></i>Image</a>
									<a href="#_"><img src="images/video-icon.png" alt="" class="img-fluid mb-1 mr-1"> <span class="mt-1">Video</span></a>
								</div>
							</div>
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade postAudience" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<h6 class="gray-text bold"><i class="fas fa-angle-left" data-target=".createPost" data-toggle="modal" data-dismiss="modal" aria-label="Close"></i> Post Audience</h6>
						<hr>
						<div class="media mb-3 align-items-center"> <img src="images/globe-circle.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Public</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text">Anyone on Bookgasm</p>
							</div>
						</div>
						<div class="media mb-3 align-items-center"> <img src="images/users-circle.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Friends</p>
								<p class="p-xs mb-0 d-flex align-items-center lh-1 grey-text">Your friends on Bookgasm</p>
							</div>
						</div>
						<div class="media align-items-center"> <img src="images/lock.png" alt="" class="img-fluid mr-2">
							<div class="media-body">
								<p class="mb-1 lh-1">Only Me</p>
							</div>
						</div>
						<hr>
						<div class="mt-3 text-right">
							<button class="btn-default mt-sm-0 mt-3 py-2 px-5" data-dismiss="modal" aria-label="Close">Post</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade removePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
						<p class="p-lg bold mb-1 mt-4">Are you sure you want to remove this post?</p>
						<div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade reportPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
						<p class="p-lg bold mb-1 mt-4">Are you sure you want to report this post?</p>
						<div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" data-target=".reportReason" data-toggle="modal" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade reportReason" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<p class="p-md gray-text mb-0">Reason For Reporting</p>
						<hr class="my-3">
						<form action="#_">
							<div>
								<input type="radio" name="" id="r1">
								<label for="r1" class="ml-2">Reason 1</label>
							</div>
							<div>
								<input type="radio" name="" id="r2">
								<label for="r2" class="ml-2">Reason 2</label>
							</div>
							<div>
								<input type="radio" name="" id="r3">
								<label for="r3" class="ml-2">Reason 3</label>
							</div>
							<div>
								<input type="radio" name="" id="r4">
								<label for="r4" class="ml-2">Reason 4</label>
							</div>
							<div>
								<input type="radio" name="" id="r5">
								<label for="r5" class="ml-2">Reason 5</label>
							</div>
							<textarea name="" id="" cols="30" class="site-textarea mt-3" class="p-3" placeholder="Enter reporting reason" rows="7"></textarea>
							<div class="text-right mt-3">
								<button class="btn-default" data-dismiss="modal" aria-label="Close">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade noOfLikes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<p class="p-md gray-text mb-0"><i class="far fa-thumbs-up"></i> Likes</p>
						<hr class="my-3">
						<div class="media mb-3 align-items-center">
							<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
							<div class="media-body">
								<p class="mb-0">Mark Carson</p>
							</div>
						</div>
						<div class="media mb-3 align-items-center">
							<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
							<div class="media-body">
								<p class="mb-0">Mark Carson</p>
							</div>
						</div>
						<div class="media mb-3 align-items-center">
							<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
							<div class="media-body">
								<p class="mb-0">Mark Carson</p>
							</div>
						</div>
						<div class="media mb-3 align-items-center">
							<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
							<div class="media-body">
								<p class="mb-0">Mark Carson</p>
							</div>
						</div>
						<div class="media mb-3 align-items-center">
							<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
							<div class="media-body">
								<p class="mb-0">Mark Carson</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade noOfShares" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<p class="p-md gray-text mb-0">Peopes Who Shared This</p>
						<hr class="my-3">
						<div class="d-flex justify-content-between mb-3 align-items-center">
							<div class="media align-items-center">
								<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
								<div class="media-body">
									<p class="mb-0">Mark Carson</p>
								</div>
							</div>
							<p class="p-xs mb-0 grey-text">02 sec ago</p>
						</div>
						<div class="d-flex justify-content-between mb-3 align-items-center">
							<div class="media align-items-center">
								<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
								<div class="media-body">
									<p class="mb-0">Mark Carson</p>
								</div>
							</div>
							<p class="p-xs mb-0 grey-text">02 sec ago</p>
						</div>
						<div class="d-flex justify-content-between mb-3 align-items-center">
							<div class="media align-items-center">
								<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
								<div class="media-body">
									<p class="mb-0">Mark Carson</p>
								</div>
							</div>
							<p class="p-xs mb-0 grey-text">02 sec ago</p>
						</div>
						<div class="d-flex justify-content-between mb-3 align-items-center">
							<div class="media align-items-center">
								<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
								<div class="media-body">
									<p class="mb-0">Mark Carson</p>
								</div>
							</div>
							<p class="p-xs mb-0 grey-text">02 sec ago</p>
						</div>
						<div class="d-flex justify-content-between mb-3 align-items-center">
							<div class="media align-items-center">
								<div class="position-relative mr-3"> <img src="images/user-sm.png" alt="" class="img-fluid"> <img src="images/like-sm.png" alt="" class="img-fluid like-sm"> </div>
								<div class="media-body">
									<p class="mb-0">Mark Carson</p>
								</div>
							</div>
							<p class="p-xs mb-0 grey-text">02 sec ago</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade noOfLikes" id="invite-friends" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-left">
						<p class="p-md gray-text mb-0"> Invite Friends To This Group</p>
						<hr class="my-3"> </div>
					<div class="row">
						<div class="col-md-6">
							<form action="">
								<div class="form-group mb-0">
									<input type="text" class="group-search mb-0" placeholder="Search For Friends"> </div>
							</form>
							<div class="row">
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-frnds">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<label class="container-checkboxx">
												<input type="checkbox" checked="checked"> <span class="checkmark-checkboxx"></span> </label>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-frnds">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<label class="container-checkboxx">
												<input type="checkbox" checked="checked"> <span class="checkmark-checkboxx"></span> </label>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-frnds">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<label class="container-checkboxx">
												<input type="checkbox" checked="checked"> <span class="checkmark-checkboxx"></span> </label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 bg-dark-gray">
							<div class="row">
								<div class="col-12 bg-darker-gray p-1">
									<p class="m-0 text-gr">1 Friend Selected</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-holder">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-holder">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="social-left-inner border-0 mt-3 inv-holder">
										<div class="media align-items-center"> <img src="images/sm-profile.png" alt="" class="img-fluid mr-2 avatar-sm">
											<div class="media-body">
												<p class="mb-0 lh-1">Mark Carson</p>
											</div>
										</div>
										<div>
											<button type="button" class="remove-inv"><i class="fas fa-times"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 text-right mt-4">
							<button class="button-yellow outline" data-dismiss="modal">Cancel</button>
							<button class="button-yellow new" data-dismiss="modal">Send Invites</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade leave-group" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content site-modal"> <i class="far fa-times-circle close modal-close" data-dismiss="modal" aria-label="Close"></i>
					<div class="text-center"> <img src="images/exclamation.png" alt="" class="img-fluid">
						<p class="p-lg bold mb-1 mt-4">Are you sure you want to leave this group?</p>
						<div class="d-flex justify-content-center"> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 mr-2 px-5 red-btn">No</a> <a href="#_" data-dismiss="modal" aria-label="Close" class="btn-default py-2 mt-3 px-5 green-btn">Yes</a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="pink-footer">
			<?php include('footer.php') ?>
		</div>