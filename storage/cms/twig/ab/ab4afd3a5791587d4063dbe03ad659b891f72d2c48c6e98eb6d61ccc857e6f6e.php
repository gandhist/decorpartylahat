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

/* C:\xampp\htdocs\decorpartylahat/themes/dpl/pages/tentang-decor-party-lahat.htm */
class __TwigTemplate_cbd1f1af193484c9aad3d34e367777b898f7ce7e6e8dc3e973b94441a588bab0 extends \Twig\Template
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
        echo "<div class=\"\"  data-aos=\"fade\">
    <div class=\"container-fluid\">
      
      <div class=\"row justify-content-center\">
        <div class=\"col-md-7\">
          <div class=\"row mb-5 site-section\">
            <div class=\"col-12 \">
              <h2 class=\"site-section-heading text-center\">Tentang Decor Party Lahat</h2>
            </div>
          </div>

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tentang"], "posts", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tentang"]) {
            // line 13
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                // line 14
                echo "                    <div class=\"row mb-5\">
                        <div class=\"col-md-7\">
                        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tentang"], "featured_images", [], "any", false, false, false, 16), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 17
                    echo "                          <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" alt=\"Images\" class=\"img-fluid\">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </div>
                        <div class=\"col-md-4 ml-auto\">
                          <h3>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tentang"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</h3>
                          <p>";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["tentang"], "content_html", [], "any", false, false, false, 22);
                echo "</p>
                        </div>
                      </div>
                ";
            }
            // line 26
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tentang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          

         
          <div class=\"row site-section\">
          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 32
            echo "          
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "galeries", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
                // line 34
                echo "                   <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
                       ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["galery"], "images", [], "any", false, false, false, 35));
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
                    // line 36
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                              <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 37), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "name", [], "any", false, false, false, 37), "html", null, true);
                        echo "\" class=\"img-fluid w-50 rounded-circle mb-4\">
                            ";
                    }
                    // line 39
                    echo "                       ";
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
                // line 40
                echo "                      <h2 class=\"text-black font-weight-light mb-4\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</h2>
                      <p class=\"mb-4\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galery"], "description", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
                      <!-- <p>
                        <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                        <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                        <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
                      </p> -->
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "           
            
            <!-- <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
              <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person_2.jpg");
        echo "\" alt=\"Image\" class=\"img-fluid w-50 rounded-circle mb-4\">
              <h2 class=\"text-black font-weight-light mb-4\">Claire Smith</h2>
              <p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
              </p>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
              <img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/person_4.jpg");
        echo "\" alt=\"Image\" class=\"img-fluid w-50 rounded-circle mb-4\">
              <h2 class=\"text-black font-weight-light mb-4\">John Smith</h2>
              <p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
              </p>
            </div> -->
            
          </div>
        </div>
    
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/pages/tentang-decor-party-lahat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 64,  209 => 54,  204 => 51,  197 => 49,  183 => 41,  178 => 40,  164 => 39,  156 => 37,  153 => 36,  136 => 35,  133 => 34,  129 => 33,  126 => 32,  122 => 31,  116 => 27,  102 => 26,  95 => 22,  91 => 21,  87 => 19,  78 => 17,  74 => 16,  70 => 14,  67 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"\"  data-aos=\"fade\">
    <div class=\"container-fluid\">
      
      <div class=\"row justify-content-center\">
        <div class=\"col-md-7\">
          <div class=\"row mb-5 site-section\">
            <div class=\"col-12 \">
              <h2 class=\"site-section-heading text-center\">Tentang Decor Party Lahat</h2>
            </div>
          </div>

            {% for tentang in tentang.posts %}
                {% if loop.first %}
                    <div class=\"row mb-5\">
                        <div class=\"col-md-7\">
                        {% for image in tentang.featured_images|slice(0,1) %}
                          <img src=\"{{ image.path }}\" alt=\"Images\" class=\"img-fluid\">
                        {% endfor %}
                        </div>
                        <div class=\"col-md-4 ml-auto\">
                          <h3>{{ tentang.title }}</h3>
                          <p>{{ tentang.content_html | raw}}</p>
                        </div>
                      </div>
                {% endif %}
            {% endfor %}
          

         
          <div class=\"row site-section\">
          {% for cat in cats %}
          
              {% for galery in cat.galeries %}
                   <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
                       {% for image in galery.images%}
                           {% if loop.first %}
                              <img src=\"{{ image.path }}\" alt=\"{{ galery.name }}\" class=\"img-fluid w-50 rounded-circle mb-4\">
                            {% endif %}
                       {% endfor %}
                      <h2 class=\"text-black font-weight-light mb-4\">{{ galery.name }}</h2>
                      <p class=\"mb-4\">{{ galery.description }}</p>
                      <!-- <p>
                        <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                        <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                        <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
                      </p> -->
                    </div>
                {% endfor %}
            
          {% endfor %}
           
            
            <!-- <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
              <img src=\"{{ 'assets/images/person_2.jpg' | theme }}\" alt=\"Image\" class=\"img-fluid w-50 rounded-circle mb-4\">
              <h2 class=\"text-black font-weight-light mb-4\">Claire Smith</h2>
              <p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
              </p>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-4 text-center mb-5\">
              <img src=\"{{ 'assets/images/person_4.jpg' | theme }}\" alt=\"Image\" class=\"img-fluid w-50 rounded-circle mb-4\">
              <h2 class=\"text-black font-weight-light mb-4\">John Smith</h2>
              <p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-twitter\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-facebook\"></span></a>
              </p>
            </div> -->
            
          </div>
        </div>
    
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\decorpartylahat/themes/dpl/pages/tentang-decor-party-lahat.htm", "");
    }
}
