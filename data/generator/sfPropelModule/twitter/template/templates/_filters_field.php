[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
    [?php $attributes = $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes ?]
    [?php if ($field->getType() == "Boolean"): ?]
        [?php $attributes = $attributes ?]
    [?php elseif (isset($attributes['class'])): ?]
        [?php $attributes['class'] .= " form-control" ?]
    [?php else: ?]
        [?php $attributes['class'] = " form-control" ?]
    [?php endif; ?]

    [?php $attributes['style'] = "width:95%" ?]

  [?php echo $form[$name]->renderError() ?]
  [?php echo $form[$name]->render($attributes) ?]
  [?php if ($help || $help = $form[$name]->renderHelp()): ?]
    <span class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</span>
  [?php endif; ?]
[?php endif; ?]
