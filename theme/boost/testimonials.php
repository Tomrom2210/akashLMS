<?php
require_once(__DIR__ . '/../../config.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/theme/boost/testimonials.php'));
$PAGE->set_title('Testimonials');
$PAGE->set_heading('Testimonials');

$testimonials = [
    [
        'name' => 'Diksha S',
        'role' => 'Business Intelligence Learner',
        'message' => 'Because of this course I was able to clear two interviews with confidence. The practical guidance, mentorship, and structure made my transition much smoother than I expected.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'DS',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Career Breakthrough',
    ],
    [
        'name' => 'Chethan B',
        'role' => 'Full Stack Developer',
        'message' => 'I joined as a frontend engineer and eventually transitioned into a full stack role. The learning path was clear, updated, and directly useful in real-world projects.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'CB',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Role Transition',
    ],
    [
        'name' => 'Batchu K',
        'role' => 'Java Programming Student',
        'message' => 'Today I work as a software developer, and I credit a significant part of my foundation to the clarity and depth of the Java training here.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'BK',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Job Ready Skills',
    ],
    [
        'name' => 'Ankit K',
        'role' => 'Web Development Learner',
        'message' => 'I would highly recommend this bootcamp to anyone pursuing web development. The explanations were easy to follow and the projects gave me portfolio confidence.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'AK',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Portfolio Growth',
    ],
    [
        'name' => 'Riya M',
        'role' => 'Python & Data Analytics',
        'message' => 'The blend of live support and structured content helped me stay consistent. I was able to apply what I learned immediately in assignments and interviews.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'RM',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Hands-on Learning',
    ],
    [
        'name' => 'Saurabh T',
        'role' => 'Career Switch Learner',
        'message' => 'What stood out for me was the premium learning experience. The content quality, support system, and practical focus helped me move from confusion to direction.',
        'videoembed' => 'https://www.youtube.com/embed/wZfndDujSa8?si=DuRNO4rfS8i04Vnl',
        'initials' => 'ST',
        'stars' => str_repeat('&#9733;', 5),
        'highlight' => 'Confidence Boost',
    ],
];

$context = [
    'testimonials' => $testimonials,
    'featured' => $testimonials[0],
    'totalstories' => count($testimonials),
    'averagerating' => '4.9/5',
    'learnersreached' => '10K+',
];

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/testimonials', $context);
echo $OUTPUT->footer();

