<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Novius OS - Installation</title>
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="static/novius-os/admin/novius-os/img/noviusos.ico">

    <style type="text/css">
        html {
            height : 100%;
        }
        body {
            /* On step 1, this asset will probably return an HTTP status 404 Not Found */
            background: #ddd url("static/novius-os/admin/novius-os/img/wallpapers/default.jpg");
            background-size: cover;
            font-family: franklin gothic medium,arial,verdana,helvetica,sans-serif;
        }
        #header {
            position: absolute;
            top: 10px;
            left: 50px;
            right: 50px;
            height: 80px;
            padding: 0 20px;
            margin: 0 20px;
            line-height: 80px;
        }
        #header img {
            vertical-align: middle;
            display: inline-block;
            margin-right: 10px;
        }
        button a {
            color: inherit;
            text-decoration: inherit;
        }
        #blank_slate {
            background: rgba(255, 255, 255, 0.9);
            border: 1px outset #888888;
            border-radius: 10px;
            padding: 20px 40px;
            position: absolute;
            top: 110px;
            left: 50px;
            right: 50px;
            bottom: 30px;
            overflow: auto;
        }
        #blank_slate h2 {
            padding: 0 2em 0 0;
            color: #CB2334;
        }
        #blank_slate h3 {
            color: #363636;
        }
        #version {
            position: absolute;
            right: 50px;
            bottom: 5px;
        }

        table {
            border-collapse: collapse;
            margin: 1em auto;
        }
        th {
            text-align: left;
        }
        td, th {
            border: 1px solid #bbb;
            padding: 5px;
        }
        td.status {
            background-color: #fff;
            font-weight: bold;
            text-align: center;
        }
        tr.error td.status {
            color: #f00;
        }
        tr.warning td.status {
            color: #dd9700;
        }
        tr.ok td.status {
            color: #0b0;
        }
        table tr.error {
            background: #fff5f5;
        }
        table tr.warning {
            background: #fff9f0;
        }
        tr.error th, tr.warning th {
            border-bottom: none;
        }
        tr.separator td {
            border:none;
        }
        tr.error td.description, tr.warning td.description {
            border-top: none;
        }
        table tr.ok {
            background: #f5fff5;
        }
        code {
            background-color: #fff;
            border: 1px dashed #bbb;
            display:inline-block;
            padding: 2px;
        }
        p.description {
            font-style: italic;
            font-size: smaller;
        }


        input, button {
            background:#fff;
            -moz-box-shadow:inset 0 2px 2px rgba(143,143,143,0.50);
            -webkit-box-shadow:inset 0 2px 2px rgba(143,143,143,0.50);
            box-shadow:inset 0 2px 2px rgba(143,143,143,0.50);
            padding: 5px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: 1px solid #a8a8a8;
            font-weight: bold;
            font-size: 1.1em;
            color: #4f4f4f;
            text-shadow: 0px 1px 0px rgba(255,255,255,0.7);
        }

        input:focus, input:active {
            border: solid 1px #8ab0c6;
            outline: none;
            -moz-box-shadow:0 0 5px #85b2cb, inset 0 2px 2px #8f8f8f;
            -webkit-box-shadow:0 0 5px #85b2cb, inset 0 2px 2px #8f8f8f;
            box-shadow:0 0 5px #85b2cb, inset 0 2px 2px #8f8f8f;
        }
        input[type=submit], button {
            padding: .4em 1em;
            cursor: pointer;
            color: #313131;
            border: 1px solid #a8a8a8;
            -moz-box-shadow: 0 0 3px #85b2cb;
            -webkit-box-shadow: 0px 0px 3px #85b2cb;
            box-shadow: 0px 0px 3px #85b2cb;
            background: #c4c4c4 linear-gradient(top, rgba(255,255,255,0.8), rgba(255,255,255,0));
            background: #c4c4c4 -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,0.8)), to(rgba(255,255,255,0)));
            background: #c4c4c4 -moz-linear-gradient(top, rgba(255,255,255,0.8), rgba(255,255,255,0));
        }
        input[type=submit]:hover, button:hover {
            border: solid 1px #8ab0c6;
            background: #85b2cb linear-gradient(top, rgba(255,255,255,0.6), rgba(255,255,255,0));
            background: #85b2cb -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,0.6)), to(rgba(255,255,255,0)));
            background: #85b2cb -moz-linear-gradient(top, rgba(255,255,255,0.6), rgba(255,255,255,0));
        }
        input[type=submit]:active, button:active {
            border: solid 1px #8ab0c6;
            background: #85b2cb linear-gradient(bottom, rgba(255,255,255,0.6), rgba(255,255,255,0));
            background: #85b2cb -webkit-gradient(linear, left bottom, left top, from(rgba(255,255,255,0.6)), to(rgba(255,255,255,0)));
            background: #85b2cb -moz-linear-gradient(bottom, rgba(255,255,255,0.6), rgba(255,255,255,0));
        }

        form label {
            display: inline-block;
            width: 180px;
            font-weight: bold;
            cursor: pointer;
            cursor: hand;
        }

        p.error {
            color: #ff0000;
        }

        #languages {
            margin: 0 0 1em;
        }
        .languages_tip {
            font-style: italic;
        }
        #languages li {
            list-style-type: none;
            display: block;
            line-height: 24px;
            cursor: move;
            font-size: 1.1em;
        }
        #languages label {
            padding: 3px;
            cursor: pointer;
            cursor: hand;
            display: inline;
            font-weight: normal;
        }
        #languages li.checked label {
            font-weight: bold;
        }
        #languages input {
            padding: 2px;
            font-size: 1em;
        }
        #languages span.error {
            font-weight: normal;
            color: #ff0000;
        }
    </style>
