<script type="text/javascript">
    var playerInstance = jwplayer("jwplayer");
    playerInstance.setup({
    	playlist: [
            <?php
            $dir = "/absolute/path/";
            foreach (glob($dir."*.mp4") as $video) {
                echo '{"file": "' .$video. '"},';
            }
            ?>
        ],
        visualplaylist: "false",
    });
</script>
