<div class="app-sidebar sidebar-shadow">
				<div class="app-header__logo">
					<div class="logo-src"></div>
					<div class="header__pane ml-auto">
						<div>
							<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
								data-class="closed-sidebar">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="app-header__mobile-menu">
					<div>
						<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
				<div class="app-header__menu">
					<span>
						<button type="button"
							class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
				</div>
				<div class="scrollbar-sidebar">
					<div class="app-sidebar__inner">
						<ul class="vertical-nav-menu">
							<li class="app-sidebar__heading">Menu</li>
							<li>
								<!-- <a href="index.html" class="mm-active"> -->
								<a href="<?php echo site_url('dashboard');?>" class="mm-<?php echo $this->uri->segment(1) == 'dashboard' ? 'active': '' ?>" >
									<i class="metismenu-icon pe-7s-rocket"></i>
									Dashboard
								</a>
							</li>
							<li>
								<!-- <a href="index.html" class="mm-active"> -->
								<a href="<?php echo site_url('form');?>" class="mm-<?php echo $this->uri->segment(1) == 'form' ? 'active': '' ?>" >
									<i class="metismenu-icon pe-7s-eyedropper"></i>
									Form
								</a>
							</li>
							<li>
								<!-- <a href="index.html" class="mm-active"> -->
								<a href="<?php echo site_url('table');?>" class="mm-<?php echo $this->uri->segment(1) == 'table' ? 'active': '' ?>" >
									<i class="metismenu-icon pe-7s-display2"></i>
									Table
								</a>
							</li>
							<li>
								<!-- <a href="index.html" class="mm-active"> -->
								<a href="<?php echo site_url('icon');?>" class="mm-<?php echo $this->uri->segment(1) == 'icon' ? 'active': '' ?>" >
									<i class="metismenu-icon pe-7s-diamond"></i>
									Icon
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>