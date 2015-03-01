<?php
/*
Controller names are set in plural and always ends
with Controller.
 */
class PostsController extends AppController {
	/*
	Helpers are classes used to help writing the views,
	they can format values or print HTML fragments, for example.
	 */
	public $helpers = array('Html', 'Form');

	/*
	Actions are methods that map to user requests.
	The index method is acessed at `www.example.com/posts/index`
	or `www.example.com/posts`.
	*/
	public function index() {
		/*
		The `set` method define variable values to be used in views.

		Note the `$this->Post` property. This is an instance of the Post
		Model, and is automaticaly available because we’ve followed
		CakePHP’s naming conventions.
		*/
		$this->set('posts', $this->Post->find('all'));

		/*
		Note, also, that there's no mention of what view will be used.
		CakePHP automatically loads the appropriate view according
		to the action name. In this case, `/app/views/Posts/index.ctp`
		 */
	}
}
