<!DOCTYPE html>

<html <?php echo $this->customlib->getRTL(); ?>>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo $this->customlib->getAppName(); ?></title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta http-equiv="Cache-control" content="no-cache">

        <meta name="theme-color" content="#424242" />

        <link href="<?php echo $this->customlib->getBaseUrl(); ?>uploads/school_content/admin_small_logo/<?php echo $this->setting_model->getAdminsmalllogo();?>" rel="shortcut icon" type="image/x-icon">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/jquery.mCustomScrollbar.min.css">

        <?php

$this->load->view('layout/theme');

?>



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ss-print.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ionicons.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/iCheck/flat/blue.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/morris/morris.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datepicker/datepicker3.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/colorpicker/bootstrap-colorpicker.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/daterangepicker/daterangepicker-bs3.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/custom_style.css?=8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ui-enhancements.css">



        <!--file dropify-->

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/dropify.min.css">

        <!--file nprogress-->

        <link href="<?php echo base_url(); ?>backend/dist/css/nprogress.css" rel="stylesheet">



        <!--print table-->

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <!--print table mobile support-->

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/responsive.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/rowReorder.dataTables.min.css" rel="stylesheet">

        <!--language css-->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/dist/css/bootstrap-select.min.css">

        <script src="<?php echo base_url(); ?>backend/custom/jquery.min.js"></script>

        <script language="javascript" src="<?php echo base_url(); ?>backend/custom/jquery-2.2.4.js"></script>

        <script src="<?php echo base_url(); ?>backend/dist/js/moment.min.js"></script>



        <script src="<?php echo base_url(); ?>backend/datepicker/js/bootstrap-datetimepicker.js"></script>

         <link rel="stylesheet" href="<?php echo base_url(); ?>backend/datepicker/css/bootstrap-datetimepicker.css">

        <script src="<?php echo base_url(); ?>backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>



        <script src="<?php echo base_url(); ?>backend/dist/js/jquery-ui.min.js"></script>

        <script src="<?php echo base_url(); ?>backend/js/school-custom.js"></script>

        <script src="<?php echo base_url(); ?>backend/js/school-admin-custom.js"></script>

        <script src="<?php echo base_url(); ?>backend/js/sstoast.js"></script>



        <!-- fullCalendar -->

        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.min.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.print.min.css" media="print">

        <script type="text/javascript">

            var baseurl = "<?php echo base_url(); ?>";

            var start_week=<?php echo $this->customlib->getStartWeek(); ?>;

            var chk_validate="<?php echo $this->config->item('SSLK') ?>";

        </script>



  <style type="text/css">

        span.flag-icon.flag-icon-us{text-orientation: mixed;}

  </style>

    <link rel="stylesheet" href="<?php echo base_url() ?>backend/multiselect/css/jquery.multiselect.css">

    </head>

    <body class="hold-transition skin-blue fixed sidebar-mini">





 <?php

//if ($this->config->item('SSLK') == "") {

    ?>

<!--  <div class="topaleart">

    <div class="slidealert">

    <div class="alert alert-dismissible topaleart-inside">

   <p class="palert"><strong>Alert!</strong> You are using unregistered version of Smart School. Please <a  href="#" class="purchasemodal">click here</a> to register your purchase code for Smart School.</p>

</div></div>

</div> -->

                    <?php

//}



?>





<style> 



.notification-number{

    height: 20px !important;

  width: 20px !important;

  background: #4ca1f6;

  margin: 0 auto;

  text-align: center;

  border-radius: 50%;

  font-size: 12px;

  position: absolute;

  top: 8px;

  left: 22px;

  color: #fff;

  display: flex;

  justify-content: center;

  align-items: center;

}

.notification-item {

  padding: 7px 12px !important  ;

  background-color: #f9f9f9;

  border-radius: 8px;

  margin-bottom: 8px;

  font-size: 12px;

  line-height: 1.4;

  font-weight: 400;

  color: #333;

  box-shadow: 0 1px 2px rgba(0,0,0,0.05);

  transition: background-color 0.2s ease;

  cursor: default;

  margin-top: 5px;

  margin-right: 10px !important;

  width: auto !important    ;

  margin-left: 10px;

}



.notification-item:hover {

  background-color: #eef2f7;

}

</style>

<script>



    function collapseSidebar() {



        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {

        sessionStorage.setItem('sidebar-toggle-collapsed', '');

        } else {

        sessionStorage.setItem('sidebar-toggle-collapsed', '1');

        }



        }



    function checksidebar() {

        if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {

        var body = document.getElementsByTagName('body')[0];

        body.className = body.className + ' sidebar-collapse';

        }

    }



    checksidebar();



