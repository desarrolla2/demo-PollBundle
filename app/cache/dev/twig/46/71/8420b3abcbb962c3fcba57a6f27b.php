<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_46718420b3abcbb962c3fcba57a6f27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"@desarrolla2\">
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4788d05_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4788d05_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4788d05_part_1_01-bootstrap-responsive_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
        ";
            // asset "4788d05_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4788d05_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4788d05_part_1_02-bootstrap_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
        ";
            // asset "4788d05_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4788d05_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4788d05_part_1_03-demo_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "4788d05"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4788d05") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4788d05.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"brand\" href=\"#\">Poll Bundle</a>
                    <div class=\"nav-collapse\">
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class=\"container\">
            <h1>Bootstrap starter template</h1>
            <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
        </div>
        ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c9109f3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_01-jquery-1.7.2.min_1.js");
            // line 36
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
            // asset "c9109f3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3_part_1_02-bootstrap_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        } else {
            // asset "c9109f3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9109f3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c9109f3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "        <script type=\"text/javascript\">
      var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-23939978-4']); _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
        </script>
        <script type=\"text/javascript\">
      var uvOptions = {};
      (function() {
        var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
        uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/eCmkmgeMsmfHA3lZbgXZig.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
      })();
    </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Poll Bundle demo site ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
