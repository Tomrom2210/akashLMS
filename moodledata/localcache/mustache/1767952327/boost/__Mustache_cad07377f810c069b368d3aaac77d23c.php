<?php

class __Mustache_cad07377f810c069b368d3aaac77d23c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="hero-section">
';
        $buffer .= $indent . '  <div class="banner-content"  style="display: none;">
';
        $buffer .= $indent . '     <div class="content-box"> <h1><b>Online Learning & Courses</b> </h1> 
';
        $buffer .= $indent . '     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
';
        $buffer .= $indent . '     </div>
';
        $buffer .= $indent . '     
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  <div id="slider">
';
        $buffer .= $indent . '	<div id="line">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<ul id="move">
';
        $buffer .= $indent . '		<li><img src="https://elearnkranti.com/media/1.jpg"></li>
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '		<li><img src="https://elearnkranti.com/media/2.jpg"></li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '	<div id="back">
';
        $buffer .= $indent . '		<
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<div id="forword">
';
        $buffer .= $indent . '		>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<div id="dots">
';
        $buffer .= $indent . '		
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '    <div class="secondContainer">
';
        $buffer .= $indent . '    <div class="cta-text-wrapper">
';
        $buffer .= $indent . '      <h2 class="cta-heading-unique">
';
        $buffer .= $indent . '        Prepare for Placements, Up skill, and Succeed – 1000+ Courses Await.
';
        $buffer .= $indent . '      </h2>
';
        $buffer .= $indent . '      <p class="cta-subheading-unique">
';
        $buffer .= $indent . '        Join Thousands of Learners Achieving Their Career Dreams
';
        $buffer .= $indent . '      </p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="cta-button-group">
';
        $buffer .= $indent . '      <button class="cta-btn-outline-unique">Try learning for free</button>
';
        $buffer .= $indent . '      <button class="cta-btn-outline-unique">View subscription plans</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="contentContainer">
';
        $buffer .= $indent . '  <section class="hero">
';
        $buffer .= $indent . '    <h1>Your Journey to Excellence Starts with E-Learn Kranti . Smart Learning. Bright Future.</h1>
';
        $buffer .= $indent . '    <p>Welcome to eLearnKranti, a revolutionary e-learning platform designed to empower students, professionals, and dreamers with cutting-edge skills and knowledge to thrive in a dynamic world. Launched in 2025, eLearnKranti is India’s answer to the evolving educational landscape, aligning with the Prime Minister’s vision of a digitally empowered, skill-driven nation. We are committed to fostering innovation, entrepreneurship, and personal growth through a unique blend of domains: skill development, legal education, personality development, marketing, start-ups, and e-IP Cells and e-incubation centers for colleges. Our platform stands out with live interactive sessions led by industry experts and thought leaders, ensuring real-time engagement and personalized learning. Complementing this, our weekly and monthly podcasts bring insights from innovators, entrepreneurs, and educators directly to you, keeping you inspired and informed. Upon course completion, every student receives an e-certificate, a testament to their dedication and newly acquired expertise. At eLearnKranti, we don’t just teach—we ignite curiosity, nurture creativity, and empower you to shape the future. Join us to unlock your potential and be part of India’s educational revolution!</p>
';
        $buffer .= $indent . '    <div class="buttons">
';
        $buffer .= $indent . '      <a class="fill-btn" style="padding: 10px 25px;" href="https://elearnkranti.com/theme/boost/aboutus.php">Read More</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <section class="features" style="display: none;">
';
        $buffer .= $indent . '    <div class="feature-card red">
';
        $buffer .= $indent . '      <h3>📺 Live classes <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Watch free online coaching classes by our best educators.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card blue">
';
        $buffer .= $indent . '      <h3>🎓 Top educators <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Learn from some of the best educators in the country.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card pink">
';
        $buffer .= $indent . '      <h3>👥 Batches <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Curated batches to simplify the learning journey for your goal.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card yellow">
';
        $buffer .= $indent . '      <h3>📚 Courses <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Learn every subject in detail from your favourite educator.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card green">
';
        $buffer .= $indent . '      <h3>📝 Test Series <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Evaluate and boost your exam preparation with test series.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card rose">
';
        $buffer .= $indent . '      <h3>📖 Practice <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Strengthen your exam preparation with adaptive practice tests.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card teal">
';
        $buffer .= $indent . '      <h3>📂 Playlist <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>High quality lecture videos for the entire syllabus for all your subjects.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="feature-card indigo">
';
        $buffer .= $indent . '      <h3>💬 Doubts <span>➔</span></h3>
';
        $buffer .= $indent . '      <p>Get quick and detailed solutions to clarify your doubts.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  <!--
';
        $buffer .= $indent . '  <div class="coursePopularSection">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <section class="popular-section">
';
        $buffer .= $indent . '<div>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="contentContainer">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section class="top-pick">
';
        $buffer .= $indent . '  <h2>Our top pick for you</h2>
';
        $buffer .= $indent . '  <p class="subheading">Your personalized learning journey starts here.</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="course-container">
';
        $buffer .= $indent . '    <div class="course-image">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/images.jpeg" alt="Python Programming Course">
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '   <div class="course-image">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/images.jpeg" alt="Python Programming Course">
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '   <div class="course-image">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/images.jpeg" alt="Python Programming Course">
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '   <div class="course-image">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/images.jpeg" alt="Python Programming Course">
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section class="why-choose-us" style="display: none;">
';
        $buffer .= $indent . '<div class="upskill-container">
';
        $buffer .= $indent . '    <div class="upskill-text-content">
';
        $buffer .= $indent . '      <h1>eLearnKranti Unlocks Talent Retention and Productivity Through Upskilling</h1>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="upskill-stat-block">
';
        $buffer .= $indent . '        <div style="border-bottom: 1px solid #dcdcdc; padding-bottom: 25px;">
';
        $buffer .= $indent . '          <div class="upskill-stat">92%</div>
';
        $buffer .= $indent . '          <div class="upskill-stat-desc">retention rate among participating learners</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div style="border-bottom: 1px solid #dcdcdc; padding-bottom: 25px;">
';
        $buffer .= $indent . '          <div class="upskill-stat">68%</div>
';
        $buffer .= $indent . '          <div class="upskill-stat-desc">of learners noted a positive impact on their productivity</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <a href="#" class="upskill-cta-button">Read full story →</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="upskill-image-content">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/upskill.webp" alt="Team discussion">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' </div>
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  <div class="coursePopularSection">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section class="recommended-section">
';
        $buffer .= $indent . '  <h2>Recommended to you based on ratings</h2>
';
        $buffer .= $indent . '  <p class="subtitle">Highly rated, widely loved — just for you.</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="course-grid">
';
        $buffer .= $indent . '    <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '      <h3>Python Programming</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹540</span>
';
        $buffer .= $indent . '        <span class="original">₹1200</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '      <h3>JavaScript</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '      <h3>C Language</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '      <h3>Java</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '     <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '      <h3>Python Programming</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹540</span>
';
        $buffer .= $indent . '        <span class="original">₹1200</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '      <h3>JavaScript</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '      <h3>C Language</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="course-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '      <h3>Java</h3>
';
        $buffer .= $indent . '      <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '      <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '      <div class="price">
';
        $buffer .= $indent . '        <span class="discounted">₹720</span>
';
        $buffer .= $indent . '        <span class="original">₹1300</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="view-all-container">
';
        $buffer .= $indent . '    <button class="view-all-btn">View all</button>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="contentContainer">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="courseCard-container">
';
        $buffer .= $indent . '    <img class="courseCard-image" src="https://elearnkranti.com/media/1.webp" alt="Python Course Thumbnail">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="courseCard-content">
';
        $buffer .= $indent . '      <div class="courseCard-title">Python Programming Full Course</div>
';
        $buffer .= $indent . '      <div class="courseCard-subtitle">From zero to hero — become job-ready with Python skills.</div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <div class="courseCard-instructor">By Amit Tiwari</div>
';
        $buffer .= $indent . '      <div class="courseCard-update">Updated August 2024</div>
';
        $buffer .= $indent . '      <div class="courseCard-meta">25 hours&nbsp;&nbsp; 52 Lectures&nbsp;&nbsp; All levels</div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <div class="courseCard-stars">★★★★★</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="courseCard-tags">
';
        $buffer .= $indent . '        <div class="courseCard-tag-filled">Premium</div>
';
        $buffer .= $indent . '        <div class="courseCard-tag-outline">Highest Rated</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="courseCard-price">₹ 559</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="testimonialparantSection">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section class="top-educators-section">
';
        $buffer .= $indent . '  <h2>India\'s top educators to learn from</h2>
';
        $buffer .= $indent . '  <p class="subtitle">Learn from the top, to rise to the top.</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="educators-container">
';
        $buffer .= $indent . '    <!-- Educator Card 1 -->
';
        $buffer .= $indent . '    <div class="educator-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/pro1.webp" alt="Dheeraj Kumar">
';
        $buffer .= $indent . '      <h3>Dheeraj Kumar</h3>
';
        $buffer .= $indent . '      <p>16+ years of teaching experience<br>Qualified– NET, CAT, GATE</p>
';
        $buffer .= $indent . '      <div class="stats">
';
        $buffer .= $indent . '        <span><strong>6M</strong><br>Watch Mins</span>
';
        $buffer .= $indent . '        <span><strong>10K</strong><br>Followers</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="profile-link">View Profile &gt;</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Educator Card 2 -->
';
        $buffer .= $indent . '    <div class="educator-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/pro2.avif" alt="Ravi Prakash">
';
        $buffer .= $indent . '      <h3>Ravi Prakash</h3>
';
        $buffer .= $indent . '      <p>12+ years of teaching experience<br>Qualified– NET, CAT, GATE</p>
';
        $buffer .= $indent . '      <div class="stats">
';
        $buffer .= $indent . '        <span><strong>5M</strong><br>Watch Mins</span>
';
        $buffer .= $indent . '        <span><strong>8K</strong><br>Followers</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="profile-link">View Profile &gt;</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Educator Card 3 -->
';
        $buffer .= $indent . '    <div class="educator-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/pro3.avif" alt="Pooja Patel">
';
        $buffer .= $indent . '      <h3>Pooja Patel</h3>
';
        $buffer .= $indent . '      <p>15+ years of teaching experience<br>Qualified– NET, CAT, GATE</p>
';
        $buffer .= $indent . '      <div class="stats">
';
        $buffer .= $indent . '        <span><strong>8M</strong><br>Watch Mins</span>
';
        $buffer .= $indent . '        <span><strong>12K</strong><br>Followers</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="profile-link">View Profile &gt;</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Educator Card 4 -->
';
        $buffer .= $indent . '    <div class="educator-card">
';
        $buffer .= $indent . '      <img src="https://elearnkranti.com/media/pro4.avif" alt="Priya Sharma">
