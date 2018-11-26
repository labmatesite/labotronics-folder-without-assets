<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css"><link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
     <link rel="stylesheet" href="assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
        <!-- PageGuide -->
        <link rel="stylesheet" href="assets/css/plugins/pageguide/pageguide.css">
        <!-- Fullcalendar -->
        <link rel="stylesheet" href="assets/css/plugins/fullcalendar/fullcalendar.css">
        <link rel="stylesheet" href="assets/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
        <!-- chosen -->
        <link rel="stylesheet" href="assets/css/plugins/chosen/chosen.css">
        <!-- select2 -->
        <link rel="stylesheet" href="assets/css/plugins/select2/select2.css">
        <!-- icheck -->
        <link rel="stylesheet" href="assets/css/plugins/icheck/all.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="assets/css/themes.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="tinymce/tinymce.min.js" type="text/javascript"></script>
        <!-- Nice Scroll -->
        <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- jQuery UI -->
        <script src="assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
        <script src="assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
        <script src="assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
        <script src="assets/js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
        <script src="assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
        <script src="assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
        <!-- Touch enable for jquery UI -->
        <script src="assets/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
        <!-- slimScroll -->
        <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- vmap -->
        <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
        <script src="assets/js/plugins/vmap/jquery.vmap.world.js"></script>
        <script src="assets/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
        <!-- Bootbox -->
        <script src="assets/js/plugins/bootbox/jquery.bootbox.js"></script>
        <!-- Flot -->
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
        <!-- imagesLoaded -->
        <script src="assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
        <!-- PageGuide -->
        <script src="assets/js/plugins/pageguide/jquery.pageguide.js"></script>
        <!-- FullCalendar -->
        <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
        <!-- Chosen -->
        <script src="assets/js/plugins/chosen/chosen.jquery.min.js"></script>
        <!-- Validation -->
	<script src="assets/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="assets/js/plugins/validation/additional-methods.min.js"></script>
        <!-- select2 -->
        <script src="assets/js/plugins/select2/select2.min.js"></script>
        <!-- icheck -->
        <script src="assets/js/plugins/icheck/jquery.icheck.min.js"></script>
        <script src="assets/js/eakroko.min.js"></script>
        <!-- Theme scripts -->
        <script src="assets/js/application.min.js"></script>
        <!-- Just for demonstration -->
        <script src="assets/js/demonstration.min.js"></script>
        <script type="assets/text/javascript">
        </script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" />
        <!-- Apple devices Homescreen icon -->
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
    </head>
    <body  class="theme-red" data-theme="theme-red">
        <div id="new-task" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Add new task</h3>
            </div>
            <form action="#" class='new-task-form form-horizontal form-bordered'>
                <div class="modal-body nopadding">
                    <div class="control-group">
                        <label for="tasktitel" class="control-label">Icon</label>
                        <div class="controls">
                            <select name="icons" id="icons" class='select2-me input-xlarge'>
                                <option value="icon-adjust">icon-adjust</option>
                                <option value="icon-asterisk">icon-asterisk</option>
                                <option value="icon-ban-circle">icon-ban-circle</optio>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="task-name" class="control-label">Task</label>
                        <div class="controls">
                            <input type="text" name="task-name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="tasktitel" class="control-label"></label>
                        <div class="controls">
                            <label class="checkbox"><input type="checkbox" name="task-bookmarked" value="yep"> Mark as important</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Add task">
                </div>
            </form> </div>
        <div id="navigation">
            <div class="container-fluid">
                <a href="#" id="brand">Admin Panel</a>
                <?php include 'admin_menu.php' ?>
                <div class="user">
 <div class="dropdown asdf">
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $_SESSION['login_user']; ?> </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="crm_settings.php">CRM Settings</a>
                            </li>
                            <li>
                                <a href="logout.php">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script>
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                width: "100%",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                content_css: "css/content.css",
                theme_advanced_font_sizes: "8px,10px,12px,14px,16px,18px,20px,24px,32px,36px",
                theme_advanced_fonts: "Andale Mono=andale mono,times;" +
                        "Arial=arial,helvetica,sans-serif;" +
                        "Arial Black=arial black,avant garde;" +
                        "Book Antiqua=book antiqua,palatino;" +
                        "Comic Sans MS=comic sans ms,sans-serif;" +
                        "Courier New=courier new,courier;" +
                        "Century Gothic=century_gothic;" +
                        "Georgia=georgia,palatino;" +
                        "Gill Sans MT=gill_sans_mt;" +
                        "Gill Sans MT Bold=gill_sans_mt_bold;" +
                        "Gill Sans MT BoldItalic=gill_sans_mt_bold_italic;" +
                        "Gill Sans MT Italic=gill_sans_mt_italic;" +
                        "Helvetica=helvetica;" +
                        "Impact=impact,chicago;" +
                        "Iskola Pota=iskoola_pota;" +
                        "Iskola Pota Bold=iskoola_pota_bold;" +
                        "Symbol=symbol;" +
                        "Tahoma=tahoma,arial,helvetica,sans-serif;" +
                        "Terminal=terminal,monaco;" +
                        "Times New Roman=times new roman,times;" +
                        "Trebuchet MS=trebuchet ms,geneva;" +
                        "Verdana=verdana,geneva;" +
                        "Webdings=webdings;" +
                        "Wingdings=wingdings,zapf dingbats",
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Font Sizes', items: [
                            {title: '10px', inline: 'span', styles: {fontSize: '10px'}},
                            {title: '13px', inline: 'span', styles: {fontSize: '13px'}},
                            {title: '15px', inline: 'span', styles: {fontSize: '15px'}},
                            {title: '18px', inline: 'span', styles: {fontSize: '18px'}},
                            {title: '21px', inline: 'span', styles: {fontSize: '21px'}},
                            {title: '24px', inline: 'span', styles: {fontSize: '24px'}},
                            {title: '27px', inline: 'span', styles: {fontSize: '27px'}},
                            {title: '30px', inline: 'span', styles: {fontSize: '30px'}}

                        ]},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}

                ]
            });
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        