</head>

<body>

<h1 id="header">
    <img src="install/logo-64x80.png" width="80" height="64" alt="Novius OS Logo"> Novius OS installation wizard
</h1>
<div id="blank_slate">
<?php

define('NOS_ENTRY_POINT', 'install');

$_SERVER['NOS_ROOT'] = realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..');

// Boot the app
require_once $_SERVER['NOS_ROOT'].DIRECTORY_SEPARATOR.'novius-os'.DIRECTORY_SEPARATOR.'framework'.DIRECTORY_SEPARATOR.'bootstrap.php';

Fuel::$profiling = false;

define('NOVIUSOS_PATH', realpath(DOCROOT.'..'.DS.'novius-os').DS);

class Test
{
    public static $tests = array();
    public static $passed = true;
    protected static $run = array();

    public static function register(array $list)
    {
        static::$tests = static::$tests + $list;
    }

    public static function reset()
    {
        static::$run = array();
    }

    public static function run($name)
    {
        $test =& static::$tests[$name];
        static::$tests[$name]['is_error'] = false;

        if (!isset($test['warning'])) {
            $test['warning'] = false;
        }

        if (isset($test['run_only_if'])) {
            foreach ((array) $test['run_only_if'] as $s) {
                if (is_bool($s)) {
                    if (false === $s) {
                        return true;
                    }
                } elseif (!static::$tests[$s]['passed']) {
                    return true;
                }
            }
        }

        static::$run[] = $name;

        $class = $test['passed'] ? 'ok' : ($test['warning'] ? 'warning' : 'error');

        if ($class == 'ok' && !empty($test['hide_success_when'])) {
            return true;
        }

        if ($class == 'error' && isset($test['hide_error_when'])) {
            foreach ((array) $test['hide_error_when'] as $s) {
                if (is_bool($s)) {
                    if (true === $s) {
                        return true;
                    }
                } elseif (static::$tests[$s]['passed']) {
                    return true;
                }
            }
        }

        if ($class == 'ok') {
            return true;
        }

        static::$tests[$name]['is_error'] = true;
        static::$passed = false;
        return $class != 'error';
    }

    protected function _format_test($test)
    {
        $class = $test['passed'] ? 'ok' : ($test['warning'] ? 'warning' : 'error');
        $return = array();
        $return[] = '<tr class="'.$class.'"><th>'.$test['title'].'</th>';
        $return[] = '<td class="status">'.($test['passed'] ? 'OK' : (!empty($test['warning']) ? 'Warning' : 'Problem')).'</td></tr>';
        if (!$test['passed']) {
            $return[] = '<tr class="'.$class.'"><td class="description" colspan="2">';
            if (!empty($test['description'])) {
                $return[] = '<p class="description">'.$test['description'].'</p>';
            }
            if (!empty($test['command_line'])) {
                $return[] = '<!--To solve this issue, you can execute this in a terminal : --><code>'.(is_array($test['command_line']) ? implode('<br />', $test['command_line']) : $test['command_line']).'</code>';
            }
            if (!empty($test['code'])) {
                $return[] = '<code>'.(is_array($test['code']) ? implode('<br />', $test['code']) : $test['code']).'</code>';
            }
            $return[] = '</td>';
            $return[] = '</tr>';
        }
        return implode('', $return);
    }

    public static function results($filter = 'all')
    {
        if ($filter == 'all') {
            // Show all status
            $filter = array('success', 'warning', 'error');
        }
        $filter = (array) $filter;

        $return = array('<table width="100%">');
        $last_separator = 0;
        foreach (static::$run as $name)
        {
            if ($name == 'separator') {
                if ($last_separator == 0) {
                    continue;
                }
                $last_separator = 0;
                $return[] = '<tr class="separator"><td colspan="2"></td></tr>';
            } else {
                $test = static::$tests[$name];
                $status = $test['passed'] ? 'success' : ($test['warning'] ? 'warning' : 'error');
                if (in_array($status, $filter)) {
                    $last_separator++;
                    $return[] = static::_format_test($test);
                }
            }
        }
        $return[] = '</table>';
        return implode('', $return);
    }

