@include('admin.include.adminHeader')

    <!-- right sidebar statrs here -->
    <div class="right_sidebar">
        <div class="right_content">
        	<div class="dashboard_contant pt-5 pb-5">
        		<div class="container">
        			<h2 class="text-uppercase mb-4 base_color">Dashboard</h2>
        			<div class="row">
        				<div class="col-md-3">
        					<div class="col_selector dashboard_total text-center mb-4" style="background-color: #08a5c5;">
        						<div class="icons pb-4 pt-4">
        							<i class="fa fa-user-o fz60"></i>
        						</div>
        						<p class="fz40 mb-0"><strong>{{ $data['total_athlete'] }}</strong></p>
        						<p class="mb-0 pb-3 text-uppercase pl-2 pr-2"><strong>Total Athletes</strong></p>
        					</div>
        				</div>
        				<div class="col-md-3">
        					<div class="col_selector dashboard_total text-center mb-4" style="background-color: #d8a354;">
        						<div class="icons pb-4 pt-4">
        							<i class="fa fa-user fz60"></i>
        						</div>
        						<p class="fz40 mb-0"><strong>{{ $data['total_organiztns'] }}</strong></p>
        						<p class="mb-0 pb-3 text-uppercase pl-2 pr-2"><strong>Total Sports Organisations</strong></p>
        					</div>
        				</div>
        				<div class="col-md-3">
        					<div class="col_selector dashboard_total text-center mb-4" style="background-color: #001f38;">
        						<div class="icons pb-4 pt-4">
        							<i class="fa fa-thumbs-o-up fz60"></i>
        						</div>
        						<p class="fz40 mb-0"><strong>{{ $data['total_camps_clnc'] }}</strong></p>
        						<p class="mb-0 pb-3 text-uppercase pl-2 pr-2"><strong>Total Camp/Clinics</strong></p>
        					</div>
        				</div>
        				<div class="col-md-3">
        					<div class="col_selector dashboard_total text-center mb-4" style="background-color: #036529;">
        						<div class="icons pb-4 pt-4">
        							<i class="fa fa-user fz60"></i>
        						</div>
        						<p class="fz40 mb-0"><strong>{{ $data['total_tornmts'] }}</strong></p>
        						<p class="mb-0 pb-3 text-uppercase pl-2 pr-2"><strong>Total Tournaments</strong></p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!-- / right sidebar ends here -->
@include('admin.include.adminFooter')