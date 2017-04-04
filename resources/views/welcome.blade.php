<!doctype html>
<html>
    <head>
        <title>ระบบค้นหาสายรหัส TU80</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/css/appload.css" />
        <link rel="stylesheet" href="/assets/css/landing.css" />
        @include('meta_og')
    </head>
    <body>
        <div class="container landingpage_container">
            <div class="row mainrow">
                <div class="col-md-12">
                    <h1 class="landingpage_title">ระบบค้นหาสายรหัส <b>TU80</b></h1>
                </div>
            </div>
            <!-- =================== -->
            <div class="row landing_button_row">
                <div class="col-md-6 text-center">
                    <div class="form-horizontal">
                        <div class="col-xs-10 col-xs-offset-1">
                            <br />
                            <h4><i class="fa fa-search"></i> ค้นหาสายลำดับ</h4>
                            <br />
                            <div class="row form-group" id="searchGroup">
                                <div class="col-xs-8 novert">
                                    <input class="form-control" id="searchQuery" name="searchQuery" placeholder="ใส่ลำดับที่ต้องการค้นหาที่นี่..." type="text">
                                </div>
                                <div class="col-xs-4">
                                    <a class="btn btn-block btn-primary" href="#" id="btnSearch">ค้นหา</a>
                                </div>
                            </div>
                            <span class="help-block" id="searchHelpText"><span>
                            {{ csrf_field() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="col-xs-10 col-xs-offset-1">
                        <br />
                        <h4><i class="fa fa-user-plus"></i> เพิ่มข้อมูล</h4>
                        <br />
                        <a class="btn btn-block btn-success" data-toggle="modal" data-target="#addDataModal">เพิ่มข้อมูลติดต่อของคุณ</a>
                    </div>
                </div>
            </div>
            <!-- =================== -->

            <div id="daFooter" class="footer navbar-fixed-bottom">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <span class="text-light">&copy; <?php echo(date("Y")); ?> <small class="text-muted">&#8226;</small> Crafted with <i class="fa fa-heart"></i> by <a href="https://namo.namodev.com" class="nuancedlink" target="_blank">@NamoDev</a> &amp; <a href="https://theminerdev.com" target="_blank" class="nuancedlink">@TheMiner3746</a> <small class="text-muted">&#8226;</small> ภาพโดย <a href="https://www.facebook.com/Cattofoto/" class="nuancedlink" target="_blank">Cattofoto</a> <small class="text-muted">&#8226;</small> <i class="fa fa-code"></i> on <a href="https://github.com/NamoDev/Galileo" class="nuancedlink" target="_blank">GitHub</a></span>
                        <br />
                        <span class="text-light">เว็บไซต์นี้ถูกสร้างขึ้นโดยนักเรียน (และศิษย์เก่า) โดยไม่มีส่วนเกี่ยวข้องกับโรงเรียนเตรียมอุดมศึกษาแต่อย่างใด</span>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
        <!-- =================== -->
        <div class="modal fade" id="addDataModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><i class="fa fa-user-plus"></i> เพิ่มข้อมูล</h4>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-10 col-md-offset-1">
                                  <h6>ข้อมูลหลัก (ช่องที่มีเครื่องหมาย '*' จำเป็นต้องระบุ)<br /></h6>
                                  <div class="form-horizontal">
                                      <div class="row">
                                          <div class="col-md-2 col-xs-4" id="insertForm_titleGroup">
                                              <span class="help-block">คำนำหน้าชื่อ <small>*</small></span>
                                              <input class="form-control" id="insertForm_title" placeholder="มาดมัวแซล" type="text">
                                          </div>
                                          <div class="col-md-5 col-xs-8" id="insertForm_fnameGroup">
                                              <span class="help-block">ชื่อ <small>*</small></span>
                                              <input class="form-control" id="insertForm_fname" placeholder="คอมพิวตราเซีย" type="text">
                                          </div>
                                          <div class="col-md-5" id="insertForm_lnameGroup">
                                              <span class="help-block">นามสกุล <small>*</small></span>
                                              <input class="form-control" id="insertForm_lname" placeholder="ดังฟอร์มาทีก" type="text">
                                          </div>
                                      </div>
                                      <br />
                                      <div class="row">
                                          <div class="col-md-3" id="insertForm_nicknameGroup">
                                              <span class="help-block">ชื่อเล่น</span>
                                              <input class="form-control" id="insertForm_nickname" placeholder="คอมพิวตราเซีย" type="text">
                                          </div>
                                          <div class="col-md-2" id="insertForm_generationGroup">
                                              <span class="help-block">รุ่น <small>*</small></span>
                                              <input class="form-control" id="insertForm_generation" placeholder="1" type="text">
                                          </div>
                                          <div class="col-md-3" id="insertForm_roomGroup">
                                              <span class="help-block">ห้อง (ปีการศึกษาล่าสุด)</span>
                                              <input class="form-control" id="insertForm_room" placeholder="404" type="text">
                                          </div>
                                          <div class="col-md-4" id="insertForm_rankGroup">
                                              <span class="help-block">ลำดับที่ (ตอนสอบเข้า)<small>*</small></span>
                                              <input class="form-control" id="insertForm_rank" placeholder="1" type="text">
                                          </div>
                                      </div>
                                      <hr />
                                      <h6>ข้อมูลติดต่อ (ต้องระบุอย่างน้อย 1 ช่อง)<br /></h6>
                                      <div id="contactGroup">
                                          <div class="row">
                                              <div class="col-md-4" id="insertForm_facebookGroup">
                                                  <span class="help-block"><i class="fa fa-facebook"></i> Facebook</span>
                                                  <input class="form-control" id="insertForm_facebook" placeholder="facebook.com/computrasia" type="text">
                                              </div>
                                              <div class="col-md-4" id="insertForm_twitterGroup">
                                                  <span class="help-block"><i class="fa fa-twitter"></i> Twitter</span>
                                                  <input class="form-control" id="insertForm_twitter" placeholder="@computrasia" type="text">
                                              </div>
                                              <div class="col-md-4" id="insertForm_emailGroup">
                                                  <span class="help-block"><i class="fa fa-envelope"></i> E-Mail</span>
                                                  <input class="form-control" id="insertForm_email" placeholder="computrasia@tucc.club" type="text">
                                              </div>
                                          </div>
                                          <br />
                                          <div class="row">
                                              <div class="col-md-4" id="insertForm_lineGroup">
                                                  <span class="help-block"><i class="fa fa-comment"></i> LINE</span>
                                                  <input class="form-control" id="insertForm_line" placeholder="computrasia.tucc" type="text">
                                              </div>
                                              <div class="col-md-4" id="insertForm_instagramGroup">
                                                  <span class="help-block"><i class="fa fa-instagram"></i> Instagram</span>
                                                  <input class="form-control" id="insertForm_instagram" placeholder="computrasia" type="text">
                                              </div>
                                              <div class="col-md-4" id="insertForm_phoneGroup">
                                                  <span class="help-block"><i class="fa fa-phone"></i> โทรศัพท์</span>
                                                  <input class="form-control" id="insertForm_phone" placeholder="090-123-4567" type="text">
                                              </div>
                                          </div>
                                      </div>
                                      <hr />
                                      <h6>ฝากข้อความ <span class="text-muted">(ถึงพี่ๆ หรือน้องๆ)</span><br /></h6>
                                      <div class="row">
                                          <div class="col-md-12 form-horizontal">
                                              <textarea class="form-control" id="insertForm_message" rows="4"></textarea>
                                          </div>
                                      </div>
                                      <hr />
                                      <h6><i class="fa fa-exclamation-triangle"></i> ระบบมีการเข้ารหัสทางเดียว และรหัสผ่านไม่สามารถเปลี่ยนได้ กรุณาตรวจสอบให้แน่ใจก่อนบันทึกข้อมูล<br /></h6>
                                      <div class="row">
                                          <div class="col-md-6" id="insertForm_passwordGroup">
                                              <span class="help-block">รหัสผ่านสำหรับการแก้ไขข้อมูล</span>
                                              <input class="form-control" id="insertForm_password" placeholder="รหัสผ่านที่จำได้ง่าย แต่เดาได้ยาก" type="password">
                                          </div>
                                          <div class="col-md-6" id="insertForm_passwordConfirmGroup">
                                              <span class="help-block">ยืนยันรหัสผ่าน</span>
                                              <input class="form-control" id="insertForm_passwordConfirm" placeholder="ยืนยันรหัสผ่านอีกครั้ง" type="password">
                                          </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                          <div class="col-md-12 form-horizontal">
                                              <a class="btn btn-success btn-block" href="#" id="btnSubmitNewData"><i class="fa fa-floppy-o"></i> บันทึก</a>
                                          </div>
                                          <br /><br /><br />
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- =================== -->
        <script src="/assets/js/jquery-3.1.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script>

            var hasErrors = 0;

            $(function(){
                adjustFooter();
            });

            $(window).on('resize', function(){
                adjustFooter();
            });

            function adjustFooter(){
                if ($(window).width() < 767){
                    $("#daFooter").removeClass("navbar-fixed-bottom");
                    $("#daFooter").css({"margin-top": "70px"});
                }else{
                    $("#daFooter").addClass("navbar-fixed-bottom");
                    $("#daFooter").css({"margin-top": "0px"});
                }
            }

            $("#btnSearch").click(function(e){
                e.preventDefault();
                $("#searchGroup").removeClass("has-warning");
                $("#searchHelpText").empty();

                var rank = parseInt($("#searchQuery").val());
                if(!isNaN(rank)){
                    window.location.href = "/families/" + rank;
                }else{
                    $("#searchGroup").addClass("has-warning");
                    $("#searchHelpText").html("<span class=\"text-warning\"><i class=\"fa fa-exclamation-triangle\"></i> ข้อมูลต้องเป็นตัวเลขเท่านั้น</span>");
                }
            });
            $("#searchQuery").keyup(function(e){
                if(e.keyCode == 13){
                    $("#btnSearch").click();
                }
            });
            $("#btnSubmitNewData").click(function(e){

                hasErrors = 0;
                $("#contactGroup").removeClass("has-warning");

                e.preventDefault();
                var csrfToken = "{{ csrf_token() }}";

                checkField("insertForm_title");
                checkField("insertForm_fname");
                checkField("insertForm_lname");
                checkField("insertForm_generation");
                checkField("insertForm_rank");

                var contactFieldsEntered = 0;
                if(isNotEmpty("insertForm_facebook")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_twitter")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_email")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_line")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_instagram")){
                    contactFieldsEntered++;
                }
                if(isNotEmpty("insertForm_phone")){
                    contactFieldsEntered++;
                }

                if(contactFieldsEntered < 1){
                    hasErrors++;
                    $("#contactGroup").addClass("has-warning");
                }

                checkField("insertForm_password");
                checkField("insertForm_passwordConfirm");

                if($("#insertForm_passwordConfirm").val() != $("#insertForm_password").val()){
                    $("#insertForm_passwordGroup").addClass("has-warning");
                    $("#insertForm_passwordConfirmGroup").addClass("has-warning");
                    hasErrors++;
                }

                if(hasErrors == 0){
                    $.ajax({
                           url: "/students",
                           data: {
                               _token: csrfToken,
                               title: $("#insertForm_title").val(),
                               fname: $("#insertForm_fname").val(),
                               lname: $("#insertForm_lname").val(),
                               nickname: $("#insertForm_nickname").val(),
                               generation: parseInt($("#insertForm_generation").val()),
                               room: parseInt($("#insertForm_room").val()),
                               rank: parseInt($("#insertForm_rank").val()),
                               facebook: $("#insertForm_facebook").val(),
                               twitter: $("#insertForm_twitter").val(),
                               email: $("#insertForm_email").val(),
                               line: $("#insertForm_line").val(),
                               instagram: $("#insertForm_instagram").val(),
                               phone: $("#insertForm_phone").val(),
                               message: $("#insertForm_message").val(),
                               password: $("#insertForm_password").val(),
                               password_confirm: $("#insertForm_passwordConfirm").val(),
                           },
                           error: function (request, status, error) {
                               console.log(error);
                           },
                           dataType: "json",
                           success: function(data) {
                               var rankToGoTo = parseInt($("#insertForm_rank").val());
                               window.location.href = "/families/" + rankToGoTo;
                           },
                           type: "POST"
                    });
                }
            });
            function checkField(field){
                $("#" + field + "Group").removeClass("has-warning");
                if($.trim($("#" + field).val()) != "" && $("#" + field).val() !== null){
                    return true;
                }else{
                    $("#" + field + "Group").addClass("has-warning");
                    hasErrors++;
                    return false;
                }
            }
            function isNotEmpty(field){
                if($.trim($("#" + field).val()) != "" && $("#" + field).val() !== null){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        @include('analytic')
    </body>
</html>