    public static function separator()
    {
        static::$run[] = 'separator';
    }

    public static function recap()
    {
        $recap = array('cd '.NOSROOT, '');
        foreach (static::$tests as $name => $data) {
            if (!empty($data['is_error']) && (isset($data['command_line_relative']) || isset($data['command_line']))) {
                $cmd = (array) \Arr::get($data, 'command_line_relative', $data['command_line']);
                if (!empty($cmd[1]) && $cmd[1] == '# or') {
                    $cmd = array_slice($cmd, 2);
                }
                foreach ($cmd as $c) {
                    $c = str_replace(NOSROOT, '', $c);
                    $recap[] = $c;
                }
            }
        }
        return $recap;
    }
}

$step = \Input::get('step', 0);

if ($step == 0) {
    ?>
    <h2>Thank you for downloading Novius OS</h2>
    <p>You've done great so far. We’ll now guide you through the configuration.</p>
    <p>This wizard is divided in 4 easy steps:</p>
    <ol>
        <li>Server configuration</li>
        <li>Database configuration</li>
        <li>Create the first account</li>
        <li>Website configuration</li>
    </ol>
    <p>Be sure to have your <strong>database information available</strong>, as we’ll ask you for the soon.</p>
    <button><a href="install.php?step=1">Proceed to “Step 1: server configuration”</a></button>
    <?php
}

