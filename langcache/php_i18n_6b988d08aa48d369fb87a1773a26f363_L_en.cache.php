<?php class L {
const title = '球學 | Choxue | Making Sports Easier';
const nav_home = 'HOME';
const nav_about = 'ABOUT';
const nav_team = 'MEET US';
const nav_schedule = 'SCHEDULE';
const nav_contact = 'CONTACT';
const nav_tournament_CX = 'TOURNAMENT CX';
const nav_leagues = 'LEAGUES';
const tagline = 'WELCOME TO CHOXUE';
const subtagline = 'Integrating sports with the educational system<br>MAKING SPORTS EASIER';
const watch_live_button = '▶ WATCH LIVE NOW';
const schedule_button = 'VIEW FULL SCHEDULE';
const about_title = 'ABOUT US';
const vimeo_ID = '176720735';
const about_description = 'Choxue, as a mission-driven company, believes that sports are the most important training ground of our future leaders. Therefore, we intend to integrate sports with the educational system by creating the future infrastructure of sports in Asia. We intend to make this happen by Making Sports Easier and empowering our sports teams to succeed. At this time, we\'re a sports media company that focuses on live sports broadcasting and analytics.';
const tournament_CX = 'TOURNAMENT CX';
const tournament_CX_description = 'Tournament CX is established and designed to reform and showcase how student athletics must be organized across Greater China. Tournament CX is our first step in showcasing what it means to integrate sports with the Chinese educational system and what making sports easier means.<br><br>This starts from team selection to game format to scheduling to broadcasting to media promotion to school spirit to fan engagement – a tournament that brings everyone together in order to empower our sports teams for success.';
const days = 'DAYS';
const hours = 'HOURS';
const minutes = 'MINUTES';
const seconds = 'SECONDS';
const upcoming_schedule = '2016 UPCOMING SCHEDULE';
const meet_us = 'MEET US';
const say_hello = 'SAY HELLO, WE\'D LOVE TO HEAR FROM YOU';
const our_address = 'OUR ADDRESS';
const address = '12F, #25, Zhonghua Road<br>Zhongzheng District, Taipei 100';
const call_us = 'CALL US';
const email_us = 'EMAIL US';
const placeholder_name = 'Name';
const placeholder_email = 'Email';
const placeholder_message = 'Message';
const send_message_button = 'SEND MESSAGE';
const event_1_name = 'WOMENS\' JONES CUP';
const event_1_date = 'August 3rd - 7th';
const event_1_location = 'Xinzhuang Stadium, New Taipei, Taiwan';
const event_2_name = 'Lau Lau Cup';
const event_2_date = 'August 2nd - 6th';
const event_2_location = 'I-Shou University';
const event_3_name = 'Jin Yin Cup';
const event_3_date = 'August 18th - 22nd';
const event_3_location = 'Hualien Stadium';
const tournament_name = 'Lao Lao Cup Schedule';
const presskit_title = 'PRESS KIT';
const presskit_title_history = 'HISTORY';
const presskit_title_vision = 'VISION';
const presskit_title_how = 'HOW';
const presskit_title_focus = ' KEY FOCUSES';
const presskit_title_network = ' CX NETWORK';
const presskit_title_recruiting = 'CX RECRUITING';
const presskit_title_training = 'CX TRAINING';
const presskit_button_timeline = 'SEE TIMELINE';
const presskit_subtitle_network = 'Create exposure and transparency - shed light on our student athletes.';
const presskit_subtitle_recruiting = 'Create exposure and transparency - shed light on our student athletes.';
const presskit_subtitle_training = 'Create exposure and transparency - shed light on our student athletes.';
const presskit_description_network = 'C';
const presskit_description_history = 'The buildup and vision behind CHOXUE (CX) started long ago but was not clarified until March 2013. It’s deeply rooted in our founder Cheng Ho’s personal story from becoming an orphan in Taiwan to being adopted by his aunt and uncle to Augusta, Georgia without knowing a word of English, anyone or culture in 2000 to playing football at Harvard University and graduated in 2010. His story sparked our motivation and painted the possibilities and vision of what sport education could mean and lead to for our students across Greater China, if the right infrastructure is established. <br><br>CHOXUE’s vision was clarified and boosted by a number of members from Big Family House Church in Taipei, Taiwan beginning on March 2013, and the founding team came together gradually since October 2014 over a small 11 ping apartment. CHOXUE (CX) started as a small project that aims to documents all student-athletes’ performance via video and statistics and have evolved into a vision and mission';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}