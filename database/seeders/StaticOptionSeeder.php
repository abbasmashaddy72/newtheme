<?php

namespace Database\Seeders;

use App\Models\StaticOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'option_name' => 'name',
                'option_value' => 'Ayesha Khaliq',
            ],
            [
                'option_name' => 'department',
                'option_value' => 'Gynecologist',
            ],
            [
                'option_name' => 'about',
                'option_value' => 'Dr. Ayesha Khaliq is a well-known obstetrician-Gynaecologist who practices at the Health Inn clinic, Tolichowki Hyderabad has an overall experience of 17 years in the field of obstetrics and gynecology. She completed MBBS from Gandhi Medical College & M.D from the prestigious PGIMER, Chandigarh.',
            ],
            [
                'option_name' => 'why_points',
                'option_value' => 'MBBS from Gandhi Medical College;17 years in the field;M.D from the prestigious PGIMER;well-known obstetrician-Gynaecologist',
            ],
            [
                'option_name' => 'hero_video',
                'option_value' => 'm3KdYtyIXM0',
            ],
            [
                'option_name' => 'hero_img',
                'option_value' => 'hero_img/MYZbZivfPWVjYXRO9t5IQZ83DUmjgURoAaNP7p9i.png',
            ],
            [
                'option_name' => 'logo',
                'option_value' => '<svg version="1.0" xmlns="http://www.w3.org/2000/svg"width="auto" height="50px" viewBox="0 0 1280.000000 1102.000000"preserveAspectRatio="xMidYMid meet"><metadata>Created by potrace 1.15, written by Peter Selinger 2001-2017</metadata><g transform="translate(0.000000,1102.000000) scale(0.100000,-0.100000)"fill="#000000" stroke="none"><path d="M6265 11013 c-119 -16 -266 -88 -367 -182 -142 -132 -220 -295 -222-466 0 -82 7 -156 18 -174 3 -4 7 -29 11 -56 7 -60 80 -217 124 -268 18 -2062 -56 97 -78 l64 -42 1 -201 c1 -111 4 -308 8 -439 3 -130 3 -237 -1 -237-23 0 -210 70 -293 111 -177 85 -294 177 -370 292 -65 98 -69 120 -70 437 -1318 -5 345 -72 474 -92 183 -207 309 -431 476 -150 112 -177 124 -265 116-160 -15 -305 -69 -523 -191 -179 -102 -589 -303 -774 -382 -349 -148 -676-254 -1065 -343 -147 -34 -366 -72 -550 -94 -296 -36 -382 -40 -815 -39 -5143 -631 -8 -727 -67 -67 -40 -50 -96 60 -196 81 -73 156 -117 378 -221 272-126 440 -185 593 -208 25 -4 46 -9 46 -10 0 -2 -13 -29 -30 -60 -65 -124 -22-208 145 -285 112 -52 362 -107 560 -125 39 -3 82 -9 97 -11 27 -5 28 -6 12-36 -20 -38 -13 -87 16 -128 43 -60 203 -135 365 -171 96 -21 330 -16 445 1052 11 100 21 107 21 9 0 13 -14 13 -42 1 -183 244 -305 533 -269 88 11 167 29210 46 17 7 17 5 -2 -26 -26 -43 -26 -69 0 -103 58 -74 240 -118 566 -136 98-5 186 -10 196 -10 13 0 3 -12 -30 -36 -252 -189 -382 -465 -332 -706 18 -9083 -211 152 -285 147 -158 464 -316 787 -393 52 -13 101 -25 109 -27 8 -2 -4-16 -30 -35 -76 -54 -192 -181 -240 -264 -62 -104 -98 -216 -106 -323 -5 -79-3 -94 27 -181 47 -140 94 -229 166 -317 147 -178 375 -337 637 -443 l57 -24-52 -30 c-78 -45 -200 -166 -236 -233 -87 -164 -109 -371 -58 -542 36 -122128 -253 233 -333 60 -45 170 -116 403 -258 74 -46 145 -90 157 -100 l22 -17-63 -62 c-34 -34 -65 -59 -68 -56 -3 3 -11 -3 -19 -12 -13 -16 -12 -17 4 -4 97 17 9 17 3 0 -10 -28 -37 -39 -37 -3 0 -5 -4 -3 -8 1 -5 -9 -22 -23 -39 -42-50 -112 -199 -124 -263 -12 -66 -15 -299 -3 -292 4 3 7 -18 8 -46 0 -36 9-69 28 -105 29 -58 153 -195 195 -215 14 -7 25 -18 24 -24 -1 -6 5 -17 15 -2515 -12 16 -11 3 5 -19 24 -1 21 33 -6 l28 -23 -49 -60 c-119 -144 -184 -276-199 -404 -13 -113 48 -260 163 -394 l65 -76 -39 -88 c-35 -81 -38 -94 -38-182 0 -91 2 -98 37 -165 50 -92 76 -118 159 -160 l69 -35 1 -138 c1 -75 1-151 0 -168 -4 -51 16 -61 135 -69 70 -5 114 -4 130 4 23 10 24 15 24 107 088 1 95 18 88 63 -29 157 16 200 96 21 40 23 53 18 118 -6 77 -33 152 -67 188-19 21 -20 24 -5 65 8 24 28 74 45 111 34 75 36 89 20 154 -14 53 -75 125-148 175 -28 19 -51 39 -51 44 0 6 30 21 67 34 70 24 180 90 221 132 102 105192 278 163 313 -10 11 -8 17 7 28 22 16 29 107 13 178 -5 25 -12 57 -15 72-6 35 -70 145 -106 183 l-29 30 30 45 c75 110 122 232 141 360 12 87 5 232-17 310 -21 79 -87 206 -140 270 -53 64 -58 56 75 127 313 168 421 240 505336 25 29 66 95 91 147 26 52 52 102 59 110 18 22 55 152 55 194 0 27 -4 36-16 36 -14 0 -14 3 -4 15 10 12 9 27 -5 78 -21 80 -86 214 -119 250 -15 16-23 33 -20 39 4 6 3 8 -3 5 -11 -7 -147 126 -138 135 3 3 -3 11 -12 19 -16 13-17 12 -4 -3 8 -11 9 -18 3 -18 -11 0 -27 19 -27 32 0 3 -4 10 -9 15 -5 5 -62 -1 -6 5 -9 3 -12 -6 -9 -8 3 -14 10 -14 15 0 6 -4 15 -9 20 -5 5 -6 3 -2 -410 -18 -4 -16 -37 6 l-29 19 74 27 c447 169 768 467 853 794 19 76 19 207 0283 -37 139 -130 313 -217 402 -37 39 -66 71 -65 71 1 1 42 12 92 25 204 51409 138 559 238 39 26 111 85 160 132 130 125 169 213 169 385 -1 212 -90 416-254 576 l-77 76 86 7 c48 3 155 11 237 16 161 11 222 24 322 72 84 39 103 7481 143 -14 42 -14 46 1 40 73 -29 172 -57 234 -67 93 -14 153 -3 273 48 17375 259 166 236 254 -9 38 -9 40 12 35 173 -42 371 -55 518 -35 185 25 360 104409 183 20 34 26 111 9 122 -5 3 -10 12 -10 19 0 10 33 15 123 20 232 13 41750 533 107 70 35 143 101 167 152 26 54 22 127 -8 172 -15 20 -25 38 -23 39 22 53 15 113 31 145 37 415 126 527 175 166 72 393 223 447 298 53 76 30 127-72 161 -110 36 -220 44 -447 30 -264 -15 -549 -3 -950 42 -52 5 -135 14 -18520 -648 71 -1045 199 -1930 621 -115 55 -217 104 -225 109 -8 5 -53 28 -10052 -47 24 -134 69 -193 99 -153 79 -260 112 -367 113 -80 0 -89 -2 -150 -37-96 -54 -362 -287 -438 -383 -77 -98 -133 -218 -177 -379 -29 -107 -31 -162-9 -332 13 -98 14 -141 6 -195 -30 -201 -219 -391 -497 -498 -108 $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi-42 -281-89 -291 -79 -3 4 -1 170 5 370 6 200 11 396 11 436 0 71 1 75 33 100 81 67165 162 199 227 63 121 82 195 82 325 1 161 -33 281 -114 399 -48 72 -152 169-223 210 -136 78 -319 114 -472 94z m-2451 -570 c-7 -40 -24 -69 -24 -41 0 1820 78 26 78 3 0 2 -17 -2 -37z m2177 -2754 l36 -9 6 -202 c4 -112 10 -368 14-570 l6 -368 -29 0 c-55 0 -289 31 -539 70 -137 22 -311 46 -385 55 -216 25-285 45 -390 116 -135 90 -210 224 -210 375 0 133 71 211 233 257 63 17 11621 422 27 364 8 398 12 529 57 98 34 146 75 146 125 0 19 -7 43 -15 54 -8 10-15 23 -15 28 0 10 137 -1 191 -15z m1009 -14 c0 -4 -7 -20 -16 -36 -21 -42-10 -81 32 -119 86 -75 208 -93 649 -95 305 -1 335 -3 392 -22 171 -57 243-145 243 -298 0 -150 -99 -284 -280 -379 -120 -63 -219 -84 -545 -116 -60 -6-175 -19 -255 -30 -224 -30 -541 -62 -547 -56 -6 6 14 761 26 995 l6 125 34 8c63 17 261 34 261 23z m-169 -1565 c408 -71 659 -175 724 -300 36 -70 25 -224-22 -319 -35 -71 -153 -194 -263 -277 -137 -104 -278 -166 -512 -228 -151 -40-137 -57 -132 162 3 103 9 310 14 459 6 150 10 329 10 398 l0 125 34 0 c18 085 -9 147 -20z m-760 -351 c4 -184 10 -436 14 -561 l7 -227 -63 15 c-231 52-471 165 -598 279 -44 40 -148 177 -202 265 -29 47 -33 63 -32 113 4 197 231353 609 422 94 17 232 34 249 30 6 -1 12 -126 16 -336z m600 -1348 c78 -27176 -77 236 -122 29 -21 56 -39 62 -39 12 0 71 -67 73 -83 0 -7 2 -16 2 -22 1-5 8 -25 15 -42 10 -25 20 -33 39 -33 26 0 26 0 6 -19 -11 -10 -26 -33 -33-50 -8 -17 -18 -28 -24 -24 -6 3 -7 1 -3 -6 11 -18 -80 -148 -164 -232 -72-72 -142 -124 -242 -183 l-48 -27 0 178 c0 98 6 232 12 298 7 66 11 189 10273 -2 83 -2 152 1 152 2 0 28 -8 58 -19z m-560 -193 c1 -106 4 -289 8 -406 3-116 3 -211 -1 -210 -34 13 -175 141 -232 210 -102 124 -136 193 -136 278 058 4 73 31 114 38 57 135 127 237 172 42 19 80 34 85 34 4 0 8 -87 8 -192zm449 -1743 l-10 -40 5 40 c3 22 6 85 7 140 l2 100 3 -100 c2 -55 -1 -118 -7-140z m-413 48 c-3 -10 -5 -2 -5 17 0 19 2 27 5 18 2 -10 2 -26 0 -35z"/><path d="M7052 4055 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/><path d="M7395 4530 c21 -22 41 -40 44 -40 3 0 -13 18 -34 40 -21 22 -41 40-44 40 -3 0 13 -18 34 -40z"/><path d="M5945 3108 l-50 -53 53 50 c48 46 57 55 49 55 -1 0 -25 -24 -52 -52z"/><path d="M7012 1810 c0 -14 2 -19 5 -12 2 6 2 18 0 25 -3 6 -5 1 -5 -13z"/><path d="M6951 1493 c-10 -26 -10 -27 4 -9 8 11 15 23 15 28 0 15 -7 8 -19-19z"/><path d="M6899 1413 c-13 -16 -12 -17 4 -4 16 13 21 21 13 21 -2 0 -10 -8 -17-17z"/></g></svg>',
            ],
            [
                'option_name' => 'action_button_text',
                'option_value' => 'Call Us',
            ],
            [
                'option_name' => 'action_button_link',
                'option_value' => 'tel:+919618830303',
            ],
            [
                'option_name' => 'embed_map_link',
                'option_value' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15228.985410755276!2d78.4134153!3d17.3999612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b3cb75c9775670a!2sDr%20Ayesha%20Khaliq%20-%20Obstetrician-Gynaecologist%20%26%20laparoscopic%20surgeon%20for%20Women%20in%20Tolichowki%2C%20Hyderabad.!5e0!3m2!1sen!2sin!4v1648201907393!5m2!1sen!2sin',
            ],
            [
                'option_name' => 'gr_api',
                'option_value' => 'ChIJZ76w436XyzsRCmd1l1y3PDs',
            ],
            [
                'option_name' => 'gr_count_api',
                'option_value' => 'a741a518-1b3d-4df9-85bb-499b5480dd70',
            ],
            [
                'option_name' => 'terms_description',
                'option_value' => "<p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our <a class='text-indigo-600' href='/privacy'>privacy policy</a> govern Dr. Ayesha Khaliq's relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p><p>The term 'Dr. Ayesha Khaliq' or 'us' or 'we' refers to the owner of the website. The term 'you' refers to the user or viewer of our website.</p><p>The use of this website is subject to the following terms of use:</p><ul><li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li><li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li><li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li><li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li><li>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</li><li>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li><li>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li></ul>",
            ],
            [
                'option_name' => 'privacy_description',
                'option_value' => "<p>This privacy policy sets out how Dr. Ayesha Khaliq uses and protects any information that you give Dr. Ayesha Khaliq when you use this website.</p><p>Dr. Ayesha Khaliq is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p><p>Dr. Ayesha Khaliq may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 1st January 2022.</p><h4>What we collect</h4><p>We may collect the following information:</p><ul><li>name</li><li>contact information including email address and telephone number</li><li>address</li></ul><h4>What we do with the information we gather</h4><p>We require contact information in order to respond to you in the event you contact us via the website with a query.</p><h4>Security</h4><p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p><h4>How we use cookies</h4><p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p><p>This website does not use cookies.</p><h4>Links to other websites</h4><p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p><h4>Controlling your personal information</h4><p>You may choose to restrict the collection or use of your personal information in the following ways:</p><ul><li>whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes</li><li>if you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing via our <a class='text-indigo-600' href='/contact_us'>contact page</a></li></ul><p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</p><p>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible at the above address. We will promptly correct any information found to be incorrect.</p>",
            ],
            [
                'option_name' => 'twitter',
                'option_value' => 'https://twitter.com/DrAyeshaKhaliq1',
            ],
            [
                'option_name' => 'facebook',
                'option_value' => 'https://www.facebook.com/Ayeshakhaliqdr/',
            ],
            [
                'option_name' => 'instagram',
                'option_value' => 'https://www.instagram.com/drayesha_khaliq/',
            ],
            [
                'option_name' => 'linkedin',
                'option_value' => 'https://www.linkedin.com/showcase/dr-ayesha-khaliq/',
            ],
            [
                'option_name' => 'google_business',
                'option_value' => 'https://g.page/dr-ayesha-khaliq?gm',
            ],
        ];

        foreach ($inputs as $data) {
            StaticOption::create($data);
        }
    }
}
