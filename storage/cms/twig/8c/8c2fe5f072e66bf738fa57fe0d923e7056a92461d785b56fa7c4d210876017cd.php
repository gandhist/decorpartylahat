<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\decorpartylahat/themes/dpl/layouts/default.htm */
class __TwigTemplate_eda027ad30a968eb92ed3d53b014b1035c7e62e636d401061bc45fc0af0413fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Decor Party Lahat- ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Gandhi Saputra\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Gandhi Saputra\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/icomoon/style.css");
        echo "\">
    
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-ui.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\">
    
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/lightgallery.min.css");
        echo "\">    
        
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-datepicker.css");
        echo "\">
    
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/flaticon/font/flaticon.css");
        echo "\">
        
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.css");
        echo "\">
    
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aos.css");
        echo "\">
    
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
        ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 33
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.3.1.min.js");
        echo "\"></script>
        <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-migrate-3.0.1.min.js");
        echo "\"></script>
        <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.js");
        echo "\"></script>
        <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.stellar.min.js");
        echo "\"></script>
        <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.countdown.min.js");
        echo "\"></script>
        <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
        <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-datepicker.min.js");
        echo "\"></script>
        <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/aos.js");
        echo "\"></script>
      
        <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/picturefill.min.js");
        echo "\"></script>
        <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lightgallery-all.min.js");
        echo "\"></script>
        <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mousewheel.min.js");
        echo "\"></script>
      
        <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
        
        <script>
          \$(document).ready(function(){
            \$('#lightgallery').lightGallery();
            
            /** add active class and stay opened when selected */
        var host = window.location.origin;
        var single_sub = window.location;
        var link = window.location.pathname;
        var url = link.slice(0, link.lastIndexOf('/'));
        // for sidebar menu entirely but not cover treeview
        var a = url.split('/');
        var b = link.split('/');
        /*if (\$.isNumeric([2])) {
            var last = a[2].replace(/\\d+/, '');
            var numberic_url = host + '/' + a[1]
        } else {
            var numberic_url = host + '/' + a[1] + '/' + a[2];
        }*/
        
        if(b[2] == '') {
            \$('ul.site-menu a').filter(function() {
                return this.href == host + url + b[2] || this.href == single_sub;
            }).parent().addClass('active');
            
        }
        else {
            \$('ul.site-menu a').filter(function() {
                return this.href == host + url + b[2] || this.href == single_sub;
            }).parent().addClass('active');
    
          }
              });
        </script>
        ";
        // line 104
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 105
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 106
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 106,  266 => 105,  255 => 104,  217 => 69,  212 => 67,  208 => 66,  204 => 65,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  163 => 54,  159 => 53,  155 => 52,  150 => 49,  146 => 48,  140 => 44,  138 => 43,  132 => 39,  128 => 38,  121 => 33,  118 => 32,  114 => 31,  109 => 29,  104 => 27,  99 => 25,  94 => 23,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Decor Party Lahat- {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Gandhi Saputra\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Gandhi Saputra\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/icomoon/style.css'|theme }}\">
    
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery-ui.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.default.min.css'|theme }}\">
    
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/lightgallery.min.css'|theme }}\">    
        
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-datepicker.css'|theme }}\">
    
        <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/flaticon/font/flaticon.css'|theme }}\">
        
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper.css'|theme }}\">
    
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/aos.css'|theme }}\">
    
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/js/jquery-3.3.1.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery-migrate-3.0.1.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery-ui.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.stellar.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.countdown.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.magnific-popup.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/bootstrap-datepicker.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/swiper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/aos.js'|theme }}\"></script>
      
        <script src=\"{{ 'assets/js/picturefill.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/lightgallery-all.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.mousewheel.min.js'|theme }}\"></script>
      
        <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
        
        <script>
          \$(document).ready(function(){
            \$('#lightgallery').lightGallery();
            
            /** add active class and stay opened when selected */
        var host = window.location.origin;
        var single_sub = window.location;
        var link = window.location.pathname;
        var url = link.slice(0, link.lastIndexOf('/'));
        // for sidebar menu entirely but not cover treeview
        var a = url.split('/');
        var b = link.split('/');
        /*if (\$.isNumeric([2])) {
            var last = a[2].replace(/\\d+/, '');
            var numberic_url = host + '/' + a[1]
        } else {
            var numberic_url = host + '/' + a[1] + '/' + a[2];
        }*/
        
        if(b[2] == '') {
            \$('ul.site-menu a').filter(function() {
                return this.href == host + url + b[2] || this.href == single_sub;
            }).parent().addClass('active');
            
        }
        else {
            \$('ul.site-menu a').filter(function() {
                return this.href == host + url + b[2] || this.href == single_sub;
            }).parent().addClass('active');
    
          }
              });
        </script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/layouts/default.htm", "");
    }
}
