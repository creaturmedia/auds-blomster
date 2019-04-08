<?php
namespace Deployer;
require 'recipe/common.php';

set('current_path', function () {
    return run('pwd');
});
set('wp_path', '/home/forge/audsblomster.no/public/');
set('remote_path', '/home/forge/audsblomster.no/public/wp-content/themes/auds-blomster');
set('deploy_path', 'remote_path');

// Project repository
set('repository', 'git@github.com:creaturmedia/auds-blomster.git');

// Hosts
host('142.93.134.179')
    ->user('forge')
    ->port(22)
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '~/{{remote_path}}');
    

// Tasks
task('push', 'git checkout master && git push')->local();

task('pull', function() {
    cd('{{remote_path}}');
    run('git pull');
});

// Build the files locally
task('build', 'yarn build:production')->local();

// Upload the dist folder
task('dist', function() {
    
    // Upload the "dist" folder
    upload('dist/', '{{remote_path}}/dist');
    // Clean up .DS_Store files
    cd('{{remote_path}}/dist');
    run('find . -name ".DS_Store" -type f -delete');
});

//Flush the W3 Total Cache
task('flush', function() {
    
    cd('{{wp_path}}');
    run('wp total-cache flush all');
});

// Return to normal locally
task('development', 'git checkout development')->local();

task('deploy', [
    'push',
    'build',
    'pull',
    'dist',
    //'flush',
    'development',
]);

task('deploy:php', [
    'push',
    'pull',
    //'flush',
    'development',
]);

task('deploy:after', function() {
    writeln('<info>***</info>');
    writeln('<info>Deploy done!</info>');
    writeln('<info>***</info>');
});

after('deploy', 'deploy:after');
// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
