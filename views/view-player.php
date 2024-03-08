<?php
    session_start();
    include_once 'view-header.php';

    include_once __DIR__ . '/../controllers/controller-audiolist.php';
?>

<div class="audio-wrapper">
    <div class="audio-container">
        <?php
            // Ensure that $audio is set and not empty
            if (isset($audio) && !empty($audio)) {
                $audioThumb = $audio[0]['audioThumb'];
                $audioTitle = $audio[0]['audioTitle'];
                $audioDesc = $audio[0]['audioDesc'];
                $audioFile = $audio[0]['audioFile'];
        ?>
            <img class="thumbnail" src="<?php echo $audioThumb; ?>" alt="Thumbnail">
            <div class="audio-details">
                <h2><?php echo $audioTitle; ?></h2>
                <p><?php echo $audioDesc; ?></p>
            </div>
            <div class="display-box">
                <audio>
                    <source src="<?php echo $audioFile; ?>" type="audio/mp3"> <!-- Replace with the actual field name in your database -->
                    Your browser does not support the audio tag.
                </audio>
                <div class="audio-panel">
                    <a id="play-icon"><i class="fa-solid fa-circle-play"></i></a>
                    <div class="wave">
                        <?php 
                            for ($i = 0; $i < 10; $i++) {
                                echo '<span></span>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        <?php
            } else {
                // Handle case when $audio is not set or empty
                echo "Error: Unable to display audio information.";
            }
        ?>
    </div>
</div>

<?php
    include 'view-footer.php';
?>