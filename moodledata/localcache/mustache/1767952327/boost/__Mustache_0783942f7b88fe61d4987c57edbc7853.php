<?php

class __Mustache_0783942f7b88fe61d4987c57edbc7853 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer class="footer">
';
        $buffer .= $indent . '  <div class="footer-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Left Side -->
';
        $buffer .= $indent . '    <div class="top">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '     
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.loggedinuser');
        $buffer .= $this->section3dc8d947d7682934dd203846cecd5a44($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Right Side -->
';
        $buffer .= $indent . '    <div class="footer-right">
';
        $buffer .= $indent . '      <div class="footer-down">
';
        $buffer .= $indent . '          <img src="https://elearnkranti.com/pluginfile.php/1/core_admin/logocompact/300x300/1767950654/eLearnKranti%20Logo%20%281%29.png" class="logo me-1" alt="Pariksha Kranti" style="margin-bottom: 20px !important;">
';
        $buffer .= $indent . '        <p>Join eLearnKranti, India\'s premier e-learning platform launched in 2025, empowering learners with cutting-edge skills for a dynamic future.</p>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="footer-down">
';
        $buffer .= $indent . '        <h4>Data Science</h4>
';
        $buffer .= $indent . '        <ul>
';
        $buffer .= $indent . '          <li>Python</li>
';
        $buffer .= $indent . '          <li>Machine Learning</li>
';
        $buffer .= $indent . '          <li>ChatGPT</li>
';
        $buffer .= $indent . '          <li>Deep Learning</li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="footer-down">
';
        $buffer .= $indent . '        <h4>Legal & Accessibility</h4>
';
        $buffer .= $indent . '        <ul>
';
        $buffer .= $indent . '         <li><a href="https://elearnkranti.com/theme/boost/privacy-policy.php">Privacy Policy</a></li>
';
        $buffer .= $indent . '          <li><a href="https://elearnkranti.com/theme/boost/terms.php">Terms</a></li>
';
        $buffer .= $indent . '          <li>Accessibility statement</li>
';
        $buffer .= $indent . '          <li>Sitemap</li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '     <div class="footer-down">
';
        $buffer .= $indent . '        <h4>Contact Information</h4>
';
        $buffer .= $indent . '        <ul>
';
        $buffer .= $indent . '          <li>Phone: +91 6284910733</li>
';
        $buffer .= $indent . '          <li>Email: info@elearnkranti.com</li>
';
        $buffer .= $indent . '          <li><a href="https://www.linkedin.com/in/elearn-kranti-a1ab65395/">Linkedin</a></li>
';
        $buffer .= $indent . '          <li><a href="https://www.instagram.com/elearnkranti?igsh=aDZpcnpmNGxoZWF6&utm_source=qr">Instagram</a></li>
';
        $buffer .= $indent . '          <li><a href="https://www.facebook.com/profile.php?id=61585129565822">Facebook</a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '     
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.MenuSection {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    flex-wrap: wrap;
';
        $buffer .= $indent . '    align-items: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer {
';
        $buffer .= $indent . '       color: white;
';
        $buffer .= $indent . '    margin-top: 65px !important;
';
        $buffer .= $indent . '    padding: 0px 20px !important;
';
        $buffer .= $indent . '   
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-container {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  justify-content: space-between;
';
        $buffer .= $indent . '  max-width: 1200px;
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.footer {
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.top {
';
        $buffer .= $indent . '  padding-top:40px;
';
        $buffer .= $indent . '  padding-left:5px;
';
        $buffer .= $indent . '  padding-bottom:40px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-right {
';
        $buffer .= $indent . '  flex: 2 1 600px;
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down h4 {
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down ul {
';
        $buffer .= $indent . '  list-style: none;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down ul li {
';
        $buffer .= $indent . '  margin-bottom: 6px;
';
        $buffer .= $indent . '  color: #eee;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer a {
';
        $buffer .= $indent . '  color: #ddd;
';
        $buffer .= $indent . '  text-decoration: underline;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer a:hover {
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '  text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.contact-info span,
';
        $buffer .= $indent . '.contact-info div,
';
        $buffer .= $indent . '.contact-info h5 {
';
        $buffer .= $indent . '  display: block;
';
        $buffer .= $indent . '  margin-bottom: 0px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer {
';
        $buffer .= $indent . '  background-color: #111;
';
        $buffer .= $indent . '  padding: 40px 20px;
';
        $buffer .= $indent . '  margin-top: 65px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-container {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  max-width: 1200px;
';
        $buffer .= $indent . '  margin: auto;
';
        $buffer .= $indent . '  gap: 40px;
';
        $buffer .= $indent . '  justify-content: space-between;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-left {
';
        $buffer .= $indent . '  flex: 1 1 300px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-right {
';
        $buffer .= $indent . '  padding-bottom:40px;
';
        $buffer .= $indent . '  padding-left:55px;
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
';
        $buffer .= $indent . '  gap: 0px;
';
        $buffer .= $indent . '  flex: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down h4 {
';
        $buffer .= $indent . ' margin-bottom: 15px;
';
        $buffer .= $indent . '    font-size: 19px;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down ul {
';
        $buffer .= $indent . '  list-style: none;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down li {
';
        $buffer .= $indent . '  margin-bottom: 6px;
';
        $buffer .= $indent . '  color: #ccc;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-down li:hover {
';
        $buffer .= $indent . '  text-decoration: underline;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.logo {
';
        $buffer .= $indent . '    max-height: 100px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    #page.drawers .main-inner {
';
        $buffer .= $indent . '        padding-bottom: 0px !important;
';
        $buffer .= $indent . '        margin-bottom: 0px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.pagelayout-login #page {
';
        $buffer .= $indent . '    background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'body {
';
        $buffer .= $indent . '    font-family: Source Sans Pro, Arial, sans-serif;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.SearchSection input {
';
        $buffer .= $indent . '    min-width: 72%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.SearchSection button {
';
        $buffer .= $indent . '    width: 25% !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.SearchSection {
';
        $buffer .= $indent . '    min-width: 30%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.moremenu {
';
        $buffer .= $indent . '    opacity: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover bg-white">
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $value = $context->findDot('output.has_communication_links');
        $buffer .= $this->section602f3005367b3c9bf8105a87afae8b81($context, $indent, $value);
        $buffer .= $indent . '        <button class="btn btn-icon rounded-circle bg-secondary btn-footer-popover" data-action="footer-popover" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $value = $context->findDot('output.has_communication_links');
        $buffer .= $this->section7007562b9ab7006319b87a63920689c6($context, $indent, $value);
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->sectionC68a95f2697d1b21f4fc175ffa89b526($context, $indent, $value);
        $buffer .= $indent . '        <div class="footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="logininfo">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-section p-3">
';
        $buffer .= $indent . '            <div>';
        $value = $context->find('str');
        $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->section73bb8cb2a5e4cb71f2710d52886fa70e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section3dc8d947d7682934dd203846cecd5a44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          
            You are logged in as 
            <a href="{{{ output.userprofileurl }}}" title="View profile">{{{ output.userfullname }}}</a> 
            (<a href="{{{ config.wwwroot }}}/login/logout.php?sesskey={{{ sesskey }}}">Log out</a>)
          
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          
';
                $buffer .= $indent . '            You are logged in as 
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('output.userprofileurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="View profile">';
                $value = $this->resolveValue($context->findDot('output.userfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a> 
';
                $buffer .= $indent . '            (<a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/login/logout.php?sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">Log out</a>)
';
                $buffer .= $indent . '          
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c32b600d68c4d5f6fb463bea0a43a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'communicationroomlink, course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'communicationroomlink, course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section860fe5efd27e2c99776d92b09bfc4939(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/messages-o, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/messages-o, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section602f3005367b3c9bf8105a87afae8b81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button onclick="window.open(\'{{output.communication_url}}\', \'_blank\', \'noreferrer\')" class="btn btn-icon rounded-circle bg-primary text-white btn-footer-communication" aria-label="{{#str}}communicationroomlink, course{{/str}}">
                {{#pix}}t/messages-o, core{{/pix}}
            </button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button onclick="window.open(\'';
                $value = $this->resolveValue($context->findDot('output.communication_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'_blank\', \'noreferrer\')" class="btn btn-icon rounded-circle bg-primary text-white btn-footer-communication" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section01c32b600d68c4d5f6fb463bea0a43a3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section860fe5efd27e2c99776d92b09bfc4939($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7007562b9ab7006319b87a63920689c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom footer-link-communication">
                <div class="footer-support-link">{{{ output.communication_link }}}</div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom footer-link-communication">
';
                $buffer .= $indent . '                <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.communication_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76730a1d361b59f6efa3392d18acfa6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdeddc10d5f166c43913b111f7bf7957(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ea107a85e6f3b99491abdb216e5970a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC68a95f2697d1b21f4fc175ffa89b526(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div class="footer-support-link">{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
            
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section76730a1d361b59f6efa3392d18acfa6b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionFdeddc10d5f166c43913b111f7bf7957($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section0ea107a85e6f3b99491abdb216e5970a($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bb8cb2a5e4cb71f2710d52886fa70e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
