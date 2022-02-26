<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paragraphs = $this->faker->paragraphs(6, false);
        $title = $this->faker->realText(50);
        $description = "<h1>{$title}</h1>";
        foreach ($paragraphs as $para) {
            $description .= "<p>{$para}</p>";
        }
        // $icons = array("fa-accusoft", "fa-adn", "fa-adversal", "fa-affiliatetheme", "fa-airbnb", "fa-algolia", "fa-amazon", "fa-amilia", "fa-android", "fa-angellist", "fa-angrycreative", "fa-angular", "fa-app-store", "fa-app-store-ios", "fa-apper", "fa-apple", "fa-artstation", "fa-asymmetrik", "fa-atlassian", "fa-audible", "fa-autoprefixer", "fa-avianex", "fa-aviato", "fa-aws", "fa-backspace", "fa-bandcamp", "fa-battle-net", "fa-behance", "fa-behance-square", "fa-bimobject", "fa-bitbucket", "fa-bity", "fa-black-tie", "fa-blackberry", "fa-blender-phone", "fa-blogger", "fa-blogger-b", "fa-bootstrap", "fa-buffer", "fa-buromobelexperte", "fa-buy-n-large", "fa-buysellads", "fa-canadian-maple-leaf", "fa-centercode", "fa-centos", "fa-chrome", "fa-chromecast", "fa-cloudflare", "fa-cloudscale", "fa-cloudsmith", "fa-cloudversify", "fa-codepen", "fa-codiepie", "fa-confluence", "fa-connectdevelop", "fa-contao", "fa-cotton-bureau", "fa-cpanel", "fa-creative-commons", "fa-creative-commons-by", "fa-creative-commons-nc", "fa-creative-commons-nc-eu", "fa-creative-commons-nc-jp", "fa-creative-commons-nd", "fa-creative-commons-pd", "fa-creative-commons-pd-alt", "fa-creative-commons-remix", "fa-creative-commons-sa", "fa-creative-commons-sampling", "fa-creative-commons-sampling-plus", "fa-creative-commons-share", "fa-creative-commons-zero", "fa-crown", "fa-css3", "fa-css3-alt", "fa-cuttlefish", "fa-dailymotion", "fa-dashcube", "fa-deezer", "fa-delicious", "fa-deploydog", "fa-deskpro", "fa-dev", "fa-deviantart", "fa-dhl", "fa-diaspora", "fa-digg", "fa-digital-ocean", "fa-discord", "fa-discourse", "fa-dochub", "fa-docker", "fa-draft2digital", "fa-dribbble", "fa-dribbble-square", "fa-dropbox", "fa-drupal", "fa-dumpster-fire", "fa-dyalog", "fa-earlybirds", "fa-ebay", "fa-edge", "fa-edge-legacy", "fa-elementor", "fa-ello", "fa-ember", "fa-empire", "fa-envira", "fa-erlang", "fa-etsy", "fa-evernote", "fa-expeditedssl", "fa-facebook", "fa-facebook-f", "fa-facebook-messenger", "fa-facebook-square", "fa-fedex", "fa-fedora", "fa-figma", "fa-file-csv", "fa-firefox", "fa-firefox-browser", "fa-first-order", "fa-first-order-alt", "fa-firstdraft", "fa-flickr", "fa-flipboard", "fa-fly", "fa-font-awesome", "fa-font-awesome-alt", "fa-font-awesome-flag", "fa-font-awesome-logo-full", "fa-fonticons", "fa-fonticons-fi", "fa-fort-awesome", "fa-fort-awesome-alt", "fa-forumbee", "fa-foursquare", "fa-free-code-camp", "fa-freebsd", "fa-fulcrum", "fa-get-pocket", "fa-git", "fa-git-alt", "fa-git-square", "fa-github", "fa-github-alt", "fa-github-square", "fa-gitkraken", "fa-gitlab", "fa-gitter", "fa-glide", "fa-glide-g", "fa-gofore", "fa-goodreads", "fa-goodreads-g", "fa-google", "fa-google-drive", "fa-google-play", "fa-google-plus", "fa-google-plus-g", "fa-google-plus-square", "fa-gratipay", "fa-grav", "fa-gripfire", "fa-grunt", "fa-guilded", "fa-gulp", "fa-hacker-news", "fa-hacker-news-square", "fa-hackerrank", "fa-hips", "fa-hire-a-helper", "fa-hive", "fa-hooli", "fa-hornbill", "fa-hotjar", "fa-houzz", "fa-html5", "fa-hubspot", "fa-ideal", "fa-imdb", "fa-innosoft", "fa-instagram", "fa-instagram-square", "fa-instalod", "fa-intercom", "fa-internet-explorer", "fa-invision", "fa-ioxhost", "fa-itch-io", "fa-itunes", "fa-itunes-note", "fa-java", "fa-jenkins", "fa-jira", "fa-joget", "fa-joomla", "fa-js", "fa-js-square", "fa-jsfiddle", "fa-kaggle", "fa-keybase", "fa-keycdn", "fa-kickstarter", "fa-kickstarter-k", "fa-korvue", "fa-laravel", "fa-lastfm", "fa-lastfm-square", "fa-leanpub", "fa-less", "fa-line", "fa-linkedin", "fa-linkedin-in", "fa-linode", "fa-linux", "fa-lyft", "fa-magento", "fa-mailchimp", "fa-mandalorian", "fa-markdown", "fa-mastodon", "fa-maxcdn", "fa-mdb", "fa-medapps", "fa-medium", "fa-medium-m", "fa-medrt", "fa-meetup", "fa-megaport", "fa-mendeley", "fa-microblog", "fa-microsoft", "fa-mix", "fa-mixcloud", "fa-mixer", "fa-mizuni", "fa-modx", "fa-monero", "fa-neos", "fa-network-wired", "fa-nimblr", "fa-node", "fa-node-js", "fa-npm", "fa-ns8", "fa-nutritionix", "fa-octopus-deploy", "fa-odnoklassniki", "fa-odnoklassniki-square", "fa-opencart", "fa-openid", "fa-opera", "fa-optin-monster", "fa-orcid", "fa-osi", "fa-page4", "fa-pagelines", "fa-palfed", "fa-patreon", "fa-perbyte", "fa-periscope", "fa-phabricator", "fa-phoenix-framework", "fa-phoenix-squadron", "fa-php", "fa-pied-piper", "fa-pied-piper-alt", "fa-pied-piper-hat", "fa-pied-piper-pp", "fa-pied-piper-square", "fa-pinterest", "fa-pinterest-p", "fa-pinterest-square", "fa-plane-slash", "fa-product-hunt", "fa-pushed", "fa-python", "fa-qq", "fa-quinscape", "fa-quora", "fa-r-project", "fa-raspberry-pi", "fa-ravelry", "fa-react", "fa-reacteurope", "fa-readme", "fa-rebel", "fa-red-river", "fa-reddit", "fa-reddit-alien", "fa-reddit-square", "fa-redhat", "fa-renren", "fa-replyd", "fa-researchgate", "fa-resolving", "fa-rev", "fa-rocketchat", "fa-rockrms", "fa-rust", "fa-safari", "fa-salesforce", "fa-sass", "fa-schlix", "fa-scribd", "fa-searchengin", "fa-sellcast", "fa-sellsy", "fa-servicestack", "fa-shirtsinbulk", "fa-shopify", "fa-shopware", "fa-signature", "fa-simplybuilt", "fa-sistrix", "fa-sith", "fa-sketch", "fa-skull", "fa-skyatlas", "fa-skype", "fa-slack", "fa-slack-hash", "fa-slideshare", "fa-snapchat", "fa-snapchat-ghost", "fa-snapchat-square", "fa-sourcetree", "fa-speakap", "fa-speaker-deck", "fa-squarespace", "fa-stack-exchange", "fa-stack-overflow", "fa-stackpath", "fa-staylinked", "fa-sticker-mule", "fa-stopwatch-20", "fa-strava", "fa-studiovinari", "fa-stumbleupon", "fa-stumbleupon-circle", "fa-superpowers", "fa-supple", "fa-suse", "fa-swift", "fa-symfony", "fa-teamspeak", "fa-telegram", "fa-telegram-plane", "fa-tencent-weibo", "fa-the-red-yeti", "fa-themeco", "fa-themeisle", "fa-think-peaks", "fa-tiktok", "fa-trade-federation", "fa-trello", "fa-tumblr", "fa-tumblr-square", "fa-twitter", "fa-twitter-square", "fa-typo3", "fa-uber", "fa-ubuntu", "fa-uikit", "fa-umbraco", "fa-uncharted", "fa-uniregistry", "fa-unity", "fa-untappd", "fa-ups", "fa-usb", "fa-usps", "fa-ussunnah", "fa-vaadin", "fa-viacoin", "fa-viadeo", "fa-viadeo-square", "fa-viber", "fa-vimeo", "fa-vimeo-square", "fa-vimeo-v", "fa-vine", "fa-vk", "fa-vnv", "fa-vr-cardboard", "fa-vuejs", "fa-watchman-monitoring", "fa-waze", "fa-weebly", "fa-weibo", "fa-weight-hanging", "fa-weixin", "fa-whatsapp", "fa-whatsapp-square", "fa-whmcs", "fa-wikipedia-w", "fa-windows", "fa-wix", "fa-wodu", "fa-wolf-pack-battalion", "fa-wordpress", "fa-wordpress-simple", "fa-wpbeginner", "fa-wpexplorer", "fa-wpforms", "fa-wpressr", "fa-xing", "fa-xing-square", "fa-y-combinator", "fa-yahoo", "fa-yammer", "fa-yandex", "fa-yandex-international", "fa-yarn", "fa-yelp", "fa-yoast", "fa-youtube-square", "fa-zhihu");

        return [
            'title' => $this->faker->name(),
            // 'icon' => '<i class="fa-brands ' . $this->faker->randomElement($icons) . ' fa-3x"></i>',
            'image' => 'about-grid-0' . $this->faker->numberBetween(1, 6) . '.jpg',
            'excerpt' => $this->faker->paragraph(rand(1, 2)),
            'description' => $description,
        ];
    }
}
