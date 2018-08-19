@php($category_count = \App\Model\Category::count())
@php($subcategory_count = \App\Model\SubCategory::count())
@php($type_count = \App\Model\Type::count())
@php($subtype_count = \App\Model\Subtype::count())
@php($user_count = \App\Model\User::count())
@php($report_count = \App\Model\ReportAdvert::count())
@php($advert_count = \App\Model\Advert::count())
@php($seller_application_count = \App\Model\SellerApplication::count())

<div class="sidebar">
	<div class="scrollbar-inner sidebar-wrapper">
		<div class="user">
			<div class="photo">
				<img src="{{auth()->user()->profile->avatar == null ? '/img/avatar/avatar.png' : auth()->user()->profile->avatar}}">
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
				<a href="{{url('admin/manage/adverts')}}">
					<i class="la la-bar-chart"></i>
					<p>Adverts</p>
					<span class="badge badge-count">{{$advert_count}}</span>
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
					<span class="badge badge-count">{{$seller_application_count}}</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="{{url('admin/manage/mail')}}">
					<i class="la la-envelope"></i>
					<p>Mail Users</p>
					<span class="badge badge-count"></span>
				</a>
			</li>

			

			<!-- <li class="nav-item">
				<a href="{{url('admin/manage/transactions')}}">
					<i class="la la-bar-chart-o"></i>
					<p>Transactions</p>
					<span class="badge badge-count">6</span>
				</a>
			</li> -->
		
			
		</ul>
	</div>
</div>