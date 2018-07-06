@php($category_count = \App\Model\Category::count())
@php($subcategory_count = \App\Model\SubCategory::count())
@php($type_count = \App\Model\Type::count())
@php($subtype_count = \App\Model\Subtype::count())
@php($user_count = \App\Model\User::count())
@php($report_count = \App\Model\ReportAdvert::count())


<div class="sidebar">
	<div class="scrollbar-inner sidebar-wrapper">
		<div class="user">
			<div class="photo">
				<img src="{{asset('assets/img/profile.jpg')}}">
			</div>
			<div class="info">
				<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
					<span>
						{{auth()->user()->username}}
						<span class="user-level">Administrator</span>
						
					</span>
				</a>
				<div class="clearfix"></div>
			</div>
		</div>
		<ul class="nav">
			<li class="nav-item active">
				<a href="{{url('admin/dashboard')}}">
					<i class="la la-dashboard"></i>
					<p>Dashboard</p>
					<span class="badge badge-count"></span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('admin/manage/users')}}">
					<i class="la la-users"></i>
					<p>Manage Users</p>
					<span class="badge badge-count">{{$user_count}}</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('admin/manage/categories')}}">
					<i class="la la-table"></i>
					<p>Categories</p>
					<span class="badge badge-count">{{$category_count}}</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('admin/manage/subcategories')}}">
					<i class="la la-keyboard-o"></i>
					<p>SubCategories</p>
					<span class="badge badge-count">{{$subcategory_count}}</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('admin/manage/types')}}">
					<i class="la la-th"></i>
					<p>Types</p>
					<span class="badge badge-count">{{$type_count}}</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/subtypes')}}">
					<i class="la la-th"></i>
					<p>SubTypes</p>
					<span class="badge badge-count">{{$subtype_count}}</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/adverts/reports')}}">
					<i class="la la-bar-chart"></i>
					<p>Reports</p>
					<span class="badge badge-count">{{$report_count}}</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/sellers/applications')}}">
					<i class="la la-users"></i>
					<p>Sellers Application</p>
					<span class="badge badge-count">{{$user_count}}</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/subscriptions')}}">
					<i class="la la-bar-chart"></i>
					<p>Subscriptions</p>
					<span class="badge badge-count">6</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/transactions')}}">
					<i class="la la-bar-chart-o"></i>
					<p>Transactions</p>
					<span class="badge badge-count">6</span>
				</a>
			</li>
			<!-- <li class="nav-item">
				<a href="notifications.html">
					<i class="la la-bell"></i>
					<p>Notifications</p>
					<span class="badge badge-success">3</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="typography.html">
					<i class="la la-font"></i>
					<p>Typography</p>
					<span class="badge badge-danger">25</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="icons.html">
					<i class="la la-fonticons"></i>
					<p>Icons</p>
				</a>
			</li> -->
			
		</ul>
	</div>
</div>