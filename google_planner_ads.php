<?php
// Activer l'affichage des erreurs
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=UTF-8');

// Charger l'autoload Composer
require_once __DIR__ . '/vendor/autoload.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/include/connexion.php';

use Google\Ads\GoogleAds\Lib\V14\GoogleAdsClientBuilder;
use Google\Auth\Credentials\ServiceAccountCredentials;
use Google\Ads\GoogleAds\V14\Enums\KeywordPlanCompetitionLevelEnum\KeywordPlanCompetitionLevel;
use Google\Ads\GoogleAds\V14\Enums\KeywordPlanNetworkEnum\KeywordPlanNetwork;
use Google\Ads\GoogleAds\Util\V14\ResourceNames;
use Google\Ads\GoogleAds\V14\Services\KeywordPlanServiceClient;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Initialiser Monolog avec une date unique pour éviter plusieurs fichiers log
$logFile = __DIR__ . "/logs/keyword_planner_" . date("Y-m-d_H-i") . ".log";
$log = new Logger('KeywordPlanner');
$log->pushHandler(new StreamHandler($logFile, Logger::DEBUG));

class KeywordPlanner
{
    private static Logger $log;

    public static function setLogger(Logger $logger): void
    {
        self::$log = $logger;
    }

    public static function run(
        string $jsonKeyFilePath,
        string $developerToken,
        string $customerId,
        array $brandCategories
    ): void {
        self::$log->info("Début du script KeywordPlanner");

        // Charger le fichier JSON du compte de service
        self::$log->info("Chargement du fichier JSON : $jsonKeyFilePath");
        if (!file_exists($jsonKeyFilePath)) {
            self::$log->error("Fichier JSON introuvable.");
            exit("Erreur : Fichier JSON introuvable.");
        }

        // Construire le client Google Ads
        self::$log->info("Création du client Google Ads");
        $googleAdsClient = (new GoogleAdsClientBuilder())
            ->withOAuth2Credential(new ServiceAccountCredentials(
                ['https://www.googleapis.com/auth/adwords'],
                $jsonKeyFilePath
            ))
            ->withDeveloperToken($developerToken)
            ->withLoginCustomerId($customerId)
            ->build();

        // Générer les mots-clés
        $keywords = [];
        foreach ($brandCategories as $brand => $categories) {
            foreach ($categories as $category) {
                $keywords[] = "$category $brand";
            }
        }
        self::$log->info("Mots-clés générés", ['keywords' => $keywords]);

        // Obtenir le service KeywordPlanServiceClient
        self::$log->info("Obtention du client KeywordPlanService");
        $keywordPlanIdeaServiceClient = $googleAdsClient->getKeywordPlanIdeaServiceClient();

        // Envoyer la requête
        self::$log->info("Envoi de la requête generateHistoricalMetrics");
        try {
            $response = $keywordPlanIdeaServiceClient->generateKeywordHistoricalMetrics([
                'customer_id'          => $customerId,
                'keywords'             => $keywords,
                'geo_target_constants' => [ResourceNames::forGeoTargetConstant(2250)], // France
                'keyword_plan_network' => KeywordPlanNetwork::GOOGLE_SEARCH,
                'language'             => ResourceNames::forLanguageConstant(1002) // Français
            ]);                                    

            // Afficher les résultats
            foreach ($response->getResults() as $result) {
                $metrics = $result->getKeywordMetrics();
                self::$log->info("Résultat reçu", [
                    'keyword' => $result->getText(),
                    'avgMonthlySearches' => $metrics->hasAvgMonthlySearches() ? $metrics->getAvgMonthlySearches() : 'N/A',
                    'competitionLevel' => KeywordPlanCompetitionLevel::name($metrics->getCompetition()),
                ]);

                printf("Mot-clé : '%s'%s", $result->getText(), PHP_EOL);
                printf(
                    "Volume mensuel moyen : %s%s",
                    $metrics->hasAvgMonthlySearches() ? $metrics->getAvgMonthlySearches() : 'N/A',
                    PHP_EOL
                );
                printf(
                    "Niveau de concurrence : '%s'%s",
                    KeywordPlanCompetitionLevel::name($metrics->getCompetition()),
                    PHP_EOL
                );
                echo PHP_EOL;
            }
        } catch (Exception $e) {
            self::$log->error("Erreur lors de la requête Google Ads", ['message' => $e->getMessage()]);
            exit("Erreur : " . $e->getMessage());
        }

        self::$log->info("Fin du script KeywordPlanner");
    }
}

// Vérifier si `data` est bien envoyé
if (!isset($_GET['data'])) {
    $log->error("Paramètre 'data' manquant.");
    exit("Erreur : Paramètre 'data' manquant.");
}

$data = json_decode($_GET['data'], true);
if (json_last_error() !== JSON_ERROR_NONE) {
    $log->error("Erreur JSON", ['error' => json_last_error_msg()]);
    exit("Erreur JSON : " . json_last_error_msg());
}

// Définir les paramètres de configuration
$jsonKeyFilePath = __DIR__ . "google_ads_json.json";
//require_once $_SERVER['DOCUMENT_ROOT'] . "admin/repertoire_test/moulinettes_tsihoarana/script_divers/google_ads/pct_google_ads.php";
$developerToken = "EibaIPAFS43XpqzGmaaPzA";
$customerId = "3262435042";

// Assigner le logger à la classe KeywordPlanner
KeywordPlanner::setLogger($log);

// Exécuter la fonction principale
KeywordPlanner::run($jsonKeyFilePath, $developerToken, $customerId, $data);
