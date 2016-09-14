<?php
    require_once('./includes/constants.php');
    require_once('./includes/config.php');
    require_once($includes_dir . 'mysql.php');
    require_once($includes_dir . 'functions.php');
?>

<!DOCTYPE html>
<!-- saved from url=(0055)http://everquest.allakhazam.com/db/zone.html?mode=bymap -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Zones by Expansion :: EverQuest :: ZAM</title>
    <link rel="icon" href="http://everquest.allakhazam.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="includes/alla.css">
    <link rel="stylesheet" type="text/css" href="./zam_files/global.css">
    <link rel="stylesheet" type="text/css" href="./zam_files/site.css" id="css">
    <script async="" src="./zam_files/beacon.js"></script>
    <script async="" src="http://cdn2.lockerdome.com/_js/ajs.js" id="ld-ajs"></script>
    <script src="./zam_files/aquant.js" async="" type="text/javascript"></script>
    <script async="" src="./zam_files/analytics.js"></script>
    <script>
        isIE = false
    </script>

    <script src="./zam_files/jquery-1.10.2.min.js"></script>
    <script src="./zam_files/jquery-migrate-1.2.1.min.js"></script>
    <script src="./zam_files/global.js"></script>
    <link rel="stylesheet" type="text/css" href="./zam_files/zul.css" id="zul-bar-stylesheet">


    <link rel="stylesheet" type="text/css" href="./zam_files/tooltips.css">
</head>

<body class="has-zul-bar">
<div id="headjs" style="position: absolute; left: 0px; right: 0px; top: 0px; z-index: 999999999;"></div>
<div class="zul-bar" id="zul-bar" data-mobile="false">
    <div class="zul-bar-inner" id="zul-bar-inner">


    </div>
</div>
<!--[if lte IE 8]>
<script>document.body.className += ' pre-ie9'</script><![endif]-->
<script>
    ZUL.init({
        state: 'loggedOut'
    });
