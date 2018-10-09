   				<!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="<?php echo base_url();?>home"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> MASTER DATA<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
						 <?php 
						 
						    $menu = $this->db->query("SELECT a.*,b.* from hak_akses_admin a
							INNER JOIN menu b
							ON a.id_menu=b.id where a.id_admin='".$this->session->userdata("id")."' and b.kategori='1' ")->result();
						
						
						
							
							 if(count($menu) >0){
								 
								 foreach($menu as $val){
									 
									 ?><li> <a href="<?php echo site_url($val->url); ?>"><?php echo strtoupper($val->nama_menu); ?></a></li><?php
									 
								 }
							 }
							 
							 ?>
                           
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>CONFIG<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <?php 
						 
						    $menu = $this->db->query("SELECT a.*,b.* from hak_akses_admin a
							INNER JOIN menu b
							ON a.id_menu=b.id where a.id_admin='".$this->session->userdata("id")."' and b.kategori='2' ")->result();
						
						
						
							
							 if(count($menu) >0){
								 
								 foreach($menu as $val){
									 
									 ?><li> <a href="<?php echo site_url($val->url); ?>"><?php echo strtoupper($val->nama_menu); ?></a></li><?php
									 
								 }
							 }
							 
							 ?>
                           
							
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i>TANSAKSI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <?php 
						 
						    $menu = $this->db->query("SELECT a.*,b.* from hak_akses_admin a
							INNER JOIN menu b
							ON a.id_menu=b.id where a.id_admin='".$this->session->userdata("id")."' and b.kategori='3' ")->result();
						
						
						
							
							 if(count($menu) >0){
								 
								 foreach($menu as $val){
									 
									 ?><li> <a href="<?php echo site_url($val->url); ?>"><?php echo strtoupper($val->nama_menu); ?></a></li><?php
									 
								 }
							 }
							 
							 ?>
                           
                        </ul>
                    </li>
                        <!-- third-level-items -->
					<li>
                        <a href="<?php echo site_url("transaksi/laporan"); ?>"><i class="fa fa-edit fa-fw"></i>LAPORAN</a>
                    </li>
                        <!-- second-level-items -->

                        <!-- second-level-items -->
                		<!-- end side-menu -->
              </div>
            <!-- end sidebar-collapse -->
            