</script>

       <div class="wrapper">



            <header class="main-header" id="alert">

                <a href="<?php echo base_url(); ?>admin/admin/dashboard" class="logo">

                    <span class="logo-mini"><img src="<?php echo $this->customlib->getBaseUrl(); ?>uploads/school_content/admin_small_logo/<?php echo $this->setting_model->getAdminsmalllogo() . img_time();?>" alt="<?php echo $this->customlib->getAppName() ?>" /></span>

                    <span class="logo-lg"><img src="<?php echo $this->customlib->getBaseUrl(); ?>uploads/school_content/admin_logo/<?php echo $this->setting_model->getAdminlogo() . img_time();?>" alt="<?php echo $this->customlib->getAppName() ?>" /></span>

                </a>

                <nav class="navbar navbar-static-top" role="navigation">

                    <a onclick="collapseSidebar()"  class="sidebar-toggle" data-toggle="offcanvas" role="button">

                        <span class="sr-only"><?php echo $this->lang->line('toggle_navigation'); ?></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </a>

                    <div class="col-lg-5 col-md-3 col-sm-2 col-xs-4">

                        <span href="#"  class="sidebar-session">

                            <?php echo $this->setting_model->getCurrentSchoolName(); ?>

                        </span>

                    </div>

                    <div class="col-lg-7 col-md-9 col-sm-10 col-xs-8">

                        <div class="pull-right">

                            <?php if ($this->rbac->hasPrivilege('student', 'can_view')) {?>



                                <form id="header_search_form" class="navbar-form navbar-left search-form" role="search"  action="<?php echo site_url('admin/admin/search'); ?>" method="POST">

                                    <?php echo $this->customlib->getCSRF(); ?>

                                    <div class="input-group">

                                        <input type="text" value="<?php echo set_value('search_text1'); ?>" name="search_text1" id="search_text1" class="form-control search-form search-form3" placeholder="<?php echo $this->lang->line('search_by_student_name'); ?>">

                                        <span class="input-group-btn">

                                            <button type="submit" name="search" id="search-btn" onclick="getstudentlist()" style="" class="btn btn-flat topsidesearchbtn"><i class="fa fa-search"></i></button>

                                        </span>

                                    </div>



                                </form>

                            <?php }?>

                            <div class="navbar-custom-menu">



                                <?php //if ($this->rbac->hasPrivilege('currency_switcher', 'can_view')) {

    ?>

                                   <!--  <div class="currency-icon-list" data-placement="bottom" data-toggle="tooltip" title="<?php //echo $this->lang->line('currency') ?>">

                                        <select class="languageselectpicker" type="text" id="currencySwitcher" >



                                           <?php //$this->load->view('admin/currency/currencySwitcher')?>



                                        </select>

                                    </div> -->

                                    <?php

//}?>



                                <?php //if ($this->rbac->hasPrivilege('language_switcher', 'can_view')) {

    ?>

                                    <!-- <div class="langdiv" data-placement="bottom" data-toggle="tooltip" title="<?php //echo $this->lang->line('language') ?>"><select class="languageselectpicker" onchange="set_languages(this.value)"  type="text" id="languageSwitcher" >



                                           <?php //$this->load->view('admin/language/languageSwitcher')?>



                                        </select></div> -->

                                    <?php

//}?>



                                <ul class="nav navbar-nav headertopmenu">

                                

                                    <?php $userdata = $this->customlib->getUserData();
                                    $userdata = is_array($userdata) ? $userdata : array();
                                    $user_id = isset($userdata["id"]) ? (int)$userdata["id"] : 0;
                                    $user_role_id = isset($userdata["role_id"]) ? (int)$userdata["role_id"] : 0;
                                    if($user_role_id ==7){                                    
                                        if (($this->module_lib->hasModule('multi_branch') && $this->module_lib->hasActive('multi_branch')) || $this->db->multi_branch) { ?>

                                    

                                            <li class="cal15" data-placement="bottom" data-toggle="tooltip" title="<?php echo $this->lang->line('switch_branch'); ?>"><a href="#" data-toggle="modal" data-target="#multiBranchSwitchModal"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>

                                    

                                    <?php } 

                                    }?>

                                    

 <?php

if ($this->module_lib->hasActive('calendar_to_do_list')) {

    if ($this->rbac->hasPrivilege('calendar_to_do_list', 'can_view')) {

        ?>

                                            <li class="cal15 d-sm-none"><a data-placement="bottom" data-toggle="tooltip" title="<?php echo $this->lang->line('calendar') ?>" href="<?php echo base_url() ?>admin/calendar/events" ><i class="fa fa-calendar"></i></a>



                                            </li>

                                            <?php

}

}