</script>
<div id="tmpItemFrm"></div>
<div id="bg-wrapper" style="min-height: auto;">
    <div id="skin-wrap"></div>
    <div id="header">
        <div id="livesearch"></div>
        <!--[if lt IE 8]>
        <script>ZAM.warnIE()</script><![endif]-->
        <div id="logo" style="background: url(images/logos/eqemu.png) 0 10px no-repeat;">
            <a href="#" style="background: url(images/logos/logo.png) right no-repeat;top:10px"></a>
        </div>
        <form action="" name="search">
            <input name="q" type="text" onfocus="this.select()" value="" autocomplete="off">
            <a href="javascript:document.search.submit();"></a>
        </form>
        <script type="text/javascript">
            enableLiveSearch()
        </script>
        <div id="nav">
            <ul id="menu_horiz">
                <li class="has-sub first-child  nc-home"><a href="http://everquest.allakhazam.com/">Home</a>
                    <div><em></em><var></var><strong></strong>
                        <ul>
                            <li class="first-child  nc-news-archives"><a href="http://everquest.allakhazam.com/news_archives.html">News Archives</a>
                            </li>
                            <li class="nc-contact-us"><a href="http://www.zam.com/contact.html">Contact Us</a>
                            </li>
                            <li class="nc-new-comments"><a href="http://everquest.allakhazam.com/newcomments.html">New
                                    Comments</a>
                            </li>
                            <li class="last-child  nc-zam-tools"><a href="http://everquest.allakhazam.com/enhancements.html"><span class="icon-tools">ZAM Tools</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="has-sub  nc-database-code"><a class="no-href">Database</a>
                    <div><em></em><var></var><strong></strong>
                        <ul>
                            <li class="has-sub first-child  nc-zones"><a href="http://everquest.allakhazam.com/db/zone.html?mode=bymap">Zones</a>
                                <div style="left: 131px;"><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/zone.html?mode=bytype">By
                                                Type</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/zone.html?mode=bymap">By
                                                Expansion</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/zlvlchart.html">Levels</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/EQ:Hotzones">Hot Zones</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-items-equipment"><a href="http://everquest.allakhazam.com/dyn/items/">Items/Equipment</a>
                                <div style="left: 131px;"><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/adv_search.html">Search</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/searchdb.html">Item Lookup</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/dyn/items/">By Slot</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/itemzone.html?1">By Zone</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/loregrouplist.html">By Lore
                                                Group</a>
                                        </li>
                                        <li class=" last-child"><a href="http://lucy.allakhazam.com/">Lucy</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-quests"><a href="http://everquest.allakhazam.com/db/adv_qsearch.html">Quests</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/dyn/quest_item_index.html">By
                                                Item</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/flist.html">By Faction</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/zone.html?mode=questsbycont">By
                                                Zone</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/monstermissions.html">Monster
                                                Missions</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/qgen/">Quest Lists</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/dyn/items/Quest.html">Quest
                                                Items</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-bestiary"><a href="http://everquest.allakhazam.com/db/npclist.html">Bestiary</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/zone.html?mode=bycont">By
                                                Zone</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/factionlist.html">By Faction</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/npclist.html?zone=273">Mob
                                                Graveyard</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/npclist.html">Advanced
                                                Search</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/newcomments.html">New Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-spells-amp-skills"><a href="http://everquest.allakhazam.com/db/spelllist.html">Spells &amp; Skills</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/spelllist.html">Spells &amp;
                                                Skills</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/focuslist.html">Focus
                                                Effects</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/db/aaskills.html">AA Skills</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-recipes"><a href="http://everquest.allakhazam.com/db/recipesearch.html">Recipes</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/recipesearch.html">Recipe
                                                Search</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/db/recipeitems.html">Search by
                                                Item</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-guides"><a href="http://everquest.allakhazam.com/db/guides.html">Guides</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/db/guides.html?guide=942">The
                                                Buried Sea</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/guides.html?guide=810">The
                                                Serpent's Spine</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/db/guides.html">Other Guides</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-screenshots"><a href="http://everquest.allakhazam.com/mediabox/">Screenshots</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/gallery/media.html">Mediabox
                                                Archives</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/gallery/war.html">War to Reclaim
                                                Gobb</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub  nc-history"><a href="http://everquest.allakhazam.com/history/">History</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class="last-child first-child only-child nc-patch-history"><a href="http://everquest.allakhazam.com/history/patches.html">Patch
                                                History</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub last-child  nc-game-information"><a class="no-href">Game Information</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/Newbie_Guide.html">New to the
                                                Game?</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/emotes.html">Commands &amp;
                                                Terms</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/db/classes.html">Classes</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/EQ:Cross-game_Tells">Cross-Game
                                                /tells</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="has-sub  nc-wiki"><a href="http://everquest.allakhazam.com/wiki/">Wiki</a>
                    <div><em></em><var></var><strong></strong>
                        <ul>
                            <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki.html?limit=50;category=EverQuest;bot=0;p=Special%3ARecent_changes">Recent
                                    Changes</a>
                            </li>
                            <li><a href="http://everquest.allakhazam.com/wiki/Special:Search">Wikibase Search</a>
                            </li>
                            <li><a href="http://everquest.allakhazam.com/wiki/EQ:Classes/">Classes</a>
                            </li>
                            <li><a href="http://everquest.allakhazam.com/wiki/EQ:Races/">Races</a>
                            </li>
                            <li class="has-sub"><a href="http://everquest.allakhazam.com/wiki/eq:Call_of_the_Forsaken_Overview">Call of
                                    the Forsaken</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/eq:Progression_Through_Call_of_the_Forsaken">Progression</a>
                                        </li>
                                        <li>
                                            <a href="http://everquest.allakhazam.com/wiki/eq:Call_of_the_Forsaken_Armor_Guide">Armor</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/eq:Raiding_in_Call_of_the_Forsaken">Raiding</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub"><a href="http://everquest.allakhazam.com/wiki/eq:Rain_of_Fear_Overview">Rain
                                    of Fear</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/eq:Progression_Through_Rain_of_Fear">Progression</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/wiki/eq:Rain_of_Fear_Armor_Guide">Armor</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/eq:Raiding_in_Rain%20of%20Fear">Raiding</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub"><a href="http://everquest.allakhazam.com/wiki/EQ:Veil_of_Alaris_Overview">Veil of
                                    Alaris</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/EQ:Progression_Through_Veil_of_Alaris">Progression</a>
                                        </li>
                                        <li>
                                            <a href="http://everquest.allakhazam.com/wiki/EQ:Veil_of_Alaris_Armor_Guide">Armor</a>
                                        </li>
                                        <li class=" last-child"><a href="eq:Raiding_in_Veil_of_Alaris">Raiding</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub"><a href="http://everquest.allakhazam.com/wiki/eq:House_of_Thule_Overview">House of
                                    Thule</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/eq:Progression_Through_House_of_Thule">Progression</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/eq:House_of_Thule_Armor_Guide">Armor</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub"><a href="http://everquest.allakhazam.com/wiki/eq:The_Darkened_Sea_Overview">The
                                    Darkened Sea</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/eq:Progression_Through_The_Darkened_Sea">Progression</a>
                                        </li>
                                        <li>
                                            <a href="http://everquest.allakhazam.com/wiki/eq:The_Darkened_Sea_Armor_Guide">Armor</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/eq:Raiding_in_The_Darkened_Sea">Raiding</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub last-child"><a href="http://everquest.allakhazam.com/wiki/eq:The_Broken_Mirror_Overview">The Broken
                                    Mirror</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/wiki/eq:Progression_Through_The_Broken_Mirror">Progression</a>
                                        </li>
                                        <li>
                                            <a href="http://everquest.allakhazam.com/wiki/eq:The_Broken_Mirror_Armor_Guide">Armor</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/wiki/eq:Raiding_in_The_Broken_Mirror">Raiding</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="ext nc-eqinterface"><a href="http://www.eqinterface.com/">EQInterface</a>
                </li>
                <li class="has-sub  nc-forums"><a href="http://everquest.allakhazam.com/forum.html">Forums</a>
                    <div><em></em><var></var><strong></strong>
                        <ul>
                            <li class="first-child  nc-everquest-general"><a href="http://everquest.allakhazam.com/forum.html?forum=1">EverQuest General</a>
                            </li>
                            <li class="nc-skills"><a href="http://everquest.allakhazam.com/db/skills.html">Skills</a>
                            </li>
                            <li class="has-sub  nc-cross-site"><a href="http://everquest.allakhazam.com/forum.html?cat=9">Cross Site</a>
                                <div><em></em><var></var><strong></strong>
                                    <ul>
                                        <li class=" first-child"><a href="http://everquest.allakhazam.com/forum.html?forum=3">Site
                                                Feedback</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/forum.html?forum=82">Wikibase
                                                Feedback</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/forum.html?forum=22">General Game
                                                Discussion</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/forum.html?forum=5">TV, Movies,
                                                Anime &amp; Books</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/forum.html?forum=25">Computer
                                                Hardware &amp; Troubleshooting</a>
                                        </li>
                                        <li><a href="http://everquest.allakhazam.com/forum.html?forum=28">Out of
                                                Topic</a>
                                        </li>
                                        <li class=" last-child"><a href="http://everquest.allakhazam.com/forum.html?forum=4">The Asylum</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nc-live-forum-updates"><a href="http://everquest.allakhazam.com/live.html">Live
                                    Forum Updates</a>
                            </li>
                            <li class="nc-followed-threads"><a href="http://everquest.allakhazam.com/follow.html">Followed
                                    Threads</a>
                            </li>
                            <li class="last-child  nc-forum-search"><a href="http://everquest.allakhazam.com/fsearch.html">Forum Search</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <script>
            Nav.init()
        </script>
    </div>
    <div id="wrapper">
        <div id="shadows">
            <div id="s-top"></div>
            <div id="s-bot"></div>
            <div id="s-left"></div>
            <div id="s-right"></div>
        </div>
        <div id="body">
            <div id="cols">

                <div id="col-main">
                    <div id="col-main-inner">
                        <div id="col-main-inner-2">
                            <div id="col-main-inner-3">
                                <div id="buffer-top"></div>


                                <div style="width:100%">
                                    <div style="width:200px; display: inline-block; float: left;">
                                        <table border="0">
                                            <form name="fullsearch" method="GET" action="fullsearch.php"></form>
                                            <tbody>
                                            <tr>
                                                <td class="menuh" nowrap="1">Main...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/index.php">AllaClone Main
                                                            Page</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://www.eqemulator.org">EQEmulator</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/news.php">Server News</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Search...
                                                    <input type="hidden" name="isearchtype" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onfocus="if(this.value == 'Name...') { this.value = ''; }" onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'name'; this.form.submit(); } else {return true;}" type="text" name="iname" placeholder="Name..." size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onfocus="if(this.value == 'ID...') { this.value = ''; }" onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}" type="text" name="iid" placeholder="ID..." size="10">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Zones...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/zonelist.php">Zones by
                                                            Era</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/zones.php">Populated
                                                            Zones</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/zoneslevels.php">Zones by
                                                            Level</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Items...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/items.php">Item Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Spells...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="?a=spells">Spell Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Factions...</td>
                                            </tr>
                                            <tr>
                                                <td class="menu_item" nowrap="1">
                                                    <li><a href="http://10.0.1.12/allaclone/factions.php">Faction
                                                            Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/npcfactions.php">NPCs By
                                                            Faction</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Bestiary...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/npcs.php">NPC Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/advnpcs.php">Advanced NPC
                                                            Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/pets.php">Pets</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Trade skills...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/recipes.php">Recipe
                                                            Search</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menuh" nowrap="1">Strategy...</td>
                                            </tr>
                                            <tr>
                                                <td nowrap="1" class="menu_item">
                                                    <li><a href="http://10.0.1.12/allaclone/strategy/melee.php">Melee
                                                            Damage Calculator</a>
                                                    </li>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="center page-content">
                                        <?php
                                            $route = $_GET['a'];
                                            if($route == "spells"){ require_once('pages/spells.php'); }
                                            if($route == "spell"){ require_once('pages/spell.php'); }
                                            if($route == "item"){ require_once('pages/item.php'); }
                                        ?>
                                    </div>
                                </div>

                                <div class="clear"></div>
                                <div id="buffer-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="block-content pad10" style="line-height:24px">
            <ul class="site-footer">
                <li><a href="http://legacy.zam.com/subscribe.html">Subscribe</a>
                </li>
                <li><a href="http://everquest.allakhazam.com/wiki/About_Us">About ZAM</a>
                </li>
                <li><a href="http://legacy.zam.com/wiki/Frequently_Asked_Questions_(Support)">FAQ</a>
                </li>
                <li><a href="http://legacy.zam.com/press.html">Press</a>
                </li>
                <li><a href="http://legacy.zam.com/advertising.html">Advertise</a>
                </li>
                <li><a href="http://legacy.zam.com/privacy.html">Privacy Policy</a>
                </li>
                <li><a href="http://legacy.zam.com/terms.html">Terms of Service</a>
                </li>
                <li><a href="http://everquest.allakhazam.com/wiki/Forum_Rules">Forum Rules</a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="div15"></div>


    </footer>

    <div class="copyright">© 2016 EQEmulator :: Akkadius</div>

</div>


</body>

</html>