if ($step > 0) {
    $folder_data = is_dir(APPPATH.'data'.DS) ? realpath(APPPATH.'data').DS : APPPATH.'data'.DS;

    $session_save_path = \Arr::get(\Config::load('session'), 'file.path');

    // @todo title_success and title_error?
    Test::register(array(
        'requirements.gd_is_installed' => array(
            'title'        => 'GD is installed',
            'passed'       => function_exists("gd_info"),
            'description'  => 'Novius OS requires the GD library. Please <a href="http://php.net/manual/en/book.image.php">install it</a>.',
            'warning'      => true,
        ),

        'session_path.writeable' => array(
            'title'        => 'Session directory is writeable',
            'passed'       => is_writable($session_save_path),
            'description'  => 'Current session path : <strong>'.$session_save_path.'</strong>.<br />Please edit your configuration file (session.config.php : file.path key) or run <code>chmod a+w '.$session_save_path.'</code>. ',
        ),

        'directive.short_open_tag' => array(
            'title'        => 'PHP configuration directive short_open_tag = On',
            'passed'       => ini_get('short_open_tag') != false,
            'code'         => '# '.php_ini_loaded_file ()."\n<br />short_open_tag = On",
            'description'  => 'We use short_open_tag, since it\'ll be <a href="http://php.net/manual/en/ini.core.php#ini.short-open-tag">always enabled as of PHP 5.4</a>. Please edit your configuration file.',
            'run_only_if'  => version_compare(PHP_VERSION, '5.4.0', '<'),
        ),
        'directive.magic_quotes_gpc' => array(
            'title'        => 'PHP configuration directive magic_quotes_gpc = Off',
            'passed'       => ini_get('magic_quotes_gpc') == false,
            'code'         => '# '.php_ini_loaded_file ()."\n<br />magic_quotes_gpc = Off",
            'description'  => 'It\'s <a href="http://php.net/manual/en/info.configuration.php#ini.magic-quotes-gpc">deprecated in PHP 5.3 and has been removed in PHP 5.4</a>. Please edit your configuration file.',
            'run_only_if'  => version_compare(PHP_VERSION, '5.4.0', '<'),
        ),
        'folder.config.writeable' => array(
            'title'        => 'APPPATH/config/ is writeable ',
            'passed'       => is_writeable(APPPATH.'config'),
            'command_line' => 'chmod a+w '.APPPATH.'config',
            'description'  => 'This is required temporarily to write the db.php and crypt.php config files',
            'run_only_if'  => !file_exists(APPPATH.'config'.DS.'db.config.php') or !file_exists(APPPATH.'config'.DS.'crypt.config.php'),
        ),

        'folder.cache.writeable' => array(
            'title'        => 'APPPATH/cache/ is writeable',
            'passed'       => is_writeable(APPPATH.'cache'),
            'command_line' => 'chmod a+w '.APPPATH.'cache',
        ),

        'folder.cache.media.writeable' => array(
            'title'        => 'APPPATH/cache/media is writeable',
            'passed'       => is_writeable(APPPATH.'cache'.DS.'media'),
            'command_line' => 'chmod a+w '.APPPATH.'cache'.DS.'media',
            'run_only_if'  => is_dir(APPPATH.'cache'.DS.'media'),
        ),

        'folder.cache.fuelphp.writeable' => array(
            'title'        => 'APPPATH/cache/fuelphp is writeable',
            'passed'       => is_writeable(APPPATH.'cache'.DS.'fuelphp'),
            'command_line' => 'chmod a+w '.APPPATH.'cache'.DS.'fuelphp',
            'run_only_if'  => is_dir(APPPATH.'cache'.DS.'fuelphp'),
        ),

        'folder.data.writeable' => array(
            'title'        => 'APPPATH/data/ is writeable',
            'passed'       => is_writeable($folder_data),
            'command_line' => 'chmod a+w '.$folder_data,
        ),

        'folder.data.config.writeable' => array(
            'title'           => 'APPPATH/data/config/ is writeable',
            'passed'          => is_writeable($folder_data.'config'),
            'command_line'	  => array('chmod a+w '.$folder_data.'config'),
            'run_only_if'     => is_dir($folder_data.'config'),
        ),

        'folder.data.media.writeable' => array(
            'title'           => 'APPPATH/data/media/ is writeable',
            'passed'          => is_writeable($folder_data.'media'),
            'command_line'	  => array('chmod a+w '.$folder_data.'media'),
            'run_only_if'     => is_dir($folder_data.'media'),
        ),

        'folder.metadata.writeable' => array(
            'title'           => 'APPPATH/metadata/ is writeable',
            'passed'          => is_writeable(APPPATH.'metadata'),
            'command_line'	  => 'chmod a+w '.APPPATH.'metadata',
        ),

        'public.htaccess.removed' => array(
            'title'        => 'DOCROOT/.htaccess is removed',
            'passed'       => !is_file(DOCROOT.'.htaccess'),
            'command_line' => 'mv '.DOCROOT.'.htaccess '.DOCROOT.'.htaccess.old',
            'run_only_if'  => is_file(NOSROOT.'.htaccess'),
        ),

        'public.cache.writeable' => array(
            'title'        => 'DOCROOT/cache/ is writeable',
            'passed'       => is_writeable(DOCROOT.'cache'),
            'command_line' => 'chmod a+w '.DOCROOT.'cache',
            'run_only_if'  => is_dir(DOCROOT.'cache'),
        ),

        'public.cache.media.writeable' => array(
            'title'        => 'DOCROOT/cache/media is writeable',
            'passed'       => is_writeable(DOCROOT.'cache'.DS.'media'),
            'command_line' => 'chmod a+w '.DOCROOT.'cache'.DS.'media',
            'run_only_if'  => is_dir(DOCROOT.'cache'.DS.'media'),
        ),

        'public.htdocs.writeable' => array(
            'title'        => 'DOCROOT/htdocs/ is writeable',
            'description'  => 'The symbolic link htdocs/novius-os doesn\'t exists, so we need to be able to create it.',
            'passed'       => is_writeable(DOCROOT.'htdocs'),
            'command_line' => array('chmod a+w '.DOCROOT.'htdocs', '# or', 'ln -s '.Nos\Tools_File::relativePath(DOCROOT.'htdocs', NOVIUSOS_PATH.'htdocs ').' '.DOCROOT.'htdocs'.DS.'novius-os'),
            'run_only_if'  => is_dir(DOCROOT.'htdocs') && !file_exists(DOCROOT.'htdocs'.DS.'novius-os'),
        ),

        'public.media.writeable' => array(
            'title'        => 'DOCROOT/media/ is writeable',
            'passed'       => is_writeable(DOCROOT.'media'),
            'command_line' => 'chmod a+w '.DOCROOT.'media',
            'run_only_if'  => is_dir(DOCROOT.'media'),
        ),

        'public.data.writeable' => array(
            'title'        => 'DOCROOT/data/ is writeable',
            'passed'       => is_writeable(DOCROOT.'data'),
            'command_line' => 'chmod a+w '.DOCROOT.'data',
            'run_only_if'  => is_dir(DOCROOT.'data'),
        ),

        'public.htdocs.apps.writeable' => array(
            'title'        => 'DOCROOT/htdocs/apps is writeable',
            'passed'       => is_writeable(DOCROOT.'htdocs'.DS.'apps'),
            'command_line' => 'chmod a+w '.DOCROOT.'htdocs'.DS.'apps',
            'run_only_if'  => file_exists(DOCROOT.'htdocs'.DS.'apps'),
        ),

        'public.static.writeable' => array(
            'title'        => 'DOCROOT/static/ is writeable',
            'description'  => 'The symbolic link static/novius-os/ doesn\'t exists, so we need to be able to create it.',
            'passed'       => is_dir(DOCROOT.'static') && is_writeable(DOCROOT.'static'),
            'command_line' => array('chmod a+w '.DOCROOT.'static', '# or', 'ln -s '.Nos\Tools_File::relativePath(DOCROOT.'static', NOVIUSOS_PATH.'static').' '.DOCROOT.'static'.DS.'novius-os'),
            'run_only_if'  => is_dir(DOCROOT.'static') && !file_exists(DOCROOT.'static'.DS.'novius-os'),
        ),

        'public.static.apps.writeable' => array(
            'title'        => 'DOCROOT/static/apps is writeable',
            'passed'       => is_dir(DOCROOT.'static'.DS.'apps') && is_writeable(DOCROOT.'static'.DS.'apps'),
            'command_line' => 'chmod a+w '.DOCROOT.'static'.DS.'apps',
            'run_only_if'  => file_exists(DOCROOT.'static'.DS.'apps'),
        ),

        'public.htdocs.nos.valid' => array(
            'title'        => 'DOCROOT/htdocs/novius-os links to NOSPATH/htdocs',
            'passed'       => \File::is_link(DOCROOT.'htdocs'.DS.'novius-os') && realpath(DOCROOT.'htdocs'.DS.'novius-os') == NOVIUSOS_PATH.'htdocs',
            'command_line' => 'ln -s '.Nos\Tools_File::relativePath(DOCROOT.'htdocs', NOVIUSOS_PATH.'htdocs').' '.DOCROOT.'htdocs'.DS.'novius-os',
            'run_only_if'  => file_exists(DOCROOT.'htdocs'.DS.'novius-os'),
        ),

        'public.static.nos.valid' => array(
            'title'        => 'DOCROOT/static/novius-os links to NOSPATH/static',
            'passed'       => \File::is_link(DOCROOT.'static'.DS.'novius-os') && realpath(DOCROOT.'static'.DS.'novius-os') == NOVIUSOS_PATH.'static',
            'command_line' => 'ln -s '.Nos\Tools_File::relativePath(DOCROOT.'static', NOVIUSOS_PATH.'static').' '.DOCROOT.'static'.DS.'novius-os',
            'run_only_if'  => file_exists(DOCROOT.'static'.DS.'novius-os'),
        ),

        'logs.fuel' => array(
            'title'        => 'logs/fuel exists and is writeable',
            'passed'       => is_writeable(NOSROOT.'logs/fuel'),
            'command_line' => 'chmod a+w '.NOSROOT.'logs/fuel',
        ),
    ));

    ?><div style="width:800px;margin:auto;"><?php

    if ($step == 1) {

        if (!file_exists(DOCROOT.'htdocs'.DS.'novius-os')) {
            \File::relativeSymlink(NOVIUSOS_PATH.'htdocs', DOCROOT.'htdocs'.DS.'novius-os');
        }
        if (!file_exists(DOCROOT.'static'.DS.'novius-os')) {
            \File::relativeSymlink(NOVIUSOS_PATH.'static', DOCROOT.'static'.DS.'novius-os');
        }
    }

    Test::reset();

    Test::run('requirements.gd_is_installed');

    Test::separator();

    Test::run('directive.short_open_tag');
    Test::run('directive.magic_quotes_gpc');

    Test::separator();

    Test::run('public.htaccess.removed');
    Test::run('session_path.writeable');

    Test::separator();

    if (Test::run('folder.config.writeable') && $step == 1) {
        // Create the crypt.config.php file
        Crypt::_init();

        if (!file_exists(APPPATH.'config'.DS.'config.php')) {
            $url = str_replace(array('install.php', '?step=1'), '', ltrim($_SERVER['REQUEST_URI'], '/'));
            $base_url = \Uri::base(false).$url;
            if (!empty($url)) {
                $config = <<<CONFIG
return array(
    'base_url' => '$base_url',
);
CONFIG;
                File::create(APPPATH.'config'.DS, 'config.php', '<?'."php \n".$config);
            }
        }

    }

    Test::separator();

    Test::run('folder.data.writeable');
    Test::run('folder.data.config.writeable');
    Test::run('folder.data.media.writeable');

    Test::separator();

    Test::run('folder.cache.writeable');
    Test::run('folder.cache.media.writeable');
    Test::run('folder.cache.fuelphp.writeable');

    if (Test::run('folder.metadata.writeable')) {
        $dir  = APPPATH.'metadata'.DS;
        $files = array('app_installed.php', 'templates.php', 'enhancers.php', 'launchers.php', 'app_dependencies.php', 'app_namespaces.php', 'data_catchers.php');
        foreach ($files as $file) {
            if (!is_file($dir.$file)) {
                File::create($dir, $file, '<?'.'php return array();');
            }
        }
    }

    Test::separator();

    Test::run('public.cache.writeable');
    Test::run('public.cache.media.writeable');

    Test::separator();

    Test::run('public.htdocs.writeable');
    Test::run('public.htdocs.apps.writeable');

    Test::separator();

    Test::run('public.data.writeable');
    Test::run('public.media.writeable');

    Test::separator();

    Test::run('public.static.writeable');
    Test::run('public.static.apps.writeable');

    Test::separator();

    Test::run('public.htdocs.nos.valid');
    Test::run('public.static.nos.valid');

    Test::separator();

    Test::run('logs.fuel');

    if (!Test::$passed && $step > 1) {
        header('Location: install.php');
        exit();
    }
}

