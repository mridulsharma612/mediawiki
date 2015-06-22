<?php
/** Aramaic (ܐܪܡܝܐ)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$rtl = true;

$namespaceNames = array(
	NS_MEDIA            => 'ܡܝܕܝܐ',
	NS_SPECIAL          => 'ܕܝܠܢܝܐ',
	NS_TALK             => 'ܡܡܠܠܐ',
	NS_USER             => 'ܡܦܠܚܢܐ',
	NS_USER_TALK        => 'ܡܡܠܠܐ_ܕܡܦܠܚܢܐ',
	NS_PROJECT_TALK     => 'ܡܡܠܠܐ_ܕ$1',
	NS_FILE             => 'ܠܦܦܐ',
	NS_FILE_TALK        => 'ܡܡܠܠܐ_ܕܠܦܦܐ',
	NS_MEDIAWIKI        => 'ܡܝܕܝܐܘܝܩܝ',
	NS_MEDIAWIKI_TALK   => 'ܡܡܠܠܐ_ܕܡܝܕܝܐܘܝܩܝ',
	NS_TEMPLATE         => 'ܩܠܒܐ',
	NS_TEMPLATE_TALK    => 'ܡܡܠܠܐ_ܕܩܠܒܐ',
	NS_HELP             => 'ܥܘܕܪܢܐ',
	NS_HELP_TALK        => 'ܡܡܠܠܐ_ܕܥܘܕܪܢܐ',
	NS_CATEGORY         => 'ܣܕܪܐ',
	NS_CATEGORY_TALK    => 'ܡܡܠܠܐ_ܕܣܕܪܐ',
);

$namespaceAliases = array(
	'ܡܬܚܫܚܢܐ'        => NS_USER,
	'ܡܡܠܠܐ_ܕܡܬܚܫܚܢܐ' => NS_USER_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'ܡܦܠܚܢ̈ܐ_ܙܪ̈ܝܙܐ' ),
	'Allmessages'               => array( 'ܟܠܗܝܢ_ܐܓܪ̈ܬܐ' ),
	'Allpages'                  => array( 'ܟܠܗܝܢ_ܦܐܬܬ̈ܐ' ),
	'Ancientpages'              => array( 'ܦܐܬܬ̈ܐ_ܥܬܝܩ̈ܬܐ' ),
	'Badtitle'                  => array( 'ܟܘܢܝܐ_ܠܐ_ܛܒܐ' ),
	'Blankpage'                 => array( 'ܦܐܬܐ_ܣܦܝܩܬܐ' ),
	'BrokenRedirects'           => array( 'ܨܘܝܒ̈ܐ_ܬܒܝܪ̈ܐ' ),
	'Categories'                => array( 'ܣܕܪ̈ܐ' ),
	'ChangeEmail'               => array( 'ܫܚܠܦ_ܒܝܠܕܪܐ_ܐܠܩܛܪܘܢܝܐ' ),
	'ComparePages'              => array( 'ܦܚܡ_ܒܝܢܬ_ܦܐܬܬ̈ܐ' ),
	'Confirmemail'              => array( 'ܫܪܪ_ܒܝܠܕܪܐ_ܐܠܩܛܪܘܢܝܐ' ),
	'Contributions'             => array( 'ܫܘܬܦܘ̈ܬܐ' ),
	'CreateAccount'             => array( 'ܒܪܝ_ܚܘܫܒܢܐ' ),
	'Deadendpages'              => array( 'ܦܐܬܬ̈ܐ_ܥܡ_ܚܪܬܐ_ܡܝܬܬܐ' ),
	'DeletedContributions'      => array( 'ܫܘܬܦܘ̈ܬܐ_ܫܝ̈ܦܬܐ' ),
	'DoubleRedirects'           => array( 'ܨܘܝܒ̈ܐ_ܥܦܝ̈ܦܐ' ),
	'EditWatchlist'             => array( 'ܫܚܠܦ_ܪ̈ܗܝܬܐ' ),
	'Emailuser'                 => array( 'ܫܕܪ_ܒܝܠܕܪܐ_ܐܠܩܛܪܘܢܝܐ_ܠܡܦܠܚܢܐ' ),
	'Fewestrevisions'           => array( 'ܬܢܝ̈ܬܐ_ܒܨܝܪ_ܡܢ_ܟܠ' ),
	'Filepath'                  => array( 'ܫܒܝܠܐ_ܕܦܐܬܐ' ),
	'Log'                       => array( 'ܣܓܠܐ', 'ܣܓܠ̈ܐ' ),
	'Lonelypages'               => array( 'ܦܐܬܬ̈ܐ_ܝܬܡ̈ܬܐ' ),
	'Longpages'                 => array( 'ܦܐܬܬ̈ܐ_ܐܪ̈ܝܟܬܐ' ),
	'Mostlinkedcategories'      => array( 'ܣܕܪ̈ܐ_ܐܣܝܪ̈ܐ_ܝܬܝܪ_ܡܢ_ܟܠ', 'ܣܕܪ̈ܐ_ܦܠܝܚ̈ܐ_ܝܬܝܪ_ܡܢ_ܟܠ' ),
	'Mostlinkedtemplates'       => array( 'ܩܠܒ̈ܐ_ܐܣܝܪ̈ܐ_ܝܬܝܪ_ܡܢ_ܟܠ', 'ܩܠܒ̈ܐ_ܦܠܝܚ̈ܐ_ܝܬܝܪ_ܡܢ_ܟܠ' ),
	'Mostrevisions'             => array( 'ܬܢܝ̈ܬܐ_ܝܬܝܪ_ܡܢ_ܟܠ' ),
	'Movepage'                  => array( 'ܫܢܝ_ܦܐܬܐ' ),
	'Mycontributions'           => array( 'ܫܘܬܦܘ̈ܬܝ' ),
	'MyLanguage'                => array( 'ܠܫܢܐ_ܕܝܠܝ' ),
	'Mypage'                    => array( 'ܦܐܬܐ_ܕܝܠܝ' ),
	'Mytalk'                    => array( 'ܡܡܠܠܐ_ܕܝܠܝ' ),
	'Myuploads'                 => array( 'ܐܣܩ̈ܬܐ_ܕܝܠܝ' ),
	'Newimages'                 => array( 'ܠܦܦ̈ܐ_ܚܕ̈ܬܐ', 'ܨܘܪ̈ܬܐ_ܚܕ̈ܬܬܐ' ),
	'Newpages'                  => array( 'ܦܐܬܬ̈ܐ_ܚܕ̈ܬܬܐ' ),
	'PermanentLink'             => array( 'ܐܣܘܪܐ_ܦܝܘܫܐ' ),

	'Preferences'               => array( 'ܨܒܝܢܝܘ̈ܬܐ' ),
	'Protectedpages'            => array( 'ܦܐܬܬ̈ܐ_ܢܛܝܪ̈ܬܐ' ),
	'Protectedtitles'           => array( 'ܟܘܢܝ̈ܐ_ܢܛܝܪ̈ܐ' ),
	'Recentchanges'             => array( 'ܫܘܚܠܦ̈ܐ_ܚܕ̈ܬܐ' ),
	'Search'                    => array( 'ܒܨܝܐ' ),
	'Shortpages'                => array( 'ܦܐܬܬ̈ܐ_ܟܪ̈ܝܬܐ' ),
	'Specialpages'              => array( 'ܦܐܬܬ̈ܐ_ܕ̈ܝܠܢܝܬܐ' ),
	'Statistics'                => array( 'ܚܒܝܫܘܬ_ܡܢܝܢܐ' ),
	'Uncategorizedcategories'   => array( 'ܣܕܪ̈ܐ_ܠܐ_ܣܕܝܪ̈ܐ' ),
	'Uncategorizedimages'       => array( 'ܠܦܦ̈ܐ_ܠܐ_ܣܕܝܪ̈ܐ', 'ܨܘܪ̈ܬܐ_ܠܐ_ܣܕܝܪ̈ܬܐ' ),
	'Uncategorizedpages'        => array( 'ܦܐܬܬ̈ܐ_ܠܐ_ܣܕܝܪ̈ܬܐ' ),
	'Uncategorizedtemplates'    => array( 'ܩܠܒ̈ܐ_ܠܐ_ܣܕܝܪ̈ܐ' ),
	'Unusedcategories'          => array( 'ܣܕܪ̈ܐ_ܠܐ_ܦܠܝܚ̈ܐ' ),
	'Unusedimages'              => array( 'ܠܦܦ̈ܐ_ܠܐ_ܦܠܝܚ̈ܐ', 'ܨܘܪ̈ܬܐ_ܠܐ_ܦܠܝܚܬ̈ܐ' ),
	'Unusedtemplates'           => array( 'ܩܠܒ̈ܐ_ܠܐ_ܦܠܝܚ̈ܐ' ),
	'Unwatchedpages'            => array( 'ܦܐܬܬ̈ܐ_ܠܐ_ܣܢܝܩ̈ܬܐ' ),
	'Upload'                    => array( 'ܐܣܩ' ),
	'Userlogin'                 => array( 'ܥܠܠܐ_ܕܡܦܠܚܢܐ' ),
	'Userlogout'                => array( 'ܦܠܛܐ_ܕܡܦܠܚܢܐ' ),
	'Userrights'                => array( 'ܙܕ̈ܩܐ_ܕܡܦܠܚܢܐ', 'ܥܒܕ_ܡܕܒܪܢܐ_ܕܛܟܣܐ', 'ܥܒܕ_ܒܘܛ' ),
	'Version'                   => array( 'ܡܦܩܬܐ' ),
	'Wantedcategories'          => array( 'ܣܕܪ̈ܐ_ܣܢܝܩ̈ܐ' ),
	'Wantedfiles'               => array( 'ܠܦܦ̈ܐ_ܣܢܝܩ̈ܐ' ),
	'Wantedpages'               => array( 'ܦܐܬܬ̈ܐ_ܣܢܝܩ̈ܬܐ', 'ܐܣܘܪ̈ܐ_ܬܒܝܪ̈ܐ' ),
	'Wantedtemplates'           => array( 'ܩܠܒ̈ܐ_ܣܢܝܩ̈ܐ' ),
	'Watchlist'                 => array( 'ܪ̈ܗܝܬܐ' ),
	'Whatlinkshere'             => array( 'ܡܐ_ܐܣܪ_ܠܗܪܟܐ' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#ܨܘܝܒܐ', '#REDIRECT' ),
	'numberofpages'             => array( '1', 'ܡܢܝܢܐ_ܕܦܐܬܬ̈ܐ', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'ܡܢܝܢܐ_ܕܡܠܘܐ̈ܐ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'ܡܢܝܢܐ_ܕܠܦܦ̈ܐ', 'NUMBEROFFILES' ),
	'pagename'                  => array( '1', 'ܫܡܐ_ܕܦܐܬܐ', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'ܟܘܢܝܐ_ܕܦܐܬܐ', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ܚܩܠܐ', 'NAMESPACE' ),
	'msg'                       => array( '0', 'ܐܓܪܬܐ:', 'MSG:' ),
	'img_thumbnail'             => array( '1', 'ܙܥܘܪܬܐ', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'ܙܥܘܪܬܐ=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'ܝܡܝܢܐ', 'right' ),
	'img_left'                  => array( '1', 'ܣܡܠܐ', 'left' ),
	'img_none'                  => array( '1', 'ܠܐ_ܡܕܡ', 'none' ),
	'img_center'                => array( '1', 'ܡܨܥܐ', 'center', 'centre' ),
	'img_page'                  => array( '1', 'ܦܐܬܐ=$1', 'ܦܐܬܐ $1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'ܬܚܘܡܐ', 'border' ),
	'img_baseline'              => array( '1', 'ܣܪܛܐ_ܫܪܫܝܐ', 'baseline' ),
	'img_sub'                   => array( '1', 'ܦܪܥܝܐ', 'sub' ),
	'grammar'                   => array( '0', 'ܬܘܪܨ_ܡܡܠܠܐ:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'ܓܢܣܐ:', 'GENDER:' ),
	'language'                  => array( '0', '#ܠܫܢܐ:', '#LANGUAGE:' ),
	'special'                   => array( '0', 'ܕܝܠܢܝܐ', 'special' ),
	'url_path'                  => array( '0', 'ܫܒܝܠܐ', 'PATH' ),
	'url_wiki'                  => array( '0', 'ܘܝܩܝ', 'WIKI' ),
);