?>

                                    <?php

if ($this->module_lib->hasActive('calendar_to_do_list')) {

    if ($this->rbac->hasPrivilege('calendar_to_do_list', 'can_view')) {

        ?>

                                            <li class="dropdown" data-placement="bottom" data-toggle="tooltip" title="<?php echo $this->lang->line('task') ?>">

                                                <a href="#"  class="dropdown-toggle todoicon" data-toggle="dropdown">

                                                    <i class="fa fa-check-square-o"></i>

                                                    <?php

$userdata = array("id" => $user_id, "role_id" => $user_role_id);
        $count = $this->customlib->countincompleteTask($user_id, $user_role_id);
        if ($count > 0) {

            ?>



                                                        <span class="todo-indicator"><?php echo $count ?></span>

                                                    <?php }?>

                                                </a>

                                                <ul class="dropdown-menu menuboxshadow">



                                                    <li class="todoview plr10 ssnoti"><?php echo $this->lang->line('today_you_have'); ?> <?php echo $count; ?> <?php echo $this->lang->line('pending_task'); ?><a href="<?php echo base_url() ?>admin/calendar/events" class="pull-right pt0"><?php echo $this->lang->line('view_all'); ?></a>

                                                    </li>

                                                    <li>

                                                        <ul class="todolist">

                                                            <?php

$tasklist = $this->customlib->getincompleteTask($user_id, $user_role_id);
if (!is_array($tasklist)) {
    $tasklist = array();
}
        foreach ($tasklist as $key => $value) {

            ?>

                                                                <li><div class="checkbox">

                                                                        <label><input type="checkbox" id="newcheck<?php echo $value["id"] ?>" onclick="markc('<?php echo $value["id"] ?>')" name="eventcheck"  value="<?php echo $value["id"]; ?>"><?php echo $value["event_title"] ?></label>

                                                                    </div></li>

                                                            <?php }?>



                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                             <?php 

                                 $role = $this->customlib->getStaffRole();
                                 $role_obj = is_string($role) ? json_decode($role) : null;
                                 $role_id = (is_object($role_obj) && isset($role_obj->id)) ? (string)$role_obj->id : "";
                                // echo "Role ".$userdata["id"];

                                 if($role_id=="7" || $role_id=="1")
                                 {   

                                 ?>

                                 <li class="dropdown" data-placement="bottom" data-toggle="tooltip" title="<?php echo $this->lang->line('notification') ?>" id="homework">

                                    <a href="#" class="dropdown-toggle todoicon relative inline-block" data-toggle="dropdown">
                                       <i class="fa fa-bell"></i>

                                       <?php

                                       if (function_exists('homeworkcountlist')) {
                                           $homeworkcount = homeworkcountlist($user_id);
                                       } else {
                                           $homeworkcount = array();
                                       }
                                       if (!is_countable($homeworkcount)) {
                                           $homeworkcount = array();
                                       }
                                       ?>

                                        <span class="notification-number">

                                            <?php echo count($homeworkcount); ?>
                                         </span>                                      

                                    </a>

                                    <ul class="dropdown-menu menuboxshadow">

                                       <li class="todoview plr10 ssnoti"> <span class="homecnt"><?php echo count($homeworkcount)." New Homework Added "; ?> </span> <a href="<?php echo base_url() ?>homework" class="pull-right pt0"><?php echo $this->lang->line('view_all'); ?></a></li>
                                       <li>

                                          <ul class="todolist homedt ">

                                          <?php

                                          foreach ($homeworkcount as $key => $value) {

                                          ?>

                                             <li class="notification-item">

                                                <div class="">

                                                   Class <?php echo $value["class"]; ?>-<?php echo $value["section"]; ?> By <?php echo $value["name"]; ?>

                                                </div>

                                             </li>

                                          <?php } ?>

                                          </ul>

                                       </li>

                                    </ul>

                                 </li>

                              <?php } ?>

                                        <li class="dropdown d-lg-none d-sm-block ellipsis-px-3">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i>

                                        </a>

                                        <ul class="dropdown-menu min-w-full sm-drop-down">

                                          <li><a href="<?php echo base_url() ?>admin/calendar/events"><i class="fa fa-calendar"></i></a></li>

                                          <li><a href="<?php echo base_url() ?>admin/chat"><i class="fa fa-whatsapp"></i></a></li>

                                        </ul>

                                      </li>

                                            <?php

}

}

