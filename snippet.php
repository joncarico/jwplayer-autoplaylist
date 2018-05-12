<script type="text/javascript">
    var playerInstance = jwplayer("jwplayer");
    playerInstance.setup({
    	playlist: [
            <?php
            $dir = "../relative/folder/";
            $videos = glob($dir."*.mp4");
            $length = count($videos);
            $i = 0;
            foreach($videos as $video) {
                echo '{"file": "' .$video. '"},';
            $i++;
            }
            ?>
        ],
        visualplaylist: "false",
    });
</script>
