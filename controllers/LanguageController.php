<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../models/language.class.php';

class LanguageController {
    private $languageModel;

    public function __construct($translations) {
        $this->languageModel = new Language($translations);
    }

    public function getLang() {
        return $this->languageModel->getLang();
    }

    public function getTranslations() {
        return $this->languageModel->getTranslations();
    }
}

// Creează controllerul
$langController = new LanguageController($translations);
$lang = $langController->getLang();
$t = $langController->getTranslations();