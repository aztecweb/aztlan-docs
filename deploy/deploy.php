<?php
/**
 * Deploy settings
 */
namespace Deployer;

require 'recipe/yarn.php';
require 'recipe/common.php';

host( getenv( 'DEPLOYER_HOST' ) )
    ->stage( getenv( 'DEPLOYER_STAGE' ) )
	->user( getenv( 'DEPLOYER_USER' ) )
	->set( 'branch', getenv( 'DEPLOYER_BRANCH' ) )
	->set( 'deploy_path', getenv( 'DEPLOYER_PATH' ) );

set( 'ssh_multiplexing', false );

set( 'http_user', getenv( 'DEPLOYER_HTTP_USER' ) );
set( 'repository', getenv( 'DEPLOYER_REPOSTIORY' ) );

/**
 * Install Yarn packages and build Docusaurus
 */
task( 'deploy:yarn', function() {
	// Copy `node_modules` from others releases
	if ( has( 'previous_release' ) ) {
        if ( test( '[ -d {{previous_release}}/website/node_modules ]' ) ) {
            run( 'cp -R {{previous_release}}/website/node_modules {{release_path}}' );
        }
	}

	// Update packages
	run( 'cd {{release_path}}/website && {{bin/yarn}}' );

	// Build application
    run( 'cd {{release_path}}/website && {{bin/yarn}} build' );
} );

/**
 * Shared files
 */
set( 'shared_files', [
	'website/.env',
] );

task( 'deploy', [
	'deploy:prepare',
	'deploy:lock',
    'deploy:release',
	'deploy:update_code',
	'deploy:shared',
	'deploy:yarn',
	'deploy:symlink',
	'deploy:unlock',
	'cleanup',
	'success',
] );
