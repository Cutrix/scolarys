<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Scolarys
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>


        <ul class="nav nav-list">
            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('Publier/question') ?>">Publier</a></li> <?php endif ?> </span>


            <b class="arrow"></b>
            </li>

            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('Configuration') ?>">Configuration</a></li> <?php endif ?> </span>

            <b class="arrow"></b>
            </li>

            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('statistiques') ?>">Statistiques</a></li> <?php endif ?> </span>

            <b class="arrow"></b>
            </li>


            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('Planification') ?>">Planification</a></li> <?php endif ?> </span>

            <b class="arrow"></b>
            </li>

            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('Voir') ?>">Voir les notes</a></li> <?php endif ?> </span>

            <b class="arrow"></b>
            </li>

            <li class="">

                <span class="menu-text"> <?php if ($this->session->userdata('statut') === "prof" ): ?> <li><a href="<?= site_url('Deconnexion') ?>">Deconnexion</a></li> <?php endif ?> </span>

            <b class="arrow"></b>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Scolarys</a>
                    </li>

                    <li>
                        <a href="#">Publier</a>
                    </li>
                    <li class="active">Question</li>
                </ul><!-- /.breadcrumb -->


            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="header blue lighter smaller">
                                    <i class="ace-icon fa fa-calendar-o smaller-90"></i>
                                    Planification
                                </h3>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="input-group input-group-sm">
                                            <form method="post">
                                                <input type="text" id="datepicker" class="form-control" name="planif"/>
                                                <input type="submit" class="btn btn-success" name="soumettre" value="planifier">
                                                <?php if (!isset($planif_q)): ?>
                                                    <small><font color="red">Donner une date de planification svp</font></small>
                                                <?php endif ?>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div><!-- ./span -->

                            <div class="col-sm-6">
                                <h3 class="header blue lighter smaller">
                                    <i class="ace-icon fa fa-list-alt smaller-90"></i>
                                    Propositions de questions
                                </h3>
                                <div class="form-group dynamic-element" style="display: none">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10">
                                            <div class="col-md-8"><input type="text" placeholder="la reponse" class="form-control" name="reponses[]"></div>
                                            <div class="col-md-1"><button type="button" class="btn btn-success delete btn-xs">X</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?= proposition_questions() ?>
                                    <button class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#myModal" id="q1">Proprosition de question 1</button>
                                    <script src="<?= js_url('dynamicForm') ?>"></script>
                                </div>

                                <div id="dialog-message" class="hide">
                                    <p>
                                        This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
                                    </p>

                                    <div class="hr hr-12 hr-double"></div>

                                    <p>
                                        Currently using
                                        <b>36% of your storage space</b>.
                                    </p>
                                </div><!-- #dialog-message -->

                                <div id="dialog-confirm" class="hide">
                                    <div class="alert alert-info bigger-110">
                                        These items will be permanently deleted and cannot be recovered.
                                    </div>

                                    <div class="space-6"></div>

                                    <p class="bigger-110 bolder center grey">
                                        <i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
                                        Are you sure?
                                    </p>
                                </div><!-- #dialog-confirm -->
                            </div><!-- ./span -->
                        </div><!-- ./row -->

                        <div class="space-12">ddkl</div>

                        <div class="row">

                        </div><!-- ./row -->


                    </div><!-- /.page-content -->
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-responsive">
                            <thead>
                            <th>Question</th>
                            <th>Reponses</th>
                            <th>Actions</th>
                            </thead>
                            <?php foreach ($reponses as $reponse) : ?>
                            <tr>
                                <td><?=$reponse->qestionText?></td>
                                <td><?= $reponse->reponseText ?></td>
                                <td class="pull-right">
                                    <button class="btn btn-primary glyphicon glyphicon-trash"></button>
                                    <button class="btn btn-primary glyphicon glyphicon-sound-7-1"></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div><!-- /.main-content -->



            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
        </div><!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?= js_url('jquery-2.1.4.min') ?>"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?= js_url('jquery-1.11.3.min') ?>"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?= js_url('bootstrap.min') ?>"></script>
        <!-- page specific plugin scripts -->
        <script src="<?= js_url('jquery-ui.min') ?>"></script>
        <script src="<?= js_url('jquery.ui.touch-punch.min') ?>"></script>

        <!-- ace scripts -->
        <script src="<?= js_url('ace-elements.min') ?>"></script>
        <script src="<?=  js_url('ace-elements.min') ?>"></script>
        <!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {

        $( "#datepicker" ).datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,
            //isRTL:true,


            /*
            changeMonth: true,
            changeYear: true,

            showButtonPanel: true,
            beforeShow: function() {
                //change button colors
                var datepicker = $(this).datepicker( "widget" );
                setTimeout(function(){
                    var buttons = datepicker.find('.ui-datepicker-buttonpane')
                    .find('button');
                    buttons.eq(0).addClass('btn btn-xs');
                    buttons.eq(1).addClass('btn btn-xs btn-success');
                    buttons.wrapInner('<span class="bigger-110" />');
                }, 0);
            }
    */
        });


        //override dialog's title function to allow for HTML titles
        $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
            _title: function(title) {
                var $title = this.options.title || '&nbsp;'
                if( ("title_html" in this.options) && this.options.title_html == true )
                    title.html($title);
                else title.text($title);
            }
        }));

        $( "#id-btn-dialog1" ).on('click', function(e) {
            e.preventDefault();

            var dialog = $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> jQuery UI Dialog</h4></div>",
                title_html: true,
                buttons: [
                    {
                        text: "Cancel",
                        "class" : "btn btn-minier",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    },
                    {
                        text: "OK",
                        "class" : "btn btn-primary btn-minier",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                ]
            });

            /**
             dialog.data( "uiDialog" )._title = function(title) {
						title.html( this.options.title );
					};
             **/
        });


        $( "#id-btn-dialog2" ).on('click', function(e) {
            e.preventDefault();

            $( "#dialog-confirm" ).removeClass('hide').dialog({
                resizable: false,
                width: '320',
                modal: true,
                title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
                title_html: true,
                buttons: [
                    {
                        html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
                        "class" : "btn btn-danger btn-minier",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                    ,
                    {
                        html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
                        "class" : "btn btn-minier",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                ]
            });
        });



        //autocomplete
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $( "#tags" ).autocomplete({
            source: availableTags
        });

        //custom autocomplete (category selection)
        $.widget( "custom.catcomplete", $.ui.autocomplete, {
            _create: function() {
                this._super();
                this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
            },
            _renderMenu: function( ul, items ) {
                var that = this,
                    currentCategory = "";
                $.each( items, function( index, item ) {
                    var li;
                    if ( item.category != currentCategory ) {
                        ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                        currentCategory = item.category;
                    }
                    li = that._renderItemData( ul, item );
                    if ( item.category ) {
                        li.attr( "aria-label", item.category + " : " + item.label );
                    }
                });
            }
        });

        var data = [
            { label: "anders", category: "" },
            { label: "andreas", category: "" },
            { label: "antal", category: "" },
            { label: "annhhx10", category: "Products" },
            { label: "annk K12", category: "Products" },
            { label: "annttop C13", category: "Products" },
            { label: "anders andersson", category: "People" },
            { label: "andreas andersson", category: "People" },
            { label: "andreas johnson", category: "People" }
        ];
        $( "#search" ).catcomplete({
            delay: 0,
            source: data
        });


        //tooltips
        $( "#show-option" ).tooltip({
            show: {
                effect: "slideDown",
                delay: 250
            }
        });

        $( "#hide-option" ).tooltip({
            hide: {
                effect: "explode",
                delay: 250
            }
        });

        $( "#open-event" ).tooltip({
            show: null,
            position: {
                my: "left top",
                at: "left bottom"
            },
            open: function( event, ui ) {
                ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
            }
        });


        //Menu
        $( "#menu" ).menu();


        //spinner
        var spinner = $( "#spinner" ).spinner({
            create: function( event, ui ) {
                //add custom classes and icons
                $(this)
                    .next().addClass('btn btn-success').html('<i class="ace-icon fa fa-plus"></i>')
                    .next().addClass('btn btn-danger').html('<i class="ace-icon fa fa-minus"></i>')

                //larger buttons on touch devices
                if('touchstart' in document.documentElement)
                    $(this).closest('.ui-spinner').addClass('ui-spinner-touch');
            }
        });

        //slider example
        $( "#slider" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ]
        });



        //jquery accordion
        $( "#accordion" ).accordion({
            collapsible: true ,
            heightStyle: "content",
            animate: 250,
            header: ".accordion-header"
        }).sortable({
            axis: "y",
            handle: ".accordion-header",
            stop: function( event, ui ) {
                // IE doesn't register the blur when sorting
                // so trigger focusout handlers to remove .ui-state-focus
                ui.item.children( ".accordion-header" ).triggerHandler( "focusout" );
            }
        });
        //jquery tabs
        $( "#tabs" ).tabs();


        //progressbar
        $( "#progressbar" ).progressbar({
            value: 37,
            create: function( event, ui ) {
                $(this).addClass('progress progress-striped active')
                    .children(0).addClass('progress-bar progress-bar-success');
            }
        });


        //selectmenu
        $( "#number" ).css('width', '200px')
            .selectmenu({ position: { my : "left bottom", at: "left top" } })

    });
</script>

<!--<div class="container">
    <div class="col-md-6">
        <?= proposition_questions() ?>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q1">Proprosition de question 1</button>

    </div>

    <div class="col-md-6">
        <h3>Planification des questions</h3>
    </div>
    <div class="form-group dynamic-element" style="display: none">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="col-md-8"><input type="text" placeholder="la reponse" class="form-control" name="reponses[]"></div>
                <div class="col-md-1"><button type="button" class="btn btn-success delete btn-xs">X</button></div>
            </div>
        </div>
    </div>
</div>
-->