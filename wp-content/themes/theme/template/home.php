<?php /* Template Name: Home */ ?>
<?php get_header() ?>
<main>
    <div id="fb-root"></div> 
    <div class="bg-fix"></div>
    <section id="top">
        <div class="content">
            <div class="container">
                <div class="w-top"> 
                    <div class="logo text-center">
                        <h1>
                            <a href="<?php echo home_url( '/' ); ?>">
                                <img src="<?php the_field( 'icon' ); ?>">
                                <div class="htxt">
                                    <p class="tit_vxut wow fadeInDown"><?php the_field( 'title_sec_1' ); ?></p>
                                    <p class="ts_vxut wow fadeInUp"><?php the_field( 'title_sec_2' ); ?></p>
                                </div>
                            </a>            
                        </h1> 
                    </div>
                </div>
               
            </div>
        </div> 
    </section>
    <section id="txt_top">
        <div class="container">
            <div class="col-md-12">
                <div id="jb_vn" style="margin-bottom: 40px;">
                    <div class="container">
                        <div class="jp_tit text-center p-0">
                            <p class="jp_tit_vn"><?php the_field( 'title_1_sec_1' ); ?></p>
                            <p class="jp_tit_jp"><?php the_field( 'title_2_sec_2' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-slogan mb-0">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="slo_left">
                            <p class="slo_cam"> CAM KẾT</p>
                            <p class="slo_100"> 100%</p>
                        </div> 
                        <p class="star wow zoomInLeft" data-wow-delay="1s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40.195" viewBox="0 0 22.55 22.195">
                              <g id="icon" transform="translate(0.75 0.75)">
                                <path id="star_大" d="M260.917,542.35c-.643-5.352-2.214-7.089-7-7.776,4.786-.689,6.357-2.428,7-7.78.642,5.352,2.213,7.09,7,7.78-4.788.687-6.359,2.424-7,7.776" transform="translate(-246.918 -521.794)" fill="#ffd83c" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"/>
                                <path id="star_小" d="M258.417,536.794c-.413-3.441-1.423-4.557-4.5-5,3.077-.443,4.087-1.561,4.5-5,.413,3.441,1.423,4.558,4.5,5-3.078.442-4.088,1.558-4.5,5" transform="translate(-253.918 -526.794)" fill="#fff" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                              </g>
                            </svg>
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <p class="slo_content">
                            <?php the_field( 'desc_2_sec_2' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contribution">
        <div class="container">
            <div class="title text-center">
                <h2 class="rock"><span class="line"><?php the_field( 'title_2_sec_3' ); ?></span></h2>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <div class="title text-right">
                    <div class="abs-cir cir-5 wow fadeInRight wHighlight" data-wow-delay=".2s">
                        <img src="<?php echo __BASE_URL__ ?>/images/top/cir-5.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-5.png, images/top/cir-5@2x.png 2x" alt="">
                    </div>
                    <div class="abs-cir cir-6 wow fadeInLeft wHighlight" data-wow-delay=".2s">
                        <img src="<?php echo __BASE_URL__ ?>/images/top/cir-6.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-6.png, images/top/cir-6@2x.png 2x" alt="">
                    </div> 
                </div>
            </div>
            <div class="list-ctb">
                <div class="row">
                    <?php $index = 0; ?>
                    <?php while ( has_sub_field('list_tieuchi' ) ) : ?>
                        <?php $index = $index + 1; ?>
                        <div class="col-md-4 col-sm-4 col-6 item wow zoomIn wHighlight" data-wow-delay=".<?php echo $index ?>s">
                            <div class="item">
                                <a href="javascript:void(0)">
                                    <div class="avarta">
                                        <img src="<?php the_sub_field( 'image' ); ?>" class="img-fluid" alt="">
                                        <div class="caption">
                                            <div class="info text-center">
                                                <span class="d-block"><?php the_sub_field( 'desc' ); ?></span>
                                            </div>
                                        </div>
                                    </div>                  
                                </a>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    
    <section id = "loiich">
        <div class="container">
            <div class="title text-left">
                <div class="abs-cir cir-10 wow fadeInRight wHighlight" data-wow-delay=".2s">
                    <img src="<?php echo __BASE_URL__ ?>/images/top/cir-10.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-10.png, <?php echo __BASE_URL__ ?>/images/top/cir-10@2x.png 2x" alt="">
                </div> 
                <h2 class="rock"><span class="line">Lợi ích</span></h2>
            </div>
        </div>
        <?php $loiich = get_field( 'loi_ich' ); ?>
        <div class="loiich01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="loiich_content">
                            <p class="flag"><?php echo @$loiich['title'] ?></p>
                            <ul>
                                <?php if (!empty(@$loiich['content_loiich']) ): ?>
                                    <?php foreach (@$loiich['content_loiich'] as $value): ?>
                                        <li class="tick"> <?php echo $value['content'] ?></li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="loiich_content">
                            <p class="flag"><?php echo @$loiich['title_copy'] ?></p>
                            <ul>
                                <?php if (!empty(@$loiich['content_loiich_2']) ): ?>
                                    <?php foreach (@$loiich['content_loiich_2'] as $value): ?>
                                        <li class="tick"> <?php echo $value['content'] ?></li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id = "quyenloi">
        <div class="container">
            <div class="title text-right">
                <h2 class="rock"><span class="line">Quyền lợi</span></h2>
            </div>
        </div>
        <?php $loiich = get_field( 'quyenloi' ); ?>
         <div class="loiich01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="loiich_content">
                                <p class="flag"><?php echo @$loiich['title'] ?></p>
                                <ul>
                                    <?php if (!empty(@$loiich['content_loiich']) ): ?>
                                        <?php foreach (@$loiich['content_loiich'] as $value): ?>
                                            <li class="tick"> <?php echo $value['content'] ?></li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="loiich_content">
                                <p class="flag"><?php echo @$loiich['title_copy'] ?></p>
                                <ul>
                                    <?php if (!empty(@$loiich['content_loiich_2']) ): ?>
                                        <?php foreach (@$loiich['content_loiich_2'] as $value): ?>
                                            <li class="tick"> <?php echo $value['content'] ?></li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="chitieu">
        <div class="container">
            <div class="title text-left">
                <h2 class="rock"><span class="line">Chỉ tiêu tuyển sinh</span></h2>
            </div>
        </div>
        <div class="chi_body">
            <div class="container">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table content">
                            <thead>
                                <tr>
                                    <th scope="col">Tên ngành</th>
                                    <th scope="col">Mã ngành</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Mã tổ hợp môn</th>
                                </tr>
                              </thead>
                              <tbody>
                                    <?php while ( has_sub_field('chi_tieu_tuyen_sinh' ) ) : ?>
                                        <tr>
                                            <th scope="row"><?php the_sub_field( 'ten_nganh' ); ?></th>
                                            <td><?php the_sub_field( 'ma_nganh' ); ?></td>
                                            <td><?php the_sub_field( 'so_luong' ); ?></td>
                                            <td><?php the_sub_field( 'ma_to_hop_mon' ); ?></td>
                                        </tr>
                                    <?php endwhile ?>
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pt_ts">
        <div class="container">
            <div class="title text-right">
                <h2 class="rock"><span class="line">Phương thức xét tuyển</span></h2>
            </div>
        </div>
        <?php $loiich = get_field( 'phuong_thuc_tuyen_sinh' ); ?>
         <div class="loiich01">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="loiich_content">
                                <p class="flag"><?php echo @$loiich['title'] ?></p>
                                <ul>
                                    <?php if (!empty(@$loiich['content_loiich']) ): ?>
                                        <?php foreach (@$loiich['content_loiich'] as $value): ?>
                                            <li class="tick"> <?php echo $value['content'] ?></li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="loiich_content">
                                <p class="flag"><?php echo @$loiich['title_copy'] ?></p>
                                <ul>
                                    <?php if (!empty(@$loiich['content_loiich_2']) ): ?>
                                        <?php foreach (@$loiich['content_loiich_2'] as $value): ?>
                                            <li class="tick"> <?php echo $value['content'] ?></li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recruit">
        <div class="container">
            <div class="title text-left">
                <div class="abs-cir cir-10 wow fadeInRight wHighlight" data-wow-delay=".2s">
                    <img src="<?php echo __BASE_URL__ ?>/images/top/cir-10.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-10.png, <?php echo __BASE_URL__ ?>/images/top/cir-10@2x.png 2x" alt="">
                </div> 
                <h2 class="rock rec_ti"><span class="line">Cách thức đăng ký xét tuyển</span></h2>
            </div>
            <div class="ctn-recruit">
                <div class="abs-cir cir-12 wow fadeInLeft wHighlight" data-wow-delay=".2s">
                    <img src="<?php echo __BASE_URL__ ?>/images/top/cir-12.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-12.png, <?php echo __BASE_URL__ ?>/images/top/cir-12@2x.png 2x" alt="">
                </div> 
                <div class="avarta text-center wow zoomIn wHighlight" data-wow-delay=".2s">
                    <a href="javascript:void(0)">
                        <img src="<?php echo __BASE_URL__ ?>/images/top/rct.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="info wow fadeInLeft wHighlight" data-wow-delay=".2s">
                    <?php $index = 0; ?>
                    <?php while ( has_sub_field('dang_khi_xet_tuyen' ) ) : ?>
                        <?php $index = $index + 1; ?>
                        <?php if (!empty(get_sub_field( 'link' ))): ?>
                            <div class="desc"><a href="https://www.vxut.edu.vn/dang-ky-xet-tuyen" target="_blank"><?php echo $index ?>　・ <?php the_sub_field( 'content' ); ?> </a></div>
                        <?php else: ?>
                            <div class="desc"><?php echo $index ?>　・ <?php the_sub_field( 'content' ); ?></div>
                        <?php endif ?>
                        
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <section id="hp_hb">
        <div class="container">
            <div class="title text-right mb-5">
                <div class="abs-cir cir-10 wow fadeInRight wHighlight" data-wow-delay=".2s"></div> 
                <h2 class="rock"><span class="line">Học phí - Học bổng</span></h2>
            </div>
        </div>
        <div class="hp_hb_bg">
            <div class="abs-cir cir-12 wow fadeInLeft wHighlight" data-wow-delay=".2s">
                <img src="<?php echo __BASE_URL__ ?>/images/top/cir-12.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-12.png, 
                <?php echo __BASE_URL__ ?>/images/top/cir-12@2x.png 2x" alt="">
            </div>
            <div class="container">
                <ul>
                    <?php while ( has_sub_field('hoc_phi_hoc_bong' ) ) : ?>
                        <li class="tick"><?php the_sub_field( 'content' ); ?></li>
                    <?php endwhile ?>
                </ul>
            </div>
        </div>
    </section>
    <section id="wpb_wrapper">
        <div class="container">
            <div class="title text-right mb-5">
                <h2 class="rock"><span class="line">Sinh viên chuẩn Nhật</span> </h2>
                <div class="abs-cir cir-8 wow fadeInRight wHighlight" data-wow-delay=".2s">
                    <img src="<?php echo __BASE_URL__ ?>/images/top/cir-8.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-8.png, 
                    <?php echo __BASE_URL__ ?>/images/top/cir-8@2x.png 2x" alt="">
                </div> 
            </div>
        </div>
        <div class="wpb_bg">
            <div class="container">
                <div class="cover_boxes">
                    <ul class="clearfix">
                        <?php $index = 0; ?>
                        <?php while ( has_sub_field('sinh_vien' ) ) : ?>
                             <?php $index = $index + 1; ?>
                            <?php if ($index <= 3): ?>
                                <li class="<?php echo $index == 1 ? 'act' : null ?>">
                                    <div class="box">
                                        <a class="thumb" href="javascript:void(0)">
                                            <img alt="" src="<?php the_sub_field( 'image' ); ?>">
                                        </a>
                                        <div class="box_content <?php echo $index == 1 ? 'act' : null ?>">
                                            <h3><?php the_sub_field( 'title' ); ?></h3>
                                            <p><?php the_sub_field( 'content' ); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endif ?>
                            
                        <?php endwhile ?>
                    </ul>
                </div>
                <div class="cover_boxes2">
                    <ul class="clearfix">
                        <?php $index = 0; ?>
                        <?php while ( has_sub_field('sinh_vien' ) ) : ?>
                             <?php $index = $index + 1; ?>
                            <?php if ($index > 3): ?>
                                <li class="<?php echo $index == 4 ? 'act' : null ?>">
                                    <div class="box">
                                        <a class="thumb" href="javascript:void(0)">
                                            <img alt="" src="<?php the_sub_field( 'image' ); ?>">
                                        </a>
                                        <div class="box_content <?php echo $index == 3 ? 'act' : null ?>">
                                            <h3><?php the_sub_field( 'title' ); ?></h3>
                                            <p><?php the_sub_field( 'content' ); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endif ?>
                            
                        <?php endwhile ?>
                    </ul>
                </div>
            </div> 
        </div>  
    </section>
    <section id="box-blog">
        <div class="abs-cir cir-7 wow fadeInLeft wHighlight" data-wow-delay=".2s">
            <img src="<?php echo __BASE_URL__ ?>/images/top/cir-7.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-7.png, <?php echo __BASE_URL__ ?>/images/top/cir-7@2x.png 2x" alt="">
        </div> 
        <div class="container">
            <div class="title text-left mb-5">
                <h2 class="rock"><span class="line">Khung cảnh VXUT</span> </h2>
                <div class="abs-cir cir-8 wow fadeInRight wHighlight" data-wow-delay=".2s">
                    <img src="<?php echo __BASE_URL__ ?>/images/top/cir-8.png" class="img-fluid" srcset="<?php echo __BASE_URL__ ?>/images/top/cir-8.png, <?php echo __BASE_URL__ ?>/images/top/cir-8@2x.png 2x" alt="">
                </div> 
            </div>
            <div class="list-blog">
                <div class="row">
                    <?php $index = 0; ?>
                    <?php while ( has_sub_field('khung_canh' ) ) : ?>
                        <?php $index = $index + 1; ?>
                        <div class="col-md-3 col-sm-6 item wow fadeIn wHighlight" data-wow-delay=".<?php echo $index ?>s">
                            <div class="avarta">
                                <a href="javascripts:void(0)">
                                    <img src="<?php the_sub_field( 'image' ); ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="info-txt">
                                <div class="info">
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                </div>
                            </div>
                        </div>
                       
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <section id = "api">
        <div class="container">
            <div class="title text-left mb-5">
                <div class="abs-cir cir-10 wow fadeInRight wHighlight" data-wow-delay=".2s"></div> 
                <h2 class="rock"><span class="line">Về chúng tôi</span></h2>
            </div>
            <div class="info-topp">
                <div class="cloud cloud-right c-abs cloud-info-4"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow fadeInLeft wHighlight" data-wow-delay=".2s">
                        <div class="fb">
                           <?php the_field( 'facebook' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInRight wHighlight" data-wow-delay=".2s">
                        <?php the_field( 'video' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tracuu">
        <div class="container">
            <div class="tc_ts">
                <h4 class="text-center">KẾT QUẢ XÉT TUYỂN TRƯỜNG ĐẠI HỌC CÔNG NGHỆ VẠN XUÂN</h4>
                <div class="tc_ts_from text-center">
                    <input id="txtName" type="text" value="" class="form-control input-search" placeholder="Nhập Họ tên">
                    <div class="form-group tc_list">
                        <label class="label-date">Ngày sinh</label>
                        <select id="txtNgaySinhDay" class="form-control input-datesplit">
                            <option value="01" selected="">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select id="txtNgaySinhMonth" class="form-control input-datesplit">
                            <option value="01" selected="">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select id="txtNgaySinhYear" class="form-control input-datesplit-y">
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="btnGetTime" type="button" class="btn" value="Xem kết quả" onclick="waitingid()">
                    </div>
                </div>
                <div class="text-center note">
                    Ví dụ: Thí sinh <b>Nguyễn Văn A</b>, sinh ngày <b>01/01/2002</b> nhập Nguyễn Văn A ở ô họ tên và chọn chính xác ngày sinh
                </div>
                <div class="col-sm-12 thongbao" id="thongbao">
                </div>
                <div id="waiting">
                    <span>
                        <img src="<?php echo __BASE_URL__ ?>/images/top/wait.gif" class="img-fluid"  alt="">
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="popup-load">
        <button type="button" class="btn btn-primary d-none clc-popup" data-toggle="modal" data-target="#myModal-load">Open modal</button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal-load">
          <div class="modal-dialog dialog-load">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-content">
              <section id="post" class="post_show" style="display: none;">
                <div class="page_A4">
                    <div class="hea01"> <img style="width: 100%;" src="<?php echo __BASE_URL__ ?>/images/form/gbvxut.png" class="img-fluid"  alt=""></div>

                    <div class="hea02" style="background-color: #fff;">
                        <div class="container">
                            <div class="form_info">
                                <ul class="sele_form row">
                                    <li class="col-md-6 d-flex">
                                        <p class="d-flex" id="text_hoten"></p>
                                    </li>
                                    <li class="col-md-6 d-flex">
                                        <p class="d-flex" id="text_ngaysinh"></p>
                                    </li>
                                    <li class="col-md-6 d-flex">
                                        <p class="d-flex" id="text_diemthi"></p>
                                    </li>
                                    <li class="col-md-6 d-flex">
                                        <p class="d-flex" id="text_hinhthuc"></p>
                                    </li>
                                </ul>
                                <p class="d-flex" id="text_nganh"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </div>
          </div>
        </div>
    </section>
</main>


<footer>
        <a id="back_to_diem" class="back_to_diem act" href="#tracuu">
            <p>Tra cứu kết quả</p>
        </a>
        <a id="back_to_top" href="javascript:void(0)" class="on">
        <span class="fa-stack">
        <i class="fa fa-arrow-up" style=""></i>
        </span>
        </a>
        <div class="xettuyen-desk pc_xt">
            <a href="https://www.vxut.edu.vn/dang-ky-xet-tuyen" target="_blank"><img src="https://www.vxut.edu.vn/assets/front/images/onl.gif" class="img-fluid" alt=""></a>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo text-center">
                    <img class="wow fadeInLeft wHighlight" src="<?php the_field( 'icon' ); ?>">
                    <p class="tit_vxut"><?php the_field( 'title_sec_1' ); ?></p>
                    <p class="ts_vxut"><?php the_field( 'title_sec_2' ); ?></p>
                </div>
                <div class="ctn-contact text-center wow bounce">
                    <a href="https://www.vxut.edu.vn/dang-ky-xet-tuyen" target="_blank"><span>Entry</span><label>Đăng ký</label></a>
                </div>
                <div class="social text-center">
                    <ul>
                        <li class="wow fadeIn wHighlight "data-wow-delay=".5s" ><a href="https://www.vxut.edu.vn/" target="_blank"><img src="<?php echo __BASE_URL__ ?>/images/top/toppage.png" class="img-fluid" alt=""></a></li>
                        <li class="wow fadeIn wHighlight "data-wow-delay=".7s" ><a href="https://www.youtube.com/channel/UCAvi04-geU6aZIuMYAlivBg" target="_blank"><img src="<?php echo __BASE_URL__ ?>/images/top/sc-1.png" class="img-fluid" ></a></li>
                        <li class="wow fadeIn wHighlight "data-wow-delay=".9s" ><a href="https://www.facebook.com/dhcnvanxuan" target="_blank"><img src="<?php echo __BASE_URL__ ?>/images/top/sc-3.png" class="img-fluid" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class = "entry">
            <a href="https://www.vxut.edu.vn/dang-ky-xet-tuyen" target="_blank"><span>Đăng ký</span></a>
        </div>
        <div class="content-footer">
            <div class="avarta">
                <img src="https://www.vxut.edu.vn/uploads/configs/1554283370.jpg" class="img-fluid" alt="">
            </div>
            <div class="info-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 wow fadeInDown wHighlight animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                            <?php the_field( 'content_footer' ); ?>
                        </div>
                        <div class="col-md-3 wow fadeInDown wHighlight animated" data-wow-delay=".4s">
                            <div class="content-ft-right" style="text-align: center;">
                                <p>Liên hệ với chúng tôi</p>
                                <div class="sotical-ft">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="https://www.facebook.com/dhcnvanxuan/" target="_blank"><img src="https://www.vxut.edu.vn/assets/front/images/aa1.png" class="img-fluid" alt=""></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://www.youtube.com/channel/UCAvi04-geU6aZIuMYAlivBg/" target="_blank">
                                                <img src="https://www.vxut.edu.vn/assets/front/images/aa2.png" class="img-fluid" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="gmail.com/" target="_blank"><img src="https://www.vxut.edu.vn/assets/front/images/aa3.png" class="img-fluid" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img src="<?php echo __BASE_URL__ ?>/images/top/qr01.png" class="img-fluid" alt="">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="<?php echo __BASE_URL__ ?>/images/top/qr02.png" class="img-fluid" alt="">
                                    </li>
                                </ul>
                                <p>Bản quyền © 2020 VXUT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php get_footer() ?>