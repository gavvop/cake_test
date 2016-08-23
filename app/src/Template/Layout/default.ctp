<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('cake_test.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CakePHP Test!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><?= $this->Html->Link('Home', '/') ?></li>
                <li class="dropdown">
                    <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Users<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->Link('Mostra Users', ['controller' => 'users', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->Link('Aggiungi User', ['controller' => 'users', 'action' => 'add']) ?></li>
                    </ul>
                </li>
                <li><?= $this->Html->Link('About', ['controller' => 'about', 'action' => 'index']) ?></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" role="main">
    <div class="row">
        <div class="col-md-12">
            <?= $this->Flash->render() ?>
        </div>
    </div>
    <?= $this->fetch('content') ?>
</div>

<?= $this->Html->script('jquery.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>

</body>
</html>
