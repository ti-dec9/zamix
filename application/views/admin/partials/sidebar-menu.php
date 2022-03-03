        <div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<a href="javascript:void(0);">
							<img src="<?php echo base_url(); ?>assets/admin/images/Untitled-1.jpg" alt="">
						</a>
					</div>
					<h5 class="name"><span class="font-w400">Olá,</span> <?php echo $name; ?></h5>
					<p class="email"><?php echo $email; ?></p>
				</div>
				<ul class="metismenu" id="menu">
					<!-- <li class="nav-label first">MENU</li> -->
                    <li><a href="<?php echo base_url('admin/dashboard'); ?>" aria-expanded="false">
							<i class="flaticon-096-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li class="nav-label">Institucional</li>
					<li>
                        <a href="<?php echo base_url('admin/institucional/sobre'); ?>" class="ai-icon" aria-expanded="false">
							<i class="flaticon-165-menu"></i>
							<span class="nav-text">Sobre</span>
						</a>
					</li> 	
					<!-- <li>
                        <a href="javascript:void(javascript:void()" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-help-1"></i>
							<span class="nav-text">Dúvidas</span>
						</a>
					</li> --> 	
					<li>
                        <a href="<?php echo base_url('admin/institucional/transparencia'); ?>" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-equal"></i>
							<span class="nav-text">Transparência</span>
						</a>
					</li> 	
					<li>
                        <a href="javascript:void()" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-star"></i>
							<span class="nav-text">Soluções</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url('admin/institucional/solucoes/paravoce'); ?>">Para Você</a></li>
							<li><a href="<?php echo base_url('admin/institucional/solucoes/paraempresa'); ?>">Para Empresa</a></li>
							<li><a href="<?php echo base_url('admin/institucional/solucoes/linkdedicado'); ?>">Link Dedicado</a></li>
							<!-- <li><a href="#">Benefícios</a></li> -->
						</ul>
					</li>										
					<li class="nav-label">Planos</li>
					<li>
						<a href="<?php echo base_url('admin/planos/paravoce'); ?>" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-news"></i>
							<span class="nav-text">Para Você</span>
						</a>                        
                    </li>                    
					<li>
						<a href="<?php echo base_url('admin/planos/paraempresa'); ?>" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-network-3"></i>
							<span class="nav-text">Para Empresa</a>
						</a>                        
                    </li>
					<li class="nav-label">Notícias</li>
					<li>
						<a href="<?php echo base_url('admin/blog'); ?>" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-news"></i>
							<span class="nav-text">Blog</span>
						</a>                        
                    </li> 					                   
					<!-- <li class="nav-label">Formulários</li>
					<li>
						<a href="javascript:void()" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-archive"></i>
							<span class="nav-text">Contato</span>
						</a>                        
                    </li>                
					<li class="nav-label">Configurações</li>
					<li>
						<a href="javascript:void()" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Usuários</span>
						</a>                        
                    </li>  -->             
                </ul>
				<div class="copyright">
					<p><strong>Zamix Multiplay | Painel Administrativo</strong> © 2021 Todos os direitos reservados</p>
					<p class="fs-12">Desenvolvido <span class="heart"></span> por DEC9</p>
				</div>
			</div>
        </div>