if ($step == 1) {
    ?>
    <h2>Step 1 / 4 : server configuration</h2>
    <p>This step ensures Novius OS can run fine on your server.</p>
    <?php
    if (Test::$passed) {
        // Warnings validates but display informations
        ?>
        <h3>Tests results</h3>
        <p>Since they are quite a lot and we don’t want to scare you, we’ve hide them. Meanwhile you can still <a id="show_tests" href="#">click here<a> to see what we did.</p>
        <div id="tests" style="display:none;"><?= Test::results('success') ?></div>

        <h3>Congratulations</h3>
        <p>Your server is compatible with Novius OS</p>
        <button><a href="install.php?step=2">Proceed to “Step 2: database configuration”</a></button>
        <?php
    } else {
        ?>
        <h3>Problems that needs attention</h3>
        <p>Please note <a href="#recap">a recap</a> of the commands is available below</p>
        <?= Test::results('error') ?>

        <h3 id="recap">Command recap for Linux users</h3>
        <p>Relative to the root directory: <code><?= NOSROOT; ?></code></p>
        <code style="width: 800px;"><?= implode("<br />\n", Test::recap()); ?></code>
        <p><a href="install.php?step=1"><button>I fixed the problems above, refresh the results</button></a></p>
        <h3>Other tests</h3>
        <p>Since they’re not important right now, they remain hidden. Meanwhile you can still <a id="show_tests" href="#">click here<a> to see what we did.</p>
        <div id="tests" style="display:none;"><?= Test::results(array('warning', 'success')) ?></div>
        <?php
    }
    ?>
    <script type="text/javascript">
        var show_tests = document.getElementById('show_tests');
        var tests = document.getElementById('tests');
        show_tests.addEventListener('click', function(e) {
            tests.style.display = (tests.style.display == 'none' ? 'block' : 'none');
        }, false);
    </script>
    <?php
}