if ($this->module_lib->hasActive('chat')) {

    if ($this->rbac->hasPrivilege('chat', 'can_view')) {

        ?>

                                         <li class="cal15 d-sm-none"><a data-placement="bottom" data-toggle="tooltip" title="" href="<?php echo base_url() ?>admin/chat" data-original-title="<?php echo $this->lang->line('chat') ?>" class="todoicon"><i class="fa fa-whatsapp"></i></a></li>

                                        <?php

}

    ?>





                                <?php }

$file   = "";

$result = $this->customlib->getLoggedInUserData();
$result = is_array($result) ? $result : array();
$result = array_merge(
    array(
        "image" => "",
        "id" => 0,
        "gender" => "",
        "admin_panel_whatsapp" => 0,
        "admin_panel_whatsapp_mobile" => "",
        "admin_panel_whatsapp_from" => "",
        "admin_panel_whatsapp_to" => "",
    ),
    $result
);
$role = $this->customlib->getStaffRole();





$image = $result["image"];

$role_obj = is_string($role) ? json_decode($role) : null;
$role  = (is_object($role_obj) && isset($role_obj->name)) ? $role_obj->name : "";
$id    = $result["id"];

if (!empty($image)) {



    $file = "uploads/staff_images/" . $image . img_time();

} else {

    if ($result['gender'] == 'Female') {

        $file = "uploads/staff_images/default_female.jpg" . img_time();

    } else {

        $file = "uploads/staff_images/default_male.jpg" . img_time();

    }



}

?>



                                    <li class="dropdown user-menu">

                                        <a class="dropdown-toggle" style="padding: 15px 12px;" data-toggle="dropdown" href="#" aria-expanded="false">

                                            <img src="<?php echo base_url($file); ?>" class="topuser-image" alt="User Image">

                                        </a>

                                        <ul class="dropdown-menu dropdown-user menuboxshadow">

                                            <li>

                                                <div class="sstopuser">

                                                    <div class="ssuserleft">

                                                        <a href="<?php echo base_url() . "admin/staff/profile/" . $id ?>"><img src="<?php echo base_url($file); ?>" alt="User Image"></a>

                                                    </div>

                                                    <div class="sstopuser-test">

                                                        <h4 class="text-capitalize"><?php echo $this->customlib->getAdminSessionUserName(); ?></h4>

                                                        <h5><?php echo $role; ?></h5>

                                                    </div>

                                                    <div class="divider"></div>

                                                    <div class="sspass">

                                                        <a href="<?php echo base_url() . "admin/staff/profile/" . $id ?>" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('my_profile'); ?>"><i class="fa fa-user"></i><?php echo $this->lang->line('profile'); ?> </a>

                                                        <a class="pl25" href="<?php echo base_url(); ?>admin/admin/changepass" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('change_password'); ?>"><i class="fa fa-key"></i><?php echo $this->lang->line('password'); ?></a> <a class="pull-right" href="<?php echo base_url(); ?>site/logout"><i class="fa fa-sign-out fa-fw"></i><?php echo $this->lang->line('logout'); ?></a>

                                                    </div>

                                                </div><!--./sstopuser--></li>

                                        </ul>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </nav>

            </header>



            <?php $this->load->view('layout/sidebar');?>

            <script>

            // $(document).ready(function() {

            //    setInterval(function() { 

            //       user_id = <?php echo $userdata["id"]; ?>; 

            //       $.ajax({

            //          type: "POST",

            //          url: base_url + "admin/notification/sethomework/",

            //          data: {user_id:user_id},

            //          success: function (data) {

            //             var dt = data.split('#'); 

            //             $('.notification-number').html(dt[2]);                        

            //          }

            //       });

            //    }, 3000);  

            // });



            // function sethomework(user_id)

            // {

            //    $.ajax({

            //       type: "POST",

            //       url: base_url + "admin/notification/sethomework/",

            //       data: {user_id:user_id},

            //       success: function (data) {

            //          var dt = data.split('#'); 

            //          $('.homecnt').html(dt[0]);

            //          $('.homedt').html(dt[1]); 

            //       }

            //    });

            // }



            // function readhomework(user_id)

            // {  

            //    sethomework(user_id);

            //    $.ajax({

            //       type: "POST",

            //       url: base_url + "admin/notification/readhomework/",

            //       data: {user_id:user_id},

            //       success: function (data) {

                     

            //       }

            //    });             

            // }



    function set_languages(lang_id){
        var ajaxBaseUrl = (typeof baseurl !== "undefined") ? baseurl : "<?php echo base_url(); ?>";
        $.ajax({
        type: "POST",
        url: ajaxBaseUrl + "admin/language/user_language/" + lang_id,
        data: {},
        success: function () {
            successMsg("<?php echo $this->lang->line('status_change_successfully'); ?>");
            window.location.reload(true);
        }
        });
    }
</script>
