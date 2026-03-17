<?php

class __Mustache_e26ddd7f2e6def99cd8c9e3e54127b32 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<link rel="preconnect" href="https://fonts.googleapis.com">
';
        $buffer .= $indent . '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
';
        $buffer .= $indent . '<link href="https://fonts.googleapis.com/css2?family=Mea+Culpa&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav class="navbar fixed-top bg-body navbar-expand" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="logoSection">
';
        $buffer .= $indent . '        <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
';
        $buffer .= $indent . '            <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '            <span class="visually-hidden">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '          
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-none d-md-flex align-items-center m-0 me-4 p-0 aabtn">
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section461071542e460fd411dfc650298f20d9($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="SearchSection">
';
        $buffer .= $indent . '         <!-- 🔍 Search form -->
';
        $buffer .= $indent . '        <form action="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/course/search.php" method="get" class="form-inline ml-auto d-flex">
';
        $buffer .= $indent . '            <input type="text" name="search" class="form-control mr-2" placeholder="Search courses..." aria-label="Search">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-outline-primary">Search</button>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '        <div class="MenuSection">
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section24380e0aebdb7bb2e019f48a1b717205($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '            <li>
';
        $buffer .= $indent . '            <a class="nav-link" href="https://elearnkranti.com/course/index.php?categoryid=3">Offers</a>
';
        $buffer .= $indent . '           </li>
';
        $buffer .= $indent . '           <li>
';
        $buffer .= $indent . '           <a class="nav-link" href="https://elearnkranti.com/course/index.php?categoryid=1">Courses</a> 
';
        $buffer .= $indent . '           </li>
';
        $buffer .= $indent . '           <li>
';
        $buffer .= $indent . '           <a class="nav-link" href="https://elearnkranti.com/theme/boost/home1.php/#testimonialSection">Testimonials</a> 
';
        $buffer .= $indent . '           </li>
';
        $buffer .= $indent . '           
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '          <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '             <!-- page_heading_menu -->
';
        $buffer .= $indent . '              <li class="nav-item">
';
        $buffer .= $indent . '              <a class="nav-link" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/boost/aboutus.php">About Us</a>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '              <li class="nav-item">
';
        $buffer .= $indent . '               <a class="nav-link" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/boost/contact.php">Contact</a>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . '               <li class="nav-item">
';
        $buffer .= $indent . '               <a class="nav-link" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/boost/contact.php">Request a Call Back</a>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '              <li class="nav-item">
';
        $buffer .= $indent . '               <a class="nav-link" href="https://elearnkranti.com/login/index.php">Log in</a>
';
        $buffer .= $indent . '               </li>
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '        <div id="usernavigation" class="navbar-nav ms-auto h-100">
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->section8759d71b90e6496204ea4d094c43fb8c($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->section106b751726c18d9d0a2600f98b963484($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <!-- 
';
        $buffer .= $indent . '            <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionA9e23d79a85004416d048e2cac960de4($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '       
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .MenuSection{
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .navbar>.container-fluid{
';
        $buffer .= $indent . '            padding: 10px 35px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .SearchSection{
';
        $buffer .= $indent . '            min-width: 40%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .SearchSection input{
';
        $buffer .= $indent . '            min-width: 80%;
';
        $buffer .= $indent . '            border: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .SearchSection form{
';
        $buffer .= $indent . '        border: 1px solid #dddddd;
';
        $buffer .= $indent . '    padding: 4px 4px;
';
        $buffer .= $indent . '    border-radius: 35px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .SearchSection button{
';
        $buffer .= $indent . '        width: 18%;
';
        $buffer .= $indent . '    border-radius: 40px;
';
        $buffer .= $indent . '    background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    border: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .navbar.fixed-top {
';
        $buffer .= $indent . '    border-bottom-left-radius: 30px;
';
        $buffer .= $indent . '    border-bottom-right-radius: 30px;
';
        $buffer .= $indent . '    box-shadow: 0px 10px 10px -12px black !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.moremenu .nav-link.active {
';
        $buffer .= $indent . '    border-bottom-color: white !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.navbar.fixed-top .nav-link {
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media only screen and (max-width: 900px) {
';
        $buffer .= $indent . '  .SearchSection input {
';
        $buffer .= $indent . '        min-width: 65% !important;
';
        $buffer .= $indent . '        max-width: 65% !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .SearchSection button{
';
        $buffer .= $indent . '        width: 30%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</style>
';

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section461071542e460fd411dfc650298f20d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img src="{{output.get_compact_logo_url}}" class="logo me-1" alt="{{sitename}}">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo me-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24380e0aebdb7bb2e019f48a1b717205(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="primary-navigation">
                {{> core/moremenu}}
            </div>
       ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8759d71b90e6496204ea4d094c43fb8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ output.search_box }}}
                <div class="divider border-start h-75 align-self-center mx-1"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="divider border-start h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section106b751726c18d9d0a2600f98b963484(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_boost/language_menu }}
                <div class="divider border-start h-75 align-self-center mx-1"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '                <div class="divider border-start h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e23d79a85004416d048e2cac960de4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/user_menu }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
