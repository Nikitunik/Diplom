<?php
function preloadVideo($id, $videoUrl, $imageUrl) {    
    echo "<script>
    </script>
    <div class=\"video-con-dimmer toggle-video-{$id}\">
        <div class=\"menu-btn-close close-video stop-video\">
            <div class=\"menu-tx1-tooltip\">
                <span>Close</span>
            </div>
        </div>
        <div class=\"video-con-viewport\">
            <div class=\"video-img-viewport\" style=\"background: url(img/videos/11.jpg) no-repeat center; background-size: cover;\">
                <div class=\"video-ico-viewport\"></div>
            </div>
            <video id=\"video-{$id}\" controls>
                <source src=\"{$videoUrl}\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    ";
}
?>
