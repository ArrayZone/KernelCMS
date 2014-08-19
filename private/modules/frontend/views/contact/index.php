<?php echo '<h1>' , kw::t('Welcome to the contact form', 'contact') , '</h1>';
if ($this->form->errors != '') echo $this->form->errors , '<hr />';
echo $this->form->showForm(); ?>