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

/* C:\xampp\htdocs\decorpartylahat/themes/dpl/pages/beranda.htm */
class __TwigTemplate_aee2675f9b8dc8a4e9d060ad8e99a50fecb51b43f87611e526703309048bb8b3 extends \Twig\Template
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
        echo "<div class=\"container-fluid\" data-aos=\"fade\" data-aos-delay=\"500\">
    <div class=\"swiper-container images-carousel\">
        <div class=\"swiper-wrapper\">
        
        ";
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 7
            echo "                <div class=\"swiper-slide\">
                  <div class=\"image-wrap\">
                    <div class=\"image-info\">
                      <h2 class=\"mb-3\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
                      <a href=\"galery/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"btn btn-outline-white py-2 px-4\">Lihat Selengkapnya</a>
                    </div>
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "galeries", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 14
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["img"], "images", [], "any", false, false, false, 14));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 15
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) {
                        // line 16
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 16), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 16), "html", null, true);
                        echo "\">
                            ";
                    }
                    // line 18
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                  </div>
                </div>            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        ";
        // line 24
        echo "        
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Wedding Photography</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_1.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Hantaran</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_2.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">People</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_3.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Architecture</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_4.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Animals</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_5.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Sports</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_6.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Travel</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img_7.jpg");
        echo "\" alt=\"Image\">
            </div>
          </div>
          
        </div>

        <div class=\"swiper-pagination\"></div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-scrollbar\"></div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/pages/beranda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 86,  195 => 77,  183 => 68,  171 => 59,  159 => 50,  147 => 41,  134 => 31,  125 => 24,  123 => 23,  115 => 20,  109 => 19,  95 => 18,  87 => 16,  84 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  48 => 7,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" data-aos=\"fade\" data-aos-delay=\"500\">
    <div class=\"swiper-container images-carousel\">
        <div class=\"swiper-wrapper\">
        
        {#looping categories#}
        {% for cat in cats %}
                <div class=\"swiper-slide\">
                  <div class=\"image-wrap\">
                    <div class=\"image-info\">
                      <h2 class=\"mb-3\">{{ cat.name }}</h2>
                      <a href=\"galery/{{ cat.slug }}\" class=\"btn btn-outline-white py-2 px-4\">Lihat Selengkapnya</a>
                    </div>
                    {% for img in cat.galeries %}
                        {% for image in img.images %}
                            {% if loop.first %}
                                <img src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                  </div>
                </div>            
        {% endfor %}
        {#end looping categories#}
        
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Wedding Photography</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_1.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Hantaran</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_2.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">People</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_3.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Architecture</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_4.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Animals</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_5.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Sports</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_6.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          <div class=\"swiper-slide\">
            <div class=\"image-wrap\">
              <div class=\"image-info\">
                <h2 class=\"mb-3\">Travel</h2>
                <a href=\"single.html\" class=\"btn btn-outline-white py-2 px-4\">More Photos</a>
              </div>
              <img src=\"{{ 'assets/images/img_7.jpg' | theme }}\" alt=\"Image\">
            </div>
          </div>
          
        </div>

        <div class=\"swiper-pagination\"></div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-scrollbar\"></div>
    </div>
  </div>", "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/pages/beranda.htm", "");
    }
}
