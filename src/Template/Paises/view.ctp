<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paise'), ['action' => 'edit', $paise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paise'), ['action' => 'delete', $paise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paise'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paises view large-9 medium-8 columns content">
    <h3><?= h($paise->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($paise->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paise->id) ?></td>
        </tr>
    </table>
</div>
