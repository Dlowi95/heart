<?php
namespace Aws\GameSparks;

use Aws\AwsClient;

/**
 * This client is used to interact with the **GameSparks** service.
 * @method \Aws\Result createGame(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \Aws\Result deleteGame(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGameAsync(array $args = [])
 * @method \Aws\Result deleteStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \Aws\Result disconnectPlayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectPlayerAsync(array $args = [])
 * @method \Aws\Result exportSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportSnapshotAsync(array $args = [])
 * @method \Aws\Result getExtension(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExtensionAsync(array $args = [])
 * @method \Aws\Result getExtensionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExtensionVersionAsync(array $args = [])
 * @method \Aws\Result getGame(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGameAsync(array $args = [])
 * @method \Aws\Result getGameConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGameConfigurationAsync(array $args = [])
 * @method \Aws\Result getGeneratedCodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeneratedCodeJobAsync(array $args = [])
 * @method \Aws\Result getPlayerConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPlayerConnectionStatusAsync(array $args = [])
 * @method \Aws\Result getSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotAsync(array $args = [])
 * @method \Aws\Result getStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \Aws\Result getStageDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageDeploymentAsync(array $args = [])
 * @method \Aws\Result importGameConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importGameConfigurationAsync(array $args = [])
 * @method \Aws\Result listExtensionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExtensionVersionsAsync(array $args = [])
 * @method \Aws\Result listExtensions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExtensionsAsync(array $args = [])
 * @method \Aws\Result listGames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGamesAsync(array $args = [])
 * @method \Aws\Result listGeneratedCodeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeneratedCodeJobsAsync(array $args = [])
 * @method \Aws\Result listSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSnapshotsAsync(array $args = [])
 * @method \Aws\Result listStageDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStageDeploymentsAsync(array $args = [])
 * @method \Aws\Result listStages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStagesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startGeneratedCodeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGeneratedCodeJobAsync(array $args = [])
 * @method \Aws\Result startStageDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startStageDeploymentAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateGame(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameAsync(array $args = [])
 * @method \Aws\Result updateGameConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameConfigurationAsync(array $args = [])
 * @method \Aws\Result updateSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSnapshotAsync(array $args = [])
 * @method \Aws\Result updateStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 */
class GameSparksClient extends AwsClient {}