';
        $buffer .= $indent . '      <h3>Priya Sharma</h3>
';
        $buffer .= $indent . '      <p>8+ years of teaching experience<br>Qualified– NET, CAT, GATE</p>
';
        $buffer .= $indent . '      <div class="stats">
';
        $buffer .= $indent . '        <span><strong>4M</strong><br>Watch Mins</span>
';
        $buffer .= $indent . '        <span><strong>6K</strong><br>Followers</span>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="profile-link">View Profile &gt;</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="view-all-container" style="display: none;">
';
        $buffer .= $indent . '    <button class="view-all-btn">View all educators</button>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
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
        $buffer .= $indent . '<section class="courses-section">
';
        $buffer .= $indent . '        <h1>Explore Our Courses</h1>
';
        $buffer .= $indent . '        <p class="subtitle">A wide range of topics to help you learn, grow, and succeed.</p>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-all" class="tab-input" checked>
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-it" class="tab-input">
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-design" class="tab-input">
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-business" class="tab-input">
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-development" class="tab-input">
';
        $buffer .= $indent . '            <input type="radio" name="tabs" id="tab-personal" class="tab-input">
';
        $buffer .= $indent . '            <div class="tabs">
';
        $buffer .= $indent . '                <label for="tab-all" class="tab-button tab-all active">All</label>
';
        $buffer .= $indent . '                <label for="tab-it" class="tab-button tab-it">IT & Software</label>
';
        $buffer .= $indent . '                <label for="tab-design" class="tab-button tab-design">Design</label>
';
        $buffer .= $indent . '                <label for="tab-business" class="tab-button tab-business">Business</label>
';
        $buffer .= $indent . '                <label for="tab-development" class="tab-button tab-development">Development</label>
';
        $buffer .= $indent . '                <label for="tab-personal" class="tab-button tab-personal">Personal Development</label>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="all-content">
';
        $buffer .= $indent . '                           <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="it-content">
';
        $buffer .= $indent . '                <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="design-content">
';
        $buffer .= $indent . '                 <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="business-content">
';
        $buffer .= $indent . '                 <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="development-content">
';
        $buffer .= $indent . '                 <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tab-content" id="personal-content">
';
        $buffer .= $indent . '                <div class="course-grid">
';
        $buffer .= $indent . '                                <!-- Repeat this block for each course -->
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                 <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/python.png" alt="Python Course">
';
        $buffer .= $indent . '                                  <h3>Python Programming</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhishek Singh</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹540</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1200</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/theme/boost/pix/javascript.jpeg" alt="JavaScript Course">
';
        $buffer .= $indent . '                                  <h3>JavaScript</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                  
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/c.png" alt="C Course">
';
        $buffer .= $indent . '                                  <h3>C Language</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                                <div class="course-card">
';
        $buffer .= $indent . '                                  <img src="https://elearnkranti.com/media/Java.webp" alt="Java Course">
';
        $buffer .= $indent . '                                  <h3>Java</h3>
';
        $buffer .= $indent . '                                  <p class="instructor">By Abhay Sinha</p>
';
        $buffer .= $indent . '                                  <div class="stars">⭐️⭐️⭐️⭐️⭐️</div>
';
        $buffer .= $indent . '                                  <div class="price">
';
        $buffer .= $indent . '                                    <span class="discounted">₹720</span>
';
        $buffer .= $indent . '                                    <span class="original">₹1300</span>
';
        $buffer .= $indent . '                                  </div>
';
        $buffer .= $indent . '                                  <button class="premium-btn">Premium</button>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </section>
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="contentContainer">
';
        $buffer .= $indent . '<section class="testimonialSection" id="testimonialSection">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h2>Our Testimonials</h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="testimonials">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="testimonial-card">
';
        $buffer .= $indent . '      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
';
        $buffer .= $indent . '         <div class="quote-icon">❝</div>
';
        $buffer .= $indent . '      <p class="testimonial-text">
';
        $buffer .= $indent . '        Because of this course I was able to clear my two interviews... Thanks for making such wonderful content.
';
        $buffer .= $indent . '      </p>
';
        $buffer .= $indent . '      <div class="profile">
';
        $buffer .= $indent . '        <div class="avatar">DS</div>
';
        $buffer .= $indent . '        <div class="name">Diksha S</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="course-link">Business Intelligence (BI) →</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="testimonial-card">
';
        $buffer .= $indent . '        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
';
        $buffer .= $indent . '      <div class="quote-icon">❝</div>
';
        $buffer .= $indent . '      <p class="testimonial-text">
';
        $buffer .= $indent . '        This has helped me so much in my career...I joined as a frontend engineer and eventually transitioned to full stack engineer with the help of this course.
';
        $buffer .= $indent . '      </p>
';
        $buffer .= $indent . '      <div class="profile">
';
        $buffer .= $indent . '        <div class="avatar">CB</div>
';
        $buffer .= $indent . '        <div class="name">Chethan B</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="course-link">View this Go (golang) course →</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="testimonial-card">
';
        $buffer .= $indent . '        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
';
        $buffer .= $indent . '      <div class="quote-icon">❝</div>
';
        $buffer .= $indent . '      <p class="testimonial-text">
';
        $buffer .= $indent . '        Today, I am a software developer, and I credit a significant part of my success to the solid foundation laid by this course.
';
        $buffer .= $indent . '      </p>
';
        $buffer .= $indent . '      <div class="profile">
';
        $buffer .= $indent . '        <div class="avatar">BK</div>
';
        $buffer .= $indent . '        <div class="name">Batchu K</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="course-link">View this Java course →</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="testimonial-card">
';
        $buffer .= $indent . '        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
';
        $buffer .= $indent . '      <div class="quote-icon">❝</div>
';
        $buffer .= $indent . '      <p class="testimonial-text">
';
        $buffer .= $indent . '        I would highly recommend this Web Development Bootcamp to anyone interested in pursuing a career in web development or looking to enhance their skills in this field.
';
        $buffer .= $indent . '      </p>
';
        $buffer .= $indent . '      <div class="profile">
';
        $buffer .= $indent . '        <div class="avatar">AK</div>
';
        $buffer .= $indent . '        <div class="name">Ankit K</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <a href="#" class="course-link">View this Web Development course →</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' <section class="blog-section">
';
        $buffer .= $indent . '    <h2 class="blog-heading">Popular Articles</h2>
';
        $buffer .= $indent . '    <div class="blog-grid">
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <!-- Blog Card 1 -->
';
        $buffer .= $indent . '      <div class="blog-card">
';
        $buffer .= $indent . '          <a href="https://elearnkranti.com/theme/boost/post-1.php">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <img style="width: -webkit-fill-available; margin-bottom: 20px; border-radius: 5px;" src="https://elearnkranti.com/media/blogimage.png" alt="">
';
        $buffer .= $indent . '          <div class="blog-category">Development</div>
';
        $buffer .= $indent . '          <div class="blog-title">Types of AI: Understanding Artificial Intelligence</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="blog-author">
';
        $buffer .= $indent . '          <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Genefa Murphy">
';
        $buffer .= $indent . '          <div class="blog-author-name">Genefa Murphy</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Blog Card 2 -->
';
        $buffer .= $indent . '      <div class="blog-card">
';
        $buffer .= $indent . '           <a href="https://elearnkranti.com/theme/boost/post-1.php">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <img style="width: -webkit-fill-available; margin-bottom: 20px; border-radius: 5px;" src="https://elearnkranti.com/media/blogimage.png" alt="">
';
        $buffer .= $indent . '          <div class="blog-category">Design</div>
';
        $buffer .= $indent . '          <div class="blog-title">UX Design Process: A Step-by-Step Guide to Building Better User Experiences</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="blog-author">
';
        $buffer .= $indent . '          <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Megan Russell">
';
        $buffer .= $indent . '          <div class="blog-author-name">Megan Russell</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Blog Card 3 -->
';
        $buffer .= $indent . '      <div class="blog-card">
';
        $buffer .= $indent . '           <a href="https://elearnkranti.com/theme/boost/post-1.php">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <img style="width: -webkit-fill-available; margin-bottom: 20px; border-radius: 5px;" src="https://elearnkranti.com/media/blogimage.png" alt="">
';
        $buffer .= $indent . '          <div class="blog-category">Development</div>
';
        $buffer .= $indent . '          <div class="blog-title">What Is Unreal Engine?</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="blog-author">
';
        $buffer .= $indent . '          <img src="https://randomuser.me/api/portraits/women/35.jpg" alt="Lucy Becker">
';
        $buffer .= $indent . '          <div class="blog-author-name">Lucy Becker (GameDev.tv) et al.</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '         </a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
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
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- 
';
        $buffer .= $indent . '<footer class="footer">
';
        $buffer .= $indent . '  <div class="footer-container">
