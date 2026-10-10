<?php
/**
 * Bootstrap de l'application — chargé après celui du framework
 * (SkankyDev\Core\Bootstrap::boot() : .env, config, timezone, encodage),
 * en web comme en CLI.
 *
 * C'est ici que va ce qui est propre au projet.
 */

use SkankyDev\I18n\LocaleNegotiator;
use SkankyDev\I18n\Translator;

// Langue de l'interface, négociée sur le header Accept-Language parmi
// `i18n.available` (en CLI pas de header : on garde `i18n.locale`).
// Pour un sélecteur de langue, déplace cet appel dans un middleware placé
// après Session, qui lit d'abord le choix en session.
Translator::setLocale(LocaleNegotiator::negotiate());
