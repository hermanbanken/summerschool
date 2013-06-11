<?php
abstract class Controller_Website extends Controller_Template {
 
    public $page_title;
		
		public function before()
    {
				// Deal with i18n
				View::set_global('lang', $this->lang());
				
				$this->page_title = __("EWI Summerschool");
				
				parent::before();
 
        // Make $page_title available to all views
        View::bind_global('page_title', $this->page_title);

        View::set_global('container_style', '-narrow');
 
        // Load $sidebar into the template as a view
        $this->template->menu = View::factory('template/menu');
				$this->template->content = new stdClass();
    }
		
		/**
		 * i18n functionality
		 */
		public function lang(){
			// Language
			$l = $this->request->query("lang");
			if($l){
				Session::instance()->set("lang", $l);
			}
			
			$lang = Session::instance()->get(
				"lang", 
				$this->request->headers()->preferred_language(array(
					'en', 'nl'
				))
			);
				
			I18n::lang($lang);
			return $lang;
		}
}