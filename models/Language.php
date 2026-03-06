<?php
class Language {
    private $lang;
    private $translations;

    public function __construct($translations) {
        $this->translations = $translations;
        $this->detectLanguage();
    }

    private function detectLanguage() {
        if (isset($_GET['lang']) && isset($this->translations[$_GET['lang']])) {
            $this->lang = $_GET['lang'];
            $_SESSION['lang'] = $this->lang;
        } elseif (isset($_SESSION['lang'])) {
            $this->lang = $_SESSION['lang'];
        } else {
            $this->lang = 'ro';
        }
    }

    public function getLang() {
        return $this->lang;
    }

    public function getTranslations() {
        return $this->translations[$this->lang];
    }
}