 <section id="container" class="">
 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Laporan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Secara Detail</a></li>                          
                          <li><a class="" href="form_validation.html">Secara Global</a></li>
                      </ul>
                  </li>       
                  
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Desa</span>
                      </a>
                  </li>
                                                       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Keluhan</span>
                         
                      </a>
                     
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
       </section>

 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Form Tambah Desa</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Desa</li>
            <!-- <li><i class="fa fa-files-o"></i>Form Tambah Desa</li> -->
          </ol>
        </div>
      </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form Desa
                          </header>
                          <div class="panel-body">
                              <div class="form" >
                                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Kecamatan <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="fullname" minlength="5" placeholder="Masukkan Nama Kecamatan" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Nama Desa <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email" placeholder="Masukkan Nama Desa" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Nama Lurah/Kepala Desa <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="url" name="url" placeholder="Masukkan Nama Lurah/Kepala Desa"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">No Hp <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="subject" minlength="5" placeholder="Masukkan No Hp" type="text" required />
                                          </div>
                                      </div>    
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Nama Admin Desa <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="url" name="url" placeholder="Masukkan Nama Admin Desa"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">No Hp <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="subject" minlength="5" placeholder="Masukkan No Hp" type="text" required />
                                          </div>
                                      </div>      
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Alamat Kantor Desa <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="subject" minlength="5" placeholder="Masukkan Alamat Kantor Desa" type="text" required />
                                          </div>
                                      </div>                                       
                                      <!-- <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2"></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                          </div>
                                      </div> -->
                                      
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Detail Koneksi
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Jenis Koneksi <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <div class="radios">
                                                  <label class="label_radio" for="radio-01">
                                                      <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Wireless(Radio)
                                                  </label>
                                                  <label class="label_radio" for="radio-02">
                                                      <input name="sample-radio" id="radio-02" value="1" type="radio" /> Speedy
                                                  </label>
                                              </div>
                                            </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Status Pembayaran <span class="required">*</span></label>
                                              <div class="col-lg-10" >
                                                  <select class="form-control m-bot15" >
                                                      <option><i>---Pilih Status Pembayaran---</i></option>
                                                      <option>Bayar</option>
                                                      <option>Belum Bayar</option>
                                                  </select>
                                              </div>
                                              <!-- <input class=" form-control" id="address" name="address" type="text" /> -->
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Simpan</button>
                                              <button class="btn btn-default" type="button">Batal</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->