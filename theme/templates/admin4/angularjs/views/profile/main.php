<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
	<li>
		<a href="#">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		User Profile
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->

<!-- BEGIN PAGE CONTENT-->
<div class="row" ng-controller="UserProfileController">
	<div class="col-md-12">
		<!-- BEGIN PROFILE SIDEBAR -->
		<div class="profile-sidebar">
			<!-- PORTLET MAIN -->
			<div class="portlet light profile-sidebar-portlet">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="../../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
					<button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<?php
					$nis = $_GET['nis'];
				?>
				<div class="profile-usermenu">
					<ul class="nav">
						<li ng-class="{active: $state.includes('profile.dashboard')}">
							<a ui-sref="profile.dashboard?nis=<?php echo $nis; ?>">
							<i class="icon-home"></i>
							Overview </a>
						</li>
						<li ng-class="{active: $state.includes('profile.account')}">
							<a ui-sref="profile.account?nis=<?php echo $nis; ?>">
							<i class="icon-settings"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
			<!-- END PORTLET MAIN -->
		</div>
		<!-- END BEGIN PROFILE SIDEBAR -->
		<!-- BEGIN PROFILE CONTENT -->
		<div ui-view class="profile-content fade-in-up"> 
		</div>
		<!-- END PROFILE CONTENT -->
	</div>
</div>
<!-- END PAGE CONTENT-->