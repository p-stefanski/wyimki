<!DOCTYPE html>
<html lang="en">
	<head>
        <?php require_once 'settings.php'; ?>


		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta name="Description" content="wyimki.pl - kadry, fragmenty, wycinki">

		<meta property="og:type" content="website" />
		<meta property="og:title" content="wyimki:<?php print($title) ?>" />
		<meta property="og:url" content="http://wyimki.pl" />
		<meta property="og:image" content="http://wyimki.pl/media/blog/<?php print($default_image) ?>.jpg"/>
		<meta property="fb:admins" content="100000246552747" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>wyimki: <?php print($title); ?></title>

        <link rel="stylesheet" type="text/css" href="css/videoPlayer.css" />
        <link rel="stylesheet" type="text/css" href="css/audioPlayer_tl.css" />
		<link rel="stylesheet" type="text/css" href="css/playlistRightInside.css" />
        <link rel='shortcut icon' type='image/x-icon' href='http://wyimki.pl/favicon.ico' />
        
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.address.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
        
        <script type="text/javascript" src="js/jquery.apYoutubePlayer.min.js"></script>
        <script type="text/javascript" src="js/jquery.apVimeoPlayer.min.js"></script>
        <script type="text/javascript" src="js/jquery.videoGallery.min.js"></script>
        <script type="text/javascript" src="js/jquery.apPlaylistManager.min.js"></script>
        <script type="text/javascript" src="js/jquery.apTextScroller.min.js"></script>
        <script type="text/javascript" src="js/jquery.html5audio.min.js"></script>
        <script type="text/javascript" src="js/jquery.multiGallery.min.js"></script>
		<script type="text/javascript">
		
			/* GALLERY CALLBACKS */
			function multiGallerySetupDone(){
				/* called when component is ready to receive public function calls */
				//console.log('multiGallerySetupDone');
			}
			function beforeSlideChange(slideNum){
				//function called before slide change (plus slide number returned, counting starts from 0)
				//console.log('beforeSlideChange, slideNum = ', slideNum);
			}
			function afterSlideChange(slideNum){
				//function called after slide change (plus slide number returned, counting starts from 0)
				//console.log('afterSlideChange, slideNum = ', slideNum);
			}
			/* END GALLERY CALLBACKS */
		
			/* VIDEO PLAYER SETTINGS */
			function getSlideshowForcePause() {return jQuery.fn.multiGallery.getSlideshowForcePause();}
			function videoEnd() {jQuery.fn.multiGallery.videoEnd();}
			function isReady() {return jsReady;}
			/* END VIDEO PLAYER SETTINGS  */
			
			/* AUDIO PLAYER SETTINGS */
			var ap_settings = {
				/* playerHolder: dom elements which holds the whole player */
				playerHolder: '.audioPlayer',
				/* playlistHolder: dom elements which holds list of playlists */
				playlistHolder: '#playlist_list',
				/* activePlaylist: set active playlist that will be loaded on beginning. 
				Leave empty for none like this: activePlaylist: '' */
				activePlaylist: '#audio_playlist1',
				/* activeItem: active item to start with when playlist is loaded (0 = first, 1 = second, 2 = third... -1 = none) */
				activeItem: 0,
	
				/*defaultVolume: 0-1 (Irrelevant on ios mobile) */
				defaultVolume:0.5,
				/*autoPlay: true/false (false on mobile by default) */
				autoPlay:true,
				/*autoLoad: true/false (auto start sound load) */
				autoLoad:true,
				/*randomPlay: true/false */
				randomPlay:false,
				/*loopingOn: true/false (loop on the end of the playlist) */
				loopingOn:true,
				
				/* autoSetSongTitle: true/false. Auto set song title in 'player_mediaName'. */
				autoSetSongTitle: true,
				
				/* useSongNameScroll: true/false. Use song name scrolling. */
				useSongNameScroll: true,
				/* scrollSpeed: speed of the scroll (number higher than zero). */
				scrollSpeed: 1,
				/* scrollSeparator: String to append between scrolling song name. */
				scrollSeparator: '&nbsp;&#42;&#42;&#42;&nbsp;',
				
				/* buttonsUrl: url of the buttons for normal and rollover state */
				buttonsUrl: {prev: 'media/data/audio_icons/prev.png', prevOn: 'media/data/audio_icons/prev_on.png', 
							 next: 'media/data/audio_icons/next.png', nextOn: 'media/data/audio_icons/next_on.png', 
							 pause: 'media/data/audio_icons/pause.png', pauseOn: 'media/data/audio_icons/pause_on.png',
							 play: 'media/data/audio_icons/play.png', playOn: 'media/data/audio_icons/play_on.png',
							 volume: 'media/data/audio_icons/volume.png', volumeOn: 'media/data/audio_icons/volume_on.png', 
							 mute: 'media/data/audio_icons/mute.png', muteOn: 'media/data/audio_icons/mute_on.png'},
				/* useAlertMessaging: Alert error messages to user (true / false). */
				useAlertMessaging: true,
				/* autoOpenAudioPlayer: true / false */
				autoOpenAudioPlayer: false
			};
			
			/* END AUDIO PLAYER SETTINGS */
			
			/* GALLERY SETTINGS */
			var kb_settings = {
				/* GENERAL */
				/* componentHolder: dom element which holds the whole component */
				componentHolder: '#componentWrapper',
				/* componentFixedSize: true/false. Responsive = false, fixed = true */
				componentFixedSize: false,
				/* disableRightClick: true/false  */
				disableRightClick: true,
				/* forceImageFitMode: true/false. By default, only images bigger than component size will get proportionally resized to 'fit inside' or 'fit outside' mode. If this is true, all images will be forced into that mode, even smaller ones. */
				forceImageFitMode: true,
				
				/* DEEPLINKING SETTINGS */
				/* useDeeplink: true/false */
				useDeeplink:true,
				/* startUrl: deeplink start url, enter 'div' data-address/'li' data-address (two levels). Or just 'div' data-address (single level). */
				startUrl: 'blog',
				
				/* NO DEEPLINKING SETTINGS */
				/* activeCategory: active category to start with (counting starts from zero, 0=first category, 1=second category, 2=third category... etc) */
				activeCategory:0,
				
				/* SLIDESHOW */
				/* slideshowOn; true, false */
				slideshowOn: true,
				/* useGlobalDelay; true, false (use same timer delay for all slides, if false you need to set individual delays for every slide -> data-duration attribute) */
				useGlobalDelay: true,
				/* slideshowAdvancesToNextCategory: true/false. On the end/beginning of current category, go to next/previous one, instead of loop current one. */
				slideshowAdvancesToNextCategory: false,
				/* randomPlay; true, false (random image play in category) */
				randomPlay: false,
				
				/* DESCRIPTION */
				/* autoOpenDescription; true/false (automatically open description, if exist)  */
				autoOpenDescription: false,
				/* maxDescriptionWidth: max width of the description */
				maxDescriptionWidth: 250,
				
				/* PLAYLIST */
				/* autoAdjustPlaylist: true/false (auto adjust thumb playlist and playlist buttons) */
				autoAdjustPlaylist: true,
				/* playlistPosition: top, right, left, bottom  */
				playlistPosition: 'right',
				/* autoOpenPlaylist: true/false. Auto open playlist on beginning */
				autoOpenPlaylist: false,
				/* playlistHidden: true/false. (leave css display none on componentPlaylist) */
				playlistHidden: false,
				/* playlistIndex: inside/outside ('outside' opens above the image, while 'inside' sits outside of the image area and cannot be closed)  */
				playlistIndex: 'inside',
				
				/* MENU */
				/* menuOrientation: horizontal/vertical  */
				menuOrientation: 'vertical',
				/* menuItemOffOpacity: opacity of menu item when inactive */
				menuItemOffOpacity:0.4,
				/* menuBtnSpace: space between menu buttons and the menu (enter 0 or more) */
				menuBtnSpace: 30,
				/* visibleMenuItems: visible menu items by default. Enter number (if they dont fit into provided area, the code will automatically reduce this number) or 'max' (maximum number that fits). */
				visibleMenuItems: 'max',
				/* fixMenu: true/false. false by default (menu centered). Can be true ONLY if 'visibleMenuItems' != 'max'. 
				Set this to true to fix it to one side. */
				fixMenu: false,
				/* fixMenuSettings: (if fixMenu = true), param1: side: -> left/right if menuOrientation = horizontal, top/bottom if menuOrientation = vertical, 
														 param2: value -> offset value in px from that side */
				fixMenuSettings: {side: 'top',value: 100},
				
				/* THUMBNAILS */
				/* thumbOrientation: horizontal/vertical  */
				thumbOrientation: 'vertical',
				/* thumbOffOpacity: opacity of thumb when inactive */
				thumbOffOpacity:0.4,
				/* visibleThumbs: visible thumb items by default. Enter number (if they dont fit into provided area, the code will automatically reduce this number) or 'max' (maximum number that fits). */
				visibleThumbs: 'max',
				/* thumbBtnSpace:  space between thumb buttons and the thumbs (enter 0 or more) */
				thumbBtnSpace: 0,
				/* fixThumbs: true/false. false by default (thumbs centered). Can be true ONLY if 'visibleThumbs' != 'max'. 
				Set this to true to fix it to one side. */
				fixThumbs: false,
				/* fixThumbsSettings:  (if fixThumbs = true), param1: side -> left/right if thumbOrientation = horizontal, top/bottom if thumbOrientation = vertical,
															  param2: value -> offset value in px from that side */
				fixThumbsSettings: {side: 'top',value: 100},
				
				/* VIDEO SETTINGS */
				/* useVideo: true/false */
				useVideo: true,
				/* videoPosition: left, center */
				videoPosition: 'center',
				/* videoVolume: default volume for video (0-1) */
				videoVolume: 0.5,
				/* videoAutoPlay: true/false (Defaults to false on mobile) */
				videoAutoPlay: true,
				/* includeVideoInSlideshow: true/false (on video end resume slideshow, only if slideshow was playing before video request) */
				includeVideoInSlideshow: false,
				/* videoLoop: true/false (only if includeVideoInSlideshow = false) */
				videoLoop: true,
				/*playerBgOpacity: background opacity behind the video player when its opened (0-1) */
				playerBgOpacity:0.8,
				/*playerHolder: dom elements which holds the whole player */
				playerHolder:'#componentWrapper .videoPlayer',
					
				/* AUDIO SETTINGS */
				/* useAudio: true/false */
				useAudio: false
			};
			
			/* END GALLERY SETTINGS */
			
			//gallery instances
			var gallery1;  
			
			jQuery(document).ready(function($) {
				jsReady = true;
				gallery1 = $('#componentWrapper').multiGallery(kb_settings, ap_settings);
				kb_settings = null;
				ap_settings = null;
				
			});
		
        </script>
	
  </head>
      <body>  
      
         <!-- wrapper for the whole component -->
         <div id="componentWrapper">
         
         	  <!-- playlist -->
              <div class="componentPlaylist">
                  
                 <div class="menuHolder">
                     <div class="menuWrapper">
                     </div>
                 </div>
                 
                 <div class="thumbHolder">
                     <div class="thumbWrapper">
								 <div class="playlist" data-address='blog' data-title='blog' data-transitionType='reveal' data-imageFitMode='fit-inside' data-duration='10000' data-transitionEase='_default' data-bgColor='#000000' data-playlistSize='180' data-transitionEase='easeInOutExpo'>
                                   <ul>
									  		<?php foreach ($photos as $value) { ?>

											  <li data-address='<?php print($value) ?>' class='playlistItem6' data-imagePath='media/blog/<?php print($value) ?>.jpg' data-target='_blank' data-caption-id="#caption_fb" data-description="&#9993; kontakt@wyimki.pl"<?php if (in_array($value, $movies)) print " data-localMp4='media/blog/2015-08-01-02.mp4' data-localPreview='media/blog/2015-08-01-02.jpg'" ?>><a href='#'><img src='media/blog/thumbs/<?php print($value) ?>.jpg' width='133' height='100' alt=''/></a></li>

									  		<?php } ?>

                                  </ul>  
                             </div>
                             

                              

                          
                    </div>
                 </div>  
                 
                 <!-- menu buttons -->
                 <div class="prevMenuBtn"><img src='media/data/gallery_icons/playlist_prev_v.png' width='30' height='12' alt=''/></div>
                 <div class="nextMenuBtn"><img src='media/data/gallery_icons/playlist_next_v.png' width='18' height='12' alt=''/></div> 
                 
                 <!-- thumb buttons -->
                 <div class="prevThumbBtn"><img src='media/data/gallery_icons/playlist_prev_v.png' width='100%' height='100%' alt=''/></div>
                 <div class="nextThumbBtn"><img src='media/data/gallery_icons/playlist_next_v.png' width='100%' height='100%' alt=''/></div>
                 
                 <!-- playlist toggle -->
                 <div class="playlist_toggle" title="Playlist"><img src='media/data/gallery_icons/plus.png' width='100%' height='100%' alt='playlist_toggle'/></div>
              
              </div>
     
          	  <div class="componentHolder">
         
                  <div class="mediaHolder1"></div>
                  <div class="mediaHolder2"></div>
                  
              </div> 
              
              <!-- fullscreen btn (automatically removed if browser doesnt support fullscreen) -->
              <div class="gallery_fullscreen" title="Fullscreen"><img src='media/data/gallery_icons/fullscreen_enter.png' width='30' height='30' alt=''/></div>

              <div class="share_controls_wrap">
              	 <div class="share_toggle" title="Share"><img src='media/data/gallery_icons/share_toggle.png' width='100%' height='100%'/></div>
              	 <div class="share_controls">
	                  <div class="facebook_toggle" title="Share on Facebook"><img src='media/data/gallery_icons/facebook.png' width='100%' height='100%' /></div>
	                  <div class="twitter_toggle" title="Share on Twitter"><img src='media/data/gallery_icons/twitter.png' width='100%' height='100%'/></div>
	                  <div class="tumblr_toggle" title="Share on Tumblr"><img src='media/data/gallery_icons/tumblr.png' width='100%' height='100%'/></div>
                  </div>
              </div>
              
              <!-- toggle music player -->
              <!-- <div class="music_toggle"><img src='media/data/audio_icons/music.png' width='30' height='30' alt='music_toggle'/></div> -->
              
              <!-- slideshow controls - previous,pause/play,next -->
              <div class="slideshow_controls">
              	  <div class="controls_next"><img src='media/data/gallery_icons/next.png' width='100%' height='100%' alt='controls_next'/></div>
                  <div class="controls_toggle"><img src='media/data/gallery_icons/play.png' width='100%' height='100%' alt='controls_toggle'/></div>
                  <div class="controls_prev"><img src='media/data/gallery_icons/prev.png' width='100%' height='100%' alt='controls_prev'/></div>
              </div>
              
              <!-- data controls - link/description -->
              <div class="data_controls">
                  <div class="info_toggle" title="Info"><img src='media/data/gallery_icons/info.png' width='100%' height='100%' alt='info_toggle'/></div>
                  <div class="link_toggle" title="Visit url"><img src='media/data/gallery_icons/link.png' width='30' height='30' alt='link_toggle'/></div>
              </div>
              <!-- description holder -->
              <div class="info_holder"></div>
              
              <!-- preloader for images -->
              <div class="componentPreloader"></div>  
              
              <!-- audio player -->
              <!--
              <div class="audioPlayer">
            
                 <div class="playerHolder">
                     
                      <div class="player_controls">
                          <div class="controls_prev"><img src='media/data/audio_icons/prev.png' width='100%' height='100%' alt='controls_prev'/></div>
                          <div class="controls_next"><img src='media/data/audio_icons/next.png' width='30' height='30' alt='controls_next'/></div>
                          <div class="controls_toggle"><img src='media/data/audio_icons/play.png' width='30' height='30' alt='controls_toggle'/></div>
                          <div class="player_volume"><img src='media/data/audio_icons/volume.png' width='30' height='30' alt='player_volume'/></div>
                          <div class="volume_seekbar">
                             <div class="volume_bg"></div>
                             <div class="volume_level"></div>
                          </div>
    
                      </div>
                 
                 </div>
                 <div class="player_mediaName_Mask">
                 	 <div class="player_mediaName">Artist Name - Artist Title</div>
                 </div>
                 
              </div>
              -->
              <!-- big play for video player toggle -->
              <div class="player_bigPlay"><img src='media/data/video_icons/big_play.png' width='76' height='76' alt=''/></div>
              
              <!-- darken area behind the video player -->
              <div class="player_bg"></div>
              
              <!-- video player -->
              <div class="videoPlayer">
             
             	 <!-- media holders for youtube and vimeo -->
                 <div class="youtubeWrapper"><div class="youtubeHolder"></div></div>
                 <div class="vimeoHolder"></div>
             
                 <!-- video holder for local video -->
                 <div class="mediaHolder"></div>
                 
                 <!-- preview image for local video --> 
                 <div class="mediaPreview"></div>
                 
                 <div class="playerControls">
             
                      <div class="player_playControl"><img src='media/data/video_icons/play.png' width='12' height='14' alt=''/></div>
                        
                      <div class="player_progress">
                          <!-- seekbar background -->
                          <div class="progress_bg"></div>
                          <div class="load_level"></div>
                          <div class="progress_level"></div>
                      </div>
                     
                      <div class="player_mediaTime">0:00 | 0:00</div>
                      
                      <div class="vplayer_volume"><img src='media/data/video_icons/volume_on.png' width='13' height='14' alt=''/></div>
                      <div class="volume_seekbar">
                         <!-- volume background -->
                         <div class="volume_bg"></div>
                         <div class="volume_level"></div>
                      </div>
                      
                      <div class="player_fullscreen"><img src='media/data/video_icons/fullscreen_enter.png' width='12' height='12' alt=''/></div>
                      
                      <div class="player_volume_tooltip">
                          <div class="player_volume_tooltip_value">0</div>
                      </div>
                      
                      <div class="player_progress_tooltip">
                          <div class="player_progress_tooltip_value">0:00 | 0:00</div>
                      </div>
                      
                 </div>
                 
                 <!-- preloader for local video -->
                 <div class="mediaPreloader"></div>
                 
                 <!-- big play for local video toggle -->
                 <div class="bigPlay"><img src='media/data/video_icons/big_play.png' width='76' height='76' alt=''/></div>
                 
                 <!-- video player close -->
                 <div class="player_close"><img src='media/data/video_icons/close.png' width='30' height='30' alt='player_close'/></div>
                 
             </div>
             
             <!-- List of audio playlists -->
             <!--
             <div id="playlist_list">

                 <ul id='audio_playlist1'>
                     <li class= "playlistItem" data-type='local' data-mp3Path="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3" 		 data-oggPath="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.ogg"><a class="playlistNonSelected" href='#'>Tim McMorris - A Bright And Hopeful Future</a></li>
                     <li class= "playlistItem" data-type='local' data-mp3Path="media/audio/1/Tim_McMorris_-_Be_My_Valentine.mp3" 					 data-oggPath="media/audio/1/Tim_McMorris_-_Be_My_Valentine.ogg"><a class="playlistNonSelected" href='#'>Tim McMorris - Be My Valentine</a></li>
                     <li class= "playlistItem" data-type='local' data-mp3Path="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.mp3"  data-oggPath="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.ogg"><a class="playlistNonSelected" href='#'>Tim McMorris - Give Our Dreams Their Wings To Fly</a></li>
                 </ul>
                 
                 <ul id='audio_playlist2'>
                     <li class= "playlistItem" data-type='local' data-mp3Path="media/audio/2/Soundroll_-_A_Way_To_The_Top.mp3"  data-oggPath="media/audio/2/Soundroll_-_A_Way_To_The_Top.ogg"><a class="playlistNonSelected" href='#'>Soundroll - A Way To The Top</a></li>
                     <li class= "playlistItem" data-type='local' data-mp3Path="media/audio/2/Soundroll_-_Feel_Good_Journey.mp3" data-oggPath="media/audio/2/Soundroll_-_Feel_Good_Journey.ogg"><a class="playlistNonSelected" href='#'>Soundroll - Feel Good Journey</a></li>
                 </ul>
    
             </div>
					-->
        </div> 
      
   		<!-- public API -->
    	<!-- <div id='publicFunctions'> -->
       		<!-- <p>PUBLIC API</p><br/> -->
            <!-- <ul> -->
                 <!-- toggle slideshow, (pass true (play), false (stop) as parameter, or none for simple toggle). -->
                <!-- <li><a href='#' onClick="gallery1.toggleSlideshow(); return false;">toggle slideshow</a></li> -->
                
                <!-- toggle playlist (open /close) -->
                <!-- <li><a href='#' onClick="gallery1.togglePlaylist(); return false;">toggle playlist</a></li> -->
                
                <!-- open next media -->
                <!-- <li><a href='#' onClick="gallery1.nextItem(); return false;">next media</a></li> -->
                
                <!-- open previous media -->
                <!-- <li><a href='#' onClick="gallery1.previousItem(); return false;">previous media</a></li> -->
                
                <!-- Open media, pass number (counting starts from 0), or data-address as string (for deeplink). -->
                <!-- <li><a href='#' onClick="gallery1.loadItem(2); return false;">Open media number 2</a></li> -->
                <!-- <li><a href='#' onClick="gallery1.loadItem('image5'); return false;">Open media 'image5'</a></li> -->
                
                <!-- Open new category, pass number (counting starts from 0), or data-address as string (for deeplink).
                This will open first image in category. -->
                <!-- <li><a href='#' onClick="gallery1.loadCategory(2); return false;">Open category number 2</a></li> -->
                <!-- <li><a href='#' onClick="gallery1.loadCategory('wellness_reveal'); return false;">Open category name 'wellness_reveal'</a></li> -->
                
            <!-- </ul> -->
         <!-- </div> -->
    
     </body>
</html>