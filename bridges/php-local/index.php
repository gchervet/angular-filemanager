<?php
namespace AngularFilemanager\LocalBridge;

/**
 *  PHP Local filesystem bridge for angular-filemanager
 *
 *  @author Jakub Ďuraš <jakub@duras.me>
 *  @version 0.2.0
 */
include 'LocalBridge/Cors.php';
include 'LocalBridge/Response.php';
include 'LocalBridge/Rest.php';
include 'LocalBridge/Translate.php';
include 'LocalBridge/FileManagerApi.php';

// CORS
$CORS = new Cors();
/**
 * Takes two arguments
 * - base path without last slash (default: '$currentDirectory/../files')
 * - language (default: 'en'); mute_errors (default: true, will call ini_set('display_errors', 0))
 */
$fileManagerApi = new FileManagerApi();

$rest = new Rest();
$rest->post([$fileManagerApi, 'postHandler'])
     ->get([$fileManagerApi, 'getHandler'])
     ->handle();