if ($step == 2) {
    Config::load('db', true);
    $active = Config::get('db.active');
    $db = Config::get('db.'.$active.'.connection', array());
    // Check database connection
    if (!empty($db['database'])) {
        try {
            $old_level = error_reporting(0);
            // Check credentials
            Database_Connection::instance()->connect();
            error_reporting($old_level);
            header('Location: install.php?step=3');
            exit();
        } catch (\Exception $e) {
            echo '<p class="error">Error : '.$e->getMessage().'</p>';
        }
    }

    if (Input::method() == 'POST') {
        $config = array(
            'active'          => Fuel::DEVELOPMENT,
            Fuel::DEVELOPMENT => array(
                'type'            => 'mysqli',
                'connection'    => array(
                    'hostname'   => \Input::post('hostname', ''),
                    'database'   => \Input::post('database', ''),
                    'username'   => \Input::post('username', ''),
                    'password'   => \Input::post('password', ''),
                    'persistent' => false,
                    'compress'   => false,
                ),
                'identifier'   => '`',
                'table_prefix' => '',
                'charset'      => 'utf8',
                'enable_cache' => true,
                'profiling'    => true,
            ),
        );

        try {
            Config::load($config, 'db'); // set config inside db and reload the cache
            \View::redirect('errors'.DS.'php_error', NOSPATH.'views/errors/empty.view.php');

            // Check credentials
            $old_level = error_reporting(0);
            Migrate::latest('nos', 'package');
            error_reporting($old_level);

            // Install metadata
            Nos\Application::installNativeApplications();

            // Install templates
            \Module::load('noviusos_templates_basic');
            $application = Nos\Application::forge('noviusos_templates_basic');
            $application->install(false);

            Config::save('local::db', $config);

            $file = APPPATH.'config'.DS.'db.config.php';
            $handle = fopen($file, 'r+');
            if ($handle) {
                $content = fread($handle, filesize($file));
                $content = preg_replace(
                    "`'active' => 'development'`Uu",
                    "'active' => Fuel::\$env",
                    $content);

                ftruncate($handle, 0);
                rewind($handle);
                fwrite($handle, $content);
                fclose($handle);
            }

            header('Location: install.php?step=3');
            exit();

        } catch (\Database_Exception $e) {

            $message = $e->getMessage();
            ?>
            <p class="error" title="<?= htmlspecialchars($message) ?>">
                <strong>Wrong credentials.</strong>
                We’re sorry, but we were unable to connect with the givent informations. Please double-check and try again.
            </p>
            <?php

        } catch (\Exception $e) {

            echo '<p class="error">Error : '.$e->getMessage().'</p>';
        }
    }
    ?>
    <h2>Step 2 / 4 : database configuration</h2>
    <p>
        This steps gather informations to use a MySQL database. Please contact your hosting provider if you don’t know them.
    </p>
    <form action="" method="POST">
        <p>
            <label for="hostname">MySQL server</label>
            <input type="text" name="hostname" id="hostname" placeholder="Hostname" value="<?= Input::post('hostname', \Arr::get($db, 'hostname', '')) ?>" />
            A common value is <a href="#" onclick="document.getElementById('hostname').value='localhost';">localhost</a>.
        </p>
        <p>
            <label for="username">MySQL username</label>
            <input type="text" name="username" id="username" placeholder="Username" value="<?= Input::post('username', \Arr::get($db, 'username', '')) ?>"  />
        </p>
        <p>
            <label for="password">MySQL password</label>
            <input type="password" name="password" id="password" placeholder="Password" />
        </p>
        <p>
            <label for="database">Name of the database</label>
            <input type="text" name="database" id="database" placeholder="Database" value="<?= Input::post('database', \Arr::get($db, 'database', '')) ?>"  />
        </p>
        <p><button type="submit">Proceed to “Step 3: create the first account”</button></p>
    </form>
    <?php
}

