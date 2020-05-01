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

/* C:\xampp\htdocs\decorpartylahat/themes/dpl/partials/header.htm */
class __TwigTemplate_60e018d91d47f2bde7fdb41d6ed3fe8c77ca55ce5e481482a5b6321fe2affefe extends \Twig\Template
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
        echo "<div class=\"site-wrap\">

    <div class=\"site-mobile-menu\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icon-close2 js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
    



    <header class=\"site-navbar py-3\" role=\"banner\">

      <div class=\"container-fluid\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-6 col-xl-3\" data-aos=\"fade-down\">
            <h3 class=\"mb-0\"><a href=\"";
        // line 21
        echo url("/");
        echo "\" class=\"text-black h2 mb-0\">Decor Party Lahat</a></h3>
          </div>
          <div class=\"col-10 col-md-7 d-none d-xl-block\" data-aos=\"fade-down\">
            <nav class=\"site-navigation position-relative text-right text-lg-center\" role=\"navigation\">

              <ul class=\"site-menu js-clone-nav mx-auto d-none d-lg-block\">
                <li ><a href=\"";
        // line 27
        echo url("/");
        echo "\">Beranda</a></li>
                <li class=\"has-children\">
                  <a href=\"#\">Galeri</a>
                  <ul class=\"dropdown\">
                  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 32
            echo "                       <li><a href=\"";
            echo url("/");
            echo "/galery/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    <!--<li><a href=\"#\">Dekorasi</a></li>
                    <li><a href=\"#\">Hantaran</a></li>
                     <li><a href=\"#\">People</a></li>
                    <li><a href=\"#\">Architecture</a></li>
                    <li><a href=\"#\">Animals</a></li>
                    <li><a href=\"#\">Sports</a></li>
                    <li><a href=\"#\">Travel</a></li>
                    <li class=\"has-children\">
                      <a href=\"#\">Sub Menu</a>
                      <ul class=\"dropdown\">
                        <li><a href=\"#\">Menu One</a></li>
                        <li><a href=\"#\">Menu Two</a></li>
                        <li><a href=\"#\">Menu Three</a></li>
                      </ul>
                    </li> -->
                  </ul>
                </li>
                <li><a href=\"";
        // line 51
        echo url("/");
        echo "/paket\">Paket</a></li>
                <li><a href=\"";
        // line 52
        echo url("/");
        echo "/tentang\">Tentang Kami</a></li>
                <li><a href=\"";
        // line 53
        echo url("/");
        echo "/kontak\">Kontak</a></li>
              </ul>
            </nav>
          </div>

          <div class=\"col-6 col-xl-2 text-right\" data-aos=\"fade-down\">
            <div class=\"d-none d-xl-inline-block\">
              <ul class=\"site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0\" data-class=\"social\">
                <li>
                  <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-whatsapp\"></span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                </li>
                <!-- <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>
                </li> -->
                <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-youtube-play\"></span></a>
                </li>
              </ul>
            </div>

            <div class=\"d-inline-block d-xl-none ml-md-0 mr-auto py-3\" style=\"position: relative; top: 3px;\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-black\"><span class=\"icon-menu h3\"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 53,  115 => 52,  111 => 51,  92 => 34,  79 => 32,  75 => 31,  68 => 27,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-wrap\">

    <div class=\"site-mobile-menu\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icon-close2 js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
    



    <header class=\"site-navbar py-3\" role=\"banner\">

      <div class=\"container-fluid\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-6 col-xl-3\" data-aos=\"fade-down\">
            <h3 class=\"mb-0\"><a href=\"{{ url('/') }}\" class=\"text-black h2 mb-0\">Decor Party Lahat</a></h3>
          </div>
          <div class=\"col-10 col-md-7 d-none d-xl-block\" data-aos=\"fade-down\">
            <nav class=\"site-navigation position-relative text-right text-lg-center\" role=\"navigation\">

              <ul class=\"site-menu js-clone-nav mx-auto d-none d-lg-block\">
                <li ><a href=\"{{ url('/') }}\">Beranda</a></li>
                <li class=\"has-children\">
                  <a href=\"#\">Galeri</a>
                  <ul class=\"dropdown\">
                  {% for cat in cats%}
                       <li><a href=\"{{ url('/') }}/galery/{{ cat.slug }}\">{{ cat.name }}</a></li>
                  {% endfor %}
                    <!--<li><a href=\"#\">Dekorasi</a></li>
                    <li><a href=\"#\">Hantaran</a></li>
                     <li><a href=\"#\">People</a></li>
                    <li><a href=\"#\">Architecture</a></li>
                    <li><a href=\"#\">Animals</a></li>
                    <li><a href=\"#\">Sports</a></li>
                    <li><a href=\"#\">Travel</a></li>
                    <li class=\"has-children\">
                      <a href=\"#\">Sub Menu</a>
                      <ul class=\"dropdown\">
                        <li><a href=\"#\">Menu One</a></li>
                        <li><a href=\"#\">Menu Two</a></li>
                        <li><a href=\"#\">Menu Three</a></li>
                      </ul>
                    </li> -->
                  </ul>
                </li>
                <li><a href=\"{{ url('/') }}/paket\">Paket</a></li>
                <li><a href=\"{{ url('/') }}/tentang\">Tentang Kami</a></li>
                <li><a href=\"{{ url('/') }}/kontak\">Kontak</a></li>
              </ul>
            </nav>
          </div>

          <div class=\"col-6 col-xl-2 text-right\" data-aos=\"fade-down\">
            <div class=\"d-none d-xl-inline-block\">
              <ul class=\"site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0\" data-class=\"social\">
                <li>
                  <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-whatsapp\"></span></a>
                </li>
                <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                </li>
                <!-- <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>
                </li> -->
                <li>
                  <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-youtube-play\"></span></a>
                </li>
              </ul>
            </div>

            <div class=\"d-inline-block d-xl-none ml-md-0 mr-auto py-3\" style=\"position: relative; top: 3px;\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle text-black\"><span class=\"icon-menu h3\"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>", "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/partials/header.htm", "");
    }
}
