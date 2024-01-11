<?php

    ini_set('display_errors', 1);

    include __DIR__ . '/../models/model-myplaylist.php';
    

    class Controller {
        private $model;
        public function __construct(AudioModel $model) {
            $this->model = $model;
        }

        public function showAudios($id) {
            $audios = $this->model->selectAudios($id);

            if(!empty($audios)) {
                include '../views/display-myplaylist.php';
            } else {
                echo '<h3  style="color: #090D07; text-align: center;">No users or audios found</h3>';
            }
        }

        public function showUserByID($id) {
            $user = $this->model->selectUserByID($id);
            if(!empty($user)) {
                include '../views/display-user.php';
            } else {
                echo '<h3  style="color: #090D07; text-align: center;">No user found</h3>';
            }
        }

        public function getAudioCategories() {
            $audioCategories = $this->model->selectAudioCategories();
            return $audioCategories;
        }

        public function getSongByID($id) {
            $song = $this->model->selectSongByID($id);
            $audioCategories = $this->getAudioCategories();
            if(!empty($song)) {
                include '../views/update-myplaylist.php';
            } else {
                echo '<h3  style="color: #090D07; text-align: center;">No song found</h3>';
            }
        }

        public function getAudioByCategoryID($userId, $categoryID) {
            $audios = $this->model->selectAudioByCategoryID($userId, $categoryID);
            if(!empty($audios)) {
                $this->showUserByID($userId);
                include '../views/display-myplaylist.php';
                
            } else {
                echo '<h3  style="color: #090D07; text-align: center;">No audios found</h3>';
            }
        }

        public function updateSong($id, $audioTitle, $audioDesc, $audioFile, $audioThumb, $audioCategoryID) {
            $updateSong = $this->model->updateAudio($id, $audioTitle, $audioDesc, $audioFile, $audioThumb, $audioCategoryID);
            if ($updateSong) {
                header('Location: ../views/view-myplaylist.php');
                exit;
            } else {
                echo '<h3 style="color: #090D07; text-align: center;">Didn\'t update</h3>';
            }
        }

        public function deleteSong($id) {
            $deleteSong = $this->model->deleteAudio($id);
            if ($deleteSong) {
                header('Location: ../views/view-myplaylist.php');
                exit;
            } else {
                echo '<h3 style="color: #090D07; text-align: center;">Delete failed</h3>';
            }
        }
    }

?>