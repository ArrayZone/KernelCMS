<?php
class contactController extends KWController {
	private function generateForm() {
		// Generate a form to show/validate
		$form = new FormGenerator();
		$form->action = rewriter('','','send');
		$form->addInput(kw::t('Name', 'contact') . ':', 'text', 'name', '', true);
		$form->addInput(kw::t('Surname', 'contact') . ':', 'text', 'surname', '', true);
		$form->addInput(kw::t('Email', 'contact') . ':', 'email', 'email', '', true);
		$form->addTextarea(kw::t('Coment', 'contact') . ':', 'text', '', true);
		$form->addSubmit('Send', kw::t('Send', 'contact'));
		
		
		return $form;
	}
	
	public function indexAction() {
		// Generate the form to show
		$form = $this->generateForm();
		
		// Asignate "form" to be accessible in View
		$this->form = $form;
	}
	
	public function sendAction() {
		// Generate the form to validate
		$form = $this->generateForm();	
		if ($form->validate()) {
			// Sending mail to admin...
			// or whatever you like
			$userData = kw::readConfig('mail');
			if (!Mailer::sendMailSMTP($userData, kw::t('Contact form'), kw::post('text'), array(kw::post('email')), array(), $userData['reciever'])) {
				$this->view = 'error';
			}
		} else {
			$this->view = 'index';
			// Asignate "form" to be accessible in View
			$this->form = $form;
		}
	}
}
?>