';
        $buffer .= $indent . '
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
        $buffer .= $this->section4646640bf88a9b87d9ee4b9fc8187779($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   
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
        $buffer .= $indent . '-->
';
        if ($partial = $this->mustache->loadPartial('theme_boost/footer')) {
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
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '* {
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  box-sizing: border-box;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#frontpage-available-course-list h2 {
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.contentContainer{
';
        $buffer .= $indent . '        max-width: 1240px;
';
        $buffer .= $indent . '    margin: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.searchbar-wrapper {
';
        $buffer .= $indent . '  max-width: 300px;
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Top Banner */
';
        $buffer .= $indent . '.top-banner { 
';
        $buffer .= $indent . '  width:100%;
';
        $buffer .= $indent . '  background-color: #000;
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  padding: 10px;
';
        $buffer .= $indent . '  font-size: 15px;
';
        $buffer .= $indent . '  font-weight: 500;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.banner-content {
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  background-image: url(\'https://elearnkranti.com/media/mainBanner3.png\'); /* Replace with your image path */
';
        $buffer .= $indent . '  background-repeat: no-repeat;
';
        $buffer .= $indent . '  background-size: cover;
';
        $buffer .= $indent . '  background-position: center;
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  height: 450px; /* Adjust as needed */
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  justify-content: left;
';
        $buffer .= $indent . '  text-align: left;
';
        $buffer .= $indent . '  padding: 50px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.content-box{
';
        $buffer .= $indent . '    width: 450px;
';
        $buffer .= $indent . '    padding: 20px;
';
        $buffer .= $indent . '    background: white;
';
        $buffer .= $indent . '    box-shadow: 0 2px 12px -7px black;
';
        $buffer .= $indent . '    border-radius: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.banner-content h1 {
';
        $buffer .= $indent . '  text-align: left;
';
        $buffer .= $indent . '    font-size: 25px;
';
        $buffer .= $indent . '  color: #111;
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  margin-bottom: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.banner-content h3 {
';
        $buffer .= $indent . '  font-size: 28px;
';
        $buffer .= $indent . '  font-weight: 700;
';
        $buffer .= $indent . '  color: #111;
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  padding-right:120px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Header */
';
        $buffer .= $indent . '.header {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: space-between;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  padding: 20px 5%;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Left: Logo + Search */
';
        $buffer .= $indent . '.left-section {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  flex: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.logo {
';
        $buffer .= $indent . '  width: 60px;
';
        $buffer .= $indent . '  height: auto;
';
        $buffer .= $indent . '  object-fit: contain;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Search Bar */
';
        $buffer .= $indent . '.search-bar {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  padding: 10px 15px;
';
        $buffer .= $indent . '  border-radius: 15px;
';
        $buffer .= $indent . '  box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
';
        $buffer .= $indent . '  flex: 1;
';
        $buffer .= $indent . '  max-width: 400px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.search-icon {
';
        $buffer .= $indent . '  margin-right: 10px;
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.search-bar input {
';
        $buffer .= $indent . '  border: none;
';
        $buffer .= $indent . '  outline: none;
';
        $buffer .= $indent . '  background: transparent;
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Navigation Links */
';
        $buffer .= $indent . '.nav-links {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  gap: 25px;
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.nav-links a {
';
        $buffer .= $indent . '  text-decoration: none;
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '  font-weight: 500;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.nav-links a:hover {
';
        $buffer .= $indent . '  color: #007BFF;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* .front{
';
        $buffer .= $indent . '    width: 1310px;
';
        $buffer .= $indent . '    height: 350px;
';
        $buffer .= $indent . '    object-fit: cover;
';
        $buffer .= $indent . '} */
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.hero {
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  max-width: 990px;
';
        $buffer .= $indent . '  margin: 60px auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.hero h1 {
';
        $buffer .= $indent . '  font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '  margin-top: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.hero p {
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  margin-bottom: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.buttons {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'button {
';
        $buffer .= $indent . '  padding: 12px 20px;
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  border-radius: 8px;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '  border: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.hero-section img{
';
        $buffer .= $indent . '  width:100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.outline-btn {
';
        $buffer .= $indent . '    border-radius: 50px;
';
        $buffer .= $indent . '  background: #fff;
';
        $buffer .= $indent . '  border: 2px solid #000;
';
        $buffer .= $indent . '  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.fill-btn {
';
        $buffer .= $indent . '  background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
';
        $buffer .= $indent . '  border-radius: 50px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.fill-btn:hover{
';
        $buffer .= $indent . '    background-image: linear-gradient(101deg, #4b5aed, #a865e9);
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '   .secondContainer {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    justify-content: space-between;
';
        $buffer .= $indent . '    align-items: center;
';
        $buffer .= $indent . '    flex-wrap: wrap;
';
        $buffer .= $indent . '    padding: 35px 70px;
';
        $buffer .= $indent . '       background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.popular-section h2 {
';
        $buffer .= $indent . '    font-size: 30px !important;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-text-wrapper {
';
        $buffer .= $indent . '      max-width: 550px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-heading-unique {
';
        $buffer .= $indent . '      font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '      margin-bottom: 16px;
';
        $buffer .= $indent . '      color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-subheading-unique {
';
        $buffer .= $indent . '      color: #fff;
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-button-group {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      flex-direction: column;
';
        $buffer .= $indent . '      gap: 15px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-btn-outline-unique {
';
        $buffer .= $indent . '      background-color: #fff;
';
        $buffer .= $indent . '      color: #111;
';
        $buffer .= $indent . '      border: 2px solid #000;
';
        $buffer .= $indent . '      padding: 12px 24px;
';
        $buffer .= $indent . '      font-size: 18px;
';
        $buffer .= $indent . '      border-radius: 60px;
';
        $buffer .= $indent . '      cursor: pointer;
';
        $buffer .= $indent . '      box-shadow: 1px 1px 4px rgba(0,0,0,0.2);
';
        $buffer .= $indent . '      transition: 0.3s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-btn-outline-unique:hover {
';
        $buffer .= $indent . '      background-color: #f0f0f0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-btn-filled-unique {
';
        $buffer .= $indent . '      background-color: #fff;
';
        $buffer .= $indent . '    color: #1d4c51;
';
        $buffer .= $indent . '      border: none;
';
        $buffer .= $indent . '      padding: 14px 26px;
';
        $buffer .= $indent . '      font-size: 18px;
';
        $buffer .= $indent . '      border-radius: 60px;
';
        $buffer .= $indent . '      cursor: pointer;
';
        $buffer .= $indent . '      box-shadow: 1px 1px 4px rgba(0,0,0,0.2);
';
        $buffer .= $indent . '      transition: 0.3s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .cta-btn-filled-unique:hover {
';
        $buffer .= $indent . '      background-color: #174144;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 768px) {
';
        $buffer .= $indent . '      .secondContainer {
';
        $buffer .= $indent . '        flex-direction: column;
';
        $buffer .= $indent . '        gap: 30px;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      .cta-button-group {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        align-items: flex-start;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '    }
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '.features {
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(4, 1fr); /* 4 fixed columns on large screens */
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.feature-card {
';
        $buffer .= $indent . '  padding: 16px;
';
        $buffer .= $indent . '  border: 2px solid #ccc;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '  background: #fff;
';
        $buffer .= $indent . '  transition: transform 0.2s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.feature-card h3 {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: space-between;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  margin-bottom: 8px;
';
        $buffer .= $indent . '  font-size: 1.05rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Match text color to border color */
';
        $buffer .= $indent . '.feature-card.red h3 { color: #ff4d4f; }
';
        $buffer .= $indent . '.feature-card.blue h3 { color: #4f75ff; }
';
        $buffer .= $indent . '.feature-card.pink h3 { color: #e89dd0; }
';
        $buffer .= $indent . '.feature-card.yellow h3 { color: #f8c954; }
';
        $buffer .= $indent . '.feature-card.green h3 { color: #5dd381; }
';
        $buffer .= $indent . '.feature-card.rose h3 { color: #e47285; }
';
        $buffer .= $indent . '.feature-card.teal h3 { color: #9fdfe0; }
';
        $buffer .= $indent . '.feature-card.indigo h3 { color: #9a9fff; }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Colored borders */
';
        $buffer .= $indent . '.feature-card.red { border-color: #ff4d4f; }
';
        $buffer .= $indent . '.feature-card.blue { border-color: #4f75ff; }
';
        $buffer .= $indent . '.feature-card.pink { border-color: #e89dd0; }
';
        $buffer .= $indent . '.feature-card.yellow { border-color: #f8c954; }
';
        $buffer .= $indent . '.feature-card.green { border-color: #5dd381; }
';
        $buffer .= $indent . '.feature-card.rose { border-color: #e47285; }
';
        $buffer .= $indent . '.feature-card.teal { border-color: #9fdfe0; }
';
        $buffer .= $indent . '.feature-card.indigo { border-color: #9a9fff; }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.feature-card p {
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  line-height: 1.4;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.feature-card:hover {
';
        $buffer .= $indent . '  transform: translateY(-5px);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Medium Screens - show 2 per row */
';
        $buffer .= $indent . '@media (max-width: 1024px) {
';
        $buffer .= $indent . '  .features {
';
        $buffer .= $indent . '    grid-template-columns: repeat(2, 1fr);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Small Screens - stack in 1 column */
';
        $buffer .= $indent . '@media (max-width: 600px) {
';
        $buffer .= $indent . '  .features {
';
        $buffer .= $indent . '    grid-template-columns: 1fr;
';
        $buffer .= $indent . '    padding: 15px;
';
        $buffer .= $indent . '    gap: 15px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .feature-card {
';
        $buffer .= $indent . '    padding: 12px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .feature-card h3 {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .feature-card p {
';
        $buffer .= $indent . '    font-size: 12.5px;
';
        $buffer .= $indent . '  }
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '.popular-section {
';
        $buffer .= $indent . '        max-width: 1240px;
';
        $buffer .= $indent . '     display: flex;
';
        $buffer .= $indent . '    flex-direction: column;
';
        $buffer .= $indent . '    gap: 20px;
';
        $buffer .= $indent . '     clear: both; 
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '  padding: 30px 0px; /* Add padding for smaller screens */
';
        $buffer .= $indent . '  box-sizing: border-box;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.courses {
';
        $buffer .= $indent . '    padding: 0px !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.popular-section h2 {
';
        $buffer .= $indent . '  font-size: 2rem;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.popular-section p {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  color: #555;
';
        $buffer .= $indent . '  margin-bottom: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.popular-section .badge {
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  padding: 6px 12px;
';
        $buffer .= $indent . '  border-radius: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Responsive styles */
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .popular-section {
';
        $buffer .= $indent . '    margin: 40px auto;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .popular-section h2 {
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .popular-section p {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '    margin-bottom: 20px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .popular-section .badge {
';
        $buffer .= $indent . '    font-size: 0.85rem;
';
        $buffer .= $indent . '    padding: 5px 10px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .popular-section h2 {
';
        $buffer .= $indent . '    font-size: 1.3rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .popular-section p {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .popular-section .badge {
';
        $buffer .= $indent . '    font-size: 0.8rem;
';
        $buffer .= $indent . '    padding: 4px 8px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.courses frontpage-course-list-all{
';
        $buffer .= $indent . '  margin-bottom:40px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.navbar-nav{
';
        $buffer .= $indent . '  align-items:right;
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
        $buffer .= $indent . '.coursebox .info {
';
        $buffer .= $indent . '    display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.coursebox {
';
        $buffer .= $indent . '    background: white;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.courses {
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  width: 100%; /* Full width for better responsiveness */
';
        $buffer .= $indent . '  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  padding: 0 20px;
';
        $buffer .= $indent . '  box-sizing: border-box;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card {
';
        $buffer .= $indent . '  background: #fff;
';
        $buffer .= $indent . '  border-radius: 10px;
';
        $buffer .= $indent . '  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '  padding: 15px;
';
        $buffer .= $indent . '  text-align: left;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card img {
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  border-radius: 8px;
';
        $buffer .= $indent . '  height: 140px;
';
        $buffer .= $indent . '  object-fit: cover;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-title {
';
        $buffer .= $indent . '  font-weight: 600;
';
        $buffer .= $indent . '  margin-top: 10px;
';
        $buffer .= $indent . '  font-size: 1.1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-author {
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: #666;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.stars {
';
        $buffer .= $indent . '  color: #ffc107;
';
        $buffer .= $indent . '  font-size: 0.85rem;
';
        $buffer .= $indent . '  margin: 6px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.price {
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  margin: 4px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.cost {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  margin: 4px 0;
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '  font-weight: 700;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.price s {
';
        $buffer .= $indent . '  color: #999;
';
        $buffer .= $indent . '  margin-left: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.badge {
';
        $buffer .= $indent . '  display: inline-block;
';
        $buffer .= $indent . '  background: #005f55;
';
        $buffer .= $indent . '  color: rgb(248, 245, 245);
';
        $buffer .= $indent . '  padding: 6px 16px;
';
        $buffer .= $indent . '  border-radius: 20px;
';
        $buffer .= $indent . '  font-size: 0.85rem;
';
        $buffer .= $indent . '  margin-top: 8px;
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
        $buffer .= $indent . '/* Container for the course card image */
';
        $buffer .= $indent . '/* Image wrapper with fixed dimensions */
';
        $buffer .= $indent . '.course-image-wrapper {
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  height: 160px;
';
        $buffer .= $indent . '  overflow: hidden;
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '  border-radius: 8px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Force image to fully cover wrapper */
';
        $buffer .= $indent . '.course-image-wrapper img {
';
        $buffer .= $indent . '        margin: 0px !important;
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  height: 100%;
';
        $buffer .= $indent . '  object-fit: cover;
';
        $buffer .= $indent . '  display: block;
';
        $buffer .= $indent . '  border-radius: 8px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course title styling */
';
        $buffer .= $indent . '.coursebox .coursename a {
';
        $buffer .= $indent . '    font-family: \'Montserrat\';
';
        $buffer .= $indent . '    line-height: 30px;
';
        $buffer .= $indent . '    font-size: 20px;
';
        $buffer .= $indent . '    color: #000;
';
        $buffer .= $indent . '    font-weight: 700;
';
        $buffer .= $indent . '    display: block;
';
        $buffer .= $indent . '    margin-bottom: 10px;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-summary{
';
        $buffer .= $indent . '   font-size: 12px;
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '  line-height: 1.5em;
';
        $buffer .= $indent . '  max-height: 3em;
';
        $buffer .= $indent . '  overflow: hidden;
';
        $buffer .= $indent . '  text-overflow: ellipsis;
';
        $buffer .= $indent . '  display: -webkit-box;
';
        $buffer .= $indent . '  -webkit-line-clamp: 2;
';
        $buffer .= $indent . '  -webkit-box-orient: vertical;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course summary clamped to 2 lines */
';
        $buffer .= $indent . '.course-summary p{
';
        $buffer .= $indent . '  font-size: 12px;
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '  line-height: 1.5em;
';
        $buffer .= $indent . '  max-height: 3em;
';
        $buffer .= $indent . '  overflow: hidden;
';
        $buffer .= $indent . '  text-overflow: ellipsis;
';
        $buffer .= $indent . '  display: -webkit-box;
';
        $buffer .= $indent . '  -webkit-line-clamp: 2;
';
        $buffer .= $indent . '  -webkit-box-orient: vertical;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '  
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course footer (teacher + button) aligned in row */
';
        $buffer .= $indent . '.course-footer {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: space-between;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  flex-wrap: nowrap;
';
        $buffer .= $indent . '  margin-top: auto;
';
        $buffer .= $indent . '  gap: 10px;
';
        $buffer .= $indent . '  margin-bottom: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Teacher section */
';
        $buffer .= $indent . '.teachers {
';
        $buffer .= $indent . '  font-weight: bold;
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '  flex: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.teachers a {
';
        $buffer .= $indent . '  font-weight: normal;
';
        $buffer .= $indent . '  margin-left: 5px;
';
        $buffer .= $indent . '  color: #015c5c;
';
        $buffer .= $indent . '  text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.teachers {
';
        $buffer .= $indent . '    margin: 7px 1px 5px !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Consistent green button */
';
        $buffer .= $indent . '.buynow .btn {
';
        $buffer .= $indent . '  background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 6px 14px;
';
        $buffer .= $indent . '  border: none;
';
        $buffer .= $indent . '  border-radius: 50px;
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  text-decoration: none;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '  white-space: nowrap;
';
        $buffer .= $indent . '      margin-top: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.buynow .btn:hover {
';
        $buffer .= $indent . '   background-image: linear-gradient(101deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Optional: course card overall styling */
';
        $buffer .= $indent . '.course-tile {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  flex-direction: column;
';
        $buffer .= $indent . '  border: 1px solid #ddd;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '  padding: 12px;
';
        $buffer .= $indent . '  height: 100%;
';
        $buffer .= $indent . '  box-sizing: border-box;
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
        $buffer .= $indent . '/* Media Queries for Smaller Screens */
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .course-card {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    flex-direction: column;
';
        $buffer .= $indent . '    gap: 2px;
';
        $buffer .= $indent . '    padding: 12px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-title {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .cost {
';
        $buffer .= $indent . '    margin-left: 0;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .courses {
';
        $buffer .= $indent . '    grid-template-columns: 1fr; /* Stack cards vertically */
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-card {
';
        $buffer .= $indent . '    padding: 10px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-title,
';
        $buffer .= $indent . '  .price,
';
        $buffer .= $indent . '  .cost,
';
        $buffer .= $indent . '  .stars {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .badge {
';
        $buffer .= $indent . '    font-size: 0.8rem;
';
        $buffer .= $indent . '    padding: 4px 12px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer {
';
        $buffer .= $indent . '   
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'coursename h5{
';
        $buffer .= $indent . 'font-size: 1rem;
';
        $buffer .= $indent . 'color: #000;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'd-flex img{
';
        $buffer .= $indent . '  max-width: 30%;      /* prevents image from overflowing its container */
';
        $buffer .= $indent . '  max-height: 300px;    /* limits height */
';
        $buffer .= $indent . '  width: auto;          /* maintains aspect ratio */
';
        $buffer .= $indent . '  height: auto;         /* maintains aspect ratio */
';
        $buffer .= $indent . '  object-fit: cover; 
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-pick {
';
        $buffer .= $indent . '  max-width: 100%;
';
        $buffer .= $indent . '  margin: 60px 0px;
';
        $buffer .= $indent . '  font-family: \'Segoe UI\', sans-serif;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-pick h2 {
';
        $buffer .= $indent . ' font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-pick .subheading {
';
        $buffer .= $indent . '  font-size: 1.1rem;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '  margin-bottom: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-container {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . ' gap: 8px;
';
        $buffer .= $indent . '  align-items: flex-start;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  flex-direction: row;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-image img {
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  max-width: 640px;
';
        $buffer .= $indent . '  height: auto;
';
        $buffer .= $indent . '  border-radius: 4px;
';
        $buffer .= $indent . '  object-fit: cover;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-details {
';
        $buffer .= $indent . '  flex: 1;
';
        $buffer .= $indent . '  min-width: 250px;
';
        $buffer .= $indent . '  padding-left: 670px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-details h3 {
';
        $buffer .= $indent . '  font-size: 1.8rem;
';
        $buffer .= $indent . '  margin-bottom: 8px;
';
        $buffer .= $indent . '  margin-top: 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-subtext {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.instructor {
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  color: #222;
';
        $buffer .= $indent . '  margin: 0 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.update {
';
        $buffer .= $indent . '  margin: 10px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.update span {
';
        $buffer .= $indent . '  color: teal;
';
        $buffer .= $indent . '  font-weight: 500;
';
        $buffer .= $indent . '  margin-left: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.info {
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  margin: 10px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.rating {
';
        $buffer .= $indent . '  font-size: 1.1rem;
';
        $buffer .= $indent . '  color: gold;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.labels {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  gap: 10px;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.premium {
';
        $buffer .= $indent . '  background-color: #015c5c;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 5px 15px;
';
        $buffer .= $indent . '  border-radius: 20px;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.badge {
';
        $buffer .= $indent . '  border: 1.5px solid #333;
';
        $buffer .= $indent . '  padding: 5px 15px;
';
        $buffer .= $indent . '  border-radius: 20px;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.price {
';
        $buffer .= $indent . '  font-size: 1.2rem;
';
        $buffer .= $indent . '  font-weight: bold;
';
        $buffer .= $indent . '  margin-top: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Responsive Styles */
';
        $buffer .= $indent . '@media (max-width: 1024px) {
';
        $buffer .= $indent . '  .top-pick h2 {
';
        $buffer .= $indent . '    font-size: 1.8rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-container {
';
        $buffer .= $indent . '    flex-direction: column;
';
        $buffer .= $indent . '    gap: 20px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-details {
';
        $buffer .= $indent . '    padding-left: 0;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-image img {
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .top-pick {
';
        $buffer .= $indent . '    padding: 15px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .top-pick .subheading,
';
        $buffer .= $indent . '  .course-subtext,
';
        $buffer .= $indent . '  .instructor,
';
        $buffer .= $indent . '  .info,
';
        $buffer .= $indent . '  .update,
';
        $buffer .= $indent . '  .rating {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-details h3 {
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .price {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .labels {
';
        $buffer .= $indent . '    gap: 8px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .badge,
';
        $buffer .= $indent . '  .premium {
';
        $buffer .= $indent . '    font-size: 0.8rem;
';
        $buffer .= $indent . '    padding: 4px 12px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .top-pick h2 {
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .top-pick .subheading {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-details h3 {
';
        $buffer .= $indent . '    font-size: 1.3rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-subtext,
';
        $buffer .= $indent . '  .instructor,
';
        $buffer .= $indent . '  .info,
';
        $buffer .= $indent . '  .update,
';
        $buffer .= $indent . '  .rating,
';
        $buffer .= $indent . '  .price {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .badge,
';
        $buffer .= $indent . '  .premium {
';
        $buffer .= $indent . '    font-size: 0.75rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#frontpage-available-course-list h2{
';
        $buffer .= $indent . '  margin-bottom:30px;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.coursebox > .info > .coursename {
';
        $buffer .= $indent . '  font-size: 0.5rem;
';
        $buffer .= $indent . '  font-weight: normal;
';
        $buffer .= $indent . '  margin: 5px;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  color:#000;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top{
';
        $buffer .= $indent . '  padding-bottom:10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.why-choose-us {
';
        $buffer .= $indent . '    padding: 30px 0px; 
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.why-choose-us h2 {
';
        $buffer .= $indent . '  font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.why-choose-us .subtext {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '  margin-bottom: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.choose-grid {
';
        $buffer .= $indent . '    margin: auto;
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(2, 1fr); /* Two columns per row */
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  justify-items: center; /* Center cards inside grid */
';
        $buffer .= $indent . '  align-items: start;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.choose-card {
';
        $buffer .= $indent . '  background: linear-gradient(345deg, #a865e9 0%, #4b5aed 50%);
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '  padding: 25px 20px;
';
        $buffer .= $indent . '  text-align: left;
';
        $buffer .= $indent . '  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.choose-card .icon {
';
        $buffer .= $indent . '  font-size: 5rem;
';
        $buffer .= $indent . '    margin-bottom: 15px;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    text-align: end;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.icon {
';
        $buffer .= $indent . '    padding: 0;
';
        $buffer .= $indent . '    box-sizing: content-box;
';
        $buffer .= $indent . '    margin-right: .5rem;
';
        $buffer .= $indent . '    max-height: 18px;
';
        $buffer .= $indent . '    max-width: 100% !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.choose-card h3 {
';
        $buffer .= $indent . '  font-size: 1.2rem;
';
        $buffer .= $indent . '  margin-bottom: 8px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.choose-card p {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  line-height: 1.4;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Medium screens (tablets) */
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .choose-grid {
';
        $buffer .= $indent . '    grid-template-columns: 1fr; /* Stack cards */
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .why-choose-us h2 {
';
        $buffer .= $indent . '    font-size: 1.6rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .choose-card h3 {
';
        $buffer .= $indent . '    font-size: 1.1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .choose-card p {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Small screens (phones) */
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .why-choose-us h2 {
';
        $buffer .= $indent . '    font-size: 1.4rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .choose-card .icon {
';
        $buffer .= $indent . '    font-size: 1.6rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .choose-card h3 {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .choose-card p {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
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
        $buffer .= $indent . '.recommended-section {
';
        $buffer .= $indent . '    max-width: 1240px;
';
        $buffer .= $indent . 'margin: 10px auto;
';
        $buffer .= $indent . '    font-family: \'Segoe UI\', sans-serif;
';
        $buffer .= $indent . '    padding: 30px 0px;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.recommended-section h2 {
';
        $buffer .= $indent . '  font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.recommended-section .subtitle {
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '  margin-bottom: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-grid {
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(4, 1fr);
';
        $buffer .= $indent . '  gap: 25px;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card {
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  border-radius: 10px;
';
        $buffer .= $indent . '  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
';
        $buffer .= $indent . '  padding: 15px;
';
        $buffer .= $indent . '  text-align: left;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card img {
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  height: 150px;
';
        $buffer .= $indent . '  object-fit: cover;
';
        $buffer .= $indent . '  border-radius: 5px;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card h3 {
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  margin: 5px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.course-card .instructor {
';
        $buffer .= $indent . '  font-size: 0.85rem;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.stars {
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: gold;
';
        $buffer .= $indent . '  margin: 5px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.price {
';
        $buffer .= $indent . '  margin: 8px 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.discounted {
';
        $buffer .= $indent . '  font-weight: bold;
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.original {
';
        $buffer .= $indent . '  text-decoration: line-through;
';
        $buffer .= $indent . '  color: #888;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  margin-left: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.premium-btn {
';
        $buffer .= $indent . ' background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '  border: none;
';
        $buffer .= $indent . '  padding: 6px 16px;
';
        $buffer .= $indent . ' border-radius: 50px;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.premium-btn:hover{
';
        $buffer .= $indent . ' background-image: linear-gradient(101deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.view-all-container {
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  margin-top: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.view-all-btn {
';
        $buffer .= $indent . '  background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 10px 30px;
';
        $buffer .= $indent . '  font-size: 1rem;
';
        $buffer .= $indent . '  border: none;
';
        $buffer .= $indent . '  border-radius: 50px;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* -------------------- Responsive Media Queries -------------------- */
';
        $buffer .= $indent . '@media (max-width: 992px) {
';
        $buffer .= $indent . '  .course-grid {
';
        $buffer .= $indent . '    grid-template-columns: repeat(3, 1fr);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .recommended-section h2 {
';
        $buffer .= $indent . '    font-size: 1.6rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-card h3 {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .discounted {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .course-grid {
';
        $buffer .= $indent . '    grid-template-columns: repeat(2, 1fr);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .recommended-section {
';
        $buffer .= $indent . '    padding: 15px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .recommended-section h2 {
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .recommended-section .subtitle {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .premium-btn, .view-all-btn {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '    padding: 8px 20px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .course-grid {
';
        $buffer .= $indent . '    grid-template-columns: 1fr;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .recommended-section h2 {
';
        $buffer .= $indent . '    font-size: 1.4rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-card h3 {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .course-card img {
';
        $buffer .= $indent . '    height: 160px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .premium-btn, .view-all-btn {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '    padding: 8px 18px;
';
        $buffer .= $indent . '  }
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-educators-section {
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '    font-family: \'Segoe UI\', sans-serif;
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-educators-section h2 {
';
        $buffer .= $indent . '  font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '  margin-bottom: 8px;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.top-educators-section .subtitle {
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  margin-bottom: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.educators-container {
';
        $buffer .= $indent . '  border-radius: 10px;
';
        $buffer .= $indent . '  padding: 25px;
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: 1fr; /* default: single column */
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  max-width: 100%;
';
        $buffer .= $indent . '  max-width: 1240px;
';
        $buffer .= $indent . '    margin: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Force two columns on tablet and up */
';
        $buffer .= $indent . '@media (min-width: 768px) {
';
        $buffer .= $indent . '  .educators-container {
';
        $buffer .= $indent . '    grid-template-columns: repeat(4, 1fr);
';
        $buffer .= $indent . '  }
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.educator-card {
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '  padding: 10px;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.educator-card img {
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '      border-radius: 5px;
';
        $buffer .= $indent . '  object-fit: contain;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.educator-card h3 {
';
        $buffer .= $indent . '  font-size: 1.05rem;
';
        $buffer .= $indent . '  margin: 8px 0 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.educator-card p {
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '  margin-bottom: 12px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.stats {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: space-around;
';
        $buffer .= $indent . '  font-size: 0.85rem;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '  color: #333;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.profile-link {
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: #a865e9;
';
        $buffer .= $indent . '  font-weight: bold;
';
        $buffer .= $indent . '  text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.view-all-container {
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  margin-top: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.
';
        $buffer .= $indent . '/* Responsive */
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '  .educators-container {
';
        $buffer .= $indent . '    grid-template-columns: 1fr; /* One card per row */
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      .educator-card img {
';
        $buffer .= $indent . '        width: 280px;
';
        $buffer .= $indent . '        height: 185px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .educator-card h3 {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .educator-card p {
';
        $buffer .= $indent . '    font-size: 0.85rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .stats {
';
        $buffer .= $indent . '    font-size: 0.8rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media (max-width: 480px) {
';
        $buffer .= $indent . '  .top-educators-section {
';
        $buffer .= $indent . '    padding: 10px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .top-educators-section h2 {
';
        $buffer .= $indent . '    font-size: 1.4rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .top-educators-section .subtitle {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .educator-card {
';
        $buffer .= $indent . '    padding: 15px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      .educator-card img {
';
        $buffer .= $indent . '        width: 280px;
';
        $buffer .= $indent . '        height: 185px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .educator-card h3 {
';
        $buffer .= $indent . '    font-size: 0.95rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .educator-card p,
';
        $buffer .= $indent . '  .stats,
';
        $buffer .= $indent . '  .profile-link {
';
        $buffer .= $indent . '    font-size: 0.8rem;
';
        $buffer .= $indent . '  }
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
        $buffer .= $indent . '/* Main Section */
';
        $buffer .= $indent . '.explore-courses {
';
        $buffer .= $indent . '  padding: 60px 0px;
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '  font-family: \'Segoe UI\', sans-serif;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  box-sizing: border-box;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.explore-courses h2 {
';
        $buffer .= $indent . '  font-size: 2rem;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.subtitle {
';
        $buffer .= $indent . '  color: #555;
';
        $buffer .= $indent . '  font-size: 0.95rem;
';
        $buffer .= $indent . '  margin-bottom: 20px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Tabs */
';
        $buffer .= $indent . '.tabs {
';
        $buffer .= $indent . '  list-style: none;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  margin: 0 auto 25px;
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  gap: 30px;
';
        $buffer .= $indent . '  border-bottom: 2px solid #ddd;
';
        $buffer .= $indent . '  flex-wrap: wrap;
';
        $buffer .= $indent . '  max-width: 100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.tabs li {
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '  padding-bottom: 10px;
';
        $buffer .= $indent . '  font-weight: 500;
';
        $buffer .= $indent . '  position: relative;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.tabs li.active {
';
        $buffer .= $indent . '  color: black;
';
        $buffer .= $indent . '  border-bottom: 2px solid black;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Courses Grid */
';
        $buffer .= $indent . '.courses-grid {
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(4, 1fr); /* 4 cards per row on large screen */
';
        $buffer .= $indent . '  gap: 20px;
';
        $buffer .= $indent . '  justify-items: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.card {
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  border: 2px solid #ddd;
';
        $buffer .= $indent . '  border-radius: 10px;
';
        $buffer .= $indent . '  padding: 15px;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '  width: 100%;
';
        $buffer .= $indent . '  max-width: 250px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.card img {
';
        $buffer .= $indent . '  object-fit: contain;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.card h3 {
';
        $buffer .= $indent . '  font-size: 1.1rem;
';
        $buffer .= $indent . '  margin-bottom: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.card p {
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '  color: #444;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.rating-price {
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  gap: 10px;
';
        $buffer .= $indent . '  margin-bottom: 10px;
';
        $buffer .= $indent . '  font-size: 0.9rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.tag{
';
        $buffer .= $indent . '  padding-right:65px;
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.rating-price .price {
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.rating-price del {
';
        $buffer .= $indent . '  color: #999;
';
        $buffer .= $indent . '  font-size: 0.8rem;
';
        $buffer .= $indent . '  margin-left: 2px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.starss {
';
        $buffer .= $indent . '  color: #ffaa00;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Badges */
';
        $buffer .= $indent . '.badges {
';
        $buffer .= $indent . '  display: inline-block;
';
        $buffer .= $indent . '  background-color: #014443;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 4px 10px;
';
        $buffer .= $indent . '  border-radius: 12px;
';
        $buffer .= $indent . '  font-size: 0.8rem;
';
        $buffer .= $indent . '  margin-top: 5px;
';
        $buffer .= $indent . '  width:40%;
';
        $buffer .= $indent . '  margin-left:30%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Responsive Styles */
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Tablets (2 cards per row) */
';
        $buffer .= $indent . '@media (max-width: 992px) {
';
        $buffer .= $indent . '  .courses-grid {
';
        $buffer .= $indent . '    grid-template-columns: repeat(2, 1fr);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .explore-courses {
';
        $buffer .= $indent . '    padding: 30px 15px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .card {
';
        $buffer .= $indent . '    max-width: 100%;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Mobiles (1 card per row) */
';
        $buffer .= $indent . '@media (max-width: 600px) {
';
        $buffer .= $indent . '  .courses-grid {
';
        $buffer .= $indent . '    grid-template-columns: 1fr;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .explore-courses h2 {
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .tabs {
';
        $buffer .= $indent . '    gap: 15px;
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .card img {
';
        $buffer .= $indent . '    height: 80px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .card h3 {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .card p,
';
        $buffer .= $indent . '  .rating-price {
';
        $buffer .= $indent . '    font-size: 0.85rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.footer {
';
        $buffer .= $indent . '  background-color: #015c5c;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 0px 20px;
';
        $buffer .= $indent . '  font-family: Arial, sans-serif;
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Reset some default styles */
';
        $buffer .= $indent . '/* * {
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  padding: 0;
';
        $buffer .= $indent . '  box-sizing: border-box;
';
        $buffer .= $indent . '} */
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'body {
';
        $buffer .= $indent . ' font-family: \'Montserrat\';
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  color: #000;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.container {
';
        $buffer .= $indent . '  max-width: 1000px;
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '  text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'h1,h2,h3 {
';
        $buffer .= $indent . '    font-weight: 800;
';
        $buffer .= $indent . '  font-size: 28px;
';
        $buffer .= $indent . '  margin-bottom: 8px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.subheading {
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  color: #555;
';
        $buffer .= $indent . '  margin-bottom: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.topics-grid {
';
        $buffer .= $indent . '  display: grid;
';
        $buffer .= $indent . '  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
';
        $buffer .= $indent . '  gap: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.topics{
';
        $buffer .= $indent . '    margin-top:30px;
';
        $buffer .= $indent . '    margin: bottom 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.topic-card {
';
        $buffer .= $indent . '  background-color: #00a7b3;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  padding: 20px;
';
        $buffer .= $indent . '  border-radius: 10px;
';
        $buffer .= $indent . '  font-weight: 500;
';
        $buffer .= $indent . '  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '  transition: transform 0.2s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.topic-card:hover {
';
        $buffer .= $indent . '  transform: translateY(-4px);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* body {
';
        $buffer .= $indent . '  margin: 0;
';
        $buffer .= $indent . '  font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;
';
        $buffer .= $indent . '  background-color: #fff;
';
        $buffer .= $indent . '  color: #fff;
';
        $buffer .= $indent . '} */
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
        $buffer .= $indent . '.logo {
';
        $buffer .= $indent . '  width: 120px;
';
        $buffer .= $indent . '  margin-bottom: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.description {
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  margin-bottom: 20px;
';
        $buffer .= $indent . '  color: #ccc;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.contact {
';
        $buffer .= $indent . '  font-size: 14px;
';
        $buffer .= $indent . '  color: white;
';
        $buffer .= $indent . '  margin-top:0;
';
        $buffer .= $indent . '  margin-bottom:0;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.contact-title {
';
        $buffer .= $indent . '  font-weight: bold;
';
        $buffer .= $indent . '  margin-bottom: 0px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.contact-info span {
';
        $buffer .= $indent . '  display: inline-block;
';
        $buffer .= $indent . '  margin-right: 15px;
';
        $buffer .= $indent . '  margin-top: 0px;
';
        $buffer .= $indent . '}
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
        $buffer .= $indent . '/* General Course Box Styling */
';
        $buffer .= $indent . '#region-main-box .coursebox {
';
        $buffer .= $indent . '    border: 1px solid #ddd;
';
        $buffer .= $indent . '    border-radius: 12px;
';
        $buffer .= $indent . '    padding: 20px;
';
        $buffer .= $indent . '    margin-bottom: 30px;
';
        $buffer .= $indent . '    background-color: #fff;
';
        $buffer .= $indent . '    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
';
        $buffer .= $indent . '    max-width: 600px;
';
        $buffer .= $indent . '    margin-left: auto;
';
        $buffer .= $indent . '    margin-right: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Banner Image on Top */
';
        $buffer .= $indent . '#region-main-box .coursebox::before {
';
        $buffer .= $indent . '    content: \'\';
';
        $buffer .= $indent . '    display: block;
';
        $buffer .= $indent . '    height: 150px;
';
        $buffer .= $indent . '    background: url(\'https://edly-moodle.hibootstrap.com/theme/edly/pix/page-banner/ellipse.png\') center/cover no-repeat;
';
        $buffer .= $indent . '    border-radius: 10px 10px 0 0;
';
        $buffer .= $indent . '    margin-bottom: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course Image Styling */
';
        $buffer .= $indent . '#region-main-box .course-image-wrapper,
';
        $buffer .= $indent . '#region-main-box .courseimage {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    justify-content: center;
';
        $buffer .= $indent . '    align-items: center;
';
        $buffer .= $indent . '    margin: 10px auto;
';
        $buffer .= $indent . '    max-width: 300px;
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#region-main-box .courseimage {
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '    border-radius: 8px;
';
        $buffer .= $indent . '    object-fit: contain;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course Title */
';
        $buffer .= $indent . '#region-main-box .coursename a {
';
        $buffer .= $indent . '    font-size: 14px;
';
        $buffer .= $indent . '    color: #000;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    display: block;
';
        $buffer .= $indent . '    margin-bottom: 10px;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Course Summary */
';
        $buffer .= $indent . '#region-main-box .course-summary p {
';
        $buffer .= $indent . '    font-size: 16px;
';
        $buffer .= $indent . '    color: #333;
';
        $buffer .= $indent . '    line-height: 1.6;
';
        $buffer .= $indent . '    margin-bottom: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Teacher Info */
';
        $buffer .= $indent . '#region-main-box .teachers {
';
        $buffer .= $indent . '    font-size: 16px;
';
        $buffer .= $indent . '    color: #555;
';
        $buffer .= $indent . '    margin-bottom: 15px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#region-main-box .teachers a {
';
        $buffer .= $indent . '    color: #015c5c;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Buy Now Button */
';
        $buffer .= $indent . '#region-main-box .buynow .btn btn-primary a{
';
        $buffer .= $indent . '    background-color: #015c5c;
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    padding: 10px 20px;
';
        $buffer .= $indent . '    border-radius: 6px;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '    font-weight: 500;
';
        $buffer .= $indent . '    transition: background-color 0.3s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#region-main-box .buynow a.btn-primary:hover {
';
        $buffer .= $indent . '    background-color: #015c5c;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   .testimonials {
';
        $buffer .= $indent . '      display: grid;
';
        $buffer .= $indent . '      grid-template-columns: repeat(auto-fit, minmax(275px, 1fr));
';
        $buffer .= $indent . '      gap: 15px;
';
        $buffer .= $indent . '      margin: 0 auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .testimonial-card {
';
        $buffer .= $indent . '      background-color: white;
';
        $buffer .= $indent . '      border-radius: 12px;
';
        $buffer .= $indent . '      padding: 24px;
';
        $buffer .= $indent . '      box-shadow: 0 4px 22px rgb(0 0 0 / 9%);
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      flex-direction: column;
';
        $buffer .= $indent . '      justify-content: space-between;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .quote-icon {
';
        $buffer .= $indent . '      font-size: 24px;
';
        $buffer .= $indent . '      color: #444;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .testimonial-text {
';
        $buffer .= $indent . '      font-size: 15px;
';
        $buffer .= $indent . '      color: #333;
';
        $buffer .= $indent . '      margin: 0px;
';
        $buffer .= $indent . '      line-height: 1.5;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .profile {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '      margin-top: 12px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .avatar {
';
        $buffer .= $indent . '      background-color: #1c1c1c;
';
        $buffer .= $indent . '      color: white;
';
        $buffer .= $indent . '      font-weight: bold;
';
        $buffer .= $indent . '      width: 40px;
';
        $buffer .= $indent . '      height: 40px;
';
        $buffer .= $indent . '      border-radius: 50%;
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '      justify-content: center;
';
        $buffer .= $indent . '      margin-right: 12px;
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .name {
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '      color: #444;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .course-link {
';
        $buffer .= $indent . '      margin-top: 20px;
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '      color: #194443;
';
        $buffer .= $indent . '      text-decoration: none;
';
        $buffer .= $indent . '      display: inline-block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .course-link:hover {
';
        $buffer .= $indent . '      text-decoration: underline;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.testimonialSection h2 {
';
        $buffer .= $indent . '    font-size: 30px;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '    margin-bottom: 40px;
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.testimonialSection{
';
        $buffer .= $indent . '    padding: 0px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.testimonialparantSection{
';
        $buffer .= $indent . '        background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '    padding: 50px 0px;
';
        $buffer .= $indent . '    margin: 20px 0px;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.testimonialparantSection .view-all-btn {
';
        $buffer .= $indent . '   background-image: linear-gradient(275deg, #ffffff, #ffffff);
';
        $buffer .= $indent . '    color: #a865e9;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' .logininfo{
';
        $buffer .= $indent . '  display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.tool_dataprivacy{
';
        $buffer .= $indent . '  display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.mobilelink{
';
        $buffer .= $indent . '   display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#theme_switch_link{
';
        $buffer .= $indent . '   display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-section{
';
        $buffer .= $indent . '  display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.coursePopularSection{
';
        $buffer .= $indent . '    background: #f6f7f9;
';
        $buffer .= $indent . '    padding: 20px 0px;
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
        $buffer .= $indent . '.courseCard-container {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      background-color: #fff;
';
        $buffer .= $indent . '      border-radius: 10px;
';
        $buffer .= $indent . '      overflow: hidden;
';
        $buffer .= $indent . '      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
';
        $buffer .= $indent . '      width: 1240px;
';
        $buffer .= $indent . '      margin: 70px auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-image {
';
        $buffer .= $indent . '      width: 550px;
';
        $buffer .= $indent . '      height: auto;
';
        $buffer .= $indent . '      object-fit: cover;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-content {
';
        $buffer .= $indent . '      padding: 30px 40px;
';
        $buffer .= $indent . '      flex: 1;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-title {
';
        $buffer .= $indent . '      font-size: 22px;
';
        $buffer .= $indent . '      font-weight: bold;
';
        $buffer .= $indent . '      margin-bottom: 6px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-subtitle {
';
        $buffer .= $indent . '      color: #555;
';
        $buffer .= $indent . '      margin-bottom: 12px;
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-instructor {
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '      margin-bottom: 6px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-update {
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '      color: teal;
';
        $buffer .= $indent . '      margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-meta {
';
        $buffer .= $indent . '      font-size: 14px;
';
        $buffer .= $indent . '      color: #333;
';
        $buffer .= $indent . '      margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-stars {
';
        $buffer .= $indent . '      color: gold;
';
        $buffer .= $indent . '      font-size: 16px;
';
        $buffer .= $indent . '      margin-bottom: 12px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-tags {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      gap: 10px;
';
        $buffer .= $indent . '      margin-bottom: 12px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-tag-filled {
';
        $buffer .= $indent . '      background-image: linear-gradient(275deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '      color: #fff;
';
        $buffer .= $indent . '      padding: 5px 12px;
';
        $buffer .= $indent . '      border-radius: 50px;
';
        $buffer .= $indent . '      font-size: 13px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .courseCard-tag-filled:hover{
';
        $buffer .= $indent . '      background-image: linear-gradient(101deg, #4b5aed, #a865e9);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-tag-outline {
';
        $buffer .= $indent . '      border: 1px solid #000;
';
        $buffer .= $indent . '      padding: 5px 12px;
';
        $buffer .= $indent . '      border-radius: 50px;
';
        $buffer .= $indent . '      font-size: 13px;
';
        $buffer .= $indent . '      color: #000;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .courseCard-price {
';
        $buffer .= $indent . '      font-size: 18px;
';
        $buffer .= $indent . '      font-weight: bold;
';
        $buffer .= $indent . '      color: #111;
';
        $buffer .= $indent . '    }
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
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .courses-section {
';
        $buffer .= $indent . '            max-width: 1240px;
';
        $buffer .= $indent . '            margin: 25px auto;
';
        $buffer .= $indent . '            padding: 20px;
';
        $buffer .= $indent . '            text-align: center;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .courses-section h1 {
';
        $buffer .= $indent . '            font-size: 2em;
';
        $buffer .= $indent . '            margin-bottom: 10px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .subtitle {
';
        $buffer .= $indent . '            color: #666;
';
        $buffer .= $indent . '            margin-bottom: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tabs {
';
        $buffer .= $indent . '            display: flex;
';
        $buffer .= $indent . '            justify-content: center;
';
        $buffer .= $indent . '            gap: 20px;
';
        $buffer .= $indent . '            margin-bottom: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-button {
';
        $buffer .= $indent . '            padding: 5px 15px;
';
        $buffer .= $indent . '            border-bottom: 2px solid #000;
';
        $buffer .= $indent . '            cursor: pointer;
';
        $buffer .= $indent . '            background-color: #f0f0f0;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-button.active {
';
        $buffer .= $indent . '            color: #007bff;
';
        $buffer .= $indent . '            border-bottom-color: #007bff;
';
        $buffer .= $indent . '            background-color: #fff;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-content {
';
        $buffer .= $indent . '            display: none;
';
        $buffer .= $indent . '            padding: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-content.active {
';
        $buffer .= $indent . '            display: flex;
';
        $buffer .= $indent . '            flex-wrap: wrap;
';
        $buffer .= $indent . '            justify-content: center;
';
        $buffer .= $indent . '            gap: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item {
';
        $buffer .= $indent . '            width: 300px;
';
        $buffer .= $indent . '            border: 1px solid #ddd;
';
        $buffer .= $indent . '            border-radius: 5px;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item img {
';
        $buffer .= $indent . '            width: 100%;
';
        $buffer .= $indent . '            height: 200px;
';
        $buffer .= $indent . '            object-fit: cover;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item h3 {
';
        $buffer .= $indent . '            margin: 10px;
';
        $buffer .= $indent . '            font-size: 1.2em;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item p {
';
        $buffer .= $indent . '            margin: 5px 10px;
';
        $buffer .= $indent . '            color: #666;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .rating {
';
        $buffer .= $indent . '            margin: 0 10px 10px;
';
        $buffer .= $indent . '            color: #ffd700;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .price {
';
        $buffer .= $indent . '            margin: 0 10px 10px;
';
        $buffer .= $indent . '            font-weight: bold;
';
        $buffer .= $indent . '            color: #28a745;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .price span {
';
        $buffer .= $indent . '            color: #888;
';
        $buffer .= $indent . '            margin-left: 10px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item button {
';
        $buffer .= $indent . '            background-color: #28a745;
';
        $buffer .= $indent . '            color: white;
';
        $buffer .= $indent . '            border: none;
';
        $buffer .= $indent . '            padding: 10px;
';
        $buffer .= $indent . '            width: 100%;
';
        $buffer .= $indent . '            cursor: pointer;
';
        $buffer .= $indent . '            font-weight: bold;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .course-item button:hover {
';
        $buffer .= $indent . '            background-color: #218838;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        /* Radio button hack for tab switching */
';
        $buffer .= $indent . '        .tab-input {
';
        $buffer .= $indent . '            display: none;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-input#tab-all:checked ~ .tabs .tab-all,
';
        $buffer .= $indent . '        .tab-input#tab-it:checked ~ .tabs .tab-it,
';
        $buffer .= $indent . '        .tab-input#tab-design:checked ~ .tabs .tab-design,
';
        $buffer .= $indent . '        .tab-input#tab-business:checked ~ .tabs .tab-business,
';
        $buffer .= $indent . '        .tab-input#tab-development:checked ~ .tabs .tab-development,
';
        $buffer .= $indent . '        .tab-input#tab-personal:checked ~ .tabs .tab-personal {
';
        $buffer .= $indent . '            color: #007bff;
';
        $buffer .= $indent . '            border-bottom-color: #007bff;
';
        $buffer .= $indent . '            background-color: #fff;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .tab-input#tab-all:checked ~ .tab-content#all-content,
';
        $buffer .= $indent . '        .tab-input#tab-it:checked ~ .tab-content#it-content,
';
        $buffer .= $indent . '        .tab-input#tab-design:checked ~ .tab-content#design-content,
';
        $buffer .= $indent . '        .tab-input#tab-business:checked ~ .tab-content#business-content,
';
        $buffer .= $indent . '        .tab-input#tab-development:checked ~ .tab-content#development-content,
';
        $buffer .= $indent . '        .tab-input#tab-personal:checked ~ .tab-content#personal-content {
';
        $buffer .= $indent . '            display: flex;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . ' .upskill-container {
';
        $buffer .= $indent . '      margin: auto;
';
        $buffer .= $indent . '      padding: 0px;
';
        $buffer .= $indent . '      display: grid;
';
        $buffer .= $indent . '      grid-template-columns: 1fr 1fr;
';
        $buffer .= $indent . '      gap: 2rem;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-text-content h1 {
';
        $buffer .= $indent . '      font-size: 2rem;
';
        $buffer .= $indent . '      font-weight: 700;
';
        $buffer .= $indent . '      margin-bottom: 1.5rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-stat-block {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      gap: 3rem;
';
        $buffer .= $indent . '      margin-bottom: 2rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-stat {
';
        $buffer .= $indent . '      font-size: 2rem;
';
        $buffer .= $indent . '      font-weight: 700;
';
        $buffer .= $indent . '      color: #1c1c2d;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-stat-desc {
';
        $buffer .= $indent . '      font-size: 0.9rem;
';
        $buffer .= $indent . '      color: #555;
';
        $buffer .= $indent . '      margin-top: 0.25rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-divider {
';
        $buffer .= $indent . '      height: 1px;
';
        $buffer .= $indent . '      background-color: #ddd;
';
        $buffer .= $indent . '      margin: 1.5rem 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-cta-button {
';
        $buffer .= $indent . '      display: inline-block;
';
        $buffer .= $indent . '      background-color: #6a3df6;
';
        $buffer .= $indent . '      color: #fff;
';
        $buffer .= $indent . '      padding: 0.75rem 1.5rem;
';
        $buffer .= $indent . '      text-decoration: none;
';
        $buffer .= $indent . '      border-radius: 6px;
';
        $buffer .= $indent . '      font-weight: 600;
';
        $buffer .= $indent . '      transition: background-color 0.3s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-cta-button:hover {
';
        $buffer .= $indent . '      background-color: #5931d0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-carousel-controls {
';
        $buffer .= $indent . '      margin-top: 2rem;
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '      gap: 0.75rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-dot {
';
        $buffer .= $indent . '      width: 10px;
';
        $buffer .= $indent . '      height: 10px;
';
        $buffer .= $indent . '      background-color: #ccc;
';
        $buffer .= $indent . '      border-radius: 50%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-dot.active {
';
        $buffer .= $indent . '      background-color: #6a3df6;
';
        $buffer .= $indent . '      width: 14px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-arrow {
';
        $buffer .= $indent . '      width: 40px;
';
        $buffer .= $indent . '      height: 40px;
';
        $buffer .= $indent . '      background-color: #fff;
';
        $buffer .= $indent . '      border-radius: 50%;
';
        $buffer .= $indent . '      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '      justify-content: center;
';
        $buffer .= $indent . '      font-size: 1.2rem;
';
        $buffer .= $indent . '      cursor: pointer;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .upskill-image-content img {
';
        $buffer .= $indent . '      width: 100%;
';
        $buffer .= $indent . '      border-radius: 0px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 768px) {
';
        $buffer .= $indent . '      .upskill-container {
';
        $buffer .= $indent . '        grid-template-columns: 1fr;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      .upskill-stat-block {
';
        $buffer .= $indent . '        flex-direction: column;
';
        $buffer .= $indent . '        gap: 1.5rem;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      .upskill-carousel-controls {
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '    }
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
        $buffer .= $indent . '    .blog-section {
';
        $buffer .= $indent . '      margin-top: 60px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-heading {
';
        $buffer .= $indent . '      margin-bottom: 2rem;
';
        $buffer .= $indent . '      text-align: center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-grid {
';
        $buffer .= $indent . '      display: grid;
';
        $buffer .= $indent . '      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
';
        $buffer .= $indent . '      gap: 1.5rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-card {
';
        $buffer .= $indent . '      border: 1px solid #e2e2e2;
';
        $buffer .= $indent . '      padding: 1.5rem;
';
        $buffer .= $indent . '      border-radius: 6px;
';
        $buffer .= $indent . '      background-color: #fff;
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      flex-direction: column;
';
        $buffer .= $indent . '      justify-content: space-between;
';
        $buffer .= $indent . '      transition: box-shadow 0.3s ease;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-card:hover {
';
        $buffer .= $indent . '      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-category {
';
        $buffer .= $indent . '      font-size: 0.85rem;
';
        $buffer .= $indent . '      font-weight: 600;
';
        $buffer .= $indent . '      color: #555;
';
        $buffer .= $indent . '      margin-bottom: 0.5rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-title {
';
        $buffer .= $indent . '      font-size: 1rem;
';
        $buffer .= $indent . '      font-weight: 700;
';
        $buffer .= $indent . '      margin-bottom: 1.5rem;
';
        $buffer .= $indent . '      line-height: 1.4;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-author {
';
        $buffer .= $indent . '      display: flex;
';
        $buffer .= $indent . '      align-items: center;
';
        $buffer .= $indent . '      gap: 0.75rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-author img {
';
        $buffer .= $indent . '      width: 36px;
';
        $buffer .= $indent . '      height: 36px;
';
        $buffer .= $indent . '      border-radius: 50%;
';
        $buffer .= $indent . '      object-fit: cover;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .blog-author-name {
';
        $buffer .= $indent . '      font-size: 0.9rem;
';
        $buffer .= $indent . '      color: #333;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 600px) {
';
        $buffer .= $indent . '      .blog-heading {
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '    }
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
        $buffer .= $indent . '#slider {
';
        $buffer .= $indent . '        margin-top: 65px;
';
        $buffer .= $indent . '	position: relative;
';
        $buffer .= $indent . '	width: 100%;
';
        $buffer .= $indent . '	overflow: hidden;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #line {
';
        $buffer .= $indent . '	height: 5px;
';
        $buffer .= $indent . '	background: rgba(0,0,0,0.5);
';
        $buffer .= $indent . '	z-index: 1;
';
        $buffer .= $indent . '	position: absolute;
';
        $buffer .= $indent . '	bottom: 0;
';
        $buffer .= $indent . '	right: 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #dots {
';
        $buffer .= $indent . '	position: absolute;
';
        $buffer .= $indent . '	left: 0;
';
        $buffer .= $indent . '	right: 0;
';
        $buffer .= $indent . '	bottom: 16px;
';
        $buffer .= $indent . '	display: flex;
';
        $buffer .= $indent . '	justify-content: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #dots li {
';
        $buffer .= $indent . '	transition: 0.3s;
';
        $buffer .= $indent . '	list-style-type: none;
';
        $buffer .= $indent . '	width: 12px;
';
        $buffer .= $indent . '	height: 12px;
';
        $buffer .= $indent . '	border-radius: 100%;
';
        $buffer .= $indent . '	background: rgba(0,0,0,0.5);
';
        $buffer .= $indent . '	margin: 0 0.25em;
';
        $buffer .= $indent . '	cursor: pointer;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #dots li:hover,
';
        $buffer .= $indent . '#slider #dots li.active {
';
        $buffer .= $indent . '	background: white;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@keyframes line {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	0% {width: 0%;}
';
        $buffer .= $indent . '	100% {width: 100%;}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #back,
';
        $buffer .= $indent . '#slider #forword {
';
        $buffer .= $indent . '	width: 6%;
';
        $buffer .= $indent . '	display: flex;
';
        $buffer .= $indent . '	justify-content: center;
';
        $buffer .= $indent . '	align-items: center;
';
        $buffer .= $indent . '	opacity: 0;
';
        $buffer .= $indent . '	transition: 0.3s;
';
        $buffer .= $indent . '	cursor: pointer;
';
        $buffer .= $indent . '	position: absolute;
';
        $buffer .= $indent . '	top: 0;
';
        $buffer .= $indent . '	left: 0;
';
        $buffer .= $indent . '	bottom: 0;
';
        $buffer .= $indent . '	color: white;
';
        $buffer .= $indent . '	font-weight: 700;
';
        $buffer .= $indent . '    font-size: 2rem;
';
        $buffer .= $indent . '	background: -moz-linear-gradient(left,  rgba(255,255,255,0.75) 0%, rgba(255,255,255,0) 100%);
';
        $buffer .= $indent . '	background: -webkit-linear-gradient(left,  rgba(255,255,255,0.75) 0%,rgba(255,255,255,0) 100%);
';
        $buffer .= $indent . '	background: linear-gradient(to right,  rgba(255,255,255,0.75) 0%,rgba(255,255,255,0) 100%);
';
        $buffer .= $indent . '	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#bfffffff\', endColorstr=\'#00ffffff\',GradientType=1 );
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider #forword {
';
        $buffer .= $indent . '	left: auto;
';
        $buffer .= $indent . '	right: 0;
';
        $buffer .= $indent . '	background: -moz-linear-gradient(left,  rgba(255,255,255,0) 0%, rgba(255,255,255,0.75) 100%);
';
        $buffer .= $indent . '	background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,0.75) 100%);
';
        $buffer .= $indent . '	background: linear-gradient(to right,  rgba(255,255,255,0) 0%,rgba(255,255,255,0.75) 100%);
';
        $buffer .= $indent . '	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#00ffffff\', endColorstr=\'#bfffffff\',GradientType=1 );
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#slider:hover #back,
';
        $buffer .= $indent . '#slider:hover #forword {
';
        $buffer .= $indent . '	opacity: 0.7;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move {
';
        $buffer .= $indent . '	margin: 0;
';
        $buffer .= $indent . '	padding: 0;
';
        $buffer .= $indent . '	display: flex;
';
        $buffer .= $indent . '	width: 100%;
';
        $buffer .= $indent . '	background: gray;
';
        $buffer .= $indent . '	margin-right: 100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li {
';
        $buffer .= $indent . '	transition: 0.6s;
';
        $buffer .= $indent . '	min-width: 100%;
';
        $buffer .= $indent . '	color: white;
';
        $buffer .= $indent . '	list-style-type: none;
';
        $buffer .= $indent . '	margin: 0;
';
        $buffer .= $indent . '	padding: 0;
';
        $buffer .= $indent . '	display: flex;
';
        $buffer .= $indent . '	justify-content: center;
';
        $buffer .= $indent . '	align-items: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li img {
';
        $buffer .= $indent . '	width: 100%;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li:nth-child(1) {
';
        $buffer .= $indent . '	background: #657765;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li:nth-child(2) {
';
        $buffer .= $indent . '	background: #456174;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li:nth-child(3) {
';
        $buffer .= $indent . '	background: #984;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li:nth-child(4) {
';
        $buffer .= $indent . '	background: #445566;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'ul#move li:nth-child(5) {
';
        $buffer .= $indent . '	background: #744674;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    #page.drawers .main-inner {
';
        $buffer .= $indent . '        padding: 0px !important;
';
        $buffer .= $indent . '        margin-top: 0px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '        #page.drawers {
';
        $buffer .= $indent . '        padding-left: 0px !important;
';
        $buffer .= $indent . '        padding-right: 0px !important;
';
        $buffer .= $indent . '        margin-top: 0px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #page.drawers div[role="main"] {
';
        $buffer .= $indent . '        padding-left: 0px !important;
';
        $buffer .= $indent . '        padding-right: 0px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .header-maxwidth {
';
        $buffer .= $indent . '        display: none !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@media only screen and (max-width: 600px) {
';
        $buffer .= $indent . '  .fixed-top {
';
        $buffer .= $indent . '    overflow: hidden;
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  .courseCard-container {
';
        $buffer .= $indent . '    width: 100% !important;
';
        $buffer .= $indent . '    margin: 35px auto;
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.courseCard-image {
';
        $buffer .= $indent . '    width: 335px;
';
        $buffer .= $indent . '    margin: 2px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  .secondContainer {
';
        $buffer .= $indent . '          padding: 35px 30px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  .contentContainer {
';
        $buffer .= $indent . '    padding: 0px 17px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  .footer-right {
';
        $buffer .= $indent . '    padding-bottom: 30px;
';
        $buffer .= $indent . '    padding-left: 20px;
';
        $buffer .= $indent . '    display: grid;
';
        $buffer .= $indent . '    grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
';
        $buffer .= $indent . '    gap: 0px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  #page.drawers .main-inner {
';
        $buffer .= $indent . '          margin-bottom: 0rem;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#page.drawers .main-inner {
';
        $buffer .= $indent . '    margin-bottom: 0rem !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '#page-content{
';
        $buffer .= $indent . '    padding-bottom: 0rem !important;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    window.onload = function() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let slider = document.querySelector(\'#slider\');
';
        $buffer .= $indent . '    let move = document.querySelector(\'#move\');
';
        $buffer .= $indent . '    let moveLi = Array.from(document.querySelectorAll(\'#slider #move li\'));
';
        $buffer .= $indent . '    let forword = document.querySelector(\'#slider #forword\');
';
        $buffer .= $indent . '    let back = document.querySelector(\'#slider #back\');
';
        $buffer .= $indent . '    let counter = 1;
';
        $buffer .= $indent . '    let time = 6000;
';
        $buffer .= $indent . '    let line = document.querySelector(\'#slider #line\');
';
        $buffer .= $indent . '    let dots = document.querySelector(\'#slider #dots\');
';
        $buffer .= $indent . '    let dot;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    for (i = 0; i < moveLi.length; i++) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        dot = document.createElement(\'li\');
';
        $buffer .= $indent . '        dots.appendChild(dot);
';
        $buffer .= $indent . '        dot.value = i;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    dot = dots.getElementsByTagName(\'li\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    line.style.animation = \'line \' + (time / 1000) + \'s linear infinite\';
';
        $buffer .= $indent . '    dot[0].classList.add(\'active\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    function moveUP() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        if (counter == moveLi.length) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            moveLi[0].style.marginLeft = \'0%\';
';
        $buffer .= $indent . '            counter = 1;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        } else if (counter >= 1) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            moveLi[0].style.marginLeft = \'-\' + counter * 100 + \'%\';
';
        $buffer .= $indent . '            counter++;
';
        $buffer .= $indent . '        } 
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        if (counter == 1) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            dot[moveLi.length - 1].classList.remove(\'active\');
';
        $buffer .= $indent . '            dot[0].classList.add(\'active\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        } else if (counter > 1) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            dot[counter - 2].classList.remove(\'active\');
';
        $buffer .= $indent . '            dot[counter - 1].classList.add(\'active\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    function moveDOWN() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        if (counter == 1) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            moveLi[0].style.marginLeft = \'-\' + (moveLi.length - 1) * 100 + \'%\';
';
        $buffer .= $indent . '            counter = moveLi.length;
';
        $buffer .= $indent . '            dot[0].classList.remove(\'active\');
';
        $buffer .= $indent . '            dot[moveLi.length - 1].classList.add(\'active\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        } else if (counter <= moveLi.length) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            counter = counter - 2;
';
        $buffer .= $indent . '            moveLi[0].style.marginLeft = \'-\' + counter * 100 + \'%\';   
';
        $buffer .= $indent . '            counter++;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            dot[counter].classList.remove(\'active\');
';
        $buffer .= $indent . '            dot[counter - 1].classList.add(\'active\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        }  
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    for (i = 0; i < dot.length; i++) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        dot[i].addEventListener(\'click\', function(e) {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            dot[counter - 1].classList.remove(\'active\');
';
        $buffer .= $indent . '            counter = e.target.value + 1;
';
        $buffer .= $indent . '            dot[e.target.value].classList.add(\'active\');
';
        $buffer .= $indent . '            moveLi[0].style.marginLeft = \'-\' + (counter - 1) * 100 + \'%\';
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    forword.onclick = moveUP;
';
        $buffer .= $indent . '    back.onclick = moveDOWN;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let autoPlay = setInterval(moveUP, time);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    slider.onmouseover = function() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        autoPlay = clearInterval(autoPlay);
';
        $buffer .= $indent . '        line.style.animation = \'\';
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    slider.onmouseout = function() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        autoPlay = setInterval(moveUP, time);
';
        $buffer .= $indent . '        line.style.animation = \'line \' + (time / 1000) + \'s linear infinite\';
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '  
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }

    private function section4646640bf88a9b87d9ee4b9fc8187779(Mustache_Context $context, $indent, $value)
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

}