if ($step == 3) {
    if (Nos\User\Model_User::count() > 0) {
        header('Location: install.php?step=4');
        exit();
    }
    if (\Input::method() == 'POST') {
        try {
            $password = \Input::post('password', '');
            if (empty($password)) {
                throw new Exception('Empty password is not allowed.');
            }
            if (\Input::post('password', '') != \Input::post('password_confirmation', '')) {
                throw new Exception('The two passwords don\'t match.');
            }
            $user = new Nos\User\Model_User(array(
                'user_name'      => \Input::post('name', 'Admin name'),
                'user_firstname' => \Input::post('firstname', 'Firstname'),
                'user_email'     => \Input::post('email', ''),
                'user_password'  => \Input::post('password', ''),
                'user_last_connection'  => date('Y-m-d H:i:s'),
                'user_configuration' => serialize(array()),
            ), true);

            $user->save();

            // Authorize available apps
            $role = reset($user->roles);
            foreach (array('noviusos_page', 'noviusos_media', 'noviusos_user', 'noviusos_appmanager', 'noviusos_templates_basic') as $app) {
                $access = Nos\User\Model_Permission::forge();
                $access->perm_role_id      = $role->role_id;
                $access->perm_name         = 'nos::access';
                $access->perm_category_key = $app;
                $access->save();
            }

            File::copy(APPPATH.'config'.DS.'contexts.config.php.sample', APPPATH.'config'.DS.'contexts.config.php');

            header('Location: install.php?step=4');
            exit();

        } catch (\Exception $e) {

            echo '<p class="error">'.$e->getMessage().'</p>';
        }
    }
    ?>
    <h2>Step 3 / 4 : create the first administrator account</h2>
    <p>
        Good, we’re now ready to create your administrator account.
    </p>
    <form action="" method="POST">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" size="20" value="<?= Input::post('name', '') ?>" />
            If you feel shy, the name is not mandatory…
        </p>
        <p>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname" size="20" value="<?= Input::post('firstname', '') ?>" />
            … but please provide a firstname.
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email / Login" size="30" value="<?= Input::post('email', '') ?>" />
            You’ll need it to <strong>login</strong>.
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" />
        </p>
        <p>
            <label for="password_confirmation">Password confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation" />
        </p>
        <p><button type="submit">Proceed to “Step 4: website configuration”</button></p>
    </form>

    <link rel="stylesheet" href="static/novius-os/admin/vendor/jquery/jquery-password_strength/jquery.password_strength.css" media="all" />
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery/jquery-password_strength/jquery.password_strength.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var $password = $('#password');

            // Password strength
            var strength_id = 'password_strength';
            var $strength = $('<span id="' + strength_id + '"></span>');
            $password.after($strength);

            $password.password_strength({
                container : '#' + strength_id,
                texts : {
                    1 : ' <span class="color"></span><span class="box"></span><span class="box"></span><span class="box"></span> <span class="optional">Insufficient</span>',
                    2 : ' <span class="color"></span><span class="color"></span><span class="box"></span><span class="box"></span> <span class="optional">Weak</span>',
                    3 : ' <span class="color"></span><span class="color"></span><span class="color"></span><span class="box"></span> <span class="optional">Average</span>',
                    4 : ' <span class="color"></span><span class="color"></span><span class="color"></span><span class="color"></span> <span class="optional">Strong</span>',
                    5 : ' <span class="color"></span><span class="color"></span><span class="color"></span><span class="color"></span> <span class="optional">Outstanding</span>'
                }
            });
        });
    </script>
    <?php
}

