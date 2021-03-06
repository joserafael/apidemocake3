<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacto'), ['action' => 'edit', $contacto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacto'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contactos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paises'), ['controller' => 'Paises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paise'), ['controller' => 'Paises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactos view large-9 medium-8 columns content">
    <h3><?= h($contacto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($contacto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paise') ?></th>
            <td><?= $contacto->has('paise') ? $this->Html->link($contacto->paise->id, ['controller' => 'Paises', 'action' => 'view', $contacto->paise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contacto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contacto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contacto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($contacto->direccion)); ?>
    </div>
</div>
