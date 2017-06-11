<?php
/*
 * Translation for content_subscriptions
 * @package content_subscriptions
 * @subpackage Languages.German
 */
$de_extend = array(
  'content_subscriptions:subscribe' => 'Beobachten',
  'content_subscriptions:unsubscribe' => 'Nich mehr Beobachten',
  'admin:upgrades:content_subscriptions' => 'Inhalte Beobachten',
  'content_subscriptions:create:comment:subject' => 'Neuer Kommentar auf: %s',
  'content_subscriptions:create:comment:summary' => 'Neuer Kommentar auf: %s',
  'content_subscriptions:action:subscribe:error:owner' => 'Du bist der Besitzer dieses Inhaltes und kannst daher nicht Beobachten',
  'content_subscriptions:action:subscribe:success:subscribe' => 'Du Beobachtest diesen Inhalt jetzt',
  'content_subscriptions:action:subscribe:success:unsubscribe' => 'Du Beobachtest diesen Inhalt jetzt nicht mehr',
  'content_subscriptions:action:subscribe:error:unsubscribe' => 'Beim Entfernen von der Beobachtungs-Liste ist ein Fehler aufgetreten, versuche es erneut',
  'content_subscriptions:action:subscribe:error:subscribe' => 'Beim Setzen auf die Beobachtungs-Liste ist ein Fehler aufgetreten, versuche es erneut',
  'content_subscriptions:create:comment:message' => 'Hallo %s,

%s hat folgenden Inhalt kommentiert: %s:

%s

Hier gelangst du zum Kommentar und Inhalt:
%s',
  'content_subscriptions:settings:likes' => 'Automatisches Beobachten bei Klick auf "Gefällt mir"?',
  'content_subscriptions:settings:description' => 'Erhalte Benachrichtigungen, wenn ein Kommentar auf einen beobachteten Inhalt verfasst wird',
  'content_subscriptions:settings:likes:description' => 'Wenn bei Inhalten auf "Gefällt mir" klickst oder einen Kommentar verfasst, Beobachte die Inhalte automatisch. Das funktioniert nur, wenn das "Likes Plugin" aktiviert ist.',
);

add_translation("de",$de_extend);