if ($step == 4) {

    $available = array(
        'en_GB' => 'English',
        'fr_FR' => 'Français',
        'ja_JP' => '日本語',
        'de_DE' => 'Deutsch',
        'es_ES' => 'Español',
        'it_IT' => 'Italiano',
    );

    if (!is_file(APPPATH.'config/contexts.config.php')) {
        \File::copy(APPPATH.'config/contexts.config.php.sample', APPPATH.'config/contexts.config.php');
    }

    if (Input::method() == 'POST') {

        try {

            $languages = \Input::post('languages', array());
            if (empty($languages)) {
                throw new Exception('Please choose at least one language.');
            }

            $contexts = array(
                'sites' => array(
                    'main' => array(
                        'title' => 'Main site',
                        'alias' => 'Main',
                    ),
                ),
            );
            $locales = array();
            foreach ($languages as $locale) {
                list($lang, $country) = explode('_', $locale);
                $locales[$locale] = array(
                    'title' => $locale,
                    'flag' => strtolower($country),
                );
                $contexts['locales'][$locale] = array(
                    'title' => isset($available[$locale]) ? $available[$locale] : $locale,
                    'flag' => strtolower($country),
                );
                $contexts['contexts']['main::'.$locale] = array();
            }

            File::update(APPPATH.'config'.DS, 'contexts.config.php', '<?'."php \n\nreturn ".str_replace('  ', "\t", var_export($contexts, true)).";\n");
        } catch (\Exception $e) {
            echo '<p class="error">Error : '.$e->getMessage().'</p>';
        }
        header('Location: install.php?step=4');
        exit();
    }

    $locales = \Nos\Tools_Context::locales();
    ?>
    <h2>Step 4 / 4 : website configuration</h2>

    <h3>Choose your languages</h3>
    <p>
        Novius OS can manage <strong>several websites in several languages</strong> out of the box. You can
        configure the languages of your website below.
    </p>

    <div class="languages_tip">
        Tip: you can re-order languages using drag & drop.
    </div>

    <form action="" method="POST">
        <ul id="languages">
            <?php
            foreach (array_unique(array_merge(array_keys($locales), array_keys($available))) as $locale) {
                $flag = \Nos\Tools_Context::flag('main::'.$locale);
                ?>
                <li>
                    <input type="checkbox" name="languages[]" value="<?= $locale ?>" id="lang_<?= $locale ?>" <?= !empty($locales[$locale]) ? 'checked' : '' ?>>
                    <label for="lang_<?= $locale ?>"><?= $flag ?> <?= $locale ?></label>
                </li>
                <?php
            }
            ?>
            <li>
                <input type="checkbox" name="languages[]" value="" id="your_locale" />
                <label>Your language <input size="5" id="your_locale_input" placeholder="en_GB" />
            </li>
        </ul>

        <p>If you’re a developer, you can edit the <strong>local/config/contexts.config.php</strong> file to configure them later on.</p>

        <p><button type="submit">Save these languages</button> &nbsp; or &nbsp; <a href="install.php?step=5"><button type="button">I finished installing Novius OS</button></a></p>
    </form>

    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery-ui/minified/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery-ui/minified/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery-ui/minified/jquery.ui.mouse.min.js"></script>
    <script type="text/javascript" src="static/novius-os/admin/vendor/jquery-ui/minified/jquery.ui.sortable.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var $languages = $('#languages');
            $languages.sortable();
            $languages.disableSelection();

            $languages.find(':checkbox').on('change', function() {
                $(this).closest('li')[$(this).is(':checked') ? 'addClass' : 'removeClass']('checked');
            }).trigger('change');

            $('#your_locale_input')
                .on('focus', function() {
                    $(this).closest('li').find(':checkbox').prop('checked', true).trigger('change');
                })
                .on('blur', function() {
                    var $this = $(this);
                    var val = $this.val();
                    if (val.length == 2) {
                        val = val.toLowerCase() + '_' + val.toUpperCase();
                    }
                    if (val.length !== 5 || val.substr(2, 1) != '_') {
                        $this.val('').trigger('change');
                        $this.nextAll().remove();
                        return;
                    }
                    $this.val(val).trigger('change');
                    var country = val.split('_');
                    var $img = $('<img src="static/novius-os/admin/novius-os/img/flags/' + country[1].toLowerCase() + '.png" />');
                    $img.on('error', function() {
                        $this.nextAll().remove();
                        $this.val('').trigger('change');
                        $this.after('<span class="error">We could not found this locale</span>');
                    })
                    $this.nextAll().remove();
                    $this.after($img);
                }).on('change', function() {
                    var val = $(this).val();
                    $('#your_locale').val(val);
                    $(this).closest('li').find(':checkbox').prop('checked', val != '').trigger('change');
                });
        });
    </script>

    <?php
}

if ($step == 5) {
    ?>
    <h2>Congratulations!</h2>
    <p>Your now have a fresh Novius OS install to work with.</p>

    <h3>Final cleanup</h3>
    <p>You can now remove write permissions on the <code>local/config/</code> folder (if you changed it in the first step).</p>
    <p>You should also remove or rename this install.php file, you don’t need it anymore.</p>
    <code style="width:800px;">
        rm <?= NOSROOT ?>public/htdocs/install.php
        chmod og-w <?= NOSROOT ?>local/config
    </code>

    <p>
        <a href="admin/?tab=admin/noviusos_appmanager/appmanager"><button>Let's get started</button></a>
    </p>

    <?php
}

?>
</div></div>
<div id="version">Version Chiba 1.0.1 - May 17, 2013 </div>
</body>
</html>
