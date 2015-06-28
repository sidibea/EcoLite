<?php

/* ::layout.html.twig */
class __TwigTemplate_c457cacf8df1afa5918670edabeafc54a0488ebeb0cdadedda82a153302ae16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7550064ca785398d604ced93e3f04b91aba35cb62fdf3e8a34418ffc231d279e = $this->env->getExtension("native_profiler");
        $__internal_7550064ca785398d604ced93e3f04b91aba35cb62fdf3e8a34418ffc231d279e->enter($__internal_7550064ca785398d604ced93e3f04b91aba35cb62fdf3e8a34418ffc231d279e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " > [Gestion Scolaire] </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- FontAwesome 4.3.0 -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"//code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Morris chart -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- jvectormap -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Date Picker -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"skin-blue\">
<!-- Site wrapper -->
<div class=\"wrapper\">

    <header class=\"main-header\">
       ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class=\"main-sidebar\">
       ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 57
        echo "    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </div><!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <strong>Copyright &copy; ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\">Mara Group</a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

";
        // line 72
        $this->displayBlock('javascript', $context, $blocks);
        // line 114
        $this->displayBlock('script', $context, $blocks);
        // line 115
        echo "
</body>
</html>";
        
        $__internal_7550064ca785398d604ced93e3f04b91aba35cb62fdf3e8a34418ffc231d279e->leave($__internal_7550064ca785398d604ced93e3f04b91aba35cb62fdf3e8a34418ffc231d279e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d496bd1d02f17856202b811e2021e64c1ebd3a7e0b6ff955888bd601360778c2 = $this->env->getExtension("native_profiler");
        $__internal_d496bd1d02f17856202b811e2021e64c1ebd3a7e0b6ff955888bd601360778c2->enter($__internal_d496bd1d02f17856202b811e2021e64c1ebd3a7e0b6ff955888bd601360778c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d496bd1d02f17856202b811e2021e64c1ebd3a7e0b6ff955888bd601360778c2->leave($__internal_d496bd1d02f17856202b811e2021e64c1ebd3a7e0b6ff955888bd601360778c2_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb4d1d4b979684d3f93a1eb872615fc7b0d8c8226e87f0c843e3b34ad1d5dafc = $this->env->getExtension("native_profiler");
        $__internal_cb4d1d4b979684d3f93a1eb872615fc7b0d8c8226e87f0c843e3b34ad1d5dafc->enter($__internal_cb4d1d4b979684d3f93a1eb872615fc7b0d8c8226e87f0c843e3b34ad1d5dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "           ";
        $this->loadTemplate("includes/header.html.twig", "::layout.html.twig", 46)->display($context);
        // line 47
        echo "       ";
        
        $__internal_cb4d1d4b979684d3f93a1eb872615fc7b0d8c8226e87f0c843e3b34ad1d5dafc->leave($__internal_cb4d1d4b979684d3f93a1eb872615fc7b0d8c8226e87f0c843e3b34ad1d5dafc_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9bf6d33f322c51e8cb9f994185ff6d14a161ab14b4f5c42c1e18b90f0e294eb6 = $this->env->getExtension("native_profiler");
        $__internal_9bf6d33f322c51e8cb9f994185ff6d14a161ab14b4f5c42c1e18b90f0e294eb6->enter($__internal_9bf6d33f322c51e8cb9f994185ff6d14a161ab14b4f5c42c1e18b90f0e294eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "           ";
        $this->loadTemplate("includes/sidebar.html.twig", "::layout.html.twig", 55)->display($context);
        // line 56
        echo "        ";
        
        $__internal_9bf6d33f322c51e8cb9f994185ff6d14a161ab14b4f5c42c1e18b90f0e294eb6->leave($__internal_9bf6d33f322c51e8cb9f994185ff6d14a161ab14b4f5c42c1e18b90f0e294eb6_prof);

    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6f5db4ea592ae0a2e13a4764d98b43f7c2577ebf237e616bcf4642e43f978b2 = $this->env->getExtension("native_profiler");
        $__internal_d6f5db4ea592ae0a2e13a4764d98b43f7c2577ebf237e616bcf4642e43f978b2->enter($__internal_d6f5db4ea592ae0a2e13a4764d98b43f7c2577ebf237e616bcf4642e43f978b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 64
        echo "        ";
        
        $__internal_d6f5db4ea592ae0a2e13a4764d98b43f7c2577ebf237e616bcf4642e43f978b2->leave($__internal_d6f5db4ea592ae0a2e13a4764d98b43f7c2577ebf237e616bcf4642e43f978b2_prof);

    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4207988936ce5c785d48c469437f36dea027ba70622c9e5d479ddf4e37c31213 = $this->env->getExtension("native_profiler");
        $__internal_4207988936ce5c785d48c469437f36dea027ba70622c9e5d479ddf4e37c31213->enter($__internal_4207988936ce5c785d48c469437f36dea027ba70622c9e5d479ddf4e37c31213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 73
        echo "
    <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Morris.js charts -->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Sparkline -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("admin/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>



";
        
        $__internal_4207988936ce5c785d48c469437f36dea027ba70622c9e5d479ddf4e37c31213->leave($__internal_4207988936ce5c785d48c469437f36dea027ba70622c9e5d479ddf4e37c31213_prof);

    }

    // line 114
    public function block_script($context, array $blocks = array())
    {
        $__internal_250c10f95a4793f96a3d61ba512d57c9d1b61d2f0b1d170041c23afe7f2a3b48 = $this->env->getExtension("native_profiler");
        $__internal_250c10f95a4793f96a3d61ba512d57c9d1b61d2f0b1d170041c23afe7f2a3b48->enter($__internal_250c10f95a4793f96a3d61ba512d57c9d1b61d2f0b1d170041c23afe7f2a3b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_250c10f95a4793f96a3d61ba512d57c9d1b61d2f0b1d170041c23afe7f2a3b48->leave($__internal_250c10f95a4793f96a3d61ba512d57c9d1b61d2f0b1d170041c23afe7f2a3b48_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 114,  296 => 109,  291 => 107,  286 => 105,  281 => 103,  276 => 101,  271 => 99,  266 => 97,  261 => 95,  257 => 94,  252 => 92,  246 => 89,  242 => 88,  237 => 86,  231 => 83,  220 => 75,  216 => 73,  210 => 72,  203 => 64,  197 => 63,  190 => 56,  187 => 55,  181 => 54,  174 => 47,  171 => 46,  165 => 45,  154 => 5,  145 => 115,  143 => 114,  141 => 72,  134 => 68,  129 => 65,  127 => 63,  119 => 57,  117 => 54,  109 => 48,  107 => 45,  90 => 31,  85 => 29,  80 => 27,  75 => 25,  69 => 22,  65 => 21,  60 => 19,  55 => 17,  49 => 14,  40 => 8,  34 => 5,  28 => 1,);
    }
}
