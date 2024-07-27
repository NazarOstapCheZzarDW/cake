<!-- File: templates/Articles/view.php -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= h($article->created->format(DATE_RFC850)) ?></small></p>
<p><small>Modified: <?= h($article->modified->format(DATE_RFC850)) ?></small></p>
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>

