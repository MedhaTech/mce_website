
    <div class="main-content">
      <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.png">
        <div class="container pt-120 pb-120">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white"><?=$activeMenu;?></h2>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                  <li class="active text-gray-silver">About Us</li>
                    <li class="active text-gray-silver">Other Committee</li> 
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-9 pull-right flip sm-pull-none">
              <div class="row mt-10">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay="0.5s">
                  <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                     <?=$activeMenu;?></span></h3>
                    
							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<div class="testimonial testimonial-style-2">
										<blockquote>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
										</blockquote>
										<div class="testimonial-arrow-down"></div>
										<div class="testimonial-author">
											<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
											<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
										</div>
									</div>
								</div>
								<div>
									<div class="testimonial testimonial-style-2">
										<blockquote>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</blockquote>
										<div class="testimonial-arrow-down"></div>
										<div class="testimonial-author">
											<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
											<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
										</div>
									</div>
								</div>
							</div>
						  <h4>Internal Quality Assurance Cell (IQAC)</h4>
						  <p class="text-justify">Malnad College of Engineering has established the Internal Quality Assurance Cell (IQAC) as a quality sustenance division as per the guidelines of UGC. The cell is intended for planning, guiding and monitoring quality assurance and quality enhancement activities of the institute. It will channelize and standardize the efforts and measures of the institution towards academic excellence. The cell documents and reports various activities of the college for various higher education requirements. The IQAC regularly undertake few activities such as Academic Audit, preparation of Annual Report, participation in NIRF, NAAC, NBA, Affiliations and all other quality audit process of the institute. The cell is constituted under the chairmanship of Principal with a senior faculty as a Coordinator. It consists of management representative, eminent persons from industry & academia along with faculty from MCE nominated by the principal.</p>
                     <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">S.No</th>
                            <th width="5%">Photo</th>
                             <th width="20%">Name </th>
                            <th width="20%">Designation& Department</th>
                            <th width="40%">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Principal.jpg'?>" alt="Principal"></td>
                            <td>Dr. A. J. Krishnaiah</td>
                            <td>Principal</td>
                            <td>Chairperson</td>
                        </tr>
                            <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Sri. S.G. Sridhara.jpg'?>" alt="Sri. S.G. Sridhara"></td>
                            <td>Sri. S.G. Sridhara </td>
                            <td>Treasurer, MTES®</td>
                            <td>Nominee of the BoG</td>
                        </tr>
                           </tr>
                            <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr.N.S. Jyothi.jpg'?>" alt="Dr.N.S. Jyothi"></td>
                            <td>Dr.N.S. Jyothi </td>
                            <td>Professor,HOD Department of EEE </td>
                            <td>Professor Nominated from Department of EEE</td>
                            <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. Srinath M S.jpg'?>" alt="Dr. Srinath M S"></td>
                            <td>Dr. M.S. Srinath</td>
                            <td>Professor, HOD Department of CS&BS and Dean Research</td>
                            <td>Professor Nominated from Department of Computer Science and Business Studies</td>
                        </tr>
                             <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. Ezhil Vannan.jpg'?>" alt="Dr. Ezhil Vannan"></td>
                            <td>Dr.EzhilVannan</td>
                            <td>Professor, HOD Department of Mechanical Engineering</td>
                            <td>Professor Nominated from Department of Mechanical Engineering</td>
                        </tr>
                              <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. A. Geetha Kiran.jpg'?>" alt="Dr. A. Geetha Kiran"></td>
                            <td>Dr. A. Geethakiran</td>
                            <td>Professor, HOD Department of Computer Science and Engineering</td>
                            <td>Professor Nominated from Department of Computer Science and Engineering</td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. H.J. Amarendra,.jpg'?>" alt="Dr. H.J. Amarendra"></td>
                            <td>Dr. Amarendra H.J</td>
                            <td>Professor, Department of Mechanical Engineering</td>
                            <td>Dean (P&D)</td>
                        </tr>
                             <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/chandrika.JPG'?>" alt="chandrika"></td>
                            <td>Dr. J. Chandrika</td>
                            <td>Professor, HOD Department of Information Science and Engineering</td>
                            <td>Dean (Academics)</td>
                        </tr>
                                  <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. H.S.Narashimhan .jpg'?>" alt="Dr. H.S.Narashimhan"></td>
                            <td>Dr. H. S. Narasimhan</td>
                            <td>Professor, Department of Civil Engineering</td>
                            <td>Dean(Student Affairs)</td>
                             <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr. Rajanna.S.jpg'?>" alt="Dr. Rajanna.S"></td>
                            <td>Dr. S. Rajanna</td>
                            <td>Professor, Department of Electrical and Electronics Engineering</td>
                            <td>Dean (Examinations)</td>
                        </tr>
                              <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/neeakantappa.jpg'?>" alt="neeakantappa"></td>
                            <td>Prof. B. B. Neelakantappa</td>
                            <td>Professor, Department of Computer Science and Engineering</td>
                            <td>Training & Placement Officer</td>
                        </tr>
                                <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Smt. H.R. Kumuda .jpg'?>" alt="Smt. H.R. Kumuda "></td>
                            <td>Mrs. H. R. Kumuda</td>
                            <td>Registrar</td>
                            <td>Office of MCE</td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/'?>" alt=" "></td>
                            <td>Mr. Sucheth . S</td>
                            <td>Senior Student Representative</td>
                            <td> - </td>
                        </tr>
                                 <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/'?>" alt=" "></td>
                            <td>Mrs. Annapoorna B.M</td>
                            <td>Parent Representative</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/'?>" alt=" "></td>
                            <td>Mr. Praveen H.N</td>
                            <td>Senior Engineer, Mercedes Benz R & D White Field, Bangalore praveenkumarhn@gmail.com</td>
                            <td> Nominated from R&D Lab </td>
                        </tr>
                          <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/'?>" alt=" "></td>
                            <td>Dr. Ramesh M.R</td>
                            <td>Associate Professor, Dept. of Mechanical Engg, NITK,Surathkal  rameshmr [at] nitk.edu.in</td>
                            <td> Nominated from IIT/NIT </td>
                        </tr>
                             <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/'?>" alt=" "></td>
                            <td>Mr.Ramesh T.R.</td>
                            <td>Assistant Consultant TCS, SEZ Unit –II, Bangalore ramesh.tr1@tcs.com</td>
                            <td>Nominated from Industry</td>
                        </tr>
                                <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Manohara I V.jpg'?>" alt=" Manohara I V"></td>
                            <td>Mr.I.V.Manohar</td>
                            <td>Foremen/Programmer, Department of Electronics and Communication Engineering</td>
                            <td>Nominated from Department of Electronics and Communication Engineering</td>
                        </tr>
                              <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Thilak D K.jpg'?>" alt="Thilak D K.jpg "></td>
                            <td>Mr.Tilak D.K</td>
                            <td>Instructor, Department of Mechanical Engineering</td>
                            <td>Nominated from Department of Mechanical Engineering</td>
                        </tr>
                              <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Mrs. S. Madhu.jpg'?>" alt="Mrs. S. Madhu "></td>
                            <td>Mrs. S. Madhu</td>
                            <td>Admin. Office</td>
                            <td>Office of Mce</td>
                        </tr>
                        <tr>
                            <td><?=$i++;?></td>
                            <td> <img class="img-responsive img-fullwidth img-thumbnail" src="<?=base_url().'assets/images/Administration/Dr.Y.M.Shashidhara.jpg'?>" alt="Dr.Y.M.Shashidhara.jpg"></td>
                            <td>Dr.Y.M.Shashidhara</td>
                            <td>Professor, Department of Automobile Engineering</td>
                            <td>Coordinator</td>
                        </tr>
                    </tbody>
                </table>
                   
                </div>


              </div>

            </div>
            <div class="col-md-3">
            <?php
                        $sideBar = sideBar($mainMenu, $parentMenu, $activeMenu);
                        print_r($sideBar);
                    ?>
            

            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->